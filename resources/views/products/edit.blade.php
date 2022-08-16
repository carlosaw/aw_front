@extends('layouts.app')

@section('title', 'Edição de Produto')

@section('content')
<div class="veiForm">
  <div class="formVei">
    <div class="titleVei">
      <h1>Edição de Produto</h1>
    </div><br/>
  
  <form method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" name="name" 
        value="{{ $data->name }}" autofocus="autofocus">
    </div>
    <div class="form-group">
      <label for="value_unit">Preço</label>
        <input type="text" class="form-control" id="price" name="price"
        value="{{ $data->price }}">
    </div>

    <div class="form-group">
      <label for="quantity">Quantidade</label>
        <input type="text" class="form-control" id="quantity" name="quantity" 
        value="{{ $data->quantity }}">
    </div>

    <input class="btn btn-sm btn-primary" type="submit" value="Salvar" />
  </form>
  </div>
</div>


@endsection