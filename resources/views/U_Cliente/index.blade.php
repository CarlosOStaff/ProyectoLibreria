@extends('Layouts.menu_cliente')

@section('title')
Libreria
@endsection

@section('content')
<h1>Bienvenido<h1>
        <h3>Visualiza nuestro catalogo de libros disponibles</h3>
        <div class="col-12">
            <div class="" style="margin-left:5%;
    margin-right:5%;">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">#</th>
                            <th scope="col" colspan="2">Titulo del libro</th>
                            <th scope="col" colspan="2">Descripcion</th>
                            <th scope="col" colspan="2">Categoria</th>
                            <th scope="col" colspan="2"></th>
                        </tr>
                    </thead>
                    @foreach ($books as $book)
                        <tbody>
                            <td scope="row" colspan="2">{{$book->id}}</td>
                            <td scope="row" colspan="2">{{$book->titulo_libro}}</td>
                            <td scope="row" colspan="2">{{$book->descripcion}}</td>
                            <td scope="row" colspan="2">{{$book->nombre_categoria}}</td>
                            <td scope="col" colspan="2">
                                <form action="{{url('/cliente/prestar/libro',$book->id)}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success waves-effect waves-light">
                                    <i class="bx bx-check-double font-size-16 align-middle me-2"></i> Prestar
                                </button>
                                </form>
                            </td>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
        @endsection