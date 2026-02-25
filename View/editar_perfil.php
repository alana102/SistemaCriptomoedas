<?php

include('../Controller/verifica_login.php');
include('../Controller/CUsuario.php');
$usuario = CUsuario::retornarUsuario();

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="img/icons/user.png" type="image/png">

</head>

<body>
    <nav class="navbar">
        <div class="container">
            <h1>CryptoExchange</h1>
            <ul class="nav-links">
                <li><a href="index.php">Início</a></li>
                <li><a href="criptomoedas.php">Criptomoedas</a></li>
                <li><a href="carteira.php">Minha Carteira</a></li>
                <li><a href="perfil.php" style="color:#3c1c00;">Perfil</a></li>
                <li><a href="../Controller/logout.php">Sair</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <header class="hero">
            <h2>Meu Perfil</h2>
            <p>Informações da sua conta</p>
        </header>



        <section class="user-info">
            <h3>Dados Pessoais</h3>
            <form method="POST" action="../Controller/rotas.php?acao=editar&tipo=usuario">
                <div class="form-group">
                    <label>Nome:</label>
                    <input name="nome" value="<?php echo $usuario['usu_nome']; ?>" class="input-editavel">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input name="email" value="<?php echo $usuario['usu_email']; ?>" class="input-editavel">
                </div>
                <div class="form-group">
                    <label>CPF:</label>
                    <input name="cpf" value="<?php echo $usuario['usu_cpf']; ?>" class="input-editavel">
                </div>
                <div class="form-group">
                    <label>Saldo:</label>
                    <p><?php echo $usuario['usu_saldo']; ?></p>
                </div>

        </section>



        <section class="user-info">
            <h3>Endereço</h3>

            <div class="form-group">
                <label>Logradouro:</label>
                <input name="logradouro" value="<?php echo $usuario['usu_logradouro']; ?>" class="input-editavel">
            </div>
            <div class="form-group">
                <label>Número:</label>
                <input name="numero" value="<?php echo $usuario['usu_numero']; ?>" class="input-editavel">
            </div>
            <div class="form-group">
                <label>Bairro:</label>
                <input name="bairro" value="<?php echo $usuario['usu_bairro']; ?>" class="input-editavel">
            </div>
            <div class="form-group">
                <label>Cidade:</label>
                <input name="cidade" value="<?php echo $usuario['usu_cidade']; ?>" class="input-editavel">
            </div>
            <div class="form-group">
                <label>Estado:</label>
                <input name="estado" value="<?php echo $usuario['usu_estado']; ?>" class="input-editavel">
            </div>
            <div class="form-group">
                <label>CEP:</label>
                <input name="cep" value="<?php echo $usuario['usu_cep']; ?>" class="input-editavel">
            </div>



        </section>

        <div style="text-align: center; margin: 20px ;">
            <button style="background-color: #3c1c00; color: white; padding: 12px 30px; border: none; border-radius: 6px; cursor: pointer; font-size: 1em; font-weight: 600;">Confirmar</button>
        </div>

        </form>


    </div>
</body>

</html>