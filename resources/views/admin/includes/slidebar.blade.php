<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href=" {{ route('home.index') }} ">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">UPTON4EVER</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href=" {{ route('admin.index') }} ">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Usuarios
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-folder"></i>
            <span>Gestionar usuarios</span>
        </a>
        <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Operación:</h6>
                <a class="collapse-item" href=" {{ route('user.info') }} ">Ver usuarios</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <div class="sidebar-heading">
        Prendas
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSubcategorias"
            aria-expanded="true" aria-controls="collapseSubcategorias">
            <i class="fas fa-fw fa-folder"></i>
            <span>Gestionar subcategorías</span>
        </a>
        <div id="collapseSubcategorias" class="collapse" aria-labelledby="headingSubcategorias"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Operación:</h6>
                <a class="collapse-item" href=" {{ route('subcategory.index') }} ">Ver subcategorías</a>
                <a class="collapse-item" href=" {{ route('subcategory.create') }} ">Crear subcategoría</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseElementos"
            aria-expanded="true" aria-controls="collapseElementos">
            <i class="fas fa-fw fa-folder"></i>
            <span>Gestionar elementos</span>
        </a>
        <div id="collapseElementos" class="collapse" aria-labelledby="headingElementos" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Operación:</h6>
                <a class="collapse-item" href=" {{ route('element.index') }} ">Ver elementos</a>
                <a class="collapse-item" href=" {{ route('element.create') }} ">Crear elemento</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMarcas" aria-expanded="true"
            aria-controls="collapseMarcas">
            <i class="fas fa-fw fa-folder"></i>
            <span>Gestionar marcas</span>
        </a>
        <div id="collapseMarcas" class="collapse" aria-labelledby="headingMarcas" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Operación:</h6>
                <a class="collapse-item" href=" {{ route('brand.index') }} ">Ver marcas</a>
                <a class="collapse-item" href=" {{ route('brand.create') }} ">Crear marca</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTallas" aria-expanded="true"
            aria-controls="collapseTallas">
            <i class="fas fa-fw fa-folder"></i>
            <span>Gestionar tallas</span>
        </a>
        <div id="collapseTallas" class="collapse" aria-labelledby="headingTallas" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Operación:</h6>
                <a class="collapse-item" href=" {{ route('size.index') }} ">Ver tallas</a>
                <a class="collapse-item" href=" {{ route('size.create') }} ">Crear talla</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEstados"
            aria-expanded="true" aria-controls="collapseEstados">
            <i class="fas fa-fw fa-folder"></i>
            <span>Gestionar estados</span>
        </a>
        <div id="collapseEstados" class="collapse" aria-labelledby="headingEstados" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Operación:</h6>
                <a class="collapse-item" href=" {{ route('statuses.index') }} ">Ver estados</a>
                <a class="collapse-item" href="{{ route('statuses.create') }}">Crear estado</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseColores"
            aria-expanded="true" aria-controls="collapseColores">
            <i class="fas fa-fw fa-folder"></i>
            <span>Gestionar colores</span>
        </a>
        <div id="collapseColores" class="collapse" aria-labelledby="headingColores" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Operación:</h6>
                <a class="collapse-item" href=" {{ route('colors.index') }} ">Ver colores</a>
                <a class="collapse-item" href="{{ route('colors.create') }}">Crear color</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">















    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
