<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aliens - Login</title>
        <style type="text/css">
            .post {
                border-style: solid;
                border-width: 2px;
                border-color: #000;
            }
        </style>
    </head>
    <body>
       
        <a href="new_post">
            <input type="button" name="new_post" value="Criar Post">
        </a>
        <a href="logout">
            <input type="button" name="logout" value="Sair">
        </a>
        {{'Aqui vão os posts'}}

        @foreach ($posts as $post)
        <div class="post">
            <p> {{$post->title}} </p>
            <p> {{$post->content}} </p>
        </div>
        @endforeach
      

    </body>
</html>
