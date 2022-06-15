@extends('layouts.app')

@section('title', 'Lista de Endereços')

@section('content')
  <h1>Lista de Endereços</h1>

  <button class="btn btn-sm btn-primary">Adicionar</button>

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
          <td style="text-align: center">{{$item->state}}</td>
          <td><a href=""><img src="assets/images/edit.png" class="image"/></a>
             - <a href=""><img src="assets/images/del.jpg" class="image"/></a></td>
          
        </tr>        
      @endforeach     
    </table>  
    
  @else
    Não há endereços a serem listados!
  @endif

@endsection
