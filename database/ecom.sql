-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 02:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `user_level` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `user_level`) VALUES
(1, 'admin', 'idtfazi@gmail.com', 'Admin@123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bidding`
--

CREATE TABLE `bidding` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `seller_id` int(10) NOT NULL,
  `email` varchar(250) NOT NULL,
  `bid_amount` decimal(10,2) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bidding`
--

INSERT INTO `bidding` (`id`, `product_id`, `seller_id`, `email`, `bid_amount`, `status`) VALUES
(37, 155, 3, 'mala@gmail.com', 2515.00, 'new'),
(38, 155, 3, 'hana@gmail.com', 1615.00, 'new'),
(46, 154, 3, 'hana@gmail.com', 1452.00, 'new'),
(59, 158, 2, 'kamal@gmail.com', 30000.00, 'new'),
(63, 161, 2, 'hana@gmail.com', 2600.00, 'new'),
(64, 163, 2, 'kamal@gmail.com', 6000.00, 'new'),
(65, 160, 4, 'hana@gmail.com', 8612356.00, 'new'),
(66, 163, 2, 'hana@gmail.com', 6000.00, 'new'),
(69, 159, 3, 'kamal@gmail.com', 1602521.00, 'new');

-- --------------------------------------------------------

--
-- Table structure for table `bidding_images`
--

CREATE TABLE `bidding_images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bidding_images`
--

INSERT INTO `bidding_images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(25, 'Untitled_design_-_2023-09-24T103346.468.png', '2023-09-28 17:36:45', '0vzT5Ukm'),
(26, 'Untitled_design_-_2023-09-24T103414.153.png', '2023-09-28 17:36:45', '0vzT5Ukm'),
(27, 'Untitled_design_-_2023-09-24T103438.740.png', '2023-09-28 17:36:45', '0vzT5Ukm'),
(28, 'Untitled_design_(68).png', '2023-09-28 17:39:20', 'i02fwMWy'),
(29, 'Untitled_design_(69).png', '2023-09-28 17:39:20', 'i02fwMWy'),
(30, 'Untitled_design_(70).png', '2023-09-28 17:39:20', 'i02fwMWy'),
(31, 'Untitled_design_(71).png', '2023-09-28 17:39:20', 'i02fwMWy'),
(32, 'Untitled_design_(53).png', '2023-09-28 17:41:36', 'MZsxAStt'),
(33, 'Untitled_design_(54).png', '2023-09-28 17:41:36', 'MZsxAStt'),
(34, 'Untitled_design_(55).png', '2023-09-28 17:41:36', 'MZsxAStt'),
(35, 'Untitled_design_(56).png', '2023-09-28 17:41:36', 'MZsxAStt'),
(36, 'Untitled_design_-_2023-09-24T101435.553.png', '2023-09-28 17:43:30', '0wxVR6wR'),
(37, 'Untitled_design_-_2023-09-24T101518.154.png', '2023-09-28 17:43:30', '0wxVR6wR'),
(38, 'Untitled_design_-_2023-09-24T101537.124.png', '2023-09-28 17:43:30', '0wxVR6wR'),
(39, 'Untitled_design_-_2023-09-24T100544.058.png', '2023-09-28 17:47:04', 'NjjBRhUr'),
(40, 'Untitled_design_-_2023-09-24T100617.357.png', '2023-09-28 17:47:04', 'NjjBRhUr'),
(41, 'Untitled_design_-_2023-09-24T090208.915.png', '2023-09-28 17:48:29', 'G3wREai6'),
(42, 'Untitled_design_-_2023-09-24T090236.050.png', '2023-09-28 17:48:29', 'G3wREai6'),
(43, 'Untitled_design_-_2023-09-24T090258.290.png', '2023-09-28 17:48:29', 'G3wREai6'),
(44, 'Untitled_design_(49).png', '2023-09-30 08:06:08', 'DL0FYwYi'),
(45, 'Untitled_design_(50).png', '2023-09-30 08:06:08', 'DL0FYwYi'),
(46, 'Untitled_design_(51).png', '2023-09-30 08:06:08', 'DL0FYwYi'),
(47, 'Untitled_design_(52).png', '2023-09-30 08:06:08', 'DL0FYwYi'),
(48, 'Untitled_design_-_2023-09-24T113700.854.png', '2023-09-30 08:39:49', 'xHLxYTb1'),
(49, 'Untitled_design_-_2023-09-24T113715.029.png', '2023-09-30 08:39:49', 'xHLxYTb1'),
(50, 'Untitled_design_-_2023-09-24T113734.193.png', '2023-09-30 08:39:49', 'xHLxYTb1'),
(51, 'Untitled_design_-_2023-09-24T111132.171.png', '2023-09-30 09:38:23', 'JSSImqvP'),
(52, 'Untitled_design_-_2023-09-24T111206.056.png', '2023-09-30 09:38:23', 'JSSImqvP'),
(53, 'Untitled_design_-_2023-09-24T111237.774.png', '2023-09-30 09:38:23', 'JSSImqvP'),
(54, 'Untitled_design_-_2023-09-24T074136.020.png', '2023-10-01 17:31:12', 'h19uT5N5'),
(55, 'Untitled_design_-_2023-09-24T074153.402.png', '2023-10-01 17:31:12', 'h19uT5N5'),
(56, 'Untitled_design_(100).png', '2023-10-01 17:31:12', 'h19uT5N5'),
(57, 'Untitled_design_-_2023-09-24T085827.053.png', '2023-10-01 19:21:07', 'txKBxecz'),
(58, 'Untitled_design_-_2023-09-24T085844.530.png', '2023-10-01 19:21:07', 'txKBxecz'),
(59, 'Untitled_design_-_2023-09-24T085906.694.png', '2023-10-01 19:21:07', 'txKBxecz'),
(60, '2.png', '2023-10-01 19:47:58', 'MB8Bn3Sx'),
(61, 'Untitled_design_(1).png', '2023-10-01 19:47:58', 'MB8Bn3Sx'),
(62, 'Untitled_design_(2).png', '2023-10-01 19:47:58', 'MB8Bn3Sx'),
(63, 'Untitled_design_(3).png', '2023-10-01 19:47:58', 'MB8Bn3Sx'),
(64, 'Untitled_design_(75).png', '2023-10-02 14:23:28', 'N4o5WAJ1'),
(65, 'Untitled_design_(76).png', '2023-10-02 14:23:28', 'N4o5WAJ1'),
(66, 'Untitled_design_-_2023-09-24T113700.854.png', '2023-10-02 14:55:51', '7WWYJBZT'),
(67, 'Untitled_design_-_2023-09-24T113715.029.png', '2023-10-02 14:55:51', '7WWYJBZT'),
(68, 'Untitled_design_-_2023-09-24T113734.193.png', '2023-10-02 14:55:51', '7WWYJBZT');

-- --------------------------------------------------------

--
-- Table structure for table `bidding_product`
--

CREATE TABLE `bidding_product` (
  `product_id` int(10) NOT NULL,
  `cmn_id` varchar(255) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `category_id` int(10) NOT NULL,
  `feature_id` int(10) NOT NULL,
  `pstatus` int(10) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `image` varchar(250) NOT NULL,
  `winner` varchar(50) DEFAULT NULL,
  `bid_status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bidding_product`
--

INSERT INTO `bidding_product` (`product_id`, `cmn_id`, `product_name`, `description`, `category_id`, `feature_id`, `pstatus`, `price`, `date`, `time`, `image`, `winner`, `bid_status`) VALUES
(154, 'MZsxAStt', 'Pendrive', 'Likey used', 39, 5, 3, 1452.00, '2023-10-17', '2023-09-30 12:04:38', 'upload/1695903096.png', 'you won', 'close'),
(155, '0wxVR6wR', 'Blue Watch', 'Like new', 36, 14, 3, 1615.00, '2023-10-16', '2023-09-30 13:24:08', 'upload/1695903210.png', 'mala@gmail.com', 'close'),
(156, 'NjjBRhUr', 'Bracelete', 'Impedit aut volupta', 36, 12, 4, 27464.00, '2014-03-06', '2023-09-30 13:10:59', 'upload/1695903424.png', 'mala@gmail.com', 'close'),
(158, 'DL0FYwYi', 'External Hard Disk', 'Et error qui neque v', 39, 5, 2, 30000.00, '2023-09-30', '2023-10-01 07:39:36', 'upload/1696041368.png', 'kamal@gmail.com', 'close'),
(159, 'xHLxYTb1', 'Red car', 'Nobis incidunt non ', 35, 17, 3, 1602521.00, '2023-03-27', '2023-11-25 11:44:33', 'upload/1696043389.png', '', 'active'),
(160, 'JSSImqvP', 'Orange Car', 'Doloremque vel nisi ', 35, 16, 4, 8612356.00, '2023-12-21', '2023-10-30 11:59:07', 'upload/1696046903.png', '', 'active'),
(161, 'h19uT5N5', 'Rice Cooker', 'Brand new', 39, 7, 2, 2400.00, '2023-10-25', '2023-10-31 10:36:05', 'upload/1696161672.png', 'null', 'active'),
(162, 'txKBxecz', 'White Blouse', 'Brand new', 34, 9, 2, 1452.00, '2023-10-25', '2023-11-01 19:26:00', 'upload/1696168267.png', 'null', 'active'),
(163, 'MB8Bn3Sx', 'Head Phone', 'Like New', 39, 8, 2, 6000.00, '2023-10-25', '2023-12-01 11:50:48', 'upload/1696169878.png', 'null', 'active'),
(164, 'N4o5WAJ1', 'Phone', 'Brand New', 39, 4, 2, 29900.00, '2023-10-25', '2023-12-29 07:28:13', 'upload/1696236808.png', 'null', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(34, 'Fashion'),
(35, 'Cars'),
(36, 'Luxury'),
(39, 'Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`, `category_id`) VALUES
(4, 'Mobilephone', 39),
(5, 'Computer', 39),
(6, 'Gamming', 39),
(7, 'HomeAppliances', 39),
(8, 'Audio', 39),
(9, 'WomanFashion', 34),
(10, 'MenFashion', 34),
(11, 'Bags', 36),
(12, 'Apperal', 36),
(13, 'Accessories', 36),
(14, 'Watches', 36),
(15, 'Used Cars', 35),
(16, 'New Cars', 35),
(17, 'Rental Cars', 35);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(106, '5.webp', '2023-09-23 12:38:46', 'MPQrmilB'),
(107, '6.jpg', '2023-09-23 12:38:46', 'MPQrmilB'),
(108, '7.jpg', '2023-09-23 12:38:46', 'MPQrmilB'),
(109, '8.jpg', '2023-09-23 12:38:46', 'MPQrmilB'),
(110, '8.jpg', '2023-09-23 18:15:18', 'NCRO2Diq'),
(111, 'authentic_fila_hoodie_sweater__1695203363_fe238099_progressive.jpg', '2023-09-23 18:15:18', 'NCRO2Diq'),
(112, 'black_fila_hoodie_sweater_pull_1695203052_a458baa7_progressive.jpg', '2023-09-23 18:15:18', 'NCRO2Diq'),
(113, 'black_fila_hoodie_sweater_pull_1695203052_e1723d6e_progressive.jpg', '2023-09-23 18:15:18', 'NCRO2Diq'),
(114, 'Untitled_design_(53).png', '2023-09-23 22:29:00', 'cmNv78iq'),
(115, 'Untitled_design_(54).png', '2023-09-23 22:29:00', 'cmNv78iq'),
(116, 'Untitled_design_(55).png', '2023-09-23 22:29:00', 'cmNv78iq'),
(117, 'Untitled_design_(56).png', '2023-09-23 22:29:00', 'cmNv78iq'),
(118, 'Untitled_design_(58).png', '2023-09-23 22:37:54', 'XpiRyNpE'),
(119, 'Untitled_design_(59).png', '2023-09-23 22:37:54', 'XpiRyNpE'),
(120, 'Untitled_design_(60).png', '2023-09-23 22:37:54', 'XpiRyNpE'),
(121, 'Untitled_design_(61).png', '2023-09-23 22:37:54', 'XpiRyNpE'),
(122, '3.jpg', '2023-09-23 22:45:55', '3aYyRQYV'),
(123, 'apple_macbook_pro_2017_13_reti_1695284298_02e58280_progressive.jpg', '2023-09-23 22:45:55', '3aYyRQYV'),
(124, 'apple_macbook_pro_2017_13_reti_1695284298_3cae68cf_progressive.jpg', '2023-09-23 22:45:55', '3aYyRQYV'),
(125, 'apple_macbook_pro_2017_13_reti_1695284298_f2469224_progressive.jpg', '2023-09-23 22:45:55', '3aYyRQYV'),
(126, 'Untitled_design_(49).png', '2023-09-23 22:49:50', 'IUhk9Cym'),
(127, 'Untitled_design_(50).png', '2023-09-23 22:49:50', 'IUhk9Cym'),
(128, 'Untitled_design_(51).png', '2023-09-23 22:49:50', 'IUhk9Cym'),
(129, 'Untitled_design_(52).png', '2023-09-23 22:49:50', 'IUhk9Cym'),
(130, 'Untitled_design_(68).png', '2023-09-23 23:03:21', '2526YnNm'),
(131, 'Untitled_design_(69).png', '2023-09-23 23:03:21', '2526YnNm'),
(132, 'Untitled_design_(70).png', '2023-09-23 23:03:21', '2526YnNm'),
(133, 'Untitled_design_(71).png', '2023-09-23 23:03:21', '2526YnNm'),
(134, 'Untitled_design_(69).png', '2023-09-23 23:14:13', '2Odyh8M8'),
(135, 'Untitled_design_(70).png', '2023-09-23 23:14:13', '2Odyh8M8'),
(136, 'Untitled_design_(71).png', '2023-09-23 23:14:13', '2Odyh8M8'),
(137, 'Untitled_design_(73).png', '2023-09-24 06:19:20', 'YI5dAQkX'),
(138, 'Untitled_design_(74).png', '2023-09-24 06:19:20', 'YI5dAQkX'),
(139, 'Untitled_design_(75).png', '2023-09-24 06:19:20', 'YI5dAQkX'),
(140, 'Untitled_design_(76).png', '2023-09-24 06:19:20', 'YI5dAQkX'),
(141, 'Untitled_design_(73).png', '2023-09-24 06:24:52', 'AGcdxGoO'),
(142, 'Untitled_design_(74).png', '2023-09-24 06:24:52', 'AGcdxGoO'),
(143, 'Untitled_design_(75).png', '2023-09-24 06:24:52', 'AGcdxGoO'),
(144, 'Untitled_design_(79).png', '2023-09-24 06:35:52', 'cprLib1K'),
(145, 'Untitled_design_(80).png', '2023-09-24 06:35:52', 'cprLib1K'),
(146, 'Untitled_design_(81).png', '2023-09-24 06:35:52', 'cprLib1K'),
(147, 'Untitled_design_(82).png', '2023-09-24 06:35:53', 'cprLib1K'),
(148, 'Untitled_design_(83).png', '2023-09-24 06:41:33', 'hh7iwqgJ'),
(149, 'Untitled_design_(84).png', '2023-09-24 06:41:33', 'hh7iwqgJ'),
(150, 'Untitled_design_(85).png', '2023-09-24 06:41:33', 'hh7iwqgJ'),
(151, 'Untitled_design_(86).png', '2023-09-24 06:41:33', 'hh7iwqgJ'),
(152, 'Untitled_design_(74).png', '2023-09-24 06:48:20', '6ffpjEBb'),
(153, 'Untitled_design_(75).png', '2023-09-24 06:48:20', '6ffpjEBb'),
(154, 'Untitled_design_(88).png', '2023-09-24 06:48:20', '6ffpjEBb'),
(155, 'Untitled_design_(93).png', '2023-09-24 06:59:00', 'RPROVoyR'),
(156, 'Untitled_design_(94).png', '2023-09-24 06:59:00', 'RPROVoyR'),
(157, 'Untitled_design_(95).png', '2023-09-24 06:59:00', 'RPROVoyR'),
(158, 'Untitled_design_(41).png', '2023-09-24 07:06:51', 'nAjLl4IS'),
(159, 'Untitled_design_(42).png', '2023-09-24 07:06:51', 'nAjLl4IS'),
(160, 'Untitled_design_(43).png', '2023-09-24 07:06:51', 'nAjLl4IS'),
(161, 'Untitled_design_(44).png', '2023-09-24 07:06:51', 'nAjLl4IS'),
(162, 'Untitled_design_(41).png', '2023-09-24 07:10:37', '365dbi0G'),
(163, 'Untitled_design_(42).png', '2023-09-24 07:10:37', '365dbi0G'),
(164, 'Untitled_design_(43).png', '2023-09-24 07:10:37', '365dbi0G'),
(165, 'Untitled_design_(44).png', '2023-09-24 07:10:37', '365dbi0G'),
(166, 'Untitled_design_(45).png', '2023-09-24 07:15:03', 'hfsmRVok'),
(167, 'Untitled_design_(46).png', '2023-09-24 07:15:03', 'hfsmRVok'),
(168, 'Untitled_design_(47).png', '2023-09-24 07:15:03', 'hfsmRVok'),
(169, 'Untitled_design_(98).png', '2023-09-24 07:39:49', 'eMHCmN3H'),
(170, 'Untitled_design_(99).png', '2023-09-24 07:39:49', 'eMHCmN3H'),
(171, 'Untitled_design_-_2023-09-24T074136.020.png', '2023-09-24 07:44:15', '0Pz3VOJB'),
(172, 'Untitled_design_-_2023-09-24T074153.402.png', '2023-09-24 07:44:15', '0Pz3VOJB'),
(173, 'Untitled_design_(100).png', '2023-09-24 07:44:15', '0Pz3VOJB'),
(174, 'Untitled_design_-_2023-09-24T075705.127.png', '2023-09-24 08:00:48', 'HlblR2qb'),
(175, 'Untitled_design_-_2023-09-24T075724.041.png', '2023-09-24 08:00:48', 'HlblR2qb'),
(176, 'Untitled_design_-_2023-09-24T075746.781.png', '2023-09-24 08:00:48', 'HlblR2qb'),
(177, '2.png', '2023-09-24 08:06:36', '4vgAaEBA'),
(178, 'Untitled_design_(2).png', '2023-09-24 08:06:36', '4vgAaEBA'),
(179, 'Untitled_design_(3).png', '2023-09-24 08:06:36', '4vgAaEBA'),
(180, 'Untitled_design_(17).png', '2023-09-24 08:17:08', '0RiU9LyR'),
(181, 'Untitled_design_(18).png', '2023-09-24 08:17:08', '0RiU9LyR'),
(182, 'Untitled_design_(19).png', '2023-09-24 08:17:08', '0RiU9LyR'),
(183, 'Untitled_design_(20).png', '2023-09-24 08:17:08', '0RiU9LyR'),
(184, 'Untitled_design_(13).png', '2023-09-24 08:20:04', 'BOsSNAwk'),
(185, 'Untitled_design_(14).png', '2023-09-24 08:20:04', 'BOsSNAwk'),
(186, 'Untitled_design_(15).png', '2023-09-24 08:20:04', 'BOsSNAwk'),
(187, 'Untitled_design_(16).png', '2023-09-24 08:20:04', 'BOsSNAwk'),
(188, '1.png', '2023-09-24 08:51:18', 'Gyu8RiLH'),
(189, '2.png', '2023-09-24 08:51:18', 'Gyu8RiLH'),
(190, 'Untitled_design_-_2023-09-24T085355.320.png', '2023-09-24 08:56:41', 'CL0SQAlU'),
(191, 'Untitled_design_-_2023-09-24T085422.525.png', '2023-09-24 08:56:41', 'CL0SQAlU'),
(192, 'Untitled_design_-_2023-09-24T085455.462.png', '2023-09-24 08:56:41', 'CL0SQAlU'),
(193, 'Untitled_design_-_2023-09-24T085827.053.png', '2023-09-24 09:00:54', 'n6MgZlfQ'),
(194, 'Untitled_design_-_2023-09-24T085844.530.png', '2023-09-24 09:00:54', 'n6MgZlfQ'),
(195, 'Untitled_design_-_2023-09-24T085906.694.png', '2023-09-24 09:00:54', 'n6MgZlfQ'),
(196, 'Untitled_design_-_2023-09-24T090208.915.png', '2023-09-24 09:05:04', 'lHfdLiSv'),
(197, 'Untitled_design_-_2023-09-24T090236.050.png', '2023-09-24 09:05:04', 'lHfdLiSv'),
(198, 'Untitled_design_-_2023-09-24T090258.290.png', '2023-09-24 09:05:04', 'lHfdLiSv'),
(199, 'Untitled_design_-_2023-09-24T090620.231.png', '2023-09-24 09:09:08', 'Jgg39JBf'),
(200, 'Untitled_design_-_2023-09-24T090637.093.png', '2023-09-24 09:09:08', 'Jgg39JBf'),
(201, 'Untitled_design_-_2023-09-24T090701.865.png', '2023-09-24 09:09:08', 'Jgg39JBf'),
(202, 'Untitled_design_-_2023-09-24T091018.324.png', '2023-09-24 09:13:52', '3MSdvH4N'),
(203, 'Untitled_design_-_2023-09-24T091036.482.png', '2023-09-24 09:13:52', '3MSdvH4N'),
(204, 'Untitled_design_-_2023-09-24T091630.235.png', '2023-09-24 09:19:08', 'WQa4VbMl'),
(205, 'Untitled_design_-_2023-09-24T091648.090.png', '2023-09-24 09:19:08', 'WQa4VbMl'),
(206, 'Untitled_design_-_2023-09-24T091707.427.png', '2023-09-24 09:19:08', 'WQa4VbMl'),
(207, 'Untitled_design_-_2023-09-24T091951.462.png', '2023-09-24 09:24:05', 'yJqmDKph'),
(208, 'Untitled_design_-_2023-09-24T092013.967.png', '2023-09-24 09:24:05', 'yJqmDKph'),
(209, 'Untitled_design_-_2023-09-24T092036.309.png', '2023-09-24 09:24:05', 'yJqmDKph'),
(210, 'Untitled_design_-_2023-09-24T092112.433.png', '2023-09-24 09:24:05', 'yJqmDKph'),
(211, 'Untitled_design_-_2023-09-24T092519.095.png', '2023-09-24 09:28:01', 'CeNBIo26'),
(212, 'Untitled_design_-_2023-09-24T092543.368.png', '2023-09-24 09:28:01', 'CeNBIo26'),
(213, 'Untitled_design_-_2023-09-24T092936.135.png', '2023-09-24 09:31:48', 'k5HFJMSi'),
(214, 'Untitled_design_-_2023-09-24T093005.490.png', '2023-09-24 09:31:48', 'k5HFJMSi'),
(215, 'Untitled_design_-_2023-09-24T093256.159.png', '2023-09-24 09:35:42', 'NXDb7x7M'),
(216, 'Untitled_design_-_2023-09-24T093319.785.png', '2023-09-24 09:35:42', 'NXDb7x7M'),
(217, 'Untitled_design_-_2023-09-24T093338.798.png', '2023-09-24 09:35:42', 'NXDb7x7M'),
(218, 'Untitled_design_-_2023-09-24T093853.049.png', '2023-09-24 09:41:29', 'EsH7W8Wy'),
(219, 'Untitled_design_-_2023-09-24T093911.099.png', '2023-09-24 09:41:29', 'EsH7W8Wy'),
(220, 'Untitled_design_-_2023-09-24T093927.592.png', '2023-09-24 09:41:29', 'EsH7W8Wy'),
(221, 'Untitled_design_-_2023-09-24T094530.251.png', '2023-09-24 09:48:46', '21ju5BY6'),
(222, 'Untitled_design_-_2023-09-24T094549.278.png', '2023-09-24 09:48:46', '21ju5BY6'),
(223, 'Untitled_design_-_2023-09-24T094614.897.png', '2023-09-24 09:48:46', '21ju5BY6'),
(224, 'Untitled_design_-_2023-09-24T095041.870.png', '2023-09-24 09:53:31', 'KgD15SR7'),
(225, 'Untitled_design_-_2023-09-24T095103.346.png', '2023-09-24 09:53:31', 'KgD15SR7'),
(226, 'Untitled_design_-_2023-09-24T095123.766.png', '2023-09-24 09:53:31', 'KgD15SR7'),
(227, 'Untitled_design_-_2023-09-24T100544.058.png', '2023-09-24 10:09:37', 'PmAuHRdf'),
(228, 'Untitled_design_-_2023-09-24T100617.357.png', '2023-09-24 10:09:37', 'PmAuHRdf'),
(229, 'Untitled_design_-_2023-09-24T101435.553.png', '2023-09-24 10:17:47', 'jgi3ymRN'),
(230, 'Untitled_design_-_2023-09-24T101518.154.png', '2023-09-24 10:17:47', 'jgi3ymRN'),
(231, 'Untitled_design_-_2023-09-24T101537.124.png', '2023-09-24 10:17:47', 'jgi3ymRN'),
(232, 'Untitled_design_-_2023-09-24T101813.496.png', '2023-09-24 10:21:12', 'pEUNWljE'),
(233, 'Untitled_design_-_2023-09-24T101835.179.png', '2023-09-24 10:21:12', 'pEUNWljE'),
(234, 'Untitled_design_-_2023-09-24T101855.664.png', '2023-09-24 10:21:12', 'pEUNWljE'),
(235, 'Untitled_design_-_2023-09-24T102139.136.png', '2023-09-24 10:23:39', 'TlM4TTER'),
(236, 'Untitled_design_-_2023-09-24T102159.129.png', '2023-09-24 10:23:39', 'TlM4TTER'),
(237, 'Untitled_design_-_2023-09-24T102216.429.png', '2023-09-24 10:23:39', 'TlM4TTER'),
(238, 'Untitled_design_-_2023-09-24T103346.468.png', '2023-09-24 10:42:06', 'Wbha3yQX'),
(239, 'Untitled_design_-_2023-09-24T103414.153.png', '2023-09-24 10:42:06', 'Wbha3yQX'),
(240, 'Untitled_design_-_2023-09-24T103438.740.png', '2023-09-24 10:42:06', 'Wbha3yQX'),
(241, 'Untitled_design_-_2023-09-24T110710.309.png', '2023-09-24 11:11:04', 'AFf89KA7'),
(242, 'Untitled_design_-_2023-09-24T110750.900.png', '2023-09-24 11:11:04', 'AFf89KA7'),
(243, 'Untitled_design_-_2023-09-24T110817.410.png', '2023-09-24 11:11:04', 'AFf89KA7'),
(244, 'Untitled_design_-_2023-09-24T111132.171.png', '2023-09-24 11:14:19', 'CHcVMzc3'),
(245, 'Untitled_design_-_2023-09-24T111206.056.png', '2023-09-24 11:14:19', 'CHcVMzc3'),
(246, 'Untitled_design_-_2023-09-24T111237.774.png', '2023-09-24 11:14:19', 'CHcVMzc3'),
(247, 'Untitled_design_-_2023-09-24T111704.015.png', '2023-09-24 11:19:22', 'aanfRgex'),
(248, 'Untitled_design_-_2023-09-24T111747.059.png', '2023-09-24 11:19:22', 'aanfRgex'),
(249, 'Untitled_design_-_2023-09-24T112009.064_-_Copy.png', '2023-09-24 11:23:08', 'jVv8oAbI'),
(250, 'Untitled_design_-_2023-09-24T112046.102.png', '2023-09-24 11:23:08', 'jVv8oAbI'),
(251, 'Untitled_design_-_2023-09-24T112113.007.png', '2023-09-24 11:23:08', 'jVv8oAbI'),
(252, 'Untitled_design_-_2023-09-24T112430.831.png', '2023-09-24 11:27:02', 'hKzfn5Zg'),
(253, 'Untitled_design_-_2023-09-24T112454.356.png', '2023-09-24 11:27:02', 'hKzfn5Zg'),
(254, 'Untitled_design_-_2023-09-24T112516.021.png', '2023-09-24 11:27:02', 'hKzfn5Zg'),
(255, 'Untitled_design_-_2023-09-24T112829.316.png', '2023-09-24 11:32:19', 'WvxZhub5'),
(256, 'Untitled_design_-_2023-09-24T112854.626.png', '2023-09-24 11:32:19', 'WvxZhub5'),
(257, 'Untitled_design_-_2023-09-24T112920.466.png', '2023-09-24 11:32:19', 'WvxZhub5'),
(258, 'Untitled_design_-_2023-09-24T113312.410.png', '2023-09-24 11:36:06', 'oLaBOyIl'),
(259, 'Untitled_design_-_2023-09-24T113338.233.png', '2023-09-24 11:36:06', 'oLaBOyIl'),
(260, 'Untitled_design_-_2023-09-24T113400.175.png', '2023-09-24 11:36:06', 'oLaBOyIl'),
(261, 'Untitled_design_-_2023-09-24T113700.854.png', '2023-09-24 11:40:20', 'gpyMH6Xe'),
(262, 'Untitled_design_-_2023-09-24T113715.029.png', '2023-09-24 11:40:20', 'gpyMH6Xe'),
(263, 'Untitled_design_-_2023-09-24T113734.193.png', '2023-09-24 11:40:20', 'gpyMH6Xe'),
(264, 'Untitled_design_-_2023-09-25T061434.245.png', '2023-09-25 06:19:12', 'wBCLvscI'),
(265, 'Untitled_design_-_2023-09-25T061502.426.png', '2023-09-25 06:19:12', 'wBCLvscI'),
(266, 'Untitled_design_-_2023-09-25T061529.332.png', '2023-09-25 06:19:12', 'wBCLvscI'),
(267, 'Untitled_design_-_2023-09-25T061607.004.png', '2023-09-25 06:19:12', 'wBCLvscI');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`) VALUES
(5, 'Hana', 'hana@gmail.com', 'Hana@123'),
(7, 'mala', 'mala@gmail.com', 'Mala@123'),
(9, 'Irfani', 'idtfazi@gmail.com', 'Irfani@123'),
(14, 'kamal', 'kamal@gmail.com', 'Kamal@123');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `message`, `timestamp`, `status`) VALUES
(15, 'kamal@gmail.com', 'Congradulation!....You Won the Bid. Product ID:158', '2023-10-01 02:09:36', 'new'),
(16, 'kamal@gmail.com', 'Congradulation!....You Won the Bid. Product ID:157', '2023-10-01 04:10:28', 'new'),
(17, 'kamal@gmail.com', 'Congradulation!....You Won the Bid. Product ID:158', '2023-10-01 05:03:17', 'new'),
(18, 'hana@gmail.com', 'Congradulation!....You Won the Bid. Product ID:161', '2023-10-01 13:16:43', 'new'),
(19, 'hana@gmail.com', 'Congradulation!....You Won the Bid. Product ID:161', '2023-10-01 13:18:53', 'new'),
(20, 'hana@gmail.com', 'Congradulation!....You Won the Bid. Product ID:161', '2023-10-01 13:19:10', 'new'),
(21, 'hana@gmail.com', 'Congradulation!....You Won the Bid. Product ID:161', '2023-10-01 13:30:55', 'new'),
(22, 'hana@gmail.com', 'Congradulation!....You Won the Bid. Product ID:161', '2023-10-01 13:31:33', 'new'),
(23, 'hana@gmail.com', 'Congradulation!....You Won the Bid. Product ID:161', '2023-10-01 13:31:48', 'new'),
(24, 'kamal@gmail.com', 'Congradulation!....You Won the Bid. Product ID:158', '2023-10-01 18:21:01', 'new'),
(25, 'kamal@gmail.com', 'Congradulation!....You Won the Bid. Product ID:163', '2023-10-01 18:21:35', 'new'),
(26, 'hana@gmail.com', 'Congradulation!....You Won the Bid. Product ID:160', '2023-10-01 18:22:19', 'new'),
(27, 'kamal@gmail.com', 'Congradulation!....You Won the Bid. Product ID:163', '2023-10-02 06:52:09', 'new'),
(28, 'kamal@gmail.com', 'Congradulation!....You Won the Bid. Product ID:163', '2023-10-02 06:52:39', 'new'),
(29, 'kamal@gmail.com', 'Congradulation!....You Won the Bid. Product ID:163', '2023-10-02 06:59:35', 'new'),
(30, 'kamal@gmail.com', 'Congradulation!....You Won the Bid. Product ID:163', '2023-10-02 07:01:52', 'new'),
(31, 'hana@gmail.com', 'Congradulation!....You Won the Bid. Product ID:154', '2023-10-02 08:45:51', 'new'),
(32, 'kamal@gmail.com', 'Congradulation!....You Won the Bid. Product ID:163', '2023-10-02 08:48:57', 'new'),
(33, 'kamal@gmail.com', 'Congradulation!....You Won the Bid. Product ID:159', '2023-10-12 08:16:29', 'new'),
(34, 'kamal@gmail.com', 'Congradulation!....You Won the Bid. Product ID:159', '2023-10-12 08:16:50', 'new'),
(35, 'kamal@gmail.com', 'Congradulation!....You Won the Bid. Product ID:163', '2023-10-12 08:17:29', 'new'),
(36, 'hana@gmail.com', 'Congradulation!....You Won the Bid. Product ID:160', '2023-10-12 08:17:33', 'new'),
(37, 'kamal@gmail.com', 'Congradulation!....You Won the Bid. Product ID:159', '2023-10-12 09:10:51', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `total_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_item_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `order-id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(10) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `cmn_id` varchar(255) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `category_id` int(10) NOT NULL,
  `feature_id` int(10) NOT NULL,
  `pstatus` varchar(250) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `cutoff_price` decimal(10,2) NOT NULL,
  `stock` int(10) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `cmn_id`, `product_name`, `description`, `category_id`, `feature_id`, `pstatus`, `price`, `cutoff_price`, `stock`, `image`) VALUES
(94, 'cmNv78iq', 'Flash Drive', 'Move files from your phone to your computer easily with the 32GB Ultra Dual Drive Go from SanDisk.', 39, 5, 'Like New', 3900.00, 5000.00, 10, 'upload/1695488340.png'),
(95, 'XpiRyNpE', 'USB Type-C Flash Drive', 'Quickly and easily offload files from your USB Type-C equipped smartphone or tablet with the 64GB Ultra Dual Drive USB Type-C Flash Drive from SanDisk. ', 39, 5, 'Heavily Used', 4500.00, 5000.00, 78, 'upload/1695488874.png'),
(96, '3aYyRQYV', 'apple macbook pro 2017', 'Great condition. Need to upgrade thus selling.', 39, 5, 'Lightly Used', 350000.00, 400000.00, 3, 'upload/1695489355.jpg'),
(97, 'IUhk9Cym', 'WD My Passport 4TB USB 3.2 Portable External Hard Drive', 'The My Passport drive is trusted, portable storage that gives you the confidence and freedom to drive forward in life. ', 39, 5, 'Brand New', 39900.00, 40000.00, 10, 'upload/1695489590.png'),
(98, '2526YnNm', 'Lenovo ThinkPad T460s Computer Laptop - 14\" FHD - i7 6th gen / 8GB Ram / 256GB SSD', 'CLEARANCE SALE!!! FOR LIMITED SET ONLY', 39, 5, 'Like New', 99000.00, 12000.00, 5, 'upload/1695490401.png'),
(99, '2Odyh8M8', 'T590 15.6” Touchscreen Lenovo ThinkPad Business Laptop/ i7-8665U 16GB RAM 512GB NVMe SSD/ Windows 11 Pro Microsoft Office 2021', 'Corporate set , barely used ', 39, 5, 'Brand New', 28000.00, 30000.00, 5, 'upload/1695491053.png'),
(100, 'YI5dAQkX', 'iPhone 14 Pro Max', 'Housing Condition: Tiny Paint peel, Charging port area scractches', 39, 4, 'Like New', 387407.00, 400000.00, 3, 'upload/1695516560.png'),
(101, 'AGcdxGoO', 'iPhone 14 Pro', 'Screen Condition: Minor ScratchesBody Condition: Minor Scratches', 39, 4, 'Lightly Used', 345403.00, 352000.00, 10, 'upload/1695517176.png'),
(102, 'cprLib1K', 'iPhone 14 Plus', 'Battery Health :97%\r\nApple warranty till 01Dec2023', 39, 4, 'Like New', 345079.00, 350000.00, 10, 'upload/1695517552.png'),
(103, 'hh7iwqgJ', 'iPhone 14', '\r\nPhone condition: screen scratches &  discolourisation\r\nComes w/ Charging Cable (Not Original)', 39, 4, 'Like New', 282073.00, 300000.00, 3, 'upload/1695517893.png'),
(104, '6ffpjEBb', 'iPhone 12 Pro Max', 'Screen Condition: No scratches at all\r\nBody Condition: Scratches on housing .', 39, 4, 'Lightly Used', 235546.00, 240000.00, 5, 'upload/1695518300.png'),
(105, 'RPROVoyR', ' iPhone 12', 'Screen Condition: as New\r\nHousing Condition: Micro Paint peel', 39, 4, 'Heavily Used', 161231.00, 165000.00, 4, 'upload/1695518940.png'),
(106, 'nAjLl4IS', 'PlayStation 5 Console Disc Version', 'Experience lightning-fast loading with an ultra-high speed SSD, deeper immersion with support for haptic feedback, adaptive triggers, and 3D audio, and an all-new generation of incredible PlayStation® games.', 39, 6, 'Brand New', 179999.00, 189999.00, 3, 'upload/1695519410.png'),
(107, '365dbi0G', 'Sony Dual Sense Wireless Controller (White)', 'Share Button, PS Button, Mute Button\r\nUSB Type-C Port, Stereo Headset Jack\r\nClickable 2-Point Capacitive Touch Pad', 39, 6, 'Brand New', 29900.00, 30000.00, 5, 'upload/1695519637.png'),
(108, 'hfsmRVok', 'Sony Dual Sense Wireless Controller (Midnight Black)', 'hare Button, PS Button, Mute Button\r\nUSB Type-C Port, Stereo Headset Jack\r\nClickable 2-Point Capacitive Touch Pad', 39, 6, 'Well Used', 29900.00, 32000.00, 10, 'upload/1695519903.png'),
(109, 'eMHCmN3H', 'Levoit Core Mini Portable Desktop H13 True HEPA Air Purifier | Aroma Diffuser | Small Room', 'If you struggle with allergies, low-quality sleep, congestion, or symptoms caused by pet dander, the Levoit Core Mini Air Purifier is ready to help you create a healthy space.', 39, 7, 'Brand New', 27464.00, 30000.00, 3, 'upload/1695521389.png'),
(110, '0Pz3VOJB', 'TAKAHI Electric Crockery Pot (0.7L)', 'Ideal for making porridge for baby & the elderly.\r\nElegant red housing to suit modern kitchen.\r\nRemovable ceramic pot for easy serving.', 39, 7, 'Brand New', 13861.00, 14000.00, 5, 'upload/1695521655.png'),
(111, 'HlblR2qb', 'Heavy Duty Safety Vertical Power Strip Extension Socket Tower with USB C PD30W & QC3.0 Wirless Charger Trailing Socket Extension Cord', 'QC3.0 & PD 30W Fast Charger port\r\nWireless Charger: comply with most of current smart phone\r\nFire Retardant Material: PC Plastic Housing is Safer and Durable.', 39, 7, 'Lightly Used', 17767.00, 20000.00, 4, 'upload/1695522648.png'),
(112, '4vgAaEBA', 'Sony WH-1000XM5 Noise-Canceling Wireless Over-Ear Headphones', '30mm Dynamic Drivers\r\nUp to 30 Hours of Playback with ANC On\r\n8-Microphone Active Noise Cancellation', 39, 8, 'Heavily Used', 109999.00, 0.00, 4, 'upload/1695522996.png'),
(113, '0RiU9LyR', 'BOYA BY-M3-OP Clip-On Digital Lavalier Microphone for DJI OSMO Pocket', 'The Boya BY-M3-OP is a lavalier microphone for the DJI Osmo Pocket Gimbal Camera. ', 39, 8, 'Well Used', 9999.00, 11000.00, 3, 'upload/1695523628.png'),
(114, 'BOsSNAwk', 'Zoom H6 All Black 6-Input / 6-Track Portable Handy Recorder with Single Mic Capsule (Black)', 'While the original gray H6 is bundled with two mic capsules and premium accessories, the Zoom H6 All Black portable handheld recorder features a sleek black finish and a single mic capsule', 39, 8, 'Well Used', 113500.00, 0.00, 4, 'upload/1695523804.png'),
(116, 'CL0SQAlU', 'Vintage Brand New Milk carton novelty cute cartoon print 1/2-sleeve Blouse', 'M / EU 38 / UK 10 / US 6', 34, 9, 'Heavily Used', 3554.00, 0.00, 10, 'upload/1695526001.png'),
(117, 'n6MgZlfQ', 'White Shirt Puff Blouse', 'M / EU 38 / UK 10 / US 6', 34, 9, 'Heavily Used', 1615.00, 1650.00, 4, 'upload/1695526254.png'),
(118, 'lHfdLiSv', '(AUTHENTIC) Essentials Fear of God SS22 Relax Fit Hoodie', 'Essentials Fear of God SS22 Relax Fit Hoodie', 34, 10, 'Lightly Used', 50081.00, 5500.00, 42, 'upload/1695526504.png'),
(119, 'Jgg39JBf', 'Fear Of God Essentials Floral Photo Tee SS19', 'Notes on condition\r\ntried on once, too small for me', 34, 10, 'Brand New', 19386.00, 20000.00, 5, 'upload/1695526748.png'),
(120, '3MSdvH4N', 'Essentials SS23 black T SIZE M', 'Fear of God Essentials\r\nFriend gift, do not think is real', 34, 10, 'Heavily Used', 6462.00, 0.00, 8, 'upload/1695527032.png'),
(121, 'WQa4VbMl', 'Louis Vuitton Multi Pochette Accessoires Crossbody bag in Monogram Coated Canvas, Gold Hardware', 'This item is in very good condition.', 36, 11, 'Lightly Used', 775460.00, 78000.00, 3, 'upload/1695527348.png'),
(122, 'yJqmDKph', 'Burberry Freya Tote bag in Raffia, Gold Hardware', 'This bag is in good condition', 36, 11, 'Heavily Used', 46527.00, 46600.00, 8, 'upload/1695527645.png'),
(123, 'CeNBIo26', 'Burberry Louise Crossbody bag in Canvas, Gold Hardware', 'All items are again authenticated by our in-house leather atelier in Singapore for authenticity.', 36, 11, 'Lightly Used', 4071.00, 0.00, 4, 'upload/1695527881.png'),
(124, 'k5HFJMSi', 'Moschino T-shirt', 'Authentic \r\nWore for once only ', 36, 12, 'Like New', 31664.00, 32664.00, 10, 'upload/1695528108.png'),
(125, 'NXDb7x7M', 'Fendi pants with belt', 'wore once only', 36, 12, 'Well Used', 96932.00, 97932.00, 78, 'upload/1695528342.png'),
(126, 'EsH7W8Wy', 'Blue label crestbridge Red Checkered Dress', 'size 38\r\nlength 90\r\nstretchable knit', 36, 12, 'Brand New', 84008.00, 0.00, 3, 'upload/1695528688.png'),
(127, '21ju5BY6', '[FURTHER DISCOUNTED] [Full set EU Size 52] 18K Pre-loved Cartier Diamond Heart Ring in White Gold | Certificate and Box #DR00731', 'Brand\r\nCartier', 36, 13, 'Like New', 1800.00, 2000.00, 8, 'upload/1695529126.png'),
(128, 'KgD15SR7', '90CM 3CM Gucci Double G Buckle Belt gold blue leather with authenticity label', 'Bought from VC, authenticated by their staff. With authentication label. Buy with confidence', 36, 13, 'Heavily Used', 300.00, 450.00, 8, 'upload/1695529411.png'),
(129, 'PmAuHRdf', '[RELOCATION SALES] [Full set: EU Size 58] 18k Pre-loved Bvlgari B.zero1 One Band Ring in White Gold | With Certificate and Box #GR00439', '18k Pre-loved Bvlgari B.zero1 One Band Ring in White Gold\r\nEU Size: 58\r\nWith Box and Certificate \r\nPreloved', 36, 13, 'Like New', 1480.00, 1900.00, 10, 'upload/1695530377.png'),
(130, 'jgi3ymRN', 'Pre-Owned Panerai Luminor PAM 1033', 'Used once or twice. As good as new.', 36, 14, 'Brand New', 11401.00, 12000.00, 4, 'upload/1695530867.png'),
(131, 'pEUNWljE', 'Pre-Owned Oris Big Crown Propilot 01 751 7761 4164-07 3 20 0', 'It is in the good condition', 36, 14, 'Heavily Used', 2500.00, 2680.00, 3, 'upload/1695531072.png'),
(132, 'TlM4TTER', 'Pre-Owned Grand Seiko Heritage Collection Caliber 9S 20th An', 'Used once or twice. As good as new.', 36, 14, 'Brand New', 6832.00, 7000.00, 9, 'upload/1695531219.png'),
(133, 'Wbha3yQX', 'Mercedes-Benz E-Class Saloon Diesel E220d AMG Line (A)', 'Highest Spec with E63 full Body kit. We provide full loan services, 100% loan approval, lowest interest rate banks 2.28%, inhouse finance, insurance available. Call our sales agent today! Powered by 2.0l turbocharged diesel engine producing 191bhp an', 35, 15, 'Lightly Used', 109800.00, 109999.00, 4, 'upload/1695532326.png'),
(134, 'AFf89KA7', 'Toyota Corolla Axio Hybrid 1.5 (A)', 'Hybrid-petrol 1.5L 4 cylinders inline 16v engine. CVT-I transmission producing 97bhp and 140nm torque. SRS airbags. Auto retractable side mirror. View specs of the Toyota Corolla Axio Hybrid (2015-2022)', 35, 15, 'Heavily Used', 680562.00, -1.00, 3, 'upload/1695534064.png'),
(135, 'CHcVMzc3', 'Opel Crossland X 1.2 Turbo Enjoy (A', '3k drive away\r\n1k deposit\r\n$73880 \r\n$11k depre a year\r\nFull loan $13XX Monthly\r\nMost affordable PARF SUV right now', 35, 15, 'Like New', 739888.00, 745000.00, 5, 'upload/1695534259.png'),
(136, 'aanfRgex', '2019 HONDA FREED HYBRID', 'It is in the usable condition', 35, 17, 'Well Used', 299005.00, 0.00, 5, 'upload/1695534562.png'),
(137, 'jVv8oAbI', 'Mazda 3 Rental Car Mild Hybrid Brand New Executive Expat Family Car 1 Year Low Mileage Well Maintained No Hidden Cost', 'It is in the good condition', 35, 15, 'Lightly Used', 5200000.00, 0.00, 10, 'upload/1695534788.png'),
(138, 'hKzfn5Zg', 'Wedding Car Rental with Driver', 'It is in the good condition', 35, 17, 'Heavily Used', 7600.00, 8000.00, 3, 'upload/1695535022.png'),
(139, 'WvxZhub5', 'Toyota Sienta 1.5 Elegance (A)', 'Transmission: A\r\nFuel Consumption: 25km/litre\r\nFuel Type: Petrol', 35, 16, 'Brand New', 1809880.00, 1999990.00, 3, 'upload/1695535339.png'),
(140, 'oLaBOyIl', 'Toyota Corolla Altis 1.6 Standard (A)', 'Transmission: CVT\r\nFuel Consumption: 6.4km/litre\r\nFuel Type: Petrol', 35, 16, 'Brand New', 55861599.00, 56861599.00, 2, 'upload/1695535566.png'),
(141, 'gpyMH6Xe', 'Toyota Corolla Altis 1.6 Elegance (A)', 'Transmission: A\r\nFuel Consumption: 15.6km/litre\r\nFuel Type: Petrol', 35, 16, 'Brand New', 57477142.00, 58477142.00, 3, 'upload/1695535820.png'),
(142, 'wBCLvscI', 'Coat Pool Comfort Jacket', 'It is in good condition', 34, 9, 'Brand New', 2800.00, 3200.00, 5, 'upload/1695602952.png');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(10) NOT NULL,
  `Seller_name` varchar(20) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Contact_no` int(10) NOT NULL,
  `Email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `Seller_name`, `Address`, `Contact_no`, `Email`) VALUES
(2, 'Hana', 'BethanyVelazquez', 773300274, 'hana@gmail.com'),
(3, 'Faizal', 'BasilBailey', 776622331, 'mugav@mailinator.com'),
(4, 'OriMorales', 'Harum exercitation o', 761234567, 'myravo@mailinator.com'),
(5, 'EveHolt', 'Sed aliqua Amet er', 661234674, 'cymyma@mailinator.com');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bidding`
--
ALTER TABLE `bidding`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bidding_ibfk_1` (`product_id`),
  ADD KEY `bidding_ibfk_2` (`seller_id`);

--
-- Indexes for table `bidding_images`
--
ALTER TABLE `bidding_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bidding_product`
--
ALTER TABLE `bidding_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `pstatus` (`pstatus`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `feature_id` (`feature_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order-id` (`order-id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `feature_id` (`feature_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bidding`
--
ALTER TABLE `bidding`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `bidding_images`
--
ALTER TABLE `bidding_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `bidding_product`
--
ALTER TABLE `bidding_product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_item_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bidding`
--
ALTER TABLE `bidding`
  ADD CONSTRAINT `bidding_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `bidding_product` (`product_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bidding_ibfk_2` FOREIGN KEY (`seller_id`) REFERENCES `seller` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bidding_product`
--
ALTER TABLE `bidding_product`
  ADD CONSTRAINT `bidding_product_ibfk_1` FOREIGN KEY (`pstatus`) REFERENCES `seller` (`id`),
  ADD CONSTRAINT `bidding_product_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `bidding_product_ibfk_3` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`);

--
-- Constraints for table `features`
--
ALTER TABLE `features`
  ADD CONSTRAINT `features_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `order_item_ibfk_1` FOREIGN KEY (`order-id`) REFERENCES `order` (`order_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
