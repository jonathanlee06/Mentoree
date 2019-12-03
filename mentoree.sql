-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 02, 2019 at 01:34 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentoree`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

DROP TABLE IF EXISTS `favorite`;
CREATE TABLE IF NOT EXISTS `favorite` (
  `favID` int(11) NOT NULL AUTO_INCREMENT,
  `jobID` varchar(11) DEFAULT NULL,
  `profileID` varchar(11) DEFAULT NULL,
  `userID` varchar(11) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`favID`),
  KEY `jobID` (`jobID`),
  KEY `profileID` (`profileID`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`favID`, `jobID`, `profileID`, `userID`) VALUES
(20, '10', NULL, '1'),
(33, NULL, '11', '1'),
(32, NULL, '12', '1'),
(26, '5', NULL, '37'),
(30, '26', NULL, '41'),
(28, NULL, '6', '1'),
(31, '8', NULL, '41'),
(35, NULL, '8', '42'),
(36, '22', NULL, '37'),
(37, '26', NULL, '37'),
(38, NULL, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `joblistings`
--

DROP TABLE IF EXISTS `joblistings`;
CREATE TABLE IF NOT EXISTS `joblistings` (
  `jobID` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(250) NOT NULL,
  `level_of_teaching` varchar(100) NOT NULL,
  `budget` varchar(100) NOT NULL,
  `frequency` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `job_description` varchar(250) NOT NULL,
  `studentID` int(11) NOT NULL,
  PRIMARY KEY (`jobID`),
  KEY `studentID` (`studentID`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `joblistings`
--

INSERT INTO `joblistings` (`jobID`, `subject`, `level_of_teaching`, `budget`, `frequency`, `duration`, `job_description`, `studentID`) VALUES
(1, 'Discrete Math ', 'Degree ', '30', '2', '1.5', 'Looking for someone who has studied this subject and scored at least an A. ', 1),
(2, 'Computer Architecture ', 'Degree ', '50', '2', '1.5', 'Looking for someone who scored at least an A for Computer Architecture ', 1),
(3, 'Java Programming', 'Degree ', '40', '1', '1.5', 'Looking for someone who understands java thoroughly and is experience in java programming ', 1),
(4, 'Nutrition ', 'Diploma ', '30', '2', '1', 'Looking for an someone experienced in teaching nutrition ', 2),
(5, 'Engineering Mathematics 1 ', 'Degree ', '50', '1', '2', 'Looking for someone good at Mathematics 1', 4),
(6, 'Statistics ', 'Degree ', '50', '1', '2', 'Looking for someone who is good at statistics subject ', 4),
(7, 'Fundamentals of Programming ', 'Pre-U/Foundation ', '35', '1', '1.5', 'Looking for someone proficient in C programming ', 5),
(8, 'Introduction to Business', 'Pre-U/Foundation ', '35', '1', '1.5', 'Looking for someone who score A for business subject ', 5),
(9, 'Computing Mathematics ', 'Degree ', '50', '2', '1.5', 'Someone experienced in teaching and proficient in computing mathematics ', 7),
(10, 'Fundamentals of Object Oriented Programming ', 'Degree ', '50', '2', '1.5', 'Looking for someone experienced in teaching object oriented programming ', 7),
(11, 'Management Accounting 1', 'Degree ', '45', '3', '2', 'Someone experienced and finished the subject ', 8),
(12, 'Corporate Social Responsibility', 'Degree ', '45', '3', '2 ', 'looking for someone experienced and finished the subject ', 8),
(13, 'Further Mathematics ', 'Pre-U/Foundation ', '55', '2', '2', 'Looking for someone who scored decently for further mathematics ', 10),
(14, 'Physics ', 'Pre-U/Foundation  ', '55', '2', '1.5 ', 'Looking for someone who scored decently for Physics subject ', 10),
(15, 'Java Programming ', 'Degree ', '40', '4', '1.5', 'Looking for someone proficient in Java Programming ', 12),
(16, 'Fundamentals of Programming ', 'Pre-U/Foundation ', '35', '1', '1', 'Looking for someone who scored well for this subject ', 13),
(17, 'Introduction to Communication ', 'Pre-U/Foundation ', '35', '1', '1', 'Looking for someone experienced and scored well for communication ', 13),
(18, 'Financial Accounting 2 ', 'Degree ', '55', '3', '2', 'Tutor must have finished the subject and scored well ', 14),
(19, 'Business Law ', 'Degree ', '50', '3', '1', 'Tutor must have finished the subject and scored well ', 14),
(20, 'Principles of Software Engineering ', 'Degree ', '60', '1', '2', 'Looking for someone who scored A on this subject ', 15),
(21, 'Software Testing', 'Degree', '10', '3', '2', 'Need help on testing techniques, things like EP, BVA', 1),
(22, 'Data Communication & Networking', 'Degree', '20', '3', '2', 'Need help on data communication related stuff', 1),
(26, 'Intro to business', 'Degree', '10', '1', '2', 'need help on business things', 40);

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

DROP TABLE IF EXISTS `tutors`;
CREATE TABLE IF NOT EXISTS `tutors` (
  `profileID` int(11) NOT NULL AUTO_INCREMENT,
  `subjects` varchar(250) NOT NULL,
  `level_of_teaching` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL,
  `rate` varchar(250) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tutorID` int(11) NOT NULL,
  PRIMARY KEY (`profileID`),
  KEY `tutorID` (`tutorID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`profileID`, `subjects`, `level_of_teaching`, `time`, `rate`, `status`, `tutorID`) VALUES
(1, 'Discrete Math, Introduction To Security, Object Oriented Programming, Data Structures and Algorithms', 'Degree', 'Monday-friday(3pm-5pm)', '30', 'AVAILABLE', 19),
(2, 'French, Business, Academic English, Finance Management', 'Degree', 'saturday-sunday (10am - 1pm)', '40', 'AVAILABLE', 21),
(3, 'Fundamentals of Programming, Fundamentals of Multimedia', 'Foundation', '1pm-3pm', '25', 'AVAILABLE', 30),
(4, 'Physics, Biology, Chemistry', 'Pre-U', 'wed&thurs(10am-12pm)', '50', 'AVAILABLE', 31),
(5, 'French, Nutrition ', 'Diploma', 'Friday (3pm-5pm)', '35', 'AVAILABLE', 34),
(6, 'Financial Accounting 1&2, Business Law, Management Accounting 1 & 2', 'Diploma ', 'Thursday&Friday(3pm-4pm)', '55', 'AVAILABLE', 35),
(7, 'Principles of Management, Principles of Marketing, Corporate Social Responsibility', 'Degree', 'Wednesday (8am-10am)', '50', 'AVAILABLE', 32),
(8, 'Engineering Mathematics 1,2 & 3, Statistics, Communication Systems', 'Degree', 'Saturday & Sunday (3pm - 5pm)', '40', 'AVAILABLE', 33),
(9, 'Tertiary English 1 & 2, Food Nutrition, Financial Management for Hospitality & Tourism, Management of Food & Beverage Project', 'Diploma', 'Friday & Saturday (11am-12pm)', '45', 'AVAILABLE', 36),
(10, 'Computing Mathematics, Fundamentals of Object Oriented Programming, Principles of Software Engineering, Foundation of Information Systems', 'Degree', 'Thurs ,Fri & Sat (8am-10am)', '40', 'Available', 37),
(11, 'Drawing', 'Diploma', 'Monday (3pm-6pm)', '30', 'Available', 38),
(13, 'Music, Data Structures and Algorithm, Medicine', 'Degree', 'Sunday (1600 Hours -2000 Hours)', '45', 'Available', 41);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `location` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `usertype` enum('Student','Tutor') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `phone`, `description`, `location`, `course`, `usertype`) VALUES
(1, 'Jon Lee', 'jon@gmail.com', '$2y$08$gK1A03Razqa83J6wVcJIBeQ0nJjYohse5jFTCJzfMpoIMGoYXYVM.', '0190220282', NULL, 'Glenmarie', 'Bachelor of Software Engineering ', 'Student'),
(2, 'Christine ', 'christine@gmail.com', '$2y$08$zUkQ/R1Rk6Y25u2HSDKDk.27RgRzsSn01E47Il.PZ/k8ZZQEoWtCu', '0123883839', 'free on fridays only ', 'UOW Malaysia KDU College Damansara Jaya', 'Diploma in Culinary Arts', 'Student'),
(4, 'Damon', 'damon@gmail.com', '$2y$08$YhWN.fLuQyxKJeza/6X6Su2EBy/gpsl35yKqn8PthLAz4/ycteJyS', '0192874142', 'I don\'t mind someone inexperienced as long as they are good at the subject', 'UOW Malaysia KDU Utropolis, Glenmarie', 'Bachelor of Electrical Engineering', 'Student'),
(5, 'Carrie Lam', 'carrie@gmail.com', '$2y$08$HzN7/yPZY0ILOtQizI316eZS0nt5rRy7aTJs//Av7tZ387zcTlgem', '0129183940', 'free on mondays and wednesdays ', 'UOW Malaysia KDU College Damansara Jaya', 'Foundation in Arts', 'Student'),
(7, 'Ahmad Zakwan ', 'ahmad@gmail.com', '$2y$08$l8HXU7hOzQ5b0tL20.VJpONzumOWDBc72zmXKxSeffM7ISp3sEUYm', '0144949242', 'free on fridays after lunchtime', 'UOW Malaysia KDU Batu Kawan, Penang', 'Bachelor of Computer Science ', 'Student'),
(8, 'Kishna Rajagopal', 'kishna@gmail.com', '$2y$08$FQbnziq/jQsdsJvdzAuOjOkZD6GONhjZWFyHXSGcKHf2jn0.fgb1O', '012127224', 'free on mon,tue and fri after 2pm', 'UOW Malaysia KDU Georgetown, Penang', 'Bachelor of Accounting ', 'Student'),
(10, 'Siti Nurhaliza', 'siti@gmail.com', '$2y$08$IX8i3KemkSfxxg2QI8lZKuXEmA7vas/UKONNyknH5b/fFlBU7tA0y', '0129937392', 'looking for an experienced tutor ', 'UOW Malaysia KDU Utropolis, Glenmarie', 'A-levels', 'Student'),
(12, 'Kar Sen', 'karsen@gmail.com', '$2y$08$RNIOc98yHEnqp5sjq5KOVOHC./WRKHg4VQLPCG6mGANE/6w2O1pM2', '0129382992', 'i\'m struggling with my course .. ', 'UOW Malaysia KDU Utropolis, Glenmarie', 'Bachelor of Software Engineering ', 'Student'),
(13, 'Bobby Goh', 'bobby@gmail.com', '$2y$08$40qyDnzgfTt7SULr.2qm6eQJT7/YO4Cwc0TmsTi4v538oDdKS8HyW', '0120810282', '', 'UOW Malaysia KDU College Damansara Jaya', 'Foundation in Arts ', 'Student'),
(14, 'Josiah Tan', 'josiah@gmail.com', '$2y$08$pjA9w99kiRk1IrtUERm33egYgIYG94OXSqixGB7xIN4KRklyOoE8u', '012122333', 'I\'m very handsome irl', 'UOW Malaysia KDU Georgetown, Penang', 'Bachelor of Finance', 'Student'),
(15, 'Mohammad Nasir', 'mohammadnasir@gmail.com', '$2y$08$9aROZ0MxVUjpBNno6/jNreTKXqc32l.0BAAz6eAQoe96UISfwm8PK', '0123938494', 'i\'m about to graduate ..', 'UOW Malaysia KDU Utropolis, Glenmarie', 'Bachelor of Information Systems', 'Student'),
(19, 'kiki', 'kiki@gmail.com', '$2y$08$xQXPJdxFDLoeCLVc3e1e1.ev.Y1bJMyqS9q7mZQORo.XuMlRg9UJ6', '0123939393', 'I\'m a tutor with who is willing to learn and passionate to teach', 'UOW Malaysia KDU Utropolis, Glenmarie', 'Bachelor of Software Engineering', 'Tutor'),
(21, 'Christian', 'christian3@gmail.com', '$2y$08$CLiYB.1Eo1o1wPYRLgYrCuYWO5NXb1ABOv7SuCY06pAaVQx3xlIFK', '0192352343', 'I have been told that i am very efficient in teaching complex subjects', 'UOW Malaysia KDU Georgetown, Penang', 'Bachelor of Finance ', 'Tutor'),
(30, 'Mohamed', 'mohamed@gmail.com', '$2y$08$a/GKPlxyDPhSdiedMfacFepKEgjXMVQG78XJjhKDnGUtbrSX0V24S', '0171231231', 'I have never tutored before but I\'m willing to give it a try', 'UOW Malaysia KDU College Damansara Jaya', 'Foundation in Arts ', 'Tutor'),
(31, 'Debbie', 'debbie@gmail.com', '$2y$08$HKAg7bpza3CBfHs30KFEZ.oVVat7Xs.Quvm/.GTala9mfzs9bL70e', '0129839839', 'I\'m a very cute teacher ', 'UOW Malaysia KDU Utropolis, Glenmarie', 'A-levels ', 'Tutor'),
(32, 'Charlie', 'charlie@gmail.com', '$2y$08$LRHBEKA65RewOTh.yLHU9eR.jcn7/cbYfkXvHu8gZBaRAbAun/vUC', '0138498383', 'I only work on the weekend ', 'UOW Malaysia KDU Batu Kawan, Penang', 'Bachelor of Business', 'Tutor'),
(33, 'Bennie Chia', 'bennychia@gmail.com', '$2y$08$EYE9XAX157fi9fC50VdjUuSQrUo6kio1cGGiWYaLa013oZdgXFSva', '0128373739', 'I\'m very good on math subjects ', 'UOW Malaysia KDU Utropolis, Glenmarie', 'Bachelor of Electrical Engineering ', 'Tutor'),
(34, 'Ross', 'ross@gmail.com', '$2y$08$7kK.dQi0LzuvO7Ht1n.Wuu3T7ls77HbDtijwtnIgyD3agq.GQQL0i', '0199292929', 'I\'m not really active on this site..', 'UOW Malaysia KDU College Damansara Jaya', 'Diploma in Culinary Arts ', 'Tutor'),
(35, 'Jayce', 'jayce@gmail.com', '$2y$08$p8Bq3LNVfB/d4jYjdeegEeRb1KGkTxtdaF/Ya5dMhkbQPnUKFPlDO', '011939399', 'About to graduate soon ', 'UOW Malaysia KDU Georgetown, Penang', 'Diploma in Business Administration ', 'Tutor'),
(36, 'Tom lee', 'tomlee@gmail.com', '$2y$08$Lh4ZMvWjDGvtKBJPl7Mj..eYKDZMi5m8POaJ36ll7gTRBRjE.z.1a', '0198412411', 'I\'m a regular user on this site ', 'UOW Malaysia KDU Utropolis, Glenmarie', 'Diploma in Hotel Management ', 'Tutor'),
(37, 'Patrick Star', 'patrick@gmail.com', '$2y$08$N15S/LOpc2VCNxttdvyph.vukZxrqFo52yJ.AQ46wpBGurpDhGkY6', '0109389389', 'No student of mine ever fail ', 'UOW Malaysia KDU Batu Kawan, Penang', 'Bachelor of Information Systems', 'Tutor'),
(38, 'Bob Ross', 'bob@gmail.com', '$2y$08$N15S/LOpc2VCNxttdvyph.vukZxrqFo52yJ.AQ46wpBGurpDhGkY6', '0109389389', 'Art is life, drawing is the process', 'UOW Malaysia KDU Utropolis, Glenmarie', 'Bachelor of Arts', 'Tutor'),
(39, 'Linus Torvalds', 'linus@linux.org', '$2y$08$hGxisNWW6NnxA0oNuAK/heC6igEvpOGNCqwXxlHFDr1bXnN1k7Pky', '0129876543', 'I can help on anything linux related, like ubuntu', 'UOW Malaysia KDU Utropolis, Glenmarie', 'Bachelor of Computer Science', 'Tutor'),
(40, 'Abu Bakar', 'abu.bakar@gmail.com', '$2y$08$FgcKAbRbiO.XeyuZHWSEr.7KTwZGd3zHgXUONRxCsZ54wfg2bC9hy', '0129876543', NULL, 'Damansara Jaya', 'Diploma in Marketing', 'Student'),
(41, 'Foo Chan Onn ', '0121530@kdu-online.com', '$2y$08$RvZQip4l3sRDvXnar56AAuDcG6vcUIZfEOSrgcEweNVtwUATHwObC', '0182988176', NULL, 'Glenmarie', 'Bachelor of Software Enginneering', 'Tutor'),
(42, 'Lee Chi Kin', '0121577@kdu-online.com', '$2y$08$.aF1VCT8Ct8Bwsq9bA5l3uNKk7PGFqoct5WG//irMCMf6bJAWJwvm', '0129876543', NULL, 'Glenmarie', 'Bachelor of Software Enginneering', 'Student'),
(44, 'Bobby Bob', 'bobbybob@gmail.com', '$2y$08$jVGWRp1c84tNTvHj3884TObSW4MUlIdlhuG4UPz4jH4RA2pSI2t6a', '0129876543', NULL, 'Glenmarie', 'Bachelor of Accounting', 'Student');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `joblistings`
--
ALTER TABLE `joblistings`
  ADD CONSTRAINT `joblistings_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `users` (`id`);

--
-- Constraints for table `tutors`
--
ALTER TABLE `tutors`
  ADD CONSTRAINT `tutors_ibfk_1` FOREIGN KEY (`tutorID`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
