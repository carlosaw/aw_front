




<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}" />


    <!-- Styles -->
    <style>


    </style>
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
              <li><a href="{{ route('register') }}">Register</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    
    <div class="content">
      <div  class="form-signin">
        <h1>Login</h1>
        
        @if(session('warning'))
          <div class="alert alert-warning" id="warning">
            {{session('warning')}}
          </div>
        @endif
        
        <main>
          <form method="POST">
            @csrf
            
            {{-- <h1 class="h3 mb-3 fw-normal">Please sign in</h1> --}}
            <div class="form-floating">
              <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" autofocus>
              <label for="floatingInput"></label>
            </div>
            
            <div class="form-floating">
              <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword"></label>
            </div>
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
          </form>
        </main>
      </div>
    </div>

    <footer>
      Rodapé
    </footer>
  </div>
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>

    <script type="text/javascript" src="{{ asset('site/js/script.js') }}"></script>
</body>

</html>




{{-- <div class="login-help">
  <p>Forgot your password? <a href="#">Click here to reset it</a>.</p>
</div> --}}

