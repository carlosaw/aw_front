@extends('layouts.app')

@section('title', 'Adição de Cliente')

@section('content')
<div class="addForm">
  <div class="formAdd">
    <div class="titleAdd">
      <h1>Adição de Cliente</h1>
    </div>
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
        <input type="text" class="form-control" id="name" name="name" autofocus="autofocus"
        placeholder="Nome Completo">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="cpf/cnpj">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" id="fone" name="fone" placeholder="Fone/Celular">
      </div>

      <div class="form-group">
        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
      </div>

      <input class="btn btn-sm btn-primary" type="submit" value="Adicionar" />
    </form>
  </div>
</div>
@endsection