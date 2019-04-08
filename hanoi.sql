-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table dphanoi.districts
CREATE TABLE IF NOT EXISTS `districts` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dphanoi.districts: ~30 rows (approximately)
DELETE FROM `districts`;
/*!40000 ALTER TABLE `districts` DISABLE KEYS */;
INSERT INTO `districts` (`id`, `name`, `type`) VALUES
	(1, 'Quận Ba Đình', 'Quận'),
	(2, 'Quận Hoàn Kiếm', 'Quận'),
	(3, 'Quận Tây Hồ', 'Quận'),
	(4, 'Quận Long Biên', 'Quận'),
	(5, 'Quận Cầu Giấy', 'Quận'),
	(6, 'Quận Đống Đa', 'Quận'),
	(7, 'Quận Hai Bà Trưng', 'Quận'),
	(8, 'Quận Hoàng Mai', 'Quận'),
	(9, 'Quận Thanh Xuân', 'Quận'),
	(16, 'Huyện Sóc Sơn', 'Huyện'),
	(17, 'Huyện Đông Anh', 'Huyện'),
	(18, 'Huyện Gia Lâm', 'Huyện'),
	(19, 'Quận Nam Từ Liêm', 'Quận'),
	(20, 'Huyện Thanh Trì', 'Huyện'),
	(21, 'Quận Bắc Từ Liêm', 'Quận'),
	(250, 'Huyện Mê Linh', 'Huyện'),
	(268, 'Quận Hà Đông', 'Quận'),
	(269, 'Thị xã Sơn Tây', 'Thị xã'),
	(271, 'Huyện Ba Vì', 'Huyện'),
	(272, 'Huyện Phúc Thọ', 'Huyện'),
	(273, 'Huyện Đan Phượng', 'Huyện'),
	(274, 'Huyện Hoài Đức', 'Huyện'),
	(275, 'Huyện Quốc Oai', 'Huyện'),
	(276, 'Huyện Thạch Thất', 'Huyện'),
	(277, 'Huyện Chương Mỹ', 'Huyện'),
	(278, 'Huyện Thanh Oai', 'Huyện'),
	(279, 'Huyện Thường Tín', 'Huyện'),
	(280, 'Huyện Phú Xuyên', 'Huyện'),
	(281, 'Huyện Ứng Hòa', 'Huyện'),
	(282, 'Huyện Mỹ Đức', 'Huyện');
/*!40000 ALTER TABLE `districts` ENABLE KEYS */;

-- Dumping structure for table dphanoi.subdistricts
CREATE TABLE IF NOT EXISTS `subdistricts` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `district_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dphanoi.subdistricts: ~584 rows (approximately)
DELETE FROM `subdistricts`;
/*!40000 ALTER TABLE `subdistricts` DISABLE KEYS */;
INSERT INTO `subdistricts` (`id`, `name`, `type`, `district_id`) VALUES
	(1, 'Phường Phúc Xá', 'Phường', 1),
	(4, 'Phường Trúc Bạch', 'Phường', 1),
	(6, 'Phường Vĩnh Phúc', 'Phường', 1),
	(7, 'Phường Cống Vị', 'Phường', 1),
	(8, 'Phường Liễu Giai', 'Phường', 1),
	(10, 'Phường Nguyễn Trung Trực', 'Phường', 1),
	(13, 'Phường Quán Thánh', 'Phường', 1),
	(16, 'Phường Ngọc Hà', 'Phường', 1),
	(19, 'Phường Điện Biên', 'Phường', 1),
	(22, 'Phường Đội Cấn', 'Phường', 1),
	(25, 'Phường Ngọc Khánh', 'Phường', 1),
	(28, 'Phường Kim Mã', 'Phường', 1),
	(31, 'Phường Giảng Võ', 'Phường', 1),
	(34, 'Phường Thành Công', 'Phường', 1),
	(37, 'Phường Phúc Tân', 'Phường', 2),
	(40, 'Phường Đồng Xuân', 'Phường', 2),
	(43, 'Phường Hàng Mã', 'Phường', 2),
	(46, 'Phường Hàng Buồm', 'Phường', 2),
	(49, 'Phường Hàng Đào', 'Phường', 2),
	(52, 'Phường Hàng Bồ', 'Phường', 2),
	(55, 'Phường Cửa Đông', 'Phường', 2),
	(58, 'Phường Lý Thái Tổ', 'Phường', 2),
	(61, 'Phường Hàng Bạc', 'Phường', 2),
	(64, 'Phường Hàng Gai', 'Phường', 2),
	(67, 'Phường Chương Dương Độ', 'Phường', 2),
	(70, 'Phường Hàng Trống', 'Phường', 2),
	(73, 'Phường Cửa Nam', 'Phường', 2),
	(76, 'Phường Hàng Bông', 'Phường', 2),
	(79, 'Phường Tràng Tiền', 'Phường', 2),
	(82, 'Phường Trần Hưng Đạo', 'Phường', 2),
	(85, 'Phường Phan Chu Trinh', 'Phường', 2),
	(88, 'Phường Hàng Bài', 'Phường', 2),
	(91, 'Phường Phú Thượng', 'Phường', 3),
	(94, 'Phường Nhật Tân', 'Phường', 3),
	(97, 'Phường Tứ Liên', 'Phường', 3),
	(100, 'Phường Quảng An', 'Phường', 3),
	(103, 'Phường Xuân La', 'Phường', 3),
	(106, 'Phường Yên Phụ', 'Phường', 3),
	(109, 'Phường Bưởi', 'Phường', 3),
	(112, 'Phường Thụy Khuê', 'Phường', 3),
	(115, 'Phường Thượng Thanh', 'Phường', 4),
	(118, 'Phường Ngọc Thụy', 'Phường', 4),
	(121, 'Phường Giang Biên', 'Phường', 4),
	(124, 'Phường Đức Giang', 'Phường', 4),
	(127, 'Phường Việt Hưng', 'Phường', 4),
	(130, 'Phường Gia Thụy', 'Phường', 4),
	(133, 'Phường Ngọc Lâm', 'Phường', 4),
	(136, 'Phường Phúc Lợi', 'Phường', 4),
	(139, 'Phường Bồ Đề', 'Phường', 4),
	(142, 'Phường Sài Đồng', 'Phường', 4),
	(145, 'Phường Long Biên', 'Phường', 4),
	(148, 'Phường Thạch Bàn', 'Phường', 4),
	(151, 'Phường Phúc Đồng', 'Phường', 4),
	(154, 'Phường Cự Khối', 'Phường', 4),
	(157, 'Phường Nghĩa Đô', 'Phường', 5),
	(160, 'Phường Nghĩa Tân', 'Phường', 5),
	(163, 'Phường Mai Dịch', 'Phường', 5),
	(166, 'Phường Dịch Vọng', 'Phường', 5),
	(167, 'Phường Dịch Vọng Hậu', 'Phường', 5),
	(169, 'Phường Quan Hoa', 'Phường', 5),
	(172, 'Phường Yên Hoà', 'Phường', 5),
	(175, 'Phường Trung Hoà', 'Phường', 5),
	(178, 'Phường Cát Linh', 'Phường', 6),
	(181, 'Phường Văn Miếu', 'Phường', 6),
	(184, 'Phường Quốc Tử Giám', 'Phường', 6),
	(187, 'Phường Láng Thượng', 'Phường', 6),
	(190, 'Phường Ô Chợ Dừa', 'Phường', 6),
	(193, 'Phường Văn Chương', 'Phường', 6),
	(196, 'Phường Hàng Bột', 'Phường', 6),
	(199, 'Phường Láng Hạ', 'Phường', 6),
	(202, 'Phường Khâm Thiên', 'Phường', 6),
	(205, 'Phường Thổ Quan', 'Phường', 6),
	(208, 'Phường Nam Đồng', 'Phường', 6),
	(211, 'Phường Trung Phụng', 'Phường', 6),
	(214, 'Phường Quang Trung', 'Phường', 6),
	(217, 'Phường Trung Liệt', 'Phường', 6),
	(220, 'Phường Phương Liên', 'Phường', 6),
	(223, 'Phường Thịnh Quang', 'Phường', 6),
	(226, 'Phường Trung Tự', 'Phường', 6),
	(229, 'Phường Kim Liên', 'Phường', 6),
	(232, 'Phường Phương Mai', 'Phường', 6),
	(235, 'Phường Ngã Tư Sở', 'Phường', 6),
	(238, 'Phường Khương Thượng', 'Phường', 6),
	(241, 'Phường Nguyễn Du', 'Phường', 7),
	(244, 'Phường Bạch Đằng', 'Phường', 7),
	(247, 'Phường Phạm Đình Hổ', 'Phường', 7),
	(250, 'Phường Bùi Thị Xuân', 'Phường', 7),
	(253, 'Phường Ngô Thì Nhậm', 'Phường', 7),
	(256, 'Phường Lê Đại Hành', 'Phường', 7),
	(259, 'Phường Đồng Nhân', 'Phường', 7),
	(262, 'Phường Phố Huế', 'Phường', 7),
	(265, 'Phường Đống Mác', 'Phường', 7),
	(268, 'Phường Thanh Lương', 'Phường', 7),
	(271, 'Phường Thanh Nhàn', 'Phường', 7),
	(274, 'Phường Cầu Dền', 'Phường', 7),
	(277, 'Phường Bách Khoa', 'Phường', 7),
	(280, 'Phường Đồng Tâm', 'Phường', 7),
	(283, 'Phường Vĩnh Tuy', 'Phường', 7),
	(286, 'Phường Bạch Mai', 'Phường', 7),
	(289, 'Phường Quỳnh Mai', 'Phường', 7),
	(292, 'Phường Quỳnh Lôi', 'Phường', 7),
	(295, 'Phường Minh Khai', 'Phường', 7),
	(298, 'Phường Trương Định', 'Phường', 7),
	(301, 'Phường Thanh Trì', 'Phường', 8),
	(304, 'Phường Vĩnh Hưng', 'Phường', 8),
	(307, 'Phường Định Công', 'Phường', 8),
	(310, 'Phường Mai Động', 'Phường', 8),
	(313, 'Phường Tương Mai', 'Phường', 8),
	(316, 'Phường Đại Kim', 'Phường', 8),
	(319, 'Phường Tân Mai', 'Phường', 8),
	(322, 'Phường Hoàng Văn Thụ', 'Phường', 8),
	(325, 'Phường Giáp Bát', 'Phường', 8),
	(328, 'Phường Lĩnh Nam', 'Phường', 8),
	(331, 'Phường Thịnh Liệt', 'Phường', 8),
	(334, 'Phường Trần Phú', 'Phường', 8),
	(337, 'Phường Hoàng Liệt', 'Phường', 8),
	(340, 'Phường Yên Sở', 'Phường', 8),
	(343, 'Phường Nhân Chính', 'Phường', 9),
	(346, 'Phường Thượng Đình', 'Phường', 9),
	(349, 'Phường Khương Trung', 'Phường', 9),
	(352, 'Phường Khương Mai', 'Phường', 9),
	(355, 'Phường Thanh Xuân Trung', 'Phường', 9),
	(358, 'Phường Phương Liệt', 'Phường', 9),
	(361, 'Phường Hạ Đình', 'Phường', 9),
	(364, 'Phường Khương Đình', 'Phường', 9),
	(367, 'Phường Thanh Xuân Bắc', 'Phường', 9),
	(370, 'Phường Thanh Xuân Nam', 'Phường', 9),
	(373, 'Phường Kim Giang', 'Phường', 9),
	(376, 'Thị trấn Sóc Sơn', 'Thị trấn', 16),
	(379, 'Xã Bắc Sơn', 'Xã', 16),
	(382, 'Xã Minh Trí', 'Xã', 16),
	(385, 'Xã Hồng Kỳ', 'Xã', 16),
	(388, 'Xã Nam Sơn', 'Xã', 16),
	(391, 'Xã Trung Giã', 'Xã', 16),
	(394, 'Xã Tân Hưng', 'Xã', 16),
	(397, 'Xã Minh Phú', 'Xã', 16),
	(400, 'Xã Phù Linh', 'Xã', 16),
	(403, 'Xã Bắc Phú', 'Xã', 16),
	(406, 'Xã Tân Minh', 'Xã', 16),
	(409, 'Xã Quang Tiến', 'Xã', 16),
	(412, 'Xã Hiền Ninh', 'Xã', 16),
	(415, 'Xã Tân Dân', 'Xã', 16),
	(418, 'Xã Tiên Dược', 'Xã', 16),
	(421, 'Xã Việt Long', 'Xã', 16),
	(424, 'Xã Xuân Giang', 'Xã', 16),
	(427, 'Xã Mai Đình', 'Xã', 16),
	(430, 'Xã Đức Hoà', 'Xã', 16),
	(433, 'Xã Thanh Xuân', 'Xã', 16),
	(436, 'Xã Đông Xuân', 'Xã', 16),
	(439, 'Xã Kim Lũ', 'Xã', 16),
	(442, 'Xã Phú Cường', 'Xã', 16),
	(445, 'Xã Phú Minh', 'Xã', 16),
	(448, 'Xã Phù Lỗ', 'Xã', 16),
	(451, 'Xã Xuân Thu', 'Xã', 16),
	(454, 'Thị trấn Đông Anh', 'Thị trấn', 17),
	(457, 'Xã Xuân Nộn', 'Xã', 17),
	(460, 'Xã Thuỵ Lâm', 'Xã', 17),
	(463, 'Xã Bắc Hồng', 'Xã', 17),
	(466, 'Xã Nguyên Khê', 'Xã', 17),
	(469, 'Xã Nam Hồng', 'Xã', 17),
	(472, 'Xã Tiên Dương', 'Xã', 17),
	(475, 'Xã Vân Hà', 'Xã', 17),
	(478, 'Xã Uy Nỗ', 'Xã', 17),
	(481, 'Xã Vân Nội', 'Xã', 17),
	(484, 'Xã Liên Hà', 'Xã', 17),
	(487, 'Xã Việt Hùng', 'Xã', 17),
	(490, 'Xã Kim Nỗ', 'Xã', 17),
	(493, 'Xã Kim Chung', 'Xã', 17),
	(496, 'Xã Dục Tú', 'Xã', 17),
	(499, 'Xã Đại Mạch', 'Xã', 17),
	(502, 'Xã Vĩnh Ngọc', 'Xã', 17),
	(505, 'Xã Cổ Loa', 'Xã', 17),
	(508, 'Xã Hải Bối', 'Xã', 17),
	(511, 'Xã Xuân Canh', 'Xã', 17),
	(514, 'Xã Võng La', 'Xã', 17),
	(517, 'Xã Tầm Xá', 'Xã', 17),
	(520, 'Xã Mai Lâm', 'Xã', 17),
	(523, 'Xã Đông Hội', 'Xã', 17),
	(526, 'Thị trấn Yên Viên', 'Thị trấn', 18),
	(529, 'Xã Yên Thường', 'Xã', 18),
	(532, 'Xã Yên Viên', 'Xã', 18),
	(535, 'Xã Ninh Hiệp', 'Xã', 18),
	(538, 'Xã Đình Xuyên', 'Xã', 18),
	(541, 'Xã Dương Hà', 'Xã', 18),
	(544, 'Xã Phù Đổng', 'Xã', 18),
	(547, 'Xã Trung Mầu', 'Xã', 18),
	(550, 'Xã Lệ Chi', 'Xã', 18),
	(553, 'Xã Cổ Bi', 'Xã', 18),
	(556, 'Xã Đặng Xá', 'Xã', 18),
	(559, 'Xã Phú Thị', 'Xã', 18),
	(562, 'Xã Kim Sơn', 'Xã', 18),
	(565, 'Thị trấn Trâu Quỳ', 'Thị trấn', 18),
	(568, 'Xã Dương Quang', 'Xã', 18),
	(571, 'Xã Dương Xá', 'Xã', 18),
	(574, 'Xã Đông Dư', 'Xã', 18),
	(577, 'Xã Đa Tốn', 'Xã', 18),
	(580, 'Xã Kiêu Kỵ', 'Xã', 18),
	(583, 'Xã Bát Tràng', 'Xã', 18),
	(586, 'Xã Kim Lan', 'Xã', 18),
	(589, 'Xã Văn Đức', 'Xã', 18),
	(592, 'Phường Cầu Diễn', 'Phường', 19),
	(595, 'Phường Thượng Cát', 'Phường', 21),
	(598, 'Phường Liên Mạc', 'Phường', 21),
	(601, 'Phường Đông Ngạc', 'Phường', 21),
	(602, 'Phường Đức Thắng', 'Phường', 21),
	(604, 'Phường Thụy Phương', 'Phường', 21),
	(607, 'Phường Tây Tựu', 'Phường', 21),
	(610, 'Phường Xuân Đỉnh', 'Phường', 21),
	(611, 'Phường Xuân Tảo', 'Phường', 21),
	(613, 'Phường Minh Khai', 'Phường', 21),
	(616, 'Phường Cổ Nhuế 1', 'Phường', 21),
	(617, 'Phường Cổ Nhuế 2', 'Phường', 21),
	(619, 'Phường Phú Diễn', 'Phường', 21),
	(620, 'Phường Phúc Diễn', 'Phường', 21),
	(622, 'Phường Xuân Phương', 'Phường', 19),
	(623, 'Phường Phương Canh', 'Phường', 19),
	(625, 'Phường Mỹ Đình 1', 'Phường', 19),
	(626, 'Phường Mỹ Đình 2', 'Phường', 19),
	(628, 'Phường Tây Mỗ', 'Phường', 19),
	(631, 'Phường Mễ Trì', 'Phường', 19),
	(632, 'Phường Phú Đô', 'Phường', 19),
	(634, 'Phường Đại Mỗ', 'Phường', 19),
	(637, 'Phường Trung Văn', 'Phường', 19),
	(640, 'Thị trấn Văn Điển', 'Thị trấn', 20),
	(643, 'Xã Tân Triều', 'Xã', 20),
	(646, 'Xã Thanh Liệt', 'Xã', 20),
	(649, 'Xã Tả Thanh Oai', 'Xã', 20),
	(652, 'Xã Hữu Hoà', 'Xã', 20),
	(655, 'Xã Tam Hiệp', 'Xã', 20),
	(658, 'Xã Tứ Hiệp', 'Xã', 20),
	(661, 'Xã Yên Mỹ', 'Xã', 20),
	(664, 'Xã Vĩnh Quỳnh', 'Xã', 20),
	(667, 'Xã Ngũ Hiệp', 'Xã', 20),
	(670, 'Xã Duyên Hà', 'Xã', 20),
	(673, 'Xã Ngọc Hồi', 'Xã', 20),
	(676, 'Xã Vạn Phúc', 'Xã', 20),
	(679, 'Xã Đại áng', 'Xã', 20),
	(682, 'Xã Liên Ninh', 'Xã', 20),
	(685, 'Xã Đông Mỹ', 'Xã', 20),
	(4927, 'Xã Yên Trung', 'Xã', 276),
	(4930, 'Xã Yên Bình', 'Xã', 276),
	(4936, 'Xã Tiến Xuân', 'Xã', 276),
	(4939, 'Xã Đông Xuân', 'Xã', 275),
	(8973, 'Thị trấn Chi Đông', 'Thị trấn', 250),
	(8974, 'Xã Đại Thịnh', 'Xã', 250),
	(8977, 'Xã Kim Hoa', 'Xã', 250),
	(8980, 'Xã Thạch Đà', 'Xã', 250),
	(8983, 'Xã Tiến Thắng', 'Xã', 250),
	(8986, 'Xã Tự Lập', 'Xã', 250),
	(8989, 'Thị trấn Quang Minh', 'Thị trấn', 250),
	(8992, 'Xã Thanh Lâm', 'Xã', 250),
	(8995, 'Xã Tam Đồng', 'Xã', 250),
	(8998, 'Xã Liên Mạc', 'Xã', 250),
	(9001, 'Xã Vạn Yên', 'Xã', 250),
	(9004, 'Xã Chu Phan', 'Xã', 250),
	(9007, 'Xã Tiến Thịnh', 'Xã', 250),
	(9010, 'Xã Mê Linh', 'Xã', 250),
	(9013, 'Xã Văn Khê', 'Xã', 250),
	(9016, 'Xã Hoàng Kim', 'Xã', 250),
	(9019, 'Xã Tiền Phong', 'Xã', 250),
	(9022, 'Xã Tráng Việt', 'Xã', 250),
	(9538, 'Phường Nguyễn Trãi', 'Phường', 268),
	(9541, 'Phường Mộ Lao', 'Phường', 268),
	(9542, 'Phường Văn Quán', 'Phường', 268),
	(9544, 'Phường Vạn Phúc', 'Phường', 268),
	(9547, 'Phường Yết Kiêu', 'Phường', 268),
	(9550, 'Phường Quang Trung', 'Phường', 268),
	(9551, 'Phường La Khê', 'Phường', 268),
	(9552, 'Phường Phú La', 'Phường', 268),
	(9553, 'Phường Phúc La', 'Phường', 268),
	(9556, 'Phường Hà Cầu', 'Phường', 268),
	(9562, 'Phường Yên Nghĩa', 'Phường', 268),
	(9565, 'Phường Kiến Hưng', 'Phường', 268),
	(9568, 'Phường Phú Lãm', 'Phường', 268),
	(9571, 'Phường Phú Lương', 'Phường', 268),
	(9574, 'Phường Lê Lợi', 'Phường', 269),
	(9577, 'Phường Phú Thịnh', 'Phường', 269),
	(9580, 'Phường Ngô Quyền', 'Phường', 269),
	(9583, 'Phường Quang Trung', 'Phường', 269),
	(9586, 'Phường Sơn Lộc', 'Phường', 269),
	(9589, 'Phường Xuân Khanh', 'Phường', 269),
	(9592, 'Xã Đường Lâm', 'Xã', 269),
	(9595, 'Phường Viên Sơn', 'Phường', 269),
	(9598, 'Xã Xuân Sơn', 'Xã', 269),
	(9601, 'Phường Trung Hưng', 'Phường', 269),
	(9604, 'Xã Thanh Mỹ', 'Xã', 269),
	(9607, 'Phường Trung Sơn Trầm', 'Phường', 269),
	(9610, 'Xã Kim Sơn', 'Xã', 269),
	(9613, 'Xã Sơn Đông', 'Xã', 269),
	(9616, 'Xã Cổ Đông', 'Xã', 269),
	(9619, 'Thị trấn Tây Đằng', 'Thị trấn', 271),
	(9625, 'Xã Phú Cường', 'Xã', 271),
	(9628, 'Xã Cổ Đô', 'Xã', 271),
	(9631, 'Xã Tản Hồng', 'Xã', 271),
	(9634, 'Xã Vạn Thắng', 'Xã', 271),
	(9637, 'Xã Châu Sơn', 'Xã', 271),
	(9640, 'Xã Phong Vân', 'Xã', 271),
	(9643, 'Xã Phú Đông', 'Xã', 271),
	(9646, 'Xã Phú Phương', 'Xã', 271),
	(9649, 'Xã Phú Châu', 'Xã', 271),
	(9652, 'Xã Thái Hòa', 'Xã', 271),
	(9655, 'Xã Đồng Thái', 'Xã', 271),
	(9658, 'Xã Phú Sơn', 'Xã', 271),
	(9661, 'Xã Minh Châu', 'Xã', 271),
	(9664, 'Xã Vật Lại', 'Xã', 271),
	(9667, 'Xã Chu Minh', 'Xã', 271),
	(9670, 'Xã Tòng Bạt', 'Xã', 271),
	(9673, 'Xã Cẩm Lĩnh', 'Xã', 271),
	(9676, 'Xã Sơn Đà', 'Xã', 271),
	(9679, 'Xã Đông Quang', 'Xã', 271),
	(9682, 'Xã Tiên Phong', 'Xã', 271),
	(9685, 'Xã Thụy An', 'Xã', 271),
	(9688, 'Xã Cam Thượng', 'Xã', 271),
	(9691, 'Xã Thuần Mỹ', 'Xã', 271),
	(9694, 'Xã Tản Lĩnh', 'Xã', 271),
	(9697, 'Xã Ba Trại', 'Xã', 271),
	(9700, 'Xã Minh Quang', 'Xã', 271),
	(9703, 'Xã Ba Vì', 'Xã', 271),
	(9706, 'Xã Vân Hòa', 'Xã', 271),
	(9709, 'Xã Yên Bài', 'Xã', 271),
	(9712, 'Xã Khánh Thượng', 'Xã', 271),
	(9715, 'Thị trấn Phúc Thọ', 'Thị trấn', 272),
	(9718, 'Xã Vân Hà', 'Xã', 272),
	(9721, 'Xã Vân Phúc', 'Xã', 272),
	(9724, 'Xã Vân Nam', 'Xã', 272),
	(9727, 'Xã Xuân Phú', 'Xã', 272),
	(9730, 'Xã Phương Độ', 'Xã', 272),
	(9733, 'Xã Sen Chiểu', 'Xã', 272),
	(9736, 'Xã Cẩm Đình', 'Xã', 272),
	(9739, 'Xã Võng Xuyên', 'Xã', 272),
	(9742, 'Xã Thọ Lộc', 'Xã', 272),
	(9745, 'Xã Long Xuyên', 'Xã', 272),
	(9748, 'Xã Thượng Cốc', 'Xã', 272),
	(9751, 'Xã Hát Môn', 'Xã', 272),
	(9754, 'Xã Tích Giang', 'Xã', 272),
	(9757, 'Xã Thanh Đa', 'Xã', 272),
	(9760, 'Xã Trạch Mỹ Lộc', 'Xã', 272),
	(9763, 'Xã Phúc Hòa', 'Xã', 272),
	(9766, 'Xã Ngọc Tảo', 'Xã', 272),
	(9769, 'Xã Phụng Thượng', 'Xã', 272),
	(9772, 'Xã Tam Thuấn', 'Xã', 272),
	(9775, 'Xã Tam Hiệp', 'Xã', 272),
	(9778, 'Xã Hiệp Thuận', 'Xã', 272),
	(9781, 'Xã Liên Hiệp', 'Xã', 272),
	(9784, 'Thị trấn Phùng', 'Thị trấn', 273),
	(9787, 'Xã Trung Châu', 'Xã', 273),
	(9790, 'Xã Thọ An', 'Xã', 273),
	(9793, 'Xã Thọ Xuân', 'Xã', 273),
	(9796, 'Xã Hồng Hà', 'Xã', 273),
	(9799, 'Xã Liên Hồng', 'Xã', 273),
	(9802, 'Xã Liên Hà', 'Xã', 273),
	(9805, 'Xã Hạ Mỗ', 'Xã', 273),
	(9808, 'Xã Liên Trung', 'Xã', 273),
	(9811, 'Xã Phương Đình', 'Xã', 273),
	(9814, 'Xã Thượng Mỗ', 'Xã', 273),
	(9817, 'Xã Tân Hội', 'Xã', 273),
	(9820, 'Xã Tân Lập', 'Xã', 273),
	(9823, 'Xã Đan Phượng', 'Xã', 273),
	(9826, 'Xã Đồng Tháp', 'Xã', 273),
	(9829, 'Xã Song Phượng', 'Xã', 273),
	(9832, 'Thị trấn Trạm Trôi', 'Thị trấn', 274),
	(9835, 'Xã Đức Thượng', 'Xã', 274),
	(9838, 'Xã Minh Khai', 'Xã', 274),
	(9841, 'Xã Dương Liễu', 'Xã', 274),
	(9844, 'Xã Di Trạch', 'Xã', 274),
	(9847, 'Xã Đức Giang', 'Xã', 274),
	(9850, 'Xã Cát Quế', 'Xã', 274),
	(9853, 'Xã Kim Chung', 'Xã', 274),
	(9856, 'Xã Yên Sở', 'Xã', 274),
	(9859, 'Xã Sơn Đồng', 'Xã', 274),
	(9862, 'Xã Vân Canh', 'Xã', 274),
	(9865, 'Xã Đắc Sở', 'Xã', 274),
	(9868, 'Xã Lại Yên', 'Xã', 274),
	(9871, 'Xã Tiền Yên', 'Xã', 274),
	(9874, 'Xã Song Phương', 'Xã', 274),
	(9877, 'Xã An Khánh', 'Xã', 274),
	(9880, 'Xã An Thượng', 'Xã', 274),
	(9883, 'Xã Vân Côn', 'Xã', 274),
	(9886, 'Phường Dương Nội', 'Phường', 268),
	(9889, 'Xã La Phù', 'Xã', 274),
	(9892, 'Xã Đông La', 'Xã', 274),
	(9895, 'Thị trấn Quốc Oai', 'Thị trấn', 275),
	(9898, 'Xã Sài Sơn', 'Xã', 275),
	(9901, 'Xã Phượng Cách', 'Xã', 275),
	(9904, 'Xã Yên Sơn', 'Xã', 275),
	(9907, 'Xã Ngọc Liệp', 'Xã', 275),
	(9910, 'Xã Ngọc Mỹ', 'Xã', 275),
	(9913, 'Xã Liệp Tuyết', 'Xã', 275),
	(9916, 'Xã Thạch Thán', 'Xã', 275),
	(9919, 'Xã Đồng Quang', 'Xã', 275),
	(9922, 'Xã Phú Cát', 'Xã', 275),
	(9925, 'Xã Tuyết Nghĩa', 'Xã', 275),
	(9928, 'Xã Nghĩa Hương', 'Xã', 275),
	(9931, 'Xã Cộng Hòa', 'Xã', 275),
	(9934, 'Xã Tân Phú', 'Xã', 275),
	(9937, 'Xã Đại Thành', 'Xã', 275),
	(9940, 'Xã Phú Mãn', 'Xã', 275),
	(9943, 'Xã Cấn Hữu', 'Xã', 275),
	(9946, 'Xã Tân Hòa', 'Xã', 275),
	(9949, 'Xã Hòa Thạch', 'Xã', 275),
	(9952, 'Xã Đông Yên', 'Xã', 275),
	(9955, 'Thị trấn Liên Quan', 'Thị trấn', 276),
	(9958, 'Xã Đại Đồng', 'Xã', 276),
	(9961, 'Xã Cẩm Yên', 'Xã', 276),
	(9964, 'Xã Lại Thượng', 'Xã', 276),
	(9967, 'Xã Phú Kim', 'Xã', 276),
	(9970, 'Xã Hương Ngải', 'Xã', 276),
	(9973, 'Xã Canh Nậu', 'Xã', 276),
	(9976, 'Xã Kim Quan', 'Xã', 276),
	(9979, 'Xã Dị Nậu', 'Xã', 276),
	(9982, 'Xã Bình Yên', 'Xã', 276),
	(9985, 'Xã Chàng Sơn', 'Xã', 276),
	(9988, 'Xã Thạch Hoà', 'Xã', 276),
	(9991, 'Xã Cần Kiệm', 'Xã', 276),
	(9994, 'Xã Hữu Bằng', 'Xã', 276),
	(9997, 'Xã Phùng Xá', 'Xã', 276),
	(10000, 'Xã Tân Xã', 'Xã', 276),
	(10003, 'Xã Thạch Xá', 'Xã', 276),
	(10006, 'Xã Bình Phú', 'Xã', 276),
	(10009, 'Xã Hạ Bằng', 'Xã', 276),
	(10012, 'Xã Đồng Trúc', 'Xã', 276),
	(10015, 'Thị trấn Chúc Sơn', 'Thị trấn', 277),
	(10018, 'Thị trấn Xuân Mai', 'Thị trấn', 277),
	(10021, 'Xã Phụng Châu', 'Xã', 277),
	(10024, 'Xã Tiên Phương', 'Xã', 277),
	(10027, 'Xã Đông Sơn', 'Xã', 277),
	(10030, 'Xã Đông Phương Yên', 'Xã', 277),
	(10033, 'Xã Phú Nghĩa', 'Xã', 277),
	(10039, 'Xã Trường Yên', 'Xã', 277),
	(10042, 'Xã Ngọc Hòa', 'Xã', 277),
	(10045, 'Xã Thủy Xuân Tiên', 'Xã', 277),
	(10048, 'Xã Thanh Bình', 'Xã', 277),
	(10051, 'Xã Trung Hòa', 'Xã', 277),
	(10054, 'Xã Đại Yên', 'Xã', 277),
	(10057, 'Xã Thụy Hương', 'Xã', 277),
	(10060, 'Xã Tốt Động', 'Xã', 277),
	(10063, 'Xã Lam Điền', 'Xã', 277),
	(10066, 'Xã Tân Tiến', 'Xã', 277),
	(10069, 'Xã Nam Phương Tiến', 'Xã', 277),
	(10072, 'Xã Hợp Đồng', 'Xã', 277),
	(10075, 'Xã Hoàng Văn Thụ', 'Xã', 277),
	(10078, 'Xã Hoàng Diệu', 'Xã', 277),
	(10081, 'Xã Hữu Văn', 'Xã', 277),
	(10084, 'Xã Quảng Bị', 'Xã', 277),
	(10087, 'Xã Mỹ Lương', 'Xã', 277),
	(10090, 'Xã Thượng Vực', 'Xã', 277),
	(10093, 'Xã Hồng Phong', 'Xã', 277),
	(10096, 'Xã Đồng Phú', 'Xã', 277),
	(10099, 'Xã Trần Phú', 'Xã', 277),
	(10102, 'Xã Văn Võ', 'Xã', 277),
	(10105, 'Xã Đồng Lạc', 'Xã', 277),
	(10108, 'Xã Hòa Chính', 'Xã', 277),
	(10111, 'Xã Phú Nam An', 'Xã', 277),
	(10114, 'Thị trấn Kim Bài', 'Thị trấn', 278),
	(10117, 'Phường Đồng Mai', 'Phường', 268),
	(10120, 'Xã Cự Khê', 'Xã', 278),
	(10123, 'Phường Biên Giang', 'Phường', 268),
	(10126, 'Xã Bích Hòa', 'Xã', 278),
	(10129, 'Xã Mỹ Hưng', 'Xã', 278),
	(10132, 'Xã Cao Viên', 'Xã', 278),
	(10135, 'Xã Bình Minh', 'Xã', 278),
	(10138, 'Xã Tam Hưng', 'Xã', 278),
	(10141, 'Xã Thanh Cao', 'Xã', 278),
	(10144, 'Xã Thanh Thùy', 'Xã', 278),
	(10147, 'Xã Thanh Mai', 'Xã', 278),
	(10150, 'Xã Thanh Văn', 'Xã', 278),
	(10153, 'Xã Đỗ Động', 'Xã', 278),
	(10156, 'Xã Kim An', 'Xã', 278),
	(10159, 'Xã Kim Thư', 'Xã', 278),
	(10162, 'Xã Phương Trung', 'Xã', 278),
	(10165, 'Xã Tân Ước', 'Xã', 278),
	(10168, 'Xã Dân Hòa', 'Xã', 278),
	(10171, 'Xã Liên Châu', 'Xã', 278),
	(10174, 'Xã Cao Dương', 'Xã', 278),
	(10177, 'Xã Xuân Dương', 'Xã', 278),
	(10180, 'Xã Hồng Dương', 'Xã', 278),
	(10183, 'Thị trấn Thường Tín', 'Thị trấn', 279),
	(10186, 'Xã Ninh Sở', 'Xã', 279),
	(10189, 'Xã Nhị Khê', 'Xã', 279),
	(10192, 'Xã Duyên Thái', 'Xã', 279),
	(10195, 'Xã Khánh Hà', 'Xã', 279),
	(10198, 'Xã Hòa Bình', 'Xã', 279),
	(10201, 'Xã Văn Bình', 'Xã', 279),
	(10204, 'Xã Hiền Giang', 'Xã', 279),
	(10207, 'Xã Hồng Vân', 'Xã', 279),
	(10210, 'Xã Vân Tảo', 'Xã', 279),
	(10213, 'Xã Liên Phương', 'Xã', 279),
	(10216, 'Xã Văn Phú', 'Xã', 279),
	(10219, 'Xã Tự Nhiên', 'Xã', 279),
	(10222, 'Xã Tiền Phong', 'Xã', 279),
	(10225, 'Xã Hà Hồi', 'Xã', 279),
	(10228, 'Xã Thư Phú', 'Xã', 279),
	(10231, 'Xã Nguyễn Trãi', 'Xã', 279),
	(10234, 'Xã Quất Động', 'Xã', 279),
	(10237, 'Xã Chương Dương', 'Xã', 279),
	(10240, 'Xã Tân Minh', 'Xã', 279),
	(10243, 'Xã Lê Lợi', 'Xã', 279),
	(10246, 'Xã Thắng Lợi', 'Xã', 279),
	(10249, 'Xã Dũng Tiến', 'Xã', 279),
	(10252, 'Xã Thống Nhất', 'Xã', 279),
	(10255, 'Xã Nghiêm Xuyên', 'Xã', 279),
	(10258, 'Xã Tô Hiệu', 'Xã', 279),
	(10261, 'Xã Văn Tự', 'Xã', 279),
	(10264, 'Xã Vạn Điểm', 'Xã', 279),
	(10267, 'Xã Minh Cường', 'Xã', 279),
	(10270, 'Thị trấn Phú Minh', 'Thị trấn', 280),
	(10273, 'Thị trấn Phú Xuyên', 'Thị trấn', 280),
	(10276, 'Xã Hồng Minh', 'Xã', 280),
	(10279, 'Xã Phượng Dực', 'Xã', 280),
	(10282, 'Xã Văn Nhân', 'Xã', 280),
	(10285, 'Xã Thụy Phú', 'Xã', 280),
	(10288, 'Xã Tri Trung', 'Xã', 280),
	(10291, 'Xã Đại Thắng', 'Xã', 280),
	(10294, 'Xã Phú Túc', 'Xã', 280),
	(10297, 'Xã Văn Hoàng', 'Xã', 280),
	(10300, 'Xã Hồng Thái', 'Xã', 280),
	(10303, 'Xã Hoàng Long', 'Xã', 280),
	(10306, 'Xã Quang Trung', 'Xã', 280),
	(10309, 'Xã Nam Phong', 'Xã', 280),
	(10312, 'Xã Nam Triều', 'Xã', 280),
	(10315, 'Xã Tân Dân', 'Xã', 280),
	(10318, 'Xã Sơn Hà', 'Xã', 280),
	(10321, 'Xã Chuyên Mỹ', 'Xã', 280),
	(10324, 'Xã Khai Thái', 'Xã', 280),
	(10327, 'Xã Phúc Tiến', 'Xã', 280),
	(10330, 'Xã Vân Từ', 'Xã', 280),
	(10333, 'Xã Tri Thủy', 'Xã', 280),
	(10336, 'Xã Đại Xuyên', 'Xã', 280),
	(10339, 'Xã Phú Yên', 'Xã', 280),
	(10342, 'Xã Bạch Hạ', 'Xã', 280),
	(10345, 'Xã Quang Lãng', 'Xã', 280),
	(10348, 'Xã Châu Can', 'Xã', 280),
	(10351, 'Xã Minh Tân', 'Xã', 280),
	(10354, 'Thị trấn Vân Đình', 'Thị trấn', 281),
	(10357, 'Xã Viên An', 'Xã', 281),
	(10360, 'Xã Viên Nội', 'Xã', 281),
	(10363, 'Xã Hoa Sơn', 'Xã', 281),
	(10366, 'Xã Quảng Phú Cầu', 'Xã', 281),
	(10369, 'Xã Trường Thịnh', 'Xã', 281),
	(10372, 'Xã Cao Thành', 'Xã', 281),
	(10375, 'Xã Liên Bạt', 'Xã', 281),
	(10378, 'Xã Sơn Công', 'Xã', 281),
	(10381, 'Xã Đồng Tiến', 'Xã', 281),
	(10384, 'Xã Phương Tú', 'Xã', 281),
	(10387, 'Xã Trung Tú', 'Xã', 281),
	(10390, 'Xã Đồng Tân', 'Xã', 281),
	(10393, 'Xã Tảo Dương Văn', 'Xã', 281),
	(10396, 'Xã Vạn Thái', 'Xã', 281),
	(10399, 'Xã Minh Đức', 'Xã', 281),
	(10402, 'Xã Hòa Lâm', 'Xã', 281),
	(10405, 'Xã Hòa Xá', 'Xã', 281),
	(10408, 'Xã Trầm Lộng', 'Xã', 281),
	(10411, 'Xã Kim Đường', 'Xã', 281),
	(10414, 'Xã Hòa Nam', 'Xã', 281),
	(10417, 'Xã Hòa Phú', 'Xã', 281),
	(10420, 'Xã Đội Bình', 'Xã', 281),
	(10423, 'Xã Đại Hùng', 'Xã', 281),
	(10426, 'Xã Đông Lỗ', 'Xã', 281),
	(10429, 'Xã Phù Lưu', 'Xã', 281),
	(10432, 'Xã Đại Cường', 'Xã', 281),
	(10435, 'Xã Lưu Hoàng', 'Xã', 281),
	(10438, 'Xã Hồng Quang', 'Xã', 281),
	(10441, 'Thị trấn Đại Nghĩa', 'Thị trấn', 282),
	(10444, 'Xã Đồng Tâm', 'Xã', 282),
	(10447, 'Xã Thượng Lâm', 'Xã', 282),
	(10450, 'Xã Tuy Lai', 'Xã', 282),
	(10453, 'Xã Phúc Lâm', 'Xã', 282),
	(10456, 'Xã Mỹ Thành', 'Xã', 282),
	(10459, 'Xã Bột Xuyên', 'Xã', 282),
	(10462, 'Xã An Mỹ', 'Xã', 282),
	(10465, 'Xã Hồng Sơn', 'Xã', 282),
	(10468, 'Xã Lê Thanh', 'Xã', 282),
	(10471, 'Xã Xuy Xá', 'Xã', 282),
	(10474, 'Xã Phùng Xá', 'Xã', 282),
	(10477, 'Xã Phù Lưu Tế', 'Xã', 282),
	(10480, 'Xã Đại Hưng', 'Xã', 282),
	(10483, 'Xã Vạn Kim', 'Xã', 282),
	(10486, 'Xã Đốc Tín', 'Xã', 282),
	(10489, 'Xã Hương Sơn', 'Xã', 282),
	(10492, 'Xã Hùng Tiến', 'Xã', 282),
	(10495, 'Xã An Tiến', 'Xã', 282),
	(10498, 'Xã Hợp Tiến', 'Xã', 282),
	(10501, 'Xã Hợp Thanh', 'Xã', 282),
	(10504, 'Xã An Phú', 'Xã', 282);
/*!40000 ALTER TABLE `subdistricts` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
