@extends('Layouts.menu_admin')

@section('title')
Proyecto Libreria
@endsection

@section('content')
<div class="container">
    <h2 class="card-title p-5 text-center fst-italic">Bienvenido, aqui puedes visualizar los usuarios activos</h42>
        <div class="row mx-auto mt-4 justify-content-center align-items-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="align-middle h5">ID</th>
                                        <th class="align-middle h5">img</th>
                                        <th class="align-middle h5">Nombre</th>
                                        <th class="align-middle h5">Apellido</th>
                                        <th class="align-middle h5">Ciudad</th>
                                        <th class="align-middle h5">Emial</th>
                                        <th class="align-middle h5"></th>
                                    </tr>
                                </thead>
                                @foreach ($users as $user)
                                    <tbody>
                                        <tr>
                                            <td class="h6">{{$user->user_id}}</td>
                                            <td class="h6">
                                                <img src="/img/users/perfil/{{$user->img_perfil}}" alt="Imagen de perfil"
                                                    class="profile-img mw-50 mh-50 w-25 h-25 rounded-circle">
                                            </td>
                                            <td class="h6">{{$user->nombre}}</td>
                                            <td class="h6">
                                                {{$user->apellido}}
                                            </td>
                                            <td class="h6">
                                                {{$user->nombre_ciudad}}
                                            </td>
                                            <td class="h6">
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