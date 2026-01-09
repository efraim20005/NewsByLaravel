<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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



Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[AuthController::class,'login'])->name('auth.login')->middleware('guest');
Route::post('/verify',[AuthController::class,'verify'])->name('auth.verfy');
Route::get('/logout',[AuthController::class,'logout'])->name('auth.logout');

Route::get('/dashboard',[DashboardController::class,'index'] )->name('dasboard.index');
Route::get('/dashboard/profile',[DashboardController::class,'profile'] )->name('profile.index');
