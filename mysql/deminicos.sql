-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 12, 2018 at 09:01 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deminicos`
--
CREATE DATABASE IF NOT EXISTS `deminicos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `deminicos`;

-- --------------------------------------------------------

--
-- Table structure for table `menu_categories`
--

DROP TABLE IF EXISTS `menu_categories`;
CREATE TABLE `menu_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_categories`
--

INSERT INTO `menu_categories` (`id`, `name`, `description`) VALUES
(1, 'Pizza', 'Delicious 12-inch pizzas topped with fresh and vibrant ingredients. All pizzas are available fresh or frozen!'),
(2, 'Calzone', 'Delicious 12-inch calzones topped with fresh and vibrant ingredients.'),
(3, 'Salads - Insalata', 'Hand-crafted, fresh salads. Available as small and large.'),
(4, 'Panini', 'Panini\'s on your choice of white or brown bread.'),
(5, 'Market Menu', 'Homemade goods to create your own dishes with!'),
(6, 'Drinks', 'Enjoy a refreshing beverage with your meal.'),
(7, 'Desserts', 'Add a delicious dessert to your order.');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL DEFAULT '0',
  `availableFrozen` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `category_id`, `name`, `description`, `price`, `availableFrozen`) VALUES
(1, 1, 'Piccante', '', 11.5, 1),
(2, 1, 'The Sal', '', 11, 1),
(3, 1, 'Vespa', '', 13.5, 1),
(4, 1, 'Balboa', '', 13.5, 1),
(5, 1, 'Verdua', '', 13.5, 1),
(6, 1, 'Margherita', '', 11, 0),
(7, 1, 'Za Za', '', 13.5, 0),
(8, 1, 'Quattro Stagioni', '', 11.5, 0),
(9, 1, 'Vesuvius', '', 14.5, 0),
(10, 1, 'Pepperoni a Classico', '', 11.5, 0),
(11, 1, 'Artista', '', 13, 0),
(12, 1, 'Vagabondo', '', 13.5, 0),
(13, 1, 'Galileo', '', 14.5, 0),
(14, 1, 'Marco Pollo', '', 13.5, 0),
(15, 1, 'Sofia', 'Thin crust', 14, 0),
(16, 1, 'Nicola', 'Thin crust', 14, 0),
(17, 1, 'Build Your Own Pizza', 'Choose four toppings of your choice!', 14, 0),
(18, 2, 'Margherita', '', 12, 1),
(19, 2, 'The Sal', '', 12, 0),
(20, 2, 'Za Za', '', 14.5, 0),
(21, 2, 'Artista', '', 14.5, 0),
(22, 2, 'Artista', '', 14, 0),
(23, 2, 'Verdura', '', 14.5, 0),
(24, 2, 'Piccante', '', 12.5, 0),
(25, 2, 'Pepperoni al Classico', '', 12.5, 0),
(26, 2, 'Quattro Stagioni', '', 12.5, 0),
(27, 2, 'Vespa', '', 14.5, 0),
(28, 2, 'Balboa', '', 14.5, 0),
(29, 2, 'Vesuvius', '', 15.5, 0),
(30, 2, 'Vagabondo', '', 14.5, 0),
(31, 2, 'Galileo', '', 15.5, 0),
(32, 2, 'Marco Pollo', '', 14.5, 0),
(33, 2, 'Build Your Own Calzone', 'Choose four toppings of your choice!', 15, 0),
(34, 3, 'Insalata di Cesare', 'Romaine lettuce and croutons with freshly grated Parmesan cheese, drizzled with house-made Caesar dressing.', 4, 0),
(35, 3, 'Insalata Mista', 'Mixture of fresh Romaine, spring mix, onions, carrots, and tomatoes. Served with your choice of house, ranch, or French dressing.', 4, 0),
(36, 4, 'Caprese', 'Tomatoes, bocconcini, basil, Romaine lettuce, and balsamic glaze on your choice of bread.', 9, 0),
(37, 4, 'Pollo', 'Grilled chicken, mozzarella, tomatoes, Romaine lettuce, and pesto mayo on your choice of bread.', 11, 0),
(38, 4, 'The De Minico', 'Mortadella, prosciutto, salami, roasted red peppers, Romaine lettuce, mozzarella, and vegetable spread on your choice of bread.', 10, 0),
(39, 4, 'Volta', 'Spicy salami, hot capicollo, sautéed jalapenos, sautéed onions, spicy eggplants, mozzarella, and vegetable spread on your choice of bread.', 10, 0),
(40, 4, 'Tacchino', 'Sliced turkey, pancetta, Romaine lettuce, tomatoes, roasted peppers, mozzarella, and vegetable spread on your choice of bread.', 11, 0),
(41, 4, 'Spolumbo\'s', 'Spolumbo sausage, onions, romaine lettuce, mozzarella, and tomato sauce.', 10, 0),
(42, 4, 'Giardino', 'Zucchini, eggplants, tomatoes, onions, roasted peppers, Romaine lettuce, mozzarella, and pesto on your choice of bread.', 10, 0),
(43, 5, 'Pasta Sauce (500 ml)', 'A serving of the famous psta sauce.', 6, 0),
(44, 5, 'Coffee Beans (1 kg)', 'These beans are whole, Sapori d\'Italia Oro, espresso beans.', 28, 0),
(45, 5, 'Pizza Dough Ball (12 oz)', 'Attempt to makke pizza as good as De Minico\'s by taking our pizza dough home!', 3, 0),
(46, 5, 'Pizza Sauce (300 ml)', 'A serving of pizza sauce.', 2.5, 0),
(47, 5, 'Pizza Dough Ball (12 oz) and Pizza Sauce (300 ml)', 'Make your own pizza at home with this delicious combination.', 5, 0),
(48, 6, 'Canned Pop (355 ml)', 'Order from an assortment of canned pop drinks.', 1.5, 0),
(49, 6, 'Bottled Pop (591 ml)', 'Order from an assortment of bottled pop drinks.', 2.5, 0),
(50, 6, 'Bottled Juice (450 ml)', 'Order from an assortment of botled juices.', 2.5, 0),
(51, 6, 'Dasani Bottled Water (591 ml)', 'Quench your thirst with a bottle of water.', 1.99, 0),
(52, 6, 'SanPellegrino Sparkling Water (250 ml)', 'A perfect-size serving of sparkling water.', 2.25, 0),
(53, 6, 'SanPellegrino Sparkling Fruit Beverage (330 ml)', 'Order from an assortment of flavours!', 2.25, 0),
(54, 7, 'Cannoli', 'Choose from a selection of homemade cannoli flavours.', 1.75, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu_items_toppings`
--

DROP TABLE IF EXISTS `menu_items_toppings`;
CREATE TABLE `menu_items_toppings` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_item_id` int(10) UNSIGNED NOT NULL,
  `menu_topping_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items_toppings`
--

INSERT INTO `menu_items_toppings` (`id`, `menu_item_id`, `menu_topping_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 2, 15),
(8, 2, 3),
(9, 2, 5),
(10, 2, 6),
(11, 3, 14),
(12, 3, 3),
(13, 3, 5),
(14, 3, 9),
(15, 4, 10),
(16, 4, 3),
(17, 4, 27),
(18, 4, 5),
(19, 4, 6),
(20, 5, 24),
(21, 5, 27),
(22, 5, 25),
(23, 5, 3),
(24, 5, 5),
(25, 5, 6),
(26, 6, 17),
(27, 6, 6),
(28, 6, 5),
(29, 7, 29),
(30, 7, 2),
(31, 7, 21),
(32, 7, 20),
(33, 7, 12),
(34, 7, 19),
(35, 7, 24),
(36, 7, 5),
(37, 7, 6),
(38, 8, 29),
(39, 8, 25),
(40, 8, 7),
(41, 8, 24),
(42, 8, 5),
(43, 8, 6),
(44, 9, 22),
(45, 9, 23),
(46, 9, 31),
(47, 9, 1),
(48, 9, 3),
(49, 9, 5),
(50, 9, 6),
(51, 10, 2),
(52, 10, 24),
(53, 10, 20),
(54, 10, 5),
(55, 10, 6),
(56, 11, 2),
(57, 11, 4),
(58, 11, 13),
(59, 11, 26),
(60, 11, 5),
(61, 11, 6),
(62, 12, 10),
(63, 12, 30),
(64, 12, 24),
(65, 12, 5),
(66, 12, 6),
(67, 13, 14),
(68, 13, 3),
(69, 13, 30),
(70, 13, 33),
(71, 13, 5),
(72, 13, 6),
(73, 14, 14),
(74, 14, 24),
(75, 14, 20),
(76, 14, 5),
(77, 14, 6),
(78, 15, 28),
(79, 15, 11),
(80, 15, 3),
(81, 15, 8),
(82, 15, 18),
(83, 16, 6),
(84, 16, 32),
(85, 16, 25),
(86, 16, 16),
(87, 16, 19);

-- --------------------------------------------------------

--
-- Table structure for table `menu_toppings`
--

DROP TABLE IF EXISTS `menu_toppings`;
CREATE TABLE `menu_toppings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_toppings`
--

INSERT INTO `menu_toppings` (`id`, `name`, `description`, `price`) VALUES
(1, 'Jalapenos', '', 0),
(2, 'Pepperoni', '', 0),
(3, 'Onions', '', 0),
(4, 'Sausage', '', 0),
(5, 'Fresh Mozzarella Cheese', '', 0),
(6, 'Tomato Sauce', '', 0),
(7, 'Artichokes', '', 0),
(8, 'Arugula', '', 0),
(9, 'Barbeque Sauce', '', 0),
(10, 'Beef', '', 0),
(11, 'Beets', '', 0),
(12, 'Black Olives', '', 0),
(13, 'Capicollo', '', 0),
(14, 'Chicken', '', 0),
(15, 'Crumbled Sausage', '', 0),
(16, 'Feta', '', 0),
(17, 'Fresh Basil', '', 0),
(18, 'Fresh Shaved Parmesan', '', 0),
(19, 'Fresh Tomatoes', '', 0),
(20, 'Green Peppers', '', 0),
(21, 'Ham', '', 0),
(22, 'Hot Capicollo', '', 0),
(23, 'Hot Salami', '', 0),
(24, 'Mushrooms', '', 0),
(25, 'Olives', '', 0),
(26, 'Pancetta', '', 0),
(27, 'Peppers', '', 0),
(28, 'Pesto', '', 0),
(29, 'Prosciutto', '', 0),
(30, 'Roasted Red Peppers', '', 0),
(31, 'Spicy Eggplant', '', 0),
(32, 'Spinach', '', 0),
(33, 'Sun Dried Tomato', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_categories`
--
ALTER TABLE `menu_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items_toppings`
--
ALTER TABLE `menu_items_toppings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_toppings`
--
ALTER TABLE `menu_toppings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_categories`
--
ALTER TABLE `menu_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `menu_items_toppings`
--
ALTER TABLE `menu_items_toppings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `menu_toppings`
--
ALTER TABLE `menu_toppings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
