@extends('layouts.nonav')
@section('title', 'Login')



@section('content')

    <section class="h-100 pt-5">
        <div class="container pt-5">
            <div class="row d-flex justify-content-center align-content-center">
                <div class="col-lg-9 ">
                    <div class="card rounded-3 text-black mt-5">
                        <div class="row g-0">
                            <div class="col-md-6 ">
                                <div class="card-body ">


                  <div class="text-center mt-5">
                    <img src="{{asset('img/gelogo.png')}}"
                      style="width: 10rem;" alt="logo">

                </div>


                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <p class="text-center">Ingrese con su cuenta autorizada</p>

                                        <div class="form-outline mb-4">
                                            <label class="form-label @error('username') is-invalid @enderror" for="form2Example11">Usuario</label>
                                            <input type="username" id="username" class="form-control focusedInput"
                                                   placeholder="Ingrese su usuario autorizado" required autocomplete="username" autofocus="autofocus"  name="username" value="{{ old('username') }}"/>
                                        </div>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                        @enderror



                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Contraseña</label>
                                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Ingrese su contraseña"  autofocus="autofocus" name="password" required autocomplete="current-password"/>
                                        </div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                        @enderror


                                        <div class="text-center d-grid gap-2">
                                            <button class="btn btn-warning btn-block  mb-3" type="submit">Iniciar Sesion</button>

                                        </div>



                                    </form>

                                </div>
                            </div>

                            <div class="col-md-6 d-none d-md-block">
                                <img src="https://images.unsplash.com/photo-1526512340740-9217d0159da9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700&q=80"
                                     alt="login" class="img-fluid" />
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


@endsection



