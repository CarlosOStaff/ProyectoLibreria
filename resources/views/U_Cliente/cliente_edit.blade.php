@extends('Layouts.menu_cliente')

@section('title')
Libreria
@endsection

@section('content')
<div class="row" style="display: flex; justify-content: center;padding-top:3vw;">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 fst-italic fw-bold">Mis datos</h4>
                @foreach ($usuario as $item)
                    <form action="{{route('cliente.update', $item->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-firstname-input"
                                        class="form-label fst-italic fw-bold">Nombre(s)</label>
                                    <input type="text" name="nombre" class="form-control" id="formrow-firstname-input"
                                        placeholder="Mario" value="{{$item->nombre}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-firstname-input"
                                        class="form-label fst-italic fw-bold">Apellidos</label>
                                    <input type="text" name="apellido" class="form-control" id="formrow-firstname-input"
                                        placeholder="Perez" value="{{$item->apellido}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label fst-italic fw-bold">Email</label>
                                    <input type="email" class="form-control" name="email" id="formrow-email-input"
                                        placeholder="Enter Your Email ID" value="{{$item->email}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-password-input"
                                        class="form-label fst-italic fw-bold">Password</label>
                                    <input type="password" name="password" class="form-control" id="formrow-password-input"
                                        placeholder="Enter Your Password" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-inputCity" class="form-label fst-italic fw-bold">Ciudad</label>
                                    <select id="formrow-inputState" name="ciudad_id" class="form-select">
                                        <option selected="">Seleccionar...</option>
                                        @foreach ($cities as $city)
                                            <option value="{{$city->id}}">{{$city->nombre_ciudad}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md fst-italic fw-bold">
                                <i class="fas fa-save"></i>Guardar</button>
                        </div>
                    </form>
                @endforeach
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
</div>
@endsection