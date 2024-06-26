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
             else if(auth()->user()->role=='admin'){
                return redirect()->route('admin.actualite.index');
             }

        } else {
            return redirect()->route('Login.index')->with('error', 'Invalid email or password.');
        }
    }
    Public function lougout(){
        Auth::logout();
        return redirect('/');
    }
    public function verifyEmail(User $user, $token)
    {
        // Check if the provided token matches the user's remember token
        if ($token === $user->remember_token) {
            // Token matches, update the user's email verification status
            $user->etat = 1;
            $user->save();

            // You can also perform additional actions if needed

            // Redirect or display a success message
            return redirect()->route('Login.index')->with('success', 'Email verified successfully');
        } else {
            // Token doesn't match, handle the error (e.g., redirect to an error page)
            return redirect()->route('home.index')->with('error', 'Invalid verification token');
        }
    }

}
