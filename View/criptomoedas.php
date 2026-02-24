<?php

include('../Controller/verifica_login.php');
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
                <li><a href="criptomoedas.php" style="color:#3c1c00;">Criptomoedas</a></li>
                <li><a href="carteira.php">Minha Carteira</a></li>
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="../Controller/logout.php">Sair</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <header class="hero">
            <h2>Criptomoedas</h2>
            <p>Compre criptomoedas com segurança</p>
        <table class="crypto-table">
            <thead>
                <tr>
                    <th>Moeda</th>
                    <th>Empresa</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Bitcoin</td>
                    <td>BTC</td>
                    <td>R$ 150.000,00</td>
                    <td class="positive">+5.2%</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Ethereum</td>
                    <td>ETH</td>
                    <td>R$ 8.500,00</td>
                    <td class="positive">+3.8%</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Cardano</td>
                    <td>ADA</td>
                    <td>R$ 2.300,00</td>
                    <td class="negative">-1.2%</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        </header>

        <div style="text-align: center; margin: 20px 0;">
                <button onclick="location.href='comprar.php'" style="background-color: #3c1c00; color: white; padding: 12px 30px; border: none; border-radius: 6px; cursor: pointer; font-size: 1em; font-weight: 600;">Comprar criptomoedas</button>
            </div>

       
    </div>
</body>
</html>
