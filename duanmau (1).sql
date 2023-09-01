-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 02:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanmau`
--

-- --------------------------------------------------------

--
-- Table structure for table `bil`
--

CREATE TABLE `bil` (
  `ma_bil` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `thanh_toan` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1 thanh toán trực tuyến. 0 thanh toán cod',
  `trangthai` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bil`
--

INSERT INTO `bil` (`ma_bil`, `ma_kh`, `username`, `email`, `dia_chi`, `tel`, `thanh_toan`, `trangthai`) VALUES
(2, 1, 'admin', 'leminhchien2611@gmail.com', 'ấgasgdg', 977973044, 0, 2),
(4, 12, 'dsg', 'leminhchien2611@gmail.com', 'asgags', 457458, 0, 0),
(5, 1, 'admin', 'leminhchien2611@gmail.com', '203 Tô Ký', 2147483647, 0, 3),
(6, 9, 'abcd', 'chienlmps24976@fpt.edu.vn', '1231', 457458, 0, 2),
(7, 1, 'Minh Thuy', 'chienlmps24976@fpt.edu.vn', 'Binh Thanh', 989999999, 0, 2),
(8, 1, 'Manh Cuong', 'chienlmps24976@fpt.edu.vn', 'quan 12', 978999999, 0, 1),
(9, 1, 'Minh Chien', 'leminhchien2611@gmail.com', '203 Tô Ký Dong Hung Thuan', 917316571, 0, 3),
(11, 1, 'Dinh Trung', 'chienlmps24976@fpt.edu.vn', 'quan 12', 2147483647, 0, 1),
(12, 1, 'Phan Hieu', 'hieuptpk02706@fpt.edu.vn', 'Hooc Mon', 2147483647, 0, 2),
(13, 1, 'Phuc', 'chienlmps24976@fpt.edu.vn', 'Binh Thanh', 978999999, 0, 0),
(14, 1, 'Minh Thuan', 'chienlmps24976@fpt.edu.vn', 'TDT', 2147483647, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `ma_bl` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ngay_bl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`ma_bl`, `noi_dung`, `ma_hh`, `ma_kh`, `ngay_bl`) VALUES
(2, 'Con hàng này ngon quá', 17, 5, '10:35:23am 2021-10-12'),
(4, 'Sịn', 78, 1, '11:05:29am 2021-10-12'),
(5, 'Điện thoại sịn', 18, 1, '12:19:56pm 2021-10-16'),
(10, 'bingchiiling', 17, 9, '08:27:23am 2022-11-24'),
(14, 'điện thoại fake', 18, 1, '05:59:41pm 2022-11-24'),
(15, 'mua hàng trung quốc ', 18, 1, '05:59:51pm 2022-11-24'),
(16, 'nana', 18, 1, '06:00:04pm 2022-11-24'),
(18, 'nana', 18, 1, '06:00:11pm 2022-11-24'),
(22, '123', 17, 1, '04:56:41am 2022-12-07'),
(23, 'web lau', 17, 1, '04:56:46am 2022-12-07'),
(24, 'web lua dao', 17, 1, '04:56:50am 2022-12-07'),
(25, 'web lua dao', 17, 1, '04:56:57am 2022-12-07'),
(26, 'xoa web di', 17, 1, '04:57:12am 2022-12-07'),
(27, 'xoa web di', 17, 1, '04:57:19am 2022-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(255) CHARACTER SET utf8 NOT NULL,
  `don_gia` int(11) NOT NULL,
  `giam_gia` int(11) DEFAULT NULL,
  `hinh` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ngay_nhap` date NOT NULL DEFAULT current_timestamp(),
  `mo_ta` varchar(255) NOT NULL,
  `dac_biet` bit(1) NOT NULL DEFAULT b'0',
  `so_luot_xem` int(11) DEFAULT NULL,
  `ma_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `ma_loai`) VALUES
(6, 'Macbook Pro M1 2021', 35000000, 20000, 'laphot.jpg', '2021-05-29', 'RAM: 8GB\r\nSSD: 256GB', b'0', 1000, 2),
(10, 'iPhone13 Pro Max', 33900000, 0, 'ip3pro.jpg', '2021-10-01', 'Hàng sắp về', b'0', 0, 1),
(11, 'Galaxy S21', 13999999, 29999, 's21.jpg', '2021-10-01', 'Galaxy S21 5G nằm trong series S21 đến từ Samsung nổi bật với thiết kế tràn viền, hiệu năng mạnh mẽ hàng đầu.', b'0', 500, 1),
(12, 'Vivo X70 Pro 5G', 19999999, 0, 'vivo.jpg', '2021-10-01', 'Vivo cho ra mắt Vivo X70 Pro, một sản phẩm cao cấp ấn tượng với kiểu dáng lẫn hiệu năng tuyệt vời.', b'0', 0, 1),
(13, 'Xiaomi Redmi Note 10', 5999999, 200000, 'xiaomi.jpg', '2021-09-29', 'Redmi Note 10 5G một trong những mẫu điện thoại thuộc series Redmi Note 10 của Xiaomi', b'0', 0, 1),
(14, 'Galaxy Z Fild 3', 24000000, 10, 'zford.jpg', '2021-09-28', 'Màn hình: Dynamic AMOLED 2X, Chính 6.7\" & Phụ 1.9\", Full HD+\r\nHệ điều hành: Android 11\r\nCamera sau: 2 camera 12 MP\r\nCamera trước: 10 MP\r\nChip: Snapdragon 888', b'0', 433, 1),
(15, 'Oppo Reno6 5G', 12900000, 600000, 'Oppo.jpg', '2021-10-01', 'Sau khi ra mắt OPPO Reno5 chưa lâu thì OPPO lại cho ra mẫu smartphone mới mang tên OPPO Reno6 với hàng loạt cải tiến mới về ngoại hình bên ngoài lẫn hiệu năng bên trong, mang đến trải nghiệm vượt bật cho người dùng.', b'0', 0, 1),
(16, 'Realme 8 5G', 8000000, 20, 'realme.jpg', '2021-09-27', 'Không dừng lại ở Realme 8 và Realme 8 Pro, Realme tiếp tục gây ấn tượng khi ra mắt Realme 8 5G. Mẫu điện thoại sở hữu cấu hình phần cứng mới và hỗ trợ kết nối 5G hiện đại mang đến cho bạn những trải nghiệm tuyệt vời', b'0', 0, 1),
(17, 'Galaxy Z Fold 3 5G', 41000000, 1000000, 'fold3.jpg', '2021-10-25', 'QUÀ TẶNG KHI ĐẶT TRƯỚC:\r\n- Giảm ngay 1 triệu\r\n- Thu cũ đổi mới\r\n- Ưu đãi dán màn hình tại Samsung\r\n- Trả góp lãi suất 0%', b'0', 15, 1),
(18, 'iPhone 11 64GB', 15555555, 1000000, 'iphone11.jpg', '2021-10-02', 'Tháng 09/2019, Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó', b'0', 25, 1),
(19, 'iPhone 12 Pro Max', 32000000, 1000000, 'ip12.jpg', '2021-10-04', 'iPhone 12 Pro Max 128 GB một siêu phẩm smartphone đến từ Apple. Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.\r\n\r\n', b'0', 0, 1),
(20, 'Huawei MatedPad 11', 13000000, 20000, 'huawei.jpg', '2021-10-03', 'Màn hình: 10.9\", IPS LCD\r\nHệ điều hành: HarmonyOS 2.0\r\nChip: Snapdragon 865 8 nhân\r\nRAM: 6 GB\r\nBộ nhớ trong: 128 GB\r\nCamera sau: 13 MP\r\nCamera trước: 8 MP\r\nPin, Sạc: 7250 mAh, 18 W', b'0', 0, 3),
(21, 'SamSung Galaxy Tab7 FE', 13900000, 200000, 'galaxy tab.jpg', '2021-09-23', 'Samsung chính thức trình làng mẫu máy tính bảng có tên Galaxy Tab S7 FE, máy trang bị cấu hình mạnh mẽ', b'0', 0, 3),
(22, 'iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021)', 38490000, 1, 'ipad.jpg', '1997-05-21', 'Máy tính bảng iPad Pro M1 12.9 inch Wifi Cellular 256GB (2021) trang bị con chip vô cùng mạnh mẽ M1 cùng công nghệ màn hình mới mini-LED được rất nhiều người dùng đón nhận nồng nhiệt và đánh giá rất tốt sản phẩm này đến từ Apple.', b'0', 0, 3),
(23, 'iPad Pro M1 12.9 inch Wifi Cellular 128GB (2021)', 352490000, 1000000, 'ipad pro.jpg', '2021-10-02', 'Bạn có đang mong chờ những sản phẩm chất lượng đến từ Apple? Sau hàng loạt các sản phẩm đình đám như iPhone 12 series thì hãng đã tung ra chiếc iPad Pro M1 12.9 inch Wifi Cellular 128GB (2021) trang bị những tính năng ngày càng vượt trội và thời thượng.', b'0', 0, 3),
(24, 'iPad Pro M1 12.9 inch WiFi 256GB (2021)', 33900000, 10000, 'ipad pro m1.jpg', '2021-10-05', 'iPad Pro M1 12.9 inch Wifi 256GB (2021) là dòng máy tính bảng cao cấp của Apple với nhiều nâng cấp đáng chú ý như chip Apple M1 giống trên MacBook và màn hình mini-LED ', b'0', 768, 3),
(25, 'iPad Air 4 Wifi Cellular 64GB (2020)', 21000000, 12000, 'ipad air.jpg', '2021-09-20', 'Trong sự kiện Time Flies, Apple đã giới thiệu đến người dùng chiếc iPad Air 4 Wifi Cellular 64GB (2020) với thiết kế tương tự iPad Pro, ngoại hình của Air 4 đã được làm mới so với thế hệ iPad Air 3', b'0', 10000000, 3),
(26, 'iPad Air 4 Wifi 64GB (2020)', 18000000, 35000, 'ipad14.jpg', '2021-10-10', 'Apple đã trình làng máy tính bảng iPad Air 4 Wifi 64 GB (2020). Đây là thiết bị đầu tiên của hãng được trang bị chip A14 Bionic - chip di động mạnh nhất của Apple (năm 2020)', b'0', 0, 3),
(27, 'iPad mini 6 WiFi 256GB', 19900000, 10000, 'ipadmini.jpg', '2021-10-07', 'Màn hình: 8.3\" LED-backlit IPS LCD\r\nHệ điều hành: iPadOS 15\r\nChip: Apple A15 Bionic', b'0', 0, 3),
(28, 'Laptop Acer Nitro 5 Gaming AN515 57 50FT i5', 26500000, 0, 'nitro.jpg', '2021-11-10', 'Giải quyết được các tác vụ văn phòng, thiết kế đồ hoạ mà còn giúp bạn chơi game mướt hơn nhờ CPU Intel thế hệ 11 cùng card đồ họa rời NVIDIA GeForce RTX, chắc hẳn Acer Nitro 5 Gaming AN515 57 50FT i5 (NH.QD8SV.003)', b'0', 0, 2),
(29, 'Laptop Dell Gaming G3 15 i7', 31500000, 0, 'dell1.jpg', '2021-02-20', 'Laptop Dell G3 15 i7 (P89F002BWH) thuộc dòng laptop gaming với cấu hình mạnh mẽ, thiết kế trang nhã và rất sang trọng, dễ lựa chọn cho cả người đi đọc, đi làm', b'0', 0, 2),
(30, 'Laptop MSI Katana Gaming GF66 11UC i7', 29080000, 0, 'msi.jpg', '2021-09-25', 'Laptop MSI Katana GF66 11UC i7 (224VN) mang vẻ ngoài cơ động cùng cấu hình mạnh mẽ, đẩy nhanh quá trình xử lý mọi tác vụ hay sẵn sàng đồng hành cùng bạn chiến mọi thể loại game đầy kịch tính. ', b'0', 0, 2),
(31, 'Laptop HP Envy 13 ba1030TU i7', 30500000, 0, 'hp.jpg', '2021-09-28', 'Laptop HP Envy 13 ba1030TU i7 (2K0B6PA) sở hữu thiết kế mỏng nhẹ cùng cấu hình cực mạnh mẽ đáp ứng đa dạng nhu cầu làm việc, giúp bạn đạt được hiệu suất làm việc tốt nhất.', b'0', 0, 2),
(32, 'Laptop Lenovo Ideapad Gaming 3 15IMH05 i7', 26000000, 0, 'lenovo.jpg', '2021-09-24', 'Laptop Lenovo Ideapad Gaming 3 15IMH05 i7 (81Y4013UVN) là dòng laptop gaming tầm trung với thiết kế tối giản, vẻ ngoài không quá hầm hố nhưng vẫn sở hữu hiệu năng cao đáp ứng tốt từ nhu cầu làm việc đến giải trí.', b'0', 150, 2),
(33, 'Laptop Asus ZenBook UX425EA i5', 24000000, 0, 'asus.jpg', '2021-09-20', 'Laptop Asus Zenbook UX425EA (KI429T) sở hữu vẻ ngoài tinh tế với độ bền chuẩn quân đội cùng CPU Intel thế hệ 11 hiện đại đem đến hiệu năng tối ưu và vượt trội, xử lý nhanh gọn mọi tác vụ.', b'0', 234, 2),
(34, 'Laptop Dell Inspiron 7400 i5', 30000000, 0, 'dell.jpg', '2021-09-26', 'Mang đến kiểu dáng sang trọng và đẳng cấp, laptop Dell Inspiron 7400 i5 1135G7 (N4I5134W) với sức mạnh hiệu năng mạnh mẽ từ chip Intel Gen 11, là cộng sự lý tưởng ở cả công việc và giải trí.', b'0', 0, 2),
(35, 'Laptop Dell Gaming G3 i7', 32000000, 0, 'dellgm.jpg', '2021-09-29', 'Laptop Dell Gaming G3500B i7 (P89F002G3500B) thuộc dòng laptop gaming với cấu hình mạnh mẽ, thiết kế hiện đại và dễ dàng di chuyển. Đây sẽ là sự lựa chọn phù hợp với tất cả mọi người kể cả người đi đọc, đi làm hay các game thủ.', b'0', 0, 2),
(36, 'Laptop Acer Swift 3 SF313 53 518Y i5', 22790000, 0, 'acer.jpg', '2021-09-27', 'Acer Swift 3 SF313 53 518Y i5 (NX.A4JSV.003) là sản phẩm laptop sở hữu dòng chip Intel thế hệ 11 tiên tiến kết hợp với nhiều thông số kỹ thuật ấn tượng cùng thiết kế nổi bật và sang trọng sẽ là sự lựa chọn phù hợp cho nhiều đối tượng người dùng.', b'0', 0, 2),
(37, 'Tai nghe Bluetooth AirPods 2 Apple MV7N2', 3000000, 0, 'airp.jpg', '2021-08-23', 'Thiết kế đơn giản, thời trang và nhỏ gọn.\r\nTrang bị chip H1 hoàn toàn mới, cho tốc độ kết nối, chuyển đổi giữa các thiết bị nhanh chóng.\r\nCó thể sử dụng nghe nhạc lên đến 5 giờ (âm lượng 50%) cho mỗi một lần sạc đầy.', b'0', 0, 4),
(38, 'Tai nghe Bluetooth True Wireless Hydrus TS12BC', 280000, 0, 'true.jpg', '2021-08-23', 'Kết nối Bluetooth chuẩn 5.0 nghe với khoảng cách 10 m.\r\nNghe nhạc trong khoảng 3.5 giờ, hộp sạc 12 giờ, thời gian chờ 200 giờ.', b'0', 0, 4),
(39, 'Pin sạc dự phòng Polymer 10.000 mAh Hydrus PA CK01', 240000, 0, 'sacpole.jpg', '2021-09-10', 'Hiệu suất sạc tới 64%, dung lượng sạc dự phòng 10.000 mAh\r\n\r\n', b'0', 0, 4),
(40, 'Pin sạc dự phòng Polymer 10.000 mAh Type C Energizer UE10054BK ', 357000, 0, 'sacpoly.jpg', '2021-09-10', 'Energizer UE10054BK thiết kế sang trọng, màu đen lịch lãm, mỏng chỉ 16 mm', b'0', 0, 4),
(41, 'Loa Bluetooth JBL Charge 4 ', 2700000, 0, 'loa.jpg', '2021-09-05', 'Dễ dàng mang theo trong nhiều trường hợp với thiết kế nhỏ gọn ', b'0', 0, 4),
(42, 'Pin sạc dự phòng Polymer 10.000 mAh Type C eSaver PJ JP106S', 335000, 0, 'sac1.jpg', '2021-09-01', 'Pin sạc dự phòng Polymer 10.000 mAh có thiết kế vỏ bằng nhôm chắc chắn', b'0', 0, 4),
(43, 'Tai nghe Bluetooth True Wireless JBL T115TWSWHTAS', 1400000, 0, 'hp123.jpg', '2021-09-17', 'Tai nghe JBL dạng oval thon gọn, hộp sạc cứng cáp, 2 phiên bản màu trắng - đen', b'0', 0, 4),
(44, 'Tai nghe chụp tai Bluetooth AirPods Max Apple MGYH3/ MGYJ3/ MGYL3 ', 12000000, 0, 'hpb.jpg', '2021-09-11', 'Sang trọng với lớp vỏ kim loại sáng bóng, bền bỉ, lựa chọn dễ dàng theo sở thích cho 3 phiên bản màu xanh dương, bạc và xám ', b'0', 0, 4),
(45, 'Pin sạc dự phòng Polymer 10.000 mAh Lightning eValu PJ JP189SL', 330000, 0, 'sac.jpg', '2021-09-18', 'Thiết kế liền khối, màu sắc tinh tế, mỏng gọn, tiện lợi mang theo\r\nPin sạc dự phòng Polymer 10.000mAh Lightning eValu PJ JP189SL', b'0', 0, 4),
(46, 'Adapter Sạc Type C 20W dùng cho iPhone/iPad Apple MHJE3 Trắng', 588000, 0, 'sactypec.jpg', '2021-09-13', 'Thiết kế gọn đẹp, đầu cắm 2 chấu phổ biến\r\nKiểu dáng adapter sạc đơn giản, trang nhã, chất lượng tốt cho độ bền cao', b'0', 0, 4),
(47, 'Apple Watch S6 44mm viền nhôm dây cao su', 11000000, 0, '2.10.jpg', '2021-09-12', 'Đo nồng độ oxy (SpO2) \r\nCó nghe gọi', b'0', 0, 5),
(48, 'Samsung Galaxy Watch 4 44mm', 6999999, 0, '2.9.jpg', '2021-09-03', 'Đo nồng độ oxy (SpO2) \r\nCó nghe gọi', b'0', 0, 5),
(49, 'Apple Watch SE 40mm viền nhôm dây cao su', 8450000, 0, '2.8.jpg', '2021-09-09', 'Có nghe gọi', b'0', 0, 5),
(50, 'Samsung Galaxy Watch 3 45mm viền thép dây da', 4900000, 0, '2.7.jpg', '2021-09-06', 'Đo nồng độ oxy (SpO2) \r\nCó nghe gọi', b'0', 0, 5),
(51, 'BeU B2', 552000, 0, '2.6.jpg', '2021-09-22', 'Có nghe gọi', b'0', 0, 5),
(52, 'Realme Watch 2 Pro dây silicone', 2290000, 0, '2.5.jpg', '2021-09-21', 'Đo nồng độ oxy', b'0', 0, 5),
(53, 'Oppo Watch 41mm dây silicone', 4320000, 0, '2.4.jpg', '2021-09-26', 'Có nghe gọi', b'0', 0, 5),
(54, 'Apple Watch S6 LTE 40mm viền thép dây thép', 17870000, 199999, '2.3.jpg', '2021-09-22', 'Có nghe gọi', b'0', 0, 5),
(55, 'BeU B1', 780000, 200000, '2.2.jpg', '2021-09-26', 'Có nghe gọi', b'0', 0, 5),
(56, 'Samsung Galaxy Watch 4 LTE Classic 46mm', 9900000, 190000, '2.1.jpg', '2021-09-15', 'Đo nồng độ oxy (SpO2) \r\nCó nghe gọi', b'0', 0, 5),
(57, 'Đồng hồ Nam MVW ML029-01 ', 1750000, 0, '11.jpg', '2021-09-24', 'Đồng hồ độc quyền', b'0', 0, 6),
(58, 'Đồng hồ Nam Citizen NP1010-01A - Cơ tự động', 9000000, 0, '12.jpg', '2021-09-29', 'Đồng hồ cao cấp', b'0', 0, 6),
(59, 'Đồng hồ Nam Movado 0605560', 48900000, 1000000, '13.jpg', '2021-09-30', 'Đồng hồ phái mạnh', b'0', 0, 6),
(60, 'Đồng hồ Nữ Just Cavalli JC1L126M0065', 4200000, 500000, '14.jpg', '2021-10-01', 'Đồng hồ phái đẹp', b'0', 0, 6),
(61, 'Đồng hồ đôi Elio EL057-01/EL057-02', 1435000, 0, '15.jpg', '2021-10-02', 'Đồng hồ cặp đôi', b'0', 0, 6),
(62, 'Ferrari 086002', 2000000, 0, '16.jpg', '2021-08-10', 'Đồng hồ trẻ em', b'0', 0, 6),
(63, 'SKMEI SK-12339', 79000, 10000, '17.jpg', '2021-08-15', 'Đồng hồ trẻ em', b'0', 0, 6),
(64, 'SKMEI SK-12400', 79000, 50000, '18.jpg', '2021-05-20', 'Đồng hồ trẻ em', b'0', 0, 6),
(65, 'Ferrari 085332', 2100000, 0, '19.jpg', '2021-05-21', 'Đồng hồ trẻ em', b'0', 0, 6),
(66, 'Ferrari 028732', 2100000, 0, '20.jpg', '2021-05-22', 'Đồng hồ trẻ em', b'0', 0, 6),
(67, 'Viewsonic LCD Gaming VX2458-P-MHD 24 inch Full HD', 4490000, 0, '1.jpg', '2021-09-23', '1 ms 144 Hz\r\nOnline giá rẻ', b'0', 0, 7),
(68, 'Samsung Smart Monitor M5 32 inch (LS32AM500NEXXV)', 7890000, 0, '2.jpg', '2021-09-26', '8 ms 60 Hz', b'0', 0, 7),
(69, 'Samsung LCD Gaming 32 inch WQHD (LC32G55TQWEXXV)', 10290000, 200000, '3.jpg', '2021-07-29', '1 ms 144 Hz', b'0', 0, 7),
(70, 'Asus LCD TUF Gaming 23.8 inch Full HD (VG249Q)', 5890000, 100000, '4.jpg', '2021-09-18', '1 ms 144 Hz', b'0', 0, 7),
(71, 'Viewsonic LCD Gaming XG2705 27 inch Full HD', 6090000, 90000, '5.jpg', '2021-05-12', '1ms 75Hz', b'0', 0, 7),
(72, 'Asus LCD ProArt PA278CV 27 inch 2K', 10490000, 490000, '6.jpg', '2021-02-10', '4ms 280Hz', b'0', 0, 7),
(73, 'Máy in Canon TR4570S đa năng WiFi', 3890000, 90000, '7.jpg', '2021-07-07', 'In 2 mặt\r\nIn Wifi\r\n8.8trang/phút', b'0', 0, 7),
(74, 'Máy In Laser Trắng Đen Brother HL-L2366DW Wifi', 4900000, 1000000, '8.jpg', '2021-08-08', 'In 2 mặt\r\nIn Wifi\r\n8trang/phút', b'0', 0, 7),
(75, 'Máy in phun màu HP Ink Tank 115 (2LB19A)', 1900000, 900000, '9.jpg', '2021-09-09', 'In 1 mặt', b'0', 0, 7),
(76, 'Máy In Ảnh Màu Canon PIXMA TS6370 Wifi', 3900001, 100000, '10.jpg', '2021-10-10', 'In 2 mặt\r\nIn Wifi\r\nIn 15trang/phút', b'0', 0, 7),
(77, 'Tablet', 20000000, 200000, 'galaxytab7.jpg', '2021-05-21', 'Sản phẩm có hạn', b'0', 0, 3),
(78, 'Tablet 5.0', 35000000, 1340000, 'galaxy tab.jpg', '2021-02-05', 'Số lượng có hạn', b'0', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `ma_kh` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `mat_khau` int(11) NOT NULL,
  `kich_hoat` bit(1) NOT NULL DEFAULT b'0',
  `email` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `vai_tro` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`ma_kh`, `username`, `mat_khau`, `kich_hoat`, `email`, `dia_chi`, `vai_tro`) VALUES
(1, 'admin', 123, b'0', 'Nguyenckhanh423@gmail.com', '', 1),
(5, 'testguest2', 1234, b'0', 'khanh1@gmail.com', '', 0),
(9, 'abcd', 0, b'0', 'chienlmps24976@fpt.edu.vn', '123', 0),
(11, 'TÀi', 123, b'0', 'nguyentaibtre2003@gmail.com', '', 0),
(12, 'sacombank', 123, b'0', 'leminhchien2611@gmail.com', '203', 0),
(13, 'Vu Manh Cuong', 123, b'0', 'hieuhaohoa695@gmail.com', '203 Tô Ký Dong Hung Thuan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(1, 'Điện thoại '),
(2, 'Laptop'),
(3, 'Tablet'),
(4, 'Phụ kiện'),
(5, 'Đồng hồ thông minh'),
(6, 'Đồng hồ thời trang'),
(7, 'Pc, Máy in'),
(8, 'Máy cũ giá rẻ'),
(9, 'Sim, Thẻ cào'),
(21, 'Trả góp');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `ma_order` int(11) NOT NULL,
  `ma_bil` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`ma_order`, `ma_bil`, `ma_hh`, `so_luong`, `don_gia`) VALUES
(1, 1, 17, 1, 41000000),
(2, 2, 17, 1, 41000000),
(3, 2, 19, 1, 32000000),
(4, 3, 18, 1, 15555555),
(5, 4, 19, 1, 32000000),
(6, 5, 36, 1, 22790000),
(7, 6, 44, 1, 12000000),
(8, 7, 17, 1, 41000000),
(9, 7, 17, 1, 41000000),
(10, 8, 23, 1, 352490000),
(11, 8, 25, 3, 21000000),
(12, 9, 38, 1, 280000),
(13, 9, 39, 1, 240000),
(14, 10, 40, 1, 357000),
(15, 10, 58, 1, 9000000),
(16, 11, 23, 1, 352490000),
(17, 11, 74, 1, 4900000),
(18, 12, 63, 1, 79000),
(19, 12, 68, 1, 7890000),
(20, 13, 44, 1, 12000000),
(21, 13, 12, 1, 19999999),
(22, 14, 43, 1, 1400000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bil`
--
ALTER TABLE `bil`
  ADD PRIMARY KEY (`ma_bil`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `bl_hh` (`ma_hh`),
  ADD KEY `bl_kh` (`ma_kh`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `hh_loai` (`ma_loai`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`ma_order`),
  ADD KEY `oder_bil` (`ma_bil`),
  ADD KEY `oder_hh` (`ma_hh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bil`
--
ALTER TABLE `bil`
  MODIFY `ma_bil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `ma_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bil`
--
ALTER TABLE `bil`
  ADD CONSTRAINT `bil_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_kh`);

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `bl_hh` FOREIGN KEY (`ma_hh`) REFERENCES `hanghoa` (`ma_hh`) ON DELETE CASCADE,
  ADD CONSTRAINT `bl_kh` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_kh`) ON DELETE CASCADE;

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hh_loai` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`) ON DELETE NO ACTION;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `oder_hh` FOREIGN KEY (`ma_hh`) REFERENCES `hanghoa` (`ma_hh`) ON DELETE NO ACTION,
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`ma_bil`) REFERENCES `bil` (`ma_bil`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
