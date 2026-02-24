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
    <title>Exchange de Criptomoedas</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <nav class="navbar">
        
        <div class="container">
            <h1>CryptoExchange</h1>
            <ul class="nav-links">
                <li><a href="index.php" style="color:#3c1c00; ">Início</a></li>
                <li><a href="criptomoedas.php">Criptomoedas</a></li>
                <li><a href="carteira.php">Minha Carteira</a></li>
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="../Controller/logout.php">Sair</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <header class="hero">
            <h2>Bem-vindo à CryptoExchange</h2>
            <p>Gerencie suas criptomoedas com segurança</p>
        </header>

        <section class="dashboard">
            <div class="card">
                <h3>Saldo Disponível</h3>
                <p class="balance">R$ <?php echo $usuario['usu_saldo']; ?></p>
            </div>

            <div class="card">
                <h3>Ações Rápidas</h3>
                <button class="btn" onclick="window.location.href='criptomoedas.php'">
                    Ver Criptomoedas
                </button>
                <button class="btn" onclick="window.location.href='carteira.php'">
                    Ver Carteira
                </button>
            </div>
        </section>
    </div>
</body>
</html>