<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('aboutus', [HomeController::class, 'aboutus'])->name('aboutus');

Route::get('ourstory', [HomeController::class, 'ourstory'])->name('ourstory');

Route::get('group-of-directors', [HomeController::class, 'groupofdirectors'])->name('groupofdirectors');

Route::get('our-business', [HomeController::class, 'ourbusiness'])->name('ourbusiness');

Route::get('our-companies', [HomeController::class, 'ourcompanies'])->name('ourcompanies');

Route::get('corporate-sustainability', [HomeController::class, 'corporatesustainability'])->name('corporatesustainability');

Route::get('health-safety-and-environment', [HomeController::class, 'healthsafetyandenvironment'])->name('healthsafetyandenvironment');

Route::get('career', [HomeController::class, 'career'])->name('career');

Route::get('investor', [HomeController::class, 'investor'])->name('investor');

Route::get('saggitech', [HomeController::class, 'saggitech'])->name('saggitech');

Route::get('debdutta-digital', [HomeController::class, 'debduttadigital'])->name('debdutta-digital');

Route::get('news-prime-now', [HomeController::class, 'newsprimenow'])->name('news-prime-now');

Route::get('building-junction', [HomeController::class, 'buildingjunction'])->name('building-junction');

Route::get('contact-us', [HomeController::class, 'contactus'])->name('contact-us');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//new web

//pdf download
Route::get('downloadpdf', [HomeController::class, 'downloadpdf'])->name('downloadpdf');

require __DIR__ . '/auth.php';
