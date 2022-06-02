@extends('common.layout')

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
</head>

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>Nieuw FAQ</h1>
            <p class="require">* = vereist</p>
            <form method="POST" action="{{ route('faqs.store') }}">
                @csrf
                <div class="field">
                    <label class="label" for="question">Vraag *</label>

                    <div class="control">
                        <input
                            class="input @error('question') is-danger @enderror"
                            type="text"
                            name="question"
                            id="question"
                            value="{{ old('question') }}"
                        >
                        @error('question')
                        <p class="help is-danger"><i class="fas fa-exclamation-triangle"></i> De vraag mag niet leeg zijn.</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="answer">Antwoord *</label>

                    <div class="control">
                        <textarea
                            class="textarea @error('answer') is-danger @enderror"
                            name="answer"
                            id="answer"
                        >{{ old('answer') }}</textarea>
                        @error('answer')
                        <p class="help is-danger"><i class="fas fa-exclamation-triangle"></i> Het antwoord mag niet leeg zijn.</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="link">Link</label>

                    <div class="control">
                        <textarea
                            class="textarea"
                            name="link"
                            id="link"
                        >{{ old('link') }}</textarea>
                    </div>
                </div>

                <div class="field is-grouped justify-content-between">
                    <div class="control">
                        <a class="button is-text" href="/faqs">Annuleren</a>
                    </div>
                    <div class="control">
                        <button class="button is-link" type="submit">Verzenden</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
