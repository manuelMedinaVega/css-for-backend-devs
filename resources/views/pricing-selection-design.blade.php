<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CSS for Backend Developers</title>

        @vite('resources/css/app.css')
    </head>

    <body class="font-sans p-6">
        <div class="container mx-auto"> {{--El div que contendrá los 4 planes--}}
            <div class="flex">
                @include('plan', ['name' => 'Monthly'])

                @include('plan', ['name' => 'Yearly'])

                @include('plan', ['name' => 'Lifetime'])

                @include('plan', ['name' => 'Teams'])
            </div>
        </div>
    </body>

</html>
