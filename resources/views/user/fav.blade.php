@extends('layouts.app')

@section('content')

    @include('includes.contenedor-usuario')

    <div class="favoritos">

        <div class="mis-favoritos">
            <h2 class="titulo2">Mis favoritos</h2>
        </div>

        @if (count($products) > 0)
            <div class="favoritos-preview">
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
                            <p class="nombre parrafo1">
                                {{ Str::length($product->name) < 26 ? $product->name : Str::limit($product->name, 23) }}
                            </p>
                            <p class="descripcion parrafo1">
                                {{ Str::length($product->description) < 42 ? $product->description : Str::limit($product->description, 42) }}
                            </p>
                            <p class="precio parrafo1">${{ $product->price }}</p>
                        </a>

                        <div class="prenda-accion">
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

            </div>
        @else

            <div class="sin-favoritos">

                <div class="sin-favoritos-info">
                    <p class="parrafo2">
                        ¿Sin favoritos?
                    </p>
                    {{-- <p class="parrafo1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Fusce hendrerit placerat nisi in condimentum.
                </p> --}}
                </div>

                <div class="sin-favoritos-img">
                    <img src="{{ asset('img/sin-fav.png') }}" alt="">
                </div>

                <div class="sin-favoritos-info">
                    {{-- <p class="parrafo1">
                    Tu vendedora ha sido notificada. consectetur adipiscing elit.
                    Fusce hendrerit placerat nisi in condimentum.
                </p> --}}
                    <div class="sin-favoritos-boton">
                        <a href="{{ route('home.index') }}">Ver productos</a>
                    </div>
                </div>

            </div>

        @endif
    </div>


    <br>
    <br>

    @include('includes.mascategorias')

@endsection
