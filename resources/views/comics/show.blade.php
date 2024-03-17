@extends('layouts.main')
@section('main-content')
<div class='container'>
    <h1>{{$comic->tile}}</h1>
</div>
<div class='d-flex'>
    <figure>
        <img src="{{$comic->thumb}}" alt="">
    </figure>
    <div class='gap'>
        <p>{{$comic->description}}</p>
        <div class='d-flex'>
            <h3>{{$comic->sale_date}}</h3>
            <h3>{{$comic->series}}</h3>
            <h3>{{$comic->type}}</h3>
            <h3>{{$comic->price}}</h3>
        </div>
    </div>
</div>
<a href="{{route('comics.edit', $comic->id)}}">MODIFICA</a>
{{-- qui gli passiamo l'id del fumetto cosi la view edit sa di quale fumetto noi vogliomo apportare le modifiche --}}
@endsection
