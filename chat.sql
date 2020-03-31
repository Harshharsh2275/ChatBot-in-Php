-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2020 at 11:17 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `nikunj`
--

CREATE TABLE `nikunj` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `msg` longtext NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nikunj`
--

INSERT INTO `nikunj` (`id`, `user_id`, `msg`, `time`, `status`) VALUES
(1, 4466, 'hi', '2020-03-31 12:34:29', 'offline'),
(2, 4400, 'Hi I am Here To help you', '2020-03-31 12:34:31', 'offline'),
(3, 4400, 'I don\'t understand that!please allow me to Analyse the word', '2020-03-31 12:34:31', 'offline'),
(4, 4466, 'hi', '2020-03-31 12:37:44', 'offline'),
(5, 4400, 'Hi I am Here To help you', '2020-03-31 12:37:46', 'offline'),
(6, 4400, 'I don\'t understand that!please allow me to Analyse the word', '2020-03-31 12:37:46', 'offline'),
(7, 4466, 'hi', '2020-03-31 12:39:13', 'offline'),
(8, 4400, 'Hi I am Here To help you', '2020-03-31 12:39:15', 'offline'),
(9, 4400, 'I don\'t understand that!please allow me to Analyse the word', '2020-03-31 12:39:15', 'offline'),
(10, 4466, 'hi', '2020-03-31 12:39:47', 'offline'),
(11, 4400, 'Hi I am Here To help you', '2020-03-31 12:39:49', 'offline'),
(12, 4400, 'I don\'t understand that!please allow me to Analyse the word', '2020-03-31 12:39:49', 'offline'),
(13, 4466, 'hi', '2020-03-31 12:40:33', 'offline'),
(14, 4400, 'Hi I am Here To help you', '2020-03-31 12:40:35', 'offline'),
(15, 4400, 'I don\'t understand that!please allow me to Analyse the word', '2020-03-31 12:40:35', 'offline'),
(16, 4466, 'hi', '2020-03-31 12:41:04', 'offline'),
(17, 4400, 'Hi I am Here To help you', '2020-03-31 12:41:06', 'offline'),
(18, 4400, 'I don\'t understand that!please allow me to Analyse the word', '2020-03-31 12:41:06', 'offline'),
(19, 4466, 'hi', '2020-03-31 12:43:19', 'offline'),
(20, 4400, 'Hi I am Here To help you', '2020-03-31 12:43:21', 'offline'),
(21, 4400, 'I don\'t understand that!please allow me to Analyse the word', '2020-03-31 12:43:21', 'offline'),
(22, 4466, 'hi', '2020-03-31 12:46:49', 'offline'),
(23, 4400, 'Hi I am Here To help you', '2020-03-31 12:46:51', 'offline'),
(24, 4466, 'kute ka pila', '2020-03-31 12:47:05', 'offline'),
(25, 4400, 'I don\'t understand that!please allow me to Analyse the word', '2020-03-31 12:47:07', 'offline'),
(26, 4466, 'hema hi', '2020-04-01 08:54:14', 'offline'),
(27, 4400, 'Hi I am Here To help you', '2020-04-01 08:54:16', 'offline'),
(28, 4466, 'hi', '2020-04-01 10:41:36', 'offline'),
(29, 4400, 'Hi I am Here To help you', '2020-04-01 10:41:38', 'offline');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nikunj`
--
ALTER TABLE `nikunj`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nikunj`
--
ALTER TABLE `nikunj`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
