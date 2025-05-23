<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AutController;
use App\Http\Controllers\Admin\RapController;
use App\Http\Controllers\Admin\AdminPhimController;
use App\Http\Controllers\Admin\KhuyenMaiController;
use App\Http\Controllers\Admin\PhongChieuController;
use App\Http\Controllers\Admin\SuatChieuController;
use App\Http\Controllers\Admin\TaiKhoanController;
use App\Http\Controllers\Admin\HoaDonController;
use App\Http\Controllers\Admin\VeXemPhimController;
use App\Http\Controllers\Admin\ThongKeController;
use App\Http\Controllers\Admin\TheLoaiPhimController;
use App\Http\Controllers\Admin\HomeController;

use App\Http\Controllers\Apps\PhimController;
use App\Http\Controllers\Apps\AuthController;
use App\Http\Controllers\Apps\DatVeController;
use App\Http\Controllers\Apps\ThanhToanController;

//==============================Frontend=====================================//
Route::get('/', [PhimController::class, 'Index'])->name('home');

Route::get('/info', function () {
    return view('frontend.pages.thong-tin-tai-khoan.info');
});

//Route::get('/doi-mat-khau', function () {
//   return view('frontend.pages.thong-tin-tai-khoan.doi-mat-khau');
//});

Route::get('/cap-nhat-thong-tin', function () {
    return view('frontend.pages.thong-tin-tai-khoan.cap-nhat-thong-tin');
});
Route::get('/lich-su-giao-dich', function () {
    return view('frontend.pages.thong-tin-tai-khoan.lich-su-giao-dich');
});

// Đăng ký
Route::get('/dang-ky', [AuthController::class, 'DangKy'])->name('register.form');
Route::post('/dang-ky', [AuthController::class, 'dang_ky']);
Route::get('/xac-nhan/{token}', [AuthController::class, 'verifyAccount'])->name('verify.account');

// Đăng nhập
Route::get('/dang-nhap', [AuthController::class, 'DangNhap'])->name('login.form');
Route::post('/dang-nhap-tai-khoan', [AuthController::class, 'dang_nhap'])->name('login');
Route::get('/doi-mat-khau', function () {
    return view('frontend.pages.thong-tin-tai-khoan.doi-mat-khau');
})->name('doi-mat-khau');
Route::post('/doi-mat-khau', [AuthController::class, 'doi_mat_khau'])->name('doi-mat-khau');
Route::post('/quen-mat-khau', [AuthController::class, 'quen_mat_khau']);
Route::post('/dang-xuat', [AuthController::class, 'dang_xuat'])->name('logout');



Route::get('/cau-hoi-thuong-gap', function () {
    return view('frontend.pages.cau-hoi-thuong-gap');
});
Route::get('/cap-nhat-thong-tin', [AuthController::class, 'showUpdateInfo'])->name('user.updateInfo');
Route::post('/cap-nhat-thong-tin', [AuthController::class, 'updateInfo'])->name('user.updateInfo.post');
Route::get('/dat-ve/{phimSlug}/{ngay}/{gio}', [DatVeController::class, 'showBySlug'])->name('dat-ve.show.slug');Route::get('/lich-chieu', function () {
    return view('frontend.pages.lich-chieu');
});
Route::get('/lien-he', function () {
    return view('frontend.pages.lien-he');
});
Route::get('/phim-sap-chieu', [PhimController::class, 'phimSapChieu'])->name('phim.sapChieu');
Route::get('/phim-dang-chieu', [PhimController::class, 'phimDangChieu'])->name('phim.dangChieu');
Route::get('/quen-mat-khau', function () {
    return view('frontend.pages.quen-mat-khau');
});
Route::get('/tin-tuc', function () {
    return view('frontend.pages.tin-tuc');
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
Route::get('/chi-tiet-phim/{slug}', [PhimController::class, 'chiTiet'])->name('phim.chiTiet');
Route::post('/thanh-toan', [DatVeController::class, 'thanhToan'])->name('thanh-toan');
Route::post('/check-seat', [DatVeController::class, 'checkSeat'])->name('check-seat');
Route::post('/thanh-toan/momo', [ThanhToanController::class, 'thanhToanMomo'])->name('thanh-toan.momo');
Route::get('/thanh-toan/momo/callback', [ThanhToanController::class, 'momoCallback'])->name('thanh-toan.momo.callback');
Route::get('/dat-ve/thanh-toan', [DatVeController::class, 'showThanhToan'])->name('dat-ve.thanh-toan');
Route::post('/thanh-toan/zalopay', [ThanhToanController::class, 'thanhToanZaloPay'])->name('thanh-toan.zalopay');
Route::get('/thanh-toan/zalopay/callback', [ThanhToanController::class, 'zalopayCallback'])->name('thanh-toan.zalopay.callback');

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
    Route::get('/home', [HomeController::class , 'index'])-> name('cap-nhat-thong-tin.index') ;
    Route::post('/cap-nhat-thong-tin-trang', [HomeController::class , 'update'])-> name('thong-tin-trang-web.update') ;
 

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

    Route::prefix('tai-khoan')->name('tai-khoan.')->group(function () {
        Route::get('/', [TaiKhoanController::class, 'index'])->name('index');
        Route::get('/create', [TaiKhoanController::class, 'create'])->name('create');
        Route::post('/store', [TaiKhoanController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [TaiKhoanController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [TaiKhoanController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [TaiKhoanController::class, 'destroy'])->name('delete');
        Route::get('/change-status/{id}', [TaiKhoanController::class, 'changeStatus'])->name('status');
        Route::get('/export', [TaiKhoanController::class, 'export'])->name('export');
    });

    // Routes quản lý hóa đơn
    Route::prefix('hoa-don')->name('hoa-don.')->group(function () {
        Route::get('/', [HoaDonController::class, 'index'])->name('index');
        Route::get('/create', [HoaDonController::class, 'create'])->name('create');
        Route::post('/store', [HoaDonController::class, 'store'])->name('store');
        Route::get('/show/{id}', [HoaDonController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [HoaDonController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [HoaDonController::class, 'update'])->name('update');
        Route::delete('/destroy/{id}', [HoaDonController::class, 'destroy'])->name('destroy');
        Route::get('/export-report', [HoaDonController::class, 'exportReport'])->name('export-report');
    });

    // Routes quản lý vé xem phim trong hóa đơn
    Route::prefix('ve-xem-phim')->name('ve-xem-phim.')->group(function () {
        Route::get('/{hoaDonId}', [VeXemPhimController::class, 'index'])->name('index');
        Route::get('/{hoaDonId}/create', [VeXemPhimController::class, 'create'])->name('create');
        Route::post('/{hoaDonId}/store', [VeXemPhimController::class, 'store'])->name('store');
        Route::get('/{hoaDonId}/show/{veId}', [VeXemPhimController::class, 'show'])->name('show');
        Route::get('/{hoaDonId}/edit/{veId}', [VeXemPhimController::class, 'edit'])->name('edit');
        Route::put('/{hoaDonId}/update/{veId}', [VeXemPhimController::class, 'update'])->name('update');
        Route::delete('/{hoaDonId}/destroy/{veId}', [VeXemPhimController::class, 'destroy'])->name('destroy');
        Route::patch('/{hoaDonId}/change-status/{veId}', [VeXemPhimController::class, 'changeStatus'])->name('change-status');
    });

    Route::prefix('thong-ke')->name('thong-ke.')->group(function () {
        Route::get('/', [ThongKeController::class, 'index'])->name('index');
    });
    
});
