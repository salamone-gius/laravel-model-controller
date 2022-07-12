<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// importo il model che mi serve utilizzando la keyword 'use' seguito dal percorso (con namespace)
use App\Movie;


class MovieController extends Controller
{
    // nel controller inserisco le logiche attraverso un metodo public;
    // il controller, attraverso il model, leggerà i dati del db restituendoli come view o json
    public function index() {

        // inserisco le query per richiedere al db i dati che voglio prendere (in mysql: SELECT * FROM movies)
        // restituisce una collection di oggetti
        $movies = Movie::all();

        // mi faccio ritornare la view di home e la tabella 'movies' formattata. L'argomento deve matchare con la variabile all'interno
        return view('home', compact('movies'));

    }

    public function show($id) {

        // nel metodo public 'show' filtro (where) i dati del db in modo che mi retituisca il sinolo film
        // in mysql: SELECT * FROM movies WHERE id = $id
        // $movie = MOVIE::where('id', $id)->first();
        $movie = Movie::find($id);

        return view('movie-details', compact('movie'));
    }
}
