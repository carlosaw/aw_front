@extends('layouts.app')

@section('title', 'Lista de Veículos')

@section('content')
  <h1>Lista de Veículos</h1>

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
  
  <a href="{{ route('vehicles.add') }}">
    <button class="btn btn-sm btn-primary">Adicionar</button>
  </a>

  <table class="table table-striped table-hover">
    <thead class="thead-dark">
      <tr>
        <th>Placa</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Cor</th>
        <th>Ano</th>
        <th>Quilometragem</th>
        <th style="text-align: center">Ações</th>
      <tr> 
    </thead>

    @if(count($list) > 0)  
      @foreach($list as $item)    
        <tr>
          <td>{{$item->plate}}</td>
          <td>{{$item->brand}}</td>
          <td>{{$item->model}}</td>
          <td>{{$item->color}}</td>
          <td>{{$item->year}}</td>
          <td>{{ number_format($item->km, 3,'.',',').' '.'Km' }}</td>
          <td style="display: flex; justify-content:space-around">
            <a href="{{ route('vehicles.edit', ['id' => $item->id]) }}" class="edit"  data-toggle="tooltip" data-html="true">
              <button class="btn btn-primary">Editar</button>
            </a>             
            <a href="{{ route('vehicles.del', ['id' => $item->id]) }}" onclick="confirm('Tem certeza que deseja excluir este Endereço?')" data-toggle="tooltip" data-html="true">              
               <button class="btn btn-danger">Excluir</button>                 
            </a>
          </td>
        </tr>        
      @endforeach     
    </table>  
    
  @else
    <h3 style="color: red">Não há Veículos a serem listados!</h3>
  @endif
@endsection