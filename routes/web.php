<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\animalController;

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

Route::get('/cadastrarAnimais',[animalController::class,'cadastroAnimal'])->name('cadastrar-animal');
Route::post('/cadastrarAnimais',[animalController::class,'SalvarBancoAnimal'])->name('salvar-banco-animal');
Route::get('/editarAnimal',[animalController::class,'PesquisarAnimal'])->name('editar-animal');
Route::get('/alterarAnimal/{registroAnimal}',[animalController::class,'MostrarAlterarAnimal'])->name('alterar-animal');
Route::delete('/editarAnimal/{registroAnimal}',[animalController::class,'apagarAnimal'])->name('apagar-animal');
Route::put('/editarAnimal/{registroAnimal}',[animalController::class,'AlterarBancoAnimal'])->name('alterar-banco-animal');



