-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Abr-2020 às 03:41
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cervejaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_prod`
--

CREATE TABLE `categoria_prod` (
  `id` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria_prod`
--

INSERT INTO `categoria_prod` (`id`, `idProduto`, `idCategoria`) VALUES
(1, 1, 1),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cerv_categoria`
--

CREATE TABLE `cerv_categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cerv_categoria`
--

INSERT INTO `cerv_categoria` (`id`, `nome`) VALUES
(1, 'Garrafas'),
(2, 'Long Neck'),
(3, 'Latas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `img_fundo` varchar(255) NOT NULL,
  `abv` varchar(255) NOT NULL,
  `grau` varchar(2545) NOT NULL,
  `ibu` varchar(255) NOT NULL,
  `ebc` varchar(255) NOT NULL,
  `combinacao` varchar(255) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `imagem`, `img_fundo`, `abv`, `grau`, `ibu`, `ebc`, `combinacao`, `descricao`) VALUES
(1, 'Pilsen', 'pilsen.png', 'pilsen.jpeg', '4.3', '0-2', '10', '6', 'Peixes leves, saladas frescas e aves.', '<p>Sevda Pilsen é uma cerveja clara, leve e refrescante. Em nossas receitas, utilizamos as águas límpidas da Serra da mantiqueira, deixando uma cerveja bem equilibrada. </p><p>Ela leva uma em sua receita uma combinação de lúpulos nobre, proporcionando amargor suave e aromas cítricos e florais.</p>'),
(2, 'Weiss', 'weiss.png', 'Weiss.jpeg', '4.5', '0-4', '11.5', '10', 'Saladas leves, frutos do mar e torta de banana caramelizada.', '<p>Sevda Weiss é uma cerveja puro malte com trigo maltado.<br/>\r\nSua receita é um verdadeiro resgate das raízes alemãs,\r\ncom colocação clara, espuma cremosa, aspecto turvo e corpo mais denso.</p><p>\r\nSeus aromas e sabores são suavemente frutados, com notas de banana e cravo.</p>'),
(3, 'IPA', 'ipa.png', 'ipa.jpeg', '6.5', '4-8', '40', '10', 'Pratos bem condimentados e picantes.', '<p>A Sevda India Pale Ale é uma cerveja que segue a escola das cervejas artesanais\r\ninglesas. Uma cerveja de cor dourada e final seco. Tem ousadia no aroma e sabor,\r\ncomo toda cerveja deste estilo. Seu aroma é herbal e o amargor é facilmente perceptivel.</p>'),
(4, 'Sevda Red Ale', 'red_ale.png', 'red_ale.jpeg', '5.8', '8-12', '15', '55', 'Carpacio, grelhados e sobremesas com calda.', '<p>Sevda Red Ale é uma cerveja avermelhada, cristalina e de corpo leve. possui notas maltadas,\r\ndevido ao perfil dos maltes ingleses. Uma cerveja em que o destaque vai para o malte.\r\nApresenta nuances herbais e picantes, oriundas dos lúpulos ingleses.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria_prod`
--
ALTER TABLE `categoria_prod`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProduto` (`idProduto`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indexes for table `cerv_categoria`
--
ALTER TABLE `cerv_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria_prod`
--
ALTER TABLE `categoria_prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cerv_categoria`
--
ALTER TABLE `cerv_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `categoria_prod`
--
ALTER TABLE `categoria_prod`
  ADD CONSTRAINT `categoria_prod_ibfk_1` FOREIGN KEY (`idProduto`) REFERENCES `produtos` (`id`),
  ADD CONSTRAINT `categoria_prod_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `cerv_categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
