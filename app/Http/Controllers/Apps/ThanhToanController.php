<?php

namespace App\Http\Controllers\Apps;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\SuatChieu;
use App\Models\VeXemPhim;
use App\Models\GheNgoi;
use Illuminate\Support\Facades\DB;
use App\Models\HoaDon;
use Illuminate\Support\Facades\Mail;
use App\Mail\TicketMail;
use App\Http\Controllers\Apps\PayOSController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;

class ThanhToanController extends Controller
{
    /**
     * Xử lý thanh toán vé xem phim
     */
    public function payment(Request $request)
    {
        Log::info($request->all());
        try {
            // Validate dữ liệu đầu vào (KHÔNG CẦN totalPrice từ client)
            try {
                $validated = $request->validate([
                    'ten_khach_hang' => 'required|string|max:255',
                    'email' => 'required|email|max:255',
                    'ID_SuatChieu' => 'required|integer|exists:suat_chieu,ID_SuatChieu',
                    'selectedSeats' => 'required|string',
                    'paymentMethod' => 'required|in:COD,PAYOS'
                ]);
            } catch (ValidationException $e) {
                if ($request->ajax() || $request->wantsJson()) {
                    return response()->json([
                        'error' => $e->validator->errors()->first()
                    ], 422);
                }
                throw $e;
            }

            // Kiểm tra đăng nhập
            if (!session()->has('user_id')) {
                if ($request->ajax() || $request->wantsJson()) {
                    return response()->json(['error' => 'Vui lòng đăng nhập để đặt vé!'], 401);
                }
                return redirect()->route('login.form')->with('error', 'Vui lòng đăng nhập để đặt vé!');
            }

            // Parse selected seats
            $selectedSeats = array_filter(explode(',', $request->input('selectedSeats')));
            if (empty($selectedSeats)) {
                if ($request->ajax() || $request->wantsJson()) {
                    return response()->json(['error' => 'Vui lòng chọn ít nhất một ghế!'], 400);
                }
                return redirect()->back()->with('error', 'Vui lòng chọn ít nhất một ghế!');
            }

            // Lấy thông tin suất chiếu
            $suatChieu = SuatChieu::with(['phim', 'rap', 'phongChieu'])
                ->findOrFail($request->ID_SuatChieu);

            // Kiểm tra ghế còn trống
            $bookedSeats = VeXemPhim::where('ID_SuatChieu', $suatChieu->ID_SuatChieu)
                ->whereIn('TenGhe', $selectedSeats)
                ->where('TrangThai', '!=', 0)
                ->pluck('TenGhe')
                ->toArray();

            if (!empty($bookedSeats)) {
                $message = 'Một số ghế đã được đặt: ' . implode(', ', $bookedSeats);
                if ($request->ajax() || $request->wantsJson()) {
                    return response()->json(['error' => $message], 409);
                }
                return redirect()->back()->with('error', $message);
            }

            // Lấy thông tin ghế để tính giá
            $gheNgoi = GheNgoi::where('ID_PhongChieu', $suatChieu->ID_PhongChieu)
                ->whereIn('TenGhe', $selectedSeats)
                ->get();

            // Tính tổng tiền và chi tiết ghế (lưu ý ghế VIP)
            $calculatedTotal = 0;
            $seatDetails = [];
            foreach ($selectedSeats as $seatName) {
                $seat = $gheNgoi->firstWhere('TenGhe', $seatName);
                if ($seat) {
                    $giaVe = $suatChieu->GiaVe;
                    if ($seat->LoaiTrangThaiGhe == 2) {
                        // Phụ phí VIP: +20% giá vé gốc
                        $giaVe += $giaVe * 0.2;
                    }
                    $calculatedTotal += $giaVe;
                    $seatDetails[] = [
                        'ID_Ghe' => $seat->ID_Ghe,
                        'TenGhe' => $seatName,
                        'LoaiGhe' => $seat->LoaiTrangThaiGhe == 2 ? 'VIP' : 'Thường',
                        'GiaVe'  => $giaVe,
                    ];
                }
            }

            // Chuẩn bị dữ liệu đơn hàng
            $orderData = [
                'ten_khach_hang' => $validated['ten_khach_hang'],
                'email'          => $validated['email'],
                'ID_SuatChieu'   => $validated['ID_SuatChieu'],
                'selectedSeats'  => $selectedSeats,
                'seatDetails'    => $seatDetails,
                'tong_tien'      => $calculatedTotal,
                'ten_phim'       => $suatChieu->phim->TenPhim,
                'ngay_xem'       => $suatChieu->NgayChieu,
                'gio_xem'        => $suatChieu->GioChieu,
                'ten_rap'        => $suatChieu->rap->TenRap,
                'ten_phong'      => $suatChieu->phongChieu->TenPhongChieu,
            ];

            // Xử lý theo phương thức thanh toán
            if ($request->paymentMethod === 'COD') {
                return $this->processCODTicket($orderData);
            }

            if ($request->paymentMethod === 'PAYOS') {
                $payosController = app()->make(PayOSController::class);
                $response = $payosController->createPaymentLink($orderData);
                if ($response instanceof RedirectResponse) {
                    if ($request->ajax() || $request->wantsJson()) {
                        return response()->json(['error' => 'Thiếu thông tin đơn hàng!'], 400);
                    }
                    return $response;
                }
                return $response;
            }

            $message = 'Phương thức thanh toán không hợp lệ.';
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json(['error' => $message], 400);
            }
            return redirect()->back()->with('error', $message);
        } catch (\Exception $e) {
            Log::error('Error in payment: ' . $e->getMessage());
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json(['error' => 'Có lỗi xảy ra, vui lòng thử lại!'], 500);
            }
            return redirect()->back()->with('error', 'Có lỗi xảy ra, vui lòng thử lại!');
        }
    }

    /**
     * Xử lý thanh toán COD cho vé xem phim
     */
    private function processCODTicket($orderData)
    {
        try {
            DB::beginTransaction();

            $maHoaDon = HoaDon::generateMaHoaDon();

            $hoaDon = HoaDon::create([
                'ID_HoaDon' => $maHoaDon,
                'TongTien' => $orderData['tong_tien'],
                'PTTT' => 'COD',
                'ID_TaiKhoan' => session('user_id'),
                'TrangThaiXacNhanHoaDon' => 0,
                'TrangThaiXacNhanThanhToan' => 0,
            ]);

            foreach ($orderData['seatDetails'] as $seatDetail) {
                VeXemPhim::create([
                    'SoLuong' => 1,
                    'TenGhe' => $seatDetail['TenGhe'],
                    'TenPhim' => $orderData['ten_phim'],
                    'NgayXem' => $orderData['ngay_xem'],
                    'DiaChi' => $orderData['ten_rap'] . ' - ' . $orderData['ten_phong'],
                    'GiaVe' => $seatDetail['GiaVe'],
                    'TrangThai' => 0,
                    'ID_SuatChieu' => $orderData['ID_SuatChieu'],
                    'ID_HoaDon' => $maHoaDon,
                    'ID_Ghe' => $seatDetail['ID_Ghe'],
                ]);
            }

            DB::commit();

            return redirect()->route('checkout_status', [
                'status' => 'success',
                'maHoaDon' => $hoaDon->ID_HoaDon
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error processing COD ticket: ' . $e->getMessage());
            throw $e;
        }
    }

    public function sendEmailForOrder($hoaDon, $veXemPhims)
    {
        // Đảm bảo $veXemPhims là collection hoặc mảng
        if (is_string($veXemPhims)) {
            // Nếu $veXemPhims là ID_HoaDon, lấy vé từ DB
            $veXemPhims = VeXemPhim::where('ID_HoaDon', $veXemPhims)->get();
        } elseif (is_array($veXemPhims)) {
            $veXemPhims = collect($veXemPhims);
        }

        $firstVe = $veXemPhims->first();
        if (!$firstVe) {
            Log::warning('Không tìm thấy vé xem phim để gửi email');
            return;
        }

        $suatChieu = SuatChieu::with(['rap', 'phongChieu'])->find($firstVe->ID_SuatChieu);
        $diaChiRap = $suatChieu && $suatChieu->rap ? $suatChieu->rap->DiaChi : '';
        $tenPhim = $firstVe->TenPhim ?? '';
        $ngayXem = $firstVe->NgayXem ?? '';
        $gioChieu = $suatChieu ? $suatChieu->GioChieu : '';
        $phong = $suatChieu && $suatChieu->phongChieu ? $suatChieu->phongChieu->TenPhongChieu : '';
        $email = session('user_email');;
        $tenKhachHang = session('user_fullname');
        Log::info('Email chuẩn bị gửi:', ['email' => $email, 'hoaDonId' => $hoaDon->ID_HoaDon]);

        if (empty($email)) {
            Log::error('Không xác định được email khách hàng để gửi hóa đơn', ['hoaDonId' => $hoaDon->ID_HoaDon]);
            return;
        }

        try {
            $data = [
                'ten_khach_hang' => $tenKhachHang,
                'ma_hoa_don' => $hoaDon->ID_HoaDon,
                'tong_tien'         => $hoaDon->TongTien,
                'hinh_thuc_thanh_toan' => $hoaDon->PTTT,
                'email'             => $email,
                'danh_sach_ghe'     => $veXemPhims->pluck('TenGhe')->toArray(),
                'ten_phim'          => $tenPhim,
                'ngay_chieu'        => $ngayXem,
                'gio_chieu'         => $gioChieu,
                'phong'             => $phong,
                'dia_chi'           => $diaChiRap,
                'thoi_gian_dat'     => $hoaDon->created_at ? $hoaDon->created_at->format('d/m/Y H:i') : '',
                'trang_thai'        => $hoaDon->TrangThaiXacNhanThanhToan == 1 ? 'Đã thanh toán' : 'Chưa thanh toán',
                'ghe'               => implode(',', $veXemPhims->pluck('TenGhe')->toArray()),
                'gia_ve'            => $hoaDon->TongTien,
            ];

            Mail::to($email)->send(new TicketMail((array)$data));
        } catch (\Exception $e) {
            Log::error('Gửi mail vé xem phim thất bại: ' . $e->getMessage());
        }
    }
    public function checkoutStatus(Request $request)
    {
        $status = session('status', $request->input('status', null));
        $maHoaDon = session('maHoaDon', $request->input('maHoaDon', null));
        $hoaDon = null;
        $suatChieu = null;
        $selectedSeats = [];

        if ($maHoaDon) {
            $hoaDon = HoaDon::where('ID_HoaDon', $maHoaDon)->first();
            if ($hoaDon) {
                $veList = VeXemPhim::where('ID_HoaDon', $hoaDon->ID_HoaDon)->get();
                $selectedSeats = $veList->pluck('TenGhe')->toArray();
                $suatChieu = SuatChieu::with(['phim', 'rap', 'phongChieu'])->find($veList->first()->ID_SuatChieu ?? null);
            }
        }

        $viewData = [
            'title' => 'Trạng thái thanh toán',
            'hoaDon' => $hoaDon,
            'suatChieu' => $suatChieu,
            'selectedSeats' => $selectedSeats,
            'error_message' => session('error_message', null),
        ];

        return view('frontend.pages.kiem-tra-thanh-toan', $viewData)->with('status', $status);
    }
}