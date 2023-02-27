@extends('layouts.sidebar')

@section('content')
    <section class="vh-100 mt-5" style="background-color: #eee;">
        <div class="container px-5 py-5 my-5 ">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">@if(isset($user)) {{ __('Editar Usuario') }} @else {{ __('Crear Usuario') }}@endif</p>

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
                                    <form class="mx-1 mx-md-4" method="POST" action="@if (isset($user))  {{ route('users.update') }} @else {{ route('register') }} @endif">
                                        @csrf


                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="name">{{ __('Nombre') }}</label>
                                                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                                <input type="text" id="username" name='username' class="form-control @error('username') is-invalid @enderror" name="email" value="{{ old('username') }}" required autocomplete="email">

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
                                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                                <button type="submit" class="btn btn-primary">
                                                    @if (isset($user)) {{ __('Guardar cambios') }} @else {{ __('Crear') }}@endif
                                                </button>
                                                @if (isset($user))
                                                <a class="btn btn-primary " href="{{route('users.index')}}">
                                                    {{ __('Volver') }}
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
