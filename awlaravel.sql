-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Ago-2022 às 22:04
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
(1, 'Rua Street Fire, 41', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(2, 'Rua Street Fire, 42', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(3, 'Rua Street Fire, 43', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(4, 'Rua Street Fire, 44', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(5, 'Rua Street Fire, 45', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(6, 'Rua Street Fire, 46', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(7, 'Rua Street Fire, 47', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(8, 'Rua Street Fire, 48', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(9, 'Rua Street Fire, 49', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(10, 'Rua Street Fire, 50', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(11, 'Rua Street Fire, 51', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(12, 'Rua Street Fire, 52', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(13, 'Rua Street Fire, 53', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(14, 'Rua Street Fire, 54', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(15, 'Rua Street Fire, 55', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(16, 'Rua Street Fire, 56', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(17, 'Rua Street Fire, 57', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(18, 'Rua Street Fire, 58', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(19, 'Rua Street Fire, 59', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(20, 'Rua Street Fire, 60', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(21, 'Rua Street Fire, 61', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(22, 'Rua Street Fire, 62', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(23, 'Rua Street Fire, 63', '78125-650', 'Centro', 'Cuiabá', 'MT'),
(24, 'Rua Street Fire, 64', '78125-650', 'Centro', 'Cuiabá', 'MT');

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
(1, 'Carlos Alberto', '491.238.669-34', '(65) 9 9981-3879', 'carlos1@gmail.com', 1),
(2, 'Carlos Alberto', '491.238.669-35', '(65) 9 9981-3879', 'carlos2@gmail.com', 2),
(3, 'Carlos Alberto', '491.238.669-36', '(65) 9 9981-3879', 'carlos3@gmail.com', 3),
(4, 'Carlos Alberto', '491.238.669-37', '(65) 9 9981-3879', 'carlos4@gmail.com', 4),
(5, 'Carlos Alberto', '491.238.669-38', '(65) 9 9981-3879', 'carlos5@gmail.com', 5),
(6, 'Carlos Alberto', '491.238.669-39', '(65) 9 9981-3879', 'carlos6@gmail.com', 6),
(7, 'Carlos Alberto', '491.238.669-40', '(65) 9 9981-3879', 'carlos7@gmail.com', 7),
(8, 'Carlos Alberto', '491.238.669-41', '(65) 9 9981-3879', 'carlos8@gmail.com', 8),
(9, 'Carlos Alberto', '491.238.669-42', '(65) 9 9981-3879', 'carlos9@gmail.com', 9),
(10, 'Carlos Alberto', '491.238.669-43', '(65) 9 9981-3879', 'carlos10@gmail.com', 10),
(11, 'Carlos Alberto', '491.238.669-44', '(65) 9 9981-3879', 'carlos11@gmail.com', 11),
(12, 'Carlos Alberto', '491.238.669-45', '(65) 9 9981-3879', 'carlos12@gmail.com', 12),
(13, 'Carlos Alberto', '491.238.669-46', '(65) 9 9981-3879', 'carlos13@gmail.com', 13),
(14, 'Carlos Alberto', '491.238.669-47', '(65) 9 9981-3879', 'carlos14@gmail.com', 14),
(15, 'Carlos Alberto', '491.238.669-48', '(65) 9 9981-3879', 'carlos15@gmail.com', 15),
(16, 'Carlos Alberto', '491.238.669-49', '(65) 9 9981-3879', 'carlos16@gmail.com', 16),
(17, 'Carlos Alberto', '491.238.669-50', '(65) 9 9981-3879', 'carlos17@gmail.com', 17),
(18, 'Carlos Alberto', '491.238.669-51', '(65) 9 9981-3879', 'carlos18@gmail.com', 18),
(19, 'Carlos Alberto', '491.238.669-52', '(65) 9 9981-3879', 'carlos19@gmail.com', 19),
(20, 'Carlos Alberto', '491.238.669-53', '(65) 9 9981-3879', 'carlos20@gmail.com', 20),
(21, 'Carlos Alberto', '491.238.669-54', '(65) 9 9981-3879', 'carlos21@gmail.com', 21),
(22, 'Carlos Alberto', '491.238.669-55', '(65) 9 9981-3879', 'carlos22@gmail.com', 22),
(23, 'Carlos Alberto', '491.238.669-56', '(65) 9 9981-3879', 'carlos23@gmail.com', 23),
(24, 'Carlos Alberto', '491.238.669-57', '(65) 9 9981-3879', 'carlos24@gmail.com', 24);

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
(11, '2022_06_06_145117_add_column_client_id_vehicles_table', 1),
(12, '2022_06_06_145358_create_foreignkey_client_vehicles_vehicles_table', 1),
(13, '2022_06_27_123907_add_column_remember_token_users_table', 1);

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
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`) VALUES
(1, 'Carburador', 125.00, 5),
(2, 'Carburador', 125.00, 5),
(3, 'Carburador1', 125.00, 5),
(4, 'Carburador2', 125.00, 5),
(5, 'Carburador3', 125.00, 5),
(6, 'Carburado4r', 125.00, 5),
(7, 'Carburador5', 125.00, 5),
(8, 'Carburador6', 125.00, 5),
(9, 'Carburador7', 125.00, 5),
(10, 'Carburador8', 125.00, 5),
(11, 'Carburador9', 125.00, 5),
(12, 'Carburador10', 125.00, 5),
(13, 'Carburador11', 125.00, 5),
(14, 'Carburador12', 125.00, 5),
(15, 'Carburador13', 125.00, 5),
(16, 'Carburador14', 125.00, 5),
(17, 'Carburador15', 125.00, 5),
(18, 'Carburador16', 125.00, 5),
(19, 'Carburador17', 125.00, 5),
(20, 'Carburador18', 125.00, 5),
(21, 'Carburador19', 125.00, 5),
(22, 'Carburador20', 125.00, 5),
(23, 'Carburador21', 125.00, 5),
(24, 'Carburador22', 125.00, 5);

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
(1, 'Carlos Alberto', 'carlos@gmail.com', '$2y$10$w//ZaexsOEVaoQytpW4a6eT9cW1NSFKeaKceOf/H4K7LD7HEKj/Iy', NULL, NULL);

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
(1, 'OBC 1385', 'Honda', 'Civic', 'Branca', 2012, 125652, 1),
(2, 'OBC 1386', 'Honda', 'Civic', 'Branca', 2012, 129, 2),
(3, 'OBC 1387', 'Honda', 'Civic', 'Branca', 2012, 129, 3),
(4, 'OBC 1388', 'Honda', 'Civic', 'Branca', 2012, 129, 4),
(5, 'OBC 1389', 'Honda', 'Civic', 'Branca', 2012, 129, 5),
(6, 'OBC 1320', 'Honda', 'Civic', 'Branca', 2012, 129, 6),
(7, 'OBC 1321', 'Honda', 'Civic', 'Branca', 2012, 129, 7),
(8, 'OBC 1322', 'Honda', 'Civic', 'Branca', 2012, 129, 8),
(9, 'OBC 1323', 'Honda', 'Civic', 'Branca', 2012, 129, 9),
(10, 'OBC 1324', 'Honda', 'Civic', 'Branca', 2012, 129, 10),
(11, 'OBC 1325', 'Honda', 'Civic', 'Branca', 2012, 129, 11),
(12, 'OBC 1326', 'Honda', 'Civic', 'Branca', 2012, 129, 12),
(13, 'OBC 1327', 'Honda', 'Civic', 'Branca', 2012, 129, 13),
(14, 'OBC 1328', 'Honda', 'Civic', 'Branca', 2012, 129, 14),
(15, 'OBC 1329', 'Honda', 'Civic', 'Branca', 2012, 129, 15),
(16, 'OBC 1330', 'Honda', 'Civic', 'Branca', 2012, 129, 16),
(17, 'OBC 1331', 'Honda', 'Civic', 'Branca', 2012, 129, 17),
(18, 'OBC 1332', 'Honda', 'Civic', 'Branca', 2012, 129, 18),
(19, 'OBC 1333', 'Honda', 'Civic', 'Branca', 2012, 129, 19),
(20, 'OBC 1334', 'Honda', 'Civic', 'Branca', 2012, 129, 20),
(21, 'OBC 1335', 'Honda', 'Civic', 'Branca', 2012, 129, 21),
(22, 'OBC 1336', 'Honda', 'Civic', 'Branca', 2012, 129, 22),
(23, 'OBC 1337', 'Honda', 'Civic', 'Branca', 2012, 129, 23),
(24, 'OBC 1338', 'Honda', 'Civic', 'Branca', 2012, 129, 24);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE SET NULL;

--
-- Limitadores para a tabela `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
