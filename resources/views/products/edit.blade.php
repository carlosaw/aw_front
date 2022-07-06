@extends('layouts.app')

@section('title', 'Edição de Produto')

@section('content')
  <h1 class="edits">Edição de Produto</h1>
  
  <form method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" name="name" 
        value="{{ $data->name }}" autofocus="autofocus">
    </div>
    <div class="form-group">
      <label for="value_unit">Valor Unit.</label>
        <input type="text" class="form-control" id="value_unit" name="value_unit"
        value="{{ $data->value_unit }}">
    </div>

    <div class="form-group">
      <label for="quantity">Quantidade</label>
        <input type="text" class="form-control" id="quantity" name="quantity" 
        value="{{ $data->quantity }}">
    </div>

    <div class="form-group">
      <label for="discount">Desconto</label>
        <input type="text" class="form-control" id="discount" name="discount" 
        value="{{ $data->discount }}">
    </div>

    <div class="form-group">
      <label for="total">Total</label>
        <input type="text" class="form-control" id="total" name="total" 
        value="{{ $data->total }}">
    </div>

    <input class="btn btn-sm btn-primary" type="submit" value="Salvar" />
  </form>
  <hr/>

@endsection