<?php

use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});

//routing konsultasi
Route::get('/service', function () {
    return view('service');
})->name('service');
Route::post('/service', [ConsultationController::class, 'store'])->name('service.post');

//routing contact
Route::post('/faq', [FaqController::class, 'store'])->name('faq.submit');

//Routing Admin
Route::middleware(['auth', 'roleCek:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth', 'roleCek:dokter'])->group(function () {
    Route::get('/dokter/konsultasi', [DokterController::class, 'index'])->name('dokter.konsultasi');
    Route::get('/dokter/konsultasi/{id}', [DokterController::class, 'detail'])->name('question.detail');
});

// Routing Authentikasi 
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/login', [UserController::class, 'login_action'])->name('login.action');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'register_action'])->name('register.action');
