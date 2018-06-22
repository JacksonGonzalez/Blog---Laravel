<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title', 'Panel de Administración')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        
        <div class="row">
            @include('admin.template.partials.nav')
        </div>

        <div class="row">
            <section class="col-12">
                    @include('flash::message')
                    @include('admin.template.partials.errors')
                    @yield('content')
            </section>
        </div>
            
    </div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>