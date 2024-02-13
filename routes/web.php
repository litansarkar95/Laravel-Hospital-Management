<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Contact;

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



Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/home',[HomeController::class, 'redirect']);
Route::get('/abouts',[AboutController::class, 'index'])->name('about');

// doctor
Route::get('/doctors',[DoctorController::class, 'index'])->name('doctor');
// News
Route::get('/news',[NewsController::class, 'index'])->name('news');
// Contact
Route::get('/contact',[Contact::class, 'index'])->name('contact');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
