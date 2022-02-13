<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/faq.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-control" content="no-cache">
    <script src="https://kit.fontawesome.com/5f690037a3.js" crossorigin="anonymous"></script>
    <title>FAQ</title>
</head>

<body>
    <header>
        <!--Navigatie Menu-->
        <nav>
            <ul>
                <li><a href="/"><i class="fas fa-home"></i></a></li>
                <li><a href="profile">Profile</a></li>
                <li><a href="portfolio">Portfolio</a></li>
                <li><a href="dashboard">Dashboard</a></li>
                <li><a href="blog">Blog</a></li>
                <li><a class="active" href="faqs">FAQ</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Frequently Asked Questions</h1>
        <section>
            @foreach($faqs as $faq)
            <button type="button" class="collapsible">
                <h2>{{ $faq->question }}</h2>
            </button>
            <div class="content">
                @if(!$faq->link == null);
                    <p><a href="{{ $faq->link }}" target="_blank">{{ $faq->answer }}</a></p>
                @else;
                    <p>{{ $faq->answer }}</p>
                @endif
            </div>
            @endforeach
            <script src="js/faq.js"></script>
        </section>
    </main>
</body>

</html>
