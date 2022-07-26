@extends('layouts.app')

@section('content')
<div class="contenedor-preguntas">

    <div class="preguntas-titulo">
        <h2 class="titulo2">Preguntas frecuentes</h2>
    </div>

    <div class="titexto">
        <p class="titulo3 cen">UPTON4EVER
            <br> REUTILIZA... RENUEVA…. REINVENTATE!!!
        </p>

    </div>

    <div class="preguntas-info">

        <div class="accordion">
            <ul>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h3 class="titulo3">¿COMO ME REGISTRO?</h3>
                    <p class="parrafo1">
                        Selecciona <strong>Regístrate</strong>, podrás tener acceso con tu cuenta de Facebook, Google o
                        completa tu perfil con Nombre, Usuario, Correo y Contraseña, así de fácil tendrás acceso a la
                        plataforma.
                    </p>
                </li>

                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h3 class="titulo3">VENDI MI ARTÍCULO, ¿QUE HAGO?</h3>
                    <p class="parrafo1">
                        Una vez confirmado el pago, te enviaremos una notificación a tu correo y numero celular
                        registrado, deberás revisa los datos de envió para generar la guía e imprimirla, paso siguiente
                        envuelve tu articulo o prenda, pega la guía, y solicita que Eiya (mensajería) pase a tu
                        domicilio por el articulo o prenda o llévalo a la paquetería con convenio más cercana a tu
                        domicilio.
                    </p>
                </li>

                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h3 class="titulo3">¿COMO SE QUE EL ARTICULO O PRENDA LLEGO A EL (LA) COMPRADOR(A)?</h3>
                    <p class="parrafo1">
                        Puedes hacer el seguimiento de tu articulo o prenda a través de la plataforma, ve a tu usuario,
                        hacia el área de Ventas, ahí encontraras la liga de Eiya, (mensajería), en donde podrás ver el
                        status de la entrega. Una vez entregado el articulo o prenda, te enviaremos una notificación a
                        tu correo y numero celular registrado, con la confirmación de recepción.
                    </p>
                </li>

                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h3 class="titulo3">¿CUANTO TIEMPO TENGO PARA HACER EL ENVIO?</h3>
                    <p class="parrafo1">
                        Una vez confirmado el pago, cuentas con 7 días hábiles para realizar el envío, de no hacerlo, se
                        realizará la devolución al comprador(a), solicita que Eiya (mensajería) pase a tu domicilio por
                        el articulo o prenda o llévalo a la paquetería con convenio más cercana a tu domicilio.
                    </p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h3 class="titulo3">¿CUANTOS ARTICULOS O PRENDAS PUEDO PUBLICAR?</h3>
                    <p class="parrafo1">
                        No hay límite de prendas o artículos que puedas publicar, todas las publicaciones que realices
                        No tienen costo, son Gratis, te recordamos que está prohibido publicar artículos o prendas
                        piratas, clonaciones o robados. Si lo haces serás dado de baja de la plataforma.
                    </p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h3 class="titulo3">¿CUÁNDO RECIBIRE EL PAGO POR MI VENTA?</h3>
                    <p class="parrafo1">
                        Una vez confirmado el pago y el articulo o prenda ha sido entregado, la (el) comprador(a) tendrá
                        48 horas para aceptar o devolver el articulo o prenda, una vez transcurrido este tiempo, el
                        saldo será liberado y se depositará en el área de tu usuario en Cuentas, podrás solicitar que el
                        importe sea depositado en tu cuenta de débito registrada (esto puede tardar hasta 10 días
                        hábiles) o utilizar el saldo para comprar otro articulo o prenda dentro de Upton4ever.
                    </p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h3 class="titulo3">¿QUE HAGO PARA EVITAR UNA DEVOLUCION CUANDO VENDO?</h3>
                    <p class="parrafo1">
                        Es muy importante que describas el artículo o prenda lo mejor posible, ya sea nuevo o usado,
                        recuerda poner todos los detalles y características, no olvides describir si tiene algún defecto
                        o detalle de uso, si le hace falta alguna pieza en el caso de los artículos, es muy importante
                        que sea claramente indicado, toma fotos a esos detalles y publícalos dentro de las 5 fotos que
                        puedes subir, envía el producto en las mejores condiciones y muy bien empaquetado, tienes 7 días
                        para realizar el envío, esto evitara devoluciones, recuerda que en caso de devolución se te
                        retirará el dinero de la venta más el valor de la guía de retorno en caso de que desees el
                        producto de vuelta.
                    </p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h3 class="titulo3">¿QUE COMISIÓN COBRAN POR LAS VENTAS EJECUTADAS?</h3>
                    <p class="parrafo1">
                        Publicar Artículos y/o Prendas en <strong>UPTON4EVER</strong> es <strong>GRATIS</strong> <br>
                        <br>La comisión por venta es de 22% los primeros 6 meses, 18.5% del séptimo mes en adelante <br>
                        <br>Se cobran 10 pesos por gastos administrativos y uso de la aplicación por venta <br>
                        <br>Según la normativa de SAT con base en el artículo 1ro de la Ley de Impuesto al Valor
                        Agregado se
                        cobrará (IVA) y artículos 113-A, 113-C de la ley de Impuesto Sobre la Renta se cobrará (ISR),
                        <br>
                        <br>Persona Física con RFC registrado en Upton4ever las retenciones serán de 8% de IVA y 1% de
                        ISR
                        <br>
                        <br>Persona Física sin RFC registrado en Upton4ever las retenciones serán del 16% de IVA e ISR
                        según
                        la siguiente tabla: <br>
                        <br>
                        <td class="parrafo1">DE</td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <td class="parrafo1">HASTA</td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <td class="parrafo1">TASA</td><br>

                        <td class="parrafo1">$0.00 </td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <td class="parrafo1">$49.34</td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <td class="parrafo1">0.40%</td><br>

                        <td class="parrafo1">$49.35</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <td class="parrafo1">$164.47</td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <td class="parrafo1">0.50%</td><br>

                        <td class="parrafo1">$167.48</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <td class="parrafo1">$328.95</td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <td class="parrafo1">0.90%</td><br>

                        <td class="parrafo1">$328.96</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <td class="parrafo1">$822.37 </td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <td class="parrafo1">1.10%</td><br>

                        <td class="parrafo1">$822.38 </td>&nbsp;&nbsp;&nbsp;&nbsp;
                        <td class="parrafo1">$3,289.47 </td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <td class="parrafo1">2.00%</td><br>

                        <td class="parrafo1">$3,289.48</td>&nbsp;&nbsp;
                        <td class="parrafo1">$100,000.00 </td>&nbsp;&nbsp;
                        <td class="parrafo1">5.40%</td>

                    </p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h3 class="titulo3">¿QUE COMISIÓN COBRAN POR LAS COMPRAS EJECUTADAS?</h3>
                    <p class="parrafo1">
                        La Compra de algún Articulo y/o Prenda no tiene comisión, únicamente pagaras el costo del
                        articulo o prenda más el envío más IVA en cada compra, a continuación, enlistamos unas tarifas
                        como referencia del envió: <br>
                        <br><strong>Envío Local</strong>, dentro de la misma ciudad, entrega mismo día o día siguiente.
                        Disponible en CDMX y Zona Metropolitana, Toluca, Querétaro, Guadalajara, y Puebla. <br>
                        <br>Tarifa fija de <strong>$70 hasta 1kg</strong> <br>
                        <br>Tarifa fija de <strong>$80 hasta 2kg</strong> <br>
                        <br>Tarifa fija de <strong>$95 hasta 5kg</strong> <br>
                        <br>Tarifa fija de <strong>$170 hasta 20kg</strong> <br>
                        <br>
                        <br><strong>Envío Regional</strong>, de ciudad a ciudad entrega de 1 a 3 días hábiles.
                        Disponible entre CDMX y Zona Metropolitana, Toluca, Querétaro, Guadalajara, y Puebla. <br>
                        <br>Tarifa fija de <strong>$80 hasta 1kg</strong> <br>
                        <br>Tarifa fija de <strong>$100 hasta 2kg</strong> <br>
                        <br>Tarifa fija de <strong>$130 hasta 5kg</strong> <br>
                        <br>Tarifa fija de <strong>$230 hasta 20kg</strong> <br>
                        <br>Tarifas aplicables a partir de abril 2022, ya incluyen IVA y pueden cambiar sin previo
                        aviso.
                    </p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h3 class="titulo3">¿PUEDO ENVIAR ARTÍCULOS DE CUALQUIER PARTE DE LA REPÚBLICA?</h3>
                    <p class="parrafo1">
                        Por el momento estamos en las principales ciudades <strong>CDMX y Zona Metropolitana, Toluca,
                            Querétaro,
                            Guadalajara, y Puebla</strong> solo debes revisar el costo del envío a través del enlace que
                        aparecerá
                        dentro de la plataforma, pero si requieres un envío fuera de estas zonas Eiya (mensajería), a
                        través de sus convenios comerciales puede realizar el envío y entrega, esto se llama Zona
                        Extendida Nacional y tiene un costo adicional. <br>
                        <br>
                        <strong>Zona Local</strong>, De ciudad a ciudad, entregas de 1 a 3 días hábiles después de
                        recolectado. Disponible entre CDMX y Zona Metropolitana, Toluca, Querétaro, Guadalajara, y
                        Puebla. Aplican restricciones, acude a los Términos de Uso disponibles en ayuda.eiya.mx. <br>
                        <br>
                        <strong>Zona Regional</strong>, Dentro de la misma ciudad, entregas el mismo día o el día
                        siguiente después de recolectado. Aplican restricciones, acude a los Términos de Uso disponibles
                        en
                        ayuda.eiya.mx. Disponibles dentro de CDMX y Zona Metropolitana, Toluca, Querétaro,
                        Guadalajara, y Puebla. <br>
                        <br>
                        <strong>Zona Extendida Local y Nacional</strong>, En Zona Extendida Local no hay costo
                        adicional, sin embargo, el tiempo de entrega está bajo disponibilidad de tiempos en la zona de
                        destino. En Zona Extendida Nacional aplica costo de $125 adicional costo de envío para zonas
                        remotas y de acceso complicado. El tiempo de entrega depende del destino.<br>
                        <br>Incluye 2 intentos de entrega, para 2do intento el paquete únicamente es enviado de nuevo
                        hasta obtener confirmación por el cliente. Envíos que requieran modificación/corrección de datos
                        no cubre la garantía y se deberá generar un nuevo envío a costo completo. Cliente final tendrá
                        rastreo y manera de contactar a soporte de Eiya para cualquier tema.
                    </p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h3 class="titulo3">¿CÓMO ENVIAR EL ARTICULO O PRENDA?</h3>
                    <p class="parrafo1">
                        Es muy sencillo <br>
                        <br>En la página principal ingresa los datos solicitados<br>
                        <br>Crea los envíos y las guías para imprimir y etiquetar los paquetes.<br>
                        <br>Solicita recolecta de paquetes<br>
                        <br>Se recoge el día solicitado y se entrega mismo día o día siguiente, con excepción de envíos
                        regionales y zonas extendidas.<br>
                    </p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h3 class="titulo3">¿COMO FUNCIONAN LAS RECOLECTAS?</h3>
                    <p class="parrafo1">
                        Elimina el tiempo que te toma ir a entregar a sucursal.<br>
                        <br>Eiya recolecta tus paquetes directo en tu domicilio. Desde tu cuenta bajo el menú de
                        Recolectas solicita la recolecta de paquetes. Si no recolectamos el día que solicitaste,
                        automáticamente recolectamos el día siguiente. La exactitud en la hora de recolecta depende de
                        diversos factores como volumen de paquetes, recurrencia de uso del servicio, y código postal de
                        recolecta.<br>
                        <br>Recomendamos solicitar recolectas con los mismos patrones, es decir mismo horario y días;
                        diario, cada otro día, o los mismos días semana tras semana. Esto permite que la plataforma
                        registre ciertos patrones para cada vez ser más precisos con la recolecta de paquetes. Si tu
                        negocio maneja horarios irregulares, y frecuentemente se solicitan recolectas en diferentes
                        horarios y direcciones, es posible que afecte la exactitud en la hora en que se recolecte.<br>
                        <br>Solicitar recolecta de paquetes no tiene costo. Aplica costo de $60 para recolectas
                        fallidas: canceladas o modificadas bajo estado en camino; negocio no disponible, no responde, no
                        tiene paquetes listos; cualquier tema que no permita realizar una recolecta de paquetes exitosa.
                        Solicita recolecta hasta que tengas los paquetes listos, evita costos de cancelación.<br>
                        <br>Horarios de Recolecta CDMX/Zona Metropolitana, Toluca, Querétaro y Puebla<br>
                        <br>Zona Centro Lunes a viernes de 9am a 7pm<br>
                        <br>Periferia de Zona Centro Lunes a viernes de 9am a 12pm y de 5pm a 9pm<br>
                        <br>Zona Extendida contacta a Eiya para información.<br>
                    </p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h3 class="titulo3">¿CÓMO DEBO EMPACAR EL PRODUCTO?</h3>
                    <p class="parrafo1">
                        Deberás colocar el articulo o prenda en algún sobre, bolsa o caja dependiendo de sus necesidades
                        y dimensiones, como recomendación cuando se trate de algo que requiera mayor protección, podría
                        envolverlo con plástico burbuja o con algún relleno biodegradable para embalaje, al finalizar
                        deberás imprimir y pegar la guía, con esto contribuirás a que llegue en las mejores condiciones.
                        <br>
                        <br> Recuerda que el articulo o prenda debe estar en buen estado, limpio, presentable, tal cual
                        lo describiste en la plataforma, para evitar temas de devolución.
                    </p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h3 class="titulo3">¿CÓMO VEO LAS COMPRAS QUE REALICE?</h3>
                    <p class="parrafo1">
                        Da un clic en tu nombre de usuario, desplaza el cursor hacia Compras, te llevará al área en
                        donde aparecerá tu historial de tus compras realizadas.
                    </p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h3 class="titulo3">¿CUALES SON LOS METODOS DE PAGO?</h3>
                    <p class="parrafo1">
                        Tenemos una pasarela de pagos a través de Conekta que acepta, Tarjetas de Crédito y Débito,
                        (Visa y Master Card), Mercado Pago, PayPal, Efectivo en OXXO, SPEI
                    </p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h3 class="titulo3">¿COMO PUEDO UTILIZAR MI SALDO?</h3>
                    <p class="parrafo1">
                        Tienes dos opciones para utilizar tu saldo, podrás solicitar que el importe sea depositado en tu
                        cuenta de débito registrada (esto puede tardar hasta 10 días hábiles) o utilizar el saldo para
                        comprar otro artículo o prenda dentro de Upton4ever.
                    </p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h3 class="titulo3">¿CUANTO ES EL MAXIMO DE ARTICULOS O PRENDAS QUE PUEDO COMPRAR?</h3>
                    <p class="parrafo1">
                        No hay un límite de artículos y/o prendas que puedas adquirir, todo depende de tu capacidad de
                        pago, recuerda no gastar más de lo necesario.
                    </p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h3 class="titulo3">¿QUE PUEDO HACER CUANDO LA PLATAFORMA RECHAZO EL PAGO CON TARJETA?</h3>
                    <p class="parrafo1">
                        Si realizaste un pago y recibiste una notificación de que tu tarjeta fue rechazada, debes
                        comunicarte con tu banco emisor para verificar los motivos. <br>
                        <br> Tienes la opción de pagar con algún otro medio de pago

                    </p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h3 class="titulo3">¿QUIERO SABER SI LOS ARTÍCULOS O PRENDAS QUE SE PUBLICAN, SON ORIGINALES O
                        IMITACIONES?</h3>
                    <p class="parrafo1">
                        Todos los productos son originales, no aceptamos piratería ni clones, si se detecta alguna
                        anomalía en cuanto a esto, el infractor será dado de baja de la plataforma.

                    </p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h3 class="titulo3">¿QUIÉN PAGA EL ENVÍO?</h3>
                    <p class="parrafo1">
                        Quien realiza la compra es el encargado de pagar él envió, Eiya es la empresa que manejara el
                        envío y entrega del articulo o prenda adquirida.
                    </p>
                </li>

            </ul>
        </div>

    </div>

</div>
@endsection