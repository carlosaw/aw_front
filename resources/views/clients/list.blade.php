@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
    <div class="add">
    
      <h1 class="lists">Lista de Clientes</h1>

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
    
      <div class="search">                       
        <a href="{{ route('clients.add') }}">
          <button class="btnadd btn-sm btn-primary">Adicionar</button>
        </a>                
        <form action="{{ route('clients.list') }}" method="GET">                 
          <input type="text" id="search" name="search" autofocus placeholder="Procurar por CPF" class="btn-text-top" />
          <div><button class="btn-buscar-top" type="submit"></button></div>
        </form>                                                 
      </div>
  
      <div class="content">
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

          @if($search == '')
              <div class="pagination">
                  {{$list->links()}} 
              </div>
          @endif 
            
        @else
          Não há clientes a serem listados!
        @endif
        
      </div>

@endsection







