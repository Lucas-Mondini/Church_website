<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Tasks</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
        </style>
    </head>
    <body class="antialiased">
        <div class="task">
            @foreach ($tasks as $task)
            <div class="task">
                <div class="postit">
                    <p>id: {{$task->id}}</p>
                    <p>nome: {{$task->name}}</p>
                    <p>A fazer: {{$task->TODO}}</p>
                    <p>terminado: <?php
                            if ($task->is_finished)
                                echo "👍";
                            else
                                echo "👎";
                                ?>
                    </p>
                    <p>data: {{$task->date_launch}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </body>
</html>
