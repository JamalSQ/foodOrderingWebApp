-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2024 at 11:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodresturant`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `mainmanu`
--

CREATE TABLE `mainmanu` (
  `id` int(255) NOT NULL,
  `discription` text NOT NULL,
  `imgUrl` text NOT NULL,
  `ingredients` text NOT NULL,
  `name` text NOT NULL,
  `price` int(77) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mainmanu`
--

INSERT INTO `mainmanu` (`id`, `discription`, `imgUrl`, `ingredients`, `name`, `price`) VALUES
(1, 'Atque sit aut vel commodi dignissimos.', 'https://via.placeholder.com/640x480.png/000066?text=food+molestias', 'nesciunt, accusantium, et, quibusdam, et', 'aut', 6),
(2, 'Repellat rem officia blanditiis velit repudiandae officiis omnis.', 'https://via.placeholder.com/640x480.png/00ddee?text=food+quae', 'voluptas, quia, fugiat, aut, sit', 'inventore', 15),
(3, 'Consequatur saepe assumenda inventore eos rerum voluptatem et.', 'https://via.placeholder.com/640x480.png/00ffff?text=food+quo', 'quo, eveniet, blanditiis, et, quaerat', 'explicabo', 17),
(4, 'Qui tempore ipsum eius odit et sit.', 'https://via.placeholder.com/640x480.png/0044bb?text=food+excepturi', 'dolores, voluptatem, voluptatem, inventore, maxime', 'tenetur', 9),
(5, 'Laboriosam eos temporibus non.', 'https://via.placeholder.com/640x480.png/00ee22?text=food+corporis', 'in, repudiandae, et, sed, ducimus', 'est', 19),
(6, 'Fugit reprehenderit eius sed ex cupiditate ullam.', 'https://via.placeholder.com/640x480.png/006611?text=food+voluptas', 'reprehenderit, aut, nemo, error, eum', 'similique', 8),
(7, 'Omnis iste sed repellat impedit aut.', 'https://via.placeholder.com/640x480.png/00bb77?text=food+dolorum', 'ad, quae, ea, dolorem, dignissimos', 'labore', 9),
(8, 'Officiis eos cumque in eum dolorum quasi laboriosam ipsum.', 'https://via.placeholder.com/640x480.png/008844?text=food+ad', 'qui, commodi, est, voluptas, quia', 'ut', 13),
(9, 'Autem et quia et est aliquam quis.', 'https://via.placeholder.com/640x480.png/000000?text=food+consequatur', 'dolore, est, suscipit, et, quia', 'hic', 10),
(10, 'Itaque ab autem nisi.', 'https://via.placeholder.com/640x480.png/00ffff?text=food+ullam', 'eos, aliquid, quam, molestiae, amet', 'est', 14);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `customerName` text NOT NULL,
  `ImgUrl` text NOT NULL,
  `orderDate` datetime NOT NULL,
  `status` text NOT NULL,
  `tableNo` int(77) NOT NULL,
  `price` int(77) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `customerName`, `ImgUrl`, `orderDate`, `status`, `tableNo`, `price`) VALUES
(1, 'Michaela Waelchi', 'https://via.placeholder.com/640x480.png/000066?text=food+molestias', '2024-04-24 01:51:14', 'pending', 6, 91),
(2, 'Harrison Gleichner', 'https://via.placeholder.com/640x480.png/000066?text=food+molestias', '2024-02-21 15:15:19', 'pending', 9, 98),
(3, 'Eileen Spencer', 'https://via.placeholder.com/640x480.png/000066?text=food+molestias', '2024-04-19 14:42:53', 'completed', 9, 87),
(4, 'Nikolas Weissnat', 'https://via.placeholder.com/640x480.png/000066?text=food+molestias', '2024-03-15 06:42:38', 'pending', 10, 32),
(5, 'Bradly Maggio', 'https://via.placeholder.com/640x480.png/000066?text=food+molestias', '2024-06-16 17:24:00', 'cancelled', 10, 99),
(6, 'Emmanuelle Marvin', 'https://via.placeholder.com/640x480.png/000066?text=food+molestias', '2024-02-27 12:13:19', 'cancelled', 6, 35),
(7, 'Rashad Hickle', 'https://via.placeholder.com/640x480.png/000066?text=food+molestias', '2024-03-11 08:44:07', 'pending', 9, 29),
(8, 'Justina Durgan DVM', '3', '2024-01-29 23:53:33', 'cancelled', 9, 19),
(9, 'Deon Jones', '5', '2024-05-10 16:31:23', 'pending', 8, 15),
(10, 'Abner Nader', '2', '2024-02-28 00:52:14', 'cancelled', 3, 94),
(11, 'inventore', '2', '2024-06-28 15:59:05', 'Pending', 10, 53),
(12, 'inventore', '2', '2024-06-28 16:01:44', 'Pending', 6, 53),
(13, 'similique', '1', '2024-06-28 16:08:10', 'Pending', 2, 26),
(14, 'est', '1', '2024-06-28 16:11:12', 'Pending', 7, 66),
(15, 'inventore', '1', '2024-06-28 16:38:42', 'Pending', 3, 33),
(16, 'samar', '2', '2024-06-28 16:41:50', 'Pending', 5, 62),
(17, 'jamal', 'https://via.placeholder.com/640x480.png/00ffff?text=food+quo', '2024-06-29 11:18:23', 'Pending', 3, 75),
(18, 'jamalqadri', 'https://via.placeholder.com/640x480.png/00ffff?text=food+quo', '2024-06-29 11:20:11', 'Pending', 6, 26),
(19, 'mudassar', 'https://via.placeholder.com/640x480.png/00ffff?text=food+quo', '2024-06-29 11:25:13', 'Pending', 9, 26);

-- --------------------------------------------------------

--
-- Table structure for table `totaliteminorder`
--

CREATE TABLE `totaliteminorder` (
  `id` int(255) NOT NULL,
  `order_id` text NOT NULL,
  `main_menu_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `totaliteminorder`
--

INSERT INTO `totaliteminorder` (`id`, `order_id`, `main_menu_id`) VALUES
(1, '2', '7'),
(2, '10', '3'),
(3, '3', '10'),
(4, '5', '10'),
(5, '10', '6'),
(6, '3', '5'),
(7, '1', '1'),
(8, '5', '1'),
(9, '6', '1'),
(10, '4', '7'),
(17, '11', '2'),
(18, '11', '2'),
(19, '11', '2'),
(20, '12', '2'),
(21, '12', '2'),
(22, '12', '2'),
(23, '13', '6'),
(24, '13', '7'),
(25, '13', '7'),
(26, '14', '10'),
(27, '14', '9'),
(28, '14', '6'),
(29, '14', '3'),
(30, '14', '3'),
(31, '15', '2'),
(32, '15', '4'),
(33, '15', '4'),
(34, '16', '2'),
(35, '16', '2'),
(36, '16', '4'),
(37, '16', '3'),
(38, '16', '1'),
(39, '17', '3'),
(40, '17', '3'),
(41, '17', '3'),
(42, '17', '4'),
(43, '17', '2'),
(44, '18', '3'),
(45, '18', '4'),
(46, '19', '3'),
(47, '19', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainmanu`
--
ALTER TABLE `mainmanu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `totaliteminorder`
--
ALTER TABLE `totaliteminorder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mainmanu`
--
ALTER TABLE `mainmanu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `totaliteminorder`
--
ALTER TABLE `totaliteminorder`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
