@extends ('home')

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
        <h2 class="blog-post-title text-center">{{$post->title}}</h2>
        <div class="container">
        <div class="row">
            <div class="col">
                <img class="img-thumbnail" src="{{asset('/storage/' . $post->image)}}" alt="{{$post->title}}">
            </div>
            <div class="col">
                <nav class="nav flex-column">
                    <form method="POST" action="{{route('posts.destroy',$post->id)}}">
                        <a class="nav-link active btn btn-lg btn-outline-primary mt-2" href="{{ $post->path() }}">Leer</a>
                        <a class="nav-link  btn btn-lg btn-outline-warning mt-2" href="{{route('posts.edit',$post->id)}}">Actualizar</a>
                        @csrf
                       @method('DELETE')
                        <button type="submit" class="btn btn-lg btn-outline-danger mr-2 mt-2" style="width:100%">Eliminar</button>
                    </form>
                </nav>
            </div>
        </div>
    </div>
        <p class="blog-post-meta">{{$post->create_at}}</p>
    </div>
    <hr>
    @empty
    <h2 class="blog-post-title">No hay posts para mostrar</h2>
    @endforelse
</div>
@endsection
