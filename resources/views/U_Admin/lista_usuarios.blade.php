@extends('Layouts.menu_admin')

@section('title')
Proyecto Libreria
@endsection

@section('content')
<div class="container">
    <h4 class="card-title mt-4 text-center">Bienvenido, aqui puedes visualizar los usuarios activos</h4>
    <div class="row mx-auto mt-4 justify-content-center align-items-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="align-middle">ID</th>
                                    <th class="align-middle">Nombre</th>
                                    <th class="align-middle">Apellido</th>
                                    <th class="align-middle">Ciudad</th>
                                    <th class="align-middle">Emial</th>
                                    <th class="align-middle"></th>
                                </tr>
                            </thead>
                            @foreach ($users as $user)
                                <tbody>
                                    <tr>
                                        <td>{{$user->user_id}}</td>
                                        <td>{{$user->nombre}}</td>
                                        <td>
                                            {{$user->apellido}}
                                        </td>
                                        <td>
                                            {{$user->nombre_ciudad}}
                                        </td>
                                        <td>
                                            {{$user->email}}
                                        </td>
                                        <td>
                                            <form action="{{route('admin.elimiarUser', $user->user_id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger waves-effect waves-light">
                                                    <i class="fas fa-trash"></i> Eliminar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection