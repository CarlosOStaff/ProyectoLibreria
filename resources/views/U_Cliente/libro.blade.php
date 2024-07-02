@extends('Layouts.menu_cliente')

@section('title')
Libreria
@endsection

@section('content')
<h3>Informacion del libro seleccionado</h3>
@foreach ($book as $item)
    <div class="container">
        <div class="row align-items-start">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">{{$item->titulo_libro}}</h3>
                    <strong><span>
                            Descripcion
                        </span></strong>
                    <p class="card-text">{{$item->descripcion}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$item->nombre_categoria}}</li>
                    <li class="list-group-item">Fecha de publicacion <br>
                        <strong>{{$item->fecha_publicacion}}</strong>
                    </li>
                </ul>
                <form action="{{route('regresarLibro', $item->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" value="{{$item->id}}" class="btn btn-success waves-effect waves-light w-sm">
                        <i class="mdi mdi-pencil d-block font-size-16"></i> Devolver
                    </button>
                </form>
            </div>
        </div>
    </div>
@endforeach

@endsection