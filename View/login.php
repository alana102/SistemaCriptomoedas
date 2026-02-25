<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login-cadastro.css">
    <link rel="stylesheet" href="css/avisos.css">
    <link rel="icon" href="img/icons/login.png" type="image/png">
  
</head>

<body>
    <div class="login-container">
        <div style="text-align: center; margin-bottom: 10px;">
            <img src="img/bitcoin.png" style="width: 120px;">
        </div>
        <h1>Login</h1>

        <?php if (isset($_SESSION['sucesso'])): ?>
            <div class="notification is-success">
                <?= $_SESSION['sucesso'] ?>
            </div>
        <?php
            unset($_SESSION['sucesso']);
        endif; ?>

        <?php if (isset($_SESSION['erro'])): ?>
            <div class="notification is-danger">
                <?= $_SESSION['erro']  ?>
            </div>
        <?php
            unset($_SESSION['erro']);
        endif; ?>



        <form method="POST" action="../Controller/login.php">



            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="senha">Senha:</label>
                <div style="display: flex; gap: 5px; align-items: center;">
                    <input type="password" id="senha" name="senha" required style="width: 300px;">
                    <button type="button" onclick="togglePassword()" style="border-radius:30px; width: 45px; display: flex; align-items: center; justify-content: center;"><img src="img/eye.png" style="width:20px"></button>
                </div>
            </div>

            <button type="submit">Entrar</button>
        </form>
        <h5 style="margin-top: 10px; color:#555">É sua primeira vez aqui? <a href="cadastro.php" class="link">Cadastre-se</a></h5>
    </div>


    <script>
        function togglePassword() {
            const senha = document.getElementById("senha");

            if (senha.type === "password") {
                senha.type = "text";
            } else {
                senha.type = "password";
            }
        }
    </script>
</body>

</html>