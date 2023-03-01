@extends('layouts.sidebar')

@section('content')

    <div class="row justify-content-center ">
        <div class="col-md-9">

    <div class="main-body">
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://cdn.kastatic.org/images/avatars/svg/piceratops-seedling.svg" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h2>{{ Auth::user()->name }}  </h2>
                      <p class="text-secondary mb-1">Te damos la bienvenida.Aqui podras encontrar las funcionalidades disponibles</p>

                    </div>
                  </div>
                </div>
              </div>


              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <p class="mb-0"><i class="bi bi-person-add pe-2 h3"></i> Usuarios</p>
                    <span class="badge bg-danger "> {{ Auth::user()->count() }}  </span>                    
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <p class="mb-0"><i class="bi bi-person-vcard pe-2 h3"></i> Alumnos</p>
                    <span class="badge bg-secondary "> {{ $alumnos }}  </span>                    
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <p class="mb-0"><i class="bi bi-mortarboard pe-2 h3"></i> Profesores</p>
                    <span class="badge bg-warning ">  {{ $profesores}}  </span>                    
                  </li>
                </ul>
              </div>

            </div>
            
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nombre</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        
                    <span class="badge bg-info"> {{ Auth::user()->name }}  </span>
                   
                                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"> Usuario</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <span class="badge bg-warning"> {{ Auth::user()->username }}  </span>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <span class="badge bg-danger">  {{ Auth::user()->email }}   </span>

                   
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Rol</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <span class="badge bg-secondary">  {{ Auth::user()->roles->implode('name',' - ') }}   </span></div>
                  </div>
                
                
                </div>



                
              </div>


              

              <div class="row gutters-sm justify-content-center">
              
                <div class="d-flex justify-content-center">
                   
                    <a href="{{ route('users.index') }}" class="btn btn-warning me-2">GESTIONAR USUARIOS</a>
                    <a href="{{ route('posts.index') }}" class="btn btn-info me-2">GESTIONAR POSTS</a>
                   
                </div>              

                
              </div>



          </div>

        </div>
    </div>












@endsection
