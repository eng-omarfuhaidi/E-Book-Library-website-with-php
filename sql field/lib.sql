-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2018 at 08:39 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lib`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `b_id` varchar(255) NOT NULL,
  `booksname` varchar(50) NOT NULL,
  `authorname` varchar(50) NOT NULL,
  `copies` varchar(20) NOT NULL,
  `avl_cpy` int(100) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`b_id`, `booksname`, `authorname`, `copies`, `avl_cpy`, `dept`, `file_name`, `path`) VALUES
('CS001', 'learning Python', 'Reema Thereja', '12', 10, 'cse', 'CS001.pdf', 'ebooks/CS001.pdf'),
('CS002', 'Test Book', 'Test Author', '12', 12, 'cse', 'CS002.pdf', 'ebooks/CS002.pdf'),
('CS003', 'Test Book', 'Test Author', '12', 12, 'cse', 'CS003.pdf', 'ebooks/CS003.pdf'),
('CS031', 'learning java', 'Test Author', '12', 12, 'cse', 'CS031.pdf', 'ebooks/CS031.pdf'),
('CS005', 'Test Book', 'Test Author2', '12', 12, 'cse', 'CS005.pdf', 'ebooks/CS005.pdf'),
('CS006', 'Test Book', 'Test Author', '12', 12, 'cse', 'CS006.pdf', 'ebooks/CS006.pdf'),
('CS008', 'Test Book', 'Test Author', '10', 10, 'cse', 'CS008.pdf', 'ebooks/CS008.pdf'),
('CS009', 'Book One', 'Reema Thereja', '12', 12, 'cse', 'CS009.pdf', 'ebooks/CS009.pdf'),
('CS010', 'Test Book', 'Test Author', '10', 10, 'cse', 'CS010.pdf', 'ebooks/CS010.pdf'),
('CS011', 'Test Book', 'Test Author', '1', 1, 'cse', 'CS011.pdf', 'ebooks/CS011.pdf'),
('CS012', 'Test Book', 'Test Author', '1', 1, 'cse', 'CS012.pdf', 'ebooks/CS012.pdf'),
('CS013', 'Test Book', 'Test Author', '12', 12, 'cse', 'CS013.pdf', 'ebooks/CS013.pdf'),
('EE001', 'Test Book', 'Test Author', '12', 12, 'ee', 'EE001.pdf', 'ebooks/EE001.pdf'),
('ME001', 'Test Book', 'Test Author', '12', 12, 'me', 'ME001.pdf', 'ebooks/ME001.pdf'),
('TT001', 'Book One', 'Test Author', '12', 12, 'tt', 'TT001.pdf', 'ebooks/TT001.pdf'),
('CS055', 'Test Book', 'Test Author', '10', 10, 'cse', 'CS055.pdf', 'ebooks/CS055.pdf'),
('B001', 'Let Us c', 'YK', '10', 10, 'cse', 'B001.pdf', 'ebooks/B001.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `student_book`
--

CREATE TABLE `student_book` (
  `emailid` varchar(200) NOT NULL,
  `book_1_id` varchar(100) NOT NULL,
  `book_1` varchar(100) NOT NULL,
  `recive_date_1` varchar(100) NOT NULL,
  `submisson_date_1` varchar(100) NOT NULL,
  `book_2_id` varchar(100) DEFAULT NULL,
  `book_2` varchar(100) DEFAULT NULL,
  `recive_date_2` varchar(100) DEFAULT NULL,
  `submisson_date_2` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_book`
--

INSERT INTO `student_book` (`emailid`, `book_1_id`, `book_1`, `recive_date_1`, `submisson_date_1`, `book_2_id`, `book_2`, `recive_date_2`, `submisson_date_2`) VALUES
('b@gmail.com', 'CS001', 'learning Python', '13-07-2018', '28-07-2018', 'CS001', 'learning Python', '13-07-2018', '28-07-2018'),
('lopa@gmail.com', 'CS001', 'learning Python', '13-07-2018', '28-07-2018', 'CS031', 'learning java', '13-07-2018', '28-07-2018');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(10) NOT NULL,
  `roll` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'student',
  `gender` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `year` varchar(20) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `roll`, `type`, `gender`, `name`, `dept`, `year`, `emailid`, `password`) VALUES
(1, '001', 'admin', 'm', 'admin', 'blank', 'blank', 'admin001', 'admin123'),
(2, '11100116031', 'student', 'm', 'purnendu', 'cse', '3rd_year', 'das@gmail.com', 'anku'),
(3, '11100116032', 'student', 'm', 'purnendu', 'me', '1st_year', 'purnendu@gmail.com', 'anku'),
(4, '11100116028', 'student', 'f', 'Lopamudra Roy', 'cse', '3rd_year', 'lopa@gmail.com', '123'),
(5, '11100116001', 'student', 'f', 'Zeba Washima', 'cse', '2nd_year', 'zeba@gmail.com', '123'),
(6, '11100116045', 'student', 'm', 'Bibhas Gayen', 'cse', '4th_year', 'bivas@gmail.com', '123'),
(7, '11100116066', 'student', 'm', 'atanu jana', 'cse', '1st_year', 'atanu@gmail.com', '123'),
(8, '11100116052', 'student', 'm', 'aniruddha maity', 'cse', '4th_year', 'ani@gmail.com', '123'),
(9, '11100116033', 'student', 'f', 'peu barman', 'cse', '2nd_year', 'peu@gmail.com', '123'),
(10, '11100116039', 'student', 'm', 'Bibhas Gayen', 'cse', '3rd_year', 'b@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`b_id`),
  ADD UNIQUE KEY `b_id` (`b_id`);

--
-- Indexes for table `student_book`
--
ALTER TABLE `student_book`
  ADD PRIMARY KEY (`emailid`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
