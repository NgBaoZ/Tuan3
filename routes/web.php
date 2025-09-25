<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



//đăng nhập
Route::get('/', function () {
    return view('auth.login');
})  ->name('login');
//đăng ký
Route::get('/register', function () {
    return view('auth.register');
})  ->name('register');
//trang chủ
Route::get('/index', function () {
    return view('index');
})  ->name('index');
//đăng xuất
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');
//bắt đầu thi
Route::get('/r_quiz', function () {
    return view('quiz.r_quiz');
})  ->name('r_quiz');
//kết quả thi
Route::get('/result', function () {
    return view('quiz.result');
})  ->name('result');

// Route tạm thời để xem giao diện trang kết quả
Route::get('/preview/result', function () {
    return view('quiz.result');
})->name('preview.result');