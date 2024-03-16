-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 01:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elevate`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_user`
--

CREATE TABLE `all_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `message` text DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `password` text DEFAULT NULL,
  `role` int(1) NOT NULL DEFAULT 2,
  `year` text NOT NULL,
  `month` text NOT NULL,
  `day` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_user`
--

INSERT INTO `all_user` (`id`, `name`, `email`, `phone`, `message`, `company_name`, `status`, `password`, `role`, `year`, `month`, `day`) VALUES
(27, 'Mosfaqur', 'mosfaqur@gmail.com', '0989293', 'Hello everyone!!', 'Elvate', 1, NULL, 2, '2023', 'Oct', '23'),
(29, 'Kuddus', 'kuddus@gmail.com', '01978792242', '', 'Faithorganic Food', 1, NULL, 2, '2023', 'Oct', '24'),
(30, 'Tunan', 'tunan@gmail.com', '01827447143', 'We will update our client webseite to be new designed with elementor so the client can make updates easy themselves. We also need to implement and adjust the EventOn', 'Elah', 1, NULL, 2, '2023', 'Oct', '24'),
(31, 'Shakib', 'shakib@gmial.com', '01885940', '', 'xyz', 1, NULL, 2, '2023', 'Oct', '24'),
(32, 'Sokina', 'sokina@gmail.com', '0198393949', '', '', 1, NULL, 2, '2023', 'Oct', '24'),
(33, 'zorina', 'zorina@gmail.com', '1098929335', 'Are you looking for an IT support and service provider who understands your Sydney operations?', '', 1, NULL, 2, '2023', 'Oct', '24'),
(34, 'Hasan Uddin', 'hasan@gmail.com', '01827447143', '', 'Hasan Shop', 1, NULL, 2, '2023', 'Oct', '24'),
(36, 'Y', 'y@gmail.com', '01', 'kir kh', '', 1, NULL, 2, '2023', 'Oct', '24'),
(37, 'Sadia Mariam', 'sadia@gmail.com', '01887497149', '', '', 1, NULL, 2, '2023', 'Oct', '24'),
(38, 'Md', 'md@gmail.com', '01827447143', '', 'mmm', 1, NULL, 2, '2023', 'Oct', '24'),
(39, 'about', 'about', '', '', '', 1, NULL, 2, '2023', 'Oct', '24'),
(40, 'about', 'about@gmail.com', '0989293', '', '', 1, NULL, 2, '2023', 'Oct', '24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_user`
--
ALTER TABLE `all_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_user`
--
ALTER TABLE `all_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
