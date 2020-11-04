@extends ('layout')

@section ('content')
<div class="container">
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">World</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">Ver Nuestros Posts</a>
                    </h3>
                    <p class="card-text mb-auto">Aqui podras ver todas los posts de nuestros usuarios</p>
                </div>
                {{-- <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap"> --}}
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Design</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">Agregar un Post</a>
                    </h3>
                    <p class="card-text mb-auto">Aqui podras agregar el Post que deseas.</p>
                </div>
                {{-- <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap"> --}}
            </div>
        </div>
    </div>
</div>
@endsection
