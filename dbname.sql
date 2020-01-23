-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2020 at 11:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbname`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'admin'),
(2, 'manager'),
(3, 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `codeigniter_register`
--

CREATE TABLE `codeigniter_register` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL,
  `verification_key` varchar(250) NOT NULL,
  `is_email_verified` enum('no','yes') NOT NULL,
  `level` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codeigniter_register`
--

INSERT INTO `codeigniter_register` (`id`, `name`, `email`, `password`, `verification_key`, `is_email_verified`, `level`) VALUES
(1, 'k', 'k@k.com', '8ce4b16b22b58894aa86c421e8759df3', 'a535c27b0074a230dd0bbbe55b34377a', 'yes', '3'),
(18, 'John', 'john@john.com', '527bd5b5d689e2c32ae974c6229ff785/1MOmHpyhlUiocjY48LflT8pp6w=', '343b6b8b677872915576b87a0f50b4bc', 'yes', '2'),
(23, 'admin', 'admin@noreplyformyproject.com', '9beab7f1eb4cd470d340d87a663b6bd2804aadec7b765a62043d54e0e10c99fe22305d4b08f8f95ae0a6cf0c8cfa54c24f0e394847f32d96bb2535ec4a99d4d8lYMRhJ2phfQ0pG7XUmeN4bbBR8EEcXOKqudG/lQzguo=', 'b178027adf396b0a08d6e5a8cdf6fc1d', 'yes', '1'),
(24, 'manager', 'manager@manager.com', '2edc18d91242f7df3bc7d68fe4fdf605a65f54308395f99d8130cf1329b9fbab39f811c10598761f70d2887f5448b10106c87310de16832f67d0401562432c05wWT84TFUIs8qMyNEm37KJ8qWSvvYZKqoLZwv8rLCoiw=', '706b4000eaa41156494e7253c3d8e096', 'yes', '2'),
(25, 'staff', 'staff@staff.com', '46ceb9318a23fe86aca66755ec733b5badf5622151d288021253ed4587f23c7fd1bf6557e34371f253754c2b1ac6c209f030e7ff7415081318a1e1a251e621c26rcvYta1dthPTI+IapBBCh/k1lBRfAw3LHsqLQ0sOWw=', 'bc03d80c6f84260caaee4184a4353570', 'yes', '3'),
(35, '1', '1@1.com', '748c8dc3a3437605726c24df2fc5e5bae022c754d42d548b1a19039353a6494a482173ed5ac80b6607b869508f9472d6227431a34cfee974617f9a95a0a81141CeY27LS2fOh8FC3SrZbaOu8iOKjsQI+OLSWlm7Pe6Zs=', '71fd28484cbd6fc73dfa10d8450ebbeb', 'yes', '3'),
(36, 'x', 'x@x.com', 'c272c632f9ede8ffc02bf59b3b8a941bf067f38063a9d48204621771486cf4bb2615dbad407fdce70527440caaf990503269d76df1652ec9d122cfea6c87ad407T1lvhW4domrQmhai7W5JS7NH2ngVF/6edEpBWehliI=', '6b26467f15da949f44f55d93aeb9dd2b', 'no', '3');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `NIK` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `phone_num` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo_path` varchar(255) NOT NULL,
  `join_date` varchar(255) NOT NULL,
  `employee_category_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `NIK`, `email`, `first_name`, `last_name`, `division`, `position`, `phone_num`, `address`, `photo_path`, `join_date`, `employee_category_id`) VALUES
(43, 2, 'karyawan-2@gmil.com', 'Karyawan Ke-2', 'Last Name Ke-2', 'SAME', 'IDK', '2147483647', 'Jln. Axa Tower', 'foto-karyawan-2.jpg', '2019-01-09', 2),
(44, 3, 'karyawan-3@gmil.com', 'Karyawan Ke-3', 'Last Name Ke-3', 'SAME', 'IDK', '2147483647', 'Jln. Axa Tower', 'foto-karyawan-3.jpg', '2019-01-09', 2),
(45, 4, 'karyawan-4@gmil.com', 'Karyawan Ke-4', 'Last Name Ke-4', 'SAME', 'IDK', '2147483647', 'Jln. Axa Tower', 'foto-karyawan-4.jpg', '2019-01-09', 2),
(46, 5, 'karyawan-5@gmil.com', 'Karyawan Ke-5', 'Last Name Ke-5', 'SAME', 'IDK', '2147483647', 'Jln. Axa Tower', 'foto-karyawan-5.jpg', '2019-01-09', 3),
(47, 6, 'karyawan-6@gmil.com', 'Karyawan Ke-6', 'Last Name Ke-6', 'SAME', 'IDK', '2147483647', 'Jln. Axa Tower', 'foto-karyawan-6.jpg', '2019-01-09', 3),
(48, 7, 'karyawan-7@gmil.com', 'Karyawan Ke-7', 'Last Name Ke-7', 'SAME', 'IDK', '2147483647', 'Jln. Axa Tower', 'foto-karyawan-7.jpg', '2019-01-09', 3),
(49, 8, 'karyawan-8@gmil.com', 'Karyawan Ke-8', 'Last Name Ke-8', 'SAME', 'IDK', '2147483647', 'Jln. Axa Tower', 'foto-karyawan-8.jpg', '2019-01-09', 3),
(50, 9, 'karyawan-9@gmil.com', 'Karyawan Ke-9', 'Last Name Ke-9', 'SAME', 'IDK', '2147483647', 'Jln. Axa Tower', 'foto-karyawan-9.jpg', '2019-01-09', 3),
(51, 10, 'karyawan-10@gmil.com', 'Karyawan Ke-10', 'Last Name Ke-10', 'SAME', 'IDK', '2147483647', 'Jln. Axa Tower', 'foto-karyawan-10.jpg', '2019-01-09', 3),
(72, 1579487918, 'a@a.com', 'a', 'a', 'a', 'a', '081311319900', 'a', 'a', 'a', 3);

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

CREATE TABLE `overtime` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `duration` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `given_by` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `overtime`
--

INSERT INTO `overtime` (`id`, `name`, `date`, `duration`, `description`, `result`, `given_by`, `status`) VALUES
(1, 'admin', '2020-01-17', '0 hr 1 mins', 'a', 'a', 'Karyawan Ke-2', 'DECLINE'),
(2, 'admin', '2020-01-15', '0 hr 1 mins', 'ok', 'a', 'Karyawan Ke-2', 'ACCEPT'),
(3, 'staff', '2020-01-17', '0 hr 2 mins', 'TRial', 'testing\r\n', 'Karyawan Ke-2', 'PENDING'),
(4, 'staff', '2020-01-14', '3 hrs ', '2', '2', 'Karyawan Ke-2', 'PENDING');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `codeigniter_register`
--
ALTER TABLE `codeigniter_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_category_id` (`employee_category_id`);

--
-- Indexes for table `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `codeigniter_register`
--
ALTER TABLE `codeigniter_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `overtime`
--
ALTER TABLE `overtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`employee_category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
