@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800">Tallas</h1>
            <a href=" {{ route('size.create') }} " class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                Crear talla
            </a>
        </div>

        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">¡ÉXITO!</h4>
                <p>{{ session('message') }}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (session()->has('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">¡ÉXITO!</h4>
                <p>{{ session('delete') }}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Información</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($sizes as $size)
                                <tr>
                                    <td class="text-center">{{ $size->name }}</td>
                                    <td class="text-center">
                                        <div class="d-grid d-md-block">
                                            <a class="btn btn-primary mx-3"
                                                href="{{ route('size.edit', ['id' => $size->id]) }}" role="button"><i
                                                    class="fas fa-pencil-alt"></i></a>
                                            <a class="btn btn-danger"
                                                href="{{ route('size.delete', ['id' => $size->id]) }}" role="button"><i
                                                    class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
