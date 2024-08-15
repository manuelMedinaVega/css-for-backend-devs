<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CSS for Backend Developers</title>

        @vite('resources/css/app.scss')
    </head>

    <body class="font-sans p-6">
        <div>
            @include('signup-banner')
        </div>
        
    </body>

</html>
