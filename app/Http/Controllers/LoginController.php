<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function verify(LoginRequest $req)
    {
        
        if($req->email == $req->password){
            return redirect('/home');
        }
         else
         {
             echo "Invalid User";
         }
    }
}
