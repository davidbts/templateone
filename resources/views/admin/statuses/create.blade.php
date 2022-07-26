@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800">Estados</h1>
            <a href=" {{ route('statuses.index') }} " class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                Ver estados
            </a>
        </div>

        <div class="col-lg-12">
            <div class="card shadown mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Nueva</h6>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('statuses.save') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="text-gray-900">Nombre del estado</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    aria-describedby="name" placeholder="Nombre del estado" required>
                                @error('name')
                                    <span class="alert alert-danger" role="alert">
                                        <strong> {{ $message }} </strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    @endsection
