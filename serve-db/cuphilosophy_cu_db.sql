-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2023 at 07:12 PM
-- Server version: 10.6.14-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuphilosophy_cu_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `mobile`, `password`, `facebook`, `twitter`, `whatsapp`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, 'password', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `reg_id` varchar(20) DEFAULT NULL,
  `title` varchar(222) DEFAULT NULL,
  `name` varchar(222) DEFAULT NULL,
  `t_size` varchar(222) DEFAULT NULL,
  `nick_name` varchar(222) DEFAULT NULL,
  `mobile` varchar(222) DEFAULT NULL,
  `password` varchar(222) DEFAULT NULL,
  `email` varchar(222) DEFAULT NULL,
  `batch` varchar(222) DEFAULT NULL,
  `hall` varchar(222) DEFAULT NULL,
  `blood` varchar(222) DEFAULT NULL,
  `proffession` varchar(222) DEFAULT NULL,
  `insititute` varchar(222) DEFAULT NULL,
  `passing_year` varchar(255) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `present_address` text DEFAULT NULL,
  `parmanent_address` text DEFAULT NULL,
  `spouse` varchar(500) DEFAULT NULL,
  `childen` varchar(500) DEFAULT NULL,
  `driver` varchar(500) DEFAULT NULL,
  `guest` varchar(500) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `payment_mode` varchar(255) DEFAULT NULL,
  `total_amount` int(11) DEFAULT NULL,
  `total_partticipent` int(11) DEFAULT NULL,
  `cdt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `reg_id`, `title`, `name`, `t_size`, `nick_name`, `mobile`, `password`, `email`, `batch`, `hall`, `blood`, `proffession`, `insititute`, `passing_year`, `session`, `gender`, `present_address`, `parmanent_address`, `spouse`, `childen`, `driver`, `guest`, `image`, `payment_type`, `payment_mode`, `total_amount`, `total_partticipent`, `cdt`) VALUES
(1, NULL, 'mr', 'zahidul islam', NULL, 'rumel', '01628495662', 'pass', 'jahidulislamrumel280@gmail.com', '16', 'Shahjalal Hall', 'A-', 'stdnt', 'cu', '2020', 'jan 15-19', 'Male', 'cu', 'cu', '{\"name\":null,\"size\":\"s\"}', '{\"name\":[\"rumel\"],\"age\":[\"7\"],\"size\":[\"s\"]}', '{\"name\":null,\"age\":null}', '{\"name\":null,\"age\":null,\"size\":\"s\"}', '/storage/uploads/23/07/1689415139kBTWmfVoTSgFE7Rbw2qr.jpg', 'paid', NULL, 4080, 2, '2023-07-15 15:58:59'),
(2, NULL, 'dr', 'zahid', NULL, 'rumel', '01528495662', 'mass', 'jahidulislamrumel280@gmail.com', '57', 'A. F. Rahman Hall', 'A+', 'teacher', 'teacher', '2010', 'jan 15-16', 'Male', 'cu', 'cu', '{\"name\":null,\"size\":\"s\"}', '{\"name\":[null],\"age\":[null],\"size\":[\"s\"]}', '{\"name\":null,\"age\":null}', '{\"name\":\"rumel\",\"age\":\"45\",\"size\":\"s\"}', '/storage/uploads/23/07/1689415241HYR7gof5EttJuQksMGpZ.jpg', 'paid', NULL, 4080, 2, '2023-07-15 16:00:41'),
(3, NULL, 'Mr', 'Hasan', NULL, 'Mahmud', '01912345678', '123456', 'hasan@gmail.com', '56', 'Suhrawardy Hall', 'A+', 'Business', NULL, '2015', 'July 2013 - June 2014', 'Male', 'Lalkhan Bazar', 'Lalkhan Bazar', '{\"name\":null,\"size\":\"s\"}', '{\"name\":[null],\"age\":[null],\"size\":[\"s\"]}', '{\"name\":null,\"age\":null}', '{\"name\":\"Mr. Abul Hosen\",\"age\":\"45\",\"size\":\"1\"}', '/storage/uploads/23/07/16894182791Y7qsOuUAZDXYWPqYXzL.jpg', 'paid', NULL, 3060, 2, '2023-07-15 16:51:19'),
(4, NULL, 'Mr', 'Hasan', NULL, 'Morshed', '01977553322', '123456', 'sqbctgbd@gmail.com', '48', 'Alaol Hall', 'B+', 'Business', 'CU', '2016', '2009 - 2010', 'Male', 'Lalkhann Bazar, Ctg.', 'Bashkhali, Ctg', '{\"name\":\"Mrs. S\",\"size\":\"2\"}', '{\"name\":[\"Mr. hamid\"],\"age\":[\"6\"],\"size\":[\"s\"]}', '{\"name\":\"MD. Hasan\",\"age\":\"37\"}', '{\"name\":\"Mr. Maruf\",\"age\":\"38\",\"size\":\"1\"}', '/storage/uploads/23/07/1689422209IhX1xQ2uqb0lLSEQssYR.jpg', 'unpaid', NULL, 8670, 5, '2023-07-15 17:56:49'),
(5, NULL, 'MR.', 'MD ARIFUL HAQUE', NULL, 'AKIB', '01812573570', '573570', 'ah.akib70@gmail.com', '52', 'Suhrawardy Hall', 'B+', 'BUSINESS', 'HB TRAVELS', '2022', '2016-17', 'Male', 'SHAHNAGAR,FATIKCHHARI,CHATTOGRAM', 'SHAHNAGAR,FATIKCHHARI,CHATTOGRAM', '{\"name\":null,\"size\":\"s\"}', '{\"name\":[null],\"age\":[null],\"size\":[\"s\"]}', '{\"name\":null,\"age\":null}', '{\"name\":null,\"age\":null,\"size\":\"s\"}', '/storage/uploads/23/07/1689445097kSbSQr2KXmfh3RDuVIAu.jpg', 'pending', NULL, 2040, 1, '2023-07-16 00:18:17'),
(6, NULL, 'Mishal', 'MD Sabbir Khan Meshal', NULL, 'Mishal', '01620328422', 'nsecybercu', 'business.mishalkhan@gmail.com', '55', 'Suhrawardy Hall', 'B+', NULL, NULL, 'Select Passing Year', '2019-2020', 'Male', 'Brahmanbaria sadar, Brahmanbaria, Chittagong, Bangladesh', 'Brahmanbaria, Chittagong, Bangladesh', '{\"name\":null,\"size\":\"s\"}', '{\"name\":[null],\"age\":[null],\"size\":[\"s\"]}', '{\"name\":null,\"age\":null}', '{\"name\":null,\"age\":null,\"size\":\"s\"}', '/storage/uploads/23/07/1689446630tX1YPkrE1Cn7RMDMhtSg.jpg', 'unpaid', NULL, 1020, 1, '2023-07-16 00:21:18'),
(7, NULL, NULL, 'Gias uddin', NULL, 'Sabbir', '01716992964', 'N@Har123', 'giasuddin660@gmail.com', '38', 'Suhrawardy Hall', 'O+', 'Govt service', 'Bangladesh Police', '2009', '2002-2003', 'Male', 'Chandina, Cumilla', 'Hazi pur, Subarna char, Noakhali', '{\"name\":null,\"size\":\"s\"}', '{\"name\":[\"Sabreen Sabiha\"],\"age\":[\"6\"],\"size\":[\"s\"]}', '{\"name\":null,\"age\":null}', '{\"name\":null,\"age\":null,\"size\":\"s\"}', '/storage/uploads/23/07/1689449797MR0tu91bKU0ewkGCKcLG.jpg', 'pending', NULL, 4080, 2, '2023-07-16 01:36:37'),
(8, NULL, 'Biswas', 'Sajeeb', NULL, 'Sajeeb', '01721372422', '01721372422', 'bsajeeb97@gmail.com', '52', 'Suhrawardy Hall', 'B+', NULL, NULL, '2020', '2016-2017', 'Male', 'Tipu Bhaban,In front of BADC office,Agrabad,Chattogram.', 'Vill: Suhata, Post office: Bhulachang, P.O- Nabinagar, Dist: Brahmanbaria.', '{\"name\":null,\"size\":\"s\"}', '{\"name\":[null],\"age\":[null],\"size\":[\"s\"]}', '{\"name\":null,\"age\":null}', '{\"name\":null,\"age\":null,\"size\":\"s\"}', '/storage/uploads/23/07/1689479238io9ZxaYG0JGitvY55c67.jpg', 'pending', NULL, 2040, 1, '2023-07-16 09:47:18'),
(9, NULL, 'dfg', 'dgf', NULL, 'dg', '4534534', '435345', 'email@gmail.com', '47', 'Janonetri Sheikh Hasina Hall', 'A+', NULL, NULL, '2008', '2017 - 2018', 'Male', 'rg', 'dg', '{\"name\":null,\"size\":\"s\"}', '{\"name\":[null],\"age\":[null],\"size\":[\"s\"]}', '{\"name\":null,\"age\":null}', '{\"name\":null,\"age\":null,\"size\":\"s\"}', '/storage/uploads/23/07/1689482946certAMZJVGyMv5EcGwzt.png', 'pending', NULL, 2040, 1, '2023-07-16 10:49:06'),
(10, NULL, 'Mr', 'Daudul Karim Sikder', NULL, 'Daud', '01846613082', '17105221', 'daudulcu@gmail.com', '52', 'Suhrawardy Hall', 'AB+', 'Financial Advisor', 'MetLife', '2020', '2016-17', 'Male', 'Monsur Villa, Hamjarbag, Panchlaish, Chattogram.', 'Fateh Mohammad Sikder Bari,  Village: Borochilonia,  P.O: Paindong-4350,  P.S: Fatikchhari, Chattogram', '{\"name\":null,\"size\":\"s\"}', '{\"name\":[null],\"age\":[null],\"size\":[\"s\"]}', '{\"name\":null,\"age\":null}', '{\"name\":null,\"age\":null,\"size\":\"s\"}', '/storage/uploads/23/07/1689484714KX467iTAD2pLjqdXwCdY.jpg', 'pending', NULL, 2040, 1, '2023-07-16 11:18:34'),
(11, NULL, 'Mr.', 'Md. Imam Hossain', NULL, NULL, '01815643159', '472219', 'hbdctg@gmail.com', '42', 'Select Hall', 'Select Blood Group', 'Teaching', 'Cu', '2003', '2010-2012', 'Select Gender', 'CU', 'CU', '{\"name\":null,\"size\":\"s\"}', '{\"name\":[null],\"age\":[null],\"size\":[\"s\"]}', '{\"name\":null,\"age\":null}', '{\"name\":null,\"age\":null,\"size\":\"s\"}', '/storage/uploads/23/07/1689486047a6T5OqSZtzOlfdcpbq80.jpg', 'paid', NULL, 2040, 1, '2023-07-16 11:40:47'),
(12, NULL, 'Talukdar', 'Chinmoy Talukdar', NULL, 'Chinu', '01799926054', 'Amichinmoy', 'talukdartonmoy0@gmail.com', '57', 'Alaol Hall', 'B+', 'Student', 'University of Chittagong', 'Select Passing Year', '2021-22', 'Male', 'Alaol Hall, University of Chittagong', 'Nainda, Sullah , Sunamganj', '{\"name\":null,\"size\":\"s\"}', '{\"name\":[null],\"age\":[null],\"size\":[\"s\"]}', '{\"name\":null,\"age\":null}', '{\"name\":null,\"age\":null,\"size\":\"s\"}', '/storage/uploads/23/07/1689502524YCNuywYDJLFWzaieTfj6.jpg', 'pending', NULL, 1020, 1, '2023-07-16 16:15:24'),
(13, NULL, 'dr', 'test user', NULL, NULL, '01312345678', '123456', 'email@gmail.com', '33', 'A. F. Rahman Hall', 'Select Blood Group', NULL, NULL, '2022', '2017 - 2018', 'Select Gender', NULL, NULL, '{\"name\":null,\"size\":\"s\"}', '{\"name\":[null],\"age\":[null],\"size\":[\"s\"]}', '{\"name\":null,\"age\":null}', '{\"name\":null,\"age\":null,\"size\":\"s\"}', '/storage/uploads/23/07/1689505428i0K7klSr7tnlBFprzrdR.png', 'pending', NULL, 2040, 1, '2023-07-16 17:03:48'),
(14, NULL, 'dr', 'omar faruk', NULL, NULL, '3242423423', '234234', 'email@gmail.com', '3', 'Select Hall', 'Select Blood Group', NULL, NULL, '2023', '2002-2008', 'Select Gender', NULL, NULL, '{\"name\":null,\"size\":\"s\"}', '{\"name\":[null],\"age\":[null],\"size\":[\"s\"]}', '{\"name\":null,\"age\":null}', '{\"name\":null,\"age\":null,\"size\":\"s\"}', '/storage/uploads/23/07/1689505498GfesKbfPhiLTqVNRArAd.jpg', 'pending', NULL, 2040, 1, '2023-07-16 17:04:58'),
(15, NULL, 'dr', 'omar faruk', NULL, 'xdc', '23423423', '234', 'email@gmail.com', '10', 'Select Hall', 'Select Blood Group', NULL, NULL, 'Select Passing Year', NULL, 'Select Gender', NULL, NULL, '{\"name\":null,\"size\":\"s\"}', '{\"name\":[null],\"age\":[null],\"size\":[\"s\"]}', '{\"name\":null,\"age\":null}', '{\"name\":null,\"age\":null,\"size\":\"s\"}', '/storage/uploads/23/07/1689505671wdyB6N9CMJAaKt9U7RNC.jpg', 'pending', NULL, 2040, 1, '2023-07-16 17:07:51'),
(16, NULL, 'dr', 'omar faruk', NULL, 'dg', '2342342355', '24233', 'email@gmail.com', '7', 'Select Hall', 'Select Blood Group', NULL, NULL, '2017', '2017 - 2018', 'Select Gender', NULL, NULL, '{\"name\":null,\"size\":\"s\"}', '{\"name\":[null],\"age\":[null],\"size\":[\"s\"]}', '{\"name\":null,\"age\":null}', '{\"name\":null,\"age\":null,\"size\":\"s\"}', '/storage/uploads/23/07/1689505787D2KlSvsaufYWxm36kDon.jpg', 'pending', NULL, 2040, 1, '2023-07-16 17:09:47'),
(17, NULL, 'dr', 'adada', NULL, 'asdas', '23423234', '342234', 'email@gmail.com', '10', 'Select Hall', 'Select Blood Group', NULL, NULL, '2011', NULL, 'Select Gender', NULL, NULL, '{\"name\":null,\"size\":\"s\"}', '{\"name\":[null],\"age\":[null],\"size\":[\"s\"]}', '{\"name\":null,\"age\":null}', '{\"name\":null,\"age\":null,\"size\":\"s\"}', '/storage/uploads/23/07/16895060889KC9oRA3dL2Bcvrd57ZK.jpg', 'pending', NULL, 2040, 1, '2023-07-16 17:14:48'),
(18, NULL, 'zc', 'zc', NULL, 'zc', '43543534', '243242', 'email@gmail.com', '7', 'Artist Rashid Chowdhury Hostel', 'Select Blood Group', 'wer', NULL, '2014', '2017 - 2018', 'Select Gender', NULL, NULL, '{\"name\":null,\"size\":\"s\"}', '{\"name\":[null],\"age\":[null],\"size\":[\"s\"]}', '{\"name\":null,\"age\":null}', '{\"name\":null,\"age\":null,\"size\":\"s\"}', '/storage/uploads/23/07/1689506436CFKBBN1WSKD9ce9xeCHj.jpg', 'pending', NULL, 2040, 1, '2023-07-16 17:20:36'),
(19, NULL, 'Mr.', 'Najemul Alam', NULL, 'Murad', '01581236171', '472219', 'imamcu2022@gmail.com', '7', 'Suhrawardy Hall', 'AB+', NULL, NULL, '2019', '11', 'Male', NULL, NULL, '{\"name\":null,\"size\":\"s\"}', '{\"name\":[null],\"age\":[null],\"size\":[\"s\"]}', '{\"name\":null,\"age\":null}', '{\"name\":null,\"age\":null,\"size\":\"s\"}', '/storage/uploads/23/07/1689510764tzxEAgeO2UzogpiJfZA3.jpg', 'pending', NULL, 2040, 1, '2023-07-16 18:32:44'),
(20, NULL, NULL, 'Rabiul Hasan', NULL, 'Rabiul', '01518322771', '20987093', 'hasanrabi20@gmail.com', '49', 'Suhrawardy Hall', 'B+', 'Audit Officer', 'Smart Polymer Industries (BD) Ltd', '2018', '2013-14', 'Male', 'Kalamiya bazar,Bakalia,Chattogram', 'Nizamat Ali Sikdar Bari,South Puichari, Banskhali,Chattogram.', '{\"name\":null,\"size\":\"s\"}', '{\"name\":[null],\"age\":[null],\"size\":[\"s\"]}', '{\"name\":null,\"age\":null}', '{\"name\":null,\"age\":null,\"size\":\"s\"}', '/storage/uploads/23/07/1689510823VIGq52Pw7Cj458OoXt6H.jpg', 'pending', NULL, 2040, 1, '2023-07-16 18:33:43'),
(21, '00021', 'er', 'ert', NULL, NULL, '4353535', '345345', 'email@gmail.com', '14', 'Select Hall', 'Select Blood Group', NULL, NULL, 'Select Passing Year', NULL, NULL, '345', NULL, '{\"name\":null,\"amount\":\"1530\",\"size\":null}', '{\"name\":[null],\"age\":[null],\"amount\":\"1020\",\"size\":[null]}', '{\"name\":null,\"amount\":\"1020\",\"age\":null}', '{\"name\":null,\"amount\":\"2040\",\"age\":null,\"size\":null}', '/uploads/23/07/1689512593mr1sDv5ZSr7IO1rIHNd4.png', 'pending', NULL, 2040, 1, '2023-07-16 19:03:14'),
(22, '00022', 'sd', 'sdf', NULL, 'sdf', '42342323', '23423', 'email@gmail.com', '18', 'Select Hall', 'Select Blood Group', NULL, NULL, 'Select Passing Year', '234', NULL, '234', NULL, '{\"name\":null,\"amount\":\"1530\",\"size\":null}', '{\"name\":[null],\"age\":[null],\"amount\":\"1020\",\"size\":[null]}', '{\"name\":null,\"amount\":\"1020\",\"age\":null}', '{\"name\":null,\"amount\":\"2040\",\"age\":null,\"size\":null}', '/uploads/23/07/1689512681Ei9SpVORsvCvgxvDetlm.png', 'pending', NULL, 2040, 1, '2023-07-16 19:04:41'),
(23, '00023', '234', 'sdfsdfs', NULL, NULL, '32423423423122', '234', 'email@gmail.com', 'Select Batch', 'Select Hall', 'Select Blood Group', NULL, NULL, 'Select Passing Year', NULL, NULL, '2ssf', NULL, '{\"name\":null,\"amount\":\"1530\",\"size\":null}', '{\"name\":[null],\"age\":[null],\"amount\":\"1020\",\"size\":[null]}', '{\"name\":null,\"amount\":\"1020\",\"age\":null}', '{\"name\":null,\"amount\":\"2040\",\"age\":null,\"size\":null}', '/uploads/23/07/16895127386owDXoV0X87FlbeCVU77.png', 'pending', NULL, 2040, 1, '2023-07-16 19:05:39');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `pg_service_charge_bdt` decimal(10,2) DEFAULT NULL,
  `amount_original` decimal(10,2) DEFAULT NULL,
  `gateway_fee` decimal(10,2) DEFAULT NULL,
  `pg_service_charge_usd` varchar(200) DEFAULT NULL,
  `pg_card_bank_name` varchar(200) DEFAULT NULL,
  `pg_card_bank_country` varchar(200) DEFAULT NULL,
  `card_number` varchar(200) DEFAULT NULL,
  `card_holder` varchar(200) DEFAULT NULL,
  `status_code` varchar(200) DEFAULT NULL,
  `pay_status` varchar(200) DEFAULT NULL,
  `cus_name` varchar(200) DEFAULT NULL,
  `cus_email` varchar(200) DEFAULT NULL,
  `cus_phone` varchar(200) DEFAULT NULL,
  `currency_merchant` varchar(200) DEFAULT NULL,
  `convertion_rate` varchar(200) DEFAULT NULL,
  `ip_address` varchar(200) DEFAULT NULL,
  `other_currency` decimal(10,2) DEFAULT NULL,
  `pg_txnid` varchar(200) DEFAULT NULL,
  `epw_txnid` varchar(200) DEFAULT NULL,
  `mer_txnid` varchar(200) DEFAULT NULL,
  `store_id` varchar(200) DEFAULT NULL,
  `merchant_id` varchar(200) DEFAULT NULL,
  `currency` varchar(200) DEFAULT NULL,
  `store_amount` decimal(10,2) DEFAULT NULL,
  `pay_time` varchar(200) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `bank_txn` varchar(200) DEFAULT NULL,
  `card_type` varchar(200) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `pg_card_risklevel` varchar(200) DEFAULT NULL,
  `pg_error_code_details` varchar(200) DEFAULT NULL,
  `opt_a` varchar(200) DEFAULT NULL,
  `opt_b` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `user_id`, `pg_service_charge_bdt`, `amount_original`, `gateway_fee`, `pg_service_charge_usd`, `pg_card_bank_name`, `pg_card_bank_country`, `card_number`, `card_holder`, `status_code`, `pay_status`, `cus_name`, `cus_email`, `cus_phone`, `currency_merchant`, `convertion_rate`, `ip_address`, `other_currency`, `pg_txnid`, `epw_txnid`, `mer_txnid`, `store_id`, `merchant_id`, `currency`, `store_amount`, `pay_time`, `amount`, `bank_txn`, `card_type`, `reason`, `pg_card_risklevel`, `pg_error_code_details`, `opt_a`, `opt_b`) VALUES
(1, 45, 248.63, 7650.00, NULL, 'Not-Available', 'Not Available', 'Not Available', '1234XXXXXXXXX123', NULL, '2', 'Successful', 'omar faruk', 'email@gmail.com', '01845676556', 'BDT', NULL, '144.48.151.193', 7650.00, 'AAM1689501108144818', 'AAM1689501108144818', '3746159', 'aamarpaytest', 'aamarpaytest', 'BDT', 7401.37, '2023-07-16 15:52:05', 7650.00, '1107182295217', 'nagad', 'Not Available', '0', 'Not Available', NULL, NULL),
(2, 46, 165.75, 5100.00, NULL, 'Not-Available', 'Not Available', 'Not Available', '1234XXXXXXXXX123', NULL, '2', 'Successful', 'fdg', 'email@gmail.com', '01854654646', 'BDT', NULL, '144.48.151.193', 5100.00, 'AAM1689501579144264', 'AAM1689501579144264', '7438686', 'aamarpaytest', 'aamarpaytest', 'BDT', 4934.25, '2023-07-16 15:59:52', 5100.00, '1041563678895', 'DBBL-MASTER', 'Not Available', '0', 'Not Available', NULL, NULL),
(3, 64, 66.30, 2040.00, NULL, 'Not-Available', 'Not Available', 'Not Available', '1234XXXXXXXXX123', NULL, '2', 'Successful', 'sdf', 'email@gmail.com', '54654646', 'BDT', NULL, '144.48.151.193', 2040.00, 'AAM1689510156144241', 'AAM1689510156144241', '6529788', 'aamarpaytest', 'aamarpaytest', 'BDT', 1973.70, '2023-07-16 18:22:50', 2040.00, '1068934021932', 'DBBL-VISA', 'Not Available', '0', 'Not Available', NULL, NULL),
(4, 65, 66.30, 2040.00, NULL, 'Not-Available', 'Not Available', 'Not Available', '1234XXXXXXXXX123', NULL, '2', 'Successful', 'dfgdf', 'email@gmail.com', '4534535', 'BDT', NULL, '144.48.151.193', 2040.00, 'AAM1689510330144959', 'AAM1689510330144959', '7215262', 'aamarpaytest', 'aamarpaytest', 'BDT', 1973.70, '2023-07-16 18:26:06', 2040.00, '1070793937271', 'DBBL-VISA', 'Not Available', '0', 'Not Available', NULL, NULL),
(5, 66, 66.30, 2040.00, NULL, 'Not-Available', 'Not Available', 'Not Available', '1234XXXXXXXXX123', NULL, '2', 'Successful', 'sdf', 'email@gmail.com', '01857464543', 'BDT', NULL, '144.48.151.193', 2040.00, 'AAM1689510543144116', 'AAM1689510543144116', '5774571', 'aamarpaytest', 'aamarpaytest', 'BDT', 1973.70, '2023-07-16 18:29:07', 2040.00, '1027022838903', 'DBBL-VISA', 'Not Available', '0', 'Not Available', NULL, NULL),
(6, 67, 66.30, 2040.00, NULL, 'Not-Available', 'Not Available', 'Not Available', '1234XXXXXXXXX123', NULL, '2', 'Successful', 'ghg', 'email@gmail.com', '64566456', 'BDT', NULL, '144.48.151.193', 2040.00, 'AAM1689510687144022', 'AAM1689510687144022', '8879430', 'aamarpaytest', 'aamarpaytest', 'BDT', 1973.70, '2023-07-16 18:31:31', 2040.00, '1069636699847', 'DBBL-VISA', 'Not Available', '0', 'Not Available', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
