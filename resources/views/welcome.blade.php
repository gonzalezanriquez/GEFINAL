@extends('layouts.app')
@section('title','GE - Inicio')

@section('content')



<<<<<<< Updated upstream
<div class=" container  vh-100"  >

    <div class="container mt-5 pt-5 my-5" id="centrado">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
          <div class="col-sm-7">
            <h1 class="display-4 fw-bold lh-1">Gestiones Educativas</h1>
            <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae nesciunt ullam minus suscipit sit quia quos! Consequatur perferendis quia sapiente cum, quos vero illum, vitae voluptates labore nam saepe quaerat?</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start ">
              <button type="button" class="btn btn-warning">Inicia Sesion</button>
              <button type="button" class="btn btn-outline-secondary px-4">Contactate</button>
=======
    <div class=" container  vh-100"  >

        <div class="container mt-5 pt-5 my-5" id="centrado">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-sm-7">
                    <h1 class="display-4 fw-bold lh-1">Gestiones Educativas</h1>
                    <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae nesciunt ullam minus suscipit sit quia quos! Consequatur perferendis quia sapiente cum, quos vero illum, vitae voluptates labore nam saepe quaerat?</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start ">
                        <button type="button" class="btn btn-warning">Inicia Sesion</button>
                        <button type="button" class="btn btn-outline-secondary px-4">Contactate</button>
                    </div>
                </div>
                <div class="col-sm-5  ">
                    <img class="rounded-lg-3 img-fluid" src="{{asset('img/mac.png')}}" alt="" >
                </div>
>>>>>>> Stashed changes
            </div>
          </div>
          <div class="col-sm-5  ">
             <img class="rounded-lg-3 img-fluid" src="{{asset('img/mac.png')}}" alt="" >
          </div>
        </div>
<<<<<<< Updated upstream
      </div>


</div>
=======


    </div>

    {{-- formulario de contacto --}}
    <section class="pt-5  contactForm">
        <div class="col-sm-7 col-lg-5 mx-auto">
            <div class="container">
                <h2 class="text-center fw-bold pb-4">CONTACTATE CON NOSOTROS</h2>
                <div class="row justify-content-center">
                    <form action="{{--{{ route('contact_us') }}--}}" method="post" class="border p-5 rounded-2">
                        @csrf
                        @if (session('message'))
                            <div class="alert alert-success text-center">
                                {{ session('message') }}
                            </div>
                        @endif
                        <!-- name -->
                        <div class="mb-3">
                            <label class="form-label" for="name">Nombre y Apellido</label>
                            <input type="text" name="name" placeholder="Ingrese su nombre y apellido" value="{{ old('name') }}"
                                   class="form-control">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- email -->
                        <div class="mb-3">
                            <label class="form-label" for="email">E-mail</label>
                            <input type="text" value="{{ old('email') }}" name="email" placeholder="Ingrese su e-mail"
                                   class="form-control">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- subject -->
                        <div class="mb-3">
                            <label class="form-label" for="subject">Asunto</label>
                            <input type="text" value="{{ old('subject') }}" name="subject" placeholder="Ingrese su asunto"
                                   class="form-control">
                            @error('subject')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- message -->
                        <div class="mb-3">
                            <label class="form-label" for="message">Mensaje</label>
                            <textarea class="form-control" value="{{ old('message') }}" name="message" placeholder="Ingrese su mensaje"></textarea>
                            @error('message')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- submit -->
                        <div class="text-center">
                            <input type="submit" name="submit" value="Enviar" class="boton btn ">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
>>>>>>> Stashed changes

@endsection

