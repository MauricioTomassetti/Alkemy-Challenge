@extends ('home')

@section ('content')
<div class="container">
    <div class="blog-post">
        <h2 class="blog-post-title">{{$post->title}}</h2>
        <hr>
        <div class="row">
            <div class="col">
                <img class="img-thumbnail" src="{{asset('/storage/' . $post->image)}}" alt="{{$post->title}}"
                    style="height: 100%; width:100%">
            </div>
            <div class="col">
                <blockquote class="blockquote">
                    <p class="mb-0">{{$post->content}}</p>
                    <hr>
                    <footer class="blockquote-footer">Categoria de post: <cite title="Category">{{$category}}</cite>
                    </footer>
                    <footer class="blockquote-footer">Fecha de creacion: <cite
                            title="Date">{{$post->created_at->format('d/m/Y')}}</cite></footer>
                </blockquote>
                <a class="nav-link  btn btn-lg btn-outline-primary mt-2" href="{{route('posts.index')}}">Volver al listado de posts</a>
            </div>
        </div>
        <p class="blog-post-meta">{{$post->create_at}}</p>
    </div>
</div>
@endsection
