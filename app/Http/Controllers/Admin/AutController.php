<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class AutController extends Controller
{
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

        session([
            'VaiTro' => $user->VaiTro,
            'TenDN' => $user->TenDN,
        ]);

        if (session('VaiTro') >= 1) {
            return view('backend.pages.home')->with('success', 'Đăng nhập thành công!');
        }
        else{
            return back()->withErrors(['login' => 'Bạn không đủ thẩm quyền']);
        }
    }

    // Đăng xuất
    public function logout()
    {
        session()->flush();
        return redirect()->route('login.form')->with('success', 'Bạn đã đăng xuất!');
    }
}
