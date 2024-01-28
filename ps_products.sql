-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th1 28, 2024 lúc 09:06 AM
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

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ps_products`
--
ALTER TABLE `ps_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ps_products`
--
ALTER TABLE `ps_products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
