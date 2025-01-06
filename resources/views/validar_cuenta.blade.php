<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de cuenta</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h3 class="fst-italic fw-bold">Validación de cuenta</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('validarCorreo')}}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="email" class="form-control mb-2" name="email" required placeholder="Ingresa tu correo">
                            <button type="submit" value="1" name="btn" class="btn btn-primary btn-block">Validar
                                cuenta</button>
                        </form>
                    </div>
                </div>
                @if (session('message_ok'))
                    <div class="alert alert-success mt-2">
                        <i class="fas fa-check m-2"></i>{{session('message_ok')}}
                    </div>
                @endif
                @if (session('message_error'))
                    <div class="alert alert-warning mt-2">
                        <i class="fas fa-exclamation-circle m-2"></i>{{session('message_error')}}
                    </div>
                @endif

            </div>
        </div>
    </div>
    </div>
    <!-- Enlace a Bootstrap JS y dependencias de jQuery y Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>