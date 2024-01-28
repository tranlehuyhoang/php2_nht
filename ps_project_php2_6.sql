-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th1 28, 2024 lúc 09:05 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ps_project_php2_6`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ps_cart`
--

CREATE TABLE `ps_cart` (
  `id` int NOT NULL,
  `id_billcart` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `id_product` int DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` int DEFAULT NULL,
  `date_created` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ps_category`
--

CREATE TABLE `ps_category` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_created` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ps_category`
--

INSERT INTO `ps_category` (`id`, `name`, `slug`, `date_created`) VALUES
(1, 'abc', 'abc', ''),
(2, 'aad', 'aad', '2024-01-26 12:25:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ps_order`
--

CREATE TABLE `ps_order` (
  `id` int NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'cod, banking',
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'pending; confirm; delivering; complete; delivering fail; cancelled 	',
  `time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ps_order`
--

INSERT INTO `ps_order` (`id`, `email`, `first_name`, `last_name`, `company`, `address`, `phone`, `city`, `country`, `postal_code`, `total_price`, `payment`, `status`, `time`) VALUES
(47, 'huutai90909@gmail.com', 'tai', 'nguyen', 'NHT', 'fdgbg', 654124324, '', 'vietnam', '', NULL, 'COD', 'pending', '27-01-2024 05:01:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ps_order_detail`
--

CREATE TABLE `ps_order_detail` (
  `id` int NOT NULL,
  `order_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `product_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ps_order_detail`
--

INSERT INTO `ps_order_detail` (`id`, `order_id`, `product_id`, `quantity`, `product_price`) VALUES
(16, 47, 2, 2, '25000000'),
(17, 47, 7, 3, '5678'),
(18, 47, 8, 100, '2312'),
(19, 47, 1, 2, '15000000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ps_products`
--

CREATE TABLE `ps_products` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_desc` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `quantity` int DEFAULT NULL,
  `sale` int DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ps_products`
--

INSERT INTO `ps_products` (`id`, `name`, `price`, `short_desc`, `long_desc`, `quantity`, `sale`, `image`, `date_created`) VALUES
(1, 'Theme Wordpress ABC', '15000000', 'Theme Wordpress ABC-2023', 'Samsung Galaxy S21 là một chiếc điện thoại thông minh mạnh mẽ với camera chất lượng cao và hiệu suất ổn định.', 10000000, 0, 'nht-chat.png', '2024-01-04'),
(2, 'Template HTML HBB', '25000000', 'Template HTML HBB dfbf', 'Dell XPS 13 là chiếc laptop chuyên đồ họa và công việc nặng, với thiết kế siêu mỏng và màn hình InfinityEdge.', 30000000, 0, '812.jpg', '2024-01-05'),
(6, 'Template HTML, CSS YTUUU', '76000000', 'Template HTML HBB dfbf4455', 'Dell XPS 13 là chiếc laptop chuyên đồ họa và công việc nặng, với thiết kế siêu mỏng và màn hình InfinityEdge.', 67000000, 0, 'img19_1920x1200.png', '2024-01-05'),
(7, 'jkvjm', '5678', 'hbjbhb', '78vuyhkjhjkmv', 767587, NULL, 'imager_4_79676_700.jpg', '2024-01-19'),
(8, 'abc123', '2312', 'rtebvdfdvfẻhfbg hbestthth', '3t35rde54gse45fvfbg', 345234, NULL, '15_hinh-gif-anime-chill-gif-chill-dep-nhat.gif', '2024-01-19'),
(10, 'ddeoooommm', '3245455', 'bevrfy6hj dsvvdsddcbb', 'ưeg354g34bb5gbsdvs\r\njjjdvcakjvbakjbvrvsdvsddsccdsac', 2000, NULL, 'image5.png', '2024-01-21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ps_user`
--

CREATE TABLE `ps_user` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` int DEFAULT NULL,
  `is_admin` int NOT NULL DEFAULT '0' COMMENT '1: admin\r\n0: customer',
  `date_created` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ps_user`
--

INSERT INTO `ps_user` (`id`, `name`, `first_name`, `last_name`, `age`, `company`, `email`, `password`, `address`, `address2`, `phone`, `city`, `country`, `postal_code`, `is_admin`, `date_created`) VALUES
(1, 'nht', 'aaa', 'bb', '20', 'XDNT PHAT DAT', 'a@gmail.com', '$2y$10$QLeajlno6I16CRoVRRuNN.6Hd2GDKyP7rFfisO8HbmMtb4mIz13Ee', 'asdavasdv', 'arebdfba', '987654321', 'hcm', '', 70000, 1, ''),
(2, 'abc', '', '', '0', '', 'b@gmail.com', '$2y$10$y2FXN5PUfE6SU36isSSKBOjKIgL5fgxhxWaD5ZO5XUc1eCnjONzAO', '', '', '0', '', '', 0, 0, ''),
(3, 'ndc', '', '', '0', '', 'c@gmail.com', '$2y$10$VYkSoYnjSGFvDNom3WtB/.zqeyzG1rs.fN0hmaKH4kM6cD4vmpab.', '', '', '0', '', '', 0, 0, ''),
(5, 'ddd', '', '', '0', '', 'd@gmail.com', '$2y$10$9elR1WupfJAiS3Bi/oBGvurIB.w0W1Z2TrSk4ULiPY4U954/J3ToG', '', '', '0', '', '', 0, 0, ''),
(6, 'dddd', '', '', '0', '', 'hhh@gmail.com', '$2y$10$EdFPXn0Rlaw85CJbpUajoujWvtpGSTIx3lVr1mBDD9bzltfXIkewa', '', '', '0', '', '', 0, 0, ''),
(7, 'j', '', '', '0', '', 'j@gmail.com', '$2y$10$cpbU5UMrt/tllOijVB5w0O3opbhsR5bv8RfrR8mNIAq4r2tlFZmRG', '', '', '0', '', '', 0, 0, ''),
(8, ',sjfbv', '', '0', '5565', '', 'n@gmail.com', NULL, '', '', '0', '', '', 0, 0, ''),
(9, 'fgng', NULL, NULL, NULL, NULL, '12@gmail.com', '$2y$10$Pe/SJFLJtjzxRsWCuhBuiO7BoSAuFs7PwT904s2cKKKVXJZdHbOTm', '', NULL, '0', NULL, NULL, NULL, 0, ''),
(11, 'ggg', NULL, NULL, NULL, NULL, 'g@gmail.com', '$2y$10$M.1crdnlLKLXyoM33jIa3Olz0HSsdZi9G9bxW..7jZM2nK.dNMm.u', '', NULL, '0', NULL, NULL, NULL, 0, '22-01-2024 06:56:54'),
(12, 'nht', 'tai', 'nguyen', '20', 'NHT', 'huutai90909@gmail.com', '$2y$10$EOowQnE/p6QJcJ8wo7F5tevO96IHYAUxebgwCmFf90Pq6Dkys/Lya', '', NULL, '0', NULL, NULL, NULL, 1, '26-01-2024 07:52:01');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ps_cart`
--
ALTER TABLE `ps_cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ps_category`
--
ALTER TABLE `ps_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ps_order`
--
ALTER TABLE `ps_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ps_order_detail`
--
ALTER TABLE `ps_order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `ps_products`
--
ALTER TABLE `ps_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ps_user`
--
ALTER TABLE `ps_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ps_cart`
--
ALTER TABLE `ps_cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ps_category`
--
ALTER TABLE `ps_category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `ps_order`
--
ALTER TABLE `ps_order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `ps_order_detail`
--
ALTER TABLE `ps_order_detail`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `ps_products`
--
ALTER TABLE `ps_products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `ps_user`
--
ALTER TABLE `ps_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ps_order_detail`
--
ALTER TABLE `ps_order_detail`
  ADD CONSTRAINT `ps_order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `ps_order` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
