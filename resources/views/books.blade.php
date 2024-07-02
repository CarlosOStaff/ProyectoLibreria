@extends('Layouts.app')

@section('title')
Libros
@endsection

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/register_new_book')}}">Nuveo libro</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<h3>Libros disponibles</h3>

<div class="col-12">
    <div class="" style="margin-left:5%;
    margin-right:5%;">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col" colspan="2">#</th>
                    <th scope="col" colspan="2">Titulo del libro</th>
                    <th scope="col" colspan="2">Descripcion</th>
                    <th scope="col" colspan="2">Contenido</th>
                    <th scope="col" colspan="2">Fecha de publicacion</th>
                    <th scope="col" colspan="2">Categoria</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            @foreach ($books as $book)
                <tbody>
                    <tr>
                        <td scope="row" colspan="2">{{$book->id}}</td>
                        <td scope="row" colspan="2">{{$book->titulo_libro}}</td>
                        <td scope="row" colspan="2">{{$book->descripcion}}</td>
                        <td scope="row" colspan="2">{{$book->contenido}}</td>
                        <td scope="row" colspan="2">{{$book->fecha_publicacion}}</td>
                        <td scope="row" colspan="2">{{$book->nombre_categoria}}</td>
                        <td>
                            <form action="{{route('book.edit', $book->id)}}" method="GET">
                                @csrf
                                <button type="submit" value="{{$book->id}}" class="btn btn-success waves-effect waves-light w-sm">
                                    <i class="mdi mdi-pencil d-block font-size-16"></i> Editar
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('book.destroy', $book->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger waves-effect waves-light w-sm">
                                    <i class="mdi mdi-pencil d-block font-size-16"></i> Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection