@extends('layouts.app')

@section('title', 'Lista de Clientes')

@section('content')
  <h1>Lista de Clientes</h1>

  <button class="btn btn-sm btn-primary">Adicionar</button>
  
  <table class="table table-striped table-hover">
      <tr>
        <th>Nome</th>
        <th>Cpf</th>
        <th>Fone</th>
        <th>E-mail</th>
        <th>Ações</th>
      <tr> 
    @if(count($list) > 0)    
      @foreach($list as $item)    
        <tr>
          <td>{{$item->name}}</td>
          <td style="text-align: center">{{$item->cpf}}</td>
          <td style="text-align: center">{{$item->fone}}</td>
          <td style="text-align: center">{{$item->email}}</td>
          <td><a href="">[ Editar ]</a> - <a href="">[ Excluir ]</a></td>
        </tr>        
      @endforeach     
    </table>  
    
  @else
    Não há clientes a serem listados!
  @endif

@endsection