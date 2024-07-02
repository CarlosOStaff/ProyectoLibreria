@extends('Layouts.app')

@section('title')
Libros
@endsection

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/lend_book')}}">Prestar libro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mis devolu</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<div class="card-body">

    <h4 class="card-title">Mis libros prestados</h4>
    <div class="col-sm-12">
        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline"
            role="grid" aria-describedby="datatable_info" style="width: 1013px;">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                        style="width: 159px;" aria-sort="ascending"
                        aria-label="Name: activate to sort column descending">Libro</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                        style="width: 242px;" aria-label="Position: activate to sort column ascending">Descripcion</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                        style="width: 52px;" aria-label="Age: activate to sort column ascending">Categoria</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                        style="width: 81px;" aria-label="Salary: activate to sort column ascending">Fecha del prestamo
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                        style="width: 81px;" aria-label="Salary: activate to sort column ascending">
                    </th>
                </tr>
            </thead>
            @foreach ($booksLoan as $bookLoan)
                <tbody>
                    <td> {{ $bookLoan->titulo_libro }} </td>
                    <td> {{ $bookLoan->descripcion }} </td>
                    <td> {{ $bookLoan->nombre_categoria }} </td>
                    <td> {{ $bookLoan->fecha_prestamo }}</td>
                    <td>
                        <form action="{{route('lend.destroy', $bookLoan->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit"> devolver</button>
                        </form>

                    </td>
                </tbody>
            @endforeach

        </table>
    </div>
</div>
@endsection