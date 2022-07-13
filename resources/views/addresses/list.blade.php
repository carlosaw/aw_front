@extends('layouts.app')

@section('title', 'Endereços')

@section('content')
    <div class="add">
    
        <h1 class="lists">Lista de Endereços</h1>
  
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
            <div class="form-outline">
                <a href="{{ route('addresses.add') }}">
                    <button class="btnadd btn-sm btn-primary">Adicionar</button>
                    </a>
              <input type="search" id="form1" name="search" autofocus />              
            </div>            
          </div>    
        {{-- <div class="search">
            <a href="{{ route('addresses.add') }}">
                <button class="btnadd btn-sm btn-primary">Adicionar</button>
                </a>
            <input type="text" id="search" name="search" /> 
        </div> --}}

        <div class="content">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                    <th>Rua, número</th>
                    <th>CEP</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th style="text-align: center">Ações</th>
                    <tr> 
                </thead>  
      
                @if(count($list) > 0) 
                @foreach($list as $item)    
                    <tr>
                        <td>{{$item->street_num}}</td>
                        <td>{{$item->cep}}</td>
                        <td>{{$item->district}}</td>
                        <td>{{$item->city}}</td>
                        <td>{{$item->state}}</td>

                        <td style="display: flex; justify-content:space-around">

                            <a href="{{ route('addresses.edit', ['id' => $item->id]) }}" class="edit"  data-toggle="tooltip" data-html="true">
                            <button class="btn btn-primary">Editar</button>
                            </a>             
                            <a href="{{ route('addresses.del', ['id' => $item->id]) }}" onclick="confirm('Tem certeza que deseja excluir este Endereço?')" data-toggle="tooltip" data-html="true">              
                                <button class="btn btn-danger">Excluir</button>                 
                            </a>
                        </td>
                    </tr>        
                @endforeach 
                    
            </table>
            
            <div class="pagination">
                {{$list->links()}} 
            </div>
        </div>    
                @else
                    Não há endereços a serem listados!
                @endif
    </div>

@endsection