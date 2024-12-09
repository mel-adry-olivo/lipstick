-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2024 at 08:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lipstick`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image_url`) VALUES
(1, 'NARS', './images/nars-logo.png'),
(2, 'AVON', './images/avon-logo.jpg'),
(3, 'YSL', './images/ysl-logo.jpg'),
(4, 'MAC', './images/mac-logo.png'),
(5, 'Maybelline', './images/maybelline-logo.jpg'),
(6, 'DIOR', './images/dior-logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Matte'),
(2, 'Satin'),
(3, 'Lip Gloss'),
(4, 'Lip Stain'),
(5, 'Lip Tint'),
(6, 'Creamy'),
(7, 'Sheer'),
(8, 'Lip Crayons');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `brand_id`, `name`) VALUES
(1, 1, 'NARS Audacious Lipstick'),
(2, 3, 'Yves Saint Laurent (YSL) Rouge Pur Couture'),
(3, 6, 'Dior - Rouge Dior');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `hex_code` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `hex_code`) VALUES
(1, 'Violet', '#8A2BE2'),
(2, 'Dark Red', '#8B0000'),
(3, 'Ruby Red', '#9B111E'),
(4, 'Crimson', '#DC143C'),
(5, 'Matte Red', '#B03060'),
(6, 'Soft Red', '#E57373'),
(7, 'Cherry Red', '#D2042D'),
(8, 'Crimson Red', '#990000'),
(9, 'Classic Red', '#BF0A30'),
(10, 'Bright Red', '#FF0000'),
(11, 'Shimmer Red', '#C41E3A'),
(12, 'Vermilion', '#E34234'),
(13, 'Mahogany Red', '#C04000'),
(14, 'Scarlet Crush', '#FF2400'),
(15, 'Plum', '#DDA0DD'),
(16, 'Deep Plum', '#673147'),
(17, 'Anna', '#B48491'),
(18, 'Audrey', '#8B475D'),
(19, 'Vivien', '#803E52'),
(20, 'Rosy Rouge', '#D991A3'),
(21, 'Fuchsia Crush', '#C154C1'),
(22, 'Light Pink', '#FFB6C1'),
(23, 'Medium Pink', '#FF69B4'),
(24, 'Dark Pink', '#FF1493'),
(25, 'Peachy Pink', '#FF9A8A'),
(26, 'Coral', '#FF7F50'),
(27, 'Soft Coral', '#F88379'),
(28, 'Bright Coral', '#FF6F61'),
(29, 'Beige', '#F5F5DC'),
(30, 'Warm Nude', '#D2B48C'),
(31, 'Toffee Cream', '#D2B48C'),
(32, 'Margaret', '#397F70'),
(33, 'Brigitte', '#D9A59A'),
(34, 'Mauve', '#E0B0FF'),
(35, 'Soft Mauve', '#D8BFD8'),
(36, 'Fuchsia', '#FF00FF'),
(37, 'Lavender', '#D3D3FF'),
(38, 'Purple', '#800080'),
(39, 'Peach', '#FFD3AC'),
(40, 'Rose', '#FF007F'),
(41, 'Lime', '#00FF00'),
(42, 'Cinnamon Spice', '#D2691E'),
(43, 'Deep Berry', '#702963'),
(44, 'Bright Cherry', '#FF5A6C'),
(45, 'Cherry', '#DE3163'),
(46, 'Berry', '#A52A4E'),
(47, 'Dark Berry', '#7B3F61');

-- --------------------------------------------------------

--
-- Table structure for table `lipsticks`
--

CREATE TABLE `lipsticks` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `collection_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lipsticks`
--

INSERT INTO `lipsticks` (`id`, `brand_id`, `name`, `description`, `category_id`, `price`, `image_url`, `collection_id`) VALUES
(1, 1, 'NARS Velvet Touch Lipstick', 'A luxurious matte lipstick that offers a rich, velvety finish, perfect for long-lasting wear.', 1, 400.00, './images/matte/NARS Velvet Touch.jpg', NULL),
(2, 1, 'NARS Urban Chic', 'A bold red lipstick with a matte finish, perfect for making statement.', 1, 300.00, './images/matte/NARS Urban Chic.jpg', NULL),
(3, 1, 'NARS Ultra Matte Lipstick', 'A luxurious matte lipstick that offers a rich, velvety finish, perfect for long-lasting wear.', 7, 550.00, './images/matte//NARS Ultra Matte Lipstick.jpg', NULL),
(4, 1, 'Margaret', 'Margaret is a classic, deep red shade that exudes elegance and sophistication, offering a rich, bold finish perfect for special occasions or a chic everyday look.', 7, 1900.00, './images/collections/Margaret.jpg', 1),
(5, 1, 'Anna', 'Anna is a bright, playful pink hue that adds a fun pop of color to any look. It’s vibrant and lively, making it ideal for those who love a bit of flair.', 7, 1900.00, './images/collections/Anna.jpg', 1),
(6, 1, 'Audrey', 'Audrey is a sophisticated mauve shade that strikes the perfect balance between bold and understated, ideal for daily wear or adding a polished finish to any look.', 7, 1900.00, './images/collections/Audrey.jpg', 1),
(7, 1, 'Brigitte', 'Brigitte is a deep, intense berry shade with a matte finish, making it a powerful statement color that exudes confidence and boldness.', 7, 1900.00, './images/collections/Brigitte.jpg', 1),
(8, 1, 'Vivien', 'Vivien is a soft pink nude with a hint of warmth, offering a natural, subtle flush that enhances the lips with a delicate, feminine touch.', 7, 1900.00, './images/collections/Vivien.jpg', 1),
(9, 2, 'AVON Creamy Indulgence Lipstick', 'A rich, velvety lipstick with a smooth application and long-lasting creamy finish for an indulgent touch.', 6, 400.00, './images/creamy/AVON Creamy Indulgence.jpg', NULL),
(10, 2, 'AVON Divine Comfort Lipstick', 'Luxurious and moisturizing, this lipstick glides on effortlessly, providing soft, all-day comfort.', 6, 350.00, './images/creamy/AVON Divine Comfort.jpg', NULL),
(11, 2, 'AVON Dreamy Cream Lipstick', 'Experience the dreamy, silky texture that melts into your lips, giving you an ethereal and natural glow.', 6, 200.00, './images/creamy/AVON Dreamy Cream.jpg', NULL),
(12, 2, 'AVON Dreamy Smooth Lipstick', 'A perfectly smooth formula that enhances your lips with vibrant color and a soft, comfortable feel.', 6, 300.00, './images/creamy/AVON Dreamy Smooth.jpg', NULL),
(13, 2, 'AVON Alluring Shine Lipstick', 'This lipstick combines vivid color with a glossy shine, adding a touch of allure to any look.', 2, 500.00, './images/Satin/Avon Alluring Shine.jpg', NULL),
(14, 3, 'YSL Bold Ambition Lipstick', 'Make a statement with this vibrant, bold lipstick that exudes confidence and sophistication.', 1, 500.00, './images/matte/YSL Bold Ambition.jpg', NULL),
(15, 3, 'YSL Coral Kiss Lipstick', 'A fresh, coral shade that adds a playful touch to any look with a kiss of bright color.', 1, 500.00, './images/matte/YSL Coral Kiss.jpg', NULL),
(16, 3, 'YSL Natural Glow Lipstick', 'A creamy lipstick that enhances your lips\' natural beauty with a soft, glowing finish.', 7, 100.00, './images/sheer/YSL Natural Glow.jpg', NULL),
(17, 3, 'Rouge Pur Couture The Bold', 'An intense, bold lipstick that delivers vibrant color with a satin finish, offering full coverage and all-day wear for a striking, confident look.', 2, 1000.00, './images/collections/Rouge Pur Couture The Bold.jpg', 2),
(18, 3, 'Rouge Pur Couture Night Edition', 'A luxurious lipstick designed for evening glamour, featuring rich, deep shades that add a sophisticated touch to your lips with a smooth, long-lasting finish.', 1, 1500.00, './images/collections/Rouge Pur Couture Night Edition.jpg', 2),
(19, 3, 'Ruby Red Lipstick', 'A captivating, classic red hue that exudes elegance and allure, providing a bold, statement-making look with a creamy, comfortable texture.', 7, 1499.00, './images/collections/Rouge Pur Couture Satin.jpg', 2),
(20, 3, 'Rouge Sur Mesure', 'A customizable lipstick that allows you to create the perfect shade, blending effortlessly with your lips for a personalized, flawless finish.', 2, 1900.00, './images/collections/Rouge Sur Mesure.jpg', 2),
(21, 3, 'Tatouage Couture', 'A tattoo-inspired liquid lipstick that delivers a lightweight, matte finish with high-impact color, ensuring a bold, smudge-proof look that lasts all day.', 1, 1900.00, './images/collections/Tatouage Couture.jpg', 2),
(22, 4, 'MAC Lipstick', 'The classic go-to lipstick with a rich, pigmented formula that provides lasting color in every swipe.', 1, 600.00, './images/matte/Mac Lipstick.jpg', NULL),
(23, 4, 'MAC Noir Romance Lipstick', 'A deep, sultry shade that exudes elegance and adds a touch of mystery to any look.', 1, 700.00, './images/matte/Mac Noir Romance.jpg', NULL),
(24, 4, 'MAC Flirty Sheen Lipstick', 'A playful lipstick with a hint of sheen, perfect for adding a flirty touch to your smile.', 7, 500.00, './images/sheer/Mac Flirty Sheen.jpg', NULL),
(25, 4, 'MAC Sheer Whisper Lipstick', 'A soft, sheer lipstick that adds a delicate hint of color for a naturally beautiful look.', 7, 400.00, './images/sheer/MAC Sheer Whisper.jpg', NULL),
(26, 4, 'MAC Chic Statement Lipstick', 'Make a chic, bold statement with this sophisticated lipstick that’s perfect for any occasion.', 1, 400.00, './images/matte/MAC Chic Statement.jpg', NULL),
(27, 5, 'Maybelline Classic Charm Lipstick', 'A timeless lipstick that exudes classic charm with a smooth, creamy finish and vibrant color.', 1, 200.00, './images/matte/Maybelline Classic Charm.jpg', NULL),
(28, 5, 'Maybelline Timeless Temptation Lipstick', 'Indulge in this lipstick\'s rich, seductive shade that never goes out of style.', 1, 200.00, './images/matte/Maybelline Timeless Temptation.jpg', NULL),
(29, 5, 'Maybelline Barely There Bliss Lipstick', 'A subtle, barely-there shade for a soft, blissful touch that enhances natural beauty.', 7, 400.00, './images/sheer/Maybelline Barely There Bliss.jpg', NULL),
(30, 5, 'Maybelline Delicate Dream Lipstick', 'A light, dreamy formula that adds a delicate tint to your lips for an effortless look.', 7, 300.00, './images/sheer/Maybelline Delicate Dream.jpg', NULL),
(31, 5, 'Maybelline Crème Kiss Lipstick', 'Creamy and smooth, this lipstick delivers a kiss of color with a luscious finish.', 2, 300.00, './images/Satin/Maybelline Crème Kiss.jpg', NULL),
(32, 6, 'Dior Colorful Charm', 'A vibrant lipstick that adds a charming burst of color, perfect for a lively, unforgettable look.', 8, 500.00, './images/lipcrayon/Dior Colorful Charm.jpg', NULL),
(33, 6, 'DIOR Crayon Crush', 'This chic crayon lipstick delivers bold color with easy application, ideal for creating a stylish statement.', 8, 200.00, './images/lipcrayon/DIOR Crayon Crush.jpg', NULL),
(34, 6, 'DIOR Creamy Delight Lipstick', 'Indulge in a creamy, delightful formula that provides rich color and smooth application.', 6, 200.00, './images/creamy/DIOR Creamy Delight.jpg', NULL),
(35, 6, 'Rouge Dior Forever Liquid', 'A long-lasting liquid lipstick that offers vibrant, bold color with a comfortable matte finish, delivering up to 16 hours of wear without fading or smudging.', 1, 1900.00, './images/collections/Rouge Dior Forever Liquid.jpg', 3),
(36, 6, 'Rouge Dior Couture Color', 'A luxurious lipstick that provides intense, couture-inspired color with a satin finish, ensuring full coverage and lasting hydration for a flawless, elegant look.', 1, 1900.00, './images/collections/Rouge Dior Couture Color.jpg', 3),
(37, 6, 'Rouge Dior Ultra Care', 'A nourishing lipstick that combines bold color with a hydrating formula, leaving your lips soft, smooth, and comfortable while delivering a chic, long-lasting finish.', 1, 1900.00, './images/collections/Rouge Dior Ultra Care.jpg', 3),
(38, 6, 'Rouge Dior Nude Look', 'A sophisticated nude lipstick that enhances your natural lip color with a subtle, silky finish, perfect for an effortlessly elegant look every day.', 7, 1900.00, './images/collections/Rouge Dior Nude Look.jpg', 3),
(39, 6, 'Rouge Dior Metallics', 'A statement-making lipstick with a shimmering metallic finish, offering bold color with a reflective shine that adds an edgy, high-fashion touch to your lips.', 1, 1900.00, './images/collections/Rouge Dior Metallics.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `lipstick_colors`
--

CREATE TABLE `lipstick_colors` (
  `id` int(11) NOT NULL,
  `lipstick_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lipstick_colors`
--

INSERT INTO `lipstick_colors` (`id`, `lipstick_id`, `color_id`) VALUES
(3, 2, 3),
(4, 2, 4),
(5, 3, 15),
(6, 3, 16),
(7, 4, 32),
(8, 5, 17),
(9, 6, 18),
(10, 7, 33),
(11, 8, 19),
(12, 9, 20),
(13, 9, 21),
(14, 9, 31),
(15, 10, 46),
(16, 10, 47),
(17, 11, 7),
(18, 11, 8),
(19, 12, 3),
(20, 12, 4),
(21, 13, 5),
(22, 13, 6),
(23, 14, 5),
(24, 14, 6),
(25, 15, 26),
(26, 15, 27),
(27, 16, 29),
(28, 16, 30),
(29, 17, 9),
(30, 17, 2),
(31, 18, 7),
(32, 18, 8),
(33, 19, 3),
(34, 19, 4),
(35, 20, 24),
(36, 20, 6),
(37, 21, 11),
(38, 21, 10),
(39, 22, 45),
(40, 22, 44),
(41, 23, 34),
(42, 23, 35),
(43, 24, 24),
(44, 24, 6),
(45, 25, 46),
(46, 25, 43),
(47, 26, 38),
(48, 26, 10),
(49, 27, 26),
(50, 27, 28),
(51, 28, 7),
(52, 28, 8),
(53, 29, 9),
(54, 29, 2),
(55, 30, 3),
(56, 30, 4),
(57, 31, 3),
(58, 31, 4),
(59, 32, 5),
(60, 32, 6),
(61, 33, 12),
(62, 33, 24),
(63, 33, 13),
(64, 34, 14),
(65, 34, 25),
(66, 34, 42),
(67, 35, 22),
(68, 35, 23),
(69, 36, 26),
(70, 36, 39),
(71, 37, 36),
(72, 37, 37),
(73, 38, 40),
(74, 38, 41),
(75, 39, 22),
(76, 39, 23),
(77, 39, 24),
(101, 1, 1),
(102, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `lipstick_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `review_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lipstick_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_favorites`
--

CREATE TABLE `user_favorites` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lipstick_id` int(11) NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_reserves`
--

CREATE TABLE `user_reserves` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lipstick_id` int(11) NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lipsticks`
--
ALTER TABLE `lipsticks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `fk_collection` (`collection_id`);

--
-- Indexes for table `lipstick_colors`
--
ALTER TABLE `lipstick_colors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lipstick_id` (`lipstick_id`),
  ADD KEY `color_id` (`color_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lipstick_id` (`lipstick_id`),
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_user_lipstick_cart` (`user_id`,`lipstick_id`),
  ADD KEY `lipstick_id` (`lipstick_id`);

--
-- Indexes for table `user_favorites`
--
ALTER TABLE `user_favorites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_user_lipstick_favorite` (`user_id`,`lipstick_id`),
  ADD KEY `lipstick_id` (`lipstick_id`);

--
-- Indexes for table `user_reserves`
--
ALTER TABLE `user_reserves`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_user_lipstick_cart` (`user_id`,`lipstick_id`),
  ADD KEY `lipstick_id` (`lipstick_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `lipsticks`
--
ALTER TABLE `lipsticks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `lipstick_colors`
--
ALTER TABLE `lipstick_colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_favorites`
--
ALTER TABLE `user_favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_reserves`
--
ALTER TABLE `user_reserves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collections`
--
ALTER TABLE `collections`
  ADD CONSTRAINT `collections_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`);

--
-- Constraints for table `lipsticks`
--
ALTER TABLE `lipsticks`
  ADD CONSTRAINT `fk_collection` FOREIGN KEY (`collection_id`) REFERENCES `collections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lipsticks_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `lipsticks_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `lipstick_colors`
--
ALTER TABLE `lipstick_colors`
  ADD CONSTRAINT `lipstick_colors_ibfk_1` FOREIGN KEY (`lipstick_id`) REFERENCES `lipsticks` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `lipstick_colors_ibfk_2` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`lipstick_id`) REFERENCES `lipsticks` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD CONSTRAINT `user_cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_cart_ibfk_2` FOREIGN KEY (`lipstick_id`) REFERENCES `lipsticks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_favorites`
--
ALTER TABLE `user_favorites`
  ADD CONSTRAINT `user_favorites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_favorites_ibfk_2` FOREIGN KEY (`lipstick_id`) REFERENCES `lipsticks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_reserves`
--
ALTER TABLE `user_reserves`
  ADD CONSTRAINT `user_reserves_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_reserves_ibfk_2` FOREIGN KEY (`lipstick_id`) REFERENCES `lipsticks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
