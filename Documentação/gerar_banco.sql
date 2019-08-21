-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Jul-2017 às 04:09
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgr`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `alterar_status_mesa` (IN `n_mesa` INT, IN `status_mesa` VARCHAR(30))  BEGIN
update mesas 
set status = status_mesa 
where numero_mesa = n_mesa;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agregacoes`
--

CREATE TABLE `agregacoes` (
  `id` int(11) NOT NULL,
  `mesa_id` int(11) DEFAULT NULL,
  `mesa_id_a` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `agregacoes`
--

INSERT INTO `agregacoes` (`id`, `mesa_id`, `mesa_id_a`) VALUES
(1, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapios`
--

CREATE TABLE `cardapios` (
  `id` int(11) NOT NULL,
  `codigo` varchar(5) NOT NULL,
  `descricao` varchar(60) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `cardapios`
--

INSERT INTO `cardapios` (`id`, `codigo`, `descricao`, `created`, `modified`, `preco`, `status`) VALUES
(1, '001', 'Pizza de Calabresa', '2017-07-14 04:27:07', '2017-07-14 04:27:07', '29.90', 'Ativo'),
(2, '002', 'Coca-Cola Lata 350ml', '2017-07-14 04:27:48', '2017-07-14 04:27:48', '3.00', 'Ativo'),
(3, '003', 'Cerveja Skol lata 350ml', '2017-07-14 04:28:01', '2017-07-14 04:28:01', '5.00', 'Ativo'),
(4, '004', 'Pizza de Frango Catupiry', '2017-07-14 04:31:58', '2017-07-14 04:31:58', '15.00', 'Ativo'),
(5, '005', 'Porção de batata frita', '2017-07-14 04:32:20', '2017-07-14 04:32:20', '20.00', 'Ativo'),
(6, '006', 'Pizza portuguesa Grande', '2017-07-14 04:33:02', '2017-07-14 04:33:02', '28.00', 'Ativo'),
(7, '007', 'Teste', '2017-07-18 18:24:59', '2017-07-18 18:24:59', '10.00', 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapios_pedidos`
--

CREATE TABLE `cardapios_pedidos` (
  `id` int(11) NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `cardapio_id` int(11) NOT NULL,
  `obs` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `telefone_residencial` varchar(20) DEFAULT NULL,
  `telefone_celular` varchar(20) DEFAULT NULL,
  `dt_nascimento` date DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone_residencial`, `telefone_celular`, `dt_nascimento`, `status`, `created`, `modified`) VALUES
(1, 'Marcus Vinicius Bertoncello', '05519597979', '', '43996145371', NULL, 'Ativo', '2017-07-14 05:01:28', '2017-07-14 05:01:28'),
(2, 'José Antonio dos Reir', '01234568', '', '', NULL, 'Ativo', '2017-07-14 22:41:51', '2017-07-14 22:41:51'),
(3, 'Maria Aparecida dos Santos', '123456', '', '', NULL, 'Ativo', '2017-07-14 22:42:19', '2017-07-14 22:42:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas`
--

CREATE TABLE `contas` (
  `id` int(11) NOT NULL,
  `mesa_id` int(11) NOT NULL,
  `valor` float(10,2) NOT NULL DEFAULT '0.00',
  `status` varchar(20) NOT NULL DEFAULT 'Pendente',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contas`
--

INSERT INTO `contas` (`id`, `mesa_id`, `valor`, `status`, `created`, `modified`) VALUES
(1, 5, 0.00, 'Pendente', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `complemento` varchar(20) DEFAULT NULL,
  `numero` varchar(7) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id`, `cliente_id`, `nome`, `complemento`, `numero`, `created`, `modified`) VALUES
(1, 2, 'Rua Clementino S. Puppi', 'Apto', '774', '2017-07-16 03:05:33', '2017-07-16 03:05:33'),
(2, 1, 'Rua teste', '', 'apto 50', '2017-07-16 03:30:16', '2017-07-16 03:30:16'),
(3, 1, 'Rua Clementino S. Puppi', '50', '2', '2017-07-18 04:44:32', '2017-07-18 04:44:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos_clientes`
--

CREATE TABLE `enderecos_clientes` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `endereco_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `telefone_residencial` varchar(20) DEFAULT NULL,
  `telefone_celular` varchar(20) DEFAULT NULL,
  `dt_nascimento` date DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `dt_admissao` date NOT NULL,
  `dt_demissao` date DEFAULT NULL,
  `pis` varchar(20) DEFAULT NULL,
  `salario` decimal(10,2) DEFAULT NULL,
  `comissao` decimal(10,2) DEFAULT NULL,
  `foto` blob,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mesas`
--

CREATE TABLE `mesas` (
  `id` int(11) NOT NULL,
  `numero_mesa` int(11) NOT NULL,
  `cadeiras` int(11) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Livre',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mesas`
--

INSERT INTO `mesas` (`id`, `numero_mesa`, `cadeiras`, `status`, `created`, `modified`) VALUES
(1, 1, 4, 'Livre', '2017-07-14 04:33:48', '2017-07-15 02:27:59'),
(2, 2, 4, 'Livre', '2017-07-14 04:33:57', '2017-07-14 04:33:57'),
(3, 3, 6, 'Ocupada', '2017-07-14 04:34:04', '2017-07-14 04:34:04'),
(4, 4, 6, 'Reservada', '2017-07-14 04:34:12', '2017-07-14 04:34:12'),
(5, 5, 2, 'Ocupada', '2017-07-14 04:34:18', '2017-07-14 04:34:18'),
(6, 10, 10, 'Reservada', '2017-07-14 04:52:31', '2017-07-14 04:52:31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mesas_reservas`
--

CREATE TABLE `mesas_reservas` (
  `id` int(11) NOT NULL,
  `mesa_id` int(11) NOT NULL,
  `reserva_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mesas_reservas`
--

INSERT INTO `mesas_reservas` (`id`, `mesa_id`, `reserva_id`) VALUES
(4, 5, 3),
(5, 6, 3),
(6, 4, 4);

--
-- Acionadores `mesas_reservas`
--
DELIMITER $$
CREATE TRIGGER `reserva_mesa` AFTER INSERT ON `mesas_reservas` FOR EACH ROW BEGIN
    UPDATE mesas SET status = 'Reservada' WHERE mesas.id = new.mesa_id;
  END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `mesa_id` int(11) NOT NULL,
  `datahora` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `valortotal` float(10,2) NOT NULL DEFAULT '0.00',
  `entrega` varchar(20) NOT NULL DEFAULT 'Não',
  `status` varchar(20) NOT NULL DEFAULT 'Pendente',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `mesa_id`, `datahora`, `valortotal`, `entrega`, `status`, `created`, `modified`) VALUES
(6, 1, '2017-07-18 04:56:19', 0.00, 'Não', 'Pendente', '2017-07-18 04:56:19', '2017-07-18 04:56:19'),
(7, 6, '2017-07-18 04:56:26', 0.00, 'Não', 'Pendente', '2017-07-18 04:56:26', '2017-07-18 04:56:26'),
(8, 3, '2017-07-19 01:54:38', 0.00, 'Não', 'Pendente', '2017-07-19 01:54:38', '2017-07-19 01:54:38'),
(9, 3, '2017-07-19 02:01:00', 0.00, 'Não', 'Pendente', '2017-07-19 02:01:00', '2017-07-19 02:01:00'),
(10, 5, '2017-07-19 02:04:45', 0.00, 'Não', 'Pendente', '2017-07-19 02:04:45', '2017-07-19 02:04:45');

--
-- Acionadores `pedidos`
--
DELIMITER $$
CREATE TRIGGER `ocupar_mesa` AFTER INSERT ON `pedidos` FOR EACH ROW BEGIN
    UPDATE mesas SET status = 'Ocupada' WHERE mesas.id = new.mesa_id;
    INSERT INTO CONTAS (mesa_id, status, valor) VALUES
	(new.mesa_id, 'Pendente', 0);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos_cardapios`
--

CREATE TABLE `pedidos_cardapios` (
  `id` int(11) NOT NULL,
  `cardapio_id` int(11) NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedidos_cardapios`
--

INSERT INTO `pedidos_cardapios` (`id`, `cardapio_id`, `pedido_id`, `created`, `modified`) VALUES
(3, 2, 6, '2017-07-18 04:56:19', '2017-07-18 04:56:19'),
(4, 4, 7, '2017-07-18 04:56:26', '2017-07-18 04:56:26'),
(5, 1, 8, '2017-07-19 01:54:38', '2017-07-19 01:54:38'),
(6, 3, 8, '2017-07-19 01:54:38', '2017-07-19 01:54:38'),
(7, 1, 9, '2017-07-19 02:01:00', '2017-07-19 02:01:00'),
(8, 4, 10, '2017-07-19 02:04:45', '2017-07-19 02:04:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quotas_contas`
--

CREATE TABLE `quotas_contas` (
  `id` int(11) NOT NULL,
  `conta_id` int(11) NOT NULL,
  `valor` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `lugares` int(11) NOT NULL,
  `datahora` datetime NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`id`, `cliente_id`, `lugares`, `datahora`, `status`, `created`, `modified`) VALUES
(1, 3, 10, '2022-01-01 00:00:00', 'Ativa', '2017-07-14 22:44:31', '2017-07-14 22:44:31'),
(2, 1, 10, '2022-01-01 00:00:00', 'Ativo', '2017-07-16 03:30:51', '2017-07-16 03:30:51'),
(3, 1, 5, '2022-01-01 00:00:00', 'Ativo', '2017-07-16 04:10:51', '2017-07-16 04:10:51'),
(4, 1, 10, '2022-01-01 00:00:00', '', '2017-07-18 18:28:40', '2017-07-18 18:28:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agregacoes`
--
ALTER TABLE `agregacoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cardapios`
--
ALTER TABLE `cardapios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Indexes for table `cardapios_pedidos`
--
ALTER TABLE `cardapios_pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf_UNIQUE` (`cpf`);

--
-- Indexes for table `contas`
--
ALTER TABLE `contas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enderecos_clientes`
--
ALTER TABLE `enderecos_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf_UNIQUE` (`cpf`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero_mesa` (`numero_mesa`);

--
-- Indexes for table `mesas_reservas`
--
ALTER TABLE `mesas_reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos_cardapios`
--
ALTER TABLE `pedidos_cardapios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotas_contas`
--
ALTER TABLE `quotas_contas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agregacoes`
--
ALTER TABLE `agregacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cardapios`
--
ALTER TABLE `cardapios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `cardapios_pedidos`
--
ALTER TABLE `cardapios_pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contas`
--
ALTER TABLE `contas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `enderecos_clientes`
--
ALTER TABLE `enderecos_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mesas`
--
ALTER TABLE `mesas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mesas_reservas`
--
ALTER TABLE `mesas_reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pedidos_cardapios`
--
ALTER TABLE `pedidos_cardapios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `quotas_contas`
--
ALTER TABLE `quotas_contas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
