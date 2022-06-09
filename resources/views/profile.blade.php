@extends('common.layout')

<title>My Profile</title>

@section('content')
    <main>
        <article>
            <h1>Profile</h1>
            <div class="container">
                <div class="row">
                    <div class="col">
                    <h2>Persoonlijke Gegevens:</h2>
                        <p>Naam: Kevin Wang</p>
                        <p>Leeftijd: 18</p>
                        <p>Geboortedatum: 09-12-2003</p>
                        <p>Woonplaats: Yerseke</p>
                        <p>Afgestudeerde scholen:</p>
                        <p>OBS Parelmoer en Pontes Oranjeweg</p>
                        <p>Vooropleiding + Profiel:</p>
                        <p>Havo Natuur en Techniek</p>
                    </div>
                    <div class="col">
                    <img class="sideimg" src="resources/Mijn foto.jpg" alt="Selfie" width="437px" height="409px">
                    </div>
                </div>
            </div>
            <div class="container">
                <h2>Bijbaan en Vrijetijd:</h2>
                <img class="sideimg" src="resources/Ayaya.gif" alt="Ayaya">
                    <p>Mijn ouders komen uit Azië en ik geboren in Nederland</p>
                    <p>Mijn vader komt uit China en mijn moeder komt uit Vietnam.</p>
                    <p>Ik werk bij de cafetaria van mijn ouders.</p>
                    <p>De cafetaria heet: Kam Boat.</p>
                    <p>Ik game heel veel en luister ook veel naar muziek.</p>
                    <p>Ik kijk ook veel naar Anime en Formula 1.</p>
                    <p>Mijn studie gaat voor het gamen, dus ik moet eerst al mijn schoolopdrachten afmaken voordat
                            ik ga gamen.</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>Games die ik speel:</h2>
                        <p>Minecraft</p>
                            <p>Counter-Strike Global Offensive</p>
                            <p>Osu!</p>
                            <p>Professor Layton</p>
                            <p>Rocket League</p>
                            <p>Persona 5</p>
                            <p>Ace attorney: Phoenix Wright</p>
                            <p>Valorant</p>
                    </div>
                    <div class="col">
                        <div class="video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/fiJ7JwwlG6o"
                                    title="YouTube video player"
                                    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </main>
@endsection
