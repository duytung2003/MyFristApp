-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 02, 2018 lúc 09:57 AM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `productdb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `CatID` int(11) NOT NULL,
  `CatName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`CatID`, `CatName`) VALUES
(1, 'Clothes'),
(2, 'Pant'),
(3, 'Accessories'),
(4, 'Favorite');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ProID` int(11) NOT NULL,
  `ProName` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `descrip` varchar(100) DEFAULT NULL,
  `Price` varchar(11) DEFAULT NULL,
  `subcatID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ProID`, `ProName`, `image`, `descrip`, `Price`, `subcatID`) VALUES
(2, 'White Shirt', 'img/SM2.jpg', 'Elegant style is best for you', '31,99USD', 1),
(3, 'Short-sleeved Shirt', 'img/SM3.jpg', 'Young and Elegant', '31,99USD', 1),
(4, 'Orange Shirt', 'img/SM4.jpg', 'Best choice for people', '22,99USD', 1),
(5, 'Green Shirt', 'img/P1.jpg', 'The new shirt for men', '15,99USD', 2),
(6, 'Black Shirt', 'img/P2.jpg', 'Style of the Year', '15,99USD', 2),
(8, 'Black Shirt with neck', 'img/P4.jpg', 'Hot new arrival', '15,99USD', 2),
(9, 'Gray Vest', 'img/V1.jpg', 'Back to december', '79,99USD', 3),
(10, 'Black Vest', 'img/V2.jpg', 'Holding here with me', '79,99USD', 3),
(12, 'Black Coat', 'img/MT1.jpg', 'Elegant', '49,99USD', 4),
(13, 'Gray Coat', 'img/MT2.jpg', 'Polite', '49.99USD', 4),
(14, 'Blue Light Jean', 'img/J1.jpg', 'Young Jean', '19,99USD', 5),
(15, 'Blue Jean', 'img/J2.jpg', 'Clean Jean', '19,99USD', 5),
(16, 'Black Jean', 'img/J3.jpg', 'New arrival Jean', '19,99USD', 5),
(17, 'Gray', 'img/T1.jpg', 'Beautiful', '16,99USD', 6),
(18, 'Black', 'img/T2.jpg', 'Elegant for gentle', '17,99USD', 6),
(19, 'Blue', 'img/T3.jpg', 'Best choice for man', '16,99USD', 6),
(20, 'Blue Short', 'img/S1.jpg', 'Young man', '15,99USD', 7),
(21, 'Black Short', 'img/S2.jpg', 'Nice man', '15,99USD', 7),
(22, 'Yellow Short', 'img/S3.jpg', 'For your familly', '15,99USD', 7),
(23, 'Black Tie', 'img/Tie1.jpg', 'Beautiful', '7,99USD', 8),
(24, 'Blue Yie', 'img/Tie2.jpg', 'New Style', '7,99USD', 8),
(25, 'Classic', 'img/SG1.jpg', 'Professional', '9,99USD', 9),
(26, 'Gentle', 'img/SG2.jpg', 'New arrival coming with you', '9,99USD', 9),
(27, 'Gray Wallet', 'img/VD1.jpg', 'Save your money here', '7,99USD', 10),
(28, 'Brow Wallet', 'img/VD2.jpg', 'Your money never gone', '7,99USD', 10),
(29, 'Silver', 'img/B1.jpg', 'Good appearance', '7,99USD', 11),
(30, 'Golden', 'img/B2.jpg', 'You look God', '7,99USD', 11),
(31, 'Spring-Summer Favorite 1', 'img/BST1.jpg', 'Out of the box', '149,99USD', 12),
(32, 'Spring-Summer Favorite 2', 'img/BST2.jpg', 'The Dream', '149,99USD', 12),
(33, 'Fall-Winter Favorite 1', 'img/BST3.jpg', 'My way of style', '149,99USD', 13),
(34, 'Fall-Winter Favorite 2', 'img/BST4.jpg', 'Open Space', '149,99USD', 13),
(42, 'Black Shirt', 'img/SM1.jpg', 'Good', '23,99USD', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subcat`
--

CREATE TABLE `subcat` (
  `subcatID` int(11) NOT NULL,
  `subcatname` varchar(100) DEFAULT NULL,
  `CatID` int(11) DEFAULT NULL,
  `subphp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `subcat`
--

INSERT INTO `subcat` (`subcatID`, `subcatname`, `CatID`, `subphp`) VALUES
(1, 'Shirts', 1, 'Shirt.php'),
(2, 'T-Shirt', 1, 'T-Shirt.php'),
(3, 'Vest', 1, 'Vest.php'),
(4, 'OverCoat', 1, 'OverCoat.php'),
(5, 'Jeans', 2, 'Jeans.php'),
(6, 'Trouser', 2, 'Trouser.php'),
(7, 'Short', 2, 'Short.php'),
(8, 'Tie', 3, 'Tie.php'),
(9, 'SunGlasses', 3, 'SunGlasses.php'),
(10, 'Wallet', 3, 'Wallet.php'),
(11, 'Belt', 3, 'Belt.php'),
(12, 'Spring-Summer', 4, 'Spring-Summer.php'),
(13, 'Fall-Winter', 4, 'Fall-Winter.php');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CatID`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProID`);

--
-- Chỉ mục cho bảng `subcat`
--
ALTER TABLE `subcat`
  ADD PRIMARY KEY (`subcatID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `CatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ProID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `subcat`
--
ALTER TABLE `subcat`
  MODIFY `subcatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
