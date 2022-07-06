@extends('layouts.app')

@section('title', 'Lista de Produtos')

@section('content')
  <h1>Lista de Produtos</h1>

  @if(session('success'))
    <div class="alert alert-success" id="success">
      {{session('success')}}
    </div>
  @elseif(session('danger'))
    <div class="alert alert-danger" id="danger">
      {{session('danger')}}
    </div>
  @elseif(session('warning'))
    <div class="alert alert-warning" id="warning">
      {{session('warning')}}
    </div>
  @endif

  <a href="{{ route('products.add') }}">
    <button class="btnadd btn-sm btn-primary">Adicionar</button>
  </a>

  <table class="table table-striped table-hover">
    <thead class="thead-dark">
      <tr>
        <th>Nome</th>
        <th>Valor Unitário</th>
        <th>Quantidade</th>
        <th>Desconto</th>
        <th>Total</th>
        <th style="text-align: center">Ações</th>
      <tr>
    </thead> 

    @if(count($list) > 0)  
      @foreach($list as $item)    
        <tr>
          <td>{{$item->name}}</td>
          <td style="text-align: center">{{  number_format($item->value_unit,2,',','.') }}</td>
          <td style="text-align: center">{{ $item->quantity }}</td>
          <td style="text-align: center">{{ number_format($item->discount,2,',','.') }}</td>
          <td style="text-align: center">{{ number_format($item->total,2,',','.') }}</td>
          <td style="display: flex; justify-content:space-around">
            <a href="{{ route('products.edit', ['id' => $item->id]) }}" class="edit"  data-toggle="tooltip" data-html="true">
              <button class="btn btn-primary">Editar</button>
            </a>             
            <a href="{{ route('products.del', ['id' => $item->id]) }}" onclick="confirm('Tem certeza que deseja excluir este Produto?')" data-toggle="tooltip" data-html="true">              
               <button class="btn btn-danger">Excluir</button>                 
            </a>
          </td>
        </tr>        
      @endforeach     
    </table>  
    
  @else
    Não há Produtos a serem listados!
  @endif
@endsection