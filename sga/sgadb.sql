-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 14 Juin 2019 à 17:14
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `sgadb`
--

-- --------------------------------------------------------

--
-- Structure de la table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `id_app` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL,
  PRIMARY KEY (`id_app`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `application`
--

INSERT INTO `application` (`id_app`, `nom`, `logo`, `path`) VALUES
(1, 'Gestion des Requêtes', '../app/img/b681c77c0754ca4a0e86a9d510d0988a.png', 'sga_/app/sgr'),
(2, 'Gestion conge', '../app/img/c7916008a4e97aa549bba5497edf5c6d.png', 'sga_/app/sgc');

-- --------------------------------------------------------

--
-- Structure de la table `definition`
--

CREATE TABLE IF NOT EXISTS `definition` (
  `id_app` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_app`,`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `definition`
--

INSERT INTO `definition` (`id_app`, `id_user`) VALUES
(1, 2),
(1, 3),
(2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `division` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `nom`, `prenom`, `division`, `service`, `login`, `password`, `role`) VALUES
(1, 'rhz', 'ibtissa', 'das', 'das', 'login', '1234', 1),
(2, 'cb', 'mohammed', 'das', 'das', 'user2', '1234', 2),
(4, 'KKK', 'Ahmed', 'das', 'dass', 'user4', '1234', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
