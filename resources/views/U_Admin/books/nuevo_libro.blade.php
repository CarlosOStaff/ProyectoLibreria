@extends('Layouts.menu_admin')

@section('title')
Libros
@endsection

@section('content')
<div class="card-body">

    <h4 class="card-title mb-4">Registrar un nuevo libro</h4>

    <form action="{{route('store.newBook')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="formrow-firstname-input" class="form-label">Titulo del libro</label>
            <input type="text" class="form-control" name="titulo_libro" placeholder="Don quijote">
        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="formrow-email-input" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" placeholder="Enter Your Email ID">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="formrow-email-input" class="form-label">Contenido</label>
                    <input type="text" class="form-control" name="contenido" placeholder="Enter Your Email ID">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="formrow-password-input" class="form-label">Fecha de publicacion</label>
                    <input type="date" class="form-control" name="fecha_publicacion">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="formrow-inputState" class="form-label">Etiquetas</label>
                    <select id="formrow-inputState" name="etiqueta_id" class="form-select">
                        <option> Seleccionar...</option>
                        @foreach ($etiquetas as $etiqueta)
                            <option value="{{$etiqueta->id}}">{{$etiqueta->nombre_etiqueta}}</option>
                        @endforeach

                    </select>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="formrow-inputState" class="form-label">Categoria</label>
                    <select id="formrow-inputState" name="categoria_id" class="form-select">
                        <option> Seleccionar...</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->nombre_categoria}}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary w-md">Guardar</button>
            </div>
    </form>
</div>
</div>
</div>
@endsection