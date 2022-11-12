-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 12, 2022 at 08:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmd`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `author_contact` varchar(255) NOT NULL,
  `author_email` varchar(255) NOT NULL,
  `author_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_name`, `author_contact`, `author_email`, `author_description`) VALUES
(1, 'Robert Sedgewick', '2165637389', 'robert@gmail.com', 'BPB Publication author'),
(2, 'Kevin Wayne', '2160943892', 'kevin@gmail.com', 'Java Writer'),
(3, 'Hannah Fry', '2164782930', 'hannah@gmail.com', 'PHP Author'),
(4, 'Anthony Grafton', '2163721374', 'anthony@gmail.com', 'Writter of Java Books');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_user_id` varchar(255) NOT NULL,
  `book_author_id` varchar(255) NOT NULL,
  `book_publication_id` varchar(255) NOT NULL,
  `book_category_id` varchar(255) NOT NULL,
  `book_language_id` varchar(255) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_isbn` varchar(255) NOT NULL,
  `book_edition` varchar(255) NOT NULL,
  `book_edition_year` varchar(255) NOT NULL,
  `book_number_copies` varchar(255) NOT NULL,
  `book_volume` varchar(255) NOT NULL,
  `book_price` varchar(255) NOT NULL,
  `book_description` text NOT NULL,
  `book_location` text NOT NULL,
  `book_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_user_id`, `book_author_id`, `book_publication_id`, `book_category_id`, `book_language_id`, `book_title`, `book_isbn`, `book_edition`, `book_edition_year`, `book_number_copies`, `book_volume`, `book_price`, `book_description`, `book_location`, `book_image`) VALUES
(18, '18', '4', '1', '2', '1', 'DBMS', '12345', '2017-06-01', '2018', '7', 'Used Maintained', '100$', '', 'Near white building', 'pic.jpeg'),
(19, '18', '1', '3', '1', '1', 'C++', '3456789', '2017-06-01', '2000', '2', 'New', '$160', '', 'Rockefeller Bulding', 'C++.jpg'),
(21, '23', '3', '2', '3', '1', 'Why Nations Fail', '123456789', '2017-06-01', '2005', '5', 'fair', '$80', '', 'Rockefeller Bulding', 'wnf.jpg'),
(22, '24', '2', '2', '4', '1', 'The Gardener', '67890-123', '2018-02-21', '2001', '2', 'Good', '$120', '', 'campus', 'gard.jpg'),
(23, '26', '4', '1', '1', '1', 'Programming', '4567-9087', '2017-06-01', '2012', '2', 'Relatively New', '$135', '', 'Bingham Building', 'bp.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `book_request`
--

CREATE TABLE `book_request` (
  `br_id` int(11) NOT NULL,
  `br_user_id` int(11) NOT NULL,
  `br_book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_request`
--

INSERT INTO `book_request` (`br_id`, `br_user_id`, `br_book_id`) VALUES
(1, 8, 8),
(3, 9, 4),
(4, 10, 5),
(5, 8, 1),
(6, 17, 4),
(7, 17, 5),
(8, 18, 17),
(9, 18, 17),
(10, 18, 14),
(11, 17, 19),
(12, 17, 19),
(13, 17, 19),
(14, 18, 21),
(15, 23, 22);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(255) NOT NULL,
  `category_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_title`, `category_description`) VALUES
(1, 'Computer Science', 'Computer Science Books'),
(2, 'Database Management System', 'Database Management System Books'),
(3, 'Social Science ', 'Social Science Books'),
(4, 'Play Books', 'Play Books');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(10) UNSIGNED NOT NULL,
  `city_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(6, 'Cleveland');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(2, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(1, 'IT Department'),
(2, 'Java Developement'),
(3, 'HR Department'),
(4, 'Web Developement');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `language_id` int(11) NOT NULL,
  `language_title` varchar(255) NOT NULL,
  `language_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`language_id`, `language_title`, `language_description`) VALUES
(1, 'English', 'Book in English Language'),
(3, 'French', 'Book in French Language');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `message_user_id` varchar(255) NOT NULL,
  `message_send_user_id` varchar(255) NOT NULL,
  `message_title` text NOT NULL,
  `message_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `message_user_id`, `message_send_user_id`, `message_title`, `message_description`) VALUES
(4, '17', '18', 'want to buy book', 'hi i want this book urgently'),
(5, '17', '', 'want to buy book', 'knlk'),
(6, '17', '18', 'hi', 'need the book'),
(7, '17', '18', 'Hi I want the Algorithms Book', ''),
(8, '23', '18', 'Why Nations Fail -Book Required', 'Do you have current edition of this book?'),
(9, '24', '23', 'The Garderner Book', 'I need its sequel'),
(10, '18', '', 'C++ book ', 'I want this book ');

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `month_id` int(11) NOT NULL,
  `month_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`month_id`, `month_name`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `publication_id` int(11) NOT NULL,
  `publication_name` varchar(255) NOT NULL,
  `publication_contact` varchar(255) NOT NULL,
  `publication_description` text NOT NULL,
  `publication_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`publication_id`, `publication_name`, `publication_contact`, `publication_description`, `publication_email`) VALUES
(1, 'BPB Publication', '2165739285', 'Tesrt', 'Barcelona'),
(2, 'Outskirts Press ', '2164358943', 'Outskirts Press Publication', 'New Jersey'),
(3, 'ElevatedWaves  ', '2163754839', 'ElevatedWaves Publication ', 'California');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `request_user_id` varchar(255) NOT NULL,
  `request_title` text NOT NULL,
  `request_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `request_user_id`, `request_title`, `request_description`) VALUES
(6, '17', 'Algorithms 4th Edition', 'author not mentioned'),
(7, '18', 'java', 'Need it urgently'),
(8, '17', 'Java', 'need it'),
(9, '18', 'java', 'hi\r\n'),
(10, '23', 'Java 4th Edition', 'need the book'),
(11, '17', 'HTML 4th Edition', 'Require the book'),
(12, '17', 'Data Mining', 'I require this book for my final semester\r\n'),
(13, '24', 'Data Mining', 'Require the book for my final semester'),
(14, '26', 'Data Science', 'Would this book be available?');

-- --------------------------------------------------------

--
-- Table structure for table `salutions`
--

CREATE TABLE `salutions` (
  `sl_id` int(11) NOT NULL,
  `sl_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salutions`
--

INSERT INTO `salutions` (`sl_id`, `sl_name`) VALUES
(1, 'Mr.'),
(2, 'Mrs.');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `skill_id` int(11) NOT NULL,
  `skill_emp_id` int(11) NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `skill_grade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(6, 'Ohio');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_level_id` varchar(255) DEFAULT '3',
  `user_username` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_add1` varchar(255) NOT NULL,
  `user_add2` varchar(255) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_state` varchar(255) NOT NULL,
  `user_country` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_mobile` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_dob` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_level_id`, `user_username`, `user_password`, `user_name`, `user_add1`, `user_add2`, `user_city`, `user_state`, `user_country`, `user_email`, `user_mobile`, `user_gender`, `user_dob`, `user_image`) VALUES
(4, '1', 'admin', 'test', 'Aditi Chaitty', 'House no : 768', 'Overlook', '1', '1', '2', 'support@gmail.com', '2165773815', '', '12 january, 2013', ''),
(18, '3', '3592879', 'cd', 'Chaitanya Dev Chauhan', '2489 Overlook Road', '', '6', '6', '2', 'cd@gmail.com', '2165770794', '', '16 March,2000', 'DSC_3862 us.jpg'),
(22, '3', 'aditi', 'aditi', 'CD', '2489 Overlook Road', '', '6', '6', '2', 'mondaladiti75@gmail.com', '08170013309', '', '15 November,2022', ''),
(23, '3', '3592830', 'aditi28', 'Aditi Mondal', '2489 Overlook Road', 'Cleveland Heights', '6', '6', '2', 'mondaladiti75@gmail.com', '2165773815', '', '28 March,2000', 'IMG_0849.jpg'),
(24, '3', '2345678', 'tina', 'Tina Jones', 'Euclid Avenue', '', '6', '6', '2', 'tina@gmail.com', '2165778908', '', '16 November,1994', 'emilia.webp'),
(26, '3', '1987654', 'jm', 'Jack Miler', 'Beachwood', '', '6', '6', '2', 'jm@gmail.com', '2164882904', '', '10 March,1999', 'njk.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_request`
--
ALTER TABLE `book_request`
  ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`language_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`month_id`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`publication_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `salutions`
--
ALTER TABLE `salutions`
  ADD PRIMARY KEY (`sl_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `book_request`
--
ALTER TABLE `book_request`
  MODIFY `br_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `month_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `publication`
--
ALTER TABLE `publication`
  MODIFY `publication_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `salutions`
--
ALTER TABLE `salutions`
  MODIFY `sl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
