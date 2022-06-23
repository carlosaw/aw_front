@extends('layouts.app')

@section('title', 'Edição de Veículo')

@section('content')
  <h1>Edição de Veículo</h1>
  
  <form method="POST">
    @csrf
    <div class="form-group">
      <label for="plate">Placa</label>
        <input type="text" class="form-control" id="plate" name="plate" 
        value="{{ $data->plate }}">
    </div>
    <div class="form-group">
      <label for="brand">Marca</label>
        <input type="text" class="form-control" id="brand" name="brand"
        value="{{ $data->brand }}">
    </div>

    <div class="form-group">
      <label for="model">Modelo</label>
        <input type="text" class="form-control" id="model" name="model"
        value="{{ $data->model }}">
    </div>

    <div class="form-group">
      <label for="color">Cor</label>
        <input type="text" class="form-control" id="color" name="color"
        value="{{ $data->color }}">
    </div>

    <div class="form-group">
      <label for="year">Ano</label>
        <input type="text" class="form-control" id="year" name="year"
        value="{{ $data->year }}">
    </div>

    <div class="form-group">
      <label for="km">Quilometragem</label>
        <input type="text" class="form-control" id="km" name="km"
        value="{{ $data->km }}">
    </div>

    <input class="btn btn-sm btn-primary" type="submit" value="Salvar" />
  </form>
  <hr/>

@endsection