-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 16, 2022 at 01:50 PM
-- Server version: 8.0.25
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `email`, `password`) VALUES
(1, 'vrsafetech@gmail.com', 'admin'),
(2, 'dipeshhalde7@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `email`, `country`, `subject`) VALUES
(1, 'Vishal', 'Rathod', 'vrsafetech@gmail.com', 'india', 'test'),
(2, 'Vishal', 'Rathod', 'vrsafetech@gmail.com', 'india', 'test'),
(3, 'Vishal', 'Rathod', 'vrsafetech@gmail.com', 'india', 'hsdc'),
(4, 'varsha', 'Rathod', 'vrsafetech@gmail.com', 'india', 'test'),
(5, 'varsha', 'Rathod', 'vrsafetech@gmail.com', 'india', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `qty` int NOT NULL,
  `img` varchar(255) NOT NULL,
  `discount` int NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=973499 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `qty`, `img`, `discount`, `description`) VALUES
(160996, 'crayons', 'Arts & Crafts', 250, 5, 'crayon1.jfif', 20, 'There are 16 crayons in packet. '),
(535324, 'book', 'College Materials', 50, 27, 'book.jpg', 15, 'classmate book '),
(758302, 'ruler', 'Teachers Stationery', 300, 15, 'ruler.jpg', 20, '30cm length scale \r\n'),
(787877, 'WHITE BOARD PEN', 'Teachers Stationery', 300, 32, 'white_board.jpeg', 100, 'WHITE BOARD PEN with black blue green'),
(788576, 'fevicol', 'Other', 30, 12, 'fevicol.jpg', 15, 'fevicol'),
(833865, 'craft paper', 'Arts & Crafts', 399, 10, 'crafts.jfif', 20, 'A type of multipurpose paper and product created and designed in various colors, paper materials, shapes, sizes and styles you use to create with in art and crafts.'),
(961942, 'classmate books', 'College Materials', 300, 4, 'book1.jpg', 30, '10books ');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

DROP TABLE IF EXISTS `usertable`;
CREATE TABLE IF NOT EXISTS `usertable` (
  `name` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `ph` varchar(55) NOT NULL,
  `phone` bigint NOT NULL,
  `age` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('Male','Female','Other','') NOT NULL,
  `branch` varchar(255) NOT NULL,
  `ques` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `roll` (`roll`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`name`, `roll`, `ph`, `phone`, `age`, `email`, `password`, `gender`, `branch`, `ques`, `ans`, `id`) VALUES
('dipesh', '19302C0043', 'india', 7894561230, 21, 'dipeshhalde7@gmail.com', '1234', 'Male', 'BBI', 'What is your favourite colour?', 'white', '                            755313 '),
('Vishal Rathod', '19302C0031', 'india', 8689830566, 21, 'vrsafetech@gmail.com', '1234', 'Male', 'B.Sc.IT', 'What is your favourite colour?', 'white', '                            899527 ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
