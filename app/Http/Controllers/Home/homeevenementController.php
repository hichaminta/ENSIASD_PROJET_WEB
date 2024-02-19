<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeevenementController extends Controller
{
    public function Evenementindex(){
        return view('Home.evenement');
    }
    public function detailsevent(){
        return view('Home.detailleEvent');
    }
}
