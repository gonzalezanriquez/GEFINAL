@extends('layouts.sidebar')
@section('title','noticias')

@section('content')

    <div class="row container mt-5">

        <div class=" text-center my-2">
            <h1> {{$post->title}} </h1>
        </div>
                    <div class="card">
                        <img src="{{asset('storage/'. $image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->body}}</p>
                        </div>
                    </div>

    </div>



@endsection
