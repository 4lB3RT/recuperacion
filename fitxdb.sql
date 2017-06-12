SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fitxdb`
--
CREATE DATABASE IF NOT EXISTS `fitxdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `fitxdb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fitxers`
--

CREATE TABLE IF NOT EXISTS `fitxers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `nomfitxer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `carpeta` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `iduser` (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `fitxers`
--

INSERT INTO `fitxers` (`id`, `iduser`, `nomfitxer`, `carpeta`) VALUES
(1, 1, 'docum.txt', 'informatica'),
(2, 1, 'normativa.docx', 'informatica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cognoms` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dept` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nom`, `cognoms`, `email`, `password`, `dept`) VALUES
(1, 'James', 'Langfield', 'jlang@gmail.com', '123456', 'informatica');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fitxers`
--
ALTER TABLE `fitxers`
  ADD CONSTRAINT `fitxers_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;