@extends('common.layout')

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
</head>

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>Nieuwe Artikel</h1>
            <p class="require">* = vereist</p>
            <form method="POST" action="/articles">
                @csrf
                <div class="field">
                    <label class="label" for="title">Titel *</label>

                    <div class="control">
                        <input
                            class="input @error('title') is-danger @enderror"
                            type="text"
                            name="title"
                            id="title"
                            value="{{ old('title') }}"
                            placeholder="Mijn werkervaring"
                        >
                        @error('title')
                        <p class="help is-danger"><i class="fas fa-exclamation-triangle"></i> Voer een titel in (bijvoorbeeld: Mijn Kennis)</p>
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
                        >{{ old('excerpt') }}</textarea>
                        @error('excerpt')
                        <p class="help is-danger"><i class="fas fa-exclamation-triangle"></i> Voer een subtitel in. (Bijvoorbeeld: Dit artikel gaat over mijn kennis in het programmeren)</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="">Text *</label>

                    <div class="control">
                        <textarea
                            class="textarea @error('body') is-danger @enderror"
                            name="body"
                            id="body"
                            placeholder="Voordat ik op deze school kwam, werkte ik bij .........."
                        >{{ old('body') }}</textarea>
                        @error('body')
                        <p class="help is-danger"><i class="fas fa-exclamation-triangle"></i> Voer text in. (Bijvoorbeeld: Voordat ik op deze school kwam had ik al ervaring met HTML ...)</p>
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
        </div>
    </div>
@endsection
