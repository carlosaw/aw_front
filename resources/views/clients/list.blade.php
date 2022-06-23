@extends('layouts.app')

@section('title', 'Lista de Clientes')

@section('content')
  <h1>Lista de Clientes</h1>

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

  <a href="{{ route('clients.add') }}">
    <button class="btn btn-sm btn-primary">Adicionar</button>
  </a>
  
  <table class="table table-striped table-hover">
    <thead class="thead-dark">
      <tr>
        <th>Nome</th>
        <th>Cpf</th>
        <th>Fone</th>
        <th>E-mail</th>
        <th style="text-align: center">Ações</th>
      <tr>
    </thead>

    @if(count($list) > 0)    
      @foreach($list as $item)    
        <tr>
          <td>{{$item->name}}</td>
          <td>{{$item->cpf}}</td>
          <td>{{$item->fone}}</td>
          <td>{{$item->email}}</td>
          <td style="display: flex; justify-content:space-around">
            <a href="{{ route('clients.edit', ['id' => $item->id]) }}" class="edit"  data-toggle="tooltip" data-html="true">
              <button class="btn btn-primary">Editar</button>
            </a>             
            <a href="{{ route('clients.del', ['id' => $item->id]) }}" onclick="confirm('Tem certeza que deseja excluir este Endereço?')" data-toggle="tooltip" data-html="true">              
               <button class="btn btn-danger">Excluir</button>                 
            </a>
          </td>
        </tr>        
      @endforeach     
    </table>  
    
  @else
    Não há clientes a serem listados!
  @endif

@endsection