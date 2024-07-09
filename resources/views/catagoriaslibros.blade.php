<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de libros por categoria</title>
    <!-- Incluir los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped-columns mb-0">
                    <thead>
                        <tr>
                            <th class="w-50">Categorias</th>
                            <th class="w-50">Libros por categorias</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $item)
                            <tr>
                                <td>{{$item->nombre_categoria}}</td>
                                <td>{{$item->total_libros}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>


    <!-- Incluir el script de Bootstrap (opcional, si necesitas componentes de JavaScript) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>