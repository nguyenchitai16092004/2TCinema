<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuatChieu;

class DatVeController extends Controller
{
    public function show($id)
    {
        $suatChieu = SuatChieu::with(['phim', 'rap'])->findOrFail($id);

        $suatChieuCungNgay = SuatChieu::where('NgayChieu', $suatChieu->NgayChieu)
            ->where('ID_Rap', $suatChieu->ID_Rap)
            ->where('ID_Phim', $suatChieu->ID_Phim)
            ->orderBy('GioChieu', 'asc') // Sắp xếp theo giờ chiếu
            ->get();

        return view('frontend.pages.dat-ve', compact('suatChieu', 'suatChieuCungNgay'));
    }
    public function thanhToan(Request $request)
    {
        // Lấy danh sách ghế đã chọn
        $selectedSeats = explode(',', $request->input('selectedSeats'));

        // Lấy thông tin suất chiếu
        $suatChieu = SuatChieu::with(['phim', 'rap'])->findOrFail($request->input('suatChieuId'));

        // Trả về view thanh toán với dữ liệu
        return view('frontend.pages.thanh-toan', compact('selectedSeats', 'suatChieu'));
    }
    /*
    public function checkSeat(Request $request)
    {
        $seat = $request->input('seat');
        $suatChieuId = $request->input('suatChieuId');

        // Kiểm tra trạng thái ghế trong cơ sở dữ liệu
        $isAvailable = !DB::table('ve')
            ->where('ID_SuatChieu', $suatChieuId)
            ->where('Ghe', $seat)
            ->exists();

        return response()->json([
            'available' => $isAvailable
        ]);
    }
    */
    
}