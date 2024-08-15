<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CSS for Backend Developers</title>

        <script src="https://cdn.tailwindcss.com"></script>

        <link rel="stylesheet" href="/css/app_og.css" >

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    </head>

    <body class="container mx-auto">
        <div id="root" class="bg-red-200 min-h-screen flex flex-col">
            <header class="bg-blue-400 p-8 mb-6">
                <h1>My website</h1>
            </header>

            <main class="w-3/4 flex-1">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore laboriosam a at 
                    voluptas iure itaque. Minima ab suscipit perspiciatis reprehenderit doloribus 
                    consequuntur, libero quaerat odio, expedita ad est eveniet ex?
                </p>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore laboriosam a at 
                    voluptas iure itaque. Minima ab suscipit perspiciatis reprehenderit doloribus 
                    consequuntur, libero quaerat odio, expedita ad est eveniet ex?
                </p>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore laboriosam a at 
                    voluptas iure itaque. Minima ab suscipit perspiciatis reprehenderit doloribus 
                    consequuntur, libero quaerat odio, expedita ad est eveniet ex?
                </p>
            </main>

            <footer class="bg-blue-400 py-8">
                Laracast - 2018
            </footer>
        </div>
    </body>

</html>
