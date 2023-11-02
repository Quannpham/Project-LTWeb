-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 02, 2023 lúc 05:15 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bansach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qls`
--

CREATE TABLE `qls` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `images` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `qls`
--

INSERT INTO `qls` (`id`, `name`, `price`, `description`, `images`, `brand`) VALUES
(13, 'new', '9111', 'test9', '394196559_2439638576425681_6428984283520957158_n.jpg', ''),
(14, 'new', '9111', 'test9', '394196559_2439638576425681_6428984283520957158_n.jpg', ''),
(15, 'new', '9111', 'test9', '394196559_2439638576425681_6428984283520957158_n.jpg', ''),
(16, 'Minh Quân', '1111', 'ádjflk', 'anh7.jpg', 'adidas'),
(17, 'Minh Quân', '1111', 'ádjflk', 'anh7.jpg', 'adidas'),
(18, 'ManhQuan', '999', 'bbbb', 'anh6.jpg', 'test'),
(19, 'duma', '134356', 'ccccccc', 'profile4.png', 'test1'),
(23, 'pham', '1234', 'bbbbbbbbbbbb', '511.jpg', 'adidas'),
(24, '', '', '', '', ''),
(25, '', '', '', '', ''),
(26, 'netBean', '19.003.200', 'Ứng dụng lập trình', '18275cd61bcad19488db.jpg', 'Java'),
(27, 'hello world', '17.000', '', '', ''),
(28, 'hello world', '17.000', 'youtube', '387872610_733661778806057_987060849972660566_n.jpg', 'uiidv');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `qls`
--
ALTER TABLE `qls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `qls`
--
ALTER TABLE `qls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
