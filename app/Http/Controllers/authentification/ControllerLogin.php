<?php

namespace App\Http\Controllers\authentification;

use App\Http\Controllers\Controller;
use App\Models\etudiant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ControllerLogin extends Controller
{
    public function LoginIndex(){
        return view('authentification.login');
    }
    public function Loginconnecter(Request $request){
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
             if(auth()->user()->role=='etudiant'){
                return redirect()->route('espace_etudiant.index');
             }

        } else {
            return redirect()->route('Login.index')->with('error', 'Invalid email or password.');
        }
    }
    Public function lougout(){
        Auth::logout();
        return redirect('/');
    }
    public function verfiedmail(User $id,$token){
if($token==$id->rememberTokenName){
    dd("hh");
}

    }
}
