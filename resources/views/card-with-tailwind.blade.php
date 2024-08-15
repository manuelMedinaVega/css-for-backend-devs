<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CSS for Backend Developers</title>

        <script src="https://cdn.tailwindcss.com"></script>

        <link rel="stylesheet" href="/css/card-with-tailwind.css" >

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    </head>

    <body class="flex items-center justify-center">
        <div class="card flex rounded">
            <!-- left side -->
            <div class="card-left flex flex-col justify-between rounded p-6 items-center text-center text-white">
                <a class="card-skill-button no-underline text-xs rounded-full py-1 px-6 text-inherit" href="#">PHP</a>

                <img width="50px" src="images/tools.png">

                <span class="text-sm">Intermediate Difficulty</span>
            </div>

            <!-- right side -->
            <div class="card-right flex flex-col text-gray-400 p-6">
                <h3 class="card-title text-gray-900 font-light text-3xl mb-3">
                    <a href="#" class="no-underline text-inherit">Testing Jargon</a>
                </h3>

                <p class="flex-1">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus consequuntur, 
                    fuga modi nostrum culpa cum ullam placeat autem dolore quis obcaecati!
                </p>

                <div class="flex text-sm">
                    <div class="flex items-center mr-4">
                        <img class="mr-2" width="20px" src="/images/books.png"> 
                        5 Lessons
                    </div>

                    <div class="flex items-center">
                        <img class="mr-2" width="20px" src="/images/clock.png">
                        53:10 min 
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
