@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')
<div class="login">
  <h1>Cadastro</h1>

  @if($errors->any())       
    @foreach($errors->all() as $error)
    <div class="alert alert-warning" id="warning">
      ⚡ {{$error}}
    </div>
    @endforeach       
  @endif

  @if(session('warning'))
    <div class="alert alert-warning" id="warning">
      {{session('warning')}}
    </div>
  @endif

  <form method="POST">
    @csrf
    <input type="email" name="email" placeholder="E-mail" value="{{old('email')}}"><br/><br/>
    <input type="password" name="password" placeholder="Senha"><br/><br/>
    <input type="password" name="password_confirmation" placeholder="Confirme sua senha"><br/><br/>
    {{-- <p class="remember_me">
      <label>
        <input type="checkbox" name="remember_me" id="remember_me">
        Remember me on this computer
      </label>
    </p> --}}
    <input type="submit" value="Cadastrar"></p>
  </form>
</div>

{{-- <div class="login-help">
  <p>Forgot your password? <a href="#">Click here to reset it</a>.</p>
</div> --}}

@endsection