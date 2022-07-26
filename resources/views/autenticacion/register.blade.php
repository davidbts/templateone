<div class="modal-registro">
    <i class="fa fa-times cerrar-registro"></i>
    <img class="logo-modal" src=" {{ asset('img/upton-logo.jpg') }} " alt="">
    <p class="parrafo1 parrafo1-registro">Registrarse con:</p>
    <a class="btn btn-facebook"><i class="fab fa-facebook-f icon_con"></i> Continuar con Facebook</a>
    <a class="btn btn-google"><i class="fab fa-google icon_con"></i> Continuar con Google</a>
    <p class="parrafo1">o con:</p>
    <form method="POST" action=" {{ route('register') }} ">
        @csrf
        <div>
            <label class="" for="name">Nombre:</label>
            <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}" required placeholder="Tu nombre" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div>
            <label class="" for="lastname">Apelido:</label>
            <input id="lastname" type="text" class="@error('lastname') is-invalid @enderror" name="lastname"
                value="{{ old('lastname') }}" required placeholder="Tu apellido">
            @error('lastname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div>
            <label class="" for="nickname">Usuario:</label>
            <input id="nickname" type="text" class="@error('nickname') is-invalid @enderror" name="nickname"
                value="{{ old('nickname') }}" required placeholder="Nombre de usuario">
            @error('nickname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div>
            <label class="" for="email">Correo:</label>
            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required placeholder="Correo electronico">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div>
            <label class="" for="password">Contraseña</label>
            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password"
                value="{{ old('password') }}" required placeholder="Contraseña">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div>
            <label class="" for="password_confirmation">Repetir Contraseña</label>
            <input id="password_confirmation" type="password"
            class="@error('password_confirmation') is-invalid @enderror" name="password_confirmation"
            value="{{ old('password_confirmation') }}" required placeholder="Contraseña">
            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <p class="reglaspass">La contraseña debe de contener al menos 8 caracteres, una mayúscula, una minúscula, un número y un carácter especial.</p>
        <p class="terminos">Registrándome declaro que he leído y aceptado los
            <a class="link-azul">Términos y Condiciones</a> y la
            <a class="link-azul">Política de privacidad</a> y acepto recibir ofertas especiales y promociones.
        </p>
        <button type="submit" class="btn btn-enviar">Enviar</button>
    </form>
    <p class="terminos">o ¿Ya cuentas con una cuenta? <a class="link-azul">Iniciar sesion.</a></p>
</div>
