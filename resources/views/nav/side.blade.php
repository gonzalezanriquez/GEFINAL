<div class="wrapper d-flex align-items-stretch justify-content-between">

    <nav id="sidebar">
        <div class="p-5 pt-5">
            <div class="text-center">
                <img class="mb-5" src="{{ asset('img/gelogob.png') }}" alt="Logo Gestiones Educativas" height="70rem">
            </div>

            <ul class="list-unstyled components mb-5">

                <li class="{{ Request::is('home*') ? 'active' : '' }}">
                    <a href="{{ url('/home') }}" class="nav-link " aria-current="page">
                        <i class="bi bi-browser-safari counter pe-2"></i> Dashboard</a>
                </li>

                <li class="{{ Request::is('posts*') ? 'active' : '' }}">
                    <a href="{{ url('/posts') }}" class="nav-link " aria-current="page">
                        <i class="bi bi-menu-up counter pe-2"></i> Posteos Internos</a>
                </li>
                <li class="{{ Request::is('users*') ? 'active' : '' }}">
                    <a href="{{ url('/users') }}" class="nav-link " aria-current="page">
                        <i class="bi bi-person-bounding-box counter pe-2"></i> Usuarios</a>
                </li>






                <li><a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>
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
                    <i class="bi bi-text-center"></i>
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
