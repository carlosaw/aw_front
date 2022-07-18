-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Jul-2022 às 19:30
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `awlaravel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `street_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `addresses`
--

INSERT INTO `addresses` (`id`, `street_num`, `cep`, `district`, `city`, `state`) VALUES
(1, 'Rua Anjos, 34', '25650-520', 'Jd. Maravilhas', 'Várzea', 'MonTe'),
(2, 'Travessa Arquimedes, 1234', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(3, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(4, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(5, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(6, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(7, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(8, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(9, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(10, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(11, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(12, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(13, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(14, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(15, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(16, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(17, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(18, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(19, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(20, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(21, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(22, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(23, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(24, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(25, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(26, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(27, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(28, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(29, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(30, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(31, 'Rua Mem de Sá, 61', '78125-950', 'Centro', 'Vanilla', 'MS'),
(32, 'Rua Sorte, 33', '78125.650', 'Centro', 'Xavante', 'PA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `clients`
--

INSERT INTO `clients` (`id`, `name`, `cpf`, `fone`, `email`, `address_id`) VALUES
(1, 'Chaplin', '000.000.000-99', '(41) 3682-5291', 'chap@gmail.com', 1),
(2, 'Carolina de Abreu', '222.333.666.88', '(65)9 9981-3879', 'carol@gmail.com', NULL),
(3, 'Fulano', '111.111.111-11', '(65)999888-8875', 'fulano@gmail.com', NULL),
(7, 'Fulano', '111.111.111-12', '(65)999888-8875', 'fulano2@gmail.com', NULL),
(8, 'Fulano', '111.111.111-13', '(65)999888-8875', 'fulano3@gmail.com', NULL),
(9, 'Fulano', '111.111.111-14', '(65)999888-8875', 'fulano4@gmail.com', NULL),
(10, 'Fulano', '111.111.111-15', '(65)999888-8875', 'fulano5@gmail.com', NULL),
(11, 'Fulano', '111.111.111-16', '(65)999888-8875', 'fulano6@gmail.com', NULL),
(12, 'Fulano', '111.111.111-17', '(65)999888-8875', 'fulano7@gmail.com', NULL),
(13, 'Fulano', '111.111.111-18', '(65)999888-8875', 'fulano8@gmail.com', NULL),
(14, 'Fulano', '111.111.111-19', '(65)999888-8875', 'fulano9@gmail.com', NULL),
(15, 'Fulano', '111.111.111-25', '(65)999888-8875', 'fulano25@gmail.com', NULL),
(16, 'Fulano', '111.111.111-26', '(65)999888-8875', 'fulano26@gmail.com', NULL),
(17, 'Fulano', '111.111.111-27', '(65)999888-8875', 'fulano27@gmail.com', NULL),
(18, 'Fulano', '111.111.111-28', '(65)999888-8875', 'fulano28@gmail.com', NULL),
(19, 'Fulano', '111.111.111-29', '(65)999888-8875', 'fulano29@gmail.com', NULL),
(20, 'Fulano', '111.111.111-35', '(65)999888-8875', 'fulano35@gmail.com', NULL),
(21, 'Fulano', '111.111.111-36', '(65)999888-8875', 'fulano36@gmail.com', NULL),
(22, 'Fulano', '111.111.111-37', '(65)999888-8875', 'fulano37@gmail.com', NULL),
(23, 'Fulano', '111.111.111-38', '(65)999888-8875', 'fulano38@gmail.com', NULL),
(24, 'Fulano', '111.111.111-39', '(65)999888-8875', 'fulano39@gmail.com', NULL),
(25, 'Fulano', '111.111.111-45', '(65)999888-8875', 'fulano45@gmail.com', NULL),
(26, 'Fulano', '111.111.111-46', '(65)999888-8875', 'fulano46@gmail.com', NULL),
(27, 'Fulano', '111.111.111-47', '(65)999888-8875', 'fulano47@gmail.com', NULL),
(28, 'Fulano', '111.111.111-48', '(65)999888-8875', 'fulano48@gmail.com', NULL),
(29, 'Fulano2', '111.111.111-49', '(65)999888-8875', 'fulano49@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
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
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_31_185232_create_clients_table', 1),
(6, '2022_05_31_190906_create_addresses_table', 1),
(7, '2022_05_31_192140_create_products_table', 1),
(8, '2022_05_31_192146_create_vehicles_table', 1),
(9, '2022_06_05_123946_add_column_address_id_clients_table', 1),
(10, '2022_06_05_124702_create_foreignkey_clients_address_clients_table', 1),
(11, '2022_06_05_130910_add_column_vehicle_id_products_table', 1),
(12, '2022_06_05_134041_create_foreignkey_products_vehicles_products_table', 1),
(13, '2022_06_06_145117_add_column_client_id_vehicles_table', 1),
(14, '2022_06_06_145358_create_foreignkey_client_vehicles_vehicles_table', 1),
(15, '2022_06_27_123907_add_column_remember_token_users_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
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
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value_unit` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` double(8,2) NOT NULL DEFAULT 0.00,
  `total` double(8,2) NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `name`, `value_unit`, `quantity`, `discount`, `total`, `vehicle_id`) VALUES
(1, 'Pivo de suspensão', 124.00, 2, 0.00, 248.00, 1),
(2, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(3, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(4, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(5, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(6, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(7, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(8, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(9, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(10, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(11, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(12, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(13, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(14, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(15, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(16, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(17, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(18, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(19, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(20, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(21, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(22, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(23, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(24, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(25, 'Peças', 125.00, 1, 0.00, 125.00, NULL),
(26, 'Peças', 125.00, 1, 0.00, 125.00, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `token`, `remember_token`) VALUES
(1, 'Charles', 'charles@gmail.com', '$2y$10$2EJisujV7KjqA1/z7B8bleU1OY7CuNOztf.KwQVmdtg4XWWMSZ0ii', '', NULL),
(2, 'Carlos', 'carlos@gmail.com', '$2y$10$qw5QnlnSYE3sI18uAMXlwO25JUtK/xW.mOfuXAOBAXvhv7iAtIJ0i', NULL, NULL),
(3, 'Antonio', 'toni@gmail.com', '$2y$10$LpF1I4L1eIewhVUUXMnd2.FiCLLSY2rqcZbC.KnMC6S7JeGUFGIRK', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` bigint(20) NOT NULL,
  `km` bigint(20) NOT NULL,
  `client_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `vehicles`
--

INSERT INTO `vehicles` (`id`, `plate`, `brand`, `model`, `color`, `year`, `km`, `client_id`) VALUES
(1, 'OBD 3566', 'Toyota', 'Lexus', 'Preta', 1999, 68, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_cpf_unique` (`cpf`),
  ADD UNIQUE KEY `clients_email_unique` (`email`),
  ADD KEY `clients_address_id_foreign` (`address_id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_vehicle_id_foreign` (`vehicle_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices para tabela `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicles_client_id_foreign` (`client_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE SET NULL;

--
-- Limitadores para a tabela `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`) ON DELETE SET NULL;

--
-- Limitadores para a tabela `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
