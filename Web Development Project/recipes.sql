-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 09:53 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` int(11) NOT NULL,
  `AdminName` varchar(255) NOT NULL,
  `AdminEmail` varchar(255) NOT NULL,
  `AdminPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `AdminName`, `AdminEmail`, `AdminPassword`) VALUES
(1, 'ngoh', 'ngoh@gmail.com', 'Abcd1234'),
(2, 'gan', 'gan@gmail.com', 'Abcd1234'),
(3, 'ng', 'ng@gmail.com', 'Abcd1234'),
(4, 'khadijah', 'khadijah@gmail.com', 'Abcd1234');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FeedbackId` int(11) NOT NULL,
  `FeedbackDetail` varchar(1000) NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedbackId`, `FeedbackDetail`, `UserId`) VALUES
(2, 'nice!!!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductId` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductCategory` varchar(255) NOT NULL,
  `ProductImage` varchar(255) NOT NULL,
  `ProductFile` varchar(255) NOT NULL,
  `ProductQr` varchar(255) NOT NULL,
  `ProductInfo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductId`, `ProductName`, `ProductCategory`, `ProductImage`, `ProductFile`, `ProductQr`, `ProductInfo`) VALUES
(1, 'Thai Chicken Curry in Coconut Milk\r\n', 'curry', 'product1.jpg', 'product1.pdf', 'qr/product1.png', 'This recipe is one of the favorites in the family! If you don\'t have fish sauce available, try making it with soy sauce.'),
(2, 'Panang Curry with Chicken', 'curry', 'product2.jpg', 'product2.pdf', 'qr/product2.png', 'Panang curry with chicken represents the diversity of Thailand\'s southern region. Panang refers to the island of Penang in Northern Malaysia bordering southern Thailand.'),
(3, 'Mint Chicken Curry', 'curry', 'product3.jpg', 'product3.pdf', 'qr/product3.png', 'A taste of Penang. The bold flavors of the spicy mint curry in Malaysia.\r\n\r\n'),
(4, 'Malaysian Mango Chicken Curry', 'curry', 'product4.jpg', 'product4.pdf', 'qr/product4.png', 'This Malaysian inspired mango dish always has people wanting more.'),
(5, 'Hainanese Chicken Rice', 'rice', 'product5.jpg', 'product5.pdf', 'qr/product5.png', 'The secret is in the broth: this is the most amazing, flavorsome Chinese chicken rice dish you\'ve ever tried. Garnish with sliced cucumber, sprigs of spring onions, and cilantro.'),
(6, 'Classic Hash Browns', 'breakfast_and_brunch', 'product6.jpg', 'product6.pdf', 'qr/product6.png', 'These classic diner-style hash browns are crispy on the outside and fluffy on the inside.'),
(7, 'Chicken Noodle Soup', 'noodles', 'product7.jpg', 'product7.pdf', 'qr/product7.png', 'This soul-warming soup is deliciously simple -- just chicken and noodles. What makes it so good is the homemade roasted chicken stock.'),
(8, 'Chicken Curry Puffs', 'side_dish', 'product8.jpg', 'product8.pdf', 'qr/product8.png', 'These oven-baked beauties are great as appetizers or a snack. They\'re spicy and savory, with a subtle coconut milk base. In Malaysia, they are traditionally deep fried. But here\'s a modern version. '),
(9, 'Coconut Shrimp', 'seafood', 'product9.jpg', 'product9.pdf', 'qr/product9.png', 'These crispy shrimp are rolled in a coconut beer batter before frying. For dipping sauce, I use orange marmalade, mustard and horseradish mixed to taste.');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `RatingId` int(11) NOT NULL,
  `RatingScore` int(11) NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`RatingId`, `RatingScore`, `UserId`) VALUES
(3, 4, 1),
(4, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `UserEmail` varchar(255) NOT NULL,
  `UserPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `UserName`, `UserEmail`, `UserPassword`) VALUES
(1, 'ngoh', 'ngoh@gmail.com', 'Abcd1234'),
(2, 'gan', 'gan@gmail.com', 'Abcd1234'),
(3, 'khadijah', 'khadijah@gmail.com', 'Abcd1234'),
(4, 'ng', 'ng@gmail.com', 'Abcd1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedbackId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductId`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`RatingId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `RatingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
