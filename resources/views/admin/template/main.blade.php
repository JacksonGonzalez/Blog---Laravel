<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title', 'Panel de Administración')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container-fluid">
        
        <div class="row">
            @include('admin.template.partials.nav')
        </div>

        <div class="row">
            <div class="col-2"></div>
            <section class="col-8">
                    @yield('content')
            </section>
            <div class="col-2"></div>
        </div>
            
    </div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>