@extends('layouts.app')

@section('content')
    <div class="contenedor-contacto">

        <div class="contacto-titulo">
            <h2 class="titulo2">Configuración</h2>
        </div>
        <div class="contenedor-config">
            @include('includes.configuracion-menu')

            <div class="configuracion-multi">
                <div class="subcontenedor-config">
                    <h2 class="parrafo2">Cambiar Contraseña</h2>
                    <form action="{{ route('user.updatePassword') }}" method="POST" class="form-personales">
                        @csrf
                        <label class="parrafo1" for="pass-actual">Contraseña Actual</label>
                        <input type="password" name="passact" id="pass-actual">
                        <label class="parrafo1" for="pass-nueva">Contraseña Nueva</label>
                        <input type="password" name="passnue" id="pass-nueva">
                        <label class="parrafo1" for="pass-renueva">Confirmar Contraseña</label>
                        <input type="password" name="passcon" id="pass-renueva">

                        <input class="subir-vender" type="submit" value="Guardar Contraseña">

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
