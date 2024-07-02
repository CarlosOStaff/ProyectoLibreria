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
    <h1>Bienvenido {{$item->nombre}}</h1>
@endforeach
<br>

<div class="row">
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <p class="text-muted fw-medium">Usuarios activos</p>
                        @foreach ($users as $item)
                            <h4 class="mb-0">{{$item}}</h4>
                        @endforeach
                        <br>
                        <a href="{{route('list.users')}}" class="btn btn-primary waves-effect waves-light btn-sm">Ver
                            más</a>
                    </div>
                    <div class="flex-shrink-0 align-self-center">
                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                            <span class="avatar-title">
                                <i class="bx bx-copy-alt font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <p class="text-muted fw-medium">Libros</p>
                        @foreach ($libros as $item)
                            <h4 class="mb-0">{{$item}}</h4>
                        @endforeach
                        <br>
                        <a href="{{route('admin.listBooks')}}" class="btn btn-primary waves-effect waves-light btn-sm">Ver
                            más</a>
                    </div>

                    <div class="flex-shrink-0 align-self-center ">
                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                            <span class="avatar-title rounded-circle bg-primary">
                                <i class="bx bx-archive-in font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <p class="text-muted fw-medium">Libros prestados</p>
                        @foreach ($librosPRestados as $item)
                            <h4 class="mb-0">{{$item}}</h4>
                        @endforeach
                        <br>
                        <a href="{{route('list.users')}}" class="btn btn-primary waves-effect waves-light btn-sm">Ver
                            más</a>
                    </div>

                    <div class="flex-shrink-0 align-self-center">
                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                            <span class="avatar-title rounded-circle bg-primary">
                                <i class="bx bx-purchase-tag-alt font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection