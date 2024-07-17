<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de Contraseña</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container py-5">
        @foreach ($user as $item)
            <div class="card shadow-lg mt-5 col-lg-6 mx-auto">
                <div class="card-body p-5">
                    <h2 class="fst-italic text-center mb-4">Hola, {{$item->nombre}}</h2>
                    <h4 class="fst-italic fw-bold mb-3">Ingresa tu nueva contraseña</h4>
                    <form action="{{route('uploadPassword', $item->id)}}" method="POST" id="frm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="fst-italic fw-bold">Contraseña:</label>
                            <input class="form-control" required name="password" id="password" type="password"
                                placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="fst-italic fw-bold">Verificar Contraseña:</label>
                            <input class="form-control" required name="confirmar_password" id="confirmar_password"
                                type="password" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 w-100">
                            Guardar
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
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
</body>

</html>