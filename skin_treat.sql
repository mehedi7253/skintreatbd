-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 11:22 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skin_treat`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `about_us_id` int(5) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`about_us_id`, `Description`) VALUES
(2, '<p>Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to dgffsdgan e-mail spam filte.</p>\r\n\r\n<p>Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filte.</p>\r\n\r\n<p>Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filte.</p>\r\n\r\n<p>Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filtegf</p>\r\n'),
(3, '<p>test about</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `image`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Capture.JPG', 0),
(2, 'mehedi hasan', 'mehedi@gmail.com', '202cb962ac59075b964b07152d234b70', 'Capture.JPG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `service_id`, `quantity`, `name`, `email`, `phone`, `address`, `date`) VALUES
(9, 2, 2, 'mehedi hasan', 'mehedi@gmail.com', '01941697253', 'panthapath 59/7', '2020-11-15'),
(10, 3, 5, 'saem', 'saem@gmail.com', '0175214', 'west raza bazar', '2020-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contatc_info`
--

CREATE TABLE `contatc_info` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contatc_info`
--

INSERT INTO `contatc_info` (`id`, `address`, `phone`, `email`) VALUES
(4, 'Dhaka, Dhaka Division, Bangladesh\r\n119/3 malibag 1st lane', '8801722511030', 'firojkabir2017@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `ID` int(5) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`ID`, `Description`) VALUES
(7, '<p>this is test mission</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `application` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `title`, `short_desc`, `price`, `application`, `image`, `date`) VALUES
(2, 'VITAL FOAMING CLEANSER ', 'REVITALIZING & SMOOTHING FRUIT ENZYME COMPLEX', 1500, '<p>&nbsp;</p>\r\n\r\n<p><strong>This luxuriously creamy foaming cleanser meticulously remove<strong>&nbsp;dirt and makeup without stripping the skin of its natural oils.</strong><br />\r\n<br />\r\n<br />\r\n<br />\r\n/ Gently and effectively removes impurities and sloughs away dead skin cells.<br />\r\n<br />\r\n<br />\r\n<br />\r\n/ Offers powerful antioxidant protection and combats redness and irritation.<br />\r\n<br />\r\n<br />\r\n<br />\r\n/ &nbsp;Helps maintain the skin&rsquo;s natural moisture balance, leaving it smooth, supple, and refreshed.&nbsp;</strong>&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '800_5fabd2c297775.jpg', '2020-11-13 12:14:12'),
(3, 'MINERAL DEFENCE SUNSCREEN', 'This sunscreen is an ', 2000, '<p>/ &nbsp;Ensures high protection with a soft sensory feel and sheer, non-sticky finish, making this sunscreen ideal for everyday usage.&nbsp;<br />\r\n<br />\r\n/ &nbsp;Inhibits inflammation and oxidative stress induced by photo-damage, sunburn, and pollutants, and helps reduce hyperpigmentation for a skin-perfecting result.&nbsp;<br />\r\n<br />\r\n/ Ocean and reef-friendly formula that is formulated completely without nanoparticles, titanium dioxide, and chemical sun filters.<br />\r\n<br />\r\n/Fragrance-free formula suited for all skin types. Untinted and transparent once applied on the skin.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>all-natural formula that delivers broad-</strong>&nbsp;<strong>spectrum protection against both UVA and UVB rays</strong>&nbsp;.</p>\r\n', '800_5fabd8ac444ff.png', '2020-11-13 12:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`) VALUES
(1, 'IMG_20200827_092234-01.jpeg'),
(3, 'IMG_20200912_161217-01.jpeg'),
(5, 'IMG_20191004_164146.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`about_us_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contatc_info`
--
ALTER TABLE `contatc_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `about_us_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contatc_info`
--
ALTER TABLE `contatc_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
