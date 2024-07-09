@extends('Layouts.menu_admin')
@section('title')
Proyecto - Libreria -lista de libros
@endsection

@section('content')
<div class="container p-5">
    <h2 class="card-title text-center mt-3 fst-italic">Libros regresados</h2>

    <div class="row mx-auto mt-4 justify-content-center align-items-center">
        @foreach ($books as $book)
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <img class="img-top d-block mx-auto" src="/img/imagenLibros/{{$book->imagen}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$book->titulo_libro}}</h5>
                            <p class="card-text">{{$book->descripcion}}</p>
                            <strong><span>Fecha de prestamo: {{$book->fecha_prestamo}}</span></strong>
                            <strong><span>Categoria: {{$book->nombre_categoria}}</span></strong>
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