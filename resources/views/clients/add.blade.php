@extends('layouts.app')

@section('title', 'Adição de Cliente')

@section('content')
  <h1>Adição de Cliente</h1>
  @if(session('success'))
    <div class="alert alert-success" id="success">
      {{session('success')}}
    </div>  
  @elseif(session('warning'))
    <div class="alert alert-warning" id="warning">
      {{session('warning')}}
    </div>
  @endif

  <form method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Nome Completo</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
      <label for="cpf">Cpf</label>
        <input type="text" class="form-control" id="cpf" name="cpf">
    </div>

    <div class="form-group">
      <label for="fone">Fone</label>
        <input type="text" class="form-control" id="fone" name="fone">
    </div>

    <div class="form-group">
      <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>

    <input class="btn btn-sm btn-primary" type="submit" value="Adicionar" />
  </form>
  <hr/>

@endsection