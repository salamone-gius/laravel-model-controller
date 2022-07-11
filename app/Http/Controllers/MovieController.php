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
        $movies = Movie::all();
        
        return view('home', compact('movies'));
    }
}
