-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2024 at 12:17 PM
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
-- Database: `sreeparvathy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cart_user` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` double NOT NULL,
  `product_image` text NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(9, 'English Books', 'uploads/English Books.jpg', ''),
(10, 'Hindi Books', 'uploads/Hindi.jpg', ''),
(11, 'Tamil Books', 'uploads/tamil books.webp', ''),
(12, 'Telungu', 'uploads/telungu.webp', ''),
(13, 'Kannada Books', 'uploads/kannada.jpg', '');

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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_name` varchar(100) NOT NULL,
  `order_address` text NOT NULL,
  `order_type` varchar(100) NOT NULL,
  `order_status` varchar(100) NOT NULL,
  `order_user` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_image` text NOT NULL,
  `product_price` double NOT NULL,
  `product_qty` varchar(100) NOT NULL,
  `product_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_name`, `order_address`, `order_type`, `order_status`, `order_user`, `product_id`, `product_name`, `product_image`, `product_price`, `product_qty`, `product_amount`) VALUES
(1, 'parvathy', 'parayancode', 'cod', '1', 'parvathy', '0', '', '', 0, '0', 0),
(2, 'parvathy', 'parayancode', 'cod', '1', 'parvathy', '0', '', '', 0, '0', 0),
(3, 'parvathy', 'parayancode', 'cod', '1', 'parvathy', '0', '', '', 0, '0', 0),
(4, 'parvathy', 'parayancode', 'cod', '1', 'parvathy', '0', '', '', 0, '0', 0),
(5, 'parvathy', 'parayancode', 'cod', '1', 'parvathy', '0', '', '', 0, '0', 0),
(6, 'parvathy', 'parayancode', 'cod', '1', 'parvathy', '0', '', '', 0, '0', 0),
(7, 'parvathy', 'parayancode', 'cod', '1', 'parvathy', '0', '', '', 0, '0', 0),
(8, 'parvathy', 'parayancode', 'cod', '1', 'parvathy', '0', '', '', 0, '0', 0),
(9, 'parvathy', 'parayancode', 'cod', '1', 'parvathy', '0', '', '', 0, '0', 0),
(10, 'parvathy', 'parayancode', 'cod', '1', 'parvathy', '0', '', '', 0, '0', 0),
(11, '', '', '', '0', 'parvathy', '11', 'Neermathalam poothakalam', 'uploads/Neermathalam poothakalam.jpg', 100, '1', 100);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_cat` varchar(100) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` double NOT NULL,
  `product_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_image`, `product_cat`, `product_name`, `product_price`, `product_description`) VALUES
(11, 'uploads/Neermathalam poothakalam.jpg', 'Malayalam Books', 'Neermathalam poothakalam', 100, 'Neermathalam Pootha Kalam is a collection of cherished memories which gives a nostalgic effect to the readers. It is a memoir by Madhavikkutty.'),
(12, 'uploads/Ram care of anandi.jpg', 'Malayalam Books', 'Ram care of annadi', 399, 'Ram C/O Anandhi is one of the top romantic feel good novels in malayalam written by the famous Malayalam writer Akhil P Dharmajan. Buy your copy now.'),
(13, 'uploads/It Ends With Us.jpg', 'English Books', 'It Ends With Us', 300, 'Originally published: 29 February 2016 Author: Colleen Hoover Genres: Romance novel, Fiction, Contemporary romance Followed by: It Starts with Us Pages: 376 Set in: Boston'),
(15, 'uploads/Ikikai.jpg', 'English Books', 'Ikigai', 150, 'Overall, this book is truly uplifting. The reader is intrigued by the simplicity and calming tone it offers, and it captures the attention of ...'),
(16, 'uploads/Godan.jpg', 'Hindi Books', 'Godaan', 199, 'Godaan is a famous Hindi novel by Munshi Premchand. It was first published in 1936 and is considered one of the greatest Hindi novels of modern Indian literature. Themed around the socio-economic deprivation'),
(17, 'uploads/Nirmala.jpg', 'Hindi Books', 'Nirmala', 200, 'Nirmala is a compelling and heart-wrenching tale that explores the themes of love, sacrifice, and societal expectations.'),
(20, 'uploads/irandavathyu.png', 'Tamil Books', 'Irandavathu', 159, 'The premise of nuclear waste is new to mainstream Indian cinema, but despite some fantastic performances, the impact of this film does not...'),
(21, 'uploads/nithya dhyaan.jpg', 'Tamil Books', 'Nithya dhyaan(nithyananda paramahamsam)', 175, 'Nithya Dhyaan (tamil) Nithyananada paramahamsam book '),
(22, 'uploads/poonachi.jpg', 'Telungu', 'Poonachi Or The story of the black Goat', 140, 'Thus begins the story of Poonachi, the little orphan goat, who survives against the odds and carries the burden of being different all her life long.'),
(23, 'uploads/telungu 2.jpg', 'Telungu', 'Girls For Sale : A Play From Colonial India', 160, 'A masterpiece of British Indian literature in a vibrant modern English translation'),
(24, 'uploads/jugari.jpg', 'Kannada Books', 'Jugari Cross', 180, 'I hope the reader community will appreciate how this suspense thriller gives the glimpses of nature, ecology, social reforms, literature, global/local economies, and many more social dimensions.'),
(26, 'uploads/faiz.jpg', 'English Books', 'poem by Faiz', 155, 'Faiz Ahmen Faiz is looked on as the most important Urdu poet in both India and Pakistan. This collection of his poems is representative of the best in contemporary Urdu writing. The Urdu text is presented with English translations.'),
(27, 'uploads/benyamin.jpg', 'Malayalam Books', 'Aadujeevitham', 155, 'Goat Days is a 2008 Malayalam-language novel by Indian author Benyamin. It is about an abused Malayali migrant worker employed in Saudi Arabia as a goatherd against his will. The novel is based on real-life events and was a best seller in Kerala. '),
(28, 'uploads/o.v vijayan.jpg', 'Malayalam Books', 'Khasakkinte Ithihasam', 145, 'Khasakkinte Itihasam is the Malayalam debut novel by Indian writer O. V. Vijayan. It was first serialised in 1968 and published as a single edition in 1969. The novel has been translated from Malayalam into French by Dominique Vitalyos.'),
(29, 'uploads/malegallalli_madumagalu.jpg', 'Kannada Books', 'Malegalalli Madumagalu', 225, ' No doubt it is an excellent novel with detailed and mesmerizing descriptions about the natural beauty of the ghats in Karnataka, but Malegalalli ... 6 answers   ·   41 votes:  I read Malegalalli Madhumagalu last year. It took me nearly one and half month to c'),
(30, 'uploads/doddamane.jpg', 'Kannada Books', 'Doddamane: The Great House', 180, 'Great House is a meditation on loss and memory and how they construct our lives. It takes its title from a talmudic idea of ...'),
(31, 'uploads/vivaha chinthana.jpg', 'Kannada Books', 'Vivaha ondu Chinthana', 149, 'A NEW BOOK MARRIAGE AND ITS MORRALS'),
(32, 'uploads/m.jpg', 'Kannada Books', '', 154, 'got a defective piece....more than 10 pages are blank and story is discontinued......disappointed with the service. One person found this helpful.'),
(33, 'uploads/mo.jpg', 'Telungu', 'Moral Stories', 125, 'moral stories for kids'),
(34, 'uploads/panchatandra.jpg', 'Telungu', 'Panchatantra Moral Short Stories', 130, 'Panchatantra kadhakal'),
(35, 'uploads/tenali.jpg', 'Telungu', 'Tenali Raman ', 140, ' The book shows how Tenali Raman would just observe and apply his knowledge intelligently to impress others around him. There are plenty of tales ...'),
(36, 'uploads/aarachar.jpg', 'Malayalam Books', 'Arachar', 154, 'വിധിയനുസരിച്ച്, അവൾ തൻ്റെ പിതാവിൻ്റെ ജോലി അവകാശമാക്കുകയും രാജ്യത്തെ ആദ്യത്തെ വനിതാ ആരാച്ചാർ ആകുകയും'),
(38, 'uploads/the_secret_library__a_booklove_1634785650_a57f28de_progressive.jpg', 'English Books', 'The Secret Library', 154, 'highlights some of the most fascinating aspects of our history.'),
(39, 'uploads/using.jpg', 'English Books', 'English Grammar', 180, 'Understanding using english grammers'),
(40, 'uploads/andar.jpg', 'Hindi Books', 'Chandar and Sudha', 120, 'Dharamvir Bharati · 2016 Immensely popular since its publication more half a century ago, Chander & Sudha continues to seduce readers with its potent mix of tender passion and heartbreaking tragedy.'),
(41, 'uploads/g.jpg', 'Hindi Books', 'Gowri', 140, 'Gauri (Hindi Edition) (Audio Download): Subhadra Kumari Chauhan, Manisha Pradhan, Rekhta Studio:'),
(42, 'uploads/nirala.jpg', 'Hindi Books', 'Nirala', 140, 'Chayavadi Samalochna aur Nirala book online at best prices in india on Amazon.in. Read Chayavadi Samalochna aur Nirala book reviews & ...'),
(43, 'uploads/vekkai.jpg', 'Tamil Books', 'Vekkai', 0, '120.Rs'),
(44, 'uploads/nagammal.jpg', 'Tamil Books', 'Nagammal', 110, 'A surprisingly mature creation written at a time when novels were still novelties in Tamil. It is about a widowed woman who wants to live alone, away from a ...'),
(45, 'uploads/yagasalai.jpg', 'Tamil Books', 'Yagasalai', 0, '825.Rs');

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
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
