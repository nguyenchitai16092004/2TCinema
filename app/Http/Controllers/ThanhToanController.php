<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\SuatChieu;
use App\Models\VeXemPhim;
use App\Models\GheNgoi;
use Illuminate\Support\Facades\DB;
use App\Models\HoaDon;
use Illuminate\Support\Facades\Mail;
use App\Mail\TicketMail;
use App\Http\Controllers\PayOSController;
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
            // Validate dữ liệu đầu vào
            try {
                $validated = $request->validate([
                    'ten_khach_hang' => 'required|string|max:255',
                    'email' => 'required|email|max:255',
                    'ID_SuatChieu' => 'required|integer|exists:suat_chieu,ID_SuatChieu',
                    'selectedSeats' => 'required|string',
                    'totalPrice' => 'required|numeric|min:0',
                    'paymentMethod' => 'required|in:COD,PAYOS'
                ]);
            } catch (ValidationException $e) {
                // Trả về lỗi JSON nếu là AJAX
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
                ->where('TrangThai', '!=', 0) // Không tính ghế đã hủy
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

            // Tính tổng tiền và chi tiết ghế
            $calculatedTotal = 0;
            $seatDetails = [];
            foreach ($selectedSeats as $seatName) {
                $seat = $gheNgoi->firstWhere('TenGhe', $seatName);
                if ($seat) {
                    $giaVe = $suatChieu->GiaVe;
                    // Thêm phụ phí VIP nếu có
                    if ($seat->LoaiTrangThaiGhe == 2) {
                        $giaVe += 20000;
                    }
                    $calculatedTotal += $giaVe;
                    $seatDetails[] = [
                        'ID_Ghe' => $seat->ID_Ghe,
                        'TenGhe' => $seatName,
                        'GiaVe'  => $giaVe
                    ];
                }
            }

            // Kiểm tra tổng tiền
            if (abs($calculatedTotal - $request->totalPrice) > 1000) {
                $message = 'Tổng tiền không khớp, vui lòng thử lại!';
                if ($request->ajax() || $request->wantsJson()) {
                    return response()->json(['error' => $message], 400);
                }
                return redirect()->back()->with('error', $message);
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
                // Nếu createPaymentLink trả về redirect()->back() (validate lỗi), thì trả về JSON lỗi cho fetch
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

            // Tạo mã hóa đơn
            $maHoaDon = HoaDon::generateMaHoaDon();

            // Tạo hóa đơn
            $hoaDon = HoaDon::create([
                'ID_HoaDon' => $maHoaDon,
                'NgayTao' => now(),
                'TongTien' => $orderData['tong_tien'],
                'PTTT' => 'COD',
                'ID_TaiKhoan' => session('user_id'),
                'TrangThaiXacNhanHoaDon' => 0, // Chờ xác nhận
                'TrangThaiXacNhanThanhToan' => 0, // Chờ thanh toán
            ]);

            // Tạo vé cho từng ghế
            foreach ($orderData['seatDetails'] as $seatDetail) {
                VeXemPhim::create([
                    'SoLuong' => 1,
                    'TenGhe' => $seatDetail['TenGhe'],
                    'TenPhim' => $orderData['ten_phim'],
                    'NgayXem' => $orderData['ngay_xem'],
                    'DiaChi' => $orderData['ten_rap'] . ' - ' . $orderData['ten_phong'],
                    'GiaVe' => $seatDetail['GiaVe'],
                    'TrangThai' => 0, // Khách hàng chưa nhận vé
                    'ID_SuatChieu' => $orderData['ID_SuatChieu'],
                    'ID_HoaDon' => $maHoaDon,
                    'ID_Ghe' => $seatDetail['ID_Ghe'],
                ]);
            }

            DB::commit();

            // Gửi email xác nhận (nếu có)
            // $this->sendTicketEmail($orderData, $maHoaDon);

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

        $suatChieu = SuatChieu::with('rap')->find($firstVe->ID_SuatChieu);
        $diaChiRap = $suatChieu && $suatChieu->rap ? $suatChieu->rap->DiaChi : '';
        try {
            $data = [
                'order_id'        => $hoaDon->ID_HoaDon,
                'ngay_tao'        => $hoaDon->NgayTao,
                'tong_tien'       => $hoaDon->TongTien,
                'pttt'            => $hoaDon->PTTT,
                'ten_khach_hang'  => session('user_fullname') ?? '',
                'danh_sach_ghe'   => $veXemPhims->pluck('TenGhe')->toArray(),
                'ten_phim'        => $firstVe->TenPhim ?? '',
                'ngay_xem'        => $firstVe->NgayXem ?? '',
                'dia_chi'         => $diaChiRap,
            ];
            $email = session('Email');
            Mail::to($email)->send(new TicketMail((object)$data));
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