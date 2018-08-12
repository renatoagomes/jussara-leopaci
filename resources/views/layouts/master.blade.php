<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Jussara Leopaci</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" href="">

        <!-- CSS/SASS -->
        <link rel="stylesheet" href="/css/normalize.css">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">       
        @yield('css')
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
