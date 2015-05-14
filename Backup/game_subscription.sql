-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2015 at 06:22 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `game_subscription`
--
CREATE DATABASE IF NOT EXISTS `game_subscription` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `game_subscription`;

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

CREATE TABLE IF NOT EXISTS `actions` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `action` varchar(150) NOT NULL,
  `date_time` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=153 ;

--
-- Dumping data for table `actions`
--

INSERT INTO `actions` (`id`, `user_id`, `action`, `date_time`) VALUES
(3, 16, '0', ''),
(4, 16, '0', 'Jan 29, 2015  10:22:34'),
(5, 16, 'Signin', 'Jan 29, 2015  10:28:53'),
(6, 16, 'Sign in', 'Jan 29, 2015  14:30:33'),
(7, 16, 'Registered 123@sample.com', 'Jan 29, 2015  10:33:04'),
(8, 21, 'Sign in', 'Jan 29, 2015  14:37:43'),
(9, 21, 'Sign in', 'Jan 29, 2015  14:38:00'),
(10, 21, 'Sign in', 'Jan 29, 2015  14:44:30'),
(11, 21, 'Use Card #: . 2 .  Earned:  . 20', 'Jan 30, 2015  10:20:44'),
(12, 21, 'Use Card #: 15  Earned: 30 points', 'Jan 30, 2015  10:22:08'),
(13, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:45:06'),
(14, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:45:07'),
(15, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:45:08'),
(16, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:45:09'),
(17, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:45:09'),
(18, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:45:23'),
(19, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:45:23'),
(20, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:45:24'),
(21, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:45:24'),
(22, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:45:24'),
(23, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:45:24'),
(24, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:45:35'),
(25, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:45:35'),
(26, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:45:35'),
(27, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:46:39'),
(28, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:46:41'),
(29, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:46:41'),
(30, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:47:42'),
(31, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:47:43'),
(32, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:47:44'),
(33, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:47:44'),
(34, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:47:44'),
(35, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:48:01'),
(36, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:48:01'),
(37, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:48:01'),
(38, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:48:05'),
(39, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:48:05'),
(40, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:48:20'),
(41, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:49:27'),
(42, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:49:28'),
(43, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:50:35'),
(44, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:50:37'),
(45, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:50:50'),
(46, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:51:23'),
(47, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:51:48'),
(48, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:51:49'),
(49, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:52:10'),
(50, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:52:25'),
(51, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:52:35'),
(52, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:52:36'),
(53, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:52:37'),
(54, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:53:47'),
(55, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:53:54'),
(56, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:53:56'),
(57, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:55:09'),
(58, 21, 'Converted  points to Invalid Convertion days of su', 'Jan 30, 2015  13:55:10'),
(59, 21, 'Converted  points to 30 days of subscription', 'Jan 30, 2015  14:01:13'),
(60, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  14:02:15'),
(61, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  14:09:26'),
(62, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  14:09:49'),
(63, 21, 'Use Card #: 22  Earned: 30 points', 'Jan 30, 2015  14:18:09'),
(64, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  14:18:15'),
(65, 21, 'Converted  points to Invalid Convertion days of subscription', 'Jan 30, 2015  14:52:24'),
(66, 21, 'Converted  points to Invalid Convertion days of subscription', 'Jan 30, 2015  14:52:28'),
(67, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  14:52:59'),
(68, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  14:52:59'),
(69, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  14:53:00'),
(70, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  14:53:01'),
(71, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  14:53:01'),
(72, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  14:53:01'),
(73, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  14:53:03'),
(74, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  14:53:03'),
(75, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  14:53:03'),
(76, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  14:53:03'),
(77, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  14:53:19'),
(78, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  14:53:35'),
(79, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  14:53:35'),
(80, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  14:53:36'),
(81, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  14:53:38'),
(82, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  14:59:37'),
(83, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  14:59:39'),
(84, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  14:59:49'),
(85, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  15:00:01'),
(86, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  15:00:13'),
(87, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  15:00:23'),
(88, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  15:06:33'),
(89, 21, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  15:07:55'),
(90, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  15:08:00'),
(91, 21, 'Converted 60 points to 65 days of subscription', 'Jan 30, 2015  15:08:04'),
(92, 21, 'Converted 60 points to 65 days of subscription', 'Jan 30, 2015  15:08:08'),
(93, 21, 'Converted 60 points to 65 days of subscription', 'Jan 30, 2015  15:08:14'),
(94, 21, 'Converted 60 points to 65 days of subscription', 'Jan 30, 2015  15:08:21'),
(95, 21, 'Converted 60 points to 65 days of subscription', 'Jan 30, 2015  15:08:24'),
(96, 21, 'Converted 60 points to 65 days of subscription', 'Jan 30, 2015  15:08:40'),
(97, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  15:08:46'),
(98, 21, 'Sign out', 'Jan 30, 2015  15:13:25'),
(99, 22, 'Sign in', 'Jan 30, 2015  15:13:51'),
(100, 22, 'Use Card #: 21,  Total points: 20 points, Total days of subscription: 180 ', 'Jan 30, 2015  15:14:03'),
(101, 22, 'Use Card #: 20,  Total points: 30 points, Total days of subscription: 270 ', 'Jan 30, 2015  15:14:14'),
(102, 22, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  15:14:22'),
(103, 22, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  15:14:25'),
(104, 22, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  15:14:27'),
(105, 22, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  15:14:28'),
(106, 22, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  15:14:29'),
(107, 22, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  15:14:29'),
(108, 22, 'Converted 60 points to 65 days of subscription', 'Jan 30, 2015  15:20:02'),
(109, 22, 'Converted 60 points to 65 days of subscription', 'Jan 30, 2015  15:20:04'),
(110, 22, 'Converted 60 points to 65 days of subscription', 'Jan 30, 2015  15:20:04'),
(111, 22, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  15:20:19'),
(112, 22, 'Converted 30 points to 30 days of subscription', 'Jan 30, 2015  15:20:43'),
(113, 22, 'Sign out', 'Jan 30, 2015  15:29:27'),
(114, 21, 'Sign in', 'Jan 30, 2015  15:29:37'),
(115, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  15:48:03'),
(116, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  15:48:04'),
(117, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  15:48:04'),
(118, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  15:48:04'),
(119, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  15:48:04'),
(120, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  15:48:04'),
(121, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  15:48:05'),
(122, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  15:48:05'),
(123, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  15:48:05'),
(124, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  15:48:05'),
(125, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  15:48:06'),
(126, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  15:48:06'),
(127, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  15:48:06'),
(128, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  15:48:06'),
(129, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  15:48:06'),
(130, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  15:48:07'),
(131, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  15:48:07'),
(132, 21, 'Use Card #: 15,  Total points: 999996969 points, Total days of subscription: 5115 ', 'Jan 30, 2015  15:48:18'),
(133, 21, 'Converted 90 points to 100 days of subscription', 'Jan 30, 2015  15:48:24'),
(134, 21, 'Sign out', 'Jan 30, 2015  16:15:44'),
(135, 22, 'Sign in', 'Jan 30, 2015  16:15:52'),
(136, 22, 'Sign out', 'Jan 30, 2015  17:42:45'),
(137, 21, 'Sign in', 'Jan 30, 2015  17:42:58'),
(138, 21, 'Sign out', 'Jan 30, 2015  17:43:21'),
(139, 22, 'Sign in', 'Jan 30, 2015  17:43:31'),
(140, 22, 'Sign out', 'Jan 30, 2015  18:04:35'),
(141, 23, 'Sign in', 'Jan 30, 2015  18:12:20'),
(142, 23, 'Sign out', 'Jan 30, 2015  18:16:31'),
(143, 24, 'Sign in', 'Jan 30, 2015  18:17:32'),
(144, 24, 'Sign out', 'Jan 31, 2015  12:24:17'),
(145, 25, 'Sign in', 'Jan 31, 2015  12:40:17'),
(146, 25, 'Sign out', 'Jan 31, 2015  12:46:11'),
(147, 16, 'Sign in', 'Jan 31, 2015  12:46:18'),
(148, 16, 'Sign out', 'Jan 31, 2015  12:46:44'),
(149, 25, 'Sign in', 'Jan 31, 2015  12:46:57'),
(150, 25, 'Use Card #: 18,  Total points: 10 points, Total days of subscription: 90 ', 'Jan 31, 2015  13:19:31'),
(151, 25, 'Sign out', 'Jan 31, 2015  13:21:35'),
(152, 25, 'Sign in', 'Jan 31, 2015  13:21:44');

-- --------------------------------------------------------

--
-- Table structure for table `subs_card`
--

CREATE TABLE IF NOT EXISTS `subs_card` (
  `id` int(16) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `pin_no` int(4) NOT NULL,
  `subs_type` int(10) NOT NULL,
  `users_id` int(15) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `users.id` (`users_id`),
  KEY `subs_type` (`subs_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `subs_card`
--

INSERT INTO `subs_card` (`id`, `pin_no`, `subs_type`, `users_id`) VALUES
(0000000000000001, 1234, 1, 21),
(0000000000000002, 1234, 2, 21),
(0000000000000015, 1234, 3, 21),
(0000000000000018, 1234, 1, 25),
(0000000000000019, 1234, 1, 21),
(0000000000000020, 1234, 1, 22),
(0000000000000021, 1234, 2, 22),
(0000000000000022, 1234, 3, 21);

-- --------------------------------------------------------

--
-- Table structure for table `subs_type`
--

CREATE TABLE IF NOT EXISTS `subs_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subscription` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `subs_type`
--

INSERT INTO `subs_type` (`id`, `subscription`) VALUES
(1, 90),
(2, 180),
(3, 365);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `activation` varchar(255) DEFAULT NULL,
  `access` varchar(255) DEFAULT NULL,
  `image_path` varchar(50) NOT NULL,
  `rem_subscription` int(11) DEFAULT '0',
  `points` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `salt`, `activation`, `access`, `image_path`, `rem_subscription`, `points`) VALUES
(13, 'Jayson', 'Umapas', 'jaysonumapas@yahoo.com', '$2a$07$rsajT9A5Dk5D9A1hFiMXceiykfnETpd0oWf6Ub.dIzI5.SGcNTlEi', '$2a$07$rsajT9A5Dk5D9A1hFiMXchR$', 'activated', 'admin', '', 0, 0),
(14, 'Cary', 'Acevedo1', '123@gmail.com', '$2a$07$rsajT9A5Dk5D9A1hFDwPeeH9.ofUNxe0Pnw.Dpc2X3RASelTCHYKK', '$2a$07$rsajT9A5Dk5D9A1hFDwPetF$', 'activated', 'admin', '', 0, 0),
(16, 'admin', 'admin', 'admin@sample.com', '$2a$07$rsajT9A5Dk5D9A1hFGvcW.0KO.zrEd/7jj8CFyPIw9HMfrxPNPQCC', '$2a$07$rsajT9A5Dk5D9A1hFGvcWLf$', 'activated', 'admin', '', 635, 90),
(17, 'asd', 'asd', 'asd@sample.com', '$2a$07$rsajT9A5Dk5D9A1hFtHCK.7lZo2l0OD1yxrfQQz0q61qorHIM6TT.', '$2a$07$rsajT9A5Dk5D9A1hFtHCKNo$', 'activated', 'member', '', 0, 0),
(18, 'dsa@sample.com', 'dasdas', 'dsa@sample.com', '$2a$07$rsajT9A5Dk5D9A1hFyyekOrXGoX6eibYxqjFRlSuSAv2HAVwM7pWS', '$2a$07$rsajT9A5Dk5D9A1hFyyekWv$', 'activated', 'member', '', 0, 0),
(19, 'qwe', 'qwe', 'qwe@sample.com', '$2a$07$rsajT9A5Dk5D9A1hFSRQvODWZUOikX3qloLLZ3sJ/oFODmlDvkDy2', '$2a$07$rsajT9A5Dk5D9A1hFSRQvQl$', 'activated', 'member', '', 0, 0),
(20, 'zxc', 'zxc', 'zxc@sample.com', '$2a$07$rsajT9A5Dk5D9A1hFVZHkObOTVoebo6bQ/PuR0TkzbRPXcH9xY666', '$2a$07$rsajT9A5Dk5D9A1hFVZHkcD$', 'activated', 'member', '', 0, 0),
(21, '123', '123', '123@sample.com', '$2a$07$rsajT9A5Dk5D9A1hFSPotOmTxCMP6A5.77mcImY..g980AuIHDxyq', '$2a$07$rsajT9A5Dk5D9A1hFSPotYq$', 'activated', 'admin', '', 5215, 999996879),
(24, '123y', 'Bondoc', 'jkl@sample.com', '$2a$07$rsajT9A5Dk5D9A1hFGDmfORhOGFxfG4gvrFufPuunzMfjpxF2I7.S', '$2a$07$rsajT9A5Dk5D9A1hFGDmfTS$', '', '', '', 0, 0),
(25, 'CARy', 'cvb', 'cvb@sample.com', '$2a$07$rsajT9A5Dk5D9A1hFWzdJOa.hz8H7AXNNDDs9x9h3ZLsrtVVj735i', '$2a$07$rsajT9A5Dk5D9A1hFWzdJOu$', 'activated', 'member', 'images/user_images/Cary.png', 90, 10);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subs_card`
--
ALTER TABLE `subs_card`
  ADD CONSTRAINT `subs_card_ibfk_1` FOREIGN KEY (`subs_type`) REFERENCES `subs_type` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
