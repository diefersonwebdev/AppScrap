-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 07-Jun-2015 às 20:52
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Social`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem_tb`
--

CREATE TABLE IF NOT EXISTS `postagem_tb` (
  `id` int(11) NOT NULL,
  `campo_post` text COLLATE utf8_swedish_ci NOT NULL,
  `date_post` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `postagem_tb`
--

INSERT INTO `postagem_tb` (`id`, `campo_post`, `date_post`) VALUES
(1, 'Ã‰ um fato conhecido de todos que um leitor se distrairÃ¡ com o conteÃºdo de texto legÃ­vel de uma pÃ¡gina quando estiver examinando sua diagramaÃ§Ã£o. A vantagem de usar Lorem Ipsum Ã© que ele tem uma distribuiÃ§Ã£o normal de letras, ao contrÃ¡rio de "ConteÃºdo aqui, conteÃºdo aqui", fazendo com que ele tenha uma aparÃªncia similar a de um texto legÃ­vel. Muitos softwares de publicaÃ§Ã£o e editores de pÃ¡ginas na internet agora usam Lorem Ipsum como texto-modelo padrÃ£o, e uma rÃ¡pida busca por "lorem ipsum" mostra vÃ¡rios websites ainda em sua fase de construÃ§Ã£o. VÃ¡rias versÃµes novas surgiram ao longo dos anos, eventualmente por acidente, e Ã s vezes de propÃ³sito (injetando humor, e coisas do gÃªnero).', '2015-05-12'),
(2, 'Ao contrÃ¡rio do que se acredita, Lorem Ipsum nÃ£o Ã© simplesmente um texto randÃ´mico. Com mais de 2000 anos, suas raÃ­zes podem ser encontradas em uma obra de literatura latina clÃ¡ssica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citaÃ§Ãµes da palavra na literatura clÃ¡ssica, descobriu a sua indubitÃ¡vel origem. Lorem Ipsum vem das seÃ§Ãµes 1.10.32 e 1.10.33 do "de Finibus Bonorum et Malorum" (Os Extremos do Bem e do Mal), de CÃ­cero, escrito em 45 AC. Este livro Ã© um tratado de teoria da Ã©tica muito popular na Ã©poca da RenascenÃ§a. A primeira linha de Lorem Ipsum, "Lorem Ipsum dolor sit amet..." vem de uma linha na seÃ§Ã£o 1.10.32.', '2015-05-14'),
(3, 'Existem muitas variaÃ§Ãµes disponÃ­veis de passagens de Lorem Ipsum, mas a maioria sofreu algum tipo de alteraÃ§Ã£o, seja por inserÃ§Ã£o de passagens com humor.', '2015-05-14'),
(4, 'Ao contrÃ¡rio do que se acredita, Lorem Ipsum nÃ£o Ã© simplesmente um texto randÃ´mico. Com mais de 2000 anos, suas raÃ­zes podem ser encontradas em uma obra de literatura latina clÃ¡ssica datada de 45 AC. Richard McClintock.', '2015-05-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `postagem_tb`
--
ALTER TABLE `postagem_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `postagem_tb`
--
ALTER TABLE `postagem_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
