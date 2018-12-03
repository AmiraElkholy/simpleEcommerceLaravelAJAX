<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Hello World!</title>
    </head>
    <style>
        h1 {
            margin: 200px auto;
            text-align: center;
        }
        h1 span {
            color: lime;
        }
        .smile {
            color: yellow;
        }
    </style>
    <body>
        @php
            $user =  Auth::user();
        @endphp
        <h1>Hello, <span><?= isset($user) ? $user->name: 'stranger';?></span> and welcome to my project <span class="smile">:)</span> !</h1>
    </body>
</html>
