@extends('layouts.app')

@section('title', 'Adição de Veículo')

@section('content')
  <h1>Adição de Veículo</h1>

  @if(session('warning'))
    <div class="alert alert-danger">
      {{session('warning')}}
    </div>
  @endif
  
  <form method="POST">
    @csrf
    <div class="form-group">
      <label for="plate">Placa</label>
        <input type="text" class="form-control" id="plate" name="plate">
    </div>
    <div class="form-group">
      <label for="brand">Marca</label>
        <input type="text" class="form-control" id="brand" name="brand">
    </div>

    <div class="form-group">
      <label for="model">Modelo</label>
        <input type="text" class="form-control" id="model" name="model">
    </div>

    <div class="form-group">
      <label for="color">Cor</label>
        <input type="text" class="form-control" id="color" name="color">
    </div>

    <div class="form-group">
      <label for="year">Ano</label>
        <input type="text" class="form-control" id="year" name="year">
    </div>

    <div class="form-group">
      <label for="km">Quilometragem</label>
        <input type="text" class="form-control" id="km" name="km">
    </div>

    <input class="btn btn-sm btn-primary" type="submit" value="Adicionar" />
  </form>
  <hr/>
@endsection