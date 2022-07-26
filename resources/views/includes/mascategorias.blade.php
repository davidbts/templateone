<?php
    $subcategories = DB::table('subcategories')
        ->join('images', 'subcategories.id', '=', 'images.subcategory_id')
        ->join('categories', 'categories.id', '=', 'subcategories.category_id')
        ->orderByRaw('rand()')
        ->limit(12)
        ->select('subcategories.name', 'images.image_path', 'categories.name as cname')
        ->get();
?>

<div class="mas-categorias">

    <div class="categoria-titulo">
        <h2 class="titulo2">Más categorías</h2>
    </div>

    <div class="categoria-mosaico">

        @foreach ($subcategories as $subcategory)
            <div class="mosaico">
                <img src="{{ route('image.file', ['filename' => $subcategory->image_path]) }}" alt="">
                <a class="parrafo2" href="{{ route('search.subcategory', ['cname' => $subcategory->cname, 'nombre' => $subcategory->name]) }}">{{ Str::length($subcategory->name) < 15 ? $subcategory->name : Str::limit($subcategory->name, 12) }}</a>
            </div>
        @endforeach
    </div>

</div>
