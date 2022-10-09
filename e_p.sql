-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 08, 2022 at 10:17 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_p`
--

-- --------------------------------------------------------

--
-- Table structure for table `discipline`
--

CREATE TABLE `discipline` (
  `name_discpl` varchar(45) NOT NULL,
  `hours` int DEFAULT NULL,
  `Personal_f_i_o` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `discipline`
--

INSERT INTO `discipline` (`name_discpl`, `hours`, `Personal_f_i_o`) VALUES
('12_видов_серого', 120, 'Героев Максим Жогов'),
('Бой с тенью', 30, 'Жмашенко Валерий АЛьбертович'),
('Борьба', 30000000, 'Жмашенко Валерий АЛьбертович'),
('Научное фехтование', 30, 'Жмашенко Валерий АЛьбертович'),
('УЗПРК-12', 299, 'Героев Максим Жогов'),
('Я_поел', 36, 'Героев Максим Жогов');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `name_group` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`name_group`) VALUES
('228D'),
('Отдельная 228');

-- --------------------------------------------------------

--
-- Table structure for table `ocenki`
--

CREATE TABLE `ocenki` (
  `Ocenka` int DEFAULT NULL,
  `Students_f_i_o` varchar(45) NOT NULL,
  `Groups_name_group` varchar(45) NOT NULL,
  `Discipline_name_discpl` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ocenki`
--

INSERT INTO `ocenki` (`Ocenka`, `Students_f_i_o`, `Groups_name_group`, `Discipline_name_discpl`) VALUES
(2, 'Николь Кидман', 'Отдельная 228', '12_видов_серого'),
(5, 'Олежка Омеганыч', 'Отдельная 228', 'Борьба'),
(100, 'Олежка Омеганыч', 'Отдельная 228', 'УЗПРК-12'),
(99, 'Олежка Омеганыч', 'Отдельная 228', 'Я_поел'),
(63, 'Санчос Пончо Мучос', '228D', 'Бой с тенью'),
(55, 'Санчос Пончо Мучос', '228D', 'Борьба'),
(66, 'Санчос Пончо Мучос', '228D', 'Научное фехтование'),
(100, 'Санчос Пончо Мучос', '228D', 'Я_поел');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `f_i_o` varchar(45) NOT NULL,
  `login_p` varchar(45) DEFAULT NULL,
  `pass_p` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`f_i_o`, `login_p`, `pass_p`) VALUES
('Героев Максим Жогов', 'log', 'out'),
('Жмашенко Валерий АЛьбертович', 'prepod', 'zloy');

-- --------------------------------------------------------

--
-- Table structure for table `planes`
--

CREATE TABLE `planes` (
  `idPlanes` varchar(45) NOT NULL,
  `Students_f_i_o` varchar(45) NOT NULL,
  `Groups_name_group` varchar(45) NOT NULL,
  `Discipline_name_discpl` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `planes`
--

INSERT INTO `planes` (`idPlanes`, `Students_f_i_o`, `Groups_name_group`, `Discipline_name_discpl`) VALUES
('1', 'Олежка Омеганыч', 'Отдельная 228', '12_видов_серого'),
('1', 'Олежка Омеганыч', 'Отдельная 228', 'Бой с тенью'),
('1', 'Олежка Омеганыч', 'Отдельная 228', 'Борьба'),
('1', 'Олежка Омеганыч', 'Отдельная 228', 'Научное фехтование'),
('9', 'Санчос Пончо Мучоc', '228D', 'Бой с тенью'),
('9', 'Санчос Пончо Мучоc', '228D', 'Я_поел'),
('9', 'Санчос Пончо Мучос', '228D', '12_видов_серого'),
('9', 'Санчос Пончо Мучос', '228D', 'УЗПРК-12');

-- --------------------------------------------------------

--
-- Table structure for table `posehenie`
--

CREATE TABLE `posehenie` (
  `date` datetime NOT NULL,
  `Groups_name_group` varchar(45) NOT NULL,
  `Students_f_i_o` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posehenie`
--

INSERT INTO `posehenie` (`date`, `Groups_name_group`, `Students_f_i_o`) VALUES
('2022-04-02 00:00:00', 'Отдельная 228', 'Санчос Пончо Мучос'),
('2022-09-09 00:00:00', '228D', 'Санчос Пончо Мучос'),
('2200-09-09 00:00:00', '228D', 'Санчос Пончо Мучос'),
('2200-09-09 00:00:00', 'Отдельная 228', 'Санчос Пончо Мучос'),
('2200-09-12 00:00:00', 'Отдельная 228', 'Олежка Омеганыч'),
('2200-09-13 00:00:00', 'Отдельная 228', 'Олежка Омеганыч'),
('2200-09-14 00:00:00', 'Отдельная 228', 'Олежка Омеганыч');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `f_i_o` varchar(45) NOT NULL,
  `login_s` varchar(45) DEFAULT NULL,
  `pass_s` varchar(45) DEFAULT NULL,
  `kurs` int DEFAULT NULL,
  `Groups_name_group` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`f_i_o`, `login_s`, `pass_s`, `kurs`, `Groups_name_group`) VALUES
('Николь Кидман', 'SE', 'LOL', 4, 'Отдельная 228'),
('Олежка Омеганыч', 'QUE', 'LOL43', 3, 'Отдельная 228'),
('Санчос Пончо Мучос', 'user', 'glupiy', 4, '228D');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discipline`
--
ALTER TABLE `discipline`
  ADD PRIMARY KEY (`name_discpl`,`Personal_f_i_o`),
  ADD KEY `fk_Discipline_Personal_idx` (`Personal_f_i_o`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`name_group`);

--
-- Indexes for table `ocenki`
--
ALTER TABLE `ocenki`
  ADD PRIMARY KEY (`Students_f_i_o`,`Groups_name_group`,`Discipline_name_discpl`),
  ADD KEY `fk_Ocenki_Students1_idx` (`Students_f_i_o`),
  ADD KEY `fk_Ocenki_Groups1_idx` (`Groups_name_group`),
  ADD KEY `fk_Ocenki_Discipline1_idx` (`Discipline_name_discpl`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`f_i_o`);

--
-- Indexes for table `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`idPlanes`,`Students_f_i_o`,`Groups_name_group`,`Discipline_name_discpl`),
  ADD KEY `fk_Planes_Students1_idx` (`Students_f_i_o`),
  ADD KEY `fk_Planes_Groups1_idx` (`Groups_name_group`),
  ADD KEY `fk_Planes_Discipline1_idx` (`Discipline_name_discpl`);

--
-- Indexes for table `posehenie`
--
ALTER TABLE `posehenie`
  ADD KEY `fk_Posehenie_Groups1_idx` (`Groups_name_group`),
  ADD KEY `fk_Posehenie_Students1_idx` (`Students_f_i_o`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`f_i_o`,`Groups_name_group`),
  ADD KEY `fk_Students_Groups1_idx` (`Groups_name_group`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `discipline`
--
ALTER TABLE `discipline`
  ADD CONSTRAINT `fk_Discipline_Personal` FOREIGN KEY (`Personal_f_i_o`) REFERENCES `personal` (`f_i_o`);

--
-- Constraints for table `ocenki`
--
ALTER TABLE `ocenki`
  ADD CONSTRAINT `fk_Ocenki_Discipline1` FOREIGN KEY (`Discipline_name_discpl`) REFERENCES `discipline` (`name_discpl`),
  ADD CONSTRAINT `fk_Ocenki_Groups1` FOREIGN KEY (`Groups_name_group`) REFERENCES `groups` (`name_group`),
  ADD CONSTRAINT `fk_Ocenki_Students1` FOREIGN KEY (`Students_f_i_o`) REFERENCES `students` (`f_i_o`);

--
-- Constraints for table `planes`
--
ALTER TABLE `planes`
  ADD CONSTRAINT `fk_Planes_Discipline1` FOREIGN KEY (`Discipline_name_discpl`) REFERENCES `discipline` (`name_discpl`);

--
-- Constraints for table `posehenie`
--
ALTER TABLE `posehenie`
  ADD CONSTRAINT `fk_Posehenie_Groups1` FOREIGN KEY (`Groups_name_group`) REFERENCES `groups` (`name_group`),
  ADD CONSTRAINT `fk_Posehenie_Students1` FOREIGN KEY (`Students_f_i_o`) REFERENCES `students` (`f_i_o`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `fk_Students_Groups1` FOREIGN KEY (`Groups_name_group`) REFERENCES `groups` (`name_group`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
