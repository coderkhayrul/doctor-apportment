<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontendController::class, 'index']);
Route::get('new-appointment/{doctorId}/{date}', [FrontendController::class, 'show'])->name('create.appointment');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('/doctor', DoctorController::class);
});

Route::middleware(['auth', 'doctor'])->group(function () {
    Route::post('/appointment/check', [AppointmentController::class, 'appointmentCheck'])->name('appointment.check');
    Route::post('/appointment/time/update', [AppointmentController::class, 'appointmentTimeUpdate'])->name('appointment.time.update');
    Route::resource('/appointment', AppointmentController::class);
});
