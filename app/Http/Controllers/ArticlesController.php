<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    /**
     * The Index of the article page
     */

    public function index()
    {
        return view('blog');
    }

    /**
     *Shows a specific Article Page
     */

    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    /**
     * Function to create new articles
     */

    public function create()
    {
        return view('articles.create');
    }

    /**
     * Function to store new data to the database
     */

    public function store()
    {
        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/articles/index');
    }

    /**
     * Function to show specific article to edit
     */

    public function edit($id)
    {
        $article = Article::find($id);

        return view('articles.edit', compact('article'));
    }

    /**
     * Function to update specific Article
     */

    public function update($id)
    {
        $article = Article::find($id);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect('../articles/index');
    }

    /**
     * Deletes Article
     */

    public function destroy($id)
    {
        $article = Article::find($id);

        $article->delete();

        return redirect('../articles/index');
    }
}
