<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function Conatactindex(){
        return view('Home.contact');
    }
    public function inserercontact(Request $request){


        $request->validate([
            'name' => 'required|',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
     contact::create([
            'Nom' =>$request->input('name'),
            'email' => $request->input('email'),
            'tele' => $request->input('phone'),
            'sujet' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);
        return redirect()->route('contact.index')->with('success', 'Contact envoyer successfully.');

    }
}
