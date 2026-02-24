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
</head>

<body>
    <div class="login-container">
        <div style="text-align: center; margin-bottom: 10px;">
            <img src="img/bitcoin.png" style="width: 120px;">
        </div>
        <h1>Login</h1>



        <form method="POST" action="../Controller/login.php">
            
            <?php
            if (isset($_SESSION['nao_autenticado'])) :
            ?>
                <div class="notification is-danger">

                    <SCRIPT LANGUAGE='JavaScript'>
                        window.alert('Usuário ou senha inválidos! Tente novamente!')
                        window.location.href = '#';
                    </SCRIPT>



                </div>
            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>

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
        <h6 style="margin-top: 10px; color:#555">É sua primeira vez aqui? <a href="cadastro.php" class="link">Cadastre-se</a></h6>
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