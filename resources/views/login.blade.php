<head>
    <title>Proyecto - Libreria</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/app.css" />
</head>

<div class="container">
    <div class="row justify-content-md-center mx-auto mt-5">
        <div class="col col-lg-12">
            <br>
            @if (session('login_error'))
                <script>
                    alert("{{ session('login_error') }}");
                </script>
            @endif

            <div class="col-xl-12 d-flex justify-content-center align-items-center mt-5">
                <div class="col-sm-6 shadow-lg p-4 rounded-4">
                    <div class="card-body">
                        <h4 class="card-title mb-4 text-center fst-italic fw-bold">Login - Libreria</h4>
                        @if (session('error'))
                            <script>
                                alert("{{ session('error') }}");
                            </script>
                        @endif
                        <form action="{{url('/login')}}" method="POST">
                            @csrf
                            <div class="row mb-4">
                                <label for="horizontal-email-input"
                                    class="col-sm-3 col-form-label text-end fw-bold fst-italic">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control" id="horizontal-email-input"
                                        placeholder="Enter Your Email ID">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-password-input"
                                    class="col-sm-3 col-form-label text-end fw-bold fst-italic">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="form-control"
                                        id="horizontal-password-input" placeholder="Enter Your Password">
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-9">

                                    <div>
                                        <button type="submit" class="btn btn-primary w-md fw-bold fst-italic">Iniciar
                                            sesion</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-6 text-center">
                            <span class="mx-auto d-block"><a href="{{route('recuperarContraseña')}}">Recuperar
                                    contraseña</a></span>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
            </div>
        </div>
    </div>