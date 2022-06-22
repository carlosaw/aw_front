<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') - AW Laravel</title>
    <link rel="stylesheet" href="{{ asset('site/style.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
</head>
<body>

    {{-- <script>
        swal("Here's a titlel", "Here's some text", "success", {
          button: "I am new button",          
        });
    </script> --}}

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