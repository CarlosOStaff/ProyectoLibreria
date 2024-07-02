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
                    <a class="nav-link active" aria-current="page" href="{{url('/register_user')}}">Nuveo usuario</a>
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

    <h4 class="card-title">usuarios</h4>
    <div class="col-sm-12">
        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline"
            role="grid" aria-describedby="datatable_info" style="width: 1013px;">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                        style="width: 159px;" aria-sort="ascending"
                        aria-label="Name: activate to sort column descending">Nombre</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                        style="width: 242px;" aria-label="Position: activate to sort column ascending">Apellido</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                        style="width: 52px;" aria-label="Age: activate to sort column ascending">Ciudad</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                        style="width: 81px;" aria-label="Salary: activate to sort column ascending">Estado
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                        style="width: 81px;" aria-label="Salary: activate to sort column ascending">Pais
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                        style="width: 81px;" aria-label="Salary: activate to sort column ascending">Correo
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                        style="width: 81px;" aria-label="Salary: activate to sort column ascending">
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                        style="width: 81px;" aria-label="Salary: activate to sort column ascending">
                    </th>
                </tr>
            </thead>
            @foreach ($users as $user)
                <tbody>
                    <td>{{$user->nombre}}</td>
                    <td>{{$user->apellido}}</td>
                    <td>{{$user->nombre_ciudad}}</td>
                    <td>{{$user->nombre_estado}}</td>
                    <td>{{$user->nombre_pais}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <form action="{{route('user.edit', $user->id)}}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-success waves-effect waves-light w-sm">
                                <i class="mdi mdi-pencil d-block font-size-16"></i> Editar
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{route('user.destroy', $user->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger waves-effect waves-light w-sm">
                                <i class="mdi mdi-pencil d-block font-size-16"></i> Eliminar
                            </button>
                        </form>
                    </td>
                </tbody>
            @endforeach

        </table>
    </div>
</div>
@endsection