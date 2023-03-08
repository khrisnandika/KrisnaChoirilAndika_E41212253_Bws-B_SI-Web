<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Home2Controller;


// Route::get('/', function () {
//     return view('home');
// });

/*
=====Penjelasan Route/Routing=====
Route atau Routing berperan sebagai penghubung antara user 
dengan keseluruhan framework. Dalam Laravel, setiap alamat 
web yang kita ketik di web browser akan melewati route terlebih 
dahulu. Route-lah yang menentukan ke mana proses akan dibawa, 
apakah ke Controller atau ke View.
*/

//minggu 3
 //proses route ini akan menuju pada beberapa view, maka request dari user akan direspon oleh Controller.
Route::get('home', [HomeController::class, 'acara12']);
Route::get('index', [ManagementUserController::class, 'index']);
Route::get('user', [ManagementUserController::class, 'index']);
Route::resource('user', ManagementUserController::class);

//minggu4
Route::get('home', [BerandaController::class, 'index']);  //proses route ini akan menuju pada view home, maka request dari user akan direspon oleh BerandaController.

//minggu 5
Route::get('dashboard', [DashboardController::class, 'dashboard']); //proses route ini akan menuju pada view dashboard, maka request dari user akan direspon oleh DashboardController.
