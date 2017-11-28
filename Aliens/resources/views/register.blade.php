<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aliens - Login</title>

    </head>
    <body>

        <form method="post" action="register">
            <p> Nome </p> 
            <br />
            <input type="text" name="name" />
            <p> Email </p> 
            <br />
            <input type="text" name="email" />
            <p> Senha </p> 
            <br />
            <input type="password" name="password" />
            <p> Confirme sua Senha </p> 
            <br />
            <input type="password" name="password" />
            <br />
            <input type="submit" name="Cadastrar" value="Cadastrar"/>
        </form>
        <a href="/">
            <input type="button" name="Cancelar" value="Cancelar">
        </a>

    </body>
</html>
