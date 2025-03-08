<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('frontend.pages.home');
});
Route::get('/dang-nhap', function () {
    return view('frontend.pages.dang-nhap');
});
Route::get('/dang-ky', function () {
    return view('frontend.pages.dang-ky');
});
Route::get('/404', function () {
    return view('frontend.pages.404');
});
Route::get('/cau-hoi-thuong-gap', function () {
    return view('frontend.pages.cau-hoi-thuong-gap');
});
Route::get('/dat-ve', function () {
    return view('frontend.pages.dat-ve');
});
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