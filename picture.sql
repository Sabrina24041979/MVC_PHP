-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 02 nov. 2023 à 10:13
-- Version du serveur : 10.4.10-MariaDB
-- Version de PHP : 8.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mvc_php_tp`
--

-- --------------------------------------------------------

--
-- Structure de la table `picture`
--

DROP TABLE IF EXISTS `picture`;
CREATE TABLE IF NOT EXISTS `picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(255) CHARACTER SET utf8 NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `author` varchar(55) CHARACTER SET utf8 NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `picture`
--

INSERT INTO `picture` (`id`, `src`, `title`, `description`, `author`, `created_at`, `updated_at`) VALUES
(1, 'https://cdn-immonot.notariat.services/media-745/CONTENU/ACTUALITE/6938/a-6938_1634127770292..jpg', 'Image 1', 'Image : Cœur, Feuille, Automne. Utilisation gratuite.', 'PIXABAY20', '2023-10-01 00:00:00', '2023-10-23 00:00:00'),
(2, 'https://cdn.futura-sciences.com/buildsv6/images/wide1920/9/d/4/9d4a04a1cb_96236_automne-foret-shutterstock.jpg', 'Image 2', 'Image : Colombe, Oiseau, Vol. Utilisation gratuite.', 'PIXABAY20', '2023-10-01 00:00:00', '2023-10-23 00:00:00'),
(3, 'https://cmx.weightwatchers.com/assets-proxy/weight-watchers/image/upload/v1594406683/visitor-site/prod/ca/pumpkin_masthead_2_unsotg', 'pumpkin_masthead', 'La citrouille est un fruit d\'automne, récolté entre octobre et décembre. Si vous souhaitez les cultiver, il faut semer les pépins au printemps mais attention aux petits espaces car les tiges rampantes peuvent parfois atteindre douze mètres.', 'Laetitia Parent', '2023-11-02 10:30:23', '2023-11-02 10:30:23'),
(4, 'https://st3.depositphotos.com/1194063/12923/i/950/depositphotos_129236562-stock-photo-autumn-still-life-with-pumpkins.jpg', 'autumn-still-life-with-pumpkins', 'La citrouille est originaire d\'Amérique du Nord. Les graines furent  probablement exportées en Europe par les premiers explorateurs comme Jacques Cartier et peut-être même Christophe Colomb, avant lui. ', '', '2023-11-02 10:33:30', '2023-11-02 10:33:30'),
(5, 'https://i.pinimg.com/736x/20/8d/ec/208dec29f24cc7d132b10b63b70a9e69--happy-halloween-autumn.jpg', 'happy-halloween-autumn', 'La citrouille se conserve dans un endroit sec et frais pendant quelques semaines. Les graines se gardent plutôt au réfrigérateur et l\'huile, à l\'abri de la lumière.', ' Laetitia Parent', '2023-11-02 10:36:54', '2023-11-02 10:36:54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
