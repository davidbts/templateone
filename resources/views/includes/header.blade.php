<header class="header">
    <div class="contenedor-header">
        <a class="logo" href="{{ route('home.index') }}">
            <img class="mostrar-anuncio" src=" {{ asset('img/upton-logo.jpg') }} " alt="logo de upton4ever">
        </a>
        <div class="elementos-header">
            <div class="contenedor-buscar form">
                <form class="form-describe" method="POST" action="{{ route('search.product') }}">
                    @csrf
                    <input type="search" id="word" name="word" class="form-buscar" placeholder="buscar" />
                    <button class="icon"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="menu-up-header ">
                @guest
                    <div class="menu-up-item text2icon">
                        <a class="menu-up-link " href="#"><i class="ayuda-header fas fa-info-circle titulo2"></i></a>
                    </div>
                    <div class="menu-up-item ">
                        <a class="menu-up-link " href="#"><span class="registrarse-header titulo4">Registrate</span></a>
                    </div>
                    <div class="menu-up-item icon2text">
                        <a class="menu-up-link " href="#"><span class="ayuda-header titulo4 ">Ayuda</span></i></a>
                    </div>
                    <div class="menu-up-item ">
                        <a class="menu-up-link " href="#"><span class="login-header titulo4">Inicio de sesión</span></a>
                    </div>
                @endguest
                @auth
                    @if (Auth::user()->role == 'admin')
                        <div class="menu-up-item ">
                            <a class="menu-up-link " href=" {{ route('admin.index') }} "><span
                                    class="titulo4">Dashboard</span></a>
                        </div>
                    @endif
                @endauth
                <div class="menu-up-item ">
                    <a class="menu-up-link borde acordeon-menu" href="#"> <i class="fas fa-bars"> </i></a>
                </div>
            </div>
            <div class="down-header">
                <div class="menu-down-header">
                    <div class="menu-down-center">
                        @foreach ($categories as $category)
                            <div class="menu-down-item" data-submenu="{{ $category->id }}">
                                <a class="menu-down-link" href="#"><span class="titulo3 acordeon-submenu"
                                        data-submenu="{{ $category->id }}">{{ $category->name != 'bebes' ? $category->name: 'bebés' }}</span></a>
                                <div class="submenu-{{ $category->name }}">
                                    @foreach ($subcategories as $subcategory)
                                        @if ($category->id == $subcategory->category_id)
                                            <div class="div-scategoria">
                                                <a href="#" class="scategoria">
                                                    {{ $subcategory->name }}
                                                </a>
                                            </div>
                                            @foreach ($elements as $element)
                                                @if ($subcategory->id == $element->subcategory_id)
                                                    <div class="div-subcategoria">
                                                        <a href="#" class="subcategoria">
                                                            {{ $element->name }}
                                                        </a>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="elementos-usuario-header">
                    @auth
                        <div class="usuario-item link-menu-notificacion">
                            <a class="link-icon " href="#"><img class="icono-1"
                                    src="{{ asset('img/Iconos-10.png') }}" alt=""><span
                                    class="num-notificacion">3</span></a>
                            <div class="menu-notificaciones ">
                                <div class="notificaciones-itemenu ">
                                    <p class="parrafo2 ">Notificaciones</p>
                                </div>
                                <div class="notificaciones-itemenu ">
                                    <a class="link-icon " href="#">
                                        <p class="texto-notificacion parrafo1">Neque porro quisquam est qui dolorem ipsum
                                            quia dolor sit amet, consectetur, adipisci velit. </p>
                                    </a>
                                </div>
                                <div class="notificaciones-itemenu">
                                    <a class="link-icon " href="#">
                                        <p class="texto-notificacion parrafo1">Neque porro quisquam est qui dolorem ipsum
                                            quia dolor sit amet, consectetur, adipisci velit. </p>
                                    </a>
                                </div>
                                <div class="notificaciones-itemenu">
                                    <a class="link-icon " href="#">
                                        <p class="texto-notificacion parrafo1">Neque porro quisquam est qui dolorem ipsum
                                            quia dolor sit amet, consectetur, adipisci velit. </p>
                                    </a>
                                </div>
                                <div class="notificaciones-itemenu">
                                    <a class="link-icon " href="#">
                                        <p class="mas-notificacion parrafo2">Ver Más</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="usuario-item">
                            <a class="link-icon " href="{{ route('user.favoritos') }}"><img class="icono-1"
                                    src="{{ asset('img/Iconos-02.png') }}" alt=""></a>
                        </div>
                        <div class="usuario-item link-menu-usuario">
                            <a class="link-icon " href="#"><img class="icono-1 "
                                    src="{{ asset('img/Iconos-06.png') }}" alt=""></a>
                            <div class="menu-usuario ">
                                <div class="usuario-itemenu ">
                                    <a class="link-icon " href="">
                                        <i class="fa-solid fa-universal-access icono-2"></i>
                                        <p class="conimagen">{{ Auth::user()->name . ' ' . Auth::user()->lastname }}
                                        </p>
                                    </a>
                                </div>
                                <div class="usuario-itemenu ">
                                    <a class="link-icon " href="{{ route('user.index') }}">
                                        <i class="fa-solid fa-gifts icono-2"></i>
                                        <p class="conimagen">Articulos / Prendas</p>
                                    </a>
                                </div>
                                <div class="usuario-itemenu">
                                    <a class="link-icon " href="{{ route('user.balance') }}">
                                        <i class="fa-solid fa-wallet icono-2"></i>
                                        <p class="conimagen">Cuentas</p>
                                    </a>
                                </div>
                                <div class="usuario-itemenu">
                                    <a class="link-icon " href="{{ route('user.ventas') }}">
                                        <i class="fa-solid fa-cart-plus icono-2"></i>
                                        <p class="conimagen">Ventas</p>
                                    </a>
                                </div>
                                <div class="usuario-itemenu">
                                    <a class="link-icon " href="{{ route('user.compras') }}">
                                    <i class="fa-solid fa-file-invoice-dollar icono-2"></i>
                                        <p class="conimagen">Compras</p>
                                    </a>
                                </div>
                                <div class="usuario-itemenu">
                                    <a class="link-icon " href="{{ route('user.favoritos') }}">
                                    <i class="fa-solid fa-thumbs-up icono-2"></i>
                                        <p class="conimagen">Me Gusta</p>
                                    </a>
                                </div>
                                <div class="usuario-itemenu">
                                    <a class="link-icon " href="#">
                                    <i class="fa-solid fa-user-plus icono-2"></i>
                                        <p class="conimagen invita-amigos">Invita a tus amigos</p>
                                    </a>
                                </div>
                                <div class="usuario-itemenu">
                                    <a class="link-icon " href="{{ route('user.account') }}">
                                    <i class="fa-solid fa-gears icono-2"></i>
                                        <p class="conimagen">Configuración</p>
                                    </a>
                                </div>
                                <div class="usuario-itemenu">
                                    <a class="link-icon " href="{{ route('home.preguntas') }}">
                                    <i class="fa-solid fa-circle-question icono-2"></i>
                                        <p class="conimagen">FAQ</p>
                                    </a>
                                </div>
                                <div class="usuario-itemenu">
                                    <a class="link-icon " href="">
                                    <i class="fa-solid fa-person-circle-question icono-2"></i>
                                        <p class="conimagen">Ayuda</p>
                                    </a>
                                </div>
                                <div class="usuario-itemenu">
                                    <a class="link-icon " href="{{ route('home.index') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa-solid fa-plug-circle-xmark icono-2"></i>
                                        <p class="conimagen">Cerrar sesión</p>
                                    </a>
                                </div>

                            </div>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</header>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
