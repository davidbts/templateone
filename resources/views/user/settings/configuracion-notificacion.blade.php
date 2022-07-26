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
                    <h2 class="parrafo2">Notificaciones</h2>
                    <div class="notificacion">
                        <p class="titulo-noti parrafo1">Promociones</p>
                        <form action="#" method="POST">
                            @csrf
                            <input class="item-noti switch" type="checkbox" name="enviospower" id="enviospower">
                        </form>
                    </div>
                    <div class="notificacion">
                        <p class="titulo-noti parrafo1">Tips</p>
                        <form action="#" method="POST">
                            @csrf
                            <input class="item-noti switch" type="checkbox" name="enviospower" id="enviospower">
                        </form>
                    </div>
                    <div class="notificacion">
                        <p class="titulo-noti parrafo1">Lo nuevo</p>
                        <form action="#" method="POST">
                            @csrf
                            <input class="item-noti switch" type="checkbox" name="enviospower" id="enviospower">
                        </form>
                    </div>
                    <div class="notificacion">
                        <p class="titulo-noti parrafo1">Mis Me guasta</p>
                        <form action="#" method="POST">
                            @csrf
                            <input class="item-noti switch" type="checkbox" name="enviospower" id="enviospower">
                        </form>
                    </div>
                    <div class="notificacion">
                        <p class="titulo-noti parrafo1">Articulos que bajan de precio</p>
                        <form action="#" method="POST">
                            @csrf
                            <input class="item-noti switch" type="checkbox" name="enviospower" id="enviospower">
                        </form>
                    </div>

                    <div class="notificacion">
                        <p class="titulo-noti parrafo1">Lo más buscado</p>
                        <form action="#" method="POST">
                            @csrf
                            <input class="item-noti switch" type="checkbox" name="enviospower" id="enviospower">
                        </form>
                    </div>
                    <div class="notificacion">
                        <p class="titulo-noti parrafo1">Nuevos seguidores</p>
                        <form action="#" method="POST">
                            @csrf
                            <input class="item-noti switch" type="checkbox" name="enviospower" id="enviospower">
                        </form>
                    </div>
                    <div class="notificacion">
                        <p class="titulo-noti parrafo1">Nuevas prendas de quien sigo</p>
                        <form action="#" method="POST">
                            @csrf
                            <input class="item-noti switch" type="checkbox" name="enviospower" id="enviospower">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
