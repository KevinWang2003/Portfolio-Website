@extends('common.layout')

<style>
     .show p {
        font-family: Calibri;
        font-size: 20px;
        color: black;
        line-height: 20px;
        position: relative;
        text-align: center;
    }
</style>

@section('content')

    <div class="show">
        <h1>{{ $article->title }}</h1>
        <p>{!! $article->body !!}</p>
    </div>

@endsection
