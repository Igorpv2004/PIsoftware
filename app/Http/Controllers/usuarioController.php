<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\usuario;
use App\Models\User;




class usuarioController extends Controller
{
    public function mostrar()
    {
        return view('cadastrarUsuario');            
    }

    public function cadastrar(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'

        ],[
            'email.required' => 'E-mail é obrigatório!',
            'password.required' => 'Senha é obrigatório!',
            'name.required' => 'Nome é obrigatório!',


        ]);

        if(!empty($request->all())){
       
        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();

        return Redirect::route('login-user');
        }else{
            dd("não cadastrado");
        }

    }
                  
    

}