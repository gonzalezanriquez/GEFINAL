@extends('layouts.sidebar')
@section('title','noticias')

@section('content')

    <div class="container mt-5">



        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($posts as $post )
                <div class="col">
                    <div class="card">
                        <img src="{{asset('img/gelogo.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->contenido}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>

@endsection
