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

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- CSS/SASS -->
        <link rel="stylesheet" href="/css/normalize.css">
        @yield('css')
    </head>
    <body>
        @yield('content')
        @yield('js')
    </body>
</html>
