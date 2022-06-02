@extends('common.layout')

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
</head>

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>Update Article</h1>
            <p class="require">* = vereist</p>

            <form method="POST" action="/articles/{{ $article->id }}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="title">Titel *</label>

                    <div class="control">
                        <input
                            class="input @error('title') is-danger @enderror"
                            type="text"
                            name="title"
                            id="title"
                            placeholder="Mijn werkervaring"
                            value="{{ $article->title }}"
                        >
                        @error('title')
                        <p class="help is-danger"><i class="fas fa-exclamation-triangle"></i> De titel mag niet leeg zijn</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Subtitel *</label>

                    <div class="control">
                        <textarea
                            class="textarea @error('excerpt') is-danger @enderror"
                            name="excerpt"
                            id="excerpt"
                            placeholder="Dit artikel gaat over mijn werkervaring"
                        >{{ $article->excerpt }}</textarea>
                        @error('excerpt')
                        <p class="help is-danger"><i class="fas fa-exclamation-triangle"></i> De subtitel mag niet leeg zijn</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>

                    <div class="control">
                        <textarea
                            class="textarea @error('body') is-danger @enderror"
                            name="body"
                            id="body"
                            placeholder="Voordat ik op deze school kwam, werkte ik bij .........."
                        >{{ $article->body }}</textarea>
                        @error('body')
                        <p class="help is-danger"><i class="fas fa-exclamation-triangle"></i> De textvlak mag niet leeg zijn</p>
                        @enderror
                    </div>
                </div>

                <div class="field is-grouped justify-content-between">
                    <div class="control">
                        <a class="button is-text" href="/articles">Annuleren</a>
                    </div>
                    <div class="control">
                        <button class="button is-link" type="submit">Verzenden</button>
                    </div>
                </div>
            </form>

            <form method="POST" action="/articles/{{ $article->id }}">
                <div class="control delete">
                    @csrf
                    @method('DELETE')
                    <button class="button is-danger" type="submit">Delete</button>
                </div>
            </form>
        </div>
    </div>
@endsection
