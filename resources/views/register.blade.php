<!DOCTYPE html>
<html lang="es">

<head>
    <title>Proyecto - Libreria</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/app.css" />

</head>

<body>
    <div class="container">
        <h2 class="text-center fst-italic fw-bold mt-3 mb-3">Registrate para poder ver nuestros catalogos de libros</h2>
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-6 shadow-lg mt-4 p-4 rounded-4">
                <div class="">
                    <div class="card-body">
                        <h3 class="card-title mb-4 text-center fst-italic fw-bold">Ingresa tus datos personales</h3>

                        <form action="{{url('/registro/usuario')}}" method="POST">
                            @csrf
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input"
                                    class="col-sm-3 col-form-label fst-italic fw-bold text-end">Nombre:</label>
                                <div class="col-sm-9">
                                    <input type="text" required name="nombre" class="form-control"
                                        id="horizontal-firstname-input" placeholder="Enter Your ">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input"
                                    class="col-sm-3 col-form-label fw-bold fst-italic text-end">Apellidos:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="apellido" required class="form-control"
                                        id="horizontal-firstname-input" placeholder="Enter Your ">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-email-input"
                                    class="col-sm-3 col-form-label fw-bold fst-italic text-end">Email:</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" required class="form-control"
                                        id="horizontal-email-input" placeholder="Enter Your Email ID">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-password-input"
                                    class="col-sm-3 col-form-label fw-bold fst-italic text-end">Password:</label>
                                <div class="col-sm-9">
                                    <input type="password" required name="password" class="form-control"
                                        id="horizontal-password-input" placeholder="Enter Your Password">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="formrow-inputState"
                                    class="col-sm-3 col-form-label text-end fst-italic fw-bold">Ciudades:</label>
                                <div class="col-sm-9">
                                    <select name="ciudad_id" id="ciudad_id" class="form-select">
                                        <option value="">Selecciona una ciudad</option>
                                        @foreach ($ciudades as $ciudad)
                                            <option value="{{ $ciudad->id }}">{{ $ciudad->nombre_ciudad }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row justify-content-end mt-3 mx-1">
                                    <div class="col-sm-9">
                                        <div>
                                            <button type="submit"
                                                class="btn btn-primary w-md fst-italic fw-bold">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
                @if (session('message_cliente_ok'))
                    <div class="alert alert-primary">{{session('message_cliente_ok')}}</div>
                @endif
            </div>
        </div>
    </div>
</body>

</html>