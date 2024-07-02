@extends('Layouts.menu_admin')

@section('title')
Libreria
@endsection

@section('content')
@if (session('message_error'))
    <script>
        alert("{{ session('message_error') }}");
    </script>
@endif
<h1>Vista para el administrador</h1>
@endsection