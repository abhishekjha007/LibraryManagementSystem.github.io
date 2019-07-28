-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 28, 2019 at 04:08 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id8779029_phplms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_books`
--

DROP TABLE IF EXISTS `add_books`;
CREATE TABLE IF NOT EXISTS `add_books` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `books_name` varchar(50) NOT NULL,
  `books_image` varchar(500) NOT NULL,
  `books_author_name` varchar(50) NOT NULL,
  `books_publication_name` varchar(50) NOT NULL,
  `books_purchase_date` varchar(20) NOT NULL,
  `books_price` varchar(20) NOT NULL,
  `books_qty` varchar(20) NOT NULL,
  `available_qty` varchar(20) NOT NULL,
  `librarian_username` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_books`
--

INSERT INTO `add_books` (`id`, `books_name`, `books_image`, `books_author_name`, `books_publication_name`, `books_purchase_date`, `books_price`, `books_qty`, `available_qty`, `librarian_username`) VALUES
(4, 'english', 'books_image/24058d87b7321052915d67089745f5a7book7.jpg', 'lalu', 'mghiij', '21-12-2019', '5665', '13', '1', ''),
(3, 'Math', 'books_image/6cf8fe69c556a4774b8209a0b422b80abook1.jpg', 'Abhishek jha', 'Math.co', '28-10-1995', '650', '12', '5', 'ghi'),
(5, 'History', 'books_image/a6c13994aa9757eca4ca5f241e9ad634book8.jpg', 'Abhishek', 'Historybook.com', '31-09-2014', '650', '45', '31', ''),
(7, 'geography', 'books_image/65491b162afd90f3b4d79157e19fe06cbook4.jpg', 'rakesh', 'vijay', '17-11-2010', '213', '21', '10', 'ghi'),
(8, 'Math', 'books_image/c24e0a6b814fe0c29cb6a965bba782e0book9.jpg', 'ajay', 'akpublication', '03-02-2013', '7890', '35', '19', 'ghi'),
(9, 'Math', 'books_image/8c7b707aa7ee12bbdd69a87b8ebf7b9fScreenshot (11).png', 'sumit', 'math', '24-10-2018', '899', '13', '2', 'ghi');

-- --------------------------------------------------------

--
-- Table structure for table `issue_books`
--

DROP TABLE IF EXISTS `issue_books`;
CREATE TABLE IF NOT EXISTS `issue_books` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `student_enrollment` varchar(50) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_sem` varchar(50) NOT NULL,
  `student_contact` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `books_name` varchar(50) NOT NULL,
  `books_issue_date` varchar(50) NOT NULL,
  `books_return_date` varchar(50) NOT NULL,
  `student_username` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_books`
--

INSERT INTO `issue_books` (`id`, `student_enrollment`, `student_name`, `student_sem`, `student_contact`, `student_email`, `books_name`, `books_issue_date`, `books_return_date`, `student_username`) VALUES
(31, '32123', 'Abhishek Jha', 'fifth', '7890543852', 'abhi.281097@gmail.com', 'english', '25-10-18', '30-10-18', 'Akjha000777'),
(37, '9838t2', 'wjfw lkvmksv', '2', '292887', 'aj2059@ece.jgec.ac.in', 'english', '25-10-18', '25-10-18', 'abc'),
(35, '8520', 'Rohit Shaw', 'fifth', '8981611365', 'kauwa@gmail.com', 'Math', '25-10-18', '', 'kauwa'),
(38, '32123', 'Abhishek Jha', 'fifth', '7890543852', 'abhi.281097@gmail.com', 'english', '25-10-18', '', 'Akjha000777'),
(39, '32123', 'Abhishek Jha', 'fifth', '7890543852', 'abhi.281097@gmail.com', 'Math', '30-10-18', '', 'Akjha000777'),
(36, '4321', 'rahul kumar', 'second', '526698556', 'rahul@gmail.com', 'english', '25-10-18', '', 'rahul0909'),
(40, '25', 'Sumit Kumar', 'seventh', '4569871253', 'sumit@gmail.com', 'english', '27-07-19', '', 'Sumit007');

-- --------------------------------------------------------

--
-- Table structure for table `librarian_registration`
--

DROP TABLE IF EXISTS `librarian_registration`;
CREATE TABLE IF NOT EXISTS `librarian_registration` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarian_registration`
--

INSERT INTO `librarian_registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`) VALUES
(1, 'abc', 'def', 'ghi', 'jkl', 'akj@gmail.com', '7890543852');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `susername` varchar(50) NOT NULL,
  `dusername` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `msg` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `susername`, `dusername`, `title`, `msg`) VALUES
(1, 'ghi', 'rahul0909', 'Testing', '  Please submit your books                          \r\n                        '),
(4, 'ghi', 'rahul0909', 'hii Testing once again', 'Hii to all                         \r\n                        '),
(3, 'ghi', 'rahul0909', 'ascd', '  efvaeva                   \r\n                        '),
(11, 'ghi', 'rahul0909', 'rahul', ' please Submit your book by tomorrow                           \r\n                        '),
(5, 'ghi', 'rahul0909', 'Hey ', ' How are you                       \r\n                        '),
(6, 'ghi', 'rahul0909', 'Hey ', ' How are you                       \r\n                        '),
(7, 'ghi', 'rahul0909', 'Hey ', ' How are you                       \r\n                        '),
(8, 'ghi', 'rahul0909', 'kundan', '              Abhishek kumar jha              \r\n                        '),
(9, 'ghi', 'rahul0909', 'hey Abhishek', 'please submit your book in given time period                            \r\n                        '),
(10, 'ghi', 'rahul0909', 'hii rahul ', '                            \r\n       hii rahul how are you                 '),
(13, 'ghi', 'rahul0909', 'kabe', '                            \r\n                        ka kar raha hai'),
(12, 'ghi', 'rahul0909', 'sumit', '                            \r\n                        Abhishek'),
(14, 'ghi', 'rahul0909', 'Piracy ', '        Aniket Piracy kallua Abhishek                    \r\n                        '),
(15, 'ghi', 'rahul0909', 'hii', '               how are you rahul             \r\n                        '),
(16, 'ghi', 'rahul0909', 'Book Issue', 'Hey Sumit Please Submit your book within the given time period,,,, Thanku                            \r\n                        ');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

DROP TABLE IF EXISTS `student_registration`;
CREATE TABLE IF NOT EXISTS `student_registration` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `enrollment` varchar(50) NOT NULL,
  `status` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`, `sem`, `enrollment`, `status`) VALUES
(7, 'Abhishek', 'Jha', 'Akjha000777', 'jha000777', 'abhi.281097@gmail.com', '7890543852', 'fifth', '32123', 'no'),
(12, 'karan', 'arjun', 'kaaranarjun', 'karanarjun', 'abhi.281097@gmail.com', '8910022536', 'seventh', '23', 'no'),
(9, 'kundan', 'Jha', 'kundan003', '54321', 'kundan@gmail.com', '8013961194', 'seventh', '956328741', 'no'),
(10, 'rahul', 'kumar', 'rahul0909', 'rahul', 'rahul@gmail.com', '526698556', 'second', '4321', 'yes'),
(11, 'Rohit', 'Shaw', 'kauwa', 'kauwa', 'kauwa@gmail.com', '8981611365', 'fifth', '8520', 'no'),
(13, 'Sumit', 'Kumar', 'Sumit007', 'sumit', 'sumit@gmail.com', '4569871253', 'seventh', '25', 'yes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
