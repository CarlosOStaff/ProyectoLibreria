@extends('Layouts.menu_cliente')

@section('title')
Libreria
@endsection

@section('content')
<div class="container">
    <h3 class="text-center fst-italic fw-bold mt-3 mb-3">Informacion del libro seleccionado</h3>
    <div class="row mx-auto mt-4 justify-content-center align-items-center">
        @foreach ($book as $item)
            <div class="container">
                <div class="row mx-auto mt-4 justify-content-center align-items-center">
                    <div class="card col-8">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title fw-bold fst-italic">{{$item->titulo_libro}}</h3>
                            <strong><span class="text-end fst-italic">
                                    Descripcion
                                </span></strong>
                            <p class="card-text">{{$item->descripcion}}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-star fst-italic fw-bold">Categoria:
                                {{$item->nombre_categoria}}
                            </li>
                            <li class="list-group-item text-star fst-italic fw-bold">Fecha de publicacion
                                {{$item->fecha_publicacion}}
                            </li>
                        </ul>
                        <form action="{{route('regresarLibro', $item->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" value="{{$item->id}}"
                                class="btn btn-success waves-effect waves-light w-sm mt-2 mb-2 col-4">
                                <i class="mdi mdi-pencil d-block font-size-16"></i> Devolver
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection