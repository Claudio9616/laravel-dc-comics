@extends('layouts.main')
@section('main-content')
<main>
    <div class="container card-container">
        <div class="comics-container">
            <a href="{{route('comics.create')}}">AGGIUNGI UN FUMETTO</a>
            @foreach ($comics as $comic )
            <a href='{{route('comics.show', $comic->id)}}'>
                <img src="{{$comic->thumb}}" alt="">
                <h4>{{$comic->tile}}</h4>
            </a>
            @endforeach
        </div>
    </div>
</main>
@endsection
