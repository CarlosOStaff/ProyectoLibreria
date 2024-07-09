<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="container p-5">
    @foreach ($user as $item)
        <div class="body-card shadow-lg mt-5 col-7 p-5 rounded-5 d-block mx-auto align-items-center">
            <h2 class="fst-italic text-center">Hola {{$item->nombre}}</h2>
    @endforeach
        <div class="row justify-content-center">
            <div class="col-8">
                <h4 class="fst-italic fw-bold">Ingresa tu nueva contraseña</h4>
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <label class="fst-italic fw-bold">Contraseña:</label>
                    <input class="forn-control" type="password" placeholder="1234567">
                    <button>
                        Guardar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>