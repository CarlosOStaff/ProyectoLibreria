@extends('Layouts.menu_admin')
@section('title')
Proyecto - Libreria -lista de libros
@endsection

@section('content')
<div class="container">
    <h3 class="card-title text-center mt-3">Libros regresados</h3>

    <div class="row mx-auto mt-4 justify-content-center align-items-center">
        @foreach ($books as $book)
            <div class="col-sm-6">
                <div class="card" style="width:40vw;">
                    <div class="card-body">
                        <img class="card-img-top" src="..." alt="Card image cap">
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