-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 02:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saafwan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anonymous`
--

CREATE TABLE `anonymous` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anonymous`
--

INSERT INTO `anonymous` (`id`, `name`, `email`, `phone`, `gender`, `age`, `message`, `created_at`, `status`) VALUES
(1, 'Tom', 'tom@gmail.com', '01713115050', 'Male', 34, 'Hello', '2023-06-08', 1),
(2, NULL, 'fidaarhamddd@gmail.com', NULL, NULL, NULL, NULL, '2023-06-08', 0),
(3, 'Reyad Hossain', 'reyadhosen@gmail.com', '01956394373', NULL, NULL, 'I have some problem with my teeth', '2023-06-08', 1),
(4, 'Munira Zebin', 'munirazebin229@gmail.com', '01745482666', NULL, NULL, 'Thank you Doctor', '2023-06-08', 1),
(5, NULL, 'abbas@gmail.com', NULL, NULL, NULL, NULL, '2023-06-08', 0),
(6, 'Ruidu', 'reyadhosen@gmail.com', '01956394373', NULL, NULL, 'hola', '2023-06-08', 0),
(7, 'Munira Zebin', 'munirazebin229@gmail.com', '01745482666', NULL, NULL, 'nooooo', '2023-06-08', 0),
(8, 'Reyad Hossain', 'reyadhosen@gmail.com', '01956394373', NULL, NULL, 'Hello', '2023-06-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `chamber` int(11) DEFAULT NULL,
  `appointment_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `cancel_at` date DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `user`, `chamber`, `appointment_at`, `created_at`, `cancel_at`, `status`, `patient_id`) VALUES
(2, 'doctor', 2, '2023-06-07', '2023-06-07', '2023-06-12', 'cancel', 22),
(3, 'doctor', 2, '2023-06-09', '2023-06-08', NULL, 'done', 20),
(4, 'doctor', 1, '2023-06-09', '2023-06-08', NULL, 'done', 21),
(6, 'doctor', 1, '2023-06-12', '2023-06-10', NULL, 'cancel', 20),
(8, 'doctor', 1, '2023-06-10', '2023-06-10', NULL, 'cancel', 20),
(17, 'doctor', 1, '2023-06-10', '2023-06-10', NULL, 'cancel', 20),
(21, 'doctor', 1, '2023-06-14', '2023-06-12', NULL, 'done', 20),
(22, 'patient', 1, '2023-07-14', '2023-07-14', NULL, 'pending', 20);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `chamber1` varchar(250) NOT NULL,
  `chamber2` varchar(250) DEFAULT NULL,
  `established` varchar(250) NOT NULL,
  `founder` varchar(250) NOT NULL,
  `bio` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `email`, `phone`, `password`, `created_at`, `deleted_at`, `chamber1`, `chamber2`, `established`, `founder`, `bio`) VALUES
(1, 'Dr. Fida Haque', 'fida@gmail.com', '01713115050', 'saafwan123', '2023-06-03', NULL, '529, Solmaid, Dhaka, Bangladesh', 'Kuril Bishwa Road, Dhaka, Bangladesh', '15 Nov, 2001', 'Fida Haque', 'BDS, MPH, Special Trained Implant');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message` varchar(250) NOT NULL,
  `created_at` date NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message`, `created_at`, `patient_id`, `status`) VALUES
(1, 'Hello Doc, I need your help.Hello Doc, I need your help.Hello Doc, I need your help.Hello Doc, I need your help.Hello Doc, I need your help.', '2023-06-08', 20, 1),
(7, 'no way how is it possible', '2023-06-11', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `age` int(200) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `default_chamber` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `phone`, `email`, `password`, `age`, `gender`, `default_chamber`, `created_at`, `status`) VALUES
(20, 'Reyad Hossain', '01956394373', 'reyadhosen@gmail.com', '605908', 22, 'Male', 1, '2023-06-05', 1),
(21, 'Ifat Hasan', '01956394372', 'blazeaxelspy@gmail.com', '557419', 22, 'Male', 1, '2023-06-06', 1),
(22, 'Munira Zebin', '01745482666', 'munirazebin229@gmail.com', '713392', 20, 'Female', 1, '2023-06-06', 1),
(23, 'Mursalin', '01999986000', 'antukhan33@gmail.com', '308774', 69, 'Male', NULL, '2023-06-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id` int(11) NOT NULL,
  `treatment_details` varchar(250) NOT NULL,
  `surgeon` varchar(100) NOT NULL,
  `patient_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `age` int(200) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `age`, `gender`, `created_at`, `deleted_at`, `patient_id`) VALUES
(31, 'Reyad Hossain', '01956394373', 'reyadhosen@gmail.com', '605908', 22, 'Male', '2023-06-05', NULL, 20),
(32, 'Reyad Hossain', '01956394372', 'reyadhose@gmail.com', '557419', 22, 'Male', '2023-06-06', NULL, 21),
(33, 'Munira Zebin', '01745482666', 'munirazebin229@gmail.com', '713392', 20, 'Female', '2023-06-06', NULL, 22),
(34, 'Reyad Hossain', '01956394373', 'reyadhosen@gmail.com', NULL, NULL, NULL, '2023-06-08', NULL, NULL),
(35, 'Munira Zebin', '01745482666', 'munirazebin229@gmail.com', NULL, NULL, NULL, '2023-06-08', NULL, NULL),
(36, NULL, NULL, 'abbas@gmail.com', NULL, NULL, NULL, '2023-06-08', NULL, NULL),
(37, 'Ruidu', '01956394373', 'reyadhosen@gmail.com', NULL, NULL, NULL, '2023-06-08', NULL, NULL),
(38, 'Munira Zebin', '01745482666', 'munirazebin229@gmail.com', NULL, NULL, NULL, '2023-06-08', NULL, NULL),
(39, 'Reyad Hossain', '01956394373', 'reyadhosen@gmail.com', NULL, NULL, NULL, '2023-06-12', NULL, NULL),
(40, 'Mursalin', '01999986000', 'antukhan33@gmail.com', '308774', 69, 'Male', '2023-06-12', NULL, 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anonymous`
--
ALTER TABLE `anonymous`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anonymous`
--
ALTER TABLE `anonymous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `treatment`
--
ALTER TABLE `treatment`
  ADD CONSTRAINT `treatment_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
