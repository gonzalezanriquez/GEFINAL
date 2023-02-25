@extends('layouts.app')
@section('title', 'GE - Inicio')

@section('content')

    <div class="headerwelcome ">
        <div class="container-fluid bgheader py-5">

            <div class="container ">
                <div class="row mx-md-5 align-items-center text -xs-center  ">
                    <div class="col-12 col-lg-6 px-lg-3 pt-lg-4">


                        <h1 class="titulo">Soluciones integrales para tus <span class="highlight ::after">gestiones escolares
                            </span> </span></h1>

                        <p class="bajadaTitulo mt-5">Te ayudamos a sistematizar todas tus labores administrativas escolares
                            brindando una respuesta rapida y sencilla a docentes, alumnos y personal escolar. </p>



                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center justify-content-md-start mt-4">
                            <button type="button" class="boton btn btn-lg px-4 gap-3 "><a
                                    class="text-decoration-none"href="{{ route('login') }}" style="color:inherit"> Iniciar
                                    Sesion</a></button>

                            <button type="button" class="btn btn-outline-secondary btn-lg px-4"><a
                                    class="text-decoration-none" href="" style="color:inherit">
                                    Contactanos</a></button>

                        </div>

                    </div>
                    <div class="col-12 col-md-6">
                        <img class="img-fluid" src="/img/app2.png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    {{-- cards --}}







    {{-- formulario de contacto --}}
<section class="pt-5  contactForm">
    <div class="col-sm-7 col-lg-5 mx-auto">
        <div class="container">
            <h2 class="text-center fw-bold pb-4">CONTACTATE CON NOSOTROS</h2>
            <div class="row justify-content-center">
                <form action="{{ route('contact_us') }}" method="post" class="border p-5 rounded-2">
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

@endsection
