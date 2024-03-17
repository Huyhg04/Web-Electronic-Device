-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 13, 2023 at 02:45 PM
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
-- Database: `data_asmgd2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int NOT NULL,
  `product_id` int DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` decimal(10,2) DEFAULT NULL,
  `quantity` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `madm` int NOT NULL,
  `tendm` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soluongsp` int NOT NULL,
  `hienthi` int NOT NULL COMMENT '1 là hiển thị ở trang chủ, 0 là không hiện ở trang chủ	'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`madm`, `tendm`, `mota`, `soluongsp`, `hienthi`) VALUES
(1, 'Iphone', 'Mua Iphone đi', 100, 1),
(2, 'Ipad', 'Samsung này xịn lắm', 59, 1),
(3, 'MacBook', 'Redmi này xịn lắm', 200, 1),
(4, 'Apple Watch', 'Mua xiaomi rẻ đi', 1000, 1),
(5, 'Airprods', 'Mua xiaomi rẻ đi', 1000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `masp` int NOT NULL,
  `tensp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gia` int DEFAULT NULL,
  `giakhuyenmai` int DEFAULT NULL,
  `mota` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `soluong` int DEFAULT NULL,
  `anh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `madm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`masp`, `tensp`, `gia`, `giakhuyenmai`, `mota`, `soluong`, `anh`, `madm`) VALUES
(7, 'Iphone 12 Promax', 30000000, 10000, '', NULL, 'assets/img/iphone12.webp', 1),
(18, 'Iphone 13 Promax', 30000, 100000, 'Iphone 13 ProMax', NULL, 'assets/img/iphone13.webp', 1),
(20, 'Iphone 14 ProMax', 30000, 30000, 'Iphone 14 ProMax', NULL, 'assets/img/iphone14.webp', 1),
(21, 'Iphone 15 ProMax', 30000, 30000, 'Iphone 15 ProMax', NULL, 'assets/img/iphone15.webp', 1),
(22, 'Ipad Pro 10', 13000000, 10000000, 'Ipad Pro 10', NULL, 'assets/img/ipad1.jpg', 2),
(23, 'Ipad Pro 11', 13000000, 10000000, 'Ipad Pro 11', NULL, 'assets/img/ipad2.webp', 2),
(24, 'Ipad Pro 12', 13000000, 10000000, 'Ipad Pro 12', NULL, 'assets/img/ipad3.webp', 2),
(25, 'iPad Air 5 2022 10.9 inch M1 WiFi\r\n', 13000000, 10000000, 'Ipad Pro 13', NULL, 'assets/img/ipad4.webp', 2),
(26, 'Apple Watch Ultra', 13000000, 10000000, 'Apple Watch Ultra ', NULL, 'assets/img/watch1.webp', 4),
(27, 'Apple Watch Ultra', 13000000, 10000000, 'Apple Watch Ultra ', NULL, 'assets/img/watch2.webp', 4),
(28, 'Apple Watch Ultra', 13000000, 10000000, 'Apple Watch Series', NULL, 'assets/img/watch3.webp', 4),
(29, 'Apple Watch Ultra', 13000000, 10000000, 'Apple Watch Series', NULL, 'assets/img/watch4.webp', 4),
(30, 'MacBook Air 13', 13000000, 10000000, 'MacBook Air 13', NULL, 'assets/img/mac1.webp', 3),
(31, 'MacBook Air 13', 13000000, 10000000, 'MacBook Air 14', NULL, 'assets/img/mac2.webp', 3),
(32, 'MacBook Air 13', 13000000, 10000000, 'MacBook Air 15', NULL, 'assets/img/mac3.webp', 3),
(33, 'MacBook Air 13', 13000000, 10000000, 'MacBook Air 16', NULL, 'assets/img/mac4.webp', 3),
(34, 'Tai nghe AirPods Pro', 13000000, 10000000, 'Tai nghe AirPod Pro 2023', NULL, 'assets/img/airprod1.webp', 5),
(35, 'Tai nghe AirPods Pro', 13000000, 10000000, 'Tai nghe AirPod Pro 2022', NULL, 'assets/img/airprod2.webp', 5),
(36, 'Tai nghe AirPods Pro', 13000000, 10000000, 'Tai nghe AirPod 3', NULL, 'assets/img/airprod3.webp', 5),
(37, 'Tai nghe AirPods Pro', 13000000, 10000000, 'Tai nghe AirPod 2', NULL, 'assets/img/airprod4.webp', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `matk` int NOT NULL,
  `hoten` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `quyen` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'user' COMMENT 'admin hoac user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`matk`, `hoten`, `ngaysinh`, `email`, `password`, `quyen`) VALUES
(1, 'Huỳnh Gia Huy', '2023-10-03', 'admin@gmail.com', '123', 'admin'),
(2, 'Gia Huy', '2023-10-25', 'giahuy@gmail.com', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`madm`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`masp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`matk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `madm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `masp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `matk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
