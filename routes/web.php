<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RegistrationController;
use App\Http\Controllers\UserRegistrationController;
use App\Http\Controllers\Admin\UserController;
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

Route::get('/error-test', function () {
    abort(500);
});

Route::get('/', function () {
    return view('layouts.user');
});

Route::get('Daftar-Siswa-SMKIT-AL-MUSTHAFAWIYAH', [UserRegistrationController::class, 'create'])->name('Daftar-Siswa-SMKIT-AL-MUSTHAFAWIYAH');
Route::post('/registration', [UserRegistrationController::class, 'store'])->name('registration.store');
Route::get('/Daftar/Berhasil', [UserRegistrationController::class, 'success'])->name('registration.success');



Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::resource('registrations', RegistrationController::class);
    Route::resource('users', UserController::class);
});
