<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AutController;
use App\Http\Controllers\Admin\RapController;
use App\Http\Controllers\Admin\AdminPhimController;
use App\Http\Controllers\Admin\KhuyenMaiController;
use App\Http\Controllers\Admin\PhongChieuController;
use App\Http\Controllers\Admin\SuatChieuController;
use App\Http\Controllers\Admin\TheLoaiPhimController;

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

Route::get('/404', function () {
    return view('frontend.pages.404');
});

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
// Login admin (không cần middleware)
Route::get('/admin', function () {
    return view('backend.login');
});
Route::get('/admin/login', fn() => view('backend.login'));

Route::post('/dang-nhap-quan-ly', [AutController::class, 'dang_nhap'])->name('login_admin');

Route::post('/admin/dang-xuat', [AutController::class, 'dang_xuat'])->name('logout_admin');

Route::get('/admin/404', fn() => view('backend.pages.404'));

Route::get('/admin/charts', fn() => view('backend.pages.charts'));

Route::prefix('admin')->middleware(['admin'])->group(function () {
    // Rap
    Route::prefix('rap')->name('rap.')->group(function () {
        Route::get('/', [RapController::class, 'index'])->name('index');
        Route::get('/create', [RapController::class, 'create'])->name('create');
        Route::post('/store', [RapController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [RapController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [RapController::class, 'update'])->name('update');
        Route::delete('/destroy/{id}', [RapController::class, 'destroy'])->name('destroy');
    });

    // Phòng chiếu
    Route::prefix('phong-chieu')->name('phong-chieu.')->group(function () {
        Route::get('/', [PhongChieuController::class, 'index'])->name('index');
        Route::get('/create', [PhongChieuController::class, 'create'])->name('create');
        Route::post('/store', [PhongChieuController::class, 'store'])->name('store');
        Route::get('/show/{id}', [PhongChieuController::class, 'show'])->name('show');
        Route::put('/update/{id}', [PhongChieuController::class, 'update'])->name('update');
        Route::delete('/{id}', [PhongChieuController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('phim')->name('phim.')->group(function () {
        Route::get('/', [AdminPhimController::class, 'index'])->name('index');
        Route::get('/create', [AdminPhimController::class, 'create'])->name('create');
        Route::post('/store', [AdminPhimController::class, 'store'])->name('store');
        Route::get('/show/{id}', [AdminPhimController::class, 'show'])->name('show');
        Route::put('/update/{id}', [AdminPhimController::class, 'update'])->name('update');
        Route::delete('/{id}', [AdminPhimController::class, 'destroy'])->name('destroy');
        Route::get('phim/change-status/{id}', [AdminPhimController::class, 'changeStatus'])->name('change-status');
    });

    Route::prefix('suat-chieu')->name('suat-chieu.')->group(function () {
        Route::get('/', [SuatChieuController::class, 'index'])->name('index');
        Route::get('/create', [SuatChieuController::class, 'create'])->name('create');
        Route::post('/store', [SuatChieuController::class, 'store'])->name('store');
        Route::get('/show/{id}', [SuatChieuController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [SuatChieuController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [SuatChieuController::class, 'update'])->name('update');
        Route::delete('/{id}', [SuatChieuController::class, 'destroy'])->name('destroy');
        Route::get('/filter-date', [SuatChieuController::class, 'filterByDate'])->name('filter.date');
        Route::get('/filter-phim', [SuatChieuController::class, 'filterByPhim'])->name('filter.phim');
    });

    Route::prefix('the-loai')->name('the-loai.')->group(function () {
        Route::get('/', [TheLoaiPhimController::class, 'index'])->name('index');
        Route::get('/create', [TheLoaiPhimController::class, 'create'])->name('create');
        Route::post('/store', [TheLoaiPhimController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [TheLoaiPhimController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [TheLoaiPhimController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [TheLoaiPhimController::class, 'destroy'])->name('delete');
    });

    Route::prefix('khuyen-mai')->name('khuyen-mai.')->group(function () {
        Route::get('/', [KhuyenMaiController::class, 'index'])->name('index');
        Route::get('/create', [KhuyenMaiController::class, 'create'])->name('create');
        Route::post('/store', [KhuyenMaiController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [KhuyenMaiController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [KhuyenMaiController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [KhuyenMaiController::class, 'destroy'])->name('delete');
    });
});
