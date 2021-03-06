<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{

    /**
     * The Index of the article page
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }

    /**
     *Shows a specific Article Page
     */
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    /**
     * Function to create new articles
     */
    public function create()
    {
        if(Auth::check() && Auth::user()->role == 'admin') {
            return view('articles.create');
        } else {
            abort(401);
        }

    }

    /**
     * Function to store new data to the database
     */
    public function store(Request $request)
    {
        Article::create($this->validateArticle($request));
        return redirect(route('articles.index'));
    }

    /**
     * Function to show specific article to edit
     */
    public function edit(Article $article)
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            return view('articles.edit', compact('article'));
        } else {
            abort(401);
        }
    }

    /**
     * Function to update specific Article
     */
    public function update(Request $request, Article $article)
    {
        $article->update($this->validateArticle($request));
        return redirect(route('articles.index'));
    }

    /**
     * Deletes Article
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('articles.index'));
    }

    /**
     * @param Request $request
     * @return array
     */
    public function validateArticle(Request $request): array
    {
        return $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
