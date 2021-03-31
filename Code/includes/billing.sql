-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 30, 2021 at 10:49 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `billing`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Select Category 1'),
(2, 'Select Category 2'),
(3, 'Steels'),
(4, 'plastics'),
(5, 'stationaries'),
(6, 'Furnitures');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `firstname` varchar(11) NOT NULL,
  `lastname` varchar(11) NOT NULL,
  `email` varchar(33) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `company` varchar(40) NOT NULL,
  `display_name` varchar(40) NOT NULL,
  `website` varchar(40) NOT NULL,
  `other` varchar(40) NOT NULL,
  `gst_in` varchar(33) NOT NULL,
  `address` varchar(40) NOT NULL,
  `notes` varchar(40) NOT NULL,
  `tax_info` varchar(40) NOT NULL,
  `payment_and_billing` varchar(40) NOT NULL,
  `attachments` varchar(50) NOT NULL,
  `pan_no` varchar(20) NOT NULL,
  `adhaar_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `firstname`, `lastname`, `email`, `phone`, `company`, `display_name`, `website`, `other`, `gst_in`, `address`, `notes`, `tax_info`, `payment_and_billing`, `attachments`, `pan_no`, `adhaar_no`) VALUES
(1, 'Ram', 'kumar', 'kumar@gmail.com', '9456312785', '', '', '', '', '', 'Address', '784596', '', '80,000', '', 'dxy45623789', '78945132368'),
(2, 'Ram', 'kumar', 'kumar@gmail.com', '9456312785', 'company', 'company', 'company@company.in', '', '', 'Address', '', '', '15,000', '', '', ''),
(3, 'Reshma', 'dharshini', 'reshma@gmail.com', 'xxxxxxxxxx', '', '', '', '', '', 'Address', '', '', '65,000', '', '', ''),
(4, 'John', 'brito', 'brito20@gmail.com', 'xxxxxxxxxx', '', '', '', '', '', 'Address', '', '', '60,500', '', '', ''),
(5, 'Priya ', 'ram', 'ram@gmail.com', 'xxxxxxxxxx', '', '', '', '', '', 'Address 6', '', '', '70,850', '', '', ''),
(6, 'Reshma', 'kumar', 'reshma@gmail.com', 'xxxxxxxxxx', 'company', 'company', 'company@company.in', 'none', '', 'Address', '4,00,000', '', '15,000', 'none', 'dxy45623789', '78945132368'),
(7, 'Priya ', 'dharshini', 'priya@gmail.com', 'xxxxxxxxxx', 'company', 'company', 'company@company.in', 'none', '', 'Address', '3,20,000', '', '80,000', 'none', 'dxy45623789', '78945132368'),
(8, 'Reshma', 'dharshini', 'dharshini@gmail.com', 'xxxxxxxxxx', 'company', 'company', 'company@company.in', 'none', '', 'Address', '4,00,000', '', '15,000', 'none', 'DYX45623789', '78945132365'),
(9, 'test', 'name', 'test@gmail.com', 'xxxxxxxxxx', 'company', 'company', 'company@company.in', 'none', '', 'Address 8', '784596', '', '50,000', 'none', 'DYX45623789', '78945132365'),
(13, 'Reshma', 'dharshini', 'brito@gmail.com', 'xxxxxxxxxx', 'company', 'company', 'company@company.in', 'none', 'xxxxxxxx', 'adress', '784596', '', '50,000', '', '', ''),
(14, 'Ram', 'dharshini', 'brito20@gmail.com', '9456312785', 'company', 'company', 'company@company.in', 'none', 'xxxxxxxx', 'address', '784596', '', '50,000', 'none', 'dxy45623789', '78945132365'),
(15, 'Ram', 'kumar', 'bri@gmail.com', 'xxxxxxxxxx', 'company', 'company', 'www.company@company.in', 'none', 'xxxxxxxx', 'address', '784596', '', '50,000', 'none', 'dxy45623789', 'xxxxxxxx');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_no` int(11) NOT NULL,
  `invoice_date` date NOT NULL,
  `customer_name` varchar(33) NOT NULL,
  `number_of_items` int(33) NOT NULL,
  `round_total` decimal(50,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_no`, `invoice_date`, `customer_name`, `number_of_items`, `round_total`) VALUES
(1, '2020-07-16', 'company name', 6, '7560');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_category_id` int(11) NOT NULL,
  `post_title` varchar(33) NOT NULL,
  `post_author` varchar(33) NOT NULL,
  `post_image` varchar(33) NOT NULL,
  `post_status` varchar(33) NOT NULL,
  `post_tags` varchar(33) NOT NULL,
  `post_date` date NOT NULL,
  `post_content` varchar(225) NOT NULL,
  `post_comment_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `barcode_no` text NOT NULL,
  `product_name` varchar(33) NOT NULL,
  `product_category` varchar(33) NOT NULL,
  `product_type` varchar(33) NOT NULL,
  `product_cost` varchar(30) NOT NULL,
  `quantity` int(33) NOT NULL,
  `supplier` varchar(33) NOT NULL,
  `onhand_qty` int(33) NOT NULL,
  `expiry_date` date NOT NULL,
  `date_arrival` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `barcode_no`, `product_name`, `product_category`, `product_type`, `product_cost`, `quantity`, `supplier`, `onhand_qty`, `expiry_date`, `date_arrival`) VALUES
(1, 'barcode.png', 'pen', 'plastics', 'Plastic', '5', 100, 'Arun', 50, '2021-01-20', '2021-07-30'),
(2, 'barcode.png', 'laptop', 'plastics', 'Plastic', '40,000', 60, 'Aravindh', 30, '2021-07-16', '2020-03-25'),
(3, 'barcode.png', 'laptop', 'stationaries', 'Plastic', '40,000', 60, 'Aravindh', 30, '2022-03-12', '2020-10-14'),
(4, 'barcode.png', 'computer', 'Steels', 'Plastic', '90,000', 40, 'Arun', 20, '2021-10-22', '2020-10-22'),
(5, 'barcode.png', 'computer', 'plastics', 'Plastic', '40,000', 60, 'Aravindh', 20, '2021-08-28', '2020-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` int(11) NOT NULL,
  `firstname` varchar(11) NOT NULL,
  `lastname` varchar(11) NOT NULL,
  `email` varchar(33) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `company` varchar(40) NOT NULL,
  `display_name` varchar(33) NOT NULL,
  `website` varchar(40) NOT NULL,
  `other` varchar(33) NOT NULL,
  `gst_in` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `notes` varchar(40) NOT NULL,
  `tax_info` varchar(30) NOT NULL,
  `payment_and_billing` varchar(35) NOT NULL,
  `attachments` varchar(50) NOT NULL,
  `pan_no` varchar(25) NOT NULL,
  `adhaar_no` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `firstname`, `lastname`, `email`, `phone`, `company`, `display_name`, `website`, `other`, `gst_in`, `address`, `notes`, `tax_info`, `payment_and_billing`, `attachments`, `pan_no`, `adhaar_no`) VALUES
(1, 'R.Ramya', 'sri', 'sri16@gmail.com', 'XXXXXXXXX', 'company', 'company name', 'XXXXXXXXX', 'other', 'gst no', 'address', 'add notes', 'tax details', 'payment details', 'Add attachments', 'XXXXXXXXXXXX', 'XXXXXXXXXXXX'),
(2, 'Aruna', 'sri', 'kumar@gmail.com', 'xxxxxxxxxx', 'company', 'company', 'website', 'none', 'xxxxxxxx', 'same', '3,20,000', '', '50,000', 'none', 'DYX45623789', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(40) NOT NULL,
  `user_lastname` varchar(40) NOT NULL,
  `user_phone` varchar(50) NOT NULL,
  `user_role` varchar(33) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_password` varchar(33) NOT NULL,
  `user_confirmpassword` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `user_phone`, `user_role`, `user_email`, `user_password`, `user_confirmpassword`) VALUES
(1, 'John', 'Brito', '+91 9631245626', 'admin', 'brito20@gmail.com', '1234', '1234'),
(109, 'Aarthi', 'ram', '9876543257', 'user', 'aarthi@gmail.com', 'Fruits@2020', 'Fruits@2020'),
(111, 'Ramya', 'srm', '9876543257', 'customer', 'ramya@gmail.com', 'Hide20&seek', 'Hide20&seek'),
(112, 'Surjith', 'RS', 'xxxxxxxxxx', 'user', 'surjithrs@gmail.com', 'Fruits@123', 'Fruits@123'),
(113, 'ammu', 'name', 'xxxxxxxxxx', 'supplier', 'balu@gmail.com', 'spider', 'spider'),
(114, 'Balu', 'ram', 'xxxxxxxxxx', 'user', 'arul12@gmail.com', 'fruits', 'fruits'),
(123, 'Reshma', 'raj', '9563124585', 'user', 'reshma@gmail.com', 'Carrom@123', 'Carrom@123'),
(124, 'Balu', 'ram', '9876543257', 'customer', 'arul12@gmail.com', '1236', '1236'),
(125, 'Priya', 'dharshini', 'xxxxxxxxxx', 'customer', 'priya@gmail.com', 'chocalate', 'chocalate'),
(126, 'Hari', 'ram', 'xxxxxxxxxx', 'customer', 'arul12@gmail.com', '4236', '4236'),
(127, 'Hari', 'ram', 'xxxxxxxxxx', 'supplier', 'hari123@gmail', '4563', '4563'),
(128, 'supplier2', 'srm', 'xxxxxxxxxx', 'supplier', 'supplier@gmail.com', '7456', '7456'),
(129, 'Hari', 'ram', 'xxxxxxxxxx', 'customer', 'hari123@gmail', '423', '569');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_no`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
