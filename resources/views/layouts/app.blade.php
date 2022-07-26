<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

</head>

<body>

    <?php
    $categories = DB::table('categories')
        ->orderBy('id', 'asc')
        ->get();

    $subcategories = DB::table('subcategories')
        ->orderBy('id', 'asc')
        ->get();

    $elements = DB::table('elements')
        ->orderBy('id', 'asc')
        ->get();
    ?>

    <div class="modal-user">
        <div class="contenedor-modal">
            @include('autenticacion.register')
            @include('autenticacion.login')
            @include('autenticacion.recuperar')
            @include('includes.invitaamigos')
        </div>
    </div>

    @include('includes.header', [
    'categories' => $categories,
    'subcategories' => $subcategories,
    'elements' => $elements,
    ])

    <div class="content">
        @yield('content')
    </div>

    @include('includes.footer')

    <script src=" {{ asset('js/all.js') }} "></script>

</body>

</html>
