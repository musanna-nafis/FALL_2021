-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 08:14 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aiub`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_students`
--

CREATE TABLE `new_students` (
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `gender` text NOT NULL,
  `mobileno` text NOT NULL,
  `dob` date NOT NULL,
  `hscresult` double NOT NULL,
  `sscresult` double NOT NULL,
  `course` text NOT NULL,
  `enrollingyear` int(100) NOT NULL,
  `enrollingsemester` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_students`
--

INSERT INTO `new_students` (`firstname`, `lastname`, `email`, `gender`, `mobileno`, `dob`, `hscresult`, `sscresult`, `course`, `enrollingyear`, `enrollingsemester`) VALUES
('Hasan Al Musanna', 'Nafis', 'hasanalmusanna@gmail.com', 'Male', '0199999999999', '2000-07-12', 5, 5, 'CSE', 2021, 'Fall'),
('Hasan Al Musanna', 'Nafis', 'hasanalmusanna@gmail.com', 'Male', '0199999999999', '1992-09-13', 5, 5, 'CSE', 2021, 'Fall'),
('Hasan Al Musanna', 'Nafis', 'hasanalmusanna@gmail.com', 'Male', '0199999999999', '1992-09-13', 5, 5, 'CSE', 2021, 'Fall'),
('Sultan Al', 'Nahian', 'sultan@gmail.com', 'Male', '018888888888', '1997-09-29', 5, 4.42, 'EEE', 2022, 'Spring');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
