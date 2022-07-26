<?php
$user = Auth::user();
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
            <a class="getlink" href="javascript:getlink();">Compartir</a>
        </div>
        <div class="compartir-redes">
            <span class="enlace">
                <img src=" {{ asset('img/enlace.png') }} " alt="">
                <p class="parrafo1">enlace</p>
            </span>
        </div>
    </div>

    <script>
        function getlink() {
            var aux = document.createElement('input');
            aux.setAttribute('value', window.location.href.split('?')[0].split('#')[0]);
            document.body.appendChild(aux);
            aux.select();
            document.execCommand('copy');
            document.body.removeChild(aux);
            var css = document.createElement('style');
            var estilo = document.createTextNode('#aviso {position:fixed; z-index: 9999999; top: 30%;left:50%;margin-left: -70px;padding: 10px; background: #c4d86d82;border-radius: 8px;color: white; font-size: 1.4rem;}');
            css.appendChild(estilo);
            document.head.appendChild(css);
            var aviso = document.createElement('div');
            aviso.setAttribute('id', 'aviso');
            var contenido = document.createTextNode('Enlace Copiado');
            aviso.appendChild(contenido);
            document.body.appendChild(aviso);
            window.load = setTimeout('document.body.removeChild(aviso)', 2000);
        }
    </script>

</div>
