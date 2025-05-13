<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AutController;
use App\Http\Controllers\Admin\RapController;

use App\Http\Controllers\Apps\PhimController;
use App\Http\Controllers\Apps\AuthController;
use App\Http\Controllers\Apps\DatVeController;

//==============================Frontend=====================================//
Route::get('/', [PhimController::class, 'Index'])->name('home');

Route::get('/info', function () {
    return view('frontend.pages.thong-tin-tai-khoan.info');
});

Route::get('/doi-mat-khau', function () {
    return view('frontend.pages.thong-tin-tai-khoan.doi-mat-khau');
});

Route::get('/cap-nhat-thong-tin', function () {
    return view('frontend.pages.thong-tin-tai-khoan.cap-nhat-thong-tin');
});
Route::get('/lich-su-giao-dich', function () {
    return view('frontend.pages.thong-tin-tai-khoan.lich-su-giao-dich');
});

// Đăng ký
Route::get('/dang-ky', [AuthController::class, 'DangKy'])->name('register.form');
Route::post('/dang-ky', [AuthController::class, 'dang_ky']);

// Đăng nhập
Route::get('/dang-nhap', [AuthController::class, 'DangNhap'])->name('login.form');
Route::post('/dang-nhap-tai-khoan', [AuthController::class, 'dang_nhap'])->name('login');

Route::post('/dang-xuat', [AuthController::class, 'logout'])->name('logout');

Route::get('/404', function () {return view('frontend.pages.404');});



Route::get('/cau-hoi-thuong-gap', function () {
    return view('frontend.pages.cau-hoi-thuong-gap');
});

Route::get('/dat-ve/{id}', [DatVeController::class, 'show'])->name('dat-ve.show');

Route::get('/lich-chieu', function () {
    return view('frontend.pages.lich-chieu');
});
Route::get('/lien-he', function () {
    return view('frontend.pages.lien-he');
});
Route::get('/phim-sap-chieu', function () {
    return view('frontend.pages.phim-sap-chieu');
});
Route::get('/phim-dang-chieu', function () {
    return view('frontend.pages.phim-dang-chieu');
});
Route::get('/quen-mat-khau', function () {
    return view('frontend.pages.quen-mat-khau');
});
Route::get('/tin-tuc', function () {
    return view('frontend.pages.tin-tuc');
});
Route::get('/tuyen-dung', function () {
    return view('frontend.pages.tuyen-dung');
});
Route::get('/uu-dai', function () {
    return view('frontend.pages.uu-dai');
});
Route::get('/bao-mat-thong-tin', function () {
    return view('frontend.pages.chinh-sach.bao-mat-thong-tin');
});
Route::get('/chinh-sach-giao-nhan', function () {
    return view('frontend.pages.chinh-sach.chinh-sach-giao-nhan');
});
Route::get('/chinh-sach-thanh-toan', function () {
    return view('frontend.pages.chinh-sach.chinh-sach-thanh-toan');
});
Route::get('/dieu-khoan-chung', function () {
    return view('frontend.pages.chinh-sach.dieu-khoan-chung');
});
Route::get('/kiem-hang-doi-tra-hoan-tien', function () {
    return view('frontend.pages.chinh-sach.kiem-hang-doi-tra-hoan-tien');
});
Route::get('/chi-tiet-phim/{id}', [PhimController::class, 'chiTiet'])->name('phim.chiTiet');

Route::post('/thanh-toan', [DatVeController::class, 'thanhToan'])->name('thanh-toan');
Route::post('/check-seat', [DatVeController::class, 'checkSeat'])->name('check-seat');
//===========================================================================//
//===============================Admin=====================================//
Route::get('/admin', function () {
    return view('backend.login');
});

Route::post('/dang-nhap-quan-ly', [AutController::class, 'dang_nhap'])->name('login_admin');

Route::get('/admin/button', function () {
    return view('backend.pages.button');
});
Route::get('/admin/cards', function () {
    return view('backend.pages.cards');
});
Route::get('/admin/charts', function () {
    return view('backend.pages.charts');
});
Route::get('/admin/forms', function () {
    return view('backend.pages.forms');
});
Route::get('/admin/modals', function () {
    return view('backend.pages.modals');
});
Route::get('/admin/tables', function () {
    return view('backend.pages.tables');
});
Route::get('/admin/404', function () {
    return view('backend.pages.404');
});
Route::get('/admin/login', function () {
    return view('backend.layouts.login');
});

Route::prefix('admin/rap')->name('rap.')->group(function() {
    Route::get('/', [RapController::class, 'index'])->name('index');
    Route::get('/create', [RapController::class, 'create'])->name('create');
    Route::post('/store', [RapController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [RapController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [RapController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [RapController::class, 'destroy'])->name('destroy');
});

//===========================================================================//