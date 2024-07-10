@extends('Layouts.menu_admin')

@section('title')
Proyecto - Libros
@endsection

@section('content')
<div class="conaiter p-5">
    <div class="row">
        <div class="col-6">
            <h2 class="">Ejemplo de Tabla con Bootstrap</h2>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Categorias</th>
                        <th>Libros por categorias</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($query as $item)
                        <tr>
                            <td>{{$item->nombre_categoria}}</td>
                            <td>{{$item->total_libros}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <form action="{{route('exportexcel')}}" method="GET">
            <button type="submit" class="btn btn-success waves-effect waves-light">
                <i class="fas fa-file-download"></i> Descargar
            </button>
        </form>
    </div>
</div>
@endsection