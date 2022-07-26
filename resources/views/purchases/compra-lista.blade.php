@extends('layouts.app')

@section('content')

    <div class="contenedor-compra-lista">

        <div class="compra-lista-info">
            <p class="parrafo2 p2">
                ¡Listo <span>Nombre</span>!
            </p>
            <p class="parrafo1">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Fusce hendrerit placerat nisi in condimentum.
            </p>
        </div>

        <div class="compra-lista-img">
            <img src="{{ asset('img/listo.png') }}" alt="">
        </div>

        <div class="compra-lista-info">
            <p class="parrafo1">
                Tu vendedora ha sido notificada. consectetur adipiscing elit.
                Fusce hendrerit placerat nisi in condimentum.
            </p>
            <div class="compra-lista-boton">
                <a href="{{ route('home.index') }}">Seguir viendo prendas</a>
            </div>
        </div>

    </div>

    @include('includes.mascategorias')
@endsection
