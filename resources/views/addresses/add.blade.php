@extends('layouts.app')

@section('title', 'Adição de Endereço')

@section('content')
<div class="addForm">
  <div class="formAdd">
    <div class="titleAdd">
      <h1>Adição de Endereço</h1>
    </div><br/>


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
        <input type="text" class="form-control" id="street_num" name="street_num" 
        value="{{old('street_num')}}" autofocus placeholder="Rua, número">
      </div>
      <div class="form-group">        
        <input type="text" class="form-control" id="cep" name="cep" value="{{old('cep')}}" placeholder="CEP">
      </div>

      <div class="form-group">        
        <input type="text" class="form-control" id="district" name="district" value="{{old('district')}}"
        placeholder="Bairro">
      </div>

      <div class="form-group">        
        <input type="text" class="form-control" id="city" name="city" value="{{old('city')}}"
      placeholder="Cidade">
      </div>

      <div class="form-group">       
        <input type="text" class="form-control" id="state" name="state" value="{{old('state')}}"
        placeholder="Estado">
      </div>

      <input class="btn btn-sm btn-primary" type="submit" value="Adicionar" />
    </form>
  </div> 
</div> 
@endsection