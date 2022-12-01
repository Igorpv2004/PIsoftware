<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\animalController;
use App\Http\Controllers\CandidatosController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\homeController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//animais
Route::get('/listaAnimal',[animalController::class,'listaAnimal']);
Route::get('/cadastrarAnimais',[animalController::class,'cadastroAnimal'])->name('cadastrar-animal');
Route::post('/cadastrarAnimais',[animalController::class,'SalvarBancoAnimal'])->name('salvar-banco-animal');
Route::get('/editarAnimal',[animalController::class,'PesquisarAnimal'])->name('editar-animal');
Route::get('/alterarAnimal/{registroAnimal}',[animalController::class,'MostrarAlterarAnimal'])->name('alterar-animal');
Route::delete('/editarAnimal/{registroAnimal}',[animalController::class,'apagarAnimal'])->name('apagar-animal');
Route::put('/editarAnimal/{registroAnimal}',[animalController::class,'AlterarBancoAnimal'])->name('alterar-banco-animal');

//candidatos
Route::get('/cadastrarCandidatos',[CandidatosController::class,'cadastroCandidato'])->name('cadastrar-candidato');
Route::post('/cadastrarCandidatos',[CandidatosController::class,'SalvarBancoCandidato'])->name('salvar-banco-candidatos');
Route::get('/editarCandidato',[CandidatosController::class,'PesquisarCandidato'])->name('editar-candidato');
Route::get('/alterarCandidato/{registroCandidato}',[CandidatosController::class,'MostrarAlterarCandidato'])->name('alterar-candidato');
Route::delete('/editarCandidato/{registroCandidato}',[CandidatosController::class,'apagarCandidato'])->name('apagar-candidato');
Route::put('/editarCandidato/{registroCandidato}',[CandidatosController::class,'AlterarBancoCandidato'])->name('alterar-banco-candidato');


//login
Route::get('/Login',[loginController::class,'login']);
Route::post('/Login', [loginController::class,'user'])->name('login-user');


//cadastro login
Route::get('/cadastrarUsuario',[usuarioController::class,'mostrar']);
Route::post('/cadastrarUsuario',[usuarioController::class,'cadastrar'])->name('criar-usuario');

//home
Route::get('/home',[homeController::class,'MostrarHome'])->name('home');

//
Route::get('/',[HomeController::class,'MostrarHome'])->name('home');

















