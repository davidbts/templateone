@extends('layouts.app')

@section('content')
    <div class="prenda">

        <div class="prenda-categoria">
            <h2 class="titulo2">Busqueda</h2>
        </div>

        <div class="prenda-preview">

            @foreach ($products as $product)
                <div class="prenda">
                    <a href="./producto.html" class="prenda">
                        <img src="{{ asset('img/1-1.jpg') }}" alt="">
                        <p class="nombre parrafo1">{{ $product->name }}</p>
                        <p class="descripcion parrafo1">{{ $product->description }}</p>
                        <p class="precio parrafo1">${{ $product->price }}</p>
                    </a>
                    <div class="prenda-accion">
                        <div class="like">
                            <a href="#"><i class="fas fa-heart"></i></a>
                        </div>
                        <div class="buton-comprar">
                            <a href="{{ route('product.detail', ['product_id' => $product->id]) }}"
                                class="parrafo1">Comprar</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    @include('includes.mascategorias')
@endsection
