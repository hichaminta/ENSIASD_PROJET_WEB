<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use Illuminate\Http\Request;

class homeevenementController extends Controller
{
    public function Evenementindex(){
        $evenements = Actualite::where('Typeactualites', 'ev')->get();
        return view('Home.evenement',compact('evenements'));
    }
    public function detailsevent(Actualite $evenement){
    return view('Home.detailleEvent', compact('evenement'));
    }
}
