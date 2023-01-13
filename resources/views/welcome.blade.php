@extends('layouts.app')
@section('title','GE - Inicio')

@section('content')



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


</div>

@endsection
