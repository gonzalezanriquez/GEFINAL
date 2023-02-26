<div class="wrapper d-flex align-items-stretch justify-content-between">

    <nav id="sidebar">
        <div class="p-5 pt-5">
            <div class="text-center">
                <img class="mb-5" src="{{ asset('img/gelogob.png') }}" alt="Logo Gestiones Educativas" height="70rem">
            </div>

            <ul class="list-unstyled components mb-5">

                <li class="{{ Request::is('home*') ? 'active' : '' }}">
                    <a href="{{ url('/home') }}" class="nav-link " aria-current="page">
                        <i class="fa  fa-users f-left counter pe-2"></i> Dashboard</a>
                </li>



                <li class="{{ Request::is('home*') ? 'active' : '' }}"><a href="{{ url('/home') }}">Dashboard</a>
                </li>
                <li class="{{ Request::is('noticias*') ? 'active' : '' }}"><a href="{{ url('/noticias') }}">Noticias
                        Internas</a></li>
                <li class="{{ Request::is('posts*') ? 'active' : '' }}"><a href="{{ url('/posts') }}">Posteos
                        Internos</a></li>

                <li><a href="{{ url('/logout') }}"> Cerrar Sesion </a></li>




                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>dsadas

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
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
                    <i class="fa fa-bars"></i>

                </button>

            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>



</div>
</div>
