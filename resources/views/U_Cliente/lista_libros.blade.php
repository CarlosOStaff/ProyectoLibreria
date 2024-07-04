@extends('Layouts.menu_cliente')

@section('title')
Libreria
@endsection

@section('content')
<h3 class="text-center fst-italic fw-bold mt-3 mb-3">Lista de libros prestados</h3>
<div class="container">
    <div class="row mx-auto mt-4 justify-content-center align-items-center">
        @foreach ($listBooks as $book)
            <div class="col">
                <div class="card mb-2 mw-50 mh-100">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title fst-italic fw-bold">{{$book->titulo_libro}}</h5>
                                <p class="card-text">{{$book->descripcion}}</p>
                                <p class="card-text"><small class="text-muted fst-italic"><strong>Categoria:
                                            {{$book->nombre_categoria}}</strong></small></p>
                                <p class="card-text"><small class="text-muted fst-italic fw-bold"><strong>Fecha de prestamo:
                                            {{$book->fecha_prestamo}}</strong></small></p>
                                <form action="{{route('user.userBook', $book->id)}}" method="GET">
                                    @csrf
                                    <button type="submit"
                                        class="btn btn-success waves-effect waves-light w-sm fst-italic fw-bold">
                                        <i class="mdi mdi-pencil d-block font-size-16"></i> Devolver
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection