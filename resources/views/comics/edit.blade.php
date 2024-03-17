@extends('layouts.main')

@section('main-content')
<div class="container">
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        {{-- qui gli passiamo l'id cosi la funzione update saprà a quale fumetto con id X presente sul db apportare le modifiche --}}
        @csrf
        @method('PUT')
        {{-- dato che l'html utilizza solo i valori get e post, quando per ovvie ragioni non possono essere loro, allora si utilizza @method --}}
        <label for="title">Inserisci il nome del fumetto</label>
        <input type="text" name="tile" id="title" placeholder="NOME FUMETTO" value="{{old('tile', $comic->tile)}}">

        <label for="thumb">Inserisci la copertina</label>
        <input type="url" id="thumb" name="thumb" placeholder="Es: http//..." value="{{old('thumb', $comic->thumb)}}">

        <label for="price">Inserisci prezzo</label>
        <input type="number" name="price" id="price" placeholder="20,00€" value="{{old('price', $comic->price)}}">

        <label for="series">Inserisci la serie</label>
        <input type="text" name="series" id="series" placeholder="Es: Action Comics" value="{{old('series', $comic->series)}}">

        <label for="type">Inserisci il tipo</label>
        <input type="text" name="type" id="type" placeholder="Es: comic book" value="{{old('type', $comic->type)}}">

        <label for="sale_date">Inserisci data stampa</label>
        <input type="text" name="sale_date" id="sale_date" placeholder="Es: 2020-10-06" value="{{old('sale_date', $comic->sale_date)}}">

        <textarea name="description" id="description" cols="50" rows="5">{{old('description', $comic->description)}}</textarea>

        <button type="reset">Svuoata campi</button>
        <button type="submit">Salva</button>
    </form>
</div>
@endsection
{{-- Qui tramite il controller che si aspetta un'istanza di $comic (fornitagli dalla route edit), stiamo passando ogni songolo valore di comic, in questi casi
siccome è buona norma che l'utente legga ciò che sta modificando e che non perda i valori che ha inserito a seguito di una modifica, usiamo la funzione 
old che si aspetta 2 valori, il primo è il name dell'input per non perdere i valori che l'utente ha inserito e il secondo è prorio ciò che cè scritto nell'item che stiamo modificando --}}