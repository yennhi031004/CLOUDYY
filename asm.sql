-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2024 at 07:28 AM
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
-- Database: `asm`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int NOT NULL,
  `madh` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `id_user` int NOT NULL,
  `nguoidat_ten` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `nguoidat_email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `nguoidat_tel` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `nguoidat_diachi` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `nguoinhan_ten` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `nguoinhan_diachi` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `nguoinhan_tel` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `total` int NOT NULL,
  `ship` int NOT NULL DEFAULT '0',
  `voucher` int NOT NULL DEFAULT '0',
  `tongthanhtoan` int NOT NULL,
  `pttt` tinyint(1) NOT NULL COMMENT '0: COD; 1: ck; 2: ví điện tử'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `img`) VALUES
(1, 'L\'ORÉAL', 'logo9.jpg\r\n'),
(2, 'Bioderma', 'logo10.jpg\r\n'),
(3, 'SVR', 'logo3.jpg'),
(4, 'La Roche-Posay', 'logo4.jpg'),
(5, 'Cocoon', 'logo11.jpg'),
(6, 'Eucerin', 'logo6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `sx` tinyint(1) NOT NULL DEFAULT '0',
  `idparent` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `sx`, `idparent`) VALUES
(1, 'Sửa rửa mặt ', 10, 1),
(2, 'Tẩy trang', 9, 2),
(3, 'Kem chống nắng', 8, 3),
(4, 'Tonner', 7, 4),
(5, 'Serum', 6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT '0.00',
  `price_sale` double(10,2) NOT NULL DEFAULT '0.00',
  `img` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `mota` varchar(2000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `idcatalog` int NOT NULL DEFAULT '0',
  `idbrand` int NOT NULL DEFAULT '0',
  `view` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `price_sale`, `img`, `mota`, `idcatalog`, `idbrand`, `view`) VALUES
(1, 'Nước Tẩy Trang La Roche-Posay Cho Da Dầu, Nhạy Cảm 400ml Effaclar Micellar Water Ultra Oily Skin', 495000.00, 371000.00, 'tt4.jpg\r\n', NULL, 2, 4, 200),
(2, 'Nước Cân Bằng La Roche-Posay Cho Da Thường, Nhạy Cảm 200ml\r\nSoothing Lotion Sensitive Skin', 475000.00, 380000.00, 'toner4.jpg', 'Lotion La Roche-Posay Soothing Lotion Sensitive Skin là sản phẩm chăm sóc da mặt đến từ thương hiệu dược mỹ phẩm La Roche-Posay của Pháp. Với thành phần giàu nước suối khoáng La Roche-Posay từ Pháp, giúp làm dịu làn da nhạy cảm khó chịu, đồng thời bảo vệ da và giúp chống oxy hoá cho da. Soothing Lotion sẽ giúp cân bằng lại độ pH của da sau khi rửa mặt, làm dịu cảm giác da khô, căng kéo. Bên cạnh đó, sản phẩm còn chứa thành phần Glycerin để cung cấp độ ẩm, giữ ẩm cho da, mang lại một làn da mềm mượt, mịn màng. ', 4, 4, 100),
(3, 'Gel Rửa Mặt SVR Không Chứa Xà Phòng Cho Da Dầu 400ml Sebiaclear Gel Moussant', 540000.00, 429000.00, 'srm3.jpg', 'Gel Rửa Mặt SVR Sebiaclear Gel Moussant là sản phẩm sữa rửa mặt dành cho làn da dầu mụn đến từ thương hiệu dược mỹ phẩm SVR của Pháp, với công thức không chứa xà phòng giúp làm sạch, nhẹ nhàng làm thông thoáng làn da. Khả năng tạo bọt mịn giúp loại trừ các chất bẩn và lượng bã nhờn dư thừa mà không làm khô da. Có thể rửa sạch dễ dàng, mang lại một làn da sạch, tươi mát và khô thoáng.', 1, 3, 20),
(4, 'Gel Rửa Mặt La Roche-Posay Dành Cho Da Dầu, Nhạy Cảm 400ml Effaclar Purifying Foaming Gel', 595000.00, 444000.00, 'srm8.jpg', 'Gel Rửa Mặt La Roche-Posay Effaclar Purifying Foaming Gel For Oily Sensitive Skin là dòng sản phẩm sữa rửa mặt chuyên biệt dành cho làn da dầu, mụn, nhạy cảm đến từ thương hiệu dược mỹ phẩm La Roche-Posay nổi tiếng của Pháp, với kết cấu dạng gel tạo bọt nhẹ nhàng giúp loại bỏ bụi bẩn, tạp chất và bã nhờn dư thừa trên da hiệu quả, mang đến làn da sạch mịn, thoáng nhẹ và tươi mát. Công thức sản phẩm an toàn, lành tính, giảm thiểu tình trạng kích ứng đối với làn da nhạy cảm.\r\n\r\n ', 1, 4, 50),
(5, 'Tinh Chất La Roche-Posay Giảm Mụn 3 Tác Động 30ml Effaclar Serum', 895000.00, 701000.00, 'serum4.jpg', NULL, 5, 4, 40),
(6, 'Sữa Rửa Mặt Eucerin Dịu Nhẹ Cho Da Nhạy Cảm 400ml pH5 Facial Cleanser Sensitive Skin', 279000.00, 209000.00, 'srm6.jpg', 'Sữa Rửa Mặt Eucerin PH5 Facial Cleanser Sensitive Skin là dòng sữa rửa mặt hoàn toàn mới được Eucerin thiết kế dành riêng cho làn da nhạy cảm, với độ pH5 cân bằng cùng công thức 0% thành phần gây kích ứng da, giúp làm sạch sâu và cải thiện da nhạy cảm.', 1, 6, 30),
(7, 'Nước Tẩy Trang SVR Micellar Giúp Loại Bỏ Dầu Cho Da 400ml Sebiaclear Eau Micellaire', 465000.00, 363000.00, 'tt3.jpg', NULL, 2, 3, 150),
(8, 'Serum SVR Làm Giảm Mụn, Mờ Nám, Làm Mềm Mịn Da 30ml Sebiaclear Serum', 695000.00, 553000.00, 'sr3.jpg', NULL, 5, 3, 120),
(9, 'Toner SVR Sebiaclear Dành Cho Da Dầu, Mụn 150ml\r\nSebiaclear Micro Peel', 370000.00, 278000.00, 'toner3.jpg', NULL, 4, 3, 250);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ten` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `diachi` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dienthoai` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `ten`, `diachi`, `email`, `dienthoai`, `role`) VALUES
(1, 'YenNhi', '12345', 'Nhi', '9a/l2 Hà Thị Khiêm , phường Trung Mỹ Tây,quận12', 'nhi12345@gmail.com', '0924332620', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pro_cat` (`idcatalog`),
  ADD KEY `fk_pro_brand` (`idbrand`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`id`) REFERENCES `sanpham` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_pro_brand` FOREIGN KEY (`idbrand`) REFERENCES `brand` (`id`),
  ADD CONSTRAINT `fk_pro_cat` FOREIGN KEY (`idcatalog`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
