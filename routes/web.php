<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientListController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', [DashboardController::class, 'index']);


// <!-- PROFILE ROUTE -->
Route::middleware(['auth', 'patient'])->group(function () {
    Route::post('/book/appointment', [FrontendController::class, 'store'])->name('book.appointment');
    Route::get('/my-booking', [FrontendController::class, 'mybooking'])->name('my.booking');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
    Route::post('/profile-pic', [ProfileController::class, 'profilePic'])->name('profile.image');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('/doctor', DoctorController::class);
    Route::get('/patient', [PatientListController::class, 'index'])->name('patient');
    Route::get('/patients/all', [PatientListController::class, 'allTimeAppointment'])->name('all.appointment');
    Route::get('/status/update/{id}', [PatientListController::class, 'toggleStatus'])->name('update.status');
});

Route::middleware(['auth', 'doctor'])->group(function () {
    Route::post('/appointment/check', [AppointmentController::class, 'appointmentCheck'])->name('appointment.check');
    Route::post('/appointment/time/update', [AppointmentController::class, 'appointmentTimeUpdate'])->name('appointment.time.update');
    Route::resource('/appointment', AppointmentController::class);
});
