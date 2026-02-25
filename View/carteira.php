<?php

include('../Controller/verifica_login.php');
include('../Controller/CUsuario.php');
include('../Controller/CCompra.php');
$usuario = CUsuario::retornarUsuario();
$listaCompra = CCompra::retornarCompra();

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteira</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/avisos.css">
    <link rel="icon" href="img/icons/wallet.png" type="image/png">

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



        <?php if (isset($_SESSION['sucesso'])): ?>
            <div class="notification is-success">
                <?= $_SESSION['sucesso'] ?>
            </div>
            <?php unset($_SESSION['sucesso']); ?>
        <?php endif; ?>

        <?php if (isset($_SESSION['erro'])): ?>
            <div class="notification is-danger">
                <?= $_SESSION['erro'] ?>
            </div>
            <?php unset($_SESSION['erro']); ?>
        <?php endif; ?>


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
                        <th>Criptomoeda</th>
                        <th>Quantidade</th>
                        <th>Valor</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listaCompra as $compra): ?>
                        <tr>

                            <td><?= htmlspecialchars($compra['crip_nome']) ?></td>
                            <td><?= htmlspecialchars($compra['compra_qnt_crip']) ?></td>
                            <td>R$ <?= htmlspecialchars($compra['compra_valor_crip']) ?></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</body>

</html>