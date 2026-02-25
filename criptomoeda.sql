-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 25/02/2026 às 05:50
-- Versão do servidor: 8.4.7
-- Versão do PHP: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `criptomoeda`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tab_compra`
--

DROP TABLE IF EXISTS `tab_compra`;
CREATE TABLE IF NOT EXISTS `tab_compra` (
  `compra_id` int NOT NULL AUTO_INCREMENT,
  `compra_id_usu` int NOT NULL,
  `compra_id_crip` int NOT NULL,
  `compra_qnt_crip` int NOT NULL,
  `compra_valor_crip` decimal(10,2) NOT NULL,
  PRIMARY KEY (`compra_id`),
  KEY `fk_compra_usuario` (`compra_id_usu`),
  KEY `fk_compra_criptomoeda` (`compra_id_crip`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tab_criptomoeda`
--

DROP TABLE IF EXISTS `tab_criptomoeda`;
CREATE TABLE IF NOT EXISTS `tab_criptomoeda` (
  `crip_id` int NOT NULL AUTO_INCREMENT,
  `crip_nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crip_empresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crip_descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crip_foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crip_valor` decimal(10,2) NOT NULL,
  PRIMARY KEY (`crip_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `tab_criptomoeda`
--

INSERT INTO `tab_criptomoeda` (`crip_id`, `crip_nome`, `crip_empresa`, `crip_descricao`, `crip_foto`, `crip_valor`) VALUES
(1, 'Bitcoin (BTC)', 'Bitcoin Foundation', 'Primeira criptomoeda criada (2009). Funciona de forma descentralizada usando tecnologia blockchain. É considerada uma reserva de valor digital, muitas vezes chamada de \"ouro digital\".', 'upload/bitcoin.png', 331331.23),
(2, 'Ethereum (ETH)', 'Ethereum Foundation', 'Plataforma blockchain criada em 2015 que permite contratos inteligentes (smart contracts) e aplicativos descentralizados (dApps). É muito usada em NFTs e DeFi.', 'upload/ethereum.png', 9551.21),
(3, 'Binance Coin (BNB)', 'Binance', 'Criptomoeda criada pela Binance. Inicialmente usada para pagar taxas na corretora, hoje também é utilizada na BNB Chain para diversas aplicações.', 'upload/binance.png', 3013.01);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tab_usuario`
--

DROP TABLE IF EXISTS `tab_usuario`;
CREATE TABLE IF NOT EXISTS `tab_usuario` (
  `usu_id` int NOT NULL AUTO_INCREMENT,
  `usu_nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usu_logradouro` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `usu_numero` int NOT NULL,
  `usu_bairro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usu_cidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usu_estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usu_cep` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usu_cpf` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `usu_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usu_senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usu_saldo` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`usu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tab_compra`
--
ALTER TABLE `tab_compra`
  ADD CONSTRAINT `fk_compra_criptomoeda` FOREIGN KEY (`compra_id_crip`) REFERENCES `tab_criptomoeda` (`crip_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_compra_usuario` FOREIGN KEY (`compra_id_usu`) REFERENCES `tab_usuario` (`usu_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
