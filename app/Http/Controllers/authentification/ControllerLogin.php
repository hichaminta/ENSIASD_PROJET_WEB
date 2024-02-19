<?php

namespace App\Http\Controllers\authentification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerLogin extends Controller
{
    public function LoginIndex(){
        return view('authentification.login');
    }
}
