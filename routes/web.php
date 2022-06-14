<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\GradesController;

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
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Welcome page
Route::resource('/', ViewController::class);

// Anime list
Route::resource('/anime', AnimeController::class);

// Profile
Route::resource('/profile', ProfileController::class);

// Portfolio
Route::resource('/portfolio', PortfolioController::class);

// Dashboard
Route::resource('/dashboard', DashboardController::class);

// Blog
Route::resource('/articles', ArticlesController::class);

// FAQ
Route::resource('/faqs', FaqsController::class);

// Grades
Route::resource('/grades', GradesController::class);
