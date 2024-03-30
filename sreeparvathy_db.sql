-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2024 at 12:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sreeparvathy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_image` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_image`, `cat_desc`) VALUES
(8, 'Malayalam Books', 'uploads/malayalam bookss.webp', ''),
(9, 'Enghlish Books', 'uploads/English Books.jpg', ''),
(10, 'Hindi Books', 'uploads/Hindi.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(20) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `contact_name`, `contact_email`, `contact_message`) VALUES
(7, 'sreeparvathy', 'parusreeparvathy@gmail.com', 'books');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` double NOT NULL,
  `product_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_image`, `product_name`, `product_price`, `product_description`) VALUES
(11, 'uploads/Neermathalam poothakalam.jpg', 'Neermathalam poothakalam', 100, 'Neermathalam Pootha Kalam is a collection of cherished memories which gives a nostalgic effect to the readers. It is a memoir by Madhavikkutty.'),
(12, 'uploads/Ram care of anandi.jpg', 'Ram care of annadi', 399, 'Ram C/O Anandhi is one of the top romantic feel good novels in malayalam written by the famous Malayalam writer Akhil P Dharmajan. Buy your copy now.'),
(13, 'uploads/It Ends With Us.jpg', 'It Ends With Us', 300, 'Originally published: 29 February 2016 Author: Colleen Hoover Genres: Romance novel, Fiction, Contemporary romance Followed by: It Starts with Us Pages: 376 Set in: Boston'),
(15, 'uploads/Ikikai.jpg', 'Ikigai', 150, 'Overall, this book is truly uplifting. The reader is intrigued by the simplicity and calming tone it offers, and it captures the attention of ...'),
(16, 'uploads/Godan.jpg', 'Godaan', 199, 'Godaan is a famous Hindi novel by Munshi Premchand. It was first published in 1936 and is considered one of the greatest Hindi novels of modern Indian literature. Themed around the socio-economic deprivation'),
(17, 'uploads/Nirmala.jpg', 'Nirmala', 200, 'Nirmala is a compelling and heart-wrenching tale that explores the themes of love, sacrifice, and societal expectations.');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Id` int(11) NOT NULL,
  `reg_name` varchar(50) NOT NULL,
  `reg_email` varchar(100) NOT NULL,
  `reg_phone` varchar(25) NOT NULL,
  `reg_username` varchar(50) NOT NULL,
  `reg_password` varchar(50) NOT NULL,
  `reg_dob` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `reg_name`, `reg_email`, `reg_phone`, `reg_username`, `reg_password`, `reg_dob`) VALUES
(7, 'sreeparvathy', 'parusreeparvathy8@gmail.com', '7034087228', 'parvathy', '2002', '2002-11-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
