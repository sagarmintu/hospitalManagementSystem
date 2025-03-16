<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/',[HomeController::class, 'index']);

Route::get('/home',[HomeController::class, 'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view',[AdminController::class, 'addview']);
Route::post('/upload_doctor',[AdminController::class, 'upload']);
Route::post('/appointment',[HomeController::class, 'appointment']);
Route::get('/myappointment',[HomeController::class, 'myappointment']);
Route::get('/cancel_appointment/{id}',[HomeController::class, 'cancel_appointment']);
Route::get('/show_appointment',[AdminController::class, 'show_appointment']);
Route::get('/approved/{id}',[AdminController::class, 'approved']);
Route::get('/cancelled/{id}',[AdminController::class, 'cancelled']);