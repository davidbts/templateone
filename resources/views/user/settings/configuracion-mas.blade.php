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
                    <h2 class="parrafo2">Mi Banco</h2>
                    <label class="parrafo1" for="cuenta-nombre">Nombre(s)</label>
                            <input type="text" name="name" id="cuenta-nombre" placeholder="Nombre"
                                value="{{ $user->name }}" required>
                        <!-- </div>
                        <div class="juntar-nombre"> -->
                            <label class="parrafo1" for="cuenta-apellido">Apellido</label>
                            <input type="text" name="lastname" id="cuenta-apellido" placeholder="Apellido"
                                value="{{ $user->lastname }}" required>

                            <label class="parrafo1" for="cuenta-curp">Curp</label>
                            <input type="text" name="curp" id="cuenta-curp" placeholder="Curp"
                                value="" required>
                        <!-- </div> -->
                        <p>Direccion</p>
                            <label class="parrafo1" for="street">Calle</label>
                            <input type="text" name="street" id="street" placeholder="Calle"
                            value="" required>
                            <label class="parrafo1" for="number">Numero</label>
                            <input type="number" name="number" id="number" placeholder="Numero"
                            value="" required>
                            <label class="parrafo1" for="suburb">Colonia</label>
                            <input type="text" name="suburb" id="suburb" placeholder="Colonia"
                            value="" required>
                            <label class="parrafo1" for="city">Ciudad</label>
                            <input type="text" name="city" id="city" placeholder="Ciudad"
                            value="" required>
                            <label class="parrafo1" for="municipality">Alcaldia / Municipio</label>
                            <input type="text" name="municipality" id="municipality" placeholder="Municipio"
                            value="" required>
                </div>
            </div>
        </div>
    </div>
@endsection
