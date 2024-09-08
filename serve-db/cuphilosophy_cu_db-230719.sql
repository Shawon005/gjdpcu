-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 19, 2023 at 05:56 PM
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
  `t_size` varchar(200) DEFAULT NULL,
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
  `payment_mode` varchar(260) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT 0.00,
  `total_partticipent` int(11) DEFAULT 1,
  `cdt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `reg_id`, `title`, `name`, `t_size`, `nick_name`, `mobile`, `password`, `email`, `batch`, `hall`, `blood`, `proffession`, `insititute`, `passing_year`, `session`, `gender`, `present_address`, `parmanent_address`, `spouse`, `childen`, `driver`, `guest`, `image`, `payment_type`, `payment_mode`, `total_amount`, `total_partticipent`, `cdt`) VALUES
(1, '00001', NULL, 'Ariful Karim Dulan', 'xl', 'Dulan', '01818604060', 'dulan1986#', 'dulan.cu@gmail.com', '40', 'Suhrawardy Hall', 'O+', 'Sub-Inspector', 'Bangladesh police', '2009', '2004-2005', 'Male', 'Hathazari model police Station', 'Dakbanglo para,Gorakghata,Moheshkhali, cox\'sbazar.', '{\"name\":null,\"amount\":\"1530\",\"size\":null}', '{\"name\":[null],\"age\":[null],\"amount\":\"1020\",\"size\":[null]}', '{\"name\":null,\"amount\":\"1020\",\"age\":null}', '{\"name\":null,\"amount\":\"2040\",\"age\":null,\"size\":null}', '/uploads/23/07/1689537566Ik2LbtTDf9ItcSLHgico.jpg', 'unpaid', NULL, 2040.00, 1, '2023-07-17 01:59:26'),
(2, '00002', NULL, 'Akram Hossain Riyad', 'm', 'Riyad', '01812711741', '313965', 'riyadcu100@gmail.com', '43', 'Suhrawardy Hall', 'O+', 'Job holder', 'Department of registration', '2013', '2007-2008', 'Male', 'West doctr para Feni sadar', 'Musapur,sandwip,chittagong', '{\"name\":null,\"amount\":\"1530\",\"size\":null}', '{\"name\":[null],\"age\":[null],\"amount\":\"1020\",\"size\":[null]}', '{\"name\":null,\"amount\":\"1020\",\"age\":null}', '{\"name\":null,\"amount\":\"2040\",\"age\":null,\"size\":null}', '/uploads/23/07/1689574523dGgLRl0gwTnShgtytGww.jpg', 'pending', NULL, 2040.00, 1, '2023-07-17 12:15:23'),
(7, '00007', 'Ms.', 'Nasima Akthar', 'xxl', 'Kohinoor', '01729719940', 'Rameen175815', 'kahinoor09@yahoo.com', '34', 'Pritilata Hall', 'B+', 'Banker', 'One Bank Ltd.', '2006', '1998-1999', 'Female', '103/A Mohammadpur, 4th Floor, Muradpur, Panchlish, Chittagong', '103/A Mohammadpur, 4th Floor, Muradpur, Panchlish, Chittagong', '{\"name\":null,\"amount\":\"1530\",\"size\":null}', '{\"name\":[null],\"age\":[null],\"amount\":\"1020\",\"size\":[null]}', '{\"name\":null,\"amount\":\"1020\",\"age\":null}', '{\"name\":null,\"amount\":\"2040\",\"age\":null,\"size\":null}', '/uploads/23/07/1689604820YiAGEdV73UgUlxDX0hLf.jpg', 'paid', 'UCB-VISA', 2040.00, 1, '2023-07-17 20:40:21'),
(8, '00008', NULL, 'MD. Shafiqul Islam', 'xxl', 'Shafiq', '0181366130', 'shafiq123', 'shafiquliislam09@gmail.com', '18', 'Alaol Hall', 'O+', 'Businessman', NULL, '1986', '1985-1986', 'Male', 'Colonel Hat CDA Road no-01', NULL, '{\"name\":null,\"amount\":\"1530\",\"size\":null}', '{\"name\":[null],\"age\":[null],\"amount\":\"1020\",\"size\":[null]}', '{\"name\":null,\"amount\":\"1020\",\"age\":null}', '{\"name\":null,\"amount\":\"2040\",\"age\":null,\"size\":null}', '/uploads/23/07/1689611366ndw3Ml2s4p6ze0C6NOgA.jpg', 'pending', NULL, 2040.00, 1, '2023-07-17 22:29:27'),
(10, '00010', 'Sohrab Hossain Rokon', 'Sohrab Hossain', 'xl', 'Rokon', '01730730639', '446676', 'rokon_ds@yahoo.com', '40', 'Suhrawardy Hall', 'A+', 'Private Job', 'Mediterranean shipping company Bangladesh', '2009', '2004-2005', 'Male', '380/17/f, kunjoban,  Rampura,  Dhaka', NULL, '{\"name\":\"Badrunnessa Himo\",\"amount\":\"1530\",\"size\":\"m\"}', '{\"name\":[\"Abdullah Araaf Raahil\"],\"age\":[\"6\"],\"amount\":\"1020\",\"size\":[\"s\"]}', '{\"name\":null,\"amount\":\"1020\",\"age\":null}', '{\"name\":null,\"amount\":\"2040\",\"age\":null,\"size\":null}', '/uploads/23/07/1689671748RWOP4ERTTHKeVKhykx0g.jpg', 'pending', NULL, 4590.00, 3, '2023-07-18 15:15:48'),
(11, '00011', NULL, 'MD. Shafiqul Islam', 'xxl', 'Shafiq', '01813166130', 'shafiq12e', 'shafiquliislam09@gmail.com', '18', 'Alaol Hall', 'O+', 'Businessman', NULL, '1986', '1985-1986', 'Male', 'Colonel Hat CDA R/A, Road No: 01, G-56', NULL, '{\"name\":null,\"amount\":\"1530\",\"size\":null}', '{\"name\":[null],\"age\":[null],\"amount\":\"1020\",\"size\":[null]}', '{\"name\":null,\"amount\":\"1020\",\"age\":null}', '{\"name\":null,\"amount\":\"2040\",\"age\":null,\"size\":null}', '/uploads/23/07/168969373135p75lAdKn3iljoluy7L.jpg', 'paid', 'bKash-bKash', 2040.00, 1, '2023-07-18 21:22:12'),
(12, '00012', NULL, 'Redwan Islam Rifat', 'xl', 'Rifat', '01957873762', 'ri592891', 'redwanislam338@gmail.com', '57', 'Shaheed Abdur Rab Hall', 'B+', NULL, NULL, '', NULL, 'Male', 'Abdur Rab Hall, Chittagong University', NULL, '{\"name\":null,\"amount\":\"1530\",\"size\":null}', '{\"name\":[null],\"age\":[null],\"amount\":\"1020\",\"size\":[null]}', '{\"name\":null,\"amount\":\"1020\",\"age\":null}', '{\"name\":null,\"amount\":\"2040\",\"age\":null,\"size\":null}', '/uploads/23/07/1689705515M0RL1UZVemPxO4QVF0Cc.jpg', 'pending', NULL, 1020.00, 1, '2023-07-19 00:38:35');

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
(1, 7, 51.00, 2040.00, NULL, 'Not-Available', 'Not Available', 'Not Available', '406754XXXXXX5753', NULL, '2', 'Successful', 'Nasima Akthar', 'kahinoor09@yahoo.com', '01729719940', 'BDT', NULL, '37.111.212.243', 2040.00, 'CUP1689615337464701', 'CUP1689615337464701', '7467709', 'cuphilosophy', 'cuphilosophy', 'BDT', 1989.00, '2023-07-17 23:38:17', 2040.00, '2865635', 'UCB-VISA', 'Not Available', '0', 'Not Available', NULL, NULL),
(2, 11, 40.80, 2040.00, NULL, 'Not-Available', 'Not Available', 'Not Available', '01813166130', NULL, '2', 'Successful', 'MD. Shafiqul Islam', 'shafiquliislam09@gmail.com', '01813166130', 'BDT', NULL, '103.143.34.170', 2040.00, 'CUP1689693733464103', 'CUP1689693733464103', '4633394', 'cuphilosophy', 'cuphilosophy', 'BDT', 1999.20, '2023-07-18 21:23:47', 2040.00, 'AGI4H7RVSO', 'bKash-bKash', 'Not Available', '0', 'Not Available', NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
