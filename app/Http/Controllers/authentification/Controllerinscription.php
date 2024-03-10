<?php

namespace App\Http\Controllers\authentification;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Controllerinscription extends Controller
{
    public function Inscription_Index(){
        return view('authentification.Inscription');
    }
    public function Inscription_creation(Request $request){
      dd($request);
    }
}
