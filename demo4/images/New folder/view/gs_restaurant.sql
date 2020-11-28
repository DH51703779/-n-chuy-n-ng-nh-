-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 23, 2020 lúc 01:51 PM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `gs_restaurant`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ban`
--

DROP TABLE IF EXISTS `ban`;
CREATE TABLE IF NOT EXISTS `ban` (
  `Id_ban` int(11) NOT NULL AUTO_INCREMENT,
  `id_vitri` int(11) NOT NULL,
  `number_ban` varchar(5) NOT NULL,
  `ghichu` text,
  `image` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`Id_ban`),
  KEY `id_vitri` (`id_vitri`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ban`
--

INSERT INTO `ban` (`Id_ban`, `id_vitri`, `number_ban`, `ghichu`, `image`) VALUES
(1, 2, '01', NULL, 'silde2.jpg'),
(2, 2, '02', NULL, 'slide0.jpg'),
(3, 2, '03', NULL, 'slide1.jpg'),
(4, 2, '04', NULL, 'slide3.jpg'),
(5, 2, '05', NULL, 'restaurant-691397.jpg'),
(6, 1, 'Vip1', NULL, 'Vip1.JPG'),
(7, 1, 'Vip2', NULL, 'Vip2.JPG'),
(8, 1, 'Vip3', NULL, 'Vip3.JPG'),
(9, 1, 'Vip5', NULL, 'Vip5.JPG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

DROP TABLE IF EXISTS `dichvu`;
CREATE TABLE IF NOT EXISTS `dichvu` (
  `id_dichvu` int(11) NOT NULL AUTO_INCREMENT,
  `Name_dichvu` varchar(50) NOT NULL,
  `Gia_dichvu` double NOT NULL,
  `ghichu` text,
  PRIMARY KEY (`id_dichvu`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `dichvu`
--

INSERT INTO `dichvu` (`id_dichvu`, `Name_dichvu`, `Gia_dichvu`, `ghichu`) VALUES
(1, 'Trang trí ', 0, NULL),
(2, 'Karaoke', 500000, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hopdong`
--

DROP TABLE IF EXISTS `hopdong`;
CREATE TABLE IF NOT EXISTS `hopdong` (
  `ID_hopdong` int(11) NOT NULL AUTO_INCREMENT,
  `Sodienthoai` double NOT NULL,
  `date` date NOT NULL,
  `time_star` time NOT NULL,
  `time_end` time NOT NULL,
  `id_ban` int(11) NOT NULL,
  `id_dichvu` int(11) NOT NULL,
  `id_km` int(11) NOT NULL,
  `id_mon` bigint(11) NOT NULL,
  PRIMARY KEY (`ID_hopdong`),
  KEY `Sodienthoai` (`Sodienthoai`),
  KEY `id_ban` (`id_ban`),
  KEY `id_mon` (`id_mon`),
  KEY `id_dichvu` (`id_dichvu`),
  KEY `id_khuyenmai` (`id_km`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

DROP TABLE IF EXISTS `khach_hang`;
CREATE TABLE IF NOT EXISTS `khach_hang` (
  `Sodienthoai` double NOT NULL,
  `Name_khachhang` varchar(255) NOT NULL,
  `gioitinh` int(1) NOT NULL,
  `solandat` int(11) DEFAULT NULL,
  `ghichu` text,
  PRIMARY KEY (`Sodienthoai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`Sodienthoai`, `Name_khachhang`, `gioitinh`, `solandat`, `ghichu`) VALUES
(332004469, 'Nguyễn Thanh Ngân', 1, 5, NULL),
(585003265, 'Ngân Thanh Nguyễn', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

DROP TABLE IF EXISTS `khuyenmai`;
CREATE TABLE IF NOT EXISTS `khuyenmai` (
  `id_km` int(11) NOT NULL AUTO_INCREMENT,
  `name_km` varchar(300) CHARACTER SET utf8mb4 NOT NULL,
  `time_star` date NOT NULL,
  `time_end` date NOT NULL,
  `discout` double DEFAULT NULL,
  `ghichu` text,
  `images` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_km`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_mon`
--

DROP TABLE IF EXISTS `loai_mon`;
CREATE TABLE IF NOT EXISTS `loai_mon` (
  `id_loai` int(11) NOT NULL AUTO_INCREMENT,
  `name_loai` varchar(255) NOT NULL,
  `ghichu` text NOT NULL,
  PRIMARY KEY (`id_loai`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai_mon`
--

INSERT INTO `loai_mon` (`id_loai`, `name_loai`, `ghichu`) VALUES
(10, 'Khai vá»‹', ''),
(11, 'Heo', ''),
(12, 'BÃ²', ''),
(13, 'GÃ ', ''),
(14, 'cÆ¡m/bÃºn /mÃ¬', ''),
(15, 'Láº©u', ''),
(16, 'TrÃ¡ng miá»‡ng', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monan`
--

DROP TABLE IF EXISTS `monan`;
CREATE TABLE IF NOT EXISTS `monan` (
  `id_mon` bigint(20) NOT NULL AUTO_INCREMENT,
  `name_mon` varchar(300) NOT NULL,
  `id_loai` int(11) NOT NULL,
  `gia_mon` double NOT NULL,
  `ghichu_mon` text,
  `images` varchar(300) DEFAULT NULL,
  `tinhtrang` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_mon`),
  KEY `id_loai` (`id_loai`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `monan`
--

INSERT INTO `monan` (`id_mon`, `name_mon`, `id_loai`, `gia_mon`, `ghichu_mon`, `images`, `tinhtrang`) VALUES
(48, 'Thá»‹t heo nÆ°á»›ng ', 11, 1000, '', 'f5bf17632c.jpg', 1),
(49, 'há»§ tiáº¿u Ã¡p cháº£o ', 14, 1000, '', '14b5d07e78.jpg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_admin`
--

DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `Name_admin` varchar(255) NOT NULL,
  `adminuser` varchar(155) NOT NULL,
  `adminpass` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `Name_admin`, `adminuser`, `adminpass`, `level`) VALUES
(1, 'Ngan', 'Ngan', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vitri`
--

DROP TABLE IF EXISTS `vitri`;
CREATE TABLE IF NOT EXISTS `vitri` (
  `id_vitri` int(11) NOT NULL AUTO_INCREMENT,
  `Name_vitri` varchar(5) NOT NULL,
  `Ghichu` text,
  `image` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_vitri`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `vitri`
--

INSERT INTO `vitri` (`id_vitri`, `Name_vitri`, `Ghichu`, `image`) VALUES
(1, 'Vip', NULL, 'Vip3.JPG'),
(2, 'Sảnh ', NULL, 'silde2.jpg');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ban`
--
ALTER TABLE `ban`
  ADD CONSTRAINT `ban_ibfk_1` FOREIGN KEY (`id_vitri`) REFERENCES `vitri` (`id_vitri`);

--
-- Các ràng buộc cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  ADD CONSTRAINT `hopdong_ibfk_1` FOREIGN KEY (`Sodienthoai`) REFERENCES `khach_hang` (`Sodienthoai`),
  ADD CONSTRAINT `hopdong_ibfk_2` FOREIGN KEY (`id_ban`) REFERENCES `ban` (`Id_ban`),
  ADD CONSTRAINT `hopdong_ibfk_3` FOREIGN KEY (`id_mon`) REFERENCES `monan` (`id_mon`),
  ADD CONSTRAINT `hopdong_ibfk_4` FOREIGN KEY (`id_dichvu`) REFERENCES `dichvu` (`id_dichvu`),
  ADD CONSTRAINT `hopdong_ibfk_5` FOREIGN KEY (`id_km`) REFERENCES `khuyenmai` (`id_km`);

--
-- Các ràng buộc cho bảng `monan`
--
ALTER TABLE `monan`
  ADD CONSTRAINT `monan_ibfk_1` FOREIGN KEY (`id_loai`) REFERENCES `loai_mon` (`id_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
