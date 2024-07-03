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

<div class="col-xl-6">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">Ingresa los datos del nuevo usuario</h4>

            <form action="{{url('/new-admin')}}" method="POST">
                @csrf
                <div class="row mb-4">
                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">First name</label>
                    <div class="col-sm-9">
                        <input type="text" name="nombre" class="form-control" id="horizontal-firstname-input"
                            placeholder="Enter Your ">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">First name</label>
                    <div class="col-sm-9">
                        <input type="text" name="apellido" class="form-control" id="horizontal-firstname-input"
                            placeholder="Enter Your ">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" class="form-control" id="horizontal-email-input"
                            placeholder="Enter Your Email ID">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" class="form-control" id="horizontal-password-input"
                            placeholder="Enter Your Password">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formrow-inputState" class="form-label">Ciudades</label>
                    <select name="ciudad_id" id="">
                        <option value="">select...</option>
                        @foreach ($ciudades as $ciudad)
                            <option  value="{{$ciudad->id}}">{{$ciudad->nombre_ciudad}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-9">

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