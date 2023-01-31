-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2023 at 05:43 PM
-- Server version: 8.0.24
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemaolimp`
--

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `id` int NOT NULL,
  `hall_name` varchar(50) NOT NULL,
  `hall_close` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int NOT NULL,
  `movie_title` varchar(100) NOT NULL,
  `movie_url` varchar(20) NOT NULL,
  `movie_restriction` varchar(10) NOT NULL,
  `movie_image` varchar(70) NOT NULL,
  `movie_genre` varchar(50) NOT NULL,
  `movie_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `movie_duration` time(6) NOT NULL,
  `movie_country` varchar(30) NOT NULL,
  `movie_trailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_title`, `movie_url`, `movie_restriction`, `movie_image`, `movie_genre`, `movie_description`, `movie_duration`, `movie_country`, `movie_trailer`) VALUES
(1, 'Аватар 2: Путь воды', 'avatar2', '12', 'avatar.jpg', 'боевик, приключения, фэнтези', 'После принятия образа аватара солдат Джейк Салли становится предводителем народа на\'ви и берет на себя миссию по защите новых друзей от корыстных бизнесменов с Земли', '03:12:00.000000', 'США', 'https://www.youtube.com/embed/yKrzARVuePw'),
(2, 'Чебурашка', 'cheburashka', '6', 'cheburashka.jpg', 'Семейный, приключения', 'Иногда, чтобы вернуть солнце и улыбки в мир взрослых, нужен один маленький ушастый герой. Мохнатого непоседливого зверька из далекой апельсиновой страны ждут удивительные приключения в тихом приморском городке, где ему предстоит найти себе имя, друзей и дом. Помогать — и мешать! — ему в этом будут нелюдимый старик-садовник, странная тетя-модница и ее капризная внучка, мальчик, который никак не начнет говорить, и его мама, которой приходится несладко, хотя она и варит самый вкусный на свете шоколад. И многие-многие другие, в чью жизнь вместе с ароматом апельсинов вот-вот ворвутся волшебство и приключения.\r\n', '02:07:00.000000', 'Россия', 'https://www.youtube.com/embed/ueExdWhHsJo');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `news_image` varchar(25) NOT NULL,
  `news_title` varchar(60) NOT NULL,
  `news_date` date NOT NULL,
  `news_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `date_buy` date NOT NULL,
  `id_seans` int NOT NULL,
  `id_seat` int NOT NULL,
  `id_user` int NOT NULL,
  `ticket_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seans`
--

CREATE TABLE `seans` (
  `id` int NOT NULL,
  `hall_id` int NOT NULL,
  `date_movie` date NOT NULL,
  `time_movie` time(6) NOT NULL,
  `movie_id` int NOT NULL,
  `price` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `seans`
--

INSERT INTO `seans` (`id`, `hall_id`, `date_movie`, `time_movie`, `movie_id`, `price`) VALUES
(1, 1, '2023-01-30', '18:00:00.000000', 1, 400),
(2, 1, '2023-01-30', '22:00:00.000000', 1, 4013),
(3, 2, '2023-01-30', '14:00:00.000000', 2, 300),
(4, 1, '2023-01-30', '14:00:19.000000', 1, 400),
(5, 1, '2023-01-30', '19:00:00.000000', 2, 401);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int NOT NULL,
  `hall_id` int NOT NULL,
  `row` int NOT NULL,
  `place` int NOT NULL,
  `booking` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `title_movie_slider` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `slider_image`, `title_movie_slider`) VALUES
(1, 'avatar.jpg', ''),
(2, 'cheburashka.jpg', 'Чебурашка'),
(3, 'avatar.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `soon`
--

CREATE TABLE `soon` (
  `id` int NOT NULL,
  `image_film_soon` varchar(50) NOT NULL,
  `date_film_soon` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `salt` varchar(40) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seans`
--
ALTER TABLE `seans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soon`
--
ALTER TABLE `soon`
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
-- AUTO_INCREMENT for table `halls`
--
ALTER TABLE `halls`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seans`
--
ALTER TABLE `seans`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `soon`
--
ALTER TABLE `soon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
