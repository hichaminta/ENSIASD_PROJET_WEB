<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function Homeindex(){
        // Filter actualités and events based on a field (e.g., type)
        $actualites = Actualite::where('Typeactualites', 'act')->get();
        $evenements = Actualite::where('Typeactualites', 'ev')->get();
        return view('home.index', compact('actualites', 'evenements'));
    }
}
