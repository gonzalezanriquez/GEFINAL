@extends('layouts.sidebar')

@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class=" text-center my-2">
                        <img  class="" src="{{asset('/img/crearUsuario.png')}}" alt="Lista Usuarios" height="">
                        <h1>Lista de Usuarios</h1>
                        <a class="btn btn-dark  mb-3" href="{{route('users.create')}}">
                        <i class="bi bi-person-add"></i>
                            Crear Nuevo Usuario
                        </a>
                    </div>
                    @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('message') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
                    @endif

                    <!-- TABLA -->
                    <table id="table" class="table">
                        <thead>
                            <tr class="text-center   ">
                                <th class=" d-none d-xl-table-cell" scope="col ">Id</th>
                                <th scope="col">Nombre</th>
                                <th class=" d-none d-xl-table-cell" scope="col">Email</th>
                                 <th class=" d-none d-xl-table-cell" scope="col">Rol</th>
                                <th style="text-align: end" scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($users as $user)
                            <tr>
                                <th class=" d-none d-xl-table-cell text-center d-flex align-item-center" scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td class=" d-none d-xl-table-cell">{{$user->email}}</td>
                                <td class=" d-none d-xl-table-cell text-center">

 @if(!empty($user))
                                    <span class="badge bg-secondary">  {{ $user->getRoleNames() }}   </span>
                                    @else
                                    <span class="badge bg-danger">Sin Asignar</span>
                                    @endif
                                  
                                </td>


                                
                                <td class="d-flex justify-content-end">
                                    <!-- EDITAR -->
                                    <a class="btn btn-success btn-sm mb-1" href="{{route('users.edit', ['id'=>$post->id])}}">
                                        <i class=" bi bi-pencil "></i></a>
                                    <!-- ASIGNAR ROLES -->
                                    <a class="btn btn-warning btn-sm mb-1" href="{{route('roles.index', ['id'=>$user->id])}}">>
                                        <i class=" bi bi-person-vcard "></i></a>
                                    <!-- DELETE -->
                                    <form method="POST" action="{{route('posts.delete', ['id'=> $user->id])}}">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-danger btn-sm mb-1">
                                            <i class=" bi bi-trash "></i></button>
                                    </form>



                                </td>
                               
                              
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $users->links() !!}
                </div>
            </div>
        </div>
    </div>





@endsection
