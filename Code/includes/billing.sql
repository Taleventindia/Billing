-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Apr 13, 2021 at 10:16 AM
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
(6, 'Furnitures'),
(7, 'Wooden'),
(8, 'Category 8'),
(9, 'Category 9'),
(10, 'Category 10');

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
  `comments` varchar(40) NOT NULL,
  `tax_info` varchar(40) NOT NULL,
  `amount_paid` varchar(30) NOT NULL,
  `amount_pending` varchar(30) NOT NULL,
  `payment_mode` varchar(30) NOT NULL,
  `payment_status` varchar(30) NOT NULL,
  `attachments` varchar(50) NOT NULL,
  `pan_no` varchar(20) NOT NULL,
  `adhaar_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `firstname`, `lastname`, `email`, `phone`, `company`, `display_name`, `website`, `other`, `gst_in`, `address`, `comments`, `tax_info`, `amount_paid`, `amount_pending`, `payment_mode`, `payment_status`, `attachments`, `pan_no`, `adhaar_no`) VALUES
(1, 'Ram', 'kumar', 'kumar@gmail.com', '9456312785', '', '', '', '', '', 'Address', 'comments', '78,456', '80,000', 'none', 'Card', 'Paid', '', 'dxy45623789', '78945132368'),
(2, 'Ram', 'kumar', 'kumar@gmail.com', '9456312785', 'company', 'company', 'company@company.in', '', '', 'Address', 'comments', '', '15,000', '20,000', 'Cash', 'Partially Paid', '', '', ''),
(3, 'Reshma', 'dharshini', 'reshma@gmail.com', 'xxxxxxxxxx', '', '', '', '', '', 'Address', 'comments', '', '65,000', 'none', 'Card', 'Paid', '', '', ''),
(4, 'John', 'brito', 'brito20@gmail.com', 'xxxxxxxxxx', '', '', '', '', '', 'Address', 'comments', '', '60,500', 'none', 'Cash', 'Paid', '', '', ''),
(5, 'Priya ', 'ram', 'ram@gmail.com', 'xxxxxxxxxx', '', '', '', '', '', 'Address 6', 'comments', '', '70,850', 'none', 'Card', 'Paid', '', '', ''),
(6, 'Reshma', 'kumar', 'reshma@gmail.com', 'xxxxxxxxxx', 'company', 'company', 'company@company.in', 'none', '', 'Address', 'none', '4,00,000', '15,000', '', '', 'none', 'none', 'dxy45623789', '78945132368'),
(7, 'Priya ', 'dharshini', 'priya@gmail.com', 'xxxxxxxxxx', 'company', 'company', 'company@company.in', 'none', '', 'Address', 'comments', '3,20,000', '80,000', '', '', 'none', 'none', 'dxy45623789', '78945132368'),
(8, 'Reshma', 'dharshini', 'dharshini@gmail.com', 'xxxxxxxxxx', 'company', 'company', 'company@company.in', 'none', '', 'Address', 'none', '4,00,000', '15,000', '', '', 'none', 'none', 'DYX45623789', '78945132365'),
(9, 'test', 'name', 'test@gmail.com', 'xxxxxxxxxx', 'company', 'company', 'company@company.in', 'none', '', 'Address 8', 'none', '785642', '50,000', '', '', 'none', 'none', 'DYX45623789', '78945132365'),
(13, 'Reshma', 'dharshini', 'brito@gmail.com', 'xxxxxxxxxx', 'company', 'company', 'company@company.in', 'none', 'xxxxxxxx', 'Address', 'none', '50,000', '50,000', '', '', 'none', '', '', ''),
(15, 'Ram', 'kumar', 'bri@gmail.com', 'xxxxxxxxxx', 'company', 'company', 'www.company@company.in', 'none', 'xxxxxxxx', 'address', 'none', '43,000', '50,000', '', '', 'none', 'none', 'dxy45623789', 'xxxxxxxx'),
(16, 'Ram', 'kumar', 'ram@gmail.com', 'xxxxxxxxxx', '', '', '', '', '', 'Address', '', '', '80,000', '', '', 'none', '', '', ''),
(17, 'Aruna', 'Arumugam', 'aruna@gmail.com', 'xxxxxxxxxx', '', '', '', '', '', 'Address', '', '', '15,000', '', '', 'none', '', '', ''),
(18, 'Ram', 'name', 'aarthi@gmail.com', '9456312785', 'company', 'company', 'company@company.in', 'none', 'xxxxxxxx', 'Address', 'test notes', 'none', '60,500', '', '', 'none', 'none', 'DYX45623789', '7894513236'),
(19, 'John', 'vijay', 'john@gmail.com', 'xxxxxxxxxx', 'company', 'company', 'www.company@company.in', 'none', 'xxxxxxxx', 'address', 'notes', 'none', '65,000', '', '', 'none', 'none', 'DYX45623789', 'xxxxxxxx'),
(20, 'John', 'dharshan', 'dharshan@gmail.com', 'xxxxxxxxxx', 'company', 'company', 'company@company.in', 'none', 'xxxxxxxx', 'address', 'notes', 'none', '15,000', 'none', 'cash', 'Paid', 'none', 'DYX45623789', 'xxxxxxxx'),
(21, 'Nandhini', 'sundar', 'nandhini@gmail.com', 'xxxxxxxxxx', 'company', 'company', 'www.company@company.in', 'none', 'xxxxxxxx', 'Address', 'test comments', 'none', '40,000', '20,000', 'cash', 'Partially Paid', 'none', 'DYX45623789', 'xxxxxxxx'),
(22, 'Dharshan', 'kumar', 'dharshan@gmail.com', 'xxxxxxxxxx', 'company', 'company', 'company@company.in', 'none', 'xxxxxxxx', 'Address', 'Test Comments', 'none', '15,000', '30,000', 'card', 'Partially Paid', 'none', 'xxxxxxxxxxx', 'xxxxxxxx');

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
(1, 'barcode.png', 'Pen', 'stationaries', 'Plastic', '5', 100, 'Arun', 50, '2021-01-20', '2021-07-30'),
(2, 'barcode.png', 'Laptop', 'plastics', 'Plastic', '45,000', 60, 'Aravindh', 30, '2021-07-16', '2020-03-25'),
(3, 'barcode.png', 'Keyboard', 'stationaries', 'Plastic', '30,000', 60, 'Shanmugam', 40, '2022-04-18', '2020-11-14'),
(4, 'barcode.png', 'Computer', 'Steels', 'Plastic', '90,000', 40, 'Arun', 20, '2021-10-22', '2020-10-22'),
(5, 'barcode.png', 'Tables', 'Wooden', 'Plastic', '40,000', 60, 'Rahul', 20, '2021-08-28', '2020-12-18');

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
  `comments` varchar(40) NOT NULL,
  `tax_info` varchar(30) NOT NULL,
  `amount_paid` varchar(35) NOT NULL,
  `amount_pending` varchar(30) NOT NULL,
  `payment_mode` varchar(30) NOT NULL,
  `payment_status` varchar(30) NOT NULL,
  `attachments` varchar(50) NOT NULL,
  `pan_no` varchar(25) NOT NULL,
  `adhaar_no` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `firstname`, `lastname`, `email`, `phone`, `company`, `display_name`, `website`, `other`, `gst_in`, `address`, `comments`, `tax_info`, `amount_paid`, `amount_pending`, `payment_mode`, `payment_status`, `attachments`, `pan_no`, `adhaar_no`) VALUES
(1, 'R.Ramya', 'sri', 'ramya16@gmail.com', 'XXXXXXXXX', 'company', 'company name', 'XXXXXXXXX', 'other', 'gst no', 'Address', 'add notes', 'tax details', 'payment details', 'none', 'card', 'UnPaid', 'Add attachments', 'XXXXXXXXXXXX', 'XXXXXXXXXXXX'),
(2, 'Aruna', 'kumar', 'kumar@gmail.com', 'xxxxxxxxxx', 'company', 'company', 'website', 'none', 'xxxxxxxx', 'same', 'comments', '', '50,000', 'none', 'card', 'Paid', 'none', 'DYX45623789', ''),
(3, 'Priya ', 'dharshini', 'priya@gmail.com', 'xxxxxxxxxx', '', '', 'website', '', '', 'address', 'comments', '', '60,500', 'none', 'cash', 'Paid', '', '', ''),
(4, 'Reshma', 'ram', 'reshma@gmail.com', 'xxxxxxxxxx', '', '', 'website', '', '', 'Address', 'comments', '', '50,000', 'none', 'cash', 'Paid', '', '', ''),
(5, 'Priya ', 'kumar', 'aarthi@gmail.com', 'xxxxxxxxxx', 'company', '', 'website', '', 'xxxxxxxx', 'address', 'notes', 'none', '0.00', '50,000', 'credit', 'UnPaid', 'none', '', ''),
(6, 'Priya ', 'kumar', 'aarthi@gmail.com', 'xxxxxxxxxx', 'company', '', 'website', '', 'xxxxxxxx', 'address', 'notes', 'none', '80,000', 'none', 'card', 'Paid', 'none', '', ''),
(7, 'Priya ', 'kumar', 'aarthi@gmail.com', 'xxxxxxxxxx', 'company', '', 'website', '', 'xxxxxxxx', 'address', 'notes', 'none', '80,000', 'none', 'cash', 'Paid', 'none', '', 'xxxxxxxx'),
(8, 'Priya ', 'kumar', 'aarthi@gmail.com', 'xxxxxxxxxx', 'company', '', 'website', '', 'xxxxxxxx', 'address', 'notes', 'none', '80,000', 'none', 'card', 'Paid', 'none', 'dxy45623789', 'xxxxxxxx'),
(9, 'Karthick', 'raj', 'aarthi@gmail.com', 'xxxxxxxxxx', 'company', 'company', 'company@company.in', 'none', 'xxxxxxxx', 'address', 'notes', 'none', '0.00', '85,000', 'credit', 'UnPaid', 'none', 'dxy45623789', '78945132365'),
(10, 'Nandhini', 'kumar', 'nandhini@gmail.com', 'xxxxxxxxxx', 'company', 'company', 'company@company.in', 'none', 'xxxxxxxx', 'Address', 'Test comments', 'none', '15,000', '20,000', 'cash', 'Partially Paid', 'none', 'dxy45623789', '7894513236');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(40) NOT NULL,
  `user_lastname` varchar(40) NOT NULL,
  `user_image` text NOT NULL,
  `user_phone` varchar(50) NOT NULL,
  `user_role` varchar(33) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_password` varchar(33) NOT NULL,
  `user_confirmpassword` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `user_image`, `user_phone`, `user_role`, `user_email`, `user_password`, `user_confirmpassword`) VALUES
(1, 'John', 'Brito', 'dog.jpg', '+91 9631245626', 'Admin', 'brito20@gmail.com', 'John@123', 'John@123'),
(109, 'Aarthi', 'srm', 'cat.crdownload', '9876543257', 'Admin', 'aarthi@gmail.com', 'Fruits@2020', 'Fruits@2020'),
(111, 'Ramya', 'Rajendiran', 'dog.jpg', 'xxxxxxxxxx', 'Admin', 'ramya@gmail.com', 'Teddy@123', 'Teddy@123'),
(112, 'Surjith', 'RS', 'dog.jpg', 'xxxxxxxxxx', 'Admin', 'surjithrs@gmail.com', 'Fruits@123', 'Fruits@123'),
(113, 'ammu', 'name', 'cat.crdownload', 'xxxxxxxxxx', 'User', 'balu@gmail.com', 'Cat@4444', 'Cat@4444'),
(114, 'Balu', 'ram', 'profile.jfif', 'xxxxxxxxxx', 'User', 'arul12@gmail.com', 'Balu@123', 'Balu@123'),
(123, 'Reshma', 'raj', 'profile.jfif', '9563124585', 'User', 'reshma@gmail.com', 'Carrom@123', 'Carrom@123'),
(125, 'Priya', 'dharshini', 'profile.jfif', 'xxxxxxxxxx', 'User', 'priya@gmail.com', 'Priya@40', 'Priya@40'),
(127, 'Hari', 'ram', 'profile.jfif', 'xxxxxxxxxx', 'User', 'hari123@gmail', 'Test@2020', 'Test@2020'),
(130, 'Reshma', 'kumar', 'profile.jfif', 'xxxxxxxxxx', 'User', 'reshma123@gmail.com', 'Cat@1234', 'Cat@1234'),
(133, 'ammu', 'srm', 'profile.jfif', 'xxxxxxxxxx', 'User', 'ammu@gmail.com', 'Cat@2020', 'Cat@2020'),
(134, 'Balu', 'ram', 'profile.jfif', 'xxxxxxxxxx', 'User', 'arul12@gmail.com', 'Hide@4040', 'Hide@4040'),
(135, 'John', 'brito', 'profile.jfif', 'xxxxxxxxxx', 'User', 'john@gmail.com', 'Carrom@123', 'Carrom@123'),
(136, 'Alia', 'Mehra', 'profile.jfif', 'xxxxxxxxxx', 'User', 'alia@gmail.com', 'Dolphin@20', 'Dolphin@20'),
(137, 'Pragya', 'Mehra', 'profile.jfif', 'xxxxxxxxxx', 'User', 'pragya@gmail.com', 'Flowers*40', 'Flowers*40');

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
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
