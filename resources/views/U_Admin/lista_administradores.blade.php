@extends('Layouts.menu_admin')

@section('title')
Proyecto - Libreria
@endsection

@section('content')
<div class="row">
    @foreach ($admins as $admin)
        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="avatar-sm mx-auto mb-4">
                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-16">
                            D
                        </span>
                    </div>
                    <h5 class="font-size-15 mb-1"><a href="javascript: void(0);" class="text-dark">{{$admin->nombre}}</a>
                    </h5>
                    <p class="text-muted">{{$admin->apellido}}</p>

                    <div>
                        <form action="{{route('elimiaradmin', $admin->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger waves-effect waves-light">
                                <i class="fas fa-trash"></i> Eliminar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>
@endsection