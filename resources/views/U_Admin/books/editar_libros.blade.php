@extends('Layouts.menu_admin')

@section('title')
Proyeto - Libreria
@endsection

@section('content')
<div class="card-body" style="padding-left:3vw;padding-right:3vw;padding-top:3vw;">
    <h4 class="card-title mt-4 mb-3">Actualiza la informacion necesaria del libro</h4>
    
    @foreach ($books as $book)
        <form action="{{route('admin.updateBook', $book->id)}}" , method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-floating mb-4 col-md-6">
                <input type="text" class="form-control" name="titulo_libro" value="{{$book->titulo_libro}}"
                    id="floatingnameInput" placeholder="Enter Name">
                <label for="floatingnameInput">Titulo del libro</label>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <textarea class="form-control col-md-6" type="textarea" name="descripcion"
                            value="{{$book->descripcion}}" rows="5" cols="83"
                            style="height:10vw;">{{$book->descripcion}}</textarea>
                        <label for="floatingemailInput">Descripcion</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <select name="categoria_id" class="form-select" id="floatingSelectGrid"
                            aria-label="Floating label select example">
                            <option selected="" value="{{$book->categoria_id}}">__{{$book->nombre_categoria}}__</option>
                            @foreach ($categorias as $categoria)
                                <option name="categoria_id" value="{{$categoria->id}}">{{$categoria->nombre_categoria}}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelectGrid">Categoria</label>
                    </div>
                    <div class="form-group mb-4">
                        <label for="input-date1">Fecha de publicacion</label>
                        <input id="input-date1" name="fecha_publicacion" value="{{$book->fecha_publicacion}}"
                            class="form-control input-mask" data-inputmask="'alias': 'datetime'"
                            data-inputmask-inputformat="dd/mm/yyyy" im-insert="false">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Contenido</label>
                <textarea name="contenido" class="form-control" id="exampleFormControlTextarea1"
                    rows="3">{{$book->contenido}}</textarea>
            </div>
            <div class="mb-3">
                <label for="formrow-inputState" class="form-label fw-bold fst-italic">Imagen</label>
                <input class="form-control" type="file" id="imagen" name="imagen">
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-primary w-md">Guardar</button>
            </div>
        </form>
    @endforeach
</div>
@endsection