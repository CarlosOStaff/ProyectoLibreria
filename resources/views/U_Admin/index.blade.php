@extends('Layouts.menu_admin')

@section('title')
Libreria
@endsection

@section('content')
@if (session('message_error'))
    <script>
        alert("{{ session('message_error') }}");
    </script>
@endif

    <h1 class="text-center fst-italic pt-5 m-5">Bienvenido {{$user->nombre}}</h1>

<div class="container">
    <div class="row mx-auto mt-4 justify-content-center align-items-center">

        <div class="col-md-3 shadow-lg p-4 mb-5 bg-body rounded">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <p class="text-center h3 text-dark fst-italic">Usuarios activos</p>
                        @foreach ($users as $item)
                            <h4 class="mb-2 text-center h1 fst-italic">{{$item}}</h4>
                        @endforeach
                        <a href="{{route('list.users')}}"
                            class="btn btn-primary waves-effect waves-light btn-sm d-flex justify-content-center fst-italic fw-bold mt-4">Ver
                            más</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 shadow-lg p-4 mb-5 mx-4">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <p class="text-center h3 text-dark fst-italic">Libros</p>
                        @foreach ($libros as $item)
                            <h4 class="mb-2 text-center h1 fst-italic">{{$item}}</h4>
                        @endforeach
                        <a href="{{route('admin.listBooks')}}"
                            class="btn btn-primary waves-effect waves-light btn-sm d-flex justify-content-center fst-italic fw-bold mt-4">Ver
                            más</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 shadow-lg p-4 mb-5 mx-4">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <p class="text-center h3 text-dark fst-italic">Libros prestados</p>
                        @foreach ($librosPRestados as $item)
                            <h4 class="mb-2 text-center h1 fst-italic">{{$item}}</h4>
                        @endforeach
                        <a href="{{route('listaLibrosPrestados')}}"
                            class="btn btn-primary waves-effect waves-light btn-sm d-flex justify-content-center font-size-15 fw-bold mt-4">Ver
                            más</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container">
    <div class="row mx-auto mt-4 justify-content-center align-items-center">
        <h3 class="text-center fst-italic fw-bold mb-3">Opciones de administrador</h3>
        <div class="col-md-3 shadow-lg p-4 mb-5 mx-4">
            <div class="text-center">
                <div class="card-body">
                    <div class="avatar-lg mx-auto mb-4">
                        <i class="fas fa-user fa-3x"></i>
                    </div>
                    <h5 class="mb-1"><a href="{{url('/registro/admin')}}" class="text-dark fst-italic">Nuevo
                            Administrador</a></h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 shadow-lg p-4 mb-5 mx-4">
            <div class="text-center">
                <div class="card-body">
                    <div class="avatar-lg mx-auto mb-4">
                        <i class="fas fa-users fa-3x"></i>
                        </span>
                    </div>
                    <h5 class="font-size-15 mb-1"><a href="{{url('/admin-activos')}}"
                            class="text-dark fst-italic">Administradores
                            activos</a></h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 shadow-lg p-4 mb-5 mx-4">
            <div class="text-center">
                <div class="card-body">
                    <div class="avatar-lg mx-auto mb-4">
                        <i class="fas fa-book fa-3x"></i>
                        </span>
                    </div>
                    <h5 class="font-size-15 mb-1"><a href="{{url('/admin/nuevo/libro')}}"
                            class="text-dark fst-italic">Nuevo
                            libro</a></h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 shadow-lg p-4 mb-5 mx-4">
            <div class="text-center">
                <div class="card-body">
                    <div class="avatar-lg mx-auto mb-4">
                        <i class="fas fa-chart-pie fa-3x"></i>
                        </span>
                    </div>
                    <h5 class="font-size-15 mb-1"><a href="{{route('charts')}}" class="text-dark fst-italic">Estadisticas</a>
                    </h5>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection