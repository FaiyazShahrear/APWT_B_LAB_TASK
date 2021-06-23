<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Support\Facades\DB;
use Validator;

class RegistrationController extends Controller
{
    public function index(){
        return view('registration');
    }

    public function registration(RegistrationRequest $req){
        $result = DB::table('users')->insert([
            'name'=>$req->name,
            'user name'=>$req->username,
            'email'=>$req->email,
            'password'=>$req->password,
            'city'=>$req->city,
            'country'=>$req->country,
            'company name'=>$req->CompanyName,
            'phone'=>$req->phone,
            'type'=>'customer',
        ]);
        // if(count($result)>0){
        return \redirect()->route('login');
        // }else{
        //     $req->session()->flash( 'msg', 'Registration failed' );
        //     return redirect( '/registration' );
        // }
    }
}
