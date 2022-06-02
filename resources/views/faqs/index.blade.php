@extends('common.layout')

<head>
    <title>FAQ</title>
</head>

@section('content')
    <main class="faq">
        <h1>Frequently Asked Questions</h1>
        <section>
            @if(Auth::check())
                <div class="d-grid mx-auto justify-content-md-center">
                    <a class="btn btn-secondary create" href="/articles/create">Nieuwe Artikel</a>
                </div>
            @endif
            <div class="col mt-2">
                @foreach($faqs as $faq)
                    <button type="button" class="collapsible">
                        <h2>{{ $faq->question }}</h2>
                    </button>
                    <div class="content">
                        @if(!$faq->link == null)
                            ;
                            <p><a href="{{ $faq->link }}" target="_blank">{{ $faq->answer }}</a></p>
                        @else
                            ;
                            <p>{!! $faq->answer !!}</p>
                        @endif
                        @if(Auth::check())
                            <a href="{{ route('faqs.edit', $faq) }}"><p>Edit</p></a>
                        @endif
                    </div>
                @endforeach
                <script src="/js/faq.js"></script>
            </div>
        </section>
    </main>
@endsection

