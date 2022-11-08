@extends('padrao')
@section('content')
<section class="altura6">
<div class="text-center">
  <h1>Tela de Edição</h1>
</div>
<div class="container atualizar">
<form class="row g-3" method="post" action="{{route('alterar-banco-animal',$registroAnimal->id)}}">
  @csrf
  @method('put')
  <div class="col-md-12">
    <label for="inputModelo" class="form-label">Tipo de Animal</label>
    <input type="text" name="tipo" value="{{old('tipo',$registroAnimal->tipo)}}" class="form-control" id="inputModelo" placeholder="Gato">

    @error('tipo')
    <div class="fw-bolder">*Preencher o campo Tipo de Animal. </div>
    @enderror('tipo') 
  </div>
  
  <div class="col-12">
    <label for="inputMarca" class="form-label">Raça</label>
    <input type="text" name="raca" value="{{old('raca',$registroAnimal->raca)}}" class="form-control" id="inputMarca" placeholder="Raça">
    @error('raca')
    <div class="fw-bolder">*Preencher o campo Raça. </div>
    @enderror('raca')  
  </div>
  <div class="col-12">
    <label for="inputAno" class="form-label">Gênero</label>
    <input type="text" name="genero" value="{{old('genero',$registroAnimal->genero)}}" class="form-control" id="inputAno" placeholder="Macho">
    @error('genero')
    <div class="fw-bolder">*Preencher o campo Gênero. </div>
    @enderror('genero')  
  </div>
  <div class="col-md-12">
    <label for="inputCor" class="form-label">Descrição</label>
    <input type="text" name="descricao" value="{{old('descricao',$registroAnimal->descricao)}}" class="form-control" id="inputCor" placeholder="Descrição...">
    @error('descricao')
    <div class="fw-bolder">*Preencher o campo Descrição. </div>
    @enderror('descricao')    
  </div>
 
  
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Atualizar</button>
  </div>
</form>
</div>
</section>
@endsection