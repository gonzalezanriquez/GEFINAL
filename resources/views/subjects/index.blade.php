<x-layouts.app>
@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.css"/>
@endpush

<section style="background-color: #eee;">
<div class="container" >
    <div class="px-4 py-5 my-5 text-center d-flex justify-content-center align-content-center " >

        <div class="col-md-12">
        {{-- <img class="mx-auto " src="{{asset('/img/news.png')}}"  alt="Image Noticias" height="200px">--}}

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center my-4">
                            <h1>Lista de Materias</h1>
                        </div>

                        <!-- TABLA -->
                        <table id="table" class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Profesores</th>
                                <th style="text-align: end" scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--@foreach($users as $user)
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td style="text-align: end">

                                        <a class="btn btn-danger btn-sm mb-1" href="{{route('users.delete', ['id'=> $user->id])}}">Eliminar</a>
                                        <a class="btn btn-success btn-sm mb-1" href="{{route('users.edit', ['id'=>$user->id])}}">Editar</a>
                                        <a class="btn btn-warning btn-sm mb-1" href="{{route('roles.index', ['id'=>$user->id])}}">Roles</a>

                                    </td>
                                </tr>
                            @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                </div>
    </div>
  </div>
  </div>

  </section>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>

</x-layouts.app>
