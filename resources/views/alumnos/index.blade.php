@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="px-4 ">

        <div class="col-md-12">
            {{-- <img class="mx-auto" src="{{asset('/img/news.png')}}" alt="Image Noticias" height="200px">--}}

            <div class="card">
                <div class="card-body">
                    <div class=" text-center   my-2">
                        <h1>Lista de Alumnos</h1>
                    </div>
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
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
                                <th class=" d-none d-xl-table-cell text-center   " scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td class=" d-none d-xl-table-cell">{{$user->email}}</td>
                                <td class=" d-none d-xl-table-cell">
                                    @if(!$user->roles->isEmpty())
                                        {{$user->roles->pluck('role_name')}}
                                    @else
                                    No hay roles asignados
                                    @endif
                                </td>


                                <td class="text-end">
                                    <!-- EDITAR -->
                                    <a class="btn btn-success btn-sm mb-1" href="{{route('users.edit', ['id'=>$user->id])}}">
                                        <i class=" bi bi-pencil "></i></a>
                                    <!-- ASIGNAR ROLES -->
                                    <a class="btn btn-warning btn-sm mb-1" href="{{route('roles.index', ['id'=>$user->id])}}">
                                        <i class=" bi bi-person-vcard "></i></a>
                                    <!-- DELETE -->
                                    <a class="btn btn-danger btn-sm mb-1" href="{{route('users.delete', ['id'=> $user->id])}}">
                                        <i class=" bi bi-trash "></i></a>

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
</div>





@endsection
