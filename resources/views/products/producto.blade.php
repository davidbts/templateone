@extends('layouts.app')

@section('content')

    <?php

    $user = DB::table('users')
        ->where('id', $product->user_id)
        ->first();
    $sales = DB::table('purchases')
        ->join('products', 'products.id', '=', 'purchases.product_id')
        ->where('products.user_id', $user->id)
        ->get();
    ?>

    <div class="contenedor">

        <div class="contenedor-producto ">
            <div class="producto ">
                <div class="producto-galeria ">
                    @foreach ($images as $image)
                        <img src="{{ route('product.file', ['filename' => $image->image_path]) }}"
                            onclick="myFuntion(this)">
                    @endforeach
                </div>
                <div class="producto-imagen">
                    <img id="producto-imagen" src="{{ route('product.file', ['filename' => $images[0]->image_path]) }}">
                </div>
            </div>
            <div class="producto-informacion">
                <div class="prod-inf">
                    <div>
                        <h2 class="titulo3 tit">{{ $product->name }}</h2>
                    </div>
                    <div class="informacion-precio">
                        <p class="parrafo3">${{ $product->price }}</p>
                    </div>
                    <div class="informacion-descripcion">
                        <p class="parrafo1">
                            {{ $product->description }}
                        </p>
                    </div>
                </div>
                <div class="informacion-button">
                    @if ($product->existence != 0)
                        <a href="{{ route('product.buy', ['id' => $product->id]) }}" class="parrafo2 shop">Comprar
                            ahora</a>
                    @endif

                    @if (count($likes) == 0)
                        <a rel="nofollow"><i class="far fa-heart" data-id="{{ $product->id }}"></i></a>
                    @else
                        <?php $ul = false; ?>
                        @foreach ($likes as $like)
                            @auth
                                @if ($like->user_id == Auth::user()->id && $like->product_id == $product->id)
                                    <?php $ul = true; ?>
                                @else
                                    <?php $ul = false; ?>
                                @endif
                            @endauth
                        @endforeach

                        @if ($ul)
                            <a rel="nofollow"><i class="fas fa-heart" data-id="{{ $product->id }}"></i></a>
                        @else
                            <a rel="nofollow"><i class="far fa-heart" data-id="{{ $product->id }}"></i></a>
                        @endif
                    @endif
                </div>
                <div class="informacion-detalles">
                    <p class="parrafo1">Talla: {{ $product->sizename }}</p>
                    <p class="parrafo1">Estado: {{ $product->statusname }}</p>
                    <p class="parrafo1">Categoria: {{ $product->categoryname }}</p>
                    <p class="parrafo1">Marca: {{ $product->brand_id }}</p>
                    <p class="parrafo1">Color: {{ $product->color_id }}</p>
                </div>
            </div>
        </div>

    </div>

    <div class="tabs">

        <div class="buton-tabs">
            <button class="line"></button>
            <button class="tab-buton" onclick="openCity('tres')">Comentarios</button>
            <button class="line"></button>
        </div>

        <div class="tab">

            <div id="tres" class="city">
                <div class="contenedor-comentarios">

                    <div>
                        @foreach ($comments as $comment)
                            <div class="comentario-usuario">
                                <div class="comentario-info">
                                    <div class="usuario-comentario">
                                        <a href="{{ route('user.usuarioProd', ['id' => $comment->uid]) }}"
                                            class="usu-img">
                                            @if ($user->image)
                                                <img src=" {{ route('user.picture', ['filename' => $user->image]) }} "
                                                    alt="">
                                            @else
                                                <img src=" {{ asset('img/person.png') }} " alt="">
                                            @endif
                                        </a>
                                        <div>
                                            <a href="{{ route('user.usuarioProd', ['id' => $comment->uid]) }}"
                                                class="parrafo3 par3">{{ $comment->uname }}</a>
                                        </div>
                                    </div>
                                    <div class="comentario-tiempo">
                                        <p class="parrafo1 par1">{{ FormatTime::LongTimeFilter($comment->created_at) }}
                                        </p>
                                    </div>
                                </div>

                                <div class="comentario">
                                    <p class="parrafo1">
                                        {{ $comment->content }}
                                    </p>
                                </div>

                                @foreach ($subcomments as $subcomment)
                                    @if ($subcomment->comment_id == $comment->id)
                                        <div class="respuesta-comen">
                                            <div class="comen-usuario">
                                                <div class="usu-img">
                                                    <a
                                                        href="{{ route('user.usuarioProd', ['id' => $subcomment->uid]) }}">
                                                        @if ($user->image)
                                                            <img src=" {{ route('user.picture', ['filename' => $user->image]) }} "
                                                                alt="">
                                                        @else
                                                            <img src=" {{ asset('img/person.png') }} " alt="">
                                                        @endif
                                                    </a>
                                                    <a href="{{ route('user.usuarioProd', ['id' => $subcomment->uid]) }}"
                                                        class="parrafo3">{{ $subcomment->uname }}</a>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="parrafo1">
                                                    {{ $subcomment->content }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                                @if (Auth::guest() || Auth::user()->id == $comment->uid || Auth::user()->id == $comment->udueño)
                                    <form class="comentario-responder" method="POST"
                                        action="{{ route('subcomment.save') }}">
                                        @csrf
                                        <div class="responder-comentario">
                                            @auth
                                                <textarea name="subcomment" id="subcomment"
                                                    placeholder="Responder al usuario"></textarea>
                                            @endauth
                                            <input type="hidden" name="id" id="id" value="{{ $comment->id }}">
                                            <input type="hidden" name="idprod" value="{{ $product->id }}">
                                        </div>
                                        <input type="submit" value="Responder" class="parrafo1">
                                    </form>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <div class="comentar">
                        <form action="{{ route('comment.save') }}" method="POST">
                            @csrf
                            <div class="comentar-info">
                                <textarea name="comment" id="comment" placeholder="Escribe a la vendedor@"></textarea>
                                <input type="hidden" name="id" value="{{ $product->id }}">
                            </div>
                            <div class="comentar-enviar">
                                <input type="submit" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="usuario-producto">

        <div class="usuario-info">
            <a href="#" class="usuario-img">
                @if ($user->image)
                    <img src=" {{ route('user.picture', ['filename' => $user->image]) }} " alt="">
                @else
                    <img src=" {{ asset('img/person.png') }} " alt="">
                @endif
            </a>
            <div class="informacion">
                <div class="info-rank">
                    <div class="info-raking">
                        <div class="usuario">
                            <a href="#" class="parrafo3">{{ $user->nickname }}</a>
                        </div>
                        <div class="star">
                            <a href=""><i class="fas fa-star"></i></a>
                            <a href=""><i class="fas fa-star"></i></a>
                            <a href=""><i class="fas fa-star"></i></a>
                            <a href=""><i class="fas fa-star"></i></a>
                            <a href=""><i class="fas fa-star"></i></a>
                        </div>
                    </div>
                    <div class="prod-boton-compartir">
                        <input type="button" value="Seguir">
                        <input type="button" value="Compartir">
                    </div>
                </div>
                <div class="info-estadisticas">
                    <div>
                        <p class="parrafo1">ventas: {{ count($sales) }}</p>
                        <p class="parrafo1">#seguidoras</p>
                        <p class="parrafo1">#siguiendo</p>
                    </div>
                    <div class="respuesta">
                        <p class="parrafo1">Tiempo de respuesta en #horas</p>
                        <p class="parrafo1">Ultima conexion:
                            {{ FormatTime::LongTimeFilter($user->last_connection) }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('includes.mascategorias', ['subcategories', $subcategories])


@endsection
