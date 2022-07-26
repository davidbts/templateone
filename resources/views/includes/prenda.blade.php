<div class="prenda">

    @foreach ($categories as $category)
        <div class="prenda-categoria">
            <h2 class="titulo2">{{ $category->name }}</h2>
        </div>

        <div class="prenda-preview">

            <?php
            $products = DB::table('products')
                ->where('category_id', $category->id)
                ->where('existence', '!=', 0)
                ->orderByRaw('rand()')
                ->limit(3)
                ->get();

            $likes = DB::table('likes')->get();
            ?>

            @foreach ($products as $product)

                @if ($product->category_id == $category->id)
                    <div class="prenda">
                        <a href="{{ route('product.detail', ['product_id' => $product->id]) }}" class="prenda">
                            <img src="{{ route('purchase.file', ['id' => $product->id]) }}">
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
                                        <a rel="nofollow"><i class="fas fa-heart" id="dislike"></i></a>
                                    </div>
                                @else
                                    <div class="like-2" data-id="{{ $product->id }}">
                                        <a rel="nofollow"><i class="fas fa-heart" id="like"></i></a>
                                    </div>
                                @endif
                            @endif
                            <div class="buton-comprar">
                                <a href="{{ route('product.buy', ['id' => $product->id]) }}"
                                    class="parrafo1">Comprar</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <div class="prenda-boton">
            <a href="{{ route('search.category', ['nombre' => $category->name]) }}" class="input-a parrafo1">Ver
                mas</a>
        </div>
    @endforeach

</div>
