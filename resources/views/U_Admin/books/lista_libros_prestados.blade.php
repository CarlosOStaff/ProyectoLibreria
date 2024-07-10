@extends('Layouts.menu_admin')
@section('title')
Proyecto - Libreria -lista de libros
@endsection

@section('content')
<div class="container p-5">
    <h2 class="card-title text-center mt-3 fst-italic">Libros que se han prestado</h2>

    <div class="row mx-auto mt-4 justify-content-center align-items-center">
        @foreach ($books as $book)
            <div class="col-lg-6">
                <div class="col-xl-12 shadow-lg p-4 mb-5 mx-2 h-50 mw-100">
                    <div class="card-body m-3">
                        <img class="img-top img-fluid mb-3 mx-auto d-block rounded"
                            src="/img/imagenLibros/{{$book->imagen}}" alt="Card image cap">
                        <div class="card-body">
                            <div class="card-body">
                                <h5 class="card-title">{{$book->titulo_libro}}</h5>
                                <p class="card-text">{{$book->descripcion}}</p>
                                <strong><span>Fecha de prestamo: {{$book->fecha_prestamo}}</span></strong>
                                <strong><span>Categoria: {{$book->nombre_categoria}}</span></strong>
                                <strong><span>Usuario que presto el libro:</span></strong>
                                <span class="h5">{{$book->nombre_del_usuario}}</span>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <br>
                </div>
            </div>
        @endforeach
        <!-- end col -->
    </div>
</div>
@endsection