@extends('layouts.app')

@section('title', 'Adição de Produto')

@section('content')
<div class="addForm">
  <div class="formAdd">
    <div class="titleAdd">
      <h1>Adição de Produto</h1>
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
        placeholder="Nome do produto">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="value_unit" name="value_unit" placeholder="Valor Unitário*">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantidade">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" id="discount" name="discount" placeholder="Desconto*">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" id="total" name="total" placeholder="Total*">
      </div>

      <input class="btn btn-sm btn-primary" type="submit" value="Adicionar" />
    </form>
  </div>
</div>
@endsection