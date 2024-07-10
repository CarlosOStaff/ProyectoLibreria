@extends('Layouts.menu_cliente')

@section('title')
Libreria
@endsection

@section('content')
<h3 class="text-center fst-italic fw-bold mt-3 mb-3">Libros que he prestado</h3>
<div class="container">
    <div class="row mx-auto mt-4 justify-content-center align-items-center">
        @foreach ($listBooks as $book)
        <div class="col-lg-6">
                <div class="col-xl-12 shadow-lg p-4 mb-5 mx-2 h-50 mw-100">
                    <div class="card-body m-3">
                        <img class="img-top img-fluid mb-3 mx-auto d-block rounded" src="/img/imagenLibros/{{$book->imagen}}" alt="Card image cap">
                        <div class="card-body">
                            <div class="card-body">
                                <h5 class="card-title fst-italic fw-bold">{{$book->titulo_libro}}</h5>
                                <p class="card-text">{{$book->descripcion}}</p>
                                <p class="card-text"><small class="text-muted fst-italic"><strong>Categoria:
                                            {{$book->nombre_categoria}}</strong></small></p>
                                <p class="card-text"><small class="text-muted fst-italic fw-bold"><strong>Fecha de prestamo:
                                            {{$book->fecha_prestamo}}</strong></small></p>
                                <form action="{{route('regresarLibro', $book->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
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