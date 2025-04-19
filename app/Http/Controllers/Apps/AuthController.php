<?php

namespace App\Http\Controllers\Apps;

use Illuminate\Http\Request;
use App\Models\ThongTin;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    // Hiển thị form đăng ký
    public function DangKy()
    {
        return view('frontend.pages.dang-ky');
    }

    // Xử lý đăng ký
    public function dang_ky(Request $request)
    {
        $request->validate([
            'ID_CCCD' => 'required|unique:thong_tin,ID_CCCD',
            'HoTen' => 'required|string|max:255',
            'GioiTinh' => 'required|in:1,0',
            'NgaySinh' => 'required|date',
            'Email' => 'required|email',
            'SDT' => 'required|digits:10',
            'TenDN' => 'required|string|unique:tai_khoan,TenDN',
            'MatKhau' => 'required|min:6|confirmed',
        ], [
            'ID_CCCD.unique' => 'Số CCCD này đã được sử dụng. Vui lòng nhập số CCCD khác.',
            'TenDN.unique' => 'Tên đăng nhập đã tồn tại. Vui lòng chọn tên khác.',
        ]);

        // Tạo bản ghi thông tin
        ThongTin::create([
            'ID_CCCD' => $request->ID_CCCD,
            'HoTen' => $request->HoTen,
            'GioiTinh' => $request->GioiTinh,
            'NgaySinh' => $request->NgaySinh,
            'Email' => $request->Email,
            'SDT' => $request->SDT,
        ]);

        // Tạo tài khoản
        TaiKhoan::create([
            'TenDN' => $request->TenDN,
            'MatKhau' => Hash::make($request->MatKhau),
            'TrangThai' => true,
            'ID_CCCD' => $request->ID_CCCD,
        ]);

        return redirect()->route('login.form')->with('success', 'Đăng ký thành công! Mời đăng nhập.');
    }

    // Hiển thị form đăng nhập
    public function DangNhap()
    {
        return view('frontend.pages.dang-nhap');
    }

    // Xử lý đăng nhập
    public function dang_nhap(Request $request)
    {
        $request->validate([
            'TenDN' => 'required|string',
            'MatKhau' => 'required|string',
        ]);

        $user = TaiKhoan::where('TenDN', $request->TenDN)->first();

        if (!$user || !Hash::check($request->MatKhau, $user->MatKhau)) {
            return back()->withErrors(['login' => 'Sai tên đăng nhập hoặc mật khẩu']);
        }      

        // Lưu thông tin vào session
        session([
            'ID_CCCD' => $user->ID_CCCD,
            'VaiTro' => $user->VaiTro,
            'TenDN' => $user->TenDN,
        ]);

        return redirect()->route('home')->with('success', 'Đăng nhập thành công!');
    }

    // Đăng xuất
    public function logout()
    {
        session()->flush();
        return redirect()->route('login.form')->with('success', 'Bạn đã đăng xuất!');
    }
}
