<?php

use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

//login page
Route::get('/', function () {
    return view('login');
});

// handle login form submission
Route::post('/projectdashboard',[UserController::class,'login']);

//show project dashboard after login(basta dito ka magland)
Route::resource('projects', ProjectController::class);

// route for full project na CRUD
Route::get('/projectdashboard', [ProjectController::class, 'index'])->name('projectdashboard');