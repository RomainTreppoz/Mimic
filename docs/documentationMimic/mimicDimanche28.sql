-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 29 Février 2016 à 00:19
-- Version du serveur :  10.1.8-MariaDB
-- Version de PHP :  5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mimic`
--

-- --------------------------------------------------------

--
-- Structure de la table `etiquettes`
--

CREATE TABLE `etiquettes` (
  `idetiquettes` int(11) NOT NULL,
  `nom` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etiquettes_has_strips`
--

CREATE TABLE `etiquettes_has_strips` (
  `etiquettes_idetiquettes` int(11) NOT NULL,
  `strips_idstrips` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `strips`
--

CREATE TABLE `strips` (
  `idstrips` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `texte1` varchar(255) DEFAULT NULL,
  `texte2` varchar(255) DEFAULT NULL,
  `texte3` varchar(255) DEFAULT NULL,
  `date_creation` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT 'adresse electronique auteur',
  `nbre_like` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `strips`
--

INSERT INTO `strips` (`idstrips`, `titre`, `image1`, `image2`, `image3`, `texte1`, `texte2`, `texte3`, `date_creation`, `user_id`, `nbre_like`) VALUES
(1, 'Strip d''essai - le premier', 'image_test_11.jpg', 'image_test_12.jpg', 'image_test_13.jpg', 'Le texte qui illustre la première image de la première série.', 'Le texte qui illustre la deuxième image de la première série.', 'Etc...', '2016-02-15 10:39:00', 1, 55),
(2, 'Deuxième essai, presque muet', 'image_test_21.jpg', 'image_test_22.jpg', 'image_test_23.jpg', '', '', 'Des émoticônes, ce serait bien !', '2016-02-15 10:39:05', 1, 1),
(3, 'Troisième essai, le second dans l''ordre chronologique. Très bavard', 'image_test_31.jpg', 'image_test_32.jpg', 'image_test_33.jpg', '255 caractères.\r\nEt pas des petits', 'mmmmm mmm mmmmmmmmm mmmmmm mm mmmmmmmmm mmmmm mmm mmm mmmmm mmm mmmmm mmmm mmmm mmmm m mm mmmmmm mm mmm mm mm mmmmmm 120 mmmm mmm mmmm mmmm mmmmmm mm mmmm mmmm mmmmm mmm mmm mmmmm mmmmmmmmm mmmm mmmm mmmm m mm mmmmmm mm mmm mm mm mmmmmm mmmmm mmmm mmm 255', 'ça tient ?', '2016-02-15 10:32:00', 3, 150),
(4, 'Quatrième essai, le second dans l''ordre chronologique.', 'image_test_41.jpg', 'image_test_42.jpg', 'image_test_43.jpg', 'On recommence,', 'encore,', 'et toujours', '2016-02-15 10:32:00', 2, 120),
(5, 'Avec de vraies photos en png, ça fait comment ?', 'photo1.png', 'photo2.png', 'photo3.png', 'Rien de bien drôle', NULL, NULL, NULL, 2, 4),
(6, 'Les mêmes vraies photos,en jpg?', 'photo1.jpg', 'photo2.jpg', 'photo3.jpg', 'Un jpg de bonne qualité', 'Un jpg très léger', NULL, NULL, 2, 4),
(7, 'J''ai fait une bavure', 'BH_1.jpg', 'BH_2.jpg', 'BH_3.jpg', 'Oui chef, j''ai dégainé.', 'J''ai tiré en direction du présumé délinquant.', 'Il a reçu une balle dans le dos ?', NULL, 7, 250);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Joe Dalton', 'Joe.Dalton@gmail.com', '$2y$10$Oek4QYp/8xahijNWZKoNeecPCWEGf7e0UN3AnVgfeW6rFVsafnHaS', 'member', '2016-02-09 13:33:08', '2016-02-09 13:33:08'),
(2, 'William Dalton', 'william.dalton@free.fr', '$2y$10$1uTNhojgsEOp/0ZQEoRhP.tV.gfxCnfw6LNTnyDgPGMBMzOsf6aeu', 'member', '2016-02-09 13:36:54', '2016-02-09 13:36:54'),
(3, 'Romain', 'romain.treppoz@laposte.net', '$2y$10$Wng7VZniSPIUJ/v6CE/i3uLtertabskasFEgwiB98hVHu47zlcyxm', 'member', '2016-02-09 15:44:09', '2016-02-09 15:44:09'),
(4, 'Averell', 'averell.dalton@free.fr', '$2y$10$EdMX7nbyCFKlHaeHAhs/weSkuEaFu5PyTkD1Wpw6iBUikJ1LejXfK', 'member', '2016-02-11 10:09:19', '2016-02-11 10:09:19'),
(6, 'Toto', 'toto@gmail.com', '$2y$10$COK5Na7jI2uS6tWPSXh/S.tVsFwTwuo211Zt79GxUU9TuUBQClcDW', 'member', '2016-02-25 17:08:18', '2016-02-25 17:08:18'),
(7, 'Bernard Haller', 'toto@toto.com', '$2y$10$JWG9.jsHNALRq3.8sycdEuzcangUywsFRHJBJBhwABPxL9oxW.J9u', 'member', '2016-02-24 15:47:17', '2016-02-24 15:47:17'),
(8, 'Mister B', 'b@b.com', '$2y$10$j0nEzfE9uy3.vyfSsT1gwOf6NFdiTEUHhC5GT3Dq193ewee1.xWmK', 'member', '2016-02-28 10:31:32', '2016-02-28 10:31:32'),
(9, 'L''infernal Monsieur C', 'c@c.com', '$2y$10$AfCcZtGdfoRXhFwo4nQpben0KL2lPEbjgS1GvYFVKxUZ3/RrtKTsu', 'member', '2016-02-28 12:21:20', '2016-02-28 12:21:20'),
(10, 'Monsieur D', 'd@d.com', '$2y$10$ydpEARhMufsBV/i9vIDJO.TkfGhMb.C87S4RQQvlHKJ45gwIIZYhm', 'member', '2016-02-28 12:23:52', '2016-02-28 12:23:52'),
(11, 'F - Madame F', 'f@f.com', '$2y$10$v/TIdp/cydK.DEDTfZscr.zgekSyCGQZhccF5pDvXkxhsjAWuZpje', 'member', '2016-02-28 13:15:36', '2016-02-28 13:15:36'),
(12, 'Gérard l''embrouille', 'g@g.com', '$2y$10$QUwXxwcwX9WrcPuf9Os8r.VcYtzi8KOcJOR7qvA0hkyPQGzes3Dam', 'member', '2016-02-28 13:32:51', '2016-02-28 13:32:51'),
(13, 'Monsieur H comme Hilarité, hé hé hé', 'h@h.com', '$2y$10$F7lf88huxoGjiWWrSfiCYeInH5ud.V1WR5FHXmMkDNIZMk8nC7vSO', 'member', '2016-02-28 14:04:29', '2016-02-28 14:04:29'),
(14, 'ir&egrave;ne', 'i@i.com', '$2y$10$S6Uhzr4xX8HvOu2iqNn6t.xbuOrM0v86YsuZ0VjYKWWOpQbeGf2Ru', 'member', '2016-02-28 15:15:54', '2016-02-28 15:15:54'),
(15, 'Jiji la Jiraf', 'j@j.com', '$2y$10$1uJpozqEOjG6BTN66wUpjuTqZoNat7guCQLS2ppnM6RxPKR6PGGuG', 'member', '2016-02-28 16:56:53', '2016-02-28 16:56:53'),
(16, 'Karl', 'k@k.com', '$2y$10$QygdsqMmTlLhGZN242yAzOgATfNBvYax.4Wxsl5FUovGWqNvcjhla', 'member', '2016-02-28 20:45:48', '2016-02-28 20:45:48'),
(17, 'Monsieur A', 'a@a.com', '$2y$10$r82hPnjrZblZqe5ygMShVuHPTGpfSd.y3cwAO7n9qifJKKItqdQfa', 'member', '2016-02-28 10:29:37', '2016-02-28 10:29:37');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `etiquettes`
--
ALTER TABLE `etiquettes`
  ADD PRIMARY KEY (`idetiquettes`);

--
-- Index pour la table `etiquettes_has_strips`
--
ALTER TABLE `etiquettes_has_strips`
  ADD PRIMARY KEY (`etiquettes_idetiquettes`,`strips_idstrips`),
  ADD KEY `fk_etiquettes_has_strips_strips1_idx` (`strips_idstrips`),
  ADD KEY `fk_etiquettes_has_strips_etiquettes_idx` (`etiquettes_idetiquettes`);

--
-- Index pour la table `strips`
--
ALTER TABLE `strips`
  ADD PRIMARY KEY (`idstrips`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `etiquettes`
--
ALTER TABLE `etiquettes`
  MODIFY `idetiquettes` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `strips`
--
ALTER TABLE `strips`
  MODIFY `idstrips` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `etiquettes_has_strips`
--
ALTER TABLE `etiquettes_has_strips`
  ADD CONSTRAINT `fk_etiquettes_has_strips_etiquettes` FOREIGN KEY (`etiquettes_idetiquettes`) REFERENCES `etiquettes` (`idetiquettes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_etiquettes_has_strips_strips1` FOREIGN KEY (`strips_idstrips`) REFERENCES `strips` (`idstrips`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
