-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-01-2024 a las 12:16:58
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `videoclub`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `book`
--

CREATE TABLE `book` (
  `id` int(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `pages` int(8) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `book`
--

INSERT INTO `book` (`id`, `title`, `author`, `year`, `publisher`, `pages`, `isbn`, `genre`) VALUES
(1, 'The Great Gatsby', 'F. Scott Fitzgerald', 1925, 'Charles Scribner\'s Sons', 180, 'ISBN123456789', 'Classic'),
(2, 'To Kill a Mockingbird', 'Harper Lee', 1960, 'J.B. Lippincott & Co.', 281, 'ISBN234567890', 'Fiction'),
(3, '1984', 'George Orwell', 1949, 'Secker & Warburg', 328, 'ISBN345678901', 'Dystopian'),
(4, 'The Catcher in the Rye', 'J.D. Salinger', 1951, 'Little, Brown and Company', 214, 'ISBN456789012', 'Coming of Age'),
(5, 'Harry Potter and the Sorcerer\'s Stone', 'J.K. Rowling', 1997, 'Bloomsbury', 320, 'ISBN567890123', 'Fantasy'),
(6, 'The Lord of the Rings', 'J.R.R. Tolkien', 1954, 'George Allen & Unwin', 1178, 'ISBN678901234', 'Fantasy'),
(7, 'Pride and Prejudice', 'Jane Austen', 1813, 'T. Egerton, Whitehall', 279, 'ISBN789012345', 'Romance'),
(8, 'The Hobbit', 'J.R.R. Tolkien', 1937, 'George Allen & Unwin', 310, 'ISBN890123456', 'Fantasy'),
(9, 'The Da Vinci Code', 'Dan Brown', 2003, 'Doubleday', 454, 'ISBN901234567', 'Mystery'),
(10, 'The Shining', 'Stephen King', 1977, 'Doubleday', 447, 'ISBN012345678', 'Horror'),
(11, 'The Alchemist', 'Paulo Coelho', 1988, 'HarperCollins', 197, 'ISBN234567890', 'Adventure'),
(12, 'Moby-Dick', 'Herman Melville', 1851, 'Harper & Brothers', 635, 'ISBN345678901', 'Adventure'),
(13, 'The Hunger Games', 'Suzanne Collins', 2008, 'Scholastic Corporation', 374, 'ISBN456789012', 'Dystopian'),
(14, 'One Hundred Years of Solitude', 'Gabriel García Márquez', 1967, 'Harper & Row', 417, 'ISBN567890123', 'Magical Realism'),
(15, 'Wuthering Heights', 'Emily Bronte', 1847, 'Thomas Cautley Newby', 342, 'ISBN678901234', 'Gothic Fiction'),
(16, 'The Girl with the Dragon Tattoo', 'Stieg Larsson', 2005, 'Norstedts Förlag', 590, 'ISBN789012345', 'Mystery'),
(17, 'Brave New World', 'Aldous Huxley', 1932, 'Chatto & Windus', 311, 'ISBN890123456', 'Dystopian'),
(18, 'The Road', 'Cormac McCarthy', 2006, 'Knopf', 287, 'ISBN901234567', 'Post-Apocalyptic'),
(19, 'Alice\'s Adventures in Wonderland', 'Lewis Carroll', 1865, 'Macmillan Publishers', 200, 'ISBN012345678', 'Fantasy'),
(20, 'The Fault in Our Stars', 'John Green', 2012, 'Dutton Books', 313, 'ISBN234567890', 'Young Adult'),
(21, 'PruebaLibro', 'PruebaAutor', 2023, 'PruebaEditorial', 234, 'ISBN132557789', 'PruebaGenero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disc`
--

CREATE TABLE `disc` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `duration` int(6) NOT NULL,
  `iswc` varchar(11) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `disc`
--

INSERT INTO `disc` (`id`, `title`, `artist`, `year`, `publisher`, `duration`, `iswc`, `genre`) VALUES
(1, 'Abbey Road', 'The Beatles', 1969, 'Apple Records', 47, 'ISWC123456', 'Rock'),
(2, 'Thriller', 'Michael Jackson', 1982, 'Epic Records', 42, 'ISWC234567', 'Pop'),
(3, 'The Dark Side of the Moon', 'Pink Floyd', 1973, 'Harvest Records', 43, 'ISWC345678', 'Progressive Rock'),
(4, 'Back in Black', 'AC/DC', 1980, 'Albert Productions', 42, 'ISWC456789', 'Hard Rock'),
(5, 'Rumours', 'Fleetwood Mac', 1977, 'Warner Bros. Records', 40, 'ISWC567890', 'Rock'),
(6, 'The Wall', 'Pink Floyd', 1979, 'Columbia Records', 81, 'ISWC678901', 'Progressive Rock'),
(7, 'Hotel California', 'Eagles', 1976, 'Asylum Records', 43, 'ISWC789012', 'Rock'),
(8, 'A Night at the Opera', 'Queen', 1975, 'EMI Records', 43, 'ISWC890123', 'Rock'),
(9, 'Led Zeppelin IV', 'Led Zeppelin', 1971, 'Atlantic Records', 42, 'ISWC901234', 'Hard Rock'),
(10, 'Purple Rain', 'Prince', 1984, 'Warner Bros. Records', 43, 'ISWC012345', 'Pop'),
(11, 'Born to Run', 'Bruce Springsteen', 1975, 'Columbia Records', 39, 'ISWC123456', 'Rock'),
(12, 'Journey to the Centre of the Earth', 'Rick Wakeman', 1974, 'A&M Records', 40, 'ISWC234567', 'Progressive Rock'),
(13, 'Bad', 'Michael Jackson', 1987, 'Epic Records', 48, 'ISWC345678', 'Pop'),
(14, 'Bridge over Troubled Water', 'Simon & Garfunkel', 1970, 'Columbia Records', 46, 'ISWC456789', 'Folk Rock'),
(15, 'Brothers in Arms', 'Dire Straits', 1985, 'Vertigo Records', 55, 'ISWC567890', 'Rock'),
(16, 'The Joshua Tree', 'U2', 1987, 'Island Records', 50, 'ISWC678901', 'Rock'),
(17, 'Bat Out of Hell', 'Meat Loaf', 1977, 'Cleveland International Records', 46, 'ISWC789012', 'Rock'),
(18, 'Born in the U.S.A.', 'Bruce Springsteen', 1984, 'Columbia Records', 46, 'ISWC890123', 'Rock'),
(19, 'Brotherhood', 'New Order', 1986, 'Factory Records', 41, 'ISWC901234', 'New Wave'),
(20, 'A Kind of Magic', 'Queen', 1986, 'EMI Records', 43, 'ISWC012345', 'Rock'),
(21, 'PruebaDisco', 'PruebaArtista', 2023, 'PruebaEditorial', 123, 'ISWC135246', 'PruebaGenero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movie`
--

CREATE TABLE `movie` (
  `id` int(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `duration` int(5) NOT NULL,
  `isan` varchar(20) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `cast` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `movie`
--

INSERT INTO `movie` (`id`, `title`, `director`, `year`, `publisher`, `duration`, `isan`, `genre`, `cast`) VALUES
(1, 'Inception', 'Christopher Nolan', 2010, 'Warner Bros.', 148, 'ISAN123456', 'Sci-Fi', NULL),
(2, 'The Shawshank Redemption', 'Frank Darabont', 1994, 'Castle Rock Entertainment', 142, 'ISAN789012', 'Drama', NULL),
(3, 'The Godfather', 'Francis Ford Coppola', 1972, 'Paramount Pictures', 175, 'ISAN345678', 'Crime', NULL),
(4, 'Pulp Fiction', 'Quentin Tarantino', 1994, 'Miramax Films', 154, 'ISAN901234', 'Crime', NULL),
(5, 'Forrest Gump', 'Robert Zemeckis', 1994, 'Paramount Pictures', 142, 'ISAN567890', 'Drama', NULL),
(6, 'The Dark Knight', 'Christopher Nolan', 2008, 'Warner Bros.', 152, 'ISAN234567', 'Action', NULL),
(7, 'Schindler\'s List', 'Steven Spielberg', 1993, 'Universal Pictures', 195, 'ISAN890123', 'Biography', NULL),
(8, 'The Matrix', 'The Wachowskis', 1999, 'Warner Bros.', 136, 'ISAN456789', 'Action', NULL),
(9, 'The Lord of the Rings: The Fellowship of the Ring', 'Peter Jackson', 2001, 'New Line Cinema', 178, 'ISAN012345', 'Adventure', NULL),
(10, 'Titanic', 'James Cameron', 1997, 'Paramount Pictures', 195, 'ISAN678901', 'Romance', NULL),
(11, 'Avatar', 'James Cameron', 2009, '20th Century Fox', 162, 'ISAN234567', 'Action', NULL),
(12, 'The Silence of the Lambs', 'Jonathan Demme', 1991, 'Orion Pictures', 118, 'ISAN890123', 'Crime', NULL),
(13, 'The Shawshank Redemption', 'Frank Darabont', 1994, 'Castle Rock Entertainment', 142, 'ISAN345678', 'Drama', NULL),
(14, 'Inception', 'Christopher Nolan', 2010, 'Warner Bros.', 148, 'ISAN567890', 'Sci-Fi', NULL),
(15, 'The Godfather: Part II', 'Francis Ford Coppola', 1974, 'Paramount Pictures', 202, 'ISAN901234', 'Crime', NULL),
(16, 'Fight Club', 'David Fincher', 1999, '20th Century Fox', 139, 'ISAN012345', 'Drama', NULL),
(17, 'The Pianist', 'Roman Polanski', 2002, 'Focus Features', 150, 'ISAN678901', 'Biography', NULL),
(18, 'The Departed', 'Martin Scorsese', 2006, 'Warner Bros.', 151, 'ISAN234567', 'Crime', NULL),
(19, 'The Social Network', 'David Fincher', 2010, 'Columbia Pictures', 120, 'ISAN890123', 'Biography', NULL),
(20, 'Gone with the Wind', 'Victor Fleming', 1939, 'Metro-Goldwyn-Mayer', 238, 'ISAN567890', 'Drama', NULL),
(22, 'Prueba', 'PruebaDire', 2023, 'MarioPrueba', 245, 'ISAN146789', 'Prueba', NULL),
(23, 'Prueba2', 'asas', 2023, 'asasas', 12, 'ISAN143470', 'asasas', NULL),
(24, 'Prueba 2', 'Prueba 2', 2024, 'Prueba 2', 244, 'ISAN193456', 'Prueba 2', NULL),
(25, 'Prueba 3', 'Prueba 3', 2024, 'Prueba 3', 35, 'ISAN123456', 'Prueba 3', 'Actor 2, Actor 2, Actor 2, Actor 2, Actor 2, Actor 2, Actor 2, Actor 2, Actor 2'),
(26, 'prueba 4', 'prueba 4', 2024, 'prueba 4', 235, 'ISAN123456', 'prueba 4', 'Actor 1 Di Caprio'),
(27, 'Prueba Nueva', 'Prueba Nueva Director', 2025, 'Prueba Nueva', 234, 'ISAN123456', 'Prueba Nueva', 'Actor 1, Actor 2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `disc`
--
ALTER TABLE `disc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `book`
--
ALTER TABLE `book`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `disc`
--
ALTER TABLE `disc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
