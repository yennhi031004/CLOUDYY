-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 19, 2024 lúc 11:14 AM
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
-- Cơ sở dữ liệu: `ass`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `madh` varchar(250) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `dienthoai` varchar(20) NOT NULL,
  `diachi` varchar(250) NOT NULL,
  `pttt` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` int(12) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'Now SaiGon'),
(2, 'Black and White'),
(3, 'Hanara'),
(4, 'Kenta Mia');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(12) NOT NULL,
  `iduser` int(12) NOT NULL,
  `idpro` int(12) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'Áo thun'),
(2, 'Áo polo'),
(3, 'Áo tay dài');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `price` double(10,2) NOT NULL,
  `mota` varchar(250) NOT NULL,
  `view` int(10) NOT NULL,
  `iddm` int(11) NOT NULL,
  `idbrands` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `img`, `price`, `mota`, `view`, `iddm`, `idbrands`) VALUES
(1, 'Long Tee', 'a1.webp', 270000.00, 'ao dai tay', 320, 3, 3),
(2, 'Unives Hat', 'a2.webp', 120000.00, 'ao tee', 310, 1, 4),
(3, 'Cotton Oversize', 'a3.webp', 230000.00, 'aao thun', 21, 1, 4),
(4, 'Raglan Unisex', 'a4.webp', 310000.00, 'ao thun', 100, 1, 1),
(5, 'Sox Naige', 'a5.webp', 110000.00, 'ao thun soc ngang', 130, 1, 2),
(6, 'Unisex Henki', 'a6.webp', 240000.00, 'ao thun unisex', 220, 1, 4),
(7, 'Wash Kenta', 'a7.webp', 170000.00, 'ao thun mau nau', 37, 1, 1),
(8, 'Unisex Kentai', 'a8.webp', 150000.00, '', 100, 1, 3),
(9, 'Hana Otaki', 'a9.webp', 190000.00, 'ao thun', 140, 1, 2),
(10, 'Vest Line', 'a10.webp', 510000.00, 'ao vest', 220, 3, 1),
(11, 'Cotru Sommi', 'a11.webp', 190000.00, 'so mi co tru', 72, 3, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `diachi` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `dienthoai` varchar(20) NOT NULL,
  `quyen` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `diachi`, `email`, `dienthoai`, `quyen`) VALUES
(1, 'Nguyệt', '12022004', '47/10C Tô Ký', 'phungthiminhnguyet120204@gmail.com', '0374842834', 0),
(2, 'Minh', '120204', '175/30/2 Tăng Nhơn Phú B', 'phungthiminhnguyet337@gmail.com', '0396733639', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bill_user` (`id_user`),
  ADD KEY `fk_bill_product` (`id_pro`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comments_users` (`iduser`),
  ADD KEY `fk_comments_pro` (`idpro`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pro_dm` (`iddm`),
  ADD KEY `fk_product_brands` (`idbrands`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `fk_bill_product` FOREIGN KEY (`id_pro`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `fk_bill_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_pro` FOREIGN KEY (`idpro`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `fk_comments_users` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_pro_dm` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`),
  ADD CONSTRAINT `fk_product_brands` FOREIGN KEY (`idbrands`) REFERENCES `brands` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
