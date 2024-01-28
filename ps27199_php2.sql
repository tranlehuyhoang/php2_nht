-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3309
-- Thời gian đã tạo: Th1 28, 2024 lúc 03:01 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ps27199_php2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ps_cart`
--

CREATE TABLE `ps_cart` (
  `id` int(11) NOT NULL,
  `id_billcart` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `date_created` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ps_category`
--

CREATE TABLE `ps_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `date_created` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ps_category`
--

INSERT INTO `ps_category` (`id`, `name`, `slug`, `date_created`) VALUES
(0, 'danh mục 1', 'abc', ''),
(1, 'danh mục 2', 'aad', '2024-01-26 12:25:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ps_order`
--

CREATE TABLE `ps_order` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `total_price` varchar(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL COMMENT 'cod, banking',
  `status` varchar(255) NOT NULL COMMENT 'pending; confirm; delivering; complete; delivering fail; cancelled 	',
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ps_order`
--

INSERT INTO `ps_order` (`id`, `email`, `first_name`, `last_name`, `company`, `address`, `phone`, `city`, `country`, `postal_code`, `total_price`, `payment`, `status`, `time`) VALUES
(48, 'a@gmail.com', 'aaa', 'bb', 'XDNT', 'asdavasdv', 987654321, 'hcm', 'vietnam', '70000', '123213', 'COD', 'pending', '28-01-2024 12:31:32'),
(49, '2509roblox@gmail.com', '123123', '123123', 'XDNT', 'asdavasdv', 987654321, 'hcm', 'vietnam', '70000', NULL, 'COD', 'pending', '28-01-2024 12:33:22'),
(50, '2509roblox@gmail.com', '123123', '123123', 'XDNT', 'asdavasdv', 987654321, 'hcm', 'vietnam', '70000', NULL, 'CODs', 'pending', '28-01-2024 13:44:22'),
(51, 'a@gmail.com', 'aaa', 'bb', 'XDNT', 'asdavasdv', 987654321, 'hcm', 'vietnam', '70000', '337550032', 'COD', 'pending', '28-01-2024 14:13:26'),
(52, 'a@gmail.com', 'aaa', 'bb', 'XDNT', 'asdavasdv', 987654321, 'hcm', 'vietnam', '70000', '15000000', 'COD', 'pending', '28-01-2024 14:34:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ps_order_detail`
--

CREATE TABLE `ps_order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `product_price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ps_order_detail`
--

INSERT INTO `ps_order_detail` (`id`, `order_id`, `product_id`, `quantity`, `product_price`) VALUES
(22, 50, 8, 16, '2312'),
(23, 50, 7, 1, '5678'),
(24, 51, 10, 104, '3245455'),
(25, 51, 7, 4, '5678'),
(26, 52, 1, 1, '15000000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ps_products`
--

CREATE TABLE `ps_products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `short_desc` longtext DEFAULT NULL,
  `long_desc` longtext DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `sale` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ps_products`
--

INSERT INTO `ps_products` (`id`, `name`, `price`, `category_id`, `short_desc`, `long_desc`, `quantity`, `sale`, `image`, `date_created`) VALUES
(1, 'Theme Wordpress ABC', '15000000', 1, 'Theme Wordpress ABC-2023', 'Samsung Galaxy S21 là một chiếc điện thoại thông minh mạnh mẽ với camera chất lượng cao và hiệu suất ổn định.', 9999999, 0, 'nht-chat.png', '2024-01-04'),
(2, 'Template HTML HBB', '25000000', 0, 'Template HTML HBB dfbf', 'Dell XPS 13 là chiếc laptop chuyên đồ họa và công việc nặng, với thiết kế siêu mỏng và màn hình InfinityEdge.', 30000000, 0, '812.jpg', '2024-01-05'),
(6, 'Template HTML, CSS YTUUU', '76000000', 0, 'Template HTML HBB dfbf4455', 'Dell XPS 13 là chiếc laptop chuyên đồ họa và công việc nặng, với thiết kế siêu mỏng và màn hình InfinityEdge.', 67000000, 0, 'img19_1920x1200.png', '2024-01-05'),
(7, 'jkvjm', '5678', 0, 'hbjbhb', '78vuyhkjhjkmv', 767587, NULL, 'imager_4_79676_700.jpg', '2024-01-19'),
(8, 'abc123', '2312', 0, 'rtebvdfdvfẻhfbg hbestthth', '3t35rde54gse45fvfbg', 345234, NULL, '15_hinh-gif-anime-chill-gif-chill-dep-nhat.gif', '2024-01-19'),
(10, 'ddeoooommm', '3245455', 0, 'bevrfy6hj dsvvdsddcbb', 'ưeg354g34bb5gbsdvs\r\njjjdvcakjvbakjbvrvsdvsddsccdsac', 2000, NULL, 'image5.png', '2024-01-21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ps_user`
--

CREATE TABLE `ps_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `is_admin` int(11) NOT NULL DEFAULT 0 COMMENT '1: admin\r\n0: customer',
  `date_created` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ps_user`
--

INSERT INTO `ps_user` (`id`, `name`, `first_name`, `last_name`, `age`, `company`, `email`, `password`, `address`, `address2`, `phone`, `city`, `country`, `postal_code`, `is_admin`, `date_created`) VALUES
(1, '1', '1', '1', '1', '1', 'a@gmail.com', '$2y$10$QLeajlno6I16CRoVRRuNN.6Hd2GDKyP7rFfisO8HbmMtb4mIz13Ee', '1', '1', '1', '1', '1', 1, 0, ''),
(2, 'abc', '', '', '0', '', 'b@gmail.com', '$2y$10$y2FXN5PUfE6SU36isSSKBOjKIgL5fgxhxWaD5ZO5XUc1eCnjONzAO', '', '', '0', '', '', 0, 0, ''),
(3, 'ndc', '', '', '0', '', 'c@gmail.com', '$2y$10$VYkSoYnjSGFvDNom3WtB/.zqeyzG1rs.fN0hmaKH4kM6cD4vmpab.', '', '', '0', '', '', 0, 0, ''),
(5, 'ddd', '', '', '0', '', 'd@gmail.com', '$2y$10$9elR1WupfJAiS3Bi/oBGvurIB.w0W1Z2TrSk4ULiPY4U954/J3ToG', '', '', '0', '', '', 0, 0, ''),
(6, 'dddd', '', '', '0', '', 'hhh@gmail.com', '$2y$10$EdFPXn0Rlaw85CJbpUajoujWvtpGSTIx3lVr1mBDD9bzltfXIkewa', '', '', '0', '', '', 0, 0, ''),
(7, 'j', '', '', '0', '', 'j@gmail.com', '$2y$10$cpbU5UMrt/tllOijVB5w0O3opbhsR5bv8RfrR8mNIAq4r2tlFZmRG', '', '', '0', '', '', 0, 0, ''),
(8, ',sjfbv', '', '0', '5565', '', 'n@gmail.com', NULL, '', '', '0', '', '', 0, 0, ''),
(9, 'fgng', NULL, NULL, NULL, NULL, '12@gmail.com', '$2y$10$Pe/SJFLJtjzxRsWCuhBuiO7BoSAuFs7PwT904s2cKKKVXJZdHbOTm', '', NULL, '0', NULL, NULL, NULL, 0, ''),
(11, 'ggg', NULL, NULL, NULL, NULL, 'g@gmail.com', '$2y$10$M.1crdnlLKLXyoM33jIa3Olz0HSsdZi9G9bxW..7jZM2nK.dNMm.u', '', NULL, '0', NULL, NULL, NULL, 0, '22-01-2024 06:56:54'),
(12, 'nht', 'tai', '1231fafe', '20', 'NHT', 'huutai90909@gmail.com', NULL, '', '', '0', '', '', 0, 1, '26-01-2024 07:52:01');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ps_category`
--
ALTER TABLE `ps_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `ps_order`
--
ALTER TABLE `ps_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `ps_order_detail`
--
ALTER TABLE `ps_order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `ps_products`
--
ALTER TABLE `ps_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `ps_user`
--
ALTER TABLE `ps_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
