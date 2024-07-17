@extends('Layouts.menu_admin')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@section('title')
Proyecto - Libros
@endsection

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Ejemplo de Tabla con Bootstrap</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Categorías</th>
                                    <th>Libros por Categoría</th>
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
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mt-3">
                <div class="card-body">
                    <form action="{{route('exportexcel')}}" method="GET">
                        <button type="submit" class="btn btn-success btn-block">
                            <i class="fas fa-file-download"></i> Descargar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection