-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 06:54 PM
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
-- Database: `opbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminverify`
--

CREATE TABLE `adminverify` (
  `id` int(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`email`, `password`) VALUES
('admin@gmail.com', 'archana');

-- --------------------------------------------------------

--
-- Table structure for table `bookslot`
--

CREATE TABLE `bookslot` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `hours` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending' COMMENT 'Accepted =1 \r\nDeclined =0',
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookslot`
--

INSERT INTO `bookslot` (`id`, `date`, `time`, `hours`, `status`, `user_id`) VALUES
(2, '01/24/2024', '04:20', 3, '', NULL),
(4, '01/26/2024', '17:25', 1, '', NULL),
(5, '01/10/2024', '09:25', 3, '', NULL),
(6, '01/10/2024', '09:25', 3, 'pending', NULL),
(7, '01/07/2024', '04:20', 8, 'pending', NULL),
(8, '01/09/2024', '04:20', 2, '0', 1),
(9, '01/31/2024', '09:45', 3, '0', 1),
(10, '01/31/2024', '09:40', 2, '0', 1),
(11, '01/31/2024', '09:40', 2, '1', 1),
(12, '02/09/2024', '15:15', 3, '0', 4),
(13, '02/21/2024', '17:25', 1, '0', 4),
(19, '02/28/2024', '02:10', 4, '1', 1),
(20, '02/28/2024', '02:10', 4, '1', 1),
(21, '02/28/2024', '03:20', 8, '1', 1),
(22, '02/28/2024', '03:20', 8, '1', 1),
(23, '02/28/2024', '02:10', 4, '1', 6),
(24, '02/16/2024', '02:10', 3, '1', 1),
(25, '02/28/2024', '15:15', 1, '1', 1),
(26, '02/20/2024', '15:15', 5, 'pending', 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_requests`
--

CREATE TABLE `book_requests` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_requests`
--

INSERT INTO `book_requests` (`id`, `user_id`, `reason`) VALUES
(1, 1, 'booking request'),
(2, 1, 'booking request'),
(3, 4, 'booking request'),
(4, 4, 'booking request'),
(5, 5, 'booking request'),
(6, 5, 'booking request'),
(7, 5, 'booking request'),
(8, 5, 'booking request'),
(9, 5, 'booking request'),
(10, 1, 'booking request'),
(11, 1, 'booking request'),
(12, 1, 'booking request'),
(13, 1, 'booking request'),
(14, 6, 'booking request'),
(15, 1, 'booking request'),
(16, 1, 'booking request'),
(17, 1, 'booking request');

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `ulicenceno` varchar(255) NOT NULL,
  `uvehicleno` varchar(255) NOT NULL,
  `uemail` varchar(255) NOT NULL,
  `ucontact` int(11) NOT NULL,
  `upwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`id`, `uname`, `ulicenceno`, `uvehicleno`, `uemail`, `ucontact`, `upwd`) VALUES
(1, 'Archana', '2353223', '421266', 'archu@gmail.com', 9876544, 'archuu#'),
(4, 'Rachana Thapa', '722-890-9006', '09345', 'rachana@gmail.com', 2147483647, 'rachuudear'),
(6, 'Ramuna', '722-890-9006', '5678', 'ramuna23@gmail.com', 2147483647, 'ramunaa');

-- --------------------------------------------------------

--
-- Table structure for table `slot_details`
--

CREATE TABLE `slot_details` (
  `slotnum` int(11) NOT NULL,
  `slotpicture` varchar(255) NOT NULL,
  `slotstatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slot_details`
--

INSERT INTO `slot_details` (`slotnum`, `slotpicture`, `slotstatus`) VALUES
(1, 'Screenshot 2023-08-10 120407.png', 'Available'),
(3, 'Screenshot 2023-08-10 120430.png', 'Available'),
(4, 'Screenshot 2023-08-10 120447.png', 'Available'),
(6, 'Screenshot 2023-08-10 120504.png', 'Available'),
(8, 'Screenshot 2023-08-10 120632.png', 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminverify`
--
ALTER TABLE `adminverify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookslot`
--
ALTER TABLE `bookslot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `book_requests`
--
ALTER TABLE `book_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot_details`
--
ALTER TABLE `slot_details`
  ADD PRIMARY KEY (`slotnum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminverify`
--
ALTER TABLE `adminverify`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookslot`
--
ALTER TABLE `bookslot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `book_requests`
--
ALTER TABLE `book_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slot_details`
--
ALTER TABLE `slot_details`
  MODIFY `slotnum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookslot`
--
ALTER TABLE `bookslot`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `register_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
