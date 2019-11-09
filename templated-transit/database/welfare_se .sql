-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 07:55 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `welfare_se`
--

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `donor` varchar(20) DEFAULT NULL,
  `event_name` varchar(40) DEFAULT NULL,
  `amount` float(10,2) DEFAULT NULL,
  `date_done` date DEFAULT NULL,
  `trans_status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`donor`, `event_name`, `amount`, `date_done`, `trans_status`) VALUES
('ranidu', 'event3', 40000.00, '2019-10-20', 'Yes'),
('lakith', 'event1', 10000.00, '2019-11-05', 'No'),
('yoshani', 'event1', 15000.00, '2019-10-29', 'Yes'),
('lakith', 'event2', 20000.00, '2019-11-08', 'No'),
('yoshani', 'event2', 10000.00, '2019-11-01', 'Yes'),
('ranidu', 'event2', 10000.00, '2019-11-03', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `username` varchar(20) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telephone` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`username`, `email`, `telephone`) VALUES
('lakith', 'dnxzf', '016763'),
('ranidu', 'qhjahjah', '038972'),
('yoshani', 'nxjnaja', '082652');

-- --------------------------------------------------------

--
-- Table structure for table `donor_pref`
--

CREATE TABLE `donor_pref` (
  `username` varchar(20) NOT NULL,
  `event_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `name` varchar(40) NOT NULL,
  `req_amount` float(10,2) DEFAULT NULL,
  `rec_amount` float(10,2) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`name`, `req_amount`, `rec_amount`, `type`) VALUES
('event1', 100000.00, 25000.00, 'child'),
('event2', 150000.00, 50000.00, 'animal'),
('event3', 80000.00, 40000.00, 'health');

-- --------------------------------------------------------

--
-- Table structure for table `recepients`
--

CREATE TABLE `recepients` (
  `username` varchar(20) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telephone` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `type`) VALUES
('lakith', 'mbdhrr', 'donor'),
('ranidu', 'qwwerr', 'donor'),
('yoshani', 'qwkkderr', 'donor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD KEY `donor` (`donor`),
  ADD KEY `event_name` (`event_name`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `donor_pref`
--
ALTER TABLE `donor_pref`
  ADD PRIMARY KEY (`username`,`event_type`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `recepients`
--
ALTER TABLE `recepients`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `donations_ibfk_1` FOREIGN KEY (`donor`) REFERENCES `donors` (`username`),
  ADD CONSTRAINT `donations_ibfk_2` FOREIGN KEY (`event_name`) REFERENCES `events` (`name`);

--
-- Constraints for table `donors`
--
ALTER TABLE `donors`
  ADD CONSTRAINT `donors_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `donor_pref`
--
ALTER TABLE `donor_pref`
  ADD CONSTRAINT `donor_pref_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `recepients`
--
ALTER TABLE `recepients`
  ADD CONSTRAINT `recepients_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
