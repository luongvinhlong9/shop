<?php

use App\Http\Controllers\admin\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/user/login', [LoginController::class, 'index']);
Route::post('admin/user/login/store', [LoginController::class, 'store']);

Route::get('admin/main', [MainController::class, 'index'])->name('admin');
