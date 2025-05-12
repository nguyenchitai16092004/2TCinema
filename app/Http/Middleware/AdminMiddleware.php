<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra xem người dùng đã đăng nhập hay chưa
        if (!Auth::check()) {
            return redirect('/admin')->with('error', 'Bạn cần đăng nhập để truy cập trang quản trị!');
        }
        
        // Kiểm tra vai trò của người dùng
        if (Auth::user()->VaiTro != 1) {
            return redirect('/admin')->with('error', 'Bạn không có quyền truy cập vào trang quản trị!');
        }

        return $next($request);
    }
}