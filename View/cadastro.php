<?php

include "../DAO/conexao.php";
include "../Controller/CUsuario.php";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/login-cadastro.css">
    <link rel="icon" href="img/icons/cadastro.png" type="image/png">
</head>

<body>
    <div class="cadastro-container">
        <div style="text-align: center; margin-bottom: 10px;">
            <img src="img/bitcoin.png" style="width: 120px;">
        </div>
        <h1>Fazer Cadastro</h1>


        <form method="POST" action="../Controller/rotas.php?acao=cadastrar&tipo=usuario">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required value="<?php echo filter_input(INPUT_GET, "nome"); ?>">
            </div>

            <div style="display: flex; gap: 10px;">
                <div class="form-group" style="flex: 1;">
                    <label for="logradouro">Logradouro:</label>
                    <input type="text" id="logradouro" name="logradouro" required value="<?php echo filter_input(INPUT_GET, "logradouro"); ?>">
                </div>

                <div class="form-group" style="flex: 0.3;">
                    <label for="numero">Número:</label>
                    <input type="text" id="numero" name="numero" required value="<?php echo filter_input(INPUT_GET, "numero"); ?>">
                </div>

                <div class="form-group" style="flex: 1;">
                    <label for="bairro">Bairro:</label>
                    <input type="text" id="bairro" name="bairro" required value="<?php echo filter_input(INPUT_GET, "bairro"); ?>">
                </div>
            </div>

            <div style="display: flex; gap: 10px;">
                <div class="form-group" style="flex: 1;">
                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="cidade" required value="<?php echo filter_input(INPUT_GET, "cidade"); ?>">
                </div>

                <div class="form-group" style="flex: 0.3;">
                    <label for="estado">Estado:</label>
                    <input type="text" id="estado" name="estado" required value="<?php echo filter_input(INPUT_GET, "estado"); ?>">
                </div>

                <div class="form-group" style="flex: 0.5;">
                    <label for="cep">CEP:</label>
                    <input type="text" id="cep" name="cep" required value="<?php echo filter_input(INPUT_GET, "cep"); ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="cpf">CPF (apenas números):</label>
                <input type="text" id="cpf" name="cpf" pattern="\d{11}" maxlength="11" required value="<?php echo filter_input(INPUT_GET, "cpf"); ?>">
            </div>

            <div style="display: flex; gap: 10px;">
                <div class="form-group" style="flex: 1;">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required value="<?php echo filter_input(INPUT_GET, "email"); ?>">
                </div>

                <div class="form-group" style="flex: 1;">
                    <label for="senha">Senha:</label>
                    <div style="display: flex; gap: 5px; align-items: center;">
                        <input type="password" id="senha" name="senha" required style="width: 300px;" value="<?php echo filter_input(INPUT_GET, "senha"); ?>">
                        <button type="button" onclick="togglePassword()" style="border-radius:30px; width: 45px; display: flex; align-items: center; justify-content: center;"><img src="img/eye.png" style="width:20px"></button>
                    </div>
                </div>
            </div>

            <button type="submit" value="Registrar">Cadastrar</button>
        </form>
        <h5 style="margin-top: 10px; color:#555">Já tem cadastro? <a href="login.php" class="link">Faça Login</a></h5>
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