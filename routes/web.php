<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HargaController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\LaundryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('/member', MemberController::class);
Route::resource('/harga', HargaController::class);
Route::resource('/laundry', LaundryController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
