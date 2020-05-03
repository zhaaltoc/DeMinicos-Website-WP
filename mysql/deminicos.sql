-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2020 at 11:00 PM
-- Server version: 10.3.21-MariaDB
-- PHP Version: 5.6.40

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

-- --------------------------------------------------------

--
-- Table structure for table `addon`
--

CREATE TABLE `addon` (
  `id` int(10) UNSIGNED NOT NULL,
  `items_id` int(10) UNSIGNED NOT NULL,
  `type` int(10) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addon`
--

INSERT INTO `addon` (`id`, `items_id`, `type`) VALUES
(1, 41, 1),
(2, 42, 1),
(3, 43, 1),
(4, 44, 1),
(5, 45, 1),
(6, 46, 1),
(7, 47, 1),
(8, 48, 1),
(9, 49, 1),
(10, 50, 1),
(11, 51, 1),
(12, 52, 1),
(13, 53, 1),
(14, 54, 1),
(15, 55, 1),
(16, 56, 1),
(17, 57, 1),
(18, 58, 1),
(19, 59, 1),
(20, 60, 1),
(21, 61, 1),
(22, 62, 1),
(23, 63, 1),
(24, 64, 1),
(25, 65, 1),
(26, 66, 1),
(27, 67, 1),
(28, 68, 1),
(29, 69, 1),
(30, 70, 1),
(31, 71, 1),
(32, 72, 1),
(33, 73, 1),
(34, 74, 1),
(35, 75, 1),
(36, 76, 1),
(37, 77, 1),
(38, 78, 1),
(39, 79, 1),
(40, 80, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagename` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(name of the picture in the http/assets/img folder)',
  `active` tinyint(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '- toggle this item active / inactive - only show entire category of items on the menu if active.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `imagename`, `active`) VALUES
(1, 'Pizza', 'Delicious 13-inch pizzas topped with fresh and vibrant ingredients. Some pizzas are available fresh or frozen!', 'Pizza_menu title.jpg', 1),
(2, 'Salads', 'Hand-crafted, fresh salads. Available as small and large.', 'Insalata_menu title.jpg', 1),
(3, 'Panini', 'Panini\'s on house made buns.', 'Panini_menu title.jpg', 1),
(4, 'Market Menu', 'Homemade goods to create your own dishes with!', '', 1),
(5, 'Drinks', 'Enjoy a refreshing beverage with your meal.', '', 1),
(6, 'Desserts', 'Add a delicious dessert to your order.', 'Desserts_title.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories_items`
--

CREATE TABLE `categories_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `categories_id` int(10) UNSIGNED NOT NULL,
  `items_id` int(10) UNSIGNED NOT NULL,
  `weight` int(3) UNSIGNED NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories_items`
--

INSERT INTO `categories_items` (`id`, `categories_id`, `items_id`, `weight`) VALUES
(1, 1, 1, 100),
(2, 1, 2, 100),
(3, 1, 3, 100),
(4, 1, 4, 100),
(5, 1, 5, 100),
(6, 1, 6, 100),
(7, 1, 7, 12),
(8, 1, 8, 100),
(9, 1, 9, 100),
(10, 1, 10, 11),
(11, 1, 11, 10),
(12, 1, 12, 100),
(13, 1, 13, 100),
(14, 1, 14, 100),
(15, 1, 15, 100),
(16, 1, 16, 100),
(17, 1, 17, 100),
(18, 2, 18, 100),
(19, 2, 19, 100),
(20, 2, 20, 100),
(21, 2, 21, 100),
(22, 3, 22, 100),
(23, 3, 23, 100),
(24, 3, 24, 100),
(25, 3, 25, 100),
(26, 3, 26, 100),
(27, 3, 27, 100),
(28, 3, 28, 100),
(29, 8, 29, 100),
(30, 8, 30, 100),
(31, 4, 31, 100),
(32, 4, 32, 100),
(33, 4, 33, 100),
(34, 4, 81, 100),
(35, 4, 82, 100),
(36, 5, 34, 100),
(37, 5, 35, 100),
(38, 5, 36, 100),
(39, 5, 37, 100),
(40, 5, 38, 100),
(41, 5, 39, 100),
(42, 6, 40, 100);

-- --------------------------------------------------------

--
-- Table structure for table `combo`
--

CREATE TABLE `combo` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `type` int(10) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `combo`
--

INSERT INTO `combo` (`id`, `item_id`, `type`) VALUES
(1, 17, 4);

-- --------------------------------------------------------

--
-- Table structure for table `combo_items`
--

CREATE TABLE `combo_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `combo_id` int(10) UNSIGNED NOT NULL,
  `items_id` int(10) UNSIGNED NOT NULL,
  `weight` int(3) UNSIGNED NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `combo_items`
--

INSERT INTO `combo_items` (`id`, `combo_id`, `items_id`, `weight`) VALUES
(1, 1, 41, 100),
(2, 1, 42, 100),
(3, 1, 43, 100),
(4, 1, 44, 100),
(5, 1, 45, 100),
(6, 1, 46, 100),
(7, 1, 47, 100),
(8, 1, 48, 100),
(9, 1, 49, 100),
(10, 1, 50, 100),
(11, 1, 51, 100),
(12, 1, 52, 100),
(13, 1, 53, 100),
(14, 1, 54, 100),
(15, 1, 55, 100),
(16, 1, 56, 100),
(17, 1, 57, 100),
(18, 1, 58, 100),
(19, 1, 59, 100),
(20, 1, 60, 100),
(21, 1, 61, 100),
(22, 1, 62, 100),
(23, 1, 63, 100),
(24, 1, 64, 100),
(25, 1, 65, 100),
(26, 1, 66, 100),
(27, 1, 67, 100),
(28, 1, 68, 100),
(29, 1, 69, 100),
(30, 1, 70, 100),
(31, 1, 71, 100),
(32, 1, 72, 100),
(33, 1, 73, 100);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortdesc` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'displayed as a sub name - like 500ml',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagename` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(name of the picture in the http/assets/img folder)',
  `notes` mediumblob NOT NULL,
  `price_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `package_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `addon_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `combo_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `instock` tinyint(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '- toggle an out of stock comment on the item page.',
  `active` tinyint(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '- toggle this item active / inactive - only show on the menu if active.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `shortdesc`, `description`, `imagename`, `notes`, `price_id`, `package_id`, `addon_id`, `combo_id`, `instock`, `active`) VALUES
(1, 'Piccante', '', '', '', '', 15, 0, 0, 0, 1, 1),
(2, 'The Sal', '', '', '', '', 13, 0, 0, 0, 1, 1),
(3, 'Vespa', '', '', '', '', 17, 0, 0, 0, 1, 1),
(4, 'Balboa', '', '', '', '', 17, 0, 0, 0, 1, 1),
(5, 'Verdua', '', '', '', '', 17, 0, 0, 0, 1, 1),
(6, 'Margherita', '', '', '', '', 13, 0, 0, 0, 1, 1),
(7, 'Za Za', '', '', '', '', 17, 0, 0, 0, 1, 1),
(8, 'Quattro Stagioni', '', '', '', '', 14, 0, 0, 0, 1, 1),
(9, 'Vesuvius', '', '', '', '', 19, 0, 0, 0, 1, 1),
(10, 'Pepperoni a Classico', '', '', '', '', 14, 0, 0, 0, 1, 1),
(11, 'Artista', '', '', '', '', 16, 0, 0, 0, 1, 1),
(12, 'Vagabondo', '', '', '', '', 17, 0, 0, 0, 1, 1),
(13, 'Galileo', '', '', '', '', 19, 0, 0, 0, 1, 1),
(14, 'Marco Pollo', '', '', '', '', 17, 0, 0, 0, 1, 1),
(15, 'Sofia', '', '', '', '', 18, 0, 0, 0, 1, 1),
(16, 'Nicola', '', '', '', '', 18, 0, 0, 0, 1, 1),
(17, 'Build Your Own Pizza', '', 'Choose four toppings of your choice!', '', '', 20, 0, 0, 1, 1, 1),
(18, 'Insalata di Cesare', 'small', 'Romaine lettuce and croutons with freshly grated Parmesan cheese, drizzled with house,made Caesar dressing.', '', '', 7, 0, 0, 0, 1, 1),
(19, 'Insalata Mista', 'small', 'Mixture of fresh Romaine, spring mix, onions, carrots, and tomatoes. Served with your choice of house, ranch, or French dressing.', '', '', 7, 0, 0, 0, 1, 1),
(20, 'Insalata di Cesare', 'large', 'Romaine lettuce and croutons with freshly grated Parmesan cheese, drizzled with house,made Caesar dressing.', '', '', 10, 0, 0, 0, 1, 1),
(21, 'Insalata Mista', 'large', 'Mixture of fresh Romaine, spring mix, onions, carrots, and tomatoes. Served with your choice of house, ranch, or French dressing.', '', '', 10, 0, 0, 0, 1, 1),
(22, 'Caprese', '', 'Tomatoes, bocconcini, basil, Romaine lettuce, and balsamic glaze on your choice of bread.', '', '', 11, 0, 0, 0, 1, 1),
(23, 'Pollo', '', 'Grilled chicken, mozzarella, tomatoes, Romaine lettuce, and pesto mayo on your choice of bread.', '', '', 13, 0, 0, 0, 1, 1),
(24, 'The De Minico', '', 'Mortadella, prosciutto, salami, roasted red peppers, Romaine lettuce, mozzarella, and vegetable spread on your choice of bread.', '', '', 12, 0, 0, 0, 1, 1),
(25, 'Volta', '', 'Spicy salami, hot capicollo, sautéed jalapenos, sautéed onions, spicy eggplants, mozzarella, and vegetable spread on your choice of bread.', '', '', 12, 0, 0, 0, 1, 1),
(26, 'Tacchino', '', 'Sliced turkey, pancetta, Romaine lettuce, tomatoes, roasted peppers, mozzarella, and vegetable spread on your choice of bread.', '', '', 13, 0, 0, 0, 1, 1),
(27, 'Spolumbo\'s', '', 'Spolumbo sausage, onions, romaine lettuce, mozzarella, and tomato sauce.', '', '', 12, 0, 0, 0, 1, 1),
(28, 'Giardino', '', 'Zucchini, eggplants, tomatoes, onions, roasted peppers, Romaine lettuce, mozzarella, and pesto on your choice of bread.', '', '', 12, 0, 0, 0, 1, 1),
(29, 'Pasta Sauce', '750 ml', '', '', '', 10, 0, 0, 0, 1, 1),
(30, 'Arrabiatta Pasta Sauce', '750 ml', '', '', '', 10, 0, 0, 0, 1, 1),
(31, 'Pizza Dough Ball', '13 oz', 'Attempt to makke pizza as good as De Minico\'s by taking our pizza dough home!', '', '', 6, 0, 0, 0, 1, 1),
(32, 'Pizza Sauce', '300 ml', 'A serving of pizza sauce.', '', '', 6, 0, 0, 0, 1, 1),
(33, 'Pizza Dough Ball & Pizza Sauce', '', 'Make your own pizza at home with this delicious combination.', '', '', 8, 1, 0, 0, 1, 1),
(34, 'Canned Pop', '355 ml', 'Order from an assortment of canned pop drinks.', '', '', 1, 0, 0, 0, 1, 1),
(35, 'Bottled Pop', '', 'Order from an assortment of bottled pop drinks.', '', '', 4, 0, 0, 0, 1, 0),
(36, 'Bottled Juice', '', 'Order from an assortment of botled juices.', '', '', 5, 0, 0, 0, 1, 1),
(37, 'Bottled Water', ' 591 ml', 'Quench your thirst with a bottle of water.', '', '', 3, 0, 0, 0, 1, 1),
(38, 'Sparkling Water', '', 'A perfect,size serving of sparkling water.', '', '', 4, 0, 0, 0, 1, 1),
(39, 'SanPellegrino', '330 ml', 'Order from an assortment of flavours!', '', '', 4, 0, 0, 0, 1, 1),
(40, 'Cannoli', '', 'Choose from a selection of homemade cannoli flavours.', '', '', 2, 0, 0, 0, 1, 1),
(41, 'Jalapenos', '', '', '', '', 1, 0, 1, 0, 1, 1),
(42, 'Pepperoni', '', '', '', '', 1, 0, 2, 0, 1, 1),
(43, 'Onions', '', '', '', '', 1, 0, 3, 0, 1, 1),
(44, 'Sausage', '', '', '', '', 1, 0, 4, 0, 1, 1),
(45, 'Fresh Mozzarella Cheese', '', '', '', '', 1, 0, 5, 0, 1, 1),
(46, 'Tomato Sauce', '', '', '', '', 1, 0, 6, 0, 1, 1),
(47, 'Artichokes', '', '', '', '', 1, 0, 7, 0, 1, 1),
(48, 'Arugula', '', '', '', '', 1, 0, 8, 0, 1, 1),
(49, 'Barbeque Sauce', '', '', '', '', 1, 0, 9, 0, 1, 1),
(50, 'Beef', '', '', '', '', 1, 0, 10, 0, 1, 1),
(51, 'Beets', '', '', '', '', 1, 0, 11, 0, 1, 1),
(52, 'Black Olives', '', '', '', '', 1, 0, 12, 0, 1, 1),
(53, 'Capicollo', '', '', '', '', 1, 0, 13, 0, 1, 1),
(54, 'Chicken', '', '', '', '', 1, 0, 14, 0, 1, 1),
(55, 'Crumbled Sausage', '', '', '', '', 1, 0, 15, 0, 1, 1),
(56, 'Feta', '', '', '', '', 1, 0, 16, 0, 1, 1),
(57, 'Fresh Basil', '', '', '', '', 1, 0, 17, 0, 1, 1),
(58, 'Fresh Shaved Parmesan', '', '', '', '', 1, 0, 18, 0, 1, 1),
(59, 'Fresh Tomatoes', '', '', '', '', 1, 0, 19, 0, 1, 1),
(60, 'Green Peppers', '', '', '', '', 1, 0, 20, 0, 1, 1),
(61, 'Ham', '', '', '', '', 1, 0, 21, 0, 1, 1),
(62, 'Hot Capicollo', '', '', '', '', 1, 0, 22, 0, 1, 1),
(63, 'Hot Salami', '', '', '', '', 1, 0, 23, 0, 1, 1),
(64, 'Mushrooms', '', '', '', '', 1, 0, 24, 0, 1, 1),
(65, 'Olives', '', '', '', '', 1, 0, 25, 0, 1, 1),
(66, 'Pancetta', '', '', '', '', 1, 0, 26, 0, 1, 1),
(67, 'Peppers', '', '', '', '', 1, 0, 27, 0, 1, 1),
(68, 'Pesto', '', '', '', '', 1, 0, 28, 0, 1, 1),
(69, 'Prosciutto', '', '', '', '', 1, 0, 29, 0, 1, 1),
(70, 'Roasted Red Peppers', '', '', '', '', 1, 0, 30, 0, 1, 1),
(71, 'Spicy Eggplant', '', '', '', '', 1, 0, 31, 0, 1, 1),
(72, 'Spinach', '', '', '', '', 1, 0, 32, 0, 1, 1),
(73, 'Sun Dried Tomato', '', '', '', '', 1, 0, 33, 0, 1, 1),
(74, 'Coke', '', '', '', '', 1, 0, 34, 0, 1, 1),
(75, 'Diet Coke', '', '', '', '', 1, 0, 35, 0, 1, 1),
(76, 'Sprite', '', '', '', '', 1, 0, 36, 0, 1, 1),
(77, 'Gingerale', '', '', '', '', 1, 0, 37, 0, 1, 1),
(78, 'Dasani Water', '', '', '', '', 3, 0, 38, 0, 1, 1),
(79, 'Chinnotto', '', '', '', '', 4, 0, 39, 0, 1, 1),
(80, 'Pomegranite', '', '', '', '', 4, 0, 40, 0, 1, 1),
(81, 'Pizza Cheese', '150 g', '', '', '', 7, 0, 0, 0, 1, 1),
(82, 'Pizza Kit', 'dough, sauce, cheese', '', '', '', 10, 2, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `items_addon`
--

CREATE TABLE `items_addon` (
  `id` int(10) UNSIGNED NOT NULL,
  `items_id` int(10) UNSIGNED NOT NULL,
  `addon_id` int(10) UNSIGNED NOT NULL,
  `weight` int(3) UNSIGNED NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items_addon`
--

INSERT INTO `items_addon` (`id`, `items_id`, `addon_id`, `weight`) VALUES
(1, 1, 5, 100),
(2, 2, 5, 100),
(3, 3, 5, 100),
(4, 4, 5, 100),
(5, 5, 5, 100),
(6, 6, 5, 100),
(7, 7, 5, 100),
(8, 8, 5, 100),
(9, 9, 5, 100),
(10, 10, 5, 100),
(11, 11, 5, 100),
(12, 12, 5, 100),
(13, 13, 5, 100),
(14, 14, 5, 100),
(15, 15, 5, 100),
(16, 16, 5, 100),
(17, 17, 5, 100),
(18, 1, 6, 100),
(19, 2, 6, 100),
(20, 3, 6, 100),
(21, 4, 6, 100),
(22, 5, 6, 100),
(23, 6, 6, 100),
(24, 7, 6, 100),
(25, 8, 6, 100),
(26, 9, 6, 100),
(27, 10, 6, 100),
(28, 11, 6, 100),
(29, 12, 6, 100),
(30, 13, 6, 100),
(31, 14, 6, 100),
(32, 15, 6, 100),
(33, 16, 6, 100),
(34, 17, 6, 100),
(35, 1, 1, 100),
(36, 1, 2, 100),
(37, 1, 3, 100);

-- --------------------------------------------------------

--
-- Table structure for table `items_legend`
--

CREATE TABLE `items_legend` (
  `id` int(10) UNSIGNED NOT NULL,
  `items_id` int(10) UNSIGNED NOT NULL,
  `legend_id` int(10) UNSIGNED NOT NULL,
  `weight` int(3) UNSIGNED NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items_legend`
--

INSERT INTO `items_legend` (`id`, `items_id`, `legend_id`, `weight`) VALUES
(1, 1, 1, 100),
(2, 1, 4, 100),
(3, 11, 4, 100),
(4, 7, 4, 100),
(5, 9, 2, 100),
(6, 16, 3, 100),
(7, 15, 3, 100),
(8, 5, 3, 100),
(9, 6, 3, 100);

-- --------------------------------------------------------

--
-- Table structure for table `items_price`
--

CREATE TABLE `items_price` (
  `id` int(10) UNSIGNED NOT NULL,
  `items_id` int(10) UNSIGNED NOT NULL,
  `price_id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items_price`
--

INSERT INTO `items_price` (`id`, `items_id`, `price_id`, `active`) VALUES
(1, 1, 15, 1),
(2, 2, 13, 1),
(3, 3, 17, 1),
(4, 4, 17, 1),
(5, 5, 17, 1),
(6, 6, 13, 1),
(7, 7, 17, 1),
(8, 8, 14, 1),
(9, 9, 19, 1),
(10, 10, 14, 1),
(11, 11, 16, 1),
(12, 12, 17, 1),
(13, 13, 19, 1),
(14, 14, 17, 1),
(15, 15, 18, 1),
(16, 16, 18, 1),
(17, 17, 20, 1),
(18, 18, 7, 1),
(19, 19, 7, 1),
(20, 20, 10, 1),
(21, 21, 10, 1),
(22, 22, 11, 1),
(23, 23, 13, 1),
(24, 24, 12, 1),
(25, 25, 12, 1),
(26, 26, 13, 1),
(27, 27, 12, 1),
(28, 28, 12, 1),
(29, 29, 10, 1),
(30, 30, 10, 1),
(31, 31, 6, 1),
(32, 32, 6, 1),
(33, 33, 8, 1),
(34, 34, 1, 1),
(35, 35, 4, 1),
(36, 36, 5, 1),
(37, 37, 3, 1),
(38, 38, 4, 1),
(39, 39, 4, 1),
(40, 40, 2, 1),
(41, 41, 1, 1),
(42, 42, 1, 1),
(43, 43, 1, 1),
(44, 44, 1, 1),
(45, 45, 1, 1),
(46, 46, 1, 1),
(47, 47, 1, 1),
(48, 48, 1, 1),
(49, 49, 1, 1),
(50, 50, 1, 1),
(51, 51, 1, 1),
(52, 52, 1, 1),
(53, 53, 1, 1),
(54, 54, 1, 1),
(55, 55, 1, 1),
(56, 56, 1, 1),
(57, 57, 1, 1),
(58, 58, 1, 1),
(59, 59, 1, 1),
(60, 60, 1, 1),
(61, 61, 1, 1),
(62, 62, 1, 1),
(63, 63, 1, 1),
(64, 64, 1, 1),
(65, 65, 1, 1),
(66, 66, 1, 1),
(67, 67, 1, 1),
(68, 68, 1, 1),
(69, 69, 1, 1),
(70, 70, 1, 1),
(71, 71, 1, 1),
(72, 72, 1, 1),
(73, 73, 1, 1),
(74, 74, 1, 1),
(75, 75, 1, 1),
(76, 76, 1, 1),
(77, 77, 1, 1),
(78, 78, 3, 1),
(79, 79, 4, 1),
(80, 80, 4, 1),
(81, 81, 7, 1),
(82, 82, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `legend`
--

CREATE TABLE `legend` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortdesc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `legendimagename` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(name of the picture in the http/assets/img folder)',
  `tagimagename` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `legend`
--

INSERT INTO `legend` (`id`, `name`, `shortdesc`, `description`, `legendimagename`, `tagimagename`) VALUES
(1, 'spicy', '', '', 'spicy_blk bkgrnd.jpg', 'single pepper_blk bkgrnd.jpg'),
(2, 'very spicy', '', '', 'very spicy_blk bkgrnd.jpg', 'double pepper_blk bkgrnd.jpg'),
(3, 'veggie', '', '', 'veggie_blk bkgrnd.jpg', 'tomato graphic.jpg'),
(4, 'favorite', '', '', 'Favorite_blk bkgrnd.jpg', 'DeMinicos logo_reverse on blk bkgrnd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(10) UNSIGNED NOT NULL,
  `items_id` int(10) UNSIGNED NOT NULL,
  `type` int(10) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `items_id`, `type`) VALUES
(1, 33, 1),
(2, 82, 1);

-- --------------------------------------------------------

--
-- Table structure for table `package_items`
--

CREATE TABLE `package_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `package_id` int(10) UNSIGNED NOT NULL,
  `items_id` int(10) UNSIGNED NOT NULL,
  `weight` int(3) UNSIGNED NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_items`
--

INSERT INTO `package_items` (`id`, `package_id`, `items_id`, `weight`) VALUES
(1, 1, 31, 100),
(2, 1, 32, 100),
(3, 2, 81, 100),
(4, 2, 31, 100),
(5, 2, 32, 100);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortdesc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `shortdesc`, `description`, `note`) VALUES
(1, 'In Store Menu', '', '', ''),
(2, 'Heat and Eat', '', '', ''),
(3, 'Catering', '', '', ''),
(4, 'Oven Ready', '', '', ''),
(5, 'Build Your Own', '', '', ''),
(6, 'Order Form', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pages_categories`
--

CREATE TABLE `pages_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `pages_id` int(10) UNSIGNED NOT NULL,
  `categories_id` int(10) UNSIGNED NOT NULL,
  `weight` int(3) UNSIGNED NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages_categories`
--

INSERT INTO `pages_categories` (`id`, `pages_id`, `categories_id`, `weight`) VALUES
(1, 1, 1, 100),
(2, 1, 2, 100),
(3, 1, 3, 100),
(4, 1, 5, 100),
(5, 1, 6, 100),
(6, 2, 7, 100),
(7, 2, 9, 100),
(8, 2, 8, 100),
(9, 2, 10, 100),
(10, 2, 11, 100);

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(10) UNSIGNED NOT NULL,
  `price` decimal(10,2) UNSIGNED NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `price`) VALUES
(1, '1.50'),
(2, '1.75'),
(3, '1.99'),
(4, '2.25'),
(5, '2.50'),
(6, '3.00'),
(7, '4.00'),
(8, '5.00'),
(9, '6.00'),
(10, '8.00'),
(11, '9.00'),
(12, '10.00'),
(13, '11.00'),
(14, '11.50'),
(15, '12.50'),
(16, '13.00'),
(17, '13.50'),
(18, '14.00'),
(19, '14.50'),
(20, '15.00'),
(21, '28.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addon`
--
ALTER TABLE `addon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories_items`
--
ALTER TABLE `categories_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `combo`
--
ALTER TABLE `combo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `combo_items`
--
ALTER TABLE `combo_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items_addon`
--
ALTER TABLE `items_addon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items_legend`
--
ALTER TABLE `items_legend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items_price`
--
ALTER TABLE `items_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `legend`
--
ALTER TABLE `legend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_items`
--
ALTER TABLE `package_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages_categories`
--
ALTER TABLE `pages_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addon`
--
ALTER TABLE `addon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories_items`
--
ALTER TABLE `categories_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `combo`
--
ALTER TABLE `combo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `combo_items`
--
ALTER TABLE `combo_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `items_addon`
--
ALTER TABLE `items_addon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `items_legend`
--
ALTER TABLE `items_legend`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `items_price`
--
ALTER TABLE `items_price`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `legend`
--
ALTER TABLE `legend`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `package_items`
--
ALTER TABLE `package_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pages_categories`
--
ALTER TABLE `pages_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
