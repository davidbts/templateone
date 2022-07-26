<section class="contenedor-seccion">
    <div class="categorias ">
        <div class="grig-categorias ">
            <div class="espacio-categoria ">
                <img src="{{ asset('img/ropa.jpg') }}" alt="" class="">
                <div class=" datos-categoria">
                <h3 class="titulo-cat titulo2">Mujer</h3>
                <p class="parrafo-cat parrafo1">Ropa de mujer</p>
                <a class="link-compra-cat parrafo2" href="{{ route('search.category', ['nombre' => 'mujer']) }}">Compra
                    ya!</a>
            </div>
        </div>
        <div class="espacio-categoria">
            <img src="{{ asset('img/ropah.jpg') }}" alt="" class="">
                <div class=" datos-categoria">
            <h3 class="titulo-cat titulo2">Hombre</h3>
            <p class="parrafo-cat parrafo1">Ropa de hombre</p>
            <a class="link-compra-cat parrafo2" href="{{ route('search.category', ['nombre' => 'hombre']) }}">Compra
                ya!</a>
        </div>
    </div>
    <div class="espacio-categoria">
        <?php
        $subcategories = DB::table('subcategories')
            ->join('images', 'subcategories.id', '=', 'images.subcategory_id')
            ->join('categories', 'categories.id', '=', 'subcategories.category_id')
            ->orderByRaw('rand()')
            ->limit(2)
            ->select('subcategories.name', 'images.image_path', 'categories.name as cname')
            ->get();
        ?>
        @foreach ($subcategories as $subcategory)
            <div class="espacio-subcategoria">
                <img src="{{ route('image.file', ['filename' => $subcategory->image_path]) }}" alt=""
                    class="">
                        <div class=" datos-categoria">
                <h3 class="titulo-cat titulo2">
                    {{ Str::length($subcategory->name) < 13 ? $subcategory->name : Str::limit($subcategory->name, 12) }}
                </h3>
                <p class="parrafo-cat parrafo1">{{ $subcategory->name }} de
                    {{ $subcategory->cname == 'bebes' ? 'bebés' : $subcategory->cname }}</p>
                <a class="link-compra-cat parrafo2"
                    href="{{ route('search.subcategory', ['cname' => $subcategory->cname, 'nombre' => $subcategory->name]) }}">Compra
                    ya!</a>
            </div>
    </div>
    @endforeach
    </div>
    <div class="espacio-categoria">
        <?php
        $subcategories2 = DB::table('subcategories')
            ->join('images', 'subcategories.id', '=', 'images.subcategory_id')
            ->join('categories', 'categories.id', '=', 'subcategories.category_id')
            ->orderByRaw('rand()')
            ->limit(2)
            ->select('subcategories.name', 'images.image_path', 'categories.name as cname')
            ->get();
        ?>
        @foreach ($subcategories2 as $subcategory)
            <div class="espacio-subcategoria">
                <img src="{{ route('image.file', ['filename' => $subcategory->image_path]) }}" alt=""
                    class="">
                            <div class=" datos-categoria">
                <h3 class="titulo-cat titulo2">
                    {{ Str::length($subcategory->name) < 13 ? $subcategory->name : Str::limit($subcategory->name, 12) }}
                </h3>
                <p class="parrafo-cat parrafo1">{{ $subcategory->name }} de
                    {{ $subcategory->cname == 'bebes' ? 'bebés' : $subcategory->cname }}</p>
                <a class="link-compra-cat parrafo2"
                    href="{{ route('search.subcategory', ['cname' => $subcategory->cname, 'nombre' => $subcategory->name]) }}">Compra
                    ya!</a>
            </div>
    </div>
    @endforeach
    </div>
    </div>
    </div>
</section>
