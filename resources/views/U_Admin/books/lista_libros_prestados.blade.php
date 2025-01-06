@extends('Layouts.menu_admin')
@section('title')
Proyecto - Libreria -lista de libros
@endsection

@section('content')
<div class="container p-5">
    <h2 class="card-title text-center mt-4 fst-italic">Libros que se han prestado</h2>
    <div class="row mx-auto mt-4 justify-content-center align-items-center">
        @foreach ($books as $book)
            <div class="col-lg-6">
                <div class="col-xl-12 shadow-lg p-3 mb-5 h-50 mw-100">
                    <div class="card-body m-2 d-flex">
                        <img class="img-top img-fluid mb-3 mx-auto d-block rounded img-fluid mw-100 w-100 h.auto"
                            src="/img/imagenLibros/{{$book->imagen}}" alt="Card image cap">
                        <div class="card-body mx-2">
                            <div class="card-body">
                                <h5 class="card-title">{{$book->titulo_libro}}</h5>
                                <p class="card-text">{{$book->descripcion}}</p>
                                <strong><span>Fecha de prestamo: {{$book->fecha_prestamo}}</span></strong>
                                <strong><span>Categoria: {{$book->nombre_categoria}}</span></strong>
                                <p class="">Usuario que presto el libro: <strong>{{$book->nombre_del_usuario}}</strong></p>
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