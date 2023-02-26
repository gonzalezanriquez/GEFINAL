@extends('layouts.app')
    @push('css')
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.css"/>
    @endpush

    <div class="container">
        <div class="px-4 py-5 my-5 text-center d-flex justify-content-center align-content-center">

            <div class="col-md-12">
                <h1 hidden="true">Lista de Noticias</h1>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mb-3">
                            <h1>Controllers</h1>
                        </div>

                        <table id="table" class="table">
                            <thead>
                            <tr>
                                <th scope="col">UserController</th>
                                <th scope="col">RoleController</th>
                                <th scope="col">PostController</th>
                                <th scope="col">ImageController</th>
                                <th scope="col">PostUserController</th>
                                <th scope="col">SubjectController</th>
                                <th scope="col">ClassroomsController</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Index</td>
                                    <td>Index</td>
                                    <td>Index</td>
                                    <td></td>
                                    <td>Index</td>
                                    <td>Index</td>
                                    <td>Index</td>
                                </tr>
                                <tr>
                                    <td>Create</td>
                                    <td></td>
                                    <td>Create</td>
                                    <td></td>
                                    <td></td>
                                    <td>Create</td>
                                    <td>Create</td>
                                </tr>
                                <tr>
                                    <td>Show</td>
                                    <td></td>
                                    <td>Show</td>
                                    <td></td>
                                    <td>Show</td>
                                    <td>Show</td>
                                    <td>Show</td>
                                </tr>
                                <tr>
                                    <td>Store</td>
                                    <td></td>
                                    <td>Store</td>
                                    <td></td>
                                    <td></td>
                                    <td>Store</td>
                                    <td>Store</td>
                                </tr>
                                <tr>
                                    <td>Update</td>
                                    <td></td>
                                    <td>Update</td>
                                    <td>Update</td>
                                    <td></td>
                                    <td>Update</td>
                                    <td>Update</td>
                                </tr>
                                <tr>
                                    <td>Destroy</td>
                                    <td></td>
                                    <td>Destroy</td>
                                    <td></td>
                                    <td></td>
                                    <td>Destroy</td>
                                    <td>Destroy</td>
                                </tr>
                                <tr>
                                    <td>Edit</td>
                                    <td></td>
                                    <td>Edit</td>
                                    <td></td>
                                    <td></td>
                                    <td>Edit</td>
                                    <td>Edit</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center mb-3">
                            <h1>Views</h1>
                        </div>

                        <table id="table2" class="table">
                            <thead>
                            <tr>
                                <th scope="col">Welcome</th>
                                <th scope="col">Dashboard</th>
                                <th scope="col">Users</th>
                                <th scope="col">Roles</th>
                                <th scope="col">Posts</th>
                                <th scope="col">PostUsers</th>
                                <th scope="col">Subjects</th>
                                <th scope="col">Classrooms</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>welcome (Only Guests)</td>
                                <td>dashboard</td>
                                <td>createOrUpdate</td>
                                <td>createOrUpdate</td>
                                <td>createOrUpdate</td>
                                <td>index</td>
                                <td>createOrUpdate</td>
                                <td>createOrUpdate</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>index</td>
                                <td>index</td>
                                <td>index</td>
                                <td></td>
                                <td>index</td>
                                <td>index</td>

                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>show</td>
                                <td>show</td>
                                <td>show</td>
                                <td></td>
                                <td>show</td>
                                <td>show</td>
                            </tr>
                            </tbody>
                        </table>
                       <div class="flex">
                           <p>
                               ----- Home ------
                               Sacar Registro de pagina
                               Admin tiene Alumnos Noticias Y Docentes
                               Horario en home
                               Limitar home de venta admin solo
                           </p>
                           <p>
                               ----- Usuarios -----
                               usuario limitado a la home de venta
                               expandirrrr
                           </p>
                           <p>
                               ---- Noticias Externas ----
                               Para todos
                           </p>
                           <p>
                               ---- Noticias Externas ----
                               Para todos
                           </p>
                           <p>
                               ---- Noticias Internas ----
                               Solo para usuarios y admin
                           </p>

                           <p>
                               --- Relación Año ---
                               Año -> alumnos -> materia -> docente
                               CRUD
                           </p>
                           <p>
                               --- Materias ---
                               CRUD
                           </p>

                           <p>
                               --- Alumnos ---
                               CRUD
                           </p>
                       </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


