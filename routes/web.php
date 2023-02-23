<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagementUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('home', [HomeController::class, 'acara12']);
// Route::get('index', [ManagementUserController::class, 'index']);
Route::get('user', [ManagementUserController::class, 'index']);
// Route::resource('user', ManagementUserController::class);