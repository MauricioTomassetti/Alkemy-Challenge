@extends('home')

@section('content')
<div class="container">
    <form method="POST" action="{{route('posts.update', $post->id)}}" >
      @csrf
      @method('PATCH')
          <div class="form-group @error('title') has-danger" @enderror>
            <label class="form-control-label" for="title">Titulo</label>
            <input type="text" name="title" placeholder="Ingrese un titulo" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" required>
            @error('title')
            <p class="invalid-feedback">{{$errors->first('title')}}</p>
            @enderror
        </div>
        <div class="form-group @error('content') has-danger" @enderror>
            <label class="form-control-label" for="content">Contenido</label>
            <textarea type="text" name="content" placeholder="Ingrese un contenido" class="form-control @error('content') is-invalid @enderror" value="{{old('content')}}" required></textarea>
            @error('title')
            <p class="invalid-feedback">{{$errors->first('content')}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Post</button>
      </form>
    </div>
@endsection