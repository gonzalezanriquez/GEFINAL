@extends('layouts.app')
@section('title', 'Crear')
@section('content')

    <div class="container centrado mt-5">
        <form method="post" action=@if(isset($post)) {{route('posts.update',$post)}} @else {{ route('posts.store') }} @endif>
            @csrf
            <div class="mb-3 ">
                <label for="title" class="form-label">Titulo </label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value="{{ old('title') }}">
                <div id="emailHelp" class="form-text">Lorem ipsu loremp ipsu</div>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Contenido</label>
                <input type="text" class="form-control" id="exampleInputEmail2" name="body"
                    value="{{ old('body') }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label"> file input example</label>
                <input class="form-control" name="image" type="file" id="image" value="{{ old('image') }}"  />
            </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

@endsection
