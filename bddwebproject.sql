-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 15 Juillet 2019 à 16:26
-- Version du serveur :  5.6.24
-- Version de PHP :  5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bddwebproject`
--

-- --------------------------------------------------------

--
-- Structure de la table `component`
--

CREATE TABLE IF NOT EXISTS `component` (
  `id_component` int(8) NOT NULL,
  `id_module` int(8) NOT NULL,
  `name_component` varchar(32) NOT NULL,
  `coeff_component` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mark_component`
--

CREATE TABLE IF NOT EXISTS `mark_component` (
  `id_component` int(8) NOT NULL,
  `id_studient` int(8) NOT NULL,
  `mark` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `id_module` int(8) NOT NULL,
  `name_module` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `module`
--

INSERT INTO `module` (`id_module`, `name_module`) VALUES
(1, 'Mathematics');

-- --------------------------------------------------------

--
-- Structure de la table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id_person` int(8) NOT NULL,
  `lastname_person` varchar(32) NOT NULL,
  `firstname_person` varchar(32) NOT NULL,
  `mail_person` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id_student` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `student_module`
--

CREATE TABLE IF NOT EXISTS `student_module` (
  `id_module` int(8) NOT NULL,
  `id_studient` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id_teacher` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `component`
--
ALTER TABLE `component`
  ADD PRIMARY KEY (`id_component`), ADD KEY `id_module` (`id_module`);

--
-- Index pour la table `mark_component`
--
ALTER TABLE `mark_component`
  ADD PRIMARY KEY (`id_component`,`id_studient`), ADD KEY `fk-mark_component-student` (`id_studient`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id_module`);

--
-- Index pour la table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id_person`);

--
-- Index pour la table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student`);

--
-- Index pour la table `student_module`
--
ALTER TABLE `student_module`
  ADD PRIMARY KEY (`id_module`,`id_studient`), ADD KEY `fk-id_studient-student_module-student` (`id_studient`);

--
-- Index pour la table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id_teacher`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `component`
--
ALTER TABLE `component`
  MODIFY `id_component` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id_module` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `person`
--
ALTER TABLE `person`
  MODIFY `id_person` int(8) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `component`
--
ALTER TABLE `component`
ADD CONSTRAINT `fk-component-module` FOREIGN KEY (`id_module`) REFERENCES `module` (`id_module`);

--
-- Contraintes pour la table `mark_component`
--
ALTER TABLE `mark_component`
ADD CONSTRAINT `fk-mark_component-component` FOREIGN KEY (`id_component`) REFERENCES `component` (`id_component`),
ADD CONSTRAINT `fk-mark_component-student` FOREIGN KEY (`id_studient`) REFERENCES `student` (`id_student`);

--
-- Contraintes pour la table `student`
--
ALTER TABLE `student`
ADD CONSTRAINT `fk-id_studient-id_person` FOREIGN KEY (`id_student`) REFERENCES `person` (`id_person`);

--
-- Contraintes pour la table `student_module`
--
ALTER TABLE `student_module`
ADD CONSTRAINT `fk-id_module-module-student_module` FOREIGN KEY (`id_module`) REFERENCES `module` (`id_module`),
ADD CONSTRAINT `fk-id_studient-student_module-student` FOREIGN KEY (`id_studient`) REFERENCES `student` (`id_student`);

--
-- Contraintes pour la table `teacher`
--
ALTER TABLE `teacher`
ADD CONSTRAINT `fk-id_teachert-id_person` FOREIGN KEY (`id_teacher`) REFERENCES `person` (`id_person`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
