<?php

use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\JawabanController;
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
})->name('index');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});



Route::get('/blog', function () {
    return view('blog');
});


Route::get('/feature', function () {
    return view('feature');
})->name('feature');

Route::get('/workshop', function () {
    return view('workshop');
})->name('workshop');

//route pemesanan membership
Route::middleware(['auth'])->group(function () {
    Route::get('/pemesanan/{type}', function ($type) {
        return view('pemesanan', ['type' => $type]);
    })->name('pemesanan');
    Route::post('/pemesanan', [UserController::class, 'setType'])->name('pemesanan.action');
    Route::post('/jawab', [JawabanController::class, 'store'])->name('jawaban.action');
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
    Route::post('/profile', [UserController::class, 'update'])->name('user.action');
    Route::get('/konsultasi/{id}', [DokterController::class, 'detail'])->name('user.question.detail');
});


//route testimonial
Route::get('/testimonial', function () {
    return view('testimonial');
});

//Routing gold dan platinum ->konsultasi
Route::middleware(['auth', 'CekType:gold,platinum'])->group(function () {
    Route::get('/service', function () {
        return view('service');
    })->name('service');

    Route::post('/service', [ConsultationController::class, 'store'])->name('service.post');
});

//routing platinum
Route::middleware(['auth', 'CekType:platinum'])->group(function () {
    Route::get('/detail', function () {
        return view('detail');
    });
});

//routing contact
Route::post('/faq', [FaqController::class, 'store'])->name('faq.submit');

//Routing Admin
Route::middleware(['auth', 'roleCek:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/transaction', [DashboardController::class, 'transaction'])->name('transaction');
    Route::delete('/user/delete', [DashboardController::class, 'destroyUser'])->name('destroy.user');
});



Route::middleware(['auth', 'roleCek:dokter,user'])->group(function () {
    Route::get('/dokter/konsultasi', [DokterController::class, 'index'])->name('dokter.konsultasi');
    Route::get('/dokter/konsultasi/{id}', [DokterController::class, 'detail'])->name('question.detail');
});

// Routing Authentikasi 
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/login', [UserController::class, 'login_action'])->name('login.action');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'register_action'])->name('register.action');
