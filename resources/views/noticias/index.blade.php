@extends('layouts.sidebar')
@section('title','noticias')

@section('content')

    <div class="container mt-5">

        <div class=" text-center my-2">
            <h1> Noticias </h1>
        </div>

        <div class="row row-cols-md-2 row-cols-md-3 g-4">
            @foreach ($posts as $post )
                <div class="col">
                    <div class="card">
                        <img src="{{asset('img/gelogo.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->excerpt}}</p>
                            <a href="/posts/{{$post->slug}}">
                                Leer más
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
{!! $posts->links() !!}

    </div>

@endsection
