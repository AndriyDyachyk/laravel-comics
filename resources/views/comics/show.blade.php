@extends('layout.app')

@section('comicpagecontent')
    <main id="comic">
        <div id="jumbotron">

        </div>
        <div class="container">
            <div class="section_label label">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="content">
                    <h3>{{ $comic['title']}}</h3>

                    <p>{{ $comic['description']}}</p>
                </div>
                <div class="adv">
                    <label for="adv">ADVERTISEMENT</label>
                    <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="advertisement" name="adv">
                </div>
            </div>
        </div>
    </main>
@endsection
