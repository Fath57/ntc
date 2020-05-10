-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 14 déc. 2019 à 11:50
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ntc`
--

-- --------------------------------------------------------

--
-- Structure de la table `audios`
--

CREATE TABLE `audios` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `audios`
--

INSERT INTO `audios` (`id`, `title`, `path`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Inondation', '[{\"download_link\":\"audios\\/December2019\\/rc9UBcXwGF0sUOyojGcZ.mp4\",\"original_name\":\"Ma\\u00eetre Gims - Pense \\u00e0 moi \\u2551 Lyrics & English Translation.mp4\"}]', 1, '2019-10-17 11:20:00', '2019-12-03 20:42:02'),
(2, 'Secheresse', 'audio-1571314116-08 - Akon - Against The Grain Ft. Ray Lavender.mp3', 2, '2019-10-17 11:22:00', '2019-12-02 14:56:54'),
(6, 'Configuration des serveurs', '[{\"download_link\":\"audios\\/December2019\\/L99xUMeHPZsm3AJMvyIx.mp4\",\"original_name\":\"Maitre Gims - Loin Lyrics.mp4\"}]', 1, '2019-12-02 14:47:30', '2019-12-02 14:47:30');

-- --------------------------------------------------------

--
-- Structure de la table `audio_categories`
--

CREATE TABLE `audio_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `audio_categories`
--

INSERT INTO `audio_categories` (`id`, `code`, `title`, `created_at`, `updated_at`) VALUES
(1, 'journal', 'Journal en langue local', '2019-10-10 02:22:00', '2019-10-17 10:17:44'),
(2, 'problem', 'Problème en langue Local', '2019-10-17 10:18:06', '2019-10-17 10:18:06');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Actualité', 'actualite-1', '2019-10-10 00:42:04', '2019-10-17 11:25:00'),
(2, NULL, 1, 'Post', 'post-2', '2019-10-10 00:42:05', '2019-10-17 11:24:19');

-- --------------------------------------------------------

--
-- Structure de la table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contents` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `courses`
--

INSERT INTO `courses` (`id`, `title`, `contents`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pariatur Qui dolori', '<p>Maiores fugiat provi.</p>', 'published', '2019-10-17 15:47:00', '2019-10-17 15:47:48');

-- --------------------------------------------------------

--
-- Structure de la table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(56, 7, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 7, 'slug', 'hidden', 'Slug', 0, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}', 2),
(58, 7, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 3),
(59, 7, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 4),
(60, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(61, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(62, 8, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(63, 8, 'firstname', 'text', 'Prénom (s)', 0, 1, 1, 1, 1, 1, '{}', 2),
(64, 8, 'lastname', 'text', 'Nom', 0, 1, 1, 1, 1, 1, '{}', 3),
(65, 8, 'facebook', 'text', 'Facebook', 0, 1, 1, 1, 1, 1, '{}', 4),
(66, 8, 'twitter', 'text', 'Twitter', 0, 1, 1, 1, 1, 1, '{}', 5),
(67, 8, 'linkedin', 'text', 'Linkedin', 0, 1, 1, 1, 1, 1, '{}', 6),
(68, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(69, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(70, 10, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(71, 10, 'code', 'text', 'Code', 0, 1, 1, 1, 1, 1, '{}', 2),
(73, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(74, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(76, 10, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 3),
(78, 11, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(79, 11, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(80, 11, 'path', 'file', 'Fichier audio', 0, 1, 1, 1, 1, 1, '{}', 3),
(82, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(83, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(84, 11, 'audio_belongsto_audio_category_relationship', 'relationship', 'Catégorie', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\AudioCategory\",\"table\":\"audio_categories\",\"type\":\"belongsTo\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"audio_categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 7),
(85, 12, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(86, 12, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(87, 12, 'contents', 'rich_text_box', 'Contents', 0, 1, 1, 1, 1, 1, '{}', 3),
(88, 12, 'status', 'select_dropdown', 'Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"unpublished\",\"options\":{\"published\":\"Publi\\u00e9\",\"unpublished\":\"Masqu\\u00e9\"}}', 4),
(89, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(90, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(91, 13, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(92, 13, 'title', 'text', 'Titre', 0, 1, 1, 1, 1, 1, '{}', 2),
(93, 13, 'description', 'text_area', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(94, 13, 'location', 'text', 'Lieu', 0, 1, 1, 1, 1, 1, '{}', 4),
(95, 13, 'date', 'timestamp', 'Date', 0, 1, 1, 1, 1, 1, '{}', 5),
(96, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(97, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(98, 7, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":null},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(99, 8, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":null,\"height\":\"335\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"cropped\",\"crop\":{\"position\":\"top\",\"width\":\"300\",\"height\":\"250\"}}]}', 9),
(100, 11, 'category_id', 'text', 'Category Id', 0, 1, 1, 1, 1, 1, '{}', 4),
(101, 8, 'bio', 'text', 'Bio', 0, 1, 1, 1, 1, 1, '{}', 10),
(102, 14, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(103, 14, 'slug', 'hidden', 'Slug', 0, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 2),
(104, 14, 'body', 'rich_text_box', 'Contenu', 0, 1, 1, 1, 1, 1, '{}', 3),
(105, 14, 'author', 'text', 'Auteur', 0, 1, 1, 1, 1, 1, '{}', 4),
(106, 14, 'image', 'multiple_images', 'Images', 0, 1, 1, 1, 1, 1, '{}', 5),
(107, 14, 'title', 'text', 'Titre', 0, 1, 1, 1, 1, 1, '{}', 6),
(108, 14, 'docs', 'file', 'Document', 0, 1, 1, 1, 1, 1, '{}', 7),
(109, 14, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(110, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(111, 15, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(112, 15, 'slug', 'hidden', 'Slug', 0, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 2),
(113, 15, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 3),
(114, 15, 'body', 'rich_text_box', 'Body', 0, 1, 1, 1, 1, 1, '{}', 4),
(115, 15, 'type', 'select_dropdown', 'Type', 0, 1, 1, 1, 1, 1, '{\"default\":\"Program on community radio\",\"options\":{\"program_on_community_radio\":\"Program on community radio\",\"town_hall\":\"Town Hall\",\"door_to_door\":\"Door to Door\"}}', 5),
(116, 15, 'images', 'multiple_images', 'Images', 0, 1, 1, 1, 1, 1, '{}', 6),
(117, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(118, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8);

-- --------------------------------------------------------

--
-- Structure de la table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2019-10-10 00:41:51', '2019-10-10 00:41:51'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2019-10-10 00:41:51', '2019-10-10 00:41:51'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2019-10-10 00:41:51', '2019-10-10 00:41:51'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2019-10-10 00:42:03', '2019-10-10 00:42:03'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2019-10-10 00:42:06', '2019-10-10 00:42:06'),
(7, 'problems', 'problems', 'Problem', 'Problems', 'voyager-anchor', 'App\\Problem', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-10-10 01:39:24', '2019-10-19 07:48:51'),
(8, 'members', 'members', 'Member', 'Members', 'voyager-people', 'App\\Member', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-10-10 01:42:07', '2019-12-02 17:24:41'),
(10, 'audio_categories', 'audio-categories', 'Audio Category', 'Audio Categories', 'voyager-book', 'App\\AudioCategory', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-10-10 01:54:47', '2019-10-10 02:03:09'),
(11, 'audios', 'audios', 'Audio', 'Audio', 'voyager-music', 'App\\Audio', NULL, 'App\\Http\\Controllers\\Voyager\\VoyagerAudioController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-10-17 09:03:02', '2019-12-02 14:46:56'),
(12, 'courses', 'courses', 'Course', 'Courses', NULL, 'App\\Models\\Course', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-10-17 15:41:06', '2019-10-17 15:41:06'),
(13, 'events', 'events', 'Event', 'Events', 'voyager-calendar', 'App\\Models\\Event', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-10-17 16:13:24', '2019-10-17 16:13:24'),
(14, 'stories', 'stories', 'Story', 'Stories', 'voyager-lightbulb', 'App\\Models\\Story', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-12-03 16:51:43', '2019-12-03 17:01:24'),
(15, 'programs', 'programs', 'Program', 'Programs', 'voyager-news', 'App\\Models\\Program', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-12-03 19:25:01', '2019-12-03 19:31:12');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `location`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Action pour les enfants dans le besoin', 'lGlobally incubate standards compliant the deliverables whereas web-enabled applications. and-mortar catalysts for changbefore vertical t market-driven best practices.', 'Akpakpa', '2019-12-02 07:05:00', '2019-12-02 14:05:54', '2019-12-02 14:05:54'),
(2, 'libération', 'Globally incubate standards compliant the deliverables whereas web-enabled applications. and-mortar catalysts for changbefore vertical t market-driven best practices.', 'Come', '2019-12-25 15:06:00', '2019-12-02 14:06:44', '2019-12-02 14:06:44');

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`id`, `firstname`, `lastname`, `facebook`, `twitter`, `linkedin`, `created_at`, `updated_at`, `image`, `bio`) VALUES
(1, 'Claude', 'JEAN', '#', '#', '#', '2019-12-02 13:50:00', '2019-12-02 17:41:04', 'members/December2019/jKdOzR7ZFpxig3uWM8P9.jpeg', NULL),
(2, 'Francklin', 'LE RENARD', '#', '#', '#', '2019-12-02 13:51:00', '2019-12-02 17:41:16', 'members/December2019/yh3DyLkiY7pwn6XGjJ9e.jpg', NULL),
(3, 'Toni', 'ANTOINE', '#', '#', '#', '2019-12-02 13:52:00', '2019-12-02 17:40:40', 'members/December2019/BGEIiWqWUu85uSyEj75W.webp', NULL),
(4, 'Paula', 'ANAGONOU', '#', '#', '#', '2019-12-02 13:52:00', '2019-12-02 17:40:53', 'members/December2019/VXeoFsjHsyqVEdZfsmq5.jpg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-10-10 00:41:53', '2019-10-10 00:41:53');

-- --------------------------------------------------------

--
-- Structure de la table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2019-10-10 00:41:53', '2019-10-10 00:41:53', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2019-10-10 00:41:53', '2019-10-10 00:41:53', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2019-10-10 00:41:53', '2019-10-10 00:41:53', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2019-10-10 00:41:53', '2019-10-10 00:41:53', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2019-10-10 00:41:53', '2019-10-10 00:41:53', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2019-10-10 00:41:53', '2019-10-10 00:41:53', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2019-10-10 00:41:53', '2019-10-10 00:41:53', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2019-10-10 00:41:53', '2019-10-10 00:41:53', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2019-10-10 00:41:53', '2019-10-10 00:41:53', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2019-10-10 00:41:53', '2019-10-10 00:41:53', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 8, '2019-10-10 00:42:04', '2019-10-10 00:42:04', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 6, '2019-10-10 00:42:07', '2019-10-10 00:42:07', 'voyager.posts.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 13, '2019-10-10 00:42:12', '2019-10-10 00:42:12', 'voyager.hooks', NULL),
(15, 1, 'Problems', '', '_self', 'voyager-anchor', NULL, NULL, 15, '2019-10-10 01:39:24', '2019-10-10 01:39:24', 'voyager.problems.index', NULL),
(16, 1, 'Members', '', '_self', 'voyager-people', '#000000', NULL, 16, '2019-10-10 01:42:07', '2019-10-17 08:54:13', 'voyager.members.index', 'null'),
(18, 1, 'Audio Categories', '', '_self', 'voyager-book', NULL, NULL, 18, '2019-10-10 01:54:48', '2019-10-10 01:54:48', 'voyager.audio-categories.index', NULL),
(19, 1, 'Audio', '', '_self', 'voyager-music', '#000000', NULL, 19, '2019-10-17 09:03:02', '2019-10-17 09:42:43', 'voyager.audios.index', 'null'),
(20, 1, 'Courses', '', '_self', 'voyager-window-list', '#000000', NULL, 20, '2019-10-17 15:41:08', '2019-10-17 15:45:27', 'voyager.courses.index', 'null'),
(21, 1, 'Events', '', '_self', 'voyager-calendar', NULL, NULL, 21, '2019-10-17 16:13:24', '2019-10-17 16:13:24', 'voyager.events.index', NULL),
(22, 1, 'Stories', '', '_self', 'voyager-lightbulb', '#000000', NULL, 22, '2019-12-03 16:51:45', '2019-12-03 17:01:44', 'voyager.stories.index', 'null'),
(23, 1, 'Programs', '', '_self', 'voyager-news', '#000000', NULL, 23, '2019-12-03 19:25:01', '2019-12-03 19:28:03', 'voyager.programs.index', 'null');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2016_01_01_000000_create_pages_table', 2),
(24, '2016_01_01_000000_create_posts_table', 2),
(25, '2016_02_15_204651_create_categories_table', 2),
(26, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2019-10-10 00:42:08', '2019-10-10 00:42:08');

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
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-10-10 00:41:54', '2019-10-10 00:41:54'),
(2, 'browse_bread', NULL, '2019-10-10 00:41:54', '2019-10-10 00:41:54'),
(3, 'browse_database', NULL, '2019-10-10 00:41:54', '2019-10-10 00:41:54'),
(4, 'browse_media', NULL, '2019-10-10 00:41:54', '2019-10-10 00:41:54'),
(5, 'browse_compass', NULL, '2019-10-10 00:41:54', '2019-10-10 00:41:54'),
(6, 'browse_menus', 'menus', '2019-10-10 00:41:54', '2019-10-10 00:41:54'),
(7, 'read_menus', 'menus', '2019-10-10 00:41:54', '2019-10-10 00:41:54'),
(8, 'edit_menus', 'menus', '2019-10-10 00:41:54', '2019-10-10 00:41:54'),
(9, 'add_menus', 'menus', '2019-10-10 00:41:54', '2019-10-10 00:41:54'),
(10, 'delete_menus', 'menus', '2019-10-10 00:41:55', '2019-10-10 00:41:55'),
(11, 'browse_roles', 'roles', '2019-10-10 00:41:55', '2019-10-10 00:41:55'),
(12, 'read_roles', 'roles', '2019-10-10 00:41:55', '2019-10-10 00:41:55'),
(13, 'edit_roles', 'roles', '2019-10-10 00:41:55', '2019-10-10 00:41:55'),
(14, 'add_roles', 'roles', '2019-10-10 00:41:55', '2019-10-10 00:41:55'),
(15, 'delete_roles', 'roles', '2019-10-10 00:41:55', '2019-10-10 00:41:55'),
(16, 'browse_users', 'users', '2019-10-10 00:41:55', '2019-10-10 00:41:55'),
(17, 'read_users', 'users', '2019-10-10 00:41:55', '2019-10-10 00:41:55'),
(18, 'edit_users', 'users', '2019-10-10 00:41:55', '2019-10-10 00:41:55'),
(19, 'add_users', 'users', '2019-10-10 00:41:55', '2019-10-10 00:41:55'),
(20, 'delete_users', 'users', '2019-10-10 00:41:55', '2019-10-10 00:41:55'),
(21, 'browse_settings', 'settings', '2019-10-10 00:41:55', '2019-10-10 00:41:55'),
(22, 'read_settings', 'settings', '2019-10-10 00:41:56', '2019-10-10 00:41:56'),
(23, 'edit_settings', 'settings', '2019-10-10 00:41:56', '2019-10-10 00:41:56'),
(24, 'add_settings', 'settings', '2019-10-10 00:41:56', '2019-10-10 00:41:56'),
(25, 'delete_settings', 'settings', '2019-10-10 00:41:56', '2019-10-10 00:41:56'),
(26, 'browse_categories', 'categories', '2019-10-10 00:42:04', '2019-10-10 00:42:04'),
(27, 'read_categories', 'categories', '2019-10-10 00:42:04', '2019-10-10 00:42:04'),
(28, 'edit_categories', 'categories', '2019-10-10 00:42:04', '2019-10-10 00:42:04'),
(29, 'add_categories', 'categories', '2019-10-10 00:42:04', '2019-10-10 00:42:04'),
(30, 'delete_categories', 'categories', '2019-10-10 00:42:04', '2019-10-10 00:42:04'),
(31, 'browse_posts', 'posts', '2019-10-10 00:42:07', '2019-10-10 00:42:07'),
(32, 'read_posts', 'posts', '2019-10-10 00:42:07', '2019-10-10 00:42:07'),
(33, 'edit_posts', 'posts', '2019-10-10 00:42:07', '2019-10-10 00:42:07'),
(34, 'add_posts', 'posts', '2019-10-10 00:42:07', '2019-10-10 00:42:07'),
(35, 'delete_posts', 'posts', '2019-10-10 00:42:07', '2019-10-10 00:42:07'),
(41, 'browse_hooks', NULL, '2019-10-10 00:42:12', '2019-10-10 00:42:12'),
(42, 'browse_problems', 'problems', '2019-10-10 01:39:24', '2019-10-10 01:39:24'),
(43, 'read_problems', 'problems', '2019-10-10 01:39:24', '2019-10-10 01:39:24'),
(44, 'edit_problems', 'problems', '2019-10-10 01:39:24', '2019-10-10 01:39:24'),
(45, 'add_problems', 'problems', '2019-10-10 01:39:24', '2019-10-10 01:39:24'),
(46, 'delete_problems', 'problems', '2019-10-10 01:39:24', '2019-10-10 01:39:24'),
(47, 'browse_members', 'members', '2019-10-10 01:42:07', '2019-10-10 01:42:07'),
(48, 'read_members', 'members', '2019-10-10 01:42:07', '2019-10-10 01:42:07'),
(49, 'edit_members', 'members', '2019-10-10 01:42:07', '2019-10-10 01:42:07'),
(50, 'add_members', 'members', '2019-10-10 01:42:07', '2019-10-10 01:42:07'),
(51, 'delete_members', 'members', '2019-10-10 01:42:07', '2019-10-10 01:42:07'),
(57, 'browse_audio_categories', 'audio_categories', '2019-10-10 01:54:47', '2019-10-10 01:54:47'),
(58, 'read_audio_categories', 'audio_categories', '2019-10-10 01:54:47', '2019-10-10 01:54:47'),
(59, 'edit_audio_categories', 'audio_categories', '2019-10-10 01:54:47', '2019-10-10 01:54:47'),
(60, 'add_audio_categories', 'audio_categories', '2019-10-10 01:54:47', '2019-10-10 01:54:47'),
(61, 'delete_audio_categories', 'audio_categories', '2019-10-10 01:54:48', '2019-10-10 01:54:48'),
(62, 'browse_audios', 'audios', '2019-10-17 09:03:02', '2019-10-17 09:03:02'),
(63, 'read_audios', 'audios', '2019-10-17 09:03:02', '2019-10-17 09:03:02'),
(64, 'edit_audios', 'audios', '2019-10-17 09:03:02', '2019-10-17 09:03:02'),
(65, 'add_audios', 'audios', '2019-10-17 09:03:02', '2019-10-17 09:03:02'),
(66, 'delete_audios', 'audios', '2019-10-17 09:03:02', '2019-10-17 09:03:02'),
(67, 'browse_courses', 'courses', '2019-10-17 15:41:07', '2019-10-17 15:41:07'),
(68, 'read_courses', 'courses', '2019-10-17 15:41:07', '2019-10-17 15:41:07'),
(69, 'edit_courses', 'courses', '2019-10-17 15:41:07', '2019-10-17 15:41:07'),
(70, 'add_courses', 'courses', '2019-10-17 15:41:07', '2019-10-17 15:41:07'),
(71, 'delete_courses', 'courses', '2019-10-17 15:41:07', '2019-10-17 15:41:07'),
(72, 'browse_events', 'events', '2019-10-17 16:13:24', '2019-10-17 16:13:24'),
(73, 'read_events', 'events', '2019-10-17 16:13:24', '2019-10-17 16:13:24'),
(74, 'edit_events', 'events', '2019-10-17 16:13:24', '2019-10-17 16:13:24'),
(75, 'add_events', 'events', '2019-10-17 16:13:24', '2019-10-17 16:13:24'),
(76, 'delete_events', 'events', '2019-10-17 16:13:24', '2019-10-17 16:13:24'),
(77, 'browse_stories', 'stories', '2019-12-03 16:51:45', '2019-12-03 16:51:45'),
(78, 'read_stories', 'stories', '2019-12-03 16:51:45', '2019-12-03 16:51:45'),
(79, 'edit_stories', 'stories', '2019-12-03 16:51:45', '2019-12-03 16:51:45'),
(80, 'add_stories', 'stories', '2019-12-03 16:51:45', '2019-12-03 16:51:45'),
(81, 'delete_stories', 'stories', '2019-12-03 16:51:45', '2019-12-03 16:51:45'),
(82, 'browse_programs', 'programs', '2019-12-03 19:25:01', '2019-12-03 19:25:01'),
(83, 'read_programs', 'programs', '2019-12-03 19:25:01', '2019-12-03 19:25:01'),
(84, 'edit_programs', 'programs', '2019-12-03 19:25:01', '2019-12-03 19:25:01'),
(85, 'add_programs', 'programs', '2019-12-03 19:25:01', '2019-12-03 19:25:01'),
(86, 'delete_programs', 'programs', '2019-12-03 19:25:01', '2019-12-03 19:25:01');

-- --------------------------------------------------------

--
-- Structure de la table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(67, 3),
(68, 1),
(68, 3),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-10-10 00:42:07', '2019-10-10 00:42:07'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-10-10 00:42:07', '2019-10-10 00:42:07'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-10-10 00:42:07', '2019-10-10 00:42:07'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-10-10 00:42:07', '2019-10-10 00:42:07');

-- --------------------------------------------------------

--
-- Structure de la table `problems`
--

CREATE TABLE `problems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `problems`
--

INSERT INTO `problems` (`id`, `slug`, `title`, `description`, `created_at`, `updated_at`, `image`) VALUES
(1, 'sed-voluptates-dolor', 'Sed voluptates dolor', '<p>Quae voluptatem et e.</p>', '2019-10-19 07:49:29', '2019-10-19 07:49:29', 'problems/October2019/sJA5avVWT9LWrC9WvBd9.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `problems_images`
--

CREATE TABLE `problems_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `problem_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `programs`
--

CREATE TABLE `programs` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `programs`
--

INSERT INTO `programs` (`id`, `slug`, `title`, `body`, `type`, `images`, `created_at`, `updated_at`) VALUES
(1, 'un-titre', 'Un titre', '<p>Un texte explicatif ici</p>', 'program_on_community_radio', '[\"programs\\/December2019\\/1EJ2c2qAYO9QV7pHvfjN.png\",\"programs\\/December2019\\/Uer5gulOiSyTSBR3nOup.jpg\"]', '2019-12-03 20:37:51', '2019-12-03 20:37:51'),
(2, 'non-et-sed-eius-qui', 'Non et sed eius qui', '<p>Lorem minus velit, i.</p>', 'door_to_door', '[\"programs\\/December2019\\/EKLSfcCeiUC7u88exOtW.jpg\",\"programs\\/December2019\\/vc9LmI52cjSe8qYf4Vch.png\"]', '2019-12-03 22:15:19', '2019-12-03 22:15:19'),
(3, 'do-nostrum-duis-at-e', 'Do nostrum duis at e', '<p>Molestias eos, aut e.</p>', 'town_hall', '[\"programs\\/December2019\\/vBAWe77HRPHJeJ6w3iXu.jpg\"]', '2019-12-03 22:16:04', '2019-12-03 22:16:04');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-10-10 00:41:53', '2019-10-10 00:41:53'),
(2, 'user', 'Normal User', '2019-10-10 00:41:53', '2019-10-10 00:41:53'),
(3, 'membre', 'Membre', '2019-11-18 23:12:55', '2019-11-18 23:12:55');

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `stories`
--

CREATE TABLE `stories` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `docs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `stories`
--

INSERT INTO `stories` (`id`, `slug`, `body`, `author`, `image`, `title`, `docs`, `created_at`, `updated_at`) VALUES
(1, 'regression', '<p>contenue de la success story.</p>', 'Azeer Momo', '[\"stories\\/December2019\\/VUCbJm2dKnLSZl5lhMWV.jpg\",\"stories\\/December2019\\/EevM3WUp4L1OXRpPFWPM.jpg\"]', 'Regression', '[{\"download_link\":\"stories\\/December2019\\/1ZV2nTU5BTzaBisn82K7.pdf\",\"original_name\":\"cours.pdf\"}]', '2019-12-03 16:53:00', '2019-12-03 17:02:43');

-- --------------------------------------------------------

--
-- Structure de la table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2019-10-10 00:42:08', '2019-10-10 00:42:08'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2019-10-10 00:42:08', '2019-10-10 00:42:08'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2019-10-10 00:42:09', '2019-10-10 00:42:09'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2019-10-10 00:42:09', '2019-10-10 00:42:09'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2019-10-10 00:42:09', '2019-10-10 00:42:09'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2019-10-10 00:42:09', '2019-10-10 00:42:09'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2019-10-10 00:42:09', '2019-10-10 00:42:09'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2019-10-10 00:42:09', '2019-10-10 00:42:09'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2019-10-10 00:42:09', '2019-10-10 00:42:09'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2019-10-10 00:42:09', '2019-10-10 00:42:09'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2019-10-10 00:42:09', '2019-10-10 00:42:09'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2019-10-10 00:42:09', '2019-10-10 00:42:09'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2019-10-10 00:42:09', '2019-10-10 00:42:09'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2019-10-10 00:42:10', '2019-10-10 00:42:10'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2019-10-10 00:42:10', '2019-10-10 00:42:10'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2019-10-10 00:42:10', '2019-10-10 00:42:10'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2019-10-10 00:42:10', '2019-10-10 00:42:10'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2019-10-10 00:42:10', '2019-10-10 00:42:10'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2019-10-10 00:42:10', '2019-10-10 00:42:10'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2019-10-10 00:42:11', '2019-10-10 00:42:11'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2019-10-10 00:42:11', '2019-10-10 00:42:11'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2019-10-10 00:42:11', '2019-10-10 00:42:11'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2019-10-10 00:42:11', '2019-10-10 00:42:11'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2019-10-10 00:42:11', '2019-10-10 00:42:11'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2019-10-10 00:42:11', '2019-10-10 00:42:11'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2019-10-10 00:42:11', '2019-10-10 00:42:11'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2019-10-10 00:42:11', '2019-10-10 00:42:11'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2019-10-10 00:42:11', '2019-10-10 00:42:11'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2019-10-10 00:42:11', '2019-10-10 00:42:11'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2019-10-10 00:42:11', '2019-10-10 00:42:11');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `place_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`, `phone`, `birthday`, `place_of_birth`, `occupation`, `address1`, `address2`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$/WNwIufFQ3j98zf/MDCM3.i2Nsiyw1aGtIme9JtEoxAulkk08apBi', 'C14jMoz4aHQCBT8vKfRtrtxOsaOlvCc5NoX4NMCfb2LmTHn4gc3mt2Wb6lDM', '{\"locale\":\"fr\"}', '2019-10-10 00:42:06', '2019-10-10 00:50:45', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 3, 'Jean', 'jean@ntc.org', 'users/default.png', NULL, '$2y$10$4ToDWcMaPSMI/GgHjeoq6.s4nhZqMjqcV06VqPN4UXzkViDTiDbF.', NULL, '{\"locale\":\"fr\"}', '2019-11-18 23:23:47', '2019-12-14 09:42:38', '60239380', '2019-02-15', 'Cotonou', 'dev', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `audios`
--
ALTER TABLE `audios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `audios_audio_category_id_index` (`category_id`);

--
-- Index pour la table `audio_categories`
--
ALTER TABLE `audio_categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Index pour la table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Index pour la table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Index pour la table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Index pour la table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Index pour la table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `problems_images`
--
ALTER TABLE `problems_images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Index pour la table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Index pour la table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Index pour la table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `audios`
--
ALTER TABLE `audios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `audio_categories`
--
ALTER TABLE `audio_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT pour la table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `problems`
--
ALTER TABLE `problems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `problems_images`
--
ALTER TABLE `problems_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Contraintes pour la table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
