<?php

namespace App\Http\Controllers\Apps;

use App\Models\Phim;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhimController extends Controller
{
    public function index()
    {
        $dsPhimDangChieu = Phim::where('TrangThai', '1')->get();
        $dsPhimSapChieu = Phim::where('TrangThai', '0')->get();

        $dsPhim = Phim::all();
        return view('frontend.pages.home', compact('dsPhim', 'dsPhimDangChieu', 'dsPhimSapChieu'));
    }

    public function chiTiet($id)
    {
        $phim = Phim::findOrFail($id);
        return view('frontend.pages.chi-tiet-phim', compact('phim'));
    }
}