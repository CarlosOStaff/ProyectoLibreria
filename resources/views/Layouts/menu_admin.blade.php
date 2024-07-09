<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/app.css" />
</head>

<body class="d-flex flex-column vh-100">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold" href="{{url('/admin/home')}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold" href="{{route('admin.edit')}}">Mis cuenta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold" href="{{route('list.users')}}">Usuarios activos</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link text-white fw-bold">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="flex-grow-1">
        <div class="container mt-4 mb-4">
            @yield('content')
        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-dark text-white">
        <div class="container text-center">
            <p>Footer</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
