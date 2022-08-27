-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 04:54 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `govisevana`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `NIC` varchar(11) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `TPno` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `email`, `NIC`, `password`, `name`, `address`, `TPno`) VALUES
(3, 'thilina@gmail.com', '998747845v', '$2y$10$VzVwlTSAnF/JAebuhcP.cOLc6m04obXPw2ueHwcXyS/4reb1QAOdS', 'Thilina Peduruhewa', 'Mathara', 774558955);

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `bidID` varchar(5) NOT NULL,
  `stockID` int(5) DEFAULT NULL,
  `buyerID` int(5) DEFAULT NULL,
  `bidPrice` decimal(8,2) DEFAULT NULL,
  `bidStatus` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `buyerID` int(5) NOT NULL,
  `NIC` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `province` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `tpno` int(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`buyerID`, `NIC`, `password`, `name`, `address`, `province`, `district`, `tpno`, `email`) VALUES
(13, '997121685V', '$2y$10$AYAhB5XchLgSScdK0/5FO.6C3hny6tt6E3cAzxsNBmzJjKbP2Eorm', 'Kamala Perera', 'Madampe', 'North Western', 'Puttalam', 714068712, 'kamala@gmail.com'),
(16, '9958721365', '$2y$10$kYmsu/eLHOE3qWekLRBsOuRx0ecmodPzPGMSAwMzdxX8T.5UAzUFm', 'Keshani Perera', 'Wennappuwa', 'Sabaragamuwa', 'Kegalle', 724758669, 'keshani@gmail.com'),
(17, '964558741v', '$2y$10$ZLRRkq0SIGDCFsnwv2.Pluv4fefnTc9zZji74gZZmyUJ5eLuZC3/2', 'Jayamal Fernando', 'bqwdhwd', 'Central', 'Kandy', 0, 'jayamal@gmail.com'),
(18, '974588456v', '$2y$10$CRlDcJR9qP0yvt.OJsFsWu9773NxTFFlfY3p3XAKzzzbtCj4TLdo6', 'Omaya Jayasinghe', 'Ratnapura', 'Sabaragamuwa', 'Ratnapura', 783563441, 'omaya@gmail.com'),
(19, '987775412v', '$2y$10$iqfXcHnGmQIM5.8OMNCMd.a.nOm0SRKVVZgouwUB7RlUELQKA7P1e', 'Thisuri Perera', 'Gampaha', 'Western', 'Colombo', 775544854, 'thisuri@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `buyercomplain`
--

CREATE TABLE `buyercomplain` (
  `complainID` varchar(5) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `farmerID` int(10) DEFAULT NULL,
  `buyerID` int(10) DEFAULT NULL,
  `complainStatus` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buyernotification`
--

CREATE TABLE `buyernotification` (
  `notifID` int(11) NOT NULL,
  `buyerID` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `notifdate` date NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyernotification`
--

INSERT INTO `buyernotification` (`notifID`, `buyerID`, `description`, `notifdate`, `status`) VALUES
(1, 7, 'buyer,Thilina Vishwanath Peduruhewa your request has been approved2022/03/27', '2022-03-27', 'unread'),
(2, 7, 'buyer,Thilina Vishwanath Peduruhewa your request has been approved ', '2022-03-28', 'unread'),
(3, 16, 'buyer,Keshani Perera your request has been approved ', '2022-03-28', 'unread'),
(4, 16, 'buyer,Keshani Perera your request has been approved ', '2022-03-28', 'unread'),
(5, 19, 'buyer,Thisuri Perera your request has been approved ', '2022-03-29', 'unread'),
(6, 16, 'buyer,Keshani Perera your request has been approved ', '2022-03-29', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `catID` int(5) NOT NULL,
  `catName` varchar(30) NOT NULL,
  `catDescription` varchar(2000) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`catID`, `catName`, `catDescription`, `image`) VALUES
(6, 'Carrots', 'Vegetables', ''),
(10, 'Eggplant', 'Vegetable', ''),
(11, 'Onion', 'Vegetable', ''),
(12, 'Tomato', 'Vegetable', ''),
(15, 'Potato', 'Vegetable', ''),
(18, 'Apple', 'fruits', ''),
(19, 'Banana', 'fruit', ''),
(23, 'Pineapple', 'fruit', ''),
(24, 'Kiwi', 'fruit', ''),
(25, 'Watermelon', 'fruit', '');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryareas`
--

CREATE TABLE `deliveryareas` (
  `deliveryPersonID` int(10) DEFAULT NULL,
  `areas` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliveryareas`
--

INSERT INTO `deliveryareas` (`deliveryPersonID`, `areas`) VALUES
(9, 'Gampaha'),
(9, 'Kandy'),
(9, 'Colombo'),
(9, 'NuwaraEliya'),
(9, 'Ratnapura'),
(9, 'Kalutara'),
(9, 'Matara'),
(9, 'Galle'),
(10, 'Kalutara'),
(10, 'Galle'),
(10, 'Ratnapura'),
(10, 'Colombo'),
(10, 'Gampaha'),
(10, 'Kegalle'),
(10, 'Matara'),
(10, 'Anuradhapura'),
(10, 'Vavuniya'),
(10, 'Kurunegala'),
(7, 'Puttalam'),
(7, 'Colombo'),
(7, 'Kandy'),
(7, 'Kurunegala'),
(7, 'Kegalle');

-- --------------------------------------------------------

--
-- Table structure for table `deliverynotification`
--

CREATE TABLE `deliverynotification` (
  `notifID` varchar(10) NOT NULL,
  `catagory` varchar(10) DEFAULT NULL,
  `deliveryPersonID` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deliveryorder`
--

CREATE TABLE `deliveryorder` (
  `deliveryOrderID` int(11) NOT NULL,
  `deliveryPersonID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `farmerID` int(11) NOT NULL,
  `buyerID` int(11) NOT NULL,
  `pickupAddress` varchar(200) NOT NULL,
  `DeliveryAddress` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliveryorder`
--

INSERT INTO `deliveryorder` (`deliveryOrderID`, `deliveryPersonID`, `orderID`, `farmerID`, `buyerID`, `pickupAddress`, `DeliveryAddress`) VALUES
(1, 9, 7, 11, 11, 'Matara', 'Wennappuwa');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryperson`
--

CREATE TABLE `deliveryperson` (
  `deliveryPersonID` int(5) NOT NULL,
  `NIC` varchar(10) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `province` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `city` int(11) NOT NULL,
  `tpno` int(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliveryperson`
--

INSERT INTO `deliveryperson` (`deliveryPersonID`, `NIC`, `password`, `name`, `address`, `province`, `district`, `city`, `tpno`, `email`) VALUES
(7, '985524678v', '$2y$10$ZpHreUabV0Wo8j1kKQQf3OBdLQdv3ML9b9JHxORI2pCEI5oY3PcCS', 'Ravindu Ranasinghe', 'Galle', 'Southern', 'Galle', 0, 775689455, 'ravindu@gmail.com'),
(9, '9855674278', '$2y$10$ZpHreUabV0Wo8j1kKQQf3OBdLQdv3ML9b9JHxORI2pCEI5oY3PcCS', 'Nimal Senadheera', 'Matara', 'Southern', 'Matara', 0, 775684844, 'nimal@gmail.com'),
(10, '867549612v', '$2y$10$Z.A6CxXZyuOA4byTTQv/K.VNCljEJaywZtGPnD8KiuE0OujCHqwpy', 'Thilan Jayantha', 'Nawala', 'North Western', 'Kurunegala', 0, 976524155, 'thilan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `deliverypersoncatagories`
--

CREATE TABLE `deliverypersoncatagories` (
  `deliveryPersonID` int(11) DEFAULT NULL,
  `catID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliverypersoncatagories`
--

INSERT INTO `deliverypersoncatagories` (`deliveryPersonID`, `catID`) VALUES
(7, 6),
(7, 8),
(7, 11),
(7, 12),
(7, 15),
(9, 6),
(9, 10),
(9, 11),
(9, 12),
(9, 15),
(9, 18),
(9, 19),
(9, 23),
(9, 24),
(9, 25),
(10, 6),
(10, 11),
(10, 15),
(10, 18),
(10, 19),
(10, 23),
(7, 19),
(7, 24);

-- --------------------------------------------------------

--
-- Table structure for table `deliveryvehicles`
--

CREATE TABLE `deliveryvehicles` (
  `deliveryPersonID` int(11) DEFAULT NULL,
  `vehicleModel` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliveryvehicles`
--

INSERT INTO `deliveryvehicles` (`deliveryPersonID`, `vehicleModel`) VALUES
(7, 'DIMO batta'),
(9, 'DIMO batta'),
(10, 'lorry'),
(7, 'dimo batta');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `farmerID` int(5) NOT NULL,
  `NIC` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `province` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `tpno` int(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`farmerID`, `NIC`, `password`, `name`, `address`, `province`, `district`, `tpno`, `email`) VALUES
(11, '984561278v', '$2y$10$HxmB7GOiWFlmbzjWQ3tL6OUMYkkyW0Q5.dh.IIcrWzEolHprGovEe', 'Sandun Fernando', 'Matara', 'Southern', 'Matara', 764498527, 'sandun@gmail.com'),
(17, '995468855v', '$2y$10$Hg0ZkyXZTf3/qkGnIsGAJOIXSzJGUL5sS5Gq0gkopZTsz.M0patf2', 'Sanduni Fdo', 'Nugegoda', 'Central', 'Kandy', 553221465, 'sanduni@gmail.com'),
(18, '9655784525', '$2y$10$S64aZuTHLwua5o2XyQtwqerPNChcWTNQdCMLZG/e0VbA3rDjbvrfq', 'Tharuka Rajapaksha', 'Kadawatha', 'Central', 'Kandy', 785596235, 'tharuka@gmail.com'),
(19, '945587214v', '$2y$10$hoqgwlOjm7fxvSmXn1lHPuIjTPh3Txnhn5avSARATZ13U3fv7wFfu', 'Sithara Rathnayake', 'Nugegoda', 'North Western', 'Kurunegala', 875623445, 'sithara@gmail.com'),
(20, '996321278v', '$2y$10$M.xfPSjkA9SMPuuBTI8SeOp8/nFS9yESeWi/4gLVbV8IzgoiOdJJO', 'Janani Perera', 'Weliweriya', 'Western', 'Colombo', 714288776, 'janani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `farmercomplain`
--

CREATE TABLE `farmercomplain` (
  `complainID` varchar(5) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `farmerID` int(10) DEFAULT NULL,
  `buyerID` int(10) DEFAULT NULL,
  `complainStatus` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `farmernotification`
--

CREATE TABLE `farmernotification` (
  `notifID` int(11) NOT NULL,
  `farmerID` int(11) NOT NULL,
  `description` longtext,
  `notifdate` date NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmernotification`
--

INSERT INTO `farmernotification` (`notifID`, `farmerID`, `description`, `notifdate`, `status`) VALUES
(1, 3, 'buyer, place a order to the stock post you posts on 17th october', '2022-03-26', 'un'),
(2, 3, 'buyer,Thilina Vishwanath Peduruhewa place a order to the stock post you posts on2022/03/27', '2022-03-27', 'unread'),
(3, 3, 'buyer,Thilina Vishwanath Peduruhewa place a order to the offer posts on2022/03/28', '2022-03-28', 'unread'),
(4, 11, 'buyer,Keshani Perera place a order to the offer posts on2022/03/29', '2022-03-29', 'unread'),
(5, 18, 'buyer,Keshani Perera place a order to the offer posts on2022/03/29', '2022-03-29', 'unread'),
(6, 11, 'buyer,Keshani Perera place a order to the offer posts on2022/03/29', '2022-03-29', 'unread'),
(7, 11, 'buyer,Keshani Perera place a order to the stock post you posts on2022/03/29', '2022-03-29', 'unread'),
(8, 11, 'buyer,Keshani Perera place a order to the stock post you posts on2022/03/29', '2022-03-29', 'unread'),
(9, 11, 'buyer,Keshani Perera place a order to the stock post you posts on2022/03/29', '2022-03-29', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

CREATE TABLE `moderator` (
  `MID` int(10) NOT NULL,
  `ModName` varchar(3000) NOT NULL,
  `ModEmail` varchar(2000) NOT NULL,
  `ModTP` int(10) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moderator`
--

INSERT INTO `moderator` (`MID`, `ModName`, `ModEmail`, `ModTP`, `Password`) VALUES
(4, 'Nimal Perera', 'nimal@gmail.com', 745588654, '$2y$10$NROCnd0XtWKofKsokB/zW.PjdAwxEGzW/0oB7iOgl0t4L0LxwIdgq'),
(5, 'Kamal Fdo', 'kamal@gmail.com', 758899654, '$2y$10$br2d.lOaSafckcoe3Xe3outIx.Ub7XiyrpCOlA5p7xY63AnL8sdPq'),
(6, 'Amal Perera', 'amal@gmail.com', 774412587, '$2y$10$p9Nt79wY/8kaIhIB6TBdw.mjYzXFQzGsHEfzvVwJNtJSk6WvDUdgC');

-- --------------------------------------------------------

--
-- Table structure for table `moderatorbuyernotification`
--

CREATE TABLE `moderatorbuyernotification` (
  `notifID` int(11) NOT NULL,
  `buyerID` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `notifdate` date NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moderatorbuyernotification`
--

INSERT INTO `moderatorbuyernotification` (`notifID`, `buyerID`, `description`, `notifdate`, `status`) VALUES
(1, 7, 'farmer,Thilina Vishwanath Peduruhewa submitted a request post2022/03/27', '2022-03-27', 'unread'),
(2, 7, 'farmer,Thilina Vishwanath Peduruhewa submitted a request post2022/03/28', '2022-03-28', 'unread'),
(3, 16, 'farmer,Keshani Perera submitted a request post2022/03/28', '2022-03-28', 'unread'),
(4, 16, 'farmer,Keshani Perera submitted a request post2022/03/28', '2022-03-28', 'unread'),
(5, 16, 'farmer,Keshani Perera submitted a request post2022/03/28', '2022-03-28', 'unread'),
(6, 19, 'farmer,Thisuri Perera submitted a request post2022/03/28', '2022-03-28', 'unread'),
(7, 19, 'farmer,Thisuri Perera submitted a request post2022/03/28', '2022-03-28', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `moderatorfarmernotification`
--

CREATE TABLE `moderatorfarmernotification` (
  `notifID` int(11) NOT NULL,
  `farmerID` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `notifdate` date NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moderatorfarmernotification`
--

INSERT INTO `moderatorfarmernotification` (`notifID`, `farmerID`, `description`, `notifdate`, `status`) VALUES
(1, 3, 'farmer,Hirushika wickramarachchi submitted a stock2022/03/27', '2022-03-27', 'unread'),
(2, 3, 'farmer,Hirushika wickramarachchi submitted a stock2022/03/27', '2022-03-27', 'unread'),
(3, 3, 'farmer,Hirushika wickramarachchi submitted a stock2022/03/27', '2022-03-27', 'unread'),
(4, 3, 'farmer,Hirushika wickramarachchi submitted a stock2022/03/28', '2022-03-28', 'unread'),
(5, 3, 'farmer,Hirushika wickramarachchi submitted a stock2022/03/28', '2022-03-28', 'unread'),
(6, 11, 'farmer,Sandun Fernando submitted a stock2022/03/28', '2022-03-28', 'unread'),
(7, 11, 'farmer,Sandun Fernando submitted a stock2022/03/29', '2022-03-29', 'unread'),
(8, 11, 'farmer,Sandun Fernando submitted a stock2022/03/29', '2022-03-29', 'unread'),
(9, 18, 'farmer,Tharuka Rajapaksha submitted a stock2022/03/29', '2022-03-29', 'unread'),
(10, 18, 'farmer,Tharuka Rajapaksha submitted a stock2022/03/29', '2022-03-29', 'unread'),
(11, 18, 'farmer,Tharuka Rajapaksha submitted a stock2022/03/29', '2022-03-29', 'unread'),
(12, 18, 'farmer,Tharuka Rajapaksha submitted a stock2022/03/29', '2022-03-29', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `offerID` int(5) NOT NULL,
  `farmerID` int(5) NOT NULL,
  `RID` int(5) NOT NULL,
  `offerDescription` varchar(2000) DEFAULT NULL,
  `offerPrice` decimal(8,2) DEFAULT NULL,
  `offerStatus` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`offerID`, `farmerID`, `RID`, `offerDescription`, `offerPrice`, `offerStatus`) VALUES
(3, 11, 6, 'I would like to do transaction with you', '3000.00', 'pending'),
(4, 18, 9, 'we are glad to inform you that we are able to supply an offer for your request of potatoes', '4300.00', 'pending'),
(5, 18, 7, 'we are glad to offer you the requested stock of bananas for you, Keshani Perera', '2500.00', 'pending'),
(6, 11, 9, 'hi Keshani Perera. we are ready to offer you the mentioned request of potatoes', '4200.00', 'pending'),
(7, 11, 12, 'hi thisuri perera, we are glad to inform you that we are ready to do transaction with you', '1900.00', 'pending'),
(8, 11, 7, 'we can supply your request of 10 kilos of bananas', '2500.00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `offerorder`
--

CREATE TABLE `offerorder` (
  `offerOrderID` int(10) NOT NULL,
  `RID` int(10) DEFAULT NULL,
  `farmerID` int(10) DEFAULT NULL,
  `buyerID` int(10) DEFAULT NULL,
  `offerID` int(10) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `shippingAddress` varchar(200) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `orderDate` date DEFAULT NULL,
  `orderStatus` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offerorder`
--

INSERT INTO `offerorder` (`offerOrderID`, `RID`, `farmerID`, `buyerID`, `offerID`, `total`, `shippingAddress`, `province`, `district`, `orderDate`, `orderStatus`) VALUES
(2, 7, 18, 16, 5, '2500.00', 'Kadawatha', 'Western', ' Colombo', '2022-03-29', 'pending'),
(3, 9, 11, 16, 6, '4200.00', 'Matara', 'Western', ' Colombo', '2022-03-29', 'orderConfirmed');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `RID` int(10) NOT NULL,
  `buyerID` int(5) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `qty` int(5) DEFAULT NULL,
  `budget` int(5) NOT NULL,
  `reqStatus` varchar(10) DEFAULT NULL,
  `catID` int(255) NOT NULL,
  `reqDescription` varchar(5000) DEFAULT NULL,
  `expectedDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`RID`, `buyerID`, `title`, `qty`, `budget`, `reqStatus`, `catID`, `reqDescription`, `expectedDate`) VALUES
(6, 13, 'For retail purposes', 50, 2000, 'pending', 15, 'I hereby like to request 50 kg of potatoes within the mentioned date. Any respective buyer who would like to offer plz consider the request make an offer. Thank You', '2022-04-09'),
(7, 16, 'Need of a harvest of bananas', 10, 2900, 'approved', 19, 'I would like to request 10 kg of Bananas within the mentioned date. thank you', '2022-04-06'),
(8, 16, '1st Request', 12, 4000, 'approved', 15, 'i hereby request the mentioned stock of potatoes due in April.', '2022-04-02'),
(9, 16, 'My Request', 10, 4500, 'approved', 15, 'I need a 10kgs of potatoes due 2nd of April.', '2022-04-02'),
(10, 16, 'Request of Watermelon', 20, 4000, 'pending', 25, 'I am requesting a load of 20 kgs of watermelon due 18th of march', '2022-03-18'),
(11, 16, 'Retail purposes', 60, 3000, 'pending', 23, 'I would like to request 60 kg s of Pineapple due 3rd of April', '2022-04-03'),
(12, 19, 'My request', 30, 2000, 'approved', 23, 'I would like to request 30 kgs of Pineapple due 18th of march', '2022-03-18'),
(13, 19, 'Urgent', 50, 6500, 'pending', 11, 'I need 50kg s of Onions due 14th  of april', '2022-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewID` int(5) NOT NULL,
  `rating` decimal(2,1) DEFAULT NULL,
  `description` longtext,
  `farmerId` int(5) DEFAULT NULL,
  `buyerID` int(5) DEFAULT NULL,
  `reviewDate` date NOT NULL,
  `orderID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`reviewID`, `rating`, `description`, `farmerId`, `buyerID`, `reviewDate`, `orderID`) VALUES
(5, '5.0', 'quality product', 3, 7, '2022-03-27', 3),
(6, '5.0', 'good quality products', 11, 16, '2022-03-29', 6);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stockID` int(5) NOT NULL,
  `farmerID` int(5) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `harvestDate` date NOT NULL,
  `expireDate` date DEFAULT NULL,
  `catID` int(5) NOT NULL,
  `qty` int(5) DEFAULT NULL,
  `image` longtext NOT NULL,
  `fixedPrice` decimal(8,2) DEFAULT NULL,
  `minBidPrice` decimal(8,2) DEFAULT NULL,
  `stockStatus` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stockID`, `farmerID`, `title`, `description`, `harvestDate`, `expireDate`, `catID`, `qty`, `image`, `fixedPrice`, `minBidPrice`, `stockStatus`) VALUES
(24, 11, 'fresh tomatoes', 'This is my freshest harvest in April. hurry to grab it with a reasonable price', '2022-04-08', '2022-04-12', 12, 30, 'istockphoto-1258142863-170667a.jpg', '5000.00', '4000.00', 'pending'),
(25, 11, 'Onions', 'I hereby like to post my freshest harvest for very reasonable price. hurry to grab', '2022-03-28', '2022-04-04', 11, 65, 'download.png', '4500.00', '4000.00', 'pending'),
(26, 17, 'KIWI fruits', 'The ripest kiwis from the area now at your virtual market, hurry to grab...', '2022-03-30', '2022-04-06', 24, 15, 'kiwi.jpg', '2600.00', '2000.00', 'pending'),
(27, 11, 'Carrots', 'I hereby like to post my freshest harvest for very reasonable price. hurry to grab', '2022-03-28', '2022-03-31', 6, 55, 'carrot1.png', '6500.00', '5000.00', 'pending'),
(28, 11, 'Fresh Carrots', 'I hereby like to post my freshest harvest for very reasonable price. hurry to grab', '2022-03-23', '2022-03-30', 6, 85, 'carrot1.png', '6000.00', '5000.00', 'approved'),
(29, 20, 'Fresh Eggplants', 'I hereby like to post my freshest harvest for very reasonable price. hurry to grab', '2022-04-08', '2022-04-09', 10, 35, 'eggplant.png', '4520.00', '3000.00', 'approved'),
(30, 11, 'Carrots', 'This is my freshest harvest of carrots', '2022-03-17', '2022-03-24', 6, 50, 'carrot2.png', '6000.00', '5000.00', 'pending'),
(31, 11, 'Yellow bananas', 'Fresh organic bananas from the april harvest for a handsome price', '2022-03-28', '2022-04-04', 6, 30, 'banana1.png', '3200.00', '3000.00', 'approved'),
(32, 11, 'ripe banana', 'organic ripen bananas for a reasonable price from us', '2022-03-26', '2022-04-02', 19, 11, 'banana3.png', '3500.00', '3000.00', 'approved'),
(33, 18, 'fresh bananas', 'Freshest bananas', '2022-04-15', '2022-04-27', 19, 50, 'banana2.png', '5000.00', '4000.00', 'approved'),
(34, 18, 'red apples', 'apple a day will keep your doctor away..', '2022-04-02', '2022-04-09', 18, 20, 'apple.png', '4500.00', '2500.00', 'approved'),
(35, 18, 'ripen apples', 'freshest organic harvest for you', '2022-04-06', '2022-04-12', 18, 30, 'apple1.png', '6300.00', '5000.00', 'approved'),
(36, 18, 'juicy watermelons', 'the best watermelons of the area are from us', '2022-04-01', '2022-04-05', 25, 80, 'wmelon.png', '6000.00', '4500.00', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `stockorder`
--

CREATE TABLE `stockorder` (
  `orderID` int(100) NOT NULL,
  `stockID` int(10) NOT NULL,
  `farmerID` int(10) NOT NULL,
  `buyerID` int(10) NOT NULL,
  `orderQty` int(10) NOT NULL,
  `Total` decimal(10,0) NOT NULL,
  `shippingAddress` varchar(255) NOT NULL,
  `province` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `orderDate` date NOT NULL,
  `orderStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockorder`
--

INSERT INTO `stockorder` (`orderID`, `stockID`, `farmerID`, `buyerID`, `orderQty`, `Total`, `shippingAddress`, `province`, `district`, `orderDate`, `orderStatus`) VALUES
(6, 28, 11, 16, 10, '60000', 'Wennappuwa', 'Southern', 'Galle', '2022-03-29', 'completed'),
(7, 28, 11, 16, 12, '72000', 'Wennappuwa', 'Western', ' Colombo', '2022-03-29', 'pending'),
(8, 28, 11, 16, 11, '66000', 'Wennappuwa', 'Western', ' Colombo', '2022-03-29', 'orderShipped');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `NIC` (`NIC`);

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`bidID`),
  ADD KEY `buyerID` (`buyerID`),
  ADD KEY `stockID` (`stockID`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`buyerID`),
  ADD UNIQUE KEY `NIC` (`NIC`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `buyercomplain`
--
ALTER TABLE `buyercomplain`
  ADD KEY `farmerID` (`farmerID`),
  ADD KEY `buyerID` (`buyerID`);

--
-- Indexes for table `buyernotification`
--
ALTER TABLE `buyernotification`
  ADD PRIMARY KEY (`notifID`),
  ADD KEY `buyerID` (`buyerID`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `deliveryareas`
--
ALTER TABLE `deliveryareas`
  ADD KEY `deliveryPersonID` (`deliveryPersonID`);

--
-- Indexes for table `deliverynotification`
--
ALTER TABLE `deliverynotification`
  ADD PRIMARY KEY (`notifID`),
  ADD KEY `deliveryPersonID` (`deliveryPersonID`);

--
-- Indexes for table `deliveryorder`
--
ALTER TABLE `deliveryorder`
  ADD PRIMARY KEY (`deliveryOrderID`),
  ADD KEY `deliveryPersonID` (`deliveryPersonID`),
  ADD KEY `farmerID` (`farmerID`),
  ADD KEY `orderID` (`orderID`);

--
-- Indexes for table `deliveryperson`
--
ALTER TABLE `deliveryperson`
  ADD PRIMARY KEY (`deliveryPersonID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `deliverypersoncatagories`
--
ALTER TABLE `deliverypersoncatagories`
  ADD KEY `deliveryPersonID` (`deliveryPersonID`),
  ADD KEY `catID` (`catID`);

--
-- Indexes for table `deliveryvehicles`
--
ALTER TABLE `deliveryvehicles`
  ADD KEY `deliveryPersonID` (`deliveryPersonID`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`farmerID`),
  ADD UNIQUE KEY `NIC` (`NIC`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `farmercomplain`
--
ALTER TABLE `farmercomplain`
  ADD KEY `farmerID` (`farmerID`),
  ADD KEY `buyerID` (`buyerID`);

--
-- Indexes for table `farmernotification`
--
ALTER TABLE `farmernotification`
  ADD PRIMARY KEY (`notifID`),
  ADD KEY `farmerID` (`farmerID`);

--
-- Indexes for table `moderator`
--
ALTER TABLE `moderator`
  ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `moderatorbuyernotification`
--
ALTER TABLE `moderatorbuyernotification`
  ADD PRIMARY KEY (`notifID`),
  ADD KEY `buyerID` (`buyerID`);

--
-- Indexes for table `moderatorfarmernotification`
--
ALTER TABLE `moderatorfarmernotification`
  ADD PRIMARY KEY (`notifID`),
  ADD KEY `farmerID` (`farmerID`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offerID`),
  ADD KEY `farmerID` (`farmerID`),
  ADD KEY `RID` (`RID`);

--
-- Indexes for table `offerorder`
--
ALTER TABLE `offerorder`
  ADD PRIMARY KEY (`offerOrderID`),
  ADD KEY `RID` (`RID`),
  ADD KEY `farmerID` (`farmerID`),
  ADD KEY `buyerID` (`buyerID`),
  ADD KEY `offerID` (`offerID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`RID`),
  ADD KEY `buyerID` (`buyerID`),
  ADD KEY `catID` (`catID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewID`),
  ADD UNIQUE KEY `orderID` (`orderID`),
  ADD UNIQUE KEY `orderID_3` (`orderID`),
  ADD KEY `farmerId` (`farmerId`),
  ADD KEY `buyerID` (`buyerID`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stockID`),
  ADD KEY `farmerID` (`farmerID`),
  ADD KEY `catID` (`catID`);

--
-- Indexes for table `stockorder`
--
ALTER TABLE `stockorder`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `stockID` (`stockID`),
  ADD KEY `farmerID` (`farmerID`),
  ADD KEY `buyerID` (`buyerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `buyerID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `buyernotification`
--
ALTER TABLE `buyernotification`
  MODIFY `notifID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `catID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `deliveryorder`
--
ALTER TABLE `deliveryorder`
  MODIFY `deliveryOrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deliveryperson`
--
ALTER TABLE `deliveryperson`
  MODIFY `deliveryPersonID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `farmerID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `farmernotification`
--
ALTER TABLE `farmernotification`
  MODIFY `notifID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `moderator`
--
ALTER TABLE `moderator`
  MODIFY `MID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `moderatorbuyernotification`
--
ALTER TABLE `moderatorbuyernotification`
  MODIFY `notifID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `moderatorfarmernotification`
--
ALTER TABLE `moderatorfarmernotification`
  MODIFY `notifID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `offerID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `offerorder`
--
ALTER TABLE `offerorder`
  MODIFY `offerOrderID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `RID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stockID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `stockorder`
--
ALTER TABLE `stockorder`
  MODIFY `orderID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bid`
--
ALTER TABLE `bid`
  ADD CONSTRAINT `bid_ibfk_1` FOREIGN KEY (`buyerID`) REFERENCES `buyer` (`buyerID`),
  ADD CONSTRAINT `bid_ibfk_2` FOREIGN KEY (`stockID`) REFERENCES `stock` (`stockID`);

--
-- Constraints for table `buyercomplain`
--
ALTER TABLE `buyercomplain`
  ADD CONSTRAINT `buyercomplain_ibfk_1` FOREIGN KEY (`farmerID`) REFERENCES `farmer` (`farmerID`),
  ADD CONSTRAINT `buyercomplain_ibfk_2` FOREIGN KEY (`buyerID`) REFERENCES `buyer` (`buyerID`);

--
-- Constraints for table `deliveryareas`
--
ALTER TABLE `deliveryareas`
  ADD CONSTRAINT `deliveryareas_ibfk_1` FOREIGN KEY (`deliveryPersonID`) REFERENCES `deliveryperson` (`deliveryPersonID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `deliverynotification`
--
ALTER TABLE `deliverynotification`
  ADD CONSTRAINT `deliverynotification_ibfk_1` FOREIGN KEY (`deliveryPersonID`) REFERENCES `deliveryperson` (`deliveryPersonID`);

--
-- Constraints for table `farmercomplain`
--
ALTER TABLE `farmercomplain`
  ADD CONSTRAINT `farmercomplain_ibfk_1` FOREIGN KEY (`farmerID`) REFERENCES `farmer` (`farmerID`),
  ADD CONSTRAINT `farmercomplain_ibfk_2` FOREIGN KEY (`buyerID`) REFERENCES `buyer` (`buyerID`);

--
-- Constraints for table `offer`
--
ALTER TABLE `offer`
  ADD CONSTRAINT `offer_ibfk_1` FOREIGN KEY (`farmerID`) REFERENCES `farmer` (`farmerID`),
  ADD CONSTRAINT `offer_ibfk_2` FOREIGN KEY (`RID`) REFERENCES `request` (`RID`);

--
-- Constraints for table `offerorder`
--
ALTER TABLE `offerorder`
  ADD CONSTRAINT `offerorder_ibfk_1` FOREIGN KEY (`RID`) REFERENCES `request` (`RID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `offerorder_ibfk_2` FOREIGN KEY (`farmerID`) REFERENCES `farmer` (`farmerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `offerorder_ibfk_3` FOREIGN KEY (`buyerID`) REFERENCES `buyer` (`buyerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `offerorder_ibfk_4` FOREIGN KEY (`offerID`) REFERENCES `offer` (`offerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`buyerID`) REFERENCES `buyer` (`buyerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`catID`) REFERENCES `catagory` (`catID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`farmerID`) REFERENCES `farmer` (`farmerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stock_ibfk_2` FOREIGN KEY (`catID`) REFERENCES `catagory` (`catID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stockorder`
--
ALTER TABLE `stockorder`
  ADD CONSTRAINT `stockorder_ibfk_1` FOREIGN KEY (`stockID`) REFERENCES `stock` (`stockID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stockorder_ibfk_2` FOREIGN KEY (`farmerID`) REFERENCES `farmer` (`farmerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stockorder_ibfk_3` FOREIGN KEY (`buyerID`) REFERENCES `buyer` (`buyerID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
