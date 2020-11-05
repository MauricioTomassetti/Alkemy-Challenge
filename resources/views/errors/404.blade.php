@extends('layout')
@section('content')
<div class="container">
    <h1>
        <h1>Recurso no encontrado</h2>
            <h3> El codigo del error es: {{ $exception->getStatusCode() }}</h3>
    </h1>
</div>  
@endsection