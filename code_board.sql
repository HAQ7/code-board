-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: May 16, 2024 at 01:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code_board`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `answerText` varchar(1000) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `questionId` int(11) NOT NULL,
  `aDate` datetime NOT NULL,
  `averageRating` float DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answerText`, `user_name`, `questionId`, `aDate`, `averageRating`) VALUES
(137, 'Answer 1', 'Alice', 181, '2024-05-11 00:00:00', 5),
(138, 'Answer 2', 'Alice', 182, '2024-05-12 00:00:00', 4),
(139, 'Answer 3', 'Alice', 183, '2024-05-13 00:00:00', 3),
(140, 'Answer 4', 'Bob', 184, '2024-05-14 00:00:00', 2),
(141, 'Answer 5', 'Bob', 185, '2024-05-15 00:00:00', 1),
(142, 'Answer 6', 'Bob', 186, '2024-05-16 00:00:00', 5),
(143, 'Answer 7', 'Charlie', 187, '2024-05-11 00:00:00', 4),
(144, 'Answer 8', 'Charlie', 188, '2024-05-12 00:00:00', 3),
(145, 'Answer 9', 'Charlie', 189, '2024-05-13 00:00:00', 2),
(146, 'Answer 10', 'David', 190, '2024-05-14 00:00:00', 1),
(147, 'Answer 11', 'David', 191, '2024-05-15 00:00:00', 5),
(148, 'Answer 12', 'David', 192, '2024-05-16 00:00:00', 4),
(149, 'Answer 13', 'Eve', 193, '2024-05-11 00:00:00', 3),
(150, 'Answer 14', 'Eve', 194, '2024-05-12 00:00:00', 2),
(151, 'Answer 15', 'Eve', 195, '2024-05-13 00:00:00', 1),
(152, 'Answer 16', 'Frank', 196, '2024-05-14 00:00:00', 5),
(153, 'Answer 17', 'Frank', 197, '2024-05-15 00:00:00', 4),
(154, 'Answer 18', 'Frank', 198, '2024-05-16 00:00:00', 3),
(155, 'Answer 19', 'Grace', 199, '2024-05-11 00:00:00', 2),
(156, 'Answer 20', 'Grace', 200, '2024-05-12 00:00:00', 1),
(157, 'Answer 21', 'Alice', 201, '2024-05-13 00:00:00', 5),
(158, 'Answer 22', 'Alice', 202, '2024-05-14 00:00:00', 4),
(159, 'Answer 23', 'Alice', 203, '2024-05-15 00:00:00', 3),
(160, 'Answer 24', 'Bob', 204, '2024-05-16 00:00:00', 2),
(161, 'Answer 25', 'Bob', 205, '2024-05-11 00:00:00', 1),
(162, 'Answer 26', 'Bob', 206, '2024-05-12 00:00:00', 5),
(163, 'Answer 27', 'Charlie', 207, '2024-05-13 00:00:00', 4),
(164, 'Answer 28', 'Charlie', 208, '2024-05-14 00:00:00', 3),
(165, 'Answer 29', 'Charlie', 209, '2024-05-15 00:00:00', 2),
(166, 'Answer 30', 'David', 210, '2024-05-16 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `questionId` int(11) DEFAULT 0,
  `answerId` int(11) DEFAULT 0,
  `textField` varchar(255) NOT NULL,
  `cDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_name`, `questionId`, `answerId`, `textField`, `cDate`) VALUES
(23, 'Alice', 181, NULL, 'Comment 1 for question 181', '2024-05-11 00:00:00'),
(24, 'Alice', NULL, 137, 'Comment 2 for answer 137', '2024-05-12 00:00:00'),
(25, 'Bob', 182, NULL, 'Comment 3 for question 182', '2024-05-13 00:00:00'),
(26, 'Bob', NULL, 138, 'Comment 4 for answer 138', '2024-05-14 00:00:00'),
(27, 'Charlie', 183, NULL, 'Comment 5 for question 183', '2024-05-15 00:00:00'),
(28, 'Charlie', NULL, 139, 'Comment 6 for answer 139', '2024-05-16 00:00:00'),
(29, 'David', 184, NULL, 'Comment 7 for question 184', '2024-05-11 00:00:00'),
(30, 'David', NULL, 140, 'Comment 8 for answer 140', '2024-05-12 00:00:00'),
(31, 'Eve', 185, NULL, 'Comment 9 for question 185', '2024-05-13 00:00:00'),
(32, 'Eve', NULL, 141, 'Comment 10 for answer 141', '2024-05-14 00:00:00'),
(33, 'Frank', 186, NULL, 'Comment 11 for question 186', '2024-05-15 00:00:00'),
(34, 'Frank', NULL, 142, 'Comment 12 for answer 142', '2024-05-16 00:00:00'),
(35, 'Grace', 187, NULL, 'Comment 13 for question 187', '2024-05-11 00:00:00'),
(36, 'Grace', NULL, 143, 'Comment 14 for answer 143', '2024-05-12 00:00:00'),
(37, 'Alice', 188, NULL, 'Comment 15 for question 188', '2024-05-13 00:00:00'),
(38, 'Alice', NULL, 144, 'Comment 16 for answer 144', '2024-05-14 00:00:00'),
(39, 'Bob', 189, NULL, 'Comment 17 for question 189', '2024-05-15 00:00:00'),
(40, 'Bob', NULL, 145, 'Comment 18 for answer 145', '2024-05-16 00:00:00'),
(41, 'Charlie', 190, NULL, 'Comment 19 for question 190', '2024-05-11 00:00:00'),
(42, 'Charlie', NULL, 146, 'Comment 20 for answer 146', '2024-05-12 00:00:00'),
(43, 'David', 191, NULL, 'Comment 21 for question 191', '2024-05-13 00:00:00'),
(44, 'David', NULL, 147, 'Comment 22 for answer 147', '2024-05-14 00:00:00'),
(45, 'Eve', 192, NULL, 'Comment 23 for question 192', '2024-05-15 00:00:00'),
(46, 'Eve', NULL, 148, 'Comment 24 for answer 148', '2024-05-16 00:00:00'),
(47, 'Frank', 193, NULL, 'Comment 25 for question 193', '2024-05-11 00:00:00'),
(48, 'Frank', NULL, 149, 'Comment 26 for answer 149', '2024-05-12 00:00:00'),
(49, 'Grace', 194, NULL, 'Comment 27 for question 194', '2024-05-13 00:00:00'),
(50, 'Grace', NULL, 150, 'Comment 28 for answer 150', '2024-05-14 00:00:00'),
(51, 'Alice', 195, NULL, 'Comment 29 for question 195', '2024-05-15 00:00:00'),
(52, 'Alice', NULL, 151, 'Comment 30 for answer 151', '2024-05-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `title` varchar(120) NOT NULL,
  `descriptionText` varchar(1000) NOT NULL,
  `qDate` datetime NOT NULL,
  `num_ans` int(3) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `user_name`, `title`, `descriptionText`, `qDate`, `num_ans`) VALUES
(181, 'Alice', 'Question Title 1', 'Description for question 1', '2024-05-12 08:00:00', 1),
(182, 'Alice', 'Question Title 2', 'Description for question 2', '2024-05-12 09:30:00', 1),
(183, 'Alice', 'Question Title 3', 'Description for question 3', '2024-05-12 11:45:00', 1),
(184, 'Bob', 'Question Title 4', 'Description for question 4', '2024-05-13 10:00:00', 1),
(185, 'Bob', 'Question Title 5', 'Description for question 5', '2024-05-13 14:30:00', 1),
(186, 'Bob', 'Question Title 6', 'Description for question 6', '2024-05-13 16:45:00', 1),
(187, 'Charlie', 'Question Title 7', 'Description for question 7', '2024-05-14 08:30:00', 1),
(188, 'Charlie', 'Question Title 8', 'Description for question 8', '2024-05-14 10:45:00', 1),
(189, 'Charlie', 'Question Title 9', 'Description for question 9', '2024-05-14 13:00:00', 1),
(190, 'David', 'Question Title 10', 'Description for question 10', '2024-05-15 09:00:00', 1),
(191, 'David', 'Question Title 11', 'Description for question 11', '2024-05-15 11:15:00', 1),
(192, 'David', 'Question Title 12', 'Description for question 12', '2024-05-15 14:30:00', 1),
(193, 'Eve', 'Question Title 13', 'Description for question 13', '2024-05-16 08:00:00', 1),
(194, 'Eve', 'Question Title 14', 'Description for question 14', '2024-05-16 10:30:00', 1),
(195, 'Eve', 'Question Title 15', 'Description for question 15', '2024-05-16 13:45:00', 1),
(196, 'Frank', 'Question Title 16', 'Description for question 16', '2024-05-11 09:00:00', 1),
(197, 'Frank', 'Question Title 17', 'Description for question 17', '2024-05-11 11:30:00', 1),
(198, 'Frank', 'Question Title 18', 'Description for question 18', '2024-05-11 14:45:00', 1),
(199, 'Grace', 'Question Title 19', 'Description for question 19', '2024-05-12 08:30:00', 1),
(200, 'Grace', 'Question Title 20', 'Description for question 20', '2024-05-12 10:45:00', 1),
(201, 'Alice', 'Question Title 4', 'Description for question 4', '2024-05-11 08:00:00', 1),
(202, 'Alice', 'Question Title 5', 'Description for question 5', '2024-05-11 09:30:00', 1),
(203, 'Alice', 'Question Title 6', 'Description for question 6', '2024-05-11 11:45:00', 1),
(204, 'Alice', 'Question Title 7', 'Description for question 7', '2024-05-11 13:00:00', 1),
(205, 'Alice', 'Question Title 8', 'Description for question 8', '2024-05-11 14:15:00', 1),
(206, 'Alice', 'Question Title 9', 'Description for question 9', '2024-05-11 16:30:00', 1),
(207, 'Alice', 'Question Title 10', 'Description for question 10', '2024-05-12 08:00:00', 1),
(208, 'Alice', 'Question Title 11', 'Description for question 11', '2024-05-12 09:30:00', 1),
(209, 'Alice', 'Question Title 12', 'Description for question 12', '2024-05-12 11:45:00', 1),
(210, 'Alice', 'Question Title 13', 'Description for question 13', '2024-05-12 13:00:00', 1),
(211, 'Alice', 'Question Title 14', 'Description for question 14', '2024-05-12 14:15:00', 0),
(212, 'Alice', 'Question Title 15', 'Description for question 15', '2024-05-12 16:30:00', 0),
(213, 'Alice', 'Question Title 16', 'Description for question 16', '2024-05-13 08:00:00', 0),
(214, 'Alice', 'Question Title 17', 'Description for question 17', '2024-05-13 09:30:00', 0),
(215, 'Alice', 'Question Title 18', 'Description for question 18', '2024-05-13 11:45:00', 0),
(216, 'Alice', 'Question Title 19', 'Description for question 19', '2024-05-13 13:00:00', 0),
(217, 'Alice', 'Question Title 20', 'Description for question 20', '2024-05-13 14:15:00', 0),
(218, 'Alice', 'Question Title 21', 'Description for question 21', '2024-05-13 16:30:00', 0),
(219, 'Alice', 'Question Title 22', 'Description for question 22', '2024-05-14 08:00:00', 0),
(220, 'Alice', 'Question Title 23', 'Description for question 23', '2024-05-14 09:30:00', 0),
(221, 'Alice', 'Question Title 24', 'Description for question 24', '2024-05-14 11:45:00', 0),
(222, 'Alice', 'Question Title 25', 'Description for question 25', '2024-05-14 13:00:00', 0),
(223, 'Alice', 'Question Title 26', 'Description for question 26', '2024-05-14 14:15:00', 0),
(224, 'Alice', 'Question Title 27', 'Description for question 27', '2024-05-14 16:30:00', 0),
(225, 'Alice', 'Question Title 28', 'Description for question 28', '2024-05-15 08:00:00', 0),
(226, 'Alice', 'Question Title 29', 'Description for question 29', '2024-05-15 09:30:00', 0),
(227, 'Alice', 'Question Title 30', 'Description for question 30', '2024-05-15 11:45:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `answerId` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`answerId`, `user_name`, `rating`) VALUES
(137, 'Alice', 5),
(138, 'Alice', 4),
(139, 'Alice', 3),
(157, 'Alice', 5),
(158, 'Alice', 4),
(159, 'Alice', 3),
(140, 'Bob', 2),
(141, 'Bob', 1),
(142, 'Bob', 5),
(160, 'Bob', 2),
(161, 'Bob', 1),
(162, 'Bob', 5),
(143, 'Charlie', 4),
(144, 'Charlie', 3),
(145, 'Charlie', 2),
(163, 'Charlie', 4),
(164, 'Charlie', 3),
(165, 'Charlie', 2),
(146, 'David', 1),
(147, 'David', 5),
(148, 'David', 4),
(166, 'David', 1),
(149, 'Eve', 3),
(150, 'Eve', 2),
(151, 'Eve', 1),
(152, 'Frank', 5),
(153, 'Frank', 4),
(154, 'Frank', 3),
(155, 'Grace', 2),
(156, 'Grace', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_email`) VALUES
(58, 'Alice', 'password1', 'alice@example.com'),
(59, 'Bob', 'password2', 'bob@example.com'),
(60, 'Charlie', 'password3', 'charlie@example.com'),
(61, 'David', 'password4', 'david@example.com'),
(62, 'Eve', 'password5', 'eve@example.com'),
(63, 'Frank', 'password6', 'frank@example.com'),
(64, 'Grace', 'password7', 'grace@example.com'),
(65, 'Henry', 'password8', 'henry@example.com'),
(66, 'Ivy', 'password9', 'ivy@example.com'),
(67, 'Jack', 'password10', 'jack@example.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `questionId` (`questionId`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answerId` (`answerId`),
  ADD KEY `Qid` (`questionId`),
  ADD KEY `FK3_user_name` (`user_name`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_question_user` (`user_name`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`user_name`,`answerId`),
  ADD KEY `answerId` (`answerId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_name`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `questionId` FOREIGN KEY (`questionId`) REFERENCES `question` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_name` FOREIGN KEY (`user_name`) REFERENCES `user` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK3_user_name` FOREIGN KEY (`user_name`) REFERENCES `user` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Qid` FOREIGN KEY (`questionId`) REFERENCES `question` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answerId` FOREIGN KEY (`answerId`) REFERENCES `answers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `FK_question_user` FOREIGN KEY (`user_name`) REFERENCES `user` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`answerId`) REFERENCES `answers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`user_name`) REFERENCES `user` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
