<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HoaDon;
use App\Models\VeXemPhim;
use Illuminate\Support\Facades\DB;
class ThanhToanController extends Controller
{
    public function thanhToanMomo(Request $request)
    {
        session([
            'selectedSeats' => $request->input('selectedSeats', []),
            'TenPhim' => $request->input('TenPhim'),
            'NgayXem' => $request->input('NgayXem'),
            'DiaChi' => $request->input('DiaChi'),
            'GiaVe' => $request->input('GiaVe'),
            'ID_SuatChieu' => $request->input('ID_SuatChieu'),
        ]);
        // Lấy thông tin đơn hàng từ request
        $amount = $request->TongTien;
        $orderId = uniqid(); // Mã đơn hàng duy nhất
        $redirectUrl = route('thanh-toan.momo.callback');
        $ipnUrl = route('thanh-toan.momo.callback');

        // Cấu hình MoMo
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';

        $orderInfo = "Thanh toán vé xem phim CineTick";
        $requestId = time() . "";
        $extraData = ""; // Nếu cần

        // Tạo chữ ký
        $rawHash = "accessKey=$accessKey&amount=$amount&extraData=$extraData&ipnUrl=$ipnUrl&orderId=$orderId&orderInfo=$orderInfo&partnerCode=$partnerCode&redirectUrl=$redirectUrl&requestId=$requestId&requestType=captureWallet";
        $signature = hash_hmac("sha256", $rawHash, $secretKey);

        $data = [
            'partnerCode' => $partnerCode,
            'accessKey' => $accessKey,
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'extraData' => $extraData,
            'requestType' => 'captureWallet',
            'signature' => $signature
        ];

        $result = $this->execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);

        // Chuyển hướng sang trang thanh toán MoMo
        return redirect($jsonResult['payUrl']);
    }

    public function momoCallback(Request $request)
    {
        if ($request->resultCode == 0) {
            DB::beginTransaction();
            try {
                $hoaDon = HoaDon::create([
                    'NgayTao' => now(),
                    'TongTien' => $request->amount,
                    'PTTT' => 'MoMo',
                    'ID_TaiKhoan' => session('user_id'),
                ]);
                foreach (session('selectedSeats', []) as $seat) {
                    VeXemPhim::create([
                        'SoLuong' => 1,
                        'TenPhim' => session('TenPhim'),
                        'NgayXem' => session('NgayXem'),
                        'DiaChi' => session('DiaChi'),
                        'GiaVe' => session('GiaVe'),
                        'TrangThai' => 'Đã thanh toán',
                        'ID_SuatChieu' => session('ID_SuatChieu'),
                        'ID_HoaDon' => $hoaDon->ID_HoaDon,
                        'ID_Ghe' => $seat,
                    ]);
                }
                DB::commit();
                return redirect()->route('dat-ve.thanh-cong')->with('success', 'Thanh toán thành công!');
            } catch (\Exception $e) {
                DB::rollBack();
                return redirect()->route('dat-ve.thanh-toan')->with('error', 'Có lỗi khi lưu dữ liệu!');
            }
        } else {
            return redirect()->route('dat-ve.thanh-toan')->with('error', 'Thanh toán không thành công!');
        }
    }

    private function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data)
        ]);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
    public function thanhToanZaloPay(Request $request)
    {
        session([
            'selectedSeats' => $request->input('selectedSeats', []),
            'TenPhim' => $request->input('TenPhim'),
            'NgayXem' => $request->input('NgayXem'),
            'DiaChi' => $request->input('DiaChi'),
            'GiaVe' => $request->input('GiaVe'),
            'ID_SuatChieu' => $request->input('ID_SuatChieu'),
        ]);

        $app_id = '2553'; 
        $key1 = 'sandbox_key1';
        $endpoint = 'https://sb-openapi.zalopay.vn/v2/create';

        $amount = $request->TongTien;
        $transID = rand(1000000, 9999999);
        $order = [
            "app_id"       => $app_id,
            "app_trans_id" => date("ymd") . "_" . $transID,
            "app_user"     => "user_" . session('user_id'),
            "amount"       => $amount,
            "app_time"     => round(microtime(true) * 1000),
            "item"         => "[]",
            "description"  => "Thanh toán vé xem phim CineTick",
            "bank_code"    => "",
            "callback_url" => route('thanh-toan.zalopay.callback'),
        ];

        $data = $order["app_id"] . "|" . $order["app_trans_id"] . "|" . $order["app_user"] . "|" . $order["amount"] . "|" . $order["app_time"] . "|" . $order["item"];
        $order["mac"] = hash_hmac("sha256", $data, $key1);

        $response = $this->execPostRequest($endpoint, json_encode($order));
        $result = json_decode($response, true);

        if (isset($result['order_url'])) {
            return redirect($result['order_url']);
        } else {
            return redirect()->route('dat-ve.thanh-toan')->with('error', 'Lỗi ZaloPay: ' . ($result['return_message'] ?? json_encode($result)));
        }

        return redirect($result['order_url']);
    }

    public function zalopayCallback(Request $request)
    {
        if ($request->status == 1) {
            return redirect()->route('dat-ve.thanh-cong')->with('success', 'Thanh toán thành công!');
        } else {
            return redirect()->route('dat-ve.thanh-toan')->with('error', 'Thanh toán không thành công!');
        }
    }
}