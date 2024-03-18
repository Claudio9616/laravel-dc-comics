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
{{-- qui gli passiamo l'id del fumetto cosi la view edit sa di quale fumetto noi vogliamo apportare le modifiche --}}
{{-- 
RICORDA CHE IL TAG A fa solo richieste IN GET, MAI IN POST QUINDI PER UN DESTROY E UN UPDATE (VEDI FILE EDIT) SERVE IL TAG FORM CON LA 
FUNZIONE @METHOD PER IMPOSTARE IL VERBO --}}

<form action="{{route('comics.destroy', $comic->id)}}" method="POST">
{{-- anche qui come in edit dobbiamo passare l'id dell'tem che vogliomo cancellare e lo recuperiamo dalla route che lo passa alla funzione 
nel controller --}}
@csrf
@method('DELETE')
<button type="submit">ELIMINA</button>
</form>
@endsection
