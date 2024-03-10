<?php

namespace App\Http\Controllers\authentification;

use App\Http\Controllers\Controller;
use App\Models\etudiant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use Nette\Utils\Random;

class Controllerinscription extends Controller
{
    public function Inscription_Index(){
        return view('authentification.Inscription');
    }
    public function Inscription_creation(Request $request){
        $formfieldcate1 = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'date_naissance' => 'required',
            'gender' => 'required',
            'email' => 'required|email|unique:users,email',
            'tele' => 'required',
            'pass' => 'required',
        ]);
        $formfieldcate2=$request->validate([
            'filiere' => 'required|string',
            'CNE' => 'required|string|unique:etudiants,CNE',
        ]);
          $id=rand(1,1000)*rand(1,1000)*2*rand(1,1000);
        $user = User::create([
            'id'=>$id,
            'name' => $formfieldcate1['nom'],
            'prenom' => $formfieldcate1['prenom'],
            'email' => $formfieldcate1['email'],
            'password'=>Hash::make($formfieldcate1['pass']),
            'role'=>'etudiant',
            'sexe'=>$formfieldcate1['gender'],
            'tele'=>$formfieldcate1['tele'],
            'ville'=>$formfieldcate1['ville'],
            'date_naissance'=>$formfieldcate1['date_naissance'],
            'remember_token'=>Hash::make("sdhsfedhbsdhu"),
            // Add other user fields as needed
        ]);

        $etudiant = etudiant::create([
            'id' => $id,
            'Filiere' => $formfieldcate2['filiere'],
            'CNE'=>$formfieldcate2['CNE']

        ]);
        return redirect()->route('Inscription.creation')->with('success', 'creation compte Bien.');
    }
}
