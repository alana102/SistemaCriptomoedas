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


    <style>
        .custom-file-upload {
            display: inline-block;
            padding: 10px 25px;
            cursor: pointer;
            border-radius: 6px;
            background-color: #3c1c00;
            color: white;
            font-weight: 600;
            font-size: 1em;
            border: 1px solid #3c1c00;
            transition: background-color 0.3s, transform 0.2s;
        }


        .custom-file-upload input[type="file"] {
            display: none;
        }
    </style>
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
                <h2 style="text-align: center; color: #3c1c00; margin-bottom: 20px;">Cadastrar Criptomoeda:</h3>
                    <form method="POST" action="../Controller/rotas.php?acao=cadastrar&tipo=criptomoeda" enctype="multipart/form-data">
                        <div style="margin-bottom: 15px;">
                            <label for="criptomoeda" style="display: block; margin-bottom: 5px; font-weight: 600;">Nome da criptomoeda:</label>
                            <input type="text" id="quantidade" name="nome" min="0.01" step="0.01" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 1em;">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="quantidade" style="display: block; margin-bottom: 5px; font-weight: 600;">Empresa:</label>
                            <input type="text" id="quantidade" name="empresa" min="0.01" step="0.01" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 1em;">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="quantidade" style="display: block; margin-bottom: 5px; font-weight: 600;">Descrição:</label>
                            <input type="text" id="quantidade" name="descricao" min="0.01" step="0.01" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 1em;">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="quantidade" style="display: block; margin-bottom: 5px; font-weight: 600;">Valor:</label>
                            <input type="number" id="quantidade" name="valor" min="0.01" step="0.01" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 1em;">
                        </div>
                        <div style="margin-bottom: 15px;">

                            <label class="custom-file-upload">
                                Selecionar imagem
                                <input type="file" id="foto" name="foto" accept="image/*" required>
                            </label>

                            <div id="preview-container" style="margin-top: 10px;">
                                <img id="preview" src="" alt="" style="display:none; max-width:200px; border-radius:8px; border:1px solid #ddd;">
                                <p id="preview-nome" style="margin-top:5px; font-weight:500;"></p>
                            </div>
                        </div>

                        <button type="submit" style="width: 100%; background-color: #3c1c00; color: white; padding: 12px; border: none; border-radius: 6px; cursor: pointer; font-size: 1em; font-weight: 600;">Cadastrar</button>
                    </form>
            </div>


    </div>

    <script>
        const inputFoto = document.getElementById('foto');
        const preview = document.getElementById('preview');
        const previewNome = document.getElementById('preview-nome');

        inputFoto.addEventListener('change', () => {
            const file = inputFoto.files[0];
            if (file) {
                // Mostrar nome do arquivo
                previewNome.textContent = file.name;

                // Mostrar prévia da imagem
                const reader = new FileReader();
                reader.onload = e => {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                preview.src = '';
                preview.style.display = 'none';
                previewNome.textContent = '';
            }
        });
    </script>
</body>

</html>