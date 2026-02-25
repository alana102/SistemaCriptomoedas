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
    <title>Início</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/modal.css">
    <style>
       
    </style>
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

                <button class="btn" onclick="document.getElementById('depositModal').style.display='block'">
                    Realizar Depósito
                </button>

                <div id="depositModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h2>Realizar Depósito</h2>
                        <form method="POST" action="../Controller/rotas.php?acao=depositar">
                            <label for="amount">Valor do Depósito (R$):</label>
                            <input type="number" id="amount" name="saldo" step="0.01" required value="<?php echo filter_input(INPUT_GET, "saldo"); ?>">

                            <label for="method">Método de Pagamento:</label>
                            <select id="method" name="method" required>
                                <option value="">Selecione um método</option>
                                <option value="credit_card">Cartão de Crédito</option>
                                <option value="debit_card">Cartão de Débito</option>
                                <option value="bank_transfer">Transferência Bancária</option>
                                <option value="pix">PIX</option>
                            </select>

                            <button type="submit" class="btn">Confirmar Depósito</button>
                        </form>
                    </div>
                </div>
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


    <script>
        const modal = document.getElementById('depositModal');
        const closeBtn = document.querySelector('.close');

        document.querySelector('[onclick*="dep"]').onclick = function() {
            modal.style.display = 'block';
        }

        closeBtn.onclick = function() {
            modal.style.display = 'none';
        }

        window.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        }
    </script>
</body>

</html>