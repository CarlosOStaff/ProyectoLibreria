@extends('Layouts.menu_cliente')

@section('title')
Libreria
@endsection

@section('content')
<div class="row mt-0" style="display: flex; justify-content: center;padding-top:3vw;">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 fst-italic fw-bold">Mis datos</h4>
                @foreach ($usuario as $item)
                    <form action="{{route('cliente.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label fst-italic fw-bold">Selecciona
                                        una imagen de perfil</label>
                                    <!-- Vista previa de la nueva imagen -->
                                    @if($item->img_perfil)
                                        <img id="current-img" class="img-fluid rounded mt-2 mb-4 mx-auto mh-100 h-50 w-25"
                                            src="/img/users/perfil/{{ $item->img_perfil }}" alt="Imagen actual de perfil">
                                    @endif
                                    <!-- Vista previa de la nueva imagen -->
                                    <img id="img-preview" class="img-fluid rounded mt-2 mb-4 mx-auto mh-100 h-50 w-25"
                                        src="" alt="Vista previa de la nueva imagen" style="display: none;">
                                    <input class="form-control" id="img_perfil" name="img_perfil" type="file"
                                        onchange="previewImage()">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input"
                                            class="form-label fst-italic fw-bold">Nombre(s)</label>
                                        <input type="text" name="nombre" class="form-control" id="formrow-firstname-input"
                                            placeholder="Mario" value="{{$item->nombre}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input"
                                            class="form-label fst-italic fw-bold">Apellidos</label>
                                        <input type="text" name="apellido" class="form-control" id="formrow-firstname-input"
                                            placeholder="Perez" value="{{$item->apellido}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-email-input" class="form-label fst-italic fw-bold">Email</label>
                                        <input type="email" class="form-control" name="email" id="formrow-email-input"
                                            placeholder="Enter Your Email ID" value="{{$item->email}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="formrow-inputCity" class="form-label fst-italic fw-bold">Ciudad</label>
                                        <select id="formrow-inputState" name="ciudad_id" class="form-select">
                                            <option selected="" value="{{$item->ciudad_id}}">Seleccionar...</option>
                                            @foreach ($cities as $city)
                                                <option value="{{$city->id}}">{{$city->nombre_ciudad}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-password-input"
                                            class="form-label fst-italic fw-bold">Password</label>
                                        <input type="password" name="password" class="form-control"
                                            id="formrow-password-input" placeholder="Enter Your Password" value="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="horizontal-password-input"
                                        class="col-form-label fw-bold fst-italic text-start">Confirmar
                                        Password:</label>
                                    <div class="col-sm-12">
                                        <input type="password" name="confirmar_password" id="confirmar_password"
                                            class="form-control" placeholder="Ingresa tu contraseña">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary w-md fst-italic fw-bold">
                                    <i class="fas fa-save"></i>Guardar</button>
                            </div>
                    </form>
                @endforeach
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
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