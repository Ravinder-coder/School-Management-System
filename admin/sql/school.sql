-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 01:53 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL,
  `features` varchar(200) NOT NULL,
  `imageurl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `content`, `features`, `imageurl`) VALUES
(2, 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.', '6100acf8da121about.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'Ravindersingh@gmail.com', '@Ravinder');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `aadhar` varchar(200) NOT NULL,
  `account` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `name`, `fname`, `class`, `phone`, `aadhar`, `account`, `gender`, `district`, `address`) VALUES
(12, 'Rajpreet Singh', 'Parkash Singh', '11Th Class', '9877624978', '941009473632', '078300150954', 'Male', 'Fazilka', 'Vill Dhani Resham singh Po. Mandi Amin Ganj Teh. jalalabad (w)'),
(13, 'Ravinder Singh', 'Parkash Singh', '10Th Class', '9781904978', '941009473632', '078300150958', 'Male', 'Fazilka', 'Vill Dhani Resham singh Po. Mandi Amin Ganj Teh. jalalabad (w)'),
(14, 'Karan Singh', 'Harchar Singh', '12Th Class', '9781904952', '941009473562', '0783000150956', 'Male', 'Fazilka', 'Vill Dhani Resham singh Po. Mandi Amin Ganj Teh. jalalabad (w)'),
(15, 'Karandeep singh', 'Resham Singh', '12Th Class', '1234567895', '126547859455', '213213215665465', 'Male', 'Fazilka', 'Vill aaa Po. Mandi Amin Ganj Teh. Fazilka(w)'),
(16, 'Rajpreet Singh', 'Parkash Singh', '12Th Class', '1234567895', '4564565465', '4646546546', 'Male', 'Fazilka', 'Vill aajkljak;ldfs Po. Mandi Amin Ganj Teh. Fazilka(w)');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `announcement` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `announcement`) VALUES
(2, 'Admission Started Now'),
(3, 'Admission Apply Now'),
(4, 'School Started Now');

-- --------------------------------------------------------

--
-- Table structure for table `biolab`
--

CREATE TABLE `biolab` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL,
  `features` varchar(200) NOT NULL,
  `imageurl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biolab`
--

INSERT INTO `biolab` (`id`, `title`, `content`, `features`, `imageurl`) VALUES
(2, 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.', '6100c36534d4dcourse-details-tab-5.png');

-- --------------------------------------------------------

--
-- Table structure for table `computerlab`
--

CREATE TABLE `computerlab` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL,
  `features` varchar(200) NOT NULL,
  `imageurl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computerlab`
--

INSERT INTO `computerlab` (`id`, `title`, `content`, `features`, `imageurl`) VALUES
(2, 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.', '6100c328b1d69events-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `classname` varchar(200) NOT NULL,
  `admissionclass` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL,
  `imageurl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `classname`, `admissionclass`, `content`, `imageurl`) VALUES
(3, '12Th Class', '12Th Class Admission Now', 'Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.', '6100beab10652course-1.jpg'),
(4, '11Th Class', '11Th Class Admission Now', 'Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.', '6100bf9c2da7acourse-2.jpg'),
(5, '10Th Class', '10Th Class Admission Now', 'Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.', '6100bfb98f75ccourse-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `homeimage`
--

CREATE TABLE `homeimage` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `imageurl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homeimage`
--

INSERT INTO `homeimage` (`id`, `title`, `imageurl`) VALUES
(4, 'We are team of talented designers making websites with Bootstrap', '6100a82bce62ahero-bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `latestnews`
--

CREATE TABLE `latestnews` (
  `id` int(11) NOT NULL,
  `latestnews` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latestnews`
--

INSERT INTO `latestnews` (`id`, `latestnews`) VALUES
(1, 'Admission Start Now '),
(2, 'Applay Now'),
(4, 'Admission Start Now ');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL,
  `features` varchar(200) NOT NULL,
  `imageurl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `title`, `content`, `features`, `imageurl`) VALUES
(2, 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.', '6100c3b2afb2cabout.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mathlab`
--

CREATE TABLE `mathlab` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL,
  `features` varchar(200) NOT NULL,
  `imageurl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mathlab`
--

INSERT INTO `mathlab` (`id`, `title`, `content`, `features`, `imageurl`) VALUES
(2, 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.', '6100c3902f6dacourse-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `smartroom`
--

CREATE TABLE `smartroom` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL,
  `features` varchar(200) NOT NULL,
  `imageurl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smartroom`
--

INSERT INTO `smartroom` (`id`, `title`, `content`, `features`, `imageurl`) VALUES
(2, 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.', '6100c22417ca4course-details-tab-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `profession` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `imageurl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `name`, `profession`, `description`, `imageurl`) VALUES
(6, 'Walter White', 'Web Development', 'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut', '6100aff5a01ectrainer-1.jpg'),
(8, 'Ravinder Singh', 'Software Development', 'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut', '6100b330b6b63trainer-3.jpg'),
(9, 'Shanaj Gill', 'Full Stack', 'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut', '6100b340d1129trainer-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, '', 'ravindersingh@gmail.com', '@Ravinder'),
(2, 'Ravinder Singh', 'ravinder@gmail.com', '789'),
(3, 'testing', 'testing@gmail.com', '123'),
(4, 'Gorav Kumar', 'goravkumar@gmail.com', 'gorav'),
(5, 'Rajpreet Singh', 'rajpreetsin941@gmail.com', '123'),
(6, 'Rajpreet Singh', 'rajpreetsin941@gmail.com', '123'),
(7, 'Ravinder Singh', 'Ravindersingh@gmail.com', '123'),
(8, 'Ravinder Singh', 'Ravindersingh@gmail.com', '123'),
(9, 'Ravinder Singh', 'rs7752353@gmail.com', '@Genius'),
(10, 'Ravinder Singh', 'rs7752353@gmail.com', '@Genius'),
(11, 'Ravinder Singh', 'rs7752353@gmail.com', '@Genius'),
(12, 'Ravinder Singh', 'rajpreetsin941@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biolab`
--
ALTER TABLE `biolab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computerlab`
--
ALTER TABLE `computerlab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeimage`
--
ALTER TABLE `homeimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latestnews`
--
ALTER TABLE `latestnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mathlab`
--
ALTER TABLE `mathlab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartroom`
--
ALTER TABLE `smartroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `biolab`
--
ALTER TABLE `biolab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `computerlab`
--
ALTER TABLE `computerlab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `homeimage`
--
ALTER TABLE `homeimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `latestnews`
--
ALTER TABLE `latestnews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mathlab`
--
ALTER TABLE `mathlab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `smartroom`
--
ALTER TABLE `smartroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
