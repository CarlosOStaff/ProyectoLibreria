@extends('Layouts.menu_cliente')

@section('title')
Libreria
@endsection

@section('content')
<div class="container">
    <h1 class="text-center mt-3 mb-3">Bienvenido {{$user}}
        <h1>
            <div class="row mx-auto mt-4 justify-content-center align-items-center">
                <h3 class="text-center mb-3">Visualiza nuestro catalogo de libros disponibles</h3>
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered table-dark">
                            <thead>
                                <tr>
                                    <th scope="col" class="fs-5">#</th>
                                    <th scope="col" class="fs-5">Título del libro</th>
                                    <th scope="col" class="fs-5">Descripción</th>
                                    <th scope="col" class="fs-5">Categoría</th>
                                    <th scope="col" class="fs-5">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td class="fs-6">{{$book->id}}</td>
                                        <td class="fs-6">{{$book->titulo_libro}}</td>
                                        <td class="fs-6">{{$book->descripcion}}</td>
                                        <td class="fs-6">{{$book->nombre_categoria}}</td>
                                        <td>
                                            <form action="{{url('/cliente/prestar/libro', $book->id)}}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-success" aria-label="Eliminar Usuario"
                                                    title="Eliminar Usuario">
                                                    <i class="fas fa-book">Prestar</i>
                                            </form>
                                        </td>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
</div>
</div>

@endsection