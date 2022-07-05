@extends('layouts.app')

@section('title', 'Edição de Endereço')

@section('content')
  <h1>Edição de Endereço</h1>
  <div class="add2">  
    <form method="POST">
      @csrf
      <div class="form-group">
        <label for="street_num">Rua e Número</label>
          <input type="text" class="form-control" id="street_num" name="street_num" 
          value="{{ $data->street_num }}" autofocus="autofocus">
      </div>
      <div class="form-group">
        <label for="cep">Cep</label>
          <input type="text" class="form-control" id="cep" name="cep"
          value="{{ $data->cep }}">
      </div>

      <div class="form-group">
        <label for="district">Bairro</label>
          <input type="text" class="form-control" id="district" name="district"
          value="{{ $data->district }}">
      </div>

      <div class="form-group">
        <label for="city">Cidade</label>
          <input type="text" class="form-control" id="city" name="city"
          value="{{ $data->city }}">
      </div>

      <div class="form-group">
        <label for="state">Estado</label>
          <input type="text" class="form-control" id="state" name="state"
          value="{{ $data->state }}">
      </div>

      <input class="btn btn-sm btn-primary" type="submit" value="Salvar" />
    </form>
    <hr/>
  </div>
@endsection





