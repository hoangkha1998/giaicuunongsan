-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 09, 2019 lúc 04:55 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `giai_cuu_nong_san`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `ma_dh` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `ma_bai_dang` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nd` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `ten_sp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `so_luong` decimal(10,0) NOT NULL,
  `tong_tien` decimal(10,0) NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dat` date NOT NULL,
  `ngay_giao` date NOT NULL,
  `trang_thai` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`ma_dh`, `ma_bai_dang`, `ma_nd`, `ten_sp`, `so_luong`, `tong_tien`, `ho_ten`, `dia_chi`, `ngay_dat`, `ngay_giao`, `trang_thai`) VALUES
('DH0004', 'BD0001', 'ND0001', 'Dưa hấu Quảng Nam ', '3', '15000', 'dfdf', 'dfdf', '2019-05-07', '2019-05-15', '0'),
('DH0005', 'BD0001', 'ND0001', 'Dưa hấu Quảng Nam ', '2', '10000', 'Nguyễn Hoàng Kha', 'quảng Nam', '2019-05-09', '2019-05-10', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donvivanchuyen`
--

CREATE TABLE `donvivanchuyen` (
  `ma_vc` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nd` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `ten_chu_xe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(10) NOT NULL,
  `tuyen_chay` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cuoc_phi_vc` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donvivanchuyen`
--

INSERT INTO `donvivanchuyen` (`ma_vc`, `ma_nd`, `ten_chu_xe`, `sdt`, `tuyen_chay`, `cuoc_phi_vc`) VALUES
('VC0001', 'ND0001', 'Hoàng kha ', 1234567891, 'Phú Ninh - Đà Nẵng', '100000'),
('VC0002', 'ND0001', 'Hoàng Kha', 935765456, 'Phú Ninh Hội An ', '200000'),
('VC0003', 'ND0001', 'Hoàng kha', 122234, 'quảng nam đà nẵng', '122233222'),
('VC0004', 'ND0001', 'Hoàng kha', 122234, 'quảng nam đà nẵng', '122233222'),
('VC0005', 'ND0001', 'Hoàng kha', 2147483647, 'dfdfdf', '1212121'),
('VC0006', 'ND0001', 'Hoàng kha', 12221, 'sài gòn hà nội', '12234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `ma_loai` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `ten_loai` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`ma_loai`, `ten_loai`, `ghi_chu`) VALUES
('L0001', 'Dưa hấu', ''),
('L0002', 'Lúa gạo', ''),
('L0003', 'Gia súc', ''),
('L0004', 'Gia cầm', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ma_nd` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `ten_nd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(10) NOT NULL,
  `ten_dn` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `loai_nd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `xep_hang` int(1) NOT NULL,
  `trang_thai_nd` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`ma_nd`, `ten_nd`, `dia_chi`, `sdt`, `ten_dn`, `mat_khau`, `loai_nd`, `xep_hang`, `trang_thai_nd`) VALUES
('ND0001', 'Hoàng kha', 'quảng nam', 123456789, 'hoangkha', '123456', '1', 1, 1),
('ND0002', 'Nguyễn Xuân Vinh', 'Đại lộc Quảng Nam', 935765456, 'xuanvinh', '123456', '1', 1, 1),
('ND0003', 'admin', 'quang nam', 1234567891, 'admin', '123456', '2', 1, 1),
('ND0004', 'Nguyễn Văn Anh', 'Đại Lộc Quảng Nam', 905001234, 'vananh', '123456', '1', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongtienvanchuyen`
--

CREATE TABLE `phuongtienvanchuyen` (
  `id` int(4) NOT NULL,
  `ma_vc` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `ma_bai_dang` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_chay` date NOT NULL,
  `gio_chay` time NOT NULL,
  `cuoc_phi` decimal(10,0) NOT NULL,
  `ghi_chu` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phuongtienvanchuyen`
--

INSERT INTO `phuongtienvanchuyen` (`id`, `ma_vc`, `ma_bai_dang`, `ngay_chay`, `gio_chay`, `cuoc_phi`, `ghi_chu`) VALUES
(1, 'VC0001', 'BD0001', '2019-04-22', '01:00:00', '0', ''),
(2, 'VC0002', 'BD0001', '2019-04-26', '13:00:00', '0', ''),
(3, 'VC0001', 'BD0002', '2019-04-27', '13:00:00', '0', ''),
(16, 'VC0005', 'BD0001', '0000-00-00', '00:00:00', '0', ''),
(17, 'VC0006', 'BD0001', '0000-00-00', '00:00:00', '0', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphamgiaicuu`
--

CREATE TABLE `sanphamgiaicuu` (
  `ma_bai_dang` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `ma_loai` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nd` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `ten_sp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `so_luong` decimal(10,0) NOT NULL,
  `don_gia` decimal(10,0) NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dang` date NOT NULL,
  `ngay_hh` date NOT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanphamgiaicuu`
--

INSERT INTO `sanphamgiaicuu` (`ma_bai_dang`, `ma_loai`, `ma_nd`, `ten_sp`, `hinh_anh`, `so_luong`, `don_gia`, `dia_chi`, `ngay_dang`, `ngay_hh`, `mo_ta`, `trang_thai`) VALUES
('BD0001', 'L0001', 'ND0001', 'Dưa hấu Quảng Nam ', 'images1.jpg', '100', '5000', 'Phước Ninh Quảng Nam ', '2019-04-15', '2019-04-18', 'Dưa hấu đảm bảo chất lượng<br>\r\nchúng tôi cam kết dưa sạch không thuốc trừ sâu và giá rẻ nhất ', 1),
('BD0002', 'L0001', 'ND0002', 'Dưa hấu Tam Kì  ', 'images2.jpg', '100', '5000', 'Tam kì Quảng Nam ', '2019-04-15', '2019-04-18', 'Dưa hấu đảm bảo chất lượng', 1),
('BD0003', 'L0003', 'ND0001', 'Ngô ', 'ngo1.jpg', '100', '15000', 'Điện bàn Quảng Nam', '2019-04-18', '2019-04-24', 'Ngô dẻo thơm', 1),
('BD0004', 'L0003', 'ND0001', 'Lúa hương ', 'lua1.jpg', '100', '15000', 'Điện bàn Quảng Nam', '2019-04-18', '2019-04-24', 'Lúa nàng hương', 1),
('BD0005', 'L0004', 'ND0002', 'Sắn mì', 'images5.jpg', '50', '10000', 'Quế Sơn Quảng Nam', '2019-04-22', '2019-04-29', 'Sắn nhà trồng , có thể lấy bột làm bánh ', 1),
('BD0006', 'L0004', 'ND0002', 'Trứng vịt nhà', 'images6.jpg', '20', '50000', 'Quế Sơn Quảng Nam', '2019-04-22', '2019-04-29', 'Trứng vịt nhà đảm bảo thơm ngon', 1),
('BD0007', 'L0004', 'ND0004', 'Gà thả vườn', 'images7.jpg', '20', '80000', 'Đại Lộc Quảng Nam', '2019-04-22', '2019-04-29', 'Gà thả vườn dai thịt thơm ngon', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ma_dh`),
  ADD KEY `ma_bai_dang` (`ma_bai_dang`),
  ADD KEY `ma_nd` (`ma_nd`);

--
-- Chỉ mục cho bảng `donvivanchuyen`
--
ALTER TABLE `donvivanchuyen`
  ADD PRIMARY KEY (`ma_vc`),
  ADD KEY `ma_nd` (`ma_nd`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ma_nd`);

--
-- Chỉ mục cho bảng `phuongtienvanchuyen`
--
ALTER TABLE `phuongtienvanchuyen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_vc` (`ma_vc`),
  ADD KEY `ma_bai_dang` (`ma_bai_dang`);

--
-- Chỉ mục cho bảng `sanphamgiaicuu`
--
ALTER TABLE `sanphamgiaicuu`
  ADD PRIMARY KEY (`ma_bai_dang`),
  ADD KEY `ma_loai` (`ma_loai`),
  ADD KEY `ma_nd` (`ma_nd`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `phuongtienvanchuyen`
--
ALTER TABLE `phuongtienvanchuyen`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`ma_bai_dang`) REFERENCES `sanphamgiaicuu` (`ma_bai_dang`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`ma_nd`) REFERENCES `nguoidung` (`ma_nd`);

--
-- Các ràng buộc cho bảng `donvivanchuyen`
--
ALTER TABLE `donvivanchuyen`
  ADD CONSTRAINT `donvivanchuyen_ibfk_1` FOREIGN KEY (`ma_nd`) REFERENCES `nguoidung` (`ma_nd`);

--
-- Các ràng buộc cho bảng `phuongtienvanchuyen`
--
ALTER TABLE `phuongtienvanchuyen`
  ADD CONSTRAINT `phuongtienvanchuyen_ibfk_1` FOREIGN KEY (`ma_vc`) REFERENCES `donvivanchuyen` (`ma_vc`),
  ADD CONSTRAINT `phuongtienvanchuyen_ibfk_2` FOREIGN KEY (`ma_bai_dang`) REFERENCES `sanphamgiaicuu` (`ma_bai_dang`);

--
-- Các ràng buộc cho bảng `sanphamgiaicuu`
--
ALTER TABLE `sanphamgiaicuu`
  ADD CONSTRAINT `sanphamgiaicuu_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loaisanpham` (`ma_loai`),
  ADD CONSTRAINT `sanphamgiaicuu_ibfk_2` FOREIGN KEY (`ma_nd`) REFERENCES `nguoidung` (`ma_nd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
