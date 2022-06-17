@extends('layouts.app')

@section('title', 'Adição de Produto')

@section('content')
  <h1>Adição de Produto</h1>

  @if(session('warning'))
    <div class="alert alert-danger">
      {{session('warning')}}
    </div>
  @endif
  @if(session('success'))
    <div class="alert alert-success">
      {{session('success')}}
    </div>
  @endif
  
  <form method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
      <label for="value_unit">Valor Unit.</label>
        <input type="text" class="form-control" id="value_unit" name="value_unit">
    </div>

    <div class="form-group">
      <label for="quantity">Quantidade</label>
        <input type="text" class="form-control" id="quantity" name="quantity">
    </div>

    <div class="form-group">
      <label for="discount">Desconto</label>
        <input type="text" class="form-control" id="discount" name="discount">
    </div>

    <div class="form-group">
      <label for="total">Total</label>
        <input type="text" class="form-control" id="total" name="total">
    </div>

    <input class="btn btn-sm btn-primary" type="submit" value="Adicionar" />
  </form>
  <hr/>
@endsection