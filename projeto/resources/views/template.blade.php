<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <script src="{{ asset('js/app.js') }}"></script>
        <link rel="icon" href="favicon_it.ico"/>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>

    <body id="montserrat">
        <header class="bg-white shadow rounded">
            <div class="col-12 col-lg-12 mb-5">
                <div class="p-2 pl-3">
                    <img class="img-logo" src="/img/logo.jpg">
                    <a href="{{ route('home') }}" class="btn-return offset-9">Voltar</a>
                </div>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
    </body>

</html>