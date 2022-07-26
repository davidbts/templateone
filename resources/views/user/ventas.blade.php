@extends('layouts.app')

@section('content')

    @if (count($purchases) == 0)


        <div class="contenedor-ventas">

            <div class="ventas-titulo">
                <h2 class="titulo2">Mis ventas</h2>
            </div>

            <div class="sin-ventas">

                <div class="sin-ventas-info">
                    <p class="parrafo2">
                        ¿Aún no vendes?
                    </p>
                    <p class="parrafo1">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Fusce hendrerit placerat nisi in condimentum.
                    </p>
                </div>

                <div class="sin-ventas-img">
                    <img src="{{ asset('img/Vende.png') }}" alt="">
                </div>

                <div class="sin-ventas-info">
                    <p class="parrafo1">
                        Tu vendedora ha sido notificada. consectetur adipiscing elit.
                        Fusce hendrerit placerat nisi in condimentum.
                    </p>
                    <div class="sin-ventas-boton">
                        <a href="{{ route('product.new') }}">Vender</a>
                    </div>
                </div>

            </div>

        </div>
    @else


        <div class="contenedor-ventas">

            <div class="ventas-titulo">
                <h2 class="titulo2">Mis ventas</h2>
            </div>

            <div class="ventas">

                @foreach ($purchases as $purchase)
                    <div class="ventas-producto">
                        <div class="ventas-datos">
                            <a href="#" class="ventas-imagen">
                                <img src="{{ route('purchase.file', ['id' => $purchase->pid]) }}" alt="">
                            </a>
                            <div class="ventas-info">
                                <div>
                                    <a href="#" class="parrafo2">{{ $purchase->name }}</a>
                                    <p class="parrafo1">${{ $purchase->price + 11 }}</p>
                                </div>
                                <div>
                                    <p class="parrafo1">N pedido: {{ $purchase->id }}</p>
                                    <p class="parrafo1">Fecha: {{ $purchase->created_at }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="ventas-status">
                            <p class="parrafo1">Estado:</p>
                            <p class="parrafo1">Envio:</p>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="ventas-boton">
                <a href="{{ route('product.new') }}">Vender</a>
            </div>

        </div>
    @endif
@endsection
