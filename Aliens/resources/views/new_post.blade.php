<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aliens - Login</title>

    </head>
    <body>

        <form method="post" action="home">
            <p> Titulo </p> 
            <br />
            <input type="text" name="title" />
            <p> Descrição </p> 
            <br />
            <input type="text" name="content" />
            <br />
            <input type="submit" name="Salvar" value="Criar" />
        </form>
        <a href="home">
            <input type="button" name="Cancelar" value="home">
        </a>

    </body>
</html>
