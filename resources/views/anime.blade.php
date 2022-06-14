@extends('common.layout')

@section('title')
    <title>Animelist</title>
@endsection

@section('content')
    <section class="w-100">
        <h1>Animelist</h1>
        <div id="anime"></div>
        <div class="text-center">
            <a class="btn btn-primary" id="prevPage">Vorige</a>
            <a class="btn btn-primary" id="nextPage">Volgende</a>
        </div>
        <div class="mt-4" id="progress"></div>
    </section>
    <script src="js/animelist.js"></script>
@endsection
