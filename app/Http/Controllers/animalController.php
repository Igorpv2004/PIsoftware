<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Animal;


class animalController extends Controller
{
    public function cadastroAnimal()
    {
        return view('cadastrarAnimais');            
    }

    public function listaAnimal()
    {
        return view('listaAnimal');            
    }
    public function SalvarBancoAnimal(Request $request){

        $dadosAnimal = $request->validate([
            'tipo' => 'string|required',
            'raca' => 'string|required',
            'genero' => 'string|required',
            'descricao' => 'string|required',
            
            
    
        ]);
        $animal = new Animal;

        $animal->tipo = $request->tipo;
        $animal->raca = $request->raca;
        $animal->genero = $request->genero;
        $animal->descricao = $request->descricao;
        

        if($request->hasFile('image') && $request->file('image')->isValid()){
        
            $requestImage = $request->image;
    
            $extension = $requestImage->extension();
    
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
    
            $requestImage->move(public_path('img/animal'), $imageName);
    
            $animal->image = $imageName;
    
        }
    
        $animal->save();
    
        return redirect('/home')->with('msg', 'Cadastro realizado com sucesso!');
    
        animal::create($dadosAnimal);
    
        return Redirect::route('editar-animal');
        
}

public function PesquisarAnimal(Request $request){
            
    $dadosAnimal = animal::query();
    $dadosAnimal->when($request->tipo,function($query, $v1){
        $query->where('tipo','like','%'.$v1.'%');
    });

    $dadosAnimal = $dadosAnimal->get();
    
   return view('editarAnimal',['registroAnimal' => $dadosAnimal]);
}

public function MostrarAlterarAnimal(animal $registroAnimal){

    return view('alterarAnimal', ['registroAnimal' => $registroAnimal]);
}

public function apagarAnimal(animal $registroAnimal){
        
        
    $registroAnimal->delete();


    return Redirect::route('editar-animal');
}

public function AlterarBancoAnimal(animal $registroAnimal, Request $request){

    $banco = $request->validate([
    'tipo' => 'string|required',
    'raca' => 'string|required',
    'genero' => 'string|required',
    'descricao' => 'string|required',
    

    ]);

    $registroAnimal->fill($banco);
    $registroAnimal->save();

    

    return Redirect::route('editar-animal');
}


}
