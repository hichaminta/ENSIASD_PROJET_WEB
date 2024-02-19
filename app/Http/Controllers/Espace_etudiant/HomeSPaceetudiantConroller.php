<?php

namespace App\Http\Controllers\Espace_etudiant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeSPaceetudiantConroller extends Controller
{
    public function Espace_etudiant_Homeindex(){
        return view('Espace_etudiant.index');
    }
}
