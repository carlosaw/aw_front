@extends('layouts.app')

@section('title', 'Edição de Cliente')

@section('content')
  <h1 class="edits">Edição de Cliente</h1>

  <form method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Nome Completo</label>
        <input type="text" class="form-control" id="name" name="name" 
        value="{{ $data->name }}" autofocus="autofocus">
    </div>
    <div class="form-group">
      <label for="cpf">Cpf</label>
        <input type="text" class="form-control" id="cpf" name="cpf" 
        value="{{ $data->cpf }}">
    </div>

    <div class="form-group">
      <label for="fone">Fone</label>
        <input type="text" class="form-control" id="fone" name="fone" 
        value="{{ $data->fone }}">
    </div>

    <div class="form-group">
      <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" 
        value="{{ $data->email }}">
    </div>

    <input class="btn btn-sm btn-primary" type="submit" value="Salvar" />
  </form>
  <hr/>

@endsection