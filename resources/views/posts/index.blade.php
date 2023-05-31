@extends('layouts.sidebar')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class=" text-center my-2">
                        <img  class="" src="{{asset('/img/crearUsuario.png')}}" alt="Lista Usuarios" height="">
                        <h1>Lista de Posteos </h1>
                        <a class="btn btn-dark  mb-3" href="{{route('posts.create')}}">
                            <i class="bi bi-person-add"></i>
                            Crear Nueva Noticia
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
                            <th scope="col">Titulo</th>
                            <th class=" d-none d-xl-table-cell" scope="col">Contenido</th>

                            <th style="text-align: end" scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($posts as $post)
                            <tr>
                                <th class=" d-none d-xl-table-cell text-center d-flex align-item-center" scope="row">{{$post->id}}</th>
                                <td>{{$post->title}}</td>
                                <td class=" d-none d-xl-table-cell">{{$post->excerpt}}</td>




                                <td class="d-flex justify-content-end">
                                    <!-- EDITAR -->
                                    <a class="btn btn-success  me-2" href="{{route('posts.edit', ['id'=>$post->id])}}">
                                        <i class=" bi bi-pencil "></i></a>
                                    <!-- DELETE -->
                                    <form method="POST" action="{{route('posts.delete', ['id'=> $post->id])}}">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-danger  me-2">
                                            <i class=" bi bi-trash "></i></button>
                                    </form>



                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $posts->links() !!}
                </div>
            </div>
        </div>
    </div>





@endsection
