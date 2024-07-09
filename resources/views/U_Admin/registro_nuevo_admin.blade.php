@extends('Layouts.menu_admin')

@section('title')
Proyecto - Libreria
@endsection

@section('content')

<body class="">
    <div class="container">
        <h2 class="card-title text-center p-5 fst-italic ">Nuevo Administrador</h2>
        <div class="row mx-auto justify-content-center">
            <div class="col-xl-6 shadow-lg p-3 rounded-5 bg-white">
                <div class="">
                    <div class="">
                        <form action="{{ url('/new-admin') }}" method="POST">
                            @csrf
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input"
                                    class="col-sm-3 col-form-label text-center fst-italic fw-bold">Nombre:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nombre" class="form-control"
                                        id="horizontal-firstname-input" placeholder="Enter Your ">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input"
                                    class="col-sm-3 col-form-label text-center fst-italic fw-bold">Apellido:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="apellido" class="form-control"
                                        id="horizontal-firstname-input" placeholder="Enter Your ">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-email-input"
                                    class="col-sm-3 col-form-label text-center fst-italic fw-bold">Email:</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control" id="horizontal-email-input"
                                        placeholder="Enter Your Email ID">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-password-input"
                                    class="col-sm-3 col-form-label text-center fst-italic fw-bold">Password:</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="form-control"
                                        id="horizontal-password-input" placeholder="Enter Your Password">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-password-input"
                                    class="col-sm-3 col-form-label text-center fst-italic fw-bold">Ciudades:</label>
                                <div class="col-sm-9">
                                    <select name="ciudad_id" id="ciudad_id" class="form-control">
                                        <option value="">select...</option>
                                        @foreach ($ciudades as $ciudad)
                                            <option value="{{ $ciudad->id }}">{{ $ciudad->nombre_ciudad }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <button type="submit"
                                        class="btn btn-primary w-md fst-italic fw-bold">Guardar</button>
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
</body>

@endsection