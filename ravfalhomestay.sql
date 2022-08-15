-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 08:32 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ravfalhomestay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Ravfal', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(15) NOT NULL,
  `id_room` int(15) NOT NULL,
  `id_member` int(15) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `id_room`, `id_member`, `start_date`, `duration`) VALUES
(21, 30, 18, '2021-04-28', '1 Month'),
(22, 21, 19, '2021-04-28', '3 Month'),
(23, 33, 20, '2021-04-29', '1 Month');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(15) NOT NULL,
  `name_member` varchar(200) NOT NULL,
  `pass_member` varchar(200) NOT NULL,
  `email_member` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `nohp` varchar(200) NOT NULL,
  `address_member` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `name_member`, `pass_member`, `email_member`, `gender`, `nohp`, `address_member`) VALUES
(17, 'Naufal Shidqan Sayyidan', '1234', 'naufalnj16@gmail.com', 'Male', '08127653729', 'Indonesia'),
(18, 'David Armando', '12345', 'dave@gmail.com', 'Male', '087876547902', 'Indonesia'),
(19, 'Randy Sadewa', 'randy123', 'randy@gmail.com', 'Male', '087876547910', 'Mongol'),
(20, 'Raisa', '1234', 'raisa@gmail.com', 'Female', '087876547987', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `rent_id` int(15) NOT NULL,
  `id_member` int(15) NOT NULL,
  `id_room` int(15) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `nominal` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`rent_id`, `id_member`, `id_room`, `date`, `nominal`, `picture`, `status`, `month`) VALUES
(5, 18, 30, '2021-04-28', '2000000', '1619533608.png', 'Payed Off', 'Mei'),
(6, 19, 21, '2021-04-28', '4000000', '1619586334.png', 'Payed Off', 'April - June'),
(7, 20, 33, '2021-04-29', '2000000', '1619587704.png', 'Payed Off', 'April');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(15) NOT NULL,
  `id_member` int(15) NOT NULL,
  `id_room` int(15) NOT NULL,
  `about` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `id_member`, `id_room`, `about`, `content`) VALUES
(12, 18, 30, 'Network', 'I got network problem when i playing games');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id_room` int(15) NOT NULL,
  `room_name` varchar(100) NOT NULL,
  `floor` varchar(100) NOT NULL,
  `facility` text NOT NULL,
  `stats` varchar(100) NOT NULL,
  `cost` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id_room`, `room_name`, `floor`, `facility`, `stats`, `cost`) VALUES
(21, 'M1', '1', 'a single bed, mattress, a bed sheet, a pillow, a pillow case, a desk, a chair, a cabinet, 1 light bulb, 1 air conditioner, a trash can, a window, and a private bathroom.', 'used', 1000000),
(22, 'M2', '1', 'a single bed, mattress, a bed sheet, a pillow, a pillow case, a desk, a chair, a cabinet, 1 light bulb, 1 air conditioner, a trash can, a window, and a private bathroom.', 'avilable', 1000000),
(23, 'M3', '1', 'a single bed, mattress, a bed sheet, a pillow, a pillow case, a desk, a chair, a cabinet, 1 light bulb, 1 air conditioner, a trash can, a window, and a private bathroom.', 'avilable', 1000000),
(24, 'M4', '1', 'a single bed, mattress, a bed sheet, a pillow, a pillow case, a desk, a chair, a cabinet, 1 light bulb, 1 air conditioner, a trash can, a window, and a private bathroom.', 'avilable', 1000000),
(25, 'M5', '1', 'a single bed, mattress, a bed sheet, a pillow, a pillow case, a desk, a chair, a cabinet, 1 light bulb, 1 air conditioner, a trash can, a window, and a private bathroom.', 'avilable', 1000000),
(26, 'M6', '2', 'a single bed, mattress, a bed sheet, a pillow, a pillow case, a desk, a chair, a cabinet, 1 light bulb, 1 air conditioner, a trash can, a window, and a private bathroom.', 'avilable', 1000000),
(27, 'M7', '2', 'a single bed, mattress, a bed sheet, a pillow, a pillow case, a desk, a chair, a cabinet, 1 light bulb, 1 air conditioner, a trash can, a window, and a private bathroom.', 'avilable', 1000000),
(28, 'M8', '2', 'a single bed, mattress, a bed sheet, a pillow, a pillow case, a desk, a chair, a cabinet, 1 light bulb, 1 air conditioner, a trash can, a window, and a private bathroom.', 'avilable', 1000000),
(29, 'M9', '2', 'a single bed, mattress, a bed sheet, a pillow, a pillow case, a desk, a chair, a cabinet, 1 light bulb, 1 air conditioner, a trash can, a window, and a private bathroom.', 'avilable', 1000000),
(30, 'M10', '2', 'a single bed, mattress, a bed sheet, a pillow, a pillow case, a desk, a chair, a cabinet, 1 light bulb, 1 air conditioner, a trash can, a window, and a private bathroom.', 'used', 1000000),
(31, 'W1', '1', 'a single bed, mattress, a bed sheet, a pillow, a pillow case, a desk, a chair, a cabinet, 1 light bulb, 1 air conditioner, a trash can, a window, and a private bathroom.', 'avilable', 1000000),
(32, 'W2', '1', 'a single bed, mattress, a bed sheet, a pillow, a pillow case, a desk, a chair, a cabinet, 1 light bulb, 1 air conditioner, a trash can, a window, and a private bathroom.', 'avilable', 1000000),
(33, 'W3', '1', 'a single bed, mattress, a bed sheet, a pillow, a pillow case, a desk, a chair, a cabinet, 1 light bulb, 1 air conditioner, a trash can, a window, and a private bathroom.', 'used', 1000000),
(34, 'W4', '1', 'a single bed, mattress, a bed sheet, a pillow, a pillow case, a desk, a chair, a cabinet, 1 light bulb, 1 air conditioner, a trash can, a window, and a private bathroom.', 'avilable', 1000000),
(35, 'W5', '1', 'a single bed, mattress, a bed sheet, a pillow, a pillow case, a desk, a chair, a cabinet, 1 light bulb, 1 air conditioner, a trash can, a window, and a private bathroom.', 'avilable', 1000000),
(36, 'W6', '2', 'a single bed, mattress, a bed sheet, a pillow, a pillow case, a desk, a chair, a cabinet, 1 light bulb, 1 air conditioner, a trash can, a window, and a private bathroom.', 'avilable', 1000000),
(37, 'W7', '2', 'a single bed, mattress, a bed sheet, a pillow, a pillow case, a desk, a chair, a cabinet, 1 light bulb, 1 air conditioner, a trash can, a window, and a private bathroom.', 'avilable', 1000000),
(38, 'W8', '2', 'a single bed, mattress, a bed sheet, a pillow, a pillow case, a desk, a chair, a cabinet, 1 light bulb, 1 air conditioner, a trash can, a window, and a private bathroom.', 'avilable', 1000000),
(39, 'W9', '2', 'a single bed, mattress, a bed sheet, a pillow, a pillow case, a desk, a chair, a cabinet, 1 light bulb, 1 air conditioner, a trash can, a window, and a private bathroom.', 'avilable', 1000000),
(40, 'W10', '2', 'a single bed, mattress, a bed sheet, a pillow, a pillow case, a desk, a chair, a cabinet, 1 light bulb, 1 air conditioner, a trash can, a window, and a private bathroom.', 'avilable', 1000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `id_hunian` (`id_room`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_hunian_2` (`id_room`,`id_member`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`rent_id`),
  ADD KEY `id_member` (`id_member`,`id_room`),
  ADD KEY `id_hunian` (`id_room`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `id_member` (`id_member`,`id_room`),
  ADD KEY `id_room` (`id_room`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id_room`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `rent_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id_room` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_3` FOREIGN KEY (`id_room`) REFERENCES `room` (`id_room`);

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rent_ibfk_3` FOREIGN KEY (`id_room`) REFERENCES `room` (`id_room`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`id_room`) REFERENCES `room` (`id_room`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
