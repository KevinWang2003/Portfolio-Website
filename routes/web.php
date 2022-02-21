<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticlesController;

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

Route::get('/', [ViewController::class, 'show']);

Route::get('/posts/{slug}', [PostsController::class, 'show']);

Route::get('/profile', [ProfileController::class, 'show']);

Route::get('/portfolio', [PortfolioController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'show']);

Route::get('/articles/index', [ArticlesController::class, function () {
    return view('articles.index', [
        'articles' => App\Models\Article::all()
    ]);
}])->name('articles.index');

Route::post('/articles', [ArticlesController::class, 'store']);
Route::get('/articles/create', [ArticlesController::class, 'create']);
Route::get('/articles/{article}', [ArticlesController::class, 'show'])->name('articles.show');
Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit']);
Route::put('/articles/{article}', [ArticlesController::class, 'update']);
Route::delete('/articles/{article}', [ArticlesController::class, 'destroy']);

// GET articles
// GET articles/create
// POST /articles
// GET articles/:id
// GET articles/:id/edit
// PUT /articles/:id
// DELETE /articles/:id

Route::get('/faqs/index', [FaqsController::class, 'show'])->name('faqs.index');
Route::post('/faqs', [FaqsController::class, 'store']);
Route::get('/faqs/create', [FaqsController::class, 'create']);
Route::get('/faqs/{faq}/edit', [FaqsController::class, 'edit']);
Route::put('/faqs/{faq}', [FaqsController::class, 'update']);
Route::delete('/faqs/{faq}', [FaqsController::class, 'destroy']);
