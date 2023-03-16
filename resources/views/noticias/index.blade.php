@extends('layouts.sidebar')
@section('title','noticias')

@section('content')

    <div class="container mt-5">

        <div class=" text-center my-2">
            <h1> Noticias </h1>
        </div>

        <div class="row row-cols-md-2 row-cols-md-3 g-4">

            @if($mode === 'Internas')
                @foreach ($posts as $post )
                    @if($post->internal === 1)
                <div class="col">
                    <div class="card">
                        @foreach($images as $image)

                            @if($image->post_id === $post->id)
                                <img src="{{ asset('storage/'. $image->image) }}" class="card-img-top" alt="...">
                            @endif

                        @endforeach
                        <div class="card-body">
                            <h5 class="card-title text-center">{{$post->title}}</h5>
                            <p class="card-text">{{$post->excerpt}}</p>
                                <a href="{{route('noticias.show', $post->id)}}">
                                    Leer más
                                </a>
                            </div>
                        </div>
                </div>
                    @endif
                @endforeach
            @endif
                @if($mode === 'Externas')
                    @foreach ($posts as $post )
                        @if($post->external === 1)
                        <div class="col">
                            <div class="card">
                                @foreach($images as $image)

                                    @if($image->post_id === $post->id)
                                        <img src="{{ asset('storage/'. $image->image) }}" class="card-img-top" alt="...">
                                    @endif

                                @endforeach
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{$post->title}}</h5>
                                    <p class="card-text">{{$post->excerpt}}</p>
                                    <a href="{{route('noticias.show', $post->id)}}">
                                        Leer más
                                    </a>
                                </div>
                            </div>
                        </div>
                       @endif
                   @endforeach
                @endif
        </div>
{!! $posts->links() !!}

        </div>

@endsection
