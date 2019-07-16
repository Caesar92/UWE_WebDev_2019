-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 16 Juillet 2019 à 15:57
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `component`
--

INSERT INTO `component` (`id_component`, `id_module`, `name_component`, `coeff_component`) VALUES
(1, 2, 'Assignment', 30),
(2, 2, 'Written Exam', 50),
(3, 3, 'Assignement 1', 50),
(4, 3, 'Lab Tests', 50),
(5, 4, 'Lab Tests', 60),
(6, 4, 'Written Exam', 40),
(7, 5, 'Assignement 1', 50),
(8, 5, 'Assignment 2', 50),
(9, 6, 'Assignment 1', 100),
(10, 7, 'Assignment 1', 50),
(11, 7, 'Assignment 2', 50),
(12, 2, 'Lab Tests', 20);

-- --------------------------------------------------------

--
-- Structure de la table `mark_component`
--

CREATE TABLE IF NOT EXISTS `mark_component` (
  `id_component` int(8) NOT NULL,
  `id_studient` int(8) NOT NULL,
  `mark` float NOT NULL,
  `date_exam` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `mark_component`
--

INSERT INTO `mark_component` (`id_component`, `id_studient`, `mark`, `date_exam`) VALUES
(1, 1, 54, '16/07/2019'),
(2, 1, 70, '16/07/2019'),
(3, 1, 63, '16/07/2019'),
(4, 1, 10, '16/07/2019'),
(5, 1, 56, '16/07/2019'),
(6, 1, 80, '16/07/2019'),
(7, 2, 52, '16/07/2019'),
(8, 2, 47, '16/07/2019'),
(9, 2, 96, '16/07/2019'),
(10, 2, 78, '16/07/2019'),
(11, 2, 67, '16/07/2019'),
(12, 1, 32, '16/07/2019');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `id_module` int(8) NOT NULL,
  `name_module` varchar(128) NOT NULL,
  `number_module` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `module`
--

INSERT INTO `module` (`id_module`, `name_module`, `number_module`) VALUES
(2, 'Web Programming', 1),
(3, 'Web Design', 2),
(4, 'Content Management System', 3),
(5, 'Legal Ethical Social and Professional Issues', 4),
(6, 'Web Development Frameworks', 5),
(7, 'Web Technologies', 6),
(8, 'Mathematics', 7);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `person`
--

INSERT INTO `person` (`id_person`, `lastname_person`, `firstname_person`, `mail_person`, `username`, `password`) VALUES
(1, 'DECONINCK', 'Adrien', 'deconinck.adrien.prepa@gmail.com', 'adrien', 'adrien'),
(2, 'GONNOT', 'Cesar', 'caesarg92.bg@gmail.com', 'cesar', 'cesar'),
(3, 'CHEVALLET', 'Jeremy', 'jeremy.chevallet', 'jeremy', 'jeremy'),
(4, 'CABANE', 'Antonin', 'antonin.cabane@gmail.com', 'antonin', 'antonin');

-- --------------------------------------------------------

--
-- Structure de la table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id_teacher` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `staff`
--

INSERT INTO `staff` (`id_teacher`) VALUES
(3),
(4);

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id_student` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `student`
--

INSERT INTO `student` (`id_student`) VALUES
(1),
(2);

-- --------------------------------------------------------

--
-- Structure de la table `student_module`
--

CREATE TABLE IF NOT EXISTS `student_module` (
  `id_module` int(8) NOT NULL,
  `id_studient` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `student_module`
--

INSERT INTO `student_module` (`id_module`, `id_studient`) VALUES
(2, 1),
(3, 1),
(4, 1),
(8, 1),
(5, 2),
(6, 2),
(7, 2);

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
-- Index pour la table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_teacher`);

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
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `component`
--
ALTER TABLE `component`
  MODIFY `id_component` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id_module` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `person`
--
ALTER TABLE `person`
  MODIFY `id_person` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
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
-- Contraintes pour la table `staff`
--
ALTER TABLE `staff`
ADD CONSTRAINT `fk-id_teachert-id_person` FOREIGN KEY (`id_teacher`) REFERENCES `person` (`id_person`);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
