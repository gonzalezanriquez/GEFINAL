@extends('layouts.app')
@section('title', 'Editar')
@section('content')

<div class="container centrado mt-5">
    <h1>Editar</h1>
    <form method="post" action={{route('posts.update',$post)}}>
        @csrf
        @method('PUT')
        <div class="mb-3 ">
          <label for="titulo" class="form-label">Titulo </label>
          <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('titulo',$post->titulo)}}">
          <div id="emailHelp" class="form-text">Lorem ipsu loremp ipsu </div>
        </div>
        <div class="mb-3">
          <label for="contenido" class="form-label">Contenido</label>
          <textarea  type="text"  rows="4" cols="20" class="form-control" id="exampleInputEmail2" name="contenido" value="{{old('contenido',$post->contenido)}}">{{old('contenido',$post->contenido)}}</textarea>

        </div>
        <div class="mb-3">
            <label for="image" class="form-label"> file input example</label>
            <input class="form-control" name="image" type="file" id="image" value="{{old('image', $post->image)}}"  />
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
</div>

@endsection
