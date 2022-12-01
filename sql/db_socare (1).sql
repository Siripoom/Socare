-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 02:00 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_socare`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bill`
--

CREATE TABLE `tb_bill` (
  `id_bill` int(8) NOT NULL,
  `total` int(100) NOT NULL,
  `bill_by` int(8) NOT NULL,
  `payment` enum('cod','mobile_banking','debit/credit','promtpay') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id_contact` int(8) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_tell` varchar(100) NOT NULL,
  `c_title` varchar(100) NOT NULL,
  `c_text` varchar(100) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `username` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`id_contact`, `c_name`, `c_email`, `c_tell`, `c_title`, `c_text`, `c_date`, `username`) VALUES
(13, 'thananan', 'thananan@gmail.com', '026121064', 'ปวดหัว', 'ปวดหัวมากๆช่วงนี้', '2022-11-24 05:27:59', 0),
(22, 'ssssss', 'sss@gmail.com', '5555', '555', '5555', '2022-11-30 08:23:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_counter`
--

CREATE TABLE `tb_counter` (
  `id_counter` int(8) NOT NULL,
  `view` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_counter`
--

INSERT INTO `tb_counter` (`id_counter`, `view`) VALUES
(1, 464);

-- --------------------------------------------------------

--
-- Table structure for table `tb_forms`
--

CREATE TABLE `tb_forms` (
  `id_form` int(8) NOT NULL,
  `sum` int(100) NOT NULL,
  `name_form` varchar(100) NOT NULL,
  `form_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_forms`
--

INSERT INTO `tb_forms` (`id_form`, `sum`, `name_form`, `form_date`) VALUES
(1, 9, '', '2022-11-30 09:49:16'),
(2, 17, '', '2022-11-30 09:49:16'),
(5, 19, '', '2022-11-30 09:49:16'),
(6, 8, '', '2022-11-30 09:49:16'),
(7, 0, '', '2022-11-30 09:49:16'),
(8, 7, '', '2022-11-30 09:49:16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `id_member` int(8) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `urole` enum('user','admin') NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `username`, `email`, `password`, `name`, `urole`, `user_date`) VALUES
(10, 'w', 'w@gmail.com', 'w', '', 'admin', '2022-11-20 02:32:25'),
(12, 'p', 'p@gmail.com', '', '', 'user', '2022-11-16 03:33:10'),
(14, 'z', 'z@gmail.com', 'z', '', 'user', '2022-11-16 03:36:59'),
(15, 'lol', 'lol@gmail.com', 'lol', '', 'user', '2022-11-17 08:49:46'),
(16, 'test', 'test@gmail.com', '123', 'Kamin', 'admin', '2022-11-20 06:19:02'),
(17, 'p', 'p@gmail.com', '555', 'name', 'user', '2022-11-19 04:06:25'),
(18, 'testt', 'as@gmail.com', '123', '', 'user', '2022-11-22 15:11:00'),
(19, 'kai', 'e@gmail.com', '123456', '', 'user', '2022-11-22 15:23:24'),
(20, 'user', 'user@gmail.com', 'user', '', 'user', '2022-11-30 06:39:06'),
(21, 'dd', 'dd@gmail.com', 'dd', '', 'user', '2022-11-30 09:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id_product` int(8) NOT NULL,
  `name_product` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `name_product`, `price`, `amount`) VALUES
(1, 'Bio Flax Plus', 520, 487);

-- --------------------------------------------------------

--
-- Table structure for table `tb_replie`
--

CREATE TABLE `tb_replie` (
  `id_rp` int(18) NOT NULL,
  `rp_comment` text NOT NULL,
  `rp_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rp_by` int(18) NOT NULL,
  `rp_topic` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_replie`
--

INSERT INTO `tb_replie` (`id_rp`, `rp_comment`, `rp_date`, `rp_by`, `rp_topic`) VALUES
(2, 'so usefull', '2022-11-20 09:26:28', 16, 11),
(3, 'comment นะจ้ะ\r\n', '2022-11-22 03:06:40', 12, 4),
(4, '', '2022-11-22 08:29:47', 12, 14),
(5, '123', '2022-11-22 13:36:41', 12, 14),
(6, '123', '2022-11-22 13:57:48', 12, 14),
(7, 'as', '2022-11-22 13:58:03', 12, 14),
(8, 'as', '2022-11-22 13:58:33', 12, 14),
(9, 'อร่อยดี', '2022-11-22 14:00:25', 12, 4),
(10, '123456', '2022-11-22 14:26:57', 12, 14),
(11, '5', '2022-11-22 14:27:14', 12, 14),
(12, '5', '2022-11-22 14:27:32', 12, 14),
(13, 'ผมชอบมาก', '2022-11-22 15:16:47', 18, 14);

-- --------------------------------------------------------

--
-- Table structure for table `tb_wb`
--

CREATE TABLE `tb_wb` (
  `id_wb` int(18) NOT NULL,
  `title_wb` varchar(100) NOT NULL,
  `text_wb` varchar(1000) NOT NULL,
  `wb_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `categories` enum('al_shy','ache') NOT NULL,
  `name_wb` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_wb`
--

INSERT INTO `tb_wb` (`id_wb`, `title_wb`, `text_wb`, `wb_date`, `categories`, `name_wb`, `comment`) VALUES
(4, 'asd', 'asd', '2022-11-20 06:11:36', 'ache', '', ''),
(5, 'asd', 'asd', '2022-11-19 10:30:16', 'al_shy', '', ''),
(6, 'asd', 'asd', '2022-11-19 10:30:22', 'al_shy', '', ''),
(7, 'asd', 'asdasd', '2022-11-19 10:30:29', 'al_shy', '', ''),
(8, 'asd', 'asdasd', '2022-11-19 10:31:21', 'al_shy', '', ''),
(9, 'asd', 'asdasd', '2022-11-19 10:32:26', 'al_shy', '', ''),
(10, 'asdaskdnhkajsd', 'asopdjkasdkal;s', '2022-11-19 10:33:42', 'al_shy', '', ''),
(11, 'ddddd', 'dddddddd', '2022-11-19 10:41:16', 'al_shy', '', ''),
(12, 'mmmmmmmm', 'mmmmmm', '2022-11-19 10:49:29', 'al_shy', '', ''),
(14, 'eafsasdasd', 'asdasd', '2022-11-19 11:14:34', 'al_shy', 'w', ''),
(15, 'ปวดหัว', 'ปวดมากๆ', '2022-11-22 15:19:07', 'al_shy', 'testt', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bill`
--
ALTER TABLE `tb_bill`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `bill_by` (`bill_by`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `tb_counter`
--
ALTER TABLE `tb_counter`
  ADD PRIMARY KEY (`id_counter`);

--
-- Indexes for table `tb_forms`
--
ALTER TABLE `tb_forms`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `tb_replie`
--
ALTER TABLE `tb_replie`
  ADD PRIMARY KEY (`id_rp`),
  ADD KEY `rp_by` (`rp_by`),
  ADD KEY `rp_topic` (`rp_topic`);

--
-- Indexes for table `tb_wb`
--
ALTER TABLE `tb_wb`
  ADD PRIMARY KEY (`id_wb`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bill`
--
ALTER TABLE `tb_bill`
  MODIFY `id_bill` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id_contact` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_counter`
--
ALTER TABLE `tb_counter`
  MODIFY `id_counter` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_forms`
--
ALTER TABLE `tb_forms`
  MODIFY `id_form` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id_member` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_product` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_replie`
--
ALTER TABLE `tb_replie`
  MODIFY `id_rp` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_wb`
--
ALTER TABLE `tb_wb`
  MODIFY `id_wb` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_bill`
--
ALTER TABLE `tb_bill`
  ADD CONSTRAINT `tb_bill_ibfk_1` FOREIGN KEY (`bill_by`) REFERENCES `tb_member` (`id_member`);

--
-- Constraints for table `tb_replie`
--
ALTER TABLE `tb_replie`
  ADD CONSTRAINT `tb_replie_ibfk_1` FOREIGN KEY (`rp_by`) REFERENCES `tb_member` (`id_member`),
  ADD CONSTRAINT `tb_replie_ibfk_2` FOREIGN KEY (`rp_topic`) REFERENCES `tb_wb` (`id_wb`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
