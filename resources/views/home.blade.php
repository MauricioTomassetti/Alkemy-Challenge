@extends ('layouts.app')

@section('header')
<header class="blog-header">
    <div class="container-fluid">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark text-center">
                <h1 class="display-4 font-italic">Bienvenido al blog de Alkemy</h1>
                <p class="lead my-3">Aqui podremos ver los post de diferentes tematicas</p>
        </div>
</header>
@endsection

@section ('content')
<div class="container">
    <div class="row mb-2">
        <div class="col-md-6">
        <a href="{{ route('posts.index')}}">
        <div class="card card-home mt-4">
            <img class="card-img-top"  src="{{asset('/images/' . "post-image.png")}}" alt="Card image">
          </div>
            <a class="nav-link active btn btn-lg btn-outline-primary mt-2" href="{{ route('posts.index')}}">Ver Nuestros posts</a>
        </a>
        </div>
        <div class="col-md-6">
            <div class="card card-home mt-4">
                    <img class="card-img-top"  src="{{asset('/images/' . "create-post.png")}}" alt="Card image">
            </div>
             <a class="nav-link active btn btn-lg btn-outline-success mt-2"  href="{{ route('posts.create')}}">Agregar un nuevo Post</a>
        </div>
    </div>
</div>
@endsection

@section('footer')
<footer class="page-footer font-small cyan darken-3">
    <div class="footer-copyright text-center py-3">© Alkemyst Training
      <a href="https://github.com/MauricioTomassetti/Alkemy-Challenge"> Github</a>
    </div>
  </footer>
@endsection
