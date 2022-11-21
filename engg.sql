-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 12:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `engg`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blogId` int(11) NOT NULL,
  `blogTitle` text NOT NULL,
  `content` mediumtext NOT NULL,
  `images` text NOT NULL,
  `enteredBy` int(11) NOT NULL,
  `enteredDate` datetime NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0 for inactive, 1 for active',
  `updatedBy` int(11) DEFAULT NULL,
  `updateDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blogcomments`
--

CREATE TABLE `blogcomments` (
  `commentId` int(11) NOT NULL,
  `blogId` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `comment` text NOT NULL,
  `enteredDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `categoryName` text NOT NULL,
  `activeStatus` int(11) NOT NULL,
  `enteredDate` datetime NOT NULL,
  `enteredBy` int(11) NOT NULL,
  `updateDate` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `categoryName`, `activeStatus`, `enteredDate`, `enteredBy`, `updateDate`, `updatedBy`) VALUES
(64, 'hello', 1, '2022-09-02 07:57:07', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentId` int(11) NOT NULL,
  `courseId` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `comment` int(11) NOT NULL,
  `enteredDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentId`, `courseId`, `studentId`, `comment`, `enteredDate`) VALUES
(0, 7, 1, 0, '2022-09-04 03:56:55'),
(0, 7, 1, 0, '2022-09-05 09:41:43'),
(0, 7, 1, 0, '2022-09-04 03:56:55'),
(0, 7, 1, 0, '2022-09-05 09:41:43'),
(0, 7, 1, 0, '2022-09-04 03:56:55'),
(0, 7, 1, 0, '2022-09-05 09:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseId` int(11) NOT NULL,
  `courseName` text NOT NULL,
  `description` text NOT NULL,
  `learning` text NOT NULL,
  `requirements` text NOT NULL,
  `targetAudience` text NOT NULL,
  `instructorId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `tag` tinyint(4) NOT NULL,
  `level` tinyint(4) NOT NULL,
  `duration` time NOT NULL,
  `price` int(11) NOT NULL,
  `releaseDate` datetime NOT NULL,
  `enteredDate` datetime NOT NULL,
  `enteredBy` int(11) NOT NULL,
  `updateDate` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `updatedBy` int(11) DEFAULT NULL,
  `enrollmentValidity` tinyint(4) NOT NULL COMMENT '0 for lifetime,1 for 3 Months,2 for 6 Months,3 for Year',
  `activeStatus` tinyint(1) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseId`, `courseName`, `description`, `learning`, `requirements`, `targetAudience`, `instructorId`, `categoryId`, `tag`, `level`, `duration`, `price`, `releaseDate`, `enteredDate`, `enteredBy`, `updateDate`, `updatedBy`, `enrollmentValidity`, `activeStatus`, `image`) VALUES
(7, 'Hydro', 'this is really nice courseeee', 'hydro', 'Basic knowledge', 'civil engineers', 1, 64, 1, 2, '12:10:20', 15000, '2022-09-04 12:01:56', '2022-09-04 12:01:56', 1, '2022-11-04 04:33:14', 1, 1, 1, 'image source'),
(8, 'hydroPowerElectricit', 'this is really ', 'hydropower55', 'Basic knowledg', 'civil engin', 1, 64, 1, 1, '12:12:12', 1800, '2022-09-09 11:48:11', '2022-09-09 11:48:11', 1, '2022-10-17 02:26:36', 1, 1, 1, 'hh'),
(9, 'cad', 'thi is cad course', 'cadia5', 'basic knowledge of graph', 'civil engg', 5, 64, 1, 2, '21:44:33', 5600, '2022-10-20 18:44:33', '2022-10-26 18:44:33', 5, NULL, NULL, 6, 1, 'hello.jpg'),
(23, 'Flutter ', 'dsadadada', 'fweadadada', 'w3eadadada', 'dadadadada', 1, 64, 1, 0, '00:01:00', 111, '0000-00-00 00:00:00', '2022-11-01 03:25:39', 1, NULL, NULL, 0, 1, 'product/images/1'),
(24, 'Laravel', 'Nice course for the backend you should definitely learn in 2022. ', 'Easy to work framework for php.', 'Php knowledge.', 'Who currently works on core php.', 1, 64, 1, 0, '00:01:00', 5000, '0000-00-00 00:00:00', '2022-11-02 07:44:07', 5, '2022-11-02 08:34:15', 1, 5, 0, 'product/images/Active'),
(25, 'Programming', 'Nice course.', 'Nice course.', 'Nice course.', 'Nice course.', 1, 64, 1, 0, '00:01:00', 20000, '0000-00-00 00:00:00', '2022-11-02 09:29:12', 1, NULL, NULL, 0, 1, 'product/images/0'),
(26, 'Japanese Language', 'Language tuition', 'Language tuition', 'Language tuition', 'Language tuition', 1, 64, 1, 0, '00:01:00', 1000, '0000-00-00 00:00:00', '2022-11-03 06:30:51', 1, '2022-11-07 14:45:03', NULL, 0, 1, 'product/images/1.png'),
(27, 'Korean language', 'Language tuition', 'Language tuition', 'Language tuition', 'Language tuition', 1, 64, 1, 0, '00:01:00', 1000, '0000-00-00 00:00:00', '2022-11-03 06:33:38', 1, '2022-11-07 14:44:38', NULL, 0, 1, 'product/images/1.png'),
(41, 'Chinese language', 'language class', 'language class', 'language class', 'language class', 1, 64, 1, 0, '00:01:00', 1000, '0000-00-00 00:00:00', '2022-11-03 06:57:57', 1, '2022-11-07 14:34:15', NULL, 0, 1, 'product/images/1.png');

-- --------------------------------------------------------

--
-- Table structure for table `coursetopic`
--

CREATE TABLE `coursetopic` (
  `topicId` int(11) NOT NULL,
  `courseId` int(11) NOT NULL,
  `srNo` tinyint(4) NOT NULL,
  `topicName` text NOT NULL,
  `duration` time NOT NULL,
  `enteredBy` int(11) NOT NULL,
  `enteredDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updateDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursetopic`
--

INSERT INTO `coursetopic` (`topicId`, `courseId`, `srNo`, `topicName`, `duration`, `enteredBy`, `enteredDate`, `updatedBy`, `updateDate`) VALUES
(1, 7, 1, 'this is new topic', '00:15:00', 1, '0000-00-00 00:00:00', NULL, NULL),
(2, 7, 2, 'this is new', '00:15:00', 1, '0000-00-00 00:00:00', 1, '2022-09-13 12:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `enrollmentId` int(11) NOT NULL,
  `courseId` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `enrollDate` datetime NOT NULL,
  `expiryDate` datetime NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1 for enrolled, 2 for processing, 3 for cancelled',
  `updatedBy` int(11) DEFAULT NULL,
  `updateDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`enrollmentId`, `courseId`, `studentId`, `enrollDate`, `expiryDate`, `status`, `updatedBy`, `updateDate`) VALUES
(1, 25, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL),
(2, 23, 9, '2022-11-03 10:26:35', '2022-11-26 10:26:35', 2, NULL, NULL),
(3, 41, 6, '2022-08-03 11:02:43', '2022-11-22 11:02:43', 2, NULL, NULL),
(4, 24, 6, '2022-11-15 11:32:05', '2022-11-18 11:32:05', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructorId` int(11) NOT NULL,
  `fullName` text NOT NULL,
  `dob` date NOT NULL,
  `email` text NOT NULL,
  `phoneNo` char(15) DEFAULT NULL,
  `mobileNo` char(15) NOT NULL,
  `address` text NOT NULL,
  `joinDate` date NOT NULL,
  `activeStatus` tinyint(1) NOT NULL,
  `userName` text NOT NULL,
  `password` text NOT NULL,
  `retireDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentId` int(11) NOT NULL,
  `enrollmentId` int(11) NOT NULL,
  `paymentMode` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `paymentDate` int(11) NOT NULL,
  `paymentAcNo` text DEFAULT NULL,
  `bankName` text DEFAULT NULL,
  `chequeNo` text DEFAULT NULL,
  `referenceId` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1 for completed, 2 for processing, 3 for refunded'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmode`
--

CREATE TABLE `paymentmode` (
  `paymentMode` int(11) NOT NULL,
  `name` text NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0 for inactive, 1 for active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quizId` int(11) NOT NULL,
  `title` text NOT NULL,
  `courseId` int(11) NOT NULL,
  `enteredDate` datetime NOT NULL,
  `enteredBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quizquestion`
--

CREATE TABLE `quizquestion` (
  `questionId` int(11) NOT NULL,
  `quizId` int(11) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quizquestionoptions`
--

CREATE TABLE `quizquestionoptions` (
  `optionId` int(11) NOT NULL,
  `questionId` int(11) NOT NULL,
  `options` text NOT NULL,
  `isCorrect` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quizuseranswer`
--

CREATE TABLE `quizuseranswer` (
  `answerId` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `questionId` int(11) NOT NULL,
  `optionId` int(11) NOT NULL,
  `enteredDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `ratingId` int(11) NOT NULL,
  `courseId` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `enteredDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffId` int(11) NOT NULL,
  `fullName` text NOT NULL,
  `dob` date NOT NULL,
  `email` text NOT NULL,
  `gender` tinyint(11) NOT NULL,
  `phoneNo` char(15) DEFAULT NULL,
  `mobileNo` char(15) NOT NULL,
  `address` text NOT NULL,
  `joinDate` date NOT NULL,
  `qualification` text NOT NULL COMMENT 'highest qualification',
  `subjectExpertise` text NOT NULL,
  `noOfExperience` tinyint(4) NOT NULL COMMENT 'no of experience in years',
  `cvLocation` varchar(500) NOT NULL COMMENT 'location of cv document',
  `activeStatus` tinyint(1) NOT NULL,
  `type` tinyint(4) NOT NULL COMMENT '1 for staff, 2 for admin, 3 for instructor',
  `userName` text NOT NULL,
  `password` text NOT NULL,
  `retireDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffId`, `fullName`, `dob`, `email`, `gender`, `phoneNo`, `mobileNo`, `address`, `joinDate`, `qualification`, `subjectExpertise`, `noOfExperience`, `cvLocation`, `activeStatus`, `type`, `userName`, `password`, `retireDate`) VALUES
(1, 'sandipadhi adhikari', '2025-12-12', 'sadiprock28@gamil.com', 1, NULL, '9866343866', 'sk', '2025-12-02', 'me', 'py', 5, 'hello', 1, 1, 'hello', 'there', NULL),
(2, 'adhikari 2025-12-12', '0000-00-00', '1', 127, NULL, 'sk', '2025-12-12', '0000-00-00', 'me', 'py', 5, 'hello', 1, 0, 'hellothere', 'X6cjGmk=', NULL),
(3, 'sandipadhikariaiaia adhikari', '2025-12-12', 'sadiprock28@gamil.com', 1, NULL, '9866343866', 'sk', '0000-00-00', '2025-12-12', 'me', 0, '5', 1, 0, '1', 'Q6oqBGNwiakdlA==', NULL),
(4, 'sandipadhikariaiaia adhikari', '2025-12-12', 'sadiprock28@gamil.com', 1, NULL, '9866343866', 'sk', '0000-00-00', 'qua', 'me', 5, 'hello', 1, 0, '2025-12-12', 'Q6oqBGNwiakdlfdb', NULL),
(5, 'bibek acharaya', '2022-03-08', 'adhikari.sandip547@gmail.com', 1, NULL, '9866343866', 'dhiklaethar', '2022-10-05', 'Bachelelors in engineering', 'Hydropower', 7, 'hell.png', 1, 2, 'bibek', 'SaYkDWc10/8=', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentId` int(11) NOT NULL,
  `fullName` text NOT NULL,
  `dob` date NOT NULL,
  `email` text NOT NULL,
  `gender` tinyint(4) NOT NULL COMMENT '1 for male, 2 for female, 3 for other',
  `username` text NOT NULL,
  `password` text NOT NULL,
  `mobileNo` char(15) NOT NULL,
  `address` text NOT NULL,
  `registrationDate` datetime NOT NULL,
  `expiryDate` datetime DEFAULT NULL,
  `activeStatus` tinyint(1) NOT NULL COMMENT '0 for inactive, 1 for active',
  `lastLogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentId`, `fullName`, `dob`, `email`, `gender`, `username`, `password`, `mobileNo`, `address`, `registrationDate`, `expiryDate`, `activeStatus`, `lastLogin`) VALUES
(1, 'sandipadhi adhikari', '2025-12-12', 'sadiprock28@gamil.com', 1, 'sandip547', 'WK5lWT4z1P8=', '9866343866', 'sk', '2022-09-01 04:14:26', NULL, 0, '0000-00-00 00:00:00'),
(2, 'sanidp adhikari', '2025-12-02', 'sanidprock28@gmail.com', 2, 'sd1', 'WK5lWT4z1P8=', '9866343866', 'dhikalethar', '2022-09-01 04:15:56', NULL, 1, '0000-00-00 00:00:00'),
(3, 'sandip adhikari', '1994-11-29', 'sandip.adhikari@icp.edu.np', 1, 'sandip47', 'SqsuAWdlk6U=', '9866343866', 'newroad', '2022-09-14 07:46:20', NULL, 1, '0000-00-00 00:00:00'),
(4, 'fdf ', '0000-00-00', '', 1, '', '', '', '', '2022-09-14 07:53:05', NULL, 1, '0000-00-00 00:00:00'),
(5, 'sandip adhikari', '1994-12-12', 'sandiprock28@gmail.com', 1, 'sandip77', 'WK4=', '+9779866343866', 'Dhikalethar', '2022-09-14 08:17:02', NULL, 1, '0000-00-00 00:00:00'),
(6, 'sandip Guru', '1995-12-12', 'sandiprock28@gmail.com', 1, 'sandiprock28', 'WK4oDGV0', '+9779866343867', 'Dhikaletharr', '2022-09-16 06:20:05', NULL, 1, '0000-00-00 00:00:00'),
(7, 'sandip sandip', '1994-12-11', 'adhikari.sandip547@gmail.com', 1, 'sandip1234567', 'WK4oDGV0', '+9779866343866', 'sasa', '2022-09-16 09:19:30', NULL, 1, '0000-00-00 00:00:00'),
(8, 'Rohan Sharma', '1211-02-09', 'sandiprock@gmail.com', 1, 'rohan1234', 'WaAuCWI=', '9866343866', 'Patna', '2022-09-21 08:28:24', NULL, 1, '0000-00-00 00:00:00'),
(9, 'bibek bibek', '2022-10-31', 'bibek@gmail.com', 1, 'bibek321', 'X6o1HExjjK0Gnb1d+Zc=', '9812345678', 'Pokhara, Nepal', '2022-10-31 12:54:23', NULL, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `studentactivity`
--

CREATE TABLE `studentactivity` (
  `activityId` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `videoId` int(11) NOT NULL,
  `completedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `videoId` int(11) NOT NULL,
  `topicId` int(11) NOT NULL,
  `srNo` int(11) NOT NULL,
  `link` varchar(200) CHARACTER SET ascii NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blogId`),
  ADD KEY `enter staff FK` (`enteredBy`),
  ADD KEY `update staff FK` (`updatedBy`);

--
-- Indexes for table `blogcomments`
--
ALTER TABLE `blogcomments`
  ADD PRIMARY KEY (`commentId`),
  ADD KEY `enter student FK` (`studentId`),
  ADD KEY `blog FK` (`blogId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`),
  ADD KEY `enterStaff` (`enteredBy`),
  ADD KEY `updateStaff` (`updatedBy`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD KEY `course FKK` (`courseId`),
  ADD KEY `student FKK` (`studentId`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseId`),
  ADD UNIQUE KEY `courseName` (`courseName`) USING HASH,
  ADD KEY `category id` (`categoryId`),
  ADD KEY `enter staff` (`enteredBy`),
  ADD KEY `update staff` (`updatedBy`),
  ADD KEY `instructor id` (`instructorId`);

--
-- Indexes for table `coursetopic`
--
ALTER TABLE `coursetopic`
  ADD PRIMARY KEY (`topicId`),
  ADD UNIQUE KEY `courseId` (`courseId`,`srNo`),
  ADD KEY `staff entry` (`enteredBy`),
  ADD KEY `staff update` (`updatedBy`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`enrollmentId`),
  ADD UNIQUE KEY `courseId` (`courseId`,`studentId`),
  ADD KEY `student` (`studentId`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instructorId`),
  ADD UNIQUE KEY `userName` (`userName`) USING HASH;

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentId`),
  ADD KEY `enrollmentFK` (`enrollmentId`),
  ADD KEY `modeFK` (`paymentMode`);

--
-- Indexes for table `paymentmode`
--
ALTER TABLE `paymentmode`
  ADD PRIMARY KEY (`paymentMode`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quizId`),
  ADD KEY `course fkkk` (`courseId`),
  ADD KEY `FKk enteredBy` (`enteredBy`);

--
-- Indexes for table `quizquestion`
--
ALTER TABLE `quizquestion`
  ADD PRIMARY KEY (`questionId`),
  ADD KEY `quiz FK` (`quizId`);

--
-- Indexes for table `quizquestionoptions`
--
ALTER TABLE `quizquestionoptions`
  ADD PRIMARY KEY (`optionId`),
  ADD KEY `question FK` (`questionId`);

--
-- Indexes for table `quizuseranswer`
--
ALTER TABLE `quizuseranswer`
  ADD PRIMARY KEY (`answerId`),
  ADD KEY `student FKKK` (`studentId`),
  ADD KEY `question ID FKK` (`questionId`),
  ADD KEY `option ID FKK` (`optionId`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`ratingId`),
  ADD KEY `courseFK` (`courseId`),
  ADD KEY `studentFK` (`studentId`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffId`),
  ADD UNIQUE KEY `userName` (`userName`) USING HASH;

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentId`),
  ADD UNIQUE KEY `username` (`username`) USING HASH;

--
-- Indexes for table `studentactivity`
--
ALTER TABLE `studentactivity`
  ADD PRIMARY KEY (`activityId`),
  ADD KEY `student ID FK` (`studentId`),
  ADD KEY `video Id FK` (`videoId`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`videoId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blogId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogcomments`
--
ALTER TABLE `blogcomments`
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `coursetopic`
--
ALTER TABLE `coursetopic`
  MODIFY `topicId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `enrollmentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructorId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymentmode`
--
ALTER TABLE `paymentmode`
  MODIFY `paymentMode` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quizId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizquestion`
--
ALTER TABLE `quizquestion`
  MODIFY `questionId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizquestionoptions`
--
ALTER TABLE `quizquestionoptions`
  MODIFY `optionId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizuseranswer`
--
ALTER TABLE `quizuseranswer`
  MODIFY `answerId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `ratingId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `studentactivity`
--
ALTER TABLE `studentactivity`
  MODIFY `activityId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `videoId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `enter staff FK` FOREIGN KEY (`enteredBy`) REFERENCES `staff` (`staffId`),
  ADD CONSTRAINT `update staff FK` FOREIGN KEY (`updatedBy`) REFERENCES `staff` (`staffId`);

--
-- Constraints for table `blogcomments`
--
ALTER TABLE `blogcomments`
  ADD CONSTRAINT `blog FK` FOREIGN KEY (`blogId`) REFERENCES `blog` (`blogId`),
  ADD CONSTRAINT `enter student FK` FOREIGN KEY (`studentId`) REFERENCES `student` (`studentId`);

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `enterStaff` FOREIGN KEY (`enteredBy`) REFERENCES `staff` (`staffId`),
  ADD CONSTRAINT `updateStaff` FOREIGN KEY (`updatedBy`) REFERENCES `staff` (`staffId`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `course FKK` FOREIGN KEY (`courseId`) REFERENCES `course` (`courseId`),
  ADD CONSTRAINT `student FKK` FOREIGN KEY (`studentId`) REFERENCES `student` (`studentId`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `category id` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`),
  ADD CONSTRAINT `enter staff` FOREIGN KEY (`enteredBy`) REFERENCES `staff` (`staffId`),
  ADD CONSTRAINT `instructor id` FOREIGN KEY (`instructorId`) REFERENCES `staff` (`staffId`),
  ADD CONSTRAINT `update staff` FOREIGN KEY (`updatedBy`) REFERENCES `staff` (`staffId`);

--
-- Constraints for table `coursetopic`
--
ALTER TABLE `coursetopic`
  ADD CONSTRAINT `course Id` FOREIGN KEY (`courseId`) REFERENCES `course` (`courseId`),
  ADD CONSTRAINT `staff entry` FOREIGN KEY (`enteredBy`) REFERENCES `staff` (`staffId`),
  ADD CONSTRAINT `staff update` FOREIGN KEY (`updatedBy`) REFERENCES `staff` (`staffId`);

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `course fk` FOREIGN KEY (`courseId`) REFERENCES `course` (`courseId`),
  ADD CONSTRAINT `student` FOREIGN KEY (`studentId`) REFERENCES `student` (`studentId`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `enrollmentFK` FOREIGN KEY (`enrollmentId`) REFERENCES `enrollment` (`enrollmentId`),
  ADD CONSTRAINT `modeFK` FOREIGN KEY (`paymentMode`) REFERENCES `paymentmode` (`paymentMode`);

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `FKk enteredBy` FOREIGN KEY (`enteredBy`) REFERENCES `staff` (`staffId`),
  ADD CONSTRAINT `course fkkk` FOREIGN KEY (`courseId`) REFERENCES `course` (`courseId`);

--
-- Constraints for table `quizquestion`
--
ALTER TABLE `quizquestion`
  ADD CONSTRAINT `quiz FK` FOREIGN KEY (`quizId`) REFERENCES `quiz` (`quizId`);

--
-- Constraints for table `quizquestionoptions`
--
ALTER TABLE `quizquestionoptions`
  ADD CONSTRAINT `question FK` FOREIGN KEY (`questionId`) REFERENCES `quizquestion` (`questionId`);

--
-- Constraints for table `quizuseranswer`
--
ALTER TABLE `quizuseranswer`
  ADD CONSTRAINT `option ID FKK` FOREIGN KEY (`optionId`) REFERENCES `quizquestionoptions` (`optionId`),
  ADD CONSTRAINT `question ID FKK` FOREIGN KEY (`questionId`) REFERENCES `quizquestion` (`questionId`),
  ADD CONSTRAINT `student FKKK` FOREIGN KEY (`studentId`) REFERENCES `student` (`studentId`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `courseFK` FOREIGN KEY (`courseId`) REFERENCES `course` (`courseId`),
  ADD CONSTRAINT `studentFK` FOREIGN KEY (`studentId`) REFERENCES `student` (`studentId`);

--
-- Constraints for table `studentactivity`
--
ALTER TABLE `studentactivity`
  ADD CONSTRAINT `student ID FK` FOREIGN KEY (`studentId`) REFERENCES `student` (`studentId`),
  ADD CONSTRAINT `video Id FK` FOREIGN KEY (`videoId`) REFERENCES `videos` (`videoId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
