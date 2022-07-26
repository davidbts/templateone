@extends('layouts.app')

@section('content')

    @if (isset($id))
        @include('includes.contenedor-usuarioid', ['id' => $id])
    @else
        @include('includes.contenedor-usuario')
    @endif

    @if (count($products) != 0)
        <div class="productos">

            <div class="mis-productos">
                <h2 class="titulo2">Mis Productos</h2>
            </div>

            <div class="productos-preview">

                @isset($products)
                    @foreach ($products as $product)

                        <div class="productos">
                            <a href="{{ route('product.detail', ['product_id' => $product->id]) }}" class="productos">
                                <img src="{{ route('purchase.file', ['id' => $product->id]) }}" alt="">
                                @if (Auth::user() && Auth::user()->id == $product->user_id)
                                    <a href="{{ route('product.delete', ['id' => $product->id]) }}" class="trash"><i
                                            class="fas fa-trash"></i></a>
                                    {{-- <a href="#" class="edit"><i class="fas fa-pencil-alt"></i></a> --}}
                                    <p></p>
                                @else
                                    <p></p>
                                    <p></p>
                                @endif
                                <p class="nombre parrafo1">{{ $product->name }}</p>
                                <p class="descripcion parrafo1">{{ $product->description }}</p>
                                <p class="precio parrafo1">${{ $product->price }}</p>
                            </a>

                            <div class="prenda-accion">
                                <p class="parrafo1">Vendido</p>
                                @if (count($likes) == 0)
                                    <div class="like-2" data-id="{{ $product->id }}">
                                        <a rel="nofollow"><i class="fas fa-heart"></i></a>
                                    </div>
                                @else
                                    <?php $ul = false; ?>
                                    @foreach ($likes as $like)
                                        @auth
                                            @if ($like->user_id == Auth::user()->id && $like->product_id == $product->id)
                                                <?php $ul = true; ?>
                                            @endif
                                        @endauth
                                    @endforeach

                                    @if ($ul)
                                        <div class="like" data-id="{{ $product->id }}">
                                            <a rel="nofollow"><i class="fas fa-heart"></i></a>
                                        </div>
                                    @else
                                        <div class="like-2" data-id="{{ $product->id }}">
                                            <a rel="nofollow"><i class="fas fa-heart"></i></a>
                                        </div>
                                    @endif
                                @endif
                                <div class="buton-comprar">
                                    <a href="{{ route('product.buy', ['id' => $product->id]) }}"
                                        class="parrafo1">Comprar</a>
                                </div>
                            </div>
                        </div>

                    @endforeach
                @endisset

            </div>

            @if (Auth::user() && Auth::user()->id == $product->user_id)
                <div class="ventas-boton">
                    <a href="{{ route('product.crear') }}">Subir prenda</a>
                </div>
            @endif

        </div>
    @else
        <div class="productos">
            @if (Auth::user())
                <div class="ventas-boton">
                    <a href="{{ route('product.crear') }}">Subir prenda</a>
                </div>
            @endif

        </div>
    @endif

@endsection
