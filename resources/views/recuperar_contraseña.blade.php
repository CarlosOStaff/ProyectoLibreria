<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h3 class="fst-italic">Recuperar Contraseña</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-6 text-start mb-3">
                            <span class="mx-auto d-block"><a href="{{route('home')}}">Volver al inicio</a></span>
                        </div>
                        <form action="{{route('forgotPassword')}}">
                            <div class="form-group">
                                <label for="email" class="fst-italic fw-bold mb-1">Correo Electrónico</label>
                                <input type="email" required class="form-control" name="email" id="email"
                                    placeholder="Introduce tu correo electrónico">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-2">Enviar Enlace de
                                Recuperación</button>
                        </form>
                    </div>
                </div>
                @if (session('message_ok'))
                    <div class="alert alert-success mt-2"><i class="fas fa-check m-2"></i>{{session('message_ok')}}</div>
                @endif
                @if (session('message_error'))
                    <div class="alert alert-warning mt-2"><i
                            class="fas fa-exclamation-triangle m-2"></i>{{session('message_error')}}</div>
                @endif
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>