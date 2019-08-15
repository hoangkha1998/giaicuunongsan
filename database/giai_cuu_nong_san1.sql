-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 13, 2019 lúc 11:29 AM
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
  `so_luong_dat` decimal(10,0) NOT NULL,
  `tong_tien` decimal(10,0) NOT NULL,
  `phi_vc` decimal(10,0) NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi_gh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `van_chuyen` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_dat` date NOT NULL,
  `ngay_giao` date NOT NULL,
  `trang_thai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`ma_dh`, `ma_bai_dang`, `ma_nd`, `ten_sp`, `so_luong_dat`, `tong_tien`, `phi_vc`, `ho_ten`, `dia_chi_gh`, `van_chuyen`, `ngay_dat`, `ngay_giao`, `trang_thai`) VALUES
('DH0003', 'BD0001', 'ND0002', 'Dưa hấu Quảng Nam ', '4', '20000', '0', 'Nguyễn Xuân Vinh', 'Hải Châu ,Đà Nẵng', 'VC0001', '2019-05-12', '2019-05-18', 1),
('DH0004', 'BD0001', 'ND0001', 'Dưa hấu Quảng Nam ', '5', '30000', '30000', 'Nguyễn Hoàng Kha', 'Hải Châu ,Đà Nẵng', 'VC0010', '2019-05-31', '2019-06-01', 2),
('DH0005', 'BD0003', 'ND0001', 'Ngô ', '10', '150000', '50000', 'huỳnh long', 'cẩm lệ ', 'VC0009', '2019-06-12', '2019-06-13', 0);

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
('VC0001', 'ND0001', 'Nguyễn Hoàng Kha', 1234567891, 'Phú Ninh -Đà Nẵng', '100000'),
('VC0002', 'ND0001', 'Hoàng Kha', 935765456, 'Phú Ninh Hội An ', '200000'),
('VC0008', 'ND0001', 'Hoàng kha', 121212121, 'quảng nam - huế ', '121212'),
('VC0009', 'ND0001', 'Hoàng kha', 1111110090, 'Huế - Quảng Bình', '50000'),
('VC0010', 'ND0002', 'Nguyễn Xuân Vinh', 11112222, 'tam kì - duy xuyên', '30000'),
('VC0011', 'ND0001', 'Hoàng kha', 909897765, 'Quảng Nam -Đà Nẵng', '50000'),
('VC0012', 'ND0001', 'Hoàng kha', 1667898765, 'Quế Sơn- Điện Bàn', '100000'),
('VC0013', 'ND0001', 'Hoàng kha', 16678876, 'Quế Sơn - Điện Bàn', '100000');

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
('L0004', 'Gia cầm', ''),
('L0005', 'Vật nuôi', ''),
('L0006', 'Trứng gà ,  vịt', ''),
('L0008', 'Thanh long', ''),
('L0009', 'Hồ tiêu', ''),
('L0010', 'Cà phê', ''),
('L0011', 'Chuối', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ma_nd` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `ten_nd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi_nd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
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

INSERT INTO `nguoidung` (`ma_nd`, `ten_nd`, `dia_chi_nd`, `sdt`, `ten_dn`, `mat_khau`, `loai_nd`, `xep_hang`, `trang_thai_nd`) VALUES
('AD0005', 'hoàng long', 'quangnam, quangnam', 123456789, 'longhoang', '123456', '1', 1, 1),
('AD0006', 'Nguyễn Thanh Long', 'quangnam, quangnam', 905346765, 'admin1', '123456', '2', 1, 1),
('ND0001', 'Hoàng kha', 'Quế sơn quảng nam', 123456789, 'hoangkha', '123456', '1', 1, 1),
('ND0002', 'Nguyễn Xuân Vinh', 'Đại lộc Quảng Nam', 935765456, 'xuanvinh', '123456', '1', 1, 1),
('ND0003', 'admin', 'quang nam', 1234567891, 'admin', '123456', '2', 1, 1),
('ND0004', 'Nguyễn Văn Anh', 'Đại Lộc Quảng Nam', 905001234, 'vananh', '123456', '1', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongtienvanchuyen`
--

CREATE TABLE `phuongtienvanchuyen` (
  `id` int(5) NOT NULL,
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
(6, 'VC0008', 'BD0002', '0000-00-00', '00:00:00', '0', ''),
(7, 'VC0009', 'BD0003', '0000-00-00', '00:00:00', '0', ''),
(9, 'VC0010', 'BD0001', '0000-00-00', '00:00:00', '0', ''),
(10, 'VC0011', 'BD0004', '0000-00-00', '00:00:00', '0', ''),
(12, 'VC0013', 'BD0005', '0000-00-00', '00:00:00', '0', '');

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
('BD0001', 'L0001', 'ND0001', 'Dưa hấu Quảng Nam ', 'images1.jpg', '55', '6000', 'Phước Ninh Quảng Nam ', '2019-05-23', '2019-05-31', 'Dưa hấu đảm bảo chất lượng<br>\r\nchúng tôi cam kết dưa sạch không thuốc trừ sâu và giá rẻ nhất . ', 1),
('BD0002', 'L0001', 'ND0002', 'Dưa hấu Tam Kì  ', 'images2.jpg', '95', '5000', 'Tam kì Quảng Nam ', '2019-05-15', '2019-06-02', 'Dưa hấu đảm bảo chất lượng', 1),
('BD0003', 'L0003', 'ND0001', 'Ngô ', 'ngo1.jpg', '65', '15000', 'Điện bàn Quảng Nam', '2019-05-21', '2019-05-27', 'Ngô dẻo thơm', 1),
('BD0004', 'L0003', 'ND0001', 'Lúa hương ', 'lua1.jpg', '80', '15000', 'Điện bàn Quảng Nam', '2019-05-25', '2019-06-01', 'Lúa nàng hương', 1),
('BD0005', 'L0004', 'ND0002', 'Sắn mì', 'images5.jpg', '99', '10000', 'Quế Sơn Quảng Nam', '2019-05-23', '2019-06-05', 'Sắn nhà trồng , có thể lấy bột làm bánh ', 1),
('BD0006', 'L0004', 'ND0002', 'Trứng vịt nhà', 'images6.jpg', '100', '50000', 'Quế Sơn Quảng Nam', '2019-05-23', '2019-06-02', 'Trứng vịt nhà đảm bảo thơm ngon', 1),
('BD0007', 'L0004', 'ND0004', 'Gà thả vườn', 'images7.jpg', '100', '80000', 'Đại Lộc Quảng Nam', '2019-04-22', '2019-05-30', 'Gà thả vườn dai thịt thơm ngon', 1),
('BD0008', 'L0005', 'ND0002', 'Chó cảnh ', 'image2.png', '2', '500000', 'Thị trấn Vĩnh Điện, Điện Bàn, Quảng Nam', '2019-05-15', '2019-05-31', 'Chó nhà muốn bán ', 1);

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
