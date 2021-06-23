<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;

class LogoutController extends Controller
{
    public function index(){
        return redirect('login');

    }
}