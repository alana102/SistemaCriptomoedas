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
    <title>Perfil</title>
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

                    <a style="color: red; cursor: pointer;" onclick="abrirModalExclusao()">Excluir conta</a>

                    <div id="modalExclusao" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); justify-content:center; align-items:center; z-index:1000;">
                        <div style="background:white; padding:30px; border-radius:8px; text-align:center; max-width:400px;">
                            <h3>Confirmar Exclusão de Conta</h3>
                            <p>Tem certeza que deseja excluir sua conta? Esta ação é irreversível.</p>
                            <div style="margin-top:20px;">
                                <div style="display:flex; gap:10px; justify-content:center;">
                                    <form method="POST" action="../Controller/rotas.php?acao=excluir&tipo=usuario" style="margin:0;">
                                        <button style="background-color:#d9534f; color:white; padding:10px 20px; border:none; border-radius:4px; cursor:pointer;">Excluir</button>
                                    </form>
                                    <button onclick="fecharModalExclusao()" style="background-color:#999; color:white; padding:10px 20px; border:none; border-radius:4px; cursor:pointer;">Cancelar</button> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                    function abrirModalExclusao() {
                        document.getElementById('modalExclusao').style.display = 'flex';
                    }

                    function fecharModalExclusao() {
                        document.getElementById('modalExclusao').style.display = 'none';
                    }

            
                    </script>
                </section>

                <div style="text-align: center; margin: 20px 0;">
                    <button onclick="location.href='editar_perfil.php'" style="background-color: #3c1c00; color: white; padding: 12px 30px; border: none; border-radius: 6px; cursor: pointer; font-size: 1em; font-weight: 600;">Editar Informações</button>
                </div>
    </div>
</body>

</html>