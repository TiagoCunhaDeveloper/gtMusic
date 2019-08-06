-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Ago-2019 às 00:31
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_gtmusic`
--
CREATE DATABASE IF NOT EXISTS `bd_gtmusic` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_gtmusic`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_compartilhados`
--

CREATE TABLE `tb_compartilhados` (
  `idCompartilhados` smallint(11) NOT NULL,
  `fkUsuarioEnviou` smallint(11) DEFAULT NULL,
  `fkUsuarioRecebeu` smallint(11) DEFAULT NULL,
  `fkPlaylist` smallint(11) DEFAULT NULL,
  `dataCompartilhamento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_link_compartilhado`
--

CREATE TABLE `tb_link_compartilhado` (
  `idLink` smallint(11) NOT NULL,
  `fkMusica` smallint(11) DEFAULT NULL,
  `hash` varchar(250) DEFAULT NULL,
  `fkUsuario` smallint(11) DEFAULT NULL,
  `numeroVisualizacao` smallint(250) DEFAULT NULL,
  `dataUltimaVisualizacao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_musica`
--

CREATE TABLE `tb_musica` (
  `idMusica` smallint(11) NOT NULL,
  `nomeMusica` varchar(150) DEFAULT NULL,
  `artista` varchar(150) DEFAULT NULL,
  `album` varchar(150) DEFAULT NULL,
  `anoLancamento` smallint(4) DEFAULT NULL,
  `dataCad` date DEFAULT NULL,
  `diretorio` varchar(300) DEFAULT NULL,
  `imgAlbum` varchar(250) DEFAULT NULL,
  `genero` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_musica`
--

INSERT INTO `tb_musica` (`idMusica`, `nomeMusica`, `artista`, `album`, `anoLancamento`, `dataCad`, `diretorio`, `imgAlbum`, `genero`) VALUES
(20, 'Sleep Away', 'Bob Acri', 'Bob Acri', 2004, '2018-04-03', 'view/musicas/Bob Acri/Sleep Away.mp3', 'fundo3.png', 'Jazz'),
(21, 'Zombie', 'Bad Wolves', 'Desconhecido', 2018, '2018-04-04', 'view/musicas/Desconhecido/Bad Wolves - Zombie (Official Video).mp3', 'badwolves.jpg', 'Rock'),
(22, 'Had Some Drinkss', 'Two Feet', 'Momentum', 2017, '2018-04-04', 'view/musicas/Momentum/Two Feet - Had Some Drinks [Bass Boosted].mp3', 'trap.jpg', 'Eletronica'),
(23, 'Its a Beautiful Day', 'Desconhecido', 'Desconhecido', 2017, '2018-04-04', 'view/musicas/Desconhecido/Its a Beautiful Day.mp3', 'exemplo.jpg', 'Pop'),
(24, 'Layla', 'Eric Clapton', 'Unplugged', 1992, '2018-04-19', 'view/musicas/Unplugged/Eric Clapton - Layla.mp3', 'R-412522-1183908879.jpeg.jpg', 'Rock'),
(25, 'The Final Countdown', 'Europe', 'The Final Countdown', 1986, '2018-04-18', 'view/musicas/The Final Countdown/Europe - The Final Countdown(with lyrics).mp3', 'Europe_The_Final_Countdown.jpg', 'Pop'),
(26, 'Hotel California', 'Eagles, The Eagles', 'Live At The Summit: Housto', 1976, '2018-04-18', 'view/musicas/Live At The Summit/Eagles - Hotel California (Lyrics).mp3', '61ufHlWhdXL._SS500.jpg', 'Rock');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_musicas_playlist`
--

CREATE TABLE `tb_musicas_playlist` (
  `idMusicaPlaylist` smallint(11) NOT NULL,
  `fkPlaylist` smallint(11) DEFAULT NULL,
  `fkMusica` smallint(11) DEFAULT NULL,
  `dataAddPlaylist` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_playlist`
--

CREATE TABLE `tb_playlist` (
  `idPlaylist` smallint(11) NOT NULL,
  `nomePlaylist` varchar(250) DEFAULT NULL,
  `imagemPlaylist` varchar(250) DEFAULT NULL,
  `dataCriacao` date DEFAULT NULL,
  `fkUsuario` smallint(11) DEFAULT NULL,
  `status` smallint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `idUsuario` smallint(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `sobreNome` varchar(100) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `senha` varchar(250) DEFAULT NULL,
  `DataUltimoAcesso` date DEFAULT NULL,
  `dataDeCadastro` date DEFAULT NULL,
  `perfil` smallint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`idUsuario`, `nome`, `sobreNome`, `email`, `senha`, `DataUltimoAcesso`, `dataDeCadastro`, `perfil`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '263fec58861449aacc1c328a4aff64aff4c62df4a2d50b3f207fa89b6e242c9aa778e7a8baeffef85b6ca6d2e7dc16ff0a760d59c13c238f6bcdc32f8ce9cc62', '2019-08-06', '2018-03-23', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_compartilhados`
--
ALTER TABLE `tb_compartilhados`
  ADD PRIMARY KEY (`idCompartilhados`);

--
-- Indexes for table `tb_link_compartilhado`
--
ALTER TABLE `tb_link_compartilhado`
  ADD PRIMARY KEY (`idLink`);

--
-- Indexes for table `tb_musica`
--
ALTER TABLE `tb_musica`
  ADD PRIMARY KEY (`idMusica`);

--
-- Indexes for table `tb_musicas_playlist`
--
ALTER TABLE `tb_musicas_playlist`
  ADD PRIMARY KEY (`idMusicaPlaylist`);

--
-- Indexes for table `tb_playlist`
--
ALTER TABLE `tb_playlist`
  ADD PRIMARY KEY (`idPlaylist`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_compartilhados`
--
ALTER TABLE `tb_compartilhados`
  MODIFY `idCompartilhados` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_link_compartilhado`
--
ALTER TABLE `tb_link_compartilhado`
  MODIFY `idLink` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_musica`
--
ALTER TABLE `tb_musica`
  MODIFY `idMusica` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_musicas_playlist`
--
ALTER TABLE `tb_musicas_playlist`
  MODIFY `idMusicaPlaylist` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tb_playlist`
--
ALTER TABLE `tb_playlist`
  MODIFY `idPlaylist` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `idUsuario` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
