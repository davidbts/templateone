@extends('layouts.app')

@section('content')
    <div class="contenedor-valoracion">

        <div class="valoracion-titulo">
            <h2 class="titulo2">Valoraciones</h2>
        </div>

        <div class="usuario-valoracion">

            <div class="usuario-info">
                <div class="usuario-img">
                    @if ($user->image)
                        <img src=" {{ route('user.picture', ['filename' => $user->image]) }} " alt="">
                    @else
                        <img src=" {{ asset('img/person.png') }} " alt="">
                    @endif
                </div>
                <div class="informacion">
                    <div class="info-rank">
                        <div class="info-raking">
                            <div class="usuario">
                                <p class="parrafo3">
                                    <a href="#">Usuario</a>
                                </p>
                            </div>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="info-estadisticas">
                        <div>
                            <p class="parrafo1">#ventas</p>
                            <p class="parrafo1">#seguidoras</p>
                            <p class="parrafo1">#siguiendo</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="info-valoracion">

                <div class="nombre-valoracion">
                    <p class="parrafo1">Rapides envio:</p>
                </div>
                <div class="valoracion-star">
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

                <div class="nombre-valoracion">
                    <p class="parrafo1">Descripción apropiada:</p>
                </div>
                <div class="valoracion-star">
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

                <div class="nombre-valoracion">
                    <p class="parrafo1">Comunicación:</p>
                </div>
                <div class="valoracion-star">
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

                <div class="nombre-valoracion">
                    <p class="parrafo1">Presentación del producto:</p>
                </div>
                <div class="valoracion-star">
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

                <div class="nombre-valoracion">
                    <p class="parrafo1">Sastifacción de tu compra:</p>
                </div>
                <div class="valoracion-star">
                    <form>
                        <input id="radio-sastifaccion-1" type="radio" name="estrellas" value="1"><label
                            for="radio-sastifaccion-1">★</label>
                        <input id="radio-sastifaccion-2" type="radio" name="estrellas" value="2"><label
                            for="radio-sastifaccion-2">★</label>
                        <input id="radio-sastifaccion-3" type="radio" name="estrellas" value="3"><label
                            for="radio-sastifaccion-3">★</label>
                        <input id="radio-sastifaccion-4" type="radio" name="estrellas" value="4"><label
                            for="radio-sastifaccion-4">★</label>
                        <input id="radio-sastifaccion-5" type="radio" name="estrellas" value="5"><label
                            for="radio-sastifaccion-5">★</label>
                    </form>
                </div>

            </div>

        </div>

    </div>

    <div class="valoraciones">

        <div class="valoracion-usuario">
            <div class="valoracion-info">
                <div class="usuario-valoracion">
                    <div class="val-img">
                        <img src="{{ asset('img/6o.jpg') }}"">
                          </div>
                            <a href=" ./usuario-prod.html" class="parrafo3 par1">Usuario</a>
                    </div>
                    <div class="valoracion-tiempo">
                        <p class="parrafo1 parr1">Hace # semanas</p>
                    </div>
                    <div class="valoracion-star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="valoracion-comentario">
                    <p class="parrafo1">
                        Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                        velit.
                    </p>
                </div>
            </div>

            <div class="valoracion-usuario">
                <div class="valoracion-info">
                    <div class="usuario-valoracion">
                        <div class="val-img">
                            <img src="{{ asset('img/6o.jpg') }}" alt="">
                        </div>
                        <a href="./usuario-prod.html" class="parrafo3 par1">Usuario</a>
                    </div>
                    <div class="valoracion-tiempo">
                        <p class="parrafo1 parr1">Hace # semanas</p>
                    </div>
                    <div class="valoracion-star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="valoracion-comentario">
                    <p class="parrafo1">
                        Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                        velit.
                    </p>
                </div>
            </div>

        </div>
    @endsection
