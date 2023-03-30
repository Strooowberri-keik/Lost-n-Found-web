-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 09:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emc_lnf_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `create_post` varchar(250) NOT NULL,
  `image` blob NOT NULL,
  `location` varchar(250) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `create_post`, `image`, `location`, `date_created`) VALUES
(12, 'WWWWWW', 0x433a0a65772078616d7070096d70706870384630412e746d70, 'North Korea', '2023-01-17 07:29:27'),
(13, 'NAKITA KO TO', 0x433a0a65772078616d7070096d70706870333838462e746d70, 'koriki', '2023-01-17 07:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `username`, `password`, `role_as`, `status`, `created_at`) VALUES
(5, 'Angelica Lu', 'angelicalu513@gmail.com', 'adminkeyks', 'orbits', 1, 0, '2023-01-16 07:31:07'),
(9, 'Czarina Angelica Kalimpo Lu', 'cakalimpo@gmail.com', 'eeunseo._.v', 'bading', 0, 0, '2023-01-16 11:43:05'),
(10, 'Jenny Ann Lomotan', 'jlo@gmail.com', 'jlo_01', '123', 1, 0, '2023-01-16 12:28:46'),
(11, 'Jed Morie Eugenio', 'jedmorie@gmail.com', 'jm_cs3a', '123', 1, 0, '2023-01-16 12:41:01'),
(12, 'Exequiel Fernandez', 'exe@gmail.com', 'exe.cs3a', '123', 1, 0, '2023-01-16 12:41:09'),
(13, 'John Gabriel Pataueg', 'jgab@gmail.com', 'jgab.cs3a', '123', 1, 0, '2023-01-16 12:41:13'),
(14, 'Jinsoul Jung', 'zindoriyam@gmail.com', 'zindoriyam.1', '123', 0, 0, '2023-01-17 02:48:09'),
(15, 'Angelica Lu', 'suryaprasadtripathy8@gmail.com', 'yoo', '123', 0, 0, '2023-01-17 07:33:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
