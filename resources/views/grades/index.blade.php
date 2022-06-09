@extends('common.layout')

<head>
    <title>Grade List</title>
</head>

@section('content')
    <main>
        <h1>Grade List</h1>
        <section class="grades">
            @foreach($grades as $grade)
                <button type="button" class="collapsible">
                    <h2>{{ $grade->name }}</h2>
                </button>
                <div class="content">
                    <p>Test: {{ $grade->test_name }}</p>
                    <p>Passing Grade: {{ $grade->lowest_passing_grade }}</p>
                    <p>Current Grade: {{ $grade->best_grade }}</p>
                    <p>Passed at: {{ $grade->passed_at }}</p>
                    @if(Auth::check() && Auth::user()->role == 'admin')
                    <a href="{{ route('grades.edit', $grade) }}"><p>Edit</p></a>
                    @endif
                </div>
            @endforeach
            <script src="/js/faq.js"></script>
        </section>
    </main>
@endsection
