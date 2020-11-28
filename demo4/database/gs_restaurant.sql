-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 18, 2020 lúc 06:34 PM
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
  `id_khuyenmai` int(11) NOT NULL,
  `id_mon` bigint(11) NOT NULL,
  PRIMARY KEY (`ID_hopdong`),
  KEY `Sodienthoai` (`Sodienthoai`),
  KEY `id_ban` (`id_ban`),
  KEY `id_mon` (`id_mon`),
  KEY `id_dichvu` (`id_dichvu`),
  KEY `id_khuyenmai` (`id_khuyenmai`)
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
  `id_khuyenmai` int(11) NOT NULL AUTO_INCREMENT,
  `Name_khuyenmai` varchar(255) NOT NULL,
  `time_star` date DEFAULT NULL,
  `time_end` date DEFAULT NULL,
  `discout` double DEFAULT NULL,
  `ghichu` text,
  `image` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_khuyenmai`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`id_khuyenmai`, `Name_khuyenmai`, `time_star`, `time_end`, `discout`, `ghichu`, `image`) VALUES
(1, 'Tri ân khách hàng ', '2020-11-16', NULL, 5, NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai_mon`
--

INSERT INTO `loai_mon` (`id_loai`, `name_loai`, `ghichu`) VALUES
(1, 'Khai vị', ''),
(2, 'Heo', ''),
(3, 'Bò', ''),
(4, 'Gà', ''),
(5, 'Cá', ''),
(6, 'Cơm/Mì/Bún', ''),
(7, 'Rau', ''),
(8, 'Lẩu', ''),
(9, 'Tráng miệng', '');

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
  PRIMARY KEY (`id_mon`),
  KEY `id_loai` (`id_loai`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `monan`
--

INSERT INTO `monan` (`id_mon`, `name_mon`, `id_loai`, `gia_mon`, `ghichu_mon`, `images`) VALUES
(1, 'Khai vị 3 món', 1, 100000, NULL, 'Khaivi3mon.jpg'),
(2, 'Chả Giò', 1, 100000, NULL, 'chagio.jpg'),
(3, 'Đậu hủ chiên giòn', 1, 100000, NULL, 'dauhuchiengion.jpg'),
(4, 'Đậu hủ Tứ Xuyên', 1, 100000, NULL, 'dauhutuxuyen.jpg'),
(5, 'Gỏi ngó sen', 1, 100000, NULL, 'goingosen.jpg'),
(6, 'Gỏi bò bóp thấu', 1, 100000, NULL, 'goibobopthau.jpg'),
(19, 'Heo lên mẹt ', 2, 200000, NULL, 'Heolenmet.jpg'),
(20, 'Heo quay', 2, 200000, NULL, 'heoquay.jpg'),
(21, 'Sườn heo nướng', 2, 200000, NULL, 'suonheo.jpg'),
(22, 'Cơm xá xíu', 2, 200000, NULL, 'comxaxiu.jpg'),
(23, 'Sườn heo sốt cà', 2, 200000, NULL, 'suonheo.jpg'),
(24, 'Heo hầm', 2, 200000, NULL, 'heoham.jpg'),
(31, 'Bò nướng Y', 3, 250000, NULL, 'bonuongy.jpg'),
(32, 'Bò nướng đá', 3, 250000, NULL, 'bonuongda.jpg'),
(33, 'Bò xào đậu', 3, 250000, NULL, 'boxaodau.jpg'),
(34, 'Chả bò', 3, 250000, NULL, 'chabo.jpg'),
(35, 'Bò nướng ngũ quả', 3, 250000, NULL, 'bonuongnguqua.jpg'),
(36, 'Bò hầm', 3, 250000, NULL, 'boham.jpg\r\n'),
(37, 'Gà nướng', 4, 250000, NULL, 'ganuong.jpg'),
(38, 'Gà hầm', 4, 260000, NULL, 'gaham.jpg'),
(39, 'Trứng cá hồi', 5, 300000, NULL, 'trungcahoi.jpg'),
(40, 'Cá bống mú hấp', 5, 690000, NULL, 'cabongmu.jpg'),
(41, 'Cơm chiên LP', 6, 140000, NULL, 'comchienlocphat.jpg'),
(42, 'Hủ tíu áp chảo', 6, 140000, NULL, 'hutieuapchao'),
(43, 'Lẩu cua đồng', 8, 300000, NULL, 'laucuadong.jpg'),
(44, 'Lẩu hải sản', 8, 300000, NULL, 'lauhaisan.jpg'),
(45, 'Trái cây', 9, 80000, NULL, 'traicay1.jpg');

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
  ADD CONSTRAINT `hopdong_ibfk_5` FOREIGN KEY (`id_khuyenmai`) REFERENCES `khuyenmai` (`id_khuyenmai`);

--
-- Các ràng buộc cho bảng `monan`
--
ALTER TABLE `monan`
  ADD CONSTRAINT `monan_ibfk_1` FOREIGN KEY (`id_loai`) REFERENCES `loai_mon` (`id_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
