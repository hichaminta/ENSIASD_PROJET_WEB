<?php

namespace App\Http\Controllers\Espace_etudiant;

use App\Http\Controllers\Controller;
use App\Models\annonce;
use App\Models\emploi_de_temps;
use App\Models\etudiant;
use Illuminate\Http\Request;

class HomeSPaceetudiantConroller extends Controller
{
    public function Espace_etudiant_Homeindex(){
        $annonces=annonce::all();
        return view('Espace_etudiant.index',compact('annonces'));
    }
    public function Etudiant_Emploi_de_Temps_Homeindex(){
        $etudiant=etudiant::where('id',auth()->user()->id)->get();
        $emplois_de_temps=emploi_de_temps::where('id_emploi_filiere',$etudiant[0]->Filiere)->get();
        return view('Espace_etudiant.emploi_de_temps',compact('emplois_de_temps'));
    }
}
