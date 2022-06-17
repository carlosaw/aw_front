@extends('layouts.app')

@section('title', 'Lista de Veículos')

@section('content')
  <h1>Lista de Veículos</h1>

  <a href="{{ route('vehicles.add') }}">
    <button class="btn btn-sm btn-primary">Adicionar</button>
  </a>
  

  <table class="table table-striped table-hover">
      <tr>
        <th>Placa</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Cor</th>
        <th>Ano</th>
        <th>Quilometragem</th>
        <th>Ações</th>
      <tr> 
    @if(count($list) > 0)  
      @foreach($list as $item)    
        <tr>
          <td>{{$item->plate}}</td>
          <td>{{$item->brand}}</td>
          <td>{{$item->model}}</td>
          <td>{{$item->color}}</td>
          <td>{{$item->year}}</td>
          <td>{{number_format($item->km, 3,'.', ',').' '.'Km' }}</td>
          <td>
            <a href="{{ route('vehicles.edit', ['id' => $item->id]) }}">[ Editar ]</a> - 
            <a href="{{ route('vehicles.del', ['id' => $item->id]) }}">[ Excluir ]</a>
          </td>
        </tr>        
      @endforeach     
    </table>  
    
  @else
    <h3 style="color: red">Não há Veículos a serem listados!</h3>
  @endif
@endsection