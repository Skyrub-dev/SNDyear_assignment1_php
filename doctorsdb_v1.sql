-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 05:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

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
  `docusername` text NOT NULL,
  `docpassword` varchar(128) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorslist`
--

INSERT INTO `doctorslist` (`uid`, `title`, `lastname`, `firstname`, `docusername`, `docpassword`, `department`) VALUES
(1, 'Dr', 'Doe', 'John', 'JDoe', '$2y$10$bBy3IRqz6zDZRUd2WmyjOeXhnn2bvSq6GyjT5Vr9XK4/3mDghbWCy', ''),
(2, 'Dr', 'John', 'James', 'DRJ', '$2y$10$1QpYHNNCEcxybpELo6bS6OVLv0Nrl8hjQMEhuybKIk2oObROlbAEK', 'AAE'),
(4, 'Dr', 'Reynolds', 'Logan', 'LRaynolds', '$2y$10$lYiVwczyw2rAAkP4x6EbReNCZzIhlkQgEtEuvXJfqWFQnaQUfni.u', 'GS'),
(5, 'Dr', 'Kennedy', 'Thomas', 'TK2002', '$2y$10$8Jyd3UW4pJUtE8PEdD/JEeLEvwjIObgJE2ciaiFsApN.SyPDKSKGy', 'GS');

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
  `description` text NOT NULL,
  `assigned_to` varchar(255) DEFAULT NULL,
  `department` varchar(255) NOT NULL,
  `self` varchar(255) DEFAULT NULL,
  `gfname` varchar(255) DEFAULT NULL,
  `glname` varchar(255) DEFAULT NULL,
  `gdob` varchar(255) DEFAULT NULL,
  `gemail` varchar(255) DEFAULT NULL,
  `gdescrip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`guestno`, `firstname`, `lastname`, `dob`, `email`, `description`, `assigned_to`, `department`, `self`, `gfname`, `glname`, `gdob`, `gemail`, `gdescrip`) VALUES
(1, 'Tomm', 'Kennedy', '2022-02-02', 'tomk@gmail.com', 'this is a description of the problem', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'second', 'name', '2022-03-01', 'emai@gasdf.com', 'sdfgsdg', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'John', 'Doe', '2022-02-28', 'JDoe@gmail.com', 'sdf', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Tim', 'Kennod', '2022-04-06', 'sdkfjhasdflkjh@dkfjh.com', 'Help', NULL, 'AAE', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'John', 'Doe', '2022-02-28', 'JDoe@gmail.com', 'I am in trouble', NULL, 'AAE', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Emma', 'Ryan', '1975-11-08', 'emnryan@googlemail.com', 'headache', NULL, 'AAE', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'soncdar', 'lastn', '2022-04-06', 'secpm@ggg.com', 'another problem', NULL, 'AAE', 'YES', NULL, NULL, NULL, NULL, NULL),
(8, 'first', 'lastn', '2022-03-30', 'sdfkdjf@fdslkj.com', 'they need it', NULL, 'AAE', 'NO', NULL, NULL, NULL, NULL, NULL),
(9, 'sdf', 'sdf', '2022-03-30', 'sdf@sdf.com', 'sdfsdf', NULL, 'AAE', 'NO', NULL, NULL, NULL, NULL, NULL),
(10, 'tim', 'kne', '2022-04-06', 'dfg@sdfgsdf.com', 'dfgdfgdfgdfg', NULL, 'AAE', 'NO', NULL, NULL, NULL, NULL, NULL),
(11, 'fdg', 'dfg', '2022-04-05', 'dfg@sdfg.com', 'dfgdfg', NULL, 'AAE', 'YES', NULL, NULL, NULL, NULL, NULL),
(12, 'sdf', 'sdf', '2022-03-30', 'tomkenned9@gmail.com', 'fdsg', NULL, 'AAE', 'YES', 'dfg', 'dfg', '2022-03-29', 'gfdgdfg@fdg.com', 'sdf'),
(13, 'John', 'Doe', '2022-02-28', 'JDoe@gmail.com', 'second', NULL, 'GS', 'YES', NULL, NULL, NULL, NULL, NULL);

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
(13, 'TDoe', '$2y$10$u0c8V7W0lxju2NDPYgzWtOFA.tO6m1.pbrohXExnCoRvrDOxZTQd2', 'Tom', 'Doe', '2022-03-01', 'TDoe@email.com', 'C'),
(14, 'Emma', '$2y$10$mwvtEv5u8oVUKo.83MkENOv6mBfLBkATDoTuRgjWTE7EDCTwxDiBK', 'Emma', 'Ryan', '1975-11-08', 'emnryan@googlemail.com', 'C'),
(15, 'NDoe', '$2y$10$evEZxK167QqacWrX7Gid3ukha7DQtPYPbUzeWhptmTgZo2ZcE1k76', 'Nora', 'Doe', '2022-03-29', 'nd@gsfdlkg.com', 'C'),
(16, 'Another', '$2y$10$WDhg8pCX8bss5IXSUf3Rx.zBtdb433OQe.URceAsqeHHRRU9M9m5K', 'Another', 'Account', '2022-03-29', 'dfg@dsfg.com', 'C'),
(17, 'ANN', '$2y$10$r/JgsNyRhkqGFWZipnWYoud9.47Ou.RDEm/8c8U1lzqODX.0DCn3i', 'ANother', 'acc', '2022-04-06', 'sdf@dsf.com', 'C'),
(18, 'en', '$2y$10$6.3LJHv3E.8wdy16EIonfulTv5OwO7mVF7OsmW4DX4sH/ZrH5mo8K', 'sdf', 'sdfq', '2022-03-29', 'sdf@dsfg.com', 'C'),
(19, 'Emma2', '$2y$10$C5q93ev11OTch3mZ9VUdDeqUTMVayftX1MAoYAAlDVz4z/JKJsw4m', 'Emma', 'Ryan', '2022-03-30', 'dfg@dsfsdf.com', 'C');

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
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `guestno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;
