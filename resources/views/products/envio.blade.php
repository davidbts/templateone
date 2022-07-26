@extends('layouts.app')

@section('content')
    <form class="contenedor-datos-envio" method="POST" action="{{ route('product.purchase') }}">
        @csrf
        <div class="datos-envio">

            <div class="datos-personales">
                <div class="datos-titulo">
                    <p class="titulo3">Datos envío</p>
                </div>
                <div class="form-personales">
                    <div class="form-personales">
                        <input type="text" name="name" id="name" placeholder="Nombre"
                            value="{{ $delivery && $delivery->name ? $delivery->name : $user->name }}" required>
                        <input type="text" name="lastname" id="lastname" placeholder="Apellido"
                            value="{{ $delivery && $delivery->lastname ? $delivery->lastname : $user->lastname }}" required>
                        <input type="tel" name="phoneNumber" id="phoneNumber" placeholder="Numero celular"
                            value="" required>
                        <input type="text" name="email" id="email" placeholder="Correo electrónico"
                            value="{{ $delivery && $delivery->email ? $delivery->email : $user->email }}" required>
                    </div>
                </div>
                <div class="form-denvio">
                    <input type="text" name="street" id="street" placeholder="Calle"
                        value="{{ $delivery && $delivery->street ? $delivery->street : '' }}" required>
                </div>
                <div class="form-personales">
                    <input type="text" name="outdoorNumber" id="outdoorNumber" placeholder="N Ext."
                        value="{{ $delivery && $delivery->outdoorNumber ? $delivery->outdoorNumber : '' }}" required>
                    <input type="text" name="interiorNumber" id="interiorNumber" placeholder="N Int."
                        value="{{ $delivery && $delivery->interiorNumber ? $delivery->interiorNumber : '' }}">
                    <input type="number" name="postalCode" id="postalCode" placeholder="Código postal"
                        value="{{ $delivery && $delivery->postalCode ? $delivery->postalCode : '' }}" required>
                    <input type="text" name="state" id="state" placeholder="Estado"
                        value="{{ $delivery && $delivery->state ? $delivery->state : '' }}" required>
                </div>
                <div class="form-denvio">
                    <input type="text" name="city" id="city" placeholder="Ciudad"
                        value="{{ $delivery && $delivery->city ? $delivery->city : '' }}" required>
                    <input type="text" name="municipality" id="municipality" placeholder="Municipio"
                        value="{{ $delivery && $delivery->municipality ? $delivery->municipality : '' }}" required>
                    <input type="text" name="suburb" id="suburb" placeholder="Colonia"
                        value="{{ $delivery && $delivery->suburb ? $delivery->suburb : '' }}" required>
                    <input type="text" name="references" id="references" placeholder="Referencias"
                        value="{{ $delivery && $delivery->references ? $delivery->references : '' }}" required>
                    {{-- <input type="text" name="" id="" placeholder="Teléfono"> --}}
                </div>
            </div>

            <div class="datos-orden">
                <div class="orden-titulo">
                    <p class="parrafo2">Tu orden</p>
                </div>
                <div class="orden-datos">
                    <div class="orden-producto">
                        <p class="parrafo1">{{ $product->name }}</p>
                    </div>
                    <div class="orden-detalles">
                        <p class="parrafo1">{{ $product->description }}</p>
                    </div>
                    <div class="orden-1">
                        <p class="parrafo1">Precio prenda</p>
                        <p class="parrafo1">${{ $product->price }}</p>
                    </div>
                    <div class="orden-1">
                        <p class="parrafo1">Envio</p>
                        <p class="parrafo1">$11.00</p>
                    </div>
                    <div class="orden-1">
                        <p class="parrafo1"><strong>Total</strong></p>
                        <p class="parrafo1"><strong>${{ $product->price + 11 }}</strong></p>
                    </div>
                    <div class="orden-pago">
                        <input type="radio" name="" id="">
                        <p class="parrafo1">Elige tu metodo de pago</p>
                    </div>
                    <textarea name="" id="" placeholder="Nombre"></textarea>
                    <div class="orden-terminos">
                        <input type="checkbox" name="" id="">
                        <p>He leído y acepto los <a href="{{ route('home.terminos') }}">terminos y condiciones</a> </p>
                    </div>
                    <div class="orden-buton">
                        <input type="submit" value="Finalizar compra">
                    </div>
                </div>
            </div>

        </div>
        <input type="hidden" name="product_id" value="{{ $product->id }}">
    </form>

    @include('includes.mascategorias')
@endsection
