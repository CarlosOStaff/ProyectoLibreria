<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
</head>

<body class="overflow-x-hidden">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link text-white fst-italic fw-bold" href="{{ url('/cliente/home') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fst-italic fw-bold" href="{{ route('user.listBooks') }}">Mis
                        libros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fst-italic fw-bold" href="{{ route('logout') }}">Logout</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto text-center">
                @php
                    $user = auth()->user();
                @endphp
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-white fw-bold" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/img/users/perfil/{{ $user->img_perfil }}"
                            class="mh-25 mw-25 h-25 w-25 mx-1 px-3 rounded-circle" id="profileImage">
                        {{ $user->nombre }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('cliente.edit') }}">Mi cuenta</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>Footer</p>
    </div>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        function updateProfileImage() {
            fetch('{{ route('cliente.edit') }}')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('profileImage').src = '/img/users/perfil/' + data.img_perfil;
                })
                .catch(error => console.error('Error:', error));
        }
        // Actualizar la imagen del perfil cada 5 segundos
        setInterval(updateProfileImage, 5000);
    });
</script>

</html>