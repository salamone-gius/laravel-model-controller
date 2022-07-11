<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    // nel controller inserisco le logiche attraverso un metodo public;
    // il controller, attraverso il model, leggerà i dati del db restituendoli come view o json
    public function index() {
        return 'ciao';
    }
}
