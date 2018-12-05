-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 08:25 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skillancer`
--

-- --------------------------------------------------------

--
-- Table structure for table `freelancer`
--

CREATE TABLE `freelancer` (
  `id_freelancer` int(11) NOT NULL,
  `fk_Id_user` int(11) NOT NULL,
  `nota` tinyint(1) DEFAULT NULL,
  `tipo_servico` varchar(45) DEFAULT NULL,
  `linkedin` varchar(45) DEFAULT NULL,
  `facebook` varchar(45) DEFAULT NULL,
  `twitter` varchar(45) DEFAULT NULL,
  `github` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `freelancer`
--

INSERT INTO `freelancer` (`id_freelancer`, `fk_Id_user`, `nota`, `tipo_servico`, `linkedin`, `facebook`, `twitter`, `github`) VALUES
(1, 1, 5, 'code', 'hendy', 'hendy', 'hendy', 'hendy');

-- --------------------------------------------------------

--
-- Table structure for table `freelancer_has_habilidade`
--

CREATE TABLE `freelancer_has_habilidade` (
  `Freelancer_id_freelancer` int(11) NOT NULL,
  `habilidade_id_habilidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `freelancer_has_habilidade`
--

INSERT INTO `freelancer_has_habilidade` (`Freelancer_id_freelancer`, `habilidade_id_habilidade`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `habilidade`
--

CREATE TABLE `habilidade` (
  `id_habilidade` int(11) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `icone` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `habilidade`
--

INSERT INTO `habilidade` (`id_habilidade`, `titulo`, `icone`) VALUES
(1, 'HTML', NULL),
(2, 'PHP', NULL),
(3, 'Javascript', NULL),
(4, 'NodeJs', NULL),
(5, 'SQL', NULL),
(6, 'Oracle', NULL),
(7, 'React', NULL),
(8, 'Java', NULL),
(9, 'Css', NULL),
(10, 'Angular', NULL),
(11, 'C', NULL),
(12, 'XML', NULL),
(13, 'Bootstrap', NULL),
(14, 'Phyton', NULL),
(15, 'Firebase', NULL),
(16, 'Ruby', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `metodo_pagamento`
--

CREATE TABLE `metodo_pagamento` (
  `id_pagamento` int(11) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int(11) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `imagem` varchar(45) DEFAULT NULL,
  `fk_idFreelancer` int(11) NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `projeto`
--

CREATE TABLE `projeto` (
  `id_projeto` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `tipo_servico` varchar(45) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `fk_id_freelancer` int(11) DEFAULT NULL,
  `fk_idPagamento` int(11) DEFAULT NULL,
  `fk_idUser` int(11) NOT NULL,
  `imagem_url` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projeto`
--

INSERT INTO `projeto` (`id_projeto`, `titulo`, `tipo_servico`, `descricao`, `valor`, `fk_id_freelancer`, `fk_idPagamento`, `fk_idUser`, `imagem_url`) VALUES
(4, 'Teste', 'code', 'testeeeeeee', NULL, NULL, NULL, 3, NULL),
(5, 'digitalhouse', 'marketplace', 'heucnwsicndsan', NULL, NULL, NULL, 6, NULL),
(6, 'digital house', 'social/ONGs', 'dhsaudsaihiu', NULL, NULL, NULL, 6, NULL),
(7, 'efef', 'social/ONGs', 'fdfds', NULL, NULL, NULL, 6, NULL),
(8, 'sdfdsfdsfsdfsdfdsfsdsd', 'e-commerce', 'ccxcx', NULL, NULL, NULL, 6, NULL),
(9, 'sdasdasdas', 'social/ONGs', 'dsfsdf', NULL, NULL, NULL, 6, NULL),
(10, 'sdasdasdas', 'social/ONGs', 'dsfsdf', NULL, NULL, NULL, 6, NULL),
(11, 'brunoooo', 'social/ONGs', 'asdhsahdusah', NULL, NULL, NULL, 6, NULL),
(12, 'brunoooo', 'marketplace', 'sdfsdfs', NULL, NULL, NULL, 6, NULL),
(13, 'brunoasdaisudhasui', 'social/ONGs', 'asduisadhasuidhasui', NULL, NULL, NULL, 6, NULL),
(14, 'fui eu q fiz', 'marketplace', 'adasdqwda', NULL, NULL, NULL, 6, NULL),
(15, 'fui eu q fiz', 'marketplace', 'adasdqwda', NULL, NULL, NULL, 6, NULL),
(16, 'euuuuuuuuuuu', 'social/ONGs', 'asdihasdiasduis', NULL, NULL, NULL, 6, NULL),
(17, 'euuuuuuuuuuu', 'social/ONGs', 'asdihasdiasduis', NULL, NULL, NULL, 6, NULL),
(18, 'dfisdfisdufnsdifwi', 'marketplace', 'sndfsoidfnsoifsodisnfoi', NULL, NULL, NULL, 6, NULL),
(19, 'adnjaiosdjasodiasjdio', 'e-commerce', 'dsjfaiosdhasdasiu', NULL, NULL, NULL, 6, NULL),
(20, 'fdhdusifhdi', 'social/ONGs', 'sdvvsdvs', NULL, NULL, NULL, 7, NULL),
(21, 'fdhdusifhdi', 'social/ONGs', 'sdvvsdvs', NULL, NULL, NULL, 7, NULL),
(22, 'fdhdusifhdi', 'social/ONGs', 'sdvvsdvs', NULL, NULL, NULL, 7, NULL),
(23, 'fdhdusifhdi', 'social/ONGs', 'sdvvsdvs', NULL, NULL, NULL, 7, NULL),
(24, 'brunoalveshsausah', 'social/ONGs', 'sdvvsdvs', NULL, NULL, NULL, 7, NULL),
(25, 'Hendy', 'marketplace', 'testtee', NULL, NULL, NULL, 7, NULL),
(26, 'testeimg', 'e-commerce', 'teste imggg', NULL, NULL, NULL, 7, NULL),
(27, 'testeimg', 'e-commerce', 'teste imggg', NULL, NULL, NULL, 7, NULL),
(28, 'testeimg', 'e-commerce', 'teste imggg', NULL, NULL, NULL, 7, NULL),
(29, 'testeimg', 'e-commerce', 'teste imggg', NULL, NULL, NULL, 7, NULL),
(30, 'testeimg', 'e-commerce', 'teste imggg', NULL, NULL, NULL, 7, NULL),
(31, 'testeimg', 'e-commerce', 'teste imggg', NULL, NULL, NULL, 7, NULL),
(32, 'testeimg', 'e-commerce', 'teste imggg', NULL, NULL, NULL, 7, NULL),
(33, 'testeimg', 'e-commerce', 'teste imggg', NULL, NULL, NULL, 7, NULL),
(34, 'testeimg', 'e-commerce', 'teste imggg', NULL, NULL, NULL, 7, NULL),
(35, 'testeimg', 'e-commerce', 'teste imggg', NULL, NULL, NULL, 7, NULL),
(36, 'testeimg', 'e-commerce', 'teste imggg', NULL, NULL, NULL, 7, NULL),
(37, 'agora vai', 'social/ONGs', 'vaaaaaaaaaaaaaaaaaaaaaaaai', NULL, NULL, NULL, 7, NULL),
(38, 'agora vai', 'social/ONGs', 'vaaaaaaaaaaaaaaaaaaaaaaaai', NULL, NULL, NULL, 7, NULL),
(39, 'vai?', 'social/ONGs', 'asdbhasudbasu', NULL, NULL, NULL, 7, NULL),
(40, 'teste imagemmmm', 'social/ONGs', 'alksjdlajsd', NULL, NULL, NULL, 7, NULL),
(41, '42424', 'social/ONGs', 'alksjdlajsd', NULL, NULL, NULL, 7, NULL),
(42, '42424', 'social/ONGs', 'alksjdlajsd', NULL, NULL, NULL, 7, '/storage/uploads/307516_289433624492597_21226652_n.jpg'),
(43, 'ta funcioinando', 'marketplace', 'asddqw', NULL, NULL, NULL, 10, '/storage/uploads/4449.jpg'),
(44, 'olá123', 'e-commerce', 'wdhwudiwhi', NULL, NULL, NULL, 11, '/storage/uploads/artsfon.com-78393.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `sobrenome` varchar(45) DEFAULT NULL,
  `cpf_cnpj` int(11) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `sobrenome`, `cpf_cnpj`, `username`, `email`, `password`) VALUES
(1, 'natalia', 'silva', 357559, 'nati', 'nati@mail.com', '123456'),
(2, NULL, NULL, NULL, 'hendy', 'hendy@mail.com', '$2y$10$PxNgesmHmWTjLqhNNuzrvuFaI3qO1DQH0eZuoBosPlnIkz0C/IWF6'),
(3, NULL, NULL, NULL, 'let', '123@gmail.com', '$2y$10$Oy3nhPfGOFqIXGgEsq.eLOTR0j9GREHFnBa5E50hSG79a3mtdNgeC'),
(4, NULL, NULL, NULL, 'le', 'leticia.hannah@terra.com.br', '$2y$10$Pg8F3cMs4rgyUAl88Nzh/.W6SWQOaWAyu.tgmmjids52zzfC1.mt.'),
(5, NULL, NULL, NULL, 'teste', 'vi@hotmail.com', '$2y$10$i1nHnycTCmeP.iYrHrFfsexRScl35ad31E7bXchDBmUEjT0brQIeu'),
(6, NULL, NULL, NULL, 'bruno123', 'bruno@bruno.com', '$2y$10$9HYWk2FSxY5rtKnTlkUaVuzS09MjM6jZuFf2VFikNZmkg3LbDPDUy'),
(7, NULL, NULL, NULL, 'brunoalves', 'bruno123@bruno.com', '$2y$10$rqaEid5EfzTY553m5FzZCeg3kNc6rhL7J.zFIuXQQr9rMTQPCuuRO'),
(8, NULL, NULL, NULL, 'awsdkljaslk', 'bruno12324r@htrmrog.com', '$2y$10$uUtGyheQjjh.h8tNGAEGpOePSFaD0pWs/Kf8Y.MnkcmMleZOkkjmC'),
(9, NULL, NULL, NULL, 'brunolalala', 'brunolalla@lalala.com', '$2y$10$Iourv7u4KeZjFYtOtMBECOG6yVQTeNq78E6XakO0.PedhJzl40CNi'),
(10, NULL, NULL, NULL, 'brunosilva123', 'bruno@bruno123.com', '$2y$10$vFqVwboAT/hG1dsztJW7hO9laNSJLDKocu6P39hH1vSHEmgT8ekoK'),
(11, NULL, NULL, NULL, 'bruno678', 'brunoalves190@bruno.com', '$2y$10$9WbgeFtrUV7lxGk0PUmoLeZos2Dh29EuZFgh3SF0ahiei.uLon.Ay');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `freelancer`
--
ALTER TABLE `freelancer`
  ADD PRIMARY KEY (`id_freelancer`),
  ADD KEY `fk_Freelancer_Users1_idx` (`fk_Id_user`);

--
-- Indexes for table `freelancer_has_habilidade`
--
ALTER TABLE `freelancer_has_habilidade`
  ADD PRIMARY KEY (`Freelancer_id_freelancer`,`habilidade_id_habilidade`),
  ADD KEY `fk_Freelancer_has_habilidade_habilidade1_idx` (`habilidade_id_habilidade`),
  ADD KEY `fk_Freelancer_has_habilidade_Freelancer1_idx` (`Freelancer_id_freelancer`);

--
-- Indexes for table `habilidade`
--
ALTER TABLE `habilidade`
  ADD PRIMARY KEY (`id_habilidade`);

--
-- Indexes for table `metodo_pagamento`
--
ALTER TABLE `metodo_pagamento`
  ADD PRIMARY KEY (`id_pagamento`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`),
  ADD KEY `fk_portfolio_Freelancer1_idx` (`fk_idFreelancer`);

--
-- Indexes for table `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`id_projeto`),
  ADD KEY `fk_Projeto_Freelancer_idx` (`fk_id_freelancer`),
  ADD KEY `fk_Projeto_Metodo_pagamento1_idx` (`fk_idPagamento`),
  ADD KEY `fk_Projeto_Users1_idx` (`fk_idUser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `freelancer`
--
ALTER TABLE `freelancer`
  MODIFY `id_freelancer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projeto`
--
ALTER TABLE `projeto`
  MODIFY `id_projeto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `freelancer`
--
ALTER TABLE `freelancer`
  ADD CONSTRAINT `fk_Freelancer_Users1` FOREIGN KEY (`fk_Id_user`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `freelancer_has_habilidade`
--
ALTER TABLE `freelancer_has_habilidade`
  ADD CONSTRAINT `fk_Freelancer_has_habilidade_Freelancer1` FOREIGN KEY (`Freelancer_id_freelancer`) REFERENCES `freelancer` (`id_freelancer`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Freelancer_has_habilidade_habilidade1` FOREIGN KEY (`habilidade_id_habilidade`) REFERENCES `habilidade` (`id_habilidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD CONSTRAINT `fk_portfolio_Freelancer1` FOREIGN KEY (`fk_idFreelancer`) REFERENCES `freelancer` (`id_freelancer`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `projeto`
--
ALTER TABLE `projeto`
  ADD CONSTRAINT `fk_Projeto_Freelancer` FOREIGN KEY (`fk_id_freelancer`) REFERENCES `freelancer` (`id_freelancer`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Projeto_Metodo_pagamento1` FOREIGN KEY (`fk_idPagamento`) REFERENCES `metodo_pagamento` (`id_pagamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Projeto_Users1` FOREIGN KEY (`fk_idUser`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
