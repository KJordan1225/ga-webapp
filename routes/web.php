<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;

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
Route::any('/profiles/create', [App\Http\Controllers\ProfileController::class, 'createProfile'])->name('createProfile');
Route::post('/profiles/create', [App\Http\Controllers\ProfileController::class, 'store'])->name('storeProfile');
Route::get('/profiles/viewSingle/{id}', [App\Http\Controllers\ProfileController::class, 'viewSingle'])->name('viewSingleProfile');
Route::get('/profiles/edit/{id}', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profileEdit');
Route::put('/profiles/edit/{id}', [App\Http\Controllers\ProfileController::class, 'update'])->name('updateProfile');
// Route for Directory of Profiles
Route::get('/profiles/viewDirectory', [App\Http\Controllers\ProfileController::class, 'viewDirectory'])->name('viewDirectory');


//Routes for PDFController
Route::get('/pdf/create', [App\Http\Controllers\PDFController::class, 'create'])->name('pdf.create');
Route::post('/pdf/store', [App\Http\Controllers\PDFController::class, 'store'])->name('pdf.store');
Route::get('/directoryPDF', [App\Http\Controllers\PDFController::class, 'index'])->name('directoryPDF.index');
Route::get('/directoryPDF/download', [App\Http\Controllers\PDFController::class, 'downloadDirectory'])->name('directory.download');


//Routes for File management
Route::get('/upload', function () {
    return view('upload');
})->middleware('auth');
Route::post('/upload', [FileUploadController::class, 'upload'])->name('file.upload')->middleware('auth');

// Routes to display Policy Documents
Route::get('/file/policy-docs/{fileName}', [FileUploadController::class, 'openFile'])->name('file.open')->middleware('auth');


//Routes to members only display pages
Route::get('/members/display-policy-docs', [App\Http\Controllers\SitePagesController::class, 'policydocs'])->name('display.policy-docs')->middleware('auth');
