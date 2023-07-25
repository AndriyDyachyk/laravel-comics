@extends('layout.app')

@section('mainpagecontent')
    <main id="home">
        <div id="jumbotron">

        </div>
        <div class="container">
            <div class="section_label label">
                <h2>CURRENT SERIES</h2>
            </div>
            <div class="content">
            @foreach($comics as $id => $comic)
                <a href="{{ route('comics.show', $id)}}" class="comic">
                    <div class="cover">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series']}}">
                    </div>
                    <h5>{{ $comic['series']}}</h5>
                </a>
            @endforeach
            </div>
            <div class="center">
                <button class="label">LOAD MORE</button>
            </div>
        </div>
    </main>
    <footer>
        <section id="shops">
                    <div class="container">
                    @foreach($shops as $shop)
                        <a href="shop.url" class="shop_card">
                            <img src="{{ Vite::asset($shop['icon']) }}" alt="{{ $shop['name'] }}">
                            <p>{{ $shop['name']}}</p>
                        </a>
                    @endforeach
                    </div>
        </section>
    </footer>
@endsection