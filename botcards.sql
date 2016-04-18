-- phpMyAdmin SQL Dump
-- version 4.4.14.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 10, 2016 at 06:31 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `botcards`;

USE `botcards`;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `botcards`
--

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

DROP TABLE IF EXISTS `collections`;
CREATE TABLE IF NOT EXISTS `collections` (
  `Token` varchar(6) DEFAULT NULL,
  `Piece` varchar(5) DEFAULT NULL,
  `Player` varchar(6) DEFAULT NULL,
  `Datetime` varchar(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`Token`, `Piece`, `Player`, `Datetime`) VALUES
('1BB155', '11b-2', 'George', '2016.02.01-09:01:00'),
('1E654C', '11b-2', 'Mickey', '2016.02.01-09:01:02'),
('1DE9BB', '11b-2', 'Donald', '2016.02.01-09:01:04'),
('1BE8FA', '11c-0', 'George', '2016.02.01-09:01:06'),
('135745', '11a-0', 'Donald', '2016.02.01-09:01:08'),
('1A2EE5', '11c-0', 'Donald', '2016.02.01-09:01:10'),
('11F084', '11a-1', 'Donald', '2016.02.01-09:01:12'),
('1ADF71', '11a-1', 'George', '2016.02.01-09:01:14'),
('1C292C', '11b-0', 'George', '2016.02.01-09:01:16'),
('1E095A', '11c-2', 'Donald', '2016.02.01-09:01:18'),
('132956', '11c-0', 'George', '2016.02.01-09:01:20'),
('1359B6', '11a-0', 'Mickey', '2016.02.01-09:01:22'),
('139244', '11c-0', 'George', '2016.02.01-09:01:24'),
('12072C', '11c-0', 'Henry', '2016.02.01-09:01:26'),
('1C58FB', '11c-2', 'Donald', '2016.02.01-09:01:28'),
('11F0C5', '11b-1', 'George', '2016.02.01-09:01:30'),
('1AB11B', '11a-2', 'Henry', '2016.02.01-09:01:32'),
('1BB8CC', '11b-2', 'Henry', '2016.02.01-09:01:34'),
('14338A', '11c-0', 'George', '2016.02.01-09:01:36'),
('1D17DE', '11a-0', 'George', '2016.02.01-09:01:38'),
('17DC94', '11b-1', 'George', '2016.02.01-09:01:40'),
('1E5222', '11c-2', 'Donald', '2016.02.01-09:01:42'),
('19573B', '11a-2', 'Donald', '2016.02.01-09:01:44'),
('150417', '11b-2', 'Mickey', '2016.02.01-09:01:46'),
('1CA087', '11c-1', 'Mickey', '2016.02.01-09:01:48'),
('154281', '11c-0', 'Donald', '2016.02.01-09:01:50'),
('10DA3E', '11a-1', 'Mickey', '2016.02.01-09:01:52'),
('141117', '11c-2', 'Henry', '2016.02.01-09:01:54'),
('12268C', '11b-0', 'Mickey', '2016.02.01-09:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE `players`
(
    Player VARCHAR(6),
    Peanuts INT,
    Username VARCHAR(15) not null,
    Password VARCHAR(20) not null,
    Avatar VARCHAR(20),
    Status VARCHAR(6) not null
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`Player`, `Peanuts`, `Username`, `Password`, `Avatar`, `Status`) VALUES
('admin',  9999, 'admin', 'admin', 1, 'admin'),
('Pablo', 200, 'pablo', 'pablo', 1, 'player'),
('Damian', 500, 'damian', 'damian', 1, 'player');

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

DROP TABLE IF EXISTS `series`;
CREATE TABLE IF NOT EXISTS `series` (
  `Series` int(2) DEFAULT NULL,
  `Description` varchar(16) DEFAULT NULL,
  `Frequency` int(3) DEFAULT NULL,
  `Value` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`Series`, `Description`, `Frequency`, `Value`) VALUES
(11, 'Basic house bots', 100, 20),
(13, 'House butlers', 50, 50),
(26, 'Home companions', 20, 200);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `DateTime` varchar(19) DEFAULT NULL,
  `Player` varchar(6) DEFAULT NULL,
  `Series` varchar(2) DEFAULT NULL,
  `Trans` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`DateTime`, `Player`, `Series`, `Trans`) VALUES
('2016.02.01-09:01:00', 'Mickey', '11', 'sell'),
('2016.02.01-09:01:05', 'Henry', 'x', 'buy'),
('2016.02.01-09:01:10', 'Mickey', 'x', 'buy'),
('2016.02.01-09:01:15', 'Donald', '13', 'sell'),
('2016.02.01-09:01:20', 'Donald', 'x', 'buy'),
('2016.02.01-09:01:25', 'Donald', 'x', 'buy'),
('2016.02.01-09:01:30', 'Donald', 'x', 'buy'),
('2016.02.01-09:01:35', 'Donald', 'x', 'buy'),
('2016.02.01-09:01:40', 'Henry', 'x', 'buy'),
('2016.02.01-09:01:45', 'Donald', '22', 'sell'),
('2016.02.01-09:01:50', 'George', '11', 'sell'),
('2016.02.01-09:01:55', 'George', 'x', 'buy'),
('2016.02.01-09:01:60', 'George', 'x', 'buy');
--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `peanuts` DECIMAL(10,2) NULL,
  `avatar` VARCHAR(50),
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
