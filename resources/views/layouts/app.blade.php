<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') - AW Laravel</title>
    <link rel="stylesheet" href="{{ asset('site/style.css') }}" />
</head>
<body>

<div class="container">
    <header>
        <h1>Header</h1>
    </header>
    <hr/>
    <section>
        @yield('content')
    </section>
    <footer>
        Rodapé
    </footer>
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
</div>
</body>
</html>