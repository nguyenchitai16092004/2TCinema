<?php

namespace App\Http\Controllers\Apps;

use App\Models\Phim;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhimController extends Controller
{
    public function index()
    {
        $currentMonth = \Carbon\Carbon::now()->month; // Lấy tháng hiện tại
        $currentYear = \Carbon\Carbon::now()->year;  // Lấy năm hiện tại

        // Lấy danh sách phim đang chiếu
        $dsPhimDangChieu = Phim::where('TrangThai', '1')->get();

        // Lấy danh sách phim sắp chiếu
        $dsPhimSapChieu = Phim::where('TrangThai', '0')->get();

        // Lấy danh sách phim theo tháng và năm hiện tại
        $dsPhimTheoThang = Phim::whereMonth('NgayKhoiChieu', $currentMonth)
            ->whereYear('NgayKhoiChieu', $currentYear)
            ->get();

        // Trả về view với dữ liệu
        return view('frontend.pages.home', compact('dsPhimDangChieu', 'dsPhimSapChieu', 'dsPhimTheoThang'));
    }

    public function chiTiet($id)
    {
        $phim = Phim::findOrFail($id);
        $suatChieu = $phim->suatChieu()
            ->with('rap')
            ->get()
            ->groupBy(function ($item) {
                return $item->NgayChieu . '|' . $item->rap->DiaChi; // Nhóm theo NgayChieu và DiaChi
            });

        return view('frontend.pages.chi-tiet-phim', compact('phim', 'suatChieu'));
    }
}