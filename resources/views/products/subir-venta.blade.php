@extends('layouts.app')

@section('content')

    <div class="contenedor-ventas">

        <div class="ventas-titulo">
            <h2 class="titulo2">Mis ventas</h2>
        </div>

        <form action=" {{ route('product.save') }} " method="POST" enctype="multipart/form-data" class="subir-prenda">
            @csrf

            <div class="subir-imagen">
                <div class="image-input">
                    <input type="file" accept="image/*" id="imageInput-1" name="image1" required>
                    <label for="imageInput-1" class="image-button-1 parrafo1"><i class="fas fa-plus"></i>Agregar más
                        fotos</label>
                    <img src="" class="image-preview-1">
                    <span class="change-image-1"><i class="fas fa-times"></i></span>
                </div>
                <div class="image-input">
                    <input type="file" accept="image/*" id="imageInput-2" name="image2" >
                    <label for="imageInput-2" class="image-button-2 parrafo1"><i class="fas fa-plus"></i>Agregar más
                        fotos</label>
                    <img src="" class="image-preview-2">
                    <span class="change-image-2"><i class="fas fa-times"></i></span>
                </div>
                <div class="image-input">
                    <input type="file" accept="image/*" id="imageInput-3" name="image3" >
                    <label for="imageInput-3" class="image-button-3 parrafo1"><i class="fas fa-plus"></i>Agregar más
                        fotos</label>
                    <img src="" class="image-preview-3">
                    <span class="change-image-3"><i class="fas fa-times"></i></span>
                </div>
                <div class="image-input">
                    <input type="file" accept="image/*" id="imageInput-4" name="image4" >
                    <label for="imageInput-4" class="image-button-4 parrafo1"><i class="fas fa-plus"></i>Agregar más
                        fotos</label>
                    <img src="" class="image-preview-4">
                    <span class="change-image-4"><i class="fas fa-times"></i></span>
                </div>
                <div class="image-input">
                    <input type="file" accept="image/*" id="imageInput-5" name="image5" >
                    <label for="imageInput-5" class="image-button-5 parrafo1"><i class="fas fa-plus"></i>Agregar más
                        fotos</label>
                    <img src="" class="image-preview-5">
                    <span class="change-image-5"><i class="fas fa-times"></i></span>
                </div>
            </div>

            <div class="subir-ayuda">
                <div>
                    <p class="parrafo1">Sólo aceptamos artículos en buen estado.</p>
                </div>
            </div>

            <div class="venta-formulario">

                <div class="venta-describe">
                    <label for="name" class="parrafo1">Nombre de la prenda:</label>
                    <input type="text" name="name" id="name" placeholder="Escribe un buen titulo para tu prenda">
                    <label for="description" class="parrafo1">Descripcion de la prenda o articulo:</label>
                    <textarea name="description" id="description" class="describe-1"
                        placeholder="Describe en este espacio tu prenda o articulo, lo mejor posible, puedes inluir medidas,
caracteristicas especiales o si tiene algun detalle de desgaste
(Te recomendamos subir foto de este detalle para evitar devoluciones)"></textarea>
                </div>
                <div class="venta-detalles">
                    <div class="form-1">
                        <label for="category_id" class="parrafo1">Categoria:</label>
                        <select name="category_id" id="category_id" onchange="llenarSubcategorias()">
                            <option>Categoría</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <label for="subcategory_id" class="parrafo1">Subcategoría:</label>
                        <select name="subcategory_id" id="subcategory_id" onchange="llenarElementos()">
                            <option>Subcategoría</option>
                        </select>
                        <label for="element_id" class="parrafo1">Elemento:</label>
                        <select name="element_id" id="element_id">
                            <option>Elemento</option>
                        </select>
                        <label for="status_id" class="parrafo1">Estado:</label>
                        <select name="status_id" id="status_id">
                            <option>Estado</option>
                            @foreach ($statuses as $status)
                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-2">
                        <label for="size_id" class="parrafo1">Talla:</label>
                        <select name="size_id" id="size_id">
                            <option>Talla</option>
                            @foreach ($sizes as $size)
                                <option value="{{ $size->id }}">{{ $size->name }}</option>
                            @endforeach
                        </select>
                        <label for="color_id" class="parrafo1">Color:</label>
                        <input type="text" name="color" placeholder="Color">
                        <label for="color_id" class="parrafo1">Marca:</label>
                        <input type="text" name="brand" placeholder="Marca">
                    </div>
                </div>
                <div class="venta-precio">
                    <div class="precio-original">
                        <label for="original_price" class="parrafo1">Precio original:</label>
                        <input type="number" name="original_price" id="original_price"
                            placeholder="Escribe el precio en que lo compraste">
                    </div>
                    <div class="precio-venta">
                        <label for="price" class="parrafo1">Precio venta:</label>
                        <input type="number" name="price" id="price"
                            placeholder="Escribe el precio en que lo quieres vender">
                    </div>
                </div>
                <div class="subir-descuento">
                    <p class="parrafo-subir">
                        Puedes ofrecer un <strong>50% de descuento</strong>en tu prenda para venderla <strong>más
                            rápido</strong>.
                    </p>
                </div>
                <div class="subir-vender">
                    <input type="submit" value="Vender">
                </div>

            </div>

        </form>

    </div>

    @include('includes.scripts-subir-venta')

@endsection
