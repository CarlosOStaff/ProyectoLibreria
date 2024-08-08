<meta name="csrf-token" content="{{ csrf_token() }}">

<form method="GET" action="{{ route('newlogout') }}">
    @csrf
    <button type="submit">Cerrar sesión</button>
</form>