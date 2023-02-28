@extends('layouts.sidebar')

@section('content')
<div class="container fuente">
    <div class="row justify-content-center ">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header fontUsuario">{{ __('Dashboard') }}</div>
                <div class="animate__animated  animate__fadeIn pt-3 px-3">
                    @if (session('status'))
                    <div class="nombreUsuario card-body animate__animated  animate__fadeIn">
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <p class="fontUsuario">Te damos la bienvenida,
                            <span class="fw-bold animate__animated  ">{{ Auth::user()->name }} &#128075</span>
                        </p>

                    </div>

                    <!-- TARJETAS -->
                    <div class="container text-center ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-6 col-xl-4">
                                <div class="card bg-c-blue order-card">
                                    <div class="card-block">
                                        <h5 class="m-b-20">ALUMNOS</h5>
                                        <h2 class="text-right"><i class="bi bi-people pe-3"></i><span
                                                class="">125</span></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card bg-c-green order-card">
                                    <div class="card-block">
                                        <h5 class="">NOTICIAS</h5>
                                        <h2 class="text-right"><i
                                                class="bi bi-chat-right-text pe-3"></i><span>325</span>
                                        </h2>
                                        <!-- {{-- <h2 class="text-right"><i class="fa fa-newspaper-o f-left"></i><span>{{$activePosts}}</span></h2> --}} -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card bg-c-yellow order-card">
                                    <div class="card-block">
                                        <div class="datetime">
                                            <div class="h2 time "></div>
                                            <div class="h5 date"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
    </div>
</div>

@endsection
