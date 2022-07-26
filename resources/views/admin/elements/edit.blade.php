@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800">Elementos</h1>
            <a href=" {{ route('element.index') }} " class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                Ver elementos
            </a>
        </div>

        <div class="col-lg-12">
            <div class="card shadown mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Nuevo</h6>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('element.update') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="text-gray-900">Nombre del elemento</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                aria-describedby="name" placeholder="Nombre de la subcategoría" value="{{$element->name}}" required>
                            @error('name')
                                <span class="alert alert-danger" role="alert">
                                    <strong> {{ $message }} </strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="category_id" class="text-gray-900">Nombre de la categoría</label>
                            <select class="form-control" name="category" id="category" onchange="llenarSubcategorias()">
                                <option value="0">Selecciona una categoría</option>
                                @isset($categories)
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                @endisset
                            </select>
                            <small id="emailHelp" class="form-text text-muted">La categoría actual es: {{$element->catname}}</small>
                        </div>
                        <div class="form-group" id="subcategory_id">
                            <label for="subcategory_id" class="text-gray-900">Nombre de la subcategoría</label>
                            <select class="form-control" name="subcategory" id="subcategory">
                                <option value="0">Selecciona una subcategoría</option>
                            </select>
                            <small id="emailHelp" class="form-text text-muted">La subcategoría actual es: {{$element->subcatname}}</small>
                        </div>
                        <input type="hidden" name="subcatactual" value="{{$element->subcatid}}">
                        <input type="hidden" name="id" value="{{$element->id}}">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>

                </div>
            </div>
        </div>

    </div>

    <script>
        var url = 'http://127.0.0.1:8000';
        // var url = 'http://upton4ever.com.mx';

        function llenarSubcategorias() {
            $.ajax({
                type: "GET",
                url: url + '/admin/elementos/subcategoria/' + $('#category').val(),
                success: function(r) {
                    console.log(r);
                    var html1 = r;
                    $('#subcategory_id').replaceWith(r);
                }
            });
        }
    </script>
@endsection
