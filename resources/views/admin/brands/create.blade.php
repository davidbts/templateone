@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800">Marcas</h1>
            <a href=" {{ route('brand.index') }} " class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                Ver marcas
            </a>
        </div>

        <div class="col-lg-12">
            <div class="card shadown mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Nueva</h6>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('brand.save') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="text-gray-900">Nombre de la marca</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                aria-describedby="name" placeholder="Nombre de la marca" required>
                            @error('name')
                                <span class="alert alert-danger" role="alert">
                                    <strong> {{ $message }} </strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="category_id" class="text-gray-900">Nombre de la categoría</label>
                            <select class="form-control" name="category_id" required>
                                <option>Selecciona una categoría</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection
