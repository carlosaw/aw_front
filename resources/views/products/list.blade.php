@extends('layouts.app')

@section('title', 'Lista de Produtos')

@section('content')
  <h1>Lista de Produtos</h1>
  
  <a href="{{ route('products.add') }}">
    <button class="btn btn-sm btn-primary">Adicionar</button>
  </a>

  <table class="table table-striped table-hover">
      <tr>
        <th>Nome</th>
        <th>Valor Unitário</th>
        <th>Quantidade</th>
        <th>Desconto</th>
        <th>Total</th>
        <th>Ações</th>
      <tr> 
    @if(count($list) > 0)  
      @foreach($list as $item)    
        <tr>
          <td>{{$item->name}}</td>
          <td style="text-align: center">{{  'R$ '.number_format($item->value_unit, 2, ',', '.') }}</td>
          <td style="text-align: center">{{$item->quantity}}</td>
          <td style="text-align: center">{{  'R$ '.number_format($item->discount, 2, ',', '.') }}</td>
          <td style="text-align: center">{{  'R$ '.number_format($item->total, 2, ',', '.') }}</td>
          <td>
            <a href="{{ route('products.edit', ['id' => $item->id]) }}">[ Editar ]</a> - 
            <a href="{{ route('products.del', ['id' => $item->id]) }}">[ Excluir ]</a>
          </td>
        </tr>        
      @endforeach     
    </table>  
    
  @else
    Não há Produtos a serem listados!
  @endif
@endsection