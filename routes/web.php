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
use App\Http\Controllers\Apps\ThanhToanController;

//==============================Frontend=====================================//
Route::get('/', [PhimController::class, 'Index'])->name('home');

// --- Auth ---
Route::prefix('auth')->group(function () {
    Route::get('/dang-ky', [AuthController::class, 'DangKy'])->name('register.form.get');
    Route::post('/dang-ky', [AuthController::class, 'dang_ky'])->name('register.form.post');
    Route::get('/xac-nhan/{token}', [AuthController::class, 'verifyAccount'])->name('verify.account');
    Route::get('/dang-nhap', [AuthController::class, 'DangNhap'])->name('login.form');
    Route::post('/dang-nhap-tai-khoan', [AuthController::class, 'dang_nhap'])->name('login');
    Route::post('/dang-xuat', [AuthController::class, 'dang_xuat'])->name('logout');
    Route::get('/doi-mat-khau', fn() => view('frontend.pages.thong-tin-tai-khoan.doi-mat-khau'))->name('doi-mat-khau.get');
    Route::post('/doi-mat-khau', [AuthController::class, 'doi_mat_khau'])->name('doi-mat-khau.post');
    Route::get('/quen-mat-khau', fn() => view('frontend.pages.quen-mat-khau'))->name('quen-mat-khau.get');
    Route::post('/quen-mat-khau', [AuthController::class, 'quen_mat_khau'])->name('quen-mat-khau.post');
});

// --- Thông tin tài khoản ---
Route::prefix('tai-khoan')->group(function () {
    Route::get('/info', fn () => view('frontend.pages.thong-tin-tai-khoan.info'))->name('user.info');
    Route::get('/lich-su-giao-dich', fn () => view('frontend.pages.thong-tin-tai-khoan.lich-su-giao-dich'))->name('user.lichsugiaodich');
    Route::get('/cap-nhat-thong-tin', [AuthController::class, 'showUpdateInfo'])->name('user.updateInfo.get');
    Route::post('/cap-nhat-thong-tin', [AuthController::class, 'updateInfo'])->name('user.updateInfo.post');
});

// --- Phim ---
Route::prefix('phim')->group(function () {
    Route::get('/phim-sap-chieu', [PhimController::class, 'phimSapChieu'])->name('phim.sapChieu');
    Route::get('/phim-dang-chieu', [PhimController::class, 'phimDangChieu'])->name('phim.dangChieu');
    Route::get('/chi-tiet-phim/{slug}', [PhimController::class, 'chiTiet'])->name('phim.chiTiet');
});

// --- Đặt vé ---
Route::prefix('dat-ve')->group(function () {
    Route::get('/dat-ve/{phimSlug}/{ngay}/{gio}', [DatVeController::class, 'showBySlug'])->name('dat-ve.show.slug');
    Route::get('/dat-ve/thanh-toan', [DatVeController::class, 'showThanhToan'])->name('dat-ve.thanh-toan');
    Route::post('/thanh-toan', [DatVeController::class, 'thanhToan'])->name('thanh-toan');
});

// --- Thanh toán ---
Route::prefix('thanh-toan')->group(function () {
    Route::post('/thanh-toan/momo', [ThanhToanController::class, 'thanhToanMomo'])->name('thanh-toan.momo');
    Route::get('/thanh-toan/momo/callback', [ThanhToanController::class, 'momoCallback'])->name('thanh-toan.momo.callback');
    Route::post('/thanh-toan/zalopay', [ThanhToanController::class, 'thanhToanZaloPay'])->name('thanh-toan.zalopay');
    Route::get('/thanh-toan/zalopay/callback', [ThanhToanController::class, 'zalopayCallback'])->name('thanh-toan.zalopay.callback');
});

// --- Các trang tĩnh ---
Route::view('/cau-hoi-thuong-gap', 'frontend.pages.cau-hoi-thuong-gap')->name('cau-hoi-thuong-gap');
Route::view('/lich-chieu', 'frontend.pages.lich-chieu')->name('lich-chieu');
Route::view('/lien-he', 'frontend.pages.lien-he')->name('lien-he');
Route::view('/tin-tuc', 'frontend.pages.tin-tuc')->name('tin-tuc');
Route::view('/uu-dai', 'frontend.pages.uu-dai')->name('uu-dai');

// --- Chính sách ---
Route::prefix('chinh-sach')->group(function () {
Route::view('/bao-mat-thong-tin', 'frontend.pages.chinh-sach.bao-mat-thong-tin')->name('chinh-sach.bao-mat-thong-tin');
Route::view('/chinh-sach-giao-nhan', 'frontend.pages.chinh-sach.chinh-sach-giao-nhan')->name('chinh-sach.giao-nhan');
Route::view('/chinh-sach-thanh-toan', 'frontend.pages.chinh-sach.chinh-sach-thanh-toan')->name('chinh-sach.thanh-toan');
Route::view('/dieu-khoan-chung', 'frontend.pages.chinh-sach.dieu-khoan-chung')->name('chinh-sach.dieu-khoan-chung');
Route::view('/kiem-hang-doi-tra-hoan-tien', 'frontend.pages.chinh-sach.kiem-hang-doi-tra-hoan-tien')->name('chinh-sach.kiem-hang-doi-tra-hoan-tien');
});

//===============================Admin=====================================//
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