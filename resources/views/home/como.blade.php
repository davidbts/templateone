@extends('layouts.app')

@section('content')
    <div class="contenedor-como">

        <div class="como-titulo">
            <h2 class="titulo2">¿CÓMO FUNCIONA</h2>
        </div>

        <div class="como-info">

            <p class="parrafo1 info">
                Para <strong>VENDER</strong> <br>
                <br>
                Los principales conceptos de nuestra marca son: <strong>Reutiliza, Renueva, Reinvéntate</strong>, con base en 
                esto realiza lo siguiente:
            </p>

            <div class="info-vende">

                <div class="box-vende">
                    <div class="vende-img">
                        <img src=" {{ asset('img/closet.png') }} " alt="">
                    </div>
                    <div class="vende-in">
                        <p class="parrafo1">
                            Selecciona de tu guardarropa aquello que no uses y quieras que alguien 
                            más le dé una segunda oportunidad.
                        </p>
                    </div>
                </div>


                <div class="box-vende">
                    <div class="vende-img">
                        <img src=" {{ asset('img/fotos.png') }} " alt="">
                    </div>
                    <div class="vende-in">
                        <p class="parrafo1">
                            Toma unas fotos de lo que hayas elegido, descríbelo lo mejor posible, 
                            marca, talla, color, precio, etc., Incluso menciona aquellos detalles de 
                            desgaste, y listo, quedara publicada en nuestro sitio.
                        </p>
                    </div>
                </div>

                <div class="box-vende">
                    <div class="vende-img">
                        <img src=" {{ asset('img/empacar.png') }} " alt="">
                    </div>
                    <div class="vende-in dif">
                        <p class="parrafo1">
                            Cuando vendas solamente tendrás que imprimir la guía que te enviaremos, 
                            empacar tu prenda o articulo y llevarlo a la mensajería.
                        </p>
                    </div>
                </div>

                <div class="box-vende">
                    <div class="vende-img">
                        <img src=" {{ asset('img/pag.jpeg') }} " alt="">
                    </div>
                    <div class="vende-in dif">
                        <p class="parrafo1">
                            Listo, en unos días el dinero quedara disponible en tu cuenta de usuario de 
                            <strong>upton4ever.</strong>, contamos con dos opciones, la primera, podrás utilizarlo para 
                            comprar dentro de la plataforma algún otro artículo o prenda y la segunda, 
                            depositarlo en tu cuenta bancaria que registraste. 
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="info-compra">
                <p class="parrafo1 info">
                    Para <strong>COMPRAR</strong> <br>
                    <br>
                    Los principales conceptos de nuestra marca son: <strong>Reutiliza, Renueva, Reinvéntate</strong>, con base en 
                    esto realiza lo siguiente:
                </p>
                <div class="box-compra">
                    <div class="compra-img">
                        <img src=" {{ asset('img/closet.png') }} " alt="">
                    </div>
                    <div class="compra-in">
                        <p class="parrafo1">
                            Selecciona el articulo o prenda que te interesa del vasto mundo de 
                            oportunidades que tenemos.
                        </p>
                    </div>
                </div>

                <div class="box-compra">
                    <div class="compra-img">
                        <img src=" {{ asset('img/rec.jpeg') }} " alt="">
                    </div>
                    <div class="compra-in dif">
                        <p class="parrafo1">
                            Selecciona una forma de pago que más te convenga, será 100% segura.
                        </p>
                    </div>
                </div>
                
                <div class="box-compra">
                    <div class="compra-img">
                        <img src=" {{ asset('img/envi.jpeg') }} " alt="">
                    </div>
                    <div class="compra-in">
                        <p class="parrafo1">
                            Recibe en las puertas de tu hogar tu pedido, que disfrutes tu compra, 
                            gracias por ser parte de este cambio de conciencia al REUTILIZAR, 
                            RENOVAR Y REINVENTARTE.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
