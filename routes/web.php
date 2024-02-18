<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Contact;
use App\Http\Controllers\backend\basic\SpecialistController;
use App\Http\Controllers\backend\basic\DoctorAdminController;

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
Route::get('/home',[HomeController::class, 'redirect'])->name('dashboad_home');
Route::get('/abouts',[AboutController::class, 'index'])->name('about');

// doctor
Route::get('/doctors',[DoctorController::class, 'index'])->name('doctor');
// News
Route::get('/news',[NewsController::class, 'index'])->name('news');
// Contact
Route::get('/contact',[Contact::class, 'index'])->name('contact');



// BAsic

Route::get('/admin/basic/specialist',[SpecialistController::class, 'index'])->name('specialist');
Route::post('/admin/basic/specialistinsert',[SpecialistController::class, 'insert'])->name('specialist_insert');
Route::delete('/admin/basic/specialist/detele/{id}',[SpecialistController::class, 'delete'])->name('delete.speciallist');
Route::get('/admin/basic/specialist/{id}/edit',[SpecialistController::class, 'edit'])->name('admin.speciallist.edit');
Route::put('/admin/basic/specialist/update/{id}',[SpecialistController::class, 'updatespecialist'])->name('admin.update.specialist');

// Backend Doctor
Route::get('/admin/basic/doctor',[DoctorAdminController::class, 'create'])->name('admin.doctor_create');
Route::post('/admin/basic/doctoradmin/insert',[DoctorAdminController::class, 'insert'])->name('doctor_insert');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
