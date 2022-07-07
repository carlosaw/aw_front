@extends('layouts.app')

@section('title', 'Adição de Veículo')

@section('content')
<div class="addForm">
  <div class="formAdd">
    <div class="titleAdd">
      <h1>Adição de Veículo</h1>
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
      <input type="text" class="form-control" id="plate" name="plate" autofocus="autofocus"
      placeholder="Placa">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="brand" name="brand" placeholder="Marca">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="model" name="model" placeholder="Modelo">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="color" name="color" placeholder="Côr">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="year" name="year" placeholder="Ano">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="km" name="km" placeholder="KM">
    </div>

    <input class="btn btn-sm btn-primary" type="submit" value="Adicionar" />
  </form>
  </div>
</div>
@endsection