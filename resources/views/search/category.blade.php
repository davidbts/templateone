@extends('layouts.app')

@section('content')
    <div class="prenda">

        <div class="prenda-categoria">
            <h2 class="titulo2">{{ $category }}</h2>
        </div>

        <div class="prenda-preview">

            @foreach ($products as $product)
                <div class="prenda">
                    <a href="{{ route('product.detail', ['product_id' => $product->id]) }}" class="prenda">
                        <img src="{{ route('purchase.file', ['id' => $product->id]) }}" alt="">
                        <p class="nombre parrafo1">{{ $product->name }}</p>
                        <p class="descripcion parrafo1">{{ $product->description }}</p>
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
    </div>

    @include('includes.mascategorias')
@endsection
