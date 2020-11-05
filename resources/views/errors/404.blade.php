@extends('home')

@section('content')
<div class="error">
	<h1 class="h1-404">{{ $exception->getStatusCode() }}</h1>
	<p class="p-404">Quizas te has perdido</p>
	<p class="smaller">El sitio que estas buscando no existe o no se encuentra disponible</p>
	<a href="{{route('posts.index')}}"><div class="cta-button">Volver al inicio</div></a>
</div>
@endsection