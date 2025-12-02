-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 02 Des 2025 pada 06.44
-- Versi server: 8.0.44-0ubuntu0.24.04.1
-- Versi PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodorder`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('info@healthybites.com|127.0.0.1', 'i:1;', 1764574964),
('info@healthybites.com|127.0.0.1:timer', 'i:1764574964;', 1764574964),
('owner@foodorder.com|127.0.0.1', 'i:1;', 1764569400),
('owner@foodorder.com|127.0.0.1:timer', 'i:1764569400;', 1764569400),
('sweet@dreamsdesserts.com|127.0.0.1', 'i:1;', 1764546943),
('sweet@dreamsdesserts.com|127.0.0.1:timer', 'i:1764546943;', 1764546943);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Indonesian', 'indonesian', 'Traditional Indonesian cuisine with rich flavors and spices', NULL, 1, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(2, 'Western', 'western', 'Western style food including burgers, steaks, and sandwiches', NULL, 1, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(3, 'Japanese', 'japanese', 'Authentic Japanese dishes including sushi, ramen, and tempura', NULL, 1, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(4, 'Chinese', 'chinese', 'Chinese cuisine with diverse regional flavors', NULL, 1, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(5, 'Desserts', 'desserts', 'Sweet treats and desserts for every occasion', NULL, 1, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(6, 'Beverages', 'beverages', 'Refreshing drinks and beverages', NULL, 1, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(7, 'Healthy', 'healthy', 'Healthy and nutritious food options', NULL, 1, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(8, 'Fast Food', 'fast-food', 'Quick and delicious fast food options', NULL, 1, '2025-11-30 15:37:15', '2025-11-30 15:37:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_categories`
--

CREATE TABLE `menu_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `restaurant_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `sort_order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint UNSIGNED NOT NULL,
  `restaurant_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_available` tinyint(1) NOT NULL DEFAULT '1',
  `preparation_time` int NOT NULL DEFAULT '15',
  `ingredients` json DEFAULT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `menu_items`
--

INSERT INTO `menu_items` (`id`, `restaurant_id`, `category_id`, `name`, `description`, `price`, `image`, `is_available`, `preparation_time`, `ingredients`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Nasi Goreng Special', 'Traditional Indonesian fried rice with chicken, shrimp, egg, and special seasoning', 35000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(2, 1, 1, 'Rendang Daging', 'Slow-cooked beef in rich coconut milk and spices, tender and flavorful', 45000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(3, 1, 1, 'Gado-Gado', 'Fresh vegetable salad with peanut sauce, served with crackers', 25000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(4, 1, 1, 'Sate Ayam', 'Chicken satay with peanut sauce, served with rice cakes', 30000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(5, 1, 6, 'Es Teh Manis', 'Sweet iced tea, refreshing traditional drink', 8000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(6, 2, 3, 'Salmon Sashimi', 'Fresh salmon slices served with wasabi and soy sauce', 85000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(7, 2, 3, 'California Roll', 'Crab stick, avocado, cucumber, and mayonnaise wrapped in seaweed and rice', 65000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(8, 2, 3, 'Tonkotsu Ramen', 'Rich pork bone broth ramen with chashu pork and soft-boiled egg', 55000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(9, 2, 3, 'Chicken Teriyaki', 'Grilled chicken glazed with sweet teriyaki sauce, served with rice', 45000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(10, 2, 3, 'Edamame', 'Steamed young soybeans with sea salt', 15000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(11, 3, 8, 'Classic Beef Burger', '100% beef patty with lettuce, tomato, onion, and special sauce', 45000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(12, 3, 8, 'Double Cheeseburger', 'Two beef patties with double cheese, bacon, and all the fixings', 65000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(13, 3, 8, 'Crispy Chicken Burger', 'Crispy fried chicken fillet with mayo and fresh vegetables', 40000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(14, 3, 8, 'French Fries', 'Golden crispy fries with your choice of seasoning', 20000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(15, 3, 6, 'Chocolate Milkshake', 'Creamy chocolate milkshake topped with whipped cream', 25000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(16, 4, 4, 'Beef Chow Mein', 'Stir-fried noodles with tender beef and fresh vegetables', 40000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(17, 4, 4, 'Dim Sum Platter', 'Assorted dim sum including shrimp dumplings and pork buns', 55000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(18, 4, 4, 'Sweet and Sour Chicken', 'Crispy chicken in tangy sweet and sour sauce', 48000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(19, 4, 4, 'Wonton Soup', 'Delicate wontons in clear chicken broth', 30000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(20, 5, 5, 'Chocolate Lava Cake', 'Warm chocolate cake with molten chocolate center, served with vanilla ice cream', 35000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(21, 5, 5, 'Tiramisu', 'Classic Italian dessert with coffee-soaked ladyfingers and mascarpone cream', 40000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(22, 5, 5, 'Ice Cream Sundae', 'Three scoops of ice cream with chocolate sauce, nuts, and cherry', 28000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(23, 5, 5, 'Fruit Tart', 'Buttery crust filled with custard and topped with fresh seasonal fruits', 32000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(24, 6, 7, 'Quinoa Salad Bowl', 'Organic quinoa with mixed greens, avocado, cherry tomatoes, and lemon dressing', 45000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(25, 6, 7, 'Grilled Chicken Wrap', 'Whole wheat wrap with grilled chicken, hummus, and fresh vegetables', 38000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(26, 6, 7, 'Acai Bowl', 'Acai berry blend topped with granola, banana, and honey', 42000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(27, 6, 6, 'Green Smoothie', 'Spinach, banana, apple, and almond milk blended to perfection', 28000.00, NULL, 1, 15, NULL, 0, '2025-11-30 15:37:15', '2025-11-30 15:37:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_11_18_142606_create_restaurants_table', 1),
(5, '2025_11_18_142804_create_categories_table', 1),
(6, '2025_11_18_142853_create_menu_items_table', 1),
(7, '2025_11_18_142949_create_orders_table', 1),
(8, '2025_11_18_143043_create_order_items_table', 1),
(9, '2025_11_26_035551_create_menu_categories_table', 1),
(10, '2025_11_30_154354_add_payment_delivery_fields_to_orders_table', 1),
(11, '2025_11_30_154642_add_customizations_to_order_items_table', 1),
(12, '2025_11_30_203114_add_payment_fields_to_orders_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','confirmed','preparing','ready','completed','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `total_amount` decimal(10,2) NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` text COLLATE utf8mb4_unicode_ci,
  `user_id` bigint UNSIGNED NOT NULL,
  `restaurant_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment_method` enum('cash','card','digital_wallet') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cash',
  `payment_status` enum('pending','paid','failed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `delivery_time` enum('asap','schedule') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'asap',
  `delivery_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `tax_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `subtotal` decimal(10,2) NOT NULL DEFAULT '0.00',
  `ordered_at` timestamp NULL DEFAULT NULL,
  `confirmed_at` timestamp NULL DEFAULT NULL,
  `preparing_at` timestamp NULL DEFAULT NULL,
  `ready_at` timestamp NULL DEFAULT NULL,
  `on_the_way_at` timestamp NULL DEFAULT NULL,
  `completed_at` timestamp NULL DEFAULT NULL,
  `customer_rating` int DEFAULT NULL,
  `customer_review` text COLLATE utf8mb4_unicode_ci,
  `reviewed_at` timestamp NULL DEFAULT NULL,
  `cancellation_reason` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `status`, `total_amount`, `notes`, `customer_name`, `customer_phone`, `customer_address`, `user_id`, `restaurant_id`, `created_at`, `updated_at`, `payment_method`, `payment_status`, `delivery_time`, `delivery_fee`, `tax_amount`, `subtotal`, `ordered_at`, `confirmed_at`, `preparing_at`, `ready_at`, `on_the_way_at`, `completed_at`, `customer_rating`, `customer_review`, `reviewed_at`, `cancellation_reason`) VALUES
(1, 'ORD1861', 'completed', 122000.00, 'Please make it less spicy', 'David Lee', '+6281234567801', 'Jl. Example No. 49, Jakarta', 8, 3, '2025-11-25 06:37:15', '2025-11-30 15:37:15', 'cash', 'pending', 'asap', 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'ORD1841', 'completed', 92000.00, 'Please make it less spicy', 'Rina Melati', '+6281234567800', 'Jl. Example No. 16, Jakarta', 7, 4, '2025-11-26 03:37:15', '2025-11-30 15:37:15', 'cash', 'pending', 'asap', 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'ORD6422', 'pending', 207000.00, NULL, 'Rina Melati', '+6281234567800', 'Jl. Example No. 7, Jakarta', 7, 5, '2025-11-26 07:37:15', '2025-11-30 15:37:15', 'cash', 'pending', 'asap', 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'ORD5574', 'preparing', 302000.00, NULL, 'Rina Melati', '+6281234567800', 'Jl. Example No. 9, Jakarta', 7, 5, '2025-11-27 03:37:15', '2025-11-30 15:37:15', 'cash', 'pending', 'asap', 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'ORD5178', 'completed', 147000.00, 'Please make it less spicy', 'Customer Demo', '+6281234567899', 'Jl. Example No. 79, Jakarta', 6, 1, '2025-11-26 03:37:15', '2025-11-30 15:37:15', 'cash', 'pending', 'asap', 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'ORD1226', 'ready', 173000.00, NULL, 'Rina Melati', '+6281234567800', 'Jl. Example No. 80, Jakarta', 7, 4, '2025-11-24 06:37:15', '2025-11-30 15:37:15', 'cash', 'pending', 'asap', 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'ORD5586', 'ready', 122000.00, NULL, 'David Lee', '+6281234567801', 'Jl. Example No. 74, Jakarta', 8, 2, '2025-11-28 07:37:15', '2025-11-30 15:37:15', 'cash', 'pending', 'asap', 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'ORD1005', 'confirmed', 441000.00, 'Please make it less spicy', 'David Lee', '+6281234567801', 'Jl. Example No. 63, Jakarta', 8, 2, '2025-11-27 02:37:15', '2025-11-30 15:37:15', 'cash', 'pending', 'asap', 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'ORD4470', 'confirmed', 88000.00, NULL, 'David Lee', '+6281234567801', 'Jl. Example No. 12, Jakarta', 8, 3, '2025-11-26 04:37:15', '2025-11-30 15:37:15', 'cash', 'pending', 'asap', 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'ORD7502', 'ready', 477000.00, 'Please make it less spicy', 'Rina Melati', '+6281234567800', 'Jl. Example No. 88, Jakarta', 7, 3, '2025-11-27 07:37:15', '2025-11-30 15:37:16', 'cash', 'pending', 'asap', 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'ORD1946', 'ready', 142000.00, NULL, 'Rina Melati', '+6281234567800', 'Jl. Example No. 17, Jakarta', 7, 3, '2025-11-26 02:37:15', '2025-11-30 15:37:16', 'cash', 'pending', 'asap', 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'ORD1272', 'completed', 70000.00, 'Please make it less spicy', 'Customer Demo', '+6281234567899', 'Jl. Example No. 12, Jakarta', 6, 5, '2025-11-25 06:37:15', '2025-11-30 16:56:28', 'cash', 'pending', 'asap', 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'ORD6800', 'pending', 207000.00, 'Please make it less spicy', 'David Lee', '+6281234567801', 'Jl. Example No. 23, Jakarta', 8, 6, '2025-11-29 17:37:15', '2025-11-30 15:37:16', 'cash', 'pending', 'asap', 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'ORD9245', 'preparing', 171000.00, NULL, 'David Lee', '+6281234567801', 'Jl. Example No. 75, Jakarta', 8, 2, '2025-11-23 10:37:15', '2025-11-30 15:37:16', 'cash', 'pending', 'asap', 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'ORD8934', 'pending', 282000.00, NULL, 'Rina Melati', '+6281234567800', 'Jl. Example No. 95, Jakarta', 7, 6, '2025-11-22 15:37:15', '2025-11-30 15:37:16', 'cash', 'pending', 'asap', 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'ORD3067', 'ready', 167000.00, NULL, 'Rina Melati', '+6281234567800', 'Jl. Example No. 90, Jakarta', 7, 1, '2025-11-26 13:37:15', '2025-11-30 15:37:16', 'cash', 'pending', 'asap', 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'ORD2073', 'confirmed', 436000.00, 'Please make it less spicy', 'Rina Melati', '+6281234567800', 'Jl. Example No. 13, Jakarta', 7, 6, '2025-11-25 14:37:15', '2025-11-30 15:37:16', 'cash', 'pending', 'asap', 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'ORD6621', 'completed', 296000.00, NULL, 'Customer Demo', '+6281234567899', 'Jl. Example No. 68, Jakarta', 6, 1, '2025-11-26 09:37:15', '2025-11-30 15:37:16', 'cash', 'pending', 'asap', 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'ORD7179', 'ready', 446000.00, 'Please make it less spicy', 'Customer Demo', '+6281234567899', 'Jl. Example No. 36, Jakarta', 6, 1, '2025-11-29 16:37:15', '2025-11-30 15:37:16', 'cash', 'pending', 'asap', 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'ORD2440', 'ready', 217000.00, NULL, 'Rina Melati', '+6281234567800', 'Jl. Example No. 27, Jakarta', 7, 2, '2025-11-25 02:37:15', '2025-11-30 15:37:16', 'cash', 'pending', 'asap', 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'ORD-20251130225134954', 'pending', 104000.00, NULL, 'Customer Demo', '+6281234567899', '123 Main Street, Apt 4B, Jakarta, 12345', 6, 2, '2025-11-30 15:51:34', '2025-11-30 15:51:34', 'cash', 'pending', 'asap', 5000.00, 9000.00, 90000.00, '2025-11-30 15:51:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'ORD-20251201073908741', 'completed', 500000.00, NULL, 'udin', '+6289673908645', '123 Main Street, Apt 4B, Jakarta, 12345', 10, 6, '2025-12-01 00:39:08', '2025-12-01 00:45:36', 'digital_wallet', 'paid', 'asap', 5000.00, 45000.00, 450000.00, '2025-12-01 00:39:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `menu_item_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customizations` json DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `order_items`
--

INSERT INTO `order_items` (`id`, `quantity`, `unit_price`, `total_price`, `order_id`, `menu_item_id`, `created_at`, `updated_at`, `customizations`) VALUES
(1, 1, 20000.00, 20000.00, 1, 14, '2025-11-25 06:37:15', '2025-11-25 06:37:15', NULL),
(2, 3, 30000.00, 90000.00, 1, 19, '2025-11-25 06:37:15', '2025-11-25 06:37:15', NULL),
(3, 1, 45000.00, 45000.00, 2, 11, '2025-11-26 03:37:15', '2025-11-26 03:37:15', NULL),
(4, 1, 35000.00, 35000.00, 2, 20, '2025-11-26 03:37:15', '2025-11-26 03:37:15', NULL),
(5, 3, 65000.00, 195000.00, 3, 12, '2025-11-26 07:37:15', '2025-11-26 07:37:15', NULL),
(6, 2, 35000.00, 70000.00, 4, 1, '2025-11-27 03:37:15', '2025-11-27 03:37:15', NULL),
(7, 2, 65000.00, 130000.00, 4, 12, '2025-11-27 03:37:15', '2025-11-27 03:37:15', NULL),
(8, 2, 45000.00, 90000.00, 4, 24, '2025-11-27 03:37:15', '2025-11-27 03:37:15', NULL),
(9, 3, 45000.00, 135000.00, 5, 11, '2025-11-26 03:37:15', '2025-11-26 03:37:15', NULL),
(10, 1, 25000.00, 25000.00, 6, 15, '2025-11-24 06:37:15', '2025-11-24 06:37:15', NULL),
(11, 2, 40000.00, 80000.00, 6, 21, '2025-11-24 06:37:15', '2025-11-24 06:37:15', NULL),
(12, 2, 28000.00, 56000.00, 6, 27, '2025-11-24 06:37:15', '2025-11-24 06:37:15', NULL),
(13, 2, 55000.00, 110000.00, 7, 17, '2025-11-28 07:37:15', '2025-11-28 07:37:15', NULL),
(14, 2, 65000.00, 130000.00, 8, 7, '2025-11-27 02:37:15', '2025-11-27 02:37:15', NULL),
(15, 1, 20000.00, 20000.00, 8, 14, '2025-11-27 02:37:15', '2025-11-27 02:37:15', NULL),
(16, 3, 48000.00, 144000.00, 8, 18, '2025-11-27 02:37:15', '2025-11-27 02:37:15', NULL),
(17, 3, 45000.00, 135000.00, 8, 24, '2025-11-27 02:37:15', '2025-11-27 02:37:15', NULL),
(18, 2, 38000.00, 76000.00, 9, 25, '2025-11-26 04:37:15', '2025-11-26 04:37:15', NULL),
(19, 1, 55000.00, 55000.00, 10, 8, '2025-11-27 07:37:15', '2025-11-27 07:37:15', NULL),
(20, 3, 45000.00, 135000.00, 10, 11, '2025-11-27 07:37:15', '2025-11-27 07:37:15', NULL),
(21, 3, 65000.00, 195000.00, 10, 12, '2025-11-27 07:37:15', '2025-11-27 07:37:15', NULL),
(22, 2, 40000.00, 80000.00, 10, 16, '2025-11-27 07:37:15', '2025-11-27 07:37:15', NULL),
(23, 2, 65000.00, 130000.00, 11, 7, '2025-11-26 02:37:15', '2025-11-26 02:37:15', NULL),
(24, 2, 15000.00, 30000.00, 12, 10, '2025-11-25 06:37:15', '2025-11-25 06:37:15', NULL),
(25, 1, 28000.00, 28000.00, 12, 27, '2025-11-25 06:37:15', '2025-11-25 06:37:15', NULL),
(26, 3, 65000.00, 195000.00, 13, 7, '2025-11-29 17:37:15', '2025-11-29 17:37:15', NULL),
(27, 3, 15000.00, 45000.00, 14, 10, '2025-11-23 10:37:15', '2025-11-23 10:37:15', NULL),
(28, 3, 38000.00, 114000.00, 14, 25, '2025-11-23 10:37:15', '2025-11-23 10:37:15', NULL),
(29, 2, 45000.00, 90000.00, 15, 2, '2025-11-22 15:37:15', '2025-11-22 15:37:15', NULL),
(30, 1, 15000.00, 15000.00, 15, 10, '2025-11-22 15:37:15', '2025-11-22 15:37:15', NULL),
(31, 3, 40000.00, 120000.00, 15, 13, '2025-11-22 15:37:15', '2025-11-22 15:37:15', NULL),
(32, 1, 45000.00, 45000.00, 15, 24, '2025-11-22 15:37:15', '2025-11-22 15:37:15', NULL),
(33, 2, 40000.00, 80000.00, 16, 13, '2025-11-26 13:37:15', '2025-11-26 13:37:15', NULL),
(34, 3, 25000.00, 75000.00, 16, 15, '2025-11-26 13:37:15', '2025-11-26 13:37:15', NULL),
(35, 3, 45000.00, 135000.00, 17, 2, '2025-11-25 14:37:15', '2025-11-25 14:37:15', NULL),
(36, 3, 45000.00, 135000.00, 17, 11, '2025-11-25 14:37:15', '2025-11-25 14:37:15', NULL),
(37, 2, 35000.00, 70000.00, 17, 20, '2025-11-25 14:37:15', '2025-11-25 14:37:15', NULL),
(38, 3, 28000.00, 84000.00, 17, 27, '2025-11-25 14:37:15', '2025-11-25 14:37:15', NULL),
(39, 2, 55000.00, 110000.00, 18, 8, '2025-11-26 09:37:15', '2025-11-26 09:37:15', NULL),
(40, 2, 45000.00, 90000.00, 18, 9, '2025-11-26 09:37:15', '2025-11-26 09:37:15', NULL),
(41, 3, 28000.00, 84000.00, 18, 22, '2025-11-26 09:37:15', '2025-11-26 09:37:15', NULL),
(42, 2, 85000.00, 170000.00, 19, 6, '2025-11-29 16:37:15', '2025-11-29 16:37:15', NULL),
(43, 1, 45000.00, 45000.00, 19, 11, '2025-11-29 16:37:15', '2025-11-29 16:37:15', NULL),
(44, 3, 45000.00, 135000.00, 19, 24, '2025-11-29 16:37:15', '2025-11-29 16:37:15', NULL),
(45, 3, 28000.00, 84000.00, 19, 27, '2025-11-29 16:37:15', '2025-11-29 16:37:15', NULL),
(46, 2, 40000.00, 80000.00, 20, 13, '2025-11-25 02:37:15', '2025-11-25 02:37:15', NULL),
(47, 2, 40000.00, 80000.00, 20, 16, '2025-11-25 02:37:15', '2025-11-25 02:37:15', NULL),
(48, 1, 45000.00, 45000.00, 20, 24, '2025-11-25 02:37:15', '2025-11-25 02:37:15', NULL),
(49, 2, 45000.00, 90000.00, 21, 9, '2025-11-30 15:51:34', '2025-11-30 15:51:34', '[]'),
(50, 10, 45000.00, 450000.00, 22, 24, '2025-12-01 00:39:08', '2025-12-01 00:39:08', '[]');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `restaurants`
--

CREATE TABLE `restaurants` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `description`, `address`, `phone`, `email`, `logo`, `cover_image`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Warung Enak', 'Authentic Indonesian cuisine with traditional recipes passed down through generations. Our dishes are made with fresh ingredients and authentic spices.', 'Jl. Sudirman No. 123, Jakarta Pusat', '+622157890123', 'info@warungenak.com', NULL, NULL, 'active', 2, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(2, 'Sushi Master', 'Premium Japanese restaurant specializing in authentic sushi, sashimi, and traditional Japanese dishes. Our chefs are trained in Tokyo.', 'Plaza Senayan Lt. 3, Jakarta Selatan', '+622157890124', 'reservation@sushimaster.com', NULL, NULL, 'active', 3, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(3, 'Burger Kingdom', 'Home of the most delicious burgers in town! We use 100% premium beef and fresh ingredients to create the perfect burger experience.', 'Jl. Thamrin No. 45, Jakarta Pusat', '+622157890125', 'order@burgerkingdom.com', NULL, NULL, 'active', 4, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(4, 'Noodle House', 'Specializing in authentic Chinese noodles and dim sum. Our handmade noodles and traditional recipes will transport you to the streets of Beijing.', 'Pondok Indah Mall Lt. 2, Jakarta Selatan', '+622157890126', 'hello@noodlehouse.com', NULL, NULL, 'active', 5, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(5, 'Sweet Dreams Desserts', 'Your favorite dessert paradise! From artisanal cakes to traditional sweets, we have everything to satisfy your sweet tooth.', 'Jl. Kemang Raya No. 78, Jakarta Selatan', '+622157890127', 'sweet@dreamsdesserts.com', NULL, NULL, 'active', 9, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(6, 'Healthy Bites', 'Nutritious and delicious healthy food options. Our menu is designed for health-conscious individuals who don\'t want to compromise on taste.', 'Jl. Gatot Subroto No. 234, Jakarta Selatan', '+622157890128', 'info@healthybites.com', NULL, NULL, 'active', 11, '2025-11-30 15:37:15', '2025-12-01 01:19:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('iWsddFWb3nhLnUIbf9lwFBOodozeuGkp8gG2jzsM', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWXVCNlhSRlM3YzRBZ2VkY2JvYWRWQ1F1Q3lDVzE4ZEdmNFNJQnFWaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1764646939);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','owner','customer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin FoodOrder', 'admin@foodorder.com', 'admin', '+6281122334455', NULL, '$2y$12$gf1OzYueyW4oqrh2zGZGcO19mbFGXsxQbLwfWCe7/UiVUEnd8wuVK', NULL, '2025-11-30 15:37:13', '2025-11-30 15:37:13'),
(2, 'Budi Santoso', 'budi@warungenak.com', 'owner', '+6281234567890', NULL, '$2y$12$agbr5HZhaO.Ki7XZlRjKZuamfCUHvlPHC6.r2FX.hTpGw2MSY6FUm', NULL, '2025-11-30 15:37:14', '2025-11-30 15:37:14'),
(3, 'Sari Wijaya', 'sari@sushimaster.com', 'owner', '+6281234567891', NULL, '$2y$12$06pYf2Lxyo4YvmJBvgTQbO/ViashrKbYwruNGvf59.TzbsMZacj3u', NULL, '2025-11-30 15:37:14', '2025-11-30 15:37:14'),
(4, 'Andi Pratama', 'andi@burgerkingdom.com', 'owner', '+6281234567892', NULL, '$2y$12$H4guAVwHkSmEM5xDgUO6qepH06Kni2uM5CG/.3L9uEO6bjgIm8GG.', NULL, '2025-11-30 15:37:14', '2025-11-30 15:37:14'),
(5, 'Lisa Handayani', 'lisa@noodlehouse.com', 'owner', '+6281234567893', NULL, '$2y$12$6eqmqcmo4NaxutYSjUSqQ.2M8hfvmv57d35VOeZeGqE0s8Y/t4J5K', NULL, '2025-11-30 15:37:14', '2025-11-30 15:37:14'),
(6, 'Customer Demo', 'customer@foodorder.com', 'customer', '+6281234567899', NULL, '$2y$12$u3btAn8e7WM6fMpei3zHK.CJiPmtEH1JYF/.Ea3/BABWmnioDcf8O', NULL, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(7, 'Rina Melati', 'rina@example.com', 'customer', '+6281234567800', NULL, '$2y$12$PR7/tORdeh9.8kE12AJYeeH180zAjh2rhMOKj4nC80nNvEvbNZe7K', NULL, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(8, 'David Lee', 'david@example.com', 'customer', '+6281234567801', NULL, '$2y$12$Z5K5QoAgP3wwgv.VxUtBOuFRvxYWqyn8fskbAXGxUqkl1Yy/LV31q', NULL, '2025-11-30 15:37:15', '2025-11-30 15:37:15'),
(9, 'ESP32', 'swwet@dreamsdesserts.com', 'owner', '089765890786', NULL, '$2y$12$fCXEa0KditAHrP7m6K694.j2fk9HxUk/bhAeqRrKeV5rXK5VSzGzC', NULL, '2025-11-30 16:40:30', '2025-11-30 16:40:30'),
(10, 'udin', 'budiku@gmail.com', 'customer', NULL, NULL, '$2y$12$QYKrRpaY18JltVain7QiGeVmj3uQL6Ch1Y.oZUbmjrjvSeB1ufFOe', NULL, '2025-11-30 23:24:52', '2025-11-30 23:24:52'),
(11, 'nizam', 'nisamudin0407@gmail.com', 'owner', '089765890786', NULL, '$2y$12$awRQa0DXz6uqFL78wxY.cO9.TfrHNxrI/n5yR5x5sevs4e5eaKmRC', NULL, '2025-12-01 00:42:54', '2025-12-01 00:42:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu_categories`
--
ALTER TABLE `menu_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_categories_restaurant_id_foreign` (`restaurant_id`);

--
-- Indeks untuk tabel `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_restaurant_id_foreign` (`restaurant_id`),
  ADD KEY `menu_items_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_number_unique` (`order_number`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_restaurant_id_foreign` (`restaurant_id`);

--
-- Indeks untuk tabel `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_menu_item_id_foreign` (`menu_item_id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurants_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `menu_categories`
--
ALTER TABLE `menu_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `menu_categories`
--
ALTER TABLE `menu_categories`
  ADD CONSTRAINT `menu_categories_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `menu_items_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_menu_item_id_foreign` FOREIGN KEY (`menu_item_id`) REFERENCES `menu_items` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
