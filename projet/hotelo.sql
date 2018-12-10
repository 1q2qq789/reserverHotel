-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 12 mars 2018 à 23:49
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hotelo`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE `actualite` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `actualite`
--

INSERT INTO `actualite` (`id`, `titre`, `texte`, `image`) VALUES
(1, 'PARIS', 'Paris (prononcé [pa.?i] Écouter) est la capitale de la France. Elle se situe au cœur d\'un vaste bassin sédimentaire aux sols fertiles et au climat tempéré, le bassin parisien, sur une boucle de la Seine, entre les confluents de celle-ci avec la Marne et l\'Oise. Ses habitants s’appellent les Parisiens. Paris est également le chef-lieu de la région Île-de-France et l\'unique commune française qui est en même temps un département. Commune centrale de la Métropole du Grand Paris, créée en 2016, elle est divisée en arrondissements, comme les villes de Lyon et de Marseille, au nombre de vingt. L’État y dispose de prérogatives particulières exercées par le préfet de police de Paris.\r\n\r\nVille la plus peuplée de France, elle est quatrième parmi les aires urbaines européennes derrière Moscou, Istanbul et Londres et la 29e plus peuplée du monde. Paris compte 2,21 millions d\'habitants au 1er janvier 2015. L\'agglomération parisienne s’est largement développée au cours du xxe siècle, rassemblant 10,71 millions d\'habitants au 1er janvier 2015, et son aire urbaine (l\'agglomération et la couronne périurbaine) comptait 12,53 millions d\'habitants.', 'images/pic04.jpg'),
(2, 'GUILIN', 'Guilin  est une ville de la région autonome zhuang du Guangxi, en Chine, située sur la rivière Li. Elle tire son nom de l’osmanthus, un arbre qui pousse abondamment entre la rivière et les collines.\r\n\r\nFondée il y a plus de 2 000 ans sous la dynastie Qin, Guilin est l\'une des destinations touristiques les plus connues du Guangxi, dont elle est l\'ancienne capitale.\r\n\r\nLa ville s\'étend aujourd\'hui sur 551 km2 et compte environ 1 million d\'habitants en 20103.\r\n\r\nGuilin a également été une des places fortes de la résistance chinoise contre l\'invasion japonaise. Une marche de l\'opposition s\'y est également tenue au printemps 1989.\r\n\r\nGuilin est connue pour son paysage composé de milliers de petites montagnes en forme de bosses très pentues, des reliefs karstiques, caractéristiques de cette région. Ce paysage extraordinaire, presque surnaturel pour certains, est très apprécié des touristes, qui utilisent l\'aéroport international de Guilin Liangjiang, à 30 km au sud ouest de la ville.\r\n\r\nLes environs de Guilin comptent parmi les terres agricoles les plus productives du pays : on y cultive le riz mais aussi les céréales, les agrumes, le taro, les châtaignes... Autre pilier de l\'économie locale, le tourisme d\'initiation aux plaisirs de la vie campagnarde a été mis en place par les autorités et séduit de plus en plus de citadins chinois.', 'images/pic03.jpg'),
(3, 'MARRAKECH', 'Marrakech  est une ville située dans le centre du Maroc, dans l\'intérieur des terres, au pied des montagnes de l\'Atlas. Elle est surnommée la « ville rouge »  ou la « ville ocre » en référence à la couleur rouge d\'une grande partie de ses immeubles et ses maisons.\r\nLa ville a été fondée en 1071 par Youssef ben Tachfine, à la tête de l\'Empire berbère des Almoravides. Dans le passé, le Maroc était connu en Orient sous le nom de Marrakech (appellation toujours d\'actualité en Iran)6 ; le nom Maroc provient lui-même de la déformation de la prononciation portugaise de Marrakech : Marrocos\r\nMarrakech compte 928 850 habitants d\'après le recensement de 2014, répartis sur une superficie de 230 km2. La densité de population atteint les 350 habitants à l\'hectare dans la Médina. C\'est la quatrième plus grande ville du Maroc après Casablanca, Fès et Tanger8. La ville est divisée en deux parties distinctes : la ville historique (dix kilomètres d\'enceinte) et la ville nouvelle dont les quartiers principaux s\'appellent Guéliz, L\'Hivernage (qui concentre de nombreux complexes hôteliers), Douar el Askar, Sidi Youssef Ben Ali, M\'hamid, et Daoudiate9. Le Guéliz constitue aujourd\'hui le centre-ville commercial. Il fut fondé par les Français lors du protectorat français au Maroc. Depuis quelques années, la ville s\'agrandit en périphérie, notamment à l\'ouest avec l\'apparition de nouveaux quartiers résidentiels comme pour la région de Targa ou l\'extension de l\'avenue Mohammed-VI, ou au nord Tamansourt.', 'images/pic02.jpg'),
(6, 'YASSINE', 'aaaa fffff hhhhh jjjj kkkk uuuu yyyy tttt rrr aaaa fffff hhhhh jjjj kkkk uuuu yyyy tttt rrr\r\naaaa fffff hhhhh jjjj kkkk uuuu yyyy tttt rrr aaaa fffff hhhhh jjjj kkkk uuuu yyyy tttt rrr aaaa fffff hhhhh jjjj kkkk uuuu yyyy tttt rrr aaaa fffff hhhhh jjjj kkkk uuuu yyyy tttt rrr aaaa fffff hhhhh jjjj kkkk uuuu yyyy tttt rrr aaaa fffff hhhhh jjjj kkkk uuuu yyyy tttt rrr aaaa fffff hhhhh jjjj kkkk uuuu yyyy tttt rrr', 'images/pic05.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gsm` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`nom`, `prenom`, `adresse`, `ville`, `pays`, `email`, `gsm`, `pseudo`, `password`, `id_admin`) VALUES
('ismaili', 'yassine', 'adresse', 'MAROC', 'maroc', 'ISMAILI@hotmail.com', '0676300331', 'yassine', '5bfe0c405c67de32b1de9ea40d093666', 0);

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `Num_chambre` int(20) NOT NULL,
  `prix` varchar(10) NOT NULL,
  `Description` text NOT NULL,
  `Surface` varchar(255) NOT NULL,
  `Lit` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`Num_chambre`, `prix`, `Description`, `Surface`, `Lit`, `image`, `type`) VALUES
(13, '2333', 'ICI LA DESC', '25', '1 lit double', 'images/kech-boutique-hotel-spa.jpg', 'chambre standard'),
(14, '1212', '  dsfsfc', '221', 'fsf', 'images/pic20.jpg', 'fdsf');

-- --------------------------------------------------------

--
-- Structure de la table `chambre_equipement`
--

CREATE TABLE `chambre_equipement` (
  `id_chambre_equipement` int(11) NOT NULL,
  `id_chambre` int(11) NOT NULL,
  `id_equipement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chambre_equipement`
--

INSERT INTO `chambre_equipement` (`id_chambre_equipement`, `id_chambre`, `id_equipement`) VALUES
(6, 13, 36),
(7, 13, 37),
(8, 14, 39),
(9, 14, 39),
(10, 14, 39);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `Num_identifiant` int(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`Num_identifiant`, `nom`, `mail`, `prenom`, `adresse`, `telephone`, `login`, `password`) VALUES
(1, 'mohamed', 'ZGFZGZ@zgzg.com', 'mohamed', 'adrese bababa', '0666666', 'login', 'passs'),
(2, 'hhhh', 'JJJJ@zgzg.com', 'yyyyy', 'uuuuu', '88888', 'fzgz', 'hbiihihhi'),
(3, 'test', 'eeee@ddd.com', 'testP', 'adresse test', '0333333', 'logg', 'passs'),
(4, 'NOM TEST', 'hhhhhh@dddd.com', 'guuggugu', 'huuug', '88888', 'ssssdd', 'jjjj'),
(16, 'dfsdf', 'dsff@gmail.com', 'rrr', 'fsdvd', 'sdfsd', 'ggg', 'ggg');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_cmd` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `datearrivee` varchar(255) NOT NULL,
  `datesortie` varchar(255) NOT NULL,
  `Num_chambre` int(20) NOT NULL,
  `Num_identifiant` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_cmd`, `message`, `datearrivee`, `datesortie`, `Num_chambre`, `Num_identifiant`) VALUES
(19, 'dtufygi cxfygvbuh', '02/12', '03/13', 13, 1),
(20, 'uyyhhh', 'jh', 'uuuu', 13, 1),
(21, 'cvgbhnj,k;', 'ftvgbyhnjuk,', 'ctvgbhnj,k', 13, 1);

-- --------------------------------------------------------

--
-- Structure de la table `equipement`
--

CREATE TABLE `equipement` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `intitule` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `equipement`
--

INSERT INTO `equipement` (`id`, `image`, `intitule`) VALUES
(36, 'images/rest.png', 'rest'),
(37, 'images/ventilation.png', 'ventilation'),
(38, 'images/towel.png', 'towel'),
(39, 'images/tel.png', 'tel'),
(40, 'images/wifi.png', 'wifi');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualite`
--
ALTER TABLE `actualite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`Num_chambre`);

--
-- Index pour la table `chambre_equipement`
--
ALTER TABLE `chambre_equipement`
  ADD PRIMARY KEY (`id_chambre_equipement`),
  ADD KEY `FK_chambre_equipement1` (`id_chambre`),
  ADD KEY `FK_chambre_equipement2` (`id_equipement`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Num_identifiant`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_cmd`),
  ADD KEY `Num_chambre` (`Num_chambre`),
  ADD KEY `Num_identifiant` (`Num_identifiant`);

--
-- Index pour la table `equipement`
--
ALTER TABLE `equipement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualite`
--
ALTER TABLE `actualite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `Num_chambre` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `chambre_equipement`
--
ALTER TABLE `chambre_equipement`
  MODIFY `id_chambre_equipement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `Num_identifiant` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_cmd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `equipement`
--
ALTER TABLE `equipement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambre_equipement`
--
ALTER TABLE `chambre_equipement`
  ADD CONSTRAINT `FK_chambre_equipement1` FOREIGN KEY (`id_chambre`) REFERENCES `chambre` (`Num_chambre`),
  ADD CONSTRAINT `FK_chambre_equipement2` FOREIGN KEY (`id_equipement`) REFERENCES `equipement` (`id`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_ChambreClient` FOREIGN KEY (`Num_chambre`) REFERENCES `chambre` (`Num_chambre`),
  ADD CONSTRAINT `FK_ClientCommande` FOREIGN KEY (`Num_identifiant`) REFERENCES `client` (`Num_identifiant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
