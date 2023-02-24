@extends('layouts.app')
@section('title', 'GE - Inicio')

@section('content')

<div class="headerwelcome ">
  <div class="container-fluid bgheader py-5">

    <div class="container ">
      <div class="row mx-md-5 align-items-center text -xs-center  ">
        <div class="col-12 col-lg-6 px-lg-3 pt-lg-4">


          <h1 class="titulo">Soluciones integrales para tus <span class="highlight ::after">gestiones escolares </span> </span></h1>

          <p class="bajadaTitulo mt-5">Te ayudamos a sistematizar todas tus labores administrativas escolares brindando una respuesta rapida y sencilla a docentes, alumnos y personal escolar. </p>

    

      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center justify-content-md-start mt-4">
        <button type="button" class="boton btn btn-lg px-4 gap-3">Iniciar Sesion</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Contactanos</button>
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

{{--
<div class="container vh-100">
<div class="px-4 py-5 my-5 text-center vh-100">
    <img class="d-block mx-auto mb-4 mt-5 pt-5 img-fluid" src="/img/app2.png" alt="" >
    <h1 class="display-5 fw-bold">Centered hero</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
      </div>
    </div>
  </div>

</div> --}}
{{--

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
</div>
</div>


</div> --}}

@endsection