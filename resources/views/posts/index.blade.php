@extends ('layout')

@section ('content')
<div class="container">
    <main role="main">
        <div class="row">
            <div class="col-md-10 blog-main">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                    Nuestros Post
                </h3>
            </div>
        </div>
    </main>
    @forelse ($posts as $post)
    <div class="blog-post">
        <h2 class="blog-post-title">Sample blog post</h2>
        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
    </div>
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary mr-2" href="#">Leer</a>
        <a class="btn btn-outline-warning mr-2" href="#">Actualizar</a>
        <a class="btn btn-outline-danger mr-2" href="#">Eliminar</a>
    </nav>
    <hr>
    @empty
    <h2 class="blog-post-title">No hay posts para mostrar</h2>
    @endforelse
</div>
@endsection
</div>
