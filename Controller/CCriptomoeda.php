<?php
include "../Model/MCriptomoeda.php";
include_once "../DAO/DCriptomoeda.php";

class CCriptomoeda
{

    public static function retornarCriptomoeda()
    {
        $Criptomoeda = DCriptomoeda::carregarCriptomoedas();
        return $Criptomoeda;
    }

    public static function cadastrarCriptomoeda($dadosCriptomoeda)
    {
 
        if (isset($_FILES['foto']) && $_FILES['foto']['error'] === 0) {
            $foto = $_FILES['foto'];

            $pasta = '../View/upload/';
            $nomeArquivo = uniqid() . '-' . basename($foto['name']);
            $caminhoCompleto = $pasta . $nomeArquivo;

            if (move_uploaded_file($foto['tmp_name'], $caminhoCompleto)) {
                $caminhoBanco = 'upload/' . $nomeArquivo; 

                $Criptomoeda = new MCriptomoeda(
                    NULL,
                    $dadosCriptomoeda['nome'],
                    $dadosCriptomoeda['empresa'],
                    $dadosCriptomoeda['descricao'],
                    $caminhoBanco,
                    $dadosCriptomoeda['valor']
                );

                $resultado = DCriptomoeda::cadastrarCriptomoeda(
                    $Criptomoeda->getCripNome(),
                    $Criptomoeda->getCripEmpresa(),
                    $Criptomoeda->getCripDescricao(),
                    $Criptomoeda->getCripFoto(),
                    $Criptomoeda->getCripValor()
                );

                if ($resultado === true) {
                    $_SESSION['sucesso'] = "Cadastro realizado com sucesso";
                    header("Location: ../View/criptomoedas.php");
                    exit();
                } else {
                    $_SESSION['erro'] = "Erro ao cadastrar criptomoeda.";
                    header("Location: ../View/criptomoedas.php");
                    exit();
                }
            } else {
                $_SESSION['erro'] = "Erro ao salvar a imagem.";
                header("Location: ../View/criptomoedas.php");
                exit();
            }
        } else {
            $_SESSION['erro'] = "Nenhuma imagem selecionada ou erro no upload.";
            header("Location: ../View/criptomoedas.php");
            exit();
        }
    }
}
