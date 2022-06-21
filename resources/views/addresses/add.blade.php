@extends('layouts.app')

@section('title', 'Adição de Endereço')

@section('content')
  <h1>Adição de Endereço</h1>

    

    {{-- @if(session('success'))
      <div class="alert alert-success">
        {{session('success')}}
      </div>
    @elseif(session('warning'))
      <div class="alert alert-warning">
        {{session('warning')}}
      </div>
    @endif --}}
    
    <form method="POST">
      @csrf
      <div class="form-group">
        <label for="street_num">Rua e Número</label>
          <input type="text" class="form-control" id="street_num" name="street_num">
      </div>
      <div class="form-group">
        <label for="cep">Cep</label>
          <input type="text" class="form-control" id="cep" name="cep">
      </div>

      <div class="form-group">
        <label for="district">Bairro</label>
          <input type="text" class="form-control" id="district" name="district">
      </div>

      <div class="form-group">
        <label for="city">Cidade</label>
          <input type="text" class="form-control" id="city" name="city">
      </div>

      <div class="form-group">
        <label for="state">Estado</label>
          <input type="text" class="form-control" id="state" name="state">
      </div>

      <input class="btn btn-primary" type="submit" value="Adicionar" />
    </form>
    <hr/>
  
@endsection