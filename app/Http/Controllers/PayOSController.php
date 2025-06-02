<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayOS\PayOS;
use App\Models\HoaDon;
use App\Models\VeXemPhim;
use TJGazel\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\ThanhToanController;
use App\Models\SuatChieu;


class PayOSController extends Controller
{
    protected $payOS;
    protected $webhookUrl;

    public function __construct()
    {
        $this->payOS = new PayOS(
            env('PAYOS_CLIENT_ID'),
            env('PAYOS_API_KEY'),
            env('PAYOS_CHECKSUM_KEY')
        );

        $this->webhookUrl = env('WEBHOOK_URL');
    }
    /**
     * Tạo link thanh toán cho đơn hàng
     * @param array $orderData
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createPaymentLink(array $orderData)
    {
        // Validate dữ liệu đầu vào
        if (
            empty($orderData['tong_tien']) ||
            empty($orderData['ten_khach_hang']) ||
            empty($orderData['email']) ||
            empty($orderData['ID_SuatChieu']) ||
            empty($orderData['selectedSeats']) ||
            !is_array($orderData['selectedSeats'])
        ) {
            return response()->json(['error' => 'Thiếu thông tin đơn hàng!'], 400);
        }



        // Tạo hóa đơn
        $hoaDon = HoaDon::create([
            'NgayTao'      => now(),
            'TongTien'     => $orderData['tong_tien'],
            'PTTT'         => 'PayOS',
            'ID_TaiKhoan'  => session('user_id'),
            'TrangThaiXacNhanHoaDon'    => 0,
            'TrangThaiXacNhanThanhToan'    => 0,
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);
        $maHoaDon = $hoaDon->ID_HoaDon;
        $orderCodeNum = (int)$maHoaDon;
        $soLuongGhe = count($orderData['selectedSeats']);

        $suatChieu = SuatChieu::with(['rap'])->find($orderData['ID_SuatChieu']);
        $diaChiRap = $suatChieu->rap->DiaChi ?? '';
        foreach ($orderData['seatDetails'] as $seat) {
            VeXemPhim::create([
                'SoLuong'      => 1,
                'TenGhe'       => $seat['TenGhe'],
                'TenPhim'      => $orderData['ten_phim'] ?? '',
                'NgayXem'      => $orderData['ngay_xem'] ?? '',
                'DiaChi' => $diaChiRap,
                'GiaVe'        => $seat['GiaVe'],
                'TrangThai'    => 0,
                'ID_SuatChieu' => $orderData['ID_SuatChieu'],
                'ID_HoaDon'    => $maHoaDon,
                'ID_Ghe'       => $seat['ID_Ghe'],
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
        }

        $items = array_map(function ($ghe) use ($orderData) {
            $seat = collect($orderData['seatDetails'])->firstWhere('TenGhe', $ghe);
            $price = isset($seat['GiaVe']) ? (int)$seat['GiaVe'] : 0;
            // Kiểm tra vượt quá giới hạn PayOS cho chắc chắn
            if ($price > 10000000000) {
                $price = 10000000000;
            }
            return [
                'name'     => 'Vé ' . ($orderData['ten_phim'] ?? '') . ' - Ghế ' . $ghe,
                'quantity' => 1,
                'price'    => $price,
            ];
        }, $orderData['selectedSeats']);
        Log::info('PayOS items:', $items);
        // Lấy số nguyên từ mã hóa đơn làm orderCode
        preg_match_all('!\d+!', $maHoaDon, $matches);
        $orderCodeNum = $matches ? (int)implode('', $matches[0]) : time();
        try {
            $response = $this->payOS->createPaymentLink([
                'orderCode'   => $orderCodeNum,
                'amount'      => (int) $hoaDon->TongTien,
                'description' => substr("Thanh toán vé xem phim", 0, 255),
                'returnUrl'   => route('payos.return'),
                'cancelUrl'   => route('payos.cancel'),
                'buyerName'   => session('user_fullname') ?? '',
                'buyerEmail'  => session('user_email') ?? '',
               // 'buyerPhone'  => $hoaDon->ID_TaiKhoan,
                'items'       => $items,
                'expiredAt'   => now()->addMinutes(15)->timestamp,
            ]);
            HoaDon::where('ID_HoaDon', $maHoaDon)->update([
                'payment_link' => $response['checkoutUrl'] ?? null,
                'order_code'   => $orderCodeNum
            ]);
            if (empty($response['checkoutUrl'])) {
                // Log để kiểm tra response thực tế của PayOS
                Log::error('PayOS không trả về checkoutUrl', $response);
                return response()->json(['error' => 'Không lấy được link thanh toán từ PayOS!'], 500);
            }
            return response()->json([
                'checkoutUrl' => $response['checkoutUrl'],
                'orderCode' => $orderCodeNum,
            ]);
        } catch (\Exception $e) {
            Log::error('Tạo yêu cầu thanh toán thất bại: ' . $e->getMessage());
            return response()->json(['error' => 'Tạo yêu cầu thanh toán thất bại: ' . $e->getMessage()], 500);
        }
    }
    /**
     * Lấy thông tin link thanh toán
     * @param int|string $orderCode
     * @return array|null
     */
    public function getPaymentLinkInformation($orderCode)
    {
        try {
            $info = $this->payOS->getPaymentLinkInformation($orderCode);

            if (!isset($info['status']) || !isset($info['checkoutUrl'])) {
                Log::warning("Thiếu dữ liệu trong getPaymentLinkInformation cho orderCode: $orderCode", $info);
            }

            return $info;
        } catch (\Exception $e) {
            Log::error('PayOS getPaymentLinkInformation Error (orderCode: ' . $orderCode . '): ' . $e->getMessage());
            return null;
        }
    }
    public function checkPaymentStatus($orderCode)
    {
        $paymentInfo = $this->getPaymentLinkInformation($orderCode);

        if (!$paymentInfo) {
            return response()->json([
                'error' => 'Không lấy được thông tin thanh toán'
            ], 404);
        }

        switch ($paymentInfo['status']) {
            case 'PAID':
                $this->updatePaymentSuccess($orderCode);
                return response()->json([
                    'message' => 'Thanh toán thành công',
                    'data' => $paymentInfo
                ]);

            case 'CANCELLED':
                $this->updatePaymentCancel($orderCode);
                return response()->json([
                    'message' => 'Thanh toán đã bị hủy',
                    'data' => $paymentInfo
                ]);

            default:
                return response()->json([
                    'message' => 'Thanh toán chưa hoàn thành',
                    'data' => $paymentInfo
                ]);
        }
    }
    // Các method xử lý callback, trả về từ PayOS
    public function handleReturn(Request $request)
    {
        $orderCode = $request->input('orderCode');

        if ($orderCode) {
            $paymentInfo = $this->getPaymentLinkInformation($orderCode);
            if ($paymentInfo && $paymentInfo['status'] === 'PAID') {
                $this->updatePaymentSuccess($orderCode);
            }

            // Lấy lại hóa đơn từ DB theo order_code
            $hoaDon = HoaDon::where('order_code', $orderCode)->first();
            $maHoaDon = $hoaDon ? $hoaDon->ID_HoaDon : null;

            return redirect()->route('checkout_status')
                ->with('status', 'success')
                ->with('maHoaDon', $maHoaDon);
        }

        // Nếu không có orderCode, vẫn redirect nhưng không có mã hóa đơn
        return redirect()->route('checkout_status')
            ->with('status', 'fail')
            ->with('error_message', 'Không tìm thấy mã hóa đơn thanh toán!');
    }

    protected function updatePaymentSuccess($orderCode)
    {
        $maHoaDon = $orderCode;
        $hoaDon = HoaDon::where('order_code', $orderCode)->first();

        // Lấy tất cả vé thuộc hóa đơn này
        $veXemPhims = VeXemPhim::where('ID_HoaDon', $maHoaDon)->get();

        if ($hoaDon && $hoaDon->TrangThaiXacNhanThanhToan != 1) {
            $hoaDon->TrangThaiXacNhanThanhToan = 1; // Đã thanh toán
            $hoaDon->TrangThaiXacNhanHoaDon = 1;    // Đã xác nhận
            $hoaDon->save();

            // Gửi email cho từng vé (hoặc gộp thông tin nếu muốn)
            $sendEmail = new ThanhToanController();
            $statusPayment = 'Đã thanh toán';
            $status = 'Đã xác nhận';

            foreach ($veXemPhims as $ve) {
                $sendEmail->sendEmailForOrder(
                    $hoaDon->ID_HoaDon,
                    $hoaDon->NgayTao,
                    $hoaDon->TongTien,
                    $hoaDon->PTTT,
                    session('HoTen') ?? '',
                    $ve->SoLuong,
                    $ve->TenGhe,
                    $ve->TenPhim,
                    $ve->NgayXem,
                    $ve->DiaChi,
                    $ve->GiaVe
                );
            }
        }
    }
    public function handleCancel(Request $request)
    {
        $orderCode = $request->input('orderCode');

        if ($orderCode) {
            $paymentInfo = $this->getPaymentLinkInformation($orderCode);
            if ($paymentInfo && $paymentInfo['status'] === 'CANCELLED') {
                $this->updatePaymentCancel($orderCode);
            }
            // Lấy lại hóa đơn từ DB theo order_code
            $hoaDon = HoaDon::where('order_code', $orderCode)->first();
            $maHoaDon = $hoaDon ? $hoaDon->ID_HoaDon : null;

            return redirect()->route('checkout_status')
                ->with('status', 'cancel')
                ->with('maHoaDon', $maHoaDon)
                ->with('error_message', 'Giao dịch đã bị hủy.');
        }

        return redirect()->route('checkout_status')
            ->with('status', 'cancel')
            ->with('error_message', 'Không tìm thấy mã hóa đơn thanh toán!');
    }
    protected function updatePaymentCancel($orderCode)
    {
        $maHoaDon = $orderCode;

        $hoaDon = HoaDon::where('ID_HoaDon', $maHoaDon)->first();
        if (!$hoaDon) return;

        // Update trạng thái hóa đơn
        $hoaDon->TrangThaiXacNhanThanhToan = 0; // Chờ thanh toán
        $hoaDon->TrangThaiXacNhanHoaDon = 2;    // Đã hủy 
        $hoaDon->save();

        // Update trạng thái vé (nếu muốn)
        VeXemPhim::where('ID_HoaDon', $maHoaDon)->update([
            'TrangThai' => 2 // Đã hủy
        ]);
    }
}