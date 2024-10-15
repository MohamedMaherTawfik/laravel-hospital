<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/home',[HomeController::class,'redirect']);
Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view',[AdminController::class,'addView']);
Route::post('/upload_doctor',[AdminController::class,'upload']);
