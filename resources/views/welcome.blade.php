<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>ConuntDount</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css" type="text/css">
    </head>
    <body>
    <body>
    <div>
        welcome blade
    </div>
    <div id="app">
        <main-layout></main-layout>
    </div>
    <div id="app">
        <welcome></welcome>
    </div>
    <script type="text/javascript" src="{{mix('js/app.js')}}"></script>

    </body>
    </body>
</html>