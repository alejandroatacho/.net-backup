-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 09, 2021 at 01:13 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dj`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Harry Potter and the Half Blood Prince', '<p>As Death Eaters wreak havoc in both Muggle and Wizard worlds, Hogwarts is no longer a safe haven for students. Though Harry (Daniel Radcliffe) suspects there are new dangers lurking within the castle walls, Dumbledore is more intent than ever on preparing the young wizard for the final battle with Voldemort. Meanwhile, teenage hormones run rampant through Hogwarts, presenting a different sort of danger. Love may be in the air, but tragedy looms, and Hogwarts may never be the same again.</p>\r\n', '25.00', '50.00', 10, 'book1.jpg', '2019-03-13 17:55:22'),
(2, 'Harry Potter and the prisoner of azkaban', '<p>The book follows Harry Potter, a young wizard, in his third year at Hogwarts School of Witchcraft and Wizardry. Along with friends Ronald Weasley and Hermione Granger, Harry investigates Sirius Black, an escaped prisoner from Azkaban, the wizard prison, believed to be one of Lord Voldemort\'s old allies.\r\n</p>', '25.00', '50.00', 34, 'book2.jpg', '2019-03-13 18:52:49'),
(3, 'Harry Potter and the Deathly Hallows', '<p>Without the guidance and protection of their professors, Harry (Daniel Radcliffe), Ron (Rupert Grint) and Hermione (Emma Watson) begin a mission to destroy the Horcruxes, the sources of Voldemort\'s immortality. Though they must rely on one another more than ever, dark forces threaten to tear them apart. Voldemort\'s Death Eaters have seized control of the Ministry of Magic and Hogwarts, and they are searching for Harry -- even as he and his friends prepare for the ultimate showdown.</P>', '25.00', '50.00', 23, 'book3.jpg', '2019-03-13 18:47:56'),
(4, 'Star wars Episode III : Revenge of the sith', '<p>Without giving too much away, we can mention a few highlights of the novel: the systematic destruction of the already fractured Republic by the mysterious Sith Lord, Count Dooku, and his droid army; the tragic death of Anakin\'s beloved wife, mother to fraternal twins Luke Skywalker and Leia Organa;</p>', '39.00', '0.00', 7, 'sw3.jpg', '2019-03-13 17:42:04'),
(5, 'Star wars episode I : The phantom Menace', '<p>Obi-Wan Kenobi (Ewan McGregor) is a young apprentice Jedi knight under the tutelage of Qui-Gon Jinn (Liam Neeson) ; Anakin Skywalker (Jake Lloyd), who will later father Luke Skywalker and become known as Darth Vader, is just a 9-year-old boy. When the Trade Federation cuts off all routes to the planet Naboo, Qui-Gon and Obi-Wan are assigned to settle the matter.</p>', '20.00', '0.00', 12, 'sw1.jpg', '2021-03-09 00:02:45');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `name`, `password`) VALUES
(1, 'djackbyron', 'djackbyron@gmail.com', '', 'd39428dd97bf3c89c12f3ba700bd6b71'),
(2, 'Arnaldo', 'arnaldo@hotmail.com', '', '93db5c76ae34b14c8fcc7c193ec9ca4a'),
(3, 'root', 'oof@hotmail.com', '', 'b4b8daf4b8ea9d39568719e1e320076f'),
(4, 'ddaidajdi', 'dddd@hotmail.com', '', 'e10adc3949ba59abbe56e057f20f883e'),
(5, '23322', '222@hotmail.com', '', 'e3ceb5881a0a1fdaad01296d7554868d'),
(6, 'wdawdwd', 'dwdwd@sqsas', '', 'd39428dd97bf3c89c12f3ba700bd6b71'),
(7, 'test', 'test@hotmail.com', '', 'd39428dd97bf3c89c12f3ba700bd6b71'),
(8, 'edwardelizabeth', 'eddy@hotmail.com', '', '33641b412c1c71d2e6e8023a5e8430c2'),
(11, 'root1', 'djdjjd@hotmail.com', '', 'd39428dd97bf3c89c12f3ba700bd6b71');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
