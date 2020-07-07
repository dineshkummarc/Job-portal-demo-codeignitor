-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 30, 2020 at 01:47 PM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `skill` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`username`, `email`, `password`, `skill`) VALUES
('Charmi Vyas', '12charmi@gmail.com', 'charmi', 'Java, HTML, CSS, PHP, JS');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `email`, `password`, `date`) VALUES
(1, 'admin@admin.com', 'admin', '2020-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `joblist`
--

CREATE TABLE `joblist` (
  `job_id` int(255) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_location` varchar(50) NOT NULL,
  `job_skills` varchar(150) NOT NULL,
  `job_salary` int(255) NOT NULL,
  `job_company_name` varchar(150) NOT NULL,
  `job_description` varchar(400) NOT NULL,
  `job_experience` varchar(50) NOT NULL,
  `job_employeer_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `joblist`
--

INSERT INTO `joblist` (`job_id`, `job_title`, `job_location`, `job_skills`, `job_salary`, `job_company_name`, `job_description`, `job_experience`, `job_employeer_email`) VALUES
(1, 'Data Entry', 'Ahmedabad', 'EXCEL, COMPUTER SKILL', 10000, 'DATA ENTRY Pvt Ltd.', 'Daily work includes the dedication work of atleast 1 work', '0 - 1 year', 'admin@admin.com'),
(2, 'Senior PHP Developer\r\n', 'Gandhinagar', 'java, python, HTML, CSS, .Net', 15000, 'XYZ Technologies Ltd.', 'Required senior PHP developer urgently with atleast experience of 2-3 years.', '1 - 2 year ', 'admin@admin.com'),
(3, 'Data Analyst', 'Surat', 'MYSQL', 10000, 'SOME NEW COMPANY', 'Working on the live projects along with internship', '0 - 1 years', 'admin@admin.com'),
(4, 'Teaching Staff', 'Bopal', 'BSc', 1000, 'XYZ Higher Secondary School', 'Required teaching staff for computer subject as soon as possible....', '0 - 1 year', 'admin@admin.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `joblist`
--
ALTER TABLE `joblist`
  ADD PRIMARY KEY (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `joblist`
--
ALTER TABLE `joblist`
  MODIFY `job_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
