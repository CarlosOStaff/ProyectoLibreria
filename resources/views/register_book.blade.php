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
                    <a class="nav-link active" aria-current="page" href="{{url('/lend_book')}}">Prestar libro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mis devoluciones</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<div class="card-body">

    <h4 class="card-title mb-4">Registrar un nuevo libro</h4>

    <form action="{{url('/new_book')}}" method="POST">
    @csrf
        <div class="mb-3">
            <label for="formrow-firstname-input" class="form-label">Titulo del libro</label>
            <input type="text" class="form-control"  name="titulo_libro" placeholder="Don quijote">
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
                <button type="submit" class="btn btn-primary w-md">Submit</button>
            </div>
    </form>
</div>
</div>
</div>
@endsection