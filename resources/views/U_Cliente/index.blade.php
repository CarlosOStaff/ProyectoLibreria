@extends('Layouts.menu_cliente')

@section('title')
Libreria
@endsection

@section('content')
<div class="container">
    <h1 class="text-center mt-3 mb-3">Bienvenido {{$user}}</h1>
    <div class="row mx-auto mt-4 justify-content-center align-items-center">
        <h3 class="text-center mb-3">Visualiza nuestro catálogo de libros disponibles</h3>
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered table-dark">
                    <thead>
                        <tr>
                            <th scope="col" class="fs-5 text-center">#</th>
                            <th scope="col" class="fs-5 text-center">Portada</th>
                            <th scope="col" class="fs-5 text-center w-25">Título del libro</th>
                            <th scope="col" class="fs-5 text-center">Descripción</th>
                            <th scope="col" class="fs-5 text-center">Categoría</th>
                            <th scope="col" class="fs-5 text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach ($books as $book)
                            <tr>
                                <td class="fs-4">{{$book->id}}</td>
                                <td class=""><img src="/img/imagenLibros/{{$book->imagen}}" alt="" class="img-fluid mw-100 w-100 h-auto"></td>
                                <td class="fs-5">{{$book->titulo_libro}}</td>
                                <td class="fs-5">{{$book->descripcion}}</td>
                                <td class="fs-5">{{$book->nombre_categoria}}</td>
                                <td>
                                    <form action="{{url('/cliente/prestar/libro', $book->id)}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success m-2" aria-label="Eliminar Usuario" title="Eliminar Usuario">
                                            <i class="fas fa-book"> Pedir Prestado</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <ul class="pagination justify-content-center mt-3 pager" id="myPager"></ul>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $.fn.pageMe = function (opts) {
        var $this = this,
            defaults = {
                perPage: 4,
                showPrevNext: true,
                hidePageNumbers: false
            },
            settings = $.extend(defaults, opts);

        var listElement = $this;
        var perPage = settings.perPage;
        var children = listElement.children();
        var pager = $('.pager');

        if (typeof settings.childSelector != "undefined") {
            children = listElement.find(settings.childSelector);
        }

        if (typeof settings.pagerSelector != "undefined") {
            pager = $(settings.pagerSelector);
        }

        var numItems = children.length;
        var numPages = Math.ceil(numItems / perPage);

        pager.data("curr", 0);

        if (settings.showPrevNext) {
            $('<li class="page-item"><a href="#" class="page-link prev_link">«</a></li>').appendTo(pager);
        }

        var curr = 0;
        while (numPages > curr && (settings.hidePageNumbers == false)) {
            $('<li class="page-item"><a href="#" class="page-link page_link">' + (curr + 1) + '</a></li>').appendTo(pager);
            curr++;
        }

        if (settings.showPrevNext) {
            $('<li class="page-item"><a href="#" class="page-link next_link">»</a></li>').appendTo(pager);
        }

        pager.find('.page_link:first').addClass('active');
        pager.find('.prev_link').hide();
        if (numPages <= 1) {
            pager.find('.next_link').hide();
        }
        pager.children().eq(1).addClass("active");

        children.hide();
        children.slice(0, perPage).show();

        pager.find('li .page_link').click(function () {
            var clickedPage = $(this).html().valueOf() - 1;
            goTo(clickedPage, perPage);
            return false;
        });
        pager.find('li .prev_link').click(function () {
            previous();
            return false;
        });
        pager.find('li .next_link').click(function () {
            next();
            return false;
        });

        function previous() {
            var goToPage = parseInt(pager.data("curr")) - 1;
            goTo(goToPage);
        }

        function next() {
            goToPage = parseInt(pager.data("curr")) + 1;
            goTo(goToPage);
        }

        function goTo(page) {
            var startAt = page * perPage,
                endOn = startAt + perPage;

            children.css('display', 'none').slice(startAt, endOn).show();

            if (page >= 1) {
                pager.find('.prev_link').show();
            }
            else {
                pager.find('.prev_link').hide();
            }

            if (page < (numPages - 1)) {
                pager.find('.next_link').show();
            }
            else {
                pager.find('.next_link').hide();
            }

            pager.data("curr", page);
            pager.children().removeClass("active");
            pager.children().eq(page + 1).addClass("active");
        }
    };

    $(document).ready(function () {
        $('#myTable').pageMe({ pagerSelector: '#myPager', showPrevNext: true, hidePageNumbers: false, perPage: 4 });
    });
</script>
@endsection
