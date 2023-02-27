<x-layouts.app>
    @push('css')
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.css"/>
    @endpush

    <div class="container">
        <div class="px-4 py-5 my-5 text-center d-flex justify-content-center align-content-center">

            <div class="col-md-12">
                <a class="btn btn-primary me-auto" href="{{route('posts.create')}}">Volver</a>
                    <i class="fa-solid fa-newspaper fa-9x mb-3"></i>
                {{--<img class="mx-auto " src="{{asset('/img/news.png')}}"  alt="Imagen Noticias" height="200px">--}}
                <h1 hidden="true">Lista de Noticias</h1>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mb-3">
                            <h1>Titulo de Noticia</h1>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

        <script src="https://kit.fontawesome.com/48b4b06778.js" crossorigin="anonymous"></script>

</x-layouts.app>
