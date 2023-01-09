@extends('layouts.appSinBarras')
@section('title', 'Login')

@section('content')
@include('nav.loginNav')

<section class="h-100 pt-5">
    <div class="container pt-5">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-9 d-sm-9 d-block">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-md-6 ">
                <div class="card-body ">

                  <div class="text-center mt-5">
                    <img src="{{asset('img/gelogo.png')}}"
                      style="width: 10rem;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">Gestiones Educativas</h4>
                </div>

                <form>
                      <p class="text-center">Ingrese con su cuenta autorizada</p>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example11">Email</label>
                      <input type="email" id="form2Example11" class="form-control focusedInput"
                        placeholder="Ingrese su email autorizado"  autofocus="autofocus" />
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example22">Password</label>
                        <input type="password" id="form2Example22" class="form-control" placeholder="Ingrese su contraseña"  autofocus="autofocus"/>
                    </div>

                    <div class="text-center d-grid gap-2">
                      <button class="btn btn-warning btn-block  mb-3" type="button">Iniciar Sesion</button>

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

{{--


<section class="h-100" >
    @include('nav.loginNav')
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">

        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="https://images.unsplash.com/photo-1526512340740-9217d0159da9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700&q=80"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center ">
                <div class="card-body p-5 p-md-5 text-black">

                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <p>Inicia sesion con tu cuenta autorizada</p>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example11">{{ __('Usuario') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example22">{{ __('Contraseña') }}</label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="text-end">
                                <button class="btn btn-warning float-right" type="submit">{{ __('Login') }}</button>
                            </div>
                        </div>
                    </form>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

@endsection



