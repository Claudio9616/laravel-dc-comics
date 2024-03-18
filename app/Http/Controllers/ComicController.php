<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tile' => 'required|string',
            'thumb' => 'nullable|url:http,https',
            'price' => 'required|numeric|min:5|max:200',
            'series' => 'required|string',
            'type' => 'required|string',
            'sale_date' => 'required|string',
            'description' => 'nullable|string'
        ]);
        $data = $request->all();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();
        return to_route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        // ricorda che la request serve per prendere i campi nel db

        $request->validate([
            'tile' => 'required|string',
            'thumb' => 'nullable|url:http,https',
            'price' => 'required|numeric|min:5|max:200',
            'series' => 'required|string',
            'type' => 'required|string',
            'sale_date' => 'required|string',
            'description' => 'nullable|string'
        ]);
        // praticamente se hai delle validazioni semplici come qui sopra va bene pure un copia e incolla, ma se hai una validazione un pò più 
        // complessa tipo ('thumb' => 'unique:comics') QUESTA RIMANE COSI NELA FUNZIONE STORE, ma in questa funzione trasformi la validazione in 
        // un array e scrivi Rule::unique('comics')->ignore($comic->id); PRATICAMENTE GLI STAI DICENDO CHE IN QUESTA FUNZIONE, PER QUESTO ID DEVE IGNORARE 
        // IL FATTO DI ESSERE UNIQUE, per tutto il resto va bene un copi e incolla
        $data = $request->all();
        // a differenza dello store, che dovevamo creare un nuovo fumetto, qui non dobbiamo creare ma modificare uno già esistente
        $comic->fill($data);
        $comic->save();
        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        // Anche qui abbaimo il singolo id che dobbiamo cancellare
        $comic->delete(); 
        return to_route('comics.index')->with('message', "$comic->tile eliminato con successo");
        // Qui per migliorare l'esperienza utente posso agganciare al return la funzione with che si aspetta 2 valori e che si aggancia all'if
        // nella comics.index. OVVIAMENTE questa funzionr WITH la posso usare in tutti redirect che voglio
    }
}
