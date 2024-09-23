-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 23, 2024 at 10:31 AM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a1sol84c_pledge`
--

-- --------------------------------------------------------

--
-- Table structure for table `pledge_forms`
--

CREATE TABLE `pledge_forms` (
  `pfsno` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `formfillby` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hospital` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pledge_forms`
--

INSERT INTO `pledge_forms` (`pfsno`, `date`, `datetime`, `formfillby`, `name`, `hospital`, `city`, `email`, `phone`) VALUES
(1, '2022-11-24', '2022-11-24 05:11:43', 'Doctor', 'test', 'test hospital', 'test city', 'test@gmail.com', '9876543212'),
(2, '2022-11-24', '2022-11-24 10:11:53', 'Doctor', 'test', 'test hospital', 'test city', 'test@gmail.com', '9876543212'),
(3, '2022-11-24', '2022-11-24 16:11:41', 'Doctor', 'test', 'dd', 'd', 'shivam@1solutions.biz', '98765432132'),
(4, '2022-11-24', '2022-11-24 17:11:43', 'Doctor', 'testing', 'htest', 'tesat', 'shivam@1solutions.biz', '987654325'),
(5, '2022-11-24', '2022-11-24 17:11:25', '', '', '', '', '', ''),
(6, '2022-11-25', '2022-11-25 11:11:12', 'Doctor', 'Singhaniya', 'Testing World', 'miniworld', 'shivam@1solutions.biz', '9876543213'),
(7, '2022-11-25', '2022-11-25 11:11:03', 'Citizen', 'mail-testing', '0', 'test city', 'kanchan@1solutions.biz', '9876543212'),
(8, '2022-11-25', '2022-11-25 11:11:34', 'Doctor', 'mail-testing', '111dd', 'ddd', 'shivam@1solutions.biz', '98765432132'),
(9, '2022-11-25', '2022-11-25 11:11:41', 'Doctor', 'test one', 'test hospital', 'goa', 'test@gmail.com', '98765432132'),
(10, '2022-11-25', '2022-11-25 15:11:16', 'Doctor', 'test', 'test hospital', 'ooo', 'shivam@1solutions.biz', '98765432132'),
(11, '2022-11-25', '2022-11-25 15:11:02', 'Citizen', 'Tezf', '0', 'Ghc', 'shivam@1solutions.biz', '5273839363638'),
(12, '2022-11-25', '2022-11-25 15:11:39', 'Doctor', 'Tezf', 'Jdjd', 'Ghc', 'shivam@1solutions.biz', '8764556'),
(13, '2022-11-25', '2022-11-25 16:11:42', 'Citizen', 'Tgbh', '0', 'Gghg', 'testaccount@gmail.com', '85457854345'),
(14, '2022-11-25', '2022-11-25 16:11:39', 'Citizen', 'Yesy', '0', 'Delhi', 'shivam@1solutions.biz ', '91 97184 65473 '),
(15, '2022-11-25', '2022-11-25 17:11:18', 'Citizen', 'Test', '0', 'Shsjk', 'shivam@1solutions.biz ', '91 97184 65473 '),
(16, '2022-11-25', '2022-11-25 17:11:11', 'Citizen', 'tttyy', '0', 'ttt', 'testworld@paytm.com', '12345678'),
(17, '2022-11-25', '2022-11-25 17:11:19', 'Citizen', 'Yijh', '0', 'Ghi', 'shivam@1solutions.biz ', '85457854345'),
(18, '2024-07-23', '2024-07-23 10:07:09', 'Doctor', 'test name', 'test hospital', 'test city', 'testemail@gmail.com', '8765432123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pledge_forms`
--
ALTER TABLE `pledge_forms`
  ADD PRIMARY KEY (`pfsno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pledge_forms`
--
ALTER TABLE `pledge_forms`
  MODIFY `pfsno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
