-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 28, 2022 lúc 02:07 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nienluan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminEmail` varchar(150) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `level` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`) VALUES
(1, 'Khánh Nguyễn', 'khanhb1909929@student.ctu.edu.vn', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 0),
(2, 'KhanhB1909929', 'khanhb1909929@student.ctu.edu.vn', 'khanhb1909929', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `sId` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartId`, `productId`, `sId`, `productName`, `price`, `quantity`, `image`) VALUES
(53, 6, 's3vreidc74iojdvkro84uqkmkd', 'Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10          ', '30990000', 5, '4041d9b4fd.jpg'),
(55, 5, 's3vreidc74iojdvkro84uqkmkd', 'San pham 1', '20000000', 8, 'ae36a19ea6.jpg'),
(61, 6, 'mc3p961jrqbd0lndmeblm2pg9t', 'Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10          ', '30990000', 1, '4041d9b4fd.jpg'),
(71, 6, '5gqll7m12mttkpg17ldu245fp8', 'Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10          ', '30990000', 1, '4041d9b4fd.jpg'),
(75, 6, 'ub6tktsb2idrb7htj2k15ge57s', 'Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10          ', '30990000', 2, '4041d9b4fd.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`) VALUES
(10, 'Laptop'),
(11, 'Macbook'),
(12, 'Máy tính bàn'),
(14, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `date_order` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `productId`, `productName`, `userId`, `quantity`, `price`, `date_order`, `status`) VALUES
(14, 6, 'Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10          ', 2, '3', '92970000', '2022-04-27 07:37:43', 1),
(15, 6, 'Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10          ', 2, '2', '61980000', '2022-04-27 07:39:04', 1),
(16, 6, 'Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10          ', 2, '1', '30990000', '2022-04-27 07:40:36', 1),
(17, 5, 'San pham 1', 1, '2', '40000000', '2022-04-27 09:19:00', 1),
(18, 6, 'Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10          ', 2, '22', '681780000', '2022-04-27 11:00:46', 1),
(19, 5, 'San pham 1', 2, '1', '20000000', '2022-04-27 11:00:46', 1),
(20, 6, 'Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10          ', 2, '1', '30990000', '2022-04-27 11:00:53', 1),
(21, 6, 'Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10          ', 2, '1', '30990000', '2022-04-27 11:02:18', 1),
(22, 6, 'Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10          ', 2, '1', '30990000', '2022-04-27 11:02:26', 1),
(23, 5, 'San pham 1', 2, '1', '20000000', '2022-04-27 11:03:06', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `productName` tinytext NOT NULL,
  `catId` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `productDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `catId`, `image`, `price`, `quantity`, `productDesc`) VALUES
(2, 'Nitro 5', 12, '2dd76c96de.jpg', '20000000', 30, 'Khong co mo ta nao het'),
(5, 'San pham 1', 14, 'ae36a19ea6.jpg', '20000000', 4, 'asd'),
(6, 'Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10          ', 10, '4041d9b4fd.jpg', '30990000', 20, 'Khong co mo ta');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userId` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `sex` int(11) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `tinh` varchar(255) NOT NULL,
  `quan` varchar(255) NOT NULL,
  `phuong` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`userId`, `fullName`, `Email`, `password`, `phone`, `sex`, `diachi`, `tinh`, `quan`, `phuong`) VALUES
(1, '', 'me@example.com', 'e10adc3949ba59abbe56e057f20f883e', '', 0, '', '', '', ''),
(2, 'Nguyen Minh Khanh123', 'khanhnguyn123456@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '0784432140', 0, '', 'Can Tho', 'Binh Thuy', 'Binh Thuy');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
