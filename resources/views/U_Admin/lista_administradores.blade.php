@extends('Layouts.menu_admin')

@section('title')
Proyecto - Libreria
@endsection

@section('content')
<div class="container">
    <h1 class="text-center p-5 fst-italic">Lista de administradores activos</h1>
    <div class="row mx-auto mt-4 justify-content-center align-items-stretch">
        @foreach ($admins as $admin)
            <div class="col-xl-3 col-sm-6 shadow-lg p-4 mb-5 mx-4">
                <div class="h-100 text-center">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="h3 mb-1 fst-italic"><a class="text-dark">{{$admin->nombre}}</a></h5>
                        <p class="text-muted fw-bold">{{$admin->apellido}}</p>
                        @if (is_null($admin->email_verified_at))
                            <a class="text-dark fst-italic">Necesario validar cuenta</a>
                        @endif
                        <div class="mt-auto">
                            <form action="{{route('elimiaradmin', $admin->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger waves-effect waves-light mt-3">
                                    <i class="fas fa-trash"></i> Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection