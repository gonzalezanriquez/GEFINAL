@extends('layouts.sidebar')
@if(!isset($post))
@section('title', 'Crear Noticia')
@else
@section('title', 'Editar Noticia')
@endif
@section('content')

    <div class="row container  mt-5">
        @if(isset($post))
            <form class="mx-1 mx-md-4" method="POST" action=" {{ route('posts.update', $post->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
        @else
            <form class="mx-1 mx-md-4" method="POST" action=" {{ route('posts.store') }}" enctype="multipart/form-data">
                @csrf
        @endif
            <div class="mb-3 w-75">
                <label for="title" class="form-label">Titulo </label>
                <input type="text" name="title" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp"
                    value="{{ old('title') ?? (isset($post) ? $post->title : '') }}">

            </div>


            <div class="mb-3 w-75">
                <label for="body" class="form-label">Contenido</label>
                <textarea class="form-control" name="body" id="exampleInputEmail2" cols="60" rows="10">
                    {{ old('body') ?? (isset($post) ? $post->body : '')  }}</textarea>

            </div>
            <div class="mb-3 w-75">
                <label for="image" class="form-label">Imágen</label>
                <input class="form-control" name="image" type="file" id="image"/>
            </div>
                <div class="py-3">
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" name="internal" type="checkbox" id="flexSwitchCheckDefault" checked>
                    <label class="form-check-label" for="flexSwitchCheckDefault">Visibilidad Interna</label>
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" name="external" type="checkbox" id="flexSwitchCheckChecked">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Visibilidad Externa</label>
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

@endsection
