<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/auth.css">
    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/error_message.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form action="?class=User&action=login" method="post" required>
            <div class="form-control">
                <label for="email">Email</label>
                <input placeholder="email *" type="email" name="email" id="email" required>
            </div>
            <div class="form-control">
                <label for="password">Senha</label>
                <input placeholder="password *" type="password" name="password" id="password" required>
            </div>
            <button type="submit">Entrar!</button>
            <div class="vocative">
                <span>Ainda não possui uma conta?</span>
                <a href="?view=signup">faça o seu cadastro!</a>
            </div>
        </form>
    </div>
</body>

</html>