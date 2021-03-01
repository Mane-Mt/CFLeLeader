-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 01 mars 2021 à 15:03
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cfleleader`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

CREATE TABLE `actualites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `public` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actualites`
--

INSERT INTO `actualites` (`id`, `titre`, `content`, `image`, `public`, `created_at`, `updated_at`) VALUES
(1, 'vendre darticle', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor quo, id labore, eos officiis cupiditate amet sequi fuga necessitatibus quas culpa. Aut expedita esse, minima sit quam animi aliquid numquam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque iste quisquam at doloremque ducimus, nemo, recusandae commodi ullam, obcaecati iusto expedita harum quos. Delectus reiciendis quia, voluptate inventore adipisci pariatur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam error nam modi. Aliquid quia eius quasi sequi, commodi quis aliquam enim consequatur atque non deserunt, alias recusandae nobis quibusdam veniam? Voluptatibus exercitationem corrupti eum enim placeat amet asperiores quam doloribus voluptatem tempore et minima a suscipit laudantium sapiente dignissimos eius eveniet vitae obcaecati velit iste consectetur in, ipsa earum! Cupiditate! Maxime nobis nihil quisquam omnis laudantium, quidem architecto doloremque minus magnam harum. Quis velit numquam magnam facilis error eius hic consectetur, voluptate porro ratione, ducimus quos, doloremque repudiandae aliquid! Molestiae. Beatae reprehenderit esse iusto sequi ex atque tenetur voluptates corrupti architecto praesentium minima quaerat delectus vero cum nobis temporibus illo cupiditate eaque itaque, non alias consequatur quas? Placeat, officia libero! Et aliquid, adipisci eum delectus, modi repellat maiores, non dolore recusandae assumenda quae? Nemo sunt fuga non debitis, eos obcaecati at modi natus omnis temporibus a provident corporis deleniti. Quasi! Voluptatibus amet nisi voluptatem non doloribus adipisci expedita obcaecati aspernatur nihil, rem suscipit, placeat ipsam id, nulla dolor libero officia ipsum officiis! Facilis reiciendis, dolorum hic commodi asperiores modi. Qui! Accusantium at deserunt facere, voluptas modi minima excepturi, amet ducimus ullam, cum quos ut dolorum aliquam. Ad, id, eius molestias magnam fugit aliquid quae totam placeat illum cupiditate sed illo? Pariatur assumenda culpa laboriosam exercitationem nostrum nihil dolorum, voluptate distinctio blanditiis! Nemo vitae similique officiis aliquam molestiae eius animi nihil, aperiam voluptas enim accusantium quis cum inventore earum magni rem! Fugit hic cum aperiam cumque fugiat perferendis consequuntur odit  ab obcaecati, explicabo et dicta ut quas dolorum', 'actualite/hdPFuExNuJZqxSdh7SpyULaEEy9Wo3eOTmB7pYUJ.jpg', 1, '2021-02-06 15:41:13', '2021-02-06 15:44:49'),
(2, 'ACHAT', 'aiores atque aut consequuntur qui explicabo obcaecati natus molestiae repellat totam asperiores doloribus est odit quas laudantium! Repellendus! Perferendis numquam at nobis rem quasi minus commodi hic itaque voluptate quidem, illo ipsam. Eos mollitia et veniam architecto fugit? Minus ratione quisquam temporibus odit mollitia pariatur repellendus fugit magnam? Delectus aspernatur facilis consequuntur, nihil explicabo voluptas. Odio magnam, atque fugit voluptatum tempore repellat laudantium! Illo voluptatem asperiores porro, minima autem voluptate quaerat beatae tempore vitae provident atque fuga sequi! Quibusdam delectus nulla provident, itaque cumque cum, ad sapiente accusantium in laboriosam eaque atque voluptas voluptatem reprehenderit asperiores ex esse eius corrupti veniam nam, quod aliquam. Voluptas maxime neque tempore! Illum aliquam unde officiis ipsum, mollitia maiores fuga ea minus, cumque recusandae architecto ducimus quos aspernatur deserunt. Recusandae dolorum fugiat, esse tempora amet delectus earum consequatur odit doloribus laborum expedita? Nesciunt animi, illum eligendi, quibusdam eius praesentium magnam quam quisquam reprehenderit alias, consequatur possimus minus. Ea ex iste labore quam itaque sapiente mollitia sit obcaecati. Eos laudantium rem illo expedita! Eum, debitis laudantium! Maiores suscipit ab obcaecati, explicabo et dicta ut quas dolorum blanditiis laboriosam corporis quasi esse odio sed doloribus autem impedit voluptatem ratione voluptates nulla. Voluptatibus, rerum nulla! Alias repudiandae provident hic ea velit facilis. Dolor, aspernatur! Quibusdam explicabo vitae, quod ut saepe consequuntur laboriosam, provident velit, hic minima reprehenderit asperiores! Similique aspernatur aliquid vel architecto cumque fugit? Eveniet nulla sed tempora mollitia, nemo fuga sequi placeat voluptas a tempore vero, natus minus quia ad, in amet sit ex pariatur velit id. Eaque neque impedit dolorem veritatis nihil. Similique sequi blanditiis aspernatur nemo nam non eos provident libero, aut, eaque, hic quisquam ullam! Ducimus, aliquid? Cumque sequi aut id magnam maiores vitae? Maiores nobis eos vel saepe optio. Quibusdam alias tempora quidem aliquam, reiciendis quod dolorem temporibus repellat autem obcaecati, quisquam mollitia, aut esse animi debitis odio qui recusandae enim impedit? Repudiandae, nam consequatur reiciendis sint eaque soluta. Dignissimos eligendi accusamus nesciunt necessitatibus. Earum reprehenderit debitis nulla cupiditate sed ullam suscipit soluta similique, eius corporis ipsam sint, laboriosam reiciendis temporibus nostrum totam deleniti libero in nihil facilis! Quos! Temporibus eveniet nam laborum quas, accusamus quisquam quidem nobis odio, veniam eligendi vel facere quod molestiae iusto ipsam animi. Tempore fugit suscipit et animi aperiam recusandae dicta ab. Amet, ipsam. Nostrum magnam explicabo fugit, eligendi reiciendis ipsum ad voluptatibus doloremque adipisci voluptate atque! Ducimus, suscipit exercitationem cum assumenda quos tempora nesciunt saepe fuga pariatur quod, fugit harum, quia quam sint? Cupiditate neque iusto doloribus voluptate quas velit vel natus, sed recusandae quidem minima alias dolor repellat facilis ad, dicta eligendi animi necessitatibus voluptatem veniam. Numquam, at? Officiis, voluptates fugiat! Fuga! Ut quaerat tempora ipsa harum consequatur aspernatur laborum perferendis accusamus neque aperiam beatae provident soluta dolores inventore vero, quos recusandae porro repellendus quas dicta. Odio, quod? Reprehenderit sit quae ratione. Nulla commodi dolorem eius neque similique corrupti numquam unde soluta omnis explicabo maxime, facilis blanditiis voluptatum alias ratione quasi ipsam rerum! Blanditiis necessitatibus ea iusto, expedita voluptates itaque consequatur obcaecati! Vel ipsa possimus', 'actualite/3ZWTJ2tOOOykbfEZWuWCpdcH3XNXiAnJhvtOA0Wx.jpg', 1, '2021-02-06 15:46:17', '2021-02-06 15:46:17'),
(3, 'Lorem ipsum dolor sit amet consectetur', 'sapiente accusantium in laboriosam eaque atque voluptas voluptatem reprehenderit asperiores ex esse eius corrupti veniam nam, quod aliquam. Voluptas maxime neque tempore! Illum aliquam unde officiis ipsum, mollitia maiores fuga ea minus, cumque recusandae architecto ducimus quos aspernatur deserunt. Recusandae dolorum fugiat, esse tempora amet delectus earum consequatur odit doloribus laborum expedita? Nesciunt animi, illum eligendi, quibusdam eius praesentium magnam quam quisquam reprehenderit alias, consequatur possimus minus. Ea ex iste labore quam itaque sapiente mollitia sit obcaecati. Eos laudantium rem illo expedita! Eum, debitis laudantium! Maiores suscipit ab obcaecati, explicabo et dicta ut quas dolorum blanditiis laboriosam corporis quasi esse odio sed doloribus autem impedit voluptatem ratione voluptates nulla. Voluptatibus, rerum nulla! Alias repudiandae provident hic ea velit facilis. Dolor, aspernatur! Quibusdam explicabo vitae, quod ut saepe consequuntur laboriosam, provident velit, hic minima reprehenderit asperiores! Similique aspernatur aliquid vel architecto cumque fugit? Eveniet nulla sed tempora mollitia, nemo fuga sequi placeat voluptas a tempore vero, natus minus quia ad, in amet sit ex pariatur velit id. Eaque neque impedit dolorem veritatis nihil. Similique sequi blanditiis aspernatur nemo nam non eos provident libero, aut, eaque, hic quisquam ullam! Ducimus, aliquid? Cumque sequi aut id magnam maiores vitae? Maiores nobis eos vel saepe optio. Quibusdam alias tempora quidem aliquam, reiciendis quod dolorem temporibus repellat autem obcaecati, quisquam mollitia, aut esse animi debitis odio qui recusandae enim impedit? Repudiandae, nam consequatur reiciendis sint eaque soluta. Dignissimos eligendi accusamus nesciunt necessitatibus. Earum reprehenderit debitis nulla cupiditate sed ullam suscipit soluta similique, eius corporis ipsam sint, laboriosam reiciendis temporibus nostrum totam deleniti libero in nihil facilis! Quos! Temporibus eveniet nam laborum quas, accusamus quisquam quidem nobis odio, veniam eligendi vel facere quod molestiae iusto ipsam animi. Tempore fugit suscipit et animi aperiam recusandae dicta ab. Amet, ipsam. Nostrum magnam explicabo fugit, eligendi reiciendis ipsum ad voluptatibus doloremque adipisci voluptate atque! Ducimus, suscipit exercitationem cum assumenda quos tempora nesciunt saepe fuga pariatur quod, fugit harum, quia quam sint? Cupiditate neque iusto doloribus voluptate quas velit vel natus, sed recusandae quidem minima alias dolor repellat facilis ad, dicta eligendi animi necessitatibus voluptatem veniam. Numquam, at? Officiis, voluptates fugiat! Fuga! Ut quaerat tempora ipsa harum consequatur aspernatur laborum perferendis accusamus neque aperiam beatae provident soluta dolores inventore vero, quos recusandae porro repellendus quas dicta. Odio, quod? Reprehenderit sit quae ratione. Nulla commodi dolorem eius neque similique corrupti numquam unde soluta omnis explicabo maxime, facilis blanditiis voluptatum alias ratione quasi ipsam rerum! Blanditiis necessitatibus ea iusto, expedita voluptates itaque consequatur obcaecati! Vel ipsa possimus sequi recusandae hic error, libero provident consequuntur pers', 'actualite/UTIxQltpz3RZxUER4WKVxa1ZNvPqQGUgYSg9gYPY.jpg', 1, '2021-02-06 15:47:19', '2021-02-06 15:47:19');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`, `seen`) VALUES
(1, 'Edemagnon Mathieu MANEH', 'mathieu20maneh@gmail.com', 'Salut la mifa', '2021-02-05 12:52:24', '2021-02-05 12:55:06', 1),
(2, 'Edemagnon Mathieu MANEH', 'mathieu20maneh@gmail.com', 'Salut la mifa', '2021-02-05 12:53:10', '2021-02-05 12:55:10', 1);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formateurs`
--

CREATE TABLE `formateurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenoms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matiere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motDuFormateur` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inscription_price` int(11) NOT NULL,
  `formation_price` int(11) NOT NULL,
  `promo_price` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `promo` tinyint(1) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`id`, `libelle`, `image`, `inscription_price`, `formation_price`, `promo_price`, `active`, `promo`, `description`, `created_at`, `updated_at`) VALUES
(4, 'Formation à l\'initiation à l\'informatique', 'fomation/LESrWOBfRubI8u7E38FnM7jgsOKm616IWvX4aGJd.png', 1237, 150, 123, 1, 0, 'OUI', '2021-02-05 22:43:58', '2021-02-05 22:43:58'),
(5, 'Formation en laravel', 'fomation/9lfPSPzcBIuxnjP5xDI7fXAMwgFVYrlWzcMFAWPJ.png', 0, 1, 232, 1, 0, 'elir', '2021-02-06 13:29:53', '2021-02-06 13:29:53');

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions`
--

CREATE TABLE `inscriptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valider` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `formation_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `inscriptions`
--

INSERT INTO `inscriptions` (`id`, `nom`, `prenom`, `tel`, `mail`, `valider`, `created_at`, `updated_at`, `formation_id`) VALUES
(3, 'KoLEJDI', 'Mawudem', '98873737', 'kole@gmail.com', 1, '2021-02-06 01:21:01', '2021-02-06 01:26:02', 4),
(4, 'MANEH', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-06 07:10:11', '2021-02-06 07:10:11', 4),
(5, 'PIKELI', 'Essowè', '92266137', 'bc4244850@gmail.com', 0, '2021-02-08 18:46:26', '2021-02-08 18:46:26', 4),
(6, 'MANEH', 'Edemagnon', '92266137', 'bc4244850@gmail.com', 0, '2021-02-08 18:58:41', '2021-02-08 18:58:41', 4),
(7, 'MANEH', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-08 19:24:18', '2021-02-08 19:24:18', 4),
(8, 'MANEH', 'Edemagnon', '92266137', 'delphineaklima00@gmail.com', 0, '2021-02-09 13:18:45', '2021-02-09 13:18:45', 4),
(9, 'DOSSOUMI', 'Kokou', '92266137', 'bc4244850@gmail.com', 0, '2021-02-09 13:43:51', '2021-02-09 13:43:51', 4),
(10, 'MANEH', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-09 14:29:20', '2021-02-09 14:29:20', 4),
(11, 'ALADIN', 'Joe Bidden', '92266137', 'bc4244850@gmail.com', 0, '2021-02-09 15:14:17', '2021-02-09 15:14:17', 5),
(12, 'AHETO', 'Livlic', '98654536', 'livlicadyl@gmail.com', 0, '2021-02-09 15:57:19', '2021-02-09 15:57:19', 4),
(13, 'MANEH', 'Edemagnon', '92266137', 'bc4244850@gmail.com', 0, '2021-02-10 07:38:40', '2021-02-10 07:38:40', 4),
(14, 'MANEH', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-10 09:03:53', '2021-02-10 09:03:53', 5),
(15, 'MKLMKA', 'Edodo', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-11 13:13:37', '2021-02-11 13:13:37', 5),
(16, 'KOKO', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-11 13:20:24', '2021-02-11 13:20:24', 5),
(17, 'KAKAO', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-11 13:25:56', '2021-02-11 13:25:56', 4),
(18, 'KOKO', 'kokala', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-11 13:43:01', '2021-02-11 13:43:01', 4),
(19, 'MANEH', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-11 16:03:25', '2021-02-11 16:03:25', 5),
(20, 'MANEH', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-11 16:24:11', '2021-02-11 16:24:11', 5),
(21, 'MANEH', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-11 16:26:05', '2021-02-11 16:26:05', 4),
(22, 'MANEH', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-11 17:18:34', '2021-02-11 17:18:34', 4),
(23, 'MANEH', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-11 17:23:45', '2021-02-11 17:23:45', 4),
(24, 'MANEH', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-12 15:14:52', '2021-02-12 15:14:52', 5),
(25, 'MANEH', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-12 15:17:30', '2021-02-12 15:17:30', 5),
(26, 'MANEH', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-12 15:27:30', '2021-02-12 15:27:30', 5),
(27, 'MANEH', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-12 16:02:53', '2021-02-12 16:02:53', 4),
(28, 'MANEH', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-13 16:19:07', '2021-02-13 16:19:07', 4),
(29, 'MANEH', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-13 16:40:00', '2021-02-13 16:40:00', 4),
(30, 'MANEH', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-13 16:47:05', '2021-02-13 16:47:05', 4),
(31, 'Edemagnon', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-20 14:44:20', '2021-02-20 14:44:20', 5),
(32, 'Edemagnon', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-20 14:51:28', '2021-02-20 14:51:28', 5),
(33, 'Edemagnon', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-20 14:57:33', '2021-02-20 14:57:33', 4),
(34, 'Amoi', 'azorn', '92266173', 'bc4244850@gmail.com', 0, '2021-02-20 15:01:41', '2021-02-20 15:01:41', 5),
(35, 'Edemagnon', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-20 15:16:56', '2021-02-20 15:16:56', 5),
(36, 'KODJO', 'DKJLKKIU', '92266137', 'bc4244850@gmail.com', 0, '2021-02-20 15:55:44', '2021-02-20 15:55:44', 4),
(37, 'Edemagnon', 'Edemagnon', '92266137', 'bc4244850@gmail.com', 0, '2021-02-20 17:42:33', '2021-02-20 17:42:33', 4),
(38, 'JULIUS', 'Cesar', '98764583', 'mathieu20maneh@gmail.com', 0, '2021-02-20 17:50:21', '2021-02-20 17:50:21', 4),
(39, 'KODJO', 'Kpatakou', '92266137', 'bc4244850@gmail.com', 0, '2021-02-20 18:13:00', '2021-02-20 18:13:00', 5),
(40, 'Edemagnon', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-20 22:54:47', '2021-02-20 22:54:47', 4),
(41, 'KOUY', 'KPOATA', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-21 17:11:04', '2021-02-21 17:11:04', 5),
(42, 'KODJO', 'Koffi', '92266137', 'mathieu20maneh@gmail.com', 1, '2021-02-21 18:20:25', '2021-02-21 18:20:25', 5),
(43, 'Edemagnon', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-26 02:29:10', '2021-02-26 02:29:10', 5),
(44, 'Edemagnon', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-26 09:11:39', '2021-02-26 09:11:39', 5),
(45, 'KODJO', 'Kpassa', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-26 09:21:52', '2021-02-26 09:21:52', 5),
(46, 'kODKJD', 'Edemagnon mASAN', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-26 09:24:33', '2021-02-26 09:24:33', 5),
(47, 'Edemagnon', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-26 09:49:57', '2021-02-26 09:49:57', 5),
(48, 'KPAKPO', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-27 00:13:01', '2021-02-27 00:13:01', 5),
(49, 'Edemagnon', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-27 06:27:46', '2021-02-27 06:27:46', 5),
(50, 'klopo', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 0, '2021-02-27 06:49:03', '2021-02-27 06:49:03', 5),
(51, 'HRORJ', 'DFKKF', '92266173', 'bc4244850@gmail.com', 0, '2021-02-27 06:52:00', '2021-02-27 06:52:00', 5),
(52, 'mpooi', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 1, '2021-02-27 06:55:51', '2021-02-27 06:55:51', 5),
(53, 'POYOU', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 1, '2021-02-27 07:10:23', '2021-02-27 07:10:23', 5),
(54, 'kokou', 'Edemagnon', '92266137', 'mathieu20maneh@gmail.com', 1, '2021-02-28 00:00:57', '2021-02-28 00:00:57', 5);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_resets_table', 1),
(23, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(24, '2019_08_19_000000_create_failed_jobs_table', 1),
(25, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(26, '2020_05_21_100000_create_teams_table', 1),
(27, '2020_05_21_200000_create_team_user_table', 1),
(28, '2020_05_21_300000_create_team_invitations_table', 1),
(29, '2021_01_03_015016_create_contacts_table', 1),
(30, '2021_01_10_114645_create_sessions_table', 1),
(31, '2021_01_12_114343_create_inscriptions_table', 1),
(32, '2021_01_14_084146_create_formations_table', 1),
(33, '2021_02_03_144619_add_status_to_payements_table', 2),
(34, '2021_01_26_114616_add_formation_id_to_inscriptions_table', 3),
(35, '2021_01_31_233134_add_seen_to_contacts_table', 3),
(36, '2021_02_01_223219_create_actualites_table', 3),
(37, '2021_02_04_111103_add_some_modification_to_payements_table', 4),
(38, '2021_02_04_175623_create_formateurs_table', 4),
(39, '2021_02_04_181646_add_active_to_formateurs_table', 5),
(40, '2021_02_04_182122_add_active_to_formateurs_table', 6),
(41, '2021_02_06_001850_add_nullable_to_tx_refence', 7);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `payements`
--

CREATE TABLE `payements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tx_reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inscription_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `payements`
--

INSERT INTO `payements` (`id`, `tx_reference`, `identifier`, `phone_number`, `payment_reference`, `amount`, `payment_method`, `status`, `inscription_id`, `created_at`, `updated_at`) VALUES
(2, '256496', 'zn2vkOsmQv', '97205337', NULL, 2468, 'FLOOZ', 'en cours', 3, '2021-02-06 01:21:09', '2021-02-06 01:21:57'),
(3, '256539', 'cb35s7RKyo', '97205337', NULL, 1446, 'FLOOZ', 'en cours', 4, '2021-02-06 07:10:18', '2021-02-06 07:24:35'),
(4, '258788', '20MKTHiIDl', '97205337', NULL, 1446, 'FLOOZ', 'annulé', 5, '2021-02-08 18:46:39', '2021-02-08 18:56:52'),
(5, '258795', '3PKUHybEdQ', '97205337', NULL, 1446, 'FLOOZ', 'annulé', 6, '2021-02-08 18:58:53', '2021-02-08 19:14:01'),
(6, '258815', 'ba18wZpib1', '97205337', NULL, 1446, 'FLOOZ', 'annulé', 7, '2021-02-08 19:24:25', '2021-02-08 20:10:04'),
(7, '259573', 'eK1Xe0splG', '97205337', NULL, 1446, 'FLOOZ', 'en cours', 8, '2021-02-09 13:18:51', '2021-02-09 13:19:11'),
(8, '259611', 'SckK2fuxFs', '97205337', NULL, 1446, 'FLOOZ', 'annulé', 9, '2021-02-09 13:43:57', '2021-02-09 14:02:14'),
(9, 'hkT7RTtfOV', 'hkT7RTtfOV', '97205337', NULL, 1446, 'MOOV', 'initialisé', 10, '2021-02-09 14:29:33', '2021-02-09 14:29:33'),
(10, '1552bxjsLj', '1552bxjsLj', '97205337', NULL, 1446, 'MOOV', 'initialisé', 10, '2021-02-09 15:12:56', '2021-02-09 15:12:56'),
(11, 's420t2Xr68', 's420t2Xr68', '97205337', NULL, 1357, 'MOOV', 'initialisé', 11, '2021-02-09 15:14:25', '2021-02-09 15:14:25'),
(12, 'zDpRP3IX0R', 'zDpRP3IX0R', '97205337', NULL, 1357, 'MOOV', 'initialisé', 11, '2021-02-09 15:23:58', '2021-02-09 15:23:58'),
(13, 'kzMSmjjAoC', 'kzMSmjjAoC', '97205337', NULL, 1357, 'MOOV', 'initialisé', 11, '2021-02-09 15:26:32', '2021-02-09 15:26:32'),
(14, 'WPLJhGz2gS', 'WPLJhGz2gS', '97205337', NULL, 1357, 'MOOV', 'initialisé', 11, '2021-02-09 15:28:51', '2021-02-09 15:28:51'),
(15, '259730', 'hSZK8DwByq', '97205337', NULL, 1357, 'FLOOZ', 'en cours', 11, '2021-02-09 15:28:52', '2021-02-09 15:29:08'),
(16, 'BtmxNeGhvR', 'BtmxNeGhvR', '97205337', NULL, 1446, 'MOOV', 'initialisé', 12, '2021-02-09 15:58:33', '2021-02-09 15:58:33'),
(17, '260464', 'WvydSTR8HS', '97205337', NULL, 1446, 'FLOOZ', 'en cours', 13, '2021-02-10 07:38:47', '2021-02-10 07:38:58'),
(18, '260559', '3gGUqouqPk', '97205337', NULL, 1357, 'FLOOZ', 'en cours', 14, '2021-02-10 09:03:59', '2021-02-10 09:04:28'),
(19, 'SwCvz6GDPj', 'SwCvz6GDPj', '92266137', NULL, 1, 'TOGOCEL', 'initialisé', 15, '2021-02-11 13:13:49', '2021-02-11 13:13:49'),
(20, 'fDyAFQOhzM', 'fDyAFQOhzM', '92266137', NULL, 1, 'MOOV', 'initialisé', 16, '2021-02-11 13:20:32', '2021-02-11 13:20:32'),
(21, 'R8VXGfY82M', 'R8VXGfY82M', '92266137', NULL, 1, 'TOGOCEL', 'initialisé', 16, '2021-02-11 13:21:02', '2021-02-11 13:21:02'),
(22, 'sUlMvMFKUX', 'sUlMvMFKUX', '97205337', NULL, 150, 'MOOV', 'initialisé', 17, '2021-02-11 13:26:04', '2021-02-11 13:26:04'),
(23, 'cemrWavPS3', 'cemrWavPS3', '97205337', NULL, 150, 'MOOV', 'initialisé', 18, '2021-02-11 13:43:09', '2021-02-11 13:43:09'),
(24, 'ARyuQbWTbM', 'ARyuQbWTbM', '97205337', NULL, 1, 'MOOV', 'initialisé', 19, '2021-02-11 16:03:32', '2021-02-11 16:03:32'),
(25, '4z5OsxE81C', '4z5OsxE81C', '97205337', NULL, 1, 'MOOV', 'initialisé', 20, '2021-02-11 16:24:20', '2021-02-11 16:24:20'),
(26, 'uq88qXKJCB', 'uq88qXKJCB', '97205337', NULL, 150, 'MOOV', 'initialisé', 21, '2021-02-11 16:26:11', '2021-02-11 16:26:11'),
(27, '50o4h3XcXJ', '50o4h3XcXJ', '97205337', NULL, 150, 'MOOV', 'initialisé', 22, '2021-02-11 17:18:45', '2021-02-11 17:18:45'),
(28, 'TqY9ZtaSM2', 'TqY9ZtaSM2', '97205337', NULL, 150, 'MOOV', 'initialisé', 23, '2021-02-11 17:23:58', '2021-02-11 17:23:58'),
(29, '1UWP03Oxrc', '1UWP03Oxrc', '97205337', NULL, 1, 'MOOV', 'initialisé', 24, '2021-02-12 15:15:02', '2021-02-12 15:15:02'),
(30, 'kVEh2XqVwe', 'kVEh2XqVwe', '97205337', NULL, 1, 'MOOV', 'initialisé', 25, '2021-02-12 15:17:42', '2021-02-12 15:17:42'),
(31, 'xUtO16Z55K', 'xUtO16Z55K', '97205337', NULL, 1, 'MOOV', 'initialisé', 26, '2021-02-12 15:27:41', '2021-02-12 15:27:41'),
(32, 'jxiXjPxWPb', 'jxiXjPxWPb', '97205337', NULL, 1387, 'MOOV', 'initialisé', 27, '2021-02-12 16:03:00', '2021-02-12 16:03:00'),
(33, 'LR38wEc8TG', 'LR38wEc8TG', '97205337', NULL, 1387, 'MOOV', 'initialisé', 28, '2021-02-13 16:19:14', '2021-02-13 16:19:14'),
(34, 'r2LwwAHxlo', 'r2LwwAHxlo', '97205337', NULL, 1387, 'MOOV', 'initialisé', 29, '2021-02-13 16:40:42', '2021-02-13 16:40:42'),
(35, 'zL7nHKCRFq', 'zL7nHKCRFq', '97205337', NULL, 1387, 'MOOV', 'initialisé', 30, '2021-02-13 16:47:23', '2021-02-13 16:47:23'),
(36, '8m3sq6knEv', '8m3sq6knEv', '97205337', NULL, 1387, 'MOOV', 'initialisé', 30, '2021-02-13 16:49:22', '2021-02-13 16:49:22'),
(37, 'OpG7DS6BHT', 'OpG7DS6BHT', '97205337', NULL, 1387, 'MOOV', 'initialisé', 30, '2021-02-13 16:50:32', '2021-02-13 16:50:32'),
(38, 'TEHaDwTZIN', 'TEHaDwTZIN', '97205337', NULL, 1, 'MOOV', 'initialisé', 31, '2021-02-20 14:44:28', '2021-02-20 14:44:28'),
(39, '2kja5PFxgv', '2kja5PFxgv', '97205337', NULL, 1, 'MOOV', 'initialisé', 31, '2021-02-20 14:48:47', '2021-02-20 14:48:47'),
(40, 'hRfpmG0GOx', 'hRfpmG0GOx', '97205337', NULL, 1, 'MOOV', 'initialisé', 32, '2021-02-20 14:51:36', '2021-02-20 14:51:36'),
(41, 'inTArUwRNM', 'inTArUwRNM', '97205337', NULL, 1387, 'MOOV', 'initialisé', 33, '2021-02-20 14:57:43', '2021-02-20 14:57:43'),
(42, '5pIaxwTicb', '5pIaxwTicb', '97205347', NULL, 1, 'MOOV', 'initialisé', 34, '2021-02-20 15:02:01', '2021-02-20 15:02:01'),
(43, '1dOyHgD4yU', '1dOyHgD4yU', '97205337', NULL, 1, 'MOOV', 'initialisé', 35, '2021-02-20 15:18:12', '2021-02-20 15:18:12'),
(44, 'uffnxiExao', 'uffnxiExao', '97205337', NULL, 1387, 'MOOV', 'initialisé', 36, '2021-02-20 15:56:06', '2021-02-20 15:56:06'),
(45, 'hgxYt9KzdU', 'hgxYt9KzdU', '97205337', NULL, 1387, 'MOOV', 'initialisé', 37, '2021-02-20 17:42:43', '2021-02-20 17:42:43'),
(46, '57A7Vc49lk', '57A7Vc49lk', '97205347', NULL, 1387, 'MOOV', 'initialisé', 38, '2021-02-20 17:50:41', '2021-02-20 17:50:41'),
(47, 'EgLeGCfvlB', 'EgLeGCfvlB', '97205337', NULL, 1, 'MOOV', 'initialisé', 39, '2021-02-20 18:13:15', '2021-02-20 18:13:15'),
(48, 'zAPSQjvj0q', 'zAPSQjvj0q', '97205337', NULL, 1387, 'MOOV', 'initialisé', 40, '2021-02-20 22:59:50', '2021-02-20 22:59:50'),
(49, '267948', 'oDPIkW4Twh', '97205337', NULL, 1, 'FLOOZ', 'annulé', 41, '2021-02-21 17:11:15', '2021-02-21 17:11:15'),
(50, '2HO0ufFqiB', '2HO0ufFqiB', '97205337', NULL, 1, 'MOOV', 'initialisé', 42, '2021-02-21 18:20:31', '2021-02-21 18:20:31'),
(51, '270521', '64nGBzgC5X', '97205337', NULL, 1, 'FLOOZ', 'en cours', 43, '2021-02-26 02:29:26', '2021-02-26 02:29:26'),
(52, 'W0YOl7Jnre', 'W0YOl7Jnre', '92266137', NULL, 1, 'MOOV', 'initialisé', 44, '2021-02-26 09:11:47', '2021-02-26 09:11:47'),
(53, '270618', 'Bk8Sq5B9xl', '92266137', NULL, 1, 'T-Money', 'approved', 44, '2021-02-26 09:12:03', '2021-02-26 09:12:03'),
(54, '270624', 'fATCco2KLy', '92266137', NULL, 1, 'T-Money', 'approved', 45, '2021-02-26 09:22:11', '2021-02-26 09:22:11'),
(55, '270627', 'fpQfmGaJl2', '92266137', NULL, 1, 'T-Money', 'approved', 46, '2021-02-26 09:24:51', '2021-02-26 09:24:51'),
(56, '270637', 'DThZoJ5dLJ', '97205337', NULL, 1, 'FLOOZ', 'en cours', 47, '2021-02-26 09:50:06', '2021-02-26 09:50:06'),
(57, '271089', 'A2QIRyeQXW', '92266137', NULL, 1, 'T-Money', 'approved', 48, '2021-02-27 00:13:17', '2021-02-27 00:13:17'),
(58, NULL, 'fARqXGg6N4', '92266137', NULL, 1, '', 'approved', 49, '2021-02-27 06:27:57', '2021-02-27 06:27:57'),
(59, 'YvS7LQfNe2', 'YvS7LQfNe2', '92266137', NULL, 1, 'TOGOCEL', 'initialisé', 50, '2021-02-27 06:49:13', '2021-02-27 06:49:13'),
(60, 'Vo9CctFt48', 'Vo9CctFt48', '92266137', NULL, 1, 'TOGOCEL', 'initialisé', 51, '2021-02-27 06:52:18', '2021-02-27 06:52:18'),
(61, 't0cSsutxcM', 't0cSsutxcM', '92266137', NULL, 1, 'TOGOCEL', 'initialisé', 51, '2021-02-27 06:53:43', '2021-02-27 06:53:43'),
(62, '271131', 'kanOnNxh1F', '92266137', '254786147', 1, 'T-Money', 'approved', 52, '2021-02-27 06:56:01', '2021-02-27 06:56:01'),
(63, 'UnWJ5XaZCv', 'UnWJ5XaZCv', '92266137', NULL, 1, 'TOGOCEL', 'initialisé', 53, '2021-02-27 07:10:32', '2021-02-27 07:10:32'),
(64, '271133', 'a8aiwZKNJt', '92266137', '254870328', 1, 'T-Money', 'approved', 53, '2021-02-27 07:11:01', '2021-02-27 07:11:01'),
(65, 'htaOHtBUaQ', 'htaOHtBUaQ', '97205337', NULL, 1, 'TOGOCEL', 'initialisé', 54, '2021-02-28 00:01:06', '2021-02-28 00:01:06'),
(66, '271758', 'Os20QBptyy', '92266137', '265211874', 1, 'T-Money', 'approved', 54, '2021-02-28 00:01:27', '2021-02-28 00:01:27');

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('kJleKuvS9EDMdu77Sp6htC5WAUXt92BWiGCBnODF', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', 'YToxMDp7czo2OiJfdG9rZW4iO3M6NDA6IlFQNkxzbEJ1WUFCRGlHYmdWZkVWSlJDUWpsRGQxT3hReU9pcTdDclkiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM3OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvcGF5ZW1lbnRTdWNjZXNzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJmb3JtSWQiO2k6NTtzOjY6ImFtb3VudCI7aToxO3M6MTE6ImRlc2NyaXB0aW9uIjtzOjQzOiJGcmFpcyBkZSBmb3JtYXRpb24gZGU6IEZvcm1hdGlvbiBlbiBsYXJhdmVsIjtzOjY6Imluc19JZCI7aTo1NDtzOjU6InBob25lIjtzOjg6IjkyMjY2MTM3IjtzOjEwOiJpZGVudGlmaWVyIjtzOjEwOiJPczIwUUJwdHl5IjtzOjU6InBheUlkIjtpOjY2O30=', 1614470673),
('vgIIG3IXDdBL37vDCiSG5cFiXMALR7lliVoI0zey', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibzYwbmNKelZMdWFDVE5vcVlTVWVXTHZxTkdCZjd0TVFtZ1MwaWh1aiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9MaXN0ZURlc1RyYW5zYXRpb25zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1614525495);

-- --------------------------------------------------------

--
-- Structure de la table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'null',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `formateurs`
--
ALTER TABLE `formateurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `payements`
--
ALTER TABLE `payements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payements_tx_reference_unique` (`tx_reference`),
  ADD UNIQUE KEY `payements_payment_reference_unique` (`payment_reference`),
  ADD UNIQUE KEY `payements_identifier_unique` (`identifier`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Index pour la table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_email_unique` (`email`),
  ADD KEY `team_invitations_team_id_foreign` (`team_id`);

--
-- Index pour la table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

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
-- AUTO_INCREMENT pour la table `actualites`
--
ALTER TABLE `actualites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formateurs`
--
ALTER TABLE `formateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `payements`
--
ALTER TABLE `payements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
