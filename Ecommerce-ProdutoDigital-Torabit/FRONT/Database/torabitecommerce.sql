-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31-Jul-2019 às 16:01
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `torabitecommerce`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$q2uY9p7h/tVeqIHgOdwO7.FIzgMG7M6JXPMSfUqfIAAbxPTt6s/wu', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_clientes`
--

CREATE TABLE `adm_clientes` (
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `contato` bigint(20) NOT NULL,
  `cep` bigint(20) NOT NULL,
  `endereco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` bigint(20) NOT NULL,
  `complemento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dashbords`
--

CREATE TABLE `dashbords` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `contato` bigint(20) NOT NULL,
  `cep` bigint(20) NOT NULL,
  `endereco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` bigint(20) NOT NULL,
  `complemento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_26_141807_usuarios', 1),
(4, '2019_06_26_144658_produtos', 1),
(5, '2019_07_01_174347_pedidos', 1),
(6, '2019_07_10_134952_pagamento', 1),
(7, '2019_07_16_214829_create_admins_table', 1),
(8, '2019_07_18_141534_create_adm_clientes_table', 1),
(9, '2019_07_20_194246_create_dashbords_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `produto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plano` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `numeroCartao` bigint(20) NOT NULL,
  `nomeCartao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataValidade` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bill_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `imagem`, `descricao`, `preco`, `created_at`, `updated_at`) VALUES
(1, 'Produto2', 'imagens/foto.png', 'este é o preoduto 2', 345, '2019-07-31 15:48:37', '2019-07-31 15:48:37'),
(2, 'Produto3', 'imagens/foto.png', 'este é o preoduto 3', 25, '2019-07-31 15:49:03', '2019-07-31 15:49:03'),
(3, 'Produto 5', 'imagens/foto.png', 'este é o preoduto 5', 300, '2019-07-31 15:49:28', '2019-07-31 15:49:28'),
(4, 'Produto 6', 'C:\\xampp\\tmp\\phpB53A.tmp', 'este é o preoduto 6', 400, '2019-07-31 15:50:03', '2019-07-31 15:50:32'),
(5, 'Produto7', 'imagens/foto.png', 'este é o preoduto 7', 900, '2019-07-31 16:08:29', '2019-07-31 16:08:29'),
(6, 'Produto 8', 'imagens/foto.png', 'este é o preoduto 8', 789, '2019-07-31 16:09:02', '2019-07-31 16:09:02'),
(7, 'Produto9', 'imagens/foto.png', 'este é o preoduto 9', 567, '2019-07-31 16:09:18', '2019-07-31 16:09:18'),
(8, 'Produto10', 'imagens/foto.png', 'este é o preoduto 10', 10, '2019-07-31 16:09:41', '2019-07-31 16:09:41'),
(9, 'Produto 11', 'imagens/foto.png', 'este é o preoduto 11', 11, '2019-07-31 16:09:55', '2019-07-31 16:09:55'),
(11, 'Produto3', 'imagens/chave.png', 'desc', 32, '2019-07-31 16:35:33', '2019-07-31 16:35:33'),
(12, 'testeimg', 'logotwrosacadastro.png', 'teste', 123, '2019-07-31 16:53:45', '2019-07-31 16:53:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `contato` bigint(20) NOT NULL,
  `cep` bigint(20) NOT NULL,
  `endereco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` bigint(20) NOT NULL,
  `complemento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `cpf`, `contato`, `cep`, `endereco`, `numero`, `complemento`, `cidade`, `estado`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Caique', 'caiqueubasp@gmail.com', NULL, '$2y$10$1e/t/YmUZVct/Aofdov77eeKM.zmI8HRGUcfRZVM4PB4vpwHka.Di', 12345678901, 1122314681, 2441001, 'Av Rua de baixo com a rua de cima', 0, 'atrás da casa do fulano', 'sao paulo', 'sp', NULL, '2019-07-31 15:32:38', '2019-07-31 15:32:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `senha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `adm_clientes`
--
ALTER TABLE `adm_clientes`
  ADD UNIQUE KEY `adm_clientes_email_unique` (`email`);

--
-- Indexes for table `dashbords`
--
ALTER TABLE `dashbords`
  ADD UNIQUE KEY `dashbords_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pagamento_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `usuarios_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD CONSTRAINT `pagamento_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
