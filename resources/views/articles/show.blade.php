@extends('layout')

<head>
    <link rel="stylesheet" href="/css/show.css">
</head>

@section('content')

    <h1>{{ $article->title }}</h1>
    <p>{{ $article->body }}</p>


@endsection
