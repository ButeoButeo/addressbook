-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Out-2018 às 12:14
-- Versão do servidor: 8.0.12
-- versão do PHP: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addressbook`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` varchar(30) NOT NULL,
  `notes` text NOT NULL,
  `contact_group` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `phone`, `address1`, `address2`, `city`, `state`, `zipcode`, `notes`, `contact_group`, `date_added`) VALUES
(9, 'Tânia', 'Pestana', 'taniapestana@gmail.com', '1224123123', 'Deam Av', '', 'Portugal', 'AL', '1230-523', '', 'Business', '2018-10-25 11:14:27'),
(13, 'Mara', 'silva', 'marasilva@gmail.com', '111122334', 'phone  Av', '', 'Angola', 'AM', '1231-233', '', 'Business', '2018-10-25 11:49:34'),
(14, 'Lara', 'Sousa', 'larasousa@gmail.com', '545122334', 'face  Av', '', 'france', 'PL', '1551-253', '', 'Family', '2018-10-25 11:50:28'),
(15, 'Kara', 'Souka', 'jarasjusa@gmail.com', '11516634', 'velha  Av', '', 'Calha Av', 'PT', '6651-266', '', 'Business', '2018-10-25 11:51:22'),
(17, 'Marlene', 'freitas', 'marlenefreitas@gmail.com', '23213231', 'Love Av', '', 'Porto', 'GR', '123123', '', 'Business', '2018-10-25 12:11:32'),
(18, 'Rui', 'Souxa', 'ruisouxas@gmail.com', '3423423', 'cake Av', '', 'Algarve', 'RO', '453445', '', 'Business', '2018-10-25 12:12:12'),
(19, 'MaryRui', 'bela', 'marybela@gmail.com', '454645623', 'corn Av', '', 'Braga', 'UA', '56456', '', 'Business', '2018-10-25 12:12:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
