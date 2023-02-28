@extends('layouts.app')
@section('title', 'GE - Inicio')

@section('content')

    <div class="headerwelcome ">
        <div class="container-fluid bgheader py-5">
            <div class="container ">
                <div class="row mx-md-5 align-items-center text -xs-center  ">
                    <div class="col-12 col-lg-6 px-lg-3 pt-lg-4">
                        <h1 class="titulo animate__animated animate__fadeInDown">Soluciones integrales para tus <span class="highlight ::after">gestiones escolares
                            </span> </span></h1>
                        <p class="bajadaTitulo mt-5 animate__animated animate__fadeIn">Te ayudamos a sistematizar todas tus labores administrativas escolares
                            brindando una respuesta rapida y sencilla a docentes, alumnos y personal escolar. </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <img class="img-fluid animate__animated animate__fadeInRight" src="/img/app2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- HERRAMIENTS -->
    <div class="container text-center py-5 ">
        <div class="row gy-4 justify-content-center d-flex align-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class=" h-100 bg-white rounded shadow-sm   animate__animated animate__fadeInLeft">
                    <img src="{{ asset('img/1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body py-5 px-4">
                        <h5 class="card-title fw-bold">EFICAZ</h5>
                        <p class="card-text">Creemos en una solución eficaz e integral, que logre abordar tanto las necesidades del alumno, del docente así como también y la dirección académica todo en un mismo espacio
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="h-100 bg-white rounded shadow-sm  animate__animated animate__fadeInUp">
                    <img src="{{ asset('img/2.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body py-5 px-4" >
                        <h5 class="card-title fw-bold">VIRTUAL</h5>
                        <p class="card-text ">Digitalizar los procesos administrativos escolares. Establecer un punto de comunicación digital Alumno - Institución - docente. Brindar información académica general.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="h-100  bg-white rounded shadow-sm  animate__animated animate__fadeInRight">
                    <img src="{{ asset('img/3.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body py-5 px-4 ">
                        <h5 class="card-title fw-bold">ADAPTABLE</h5>
                        <p class="card-text">Armado de estructuras inteligentes y dinamicas para una organización clara y eficiente.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- cards -->
<div class="quote">
    <div class="container py-5">
            <div class="">
          <blockquote class=" px-5 mx-lg-5">
            <p>"La tecnología nos brinda herramientas para enfatizar el enfoque en el verdadero proceso que se encuentra en las aulas y en el aprendizaje. Que la burocracia no debe ser un obstáculo y tenemos que usar todas las herramientas necesarias para ello." </p>
          </blockquote>
        </div>
                <div class="quoteAutor">Fernando Gaitan- Director de Proyectos Web - Davinci</div>

        </div>
  </div>


    <!-- submit -->
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
                            <input type="submit" name="submit" value="Enviar" class="boton btn btn-warning">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
