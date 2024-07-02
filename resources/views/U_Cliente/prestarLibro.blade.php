@extends('Layouts.menu_cliente')

@section('title')
Libreria
@endsection

@section('content')
<form action="{{url('/user/book/loan')}}" method="POST">
    @csrf

</form>
@endsection