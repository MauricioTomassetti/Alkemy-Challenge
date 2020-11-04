<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alkemy Challenge</title>
    <!-- Styles Bootswatch cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/materia/bootstrap.min.css">
</head>

<body>
    <div class="nav-scroller py-1 mb-2">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <header class="blog-header py-3">
        <div class="container">
            <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 font-italic">Bienvenido al blog de Alkemy</h1>
                    <p class="lead my-3">Aqui podremos ver los post de diferentes tematicas</p>
                </div>
            </div>
    </header>
    @yield ('content')
    <footer class="blog-footer">
        <p>Blog template built for <a href="#">Bootstrap</a> by <a
                href="https://github.com/MauricioTomassetti/Alkemy-Challenge">GitHub Mauricio</a>.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>
</body>

</html>
