@extends('layouts.sidebar')
@section('content')
    <div class="container  px-4 py-5 my-5 ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                    <img class="mx-auto d-flex justify-content-center" src="{{asset('/img/roles.png')}}" alt="Imagen Noticias" height="200px">

                        <h1 class="text-center">Asignacion de Roles</h1>
                        <h4  class="text-center">para usuario: {{$user->name}}</h4>

                        <form id="postRol" method="POST" action="{{route('roles.store')}}">
                            @csrf
                            <input class="form-control" type="hidden" name="userId" value="{{$user->id}}">
                            <div class="row mb-3">
                                <label for="roles" class="col-md-4 col-form-label text-md-end">{{ __('Roles') }}</label>
                                <div class="col-md-6">
                                    <select class="form-select" name="roles" id="roles">

                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}">{{$role->role_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @if($errors->any())
                                <h4 class="text-danger fs-6 text-center">{{$errors->first()}}</h4>
                            @endif
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Agregar Rol') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Rol</th>
                                <th style="text-align: end" scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach($userRoles as $userRole)
                                    <tr>
                                        <th scope="row">{{$userRole->id}}</th>
                                        <td>{{$userRole->role_name}}</td>
                                        <td style="text-align: end">
                                            <a class="btn btn-danger" href="{{route('roles.delete', ['userId'=>$user->id, 'roleId'=>$userRole->id])}}">Eliminar</a>
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
