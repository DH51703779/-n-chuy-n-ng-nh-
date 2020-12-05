-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 18, 2020 lúc 03:41 AM
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
-- Cấu trúc bảng cho bảng `monan`
--

DROP TABLE IF EXISTS `monan`;
CREATE TABLE IF NOT EXISTS `monan` (
  `id_mon` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_loai` int(11) NOT NULL,
  `name_mon` varchar(300) NOT NULL,
  `gia_mon` double NOT NULL,
  `ghichu_mon` text,
  `images` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_mon`),
  KEY `id_loai` (`id_loai`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `monan`
--

INSERT INTO `monan` (`id_mon`, `id_loai`, `Name_mon`, `Gia_mon`, `Ghichu_mon`, `images`) VALUES
(1, 1, 'Khai vị 3 món', 100000, NULL, 'Khaivi3mon.jpg'),
(2, 1, 'Chả Giò', 100000, NULL, 'chagio.jpg'),
(3, 1, 'Đậu hủ chiên giòn', 100000, NULL, 'dauhuchiengion.jpg'),
(4, 1, 'Đậu hủ Tứ Xuyên', 100000, NULL, 'dauhutuxuyen.jpg'),
(5, 1, 'Gỏi ngó sen', 100000, NULL, 'goingosen.jpg'),
(6, 1, 'Gỏi bò bóp thấu', 100000, NULL, 'goibobopthau.jpg'),
(19, 2, 'Heo lên mẹt ', 200000, NULL, 'Heolenmet.jpg'),
(20, 2, 'Heo quay', 200000, NULL, 'heoquay.jpg'),
(21, 2, 'Sườn heo nướng', 200000, NULL, 'suonheo.jpg'),
(22, 2, 'Cơm xá xíu', 200000, NULL, 'comxaxiu.jpg'),
(23, 2, 'Sườn heo sốt cà', 200000, NULL, 'suonheo.jpg'),
(24, 2, 'Heo hầm', 200000, NULL, 'heoham.jpg'),
(31, 3, 'Bò nướng Y', 250000, NULL, 'bonuongy.jpg'),
(32, 3, 'Bò nướng đá', 250000, NULL, 'bonuongda.jpg'),
(33, 3, 'Bò xào đậu', 250000, NULL, 'boxaodau.jpg'),
(34, 3, 'Chả bò', 250000, NULL, 'chabo.jpg'),
(35, 3, 'Bò nướng ngũ quả', 250000, NULL, 'bonuongnguqua.jpg'),
(36, 3, 'Bò hầm', 250000, NULL, 'boham.jpg\r\n'),
(37, 4, 'Gà nướng', 250000, NULL, 'ganuong.jpg'),
(38, 4, 'Gà hầm', 260000, NULL, 'gaham.jpg'),
(39, 5, 'Trứng cá hồi', 300000, NULL, 'trungcahoi.jpg'),
(40, 5, 'Cá bống mú hấp', 690000, NULL, 'cabongmu.jpg'),
(41, 6, 'Cơm chiên LP', 140000, NULL, 'comchienlocphat.jpg'),
(42, 6, 'Hủ tíu áp chảo', 140000, NULL, 'hutieuapchao'),
(43, 8, 'Lẩu cua đồng', 300000, NULL, 'laucuadong.jpg'),
(44, 8, 'Lẩu hải sản', 300000, NULL, 'lauhaisan.jpg'),
(45, 9, 'Trái cây', 80000, NULL, 'traicay1.jpg'),
(46, 9, 'Rau câu ', 100000, NULL, 'Raucau2.jpg');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `monan`
--
ALTER TABLE `monan`
  ADD CONSTRAINT `monan_ibfk_1` FOREIGN KEY (`id_loai`) REFERENCES `loai_mon` (`id_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
