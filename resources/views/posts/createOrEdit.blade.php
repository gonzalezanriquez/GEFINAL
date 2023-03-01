@extends('layouts.sidebar')
@if(!isset($post))
@section('title', 'Crear Noticia')
@else
@section('title', 'Editar Noticia')
@endif
@section('content')

    <div class="container centrado mt-5">
        <form method="post" action=@if(isset($post)) {{route('posts.update',$post)}} @else {{ route('posts.store') }} @endif>
            @csrf
            <div class="mb-3 ">
                <label for="title" class="form-label">Titulo </label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value="{{ old('title') ?? isset($post) ? $post->title : '' }}">
                <div id="emailHelp" class="form-text">Lorem ipsu loremp ipsu</div>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Contenido</label>
                <textarea name="body" id="exampleInputEmail2" cols="60" rows="10">{{ old('body') ?? isset($post) ? $post->body : ''  }}</textarea>

            </div>
            <div class="mb-3">
                <label for="image" class="form-label"> file input example</label>
                <input class="form-control" name="image" type="file" id="image" value="{{ old('image') }}"  />
            </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

@endsection
