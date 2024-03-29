@extends('layouts.sidebar')

@section('content')
<section class="">
    <div class="container px-5 animate__animated animate__zoomIn ">
        <div class="row d-flex justify-content-center align-items">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">@if (isset($user)) {{ __('Editar Usuario')  }} @else {{ __('Crear Usuario') }}@endif</p>

                                <!--muestra errores de validacion de backend-->
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                {{--Aca empieza el fooorm--}}
                                @if(isset($user))
                                <form class="mx-1 mx-md-4" method="POST" action=" {{ route('users.update', $user->id)}}">
                                    @csrf
                                    @method('PATCH')
                                    @else
                                    <form class="mx-1 mx-md-4" method="POST" action=" {{ route('users.store') }}">
                                        @csrf
                                        @endif

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="name">{{ __('Nombre') }}</label>
                                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? isset($user) ? $user->name:null }}" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="username">{{ __('Username') }}</label>
                                            <input type="text" id="username" name='username' class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') ?? isset($user) ? $user->username:null }}" required autocomplete="username">

                                            @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="email">{{ __('Email') }}</label>
                                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? isset($user) ? $user->email:null }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="password">{{ __('Contraseña') }}</label>
                                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="d-flex flex-row align-items-center mb-4">

                                        <div class="form-outline flex-fill mb-0">
                                            <label class="password-confirm" for="password">{{ __('Confirmar Contraseña') }}</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                        </div>
                                    </div>


                                    <div class="row ">
                                        <div class="col">
                                            @if (isset($user))
                                            <button type="submit" class="btn btn-primary">
                                                 {{ __('Guardar cambios') }}
                                            </button>
                                            @else
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Crear') }}
                                                </button>
                                            @endif
                                            <div class="row mb-0">
                                                <div class="col-12 text-center">
                                                    <a class="btn btn-secondary" href="{{route('users.index')}}"><i class="bi bi-arrow-left-square"></i> </a>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 justify-content-center order-1 order-lg-2 text-ce">
                                <img src="{{asset('img/register.png')}}" class="img-fluid text-" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
