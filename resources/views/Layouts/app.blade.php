<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/app.css" />
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fst-italic text-white fw-bold" href="{{url('/')}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fst-italic text-white fw-bold" href="{{url('/inicio_session')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fst-italic text-white fw-bold" href="{{route('newUser')}}">Registrate</a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="flex-grow-1">
        <div class="container mt-4 mb-4">
            @yield('content')
        </div>
    </main>

    <footer class="footer mt-auto  py-3 bg-dark text-white">
        <div class="container text-center">
            <p>Footer</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>