-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 08:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctorsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `uid` int(11) NOT NULL,
  `adusername` text NOT NULL,
  `adpassword` varchar(128) NOT NULL,
  `passcode` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`uid`, `adusername`, `adpassword`, `passcode`) VALUES
(1, 'Admin', '$2y$10$BSMHU2Jx6IIrKdyH9t9Keu/30GyH4FE65XifhsNJdoVa/wGsTla0i', 'ADMIN2022');

-- --------------------------------------------------------

--
-- Table structure for table `doctorslist`
--

CREATE TABLE `doctorslist` (
  `uid` int(11) NOT NULL,
  `title` text NOT NULL,
  `lastname` text NOT NULL,
  `firstname` text NOT NULL,
  `username` text NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorslist`
--

INSERT INTO `doctorslist` (`uid`, `title`, `lastname`, `firstname`, `username`, `password`) VALUES
(1, 'Dr', 'Doe', 'John', 'JDoe', '$2y$10$bBy3IRqz6zDZRUd2WmyjOeXhnn2bvSq6GyjT5Vr9XK4/3mDghbWCy');

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE `guestbook` (
  `guestno` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `dob` date NOT NULL,
  `email` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`guestno`, `firstname`, `lastname`, `dob`, `email`, `description`) VALUES
(1, 'Tomm', 'Kennedy', '2022-02-02', 'tomk@gmail.com', 'this is a description of the problem');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(128) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `dob` date NOT NULL,
  `email` text NOT NULL,
  `priv` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `username`, `password`, `firstname`, `lastname`, `dob`, `email`, `priv`) VALUES
(9, 'Tom', '$2y$10$BSMHU2Jx6IIrKdyH9t9Keu/30GyH4FE65XifhsNJdoVa/wGsTla0i', 'Tom', 'Kennedy', '2022-03-08', 'tomkenned9@gmail.com', 'C'),
(10, 'Admin', '$2y$10$BSMHU2Jx6IIrKdyH9t9Keu/30GyH4FE65XifhsNJdoVa/wGsTla0i', 'N/A', 'N/A', '0000-00-00', 'admin@mail.com', 'A'),
(11, 'TKennedy', '$2y$10$AV33pryd2Vt3DGxQ6S17/.5Je/Jg1KtHE7fh2ncblqLFaWP7Cv/bC', 'Tom', 'Kennedy', '2022-03-08', 'tomkennedy428@gmail.com', 'C'),
(12, 'JDoe', '$2y$10$VGA8LPfupq2zVGq0GCJuI.IuAcL1RG5doeWZf0y0VUA0YDCtou5ci', 'John', 'Doe', '2022-02-28', 'JDoe@gmail.com', 'C'),
(13, 'TDoe', '$2y$10$u0c8V7W0lxju2NDPYgzWtOFA.tO6m1.pbrohXExnCoRvrDOxZTQd2', 'Tom', 'Doe', '2022-03-01', 'TDoe@email.com', 'C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `doctorslist`
--
ALTER TABLE `doctorslist`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`guestno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlog`
--
ALTER TABLE `adminlog`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctorslist`
--
ALTER TABLE `doctorslist`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `guestno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
