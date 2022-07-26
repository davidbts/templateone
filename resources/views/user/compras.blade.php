@extends('layouts.app')

@section('content')
    <div class="contenedor-compras">

        <div class="compras-titulo">
            <h2 class="titulo2">Mis compras</h2>
        </div>

        <div class="lista-compras">

            @foreach ($products as $product)
                <div class="compra">
                    <div class="compra-info">
                        <a href="{{ route('product.detail', ['product_id' => $product->id]) }}" class="compra-img">
                            <img src="{{ route('purchase.file', ['id' => $product->id]) }}">
                        </a>
                        <div class="compra-producto">
                            <div>
                                <a href="#" class="parrafo2">{{ $product->name }}</a>
                                <p class="parrafo1">${{ $product->price }}</p>
                            </div>
                            <div>
                                <p class="parrafo1">N pedido: {{ $product->puid }}</p>
                                <p class="parrafo1">Fecha {{ $product->pucrea }}</p>
                                <p class="parrafo1">Vendedora: {{ $product->nickname }}</p>
                            </div>
                            <div>
                                <p class="parrafo1">Estado</p>
                                <p class="parrafo1">Envio</p>
                            </div>
                        </div>
                    </div>
                    <div class="compra-botones">
                        <a href="#">Contactar vendedor</a>
                        <a href="#">Califica tu compra</a>
                    </div>
                </div>

                <br>

            @endforeach
        </div>

    </div>
@endsection
