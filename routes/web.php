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

Route::get('/detail', function () {
    return view('detail');
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
    Route::post('/pemesanan/', [UserController::class, 'setType'])->name('pemesanan.action');
});




//route testimonial
Route::get('/testimonial', function () {
    return view('testimonial');
});

//service
Route::middleware(['auth', 'CekType:gold'])->group(function () {
    Route::get('/service', function () {
        return view('service');
    })->name('service');

    Route::post('/service', [ConsultationController::class, 'store'])->name('service.post');
});

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

Route::get('/blog ', [UserController::class, 'blog '])->name('blog ');
Route::get('/blog ', [UserController::class, 'blog_action'])->name('blog.action ');

Route::get('/detail ', [UserController::class, 'detail '])->name('detail ');
Route::get('/detail ', [UserController::class, 'detail_action'])->name('detail.action ');



Route::get('/testimonial ', [UserController::class, 'testimonial '])->name('testimonial');
Route::get('/testimonial ', [UserController::class, 'testimonial_action'])->name('testimonial.action ');

Route::get('/workshop ', [UserController::class, 'workshop '])->name('workshop');
Route::get('/workshop ', [UserController::class, 'workshop_action'])->name('workshop.action ');
