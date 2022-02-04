-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2022 a las 10:09:42
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cinetics`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `mail` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `username` varchar(16) COLLATE utf8mb4_bin NOT NULL,
  `passHash` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `userFirstName` varchar(60) COLLATE utf8mb4_bin DEFAULT NULL,
  `userLastName` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `creationDate` datetime NOT NULL,
  `removeDate` datetime DEFAULT NULL,
  `lastSignIn` datetime DEFAULT NULL,
  `activationDate` datetime DEFAULT NULL,
  `activationCode` char(64) COLLATE utf8mb4_bin DEFAULT NULL,
  `resetPassExpiry` datetime DEFAULT NULL,
  `resetPassCode` char(64) COLLATE utf8mb4_bin DEFAULT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `mail`, `username`, `passHash`, `userFirstName`, `userLastName`, `creationDate`, `removeDate`, `lastSignIn`, `activationDate`, `activationCode`, `resetPassExpiry`, `resetPassCode`, `active`) VALUES
(6, 'javi@gmail.com', 'sergio', '$2y$10$jdiS6sF0g82oFoykqriNb.fmyfwUp7.i1I5JqUqO6cDFS89F9LulO', 'lankj', 'jajha', '2022-01-16 22:18:38', NULL, '2022-01-21 09:09:24', '2022-01-16 22:21:24', NULL, NULL, NULL, 1),
(40, 'admin@gmail.com', 'admin', '$2y$10$pprCJ5fBfE2R3UG/2T1GyuOtGoeQ/ANRiThWwUJ4YCzN1rWYYbyVa', 'fsfs', 'fssfs', '2022-01-22 13:31:21', NULL, '2022-02-04 10:00:06', '2022-01-22 13:31:32', NULL, '2022-02-01 14:40:08', '7cbad1165c9c3a28537312dd6a1fb82b7dfbf8ddf8865b172398efbe087f3156', 1),
(56, 'admin2@gmail.com', 'admin2', '$2y$10$RUauETYUMzbM7BygqdoJ2.g2xZm8hEOYfM36cQVw0szSSJEhu8crK', 'daad', 'adad', '2022-02-04 00:03:10', NULL, NULL, NULL, 'b8ea0808856d2226801435ef83a0da3c151a6426837a8080157b9da6d0cf931b', NULL, NULL, 0),
(57, 'ad@gmail.com', 'ada', '$2y$10$79Z/dt1eid8I3PS.Wv9Ehe4Z7SRGWnX0cYA6BVGLtA8YPnENTm3J.', 'dfsf', 'ada', '2022-02-04 08:27:56', NULL, NULL, NULL, 'f9766b9a1dec141320452c73e4335c4714d07c5d28a6d53e4a8f8a38a66c6701', NULL, NULL, 0),
(58, 'amin3@gmail.com', 'admin3', '$2y$10$MJqTPjbfEzyGDtajCampd.uWdnjV0vJpFSdB0YQNZuSnduEBAoGI6', 'fwwf', 'dfsfdd', '2022-02-04 08:31:24', NULL, NULL, NULL, '9091665a6dd3e21c33eff15630c76f55baf365fcae54b98e9d291f2f069929ce', NULL, NULL, 0),
(59, 'sergio1@gmail.com', 'sergio1', '$2y$10$X.e/ndEAm3IhXw8ucxG0Pu6kS.qQTchzv4TJCrn7YR3S8SyLVPPKS', 'wfw', 'fwf', '2022-02-04 09:18:01', NULL, NULL, NULL, 'f2cc081f72fdcdcb9dfe9fdaf010247600ef24cd5e4e015a67e1af3bd5d07959', NULL, NULL, 0),
(60, 'ser1@gmail.com', 'ser1', '$2y$10$G9X/qPCKnV.D1/LpsWyZeODj0uDRXxugJSWVMCC8djB1lIMX0h3xW', 'ada', 'faf', '2022-02-04 09:20:11', NULL, '2022-02-04 09:21:17', '2022-02-04 09:20:27', NULL, NULL, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
