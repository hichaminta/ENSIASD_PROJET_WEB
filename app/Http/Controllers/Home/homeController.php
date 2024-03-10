<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use App\Models\etudiant;
use App\Models\filiere;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function Homeindex(){
        // Filter actualités and events based on a field (e.g., type)
        $actualites = Actualite::where('Typeactualites', 'act')->get();
        $evenements = Actualite::where('Typeactualites', 'ev')->get();
        $nombre_etudiants=etudiant::count('*');
        $nombre_fil=filiere::count('*');
        return view('home.index', compact('actualites', 'evenements','nombre_etudiants','nombre_fil'));
    }
}
