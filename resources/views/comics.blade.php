@extends('layouts.main')
@section('main-content')
<main>
    <div class="container card-container">
        <div class="comics-container">
            @foreach ($comics as $index => $comic )
            <a href='{{route('comic', ['index' => $index])}}'>
                <img src="{{$comic['thumb']}}" alt="">
                <h4>{{$comic['title']}}</h4>
            </a>
            @endforeach
        </div>
    </div>
</main>
@endsection

{{-- @foreach ($comics as $index => $comic )
<a href='{{route('comic', $index)}}'>
    <img src="{{$comic['thumb']}}" alt="">
    <h4>{{$comic['title']}}</h4>
</a>
@endforeach --}}

{{-- @foreach ($comics as $comic )
            <a href='{{route('comic', $loop->index])}}'>
                <img src="{{$comic['thumb']}}" alt="">
                <h4>{{$comic['title']}}</h4>
            </a>
            @endforeach --}}

{{-- COMICS è un array di array associativi di conseguenza a riga 6 la sintassi base di php dice $key => $qualcosa, essendo un array di array 
associativi la $key è L'INDICE ($index), poi a riga 7 nella route gli passo come secondo parametro (che andrà a finire in quello che abbiamo
scritto a riga 21 del file web) proprio l'indice dell'array che racchiude l'array associativo PERCHè è UN ARRAY DI ARRAY ASSOCIATIVI --}}

{{-- Inoltre Laravel ti permette di scrivere meno e puoi passere come parametro semplicemente il $index (guarda riga 19) --}}

{{-- oppure puoi usare la variabile $loop->index è in automatico ti trova lui stello l'indice (guarda sintassi righe 24 e 25) --}}
