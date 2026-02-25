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
    <title>Comprar Criptomoedas</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/avisos.css">
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

            <?php if (isset($_SESSION['sucesso'])): ?>
                <div class="notification is-success">
                    <?= $_SESSION['sucesso'] ?>
                </div>
            <?php
                unset($_SESSION['sucesso']);
            endif; ?>

            <?php if (isset($_SESSION['erro'])): ?>
                <div class="notification is-danger">
                    <?= $_SESSION['erro'] ?>
                </div>
            <?php
                unset($_SESSION['erro']);
            endif; ?>



            <a href="criptomoedas.php" style="display: inline-block; margin-bottom: 0px; color: #3c1c00; text-decoration: none; font-weight: 600;">← Voltar</a>

            <div style="background-color: #f5f5f5; padding: 30px; border-radius: 8px; max-width: 500px; margin: 20px auto; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);">
                <h2 style="text-align: center; color: #3c1c00; margin-bottom: 20px;">Comprar Criptomoeda</h3>
                    <form method="POST" action="../Controller/rotas.php?acao=comprarcrip">
                        <div style="margin-bottom: 15px;">
                            <label for="criptomoeda" style="display: block; margin-bottom: 5px; font-weight: 600;">Selecione a Criptomoeda:</label>
                            <select id="criptomoeda" name="criptomoeda" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 1em;">
                                <option value="">-- Escolha uma criptomoeda --</option>
                                <?php foreach ($listaCriptomoeda as $crip): ?>
                                    <option value="<?= htmlspecialchars($crip['crip_id']) ?>"><?= htmlspecialchars($crip['crip_nome']) ?> - R$ <?= htmlspecialchars($crip['crip_valor']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="quantidade" style="display: block; margin-bottom: 5px; font-weight: 600;">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" min="0.01" step="0.01" required placeholder="Ex: 0.5" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 1em;">
                        </div>
                        <div style="margin-bottom: 20px;">
                            <label for="valor_total" style="display: block; margin-bottom: 5px; font-weight: 600;">Valor Total:</label>

                            <input type="text" id="valor_total" readonly style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 1em; background-color: #e8e8e8;">
                            <input type="hidden" name="valor_total" id="valor_total_hidden">

                            <script>
                                const criptomoedaSelect = document.getElementById('criptomoeda');
                                const quantidadeInput = document.getElementById('quantidade');
                                const valorTotalInput = document.getElementById('valor_total');
                                const valorTotalHidden = document.getElementById('valor_total_hidden');

                                function calcularValorTotal() {
                                    const opcaoSelecionada = criptomoedaSelect.options[criptomoedaSelect.selectedIndex];
                                    const texto = opcaoSelecionada.text;

                                    const valorMatch = texto.match(/R\$\s([\d,.]+)/);
                                    if (!valorMatch) {
                                        valorTotalInput.value = '';
                                        valorTotalHidden.value = '';
                                        return;
                                    }

                                    // pega valor da moeda como número inteiro (em centavos)
                                    let valorStr = valorMatch[1].replace(/\./g, '').replace(',', '');
                                    let valor = parseInt(valorStr, 10); // inteiro
                                    const quantidade = parseInt(quantidadeInput.value) || 0;
                                    let total = valor * quantidade; // total em centavos

                                    // converte para reais com vírgula antes dos últimos dois dígitos
                                    let totalReais = (total / 100).toFixed(2).replace('.', ',');

                                    // mostra formatado
                                    valorTotalInput.value = totalReais;

                                    // envia valor numérico puro (float)
                                    valorTotalHidden.value = (total / 100).toFixed(2);
                                }

                                criptomoedaSelect.addEventListener('change', calcularValorTotal);
                                quantidadeInput.addEventListener('input', calcularValorTotal);
                            </script>
                        </div>
                        <button type="submit" style="width: 100%; background-color: #3c1c00; color: white; padding: 12px; border: none; border-radius: 6px; cursor: pointer; font-size: 1em; font-weight: 600;">Confirmar Compra</button>
                    </form>
            </div>


    </div>
</body>

</html>