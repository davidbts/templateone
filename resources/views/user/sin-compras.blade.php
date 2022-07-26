@extends('layouts.app')

@section('content')
    <div class="contenedor-compras">

        <div class="compras-titulo">
            <h2 class="titulo2">Mis compras</h2>
        </div>

        <div class="sin-compras">

            <div class="sin-compras-info">
                <p class="parrafo2">
                    ¿Aún no compras?
                </p>
                <p class="parrafo1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Fusce hendrerit placerat nisi in condimentum.
                </p>
            </div>

            <div class="sin-compras-img">
                <img src="{{ asset('img/sin-compras.png') }}" alt="">
            </div>

            <div class="sin-compras-info">
                <p class="parrafo1">
                    Tu vendedora ha sido notificada. consectetur adipiscing elit.
                    Fusce hendrerit placerat nisi in condimentum.
                </p>
                <div class="sin-compras-boton">
                    <a href="{{ route('home.index') }}">Comprar</a>
                </div>
            </div>

        </div>

    </div>
@endsection
