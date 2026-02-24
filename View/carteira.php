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

    <style>
        
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <h1>CryptoExchange</h1>
            <ul class="nav-links">
                <li><a href="index.php">Início</a></li>
                <li><a href="criptomoedas.php">Criptomoedas</a></li>
                <li><a href="carteira.php" style="color:#3c1c00;">Minha Carteira</a></li>
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="../Controller/logout.php">Sair</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <header class="hero">
            <h2>Minha Carteira</h2>
            <p>Acompanhe suas compras de criptomoedas</p>
        </header>

        

        <section class="user-info">
            <h3>Dados do Usuário</h3>
            <p><strong>Nome:</strong> <?php echo $usuario['usu_nome']; ?></p>
            <p><strong>Email:</strong> <?php echo $usuario['usu_email']; ?></p>
        </section>


        <section class="purchases">
            <h3>Minhas Compras</h3>
            <table class="crypto-table">
                <thead>
                    <tr>
                        <th>Moeda</th>
                        <th>Símbolo</th>
                        <th>Quantidade</th>
                        <th>Valor Unitário</th>
                        <th>Valor Total</th>
                        <th>Data da Compra</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bitcoin</td>
                        <td>BTC</td>
                        <td>0.5</td>
                        <td>R$ 150.000,00</td>
                        <td>R$ 75.000,00</td>
                        <td>15/01/2024</td>
                    </tr>
                    <tr>
                        <td>Ethereum</td>
                        <td>ETH</td>
                        <td>2.0</td>
                        <td>R$ 8.500,00</td>
                        <td>R$ 17.000,00</td>
                        <td>10/01/2024</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>
