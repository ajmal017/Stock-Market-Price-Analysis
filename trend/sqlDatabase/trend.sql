-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2016 at 01:33 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trend`
--

-- --------------------------------------------------------

--
-- Table structure for table `current_price`
--

CREATE TABLE IF NOT EXISTS `current_price` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_price`
--

INSERT INTO `current_price` (`id`, `name`, `price`) VALUES
(1, 'HCL', 80),
(2, 'TCS', 90),
(3, 'WIPRO', 130),
(4, 'ORACLE', 110),
(5, 'INFOSYS', 60);

-- --------------------------------------------------------

--
-- Table structure for table `share_base_table`
--

CREATE TABLE IF NOT EXISTS `share_base_table` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `share_base_table`
--

INSERT INTO `share_base_table` (`id`, `name`, `quantity`, `price`) VALUES
(1, 'HCL', '460', '800'),
(2, 'TCS', '270', '1500'),
(3, 'INFOSYS', '1040', '1200'),
(4, 'ORACLE', '650', '1000'),
(5, 'WIPRO', '100', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `share_transactions`
--

CREATE TABLE IF NOT EXISTS `share_transactions` (
  `id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `purchase_buy_price` varchar(200) NOT NULL,
  `transaction` varchar(200) NOT NULL,
  `share_quantity` varchar(200) NOT NULL,
  `stock_price` varchar(100) NOT NULL,
  `profit_loss` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `share_transactions`
--

INSERT INTO `share_transactions` (`id`, `user_name`, `company`, `purchase_buy_price`, `transaction`, `share_quantity`, `stock_price`, `profit_loss`, `date_time`) VALUES
(1, 'Pankaj Kushwaha', 'TCS', '1000', 'Sell', '10', '', '', '0000-00-00 00:00:00'),
(2, 'Pankaj Kushwaha', 'INFOSYS', '800', 'Sell', '20', '', '', '2016-06-01 12:02:05'),
(3, 'Pankaj Kushwaha', 'WIPRO', '2000', 'Buy', '10', '', '', '2016-06-01 12:29:00'),
(4, 'Pankaj Kushwaha', 'TCS', '1500', 'Buy', '20', '', '', '2016-06-02 11:35:56'),
(5, 'Pankaj Kushwaha', 'TCS', '100', 'Sell', '30', '449970', '', '2016-06-02 14:55:16'),
(6, 'Pankaj Kushwaha', 'INFOSYS', '55', 'Buy', '20', '503980', '', '2016-06-02 15:27:33'),
(7, 'Pankaj Kushwaha', 'ORACLE', '100', 'Buy', '40', '609960', '', '2016-06-02 15:59:34'),
(8, 'Pankaj Kushwaha', 'HCL', '70', 'Sell', '10', '375990', '-100', '2016-06-02 17:22:48'),
(9, 'Qwerty', 'INFOSYS', '500', 'Buy', '600', '527400', '', '2016-06-07 16:57:46');

-- --------------------------------------------------------

--
-- Table structure for table `track_user`
--

CREATE TABLE IF NOT EXISTS `track_user` (
  `id` int(10) NOT NULL,
  `ip_address` varchar(25) DEFAULT NULL,
  `start_time` varchar(25) DEFAULT NULL,
  `user_name` varchar(200) NOT NULL,
  `end_time` varchar(25) DEFAULT NULL,
  `page_name` varchar(200) DEFAULT NULL,
  `emailid_user` varchar(500) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `role` varchar(50) NOT NULL,
  `view_count` varchar(15) DEFAULT NULL,
  `time_spent` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=393 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `track_user`
--

INSERT INTO `track_user` (`id`, `ip_address`, `start_time`, `user_name`, `end_time`, `page_name`, `emailid_user`, `mobile_no`, `role`, `view_count`, `time_spent`) VALUES
(116, '::1', '1450259487', 'PANKAJ KUSHWAHA', '1450259642', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '0', '155 seconds'),
(117, '::1', '1450259643', 'PANKAJ KUSHWAHA', '1450260195', 'daily-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '1', '552 seconds'),
(118, '::1', '1450260346', 'PANKAJ KUSHWAHA', '1450260349', 'daily-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '2', '3 seconds'),
(119, '::1', '1450260351', 'PANKAJ KUSHWAHA', '1450260360', 'daily-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '3', '9 seconds'),
(120, '::1', '1450260360', 'PANKAJ KUSHWAHA', '1450260401', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '4', '41 seconds'),
(121, '::1', '1450260401', 'PANKAJ KUSHWAHA', '1450260472', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '5', '71 seconds'),
(122, '::1', '1450260472', 'PANKAJ KUSHWAHA', '1450260512', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '6', '40 seconds'),
(123, '::1', '1450260513', 'PANKAJ KUSHWAHA', '1450260540', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '7', '27 seconds'),
(124, '::1', '1450260541', 'PANKAJ KUSHWAHA', '1450260561', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '8', '20 seconds'),
(125, '::1', '1450260561', 'PANKAJ KUSHWAHA', '1450260653', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '9', '92 seconds'),
(126, '::1', '1450260656', 'PANKAJ KUSHWAHA', '1450260672', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '10', '16 seconds'),
(127, '::1', '1450260673', 'PANKAJ KUSHWAHA', '1450260702', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '11', '29 seconds'),
(128, '::1', '1450260704', 'PANKAJ KUSHWAHA', '1450260732', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '12', '28 seconds'),
(129, '::1', '1450260733', 'PANKAJ KUSHWAHA', '1450260810', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '13', '77 seconds'),
(130, '::1', '1450260811', 'PANKAJ KUSHWAHA', '1450260848', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '14', '37 seconds'),
(131, '::1', '1450260849', 'PANKAJ KUSHWAHA', '1450260876', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '15', '27 seconds'),
(132, '::1', '1450260876', 'PANKAJ KUSHWAHA', '1450260953', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '16', '77 seconds'),
(133, '::1', '1450260953', 'PANKAJ KUSHWAHA', '1450260995', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '17', '42 seconds'),
(134, '::1', '1450260995', 'PANKAJ KUSHWAHA', '1450261057', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '18', '62 seconds'),
(135, '::1', '1450261058', 'PANKAJ KUSHWAHA', '1450261232', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '19', '174 seconds'),
(136, '::1', '1450261232', 'PANKAJ KUSHWAHA', '1450261242', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '20', '10 seconds'),
(137, '::1', '1450261242', 'PANKAJ KUSHWAHA', '1450261268', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '21', '26 seconds'),
(138, '::1', '1450261269', 'PANKAJ KUSHWAHA', '1450261284', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '22', '15 seconds'),
(139, '::1', '1450261285', 'PANKAJ KUSHWAHA', '1450261296', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '23', '11 seconds'),
(140, '::1', '1450261297', 'PANKAJ KUSHWAHA', '1450261307', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '24', '10 seconds'),
(141, '::1', '1450261307', 'PANKAJ KUSHWAHA', '1450261338', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '25', '31 seconds'),
(142, '::1', '1450261340', 'PANKAJ KUSHWAHA', '1450261370', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '26', '30 seconds'),
(143, '::1', '1450261370', 'PANKAJ KUSHWAHA', '1450261494', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '27', '124 seconds'),
(144, '::1', '1450261495', 'PANKAJ KUSHWAHA', '1450261559', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '28', '64 seconds'),
(145, '::1', '1450261559', 'PANKAJ KUSHWAHA', '1450261570', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '29', '11 seconds'),
(146, '::1', '1450261570', 'PANKAJ KUSHWAHA', '1450261654', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '30', '84 seconds'),
(147, '::1', '1450261656', 'PANKAJ KUSHWAHA', '1450261676', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '31', '20 seconds'),
(148, '::1', '1450261676', 'PANKAJ KUSHWAHA', '1450261691', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '32', '15 seconds'),
(149, '::1', '1450261692', 'PANKAJ KUSHWAHA', '1450261713', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '33', '21 seconds'),
(150, '::1', '1450261714', 'PANKAJ KUSHWAHA', '1450261774', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '34', '60 seconds'),
(151, '::1', '1450261774', 'PANKAJ KUSHWAHA', '1450261798', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '35', '24 seconds'),
(152, '::1', '1450261799', 'PANKAJ KUSHWAHA', '1450261937', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '36', '138 seconds'),
(153, '::1', '1450261944', 'PANKAJ KUSHWAHA', '1450261970', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '37', '26 seconds'),
(154, '::1', '1450261971', 'PANKAJ KUSHWAHA', '1450261982', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '38', '11 seconds'),
(155, '::1', '1450261983', 'PANKAJ KUSHWAHA', '1450262027', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '39', '44 seconds'),
(156, '::1', '1450262027', 'PANKAJ KUSHWAHA', '1450262108', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '40', '81 seconds'),
(157, '::1', '1450262108', 'PANKAJ KUSHWAHA', '1450262157', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '41', '49 seconds'),
(158, '::1', '1450262158', 'PANKAJ KUSHWAHA', '1450262189', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '42', '31 seconds'),
(159, '::1', '1450262189', 'PANKAJ KUSHWAHA', '1450262201', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '43', '12 seconds'),
(160, '::1', '1450262201', 'PANKAJ KUSHWAHA', '1450262232', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '44', '31 seconds'),
(161, '::1', '1450262243', 'PANKAJ KUSHWAHA', '1450262245', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '45', '2 seconds'),
(162, '::1', '1450262280', 'PANKAJ KUSHWAHA', '1450262574', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '46', '294 seconds'),
(163, '::1', '1450262575', 'PANKAJ KUSHWAHA', '1450262816', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '47', '241 seconds'),
(164, '::1', '1450262817', 'PANKAJ KUSHWAHA', '1450262836', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '48', '19 seconds'),
(165, '::1', '1450262837', 'PANKAJ KUSHWAHA', '1450263057', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '49', '220 seconds'),
(166, '::1', '1450263063', 'PANKAJ KUSHWAHA', '1450263660', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '50', '597 seconds'),
(167, '::1', '1450263662', 'PANKAJ KUSHWAHA', '1450263771', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '51', '109 seconds'),
(168, '::1', '1450263773', 'PANKAJ KUSHWAHA', '1450263786', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '52', '13 seconds'),
(169, '::1', '1450263788', 'PANKAJ KUSHWAHA', '1450263982', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '53', '194 seconds'),
(170, '::1', '1450263982', 'PANKAJ KUSHWAHA', '1450263984', 'daily-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '54', '2 seconds'),
(171, '::1', '1450263989', 'PANKAJ KUSHWAHA', '1450264081', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '55', '92 seconds'),
(172, '::1', '1450264083', 'PANKAJ KUSHWAHA', '1450264114', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '56', '31 seconds'),
(173, '::1', '1450264118', 'PANKAJ KUSHWAHA', '1450268788', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '57', '4670 seconds'),
(174, '::1', '1450272769', 'PANKAJ KUSHWAHA', '0', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '58', '0'),
(175, '::1', '1450274115', 'PANKAJ KUSHWAHA', '1450274603', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '0', '488 seconds'),
(176, '::1', '1450358080', 'PANKAJ KUSHWAHA', '1450358099', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '0', '19 seconds'),
(177, '::1', '1450358307', 'PANKAJ KUSHWAHA', '0', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '1', '0'),
(178, '::1', '1450360315', 'PANKAJ KUSHWAHA', '1450360317', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '2', '2 seconds'),
(179, '::1', '1450360349', 'PANKAJ KUSHWAHA', '1450360352', 'daily-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '3', '3 seconds'),
(180, '::1', '1450360353', 'PANKAJ KUSHWAHA', '1450360373', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '4', '20 seconds'),
(181, '::1', '1450360374', 'PANKAJ KUSHWAHA', '1450360375', 'daily-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '5', '1 seconds'),
(182, '::1', '1450361324', 'PANKAJ KUSHWAHA', '1450361334', 'daily-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '6', '10 seconds'),
(183, '::1', '1450361339', 'PANKAJ KUSHWAHA', '1450361531', 'daily-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '7', '192 seconds'),
(184, '::1', '1450361532', 'PANKAJ KUSHWAHA', '1450361788', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '8', '256 seconds'),
(185, '::1', '1450361788', 'PANKAJ KUSHWAHA', '1450361874', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '9', '86 seconds'),
(186, '::1', '1450361876', 'PANKAJ KUSHWAHA', '1450361885', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '10', '9 seconds'),
(187, '::1', '1450361885', 'PANKAJ KUSHWAHA', '1450362002', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '11', '117 seconds'),
(188, '::1', '1450362003', 'PANKAJ KUSHWAHA', '1450362021', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '12', '18 seconds'),
(189, '::1', '1450421435', 'PANKAJ KUSHWAHA', '1450421591', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '0', '156 seconds'),
(190, '::1', '1450421593', 'PANKAJ KUSHWAHA', '1450421634', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '1', '41 seconds'),
(191, '::1', '1450421634', 'PANKAJ KUSHWAHA', '1450421803', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '2', '169 seconds'),
(192, '::1', '1450421804', 'PANKAJ KUSHWAHA', '1450422125', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '3', '321 seconds'),
(193, '::1', '1450422129', 'PANKAJ KUSHWAHA', '1450422136', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '4', '7 seconds'),
(194, '::1', '1450422139', 'PANKAJ KUSHWAHA', '1450422536', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '5', '397 seconds'),
(195, '::1', '1450422537', 'PANKAJ KUSHWAHA', '1450422554', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '6', '17 seconds'),
(196, '::1', '1450422555', 'PANKAJ KUSHWAHA', '1450422928', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '7', '373 seconds'),
(197, '::1', '1450422938', 'PANKAJ KUSHWAHA', '1450422984', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '8', '46 seconds'),
(198, '::1', '1450422987', 'PANKAJ KUSHWAHA', '1450423109', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '9', '122 seconds'),
(199, '::1', '1450423109', 'PANKAJ KUSHWAHA', '1450423161', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '10', '52 seconds'),
(200, '::1', '1450423162', 'PANKAJ KUSHWAHA', '1450423242', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '11', '80 seconds'),
(201, '::1', '1450423254', 'PANKAJ KUSHWAHA', '1450423260', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '12', '6 seconds'),
(202, '::1', '1450423261', 'PANKAJ KUSHWAHA', '1450423410', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '13', '149 seconds'),
(203, '::1', '1450423411', 'PANKAJ KUSHWAHA', '1450423453', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '14', '42 seconds'),
(204, '::1', '1450423453', 'PANKAJ KUSHWAHA', '1450423489', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '15', '36 seconds'),
(205, '::1', '1450423490', 'PANKAJ KUSHWAHA', '1450423595', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '16', '105 seconds'),
(206, '::1', '1450423597', 'PANKAJ KUSHWAHA', '1450423605', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '17', '8 seconds'),
(207, '::1', '1450423605', 'PANKAJ KUSHWAHA', '1450423874', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '18', '269 seconds'),
(208, '::1', '1450423875', 'PANKAJ KUSHWAHA', '1450423885', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '19', '10 seconds'),
(209, '::1', '1450423886', 'PANKAJ KUSHWAHA', '1450423892', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '20', '6 seconds'),
(210, '::1', '1450423893', 'PANKAJ KUSHWAHA', '1450423999', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '21', '106 seconds'),
(211, '::1', '1450424000', 'PANKAJ KUSHWAHA', '1450424023', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '22', '23 seconds'),
(212, '::1', '1450424024', 'PANKAJ KUSHWAHA', '1450424049', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '23', '25 seconds'),
(213, '::1', '1450424049', 'PANKAJ KUSHWAHA', '1450424069', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '24', '20 seconds'),
(214, '::1', '1450424070', 'PANKAJ KUSHWAHA', '1450424273', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '25', '203 seconds'),
(215, '::1', '1450424285', 'PANKAJ KUSHWAHA', '1450424303', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '26', '18 seconds'),
(216, '::1', '1450424304', 'PANKAJ KUSHWAHA', '1450424311', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '27', '7 seconds'),
(217, '::1', '1450424311', 'PANKAJ KUSHWAHA', '1450424315', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '28', '4 seconds'),
(218, '::1', '1450424316', 'PANKAJ KUSHWAHA', '1450424330', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '29', '14 seconds'),
(219, '::1', '1450424330', 'PANKAJ KUSHWAHA', '1450424337', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '30', '7 seconds'),
(220, '::1', '1450424337', 'PANKAJ KUSHWAHA', '1450424350', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '31', '13 seconds'),
(221, '::1', '1450424351', 'PANKAJ KUSHWAHA', '1450424360', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '32', '9 seconds'),
(222, '::1', '1450424360', 'PANKAJ KUSHWAHA', '1450425134', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '33', '774 seconds'),
(223, '::1', '1450425138', 'PANKAJ KUSHWAHA', '1450425359', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '34', '221 seconds'),
(224, '::1', '1450425360', 'PANKAJ KUSHWAHA', '1450425366', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '35', '6 seconds'),
(225, '::1', '1450425367', 'PANKAJ KUSHWAHA', '1450425430', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '36', '63 seconds'),
(226, '::1', '1450425431', 'PANKAJ KUSHWAHA', '1450425453', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '37', '22 seconds'),
(227, '::1', '1450425454', 'PANKAJ KUSHWAHA', '1450425527', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '38', '73 seconds'),
(228, '::1', '1450425528', 'PANKAJ KUSHWAHA', '1450426174', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '39', '646 seconds'),
(229, '::1', '1450426177', 'PANKAJ KUSHWAHA', '1450426186', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '40', '9 seconds'),
(230, '::1', '1450426186', 'PANKAJ KUSHWAHA', '1450426331', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '41', '145 seconds'),
(231, '::1', '1450426332', 'PANKAJ KUSHWAHA', '1450426334', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '42', '2 seconds'),
(232, '::1', '1450426335', 'PANKAJ KUSHWAHA', '1450426341', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '43', '6 seconds'),
(233, '::1', '1450426342', 'PANKAJ KUSHWAHA', '1450426420', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '44', '78 seconds'),
(234, '::1', '1450426420', 'PANKAJ KUSHWAHA', '1450426456', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '45', '36 seconds'),
(235, '::1', '1450426457', 'PANKAJ KUSHWAHA', '1450426462', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '46', '5 seconds'),
(236, '::1', '1450426463', 'PANKAJ KUSHWAHA', '1450426466', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '47', '3 seconds'),
(237, '::1', '1450426467', 'PANKAJ KUSHWAHA', '1450426581', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '48', '114 seconds'),
(238, '::1', '1450426689', 'PANKAJ KUSHWAHA', '1450426781', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '49', '92 seconds'),
(239, '::1', '1450426786', 'PANKAJ KUSHWAHA', '1450426793', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '50', '7 seconds'),
(240, '::1', '1450426794', 'PANKAJ KUSHWAHA', '1450426881', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '51', '87 seconds'),
(241, '::1', '1450426882', 'PANKAJ KUSHWAHA', '1450430219', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '52', '3337 seconds'),
(242, '::1', '1450430221', 'PANKAJ KUSHWAHA', '1450430227', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '53', '6 seconds'),
(243, '::1', '1450430228', 'PANKAJ KUSHWAHA', '1450430246', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '54', '18 seconds'),
(244, '::1', '1450430247', 'PANKAJ KUSHWAHA', '1450430333', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '55', '86 seconds'),
(245, '::1', '1450430333', 'PANKAJ KUSHWAHA', '1450430351', 'daily-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '56', '18 seconds'),
(246, '::1', '1450430352', 'PANKAJ KUSHWAHA', '1450430541', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '57', '189 seconds'),
(247, '::1', '1450430542', 'PANKAJ KUSHWAHA', '1450430603', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '58', '61 seconds'),
(248, '::1', '1450430603', 'PANKAJ KUSHWAHA', '1450430672', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '59', '69 seconds'),
(249, '::1', '1450430672', 'PANKAJ KUSHWAHA', '1450430703', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '60', '31 seconds'),
(250, '::1', '1450430704', 'PANKAJ KUSHWAHA', '1450430712', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '61', '8 seconds'),
(251, '::1', '1450430713', 'PANKAJ KUSHWAHA', '1450430722', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '62', '9 seconds'),
(252, '::1', '1450430722', 'PANKAJ KUSHWAHA', '1450430729', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '63', '7 seconds'),
(253, '::1', '1450430729', 'PANKAJ KUSHWAHA', '1450430775', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '64', '46 seconds'),
(254, '::1', '1450430776', 'PANKAJ KUSHWAHA', '1450430782', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '65', '6 seconds'),
(255, '::1', '1450430783', 'PANKAJ KUSHWAHA', '1450430826', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '66', '43 seconds'),
(256, '::1', '1450430827', 'PANKAJ KUSHWAHA', '1450430837', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '67', '10 seconds'),
(257, '::1', '1450430838', 'PANKAJ KUSHWAHA', '1450430955', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '68', '117 seconds'),
(258, '::1', '1450430955', 'PANKAJ KUSHWAHA', '1450430960', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '69', '5 seconds'),
(259, '::1', '1450430961', 'PANKAJ KUSHWAHA', '1450431041', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '70', '80 seconds'),
(260, '::1', '1450431041', 'PANKAJ KUSHWAHA', '1450431049', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '71', '8 seconds'),
(261, '::1', '1450431049', 'PANKAJ KUSHWAHA', '1450431058', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '72', '9 seconds'),
(262, '::1', '1450431059', 'PANKAJ KUSHWAHA', '1450431065', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '73', '6 seconds'),
(263, '::1', '1450431068', 'PANKAJ KUSHWAHA', '1450431092', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '74', '24 seconds'),
(264, '::1', '1450431093', 'PANKAJ KUSHWAHA', '1450431134', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '75', '41 seconds'),
(265, '::1', '1450431135', 'PANKAJ KUSHWAHA', '1450431140', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '76', '5 seconds'),
(266, '::1', '1450431143', 'PANKAJ KUSHWAHA', '1450431253', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '77', '110 seconds'),
(267, '::1', '1450431254', 'PANKAJ KUSHWAHA', '1450431284', 'daily-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '78', '30 seconds'),
(268, '::1', '1450431284', 'PANKAJ KUSHWAHA', '1450432775', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '79', '1491 seconds'),
(269, '::1', '1450432780', 'PANKAJ KUSHWAHA', '1450432796', 'daily-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '80', '16 seconds'),
(270, '::1', '1450432796', 'PANKAJ KUSHWAHA', '1450432805', 'daily-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '81', '9 seconds'),
(271, '::1', '1450432806', 'PANKAJ KUSHWAHA', '1450433363', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '82', '557 seconds'),
(272, '::1', '1450433364', 'PANKAJ KUSHWAHA', '1450433393', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '83', '29 seconds'),
(273, '::1', '1450433395', 'PANKAJ KUSHWAHA', '1450433423', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '84', '28 seconds'),
(274, '::1', '1450433423', 'PANKAJ KUSHWAHA', '1450433434', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '85', '11 seconds'),
(275, '::1', '1450433435', 'PANKAJ KUSHWAHA', '1450433445', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '86', '10 seconds'),
(276, '::1', '1450433446', 'PANKAJ KUSHWAHA', '1450433463', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '87', '17 seconds'),
(277, '::1', '1450433464', 'PANKAJ KUSHWAHA', '1450433476', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '88', '12 seconds'),
(278, '::1', '1450433476', 'PANKAJ KUSHWAHA', '1450433493', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '89', '17 seconds'),
(279, '::1', '1450433494', 'PANKAJ KUSHWAHA', '1450433511', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '90', '17 seconds'),
(280, '::1', '1450433511', 'PANKAJ KUSHWAHA', '1450433597', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '91', '86 seconds'),
(281, '::1', '1450433598', 'PANKAJ KUSHWAHA', '1450433615', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '92', '17 seconds'),
(282, '::1', '1450433616', 'PANKAJ KUSHWAHA', '1450433742', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '93', '126 seconds'),
(283, '::1', '1450433746', 'PANKAJ KUSHWAHA', '1450433954', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '94', '208 seconds'),
(284, '::1', '1450433955', 'PANKAJ KUSHWAHA', '1450434048', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '95', '93 seconds'),
(285, '::1', '1450434050', 'PANKAJ KUSHWAHA', '1450434120', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '96', '70 seconds'),
(286, '::1', '1450434120', 'PANKAJ KUSHWAHA', '1450434232', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '97', '112 seconds'),
(287, '::1', '1450434232', 'PANKAJ KUSHWAHA', '1450434254', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '98', '22 seconds'),
(288, '::1', '1450434254', 'PANKAJ KUSHWAHA', '1450434311', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '99', '57 seconds'),
(289, '::1', '1450434311', 'PANKAJ KUSHWAHA', '1450434335', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '100', '24 seconds'),
(290, '::1', '1450434336', 'PANKAJ KUSHWAHA', '1450434359', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '101', '23 seconds'),
(291, '::1', '1450434359', 'PANKAJ KUSHWAHA', '1450434384', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '102', '25 seconds'),
(292, '::1', '1450434384', 'PANKAJ KUSHWAHA', '1450434688', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '103', '304 seconds'),
(293, '::1', '1450434690', 'PANKAJ KUSHWAHA', '1450434813', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '104', '123 seconds'),
(294, '::1', '1450434813', 'PANKAJ KUSHWAHA', '1450434852', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '105', '39 seconds'),
(295, '::1', '1450434853', 'PANKAJ KUSHWAHA', '1450434905', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '106', '52 seconds'),
(296, '::1', '1450434905', 'PANKAJ KUSHWAHA', '1450434928', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '107', '23 seconds'),
(297, '::1', '1450434929', 'PANKAJ KUSHWAHA', '1450434995', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '108', '66 seconds'),
(298, '::1', '1450434996', 'PANKAJ KUSHWAHA', '1450435090', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '109', '94 seconds'),
(299, '::1', '1450435091', 'PANKAJ KUSHWAHA', '1450435110', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '110', '19 seconds'),
(300, '::1', '1450435111', 'PANKAJ KUSHWAHA', '1450435137', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '111', '26 seconds'),
(301, '::1', '1450435138', 'PANKAJ KUSHWAHA', '1450435174', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '112', '36 seconds'),
(302, '::1', '1450435175', 'PANKAJ KUSHWAHA', '1450435194', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '113', '19 seconds'),
(303, '::1', '1450435195', 'PANKAJ KUSHWAHA', '1450435228', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '114', '33 seconds'),
(304, '::1', '1450435229', 'PANKAJ KUSHWAHA', '1450435254', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '115', '25 seconds'),
(305, '::1', '1450435255', 'PANKAJ KUSHWAHA', '1450435284', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '116', '29 seconds'),
(306, '::1', '1450435290', 'PANKAJ KUSHWAHA', '1450435328', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '117', '38 seconds'),
(307, '::1', '1450435333', 'PANKAJ KUSHWAHA', '1450435494', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '118', '161 seconds'),
(308, '::1', '1450435499', 'PANKAJ KUSHWAHA', '1450435519', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '119', '20 seconds'),
(309, '::1', '1450435520', 'PANKAJ KUSHWAHA', '1450435567', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '120', '47 seconds'),
(310, '::1', '1450435568', 'PANKAJ KUSHWAHA', '1450435599', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '121', '31 seconds'),
(311, '::1', '1450435599', 'PANKAJ KUSHWAHA', '1450435720', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '122', '121 seconds'),
(312, '::1', '1450435721', 'PANKAJ KUSHWAHA', '1450435734', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '123', '13 seconds'),
(313, '::1', '1450435735', 'PANKAJ KUSHWAHA', '1450435810', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '124', '75 seconds'),
(314, '::1', '1450435811', 'PANKAJ KUSHWAHA', '1450435900', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '125', '89 seconds'),
(315, '::1', '1450435902', 'PANKAJ KUSHWAHA', '1450436002', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '126', '100 seconds'),
(316, '::1', '1450436003', 'PANKAJ KUSHWAHA', '1450436044', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '127', '41 seconds'),
(317, '::1', '1450436044', 'PANKAJ KUSHWAHA', '1450436118', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '128', '74 seconds'),
(318, '::1', '1450436118', 'PANKAJ KUSHWAHA', '1450436256', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '129', '138 seconds'),
(319, '::1', '1450436256', 'PANKAJ KUSHWAHA', '1450436577', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '130', '321 seconds'),
(320, '::1', '1450436580', 'PANKAJ KUSHWAHA', '1450436640', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '131', '60 seconds'),
(321, '::1', '1450436641', 'PANKAJ KUSHWAHA', '1450436684', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '132', '43 seconds'),
(322, '::1', '1450436685', 'PANKAJ KUSHWAHA', '1450436721', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '133', '36 seconds'),
(323, '::1', '1450436721', 'PANKAJ KUSHWAHA', '1450436812', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '134', '91 seconds'),
(324, '::1', '1450436813', 'PANKAJ KUSHWAHA', '1450436826', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '135', '13 seconds'),
(325, '::1', '1450436826', 'PANKAJ KUSHWAHA', '1450436847', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '136', '21 seconds'),
(326, '::1', '1450436848', 'PANKAJ KUSHWAHA', '1450436859', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '137', '11 seconds'),
(327, '::1', '1450436860', 'PANKAJ KUSHWAHA', '1450436892', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '138', '32 seconds'),
(328, '::1', '1450436893', 'PANKAJ KUSHWAHA', '1450436950', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '139', '57 seconds'),
(329, '::1', '1450436951', 'PANKAJ KUSHWAHA', '1450437037', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '140', '86 seconds'),
(330, '::1', '1450437039', 'PANKAJ KUSHWAHA', '1450437053', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '141', '14 seconds'),
(331, '::1', '1450437054', 'PANKAJ KUSHWAHA', '1450437305', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '142', '251 seconds'),
(332, '::1', '1450437312', 'PANKAJ KUSHWAHA', '1450437489', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '143', '177 seconds'),
(333, '::1', '1450437490', 'PANKAJ KUSHWAHA', '1450437547', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '144', '57 seconds'),
(334, '::1', '1450437558', 'PANKAJ KUSHWAHA', '1450437578', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '145', '20 seconds'),
(335, '::1', '1450437578', 'PANKAJ KUSHWAHA', '1450437596', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '146', '18 seconds'),
(336, '::1', '1450437600', 'PANKAJ KUSHWAHA', '1450437628', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '147', '28 seconds'),
(337, '::1', '1450437629', 'PANKAJ KUSHWAHA', '1450437672', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '148', '43 seconds'),
(338, '::1', '1450437673', 'PANKAJ KUSHWAHA', '1450437690', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '149', '17 seconds'),
(339, '::1', '1450437691', 'PANKAJ KUSHWAHA', '1450438015', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '150', '324 seconds'),
(340, '::1', '1450438016', 'PANKAJ KUSHWAHA', '1450438098', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '151', '82 seconds'),
(341, '::1', '1450438099', 'PANKAJ KUSHWAHA', '1450438110', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '152', '11 seconds'),
(342, '::1', '1450438111', 'PANKAJ KUSHWAHA', '1450438128', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '153', '17 seconds'),
(343, '::1', '1450438129', 'PANKAJ KUSHWAHA', '1450438290', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '154', '161 seconds'),
(344, '::1', '1450438292', 'PANKAJ KUSHWAHA', '1450438335', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '155', '43 seconds'),
(345, '::1', '1450438575', 'PANKAJ KUSHWAHA', '1450438602', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '156', '27 seconds'),
(346, '::1', '1450438603', 'PANKAJ KUSHWAHA', '1450438626', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '157', '23 seconds'),
(347, '::1', '1450438664', 'PANKAJ KUSHWAHA', '1450438669', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '158', '5 seconds'),
(348, '::1', '1450438669', 'PANKAJ KUSHWAHA', '1450438712', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '159', '43 seconds'),
(349, '::1', '1450438713', 'PANKAJ KUSHWAHA', '1450438714', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '160', '1 seconds'),
(350, '::1', '1450438714', 'PANKAJ KUSHWAHA', '1450438811', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '161', '97 seconds'),
(351, '::1', '1450438811', 'PANKAJ KUSHWAHA', '1450438884', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '162', '73 seconds'),
(352, '::1', '1450438884', 'PANKAJ KUSHWAHA', '1450438889', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '163', '5 seconds'),
(353, '::1', '1450438891', 'PANKAJ KUSHWAHA', '1450439144', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '164', '253 seconds'),
(354, '::1', '1450439145', 'PANKAJ KUSHWAHA', '1450439151', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '165', '6 seconds'),
(355, '::1', '1450439151', 'PANKAJ KUSHWAHA', '1450439158', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '166', '7 seconds'),
(356, '::1', '1450439158', 'PANKAJ KUSHWAHA', '1450439164', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '167', '6 seconds'),
(357, '::1', '1450439165', 'PANKAJ KUSHWAHA', '1450439234', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '168', '69 seconds'),
(358, '::1', '1450439234', 'PANKAJ KUSHWAHA', '1450439244', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '169', '10 seconds'),
(359, '::1', '1450439244', 'PANKAJ KUSHWAHA', '1450439252', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '170', '8 seconds'),
(360, '::1', '1450439252', 'PANKAJ KUSHWAHA', '1450439340', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '171', '88 seconds'),
(361, '::1', '1450439340', 'PANKAJ KUSHWAHA', '1450439347', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '172', '7 seconds'),
(362, '::1', '1450439347', 'PANKAJ KUSHWAHA', '1450439544', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '173', '197 seconds'),
(363, '::1', '1450439564', 'PANKAJ KUSHWAHA', '1450439621', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '174', '57 seconds'),
(364, '::1', '1450439621', 'PANKAJ KUSHWAHA', '1450439721', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '175', '100 seconds'),
(365, '::1', '1450439721', 'PANKAJ KUSHWAHA', '1450439902', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '176', '181 seconds'),
(366, '::1', '1450439902', 'PANKAJ KUSHWAHA', '1450440032', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '177', '130 seconds'),
(367, '::1', '1450440033', 'PANKAJ KUSHWAHA', '1450440046', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '178', '13 seconds'),
(368, '::1', '1450440047', 'PANKAJ KUSHWAHA', '1450440170', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '179', '123 seconds'),
(369, '::1', '1450440171', 'PANKAJ KUSHWAHA', '1450440225', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '180', '54 seconds'),
(370, '::1', '1450440225', 'PANKAJ KUSHWAHA', '1450440257', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '181', '32 seconds'),
(371, '::1', '1450440258', 'PANKAJ KUSHWAHA', '1450440309', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '182', '51 seconds'),
(372, '::1', '1450440309', 'PANKAJ KUSHWAHA', '1450440359', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '183', '50 seconds'),
(373, '::1', '1450440359', 'PANKAJ KUSHWAHA', '1450440376', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '184', '17 seconds'),
(374, '::1', '1450440377', 'PANKAJ KUSHWAHA', '1450440383', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '185', '6 seconds'),
(375, '::1', '1450440383', 'PANKAJ KUSHWAHA', '1450440427', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '186', '44 seconds'),
(376, '::1', '1450440427', 'PANKAJ KUSHWAHA', '1450440480', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '187', '53 seconds'),
(377, '::1', '1450440481', 'PANKAJ KUSHWAHA', '1450440492', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '188', '11 seconds'),
(378, '::1', '1450440492', 'PANKAJ KUSHWAHA', '1450440514', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '189', '22 seconds'),
(379, '::1', '1450440514', 'PANKAJ KUSHWAHA', '1450440612', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '190', '98 seconds'),
(380, '::1', '1450440612', 'PANKAJ KUSHWAHA', '0', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '191', '0'),
(381, '::1', '1450440661', 'PANKAJ KUSHWAHA', '1450440677', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '192', '16 seconds'),
(382, '::1', '1450440677', 'PANKAJ KUSHWAHA', '1450440683', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '193', '6 seconds'),
(383, '::1', '1450440684', 'PANKAJ KUSHWAHA', '1450440748', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '194', '64 seconds'),
(384, '::1', '1450440749', 'PANKAJ KUSHWAHA', '1450440794', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '195', '45 seconds'),
(385, '::1', '1450440795', 'PANKAJ KUSHWAHA', '1450440827', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '196', '32 seconds'),
(386, '::1', '1450440827', 'PANKAJ KUSHWAHA', '1450441103', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '197', '276 seconds'),
(387, '::1', '1450441103', 'PANKAJ KUSHWAHA', '1450441128', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '198', '25 seconds'),
(388, '::1', '1450441129', 'PANKAJ KUSHWAHA', '1450441177', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '199', '48 seconds'),
(389, '::1', '1450441178', 'PANKAJ KUSHWAHA', '1450441185', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '200', '7 seconds'),
(390, '::1', '1450441186', 'PANKAJ KUSHWAHA', '1450443979', 'piechart.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '201', '2793 seconds'),
(391, '::1', '1450443980', 'PANKAJ KUSHWAHA', '1450444053', 'monthly-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '202', '73 seconds'),
(392, '::1', '1450444054', 'PANKAJ KUSHWAHA', '0', 'daily-report.php', 'pankajkushwaha1990@gmail.com', '9560248029', 'user', '203', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL,
  `emailid_user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `account_type` varchar(15) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `create_date` varchar(20) NOT NULL,
  `active` varchar(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `emailid_user`, `password`, `account_type`, `user_name`, `mobile_no`, `create_date`, `active`) VALUES
(19, 'pankajkushwaha1990@gmail.com', 'bfd25ecee9311a2bdef972afda3fbe35', 'user', 'PANKAJ KUSHWAHA', '9560248029', '2015-12-10', '1'),
(20, 'admin@gmail.com', 'bfd25ecee9311a2bdef972afda3fbe35', 'administrator', 'Pankaj', '9560248029', '2015-12-15', '1'),
(21, '', '533c5ba8368075db8f6ef201546bd71a', 'user', '', '', '2016-06-07', '1'),
(22, 'qwerty@gmail.com', 'bfd25ecee9311a2bdef972afda3fbe35', 'user', 'qwerty', '9874563210', '2016-06-07', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `current_price`
--
ALTER TABLE `current_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `share_base_table`
--
ALTER TABLE `share_base_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `share_transactions`
--
ALTER TABLE `share_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `track_user`
--
ALTER TABLE `track_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `current_price`
--
ALTER TABLE `current_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `share_base_table`
--
ALTER TABLE `share_base_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `share_transactions`
--
ALTER TABLE `share_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `track_user`
--
ALTER TABLE `track_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=393;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
