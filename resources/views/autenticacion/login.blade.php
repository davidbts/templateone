<div class="modal-login">
    <i class="fa fa-times cerrar-login"></i>
    <img class="logo-modal" src=" {{ asset('img/upton-logo.jpg') }} " alt="">
    <p class="parrafo1 parrafo1-login">Registrarse con:</p>
    <a class="btn btn-facebook" href=" {{ url('login/facebook') }} ">Continuar con Facebook</a>
    <a class="btn btn-google" href=" {{ url('login/google') }} ">Continuar con Google</a>
    <p class="parrafo1">o con:</p>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Correo electrónico:</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-enviar" name="btnLogin">Entrar</button>
        <p class="reglaspass"><a class="link-azul recuperar-header">¿Olvidaste tu contraseña?</p>
    </form>
    <p class="terminos">Registrándome declaro que he leído y aceptado los
        <a class="link-azul">Términos y Condiciones</a> y la
        <a class="link-azul">Política de privacidad</a> y acepto recibir ofertas especiales y promociones.
    </p>
</div>
