<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h3>Recuperar Contraseña</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('forgotPassword')}}">
                            <div class="form-group">
                                <label for="email">Correo Electrónico</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Introduce tu correo electrónico">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Enviar Enlace de
                                Recuperación</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session('message_ok'))
        <div class="alert alert-primary">{{session('message_ok')}}</div>
    @endif
    @if (session('message_error'))
        alert("{{session('message_error')}}");
    @endif
    </div>
    <!-- Enlace a Bootstrap JS y dependencias de jQuery y Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>