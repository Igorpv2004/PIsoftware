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

        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'E-mail é obrigatório!',
            'password.required' => 'Senha é obrigatório!',

        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return Redirect::route('home');
        }else{
            return redirect()->back()->with('danger','E-mail ou Senha inválida');
            
        }
    }

     
    

}    