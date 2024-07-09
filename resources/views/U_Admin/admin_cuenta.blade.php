@extends('Layouts.menu_admin')

@section('title')
Proyecto Libreria - Admin
@endsection

@section('content')
<style>

</style>
<div class="container">
    <div class="row mx-auto mt-4 justify-content-center align-items-center">
        <div class="col-lg-12">
            <h2 class="card-title p-5 text-center fst-italic">Información personal</h2>
            <div class="card-body col-md-7 mx-auto">
                <form action="{{ route('admin.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="shadow-lg p-4 rounded-5">
                        <table class="table mb-0 align-items-center table-borderless">
                            <tbody>

                                @foreach ($admin as $item)
                                    <tr>
                                        <th scope="row" class="text-end">Nombre :</th>
                                        <td>
                                            <input class="form-control" name="nombre" type="text"
                                                value="{{ $item->nombre }}" id="example-text-input">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-end">Apellido :</th>
                                        <td>
                                            <input class="form-control" name="apellido" type="text"
                                                value="{{ $item->apellido }}" id="example-text-input">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-end">Ciudad :</th>
                                        <td>
                                            <select name="ciudad_id" class="form-control">
                                                <option value="{{ $item->ciudad_id }}">{{ $item->nombre_ciudad }}</option>
                                                @foreach ($ciudades as $ciudad)
                                                    <option value="{{ $ciudad->id }}">{{ $ciudad->nombre_ciudad }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-end">E-mail :</th>
                                        <td>
                                            <input class="form-control" name="email" type="text" value="{{ $item->email }}"
                                                id="example-text-input">
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <button type="submit" class="btn btn-success waves-effect waves-light">
                                            <i class="fas fa-edit"></i> Editar
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection