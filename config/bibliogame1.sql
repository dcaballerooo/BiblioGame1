-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2022 a las 06:11:39
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bibliogame1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentsgames`
--

CREATE TABLE `comentsgames` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `game_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentsgames`
--

INSERT INTO `comentsgames` (`id`, `content`, `game_id`, `user_id`) VALUES
(7, 'Me encanta', 5, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentsnews`
--

CREATE TABLE `comentsnews` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `new_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentsnews`
--

INSERT INTO `comentsnews` (`id`, `content`, `new_id`, `user_id`) VALUES
(23, 'No me lo creo', 14, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `sub_type` varchar(55) NOT NULL,
  `description` text NOT NULL,
  `cover` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `games`
--

INSERT INTO `games` (`id`, `name`, `gender`, `sub_type`, `description`, `cover`, `url`) VALUES
(5, 'Fortnite', 'Battle-Royale', 'free-to-play', 'El battle royal, ya bien conocido por todos', 'game-01.jpg', 'https://www.epicgames.com/fortnite/es-ES/home'),
(6, 'Minecraft', 'SandBox', 'premium', 'EL videojuego más descargado del mundo', 'game-02.jpg', 'https://www.minecraft.net/es-es/download'),
(7, 'God of War', 'Mitologia', 'sin-limites', 'Llega el remaster exclusivo amado por todos', 'game-03.jpg', 'https://full-games.org/pc-god-of-war-ragnarok/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `cover` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `cover`) VALUES
(12, 'Ha abierto Bibliogame', 'Tras meses de duro desarrollo, ya está aquí, Bibliogame, tu biblioteca virtual de juegos, donde podrás encontrar gran variedad de juegos, así como podrás ver y comentar que opina la gente sobre ellos, además disponemos de un apartado de noticias en el que podrás ver que está ocurriendo en el mundo de los videojuegos y de la informática en general; esperemos que os guste.\r\nAtt: Desarollador', 'new-07.jpg'),
(13, 'Novedades sobre GTA-IV', 'No hay ninguna novedad jaja.\r\n:(', 'new-03.jpg'),
(14, 'Space-X busca gente como tú', 'La conpañía aeroespacial, propiedad de Elon Musk, ha abierto un nuevo proyecto basado en el estudio de los transmisores neuronales a la hora de jugar a diferentes videojuegos', 'new-02.jpg'),
(15, 'El fin del mundo se acerca', 'Era broma, jaja, los mayas aún no se han pronunciado al respecto', 'new-07.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `rol` varchar(55) NOT NULL,
  `created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `password`, `email`, `username`, `rol`, `created`) VALUES
(14, '$2y$10$U9na/Em55pR9VbS9gArM/uj/bzHTjvOd6ZMiKx68DLkyHZQ3RTY.W', 'admin@gmail.com', 'Admin', 'admin', '2022-11-30'),
(15, '$2y$10$jRQKtsB4O8t6Ovsm3e11ruG0ZIQdQDYDgTv2shbagGb1ZBfOWAYci', 'premium@gmail.com', 'Premium', 'premium', '2022-11-30'),
(16, '$2y$10$oYfB.nqPeSmpwMg5jneS..dq8UgmF1oQgiAJOVuHIBLiUd268GN5y', 'sin-limites@gmail.com', 'Sin-limites', 'sin-limites', '2022-11-30'),
(17, '$2y$10$vfYDf8gIdbgI1JRT2KXdLehApG47dX7MZn2UfM9BaPsSH870m0okG', 'usuario@gmail.com', 'Usuario', 'usuario', '2022-11-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_games`
--

CREATE TABLE `users_games` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentsgames`
--
ALTER TABLE `comentsgames`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`user_id`) USING BTREE,
  ADD KEY `id_game` (`game_id`) USING BTREE;

--
-- Indices de la tabla `comentsnews`
--
ALTER TABLE `comentsnews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`user_id`) USING BTREE,
  ADD KEY `id_new` (`new_id`) USING BTREE;

--
-- Indices de la tabla `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UserName` (`username`),
  ADD UNIQUE KEY `UserEmail` (`email`);

--
-- Indices de la tabla `users_games`
--
ALTER TABLE `users_games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_game` (`game_id`) USING BTREE,
  ADD KEY `id_user` (`user_id`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentsgames`
--
ALTER TABLE `comentsgames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `comentsnews`
--
ALTER TABLE `comentsnews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `users_games`
--
ALTER TABLE `users_games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentsgames`
--
ALTER TABLE `comentsgames`
  ADD CONSTRAINT `comentsgames_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comentsgames_ibfk_2` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comentsnews`
--
ALTER TABLE `comentsnews`
  ADD CONSTRAINT `comentsnews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comentsnews_ibfk_2` FOREIGN KEY (`new_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users_games`
--
ALTER TABLE `users_games`
  ADD CONSTRAINT `users_games_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_games_ibfk_2` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
