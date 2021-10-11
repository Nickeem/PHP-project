-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 01:07 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resturant_cookery`
--

-- --------------------------------------------------------

--
-- Table structure for table `beverages`
--

CREATE TABLE `beverages` (
  `Beverage` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beverages`
--

INSERT INTO `beverages` (`Beverage`) VALUES
('Water'),
('Coke'),
('Champagne'),
('Rum Punch'),
('Coconut water'),
('Sorrel'),
('Juice of the day');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Menu` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Menu`) VALUES
('Pizza'),
('Salad'),
('Lasagna'),
('Panzenella'),
('Chicken'),
('Chips and Chicken'),
('Apple Cobbler'),
('Chicken Parmesan'),
('Chips'),
('Cheese Burger');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderNum` varchar(13) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `order_ready` varchar(3) NOT NULL,
  `Menu_Items` varchar(200) NOT NULL,
  `Beverage_Items` varchar(200) NOT NULL,
  `Table_Number` int(11) NOT NULL,
  `userID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderNum`, `Date`, `Time`, `order_ready`, `Menu_Items`, `Beverage_Items`, `Table_Number`, `userID`) VALUES
('000120191208', '2019-12-08', '08:59:29', 'Yes', 'Lasagna, Chicken, Panzenella, , , ', 'Juice of the day, Coke, Coconut water, , , ', 1, 'Ninja'),
('000120191210', '2019-12-10', '09:11:06', 'No', 'Pizza, Chips and Chicken, , , , ', 'Coconut water, Coconut water, , , , ', 12, 'Ninja'),
('000220191210', '2019-12-10', '09:00:21', 'Yes', 'Pizza, Chicken Parmesan, Chips, , , ', 'Coke, Rum Punch, Sorrel, , , ', 2, 'Ninja'),
('000320191210', '2019-12-10', '09:07:41', 'Yes', 'Pizza, , , , , ', 'Rum Punch, Coke, , , , ', 3, 'Ninja'),
('000420191210', '2019-12-10', '09:08:39', 'Yes', 'Pizza, Panzenella, Salad, Chicken Parmesan, Apple Cobbler, Chicken', 'Coke, Sorrel, Water, Coke, Rum Punch, Juice of the day', 5, 'Ninja'),
('000520191210', '2019-12-10', '09:14:50', 'No', 'Lasagna, Apple Cobbler, , , , ', 'Coke, , , , , ', 13, 'Ninja'),
('000720191210', '2019-12-10', '09:15:40', 'Yes', 'Chips and Chicken, Chips and Chicken, Chicken, Chips, , ', 'Coke, Coke, Coke, Coke, , ', 5, 'Ninja'),
('000820191210', '2019-12-10', '09:16:40', 'No', 'Panzenella, Chicken Parmesan, , , , ', 'Rum Punch, Coke, , , , ', 9, 'Ninja'),
('000920191210', '2019-12-10', '09:18:10', 'No', 'Chips, Chips, Lasagna, Chicken, , ', 'Water, Sorrel, Sorrel, Juice of the day, , ', 17, 'Ninja'),
('001020191210', '2019-12-10', '09:19:20', 'No', 'Chicken, Apple Cobbler, , , , ', 'Coconut water, Juice of the day, , , , ', 16, 'Ninja'),
('001120191210', '2019-12-10', '09:19:48', 'No', 'Pizza, Panzenella, , , , ', 'Juice of the day, Rum Punch, , , , ', 9, 'Ninja'),
('001220191210', '2019-12-10', '09:21:59', 'No', 'Lasagna, Chips and Chicken, Panzenella, Salad, Chicken Parmesan, Lasagna', 'Coke, Sorrel, Rum Punch, Water, Juice of the day, Sorrel', 7, 'Ninja'),
('001320191210', '2019-12-10', '09:22:47', 'No', 'Pizza, Chips and Chicken, , , , ', 'Coke, Sorrel, , , , ', 19, 'Ninja'),
('001420191210', '2019-12-10', '09:23:29', 'No', 'Chicken Parmesan, , , , , ', 'Champagne, Champagne, , , , ', 21, 'Ninja'),
('001720191210', '2019-12-10', '09:25:13', 'No', 'Lasagna, Panzenella, Panzenella, , , ', 'Rum Punch, Coconut water, , , , ', 4, 'KDot'),
('001920191210', '2019-12-10', '09:27:17', 'Yes', 'Cheese Burger, Apple Cobbler, Apple Cobbler, , , ', 'Coke, Juice of the day, Coconut water, , , ', 4, 'KDot'),
('002020191210', '2019-12-10', '09:28:05', 'No', 'Chips, Chips and Chicken, Pizza, , , ', 'Coconut water, Coke, Rum Punch, , , ', 6, 'KDot'),
('002120191210', '2019-12-10', '09:28:47', 'No', 'Apple Cobbler, Chips and Chicken, , , , ', 'Water, , , , , ', 29, 'KDot'),
('002920191210', '2019-12-10', '09:34:42', 'No', 'Pizza, Lasagna, Chicken, Chicken Parmesan, Apple Cobbler, ', 'Coke, Water, Water, Rum Punch, Rum Punch, ', 1, 'KDot'),
('003020191210', '2019-12-10', '09:39:00', 'No', 'Pizza, Pizza, , , , ', 'Coconut water, , , , , ', 26, 'SGreaves'),
('003820191210', '2019-12-10', '09:41:14', 'No', 'Chips and Chicken, Chicken, Salad, , , ', 'Sorrel, Juice of the day, , , , ', 4, 'SGreaves'),
('006520191210', '2019-12-10', '08:39:22', 'Yes', 'Panzenella, Lasagna, , , , ', 'Coke, Sorrel, , , , ', 12, 'Ninja'),
('010020191210', '2019-12-10', '10:22:37', 'Yes', 'Salad, Salad, Pizza, Chips and Chicken, , ', 'Water, Champagne, Coke, Rum Punch, , ', 2, 'SGreaves'),
('060020191210', '2019-12-10', '10:29:05', 'Yes', 'Salad, Panzenella, Chips and Chicken, Apple Cobbler, , ', 'Coke, Coke, Rum Punch, Coconut water, , ', 12, 'Ninja');

-- --------------------------------------------------------

--
-- Table structure for table `staff_login`
--

CREATE TABLE `staff_login` (
  `userID` varchar(20) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Staff_Type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_login`
--

INSERT INTO `staff_login` (`userID`, `Password`, `FirstName`, `LastName`, `Staff_Type`) VALUES
('JLove', 'GAZA', 'Jaquan', 'Lovell', 'Wait Staff'),
('Kartel', 'Continental', 'John', 'Wick', 'Wait Staff'),
('KDot', 'DAMN', 'Kendrick', 'Lamar', 'Wait Staff'),
('KSLogin', '%%Password%%', '', '', 'Kitchen Staff'),
('Ninja', 'GAZA', 'Nickeem ', 'Payne', 'Wait Staff'),
('SGreaves', 'password', 'Shemar', 'Greaves', 'Wait Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderNum`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `staff_login`
--
ALTER TABLE `staff_login`
  ADD PRIMARY KEY (`userID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `staff_login` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
