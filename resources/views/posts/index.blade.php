@extends('layouts.sidebar')

@section('content')
    <div class="row justify-content-center animate__animated animate__zoomIn">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class=" text-center my-2">
                        <img  class="" src="{{asset('/img/crearUsuario.png')}}" alt="Lista Usuarios" height="">
                        <h1>Lista de Noticias</h1>
                        <a class="btn btn-dark  mb-3" href="{{route('posts.create')}}">
                            <i class="bi bi-person-add"></i>
                            Crear Nueva Noticia
                        </a>
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
                            <th scope="col">Titulo</th>
                            <th class=" d-none d-xl-table-cell" scope="col">Contenido</th>
                            <th class=" d-none d-xl-table-cell" scope="col">Visibilidad</th>
                            <th style="text-align: end" scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($posts as $post)
                            <tr>
                                <th class=" d-none d-xl-table-cell text-center d-flex align-item-center" scope="row">{{$post->id}}</th>
                                <td>{{$post->title}}</td>
                                <td class=" d-none d-xl-table-cell">{{$post->excerpt}}</td>
                                <td class=" d-none d-xl-table-cell text-center">
                                  {{--  @if(!$post->roles->isEmpty())
                                        <span class="badge bg-info"> {{$post->roles->pluck('role_name')}} </span>
                                    @else--}}
                                        <span class="badge bg-danger">Sin Asignar</span>
                                    {{--@endif--}}
                                </td>



                                <td class="text-end">
                                    <!-- EDITAR -->
                                    <a class="btn btn-success btn-sm mb-1" href="{{route('posts.edit', ['id'=>$post->id])}}">
                                        <i class=" bi bi-pencil "></i></a>
                                    <!-- ASIGNAR ROLES -->
                                    <a class="btn btn-warning btn-sm mb-1" href="{{--{{route('posts.index', ['id'=>$post->id])}}--}}">
                                        <i class=" bi bi-person-vcard "></i></a>
                                    <!-- DELETE -->
                                    <form method="POST" action="{{route('posts.delete', ['id'=> $post->id])}}">
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
                    {{--{!! $post->links() !!}--}}
                </div>
            </div>
        </div>
    </div>





@endsection
