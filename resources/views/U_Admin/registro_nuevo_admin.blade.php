@extends('Layouts.menu_admin')

@section('title')
Proyecto - Libreria
@endsection

@section('content')

<body class="">
    <div class="container">
        <h2 class="card-title text-center p-5 fst-italic ">Nuevo Administrador</h2>
        <div class="row mx-auto justify-content-center">
            <div class="col-xl-6 shadow-lg p-3 rounded-5 bg-white">
                <div class="">
                    <div class="">
                        <form action="{{ url('/new-admin') }}" enctype="multipart/form-data" method="POST" id="frm"
                            onsubmit="return validarPasswords()">
                            @csrf
                            <div class="row">
                                <div class="col-sm-3 text-center">
                                    <!-- Vista previa de la nueva imagen -->
                                    <img id="img-preview" class="img-fluid rounded mt-2 mb-4 mx-auto"
                                        src="/img/users/perfil/default_img.png" alt="Vista previa de la nueva imagen"
                                        style="display: block; max-height: 200px;">
                                </div>
                                <div class="col-sm-9">
                                    <label for="img_perfil" class="col-form-label fst-italic fw-bold mt-3">Selecciona
                                        una
                                        imagen de perfil</label>
                                    <input class="form-control" id="img_perfil" name="img_perfil" type="file">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="horizontal-firstname-input"
                                    class="col-sm-3 col-form-label text-center fst-italic fw-bold">Nombre:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nombre" required class="form-control"
                                        id="horizontal-firstname-input" placeholder="Enter Your ">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input"
                                    class="col-sm-3 col-form-label text-center fst-italic fw-bold">Apellido:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="apellido" required class="form-control"
                                        id="horizontal-firstname-input" placeholder="Enter Your ">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-email-input"
                                    class="col-sm-3 col-form-label text-center fst-italic fw-bold">Email:</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" required class="form-control"
                                        id="horizontal-email-input" placeholder="Enter Your Email ID">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-password-input"
                                    class="col-sm-3 col-form-label text-center fst-italic fw-bold">Password:</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" required class="form-control" id="password"
                                        placeholder="Enter Your Password">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-password-input"
                                    class="col-sm-3 col-form-label text-center fst-italic fw-bold">Validar
                                    Password:</label>
                                <div class="col-sm-9">
                                    <input type="password" name="confirmar_password" required class="form-control mt-3"
                                        id="confirmar_password" placeholder="Enter Your Password">
                                    <div id="error_confirmar_password" style="color: red; display: none;">Las
                                        contraseñas no coinciden.</div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-password-input"
                                    class="col-sm-3 col-form-label text-center fst-italic fw-bold">Ciudades:</label>
                                <div class="col-sm-9">
                                    <select name="ciudad_id" id="ciudad_id" required class="form-select">
                                        <option value="">Seleciona una ciudad</option>
                                        @foreach ($ciudades as $ciudad)
                                            <option value="{{ $ciudad->id }}">{{ $ciudad->nombre_ciudad }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <button type="submit"
                                        class="btn btn-primary w-md fst-italic fw-bold">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
        </div>
    </div>
    @if (session('message_error'))
        <div class="alert alert-warning mt-2"><i class="fas fa-exclamation-triangle m-2"></i>{{session('message_error')}}
        </div>
    @endif
    <script defer type="text/javascript">
        function validarPasswords() {
            var pass = document.getElementById("password").value;
            var repass = document.getElementById("confirmar_password").value;

            if (pass !== repass) {
                alert("Las contraseñas no coinciden");
                return false; // Evita el envío del formulario
            }
            return true; // Permite el envío del formulario
        }

        document.getElementById("frm").onsubmit = function () {
            return validarPasswords();
        };
    </script>
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
</body>
@endsection