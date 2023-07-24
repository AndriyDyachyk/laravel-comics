<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
<main>
        <div id="jumbotron">

        </div>
        <div class="container">
            <div class="section_label label">
                <h2>CURRENT SERIES</h2>
            </div>
            <div class="content">
                @foreach($comics as $comic)
                <div class="comic">
                    <div class="cover">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series']}}">
                    </div>
                    <h5>{{ $comic['series']}}</h5>
                </div>
                @endforeach
            </div>
            <div class="center">
                <button class="label">LOAD MORE</button>
            </div>
        </div>
    </main>
    @include('partials.footer')
</body>

</html>