@extends('Layouts.menu_admin')
@section('title')
Proyecto - Libreria -lista de libros
@endsection

@section('content')
<div class="container">
    <h2 class="card-title text-center pt-5 fst-italic">Libros disponibles</h2>

    <div class="row mx-auto mt-4 justify-content-center align-items-center d-flex">
        @foreach ($books as $book)
            <div class="col-lg-6">
                <div class="col-xl-12 shadow-lg p-4 mb-5 mx-2 h-50 mw-100">
                    <div class="card-body m-3">
                        <img class="img-top img-fluid mb-3 mx-auto d-block rounded" src="/img/imagenLibros/{{$book->imagen}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title fst-italic">{{$book->titulo_libro}}</h5>
                            <p class="card-text">{{$book->descripcion}}</p>
                            <strong><span class="fst-italic">Fecha de publicacion:
                                    {{$book->fecha_publicacion}}</span></strong>
                            <strong><span class="fst-italic">Categoria: {{$book->nombre_categoria}}</span></strong>
                            <div class="d-flex">
                                <form action="{{route('admin.editBook', $book->id)}}" method="GET" class="mt-3 mx-2">
                                    <button type="submit"
                                        class="fw-bold fst-italic btn btn-success waves-effect waves-light">
                                        <i class="far fa-edit"></i> Editar
                                    </button>
                                </form>
                                <form action="{{url('/admin/eliminar/libro', $book->id)}}" method="POST" class="mt-3 mx-2">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" id="btnMostrarLibro"
                                        class="fw-bold fst-italic btn btn-danger waves-effect waves-light">
                                        <i class="far fa-trash-alt"></i> Eliminar
                                    </button>
                                </form>
                                <button type="button" value="{{$book->id}}"
                                    class="btn-preview mt-3 mx-2 fw-bold fst-italic btn btn-success waves-effect waves-light">
                                    <i class="far fa-eye"></i> Preview
                                </button>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
        @endforeach
        <!-- end col -->
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="bookModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookModalLabel">Detalles del Libro</h5>
                </button>
            </div>
            <div class="modal-body">
                <label class="fw-bold fst-italic">Titulo del libro</label>
                <h5 id="modalBookTitle"></h5>
                <label class="fw-bold fst-italic">Contenido</label>
                <p id="modalBookContenido"></p>
                
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        $('.btn-preview').click(function () {
            var bookId = $(this).val();
            var books = @json($books);

            var selectedBook = books.find(b => b.id == bookId);

            $('#modalBookTitle').text(selectedBook.titulo_libro);
            $('#modalBookContenido').text(selectedBook.contenido);
            $('#bookModal').modal('show');
        });
    });
</script>
@endsection