@extends('layouts.app')

@section('title', 'Página Login')

@section('content')
<div class="login">
  <h1>Login</h1>
  
  @if(session('warning'))
    <div class="alert alert-warning" id="warning">
      {{session('warning')}}
    </div>
  @endif

  <form method="POST">
    @csrf
    <input type="email" name="email" placeholder="E-mail"><br/><br/>
    <input type="password" name="password" placeholder="Password"><br/><br/>
    <p class="remember_me">
      <label>
        <input type="checkbox" name="remember_me" id="remember_me">
        Remember me on this computer
      </label>
    </p>
    <input type="submit" value="Entrar"></p>
  </form>
</div>

{{-- <div class="login-help">
  <p>Forgot your password? <a href="#">Click here to reset it</a>.</p>
</div> --}}

@endsection