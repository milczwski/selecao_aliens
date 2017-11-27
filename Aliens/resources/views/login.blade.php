<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aliens - Login</title>

    </head>
    <body>

        <form method="post" action="{{'/home'}}">
            <p> E-mail </p> 
            <br />
            <input type="text" name="login" />
            <p> Senha </p> 
            <br />
            <input type="password" name="senha" />
            <br />
            <input type="submit" name="Entrar" value="Entrar"/>
        </form>

        <a href="register">Clique aqui para se cadastrar</a>

    </body>
</html>
