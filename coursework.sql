-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 06:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coursework`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors_newnishu`
--

CREATE TABLE `authors_newnishu` (
  `Author_ID` int(11) NOT NULL,
  `First_Name` varchar(70) DEFAULT NULL,
  `Last_Name` varchar(70) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone_Number` varchar(25) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authors_newnishu`
--

INSERT INTO `authors_newnishu` (`Author_ID`, `First_Name`, `Last_Name`, `Email`, `Phone_Number`, `Address`) VALUES
(1, 'Belly', 'Laurel', 'laurel@gmail.com', '9831441986', 'South wales'),
(2, 'Jeremaih', 'Fisher', 'fisher@gmail.com', '9804465782', 'Darwin'),
(3, 'Conrad', 'Fisher', 'confish@email.com', '9876456784', 'Perth'),
(4, 'Steven', 'fernandaz', 'Steven@email.com', '9841533972', 'Lismore'),
(5, 'John', 'Malik', 'Jmalik@email.com', '9843903200', 'Canberra');

-- --------------------------------------------------------

--
-- Table structure for table `books_newnishu`
--

CREATE TABLE `books_newnishu` (
  `Book_ID` int(11) NOT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `ISBN` varchar(25) DEFAULT NULL,
  `Publication_Year` int(11) DEFAULT NULL,
  `category_ID` int(11) DEFAULT NULL,
  `Availability` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books_newnishu`
--

INSERT INTO `books_newnishu` (`Book_ID`, `Title`, `ISBN`, `Publication_Year`, `category_ID`, `Availability`) VALUES
(1, 'Reminder of her', 'ISBN89761', 2022, 1, 'Borrowed'),
(2, 'Foundation', 'ISBN87651', 2018, 2, 'Available'),
(3, 'Verity', 'ISBN361126', 2020, 3, 'Available'),
(4, 'American god', 'ISBN90873', 2018, 4, 'Borrowed'),
(5, 'Still life', 'ISBN87651', 2021, 5, 'Borrowed');

-- --------------------------------------------------------

--
-- Table structure for table `book_authors_newnishu`
--

CREATE TABLE `book_authors_newnishu` (
  `Book_ID` int(11) DEFAULT NULL,
  `Author_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_authors_newnishu`
--

INSERT INTO `book_authors_newnishu` (`Book_ID`, `Author_ID`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `book_staff_member_newnishu`
--

CREATE TABLE `book_staff_member_newnishu` (
  `Book_ID` int(11) DEFAULT NULL,
  `Staff_ID` int(11) DEFAULT NULL,
  `Member_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_staff_member_newnishu`
--

INSERT INTO `book_staff_member_newnishu` (`Book_ID`, `Staff_ID`, `Member_ID`) VALUES
(4, 4, 4),
(5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `category_newnishu`
--

CREATE TABLE `category_newnishu` (
  `category_ID` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_newnishu`
--

INSERT INTO `category_newnishu` (`category_ID`, `name`) VALUES
(1, 'Romantic'),
(2, 'sci-fiction'),
(3, 'Thriller'),
(4, 'fantasy'),
(5, 'Mystery');

-- --------------------------------------------------------

--
-- Table structure for table `members_newnishu`
--

CREATE TABLE `members_newnishu` (
  `Member_ID` int(11) NOT NULL,
  `First_Name` varchar(70) DEFAULT NULL,
  `Last_Name` varchar(70) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone_Number` varchar(25) DEFAULT NULL,
  `Join_Date` date DEFAULT NULL,
  `Address` varchar(70) DEFAULT NULL,
  `Borrowed_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members_newnishu`
--

INSERT INTO `members_newnishu` (`Member_ID`, `First_Name`, `Last_Name`, `Email`, `Phone_Number`, `Join_Date`, `Address`, `Borrowed_status`) VALUES
(4, 'Ariana', 'Grande', 'Grande@gmail.com', '9824146474', '2021-09-19', 'New Castle', 'Yes'),
(5, 'Justin', 'Bieber', 'Bieber@gmail.com', '9776652210', '2022-10-10', 'Victoria', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `staff_newnishu`
--

CREATE TABLE `staff_newnishu` (
  `Staff_ID` int(11) NOT NULL,
  `First_Name` varchar(70) DEFAULT NULL,
  `Last_Name` varchar(70) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone_Number` varchar(25) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Position` varchar(50) DEFAULT NULL,
  `Hire_Date` date DEFAULT NULL,
  `Shift` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_newnishu`
--

INSERT INTO `staff_newnishu` (`Staff_ID`, `First_Name`, `Last_Name`, `Email`, `Phone_Number`, `Address`, `Position`, `Hire_Date`, `Shift`) VALUES
(1, 'Chris', 'Brown', 'brown@gmail.com', '9865346289', 'Fawkner', 'Assistant', '2015-05-29', 'Evening'),
(2, 'Neil', 'Horan', 'Nail@gmail.com', '9802572488', 'Hawthorn', 'Lecturer', '2017-01-20', 'Day'),
(3, 'Alex', 'Sloan', 'sloan@gmail.com', '9843903700', 'Larol', 'Assistant', '2020-03-02', 'Day'),
(4, 'James', 'Aurther', 'Arther@gmail.com', '9861443119', 'forbes', 'Assistant Lecturer', '2023-09-11', 'Evening'),
(5, 'Coi', 'Leray', 'Coi@email.com', '941566972', 'Boston', 'Assistant', '2016-08-06', 'Day');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors_newnishu`
--
ALTER TABLE `authors_newnishu`
  ADD PRIMARY KEY (`Author_ID`);

--
-- Indexes for table `books_newnishu`
--
ALTER TABLE `books_newnishu`
  ADD PRIMARY KEY (`Book_ID`),
  ADD KEY `category_ID` (`category_ID`);

--
-- Indexes for table `book_authors_newnishu`
--
ALTER TABLE `book_authors_newnishu`
  ADD KEY `Book_ID` (`Book_ID`),
  ADD KEY `Author_ID` (`Author_ID`);

--
-- Indexes for table `book_staff_member_newnishu`
--
ALTER TABLE `book_staff_member_newnishu`
  ADD KEY `Book_ID` (`Book_ID`),
  ADD KEY `Staff_ID` (`Staff_ID`),
  ADD KEY `Member_ID` (`Member_ID`);

--
-- Indexes for table `category_newnishu`
--
ALTER TABLE `category_newnishu`
  ADD PRIMARY KEY (`category_ID`);

--
-- Indexes for table `members_newnishu`
--
ALTER TABLE `members_newnishu`
  ADD PRIMARY KEY (`Member_ID`);

--
-- Indexes for table `staff_newnishu`
--
ALTER TABLE `staff_newnishu`
  ADD PRIMARY KEY (`Staff_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors_newnishu`
--
ALTER TABLE `authors_newnishu`
  MODIFY `Author_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `books_newnishu`
--
ALTER TABLE `books_newnishu`
  MODIFY `Book_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category_newnishu`
--
ALTER TABLE `category_newnishu`
  MODIFY `category_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `members_newnishu`
--
ALTER TABLE `members_newnishu`
  MODIFY `Member_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff_newnishu`
--
ALTER TABLE `staff_newnishu`
  MODIFY `Staff_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books_newnishu`
--
ALTER TABLE `books_newnishu`
  ADD CONSTRAINT `books_newnishu_ibfk_1` FOREIGN KEY (`category_ID`) REFERENCES `category_newnishu` (`category_ID`) ON DELETE CASCADE;

--
-- Constraints for table `book_authors_newnishu`
--
ALTER TABLE `book_authors_newnishu`
  ADD CONSTRAINT `book_authors_newnishu_ibfk_1` FOREIGN KEY (`Book_ID`) REFERENCES `books_newnishu` (`Book_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_authors_newnishu_ibfk_2` FOREIGN KEY (`Author_ID`) REFERENCES `authors_newnishu` (`Author_ID`) ON DELETE CASCADE;

--
-- Constraints for table `book_staff_member_newnishu`
--
ALTER TABLE `book_staff_member_newnishu`
  ADD CONSTRAINT `book_staff_member_newnishu_ibfk_1` FOREIGN KEY (`Book_ID`) REFERENCES `books_newnishu` (`Book_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_staff_member_newnishu_ibfk_2` FOREIGN KEY (`Staff_ID`) REFERENCES `staff_newnishu` (`Staff_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_staff_member_newnishu_ibfk_3` FOREIGN KEY (`Member_ID`) REFERENCES `members_newnishu` (`Member_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
