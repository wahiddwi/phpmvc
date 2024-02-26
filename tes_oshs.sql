-- Adminer 4.8.1 MySQL 10.6.16-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `product` (`id`, `product_name`, `price`, `description`) VALUES
(1,	'Obat demam berdarah herbal - Demafit',	105000,	NULL),
(2,	'Obat asam lambung herbal - Stomafit',	120000,	NULL),
(3,	'Obat gatal kulit herbal - Prosince',	115000,	NULL);

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1,	'Wahid Dwi Saputra',	'wahid@gmail.com',	'$2y$10$XO17s4nTbzHfeAbvzCTPxe7XOfHvW70Y98V579iJl0EvpP7DvjmS2');

-- 2024-02-26 19:15:33
