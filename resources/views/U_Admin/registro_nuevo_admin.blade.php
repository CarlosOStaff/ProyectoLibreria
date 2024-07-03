@extends('Layouts.menu_admin')

@section('title')
Proyecto - Libreria
@endsection

@section('content')
<div class="container">
    <h4 class="card-title mb-4 text-center mt-3 mb-3">Nuevo Administrador</h4>
    <div class="row mx-auto mt-4 justify-content-center">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('/new-admin') }}" method="POST">
                        @csrf
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label text-center">Nombre:</label>
                            <div class="col-sm-9">
                                <input type="text" name="nombre" class="form-control" id="horizontal-firstname-input" placeholder="Enter Your ">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label text-center">Apellido:</label>
                            <div class="col-sm-9">
                                <input type="text" name="apellido" class="form-control" id="horizontal-firstname-input" placeholder="Enter Your ">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label text-center">Email:</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="horizontal-email-input" placeholder="Enter Your Email ID">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label text-center">Password:</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id="horizontal-password-input" placeholder="Enter Your Password">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label text-center">Ciudades:</label>
                            <div class="col-sm-9">
                                <select name="ciudad_id" id="ciudad_id" class="form-control">
                                    <option value="">select...</option>
                                    @foreach ($ciudades as $ciudad)
                                    <option value="{{ $ciudad->id }}">{{ $ciudad->nombre_ciudad }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary w-md">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
</div>
@endsection
