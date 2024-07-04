@extends('Layouts.menu_admin')

@section('title')
Libros
@endsection

@section('content')
<div class="container bg-body col-lg-6 p-3 mt-3 pb-4 shadow-lg rounded-4">
    <h2 class="card-title mb-4 text-center mt-2 fst-italic">Registrar un nuevo libro</h2>

    <div class="row justify-content-center align-items-center">
        <div class="col-lg-10 ">
            <form action="{{route('store.newBook')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="formrow-firstname-input" class="form-label fw-bold fst-italic">Titulo del libro</label>
                    <input type="text" class="form-control" name="titulo_libro" placeholder="Don quijote">
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formrow-email-input" class="form-label fw-bold fst-italic">Descripcion</label>
                            <input type="text" class="form-control" name="descripcion"
                                placeholder="Descripcion...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formrow-email-input" class="form-label fw-bold fst-italic">Contenido</label>
                            <input type="text" class="form-control" name="contenido" placeholder="Contenido...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formrow-password-input" class="form-label fw-bold fst-italic">Fecha de publicacion</label>
                            <input type="date" class="form-control" name="fecha_publicacion">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="formrow-inputState" class="form-label fw-bold fst-italic">Etiquetas</label>
                            <select id="formrow-inputState" name="etiqueta_id" class="form-select">
                                <option> Seleccionar...</option>
                                @foreach ($etiquetas as $etiqueta)
                                    <option value="{{$etiqueta->id}}">{{$etiqueta->nombre_etiqueta}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="formrow-inputState" class="form-label fw-bold fst-italic">Categoria</label>
                            <select id="formrow-inputState" name="categoria_id" class="form-select">
                                <option> Seleccionar...</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->nombre_categoria}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary w-md fw-bold fst-italic">Guardar</button>
                    </div>
            </form>
        </div>
    </div>

</div>

</div>
</div>
@endsection