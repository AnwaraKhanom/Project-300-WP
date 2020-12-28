-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 03:41 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_findplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `name`, `email`, `subject`, `message`, `type`) VALUES
(1, 'Rahima Khanom', 'rahima@gmail.com', 'Forget my password', 'Assalamu Alaikum. I\'m Rahima Khanom. I opened an account here few months ago as a tenant. But, unfortunately I forget my password. Can you please help me out from this situation?', 'tenant');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_division`
--

CREATE TABLE `tbl_division` (
  `id` int(11) NOT NULL,
  `division` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_division`
--

INSERT INTO `tbl_division` (`id`, `division`) VALUES
(1, 'Sylhet'),
(2, 'Dhaka'),
(3, 'Khulna'),
(4, 'Barisal'),
(6, 'Rajshahi'),
(7, 'Chittagong'),
(8, 'Mymensingh'),
(9, 'Rangpur');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property`
--

CREATE TABLE `tbl_property` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `thana_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `area` double NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `bathrooms` int(11) NOT NULL,
  `garages` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `rent` double NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_property`
--

INSERT INTO `tbl_property` (`id`, `user_id`, `thana_id`, `name`, `address`, `area`, `bedrooms`, `bathrooms`, `garages`, `photo`, `detail`, `rent`, `status`) VALUES
(3, 3, 3, 'Khan Villa', 'Khan Monzil,Bondhon D/12,Nowapara,Kali Bari Road,Sylhet.', 3000, 4, 3, 1, 'pexels-alex-17324141.jpg', 'This house is located at Sylhet Sadar, Sylhet. It has 3000sq ft area size. And 4 bedrooms , 3 washrooms and 1 garage.', 16000, 0),
(4, 5, 1, 'Place', 'Sunamgonj, Sylhet', 4200, 5, 4, 2, 'pexels-pixabay-280222.jpg', 'This house is located at Jalalabad, Sylhet. It has 4200sq ft area size. And 5 bedrooms , 4 washrooms and 2 garage.', 30000, 0),
(5, 5, 2, 'Market', 'Nowapara, Sylhet', 3800, 4, 2, 1, 'pexels-pixabay-259588.jpg', 'This house is located at Khalishpur 45, Khulna. It has 3800sq ft area size. And 4 bedrooms , 2 washrooms and 1 garage.', 15000, 0),
(6, 5, 2, 'Monzil', 'Khan Monzil,Bondhon D/12,Nowapara,Kali Bari Road,Sylhet', 5300, 8, 7, 3, 'pexels-kaboompics-com-6343.jpg', 'This house is located at Khalishpur 45, Khulna. It has 5300sq ft area size. And 8 bedrooms , 7 washrooms and 3 garage. ', 47000, 0),
(7, 3, 2, 'Villa', 'Boshundhora, Dhaka', 2000, 2, 1, 1, 'pexels-curtis-adams-35556151.jpg', 'This house is located at Khalishpur 45, Khulna. It has 2000sq ft area size. And 2 bedrooms , 1 washrooms and 1 garage.', 10000, 1),
(8, 3, 1, 'House', 'Nowapara, Sylhet', 2000, 2, 2, 1, 'pexels-pixabay-221024.jpg', 'This house is located at Jalalabad, Sylhet. It has 2000sq ft area size. And 2 bedrooms , 2 washrooms and 1 garage.', 12000, 0),
(9, 5, 2, 'Place', 'Kazitula, Sylhet.', 5000, 4, 2, 1, 'property2.jpg', 'This house is located at Khalishpur 45, Khulna. It has 5000sq ft area size. And 4 bedrooms , 2 washrooms and 1 garage. ', 21000, 1),
(10, 3, 1, 'Modina House', 'Nowapara, Sylhet', 2500, 3, 2, 1, 'pexels-thgusstavo-santana-2102587.jpg', 'This house is located at Jalalabad, Sylhet. It has 2500sq ft area size. And 3 bedrooms , 2 washrooms and 1 garage.', 14000, 1),
(11, 3, 1, 'Manjil', 'Nowapara, Sylhet', 3700, 5, 3, 1, 'pexels-binyamin-mellish-186077.jpg', 'This house is located at Jalalabad, Sylhet. It has 3700sq ft area size. And 5 bedrooms , 3 washrooms and 1 garage.', 24000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request`
--

CREATE TABLE `tbl_request` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `landlord_id` int(11) NOT NULL,
  `tenant_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `done` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_request`
--

INSERT INTO `tbl_request` (`id`, `property_id`, `landlord_id`, `tenant_id`, `date`, `done`) VALUES
(1, 7, 3, 4, '2020-12-22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thana`
--

CREATE TABLE `tbl_thana` (
  `id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `thana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_thana`
--

INSERT INTO `tbl_thana` (`id`, `division_id`, `thana`) VALUES
(1, 1, 'Jalalabad'),
(2, 3, 'Khalishpur 45'),
(3, 1, 'Sylhet Sadar'),
(4, 1, 'Kompanyganj'),
(5, 1, 'Kanaighat'),
(6, 1, 'Jakiganj'),
(7, 1, 'Golapganj'),
(8, 1, 'Goainghat'),
(9, 1, 'Bianibazar'),
(10, 1, 'Bishwanath'),
(11, 2, 'Gulshan'),
(12, 2, 'Hazaribagh'),
(13, 2, 'Azampur'),
(14, 2, 'Cantonment'),
(15, 2, 'Rampura'),
(16, 2, 'New Market'),
(17, 2, 'Khilgaon'),
(18, 3, 'Kotwali'),
(19, 3, 'Khan Jahan Ali'),
(20, 3, 'Daulatpur'),
(21, 4, 'Barisal Sadar'),
(22, 4, 'Wazirpur');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nid` text NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `nid`, `mobile`, `password`, `address`, `photo`, `type`) VALUES
(1, 'Khudeja', 'khudeja@gmail.com', '', '01719304425', '1234', 'Khan Monzil,Bondhon D/12,Nowapara,Kali Bari Road,Sylhet', 'apture.PNG', 'admin'),
(2, 'Anwara Khan', 'anwara1@gmail.com', 'My.pdf', '01719304420', '1237', 'Khan Monzil,Nowapara,Kali Bari Road,Sylhet', 'pexels-andrea-piacquadio-712513.jpg', 'tenant'),
(3, 'Khanom', 'khanom@gmail.com', 'NID.pdf', '01719304429', '1238', 'Khan Monzil,Bondhon D/12,Nowapara,Kali Bari Road,Sylhet', 'pexels-linkedin-sales-navigator-12518322.jpg', 'landlord'),
(4, 'Rahima Khanom', 'rahima@gmail.com', 'NID_1.pdf', '01719314425', '12389', 'Kali Bari Road,Sylhet', 'pexels-hannah-nelson-1065084.jpg', 'tenant'),
(5, 'Sultana Rahman', 'sultana@gmail.com', 'My1.pdf', '01723304425', '1290', 'Khan Monzil,Bondhon D/12,Nowapara,Sylhet', 'pexels-mentatdgt-1024311.jpg', 'landlord'),
(6, 'Tamanna Begum', 'tamanna@gmail.com', 'N.pdf', '01719301283', '123478', 'Khan Monzil,Bondhon D/12,Nowapara.', 'pexels-andrea-piacquadio-774909.jpg', 'tenant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_division`
--
ALTER TABLE `tbl_division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_property`
--
ALTER TABLE `tbl_property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_request`
--
ALTER TABLE `tbl_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_thana`
--
ALTER TABLE `tbl_thana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_division`
--
ALTER TABLE `tbl_division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_property`
--
ALTER TABLE `tbl_property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_request`
--
ALTER TABLE `tbl_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_thana`
--
ALTER TABLE `tbl_thana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
