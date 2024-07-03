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
<br>
@foreach ($query as $item)
    <h1 class="text-center">Bienvenido {{$item->nombre}}</h1>
@endforeach

<div class="container">
    <div class="row mx-auto mt-4 justify-content-center align-items-center">

        <div class="col-md-3 shadow-lg p-4 mb-5 bg-body rounded">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <p class="text-center h3 text-dark">Usuarios activos</p>
                        @foreach ($users as $item)
                            <h4 class="mb-2 text-center h1">{{$item}}</h4>
                        @endforeach
                        <br>
                        <a href="{{route('list.users')}}"
                            class="btn btn-primary waves-effect waves-light btn-sm d-flex justify-content-center">Ver
                            más</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 shadow-lg p-4 mb-5 mx-4">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <p class="text-center h3 text-dark">Libros</p>
                        @foreach ($libros as $item)
                            <h4 class="mb-2 text-center h1">{{$item}}</h4>
                        @endforeach
                        <br>
                        <a href="{{route('admin.listBooks')}}"
                            class="btn btn-primary waves-effect waves-light btn-sm d-flex justify-content-center">Ver
                            más</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 shadow-lg p-4 mb-5 mx-4">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <p class="text-center h3 text-dark">Libros prestados</p>
                        @foreach ($librosPRestados as $item)
                            <h4 class="mb-2 text-center h1">{{$item}}</h4>
                        @endforeach
                        <br>
                        <a href="{{route('list.users')}}"
                            class="btn btn-primary waves-effect waves-light btn-sm d-flex justify-content-center">Ver
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

        <div class="col-md-3 shadow-lg p-4 mb-5 mx-4">
            <div class="text-center">
                <div class="card-body">
                    <div class="avatar-lg mx-auto mb-4">
                        <i class="fas fa-user fa-3x"></i>
                    </div>
                    <h5 class="font-size-15 mb-1"><a href="{{url('/registro/admin')}}" class="text-dark">Nuevo
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
                    <h5 class="font-size-15 mb-1"><a href="{{url('/admin-activos')}}" class="text-dark">Administradores
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
                    <h5 class="font-size-15 mb-1"><a href="{{url('/admin/nuevo/libro')}}" class="text-dark">Nuevo
                            libro</a></h5>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection