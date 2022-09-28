<?php
include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/style1.css">

    <title>Login - Admin</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <img src="../css/images/logo-dark-2.png" alt="Logo Bravo4Fun">
            <h1>Faça seu login<br>E controle sua plataforma de forma simples</h1>
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <form Action="logar.php" method="POST">
                    <div class="textfield">
                        <label for="email"> Email </label>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="textfield">
                        <label for="senha"> Senha </label>
                        <input type="password" name="senha" placeholder="Senha" required>
                    </div>
                    <input type="submit" class="btn-login" value="Login">
                </form>
            </div>
        </div>
    </div>
</body>
</html>