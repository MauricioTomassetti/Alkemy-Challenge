@extends('home')

@section('content')
<div class="container">
<form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data" >
  @csrf
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
    <div class="form-group @error('category') has-danger" @enderror>
        <label for="category">Seleccione una Categoria</label>
        <select name="category" class="form-control @error('category') is-invalid @enderror">
          @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
        @error('category')
          <p class="invalid-feedback">{{$errors->first('category')}}</p>
        @enderror
      </div>
    <div class="form-group @error('image') has-danger" @enderror>
        <label for="image">Seleccione una imagen</label>
        <input id="image" type="file" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}" >
        @error('image')
        <p class="invalid-feedback">{{$errors->first('image')}}</p>
     @enderror
      </div> 
    <button type="submit" class="btn btn-primary">Agregar Post</button>
  </form>
</div>
@endsection


