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
Route::get('/mandated_programs/talent_hunt', [App\Http\Controllers\SitePagesController::class, 'talentHunt'])->name('talentHunt');
Route::get('/mandated_programs/stem_program', [App\Http\Controllers\SitePagesController::class, 'stemProgram'])->name('stemProgram');
Route::get('/mandated_programs/fatherhood_mentoring', [App\Http\Controllers\SitePagesController::class, 'fatherhoodMentoring'])->name('fatherhoodMentoring');
Route::get('/mandated_programs/social_action', [App\Http\Controllers\SitePagesController::class, 'socialAction'])->name('socialAction');

Route::get('/about_ga/founders', [App\Http\Controllers\SitePagesController::class, 'aboutgaFounders'])->name('aboutgaFounders');


//Routes for profile
Route::any('/profiles/create', [App\Http\Controllers\ProfileController::class, 'createProfile' ])->name('createProfile');



