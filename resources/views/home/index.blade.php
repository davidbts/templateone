@extends('layouts.app')

@section('content')


    @if (session('menor'))
        <h1> {{ session('menor') }} </h1>
    @endif

    @if (Auth::user() && session('prender'))
        {{ session()->forget('prender') }}
    @endif

    <script>
        function abrir() {
            const modaluser = document.querySelector(".modal-user");
            modaluser.style.display = 'block';
            const modaluserreg = document.querySelector(".modal-login");
            modaluserreg.style.display = 'block';
        }
        {{ session('prender') }}
    </script>


    @include('includes.carrusel')

    @include('includes.categorias')

    @include('includes.prenda')

    @include('includes.mascategorias')

@endsection
