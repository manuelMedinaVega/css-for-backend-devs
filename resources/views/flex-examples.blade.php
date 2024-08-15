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
        <div class="border-b py-8">
            <h1 class="mb-6 text-gray-400 text-sm font-bold tracking-wide uppercase">
                Instant navigation
            </h1>

            <nav class="bg-blue-300 py-4 px-4 flex justify-between">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Mission</a>
                <a href="#">Contact</a>
            </nav>
        </div>

        <div class="border-b py-8">
            <h1 class="mb-6 text-gray-400 text-sm font-bold tracking-wide uppercase">
                Split nav
            </h1>

            <nav class="bg-blue-300 py-4 px-4 flex justify-between">
                <div>
                    <a href="#">Home</a>
                    <a href="#">About</a>
                </div>
                <div>
                    <a href="#">Mission</a>
                    <a href="#">Contact</a>
                </div>
            </nav>
        </div>

        <div class="border-b py-8">
            <h1 class="mb-6 text-gray-400 text-sm font-bold tracking-wide uppercase">
                Align image with text
            </h1>

            <div class="flex items-center">
                <img src="http://via.placeholder.com/350x150" class="mr-4">

                <div>
                    <h3 class="mb-4">My trip to ...</h3>

                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti maxime 
                        repudiandae nostrum dolores laboriosam illum cumque eius praesentium cum!
                    </p>
                </div>
            </div>
        </div>

        <div class="border-b py-8">
            <h1 class="mb-6 text-gray-400 text-sm font-bold tracking-wide uppercase">
                Perfectly centered text
            </h1>

            <div class="bg-gray-400 p-6 w-3/4 h-64 flex items-center justify-center">
                <div class="w-64">
                    <h3 class="mb-4">Flexbox is amazing</h3>

                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti maxime 
                        repudiandae nostrum!
                    </p>
                </div>
            </div>
        </div>

        <div class="border-b py-8">
            <h1 class="mb-6 text-gray-400 text-sm font-bold tracking-wide uppercase">
                Sticky footer
            </h1>

            <div>
                <a href="/sticky-footer" target="_blank">Click me</a>
            </div>
        </div>
    </body>

</html>
