@extends('common.layout')

@section('head')
    <title>Blog</title>
@endsection

@section('content')
    <main>
        <section class="blog">
            <h1>Blog</h1>
            @if(Auth::check() && Auth::user()->role == 'admin')
            <div class="d-grid mx-auto justify-content-md-center">
                <a class="btn btn-secondary create" href="/articles/create">Nieuwe Artikel</a>
            </div>
            @endif
            <div class="col">
                @foreach($articles as $article)
                    <button type="button" class="collapsible">{{ $article->title }}</button>
                    <div class="content">
                        <p>{{ $article->excerpt }}</p>
                        <a href="{{ route('articles.show', $article) }}"><p>Lees meer..</p></a>
                        @if(Auth::check() && Auth::user()->role == 'admin')
                            <a href="{{ route('articles.edit', $article) }}"><p>Edit</p></a>
                        @endif
                    </div>
                @endforeach
                <script src="/js/faq.js"></script>
            </div>
        </section>
    </main>
@endsection
