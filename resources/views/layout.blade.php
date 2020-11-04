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
        @yield ('header')
            @yield ('content')
        @yield ('footer')
    </body>
    <!-- Scripts Js for Bootstrap -->
</html>
