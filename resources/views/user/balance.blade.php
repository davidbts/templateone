@extends('layouts.app')

@section('content')
    <div class="contenedor-cuentas">

        <div class="cuentas-titulo">
            <h2 class="titulo2">Mis Cuentas</h2>
        </div>

        <div class="cuentas-cuadros">
            <div class="cuentas-isr">
                <p class="parrafo2">
                    Nueva ley ISR
                </p>
                <p class="parrafo1">
                    Neque porro quisquam est qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci
                    velit.
                </p>
                <div class="cuentas-boton">
                    <input type="button" value="Subir contrato">
                </div>
            </div>
            <div class="cuentas-cobrar-ventas">
                <p class="parrafo2">
                    Blance de tus compras y ventas
                </p>
                <p class="parrafo1">
                    Pendiente: <strong>$11.11</strong>
                </p>
                <p class="parrafo1">
                    Puedo cobrar: <strong>$11.11</strong>
                </p>
                <div class="cobrar-boton">
                    <input type="button" value="Cobrar">
                </div>
            </div>
        </div>

    </div>
@endsection
