-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 13, 2023 at 09:02 PM
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
-- Database: `siopm-off2`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint UNSIGNED NOT NULL,
  `question_id` bigint UNSIGNED NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_question_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `content`, `next_question_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sim', 3, NULL, NULL),
(2, 2, 'Sim', 3, NULL, NULL),
(3, 1, 'nao', 4, NULL, NULL),
(4, 2, 'nao', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `batalhoes_supervisores`
--

CREATE TABLE `batalhoes_supervisores` (
  `user_id` int NOT NULL,
  `bpmm_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bpmms`
--

CREATE TABLE `bpmms` (
  `id` bigint UNSIGNED NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poligono` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bpmms`
--

INSERT INTO `bpmms` (`id`, `nome`, `id_user`, `created_at`, `updated_at`, `tipo`, `descricao`, `poligono`) VALUES
(19, '01°BPM/M', 1, '2023-08-11 05:26:52', '2023-08-11 05:26:52', '1', 'teste', 'WE'),
(20, '02°BPM/M', 1, '2023-08-11 05:27:02', '2023-08-11 05:27:02', '1', 'teste', '01°BPM/M'),
(21, '03°BPM/M', 1, '2023-08-11 05:27:14', '2023-08-11 05:27:14', '1', 'teste', '01°BPM/M'),
(22, '04°BPM/M', 1, '2023-08-11 05:27:26', '2023-08-11 05:27:26', '1', 'teste', '01°BPM/M'),
(23, '05°BPM/M', 1, '2023-08-11 05:27:40', '2023-08-11 05:27:40', '1', 'teste', '01°BPM/M'),
(24, '06°BPM/M', 1, '2023-08-11 05:27:48', '2023-08-11 05:27:48', '1', 'teste', '01°BPM/M'),
(25, '07°BPM/M', 1, '2023-08-11 05:27:58', '2023-08-11 05:27:58', '1', 'teste', '01°BPM/M'),
(26, '08°BPM/M', 1, '2023-08-11 05:28:08', '2023-08-11 05:28:08', '1', 'teste', '01°BPM/M'),
(27, '09°BPM/M', 1, '2023-08-11 05:28:19', '2023-08-11 05:28:19', '1', 'teste', '01°BPM/M'),
(28, '10°BPM/M', 1, '2023-08-11 05:28:37', '2023-08-11 05:28:37', '1', 'teste', '01°BPM/M'),
(29, '11°BPM/M', 1, '2023-08-11 05:28:46', '2023-08-11 05:28:46', '1', 'teste', '01°BPM/M'),
(30, '12°BPM/M', 1, '2023-08-11 05:29:00', '2023-08-11 05:29:00', '1', 'teste', '12°BPM/M'),
(31, '13°BPM/M', 1, '2023-08-11 05:29:55', '2023-08-11 05:29:55', '1', 'teste', '12°BPM/M'),
(32, '14°BPM/M', 1, '2023-08-11 05:30:04', '2023-08-11 05:30:04', '1', 'teste', '12°BPM/M'),
(33, '15°BPM/M', 1, '2023-08-11 05:30:22', '2023-08-11 05:30:22', '1', 'teste', '12°BPM/M'),
(34, '16°BPM/M', 1, '2023-08-11 05:30:30', '2023-08-11 05:30:30', '1', 'teste', '12°BPM/M'),
(35, '17°BPM/M', 1, '2023-08-11 05:47:39', '2023-08-11 05:47:39', '1', 'teste', '17°BPM/M'),
(36, '18°BPM/M', 1, '2023-08-11 05:47:46', '2023-08-11 05:47:46', '1', 'teste', '17°BPM/M'),
(37, '19°BPM/M', 1, '2023-08-11 05:47:57', '2023-08-11 05:47:57', '1', 'teste', '17°BPM/M'),
(38, '20°BPM/M', 1, '2023-08-11 05:48:06', '2023-08-11 05:48:06', '1', 'teste', '17°BPM/M'),
(39, '21°BPM/M', 1, '2023-08-11 05:48:15', '2023-08-11 05:48:15', '1', 'teste', '17°BPM/M'),
(40, '22°BPM/M', 1, '2023-08-11 05:48:25', '2023-08-11 05:48:25', '1', 'teste', '17°BPM/M'),
(41, '23°BPM/M', 1, '2023-08-11 05:48:39', '2023-08-11 05:48:39', '1', 'teste', '17°BPM/M'),
(42, '24°BPM/M', 1, '2023-08-11 05:48:51', '2023-08-11 05:48:51', '1', 'teste', '17°BPM/M'),
(43, '25°BPM/M', 1, '2023-08-11 05:49:02', '2023-08-11 05:49:02', '1', 'teste', '17°BPM/M'),
(44, '26°BPM/M', 1, '2023-08-11 05:49:14', '2023-08-11 05:49:14', '1', '17°BPM/M', '17°BPM/M'),
(45, '27°BPM/M', 1, '2023-08-11 05:49:27', '2023-08-11 05:49:27', '1', 'teste', '17°BPM/M'),
(46, '28°BPM/M', 1, '2023-08-11 05:49:37', '2023-08-11 05:49:37', '1', 'V', '17°BPM/M'),
(47, '29°BPM/M', 1, '2023-08-11 05:49:47', '2023-08-11 05:49:47', '1', '17°BPM/M', '17°BPM/M'),
(48, '30°BPM/M', 1, '2023-08-11 05:49:58', '2023-08-11 05:49:58', '1', 'teste', '17°BPM/M'),
(49, '31°BPM/M', 1, '2023-08-11 05:50:07', '2023-08-11 05:50:07', '1', '17°BPM/M', '17°BPM/M'),
(50, '32°BPM/M', 1, '2023-08-11 05:50:18', '2023-08-11 05:50:18', '1', 'V', '17°BPM/M'),
(51, '33°BPM/M', 1, '2023-08-11 05:50:26', '2023-08-11 05:50:26', '1', 'teste', '17°BPM/M'),
(52, '34°BPM/M', 1, '2023-08-11 05:50:48', '2023-08-11 05:50:48', '1', '17°BPM/M', '17°BPM/M'),
(53, '35°BPM/M', 1, '2023-08-11 05:51:00', '2023-08-11 05:51:00', '1', '17°BPM/M', '17°BPM/M'),
(54, '36°BPM/M', 1, '2023-08-11 05:51:13', '2023-08-11 05:51:13', '1', '17°BPM/M', '17°BPM/M'),
(55, '37°BPM/M', 1, '2023-08-11 05:51:20', '2023-08-11 05:51:20', '1', '17°BPM/M', '17°BPM/M'),
(56, '38°BPM/M', 1, '2023-08-11 05:51:27', '2023-08-11 05:51:27', '1', '17°BPM/M', '17°BPM/M'),
(57, '39°BPM/M', 1, '2023-08-11 05:51:34', '2023-08-11 05:51:34', '1', '17°BPM/M', '17°BPM/M'),
(59, '41°BPM/M', 1, '2023-08-11 05:51:55', '2023-08-11 05:51:55', '1', '17°BPM/M', '17°BPM/M'),
(60, '43°BPM/M', 1, '2023-08-11 05:52:13', '2023-08-11 05:52:13', '1', '17°BPM/M', '17°BPM/M'),
(61, '46°BPM/M', 1, '2023-08-11 05:52:21', '2023-08-11 05:52:21', '1', '17°BPM/M', '17°BPM/M'),
(62, '48°BPM/M', 1, '2023-08-11 05:52:31', '2023-08-11 05:52:31', '1', '17°BPM/M', '17°BPM/M'),
(63, '49°BPM/M', 1, '2023-08-11 05:52:45', '2023-08-11 05:52:45', '1', '17°BPM/M', '17°BPM/M');

-- --------------------------------------------------------

--
-- Table structure for table `cadastro190s`
--

CREATE TABLE `cadastro190s` (
  `id` bigint UNSIGNED NOT NULL,
  `matricula` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `solicitante` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anonimo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidade` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endereco` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complemento` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referencia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bpmm` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `natureza_ocorrencia_id` bigint UNSIGNED NOT NULL,
  `naturezaocorrencia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `policialemperigo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `celular_numeroimei` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular_modelo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular_marca` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular_situacao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `veiculo_placa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `veiculo_marca` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `veiculo_modelo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `veiculo_cor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `veiculo_chassi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `veiculo_situacao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pessoas_rg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pessoas_nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pessoas_situacao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `situacao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `visualizacao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `observacao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `atendimento` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `log` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `vtr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cadastro190s`
--

INSERT INTO `cadastro190s` (`id`, `matricula`, `nome`, `horario`, `solicitante`, `anonimo`, `telefone`, `cidade`, `endereco`, `numero`, `complemento`, `bairro`, `referencia`, `bpmm`, `cia`, `natureza_ocorrencia_id`, `naturezaocorrencia`, `policialemperigo`, `celular_numeroimei`, `celular_modelo`, `celular_marca`, `celular_situacao`, `veiculo_placa`, `veiculo_marca`, `veiculo_modelo`, `veiculo_cor`, `veiculo_chassi`, `veiculo_situacao`, `pessoas_rg`, `pessoas_nome`, `pessoas_situacao`, `status`, `situacao`, `visualizacao`, `observacao`, `atendimento`, `log`, `user_id`, `created_at`, `updated_at`, `vtr`) VALUES
(46, '1234', 'CIVIL admin', '21:08:34', 'Anônimo', '0', '(49) 98436-6898', 'santo andre', 'rua ribeiro', '184', 'sss', '250401559', 'ssss', '10ºBPM/M', '5ªCIA CPA/M6', 691, 'A06 - FALTA DE HABILITAÇÃO', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '1', 'CGP E CFP CIENTE DAS PENDENCIAS, NADA DETERMINOU teste', '0', 'CIVIL 1234 admin(1) observou ocorrência;', 1, '2023-08-13 00:30:34', '2023-08-13 01:22:26', NULL),
(47, '1234', 'CIVIL admin', '21:08:20', 'Anônimo', '0', '(49) 98436-6898', 'sao paulo', 'rua betania', '184', 'sss', '245971552', 'sss', '10ºBPM/M', '1ªCIA CPA/M6', 691, 'A06 - FALTA DE HABILITAÇÃO', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0', NULL, '0', '', 1, '2023-08-13 00:44:20', '2023-08-13 00:44:20', NULL),
(48, '1234', 'CIVIL admin', '22:08:36', 'Anônimo', '0', '(49) 98436-6898', 'santo andre', 'rua betania', '184', 'sss', 'Parque Erasmo Assunção', 'sss', '10ºBPM/M', '3ªCIA CPA/M6', 691, 'A06 - FALTA DE HABILITAÇÃO', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0', NULL, '0', '', 1, '2023-08-13 01:05:36', '2023-08-13 01:05:36', NULL),
(49, '1234', 'CIVIL admin', '22:08:21', 'Anônimo', '0', '(11) 11111-1111', 'sao paulo', 'rua ribeiro de lima', '10', 'ca', 'Bom Retiro', 'sddd', '13ºBPM/M', '1ªCIA', 690, 'A05 - ATROPELAMENTO', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0', NULL, '0', '', 1, '2023-08-13 01:29:21', '2023-08-13 01:29:21', NULL),
(50, '1234', 'CIVIL admin', '00:08:03', 'Anônimo', '0', '(49) 98436-6898', 'santo andre', 'rua betania', '648', 'dsdssd', 'Parque das Nações', 'dssdsd', '10ºBPM/M', '1ªCIA CPA/M6', 690, 'A05 - ATROPELAMENTO', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0', NULL, '0', '', 1, '2023-08-13 03:07:03', '2023-08-13 03:07:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cadastrodespachadors`
--

CREATE TABLE `cadastrodespachadors` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cidades`
--

CREATE TABLE `cidades` (
  `id` bigint UNSIGNED NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cidades`
--

INSERT INTO `cidades` (`id`, `nome`, `id_user`, `created_at`, `updated_at`) VALUES
(2, 'São Bernardo dos Campos - SP', 1, '2023-06-30 17:14:43', '2023-06-30 17:14:43'),
(3, 'São Caetano - SP', 1, '2023-06-30 19:06:11', '2023-06-30 19:06:11'),
(4, 'São Paulo -SP', 1, '2023-07-01 04:51:04', '2023-07-01 04:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `despachadors`
--

CREATE TABLE `despachadors` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gerenciarcpas`
--

CREATE TABLE `gerenciarcpas` (
  `id` bigint UNSIGNED NOT NULL,
  `cpas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `battalion_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gerenciarcpas`
--

INSERT INTO `gerenciarcpas` (`id`, `cpas`, `battalion_id`, `user_id`, `created_at`, `updated_at`, `status`) VALUES
(5, 'CPA M1', 25, 1, '2023-08-12 05:33:25', '2023-08-12 05:33:25', '1'),
(6, 'CPA M1', 29, 1, '2023-08-12 05:33:25', '2023-08-12 05:33:25', '1'),
(7, 'CPA M1', 31, 1, '2023-08-12 05:33:25', '2023-08-12 05:33:25', '1'),
(8, 'CPA M2', 19, 1, '2023-08-12 05:34:09', '2023-08-12 05:34:09', '1'),
(9, 'CPA M2', 20, 1, '2023-08-12 05:34:09', '2023-08-12 05:34:09', '1'),
(10, 'CPA M2', 21, 1, '2023-08-12 05:34:09', '2023-08-12 05:34:09', '1'),
(11, 'CPA M2', 22, 1, '2023-08-12 05:34:09', '2023-08-12 05:34:09', '1');

-- --------------------------------------------------------

--
-- Table structure for table `logout_activities`
--

CREATE TABLE `logout_activities` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `logout_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logout_activities`
--

INSERT INTO `logout_activities` (`id`, `user_id`, `logout_at`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-07-31 23:43:56', '2023-07-31 23:43:56', '2023-07-31 23:43:56'),
(2, 1, '2023-08-01 04:06:09', '2023-08-01 04:06:09', '2023-08-01 04:06:09'),
(3, 1, '2023-08-01 04:09:38', '2023-08-01 04:09:38', '2023-08-01 04:09:38'),
(4, 1, '2023-08-02 23:38:57', '2023-08-02 23:38:57', '2023-08-02 23:38:57'),
(5, 1, '2023-08-02 23:39:39', '2023-08-02 23:39:39', '2023-08-02 23:39:39'),
(6, 1, '2023-08-03 06:19:39', '2023-08-03 06:19:39', '2023-08-03 06:19:39'),
(7, 1, '2023-08-03 06:20:02', '2023-08-03 06:20:02', '2023-08-03 06:20:02'),
(8, 1, '2023-08-03 06:21:06', '2023-08-03 06:21:06', '2023-08-03 06:21:06'),
(9, 1, '2023-08-03 06:27:49', '2023-08-03 06:27:49', '2023-08-03 06:27:49'),
(10, 2, '2023-08-03 06:41:28', '2023-08-03 06:41:28', '2023-08-03 06:41:28'),
(11, 1, '2023-08-11 05:10:21', '2023-08-11 05:10:21', '2023-08-11 05:10:21'),
(12, 1, '2023-08-13 01:23:03', '2023-08-13 01:23:03', '2023-08-13 01:23:03'),
(13, 2, '2023-08-13 01:24:22', '2023-08-13 01:24:22', '2023-08-13 01:24:22'),
(14, 1, '2023-08-13 01:29:48', '2023-08-13 01:29:48', '2023-08-13 01:29:48'),
(15, 2, '2023-08-13 01:59:42', '2023-08-13 01:59:42', '2023-08-13 01:59:42');

-- --------------------------------------------------------

--
-- Table structure for table `mapas`
--

CREATE TABLE `mapas` (
  `id` bigint UNSIGNED NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mapas`
--

INSERT INTO `mapas` (`id`, `nome`, `descricao`, `file_name`, `file_path`, `status`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'teste', 'teste', '64a4e562a84c9', 'C:\\Meus_sites\\HomeDev\\www\\siopm-off2\\public\\mapas/64a4e562a84c9.kml', '1', 1, '2023-07-05 06:37:06', '2023-07-05 06:37:06'),
(2, 'teste', 'teste', '64a4e857eb6fe', 'C:\\Meus_sites\\HomeDev\\www\\siopm-off2\\public\\mapas/64a4e857eb6fe.kml', '1', 1, '2023-07-05 06:49:44', '2023-07-05 06:49:44'),
(3, 'teste2', 'teste2', '64a4ea5def0dc', 'C:\\Meus_sites\\HomeDev\\www\\siopm-off2\\public\\mapas/64a4ea5def0dc.kml', '1', 1, '2023-07-05 06:58:22', '2023-07-05 06:58:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_30_040426_create_ocorrencias_table', 2),
(7, '2023_06_30_130205_create_cidades_table', 2),
(8, '2023_06_30_150025_create_bpmms_table', 3),
(9, '2023_06_30_211139_add_new_colluns_to_users_table', 4),
(10, '2023_07_02_010049_create_ramais_table', 5),
(11, '2023_07_02_194218_add_new_colluns2_to_users_table', 6),
(12, '2023_07_02_202220_add_new_colluns_to_bpmms_table', 7),
(13, '2023_07_04_035634_create_natureza_ocorrencias_table', 8),
(15, '2023_07_05_001232_create_mapas_table', 9),
(17, '2023_07_06_170626_add_new_colluns_to_users_table', 11),
(18, '2023_07_06_174420_add_new_colluns_to_ramais_table', 11),
(19, '2023_07_06_030945_create_cadastro190s_table', 12),
(21, '2023_07_08_221038_create_nat_ocor_perguntas_table', 13),
(22, '2023_07_11_021856_create_despachadors_table', 14),
(23, '2023_07_13_054339_create_nat_ocor_perguntas_respostas_table', 14),
(25, '2023_07_02_000748_create_usuarios_table', 15),
(26, '2023_07_19_031645_create_planilhacaratergerals_table', 15),
(27, '2023_07_19_032609_create_planilhacaraterpersonalizadas_table', 15),
(28, '2023_07_19_230818_add_new_colluns_to_cadastro190_table', 15),
(29, '2023_07_19_234241_create_cadastrodespachadors_table', 15),
(30, '2023_07_20_011152_create_logout_activities_table', 15),
(31, '2023_07_20_052011_create_publications_table', 16),
(32, '2023_07_21_001534_add_new_colluns_to_publications_table', 17),
(33, '2023_07_30_025844_add_new_colluns_to_publications_table', 18),
(34, '2023_08_01_000058_add_new_colluns_to_publicationss_table', 19),
(35, '2023_08_02_181914_create_batalhoes_supervisores_table', 20),
(36, '2023_08_02_190703_change__colluns_to_gerenciarcpas_table', 21),
(38, '2023_08_03_054313_add_new_colluns_to_publications_table', 23),
(39, '2023_08_03_162918_create_veiculocrimes_table', 24),
(40, '2023_08_03_201715_add_new_colluns_to_nat_ocor_perguntas_table', 24),
(41, '2023_08_04_015411_add_new_colluns_to_cadastro190s_table', 25),
(42, '2023_08_04_020336_create_natocorrespostas_table', 26),
(43, '2023_08_08_160629_create_questions_table', 27),
(44, '2023_08_08_160630_create_answers_table', 27),
(45, '2023_08_08_203401_add_new_colluns_to_cadastro190s_table', 28),
(46, '2023_07_14_220148_create_gerenciarcpas_table', 29),
(47, '2023_08_02_211358_add_new_colluns_to_gerenciarcpa_table', 30),
(48, '2023_08_09_145317_add_new_colluns_to_bpmms_table', 31),
(49, '2023_08_12_165523_add_new_colluns_to_cadastro190s_table', 32);

-- --------------------------------------------------------

--
-- Table structure for table `natureza_ocorrencias`
--

CREATE TABLE `natureza_ocorrencias` (
  `id` bigint UNSIGNED NOT NULL,
  `codigo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `natureza_ocorrencias`
--

INSERT INTO `natureza_ocorrencias` (`id`, `codigo`, `descricao`, `status`, `id_user`, `created_at`, `updated_at`) VALUES
(685, 'A00', 'ATOS ENVOLVENDO O TRÂNSITO - CÓDIGO A (ALFA)', '1', 1, NULL, NULL),
(686, 'A01', 'ACIDENTE DE TRÂNSITO SEM VÍTIMA', '1', 1, NULL, NULL),
(687, 'A02', 'ACIDENTE DE TRÂNSITO COM VÍTIMA', '1', 1, NULL, NULL),
(688, 'A03', 'ACIDENTE DE TRÂNSITO ENVOLVENDO VEÍCULO OFICIAL', '1', 1, NULL, NULL),
(689, 'A04', 'AUTO LESÃO', '1', 1, NULL, NULL),
(690, 'A05', 'ATROPELAMENTO', '1', 1, NULL, NULL),
(691, 'A06', 'FALTA DE HABILITAÇÃO', '1', 1, NULL, NULL),
(692, 'A07', 'DIREÇÃO PERIGOSA', '1', 1, NULL, NULL),
(693, 'A08', 'APREENSÃO DE VEÍCULO', '1', 1, NULL, NULL),
(694, 'A09', 'AUTO ABANDONADO', '1', 1, NULL, NULL),
(695, 'A10', 'AUTO LOCALIZADO', '1', 1, NULL, NULL),
(696, 'A11', 'INTERDIÇÃO DE VIA PÚBLICA', '1', 1, NULL, NULL),
(697, 'A12', 'HOMICÍDIO CULPOSO NA DIREÇÃO DE VEÍCULO AUTOMOTOR', '1', 1, NULL, NULL),
(698, 'A13', 'LESÃO CORPORAL CULPOSA NA DIREÇÃO DE VEÍCULO AUTOMOTOR', '1', 1, NULL, NULL),
(699, 'A14', 'OMISSÃO DE SOCORRO PRATICADO POR CONDUTOR DE VEÍCULO AUTOMOTOR', '1', 1, NULL, NULL),
(700, 'A15', 'ABANDONO DE LOCAL DE ACIDENTE PRATICADO POR CONDUT. DE VEÍCULO AUTOMOTOR', '1', 1, NULL, NULL),
(701, 'A99', 'OUTROS ATOS ENVOLVENDO O TRÂNSITO (ESPECIFICAR)', '1', 1, NULL, NULL),
(702, 'B00', 'ATOS CONTRA A PESSOA - CÓDIGO B (BRAVO)', '1', 1, NULL, NULL),
(703, 'B01', 'HOMICÍDIO SIMPLES', '1', 1, NULL, NULL),
(704, 'B02', 'HOMICÍDIO QUALIFICADO', '1', 1, NULL, NULL),
(705, 'B03', 'HOMICÍDIO CULPOSO', '1', 1, NULL, NULL),
(706, 'B04', 'TENTATIVA DE HOMICÍDIO', '1', 1, NULL, NULL),
(707, 'B05', 'SUICÍDIO', '1', 1, NULL, NULL),
(708, 'B06', 'TENTATIVA DE SUICÍDIO', '1', 1, NULL, NULL),
(709, 'B07', 'INDUÇÃO, INSTIGAÇÃO OU AUXÍLIO AO SUICÍDIO', '1', 1, NULL, NULL),
(710, 'B08', 'INFANTICÍDIO', '1', 1, NULL, NULL),
(711, 'B09', 'ABORTO', '1', 1, NULL, NULL),
(712, 'B10', 'LESÃO CORPORAL CULPOSA', '1', 1, NULL, NULL),
(713, 'B11', 'LESÃO CORPORAL DOLOSA', '1', 1, NULL, NULL),
(714, 'B12', 'VIOLÊNCIA DOMÉSTICA (LEI MARIA DA PENHA)', '1', 1, NULL, NULL),
(715, 'B13', 'PERICLITAÇÃO DE VIDA/SAÚDE (ESPECIFICAR)', '1', 1, NULL, NULL),
(716, 'B14', 'ABANDONO DE INCAPAZ ', '1', 1, NULL, NULL),
(717, 'B15', 'ABANDONO OU EXPOSIÇÃO DE RECÉM-NASCIDO', '1', 1, NULL, NULL),
(718, 'B16', 'OMISSÃO DE SOCORRO', '1', 1, NULL, NULL),
(719, 'B17', 'MAUS TRATOS', '1', 1, NULL, NULL),
(720, 'B18', 'RIXA', '1', 1, NULL, NULL),
(721, 'B19', 'CALÚNIA', '1', 1, NULL, NULL),
(722, 'B20', 'DIFAMAÇÃO', '1', 1, NULL, NULL),
(723, 'B21', 'INJÚRIA', '1', 1, NULL, NULL),
(724, 'B22', 'INJÚRIA REAL', '1', 1, NULL, NULL),
(725, 'B23', 'CONSTRANGIMENTO ILEGAL', '1', 1, NULL, NULL),
(726, 'B24', 'AMEAÇA', '1', 1, NULL, NULL),
(727, 'B25', 'SEQÜESTRO', '1', 1, NULL, NULL),
(728, 'B26', 'CÁRCERE PRIVADO', '1', 1, NULL, NULL),
(729, 'B27', 'REDUÇÃO A CONDIÇÃO ANÁLOGA DE ESCRAVO', '1', 1, NULL, NULL),
(730, 'B99', 'OUTROS ATOS CONTRA A PESSOA (ESPECIFICAR)', '1', 1, NULL, NULL),
(731, 'C00', 'ATOS REGIDOS POR LEGISLAÇÃO ESPECIAL - CÓDIGO C (CHARLIE)', '1', 1, NULL, NULL),
(732, 'C01', 'CRIMES CONTRA O CONSUMIDOR (ESPECIFICAR)', '1', 1, NULL, NULL),
(733, 'C02', 'LAVAGEM OU OCULTAÇÃO DE BENS, DIREITOS E VALORES PROVENIENTES DE CRIME', '1', 1, NULL, NULL),
(734, 'C03', 'TORTURA', '1', 1, NULL, NULL),
(735, 'C04', 'TRÁFICO DE SUBSTÂNCIA ENTORPECENTE', '1', 1, NULL, NULL),
(736, 'C05', 'OBJETOS, UTENSÍLIOS, MAQUINÁRIOS UZADOS FABRICAÇÃO DE SUBST. ENTORPECENTE', '1', 1, NULL, NULL),
(737, 'C06', 'ASSOCIAÇÃO PARA O TRÁFICO', '1', 1, NULL, NULL),
(738, 'C07', 'POSSE DE SUBSTÂNCIA ENTORPECENTE', '1', 1, NULL, NULL),
(739, 'C08', 'POSSE IRREGULAR DE ARMA DE FOGO, ACESSÓRIO OU MUNIÇÃO DE USO PERMITIDO', '1', 1, NULL, NULL),
(740, 'C09', 'OMISSÃO NA CAUTELA DE ARMA DE FOGO', '1', 1, NULL, NULL),
(741, 'C10', 'PORTE ILEGAL DE ARMA DE FOGO', '1', 1, NULL, NULL),
(742, 'C11', 'DISPARO DE ARMA DE FOGO', '1', 1, NULL, NULL),
(743, 'C12', 'POSSE OU PORTE ILEGAL DE ARMA DE USO RESTRITO', '1', 1, NULL, NULL),
(744, 'C13', 'COMÉRCIO ILEGAL DE ARMA DE FOGO', '1', 1, NULL, NULL),
(745, 'C14', 'RACISMO, PRECONCEITO E DISCRIMINAÇÃO', '1', 1, NULL, NULL),
(746, 'C15', 'CRIMES CONTRA A ORDEM ECONÔMICA (ESPECIFICAR)', '1', 1, NULL, NULL),
(747, 'C16', 'CRIME ELEITORAL', '1', 1, NULL, NULL),
(748, 'C17', 'CRIMES CONTRA O IDOSO (ESPECIFICAR)', '1', 1, NULL, NULL),
(749, 'C99', 'OUTROS ATOS REGIDOS POR LEGISLAÇÃO ESPECIAL (ESPECIFICAR)', '1', 1, NULL, NULL),
(750, 'D00', 'ATOS CONTRA O PATRIMÔNIO - CÓDIGO D (DELTA)', '1', 1, NULL, NULL),
(751, 'D01', 'VIOLAÇÃO DE DOMICÍLIO', '1', 1, NULL, NULL),
(752, 'D02', 'FURTO SIMPLES', '1', 1, NULL, NULL),
(753, 'D03', 'FURTO QUALIFICADO', '1', 1, NULL, NULL),
(754, 'D04', 'TENTATIVA DE FURTO', '1', 1, NULL, NULL),
(755, 'D05', 'ROUBO SIMPLES', '1', 1, NULL, NULL),
(756, 'D06', 'ROUBO QUALIFICADO', '1', 1, NULL, NULL),
(757, 'D07', 'TENTATIVA DE ROUBO', '1', 1, NULL, NULL),
(758, 'D08', 'EXTORSÃO', '1', 1, NULL, NULL),
(759, 'D09', 'EXTORSÃO MEDIANTE SEQÜESTRO', '1', 1, NULL, NULL),
(760, 'D10', 'DANOS/DEPREDAÇÃO', '1', 1, NULL, NULL),
(761, 'D11', 'ARROMBAMENTO', '1', 1, NULL, NULL),
(762, 'D12', 'DANOS AO PATRIMÔNIO PÚBLICO', '1', 1, NULL, NULL),
(763, 'D13', 'INVASÃO DE BENS PÚBLICOS MUNICIPAIS', '1', 1, NULL, NULL),
(764, 'D14', 'LATROCÍNIO', '1', 1, NULL, NULL),
(765, 'D99', 'OUTROS ATOS CONTRA O PATRIMÔNIO (ESPECIFICAR)', '1', 1, NULL, NULL),
(766, 'E00', 'ATOS DE APROPRIAÇÃO E FRAUDES - CÓDIGO E (ECO)', '1', 1, NULL, NULL),
(767, 'E01', 'APROPRIAÇÃO INDÉBITA', '1', 1, NULL, NULL),
(768, 'E02', 'ESTELIONATO', '1', 1, NULL, NULL),
(769, 'E03', 'RECEPTAÇÃO CULPOSA', '1', 1, NULL, NULL),
(770, 'E04', 'RECEPTAÇÃO DOLOSA', '1', 1, NULL, NULL),
(771, 'E05', 'TENTATIVA DE ESTELIONATO', '1', 1, NULL, NULL),
(772, 'E06', 'VIOLAÇÃO DE DIREITOS AUTORAIS, MARCAS OU PATENTES', '1', 1, NULL, NULL),
(773, 'E99', 'OUTROS ATOS DE APROPRIAÇÃO E FRAUDES', '1', 1, NULL, NULL),
(774, 'F00', 'ATOS CONTRA O RESPEITO AOS MORTOS - CÓDIGO F (FOX)', '1', 1, NULL, NULL),
(775, 'F01', 'VIOLAÇÃO DE SEPULTURA', '1', 1, NULL, NULL),
(776, 'F02', 'DESTRUIÇÃO, SUBTRAÇÃO E OCULTAÇÃO DE CADÁVER', '1', 1, NULL, NULL),
(777, 'F03', 'VILIPÊNDIO DE CADÁVER', '1', 1, NULL, NULL),
(778, 'F04', 'ENCONTRO DE CADÁVER', '1', 1, NULL, NULL),
(779, 'F99', 'OUTROS ATOS CONTRA O RESPEITO AOS MORTOS (ESPECIFICAR)', '1', 1, NULL, NULL),
(780, 'G00', 'ATOS CONTRA A DIGNIDADE / LIBERDADE SEXUAL - CÓDIGO G (GOLF)', '1', 1, NULL, NULL),
(781, 'G01', 'ESTUPRO', '1', 1, NULL, NULL),
(782, 'G02', 'ESTUPRO DE VULNERÁVEL', '1', 1, NULL, NULL),
(783, 'G03', 'TENTATIVA DE ESTUPRO', '1', 1, NULL, NULL),
(784, 'G04', 'VIOLAÇÃO SEXUAL MEDIANTE FRAUDE', '1', 1, NULL, NULL),
(785, 'G05', 'ASSÉDIO SEXUAL', '1', 1, NULL, NULL),
(786, 'G06', 'CORRUPÇÃO DE CRIANÇA OU ADOLESCENTE', '1', 1, NULL, NULL),
(787, 'G07', 'RUFIANISMO', '1', 1, NULL, NULL),
(788, 'G08', 'ATO OBSCENO', '1', 1, NULL, NULL),
(789, 'G09', 'BIGAMIA', '1', 1, NULL, NULL),
(790, 'G10', 'SATISFAÇÃO DE LASCÍVIA MEDIANTE PRESENÇA DE CRIANÇA OU ADOLESCENTE', '1', 1, NULL, NULL),
(791, 'G11', 'TRÁFICO DE PESSOA PARA EXPLORAÇÃO SEXUAL', '1', 1, NULL, NULL),
(792, 'G12', 'FAVORECIMENTO A PROSTITUIÇÃO OU OUTRA FORMA DE EXPLORAÇÃO SEXUAL', '1', 1, NULL, NULL),
(793, 'G99', 'OUTROS ATOS CONTRA A DIGNIDADE E A LIBERDADE SEXUAL', '1', 1, NULL, NULL),
(794, 'H00', 'ATOS ENVOLVENDO CRIANÇA / ADOLESCENTE - CÓDIGO H (HOTEL)', '1', 1, NULL, NULL),
(795, 'H01', 'ATO INFRACIONAL (ESPECIFICAR)', '1', 1, NULL, NULL),
(796, 'H02', 'CONSTRANGIMENTO DE CRIANÇA / ADOLESCENTE SOB SUA GUARDA', '1', 1, NULL, NULL),
(797, 'H03', 'PORNOGRAFIA INFANTIL (241)', '1', 1, NULL, NULL),
(798, 'H04', 'PRIVAR CRIANÇA / ADOLESCENTE DE SUA LIBERDADE (230)', '1', 1, NULL, NULL),
(799, 'H05', 'SUBTRAÇÃO DE CRIANÇA / ADOLESCENTE (237)', '1', 1, NULL, NULL),
(800, 'H06', 'ENTREGA DE FILHO MEDINATE PAGAMENTO', '1', 1, NULL, NULL),
(801, 'H07', 'CRIANÇA / ADOLESCENTE ABANDONADO', '1', 1, NULL, NULL),
(802, 'H08', 'CRIANÇA / ADOLESCENTE LOCALIZADO', '1', 1, NULL, NULL),
(803, 'H09', 'ABANDONO INTELECTUAL', '1', 1, NULL, NULL),
(804, 'H10', 'MAUS TRATOS À CRIANÇA / ADOLESCENTE', '1', 1, NULL, NULL),
(805, 'H11', 'EXPLORAÇÃO DE CRIANÇA / ADOLESCENTE', '1', 1, NULL, NULL),
(806, 'H12', 'VENDER, FORNECER OU ENTREGAR ARMA, MUNIÇÃO OU EXPLOSIVO', '1', 1, NULL, NULL),
(807, 'H13', 'VENDER, FORNECER OU ENTREGAR PRODUTOS QUE POSSAM CAUSAR DEPENDÊNCIA', '1', 1, NULL, NULL),
(808, 'H14', 'VENDER, FORNECER OU ENTREGAR FOGOS DE ESTAMPIDO OU DE ARTIFÍCIO', '1', 1, NULL, NULL),
(809, 'H15', 'IMPEDIR A AÇÃO DE ÓRGÃOS DE PROTEÇÃO A CRIANÇA / ADOLESCENTE', '1', 1, NULL, NULL),
(810, 'H16', 'SUBMETER CRIANÇA / ADOLESCENTE À PROSTITUIÇÃO OU À EXPLORAÇÃO SEXUAL', '1', 1, NULL, NULL),
(811, 'H99', 'OUTROS ATOS ENVOLVENDO CRIANÇA / ADOLESCENTE (ESPECIFICAR)', '1', 1, NULL, NULL),
(812, 'I00', 'ATOS CONTRA A INCOLUMIDADE PÚBLICA - CÓDIGO I (INDIA)', '1', 1, NULL, NULL),
(813, 'I01', 'INCÊNDIO', '1', 1, NULL, NULL),
(814, 'I02', 'EXPLOSÃO', '1', 1, NULL, NULL),
(815, 'I03', 'INUNDAÇÃO', '1', 1, NULL, NULL),
(816, 'I04', 'ENCHENTE', '1', 1, NULL, NULL),
(817, 'I05', 'DESABAMENTO', '1', 1, NULL, NULL),
(818, 'I06', 'DESMORONAMENTO', '1', 1, NULL, NULL),
(819, 'I07', 'ACIDENTE COM PRODUTOS QUÍMICOS', '1', 1, NULL, NULL),
(820, 'I08', 'DESASTRE (ESPECIFICAR)', '1', 1, NULL, NULL),
(821, 'I09', 'OUTROS ATOS CONTRA A INCOLUMIDADE PÚBLICA (ESPECIFICAR)', '1', 1, NULL, NULL),
(822, 'J00', 'ATOS CONTRA O MEIO AMBIENTE - CÓDIGO J (JULIET)', '1', 1, NULL, NULL),
(823, 'J01', 'CRIME AMBIENTAL', '1', 1, NULL, NULL),
(824, 'J02', 'AVERIGUAÇÃO DE CRIME AMBIENTAL', '1', 1, NULL, NULL),
(825, 'J03', 'INCÊNDIO EM MATA NATIVA', '1', 1, NULL, NULL),
(826, 'J04', 'INCÊNDIO EM PASTAGEM', '1', 1, NULL, NULL),
(827, 'J05', 'QUEIMA DE LIXO', '1', 1, NULL, NULL),
(828, 'J06', 'INDIVÍDUO JOGANDO LIXO OU ENTULHO', '1', 1, NULL, NULL),
(829, 'J07', 'RETIRADA DE ABELHAS', '1', 1, NULL, NULL),
(830, 'J08', 'RETIRADA DE ROEDORES', '1', 1, NULL, NULL),
(831, 'J09', 'RETIRADA DE ANIMAIS PEÇONHENTOS', '1', 1, NULL, NULL),
(832, 'J10', 'PICHAÇÃO', '1', 1, NULL, NULL),
(833, 'J11', 'PATRULHAMENTO EM ÁREAS DE PRESERVAÇÃO AMBIENTAL E MANANCIAIS', '1', 1, NULL, NULL),
(834, 'J12', 'BOSQUEAMENTO', '1', 1, NULL, NULL),
(835, 'J13', 'DESMATAMENTO', '1', 1, NULL, NULL),
(836, 'J14', 'APREENSÃO DE MATERIAIS UTILIZADOS EM DESMATAMENTO', '1', 1, NULL, NULL),
(837, 'J15', 'APREENSÃO DE BALÕES E APETRECHOS', '1', 1, NULL, NULL),
(838, 'J16', 'INDIVÍDUO SURPREENDIDO VENDA, FABRICAÇÃO, TRANSPORTE OU SOLTURA DE BALÕE', '1', 1, NULL, NULL),
(839, 'J18', 'IDENTIFICAÇÃO DE LOCAL DE CAÇA', '1', 1, NULL, NULL),
(840, 'J19', 'DETENÇÃO DE CAÇADOR', '1', 1, NULL, NULL),
(841, 'J20', 'APREENSÃO DE ARMADILHAS DE CAÇA', '1', 1, NULL, NULL),
(842, 'J21', 'APREENSÃO DE APETRECHOS DE PESCA', '1', 1, NULL, NULL),
(843, 'J22', 'MOVIMENTAÇÃO ILEGAL DE TERRA', '1', 1, NULL, NULL),
(844, 'J23', 'INTERVENÇÃO EM ÁREA DE PROTEÇÃO AMBIENTAL (ESPECIFICAR)', '1', 1, NULL, NULL),
(845, 'J24', 'RETIRADA DE ESPÉCIES DA FLORA, FAUNA E MINERAIS SEMPOLUIÇÃO DE NASCENTES, AFLUENTES, CURSO D AGUA E LA AUTORIZAÇÃO GOS', '1', 1, NULL, NULL),
(846, 'J25', 'LEGAL', '1', 1, NULL, NULL),
(847, 'J26', 'ESCOLTA DE INDIVÍDUO SURPEENDIDO SEM ALTORIZAÇÃO NA RESERVA', '1', 1, NULL, NULL),
(848, 'J27', 'APOIO A ÓRGÃOS DE PROTEÇÃO AMBIENTAL', '1', 1, NULL, NULL),
(849, 'J28', 'APOIO A PESQUISADORES E PESQUISAS', '1', 1, NULL, NULL),
(850, 'J29', 'ENCONTRO DE ANIMAIS MORTOS', '1', 1, NULL, NULL),
(851, 'J30', 'RETENÇÃO DE ANIMAIS SILVESTRES', '1', 1, NULL, NULL),
(852, 'J31', 'SOLTURA DE ANIMAIS SILVESTRES', '1', 1, NULL, NULL),
(853, 'J32', 'ENCONTRO DE LIXO TÔXICO, HOSPITALAR, DOMÉSTICO OU INDUSTRIAL', '1', 1, NULL, NULL),
(854, 'J33', 'INFRAÇÃO ADMINISTRATIVA AMBIENTAL', '1', 1, NULL, NULL),
(855, 'J34', 'AVERIGUAÇÃO DE INCÊNDIO SEM RESULTADO', '1', 1, NULL, NULL),
(856, 'J35', 'REALIZAÇÃO DE PALESTRAS POR PARTE DO GRUPAMENTO FLORESTAL', '1', 1, NULL, NULL),
(857, 'J99', 'OUTROS ATOS CONTRA O MEIO AMBIENTE (ESPECIFICAR)', '1', 1, NULL, NULL),
(858, 'K00', 'ATOS CONTRA A PAZ, FÉ E SAÚDE PÚBLICA - CÓDIGO K (KILO)', '1', 1, NULL, NULL),
(859, 'K01', 'EXERCÍCIO ILEGAL DA PROFISSÃO OU ATIVIDADE', '1', 1, NULL, NULL),
(860, 'K02', 'INCITAÇÃO / APOLOGIA AO CRIME', '1', 1, NULL, NULL),
(861, 'K03', 'FORMAÇÃO DE QUADRILHA OU BANDO', '1', 1, NULL, NULL),
(862, 'K04', 'CIRCULAÇÃO / APREENSÃO DE MOEDA FALSA', '1', 1, NULL, NULL),
(863, 'K05', 'FALSIFICAÇÃO DE DOCUMENTO', '1', 1, NULL, NULL),
(864, 'K06', 'FALSIDADE IDEOLÓGICA', '1', 1, NULL, NULL),
(865, 'K07', 'CRIMES CONTRA A SAÚDE PÚBLICA', '1', 1, NULL, NULL),
(866, 'K99', 'OUTROS ATOS CONTRA A PAZ, FÉ E SAÚDE PÚBLICA (ESPECIFICAR)', '1', 1, NULL, NULL),
(867, 'L00', 'ATOS CONTRA A ADMINISTRAÇÃO PÚBLICA - CÓDIGO L (LIMA)', '1', 1, NULL, NULL),
(868, 'L01', 'PECULATO', '1', 1, NULL, NULL),
(869, 'L02', 'CONCUSSÃO', '1', 1, NULL, NULL),
(870, 'L03', 'CORRUPÇÃO PASSIVA', '1', 1, NULL, NULL),
(871, 'L04', 'CORRUPÇÃO ATIVA', '1', 1, NULL, NULL),
(872, 'L05', 'CONTRABANDO / DESCAMINHO', '1', 1, NULL, NULL),
(873, 'L06', 'FACILITAÇÃO DE CONTRABANDO OU DESCAMINHO', '1', 1, NULL, NULL),
(874, 'L07', 'PREVARICAÇÃO', '1', 1, NULL, NULL),
(875, 'L08', 'USURPAÇÃO DE FUNÇÃO PÚBLICA', '1', 1, NULL, NULL),
(876, 'L09', 'RESISTÊNCIA', '1', 1, NULL, NULL),
(877, 'L00', 'DESOBEDIÊNCIA', '1', 1, NULL, NULL),
(878, 'L01', 'DESACATO', '1', 1, NULL, NULL),
(879, 'L02', 'EXERCÍCIO ARBITRÁRIO OU ABUSO DE PODER', '1', 1, NULL, NULL),
(880, 'L99', 'OUTROS ATOS CONTRA A ADMINISTRAÇÃO PÚBLICA (ESPECIFICAR)', '1', 1, NULL, NULL),
(881, 'M00', 'ATOS OCORRIDOS NO INTERIOR DE ESCOLAS - CÓDIGO M \"\"(MIKE)', '1', 1, NULL, NULL),
(882, 'M01', 'ALUNO ESQUECIDO NA ESCOLA', '1', 1, NULL, NULL),
(883, 'M02', 'ESCOLTA DE ALUNOS', '1', 1, NULL, NULL),
(884, 'M03', 'APOIO A DIREÇÃO DA ESCOLA', '1', 1, NULL, NULL),
(885, 'M04', 'TRAVESSIA ESCOLAR', '1', 1, NULL, NULL),
(886, 'M05', 'AUXÍLIO PÚBLICO DE ALUNO', '1', 1, NULL, NULL),
(887, 'M06', 'FURTO', '1', 1, NULL, NULL),
(888, 'M07', 'PICHAÇÃO', '1', 1, NULL, NULL),
(889, 'M08', 'PORTE DE ENTORPECENTE', '1', 1, NULL, NULL),
(890, 'M09', 'LESÃO CORPORAL', '1', 1, NULL, NULL),
(891, 'M10', 'DESINTELIGÊNCIA', '1', 1, NULL, NULL),
(892, 'M11', 'VANDALISMO / DEPREDAÇÃO', '1', 1, NULL, NULL),
(893, 'M12', 'DESACATO', '1', 1, NULL, NULL),
(894, 'M19', 'OUTROS ATOS OCORRIDOS NO INTERIOR DE ESCOLAS', '1', 1, NULL, NULL),
(895, 'M10', 'ATOS DE CONTRAVENÇÃO PENAL - CÓDIGO N (NOVEMBER)', '1', 1, NULL, NULL),
(896, 'M11', 'VIAS DE FATO', '1', 1, NULL, NULL),
(897, 'M12', 'DESINTELIGÊNCIA', '1', 1, NULL, NULL),
(898, 'M13', 'INCITAÇÃO / PROVOCAÇÃO DE TUMULTO', '1', 1, NULL, NULL),
(899, 'M14', 'PERTURBAÇÃO DO SOSSEGO (ESPECIFICAR)', '1', 1, NULL, NULL),
(900, 'M15', 'PERTURBAÇÃO DO TRABALHO ', '1', 1, NULL, NULL),
(901, 'M16', 'USO ILEGÍTIMO DE UNIFORME OU DISTINTIVO', '1', 1, NULL, NULL),
(902, 'M17', 'JOGOS DE AZAR', '1', 1, NULL, NULL),
(903, 'M18', 'JOGO DO BICHO', '1', 1, NULL, NULL),
(904, 'M19', 'VADIAGEM', '1', 1, NULL, NULL),
(905, 'M20', 'MENDICÂNCIA', '1', 1, NULL, NULL),
(906, 'M21', 'EMBRIAGUEZ', '1', 1, NULL, NULL),
(907, 'M22', 'IMPORTUNAÇÃO OFENSIVA AO PUDOR', '1', 1, NULL, NULL),
(908, 'M23', 'PORTE DE ARMA BRANCA', '1', 1, NULL, NULL),
(909, 'M24', 'CRUELDADE CONTRA ANIMAIS', '1', 1, NULL, NULL),
(910, 'M25', 'OMISSÃO NA GUARDA / CAUTELA DE ANIMAIS', '1', 1, NULL, NULL),
(911, 'M99', 'OUTROS ATOS DE CONTRAVENÇÃO PENAL (ESPECIFICAR)', '1', 1, NULL, NULL),
(912, 'O00', 'ATIVIDADES DE AUXÍLIO / APOIO / DIVERSAS - CÓDIGO O (OSCAR)', '1', 1, NULL, NULL),
(913, 'O01', 'AUXÍLIO AO PÚBLICO', '1', 1, NULL, NULL),
(914, 'O02', 'PARTURIENTE', '1', 1, NULL, NULL),
(915, 'O03', 'TRANSPORTE DE DOENTES MENTAIS', '1', 1, NULL, NULL),
(916, 'O04', 'TRANSPORTE DE DOENTES MENTAIS PARA OUTRO MUNICÍPIO', '1', 1, NULL, NULL),
(917, 'O05', 'TRANSPORTE DE MIGRANTES', '1', 1, NULL, NULL),
(918, 'O06', 'TRANSPORTES DE GUARDAS MUNICIPAIS', '1', 1, NULL, NULL),
(919, 'O07', 'APOIO A OUTROS ÓRGÃOS POLICIAIS (PM, PC)', '1', 1, NULL, NULL),
(920, 'O08', 'APOIO A OUTRAS VTRs / OUTRAS G M s', '1', 1, NULL, NULL),
(921, 'O09', 'APOIO A OUTROS ÓRGÃOS MUNICIPAIS', '1', 1, NULL, NULL),
(922, 'O00', 'APOIO AO MINISTÉRIO PÚBLICO', '1', 1, NULL, NULL),
(923, 'O11', 'APOIO AO PODER JUDICIÁRIO', '1', 1, NULL, NULL),
(924, 'O12', 'APOIO A OFICIAL DE JUSTIÇA', '1', 1, NULL, NULL),
(925, 'O13', 'APOIO AO CONSELHO TUTELAR', '1', 1, NULL, NULL),
(926, 'O14', 'APOIO À CONCESSIONÁRIA PÚBLICA', '1', 1, NULL, NULL),
(927, 'O15', 'APREENSÃO DE PRODUTOS ILÍCITOS', '1', 1, NULL, NULL),
(928, 'O16', 'DESAPARECIMENTO', '1', 1, NULL, NULL),
(929, 'O17', 'PESSOA LOCALIZADA', '1', 1, NULL, NULL),
(930, 'O18', 'DISPARO DE ALARME', '1', 1, NULL, NULL),
(931, 'O19', 'PATRULHAMENTO', '1', 1, NULL, NULL),
(932, 'O20', 'RONDA ESCOLAR', '1', 1, NULL, NULL),
(933, 'O21', 'PATRULHAMENTO COMUNITÁRIO', '1', 1, NULL, NULL),
(934, 'O22', 'ESCOLTA / TRANSPORTE  DE PRESOS', '1', 1, NULL, NULL),
(935, 'O23', 'SERVIÇOS INTERNOS', '1', 1, NULL, NULL),
(936, 'O24', 'DETENÇÃO DE INDIVÍDUO PROCURADO PELA JUSTIÇA', '1', 1, NULL, NULL),
(937, 'O25', 'AFOGAMENTO', '1', 1, NULL, NULL),
(938, 'O26', 'ACIDENTE PESSOAL / TRABALHO', '1', 1, NULL, NULL),
(939, 'O27', 'PATRULHAMENTO EM PRAÇAS DESPORTIVAS', '1', 1, NULL, NULL),
(940, 'O28', 'PATRULHAMENTO EM PRÓPRIOS MUNICIPAIS', '1', 1, NULL, NULL),
(941, 'O29', 'PATRULHAMENTO EM FESTAS / EVENTOS RELIGIOSOS', '1', 1, NULL, NULL),
(942, 'O30', 'PATRULHAMENTO EM FEIRAS LIVRES', '1', 1, NULL, NULL),
(943, 'O31', 'PATRULHAMENTO EM LOCAIS DE LAZER E DIVERSÃO', '1', 1, NULL, NULL),
(944, 'O32', 'DESLOCAMENTOS PARA OUTROS MUNICIPIOS', '1', 1, NULL, NULL),
(945, 'O33', 'AVERIGUAÇÃO SEM RESULTADO  DE...(CÓDIGO ESPECÍFICO)', '1', 1, NULL, NULL),
(946, 'O99', 'OUTRAS ATIVIDADES DE AUXÍLIO / APOIO / DIVERSAS (ESPECIFICAR)', '1', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nat_ocor_perguntas`
--

CREATE TABLE `nat_ocor_perguntas` (
  `id` bigint UNSIGNED NOT NULL,
  `naturezaocorrencia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prioridade` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pergunta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `descricao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto_auxiliar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nat_ocor_perguntas`
--

INSERT INTO `nat_ocor_perguntas` (`id`, `naturezaocorrencia`, `prioridade`, `tipo`, `pergunta`, `codigo`, `status`, `id_user`, `created_at`, `updated_at`, `descricao`, `texto_auxiliar`) VALUES
(4, 'A01 - ACIDENTE DE TRÂNSITO SEM VÍTIMA', '1', 'select', 'Outra pergunta', '<label for=\"nome_do_input\">Outra pergunta</label>\n<select class=\"form-control select2 select2-hidden-accessible\" style=\"width: 100%;\" data-select2-id=\"1\" tabindex=\"-1\" aria-hidden=\"true\" name=\"nome_do_input\" id=\"nome_do_input\">\n<option value=\"digite o valor da opção\">digite a opção</option>\n</select>', '1', 1, '2023-07-09 04:09:47', '2023-07-09 04:09:47', NULL, NULL),
(5, 'A02 - ACIDENTE DE TRÂNSITO COM VÍTIMA', '1', 'input', 'Quantas vitimas', '<label for=\"nome_do_input\">Quantas vitimas</label><input type=\"text\" class=\"form-control\" name=\"nome_do_input\" placeholder=\"Digite algo\">', '1', 1, '2023-07-09 04:40:48', '2023-07-09 04:40:48', NULL, NULL),
(6, 'A00 - ATOS ENVOLVENDO O TRÂNSITO - CÓDIGO A (ALFA)', '1', 'input', 'Qualquer pergunta?', '<label for=\"nome_do_input\">Qualquer pergunta?</label><input type=\"text\" class=\"form-control\" name=\"nome_do_input\" placeholder=\"Digite algo\">', '1', 1, '2023-07-11 01:59:25', '2023-07-11 01:59:25', NULL, NULL),
(7, 'A00 - ATOS ENVOLVENDO O TRÂNSITO - CÓDIGO A (ALFA)', '1', 'input', 'qualquer pergunta 2w', '<label for=\"nome_do_input\">qualquer pergunta 2w</label><input type=\"text\" class=\"form-control\" name=\"nome_do_input\" placeholder=\"Digite algo\">', '1', 1, '2023-07-11 02:02:57', '2023-07-11 02:02:57', NULL, NULL),
(8, 'A01 - ACIDENTE DE TRÂNSITO SEM VÍTIMA', '1', 'select', 'Outra pergunta', '<label for=\"nome_do_input\">Outra pergunta</label><select class=\"form-control select2 select2-hidden-accessible\" style=\"width: 100%;\" data-select2-id=\"1\" tabindex=\"-1\" aria-hidden=\"true\" name=\"nome_do_input\" id=\"nome_do_input\">\r\n<option value=\"sim\">Sim</option>\r\n<option value=\"nao\">Não</option>\r\n</select>', '1', 1, '2023-07-11 02:04:10', '2023-07-11 02:04:10', NULL, NULL),
(9, 'A00 - ATOS ENVOLVENDO O TRÂNSITO - CÓDIGO A (ALFA)', '1', 'input', 'teste', '<label for=\"nome_do_input\"></label><input type=\"text\" class=\"form-control\" name=\"nome_do_input\" placeholder=\"Digite algo\">', '1', 1, '2023-08-04 05:52:17', '2023-08-04 05:52:17', 'aaa', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `nat_ocor_perguntas_respostas`
--

CREATE TABLE `nat_ocor_perguntas_respostas` (
  `id` bigint UNSIGNED NOT NULL,
  `nat_ocor_perguntas_id` bigint UNSIGNED NOT NULL,
  `resposta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect_resp` bigint UNSIGNED DEFAULT NULL,
  `codigo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nat_ocor_respostas`
--

CREATE TABLE `nat_ocor_respostas` (
  `id` bigint UNSIGNED NOT NULL,
  `nat_ocor_perguntas_id` bigint UNSIGNED NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nat_ocor_respostas_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ocorrencias`
--

CREATE TABLE `ocorrencias` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `planilhacaratergerals`
--

CREATE TABLE `planilhacaratergerals` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `planilhacaraterpersonalizadas`
--

CREATE TABLE `planilhacaraterpersonalizadas` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `file_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewed_at` timestamp NULL DEFAULT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file_folder` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `folder` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `data_inicio` date DEFAULT NULL,
  `data_termino` date DEFAULT NULL,
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint UNSIGNED NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `content`, `type`, `created_at`, `updated_at`) VALUES
(1, 'O que está acontecendo?', 'radio', NULL, NULL),
(2, 'Está em perigo?', '', NULL, NULL),
(3, 'O que está acontecendo no local?', 'text', NULL, NULL),
(4, 'Está em perigo eminente?', '', NULL, NULL),
(5, 'Qual a cor da arvore?', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ramais`
--

CREATE TABLE `ramais` (
  `id` bigint UNSIGNED NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ramais`
--

INSERT INTO `ramais` (`id`, `nome`, `id_user`, `created_at`, `updated_at`, `tipo`) VALUES
(2, '3100', 1, NULL, '2023-07-12 08:39:31', '2'),
(3, '3100', 1, NULL, '2023-07-12 08:39:37', '3'),
(4, '3100', 1, NULL, '2023-07-12 08:39:43', '4'),
(5, '3101', 1, NULL, '2023-07-12 08:39:50', '5'),
(6, '3102', 1, NULL, '2023-07-12 08:39:58', '5'),
(7, '3103', 1, NULL, '2023-07-12 08:40:05', '6'),
(8, '3104', 1, NULL, '2023-07-12 08:40:12', '7'),
(9, '3105', 1, NULL, '2023-07-12 08:43:35', '2'),
(10, '3106', 1, NULL, NULL, '1'),
(11, '3107', 1, NULL, NULL, '1'),
(12, '3108', 1, NULL, NULL, '1'),
(13, '3109', 1, NULL, NULL, '1'),
(14, '3110', 1, NULL, NULL, '1'),
(15, '3111', 1, NULL, NULL, '1'),
(16, '3112', 1, NULL, NULL, '1'),
(17, '3134', 1, NULL, NULL, '1'),
(18, '3135', 1, NULL, NULL, '1'),
(19, '3136', 1, NULL, NULL, '1'),
(20, '3137', 1, NULL, NULL, '1'),
(21, '3138', 1, NULL, NULL, '1'),
(22, '3139', 1, NULL, NULL, '1'),
(23, '3140', 1, NULL, NULL, '1'),
(24, '3141', 1, NULL, NULL, '1'),
(25, '3142', 1, NULL, NULL, '1'),
(26, '3143', 1, NULL, NULL, '1'),
(27, '3144', 1, NULL, NULL, '1'),
(28, '3145', 1, NULL, NULL, '1'),
(29, '3146', 1, NULL, NULL, '1'),
(30, '3147', 1, NULL, NULL, '1'),
(31, '3148', 1, NULL, NULL, '1'),
(32, '3149', 1, NULL, NULL, '1'),
(33, '3150', 1, NULL, NULL, '1'),
(34, '3151', 1, NULL, NULL, '1'),
(35, '3152', 1, NULL, NULL, '1'),
(36, '3153', 1, NULL, NULL, '1'),
(37, '3154', 1, NULL, NULL, '1'),
(38, '3155', 1, NULL, NULL, '1'),
(39, '3156', 1, NULL, NULL, '1'),
(40, '3157', 1, NULL, NULL, '1'),
(41, '3158', 1, NULL, NULL, '1'),
(42, '3159', 1, NULL, NULL, '1'),
(43, '3160', 1, NULL, NULL, '1'),
(44, '3161', 1, NULL, NULL, '1'),
(45, '3162', 1, NULL, NULL, '1'),
(46, '3163', 1, NULL, NULL, '1'),
(47, '3164', 1, NULL, NULL, '1'),
(48, '3165', 1, NULL, NULL, '1'),
(49, '3166', 1, NULL, NULL, '1'),
(50, '3167', 1, NULL, NULL, '1'),
(51, '3168', 1, NULL, NULL, '1'),
(52, '3169', 1, NULL, NULL, '1'),
(53, '3100', 1, NULL, NULL, '1'),
(54, '3100', 1, NULL, NULL, '1'),
(55, '3101', 1, NULL, NULL, '1'),
(56, '3102', 1, NULL, NULL, '1'),
(57, '3103', 1, NULL, NULL, '1'),
(58, '3104', 1, NULL, NULL, '1'),
(59, '3105', 1, NULL, NULL, '1'),
(60, '3106', 1, NULL, NULL, '1'),
(61, '3107', 1, NULL, NULL, '1'),
(62, '3108', 1, NULL, NULL, '1'),
(63, '3109', 1, NULL, NULL, '1'),
(64, '3110', 1, NULL, NULL, '1'),
(65, '3111', 1, NULL, NULL, '1'),
(66, '3112', 1, NULL, NULL, '1'),
(67, '3113', 1, NULL, NULL, '1'),
(68, '3114', 1, NULL, NULL, '1'),
(69, '3115', 1, NULL, NULL, '1'),
(70, '3116', 1, NULL, NULL, '1'),
(71, '3117', 1, NULL, NULL, '1'),
(72, '3118', 1, NULL, NULL, '1'),
(73, '3119', 1, NULL, NULL, '1'),
(74, '3120', 1, NULL, NULL, '1'),
(75, '3121', 1, NULL, NULL, '1'),
(76, '3122', 1, NULL, NULL, '1'),
(77, '3123', 1, NULL, NULL, '1'),
(78, '3124', 1, NULL, NULL, '1'),
(79, '3125', 1, NULL, NULL, '1'),
(80, '3126', 1, NULL, NULL, '1'),
(81, '3127', 1, NULL, NULL, '1'),
(82, '3128', 1, NULL, NULL, '1'),
(83, '3129', 1, NULL, NULL, '1'),
(84, '3130', 1, NULL, NULL, '1'),
(85, '3131', 1, NULL, NULL, '1'),
(86, '3132', 1, NULL, NULL, '1'),
(87, '3133', 1, NULL, NULL, '1'),
(88, '3134', 1, NULL, NULL, '1'),
(89, '3135', 1, NULL, NULL, '1'),
(90, '3136', 1, NULL, NULL, '1'),
(91, '3137', 1, NULL, NULL, '1'),
(92, '3138', 1, NULL, NULL, '1'),
(93, '3139', 1, NULL, NULL, '1'),
(94, '3140', 1, NULL, NULL, '1'),
(95, '3141', 1, NULL, NULL, '1'),
(96, '3142', 1, NULL, NULL, '1'),
(97, '3143', 1, NULL, NULL, '1'),
(98, '3144', 1, NULL, NULL, '1'),
(99, '3145', 1, NULL, NULL, '1'),
(100, '3146', 1, NULL, NULL, '1'),
(101, '3147', 1, NULL, NULL, '1'),
(102, '3148', 1, NULL, NULL, '1'),
(103, '3149', 1, NULL, NULL, '1'),
(104, '3150', 1, NULL, NULL, '1'),
(105, '3151', 1, NULL, NULL, '1'),
(106, '3152', 1, NULL, NULL, '1'),
(107, '3153', 1, NULL, NULL, '1'),
(108, '3154', 1, NULL, NULL, '1'),
(109, '3155', 1, NULL, NULL, '1'),
(110, '3156', 1, NULL, NULL, '1'),
(111, '3157', 1, NULL, NULL, '1'),
(112, '3158', 1, NULL, NULL, '1'),
(113, '3159', 1, NULL, NULL, '1'),
(114, '3160', 1, NULL, NULL, '1'),
(115, '3161', 1, NULL, NULL, '1'),
(116, '3162', 1, NULL, NULL, '1'),
(117, '3163', 1, NULL, NULL, '1'),
(118, '3164', 1, NULL, NULL, '1'),
(119, '3165', 1, NULL, NULL, '1'),
(120, '3166', 1, NULL, NULL, '1'),
(121, '3167', 1, NULL, NULL, '1'),
(122, '3168', 1, NULL, NULL, '1'),
(123, '3169', 1, NULL, NULL, '1'),
(124, '3170', 1, NULL, NULL, '1'),
(125, '3171', 1, NULL, NULL, '1'),
(126, '3172', 1, NULL, NULL, '1'),
(127, '3173', 1, NULL, NULL, '1'),
(128, '3174', 1, NULL, NULL, '1'),
(129, '3175', 1, NULL, NULL, '1'),
(130, '3176', 1, NULL, NULL, '1'),
(131, '3177', 1, NULL, NULL, '1'),
(132, '3178', 1, NULL, NULL, '1'),
(133, '3179', 1, NULL, NULL, '1'),
(134, '3180', 1, NULL, NULL, '1'),
(135, '3181', 1, NULL, NULL, '1'),
(136, '3182', 1, NULL, NULL, '1'),
(137, '3183', 1, NULL, NULL, '1'),
(138, '3184', 1, NULL, NULL, '1'),
(139, '3185', 1, NULL, NULL, '1'),
(140, '3186', 1, NULL, NULL, '1'),
(141, '3187', 1, NULL, NULL, '1'),
(142, '3188', 1, NULL, NULL, '1'),
(143, '3189', 1, NULL, NULL, '1'),
(144, '3190', 1, NULL, NULL, '1'),
(145, '3191', 1, NULL, NULL, '1'),
(146, '3192', 1, NULL, NULL, '1'),
(147, '3193', 1, NULL, NULL, '1'),
(148, '3194', 1, NULL, NULL, '1'),
(149, '3195', 1, NULL, NULL, '1'),
(150, '3196', 1, NULL, NULL, '1'),
(151, '3197', 1, NULL, NULL, '1'),
(152, '3198', 1, NULL, NULL, '1'),
(153, '3199', 1, NULL, NULL, '1'),
(154, '3200', 1, NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nivel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricula` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bpmm` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `trabalhando` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `identificacao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `nivel`, `matricula`, `bpmm`, `status`, `trabalhando`, `identificacao`, `deleted_at`) VALUES
(1, 'admin', 'josue.mocelin@gmail.com', NULL, '$2y$10$5slhYCAEWR.71e.xCjhJ6Ow562p1XflSR/z7a.w7kQ4EWLmDeVu9.', 'ABj2XHJdRsr522NnRgP6izpoH3wz1ui4oxtTOjI83PkGDYCZYbTUq0G4WAbn', '2023-06-29 08:50:24', '2023-08-13 14:27:27', 'Chefia', '1234', '01° BPM/M', '1', 'Chefia', 'CIVIL', NULL),
(2, 'LUANQUE DOS SANTOS', 'coltpfa@gmail.com', NULL, '$2y$10$5slhYCAEWR.71e.xCjhJ6Ow562p1XflSR/z7a.w7kQ4EWLmDeVu9.', NULL, '2023-07-01 21:53:23', '2023-08-13 02:21:42', 'Despachador', '152846', '13°BPM/M', '1', '', 'CB-PM', NULL),
(3, 'teste', 'josue.mocelin@outlook.com', NULL, '$2y$10$roozu529e/igebvvJ5uAtOBgxwHvGVBGpar3wxswRknPMx1oVg1DW', NULL, '2023-07-12 05:07:26', '2023-07-12 05:28:37', 'Despachador', '12345', '02°BPM/M 1°CIA', '0', '0', 'CIVIL', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint UNSIGNED NOT NULL,
  `USER` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOME` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PASSKEY` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ACTIVE` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `veiculocrimes`
--

CREATE TABLE `veiculocrimes` (
  `id` bigint UNSIGNED NOT NULL,
  `placa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marca` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modelo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chassis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `situacao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cadastro190_id` bigint UNSIGNED NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_question_id_foreign` (`question_id`),
  ADD KEY `answers_next_question_id_foreign` (`next_question_id`);

--
-- Indexes for table `bpmms`
--
ALTER TABLE `bpmms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bpmms_id_user_foreign` (`id_user`);

--
-- Indexes for table `cadastro190s`
--
ALTER TABLE `cadastro190s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cadastro190s_user_id_foreign` (`user_id`) USING BTREE,
  ADD KEY `cadastro190s_natureza_ocorrencia_id_foreign` (`natureza_ocorrencia_id`);

--
-- Indexes for table `cadastrodespachadors`
--
ALTER TABLE `cadastrodespachadors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cidades_id_user_foreign` (`id_user`);

--
-- Indexes for table `despachadors`
--
ALTER TABLE `despachadors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gerenciarcpas`
--
ALTER TABLE `gerenciarcpas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gerenciarcpas_battalion_id_foreign` (`battalion_id`),
  ADD KEY `gerenciarcpas_user_id_foreign` (`user_id`);

--
-- Indexes for table `logout_activities`
--
ALTER TABLE `logout_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapas`
--
ALTER TABLE `mapas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapas_id_user_foreign` (`id_user`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `natureza_ocorrencias`
--
ALTER TABLE `natureza_ocorrencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `natureza_ocorrencias_id_user_foreign` (`id_user`);

--
-- Indexes for table `nat_ocor_perguntas`
--
ALTER TABLE `nat_ocor_perguntas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nat_ocor_perguntas_id_user_foreign` (`id_user`);

--
-- Indexes for table `nat_ocor_perguntas_respostas`
--
ALTER TABLE `nat_ocor_perguntas_respostas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nat_ocor_perguntas_respostas_nat_ocor_perguntas_id_foreign` (`nat_ocor_perguntas_id`),
  ADD KEY `nat_ocor_perguntas_respostas_redirect_resp_foreign` (`redirect_resp`);

--
-- Indexes for table `nat_ocor_respostas`
--
ALTER TABLE `nat_ocor_respostas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nat_ocor_respostas_nat_ocor_perguntas_id_foreign` (`nat_ocor_perguntas_id`),
  ADD KEY `nat_ocor_respostas_nat_ocor_respostas_id_foreign` (`nat_ocor_respostas_id`);

--
-- Indexes for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `planilhacaratergerals`
--
ALTER TABLE `planilhacaratergerals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planilhacaraterpersonalizadas`
--
ALTER TABLE `planilhacaraterpersonalizadas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publications_id_user_foreign` (`id_user`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ramais`
--
ALTER TABLE `ramais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ramais_id_user_foreign` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_key` (`USER`);

--
-- Indexes for table `veiculocrimes`
--
ALTER TABLE `veiculocrimes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `veiculocrimes_cadastro190_id_foreign` (`cadastro190_id`),
  ADD KEY `veiculocrimes_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bpmms`
--
ALTER TABLE `bpmms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `cadastro190s`
--
ALTER TABLE `cadastro190s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `cadastrodespachadors`
--
ALTER TABLE `cadastrodespachadors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cidades`
--
ALTER TABLE `cidades`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `despachadors`
--
ALTER TABLE `despachadors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gerenciarcpas`
--
ALTER TABLE `gerenciarcpas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `logout_activities`
--
ALTER TABLE `logout_activities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mapas`
--
ALTER TABLE `mapas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `natureza_ocorrencias`
--
ALTER TABLE `natureza_ocorrencias`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=947;

--
-- AUTO_INCREMENT for table `nat_ocor_perguntas`
--
ALTER TABLE `nat_ocor_perguntas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nat_ocor_perguntas_respostas`
--
ALTER TABLE `nat_ocor_perguntas_respostas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nat_ocor_respostas`
--
ALTER TABLE `nat_ocor_respostas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `planilhacaratergerals`
--
ALTER TABLE `planilhacaratergerals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `planilhacaraterpersonalizadas`
--
ALTER TABLE `planilhacaraterpersonalizadas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ramais`
--
ALTER TABLE `ramais`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `veiculocrimes`
--
ALTER TABLE `veiculocrimes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_next_question_id_foreign` FOREIGN KEY (`next_question_id`) REFERENCES `questions` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bpmms`
--
ALTER TABLE `bpmms`
  ADD CONSTRAINT `bpmms_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cadastro190s`
--
ALTER TABLE `cadastro190s`
  ADD CONSTRAINT `cadastro190s_id_user_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cadastro190s_natureza_ocorrencia_id_foreign` FOREIGN KEY (`natureza_ocorrencia_id`) REFERENCES `natureza_ocorrencias` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cidades`
--
ALTER TABLE `cidades`
  ADD CONSTRAINT `cidades_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gerenciarcpas`
--
ALTER TABLE `gerenciarcpas`
  ADD CONSTRAINT `gerenciarcpas_battalion_id_foreign` FOREIGN KEY (`battalion_id`) REFERENCES `bpmms` (`id`),
  ADD CONSTRAINT `gerenciarcpas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mapas`
--
ALTER TABLE `mapas`
  ADD CONSTRAINT `mapas_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `natureza_ocorrencias`
--
ALTER TABLE `natureza_ocorrencias`
  ADD CONSTRAINT `natureza_ocorrencias_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nat_ocor_perguntas`
--
ALTER TABLE `nat_ocor_perguntas`
  ADD CONSTRAINT `nat_ocor_perguntas_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nat_ocor_perguntas_respostas`
--
ALTER TABLE `nat_ocor_perguntas_respostas`
  ADD CONSTRAINT `nat_ocor_perguntas_respostas_nat_ocor_perguntas_id_foreign` FOREIGN KEY (`nat_ocor_perguntas_id`) REFERENCES `nat_ocor_perguntas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nat_ocor_perguntas_respostas_redirect_resp_foreign` FOREIGN KEY (`redirect_resp`) REFERENCES `nat_ocor_perguntas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nat_ocor_respostas`
--
ALTER TABLE `nat_ocor_respostas`
  ADD CONSTRAINT `nat_ocor_respostas_nat_ocor_perguntas_id_foreign` FOREIGN KEY (`nat_ocor_perguntas_id`) REFERENCES `nat_ocor_perguntas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nat_ocor_respostas_nat_ocor_respostas_id_foreign` FOREIGN KEY (`nat_ocor_respostas_id`) REFERENCES `nat_ocor_respostas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `publications`
--
ALTER TABLE `publications`
  ADD CONSTRAINT `publications_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ramais`
--
ALTER TABLE `ramais`
  ADD CONSTRAINT `ramais_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `veiculocrimes`
--
ALTER TABLE `veiculocrimes`
  ADD CONSTRAINT `veiculocrimes_cadastro190_id_foreign` FOREIGN KEY (`cadastro190_id`) REFERENCES `cadastro190s` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `veiculocrimes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
