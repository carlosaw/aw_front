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
        <a class="logo1" href="{{route('welcome')}}">
          <img  src="{{ asset('assets/images/logo4.png') }}" width="150" alt="0"/>
        </a>
              
        <div class="menu">          
          <nav>            
            <ul>
              <li class="{{ request()->RouteIs('home') ? 'active' : '' }} {{ request()->is('home') ? 'active' : '' }} {{ request()->is('home') ? 'active' : '' }}"><a href="{{asset('home')}}">Início</a> </li>            
                
                <li class="{{ request()->RouteIs('clients.list') ? 'active' : '' }} {{ request()->is('clients/edit') ? 'active' : '' }} {{ request()->is('clients/edit/*') ? 'active' : '' }}"><a href="{{asset('clients')}}">Clientes</a> </li>

                <li class="{{ request()->RouteIs('addresses.list') ? 'active' : '' }} {{ request()->is('addresses/edit') ? 'active' : '' }} {{ request()->is('addresses/edit/*') ? 'active' : '' }}"><a href="{{asset('addresses')}}">Endereços</a> </li>

                <li class="{{ request()->RouteIs('vehicles.list') ? 'active' : '' }} {{ request()->is('vehicles/edit') ? 'active' : '' }} {{ request()->is('vehicles/edit/*') ? 'active' : '' }}"><a href="{{asset('vehicles')}}">Veículos</a> </li>

                <li class="{{ request()->RouteIs('products.list') ? 'active' : '' }} {{ request()->is('products/edit') ? 'active' : '' }} {{ request()->is('products/edit/*') ? 'active' : '' }}"><a href="{{asset('products')}}">Produtos</a> </li>

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