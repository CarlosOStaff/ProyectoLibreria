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

        .titulo {
            text-align: center;
            padding-top: 3vw;
            padding-bottom: 3vw;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/cliente/home')}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.listBooks')}}">Mis libros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('cliente.edit')}}">Mi cuenta</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>Footer</p>
    </div>
</body>

</html>