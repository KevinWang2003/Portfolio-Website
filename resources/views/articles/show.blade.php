@extends('layout')

<link rel="stylesheet" href="../css/layout.css">
<link rel="stylesheet" href="../css/show.css">

@section('content')

    <h1>{{ $article->title }}</h1>
    <p>{{ $article->body }}</p>


@endsection
