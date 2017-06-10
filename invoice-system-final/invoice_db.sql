-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2017 at 02:47 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invoice_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `name`, `price`) VALUES
(1, 'Chicken on Toast', '385'),
(2, 'Prawn on Toast', '385'),
(5, 'Special Chicken/Prawn Ball', '385'),
(6, 'Fried Wanthon', '330'),
(7, 'Spring Roll', '320'),
(8, 'French Fry', '180'),
(9, 'Rahmania Special Salade', '460'),
(10, 'Chicken Cashewunt Salade', '400'),
(11, ' Chicken Prawn Cashewunt Salad', '400'),
(12, 'Green Salad', '160'),
(13, 'Rahmania Special Soup', '440'),
(14, 'Chicken corn Soup', '300'),
(15, 'Special Chicken corn Soup', '330'),
(16, 'Thai Soup', '385'),
(17, 'Special Thai Soup with Mushroom', '450'),
(18, 'Thai Soup(clear)', '490'),
(19, 'Chicken vegetable Soup', '340'),
(20, 'Onion Soup', '385'),
(21, 'Wonthon Noodles Soup', '390'),
(22, 'Hot and Sour Soup', '310'),
(23, 'Spicy Beef Noodles Soup', '400'),
(24, 'Rahmania Special Noodles', '420'),
(25, 'Singapure Noodles', '300'),
(26, 'Chicken Noodles', '300'),
(27, 'Vegetable Noodles', '300'),
(28, 'American Chopsusey', '360'),
(29, 'Rahmania Special Fried Rice', '480'),
(30, 'Fried Rice with Chicken/Prawn/beef', '330'),
(31, 'Egg Fried Rice', '290'),
(32, 'Vegetable Fried Rice', '290'),
(33, 'Ginger Chicken Pried Rich', '400'),
(34, 'Steamed Rice', '140'),
(35, 'Fried Chicken', '365'),
(36, 'Chicken Masala', '380'),
(37, 'Chicken Chilhi Onion', '380'),
(38, 'Rahmania Spacial Fried Chicken', '470'),
(39, 'Sweet and Sour Chicken', '390'),
(40, 'Chicken Chilli(Dry)', '410'),
(41, 'Monchurian Chicken', '400'),
(42, 'Peaking Style Chicken', '440'),
(43, 'Sizzling Chicken', '460'),
(44, 'Beef Masala', '390'),
(45, 'Beef Chilli Onion', '390'),
(46, 'Beef Chilli(Dry)', '360'),
(47, 'Sizzling Beef', '490'),
(48, 'Mangolian Beef', '470'),
(49, 'Mandarin Fish', '370'),
(50, 'Sweet And Sour Fish', '440'),
(51, 'Sweet And Sour Prawn', '460'),
(52, 'Prawn Masala', '450'),
(53, 'Prawn Chilli Onion', '460'),
(54, 'Peaking Style Prawn', '490'),
(55, 'Manchurian Prawn', '490'),
(56, 'Prawn With Garlic Saues', '490'),
(57, 'Sizzling Prawn', '490'),
(58, 'King Prawn', '750'),
(59, 'Chicken With Mixed Vegetable', '270'),
(60, 'Prawn With Mixed Vegetable', '290'),
(61, 'Beef With Mixed Vegetable', '280'),
(62, 'Mixed Vegetable', '260'),
(63, 'Sze-Chuan Salad', '450'),
(64, 'Sze-Chuan Soup', '410'),
(65, 'Sze-Chuan Fried Rich', '370'),
(66, 'American Fried Rich', '420'),
(67, 'Sze-Chuan Chicken', '410'),
(68, 'Sze-Chuan Prawn', '460'),
(69, 'Sze-Chuan Beef', '450'),
(70, 'Fish Cake', '420'),
(71, 'Fish Finger with French Fry', '410'),
(72, 'Chicken Satay', '350'),
(73, 'Hot Butter Catlle Fish', '450'),
(74, 'Lab Gai Salad', '400'),
(75, 'Sea Food Salad/Papaya Salad', '450'),
(76, 'Tom Yam Goong Soup(Prawh and Mushroom)', '490'),
(77, 'Tom Yam Goong Soup(Chicken and Mushroom)', '490'),
(78, 'Tom Yam Goong Soup(Chicken, Prawh and Mushroom)', '510'),
(79, 'Clear Mixed Soup in Hot Pot (Chicken/Prawh/Cattle)', '520'),
(80, 'Sea Food Soup wih Coconut milk ', '540'),
(81, 'King Prawm Soup', '750'),
(82, 'Gravy Noodles Pattai', '460'),
(83, 'Mixed paid Thai(Chcken/Prawn/Beef)', '480'),
(84, ' Chicken Prawn Cashewunt Salad', '450'),
(85, 'Fried Rich(Chicken/Prawn/Beef)', '450'),
(86, 'Basil Leaf Fried Rice', '450'),
(87, 'Mixed vagetable Fried Rice', '400'),
(88, 'Mixed Fried Rice', '450'),
(89, 'Fride Chicken(Chicken Wrapped in Paper)', '480'),
(90, 'Grilled Whole Chiclen', '520'),
(91, 'Sweet and Sour Slice Chicken', '440'),
(92, 'Chicken with Garlic Sauce', '420'),
(93, 'Sliced Chicken with Ginger and Mushroom', '430'),
(94, 'Diced Fride Chicken with Green  Chilli', '460'),
(95, 'Chicken With Cashewnut', '490\r\n'),
(96, 'Chicken in Red Curry', '490'),
(97, 'Chicken in Green Curry', '490'),
(98, 'Chicken With Basil Leaf', '450'),
(99, 'Lemon Chicken', '490'),
(100, 'Kung Pao', '475'),
(101, 'Flaming  Chicken in Foil Paper', '560'),
(102, 'Beef Green Chilli', '450'),
(103, 'Beef with Oyster Sauce', '420'),
(104, 'Beef With ginger & Mushroom', '450'),
(105, 'Beef With Basil Leaf', '460'),
(106, 'Beef Red Curry with Coconut Milk', '530'),
(107, 'Sherdded Beef', '490'),
(108, 'Hot Sauch Prawn', '440'),
(109, 'Prawn Chilli Pest', '480'),
(110, 'Prawn With Green Chilli', '440'),
(111, 'Prawn With Cashewnut', '480'),
(112, 'Shell Prawn With Curry Powder', '690'),
(113, 'King Prawn With Garlic Sauce', '790'),
(114, 'Spicy Labster(Per 100gm)', '440'),
(115, 'Fried Pomfret', '510'),
(116, 'Spicy Pomfret', '530'),
(117, 'Sweet & Sour Fish', '440'),
(118, 'Fried Red Snapper With Hot Sauce(100gm)', '250'),
(119, 'Fried/Steamed Red Snapper(100gm)', '250'),
(120, 'Steamed Pomfret(Mushroom & Ginger)', '730'),
(121, 'Chicken Prawn Mixed Vegetablie', '380'),
(122, 'Mixed Vegetablie', '380'),
(123, 'Stri Fry Vegetablie', '375'),
(124, 'Mixed Sea Food Curry', '440'),
(125, 'Steamed Crab', '420'),
(126, 'Grilled Crab', '440'),
(127, 'Cattle Fish With Garlic Sauce', '440'),
(128, 'Grilled Calamari', '440'),
(129, 'Soft Drinks', '30'),
(130, 'Mineral Water(Big)', '40'),
(131, 'Mineral Water(Small)', '20'),
(132, 'Diet can', '70'),
(133, 'Ice Cream(Per Cup)', '160'),
(134, 'Fresh Juice', '120'),
(135, 'Milk Shake', '100'),
(136, 'Banana Shake', '100'),
(137, 'M/x Furelu Salah', '120'),
(138, 'Pudding', '60'),
(139, 'Firni', '30'),
(140, 'Fruits Cocktail With Ice Cream', '200'),
(141, 'Lassi(Sweet/Salt)', '100'),
(142, 'Coffee', '80'),
(143, 'Raw Tea', '20'),
(144, 'Rice', '50'),
(145, 'Mixed vegetable', '50'),
(146, 'Chingri Corla Vazi', '50'),
(147, 'Chingri Lal Shak', '50'),
(148, 'Chingri Pui Shak', '50'),
(149, 'Palong Shak', '50'),
(150, 'Taki Macher Vorta', '50'),
(151, 'Chingri Macher Vorta', '50'),
(152, 'Taki Macher Vorta', '50'),
(153, 'Kala Vorta', '30'),
(154, 'Thankuni Pata Vorta', '30'),
(155, 'Tomato Vorta', '30'),
(156, 'Dal Vorta', '30'),
(157, 'Sim Vorta', '30'),
(158, 'Shorisa Ilish', '400'),
(159, 'Ilish Fry', '400'),
(160, 'Chitol Fish', '250'),
(161, 'Boyal Fish', '300'),
(162, 'Arai Fish', '300'),
(163, 'Pabda Fish', '350'),
(164, 'Rui Fish/Fry/Curry', '250'),
(165, 'Rupchada Fish/Fry/Curry', '510'),
(166, 'Chingri Fish', '250'),
(167, 'Bain Fish', '200'),
(168, 'Mola Fish', '210'),
(169, 'Batashi Fish', '250'),
(170, 'Kajli Fish', '250'),
(171, 'Murgir Zal Fry', '160'),
(172, 'Murgir Rost', '200'),
(173, 'Gorur Vuna', '200'),
(174, 'Patla Dal', '50'),
(175, 'Dal ChorChori', '60'),
(176, 'Rahmania Family Nan', '150'),
(177, 'Butter Nan', '50'),
(178, 'Plane Nan', '40'),
(179, 'Rasmi Nan', '100'),
(180, 'Garlik Nan', '80'),
(181, 'Fish Nan', '100'),
(182, 'Chikan Nan', '100'),
(183, 'Beef Boti Kabab', '150'),
(184, 'Matton Boti Kabab', '180'),
(185, 'Chicken Tikka', '200'),
(186, 'Chicken Rasmi', '200'),
(187, 'Tanduri Pom frade', '510'),
(188, 'Tanduri Chicken', '300'),
(189, 'Special Chicken Briani', '150'),
(190, 'Special Cacci Briani', '180'),
(191, 'Ruti/Parota', '20'),
(192, 'Dal/vaze', '40'),
(193, 'Dim Fry', '40'),
(194, 'Parota', '20'),
(195, 'Dim Omlat', '40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderdetail`
--

CREATE TABLE `tbl_orderdetail` (
  `id` int(25) NOT NULL,
  `order_id` int(25) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `discount` int(11) NOT NULL,
  `vat` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orderdetail`
--
ALTER TABLE `tbl_orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_orderdetail`
--
ALTER TABLE `tbl_orderdetail`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
