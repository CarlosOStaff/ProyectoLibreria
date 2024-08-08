@extends('Layouts.menu_admin')

@section('title')
Proyecto Libreria - Admin
@endsection

@section('content')
<div class="container">
    <div class="row mx-auto  justify-content-center align-items-center">
        <div class="col-lg-12">
            <h2 class="card-title p-5 text-center fst-italic m-5">Información personal</h2>
            <div class="card-body col-md-10 mx-auto">
                <form action="{{ route('admin.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="shadow-lg p-4 rounded-5">
                        <table class="table mb-0 align-items-center table-borderless">
                            <tbody>
                                @foreach ($admin as $item)
                                    <tr>
                                        <th scope="row" class="text-end">Elije una imagen de perfil</th>
                                        <td>
                                            <!-- Imagen actual -->
                                            @if($item->img_perfil)
                                                <img id="current-img"
                                                    class="img-fluid rounded mt-2 mb-4 mx-auto mh-100 h-50 w-25"
                                                    src="/img/users/perfil/{{ $item->img_perfil }}"
                                                    alt="Imagen actual de perfil">
                                            @endif
                                            <!-- Vista previa de la nueva imagen -->
                                            <img id="img-preview"
                                                class="img-fluid rounded mt-2 mb-4 mx-auto mh-100 h-50 w-25" src=""
                                                alt="Vista previa de la nueva imagen" style="display: none;">
                                            <input class="form-control" id="img_perfil" name="img_perfil" type="file"
                                                onchange="previewImage()">
                                        </td>
                                    </tr>
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
                        @if (session('message_udate_admin'))
                            <div class="alert alert-success">
                                {!! session('message_udate_admin') !!}
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function previewImage() {
        const file = document.getElementById('img_perfil').files[0];
        const imgPreview = document.getElementById('img-preview');
        const currentImg = document.getElementById('current-img');

        if (file) {
            const reader = new FileReader();

            reader.onload = function (event) {
                imgPreview.src = event.target.result;
                imgPreview.style.display = 'block';
                if (currentImg) {
                    currentImg.style.display = 'none';
                }
            };

            reader.readAsDataURL(file);
        } else {
            imgPreview.src = '';
            imgPreview.style.display = 'none';
            if (currentImg) {
                currentImg.style.display = 'block';
            }
        }
    }
</script>
@endsection