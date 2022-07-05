<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') - AW</title>
    <link rel="stylesheet" href="{{ asset('site/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
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
                <li><a href="{{ route('clients.list') }}">Clientes</a></li>                    
                <li><a href="{{ route('addresses.list') }}">Endereços</a></li>
                <li><a href="{{ route('vehicles.list') }}">Veículos</a></li>
                <li><a href="{{ route('products.list') }}">Produtos</a></li> 
                <li><a href="/logout" style="float: right">Sair</a></li> 
            </ul>
          </nav>
        </div>
        
      </div>
    </header>

    <section>
        @yield('content')
    </section>
    
    <footer>
      Copyriht@Todos os direitos reservados!
    </footer>
       
</div>
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>

    <script type="text/javascript" src="{{ asset('site/js/script.js') }}"></script>
    
</body>
</html>