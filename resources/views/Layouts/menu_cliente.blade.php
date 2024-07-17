<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/app.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }

        .titulo {
            text-align: center;
            padding-top: 3vw;
            padding-bottom: 3vw;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid ">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link text-white fst-italic fw-bold" href="{{url('/cliente/home')}}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white fst-italic fw-bold" href="{{route('user.listBooks')}}">Mis libros</a>
            </li>
            <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link text-white fst-italic fw-bold">Logout</a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            @php
                $user = $_SESSION['cliente'];
                echo '<li class="nav-item dropdown">';
                    echo '<a href="#" class="nav-link dropdown-toggle text-white fw-bold" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
                    echo '<i class="fas fa-user mx-2"></i>' . $user->nombre;
                    echo '</a>';
                    echo '<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">';
                    echo '<li><a class="dropdown-item" href="' . route('cliente.edit') . '">Mi cuenta</a></li>';
                    echo '</ul>';
                    echo '</li>';
            @endphp
        </ul>
    </div>
</nav>


    @yield('content')

    <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>Footer</p>
    </div>
</body>

</html>