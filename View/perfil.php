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
    <title>Criptomoedas - CryptoExchange</title>
    <link rel="stylesheet" href="css/index.css">

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
                    <form>
                        <div class="form-group">
                            <label>Nome:</label>
                            <p><?php echo $usuario['usu_nome']; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <p><?php echo $usuario['usu_email']; ?></p>
                        </div>
                        <div class="form-group">
                            <label>CPF:</label>
                            <p><?php echo $usuario['usu_cpf']; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Saldo:</label>
                            <p><?php echo $usuario['usu_saldo']; ?></p>
                        </div>
                    </form>
                </section>



                <section class="user-info">
                    <h3>Endereço</h3>
                    <form>
                        <div class="form-group">
                            <label>Logradouro:</label>
                            <p><?php echo $usuario['usu_logradouro']; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Número:</label>
                            <p><?php echo $usuario['usu_numero']; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Bairro:</label>
                            <p><?php echo $usuario['usu_bairro']; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Cidade:</label>
                            <p><?php echo $usuario['usu_cidade']; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Estado:</label>
                            <p><?php echo $usuario['usu_estado']; ?></p>
                        </div>
                        <div class="form-group">
                            <label>CEP:</label>
                            <p><?php echo $usuario['usu_cep']; ?></p>
                        </div>
                    </form>
            
                </section>

                <div style="text-align: center; margin: 20px 0;">
                    <button onclick="location.href='editar_perfil.php'" style="background-color: #3c1c00; color: white; padding: 12px 30px; border: none; border-radius: 6px; cursor: pointer; font-size: 1em; font-weight: 600;">Editar Informações</button>
                </div>
    </div>
</body>

</html>