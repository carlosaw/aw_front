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
    <header>
      <div class="header">
        <div class="menu">
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
            <a><img class="logo" src="assets/images/AW4.png" width="245" alt="0" /></a>
        </div>
    </div>


    <footer>
        ...
    </footer>

    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>

    <script type="text/javascript" src="{{ asset('site/js/script.js') }}"></script>
</body>

</html>
