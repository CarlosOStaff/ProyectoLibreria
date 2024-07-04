@extends('Layouts.menu_admin')
@section('title')
Proyecto - Libreria -lista de libros
@endsection

@section('content')
<div class="container">
    <h2 class="card-title text-center mt-3 fst-italic">Libros disponibles</h2>

    <div class="row mx-auto mt-4 justify-content-center align-items-center d-flex">
        @foreach ($books as $book)
            <div class="col-lg-6">
                <div class="col-xl-12 shadow-lg p-4 mb-5 mx-2 mh-50 mw-100">
                    <div class="card-body m-3">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title fst-italic">{{$book->titulo_libro}}</h5>
                            <p class="card-text">{{$book->descripcion}}</p>
                            <strong><span class="fst-italic">Fecha de publicacion: {{$book->fecha_publicacion}}</span></strong>
                            <strong><span class="fst-italic">Categoria: {{$book->nombre_categoria}}</span></strong>
                            <div class="d-flex">
                                <form action="{{route('admin.editBook', $book->id)}}" method="GET" class="mt-3 mx-2">
                                    <button type="submit" class="fw-bold fst-italic btn btn-success waves-effect waves-light">
                                        <i class="far fa-edit"></i> Editar
                                    </button>
                                </form>
                                <form action="{{url('/admin/eliminar/libro', $book->id)}}" method="POST" class="mt-3 mx-2">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="fw-bold fst-italic btn btn-danger waves-effect waves-light">
                                        <i class="far fa-trash-alt"></i> Eliminar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <br>
            </div>
        @endforeach
        <!-- end col -->
    </div>
</div>
@endsection