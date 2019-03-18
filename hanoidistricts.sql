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

-- Dumping structure for table hanoi.districts
CREATE TABLE IF NOT EXISTS `districts` (
  `maqh` varchar(5) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`maqh`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table hanoi.districts: ~30 rows (approximately)
DELETE FROM `districts`;
/*!40000 ALTER TABLE `districts` DISABLE KEYS */;
INSERT INTO `districts` (`maqh`, `name`, `type`) VALUES
	('001', 'Quận Ba Đình', 'Quận'),
	('002', 'Quận Hoàn Kiếm', 'Quận'),
	('003', 'Quận Tây Hồ', 'Quận'),
	('004', 'Quận Long Biên', 'Quận'),
	('005', 'Quận Cầu Giấy', 'Quận'),
	('006', 'Quận Đống Đa', 'Quận'),
	('007', 'Quận Hai Bà Trưng', 'Quận'),
	('008', 'Quận Hoàng Mai', 'Quận'),
	('009', 'Quận Thanh Xuân', 'Quận'),
	('016', 'Huyện Sóc Sơn', 'Huyện'),
	('017', 'Huyện Đông Anh', 'Huyện'),
	('018', 'Huyện Gia Lâm', 'Huyện'),
	('019', 'Quận Nam Từ Liêm', 'Quận'),
	('020', 'Huyện Thanh Trì', 'Huyện'),
	('021', 'Quận Bắc Từ Liêm', 'Quận'),
	('250', 'Huyện Mê Linh', 'Huyện'),
	('268', 'Quận Hà Đông', 'Quận'),
	('269', 'Thị xã Sơn Tây', 'Thị xã'),
	('271', 'Huyện Ba Vì', 'Huyện'),
	('272', 'Huyện Phúc Thọ', 'Huyện'),
	('273', 'Huyện Đan Phượng', 'Huyện'),
	('274', 'Huyện Hoài Đức', 'Huyện'),
	('275', 'Huyện Quốc Oai', 'Huyện'),
	('276', 'Huyện Thạch Thất', 'Huyện'),
	('277', 'Huyện Chương Mỹ', 'Huyện'),
	('278', 'Huyện Thanh Oai', 'Huyện'),
	('279', 'Huyện Thường Tín', 'Huyện'),
	('280', 'Huyện Phú Xuyên', 'Huyện'),
	('281', 'Huyện Ứng Hòa', 'Huyện'),
	('282', 'Huyện Mỹ Đức', 'Huyện');
/*!40000 ALTER TABLE `districts` ENABLE KEYS */;

-- Dumping structure for table hanoi.subdistricts
CREATE TABLE IF NOT EXISTS `subdistricts` (
  `xaid` varchar(5) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `maqh` varchar(5) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`xaid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table hanoi.subdistricts: ~584 rows (approximately)
DELETE FROM `subdistricts`;
/*!40000 ALTER TABLE `subdistricts` DISABLE KEYS */;
INSERT INTO `subdistricts` (`xaid`, `name`, `type`, `maqh`) VALUES
	('00001', 'Phường Phúc Xá', 'Phường', '001'),
	('00004', 'Phường Trúc Bạch', 'Phường', '001'),
	('00006', 'Phường Vĩnh Phúc', 'Phường', '001'),
	('00007', 'Phường Cống Vị', 'Phường', '001'),
	('00008', 'Phường Liễu Giai', 'Phường', '001'),
	('00010', 'Phường Nguyễn Trung Trực', 'Phường', '001'),
	('00013', 'Phường Quán Thánh', 'Phường', '001'),
	('00016', 'Phường Ngọc Hà', 'Phường', '001'),
	('00019', 'Phường Điện Biên', 'Phường', '001'),
	('00022', 'Phường Đội Cấn', 'Phường', '001'),
	('00025', 'Phường Ngọc Khánh', 'Phường', '001'),
	('00028', 'Phường Kim Mã', 'Phường', '001'),
	('00031', 'Phường Giảng Võ', 'Phường', '001'),
	('00034', 'Phường Thành Công', 'Phường', '001'),
	('00037', 'Phường Phúc Tân', 'Phường', '002'),
	('00040', 'Phường Đồng Xuân', 'Phường', '002'),
	('00043', 'Phường Hàng Mã', 'Phường', '002'),
	('00046', 'Phường Hàng Buồm', 'Phường', '002'),
	('00049', 'Phường Hàng Đào', 'Phường', '002'),
	('00052', 'Phường Hàng Bồ', 'Phường', '002'),
	('00055', 'Phường Cửa Đông', 'Phường', '002'),
	('00058', 'Phường Lý Thái Tổ', 'Phường', '002'),
	('00061', 'Phường Hàng Bạc', 'Phường', '002'),
	('00064', 'Phường Hàng Gai', 'Phường', '002'),
	('00067', 'Phường Chương Dương Độ', 'Phường', '002'),
	('00070', 'Phường Hàng Trống', 'Phường', '002'),
	('00073', 'Phường Cửa Nam', 'Phường', '002'),
	('00076', 'Phường Hàng Bông', 'Phường', '002'),
	('00079', 'Phường Tràng Tiền', 'Phường', '002'),
	('00082', 'Phường Trần Hưng Đạo', 'Phường', '002'),
	('00085', 'Phường Phan Chu Trinh', 'Phường', '002'),
	('00088', 'Phường Hàng Bài', 'Phường', '002'),
	('00091', 'Phường Phú Thượng', 'Phường', '003'),
	('00094', 'Phường Nhật Tân', 'Phường', '003'),
	('00097', 'Phường Tứ Liên', 'Phường', '003'),
	('00100', 'Phường Quảng An', 'Phường', '003'),
	('00103', 'Phường Xuân La', 'Phường', '003'),
	('00106', 'Phường Yên Phụ', 'Phường', '003'),
	('00109', 'Phường Bưởi', 'Phường', '003'),
	('00112', 'Phường Thụy Khuê', 'Phường', '003'),
	('00115', 'Phường Thượng Thanh', 'Phường', '004'),
	('00118', 'Phường Ngọc Thụy', 'Phường', '004'),
	('00121', 'Phường Giang Biên', 'Phường', '004'),
	('00124', 'Phường Đức Giang', 'Phường', '004'),
	('00127', 'Phường Việt Hưng', 'Phường', '004'),
	('00130', 'Phường Gia Thụy', 'Phường', '004'),
	('00133', 'Phường Ngọc Lâm', 'Phường', '004'),
	('00136', 'Phường Phúc Lợi', 'Phường', '004'),
	('00139', 'Phường Bồ Đề', 'Phường', '004'),
	('00142', 'Phường Sài Đồng', 'Phường', '004'),
	('00145', 'Phường Long Biên', 'Phường', '004'),
	('00148', 'Phường Thạch Bàn', 'Phường', '004'),
	('00151', 'Phường Phúc Đồng', 'Phường', '004'),
	('00154', 'Phường Cự Khối', 'Phường', '004'),
	('00157', 'Phường Nghĩa Đô', 'Phường', '005'),
	('00160', 'Phường Nghĩa Tân', 'Phường', '005'),
	('00163', 'Phường Mai Dịch', 'Phường', '005'),
	('00166', 'Phường Dịch Vọng', 'Phường', '005'),
	('00167', 'Phường Dịch Vọng Hậu', 'Phường', '005'),
	('00169', 'Phường Quan Hoa', 'Phường', '005'),
	('00172', 'Phường Yên Hoà', 'Phường', '005'),
	('00175', 'Phường Trung Hoà', 'Phường', '005'),
	('00178', 'Phường Cát Linh', 'Phường', '006'),
	('00181', 'Phường Văn Miếu', 'Phường', '006'),
	('00184', 'Phường Quốc Tử Giám', 'Phường', '006'),
	('00187', 'Phường Láng Thượng', 'Phường', '006'),
	('00190', 'Phường Ô Chợ Dừa', 'Phường', '006'),
	('00193', 'Phường Văn Chương', 'Phường', '006'),
	('00196', 'Phường Hàng Bột', 'Phường', '006'),
	('00199', 'Phường Láng Hạ', 'Phường', '006'),
	('00202', 'Phường Khâm Thiên', 'Phường', '006'),
	('00205', 'Phường Thổ Quan', 'Phường', '006'),
	('00208', 'Phường Nam Đồng', 'Phường', '006'),
	('00211', 'Phường Trung Phụng', 'Phường', '006'),
	('00214', 'Phường Quang Trung', 'Phường', '006'),
	('00217', 'Phường Trung Liệt', 'Phường', '006'),
	('00220', 'Phường Phương Liên', 'Phường', '006'),
	('00223', 'Phường Thịnh Quang', 'Phường', '006'),
	('00226', 'Phường Trung Tự', 'Phường', '006'),
	('00229', 'Phường Kim Liên', 'Phường', '006'),
	('00232', 'Phường Phương Mai', 'Phường', '006'),
	('00235', 'Phường Ngã Tư Sở', 'Phường', '006'),
	('00238', 'Phường Khương Thượng', 'Phường', '006'),
	('00241', 'Phường Nguyễn Du', 'Phường', '007'),
	('00244', 'Phường Bạch Đằng', 'Phường', '007'),
	('00247', 'Phường Phạm Đình Hổ', 'Phường', '007'),
	('00250', 'Phường Bùi Thị Xuân', 'Phường', '007'),
	('00253', 'Phường Ngô Thì Nhậm', 'Phường', '007'),
	('00256', 'Phường Lê Đại Hành', 'Phường', '007'),
	('00259', 'Phường Đồng Nhân', 'Phường', '007'),
	('00262', 'Phường Phố Huế', 'Phường', '007'),
	('00265', 'Phường Đống Mác', 'Phường', '007'),
	('00268', 'Phường Thanh Lương', 'Phường', '007'),
	('00271', 'Phường Thanh Nhàn', 'Phường', '007'),
	('00274', 'Phường Cầu Dền', 'Phường', '007'),
	('00277', 'Phường Bách Khoa', 'Phường', '007'),
	('00280', 'Phường Đồng Tâm', 'Phường', '007'),
	('00283', 'Phường Vĩnh Tuy', 'Phường', '007'),
	('00286', 'Phường Bạch Mai', 'Phường', '007'),
	('00289', 'Phường Quỳnh Mai', 'Phường', '007'),
	('00292', 'Phường Quỳnh Lôi', 'Phường', '007'),
	('00295', 'Phường Minh Khai', 'Phường', '007'),
	('00298', 'Phường Trương Định', 'Phường', '007'),
	('00301', 'Phường Thanh Trì', 'Phường', '008'),
	('00304', 'Phường Vĩnh Hưng', 'Phường', '008'),
	('00307', 'Phường Định Công', 'Phường', '008'),
	('00310', 'Phường Mai Động', 'Phường', '008'),
	('00313', 'Phường Tương Mai', 'Phường', '008'),
	('00316', 'Phường Đại Kim', 'Phường', '008'),
	('00319', 'Phường Tân Mai', 'Phường', '008'),
	('00322', 'Phường Hoàng Văn Thụ', 'Phường', '008'),
	('00325', 'Phường Giáp Bát', 'Phường', '008'),
	('00328', 'Phường Lĩnh Nam', 'Phường', '008'),
	('00331', 'Phường Thịnh Liệt', 'Phường', '008'),
	('00334', 'Phường Trần Phú', 'Phường', '008'),
	('00337', 'Phường Hoàng Liệt', 'Phường', '008'),
	('00340', 'Phường Yên Sở', 'Phường', '008'),
	('00343', 'Phường Nhân Chính', 'Phường', '009'),
	('00346', 'Phường Thượng Đình', 'Phường', '009'),
	('00349', 'Phường Khương Trung', 'Phường', '009'),
	('00352', 'Phường Khương Mai', 'Phường', '009'),
	('00355', 'Phường Thanh Xuân Trung', 'Phường', '009'),
	('00358', 'Phường Phương Liệt', 'Phường', '009'),
	('00361', 'Phường Hạ Đình', 'Phường', '009'),
	('00364', 'Phường Khương Đình', 'Phường', '009'),
	('00367', 'Phường Thanh Xuân Bắc', 'Phường', '009'),
	('00370', 'Phường Thanh Xuân Nam', 'Phường', '009'),
	('00373', 'Phường Kim Giang', 'Phường', '009'),
	('00376', 'Thị trấn Sóc Sơn', 'Thị trấn', '016'),
	('00379', 'Xã Bắc Sơn', 'Xã', '016'),
	('00382', 'Xã Minh Trí', 'Xã', '016'),
	('00385', 'Xã Hồng Kỳ', 'Xã', '016'),
	('00388', 'Xã Nam Sơn', 'Xã', '016'),
	('00391', 'Xã Trung Giã', 'Xã', '016'),
	('00394', 'Xã Tân Hưng', 'Xã', '016'),
	('00397', 'Xã Minh Phú', 'Xã', '016'),
	('00400', 'Xã Phù Linh', 'Xã', '016'),
	('00403', 'Xã Bắc Phú', 'Xã', '016'),
	('00406', 'Xã Tân Minh', 'Xã', '016'),
	('00409', 'Xã Quang Tiến', 'Xã', '016'),
	('00412', 'Xã Hiền Ninh', 'Xã', '016'),
	('00415', 'Xã Tân Dân', 'Xã', '016'),
	('00418', 'Xã Tiên Dược', 'Xã', '016'),
	('00421', 'Xã Việt Long', 'Xã', '016'),
	('00424', 'Xã Xuân Giang', 'Xã', '016'),
	('00427', 'Xã Mai Đình', 'Xã', '016'),
	('00430', 'Xã Đức Hoà', 'Xã', '016'),
	('00433', 'Xã Thanh Xuân', 'Xã', '016'),
	('00436', 'Xã Đông Xuân', 'Xã', '016'),
	('00439', 'Xã Kim Lũ', 'Xã', '016'),
	('00442', 'Xã Phú Cường', 'Xã', '016'),
	('00445', 'Xã Phú Minh', 'Xã', '016'),
	('00448', 'Xã Phù Lỗ', 'Xã', '016'),
	('00451', 'Xã Xuân Thu', 'Xã', '016'),
	('00454', 'Thị trấn Đông Anh', 'Thị trấn', '017'),
	('00457', 'Xã Xuân Nộn', 'Xã', '017'),
	('00460', 'Xã Thuỵ Lâm', 'Xã', '017'),
	('00463', 'Xã Bắc Hồng', 'Xã', '017'),
	('00466', 'Xã Nguyên Khê', 'Xã', '017'),
	('00469', 'Xã Nam Hồng', 'Xã', '017'),
	('00472', 'Xã Tiên Dương', 'Xã', '017'),
	('00475', 'Xã Vân Hà', 'Xã', '017'),
	('00478', 'Xã Uy Nỗ', 'Xã', '017'),
	('00481', 'Xã Vân Nội', 'Xã', '017'),
	('00484', 'Xã Liên Hà', 'Xã', '017'),
	('00487', 'Xã Việt Hùng', 'Xã', '017'),
	('00490', 'Xã Kim Nỗ', 'Xã', '017'),
	('00493', 'Xã Kim Chung', 'Xã', '017'),
	('00496', 'Xã Dục Tú', 'Xã', '017'),
	('00499', 'Xã Đại Mạch', 'Xã', '017'),
	('00502', 'Xã Vĩnh Ngọc', 'Xã', '017'),
	('00505', 'Xã Cổ Loa', 'Xã', '017'),
	('00508', 'Xã Hải Bối', 'Xã', '017'),
	('00511', 'Xã Xuân Canh', 'Xã', '017'),
	('00514', 'Xã Võng La', 'Xã', '017'),
	('00517', 'Xã Tầm Xá', 'Xã', '017'),
	('00520', 'Xã Mai Lâm', 'Xã', '017'),
	('00523', 'Xã Đông Hội', 'Xã', '017'),
	('00526', 'Thị trấn Yên Viên', 'Thị trấn', '018'),
	('00529', 'Xã Yên Thường', 'Xã', '018'),
	('00532', 'Xã Yên Viên', 'Xã', '018'),
	('00535', 'Xã Ninh Hiệp', 'Xã', '018'),
	('00538', 'Xã Đình Xuyên', 'Xã', '018'),
	('00541', 'Xã Dương Hà', 'Xã', '018'),
	('00544', 'Xã Phù Đổng', 'Xã', '018'),
	('00547', 'Xã Trung Mầu', 'Xã', '018'),
	('00550', 'Xã Lệ Chi', 'Xã', '018'),
	('00553', 'Xã Cổ Bi', 'Xã', '018'),
	('00556', 'Xã Đặng Xá', 'Xã', '018'),
	('00559', 'Xã Phú Thị', 'Xã', '018'),
	('00562', 'Xã Kim Sơn', 'Xã', '018'),
	('00565', 'Thị trấn Trâu Quỳ', 'Thị trấn', '018'),
	('00568', 'Xã Dương Quang', 'Xã', '018'),
	('00571', 'Xã Dương Xá', 'Xã', '018'),
	('00574', 'Xã Đông Dư', 'Xã', '018'),
	('00577', 'Xã Đa Tốn', 'Xã', '018'),
	('00580', 'Xã Kiêu Kỵ', 'Xã', '018'),
	('00583', 'Xã Bát Tràng', 'Xã', '018'),
	('00586', 'Xã Kim Lan', 'Xã', '018'),
	('00589', 'Xã Văn Đức', 'Xã', '018'),
	('00592', 'Phường Cầu Diễn', 'Phường', '019'),
	('00595', 'Phường Thượng Cát', 'Phường', '021'),
	('00598', 'Phường Liên Mạc', 'Phường', '021'),
	('00601', 'Phường Đông Ngạc', 'Phường', '021'),
	('00602', 'Phường Đức Thắng', 'Phường', '021'),
	('00604', 'Phường Thụy Phương', 'Phường', '021'),
	('00607', 'Phường Tây Tựu', 'Phường', '021'),
	('00610', 'Phường Xuân Đỉnh', 'Phường', '021'),
	('00611', 'Phường Xuân Tảo', 'Phường', '021'),
	('00613', 'Phường Minh Khai', 'Phường', '021'),
	('00616', 'Phường Cổ Nhuế 1', 'Phường', '021'),
	('00617', 'Phường Cổ Nhuế 2', 'Phường', '021'),
	('00619', 'Phường Phú Diễn', 'Phường', '021'),
	('00620', 'Phường Phúc Diễn', 'Phường', '021'),
	('00622', 'Phường Xuân Phương', 'Phường', '019'),
	('00623', 'Phường Phương Canh', 'Phường', '019'),
	('00625', 'Phường Mỹ Đình 1', 'Phường', '019'),
	('00626', 'Phường Mỹ Đình 2', 'Phường', '019'),
	('00628', 'Phường Tây Mỗ', 'Phường', '019'),
	('00631', 'Phường Mễ Trì', 'Phường', '019'),
	('00632', 'Phường Phú Đô', 'Phường', '019'),
	('00634', 'Phường Đại Mỗ', 'Phường', '019'),
	('00637', 'Phường Trung Văn', 'Phường', '019'),
	('00640', 'Thị trấn Văn Điển', 'Thị trấn', '020'),
	('00643', 'Xã Tân Triều', 'Xã', '020'),
	('00646', 'Xã Thanh Liệt', 'Xã', '020'),
	('00649', 'Xã Tả Thanh Oai', 'Xã', '020'),
	('00652', 'Xã Hữu Hoà', 'Xã', '020'),
	('00655', 'Xã Tam Hiệp', 'Xã', '020'),
	('00658', 'Xã Tứ Hiệp', 'Xã', '020'),
	('00661', 'Xã Yên Mỹ', 'Xã', '020'),
	('00664', 'Xã Vĩnh Quỳnh', 'Xã', '020'),
	('00667', 'Xã Ngũ Hiệp', 'Xã', '020'),
	('00670', 'Xã Duyên Hà', 'Xã', '020'),
	('00673', 'Xã Ngọc Hồi', 'Xã', '020'),
	('00676', 'Xã Vạn Phúc', 'Xã', '020'),
	('00679', 'Xã Đại áng', 'Xã', '020'),
	('00682', 'Xã Liên Ninh', 'Xã', '020'),
	('00685', 'Xã Đông Mỹ', 'Xã', '020'),
	('04927', 'Xã Yên Trung', 'Xã', '276'),
	('04930', 'Xã Yên Bình', 'Xã', '276'),
	('04936', 'Xã Tiến Xuân', 'Xã', '276'),
	('04939', 'Xã Đông Xuân', 'Xã', '275'),
	('08973', 'Thị trấn Chi Đông', 'Thị trấn', '250'),
	('08974', 'Xã Đại Thịnh', 'Xã', '250'),
	('08977', 'Xã Kim Hoa', 'Xã', '250'),
	('08980', 'Xã Thạch Đà', 'Xã', '250'),
	('08983', 'Xã Tiến Thắng', 'Xã', '250'),
	('08986', 'Xã Tự Lập', 'Xã', '250'),
	('08989', 'Thị trấn Quang Minh', 'Thị trấn', '250'),
	('08992', 'Xã Thanh Lâm', 'Xã', '250'),
	('08995', 'Xã Tam Đồng', 'Xã', '250'),
	('08998', 'Xã Liên Mạc', 'Xã', '250'),
	('09001', 'Xã Vạn Yên', 'Xã', '250'),
	('09004', 'Xã Chu Phan', 'Xã', '250'),
	('09007', 'Xã Tiến Thịnh', 'Xã', '250'),
	('09010', 'Xã Mê Linh', 'Xã', '250'),
	('09013', 'Xã Văn Khê', 'Xã', '250'),
	('09016', 'Xã Hoàng Kim', 'Xã', '250'),
	('09019', 'Xã Tiền Phong', 'Xã', '250'),
	('09022', 'Xã Tráng Việt', 'Xã', '250'),
	('09538', 'Phường Nguyễn Trãi', 'Phường', '268'),
	('09541', 'Phường Mộ Lao', 'Phường', '268'),
	('09542', 'Phường Văn Quán', 'Phường', '268'),
	('09544', 'Phường Vạn Phúc', 'Phường', '268'),
	('09547', 'Phường Yết Kiêu', 'Phường', '268'),
	('09550', 'Phường Quang Trung', 'Phường', '268'),
	('09551', 'Phường La Khê', 'Phường', '268'),
	('09552', 'Phường Phú La', 'Phường', '268'),
	('09553', 'Phường Phúc La', 'Phường', '268'),
	('09556', 'Phường Hà Cầu', 'Phường', '268'),
	('09562', 'Phường Yên Nghĩa', 'Phường', '268'),
	('09565', 'Phường Kiến Hưng', 'Phường', '268'),
	('09568', 'Phường Phú Lãm', 'Phường', '268'),
	('09571', 'Phường Phú Lương', 'Phường', '268'),
	('09574', 'Phường Lê Lợi', 'Phường', '269'),
	('09577', 'Phường Phú Thịnh', 'Phường', '269'),
	('09580', 'Phường Ngô Quyền', 'Phường', '269'),
	('09583', 'Phường Quang Trung', 'Phường', '269'),
	('09586', 'Phường Sơn Lộc', 'Phường', '269'),
	('09589', 'Phường Xuân Khanh', 'Phường', '269'),
	('09592', 'Xã Đường Lâm', 'Xã', '269'),
	('09595', 'Phường Viên Sơn', 'Phường', '269'),
	('09598', 'Xã Xuân Sơn', 'Xã', '269'),
	('09601', 'Phường Trung Hưng', 'Phường', '269'),
	('09604', 'Xã Thanh Mỹ', 'Xã', '269'),
	('09607', 'Phường Trung Sơn Trầm', 'Phường', '269'),
	('09610', 'Xã Kim Sơn', 'Xã', '269'),
	('09613', 'Xã Sơn Đông', 'Xã', '269'),
	('09616', 'Xã Cổ Đông', 'Xã', '269'),
	('09619', 'Thị trấn Tây Đằng', 'Thị trấn', '271'),
	('09625', 'Xã Phú Cường', 'Xã', '271'),
	('09628', 'Xã Cổ Đô', 'Xã', '271'),
	('09631', 'Xã Tản Hồng', 'Xã', '271'),
	('09634', 'Xã Vạn Thắng', 'Xã', '271'),
	('09637', 'Xã Châu Sơn', 'Xã', '271'),
	('09640', 'Xã Phong Vân', 'Xã', '271'),
	('09643', 'Xã Phú Đông', 'Xã', '271'),
	('09646', 'Xã Phú Phương', 'Xã', '271'),
	('09649', 'Xã Phú Châu', 'Xã', '271'),
	('09652', 'Xã Thái Hòa', 'Xã', '271'),
	('09655', 'Xã Đồng Thái', 'Xã', '271'),
	('09658', 'Xã Phú Sơn', 'Xã', '271'),
	('09661', 'Xã Minh Châu', 'Xã', '271'),
	('09664', 'Xã Vật Lại', 'Xã', '271'),
	('09667', 'Xã Chu Minh', 'Xã', '271'),
	('09670', 'Xã Tòng Bạt', 'Xã', '271'),
	('09673', 'Xã Cẩm Lĩnh', 'Xã', '271'),
	('09676', 'Xã Sơn Đà', 'Xã', '271'),
	('09679', 'Xã Đông Quang', 'Xã', '271'),
	('09682', 'Xã Tiên Phong', 'Xã', '271'),
	('09685', 'Xã Thụy An', 'Xã', '271'),
	('09688', 'Xã Cam Thượng', 'Xã', '271'),
	('09691', 'Xã Thuần Mỹ', 'Xã', '271'),
	('09694', 'Xã Tản Lĩnh', 'Xã', '271'),
	('09697', 'Xã Ba Trại', 'Xã', '271'),
	('09700', 'Xã Minh Quang', 'Xã', '271'),
	('09703', 'Xã Ba Vì', 'Xã', '271'),
	('09706', 'Xã Vân Hòa', 'Xã', '271'),
	('09709', 'Xã Yên Bài', 'Xã', '271'),
	('09712', 'Xã Khánh Thượng', 'Xã', '271'),
	('09715', 'Thị trấn Phúc Thọ', 'Thị trấn', '272'),
	('09718', 'Xã Vân Hà', 'Xã', '272'),
	('09721', 'Xã Vân Phúc', 'Xã', '272'),
	('09724', 'Xã Vân Nam', 'Xã', '272'),
	('09727', 'Xã Xuân Phú', 'Xã', '272'),
	('09730', 'Xã Phương Độ', 'Xã', '272'),
	('09733', 'Xã Sen Chiểu', 'Xã', '272'),
	('09736', 'Xã Cẩm Đình', 'Xã', '272'),
	('09739', 'Xã Võng Xuyên', 'Xã', '272'),
	('09742', 'Xã Thọ Lộc', 'Xã', '272'),
	('09745', 'Xã Long Xuyên', 'Xã', '272'),
	('09748', 'Xã Thượng Cốc', 'Xã', '272'),
	('09751', 'Xã Hát Môn', 'Xã', '272'),
	('09754', 'Xã Tích Giang', 'Xã', '272'),
	('09757', 'Xã Thanh Đa', 'Xã', '272'),
	('09760', 'Xã Trạch Mỹ Lộc', 'Xã', '272'),
	('09763', 'Xã Phúc Hòa', 'Xã', '272'),
	('09766', 'Xã Ngọc Tảo', 'Xã', '272'),
	('09769', 'Xã Phụng Thượng', 'Xã', '272'),
	('09772', 'Xã Tam Thuấn', 'Xã', '272'),
	('09775', 'Xã Tam Hiệp', 'Xã', '272'),
	('09778', 'Xã Hiệp Thuận', 'Xã', '272'),
	('09781', 'Xã Liên Hiệp', 'Xã', '272'),
	('09784', 'Thị trấn Phùng', 'Thị trấn', '273'),
	('09787', 'Xã Trung Châu', 'Xã', '273'),
	('09790', 'Xã Thọ An', 'Xã', '273'),
	('09793', 'Xã Thọ Xuân', 'Xã', '273'),
	('09796', 'Xã Hồng Hà', 'Xã', '273'),
	('09799', 'Xã Liên Hồng', 'Xã', '273'),
	('09802', 'Xã Liên Hà', 'Xã', '273'),
	('09805', 'Xã Hạ Mỗ', 'Xã', '273'),
	('09808', 'Xã Liên Trung', 'Xã', '273'),
	('09811', 'Xã Phương Đình', 'Xã', '273'),
	('09814', 'Xã Thượng Mỗ', 'Xã', '273'),
	('09817', 'Xã Tân Hội', 'Xã', '273'),
	('09820', 'Xã Tân Lập', 'Xã', '273'),
	('09823', 'Xã Đan Phượng', 'Xã', '273'),
	('09826', 'Xã Đồng Tháp', 'Xã', '273'),
	('09829', 'Xã Song Phượng', 'Xã', '273'),
	('09832', 'Thị trấn Trạm Trôi', 'Thị trấn', '274'),
	('09835', 'Xã Đức Thượng', 'Xã', '274'),
	('09838', 'Xã Minh Khai', 'Xã', '274'),
	('09841', 'Xã Dương Liễu', 'Xã', '274'),
	('09844', 'Xã Di Trạch', 'Xã', '274'),
	('09847', 'Xã Đức Giang', 'Xã', '274'),
	('09850', 'Xã Cát Quế', 'Xã', '274'),
	('09853', 'Xã Kim Chung', 'Xã', '274'),
	('09856', 'Xã Yên Sở', 'Xã', '274'),
	('09859', 'Xã Sơn Đồng', 'Xã', '274'),
	('09862', 'Xã Vân Canh', 'Xã', '274'),
	('09865', 'Xã Đắc Sở', 'Xã', '274'),
	('09868', 'Xã Lại Yên', 'Xã', '274'),
	('09871', 'Xã Tiền Yên', 'Xã', '274'),
	('09874', 'Xã Song Phương', 'Xã', '274'),
	('09877', 'Xã An Khánh', 'Xã', '274'),
	('09880', 'Xã An Thượng', 'Xã', '274'),
	('09883', 'Xã Vân Côn', 'Xã', '274'),
	('09886', 'Phường Dương Nội', 'Phường', '268'),
	('09889', 'Xã La Phù', 'Xã', '274'),
	('09892', 'Xã Đông La', 'Xã', '274'),
	('09895', 'Thị trấn Quốc Oai', 'Thị trấn', '275'),
	('09898', 'Xã Sài Sơn', 'Xã', '275'),
	('09901', 'Xã Phượng Cách', 'Xã', '275'),
	('09904', 'Xã Yên Sơn', 'Xã', '275'),
	('09907', 'Xã Ngọc Liệp', 'Xã', '275'),
	('09910', 'Xã Ngọc Mỹ', 'Xã', '275'),
	('09913', 'Xã Liệp Tuyết', 'Xã', '275'),
	('09916', 'Xã Thạch Thán', 'Xã', '275'),
	('09919', 'Xã Đồng Quang', 'Xã', '275'),
	('09922', 'Xã Phú Cát', 'Xã', '275'),
	('09925', 'Xã Tuyết Nghĩa', 'Xã', '275'),
	('09928', 'Xã Nghĩa Hương', 'Xã', '275'),
	('09931', 'Xã Cộng Hòa', 'Xã', '275'),
	('09934', 'Xã Tân Phú', 'Xã', '275'),
	('09937', 'Xã Đại Thành', 'Xã', '275'),
	('09940', 'Xã Phú Mãn', 'Xã', '275'),
	('09943', 'Xã Cấn Hữu', 'Xã', '275'),
	('09946', 'Xã Tân Hòa', 'Xã', '275'),
	('09949', 'Xã Hòa Thạch', 'Xã', '275'),
	('09952', 'Xã Đông Yên', 'Xã', '275'),
	('09955', 'Thị trấn Liên Quan', 'Thị trấn', '276'),
	('09958', 'Xã Đại Đồng', 'Xã', '276'),
	('09961', 'Xã Cẩm Yên', 'Xã', '276'),
	('09964', 'Xã Lại Thượng', 'Xã', '276'),
	('09967', 'Xã Phú Kim', 'Xã', '276'),
	('09970', 'Xã Hương Ngải', 'Xã', '276'),
	('09973', 'Xã Canh Nậu', 'Xã', '276'),
	('09976', 'Xã Kim Quan', 'Xã', '276'),
	('09979', 'Xã Dị Nậu', 'Xã', '276'),
	('09982', 'Xã Bình Yên', 'Xã', '276'),
	('09985', 'Xã Chàng Sơn', 'Xã', '276'),
	('09988', 'Xã Thạch Hoà', 'Xã', '276'),
	('09991', 'Xã Cần Kiệm', 'Xã', '276'),
	('09994', 'Xã Hữu Bằng', 'Xã', '276'),
	('09997', 'Xã Phùng Xá', 'Xã', '276'),
	('10000', 'Xã Tân Xã', 'Xã', '276'),
	('10003', 'Xã Thạch Xá', 'Xã', '276'),
	('10006', 'Xã Bình Phú', 'Xã', '276'),
	('10009', 'Xã Hạ Bằng', 'Xã', '276'),
	('10012', 'Xã Đồng Trúc', 'Xã', '276'),
	('10015', 'Thị trấn Chúc Sơn', 'Thị trấn', '277'),
	('10018', 'Thị trấn Xuân Mai', 'Thị trấn', '277'),
	('10021', 'Xã Phụng Châu', 'Xã', '277'),
	('10024', 'Xã Tiên Phương', 'Xã', '277'),
	('10027', 'Xã Đông Sơn', 'Xã', '277'),
	('10030', 'Xã Đông Phương Yên', 'Xã', '277'),
	('10033', 'Xã Phú Nghĩa', 'Xã', '277'),
	('10039', 'Xã Trường Yên', 'Xã', '277'),
	('10042', 'Xã Ngọc Hòa', 'Xã', '277'),
	('10045', 'Xã Thủy Xuân Tiên', 'Xã', '277'),
	('10048', 'Xã Thanh Bình', 'Xã', '277'),
	('10051', 'Xã Trung Hòa', 'Xã', '277'),
	('10054', 'Xã Đại Yên', 'Xã', '277'),
	('10057', 'Xã Thụy Hương', 'Xã', '277'),
	('10060', 'Xã Tốt Động', 'Xã', '277'),
	('10063', 'Xã Lam Điền', 'Xã', '277'),
	('10066', 'Xã Tân Tiến', 'Xã', '277'),
	('10069', 'Xã Nam Phương Tiến', 'Xã', '277'),
	('10072', 'Xã Hợp Đồng', 'Xã', '277'),
	('10075', 'Xã Hoàng Văn Thụ', 'Xã', '277'),
	('10078', 'Xã Hoàng Diệu', 'Xã', '277'),
	('10081', 'Xã Hữu Văn', 'Xã', '277'),
	('10084', 'Xã Quảng Bị', 'Xã', '277'),
	('10087', 'Xã Mỹ Lương', 'Xã', '277'),
	('10090', 'Xã Thượng Vực', 'Xã', '277'),
	('10093', 'Xã Hồng Phong', 'Xã', '277'),
	('10096', 'Xã Đồng Phú', 'Xã', '277'),
	('10099', 'Xã Trần Phú', 'Xã', '277'),
	('10102', 'Xã Văn Võ', 'Xã', '277'),
	('10105', 'Xã Đồng Lạc', 'Xã', '277'),
	('10108', 'Xã Hòa Chính', 'Xã', '277'),
	('10111', 'Xã Phú Nam An', 'Xã', '277'),
	('10114', 'Thị trấn Kim Bài', 'Thị trấn', '278'),
	('10117', 'Phường Đồng Mai', 'Phường', '268'),
	('10120', 'Xã Cự Khê', 'Xã', '278'),
	('10123', 'Phường Biên Giang', 'Phường', '268'),
	('10126', 'Xã Bích Hòa', 'Xã', '278'),
	('10129', 'Xã Mỹ Hưng', 'Xã', '278'),
	('10132', 'Xã Cao Viên', 'Xã', '278'),
	('10135', 'Xã Bình Minh', 'Xã', '278'),
	('10138', 'Xã Tam Hưng', 'Xã', '278'),
	('10141', 'Xã Thanh Cao', 'Xã', '278'),
	('10144', 'Xã Thanh Thùy', 'Xã', '278'),
	('10147', 'Xã Thanh Mai', 'Xã', '278'),
	('10150', 'Xã Thanh Văn', 'Xã', '278'),
	('10153', 'Xã Đỗ Động', 'Xã', '278'),
	('10156', 'Xã Kim An', 'Xã', '278'),
	('10159', 'Xã Kim Thư', 'Xã', '278'),
	('10162', 'Xã Phương Trung', 'Xã', '278'),
	('10165', 'Xã Tân Ước', 'Xã', '278'),
	('10168', 'Xã Dân Hòa', 'Xã', '278'),
	('10171', 'Xã Liên Châu', 'Xã', '278'),
	('10174', 'Xã Cao Dương', 'Xã', '278'),
	('10177', 'Xã Xuân Dương', 'Xã', '278'),
	('10180', 'Xã Hồng Dương', 'Xã', '278'),
	('10183', 'Thị trấn Thường Tín', 'Thị trấn', '279'),
	('10186', 'Xã Ninh Sở', 'Xã', '279'),
	('10189', 'Xã Nhị Khê', 'Xã', '279'),
	('10192', 'Xã Duyên Thái', 'Xã', '279'),
	('10195', 'Xã Khánh Hà', 'Xã', '279'),
	('10198', 'Xã Hòa Bình', 'Xã', '279'),
	('10201', 'Xã Văn Bình', 'Xã', '279'),
	('10204', 'Xã Hiền Giang', 'Xã', '279'),
	('10207', 'Xã Hồng Vân', 'Xã', '279'),
	('10210', 'Xã Vân Tảo', 'Xã', '279'),
	('10213', 'Xã Liên Phương', 'Xã', '279'),
	('10216', 'Xã Văn Phú', 'Xã', '279'),
	('10219', 'Xã Tự Nhiên', 'Xã', '279'),
	('10222', 'Xã Tiền Phong', 'Xã', '279'),
	('10225', 'Xã Hà Hồi', 'Xã', '279'),
	('10228', 'Xã Thư Phú', 'Xã', '279'),
	('10231', 'Xã Nguyễn Trãi', 'Xã', '279'),
	('10234', 'Xã Quất Động', 'Xã', '279'),
	('10237', 'Xã Chương Dương', 'Xã', '279'),
	('10240', 'Xã Tân Minh', 'Xã', '279'),
	('10243', 'Xã Lê Lợi', 'Xã', '279'),
	('10246', 'Xã Thắng Lợi', 'Xã', '279'),
	('10249', 'Xã Dũng Tiến', 'Xã', '279'),
	('10252', 'Xã Thống Nhất', 'Xã', '279'),
	('10255', 'Xã Nghiêm Xuyên', 'Xã', '279'),
	('10258', 'Xã Tô Hiệu', 'Xã', '279'),
	('10261', 'Xã Văn Tự', 'Xã', '279'),
	('10264', 'Xã Vạn Điểm', 'Xã', '279'),
	('10267', 'Xã Minh Cường', 'Xã', '279'),
	('10270', 'Thị trấn Phú Minh', 'Thị trấn', '280'),
	('10273', 'Thị trấn Phú Xuyên', 'Thị trấn', '280'),
	('10276', 'Xã Hồng Minh', 'Xã', '280'),
	('10279', 'Xã Phượng Dực', 'Xã', '280'),
	('10282', 'Xã Văn Nhân', 'Xã', '280'),
	('10285', 'Xã Thụy Phú', 'Xã', '280'),
	('10288', 'Xã Tri Trung', 'Xã', '280'),
	('10291', 'Xã Đại Thắng', 'Xã', '280'),
	('10294', 'Xã Phú Túc', 'Xã', '280'),
	('10297', 'Xã Văn Hoàng', 'Xã', '280'),
	('10300', 'Xã Hồng Thái', 'Xã', '280'),
	('10303', 'Xã Hoàng Long', 'Xã', '280'),
	('10306', 'Xã Quang Trung', 'Xã', '280'),
	('10309', 'Xã Nam Phong', 'Xã', '280'),
	('10312', 'Xã Nam Triều', 'Xã', '280'),
	('10315', 'Xã Tân Dân', 'Xã', '280'),
	('10318', 'Xã Sơn Hà', 'Xã', '280'),
	('10321', 'Xã Chuyên Mỹ', 'Xã', '280'),
	('10324', 'Xã Khai Thái', 'Xã', '280'),
	('10327', 'Xã Phúc Tiến', 'Xã', '280'),
	('10330', 'Xã Vân Từ', 'Xã', '280'),
	('10333', 'Xã Tri Thủy', 'Xã', '280'),
	('10336', 'Xã Đại Xuyên', 'Xã', '280'),
	('10339', 'Xã Phú Yên', 'Xã', '280'),
	('10342', 'Xã Bạch Hạ', 'Xã', '280'),
	('10345', 'Xã Quang Lãng', 'Xã', '280'),
	('10348', 'Xã Châu Can', 'Xã', '280'),
	('10351', 'Xã Minh Tân', 'Xã', '280'),
	('10354', 'Thị trấn Vân Đình', 'Thị trấn', '281'),
	('10357', 'Xã Viên An', 'Xã', '281'),
	('10360', 'Xã Viên Nội', 'Xã', '281'),
	('10363', 'Xã Hoa Sơn', 'Xã', '281'),
	('10366', 'Xã Quảng Phú Cầu', 'Xã', '281'),
	('10369', 'Xã Trường Thịnh', 'Xã', '281'),
	('10372', 'Xã Cao Thành', 'Xã', '281'),
	('10375', 'Xã Liên Bạt', 'Xã', '281'),
	('10378', 'Xã Sơn Công', 'Xã', '281'),
	('10381', 'Xã Đồng Tiến', 'Xã', '281'),
	('10384', 'Xã Phương Tú', 'Xã', '281'),
	('10387', 'Xã Trung Tú', 'Xã', '281'),
	('10390', 'Xã Đồng Tân', 'Xã', '281'),
	('10393', 'Xã Tảo Dương Văn', 'Xã', '281'),
	('10396', 'Xã Vạn Thái', 'Xã', '281'),
	('10399', 'Xã Minh Đức', 'Xã', '281'),
	('10402', 'Xã Hòa Lâm', 'Xã', '281'),
	('10405', 'Xã Hòa Xá', 'Xã', '281'),
	('10408', 'Xã Trầm Lộng', 'Xã', '281'),
	('10411', 'Xã Kim Đường', 'Xã', '281'),
	('10414', 'Xã Hòa Nam', 'Xã', '281'),
	('10417', 'Xã Hòa Phú', 'Xã', '281'),
	('10420', 'Xã Đội Bình', 'Xã', '281'),
	('10423', 'Xã Đại Hùng', 'Xã', '281'),
	('10426', 'Xã Đông Lỗ', 'Xã', '281'),
	('10429', 'Xã Phù Lưu', 'Xã', '281'),
	('10432', 'Xã Đại Cường', 'Xã', '281'),
	('10435', 'Xã Lưu Hoàng', 'Xã', '281'),
	('10438', 'Xã Hồng Quang', 'Xã', '281'),
	('10441', 'Thị trấn Đại Nghĩa', 'Thị trấn', '282'),
	('10444', 'Xã Đồng Tâm', 'Xã', '282'),
	('10447', 'Xã Thượng Lâm', 'Xã', '282'),
	('10450', 'Xã Tuy Lai', 'Xã', '282'),
	('10453', 'Xã Phúc Lâm', 'Xã', '282'),
	('10456', 'Xã Mỹ Thành', 'Xã', '282'),
	('10459', 'Xã Bột Xuyên', 'Xã', '282'),
	('10462', 'Xã An Mỹ', 'Xã', '282'),
	('10465', 'Xã Hồng Sơn', 'Xã', '282'),
	('10468', 'Xã Lê Thanh', 'Xã', '282'),
	('10471', 'Xã Xuy Xá', 'Xã', '282'),
	('10474', 'Xã Phùng Xá', 'Xã', '282'),
	('10477', 'Xã Phù Lưu Tế', 'Xã', '282'),
	('10480', 'Xã Đại Hưng', 'Xã', '282'),
	('10483', 'Xã Vạn Kim', 'Xã', '282'),
	('10486', 'Xã Đốc Tín', 'Xã', '282'),
	('10489', 'Xã Hương Sơn', 'Xã', '282'),
	('10492', 'Xã Hùng Tiến', 'Xã', '282'),
	('10495', 'Xã An Tiến', 'Xã', '282'),
	('10498', 'Xã Hợp Tiến', 'Xã', '282'),
	('10501', 'Xã Hợp Thanh', 'Xã', '282'),
	('10504', 'Xã An Phú', 'Xã', '282');
/*!40000 ALTER TABLE `subdistricts` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
