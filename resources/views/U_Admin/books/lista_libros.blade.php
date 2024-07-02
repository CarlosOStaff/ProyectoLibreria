@extends('Layouts.menu_admin')
@section('title')
Proyecto - Libreria -lista de libros
@endsection

@section('content')
<br>
<h3 class="card-title">Libros disponibles</h3>
<br>
<div class="row">
    <br>
    @foreach ($books as $book)
        <div class="col-sm-6">
            <div class="card" style="width:40vw;">
                <div class="card-body">
                    <form action="{{route('admin.editBook', $book->id)}}" method="GET">
                        @csrf
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$book->titulo_libro}}</h5>
                            <p class="card-text">{{$book->descripcion}}</p>
                            <strong><span>Fecha de publicacion: {{$book->fecha_publicacion}}</span></strong>
                            <br>
                            <strong><span>Categoria: {{$book->nombre_categoria}}</span></strong>
                            <br>
                            <br>
                            <button type="submit" class="btn btn-success waves-effect waves-light">
                                <i class="far fa-edit"></i> Editar
                            </button>

                        </div>
                    </form>
                    <form action="{{url('/admin/eliminar/libro', $book->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger waves-effect waves-light">
                            <i class="far fa-trash-alt"></i> Eliminar
                        </button>
                    </form>
                </div>
                <!-- end card -->
            </div>
            <br>
        </div>
    @endforeach
    <!-- end col -->
</div>

@endsection