@extends('layouts.app')

@section('content')
    <div class="contenedor-contacto">

        <div class="contacto-titulo">
            <h2 class="titulo2">Configuración</h2>
        </div>
        <div class="contenedor-config">

            @include('includes.configuracion-menu')

            <div class="configuracion-envio">
                <div class="subcontenedor-config">
                    <h2 class="parrafo2">Datos de Envio</h2>
                    <form action="{{ route('user.updateDelivery') }}" method="POST" class="form-personales">
                        @csrf
                        <div class="juntar-nombre">
                            <label class="parrafo1" for="envio-usuario">Numero de Telefono</label>
                            <input type="tel" name="phoneNumber" id="envio-celular" placeholder="Telefono"
                                value="">
                        </div>
                        <div class="juntar-nombre">
                            <label class="parrafo1" for="envio-correo">Correo Electrónico</label>
                            <input type="email" name="email" id="envio-correo" placeholder="Correo Electrónico"
                                value="">
                        </div>
                        <label class="parrafo1" for="envio-calle">Calle</label>
                        <input type="text" name="street" id="envio-calle" placeholder="Calle"
                            value="">
                            <!-- {{ $delivery ? $delivery->street : '' }} -->
                        <div class="juntar-nombre">
                            <label class="parrafo1" for="envio-ext">No. Ext</label>
                            <input type="text" name="outdoorNumber" id="envio-ext" placeholder="0"
                                value="">
                        </div>
                        <div class="juntar-nombre">
                            <label class="parrafo1" for="envio-int">No. Int</label>
                            <input type="text" name="interiorNumber" id="envio-int" placeholder="0"
                                value="">
                        </div>
                        <div class="juntar-nombre">
                            <label class="parrafo1" for="envio-cp">Codigo Postal</label>
                            <input type="text" name="postalCode" id="envio-cp" placeholder="C.P."
                                value="">
                        </div>
                        <div class="juntar-nombre">
                            <label class="parrafo1" for="envio-estado">Estado</label>
                            <input type="text" name="state" id="envio-estado" placeholder="Estado"
                                value="">
                        </div>
                        <label class="parrafo1" for="envio-ciudad">Ciudad</label>
                        <input type="text" name="city" id="envio-ciudad" placeholder="Ciudad"
                            value="">
                        <!-- <label class="parrafo1" for="envio-municipio">Alcaldía o municipio</label>
                        <input type="text" name="municipality" id="envio-municipio" placeholder="municipio"
                            value="{{ $delivery ? $delivery->municipality : '' }}">
                        <label class="parrafo1" for="envio-colonia">Colonia</label>
                        <input type="text" name="suburb" id="envio-colonia" placeholder="Colonia"
                            value="{{ $delivery ? $delivery->suburb : '' }}">
                        <label class="parrafo1" for="envio-referencias">Referencias</label>
                        <input type="text" name="references" id="envio-referencias" placeholder="Referencias"
                            value="{{ $delivery ? $delivery->references : '' }}"> -->

                        <input class="subir-vender" type="submit" value="Guardar">

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
