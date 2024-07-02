@extends('Layouts.app')

@section('title')
Libros
@endsection

@section('content')

<div class="col-xl-6">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">Datos del usuario</h4>
            <form action="{{route('user.store')}}" method="POST">
                @csrf
                <div class="row mb-4">
                    <label for="horizontal-firstname-input" name="nombre" class="col-sm-3 col-form-label">First
                        name</label>
                    <div class="col-sm-9">
                        <input type="text" name="nombre" value="" class="form-control" id="horizontal-firstname-input"
                            placeholder="Enter Your ">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="horizontal-firstname-input" name="apellido"
                        class="col-sm-3 col-form-label">Apellido</label>
                    <div class="col-sm-9">
                        <input type="text" name="apellido" value="" class="form-control" id="horizontal-firstname-input"
                            placeholder="Enter Your ">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" value="" name="email" class="form-control" id="horizontal-email-input"
                            placeholder="Enter Your Email ID">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Contraseña</label>
                    <div class="col-sm-9">
                        <input type="password" value="" name="password" class="form-control"
                            id="horizontal-email-input">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formrow-inputState" class="form-label">Ciudad</label>
                    <select name="ciudad_id" id="">
                        <option value="">select...</option>
                        @foreach ($catalogues as $catalogue)
                            <option name="ciudad_id" value="{{$catalogue->id}}">{{$catalogue->nombre_ciudad}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formrow-inputState" class="form-label">Estados</label>
                    <select name="estado_id" id="">
                        <option>select...</option>
                        @foreach ($catalogues as $catalogue)
                            <option value="{{$catalogue->estado_id}}">{{$catalogue->nombre_estado}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formrow-inputState" class="form-label">Estados</label>
                    <select name="" id="">
                        <option value="">select...</option>
                        @foreach ($catalogues as $catalogue)
                            <option value="{{$catalogue->pais_id}}">{{$catalogue->nombre_pais}}</option>
                        @endforeach
                    </select>
                </div>
        </div>

        <div>
            <button type="submit" class="btn btn-primary w-md">Submit</button>
        </div>
    </div>
</div>
</form>
</div>
<!-- end card body -->
</div>
<!-- end card -->
</div>
@endsection