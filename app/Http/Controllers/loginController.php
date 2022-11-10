<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\login;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{
    public function login()
    {
        return view('login');            
    }

    public function user(Request $request){

        if(Auth::attempt(['email' => $request-> email, 'password' => $request-> password])){
            
            dd('logado');

        }else{

            dd('nao logado');
        }
    }

     
    

}    