@extends('layouts.app')

@section('content')
    <div class="contenedor-compras">

        <div class="compras-titulo">
            <h2 class="titulo2">Califica tu compra</h2>
        </div>

        <div class="lista-compras">
            <div class="compra">

                <div class="compra-info">
                    <a href="#" class="compra-img">
                        <img src="./build/img/3-3.jpg" alt="">
                    </a>
                    <div class="compra-producto">
                        <div>
                            <a href="#" class="parrafo2">Producto</a>
                            <p class="parrafo1">$11.11</p>
                        </div>
                        <div>
                            <p class="parrafo1">N pedido: #</p>
                            <p class="parrafo1">Fecha: DD/MM/AA</p>
                            <p class="parrafo1">Vendedora: nombre</p>
                        </div>
                    </div>
                </div>

                <div class="compra-cal">

                    <div class="box-clasificacion">
                        <div class="nombre-clasificacion">
                            <p class="parrafo1">
                                Rapidez envio:
                            </p>
                        </div>
                        <div class="stars-clasificacion">
                            <form>
                                <input id="radio-rapidez-1" type="radio" name="estrellas" value="1"><label
                                    for="radio-rapidez-1">★</label>
                                <input id="radio-rapidez-2" type="radio" name="estrellas" value="2"><label
                                    for="radio-rapidez-2">★</label>
                                <input id="radio-rapidez-3" type="radio" name="estrellas" value="3"><label
                                    for="radio-rapidez-3">★</label>
                                <input id="radio-rapidez-4" type="radio" name="estrellas" value="4"><label
                                    for="radio-rapidez-4">★</label>
                                <input id="radio-rapidez-5" type="radio" name="estrellas" value="5"><label
                                    for="radio-rapidez-5">★</label>
                            </form>
                        </div>
                    </div>

                    <div class="box-clasificacion">
                        <div class="nombre-clasificacion">
                            <p class="parrafo1">
                                Descripcion apropiada:
                            </p>
                        </div>
                        <div class="stars-clasificacion">
                            <form>
                                <input id="radio-descripcion-1" type="radio" name="estrellas" value="1"><label
                                    for="radio-descripcion-1">★</label>
                                <input id="radio-descripcion-2" type="radio" name="estrellas" value="2"><label
                                    for="radio-descripcion-2">★</label>
                                <input id="radio-descripcion-3" type="radio" name="estrellas" value="3"><label
                                    for="radio-descripcion-3">★</label>
                                <input id="radio-descripcion-4" type="radio" name="estrellas" value="4"><label
                                    for="radio-descripcion-4">★</label>
                                <input id="radio-descripcion-5" type="radio" name="estrellas" value="5"><label
                                    for="radio-descripcion-5">★</label>
                            </form>
                        </div>
                    </div>

                    <div class="box-clasificacion">
                        <div class="nombre-clasificacion">
                            <p class="parrafo1">
                                Limpieza del producto:
                            </p>
                        </div>
                        <div class="stars-clasificacion">
                            <form>
                                <input id="radio-limpieza-1" type="radio" name="estrellas" value="1"><label
                                    for="radio-limpieza-1">★</label>
                                <input id="radio-limpieza-2" type="radio" name="estrellas" value="2"><label
                                    for="radio-limpieza-2">★</label>
                                <input id="radio-limpieza-3" type="radio" name="estrellas" value="3"><label
                                    for="radio-limpieza-3">★</label>
                                <input id="radio-limpieza-4" type="radio" name="estrellas" value="4"><label
                                    for="radio-limpieza-4">★</label>
                                <input id="radio-limpieza-5" type="radio" name="estrellas" value="5"><label
                                    for="radio-limpieza-5">★</label>
                            </form>
                        </div>
                    </div>

                    <div class="box-clasificacion">
                        <div class="nombre-clasificacion">
                            <p class="parrafo1">
                                Comunicación:
                            </p>
                        </div>
                        <div class="stars-clasificacion">
                            <form>
                                <input id="radio-comunicacion-1" type="radio" name="estrellas" value="1"><label
                                    for="radio-comunicacion-1">★</label>
                                <input id="radio-comunicacion-2" type="radio" name="estrellas" value="2"><label
                                    for="radio-comunicacion-2">★</label>
                                <input id="radio-comunicacion-3" type="radio" name="estrellas" value="3"><label
                                    for="radio-comunicacion-3">★</label>
                                <input id="radio-comunicacion-4" type="radio" name="estrellas" value="4"><label
                                    for="radio-comunicacion-4">★</label>
                                <input id="radio-comunicacion-5" type="radio" name="estrellas" value="5"><label
                                    for="radio-comunicacion-5">★</label>
                            </form>
                        </div>
                    </div>

                    <div class="box-clasificacion">
                        <div class="nombre-clasificacion">
                            <p class="parrafo1">
                                Presentación del producto:
                            </p>
                        </div>
                        <div class="stars-clasificacion">
                            <form>
                                <input id="radio-presentacion-1" type="radio" name="estrellas" value="1"><label
                                    for="radio-presentacion-1">★</label>
                                <input id="radio-presentacion-2" type="radio" name="estrellas" value="2"><label
                                    for="radio-presentacion-2">★</label>
                                <input id="radio-presentacion-3" type="radio" name="estrellas" value="3"><label
                                    for="radio-presentacion-3">★</label>
                                <input id="radio-presentacion-4" type="radio" name="estrellas" value="4"><label
                                    for="radio-presentacion-4">★</label>
                                <input id="radio-presentacion-5" type="radio" name="estrellas" value="5"><label
                                    for="radio-presentacion-5">★</label>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

            <div class="calificacion-global">
                <div class="nombre-clasificacion-global">
                    <p class="parrafo2">Calificación global:</p>
                </div>
                <div class="stars-clasificacion-global">
                    <form>
                        <input id="radio-global-1" type="radio" name="estrellas" value="1"><label
                            for="radio-global-1">★</label>
                        <input id="radio-global-2" type="radio" name="estrellas" value="2"><label
                            for="radio-global-2">★</label>
                        <input id="radio-global-3" type="radio" name="estrellas" value="3"><label
                            for="radio-global-3">★</label>
                        <input id="radio-global-4" type="radio" name="estrellas" value="4"><label
                            for="radio-global-4">★</label>
                        <input id="radio-global-5" type="radio" name="estrellas" value="5"><label
                            for="radio-global-5">★</label>
                    </form>
                </div>
            </div>

            <div class="calificacion-comentario">
                <p class="parrafo1">Añade un comentario</p>
                <textarea name="" id="" placeholder="Escribe tu comentario aqui"></textarea>
            </div>

            <div class="calificacion-botones">
                <input class="cancel" type="button" value="Cancelar">
                <input type="button" value="Guardar">
            </div>

        </div>

    </div>
@endsection
