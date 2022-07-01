<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}" />


    <!-- Styles -->
    <style>


    </style>
</head>

<body>
  <div class="container">
    <header>
      <div class="header">
        <div class="menu">
          <a class="logo1" href=""><img src="{{ asset('assets/images/logo4.png') }}" width="150" alt="0" /></a>
          <nav>
            
              <ul>
                  
                  <li><a href="{{ route('login') }}">Login</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
              </ul>
          </nav>
        </div>
      </div>
    </header>
    
    <div class="content">
        <div class="title m-b-md">
            <a><img class="logo" src="assets/images/aw2.png" /></a>
        </div>
    </div>

    <footer>
        <h2>Feito com ❤ por Aw2Web.</h2>
    </footer>
  </div>
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>

    <script type="text/javascript" src="{{ asset('site/js/script.js') }}"></script>
</body>

</html>