<?php

namespace App\Http\Controllers\admincntrl;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use Illuminate\Http\Request;

class admincntrpage extends Controller
{
    function indexcntrlpage()
    {
        return view('Admin.index');
    }
    public function affcher_evenement()
    {
        $evenements = Actualite::where('Typeactualites', '=', 'ev')->get();


        return view('Admin.evenement.index', ['evenements' => $evenements]);
    }
    function ajouter_evenement()
    {
        return view('Admin.index');
    }
    function modifier_evenement()
    {
        return view('Admin.index');
    }
    function suprimer_evenement()
    {
        return view('Admin.index');
    }
    function affcher_actualite()

    {
        $evenements = Actualite::where('Typeactualites', '=', 'cat')->get();
        return view('Admin.actualite.index', ['actualites' => $evenements]);
    }
    function ajouter_actualite()
    {
        return view('Admin.index');
    }
    function modifier_actualite()
    {
        return view('Admin.index');
    }
    function suprimer_actualite()
    {
        return view('Admin.index');
    }

}
