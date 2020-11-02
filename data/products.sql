-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2020 at 02:53 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wnm608_outline`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `description`, `thumbnail`, `images`, `date_create`, `date_modify`) VALUES
(1, 'Original Mille Crêpes', 80.00, 'cake', 'Thin handmade crêpes layered with ethereal light pastry cream. ', 'cake_original_thumb.jpg', 'cake_original_1.jpg,cake_original_2.jpg,cake_original_3.jpg', '2020-11-02 14:45:57', '2020-11-02 14:45:57'),
(2, 'Green Tea Mille Crêpes', 80.00, '', 'Fine green tea powder is infused into every element of our delicate Green Tea Mille Crêpes, a sight to behold with no less than twenty lacy thin crêpes enveloping the lightest pastry cream, vibrant green tea flavors gently humming in the background. Powdered matcha to top.', 'cake_green_tea_thumb.jpg', 'cake_green_tea_1.jpg,cake_green_tea_2.jpg,cake_green_tea_3.jpg', '2020-11-02 14:45:57', '2020-11-02 14:45:57'),
(3, 'Chocolate Mille Crêpes', 80.00, 'cake', 'Thin handmade chocolate crêpes, each one rich in cocoa and complete with lacy edges. Layers are alternated with chocolate pastry cream and a delicate caramelized surface.', 'cake_chocolate_thumb.jpg', 'cake_chocolate_1.jpg,cake_chocolate_2.jpg,cake_chocolate_3.jpg', '2020-11-02 14:45:57', '2020-11-02 14:45:57'),
(4, 'Durian Mille Crêpes', 80.00, 'cake', 'Thin handmade durian crêpes, each one rich in durian pulp and complete with lacy edges. Layers are alternated with vanilla pastry cream and a delicate durian surface.', 'cake_durian_thumb.jpg', 'cake_durian_1.jpg,cake_durian_2.jpg,cake_durian_3.jpg', '2020-11-02 14:45:57', '2020-11-02 14:45:57'),
(5, 'Brioche', 6.99, 'bakery', 'This Japanese style bread is soft, moist, and rich. It has a buttery and milky flavor.', 'bakery_brioche_thumb.jpg', 'bakery_brioche_1.jpg,bakery_brioche_2.jpg,bakery_brioche_3.jpg', '2020-11-02 14:45:57', '2020-11-02 14:45:57'),
(6, 'Red Bean Bread', 5.35, 'bakery', 'A soft bread filled with red bean paste.', 'bakery_red_bean_bread_thumb.jpg', 'bakery_red_bean_bread_1.jpg,bakery_red_bean_bread_2.jpg,bakery_red_bean_bread_3.jpg', '2020-11-02 14:45:57', '2020-11-02 14:45:57'),
(7, 'Taro Puff Pastry', 6.80, 'bakery', 'This puff pastry is light, flaky, and layered with delicious taro filling inside.', 'bakery_taro_puff_pastry_thumb.jpg', 'bakery_taro_puff_pastry_1.jpg,bakery_taro_puff_pastry_2.jpg,bakery_taro_puff_pastry_3.jpg', '2020-11-02 14:45:57', '2020-11-02 14:45:57'),
(8, 'Cheese Dog', 7.99, 'bakery', 'Soft bread wrapped with a hot dog, cheddar & mozzarella cheese. Baked with ketchup, light mayo, black pepper, and dry parsely.', 'bakery_cheese_dog_thumb.jpg', 'bakery_cheese_dog_1.jpg,bakery_cheese_dog_2.jpg,bakery_cheese_dog_3.jpg', '2020-11-02 14:45:57', '2020-11-02 14:45:57'),
(9, 'Jasmine Green Tea', 4.75, 'drink', 'Jasmine Green tea, bright and floral. Made with organic dairy.', 'drink_jasmine_green_tea_thumb.jpg', 'drink_jasmine_green_tea_1.jpg', '2020-11-02 14:51:21', '2020-11-02 14:51:21'),
(10, 'Thai Tea', 4.25, 'drink', 'Brewed from a strong Ceylon green tea and spices combined with organic dairy milk and organic condensed milk.', 'drink_thai_tea_thumb.jpg', 'drink_thai_tea_1.jpg', '2020-11-02 14:51:21', '2020-11-02 14:51:21'),
(11, 'Strawberry Matcha Latte', 5.50, 'drink', 'Organic premium-grade matcha, Oatly oat milk, and housemade strawberry puree. No adjustments allowed.', 'drink_straberry_matcha_latte_thumb.jpg', 'drink_straberry_matcha_latte_1.jpg', '2020-11-02 14:51:21', '2020-11-02 14:51:21'),
(12, 'Korean Banana Milk with Espresso', 6.50, 'drink', 'Milk drinks but with a shot of coffee. All-natural, housemade banana jam paired with Oatly oat milk. Vegan.', 'drink_korean_banana_milk_with_espresso_thumb.jpg', 'drink_korean_banana_milk_with_espresso_1.jpg', '2020-11-02 14:51:21', '2020-11-02 14:51:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
