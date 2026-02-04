-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27/11/2025 às 02:06
-- Versão do servidor: 9.1.0
-- Versão do PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_clientes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_clientes`
--

DROP TABLE IF EXISTS `tb_clientes`;
CREATE TABLE IF NOT EXISTS `tb_clientes` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `telefone` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `nascto` date NOT NULL,
  `fotoUrl` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `senha` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Despejando dados para a tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`codigo`, `nome`, `email`, `telefone`, `nascto`, `fotoUrl`, `senha`) VALUES
(2, 'Luan Santana da ZL', 'luan@gmail.com', '(11)96523-9854', '1995-01-14', 'fotosClientes/49415e9b1dd5e8788596fb218977bd20.jpg', '202cb962ac59075b964b07152d234b70'),
(3, 'Lucas Men Des Leal', 'desleal@gmail.com', '(11)98521-8745', '2005-11-06', 'fotosClientes/357234c4335126a09cceeff2385c0abc.jpg', '202cb962ac59075b964b07152d234b70'),
(24, 'Gerson Camarote', 'gerson@email.com', '(11)98521-7412', '2001-10-16', 'fotosClientes/c7b27a192d383af70bfdb5f3e88a667e.jpg', '202cb962ac59075b964b07152d234b70'),
(15, 'João Gonçalves de Lima', 'joao_professor@hotmail.com', '(11)96325-9874', '1981-03-03', 'fotosClientes/5e2cca07a4e7bda5c1654a91ec5260e5.jpg', '202cb962ac59075b964b07152d234b70'),
(16, 'Raiane', 'rai_laser@gmail.com', '(11)98521-3213', '2023-08-08', 'fotosClientes/90f74a1747c383edc8e62d3c6be36774.jpg', '202cb962ac59075b964b07152d234b70'),
(17, 'Josefina', 'josefina@gmail.com', '(11)96524-9633', '2023-08-09', 'fotosClientes/c5a545daafbf6f496087e378ac1a8c3c.jpg', '202cb962ac59075b964b07152d234b70'),
(18, 'Eteowaldo Bezerra', 'eteovaldo@gmail.com', '(11)96321-4567', '1956-10-10', 'fotosClientes/92b951a6bad90a01516959dbe1e7d1b9.jpg', '202cb962ac59075b964b07152d234b70'),
(19, 'Sula Miranda', 'sula@gmail.com', '(11)96325-8741', '1945-02-01', 'fotosClientes/33c62126db8b44a4175b9029081586cc.jpg', '202cb962ac59075b964b07152d234b70'),
(20, 'José Bezerra da Silva', 'jose@gmail.com', '(11)9874-5874', '1987-04-05', 'fotosClientes/bac560226c6ae18ff79c9030a054aea2.jpg', '202cb962ac59075b964b07152d234b70'),
(21, 'Romilda Gonçalves', 'romilda@gmail.com', '(11)8521-9632', '1954-04-07', 'fotosClientes/d958fa55a0597079e13d5422367b80ed.jpg', '202cb962ac59075b964b07152d234b70'),
(22, 'Jozeane Leite', 'joze@gmail.com', '(11)8745-9632', '1982-03-17', 'fotosClientes/9a95f2c852cafafecd9836c3eb81918f.jpg', '202cb962ac59075b964b07152d234b70'),
(23, 'Ronaldo Esteves', 'ronaldo@gmail.com', '(11)98546-6321', '1963-08-05', 'fotosClientes/726660f5eba8e24fe0f1df6ad470d37e.jpg', '202cb962ac59075b964b07152d234b70'),
(25, 'Erika Mormom', 'erika@gmail.com', '(11)98541-2651', '1985-07-06', 'fotosClientes/8021670662c5cddf1cb8ede564c77cab.jpg', '202cb962ac59075b964b07152d234b70'),
(26, 'Giovanni Augusto', 'giovanni@gmail.com', '(11)96332-1478', '1995-06-23', 'fotosClientes/3e01b2786bac4213ad66656207167e1f.jpg', '202cb962ac59075b964b07152d234b70'),
(27, 'Abelardo Romero', 'romerinho@gmail.com', '(11)96532-1445', '1985-04-17', 'fotosClientes/5669965d080084d9559427617a2da316.jpg', '202cb962ac59075b964b07152d234b70'),
(28, 'Janaina Loira', 'jana@gmail.com', '(11)98543-3123', '1996-09-25', 'fotosClientes/f830b8b4e475095d1fdb9e71f84a94b3.jpg', '202cb962ac59075b964b07152d234b70'),
(30, 'Geriomar Castro', 'geriomar@gmail.com', '(55)11991-6748', '2023-09-13', 'fotosClientes/1776a14a38b13e5644c3cf9803b1694d.jpg', '202cb962ac59075b964b07152d234b70'),
(31, 'Waaly Anthony', 'wally@gmail.com', '(11)96325-4123', '1998-05-13', 'fotosClientes/038a2f9b26647ff7bd2dd8bed0ee5950.jpg', 'd41d8cd98f00b204e9800998ecf8427e'),
(33, 'Carol', 'carol@gmail.com', '(11) 98888-7777', '2025-11-09', 'fotosClientes/8f42de00470412dc3ba0c27f826b211b.jpg', '$2y$10$CvnYr5muQax5FijvnOd7/un/QjQ5lqNgbf1stAHsV4HEevJzdrHwK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
