-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 07:07 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `user`) VALUES
(3, 'vaibhav68'),
(4, 'subodh12'),
(5, 'manas123');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `bus_id` int(11) NOT NULL,
  `operator` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `fare` int(11) NOT NULL,
  `arrival_time` time NOT NULL,
  `departure_time` time NOT NULL,
  `noofbooking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bus_id`, `operator`, `type`, `origin`, `destination`, `fare`, `arrival_time`, `departure_time`, `noofbooking`) VALUES
(1, 'vaibhav', 'non economical', 'delhi', 'mumbai', 450, '09:37:56', '17:37:56', 5),
(3, 'manas', 'economical', 'bangolore', 'delhi', 2333, '21:59:00', '20:59:00', 5),
(4, 'Karan Travels', 'economical', 'mumbai', 'delhi', 13000, '10:00:00', '13:00:00', 0),
(5, 'Rohan Travels', 'non-economical', 'chennai', 'delhi', 17000, '09:00:00', '16:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bus_booking`
--

CREATE TABLE `bus_booking` (
  `busbooking_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `cancelled` varchar(3) NOT NULL DEFAULT 'NO',
  `Passengers` int(11) NOT NULL,
  `Bus_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_booking`
--

INSERT INTO `bus_booking` (`busbooking_id`, `username`, `origin`, `destination`, `cancelled`, `Passengers`, `Bus_id`, `date`, `time`) VALUES
(10002, 'vaibhav68', 'delhi', 'mumbai', 'YES', 2, 1, '2021-11-22', '2021-11-21 18:06:13'),
(10003, 'vaibhav68', 'delhi', 'mumbai', 'NO', 4, 1, '2021-12-02', '2021-11-22 10:25:05'),
(10004, 'subodh12', 'delhi', 'mumbai', 'YES', 3, 1, '2021-11-24', '2021-11-22 14:39:02'),
(10005, 'manas123', 'delhi', 'mumbai', 'NO', 2, 1, '2021-11-30', '2021-11-22 16:29:04'),
(10006, 'vaibhav68', 'delhi', 'mumbai', 'YES', 4, 1, '2021-12-11', '2021-11-23 21:54:16');

-- --------------------------------------------------------

--
-- Table structure for table `bus_payment`
--

CREATE TABLE `bus_payment` (
  `transcation_id` int(11) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `holder_name` varchar(50) NOT NULL,
  `busbooking_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_payment`
--

INSERT INTO `bus_payment` (`transcation_id`, `card_number`, `holder_name`, `busbooking_id`, `amount`) VALUES
(55237, '1234123412341234', 'vaibhav68', 10002, 900),
(55238, '1234567812345678', 'vaibhav68', 10003, 1800),
(55239, '1234567812341234', 'vaibhav68', 10004, 1350),
(55240, '1234123412341234', 'MANAS JHASI WALE', 10005, 900),
(55241, '1234123312345678', 'vaibhav68', 10006, 1800);

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `flight_id` int(11) NOT NULL,
  `operator` varchar(50) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `arrival` time NOT NULL,
  `departure` time NOT NULL,
  `type` varchar(20) NOT NULL,
  `fare` int(11) NOT NULL,
  `noofbookings` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flight_id`, `operator`, `origin`, `destination`, `arrival`, `departure`, `type`, `fare`, `noofbookings`) VALUES
(3, 'SUBODH', 'delhi', 'mumbai', '05:00:00', '03:00:00', 'economical', 13000, 1),
(6, 'INDIGO', 'delhi', 'mumbai', '14:00:00', '12:00:00', 'economical', 15000, 1),
(7, 'SPICEJET', 'mumbai', 'delhi', '00:30:00', '22:00:00', 'non-economical', 12000, 1),
(8, 'INDIGO', 'chennai', 'delhi', '07:00:00', '03:30:00', 'non-economical', 16000, 1),
(9, 'AIR INDIA', 'delhi', 'mumbai', '16:41:00', '13:48:00', 'economical', 12000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `flight_booking`
--

CREATE TABLE `flight_booking` (
  `flightbooking_id` int(11) NOT NULL,
  `origin` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `cancelled` varchar(3) NOT NULL DEFAULT 'NO',
  `username` varchar(50) NOT NULL,
  `Flight_id` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `Passengers` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight_booking`
--

INSERT INTO `flight_booking` (`flightbooking_id`, `origin`, `destination`, `cancelled`, `username`, `Flight_id`, `time`, `Passengers`, `date`) VALUES
(12550, 'delhi', 'mumbai', 'YES', 'vaibhav68', 3, '2021-11-21 18:33:18', 2, '2021-11-26'),
(12554, 'delhi', 'mumbai', 'NO', 'vaibhav68', 3, '2021-11-22 12:19:38', 5, '2021-12-11'),
(12555, 'delhi', 'mumbai', 'NO', 'subodh12', 3, '2021-11-22 14:41:49', 3, '2021-11-26'),
(12556, 'delhi', 'mumbai', 'YES', 'manas123', 3, '2021-11-22 16:30:59', 3, '2021-11-26'),
(12557, 'delhi', 'mumbai', 'NO', 'vaibhav68', 9, '2021-11-30 12:38:13', 4, '2021-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `flight_payment`
--

CREATE TABLE `flight_payment` (
  `transcation_id` int(11) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `holder_name` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `flightbooking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight_payment`
--

INSERT INTO `flight_payment` (`transcation_id`, `card_number`, `holder_name`, `amount`, `flightbooking_id`) VALUES
(5528, '1234123412341234', 'vaibhav68', 24000, 12550),
(5531, '1234567812345678', 'vaibhav68', 60000, 12553),
(5532, '2345123456781234', 'vaibhav68', 60000, 12554),
(5533, '1234123412345678', 'vaibhav68', 36000, 12555),
(5534, '8979888888888888', 'vaibhav68', 39000, 12556),
(5535, '1234123412341234', 'vaibhav68', 48000, 12557);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `locality` varchar(50) NOT NULL,
  `stars` int(11) NOT NULL,
  `rating` decimal(10,0) NOT NULL,
  `price` int(11) NOT NULL,
  `wifi` varchar(3) NOT NULL,
  `parking` varchar(3) NOT NULL,
  `restaurant` varchar(3) NOT NULL,
  `available_room` int(11) NOT NULL,
  `laundary` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `hotel_name`, `city`, `locality`, `stars`, `rating`, `price`, `wifi`, `parking`, `restaurant`, `available_room`, `laundary`) VALUES
(1, 'HIVE HOTEL', 'delhi', 'GT ROAD PANIPAT', 4, '9', 12000, 'yes', 'yes', 'yes', 14, 'yes'),
(3, 'HOTEL PK', 'mumbai', 'andheri west', 4, '8', 7000, 'yes', 'no', 'no', 14, 'yes'),
(4, 'HOTEL MY INDIA', 'chennai', 'Airport', 5, '9', 15000, 'yes', 'yes', 'yes', 14, 'yes'),
(5, 'HILLSIDE HOTEL', 'delhi', 'dwarka', 5, '10', 16000, 'yes', 'yes', 'yes', 14, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_booking`
--

CREATE TABLE `hotel_booking` (
  `hotelbooking_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `cancelled` varchar(3) NOT NULL DEFAULT 'NO',
  `hotel_name` varchar(100) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `city` varchar(30) NOT NULL,
  `rooms` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_booking`
--

INSERT INTO `hotel_booking` (`hotelbooking_id`, `username`, `cancelled`, `hotel_name`, `checkin`, `checkout`, `time`, `city`, `rooms`, `hotel_id`) VALUES
(6553, 'vaibhav68', 'NO', 'HIVE HOTEL', '2021-11-23', '2021-11-23', '2021-11-22 14:50:51', 'delhi', 4, 1),
(6554, 'manas123', 'NO', 'HIVE HOTEL', '2021-11-23', '2021-11-23', '2021-11-22 16:30:00', 'delhi', 3, 1),
(6555, 'vaibhav68', 'NO', 'HOTEL PK', '2021-11-25', '2021-11-25', '2021-11-29 10:03:20', 'mumbai', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_payment`
--

CREATE TABLE `hotel_payment` (
  `transaction_id` int(11) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `holder_name` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `hotelbooking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_payment`
--

INSERT INTO `hotel_payment` (`transaction_id`, `card_number`, `holder_name`, `amount`, `hotelbooking_id`) VALUES
(8981, '1234123412341234', 'vaibhav', 48000, 6553),
(8982, '9876987698769876', 'MANAS', 36000, 6554),
(8983, '1234123412341234', 'vaibhav68', 28000, 6555);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_id`, `place_name`) VALUES
(1, 'delhi'),
(2, 'mumbai'),
(3, 'Chennai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password`, `username`, `phone`, `address`, `Age`) VALUES
(1, 'vaibhav', 'vaibhavjangra68@gmail.com', '202cb962ac59075b964b07152d234b70', 'vaibhav68', '7988669801', 'panipat', 17),
(2, 'SUBODH', 'subodh@gmail.com', '202cb962ac59075b964b07152d234b70', 'subodh12', '7988669801', 'bulandshar', 18),
(3, 'manas', 'manas@gmail.com', '202cb962ac59075b964b07152d234b70', 'manas123', '23456789', 'jhansi ki rani', 92),
(4, 'VAIBHAV', 'vaibhav@gmail.com', '202cb962ac59075b964b07152d234b70', 'vaibhav09', '1234567789', 'karnal', 17),
(5, 'ANIL', 'anil32@gmail.com', '202cb962ac59075b964b07152d234b70', 'anil32', '999999', 'rajasthan', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `bus_booking`
--
ALTER TABLE `bus_booking`
  ADD PRIMARY KEY (`busbooking_id`);

--
-- Indexes for table `bus_payment`
--
ALTER TABLE `bus_payment`
  ADD PRIMARY KEY (`transcation_id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`flight_id`);

--
-- Indexes for table `flight_booking`
--
ALTER TABLE `flight_booking`
  ADD PRIMARY KEY (`flightbooking_id`);

--
-- Indexes for table `flight_payment`
--
ALTER TABLE `flight_payment`
  ADD PRIMARY KEY (`transcation_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `hotel_booking`
--
ALTER TABLE `hotel_booking`
  ADD PRIMARY KEY (`hotelbooking_id`);

--
-- Indexes for table `hotel_payment`
--
ALTER TABLE `hotel_payment`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bus_booking`
--
ALTER TABLE `bus_booking`
  MODIFY `busbooking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10007;

--
-- AUTO_INCREMENT for table `bus_payment`
--
ALTER TABLE `bus_payment`
  MODIFY `transcation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55242;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `flight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `flight_booking`
--
ALTER TABLE `flight_booking`
  MODIFY `flightbooking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12558;

--
-- AUTO_INCREMENT for table `flight_payment`
--
ALTER TABLE `flight_payment`
  MODIFY `transcation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5536;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hotel_booking`
--
ALTER TABLE `hotel_booking`
  MODIFY `hotelbooking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6556;

--
-- AUTO_INCREMENT for table `hotel_payment`
--
ALTER TABLE `hotel_payment`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8984;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
