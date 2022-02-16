@extends('layout')

<head>
<link rel="stylesheet" href="../css/create.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
</head>>

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">New FAQ</h1>

            <form method="POST" action="../faqs">
                @csrf

                <div class="field">
                    <label class="label" for="question">Question</label>

                    <div class="control">
                        <input class="input" type="text" name="question" id="question">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="answer">Answer</label>

                    <div class="control">
                        <textarea class="textarea" name="answer" id="answer"></textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="link">Link (Optional)</label>

                    <div class="control">
                        <textarea class="textarea" name="link" id="link"></textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>

                    <div class="control">
                        <button class="button is-text">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
