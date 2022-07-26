@extends('admin.layouts.app')

<style>
    .btn_accion {
        margin-top: .5rem;
    }

</style>

@section('content')
    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800">Usuarios</h1>
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

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Información</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Rol</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Nickname</th>
                                <th>Correo electrónico</th>
                                <th>Bloqueo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Rol</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Nickname</th>
                                <th>Correo electrónico</th>
                                <th>Bloqueo</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->role }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->lastname }}</td>
                                    <td>{{ $user->nickname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->email_verified_at === null ? 'bloqueado o no verificado' : 'No bloqueado' }}
                                    </td>
                                    <td>
                                        @if ($user->email_verified_at !== null)
                                            <a class="btn btn-primary mx-3 btn_accion"
                                                href=" {{ route('user.blockUser', ['id' => $user->id]) }} "
                                                role="button">Bloquear</a>
                                        @else
                                            <a class="btn btn-primary mx-3 btn_accion"
                                                href=" {{ route('user.unlockUser', ['id' => $user->id]) }} "
                                                role="button">Desbloquear</a>
                                        @endif
                                        <a class="btn btn-danger mx-3 btn_accion"
                                            href="{{ route('user.deleteUser', ['id' => $user->id]) }} "
                                            role="button">Eliminar</a>
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
