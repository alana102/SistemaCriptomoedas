<?php

include('../Controller/verifica_login.php');
include '../Controller/CCriptomoeda.php';
$listaCriptomoeda = CCriptomoeda::retornarCriptomoeda();

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptomoedas</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="img/icons/bitcoin.png" type="image/png">
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
            <input type="text" id="searchInput" placeholder="Pesquisar criptomoedas..." style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 4px; font-size: 1em; margin-top: 20px">
            <script>
                document.getElementById('searchInput').addEventListener('keyup', function() {
                    const filter = this.value.toLowerCase();
                    const rows = document.querySelectorAll('.crypto-table tbody tr');
                    rows.forEach(row => {
                        const text = row.textContent.toLowerCase();
                        row.style.display = text.includes(filter) ? '' : 'none';
                    });
                });
            </script>
            <table class="crypto-table">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Moeda</th>
                        <th>Empresa</th>
                        <th>Descrição</th>
                        <th>Valor</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listaCriptomoeda as $criptomoeda): ?>
                        <tr>
                            <td>
                                <img src="<?= htmlspecialchars($criptomoeda['crip_foto']) ?>" width="50">
                            </td>
                            <td><?= htmlspecialchars($criptomoeda['crip_nome']) ?></td>
                            <td><?= htmlspecialchars($criptomoeda['crip_empresa']) ?></td>
                            <td><?= htmlspecialchars($criptomoeda['crip_descricao']) ?></td>
                            <td>R$ <?= htmlspecialchars($criptomoeda['crip_valor']) ?></td>
                            
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </header>

        <div style="text-align: center; margin: 20px 0;">
            <button onclick="location.href='comprar.php'" style="background-color: #3c1c00; color: white; padding: 12px 30px; border: none; border-radius: 6px; cursor: pointer; font-size: 1em; font-weight: 600;">Comprar criptomoedas</button>
        </div>


    </div>
</body>

</html>