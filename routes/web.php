<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Routes for site pages
Route::get('/mandated_programs/achievement_week', [App\Http\Controllers\SitePagesController::class, 'achievementWeek'])->name('achievementWeek');

