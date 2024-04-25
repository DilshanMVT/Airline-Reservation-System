-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 11:12 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodation`
--

CREATE TABLE `accomodation` (
  `acc_id` int(11) NOT NULL,
  `acc_type` varchar(35) NOT NULL,
  `acc_price` double NOT NULL,
  `acc_slot` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `accomodation`
--

INSERT INTO `accomodation` (`acc_id`, `acc_type`, `acc_price`, `acc_slot`) VALUES
(1, 'Sitting', 350, 30),
(2, 'Economy A', 390, 30),
(3, 'Economy B', 390, 30),
(4, 'Tourist', 490, 30),
(5, 'Cabin', 600, 30),
(6, 'Deluxe', 700, 30);

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `book_id` int(11) NOT NULL,
  `book_by` varchar(50) NOT NULL,
  `book_contact` varchar(15) NOT NULL,
  `book_address` varchar(100) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_age` int(11) NOT NULL,
  `book_gender` varchar(15) NOT NULL,
  `book_departure` date NOT NULL,
  `dest_id` int(11) NOT NULL,
  `acc_id` int(11) NOT NULL,
  `origin_id` int(11) NOT NULL,
  `book_tracker` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`book_id`, `book_by`, `book_contact`, `book_address`, `book_name`, `book_age`, `book_gender`, `book_departure`, `dest_id`, `acc_id`, `origin_id`, `book_tracker`) VALUES
(3, 'wddsd', 'd44646s', 'ajsj', 'msmxksmxks', 56, 'Male', '2022-02-24', 1, 3, 1, '621239228db85'),
(4, 'ihihihi', '959+8989', 'aaasjsoj', 'jhihihii', 20, 'Male', '2022-02-15', 4, 2, 4, '62128ab0dc131'),
(5, 'ds', '12345678', 'kandy', 'dddd', 12, 'Male', '2022-02-24', 6, 2, 2, '621339c68f28a'),
(6, 'eeeeeeeeee', '1234', 'dsa', 'gggg', 15, 'Male', '2022-02-16', 1, 2, 1, '62133c633dc00'),
(7, 'th', '12356', 'fggh', 'dddd', 16, 'Male', '2022-02-15', 5, 2, 1, '62133ccf3063c'),
(8, 'ddddd', '123445', 'adahsj', 'asd', 23, 'Male', '2022-02-16', 4, 2, 1, '62133d7d084b1'),
(9, 'mm', '12222', 'jgbj', 'mm', 22, 'Male', '2022-03-10', 4, 2, 1, '621340dd32b34'),
(10, 'kamal', '07777777', 'jaffna', 'kamal', 25, 'Male', '2022-02-22', 4, 2, 1, '621381322777a');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `dest_id` int(11) NOT NULL,
  `dest_destination` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`dest_id`, `dest_destination`) VALUES
(1, 'HAMBANTOTA - HIA'),
(2, 'LONDON - LHR'),
(3, 'MELBOURNE - MEL'),
(4, 'DUBAI - DXB'),
(5, 'SINGAPORE - SIN'),
(6, 'TOKYO - HND'),
(7, 'DELHI - DEL'),
(8, 'COLOMBO - CMB');

-- --------------------------------------------------------

--
-- Table structure for table `fleet`
--

CREATE TABLE `fleet` (
  `aircraft_id` int(11) DEFAULT NULL,
  `make` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `seating_capacity` int(11) DEFAULT NULL,
  `registration` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `fleet`
--

INSERT INTO `fleet` (`aircraft_id`, `make`, `model`, `seating_capacity`, `registration`) VALUES
(1, 'Air Bus', 'A320-200', 150, '4R-SWA'),
(2, 'Air Bus', 'A321-200', 182, '4R-SWB'),
(3, 'Boeing', '767-400ER', 240, '4R-SWC'),
(4, 'Boeing', '777-300ER', 350, '4R-SWD'),
(5, 'ATR', 'ATR72-500', 75, '4R-SWE'),
(6, 'Air Bus', 'A330-300', 440, '4R-SAW'),
(7, 'Air Bus', 'A330-300', 440, '4R-SAV');

-- --------------------------------------------------------

--
-- Table structure for table `origin`
--

CREATE TABLE `origin` (
  `origin_id` int(11) NOT NULL,
  `origin_desc` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `origin`
--

INSERT INTO `origin` (`origin_id`, `origin_desc`) VALUES
(1, 'COLOMBO - CMB'),
(2, 'HAMBANTOTA - HIA'),
(3, 'MELBOURNE - MEL'),
(4, 'DUBAI - DXB'),
(5, 'SINGAPORE - SIN'),
(6, 'TOKYO - HND'),
(7, 'DELHI - DEL'),
(8, 'LONDON - LHR');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `Route_id` int(11) NOT NULL,
  `Route_name` varchar(255) DEFAULT NULL,
  `dest_id` int(11) NOT NULL,
  `org_id` int(11) NOT NULL,
  `aircraft_Id` int(11) NOT NULL,
  `d_time` varchar(255) DEFAULT NULL,
  `a_time` varchar(255) DEFAULT NULL,
  `t_time` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `on_day` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`Route_id`, `Route_name`, `dest_id`, `org_id`, `aircraft_Id`, `d_time`, `a_time`, `t_time`, `day`, `on_day`) VALUES
(1, 'SL229', 8, 4, 3, '00.25 IST', '04.50 IST', '04Hrs 25Min', 'Same Day', 'Same Day'),
(2, 'SL124', 2, 1, 6, '00.30 IST', '11.20 IST', '10Hrs 50Min', 'Same Day', 'Same Day'),
(3, 'SL016', 3, 1, 4, '01.00 IST', '10.00 IST', '10Hrs 00Min', 'Same Day', 'Same Day'),
(4, 'SL654', 6, 1, 7, '02.20 IST', '13.20 IST', '11Hrs 00Min', 'Same Day', 'Same Day'),
(5, 'SL011', 8, 7, 1, '03.00 IST', '06.00 IST', '03Hrs 00Min', 'Same Day', 'Same Day'),
(6, 'SL004', 1, 1, 2, '03.10 IST', '04.00 IST', '00Hrs 50Min', 'Same Day', 'Same Day'),
(7, 'SL224', 4, 2, 2, '04.45 IST', '09.45 IST', '05Hrs 00Min', 'Same Day', 'Same Day'),
(8, 'SL244', 5, 1, 3, '09.00 IST', '12.55 IST', '03Hrs 55Min', 'Same Day', 'Same Day'),
(9, 'SL002', 8, 2, 5, '10.45 IST', '11.45 IST', '01Hr 00Min', 'Same Day', 'Same Day'),
(10, 'SL225', 1, 4, 2, '10.45 IST', '15.45 IST', '05Hrs 00Min', 'Same Day', 'Same Day'),
(11, 'SL017', 8, 3, 4, '10.45 IST', '20.45 IST', '10Hrs 00Min', 'Same Day', 'Same Day'),
(12, 'SL010', 7, 1, 1, '13.00 IST', '16.00 IST', '03Hrs 00Min', 'Same Day', 'Same Day'),
(13, 'SL125', 8, 8, 6, '12.30 IST', '23.20 IST', '10Hrs 50Min', 'Same Day', 'Same Day'),
(14, 'SL225', 8, 5, 3, '13.35 IST', '17.30 IST', '03Hrs 55Min', 'Same Day', 'Same Day'),
(15, 'SL655', 8, 6, 7, '13.50 IST', '00.50 IST', '11Hrs 00Min', 'The Next Day', 'The Next Day'),
(16, 'SL006', 8, 2, 2, '16.10 IST', '17.00 IST', '00Hrs 50Min', 'Same Day', 'Same Day'),
(17, 'SL013', 8, 7, 1, '16.50 IST', '19.50 IST', '03Hrs 00Min', 'Same Day', 'Same Day'),
(18, 'SL008', 1, 1, 5, '18.25 IST', '19.25 IST', '01Hr 0Min', 'Same Day', 'Same Day'),
(19, 'SL226', 4, 1, 3, '20.00 IST', '23.25 IST', '4Hrs 25Min', 'Same Day', 'Same Day'),
(20, 'SL012', 7, 1, 1, '23.50 IST', '02.50 IST', '3Hrs 00Min', 'The Next Day', 'The Next Day');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `stat_id` int(11) NOT NULL,
  `stat_desc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`stat_id`, `stat_desc`) VALUES
(1, 'Paid'),
(2, 'Refunded');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `trans_id` int(11) NOT NULL,
  `trans_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `trans_payment` double NOT NULL,
  `trans_passenger` varchar(100) NOT NULL,
  `trans_age` int(11) NOT NULL,
  `trans_gender` varchar(15) NOT NULL,
  `acc_id` int(11) NOT NULL,
  `origin_id` int(11) NOT NULL,
  `dest_id` int(11) NOT NULL,
  `stat_id` int(11) DEFAULT 1,
  `trans_refunded` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`trans_id`, `trans_time`, `trans_payment`, `trans_passenger`, `trans_age`, `trans_gender`, `acc_id`, `origin_id`, `dest_id`, `stat_id`, `trans_refunded`) VALUES
(2, '2022-02-16 20:00:21', 280.8, 'tharindu', 21, 'Male', 2, 1, 1, 1, 1),
(8, '2022-02-18 13:44:50', 351, 'dilini', 28, 'Male', 2, 1, 2, 1, 0),
(10, '2022-02-21 13:35:20', 249.6, 'Mahesh Nawarathna', 30, 'Male', 2, 1, 4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ulogin`
--

CREATE TABLE `ulogin` (
  `user_id` int(11) NOT NULL,
  `user_account` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_password` varchar(35) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `passport` varchar(35) NOT NULL,
  `role` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_account` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `passport` varchar(35) NOT NULL,
  `role` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_account`, `email`, `phone`, `passport`, `role`, `status`) VALUES
(8, 'admin', 'admin@sibaair.com', '+94812423336', 'N8245698', 'Admin', '1'),
(9, 'admin2', 'admin2@sibaair.com', '+94812423336', 'N8245698', 'Admin', '1'),
(10, 'Harshani Dilini', 'harshani@gmail.com', '+94767250331', 'N8679123', 'user', '1'),
(11, 'saranga', 'sarangarhd@gmail.com', '1234', '12345678', 'user', '1'),
(13, 'dul', 'sara@gmail.com', '1234567890', '1234567890', 'user', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(11) NOT NULL,
  `user_account` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `passport` varchar(35) NOT NULL,
  `role` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `user_password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `user_account`, `email`, `phone`, `passport`, `role`, `status`, `user_password`) VALUES
(16, 'admin', 'admin@sibaair.com', '+94812423336', 'N8245698', 'Admin', '1', '21232f297a57a5a743894a0e4a801fc3'),
(17, 'admin2', 'admin2@sibaair.com', '+94812423336', 'N8245698', 'Admin', '1', 'e807f1fcf82d132f9bb018ca6738a19f'),
(18, 'Harshani Dilini', 'harshani@gmail.com', '+94767250331', 'N8679123', 'user', '1', '31528198109743225ff9d0cf04d1fdd1'),
(23, 'saranga', 'sarangarhd@gmail.com', '1234', '12345678', 'user', '1', '827ccb0eea8a706c4c34a16891f84e7b'),
(24, 'dul', 'sara@gmail.com', '1234567890', '1234567890', 'Admin', '1', 'e807f1fcf82d132f9bb018ca6738a19f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodation`
--
ALTER TABLE `accomodation`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `dest_id` (`dest_id`,`acc_id`),
  ADD KEY `acc_id` (`acc_id`),
  ADD KEY `origin_id` (`origin_id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`dest_id`);

--
-- Indexes for table `origin`
--
ALTER TABLE `origin`
  ADD PRIMARY KEY (`origin_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`stat_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `acc_id` (`acc_id`,`origin_id`,`dest_id`,`stat_id`),
  ADD KEY `origin_id` (`origin_id`),
  ADD KEY `dest_id` (`dest_id`),
  ADD KEY `stat_id` (`stat_id`);

--
-- Indexes for table `ulogin`
--
ALTER TABLE `ulogin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accomodation`
--
ALTER TABLE `accomodation`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `dest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `origin`
--
ALTER TABLE `origin`
  MODIFY `origin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `stat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ulogin`
--
ALTER TABLE `ulogin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booked`
--
ALTER TABLE `booked`
  ADD CONSTRAINT `booked_ibfk_1` FOREIGN KEY (`dest_id`) REFERENCES `destination` (`dest_id`),
  ADD CONSTRAINT `booked_ibfk_2` FOREIGN KEY (`acc_id`) REFERENCES `accomodation` (`acc_id`),
  ADD CONSTRAINT `booked_ibfk_3` FOREIGN KEY (`origin_id`) REFERENCES `origin` (`origin_id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `accomodation` (`acc_id`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`origin_id`) REFERENCES `origin` (`origin_id`),
  ADD CONSTRAINT `transaction_ibfk_3` FOREIGN KEY (`dest_id`) REFERENCES `destination` (`dest_id`),
  ADD CONSTRAINT `transaction_ibfk_4` FOREIGN KEY (`stat_id`) REFERENCES `status` (`stat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
