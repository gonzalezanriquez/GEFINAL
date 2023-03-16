<div class="wrapper d-flex align-items-stretch justify-content-between">

    <nav id="sidebar">
        <div class="p-5 pt-5">
            <div class="text-center">
                <a href="/"><img class="mb-5" src="{{ asset('img/gelogob.png') }}" alt="Logo Gestiones Educativas" height="70rem"></a>
            </div>

            <ul class="list-unstyled components mb-5">

                <li class="{{ Request::is('home*') ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class="nav-link " aria-current="page">
                        <i class="iconoSide bi bi-columns-gap pe-2 fa-lg"></i> Dashboard</a>
                </li>

                <li class="{{ Request::is('noticiasext*') ? 'active' : '' }}">
                    <a href="{{ route('noticiasext.index', ['mode' => $mode = 'Externas']) }}" class="nav-link " aria-current="page">
                        <i class="bi bi-envelope-open pe-2"></i> Noticias Externas</a>

                @hasanyrole('administrador|profesor|alumno')

                <li class="{{ Request::is('noticiasint*') ? 'active' : '' }}">
                    <a href="{{ route('noticiasint.index', ['mode' => $mode = 'Internas']) }}" class="nav-link " aria-current="page">
                        <i class="bi bi-envelope pe-2"></i> Noticias Internas</a>
                </li>
                @endhasanyrole
                @hasanyrole('administrador|editor')

                <li class="{{ Request::is('posts*') ? 'active' : '' }}">
                    <a href="{{ route('posts.index') }}" class="nav-link " aria-current="page">
                        <i class="bi bi-bookmark-plus pe-2"></i> Posteos</a>
                </li>
                @endhasanyrole
                @hasrole('administrador')
                <li class="{{ Request::is('users*') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}" class="nav-link " aria-current="page">
                        <i class="bi bi-person-add pe-2"></i> Usuarios</a>
                </li>
                @endhasrole
                @hasanyrole('administrador|profesor|alumno')
                <li class="{{ Request::is('profesores*') ? 'active' : '' }}">
                    <a href="{{ route('profesores.index') }}" class="nav-link " aria-current="page">
                        <i class="bi bi-mortarboard pe-2"></i> Profesores</a>
                </li>
                @endhasanyrole
                @hasanyrole('administrador|profesor')
                <li class="{{ Request::is('alumnos*') ? 'active' : '' }}">
                    <a href="{{ route('alumnos.index') }}" class="nav-link " aria-current="page">
                        <i class="bi bi-person-vcard pe-2"></i> Alumnos</a>
                </li>
                @endhasanyrole
                <!-- Cierre de Sesion -->
                <li class=""><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bi bi-power pe-2"></i> Cerrar Sesion</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>

            </ul>


        </div>
    </nav>

    <!--Seccion de contenido  -->
    <!--Boton toggler  -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light pl-3">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="bi bi-justify"></i>
                    {{-- <i class="fa fa-bars"></i> --}}

                </button>

            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>



</div>
</div>
