<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CSS for Backend Developers</title>

        <link rel="stylesheet" href="/css/normalize.css" >
        <link rel="stylesheet" href="/css/card.css" >

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="card">
            <!-- left side -->
            <div class="card-left">
                <a class="card-skill-button" href="#">PHP</a>

                <img width="50px" src="images/tools.png">

                <span class="card-difficulty">Intermediate Difficulty</span>
            </div>

            <!-- right side -->
            <div class="card-right">
                <h3 class="card-title">
                    <a href="#">Testing Jargon</a>
                </h3>

                <p class="card-excerpt">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus consequuntur, 
                    fuga modi nostrum culpa cum ullam placeat autem dolore quis obcaecati!
                </p>

                <div class="card-meta">
                    <div>
                        <img width="20px" src="/images/books.png"> 
                        5 Lessons
                    </div>

                    <div>
                        <img width="20px" src="/images/clock.png">
                        53:10 min 
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
