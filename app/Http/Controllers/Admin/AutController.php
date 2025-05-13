<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class AutController extends Controller
{
    // Xử lý đăng nhập
    public function dang_nhap(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'TenDN' => 'required',
            'MatKhau' => 'required',
        ], [
            'TenDN.required' => 'Tên đăng nhập không được để trống',
            'MatKhau.required' => 'Mật khẩu không được để trống',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Hạn chế số lần đăng nhập sai
        if (session('login_attempts', 0) >= 5) {
            if (time() - session('last_attempt', 0) < 1800) { // 30 phút
                return redirect()->back()->with('error', 'Quá nhiều lần đăng nhập sai. Vui lòng thử lại sau 30 phút.');
            }
            session(['login_attempts' => 0]);
        }

        // Sử dụng tên cột phù hợp với bảng tai_khoan
        $credentials = [
            'TenDN' => $request->TenDN,
            'password' => $request->MatKhau,
        ];

        if (Auth::attempt($credentials)) {
            if (Auth::user()->VaiTro == 1) { // 1 = Admin
                if (!Auth::user()->TrangThai) {
                    Auth::logout();
                    return redirect()->back()->with('error', 'Tài khoản đã bị vô hiệu hóa!');
                }

                // Reset số lần đăng nhập sai
                session(['login_attempts' => 0]);

                return view('backend.pages.home')->with('success', 'Đăng nhập thành công!');
            } else {
                Auth::logout();
                return redirect()->back()->with('error', 'Bạn không có quyền truy cập vào trang quản trị!');
            }
        }

        // Tăng số lần đăng nhập sai
        session(['login_attempts' => session('login_attempts', 0) + 1]);
        session(['last_attempt' => time()]);

        return redirect()->back()->with('error', 'Tên đăng nhập hoặc mật khẩu không chính xác!');
    }

    // Đăng xuất
    public function dang_xuat()
    {
        Auth::logout();
        return redirect('/admin')->with('success', 'Đăng xuất thành công!');
    }
}
