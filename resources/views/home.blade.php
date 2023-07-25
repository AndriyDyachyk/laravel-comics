@extends('layout.app')

@section('mainpagecontent')
    <div id="jumbotron">

    </div>
    <div class="container">
        <div class="section_label label">
            <h2>CURRENT SERIES</h2>
        </div>
        <div class="content">
            @foreach($comics as $comic)
            <a class="comic">
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
@endsection