-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2014 at 10:44 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(256) NOT NULL,
  `category` varchar(32) NOT NULL,
  `title` varchar(256) NOT NULL,
  `photographer` varchar(128) NOT NULL,
  `photo_date` varchar(16) NOT NULL,
  `origin` varchar(256) NOT NULL,
  `uploaded` varchar(16) NOT NULL,
  `uploader` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `filename`, `category`, `title`, `photographer`, `photo_date`, `origin`, `uploaded`, `uploader`) VALUES
(1, '5187516909_d07a5beb13_b.jpg', 'landscape', 'Scientists in Antarctic landscape', 'Dr. Mike Goebel', '2010', 'http://tcktcktck.org/2013/01/scientists-in-antarctic-landscape-photo/42194', '2014.04.01', 'donald'),
(2, 'new-zealand-landscape-cc-2006-big.jpg', 'landscape', 'New Zealand landscape', 'unknown', '2006', 'http://tcktcktck.org/2013/08/new-zealand-landscape-photo/56706', '2014.04.02', 'mickey'),
(3, 'serengeti-landscape.jpg', 'landscape', 'Beautiful Landscape of Serengeti', 'epcprince', '2011.01.14', 'http://famouswonders.com/serengeti-migration-from-tanzania-to-kenya/', '2014.04.05', 'donald'),
(4, 'industrial-landscape.jpg', 'landmark', 'Industrial Landscape – Didcot Power Station', 'Scott Wylie', '2012.07.21', 'http://creativecan.com/2012/07/industrial-photography/', '2014.04.06', 'mickey'),
(5, '6520239147_40e797cea1_b.jpg', 'landscape', 'Rwanda landscape', 'Neil Palmer', '2012.07.21', 'http://tcktcktck.org/2013/01/rwanda-landscape-photo/40410', '2014.04.07', 'mickey'),
(6, '3219865267_15038512c0_z.jpg', 'landscape', 'Mesoamerican archaeological site located in the state of Puebla, Mexico', 'Russ Bowling', '2009.01.18', 'http://www.flickr.com/photos/robphoto/3219865267/', '2014.04.08', 'donald'),
(7, 'yun_9944.jpg', 'landmark', 'A skyscraper of Shanghai', 'Tomo Yun', '', 'http://www.yunphoto.net/en/photobase/yp9944.html', '2014.04.15', 'mickey'),
(8, 'yun_9036.jpg', 'landscape', 'Yokohama Minato Mirai 21', 'Tomo Yun', '', 'http://www.yunphoto.net/en/photobase/yp9036.html', '2014.04.15', 'mickey'),
(9, 'colosseum-at-rome-upper-view.jpg', 'landmark', 'Colosseum of Rome Upper View', 'Malkav', '', 'http://famouswonders.com/colosseum-of-rome/', '2014.05.01', 'mickey'),
(10, 'the-great-wall-of-china-beautiful-stretch-with-no-tourists.jpg', 'landmark', 'The Great Wall With a Gorgeous Sky', 'topgold', '', 'http://famouswonders.com/the-great-wall-of-china/', '2014.05.02', 'donald'),
(11, 'Tour_Eiffel_Wikimedia_Commons.jpg', 'landmark', 'Eiffel Tower, seen from the champ de Mars, Paris, France', 'Benh LIEU SONG', '2009.06.01', 'http://en.wikipedia.org/wiki/File:Tour_Eiffel_Wikimedia_Commons.jpg', '2014.05.03', 'mickey'),
(12, 'kukulcan-the-main-temple-at-chichen-itza.jpg', 'landmark', 'Kukulcan, the Main Temple at Chichen Itza', 'kyle simourd', '', 'http://famouswonders.com/chichen-itza-in-yucatan-peninsula/', '2014.05.04', 'mickey'),
(13, 'Lands_End_Cape_Cornwall.jpg', 'landscape', 'Land''s End, Cape Cornwall and the Brisons', 'Tom Corser', '2011.11.27', 'http://www.xray-mag.com/content/uk-seas-face-uncertain-future', '2014.05.04', 'mickey'),
(14, 'Caledonian_orogeny_fold_in_King_Oscar_Fjord.jpg', 'landscape', 'Caledonian orogeny fold in King Oscar Fjord', 'Havard Berland', '2007.08', 'http://commons.wikimedia.org/wiki/File:Caledonian_orogeny_fold_in_King_Oscar_Fjord.jpg', '2014.05.04', 'mickey'),
(15, 'Katmai_Crater_1980.jpg', 'landscape', 'Katmai Crater - Mount Katmai, Alaska', 'Captain Budd Christman', '1980.09', 'http://commons.wikimedia.org/wiki/File:Katmai_Crater_1980.jpg', '2014.05.05', 'donald');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
