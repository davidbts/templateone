-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-10-2021 a las 21:30:41
-- Versión del servidor: 10.5.12-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u411622228_Upton4ever`
--

-- --------------------------------------------------------
INSERT INTO `elements` (`user_id`, `subcategory_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 17, 'Cinturones', now(), now()),
(1, 17, 'Joyería fina', now(), now()),
(1, 17, 'Pashminas', now(), now()),
(1, 17, 'Bisutería', now(), now()),
(1, 17, 'Dijes', now(), now()),
(1, 17, 'Gorros', now(), now()),
(1, 17, 'Lentes de sol', now(), now()),
(1, 17, 'Relojes', now(), now()),
(1, 17, 'Bufandas', now(), now()),
(1, 17, 'Fundas para celulares', now(), now()),
(1, 17, 'Guantes', now(), now()),
(1, 17, 'Llaveros', now(), now()),
(1, 17, 'Sombreros', now(), now()),
(1, 25, 'Shorts', now(), now()),
(1, 25, 'Bermudas', now(), now()),
(1, 25, 'Pants', now(), now()),
(1, 25, 'Playeras', now(), now()),
(1, 28, 'Cinturones', now(), now()),
(1, 28, 'Corbatas', now(), now()),
(1, 28, 'Mancuernillas', now(), now()),
(1, 28, 'Sombreros', now(), now()),
(1, 28, 'Gorras', now(), now()),
(1, 28, 'Mochila cruzada o de pecho', now(), now()),
(1, 28, 'Mochila para laptop', now(), now()),
(1, 41, 'Pants', now(), now()),
(1, 41, 'Shorts', now(), now()),
(1, 41, 'Playera', now(), now()),
(1, 42, 'Bolsas de mano', now(), now()),
(1, 42, 'Gorras', now(), now()),
(1, 42, 'Sombreros', now(), now()),
(1, 42, 'Mochila cruzada o de pecho', now(), now()),
(1, 42, 'Mochila escolar', now(), now()),
(1, 42, 'Juguetes', now(), now()),
(1, 51, 'Shorts', now(), now()),
(1, 51, 'Bermudas', now(), now()),
(1, 51, 'Pants', now(), now()),
(1, 51, 'Playeras', now(), now()),
(1, 54, 'Gorras', now(), now()),
(1, 54, 'Mochila cruzada o de pecho', now(), now()),
(1, 54, 'Mochila escolar', now(), now()),
(1, 54, 'Juguetes', now(), now()),
(1, 61, 'Pañalera', now(), now()),
(1, 61, 'Cobertores', now(), now()),
(1, 61, 'Sillas de aprendizaje', now(), now()),
(1, 61, 'Esterilizadores', now(), now()),
(1, 61, 'Baberos', now(), now()),
(1, 61, 'Porta bebé/ bambineto', now(), now()),
(1, 61, 'Cuna portatil', now(), now()),
(1, 61, 'Carriola', now(), now());

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
