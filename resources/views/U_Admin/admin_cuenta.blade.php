@extends('Layouts.menu_admin')

@section('title')
Proyecto Libreria - Admin
@endsection

@section('content')
<div class="card-body col-md-5">
    <h4 class="card-title mb-4">Información personal</h4>
    <form action="{{route('admin.update')}}" method="POST">
        @csrf
        @method('PUT')
        <div class="table">
            <table class="table table-nowrap mb-0 row align-items-start">
                <tbody>
                    <tr>
                        <th scope="row">Nombre :</th>
                        @foreach ($admin as $item)
                                    <td>
                                        <div class="col-md-6">
                                            <input class="form-control" name="nombre" type="text" value="{{$item->nombre}}"
                                                id="example-text-input">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Apellido :</th>
                                    <td>
                                        <div class="col-md-6">
                                            <input class="form-control" name="apellido" type="text" value="{{$item->apellido}}"
                                                id="example-text-input">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Ciudad :</th>
                                    <td>
                                        <select name="ciudad_id" id="">
                                            <option value="{{$item->ciudad_id}}">__{{$item->nombre_ciudad}}__</option>
                                            @foreach ($ciudades as $ciudad)
                                                <option name="ciudad_id" value="{{$ciudad->id}}">{{$ciudad->nombre_ciudad}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">E-mail :</th>
                                    <td>
                                        <div class="col-md-6">
                                            <input class="form-control" name="email" type="text" value="{{$item->email}}"
                                                id="example-text-input">
                                        </div>
                                    </td>
                                </tr>
                                <td>
                                    <button type="submit" class="btn btn-success waves-effect waves-light">
                                        <i class="fas fa-edit"></i> Editar
                                    </button>
                                </td>
                            </tbody>
                        @endforeach
            </table>
        </div>
    </form>
</div>
@endsection