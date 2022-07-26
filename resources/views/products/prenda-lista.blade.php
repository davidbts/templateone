@extends('layouts.app')

@section('content')
    <div class="contenedor-prenda-lista">

        <div class="prenda-lista-info">
            <p class="parrafo2 p2">
                ¡Ya esta lista tu prenda!
            </p>
            <p class="parrafo1">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Fusce hendrerit placerat nisi in condimentum.
            </p>
        </div>

        <div class="prenda-lista-img">
            <img src="{{ asset('img/compra-lista.png') }}" alt="">
        </div>

        <div class="prenda-lista-info">
            <p class="parrafo1">
                Tu vendedora ha sido notificada. consectetur adipiscing elit.
                Fusce hendrerit placerat nisi in condimentum.
            </p>
            <div class="prenda-lista-boton">
                <a href="{{ route('product.crear') }}">Vender mas</a>
            </div>
        </div>

    </div>
@endsection
