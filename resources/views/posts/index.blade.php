@extends('layouts.sidebar')
@section('content')

<div class="container mt-5">
<table class="table">
    <thead>
        <a href="{{route('posts.create')}}"class='btn btn-warning'> <i class="bi bi-person-add"></i></a>


      <tr>
        <th scope="col">#</th>
        <th scope="col">Noticia</th>
        <th scope="col d-sm-none d-md-table-cell"></th>
        <th scope="col">Estado</th>
        <th scope="col">edicion</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
        <th scope="row" class="text-center d-none d-xl-table-cell"> {{$post->id}}</th>
        <td  class="text-center">{{$post->titulo}}</td>
        <td class="d-none d-xl-table-cell">{{$post->contenido}}</td>

        <td class="w-20 text-center "><span class="badge text-bg-info "> {{$post->isVisible}}</span></td>

        <td  class=" w-50">
            <a href="{{route('posts.edit',$post)}}"class='btn btn-warning'> <i class="bi bi-pen"></i></a>
            <form class= "d-inline" action="{{route('posts.destroy',$post)}}" method="post">
                @csrf
                @method('DELETE')

                <button class="btn btn-danger" type="submit"> <i class="bi bi-trash3-fill"></i>
                </i></button>
            </form>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


<div class="container mt-5">
    <table class="table">
        <thead>
            <h2>Borrados</h2>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Noticia</th>
            <th scope="col d-none d-xl-table-cell ">Contenido</th>
            <th scope="col">edicion</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($postsNot as $post)
            <tr class="text-muted">
            <th scope="row"  class="text-center">{{$post->id}}</th>
            <td  class="text-center">{{$post->titulo}}</td>
            <td class="w-25 d-none d-xl-table-cell">{{$post->contenido}}</td>

            <td  class="w-50 text-center g-5">
                <a href="{{route('posts.edit',$post)}}"class='btn btn-warning'> <i class="bi bi-pen"></i></a>

                <form action="{{route('posts.destroy',$post)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit"> <i class="bi bi-trash3-fill"></i>
                    </i></button>


                </form>

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>


@endsection
<script>

   Swal.fire({
  title: 'Error!',
  text: 'Do you want to continue',
  icon: 'error',
  confirmButtonText: 'Cool'
})

</script>
