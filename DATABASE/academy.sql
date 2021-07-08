-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 08:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `name`, `password`, `username`, `email`) VALUES
(1, 'admin', '1234567890', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `des`, `date`) VALUES
(5, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2021-01-27'),
(6, 'What is Blog?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2021-01-09'),
(7, 'What is Artificial intelligence?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2021-01-09'),
(8, 'What is Machine Learning?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2021-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `class_list`
--

CREATE TABLE `class_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_no` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_list`
--

INSERT INTO `class_list` (`id`, `serial_no`, `topic`, `title`, `source`, `video_link`, `code`) VALUES
(1, '1', 'C introduction', 'Basic', 'https://drive.google.com/file/d/1V9Tp3yIo1zYG4ccGc5RjRHfGYAs0jdw8/view?usp=sharing', 'https://player.vimeo.com/video/481386833', 'c1'),
(5, '1', 'Android introduction', 'Basic', 'https://drive.google.com/file/d/1V9Tp3yIo1zYG4ccGc5RjRHfGYAs0jdw8/view?usp=sharing', 'https://player.vimeo.com/video/481386833', 'c3'),
(7, '1', 'laravel introduction', 'controller', 'https://drive.google.com/file/d/1V9Tp3yIo1zYG4ccGc5RjRHfGYAs0jdw8/view?usp=sharing', 'https://player.vimeo.com/video/481386833', 'c2'),
(8, '1', 'python introduction', 'controller', 'https://drive.google.com/file/d/1V9Tp3yIo1zYG4ccGc5RjRHfGYAs0jdw8/view?usp=sharing', 'https://player.vimeo.com/video/481386833', 'c7'),
(9, '1', 'Java', 'Basic', 'https://drive.google.com/file/d/1V9Tp3yIo1zYG4ccGc5RjRHfGYAs0jdw8/view?usp=sharing', 'https://player.vimeo.com/video/481386833', 'C4'),
(10, '1', 'Angular', 'Basic', 'https://drive.google.com/file/d/1V9Tp3yIo1zYG4ccGc5RjRHfGYAs0jdw8/view?usp=sharing', 'https://player.vimeo.com/video/481386833', 'c5'),
(11, '1', 'C ++', 'Basic', 'https://drive.google.com/file/d/1V9Tp3yIo1zYG4ccGc5RjRHfGYAs0jdw8/view?usp=sharing', 'https://player.vimeo.com/video/481386833', 'c6'),
(13, '1', 'Asp.net introduction', 'Basic', 'https://drive.google.com/file/d/1V9Tp3yIo1zYG4ccGc5RjRHfGYAs0jdw8/view?usp=sharing', 'https://player.vimeo.com/video/481386833', 'c8');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `massage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `massage`) VALUES
(2, 'monirul', 'monirul@gmail.com', '01792706304', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(3, 'monirul', 'monirul@gmail.com', '01792706304', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');

-- --------------------------------------------------------

--
-- Table structure for table `file_doc`
--

CREATE TABLE `file_doc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_url` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `file_doc`
--

INSERT INTO `file_doc` (`id`, `title`, `doc_url`) VALUES
(7, 'Diagram', 'http://127.0.0.1:4000/storage/egXax6iLGUKHTR3sXUN7eV5H5RUEV2S2JccvAukx.png'),
(8, 'file', 'http://127.0.0.1:4000/storage/N2X5sVmv6qmQcfTf7uPQ3su5hDlZHNbNtOY78N7F.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `login_fail`
--

CREATE TABLE `login_fail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logtime` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logdate` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login_fail`
--

INSERT INTO `login_fail` (`id`, `mobile`, `ip_address`, `logtime`, `logdate`) VALUES
(1, '01792706304', '127.0.0.1', '10:12:32am', '06-01-2021'),
(2, '01792706304', '127.0.0.1', '10:12:35am', '06-01-2021'),
(3, '01792706304', '127.0.0.1', '10:12:37am', '06-01-2021'),
(4, '01792706304', '127.0.0.1', '10:12:37am', '06-01-2021'),
(5, '01792706304', '127.0.0.1', '10:12:37am', '06-01-2021'),
(6, '01792706304', '127.0.0.1', '10:12:42am', '06-01-2021'),
(7, '01792706304', '127.0.0.1', '10:12:44am', '06-01-2021'),
(8, '01792706304', '127.0.0.1', '10:12:44am', '06-01-2021'),
(9, '01792706304', '127.0.0.1', '10:12:44am', '06-01-2021'),
(10, '01792706304', '127.0.0.1', '10:13:57am', '06-01-2021'),
(11, '01792706304', '127.0.0.1', '01:13:09am', '07-01-2021'),
(12, '01792706304', '127.0.0.1', '01:14:25am', '07-01-2021'),
(13, '01792706304', '127.0.0.1', '12:59:39pm', '10-01-2021'),
(14, '01792706304', '127.0.0.1', '12:39:16pm', '21-01-2021'),
(15, '01792706304', '127.0.0.1', '12:58:26pm', '21-01-2021'),
(16, '01792706304', '127.0.0.1', '01:57:13pm', '21-01-2021'),
(17, '01792706304', '127.0.0.1', '01:57:17pm', '21-01-2021'),
(18, '12345678090', '127.0.0.1', '02:13:10am', '22-01-2021'),
(19, '01792706304', '127.0.0.1', '02:22:58am', '22-01-2021'),
(20, '01792706304', '127.0.0.1', '05:45:22pm', '24-01-2021'),
(21, '12345678900', '127.0.0.1', '01:15:37am', '27-01-2021'),
(22, '12345678900', '127.0.0.1', '01:15:41am', '27-01-2021');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logtime` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logdate` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`id`, `mobile`, `ip_address`, `logtime`, `logdate`) VALUES
(3, '01792706304', '127.0.0.1', '10:19:21am', '06-01-2021'),
(4, '01792706304', '127.0.0.1', '10:41:40am', '06-01-2021'),
(5, '01792706304', '127.0.0.1', '12:59:49pm', '10-01-2021'),
(6, '12345678904', '127.0.0.1', '01:37:28am', '18-01-2021'),
(7, '01792706304', '127.0.0.1', '10:11:19am', '21-01-2021'),
(8, '01792706304', '127.0.0.1', '11:18:21am', '21-01-2021'),
(9, '01792706304', '127.0.0.1', '11:32:55am', '21-01-2021'),
(10, '01792706304', '127.0.0.1', '12:39:26pm', '21-01-2021'),
(11, '01792706304', '127.0.0.1', '12:56:38pm', '21-01-2021'),
(12, '01792706304', '127.0.0.1', '12:58:31pm', '21-01-2021'),
(13, '01792706304', '127.0.0.1', '01:01:11pm', '21-01-2021'),
(14, '01792706304', '127.0.0.1', '01:57:24pm', '21-01-2021'),
(15, '01792706304', '127.0.0.1', '07:49:39pm', '21-01-2021'),
(16, '01792706304', '127.0.0.1', '01:51:36am', '22-01-2021'),
(17, '12345678090', '127.0.0.1', '02:13:18am', '22-01-2021'),
(18, '01792706304', '127.0.0.1', '02:19:31am', '22-01-2021'),
(19, '01792706304', '127.0.0.1', '02:23:06am', '22-01-2021'),
(20, '01792706304', '127.0.0.1', '05:41:32pm', '24-01-2021'),
(21, '01792706304', '127.0.0.1', '05:45:26pm', '24-01-2021'),
(22, '01792706304', '127.0.0.1', '10:16:50pm', '24-01-2021'),
(23, '01792706304', '127.0.0.1', '10:24:59pm', '24-01-2021'),
(24, '12345678900', '127.0.0.1', '01:15:49am', '27-01-2021'),
(25, '01792706304', '127.0.0.1', '11:13:15pm', '28-01-2021'),
(26, '01792706304', '127.0.0.1', '05:50:28pm', '29-01-2021'),
(27, '01792706304', '127.0.0.1', '05:54:05pm', '29-01-2021'),
(28, '01792706304', '127.0.0.1', '11:59:17am', '30-01-2021'),
(29, '01792706304', '127.0.0.1', '12:59:45pm', '30-01-2021'),
(30, '01792706304', '127.0.0.1', '02:50:45pm', '30-01-2021'),
(31, '01792706304', '127.0.0.1', '07:14:54pm', '30-01-2021'),
(32, '01792706304', '127.0.0.1', '12:14:10am', '06-03-2021'),
(33, '01792706304', '127.0.0.1', '11:06:25am', '06-03-2021'),
(34, '01303933643', '127.0.0.1', '11:49:14am', '03-07-2021');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_04_30_223436_notice_table', 1),
(2, '2020_04_30_223448_all_class_table', 1),
(3, '2020_04_30_223506_class_category_table', 1),
(4, '2020_04_30_223521_course_feature_table', 1),
(5, '2020_04_30_223529_course_plan_table', 1),
(6, '2020_04_30_223537_file_doc_table', 1),
(7, '2020_04_30_223552_more_series_table', 1),
(8, '2020_04_30_223600_payment_guide_table', 1),
(9, '2020_04_30_223637_student_table', 1),
(10, '2020_04_30_223713_login_infromation_table', 1),
(11, '2020_04_30_223725_admin_table', 1),
(12, '2020_04_30_225841_login_fail_table', 1),
(13, '2020_04_30_225914_visitor_table', 1),
(14, '2020_05_03_001001_completed_class_table', 1),
(15, '2021_01_01_134322_purshase_table', 1),
(17, '2014_10_12_000000_create_users_table', 2),
(18, '2014_10_12_100000_create_password_resets_table', 2),
(19, '2019_08_19_000000_create_failed_jobs_table', 2),
(20, '2020_12_04_202116_administrator__table', 2),
(21, '2020_12_10_185046_teacher_table', 3),
(22, '2020_12_13_183333_contact_table', 3),
(23, '2020_12_13_190042_review_table', 3),
(24, '2020_12_14_182257_blog_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `more_series`
--

CREATE TABLE `more_series` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalClass` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalStudent` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `more_series`
--

INSERT INTO `more_series` (`id`, `img`, `title`, `des`, `code`, `fee`, `totalClass`, `totalStudent`) VALUES
(1, 'http://127.0.0.1:3000/images/c.png', 'C', 'Lorem Ipsum is simply dummy text of the printing and typesetting', 'C1', '3000 TK', '100', '200'),
(2, 'http://127.0.0.1:3000/images/laravellogo.png', 'Laravel', 'Lorem Ipsum is simply dummy text of the printing and typesetting', 'C2', '6000 TK', '100', '200'),
(3, 'http://127.0.0.1:3000/images/androidlogo.png', 'Android', 'Lorem Ipsum is simply dummy text of the printing and typesetting', 'C3', '3000 TK', '1000', '200'),
(4, 'http://127.0.0.1:3000/images/javalogo.png', 'Java', 'Lorem Ipsum is simply dummy text of the printing and typesetting', 'C4', '4000 TK', '100', '200'),
(9, 'http://127.0.0.1:3000/images/angular.png', 'Angular', 'Lorem Ipsum is simply dummy text of the printing and typesetting', 'C5', '3000 TK', '100', '200'),
(10, 'http://127.0.0.1:3000/images/c plus.png', 'C++', 'Lorem Ipsum is simply dummy text of the printing and typesetting', 'C6', '5000 TK', '100', '200'),
(11, 'http://127.0.0.1:3000/images/python.png', 'Python', 'Lorem Ipsum is simply dummy text of the printing and typesetting', 'C7', '3000 TK', '100', '200'),
(13, 'http://127.0.0.1:3000/images/asp.png', 'Asp.Net', 'Lorem Ipsum is simply dummy text of the printing and typesetting', 'C8', '8000 TK', '100', '200');

-- --------------------------------------------------------

--
-- Table structure for table `payment_guide`
--

CREATE TABLE `payment_guide` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `des` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_guide`
--

INSERT INTO `payment_guide` (`id`, `des`, `price`, `banner`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '22', 'images/offer.png');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phn` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trxID` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_mobile` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `img`, `title`, `code`, `phn`, `payment_type`, `trxID`, `payment_mobile`, `status`) VALUES
(8, 'http://127.0.0.1:3000/images/c.png', 'C', 'C1', '01792706304', 'Bkash', 'ASDFGHJKLO', '12345678901', 'active'),
(9, 'http://127.0.0.1:3000/images/python.png', 'Python', 'C7', '01792706304', 'Bkash', '3242424234', '23242432333', 'active'),
(10, 'http://127.0.0.1:3000/images/laravellogo.png', 'Laravel', 'C2', '01303933643', 'Bkash', '0130393364', '01303933643', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `des`, `image`) VALUES
(1, 'Zihad Ali', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500.', 'image'),
(3, 'Mahmudul Hasan', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500.', 'image');

-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

CREATE TABLE `student_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phn` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_list`
--

INSERT INTO `student_list` (`id`, `name`, `email`, `pass`, `phn`, `status`) VALUES
(1, 'monirul', 'monirul@gmail.com', '1234567890', '01792706304', 'active'),
(9, 'sristy', 'sristy@gmail.com', '1234567890', '12345678904', 'active'),
(10, 'sadid', 'sadid@gmail.com', '1234567890', '12345678090', 'active'),
(11, 'abc', 'abc@gmail.com', '123456789', '12345678900', 'active'),
(12, 'murad', 'murad@gmail.com', '01303933643', '01303933643', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Teacher_Id` bigint(20) UNSIGNED NOT NULL,
  `Teacher_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Teacher_Details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Teacher_Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Teacher_Phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Teacher_Id`, `Teacher_Name`, `Teacher_Details`, `Teacher_Email`, `Teacher_Phone`, `password`) VALUES
(1, 'kamal', 'android', 'kamal@gmail.com', '01792706308', '1234567890'),
(3, 'monirul', 'web programming', 'teacher@gmail.com', '01782992838', '1234567890'),
(4, 'sumon', 'web development', 'sumon@gmail.com', '01782992860', '123467890'),
(6, 'zihad ali', 'python', 'zihad@gmail.com', '017865432789', '123467890'),
(8, 'shourav', 'cse', 'shourav@gmail.com', '3424321321', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(255) NOT NULL,
  `ip_address` varchar(1000) NOT NULL,
  `visit_time` varchar(1000) NOT NULL,
  `visit_date` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `ip_address`, `visit_time`, `visit_date`) VALUES
(1, '127.0.0.1', '05:49:51pm', '29-01-2021'),
(2, '127.0.0.1', '05:49:56pm', '29-01-2021'),
(3, '127.0.0.1', '05:50:01pm', '29-01-2021'),
(4, '127.0.0.1', '05:50:12pm', '29-01-2021'),
(5, '127.0.0.1', '05:50:29pm', '29-01-2021'),
(6, '127.0.0.1', '05:50:34pm', '29-01-2021'),
(7, '127.0.0.1', '05:53:22pm', '29-01-2021'),
(8, '127.0.0.1', '05:53:34pm', '29-01-2021'),
(9, '127.0.0.1', '05:53:55pm', '29-01-2021'),
(10, '127.0.0.1', '05:54:05pm', '29-01-2021'),
(11, '127.0.0.1', '05:54:11pm', '29-01-2021'),
(12, '127.0.0.1', '05:54:17pm', '29-01-2021'),
(13, '127.0.0.1', '11:58:43am', '30-01-2021'),
(14, '127.0.0.1', '11:59:18am', '30-01-2021'),
(15, '127.0.0.1', '12:59:16pm', '30-01-2021'),
(16, '127.0.0.1', '12:59:30pm', '30-01-2021'),
(17, '127.0.0.1', '12:59:37pm', '30-01-2021'),
(18, '127.0.0.1', '12:59:46pm', '30-01-2021'),
(19, '127.0.0.1', '01:00:24pm', '30-01-2021'),
(20, '127.0.0.1', '02:12:05pm', '30-01-2021'),
(21, '127.0.0.1', '02:13:06pm', '30-01-2021'),
(22, '127.0.0.1', '02:50:45pm', '30-01-2021'),
(23, '127.0.0.1', '03:59:20pm', '30-01-2021'),
(24, '127.0.0.1', '04:08:24pm', '30-01-2021'),
(25, '127.0.0.1', '06:43:17pm', '30-01-2021'),
(26, '127.0.0.1', '07:14:10pm', '30-01-2021'),
(27, '127.0.0.1', '07:14:12pm', '30-01-2021'),
(28, '127.0.0.1', '07:14:44pm', '30-01-2021'),
(29, '127.0.0.1', '07:14:54pm', '30-01-2021'),
(30, '127.0.0.1', '07:15:22pm', '30-01-2021'),
(31, '127.0.0.1', '07:18:38pm', '30-01-2021'),
(32, '127.0.0.1', '07:50:12pm', '30-01-2021'),
(33, '127.0.0.1', '12:13:29am', '06-03-2021'),
(34, '127.0.0.1', '12:14:11am', '06-03-2021'),
(35, '127.0.0.1', '12:14:20am', '06-03-2021'),
(36, '127.0.0.1', '12:16:59am', '06-03-2021'),
(37, '127.0.0.1', '12:18:31am', '06-03-2021'),
(38, '127.0.0.1', '09:26:50am', '06-03-2021'),
(39, '127.0.0.1', '11:02:51am', '06-03-2021'),
(40, '127.0.0.1', '11:05:26am', '06-03-2021'),
(41, '127.0.0.1', '11:06:25am', '06-03-2021'),
(42, '127.0.0.1', '11:06:49am', '06-03-2021'),
(43, '127.0.0.1', '11:07:41am', '06-03-2021'),
(44, '127.0.0.1', '11:16:20am', '06-03-2021'),
(45, '127.0.0.1', '11:44:06am', '03-07-2021'),
(46, '127.0.0.1', '11:44:27am', '03-07-2021'),
(47, '127.0.0.1', '11:49:14am', '03-07-2021'),
(48, '127.0.0.1', '11:49:27am', '03-07-2021'),
(49, '127.0.0.1', '11:50:00am', '03-07-2021'),
(50, '127.0.0.1', '11:50:40am', '03-07-2021'),
(51, '127.0.0.1', '12:05:52pm', '03-07-2021'),
(52, '127.0.0.1', '12:19:32pm', '03-07-2021'),
(53, '127.0.0.1', '12:19:41pm', '03-07-2021'),
(54, '127.0.0.1', '12:21:31pm', '03-07-2021'),
(55, '127.0.0.1', '12:21:33pm', '03-07-2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_list`
--
ALTER TABLE `class_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_doc`
--
ALTER TABLE `file_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_fail`
--
ALTER TABLE `login_fail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `more_series`
--
ALTER TABLE `more_series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_guide`
--
ALTER TABLE `payment_guide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_list`
--
ALTER TABLE `student_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Teacher_Id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `class_list`
--
ALTER TABLE `class_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `file_doc`
--
ALTER TABLE `file_doc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login_fail`
--
ALTER TABLE `login_fail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `more_series`
--
ALTER TABLE `more_series`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `payment_guide`
--
ALTER TABLE `payment_guide`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_list`
--
ALTER TABLE `student_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `Teacher_Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
