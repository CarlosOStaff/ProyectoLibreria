@extends('Layouts.app')

@section('titulo')
libros
@endsection

@section('content')
<form action="{{ url('lend') }}" method="POST">
@csrf
    <div class="card-body">
        <div class="mb-3 row">
            <label class="col-md-2 col-form-label">Libro</label>
            <div class="col-md-10">
                <select class="form-select" name="libro_id">
                    <option>Select</option>
                    @foreach($books as $book)
                        <option  value="{{$book->id}}">{{$book->titulo_libro}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <div>
        <input class="form-control" type="number" name="user_id" value="2" id="example-text-input"> 2
        </div>
        <div class="mb-3 row">
            <label for="example-text-input" class="col-md-2 col-form-label">Fecha del prestamo</label>
            <div class="col-md-10">
                <input class="form-control" type="date" name="fecha_prestamo" value="Artisanal kale" id="example-text-input">
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary w-md">Aceptar</button>
        </div>
    </div>
</form>
@endsection