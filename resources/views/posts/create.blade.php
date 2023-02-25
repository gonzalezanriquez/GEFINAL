@extends('layouts.app')
@section('title', 'Crear')
@section('content')

    <div class="container centrado mt-5">
        <form method="post" action={{ route('posts.store') }}>
            @csrf
            <div class="mb-3 ">
                <label for="titulo" class="form-label">Titulo </label>
                <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value="{{ old('titulo') }}">
                <div id="emailHelp" class="form-text">Lorem ipsu loremp ipsu

                </div>
            </div>
            <div class="mb-3">
                <label for="contenido" class="form-label">Contenido</label>
                <input type="text" class="form-control" id="exampleInputEmail2" name="contenido"
                    value="{{ old('contenido') }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label"> file input example</label>
                <input class="form-control" name="image" type="file" id="image" value="{{ old('contenido') }}"  />
            </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

@endsection
