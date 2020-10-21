<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Button.css') }}">
        <title>Tasks</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
        </style>
    </head>
    <body class="antialiased">
        <div name="menu" id="menu">
            <label class="buttons">
                <a class="btn-hover color-10 menu-btn" href="/task">See All Tasks</a>
            </label>
        </div>
        <div class="task">
            <div class="postit">
                <form action="/task" method="post">
                    <div class="field">
                        <label class="label" for="name">Name</label>

                        <div class="control">
                            <input class="input" type="text" name="name" id="name" placeholder="Task name">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="name">To Do</label>

                        <div class="control">
                            <input class="input" type="text" name="TODO" id="TODO" placeholder="Example: create a landing page">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="name">Is finished?</label>

                        <div class="control">
                            <input type='hidden' value='0' name='is_finished'>
                            <input type="checkbox" name="is_finished" value="1" id="is_finished">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="name">Launch date</label>

                        <div class="control">
                            <input class="input" type="date" name="date_launch" id="date_launch" placeholder="YYYY-MM-DD">
                        </div>
                    </div>


                    <div class="control">
                        <button class="btn-hover color-5" type="submit">Create Task</button>
                    </div>

                </form>
            </div>
        </div>
    </body>
</html>
