@extends('layouts.main')

@section('main-content')
<div class="container">
    <form action="{{route('comics.store')}}" method="POST">
        <label for="title">Inserisci il nome del fumetto</label>
        <input type="text" name="tile" id="title" placeholder="NOME FUMETTO">
        <label for="thumb">Inserisci la copertina</label>
        <input type="url" id="thumb" name="thumb" placeholder="Es: http//...">
        <label for="price">Inserisci prezzo</label>
        <input type="number" name="price" id="price" placeholder="20,00€">
        <label for="series">Inserisci la serie</label>
        <input type="text" name="series" id="series" placeholder="Es: Action Comics">
        <label for="type">Inserisci il tipo</label>
        <input type="text" name="type" id="type" placeholder="Es: comic book">
        <label for="sale_date">Inserisci data stampa</label>
        <input type="text" name="sale_date" id="sale_date" placeholder="Es: 2020-10-06">
        <textarea name="description" id="description" cols="50" rows="5"></textarea>
        <button type="reset">Svuoata campi</button>
        <button type="submit">Salva</button>
    </form>
</div>
@endsection
