@extends('padrao')
@section('content')


<div class="text-center">
  <h1>Tela de Cadastro</h1>
</div>

<div class="container cadastroAnimal">
<form class="row g-3" method="post" enctype="multipart/form-data" action="{{route('salvar-banco-animal')}}">
  
  @csrf

  <div class="form-group">
    <label for="image"> Foto do animal:</label>
    <input type="file" id="image" name="image" class="from-control-file">

  </div>


  <div class="col-md-12">
    <label for="inputModelo" class="form-label">Tipo de Animal</label>
    <input type="text" name="tipo" value="{{old('tipo')}}" class="form-control" id="inputModelo" placeholder="Cachorro">

    @error('tipo')
    <div class="fw-bolder">*Preencher o campo Tipo de Animal. </div>
    @enderror('tipo') 
  </div>
  
  <div class="col-12">
    <label for="inputMarca" class="form-label">Raça</label>
    <input type="text" name="raca" value="{{old('raca')}}" class="form-control" id="inputMarca" placeholder="Pitbull">
    @error('raca')
    <div class="fw-bolder">*Preencher o campo Raça. </div>
    @enderror('raca')  
  </div>
  <div class="col-12">
    <label for="inputMarca" class="form-label">Gênero</label>
    <input type="text" name="genero" value="{{old('genero')}}" class="form-control" id="inputMarca" placeholder="Fêmea">
    @error('genero')
    <div class="fw-bolder">*Preencher o campo Gênero. </div>
    @enderror('genero')  
  </div>
  <div class="col-12">
    <label for="inputAno" class="form-label">Descrição</label>
    <input type="text" name="descricao" value="{{old('descricao')}}" class="form-control" id="inputAno" placeholder="Descrição...">
    @error('descricao')
    <div class="fw-bolder">*Preencher o campo Descrição. </div>
    @enderror('descricao')  
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</div>
<footer>


@endsection


