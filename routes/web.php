<?php

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

//Route::get('/posts/{post}', function ($post) {
//    $posts = [
//        'my-first-post' => 'Hello, this is my first blog post!',
//        'my-second-post' => 'Now I am getting the hang of this blogging thing.'
//    ];
//
//    if (!array_key_exists($post, $posts)) {
//        abort(404, 'Sorry, that post was not found.');
//    }
//
//    return view('post', [
//        'post' => $posts[$post]
//    ]);
//});
use App\Http\Controllers\ViewController;
Route::get('/', [ViewController::class, 'show']);
use App\Http\Controllers\ProfileController;
Route::get('/profile', [ProfileController::class, 'show']);
use App\Http\Controllers\PortfolioController;
Route::get('/portfolio', [PortfolioController::class, 'show']);
use App\Http\Controllers\BlogController;
Route::get('/blog', [BlogController::class, 'show']);
use App\Http\Controllers\FAQController;
Route::get('/faq', [FAQController::class, 'show']);
use App\Http\Controllers\DashboardController;
Route::get('/dashboard', [DashboardController::class, 'show']);

