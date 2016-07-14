-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2016 at 10:10 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'News'),
(2, 'Events'),
(3, 'Tutorials'),
(4, 'Misc');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category`, `title`, `body`, `author`, `tags`, `date`) VALUES
(1, 1, 'International PHP Conference', '<p>Jelly beans macaroon sugar plum croissant cheesecake chocolate jelly beans gingerbread caramels. Muffin icing carrot cake liquorice sweet roll. Cookie marzipan cake apple pie cake ice cream gummies pudding sugar plum. Tart lollipop fruitcake icing gummi bears jelly-o dessert.\r\nJelly beans caramels sesame snaps gingerbread sweet. Pudding caramels toffee brownie chocolate. Cotton candy pie topping carrot cake bear claw pastry drage jelly-o. Brownie chocolate lemon drops tiramisu.\r\n\r\nChocolate cake lemon drops icing danish candy tart. Gingerbread jujubes muffin jelly beans gummi bears. Sweet roll pie sweet cheesecake donut croissant.</p>', 'Arjet Kraja', 'php news, php events', '2016-07-14 19:53:52'),
(2, 1, 'PHP 5.6.0 Beta', '<p>Jelly beans macaroon sugar plum croissant cheesecake chocolate jelly beans gingerbread caramels. Muffin icing carrot cake liquorice sweet roll. Cookie marzipan cake apple pie cake ice cream gummies pudding sugar plum. Tart lollipop fruitcake icing gummi bears jelly-o dessert.\r\nJelly beans caramels sesame snaps gingerbread sweet. Pudding caramels toffee brownie chocolate. Cotton candy pie topping carrot cake bear claw pastry drage jelly-o. Brownie chocolate lemon drops tiramisu.\r\n\r\nChocolate cake lemon drops icing danish candy tart. Gingerbread jujubes muffin jelly beans gummi bears. Sweet roll pie sweet cheesecake donut croissant.</p>', 'Ben Leslie', 'php, php releases', '2016-07-14 19:53:52'),
(3, 4, 'Ruby Vs PHP ', 'Candy canes liquorice ice cream tart soufflÃ© donut pastry. Cheesecake jelly-o liquorice ice cream cake. Pudding donut chocolate bar powder. Topping carrot cake soufflÃ© chupa chups cookie. Jelly powder gingerbread topping sugar plum jelly beans tootsie roll cupcake topping. Liquorice lollipop tootsie roll liquorice sweet donut. Apple pie tootsie roll cotton candy topping cotton candy sweet fruitcake. Sweet soufflÃ© chupa chups gummies pudding soufflÃ© sugar plum lollipop. Jujubes wafer danish fruitcake cotton candy oat cake biscuit donut carrot cake. Halvah pie chocolate topping icing. Ice cream gummi bears icing gingerbread chocolate bar jelly beans bear claw ice cream caramels. Jelly-o soufflÃ© gingerbread cake powder bear claw candy canes. Powder gummies jelly-o sweet.\r\n\r\nChupa chups cheesecake tootsie roll. Apple pie carrot cake cupcake icing soufflÃ© sugar plum marshmallow. Muffin caramels brownie. Fruitcake oat cake liquorice liquorice cheesecake icing danish ice cream pie. Apple pie apple pie sweet gummies. Gummi bears macaroon ice cream. Croissant powder cotton candy sugar plum sugar plum muffin toffee biscuit liquorice. Donut sweet dragÃ©e candy topping chocolate bar. Jelly beans macaroon cupcake chocolate. Muffin lemon drops bear claw halvah candy jelly-o dessert. Brownie marzipan lemon drops jelly pastry fruitcake pastry jelly-o. Liquorice donut wafer muffin pastry marzipan. Gummi bears apple pie cake cookie pastry apple pie lemon drops donut brownie. Gummies biscuit marshmallow.', 'John Pilskin', 'php, ruby, cupcakes', '2016-07-14 20:07:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
