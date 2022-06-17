@extends('layouts.app')

@section('title', 'Lista de Endereços')

@section('content')
  <h1>Lista de Endereços</h1>

  <a href="{{ route('addresses.add') }}">
    <button class="btn btn-sm btn-primary">Adicionar</button>
  </a>
  
  <table class="table table-striped table-hover">
      <tr>
        <th>Rua, número</th>
        <th>cep</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Ações</th>
      <tr> 
    @if(count($list) > 0) 
      @foreach($list as $item)    
        <tr>
          <td>{{$item->street_num}}</td>
          <td>{{$item->cep}}</td>
          <td>{{$item->district}}</td>
          <td>{{$item->city}}</td>
          <td>{{$item->state}}</td>
          {{-- <td><a href=""><img src="assets/images/edit.png" class="image"/></a>
             - <a href=""><img src="assets/images/del.jpg" class="image"/></a>
          </td>--}}
          <td>
            <a href="{{ route('addresses.edit', ['id' => $item->id]) }}">[ Editar ]</a> - 
            <a href="{{ route('addresses.del', ['id' => $item->id]) }}">[ Excluir ]</a>
          </td>
        </tr>        
      @endforeach     
    </table>  
    
  @else
    Não há endereços a serem listados!
  @endif

@endsection
