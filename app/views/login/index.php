<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form action="?class=User&action=login" method="post" required>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-control">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Entrar!</button>
            <a href="?view=signup">Ainda não tem uma conta? cadastre-se!</a>
        </form>
    </div>
</body>

</html>