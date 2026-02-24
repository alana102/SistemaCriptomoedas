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
                    <p><?php echo isset($_SESSION['usuario']) ? htmlspecialchars($_SESSION['usuario']) : 'Não informado'; ?></p>
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <p><?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : 'Não informado'; ?></p>
                </div>
                <div class="form-group">
                    <label>CPF:</label>
                    <p><?php echo isset($_SESSION['cpf']) ? htmlspecialchars($_SESSION['cpf']) : 'Não informado'; ?></p>
                </div>
                <div class="form-group">
                    <label>Saldo:</label>
                    <p><?php echo isset($_SESSION['saldo']) ? htmlspecialchars($_SESSION['saldo']) : 'Não informado'; ?></p>
                </div>
            </form>
        </section>

            

        <section class="user-info">
            <h3>Endereço</h3>
            <form>
                <div class="form-group">
                    <label>Logradouro:</label>
                    <p><?php echo isset($_SESSION['logradouro']) ? htmlspecialchars($_SESSION['logradouro']) : 'Não informado'; ?></p>
                </div>
                <div class="form-group">
                    <label>Número:</label>
                    <p><?php echo isset($_SESSION['numero']) ? htmlspecialchars($_SESSION['numero']) : 'Não informado'; ?></p>
                </div>
                <div class="form-group">
                    <label>Bairro:</label>
                    <p><?php echo isset($_SESSION['bairro']) ? htmlspecialchars($_SESSION['bairro']) : 'Não informado'; ?></p>
                </div>
                <div class="form-group">
                    <label>Cidade:</label>
                    <p><?php echo isset($_SESSION['cidade']) ? htmlspecialchars($_SESSION['cidade']) : 'Não informado'; ?></p>
                </div>
                <div class="form-group">
                    <label>Estado:</label>
                    <p><?php echo isset($_SESSION['estado']) ? htmlspecialchars($_SESSION['estado']) : 'Não informado'; ?></p>
                </div>
                <div class="form-group">
                    <label>CEP:</label>
                    <p><?php echo isset($_SESSION['cep']) ? htmlspecialchars($_SESSION['cep']) : 'Não informado'; ?></p>
                </div>
            </form>
        </section>

        <div style="text-align: center; margin: 20px 0;">
                <button onclick="location.href='editar_perfil.php'" style="background-color: #3c1c00; color: white; padding: 12px 30px; border: none; border-radius: 6px; cursor: pointer; font-size: 1em; font-weight: 600;">Editar Informações</button>
            </div>
    </div>
</body>
</html>
