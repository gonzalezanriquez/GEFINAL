@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="px-4 ">

        <div class="col-md-12">
            {{-- <img class="mx-auto" src="{{asset('/img/news.png')}}" alt="Image Noticias" height="200px">--}}

            <div class="card">
                <div class="card-body">
                    <div class=" text-center   my-2">
                        <h1>Lista de Docentes</h1>
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
                                <th style="text-align: end" scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th class=" d-none d-xl-table-cell text-center   " scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td class=" d-none d-xl-table-cell">{{$user->email}}</td>
                                <td class="text-end">
                                    <!-- MOSTRAR PERFIL -->
                                    <a class="btn btn-warning btn-sm mb-1" href="{{route('profesores.show', $user->id)}}">
                                        <i class=" bi bi-person-vcard "></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>





@endsection
