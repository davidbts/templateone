<?php

$user = DB::table('users')
    ->where('id', $id)
    ->first();
$sales = DB::table('purchases')
    ->join('products', 'products.id', '=', 'purchases.product_id')
    ->where('products.user_id', $user->id)
    ->get();
?>

<div class="contenedor-usuario">

    <div class="usuario-info">
        <div class="usuario-img">
            @if ($user->image)
                <img src=" {{ route('user.picture', ['filename' => $user->image]) }} " alt="">
            @else
                <img src=" {{ asset('img/person.png') }} " alt="">
            @endif
        </div>
        <div class="informacion">
            <div class="info-raking">
                <div class="usuario">
                    <p class="parrafo3">{{ $user->nickname }}</p>
                </div>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="info-estadisticas">
                <div>
                    <p class="parrafo1">ventas: {{ count($sales) }}</p>
                    <p class="parrafo1">#seguidoras</p>
                    <p class="parrafo1">#siguiendo</p>
                </div>
                <div class="respuesta">
                    <p class="parrafo1">Tiempo de respuesta en #horas</p>
                    <p class="parrafo1">Ultima conexion:
                        {{ FormatTime::LongTimeFilter($user->last_connection) }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="usuario-compartir">
        <div class="compartir-boton">
            <input type="button" value="Compartir">
        </div>
        <div class="compartir-redes">
            <span class="facebook">
                <img src=" {{ asset('img/facebook-1.png') }} " alt="">
                <p class="parrafo1">facebook</p>
            </span>
            <span class="whatsapp">
                <img src=" {{ asset('img/whatsapp.png') }} " alt="">
                <p class="parrafo1">whatsapp</p>
            </span>
            <span class="enlace">
                <img src=" {{ asset('img/enlace.png') }} " alt="">
                <p class="parrafo1">enlace</p>
            </span>
        </div>
    </div>

</div>
