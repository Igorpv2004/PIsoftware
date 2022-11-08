@extends('padrao')
@section('content')
<section class="altura6">
<div class="text-center">
  <h1>Tela de Edição</h1>
</div>
<div class="container atualizar">
<form class="row g-3" method="post" action="{{route('alterar-banco-candidato',$registroCandidato->id)}}">
  @csrf
  @method('put')
  <div class="col-md-12">
    <label for="inputModelo" class="form-label">Nome</label>
    <input type="text" name="nome" value="{{old('nome',$registroCandidato->nome)}}" class="form-control" id="inputModelo" placeholder="Nome">

    @error('nome')
    <div class="fw-bolder">*Preencher o campo Nome. </div>
    @enderror('nome') 
  </div>
  
  <div class="col-12">
    <label for="inputMarca" class="form-label">E-mail</label>
    <input type="text" name="email" value="{{old('email',$registroCandidato->email)}}" class="form-control" id="inputMarca" placeholder="exemplo@hotmail.com">
    @error('email')
    <div class="fw-bolder">*Preencher o campo E-mail. </div>
    @enderror('email')  
  </div>
  <div class="col-12">
    <label for="inputAno" class="form-label">Data De Nascimento</label>
    <input type="text" name="DataDeNascimento" value="{{old('DataDeNascimento',$registroCandidato->DataDeNascimento)}}" class="form-control" id="inputAno" placeholder="12/12/12">
    @error('DataDeNascimento')
    <div class="fw-bolder">*Preencher o campo Data De Nascimento. </div>
    @enderror('DataDeNascimento')  
  </div>
  <div class="col-md-12">
    <label for="inputCor" class="form-label">Telefone</label>
    <input type="text" name="telefone" value="{{old('telefone',$registroCandidato->telefone)}}" class="form-control" id="inputCor" placeholder="(11) 95980-3655">
    @error('telefone')
    <div class="fw-bolder">*Preencher o campo Telefone. </div>
    @enderror('telefone')    
  </div>
 
  
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Atualizar</button>
  </div>
</form>
</div>
</section>
@endsection