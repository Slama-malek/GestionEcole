-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 25 mars 2021 à 14:21
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `proeducation`
--

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `id_c` bigint(20) UNSIGNED NOT NULL,
  `nom_c` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`id_c`, `nom_c`, `created_at`, `updated_at`) VALUES
(1, '3ans', NULL, '2020-09-15 09:22:07'),
(2, '4ans\r\n', NULL, NULL),
(3, '5ans', '2020-07-17 12:19:14', '2020-07-17 12:19:14'),
(4, '6ans', '2020-07-17 12:19:24', '2020-07-17 12:19:24');

-- --------------------------------------------------------

--
-- Structure de la table `clubs`
--

CREATE TABLE `clubs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horaire_debut` time(6) NOT NULL,
  `horaire_fin` time(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clubs`
--

INSERT INTO `clubs` (`id`, `nom`, `description`, `prix`, `image`, `size`, `age`, `horaire_debut`, `horaire_fin`, `created_at`, `updated_at`) VALUES
(4, 'club musique', 'Club de musique', 20, 'class-1_1610140253.jpg', '15', '3-12', '15:30:00.000000', '17:30:00.000000', '2021-01-08 20:10:53', '2021-01-08 20:10:53'),
(5, 'club peinture', 'peinture', 20, 'class-5_1610140546.jpg', '12', '3-12', '15:30:00.000000', '15:30:00.000000', '2021-01-08 20:15:46', '2021-01-08 20:15:46'),
(6, 'club Bricolage', 'club bricolage', 15, 'event-3_1610140729.jpg', '15', '3-12', '12:30:00.000000', '13:30:00.000000', '2021-01-08 20:18:49', '2021-01-08 20:18:49');

-- --------------------------------------------------------

--
-- Structure de la table `coefs`
--

CREATE TABLE `coefs` (
  `id_coef` bigint(20) UNSIGNED NOT NULL,
  `nom_coef` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `coefs`
--

INSERT INTO `coefs` (`id_coef`, `nom_coef`, `created_at`, `updated_at`) VALUES
(1, '1', '2020-07-29 11:41:44', '2020-07-29 11:41:44'),
(2, '2', '2020-07-29 11:41:59', '2020-07-29 11:41:59');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id_co` bigint(20) UNSIGNED NOT NULL,
  `nom_co` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ens_id` bigint(20) UNSIGNED NOT NULL,
  `mat_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id_co`, `nom_co`, `description`, `file`, `ens_id`, `mat_id`, `created_at`, `updated_at`) VALUES
(1, 'Chapitre1', 'c\'est le contenu de la première séance', 'service-invoice-template-fr_1596537662.pdf', 3, 6, '2020-08-04 09:33:26', '2020-08-04 09:33:26'),
(2, 'Chapitre2', 'c\'est le contenu de la deuxième séance', 'service-invoice-template-fr_1596537662.pdf', 3, 6, '2020-08-04 09:38:16', '2020-08-04 09:38:16'),
(4, 'Chapitre1', 'c\'est le contenu de la première séance', 'service-invoice-template-fr_1596537662.pdf', 3, 7, '2020-08-04 09:44:03', '2020-08-04 09:44:03'),
(5, 'Chapitre2', 'c\'est le contenu de la deuxième séance', 'service-invoice-template-fr_1596537662.pdf', 3, 7, '2020-08-04 09:44:50', '2020-08-04 09:44:50'),
(6, 'Chapitre3', 'c\'est le contenu de la troixième séance', 'service-invoice-template-fr_1596537662.pdf', 3, 7, '2020-08-04 09:47:06', '2020-08-04 09:47:06');

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE `eleves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu_naiss` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naiss` date NOT NULL,
  `sexe` tinyint(1) NOT NULL,
  `nom_p` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_m` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_p` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_m` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_p` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_m` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_p` int(11) DEFAULT NULL,
  `tel_m` int(11) DEFAULT NULL,
  `gsm_p` int(11) NOT NULL,
  `gsm_m` int(11) NOT NULL,
  `profession_p` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession_m` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_p` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_m` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `par_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `eleves`
--

INSERT INTO `eleves` (`id`, `nom`, `prenom`, `lieu_naiss`, `date_naiss`, `sexe`, `nom_p`, `nom_m`, `prenom_p`, `prenom_m`, `add_p`, `add_m`, `tel_p`, `tel_m`, `gsm_p`, `gsm_m`, `profession_p`, `profession_m`, `email_p`, `email_m`, `par_id`, `created_at`, `updated_at`) VALUES
(1, 'amira', 'bennani', 'SOUSSE', '2020-06-29', 0, 'bennani', 'ddd', 'hamadi', 'bennani', 'SOUSSE', 'SOUSSE', NULL, NULL, 25250250, 23230230, 'ddd', 'mmm', 'pp@gmail.com', 'mere@gmail.com', 0, '2020-07-28 12:05:04', '2020-07-28 12:05:04'),
(2, '3ans', 'b', 'SOUSSE', '2020-07-06', 0, 'hhamadi', 'kima', 'amira', 'dfd', 'SOUSSE', 'SOUSSE', NULL, NULL, 25250250, 986856856, 'ddddd', 'rien', 'cdxc@gmail.com', 'amal@gmail.com', 0, '2020-07-20 07:08:26', '2020-07-20 07:08:26'),
(3, 'islem', 'aaaaa', 'SOUSSE', '2020-06-29', 0, 'amira', 'bennani', 'mmm', 'bennani', 'SOUSSE', 'SOUSSE', NULL, NULL, 25250250, 23230230, 'ddd', 'mmm', 'pp@gmail.com', 'ddd@gmail.com', 0, '2020-07-20 07:09:34', '2020-07-20 07:09:34'),
(4, 'chohaoui mohamed lkader', 'amira', 'sousse', '2020-06-29', 0, 'bennani', 'bennani', 'hamadi', 'dfd', 'SOUSSE', 'SOUSSE', 20200200, NULL, 25250250, 23230230, 'ddd', 'mmm', 'dmdm@gmail.com', 'mm@gmail.com', 0, '2020-07-20 07:10:49', '2020-07-20 07:10:49'),
(5, 'amira', 'bennani', 'SOUSSE', '2020-06-29', 0, 'hhamadi', 'ddd', 'bennani', 'bennani', 'SOUSSE', 'SOUSSE', 20200200, 21210210, 25250250, 23230230, 'rien', 'mmm', 'cdxc@gmail.com', 'ddd@gmail.com', 0, '2020-07-15 09:32:16', '2020-07-15 09:32:16'),
(6, 'amira', 'bennani', 'SOUSSE', '2020-06-29', 0, 'hhamadi', 'ddd', 'bennani', 'bennani', 'SOUSSE', 'SOUSSE', 20200200, 21210210, 25250250, 23230230, 'rien', 'mmm', 'cdxc@gmail.com', 'ddd@gmail.com', 0, '2020-07-15 09:32:16', '2020-07-15 09:32:16'),
(7, 'fffff', 'hhh', 'SOUSSE', '2020-06-29', 0, 'hhaggggmadi', 'dddjrtdhfdh', 'bennanittt', 'bennaniturtur', 'SOUSSE', 'SOUSSE', 20200200, 21210220, 25250250, 23230230, 'rien', 'mmm', 'cdxc@gmail.com', 'ddd@gmail.com', 0, '2020-07-15 08:32:16', '2020-07-15 08:32:16'),
(8, 'amira', 'bennani', 'SOUSSE', '2020-06-29', 0, 'hhamadi', 'ddd', 'bennani', 'bennani', 'SOUSSE', 'SOUSSE', 20200200, 21210210, 25250250, 23230230, 'rien', 'mmm', 'cdxc@gmail.com', 'ddd@gmail.com', 0, '2020-07-15 09:32:16', '2020-07-15 09:32:16'),
(9, 'fffff', 'hhh', 'SOUSSE', '2020-06-29', 0, 'hhaggggmadi', 'dddjrtdhfdh', 'bennanittt', 'bennaniturtur', 'SOUSSE', 'SOUSSE', 20200200, 21210220, 25250250, 23230230, 'rien', 'mmm', 'cdxc@gmail.com', 'ddd@gmail.com', 0, '2020-07-15 08:32:16', '2020-07-15 08:32:16'),
(10, 'amira', 'bennani', 'SOUSSE', '2020-06-29', 0, 'hhamadi', 'ddd', 'bennani', 'bennani', 'SOUSSE', 'SOUSSE', 20200200, 21210210, 25250250, 23230230, 'rien', 'mmm', 'cdxc@gmail.com', 'ddd@gmail.com', 0, '2020-07-15 09:32:16', '2020-07-15 09:32:16'),
(11, 'fffff', 'hhh', 'SOUSSE', '2020-06-29', 0, 'hhaggggmadi', 'dddjrtdhfdh', 'bennanittt', 'bennaniturtur', 'SOUSSE', 'SOUSSE', 20200200, 21210220, 25250250, 23230230, 'rien', 'mmm', 'cdxc@gmail.com', 'ddd@gmail.com', 0, '2020-07-15 08:32:16', '2020-07-15 08:32:16'),
(12, 'dddddddd', 'ggggggg', 'ccccccccc', '2020-06-29', 0, 'bennani', 'kima', 'hamadi', 'dfd', 'SOUSSE', 'SOUSSE', NULL, NULL, 25250250, 23230230, 'ddddd', 'rien', 'amine@gmail.com', 'mm@gmail.com', 0, '2020-07-20 07:52:33', '2020-07-20 07:52:33'),
(13, 'islemddd', 'fqfqsf', 'SOUSSE', '2020-06-29', 0, 'qsvwv', 'ddd', 'vbdfvbds', 'dfd', 'SOUSSE', 'SOUSSE', NULL, NULL, 25250250, 23230230, 'mmm', 'mmm', 'dmdm@gmail.com', 'mere@gmail.com', 0, '2020-07-20 08:07:37', '2020-07-20 08:07:37'),
(14, 'test', 'test', 'SOUSSE', '2000-02-25', 0, 'bennani', 'kima', 'bennani', 'bennani', 'SOUSSE', 'SOUSSE', NULL, NULL, 21200200, 23230230, 'ddddd', 'mmm', 'pp@gmail.com', 'mm@gmail.com', 18, '2020-08-06 10:04:51', '2020-08-06 10:04:51'),
(15, 'test1', 'test1', 'SOUSSE', '2020-08-03', 0, 'fffffff', 'kima', 'ggggggggg', 'bennani', 'SOUSSE', 'SOUSSE', NULL, NULL, 25250250, 23230230, 'doctor', 'mmm', 'pp@gmail.com', 'mm@gmail.com', 18, '2020-08-06 13:23:32', '2020-08-06 13:23:32'),
(16, 'lolll', 'hdgdgdg', 'ddddd', '2020-07-27', 0, 'bennan', 'bennani', 'mmm', 'dfd', 'SOUSSE', 'SOUSSE', NULL, NULL, 25250250, 23230230, 'ddd', 'mmm', 'dmdm@gmail.com', 'mm@gmail.com', 17, '2020-08-10 09:05:53', '2020-08-10 09:05:53'),
(17, 'test3', 'test3', 'dddddd', '2020-08-03', 0, 'dddd', 'bennani', 'dddd', 'bennani', 'SOUSSE', 'SOUSSE', NULL, NULL, 25250250, 23230230, 'pompier', 'mmm', 'pp@gmail.com', 'mm@gmail.com', 18, '2020-08-10 09:50:09', '2020-08-10 09:50:09'),
(18, 'test4', 'test4', 'sousse', '2020-07-27', 0, 'bennani', 'kima', 'bennani', 'bennani', 'SOUSSE', 'SOUSSE', NULL, NULL, 25250250, 23230230, 'ddd', 'mmm', 'dmdm@gmail.com', 'mm@gmail.com', 18, '2020-08-10 09:55:35', '2020-08-10 09:55:35'),
(20, 'test5', 'tes5', 'zssssd', '2000-03-20', 1, 'dsddsd', 'bennani', 'dqqd', 'dfd', 'SOUSSE', 'SOUSSE', NULL, NULL, 25250250, 23230230, 'ddd', 'mmm', 'dmdm@gmail.com', 'mm@gmail.com', 17, '2020-08-10 10:23:00', '2020-08-10 10:23:00');

-- --------------------------------------------------------

--
-- Structure de la table `eleve_classes`
--

CREATE TABLE `eleve_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `eleve_id` bigint(20) UNSIGNED NOT NULL,
  `classe_id` bigint(20) UNSIGNED NOT NULL,
  `groupe_id` bigint(20) UNSIGNED DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `eleve_classes`
--

INSERT INTO `eleve_classes` (`id`, `eleve_id`, `classe_id`, `groupe_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, NULL, '2020-07-28 12:06:40'),
(2, 2, 2, 3, NULL, '2020-07-28 13:14:49'),
(3, 3, 3, 2, NULL, '2020-07-28 13:15:29'),
(4, 4, 1, 1, NULL, '2020-07-28 13:15:35'),
(5, 5, 2, 3, NULL, '2020-07-28 13:15:42'),
(6, 6, 1, 1, NULL, '2020-07-28 13:15:50'),
(7, 7, 4, 1, NULL, '2020-07-28 13:16:23'),
(8, 8, 2, 3, NULL, '2020-07-28 13:16:41'),
(9, 9, 3, 2, NULL, '2020-07-28 13:17:06'),
(10, 10, 4, 1, NULL, '2020-07-28 13:17:17'),
(11, 11, 2, 3, NULL, '2020-07-28 13:16:56'),
(12, 12, 3, 1, NULL, '2020-07-28 13:16:49'),
(13, 13, 4, 3, NULL, '2020-07-28 13:16:33'),
(14, 14, 2, 1, NULL, '2020-08-06 11:38:00'),
(15, 15, 1, 2, NULL, '2020-08-10 09:27:01'),
(16, 16, 4, 0, NULL, NULL),
(17, 17, 1, 0, NULL, NULL),
(18, 18, 3, 1, NULL, NULL),
(19, 19, 1, 1, NULL, NULL),
(20, 20, 1, 1, NULL, '2020-08-10 11:54:40');

-- --------------------------------------------------------

--
-- Structure de la table `enseignants`
--

CREATE TABLE `enseignants` (
  `id_en` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `enseignants`
--

INSERT INTO `enseignants` (`id_en`, `created_at`, `updated_at`) VALUES
(3, '2020-07-20 09:53:32', '2020-07-20 09:53:32'),
(5, '2020-07-21 08:46:37', '2020-07-21 08:46:37'),
(6, '2020-07-21 10:19:18', '2020-07-21 10:19:18'),
(7, '2020-07-23 14:00:48', '2020-07-23 14:00:48'),
(9, '2020-07-23 14:01:11', '2020-07-23 14:01:11'),
(12, '2020-07-23 13:56:13', '2020-07-23 13:56:13'),
(14, '2020-07-27 08:37:28', '2020-07-27 08:37:28'),
(15, '2020-08-05 10:10:06', '2020-08-05 10:10:06'),
(16, '2020-08-05 10:06:34', '2020-08-05 10:06:34'),
(17, '2020-08-05 10:21:00', '2020-08-05 10:21:00');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant_classes`
--

CREATE TABLE `enseignant_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ens_id` bigint(20) UNSIGNED NOT NULL,
  `classe_id` bigint(20) UNSIGNED NOT NULL,
  `groupe_id` int(50) NOT NULL,
  `mat_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `enseignant_classes`
--

INSERT INTO `enseignant_classes` (`id`, `ens_id`, `classe_id`, `groupe_id`, `mat_id`, `created_at`, `updated_at`) VALUES
(16, 3, 1, 1, 6, '2020-08-17 10:24:14', '2020-08-17 10:24:14'),
(22, 3, 1, 1, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE `evenements` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `dated` date NOT NULL,
  `datef` date NOT NULL,
  `heured` time(6) NOT NULL,
  `heuref` time(6) NOT NULL,
  `location` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`id`, `description`, `prix`, `telephone`, `dated`, `datef`, `heured`, `heuref`, `location`, `titre`, `image`, `created_at`, `updated_at`) VALUES
(3, 'event', 50, '53097766', '2021-01-01', '2021-01-01', '12:00:00.000000', '15:00:00.000000', 'hotel Sousse Place', 'Event', 'event-2_1610141418.jpg', '2021-01-08 20:30:18', '2021-01-08 20:30:18'),
(4, 'event2', 20, '53097766', '2021-02-01', '2021-02-01', '15:30:00.000000', '17:30:00.000000', 'Sousse', 'event2', 'activities-2_1610142633.jpg', '2021-01-08 20:50:34', '2021-01-08 20:50:34');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `event_title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_start_date` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_start_time` time(6) NOT NULL,
  `event_end_date` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_end_time` time(6) NOT NULL,
  `event_description` text COLLATE utf8mb4_unicode_ci,
  `location` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` int(255) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `description`, `cover_image`, `created_at`, `updated_at`) VALUES
(2, 'hh', 'gggg', '2_1600947699.jpg', '2020-09-24 09:41:39', '2020-09-24 09:41:39'),
(3, 'enfant1', 'enfant1', '3_1610139636.jpg', '2021-01-08 20:00:36', '2021-01-08 20:00:36'),
(4, 'enfant2', 'enfant2', '11_1610139703.jpg', '2021-01-08 20:01:44', '2021-01-08 20:01:44'),
(5, 'enfant3', 'enfant3', '13_1610139736.jpg', '2021-01-08 20:02:16', '2021-01-08 20:02:16');

-- --------------------------------------------------------

--
-- Structure de la table `groupes`
--

CREATE TABLE `groupes` (
  `id_g` bigint(20) UNSIGNED NOT NULL,
  `nom_g` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `groupes`
--

INSERT INTO `groupes` (`id_g`, `nom_g`, `created_at`, `updated_at`) VALUES
(1, 'groupe 1', '2020-07-17 09:31:51', '2020-07-17 09:31:51'),
(2, 'groupe 2', '2020-07-17 09:31:55', '2020-07-17 09:31:55'),
(3, 'groupe 3', '2020-07-20 12:06:55', '2020-07-20 12:06:55');

-- --------------------------------------------------------

--
-- Structure de la table `groupe_classes`
--

CREATE TABLE `groupe_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `groupe_id` bigint(20) UNSIGNED NOT NULL,
  `classe_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `groupe_classes`
--

INSERT INTO `groupe_classes` (`id`, `groupe_id`, `classe_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-07-27 11:45:17', '2020-07-27 11:45:17'),
(2, 2, 1, '2020-07-27 11:45:20', '2020-07-27 11:45:20'),
(3, 3, 1, '2020-07-27 11:45:22', '2020-07-27 11:45:22'),
(4, 1, 2, '2020-07-27 12:28:33', '2020-07-27 12:28:33'),
(5, 3, 2, '2020-07-27 12:28:37', '2020-07-27 12:28:37'),
(6, 1, 3, '2020-07-28 13:15:07', '2020-07-28 13:15:07'),
(7, 2, 3, '2020-07-28 13:15:10', '2020-07-28 13:15:10'),
(8, 1, 4, '2020-07-28 13:16:06', '2020-07-28 13:16:06'),
(9, 3, 4, '2020-07-28 13:16:09', '2020-07-28 13:16:09');

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE `matieres` (
  `id_m` bigint(20) UNSIGNED NOT NULL,
  `nom_m` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coef_m` int(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `matieres`
--

INSERT INTO `matieres` (`id_m`, `nom_m`, `coef_m`, `created_at`, `updated_at`) VALUES
(7, 'math', 0, '2020-07-27 09:50:36', '2020-07-29 11:04:34'),
(8, 'Anglais', 0, '2020-07-29 11:02:41', '2020-07-29 11:02:41'),
(9, 'italien', 0, '2020-09-09 09:59:00', '2020-09-09 09:59:00'),
(10, 'histoire', 0, '2020-09-09 12:06:18', '2020-09-09 12:06:18');

-- --------------------------------------------------------

--
-- Structure de la table `matiere_classes`
--

CREATE TABLE `matiere_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mat_id` bigint(20) UNSIGNED NOT NULL,
  `classe_id` bigint(20) UNSIGNED NOT NULL,
  `coef_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `matiere_classes`
--

INSERT INTO `matiere_classes` (`id`, `mat_id`, `classe_id`, `coef_id`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 2, '2020-07-29 12:59:11', '2020-07-29 12:59:11'),
(2, 7, 4, 2, '2020-07-29 13:02:33', '2020-07-29 13:02:33'),
(4, 7, 1, 2, '2020-07-29 13:06:43', '2020-07-29 13:06:43'),
(5, 9, 1, 2, '2020-07-29 13:09:40', '2020-09-15 12:11:24'),
(6, 8, 1, 2, '2020-09-11 12:41:23', '2020-09-11 12:41:23');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_10_034632_create_events_table', 1),
(4, '2020_04_17_110126_slider_images_table', 1),
(5, '2020_04_18_180829_create_galleries_table', 1),
(6, '2020_04_20_201509_create_photos_table', 1),
(7, '2020_04_22_123232_create_eleves_table', 1),
(8, '2020_04_22_124019_create_classes_table', 1),
(9, '2020_04_30_132009_create_test_table', 1),
(10, '2020_05_01_120247_create_notifications_table', 1),
(11, '2020_05_01_211303_create_relcams_table', 1),
(12, '2020_07_02_085439_create_eleve_classe_table', 1),
(13, '2020_07_02_132755_create_parents_table', 1),
(14, '2020_07_13_111616_create_clubs_table', 1),
(15, '2020_07_13_132040_create_enseignants_table', 1),
(16, '2020_07_14_093948_create_enseignant_classe_table', 1),
(17, '2020_07_14_105815_create_groupes_table', 1),
(18, '2020_07_14_133907_create_groupe_classes_table', 1),
(19, '2020_07_23_084808_create_presence_table', 2),
(20, '2020_07_27_091027_create_matieres_table', 3),
(21, '2020_07_27_092122_create_enseignant_matieres_table', 3),
(22, '2020_07_29_120809_create_cours_table', 4),
(23, '2020_07_29_122852_create_coef_table', 5),
(24, '2020_07_29_124959_create_matiere_classes_table', 6),
(25, '2020_08_04_092639_create_notes_table', 7);

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `id_n` bigint(20) UNSIGNED NOT NULL,
  `note` float NOT NULL,
  `note1` float DEFAULT NULL,
  `mat_id` bigint(20) UNSIGNED NOT NULL,
  `classe_id` bigint(20) UNSIGNED NOT NULL,
  `groupe_id` bigint(20) UNSIGNED NOT NULL,
  `coef_id` bigint(20) UNSIGNED NOT NULL,
  `eleve_id` bigint(20) UNSIGNED NOT NULL,
  `ens_id` bigint(20) UNSIGNED NOT NULL,
  `valid` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`id_n`, `note`, `note1`, `mat_id`, `classe_id`, `groupe_id`, `coef_id`, `eleve_id`, `ens_id`, `valid`, `created_at`, `updated_at`) VALUES
(63, 1, 2, 7, 1, 2, 2, 15, 3, 0, '2020-08-19 15:52:01', '2020-08-19 15:52:01'),
(64, 11, NULL, 6, 1, 1, 2, 1, 3, 0, '2020-08-21 15:21:11', '2020-08-21 15:21:11'),
(65, 14, NULL, 6, 1, 1, 2, 4, 3, 0, '2020-08-21 15:21:12', '2020-08-21 15:21:12'),
(66, 11, NULL, 6, 1, 1, 2, 6, 3, 0, '2020-08-21 15:21:12', '2020-08-21 15:21:12'),
(67, 10, NULL, 6, 1, 1, 2, 20, 3, 0, '2020-08-21 15:21:13', '2020-08-21 15:21:13'),
(68, 10, NULL, 7, 1, 1, 2, 1, 3, 0, '2021-01-09 23:42:04', '2021-01-09 23:42:04'),
(69, 12, NULL, 7, 1, 1, 2, 4, 3, 0, '2021-01-09 23:42:05', '2021-01-09 23:42:05'),
(70, 14, NULL, 7, 1, 1, 2, 6, 3, 0, '2021-01-09 23:42:05', '2021-01-09 23:42:05'),
(71, 15, NULL, 7, 1, 1, 2, 20, 3, 0, '2021-01-09 23:42:05', '2021-01-09 23:42:05');

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `presences`
--

CREATE TABLE `presences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `classe_id` bigint(20) UNSIGNED NOT NULL,
  `groupe_id` int(20) NOT NULL,
  `ens_id` bigint(20) UNSIGNED NOT NULL,
  `eleve_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` datetime NOT NULL,
  `mat_id` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `presences`
--

INSERT INTO `presences` (`id`, `classe_id`, `groupe_id`, `ens_id`, `eleve_id`, `status`, `date`, `mat_id`, `created_at`, `updated_at`) VALUES
(43, 1, 1, 3, 1, 0, '2020-08-23 00:00:00', 6, '2020-08-23 19:42:52', '2020-08-23 19:42:52'),
(44, 1, 1, 3, 4, 1, '2020-08-23 00:00:00', 6, '2020-08-23 19:42:52', '2020-08-23 19:42:52'),
(45, 1, 1, 3, 6, 0, '2020-08-23 00:00:00', 6, '2020-08-23 19:42:52', '2020-08-23 19:42:52'),
(46, 1, 1, 3, 20, 1, '2020-08-23 00:00:00', 6, '2020-08-23 19:42:53', '2020-08-23 19:42:53'),
(47, 1, 1, 3, 1, 0, '2020-08-25 00:00:00', 6, '2020-08-25 13:51:55', '2020-08-25 13:51:55'),
(48, 1, 1, 3, 4, 0, '2020-08-25 00:00:00', 6, '2020-08-25 13:51:55', '2020-08-25 13:51:55'),
(49, 1, 1, 3, 6, 0, '2020-08-25 00:00:00', 6, '2020-08-25 13:51:55', '2020-08-25 13:51:55'),
(50, 1, 1, 3, 20, 0, '2020-08-25 00:00:00', 6, '2020-08-25 13:51:55', '2020-08-25 13:51:55'),
(51, 1, 2, 3, 15, 1, '2021-01-09 00:00:00', 7, '2021-01-09 22:48:52', '2021-01-09 22:48:52'),
(52, 1, 1, 3, 1, 1, '2021-01-09 00:00:00', 7, '2021-01-09 22:56:57', '2021-01-09 22:56:57'),
(53, 1, 1, 3, 4, 0, '2021-01-09 00:00:00', 7, '2021-01-09 22:56:57', '2021-01-09 22:56:57'),
(54, 1, 1, 3, 6, 1, '2021-01-09 00:00:00', 7, '2021-01-09 22:56:57', '2021-01-09 22:56:57'),
(55, 1, 1, 3, 20, 0, '2021-01-09 00:00:00', 7, '2021-01-09 22:56:58', '2021-01-09 22:56:58');

-- --------------------------------------------------------

--
-- Structure de la table `reclams`
--

CREATE TABLE `reclams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_e` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_e` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_p` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_p` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sujet` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reclams`
--

INSERT INTO `reclams` (`id`, `message`, `email`, `nom_e`, `prenom_e`, `nom_p`, `prenom_p`, `tel`, `sujet`, `created_at`, `updated_at`) VALUES
(1, 'réclamation a a propos le transport', 'slamamalek6@gmail.com', 'malek', 'slama', 'malek', 'slama', '53097766', 'réclamations', '2021-01-09 21:26:59', '2021-01-09 21:26:59'),
(2, 'grande école bravo!..', 'slamamanel94@gmail.com', '', '', 'banneni', 'amira', '53097766', 'Remerciement', '2021-01-09 22:06:13', '2021-01-09 22:06:13');

-- --------------------------------------------------------

--
-- Structure de la table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sliderid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sorties`
--

CREATE TABLE `sorties` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_s` date NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sorties`
--

INSERT INTO `sorties` (`id`, `titre`, `description`, `date_s`, `prix`, `image`, `telephone`, `created_at`, `updated_at`) VALUES
(1, 'sortie', 'sortie', '2020-02-02', 14747, '1_1600944043.jpg', '12345678', '2021-01-08 22:52:32', '2020-09-24 09:07:59'),
(2, 'sortie', 'sortie', '2021-01-08', 15, 'slider-4_1610145284.jpg', '12345678', '2021-01-08 21:34:44', '2021-01-08 21:34:44');

-- --------------------------------------------------------

--
-- Structure de la table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu_naiss` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naiss` date NOT NULL,
  `nom_p` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_m` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_p` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_m` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_p` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_m` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_p` int(11) NOT NULL,
  `tel_m` int(11) NOT NULL,
  `gsm_p` int(11) NOT NULL,
  `gsm_m` int(11) NOT NULL,
  `profession_p` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession_m` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_p` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_m` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tuteurs`
--

CREATE TABLE `tuteurs` (
  `id_p` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tuteurs`
--

INSERT INTO `tuteurs` (`id_p`, `created_at`, `updated_at`) VALUES
(18, '2020-08-05 10:22:47', '2020-08-05 10:22:47');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verif` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `verif`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'adddd', 'admin@gmail.com', 'admin', NULL, '$2y$10$MNbNzfznILW8Hw7VJDd67uuXdw1tbv0w4G0hOTyrhq.J.Dst/HSlO', NULL, NULL, '2020-07-16 14:00:30', '2020-07-16 14:00:30'),
(3, 'mira', 'mira@gmail.com', 'enseignant', NULL, '$2y$10$v1lppoCXfSmT0uNvPuogxO14hg6oGvE.gLXAQANHJbmdO0RwKFOeW', 'enseignant', NULL, '2020-07-20 09:51:57', '2020-07-20 09:53:33'),
(5, 'zz', 'az@gmail.com', 'enseignant', NULL, '$2y$10$BAa1bX.w1NOHzqe4p4IDfutFH35cUaBGUCrDa32x0D0VpjMIdiM8u', 'enseignant', NULL, '2020-07-21 08:37:13', '2020-07-21 08:46:38'),
(6, 'aa', 'aa@gmail.com', 'enseignant', NULL, '$2y$10$0cOuLsBVfg3U8fAIX0bcIu.Ge7xPvHqJJQMiyXLhbzKgzo4Vtxj96', 'enseignant', NULL, '2020-07-21 08:45:10', '2020-07-21 10:19:19'),
(7, 'f1', 'ff@gmail.com', 'enseignant', NULL, '$2y$10$spSR5FGLRjQQkweJY3N3i.xpJ5FrSB7kKCsBEVsa.cJRitP7R/Bdy', 'enseignant', NULL, '2020-07-22 11:47:58', '2020-07-23 14:00:48'),
(9, 'dddd', 'dd@gmail.com', 'enseignant', NULL, '$2y$10$XNXg34e9bXZ31wV5tMf0oep4TPZmtMUz.6snNYz6OlYFGcd8euEra', 'enseignant', NULL, '2020-07-23 13:27:23', '2020-07-23 14:01:12'),
(10, 'bb', 'bb@gmail.com', 'enseignant', NULL, '$2y$10$G8FseI9r7tPH1Qh2xy2z2eVtEDtQzzPksaKWdcbepZ3XqnoW7bRp2', NULL, NULL, '2020-07-23 13:28:01', '2020-07-23 13:28:01'),
(11, 'hhh', 'hh@gmail.com', 'enseignant', NULL, '$2y$10$WDlyVW6XPk9nsTsoHmJfQuBYnUnjcm1bmNvEmz3mdLKIj/ZyyEAFS', NULL, NULL, '2020-07-23 13:46:21', '2020-07-23 13:46:21'),
(12, 'fff', 'kk@gmail.com', 'enseignant', NULL, '$2y$10$eulK7rV6VsVONxcVJjBRheZu8Rs67dcsm7ZUHaQXvS/G7DiIQyb6m', 'enseignant', NULL, '2020-07-23 13:47:47', '2020-07-23 13:56:13'),
(13, 'mm', 'mm@gmail.com', 'enseignant', NULL, '$2y$10$OSmzsVHN0mvc8Nw18xjkXuvllZp4vvX.VzA8IkzoNz3EPsT9wAoxi', NULL, NULL, '2020-07-23 13:49:11', '2020-07-23 13:49:11'),
(14, 'haythem', 'haythem@gmail.com', 'enseignant', NULL, '$2y$10$FBWu8ts7ba8VoTh2jkl1kumr0vOGs/mq.ozFl9DDe55.nbzNVDNvy', 'enseignant', NULL, '2020-07-27 08:36:59', '2020-07-27 08:37:28'),
(15, 'koukou', 'koukou@gmail.com', 'parent', NULL, '$2y$10$8x57dRsQqpMHTbkPIDRs/ujk/dBKPIWISKcoPIToLDOT9fvIPQ8zO', 'parent', NULL, '2020-08-05 09:41:04', '2020-08-05 10:10:06'),
(16, 'malek', 'malek@gmail.com', 'parent', NULL, '$2y$10$xw9eYINeLrcShVlapwcVuu87U0eNaJ7xXv78smBiLTPEBIRdLdLCC', 'parent', NULL, '2020-08-05 09:43:01', '2020-08-05 10:06:34'),
(17, 'amira', 'amira@gmail.com', 'parent', NULL, '$2y$10$XsyD.ApS.VTUyr9dxVLZRO0IZ2tv5WzD6YgkJWFMBbiWuLuXcVja2', 'parent', NULL, '2020-08-05 10:20:37', '2020-08-05 10:21:00'),
(18, 'cc', 'cc@gmail.com', 'parent', NULL, '$2y$10$h/WwbvW4Z2X8DgFU.wKwIuCskPHalETv4z0dmnCxacEin5QYyQ5vO', 'parent', NULL, '2020-08-05 10:22:38', '2020-08-05 10:22:48'),
(19, 'parent', 'parent@gmail.com', 'parent', NULL, '$2y$10$6ZQkDuqaam5lzdLBHo0/me3I9IJTWxhmO4si2pi6Fcs1fF1kfrKmC', NULL, NULL, '2020-08-06 10:09:43', '2020-08-06 10:09:43');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id_c`);

--
-- Index pour la table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `coefs`
--
ALTER TABLE `coefs`
  ADD PRIMARY KEY (`id_coef`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id_co`);

--
-- Index pour la table `eleves`
--
ALTER TABLE `eleves`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `eleve_classes`
--
ALTER TABLE `eleve_classes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `enseignants`
--
ALTER TABLE `enseignants`
  ADD PRIMARY KEY (`id_en`);

--
-- Index pour la table `enseignant_classes`
--
ALTER TABLE `enseignant_classes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `groupes`
--
ALTER TABLE `groupes`
  ADD PRIMARY KEY (`id_g`);

--
-- Index pour la table `groupe_classes`
--
ALTER TABLE `groupe_classes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`id_m`);

--
-- Index pour la table `matiere_classes`
--
ALTER TABLE `matiere_classes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id_n`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `presences`
--
ALTER TABLE `presences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reclams`
--
ALTER TABLE `reclams`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sorties`
--
ALTER TABLE `sorties`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tuteurs`
--
ALTER TABLE `tuteurs`
  ADD PRIMARY KEY (`id_p`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `classes`
--
ALTER TABLE `classes`
  MODIFY `id_c` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `coefs`
--
ALTER TABLE `coefs`
  MODIFY `id_coef` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id_co` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `eleves`
--
ALTER TABLE `eleves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `eleve_classes`
--
ALTER TABLE `eleve_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `enseignants`
--
ALTER TABLE `enseignants`
  MODIFY `id_en` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `enseignant_classes`
--
ALTER TABLE `enseignant_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `groupes`
--
ALTER TABLE `groupes`
  MODIFY `id_g` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `groupe_classes`
--
ALTER TABLE `groupe_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `matieres`
--
ALTER TABLE `matieres`
  MODIFY `id_m` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `matiere_classes`
--
ALTER TABLE `matiere_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `id_n` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `presences`
--
ALTER TABLE `presences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT pour la table `reclams`
--
ALTER TABLE `reclams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sorties`
--
ALTER TABLE `sorties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tuteurs`
--
ALTER TABLE `tuteurs`
  MODIFY `id_p` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
