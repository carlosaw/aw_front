<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')Cadastro</title>
    <link rel="stylesheet" href="{{ asset('site/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}" />
</head>
<body>

<div class="container">
  
    <header>
      <div class="header">
        <a class="logo1" href="https://awregulagens.com.br" title="Visite o site">
          <img src="{{ asset('assets/images/logo4.png') }}" width="150" alt="0" />
        </a>
              
        <div class="menu">          
          <nav>            
            <ul>            
                <li><a href="{{ route('login') }}">Login</a></li>                    
                
            </ul>
          </nav>
        </div>
        
      </div>
    </header>
    
    <div class="login">
        <div class="form-signin">
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
            
            <div class="form-group">
              <input type="text" class="form-control" id="name" aria-describedby="name" name="name" placeholder="Nome Completo"><br/>        
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="E-mail"><br/>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Senha"><br/>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirme sua Senha">
            </div>
                    
            <button type="submit" class="btn btn-lg btn-primary">Cadastrar</button>
            
        </form>
        
    </div>
    </div>
        <footer>
            Copyriht@Todos os direitos reservados!
        </footer>
       
</div>
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/script.js') }}"></script>    
</body>
</html>