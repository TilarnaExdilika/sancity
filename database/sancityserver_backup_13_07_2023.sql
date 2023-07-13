-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 08:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sancityserver`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_types`
--

CREATE TABLE `account_types` (
  `account_type_id` int(11) NOT NULL,
  `account_type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `account_types`
--

INSERT INTO `account_types` (`account_type_id`, `account_type_name`) VALUES
(1, 'Admin'),
(2, 'Manage'),
(3, 'Standard'),
(4, 'Golde'),
(5, 'Premium'),
(6, 'Users'),
(7, 'Business');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `appointment_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `area_id` int(11) NOT NULL,
  `area` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`area_id`, `area`) VALUES
(1, '50.00'),
(2, '100.00'),
(3, '150.00'),
(4, '200.00'),
(5, '250.00'),
(6, '300.00'),
(7, '350.00'),
(8, '400.00'),
(9, '450.00'),
(10, '500.00'),
(11, '600.00'),
(12, '700.00'),
(13, '800.00'),
(14, '900.00'),
(15, '1000.00');

-- --------------------------------------------------------

--
-- Table structure for table `bathrooms`
--

CREATE TABLE `bathrooms` (
  `bathroom_id` int(11) NOT NULL,
  `bathroom_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bathrooms`
--

INSERT INTO `bathrooms` (`bathroom_id`, `bathroom_count`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `bedrooms`
--

CREATE TABLE `bedrooms` (
  `bedroom_id` int(11) NOT NULL,
  `bedroom_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bedrooms`
--

INSERT INTO `bedrooms` (`bedroom_id`, `bedroom_count`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `property_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `contract_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `contract_type` enum('rental','sale') NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `favorite_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `property_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedback_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `feedback_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `property_id`, `latitude`, `longitude`, `address`, `city`, `state`, `country`) VALUES
(1, 1, NULL, NULL, 'Vinhomes Central Park, Bình Thạnh, Hồ Chí Minh', 'TP. Hồ Chí Minh', NULL, NULL),
(2, 2, NULL, NULL, 'Vinhomes Grand Park, Phường Long Thạnh Mỹ, Quận 9, Hồ Chí Minh', 'TP. Hồ Chí Minh', NULL, NULL),
(3, 3, NULL, NULL, 'The Sakura - Vinhomes Smart City, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội', 'Hà Nội', NULL, NULL),
(4, 4, NULL, NULL, 'Vinhomes Central Park, Đường Điện Biên Phủ, Phường 22, Bình Thạnh, Hồ Chí Minh', 'TP. Hồ Chí Minh', NULL, NULL),
(5, 5, NULL, NULL, 'Vinhomes Golden River Ba Son, Phố Tôn Đức Thắng, Quận 1, Hồ Chí Minh', 'TP. Hồ Chí Minh', NULL, NULL),
(6, 6, NULL, NULL, 'Masteri Thảo Điền, Đường Xa Lộ Hà Nội, Phường Thảo Điền, Quận 2, Hồ Chí Minh', 'TP. Hồ Chí Minh', NULL, NULL),
(7, 7, NULL, NULL, 'Vinhomes Golden River Ba Son, Phố Tôn Đức Thắng, Quận 1, Hồ Chí Minh', 'TP. Hồ Chí Minh', NULL, NULL),
(8, 8, NULL, NULL, 'Dự án Glory Heights - Vinhomes Grand Park, Đường Nguyễn Xiển, Phường Long Bình, Quận 9, Hồ Chí Minh', 'TP. Hồ Chí Minh', NULL, NULL),
(9, 9, NULL, NULL, 'Royal City, 72A, Đường Nguyễn Trãi, Phường Thượng Đình, Thanh Xuân, Hà Nội', 'Hà Nội', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_blog`
--

CREATE TABLE `news_blog` (
  `news_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `view_count` int(11) DEFAULT 0,
  `news_image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `news_blog`
--

INSERT INTO `news_blog` (`news_id`, `title`, `content`, `author_id`, `publish_date`, `created_at`, `updated_at`, `view_count`, `news_image`) VALUES
(3, 'Thời Điểm Tốt Nhất Để Đầu Tư Đất Nền', '<article data-clarity-region=\"article\">\r\n<div class=\"content-wrapper\">\r\n<div class=\"p\"><strong>Thời Điểm Th&iacute;ch Hợp Để T&iacute;ch Sản</strong></div>\r\n<div class=\"p\">Thị trường bất động sản đang c&oacute; nhiều chuyển biến t&iacute;ch cực nhờ xu hướng hạ l&atilde;i suất, ch&iacute;nh s&aacute;ch hỗ trợ hiệu quả từ Ch&iacute;nh phủ, c&aacute;c nỗ lực th&aacute;o gỡ vướng mắc ph&aacute;p l&yacute; dự &aacute;n v&agrave; cung cấp nguồn t&iacute;n dụng cho c&aacute;c chủ đầu tư.</div>\r\n<div class=\"p\">Đối với ph&acirc;n kh&uacute;c đất nền, hiện mức gi&aacute; cũng được điều chỉnh s&aacute;t với gi&aacute; trị thực sau giai đoạn tăng trưởng nhanh đ&atilde; mở ra cơ hội cho nh&agrave; đầu tư lẫn kh&aacute;ch h&agrave;ng c&oacute; nhu cầu ở thực. Th&ecirc;m v&agrave;o đ&oacute;, nhiều chủ đầu tư c&ograve;n &aacute;p dụng c&aacute;c ch&iacute;nh s&aacute;ch hỗ trợ thanh to&aacute;n nhẹ nh&agrave;ng, cam kết lợi nhuận, ưu đ&atilde;i l&atilde;i suất ở mức cao&hellip; gi&uacute;p giảm &aacute;p lực g&aacute;nh nặng về t&agrave;i ch&iacute;nh cho kh&aacute;ch h&agrave;ng.</div>\r\n<div class=\"p\">&ldquo;Thời điểm thị trường bắt đầu giai đoạn phục hồi l&agrave; l&uacute;c n&ecirc;n \"xuống tiền\" để mua bất động sản. Bởi đ&acirc;y l&agrave; giai đoạn m&agrave; c&aacute;c chủ đầu tư tung ch&iacute;nh s&aacute;ch b&aacute;n h&agrave;ng tốt với nhiều ưu đ&atilde;i để k&iacute;ch cầu. Nếu tiếp tục chờ, người mua c&oacute; thể sẽ đ&aacute;nh mất cơ hội sở hữu bất động sản gi&aacute; tốt&rdquo;, &ocirc;ng V&otilde; Hồng Thắng, Ph&oacute; Gi&aacute;m đốc R&amp;D DKRA Group cho biết.</div>\r\n<div class=\"p\">X&eacute;t về l&acirc;u d&agrave;i, sức h&uacute;t đất nền rất kh&oacute; giảm. T&acirc;m l&yacute; chuộng nh&agrave; gắn với đất, c&ugrave;ng với nhu cầu t&iacute;ch lũy t&agrave;i sản an to&agrave;n v&agrave; khả năng tăng lợi nhuận từ đất nền vẫn cao l&agrave; yếu tố khiến ph&acirc;n kh&uacute;c n&agrave;y được l&ograve;ng giới đầu tư. Khi những kh&oacute; khăn được th&aacute;o gỡ, thị trường phục hồi trở lại ho&agrave;n to&agrave;n, c&aacute;c k&ecirc;nh huy động vốn được khơi th&ocirc;ng, th&igrave; nhu cầu với ph&acirc;n kh&uacute;c n&agrave;y sẽ lại tăng l&ecirc;n, k&eacute;o theo đ&oacute; l&agrave; gi&aacute; b&aacute;n tiếp tục biến động.</div>\r\n<figure class=\"wp-block-image size-full\"><img src=\"https://img.iproperty.com.my/angel/750x1000-fit/wp-content/uploads/sites/7/2023/06/Richland-2-1.png\" alt=\"\" loading=\"lazy\">\r\n<figcaption><em>Nhiều nh&agrave; đầu tư tranh thủ giai đoạn n&agrave;y t&igrave;m kiếm cơ hội mua bất động sản gi&aacute; tốt đi k&egrave;m loạt ưu đ&atilde;i</em></figcaption>\r\n</figure>\r\n<div class=\"p\">Tuy nhi&ecirc;n, kh&ocirc;ng phải sản phẩm đất nền n&agrave;o giảm gi&aacute; s&acirc;u cũng l&agrave; cơ hội của người mua. Nh&agrave; đầu tư cần tỉnh t&aacute;o x&aacute;c định được c&aacute;c ti&ecirc;u ch&iacute; của một dự &aacute;n tiềm năng để lựa chọn.</div>\r\n<div class=\"p\">\"Trong thời điểm hiện tại, nếu xuống tiền, nh&agrave; đầu tư cần c&acirc;n nhắc một số yếu tố. Đ&oacute; l&agrave; lựa chọn đầu tư c&aacute;c dự &aacute;n bất động sản c&oacute; ph&aacute;p l&yacute; minh bạch, những khu vực c&oacute; tiện &iacute;ch tốt, hạ tầng ho&agrave;n thiện. B&ecirc;n cạnh đ&oacute;, n&ecirc;n tận dụng để \"săn\" c&aacute;c dự &aacute;n c&oacute; ch&iacute;nh s&aacute;ch giảm gi&aacute; với nhiều ưu đ&atilde;i, cam kết lợi nhuận, chiết khấu từ chủ đầu tư\", đại diện Kim Oanh Group chia sẻ.</div>\r\n<div class=\"p\"><strong>Điểm N&oacute;ng B&igrave;nh Dương</strong></div>\r\n<div class=\"p\">Hiện nay, thị trường đất nền vẫn &acirc;m thầm giao dịch ở c&aacute;c địa phương ph&aacute;t triển mạnh về hạ tầng, tốc độ đ&ocirc; thị h&oacute;a cao. Một trong những khu vực giao dịch s&ocirc;i động nhất tại thời điểm n&agrave;y l&agrave; B&igrave;nh Dương. C&aacute;c dự &aacute;n tr&ecirc;n địa b&agrave;n tỉnh n&agrave;y cũng thu h&uacute;t được nh&agrave; đầu tư bởi hạ tầng ho&agrave;n thiện, di chuyển đến TP.HCM, Đồng Nai hay B&igrave;nh Phước đều thuận lợi, tập trung nhiều khu c&ocirc;ng nghiệp đ&ocirc;ng đ&uacute;c. Ngo&agrave;i ra, những dự &aacute;n bất động sản đều được x&acirc;y dựng b&agrave;i bản, ph&aacute;p l&yacute; minh bạch, gi&aacute; cả hợp l&yacute;, thanh khoản tốt.</div>\r\n<div class=\"p\">Thu h&uacute;t sự ch&uacute; &yacute; nhiều nhất tr&ecirc;n thị trường B&igrave;nh Dương thời điểm n&agrave;y l&agrave; dự &aacute;n Richland Residence tọa lạc ngay trung t&acirc;m Bến C&aacute;t của Kim Oanh Group. Dự &aacute;n c&oacute; quy m&ocirc; 15,46ha, cung cấp ra thị trường gần 1.000 sản phẩm đất nền, shophouse, nh&agrave; phố liền kề&hellip; v&agrave; được ph&aacute;t triển nhiều tiện &iacute;ch như: c&aacute;c tuyến c&ocirc;ng vi&ecirc;n c&acirc;y xanh, khu thể thao đa năng, khu vui chơi trẻ em, trường mầm non, tuyến phố thương mại&hellip;</div>\r\n<div class=\"p\">Được biết, để sở hữu sản phẩm tại Richland Residence kh&aacute;ch h&agrave;ng chỉ cần bỏ ra 1,23 tỷ đồng, thanh to&aacute;n trước 20%. Dự &aacute;n với ph&aacute;p l&yacute; sạch, hiện c&oacute; giấy ph&eacute;p mở b&aacute;n, đảm bảo sự an to&agrave;n tối đa cho kh&aacute;ch h&agrave;ng.</div>\r\n<div class=\"p\">B&ecirc;n cạnh gi&aacute; sở hữu thấp, kh&aacute;ch h&agrave;ng c&ograve;n nhận ưu đ&atilde;i cam kết lợi nhuận 30% từ Kim Oanh Group. Những kh&aacute;ch h&agrave;ng c&oacute; nhu cầu vay vốn sẽ được ng&acirc;n h&agrave;ng hỗ trợ vay l&ecirc;n đến 65% với l&atilde;i suất vay ưu đ&atilde;i 9,9%/năm cố định trong 36 th&aacute;ng. Đồng thời, kh&aacute;ch h&agrave;ng c&ograve;n được chiết khấu 6% khi giao dịch th&agrave;nh c&ocirc;ng, hưởng l&atilde;i suất thanh to&aacute;n sớm đến 18%, chiết khấu 3-5 chỉ v&agrave;ng khi mua sỉ. Ngo&agrave;i ra, c&ograve;n c&aacute;c chương tr&igrave;nh r&uacute;t thăm tr&uacute;ng thưởng tổng gi&aacute; trị l&ecirc;n đến 12 tỷ đồng.</div>\r\n<figure class=\"wp-block-image size-full\"><img src=\"https://img.iproperty.com.my/angel/750x1000-fit/wp-content/uploads/sites/7/2023/06/Untitled-1.jpg\" alt=\"Một g&oacute;c dự &aacute;n Richland Residence hiện đ&atilde; ho&agrave;n thiện hạ tầng\" loading=\"lazy\">\r\n<figcaption><em>Một g&oacute;c dự &aacute;n Richland Residence hiện đ&atilde; ho&agrave;n thiện hạ tầng</em></figcaption>\r\n</figure>\r\n<div class=\"p\">Richland Residence nằm liền kề c&aacute;c khu c&ocirc;ng nghiệp trọng điểm của Bến C&aacute;t, l&agrave; yếu tố gi&uacute;p gia tăng gi&aacute; trị bất động sản từ cơ hội thu&ecirc; nh&agrave; ở cho h&agrave;ng ng&agrave;n kỹ sư, c&ocirc;ng nh&acirc;n, chuy&ecirc;n gia trong khu vực. Bến C&aacute;t hiện đang trong lộ tr&igrave;nh ph&aacute;t triển trở th&agrave;nh \"thủ phủ\" c&ocirc;ng nghiệp mới ph&iacute;a Bắc của B&igrave;nh Dương. Với nhiều tuyến đường trọng điểm đ&atilde; v&agrave; đang được triển khai như: V&agrave;nh đai 4, V&agrave;nh đai 5, đại lộ Mỹ Phước &ndash; T&acirc;n Vạn, đường ĐT 741, mở rộng quốc lộ 13, cao tốc TP.HCM &ndash; Thủ Dầu Một &ndash; Bến C&aacute;t &ndash; B&agrave;u B&agrave;ng&hellip; tạo ra sự giao thương nhộn nhịp cho khu vực trong thời gian tới.</div>\r\n<div class=\"p\">Th&ecirc;m v&agrave;o đ&oacute;, khu vực Richland Residence tọa lạc đang được đề xuất chủ trương l&ecirc;n th&agrave;nh phố Bến C&aacute;t v&agrave;o năm 2025. C&ugrave;ng với th&agrave;nh phố mới B&igrave;nh Dương, đ&acirc;y sẽ l&agrave; trung t&acirc;m của v&ugrave;ng đ&ocirc; thị th&ocirc;ng minh, nơi kết nối giao thương sầm uất v&agrave; l&agrave; đ&ocirc; thị c&ocirc;ng nghiệp h&agrave;ng đầu của tỉnh với 8 khu c&ocirc;ng nghiệp lớn đang hoạt động nhộn nhịp k&eacute;o theo sự b&ugrave;ng nổ của thị trường bất động sản. V&igrave; vậy, nắm bắt những dự &aacute;n gi&agrave;u tiềm năng như Richland Residence ch&iacute;nh l&agrave; sở hữu m&oacute;n hời gi&aacute; trị lớn trong tương lai gần.</div>\r\n</div>\r\n</article>\r\n<div class=\"ArticlePageTemplate_tnvUrlSection__H4xSb\" title=\"https://thanhnienviet.vn/2023/06/30/thoi-diem-tot-nhat-de-dau-tu-dat-nen\">Nguồn: https://thanhnienviet.vn/2023/06/30/thoi-diem-tot-nhat-de-dau-tu-dat-nen</div>', 1, NULL, '2023-06-30 11:50:30', '2023-07-07 07:52:49', 97, 'news1.png'),
(4, 'Sống Trọn Vẹn Từng Phút Giây Tại The Diamond Residence', '<div class=\"p\"><strong>B&ecirc;n cạnh c&aacute;c yếu tố về vị tr&iacute;, chủ đầu tư, chất lượng x&acirc;y dựng&hellip;, giới tinh hoa đang quan t&acirc;m nhiều hơn đến c&aacute;c ti&ecirc;u ch&iacute; về sức khỏe khi chọn lựa bất động sản. Nằm tại &ldquo;vị tr&iacute; v&agrave;ng&rdquo; của khu vực ph&iacute;a T&acirc;y th&agrave;nh phố, tổ hợp The Diamond Residence c&oacute; sức h&uacute;t đặc biệt khi sở hữu h&agrave;ng loạt thiết kế ưu ti&ecirc;n tới trải nghiệm to&agrave;n diện nhất của mỗi cư d&acirc;n.</strong></div>\r\n<div class=\"p\"><strong>Cơn Sốt Chung Cư Xanh Cao Cấp</strong></div>\r\n<div class=\"p\">Nhiều năm trước, khi mua một căn hộ cao cấp, vị tr&iacute; gần trường học v&agrave; giao th&ocirc;ng thuận tiện l&agrave; c&aacute;c yếu tố được giới đầu tư quan t&acirc;m h&agrave;ng đầu. Tuy nhi&ecirc;n, sau giai đoạn dịch bệnh k&eacute;o d&agrave;i, thời gian qua, thị trường bất động sản to&agrave;n cầu đ&atilde; ghi nhận những biến động lớn: xu thế t&igrave;m kiếm v&agrave; đầu tư bất động sản, đặc biệt l&agrave; ph&acirc;n kh&uacute;c căn hộ hạng sang của giới thượng lưu, đang ng&agrave;y c&agrave;ng trở n&ecirc;n khắt khe hơn với nhiều ti&ecirc;u ch&iacute; mới.</div>\r\n<figure class=\"wp-block-image size-full\"><img src=\"https://img.iproperty.com.my/angel/750x1000-fit/wp-content/uploads/sites/7/2023/06/01-The-Diamond-Residence.jpg\" alt=\"Căn hộ sang trọng với thiết kế th&ocirc;ng tho&aacute;ng, với nhiều kh&ocirc;ng gian xanh tại The Diamond Residence\" loading=\"lazy\">\r\n<figcaption><em>Căn hộ sang trọng với thiết kế th&ocirc;ng tho&aacute;ng, với nhiều kh&ocirc;ng gian xanh tại The Diamond Residence</em></figcaption>\r\n</figure>\r\n<div class=\"p\">Theo JLL Việt Nam, thị trường bất động sản đ&atilde; v&agrave; đang đ&oacute;n một số xu hướng nổi bật, bao gồm c&aacute;c tổ hợp c&oacute; t&iacute;nh bền vững, t&iacute;ch hợp nhiều cảnh quan xanh, tiện &iacute;ch nội khu cũng như thiết kế gần gũi với thi&ecirc;n nhi&ecirc;n, mang đến sự an to&agrave;n về mặt sức khỏe, cảm gi&aacute;c tiện nghi, cũng như định h&igrave;nh n&ecirc;n phong c&aacute;ch sống hiện đại của giới thượng lưu.</div>\r\n<div class=\"p\">Tr&ecirc;n thực tế, nhiều t&agrave;i liệu khoa học đ&atilde; chỉ ra rằng, kh&ocirc;ng gian sống ảnh hưởng rất nhiều đến sức khỏe, t&acirc;m l&yacute; của chủ nh&acirc;n ng&ocirc;i nh&agrave;. Nghi&ecirc;n cứu của Tổ chức Y tế Thế giới (WHO) về tầm quan trọng của kh&ocirc;ng gian xanh đối với sức khỏe cộng đồng cho thấy, c&aacute;c khu thể thao v&agrave; hồ bơi c&ugrave;ng với kh&ocirc;ng gian thư gi&atilde;n, y&ecirc;n b&igrave;nh của vườn c&acirc;y v&ocirc; c&ugrave;ng c&oacute; &iacute;ch cho những hoạt động thể chất, từ đ&oacute; gi&uacute;p l&agrave;m giảm căng thẳng, tăng cường sức khỏe l&acirc;u d&agrave;i cho mỗi chủ nh&acirc;n căn hộ.</div>\r\n<div class=\"p\"><strong>The Diamond Residence &ndash; Sống Chuẩn &ndash; Sống Trọn Vẹn</strong></div>\r\n<div class=\"p\">Thấu hiểu những nhu cầu mới của tầng lớp tinh hoa, c&aacute;c kiến tr&uacute;c sư quốc tế tại tổ hợp The Diamond Residence đ&atilde; thiết kế tỉ mỉ từng căn hộ v&agrave; x&acirc;y dựng hệ thống tiện &iacute;ch chất lượng quốc tế, nhằm đem đến một sản phẩm kh&ocirc;ng chỉ bảo đảm sức khoẻ thể chất v&agrave; tinh thần, m&agrave; c&ograve;n tạo n&ecirc;n cảm gi&aacute;c thoải m&aacute;i v&agrave; tiện nghi cho tất cả người d&acirc;n tại đ&acirc;y.</div>\r\n<div class=\"p\">The Diamond Residence tọa lạc tại ng&atilde; tư L&ecirc; Văn Lương v&agrave; Ho&agrave;ng Đạo Th&uacute;y với 4 mặt tho&aacute;ng. Nơi đ&acirc;y nằm giữa khu vực nhộn nhịp, sầm uất bậc nhất của ph&iacute;a T&acirc;y Thủ đ&ocirc; với si&ecirc;u thị, trung t&acirc;m thương mại, bệnh viện, trường học, c&ugrave;ng nhiều tiện &iacute;ch thiết yếu kh&aacute;c.</div>\r\n<div class=\"p\">Điểm nhấn quan trọng tại The Diamond Residence ch&iacute;nh l&agrave; thiết kế hiện đại tạo n&ecirc;n những căn hộ c&oacute; kh&ocirc;ng gian lớn với nhiều mặt tho&aacute;ng c&ugrave;ng cửa sổ lớn, logia rộng, trần cao t&iacute;ch hợp hệ thống điều h&ograve;a &acirc;m nhằm tận dụng được tối đa nguồn &aacute;nh s&aacute;ng v&agrave; gi&oacute; trời đến từ thi&ecirc;n nhi&ecirc;n, gi&uacute;p cho cả căn hộ lu&ocirc;n ngập tr&agrave;n &aacute;nh s&aacute;ng m&agrave; vẫn tho&aacute;ng m&aacute;t, trong l&agrave;nh. Diện t&iacute;ch lớn cũng cho ph&eacute;p chủ nh&acirc;n thoải m&aacute;i b&agrave;y tr&iacute;, tạo n&ecirc;n những thiết kế mang t&iacute;nh c&aacute; nh&acirc;n hoặc bổ sung th&ecirc;m những kh&ocirc;ng gian xanh cần thiết cho từng căn hộ.</div>\r\n<figure class=\"wp-block-image size-full\"><img src=\"https://img.iproperty.com.my/angel/750x1000-fit/wp-content/uploads/sites/7/2023/06/02-The-Diamond-Residence.jpg\" alt=\"Thiết kế căn hộ hiện đại, tiện nghi, ưu ti&ecirc;n nhiều &aacute;nh s&aacute;ng tự nhi&ecirc;n tại The Diamond Residence\" loading=\"lazy\">\r\n<figcaption><em>Thiết kế căn hộ hiện đại, tiện nghi, ưu ti&ecirc;n nhiều &aacute;nh s&aacute;ng tự nhi&ecirc;n tại The Diamond Residence</em></figcaption>\r\n</figure>\r\n<div class=\"p\">Ngo&agrave;i những căn hộ gần gũi với thi&ecirc;n nhi&ecirc;n, tổ hợp c&ograve;n sở hữu vườn thượng uyển tr&ecirc;n cao với diện t&iacute;ch l&ecirc;n đến hơn 1.000 m<sup>2</sup>, đa dạng c&aacute;c chủng loại thực vật phong ph&uacute;, mang lại kh&ocirc;ng gian nghỉ ngơi, thư gi&atilde;n, v&agrave; cảm gi&aacute;c y&ecirc;n b&igrave;nh. B&ecirc;n cạnh đ&oacute; l&agrave; nhiều tiện &iacute;ch đẳng cấp cao nhất, đ&aacute;p ứng nhu cầu sức khỏe to&agrave;n diện, bao gồm trung t&acirc;m mua sắm v&agrave; giải tr&iacute;, bể bơi, vườn gym ngo&agrave;i trời, khu thể thao đa năng, đường dạo bộ, khu vui chơi cho trẻ em&hellip; Đặc biệt, khu vực bể bơi c&oacute; diện t&iacute;ch l&ecirc;n đến hơn 932 m<sup>2</sup>&nbsp;đạt ti&ecirc;u chuẩn Olympic, bao gồm bể bơi d&agrave;nh cho người lớn v&agrave; trẻ em, s&agrave;n gỗ ngo&agrave;i trời, c&aacute;c khu vực tắm nắng, vườn thư gi&atilde;n c&ugrave;ng với hệ thống lọc nước &aacute;p dụng c&ocirc;ng nghệ t&acirc;n tiến sẽ mang lại cảm gi&aacute;c như tại c&aacute;c resort nghỉ dưỡng h&agrave;ng đầu.</div>\r\n<div class=\"p\">D&agrave;nh nhiều t&acirc;m huyết cho trải nghiệm cao cấp cho c&aacute;c chủ nh&acirc;n xứng tầm, tổ hợp The Diamond Residence xứng đ&aacute;ng l&agrave; chốn an cư ho&agrave;n hảo của tầng lớp tinh hoa, nơi chăm s&oacute;c sức khỏe v&agrave; nu&ocirc;i dưỡng t&acirc;m hồn, g&oacute;p phần mang lại cảm giải thoải m&aacute;i nhất cho mỗi c&aacute; nh&acirc;n tại đ&acirc;y.</div>\r\n<div class=\"p\">Từ nay đến hết ng&agrave;y 31/07/2023, kh&aacute;ch h&agrave;ng đặt mua căn hộ v&agrave; k&yacute; hợp đồng mua b&aacute;n căn hộ theo thỏa thuận đặt cọc sẽ được nhận G&oacute;i miễn ph&iacute; dịch vụ quản l&yacute; 1 năm c&ugrave;ng G&oacute;i qu&agrave; tặng 1 năm ph&iacute; đỗ xe &ocirc; t&ocirc; kể từ thời hạn b&agrave;n giao căn hộ. Ngo&agrave;i ra kh&aacute;ch h&agrave;ng v&agrave; người th&acirc;n khi mua từ 2 căn hộ trở l&ecirc;n sẽ được chiết khấu 1% tr&ecirc;n gi&aacute; b&aacute;n căn hộ (chưa VAT) tại thời điểm k&yacute; hợp đồng.</div>\r\n<div class=\"p\">The Diamond Residence cũng đang &aacute;p dụng những ch&iacute;nh s&aacute;ch hỗ trợ l&atilde;i suất vay ng&acirc;n h&agrave;ng l&ecirc;n tới&nbsp;<strong>65%</strong>&nbsp;gi&aacute; trị căn hộ (bao gồm VAT). Chi tiết xin li&ecirc;n hệ tại:</div>\r\n<ul>\r\n<li><strong>The Diamond Residence &ndash; 25 L&ecirc; Văn Lương, H&agrave; Nội</strong></li>\r\n<li><strong>Hotline: 088 9955 688</strong></li>\r\n<li><strong>Website:&nbsp;<a class=\"\" href=\"http://diamondresidence.com.vn/\" target=\"_blank\" rel=\"noreferrer noopener\" data-block-type=\"custom-link\">http://diamondresidence.com.vn/</a></strong></li>\r\n</ul>', 1, NULL, '2023-07-07 03:24:05', '2023-07-07 03:24:21', 1, '01-The-Diamond-Residence.jpg'),
(5, 'Nhà Ở Xã Hội Tiếp Cận Được Tín Dụng', '<article data-clarity-region=\"article\">\r\n<div class=\"content-wrapper\">\r\n<div class=\"p\">Mới đ&acirc;y nhất,<a class=\"\" href=\"https://www.binhduong.gov.vn/\" target=\"_blank\" rel=\"noreferrer noopener\" data-block-type=\"custom-link\">&nbsp;UBND tỉnh B&igrave;nh Dương</a>&nbsp;đ&atilde; c&ocirc;ng bố danh s&aacute;ch c&aacute;c dự &aacute;n nh&agrave; ở x&atilde; hội được vay ưu đ&atilde;i từ g&oacute;i t&iacute;n dụng 120 ngh&igrave;n tỷ. Danh s&aacute;ch gồm 4 dự &aacute;n với những c&aacute;i t&ecirc;n cụ thể như sau: chung cư nh&agrave; ở x&atilde; hội T&acirc;n Đ&ocirc;ng Hiệp (th&agrave;nh phố Dĩ An) do C&ocirc;ng ty TNHH Kinh doanh v&agrave; Ph&aacute;t triển nh&agrave; To&agrave;n Thịnh Ph&aacute;t l&agrave;m chủ đầu tư; Khu nh&agrave; ở x&atilde; hội An Sinh thuộc Khu đ&ocirc; thị sinh th&aacute;i Ch&aacute;nh Mỹ (th&agrave;nh phố Thủ Dầu Một) do Tổng C&ocirc;ng ty Đầu tư ph&aacute;t triển Nh&agrave; v&agrave; Đ&ocirc; thị (HUD) l&agrave;m chủ đầu tư; Khu nh&agrave; ở x&atilde; hội liền kề thuộc Khu d&acirc;n cư Cầu Đ&ograve; (thị x&atilde; Bến C&aacute;t) do C&ocirc;ng ty Cổ phần Đầu tư ph&aacute;t triển Thuận Lợi l&agrave;m chủ đầu tư; Khu nh&agrave; ở x&atilde; hội liền kề thuộc dự &aacute;n Khu nh&agrave; ở thương mại Thuận Lợi 2 (thị x&atilde; Bến C&aacute;t) do C&ocirc;ng ty Cổ phần Đầu tư ph&aacute;t triển Thuận Lợi l&agrave;m chủ đầu tư.</div>\r\n<div class=\"p\">Nối tiếp B&igrave;nh Dương,&nbsp;<a class=\"\" href=\"https://www.danang.gov.vn/\" target=\"_blank\" rel=\"noreferrer noopener\" data-block-type=\"custom-link\">UBND th&agrave;nh phố Đ&agrave; Nẵng</a>&nbsp;cũng c&ocirc;ng bố c&aacute;c dự &aacute;n nh&agrave; ở x&atilde; hội c&oacute; nhu cầu vay g&oacute;i 120.000 tỷ đồng. Đ&oacute; l&agrave; c&aacute;c dự &aacute;n: chung cư cho người thu nhập thấp tại khu d&acirc;n cư An Trung 2 tại đường Ng&ocirc; Quyền, phường An Hải T&acirc;y, quận Sơn Tr&agrave; do Li&ecirc;n danh C&ocirc;ng ty Cổ phần Đức Mạnh &ndash; C&ocirc;ng ty Cổ phần ĐT&amp;XD 579 l&agrave;m chủ đầu tư; chung cư cho người c&oacute; thu nhập thấp tại khu t&aacute;i định cư Đại Địa Bảo (thuộc đường Dương L&acirc;m, phường Nại Hi&ecirc;n Đ&ocirc;ng, quận Sơn Tr&agrave;) do Li&ecirc;n danh C&ocirc;ng ty Cổ phần Đức Mạnh &ndash; C&ocirc;ng ty Cổ phần ĐT&amp;XD 579 l&agrave;m chủ đầu tư; khu chung cư nh&agrave; ở x&atilde; hội Khu c&ocirc;ng nghiệp H&ograve;a Kh&aacute;nh do C&ocirc;ng ty cổ phần Địa ốc Xanh S&agrave;i G&ograve;n Thuận Phước l&agrave;m chủ đầu tư.</div>\r\n<div class=\"p\">Tại Ph&uacute; Thọ, dự &aacute;n Khu nh&agrave; ở x&atilde; hội thấp tầng tại l&ocirc; đất N02 (thuộc Khu nh&agrave; ở v&agrave; dịch vụ thương mại Minh Phương, TP. Việt Tr&igrave;, Ph&uacute; Thọ) cũng vừa được Ng&acirc;n h&agrave;ng TMCP Đầu tư v&agrave; Ph&aacute;t triển Việt Nam (BIDV) t&agrave;i trợ vốn theo Chương tr&igrave;nh t&iacute;n dụng 120 ngh&igrave;n tỷ đồng ph&aacute;t triển nh&agrave; ở x&atilde; hội.</div>\r\n<div class=\"p\">Theo t&igrave;m hiểu của&nbsp;<a class=\"\" href=\"https://batdongsan.com.vn/\" target=\"_blank\" rel=\"noreferrer noopener\" data-block-type=\"custom-link\">Batdongsan.com.vn</a>, c&aacute;c tỉnh th&agrave;nh kh&aacute;c như B&igrave;nh Định, T&acirc;y Ninh, Bắc Giang, Tr&agrave; Vinh, B&agrave; Rịa &ndash; Vũng T&agrave;u cũng đ&atilde; c&ocirc;ng bố c&aacute;c dự &aacute;n nh&agrave; ở x&atilde; hội đăng k&yacute; vay g&oacute;i t&iacute;n dụng 120.000 tỷ đồng. Số lượng c&aacute;c dự &aacute;n nh&agrave; ở x&atilde; hội tiếp cận được t&iacute;n dụng đang ng&agrave;y c&agrave;ng nhiều l&ecirc;n.</div>\r\n<h2>G&oacute;i T&iacute;n Dụng 120.000 Tỷ Đồng Bắt Đầu Được Giải Ng&acirc;n</h2>\r\n<div class=\"p\">Chương tr&igrave;nh t&iacute;n dụng 120.000 tỷ đồng hướng đến đối tượng, mục đ&iacute;ch l&agrave; cho chủ đầu tư v&agrave; người mua nh&agrave; của c&aacute;c dự &aacute;n nh&agrave; ở x&atilde; hội, nh&agrave; ở c&ocirc;ng nh&acirc;n được vay với l&atilde;i suất ưu đ&atilde;i. G&oacute;i t&iacute;n dụng n&agrave;y được c&ocirc;ng bố thời điểm sau Tết Nguy&ecirc;n đ&aacute;n 2023 v&agrave; được coi l&agrave; một trong số c&aacute;c giải ph&aacute;p nhằm th&aacute;o gỡ v&agrave; th&uacute;c đẩy thị trường bất động sản ph&aacute;t triển l&agrave;nh mạnh v&agrave; bền vững.</div>\r\n<figure class=\"wp-block-image size-full\"><img src=\"https://img.iproperty.com.my/angel/750x1000-fit/wp-content/uploads/sites/7/2023/07/noxh-1.jpg\" alt=\"\" loading=\"lazy\"></figure>\r\n<div class=\"p\">Tuy nhi&ecirc;n, kể từ khi chương tr&igrave;nh t&iacute;n dụng 120.000 tỷ đồng được ban h&agrave;nh, việc giải ng&acirc;n g&oacute;i t&iacute;n dụng n&agrave;y vẫn c&ograve;n nhiều vướng mắc. C&aacute;c vướng mắc n&agrave;y đến từ vấn đề quỹ đất; quy tr&igrave;nh miễn tiền sử dụng đất cho dự &aacute;n nh&agrave; ở x&atilde; hội phức tạp; thiếu quy hoạch ph&aacute;t triển nh&agrave; ở x&atilde; hội ở địa phương; thủ tục điều kiện để được mua nh&agrave; ở x&atilde; hội c&ograve;n nhiều phức tạp, thủ tục k&eacute;o d&agrave;i&hellip; Tr&ecirc;n thực tế, c&aacute;c văn bản hướng dẫn mới được ban h&agrave;nh trong th&aacute;ng 4/2023 n&ecirc;n c&aacute;c địa phương vẫn đang thực hiện lập danh mục dự &aacute;n nh&agrave; ở x&atilde; hội, nh&agrave; ở c&ocirc;ng nh&acirc;n v&agrave; những đối tượng đủ điều kiện vay vốn.</div>\r\n<div class=\"p\">Mới đ&acirc;y, tại Hội nghị trực tuyến to&agrave;n quốc Ch&iacute;nh phủ v&agrave; c&aacute;c địa phương, Thống đốc NHNN Nguyễn Thị Hồng cho biết đ&atilde; c&oacute; 24 dự &aacute;n nh&agrave; ở x&atilde; hội đăng k&yacute; vay g&oacute;i t&iacute;n dụng nh&agrave; ở x&atilde; hội 120.000 tỷ đồng. Ngo&agrave;i ra, một số ng&acirc;n h&agrave;ng như BIDV v&agrave; Agribank cũng bắt đầu cho vay g&oacute;i t&iacute;n dụng n&agrave;y. Những th&ocirc;ng tin n&agrave;y cho thấy nh&agrave; ở x&atilde; hội đ&atilde; bắt đầu thực sự đi v&agrave;o cuộc sống khi tiếp cận được t&iacute;n dụng. Đ&acirc;y l&agrave; bước đầu quan trọng, tạo nền tảng cho mục ti&ecirc;u tối thiểu 1 triệu căn nh&agrave; ở x&atilde; hội đến năm 2030.</div>\r\n<div class=\"p\"><strong>Nguyễn Nam</strong></div>\r\n<div class=\"p\">Xem th&ecirc;m</div>\r\n<ul>\r\n<li><strong><a class=\"\" href=\"https://batdongsan.com.vn/tin-tuc/nhung-diem-sang-an-tuong-cua-thi-truong-bds-ha-noi-cd-hn-772420\" target=\"_blank\" rel=\"noreferrer noopener\" data-block-type=\"custom-link\">Những Điểm S&aacute;ng Ấn Tượng Của Thị Trường Bất Động Sản H&agrave; Nội</a></strong></li>\r\n<li><strong><a class=\"\" href=\"https://batdongsan.com.vn/tin-tuc/nhieu-moi-gioi-bds-ngong-nha-dau-tu-ha-noi-cd-hn-771410\" target=\"_blank\" rel=\"noreferrer noopener\" data-block-type=\"custom-link\">Nhiều M&ocirc;i Giới BĐS &ldquo;Ng&oacute;ng&rdquo; Nh&agrave; Đầu Tư H&agrave; Nội</a></strong></li>\r\n</ul>\r\n<div class=\"p\">&nbsp;</div>\r\n</div>\r\n</article>\r\n<div class=\"ShareButtons_wrapper__lIdzT\">\r\n<h2>Chia sẻ b&agrave;i viết n&agrave;y</h2>\r\n</div>', 3, NULL, '2023-07-07 06:28:58', '2023-07-07 11:26:47', 2, 'nha-o-xa-hoi-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news_tags`
--

CREATE TABLE `news_tags` (
  `news_id` int(11) NOT NULL,
  `tags_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `news_tags`
--

INSERT INTO `news_tags` (`news_id`, `tags_id`) VALUES
(3, 1),
(3, 5),
(3, 10),
(4, 1),
(4, 2),
(4, 6),
(4, 7),
(4, 9),
(5, 1),
(5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `property_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `property_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `price` float DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'unknown',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `age` int(11) DEFAULT NULL,
  `real_area` decimal(10,0) NOT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `view_count` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`property_id`, `user_id`, `type_id`, `property_name`, `description`, `address`, `price`, `status`, `created_at`, `updated_at`, `age`, `real_area`, `unit`, `view_count`) VALUES
(1, 1, 3, 'Penthouse Vinhomes Central Park', 'Siêu phẩm Penthouse 3PN Vinhomes Central Park nội thất cực đẹp, sang trọng đẳng cấp 5 sao cho thuê.\r\n\r\nGiá thuê: $5000\r\n\r\n- Diện tích trên 150m².\r\n\r\n- Căn hộ Penthouse : 3 phòng ngủ - 3 nhà tắm với 2 bồn tắm nằm\r\n\r\n- Full nội thất chủ mới làm 3,5 tỷ.\r\n\r\n- View công viên, trực diện sông siêu đẹp - thoáng - không tránh tòa.\r\nTầng đẹp, trục đẹp.\r\n\r\nKhông gian phù với gia đình hoặc khách hàng yêu thích căn hộ rộng rãi.\r\n\r\nNhà đang trống, khách chỉ cần xách vali vào ở ngay.\r\n\r\nLiên hệ xem nhà: 0901 848 585', 'Vinhomes Central Park, Bình Thạnh, Hồ Chí Minh', 115000000, 'Thuê', '2023-06-10 16:02:06', '2023-07-02 03:31:50', 2022, 150, 'Thỏa thuận', 11),
(2, 1, 7, 'Bán gấp nhiều CH Vinhomes Grand Park 1PN + 1.6 tỷ, 2 PN 1.9 tỷ, 2 PN + 2.38 tỷ, 3PN 2.75 tỷ', 'Giỏ hàng cần bán gấp Vinhomes Grand Park, rẻ nhất T5/2023 Studio 1.19 tỷ 1PN +1 1,7 tỷ, 2PN 1.89 tỷ, 2PN + 2.35 tỷ, 3PN, giá 2.75 tỷ. Nhiều căn Origami cắt lỗ tiền tỷ giá ngang Rainbow.\r\nGọi ngay 0834 712 768.\r\nKhu Rainbow: Nhiều căn đã có sổ hồng.\r\n\r\n* Căn Studio.\r\n- DT 33 m² Tòa S2.01 Giá bán 1.25 tỷ.\r\n- DT 30 m² Tòa S1.07 Giá bán 1.15 tỷ\r\n- DT 30m² Tòa S1.06 Giá bán 1.23 tỷ.\r\n- DT 33 m² Tòa S3.01 Giá bán 1.3 tỷ.\r\n* Căn 1 PN +1\r\n- DT 47 m² Tòa S3.05 Giá bán 1.7 tỷ\r\n- DT 47.1m² Tòa S3.02 Giá bán 1,7 tỷ.\r\n- DT 47 m² Tòa S1.01 Giá bán 1.6\r\n- DT 47 m² Tòa S3.01Giá bán 1.7 tỷ.\r\n* Căn 2 PN 1WC.\r\n- DT 59 m² Tòa S3.02 Giá bán 2.1 tỷ.\r\n- DT 59m² Tòa S1.05 Giá bán 1.9 tỷ.\r\n- DT 59.1m² Tòa S5.01 Giá bán 2.3tỷ.\r\n- DT 59 m² Tòa S2.01 Gía bán 2 tỷ full nội thất\r\n- DT 59.1m² Tòa S3.01 Gía bán 2.05 tỷ.\r\n* Căn 2PN 2WC.\r\n- DT 67 m² Tòa S1.02 Giá bán 2.3 tỷ.\r\n- DT 67 m² Tòa S3 Giá bán 2.35 tỷ (có sổ)\r\n* Căn 2PN + 2WC Căn Góc.\r\n- DT 69 m² Tòa S2.03 Giá bán 2.38 tỷ.\r\n- DT 69 m² Tòa S3.02 Giá bán 2.5 tỷ.\r\n- DT 69 m² Tòa S1.06 Giá bán 2.4 tỷ.\r\n- DT 69 m² Tòa S3.05 Giá bán 2.5 tỷ.\r\n- DT 69 m² Tòa S5.03 Giá bán 2.6 tỷ.\r\n* Căn 3PN 2WC Căn Góc.\r\n- DT 81 m² Tòa S1.05 Giá bán 2,8 tỷ.\r\n- DT 81 m² Tòa S5.01 Giá bán 2.95 tỷ.\r\n- DT 81 m² Tòa S1.02 Giá bán 2.75 tỷ.\r\n\r\nKhu Origami ngộp cần chuyển nhượng:\r\n* Căn Studio.\r\n- DT 30 m² - Tòa S902, S705, S803, S601 giá từ 1.3 tỷ.\r\n* Căn 1 PN+1\r\n- DT 47 m² - Tòa S902, S705, S801, S1006, S601 Giá 1.9 tỷ view hồ bơi, 2.4 tỷ view hồ cá koi.\r\n* Căn 2 PN 2WC.\r\n- DT 59 m² Full các tòa S6,7,8,9,10 giá từ 2.3 tỷ - 2.7 tỷ.\r\n- DT 67.8m² giá bán 2.7 tỷ - 3 tỷ.\r\n- DT 69.5m² Tòa S903, S702, S705, S1001, S606, S1005, S802 giá bán 2.8 tỷ - 3.2 tỷ.\r\n* Căn 3PN 2WC.\r\n- DT 81.5m² - Giá bán từ 3.150 tỷ.\r\n\r\n- Giá trên đã bao gồm các chi phí chuyển nhượng khách mua không phải trả thêm bất kỳ chi phí nào.\r\n- Tiện ích nội khu hoàn chỉnh đã đi vào hoạt động: Công viên biển hồ 36ha, khu BBQ trên biển, hồ bơi, công viên ánh sáng, siêu thị, bệnh viện, Trường học chỉ cách vài bước chân.\r\n\r\nHiện tại em đang giữ chìa khóa các căn trên quý anh/chị đi xem liên hệ em 24/7. Em Linh 0834 712 768.\r\n\r\n* Ngoài ra bên em cũng phân phối rổ hàng các khu đang bán giá gốc chủ đầu tư.\r\nBeverly Solari.\r\nBeverly.\r\nMasteri Centre Point.\r\nLumiere Boulevard.\r\n- Nhận nhà: Quý 4 2023.\r\n\r\n- Vị trí trung tâm, gần Vincom, công viên, view sông, bàn giao full nội thất cao cấp, tiện ích nội khu khép kín..\r\n\r\n- Đơn giá: Từ 45 - 70tr/m² tùy view tầng, tòa và phân khu.\r\n\r\n- Diện tích: Studio 30m², 1PN + 53m², 2PN 80m², 3PN 100.1m² (Beverly, Masteri Centre Point, Lumiere).\r\n\r\n- Thanh toán 15% ký HĐMB.\r\n\r\n- Ngân hàng cho vay 70 - 80%, Chủ đầu tư hỗ trợ 0% lãi suất đến 30 tháng, miễn phí trả nợ trước hạn, ân hạn nợ gốc đến 48 tháng.\r\n\r\n- Thanh toán theo tiến độ dàn trải đến khi nhận nhà không vay chiết khấu 7 - 13%.\r\n\r\n- Thanh toán nhanh Chiết khấu 12 - 15%.\r\n\r\n- Tặng gói nội thất lên đến 340 triệu.\r\n\r\n- Tặng 12 tháng phí quản lý.', 'Vinhomes Grand Park, Phường Long Thạnh Mỹ, Quận 9, Hồ Chí Minh', 1200000000, 'Bán', '2023-06-11 09:41:15', '2023-07-07 03:26:44', 2023, 30, 'căn', 12),
(3, 1, 3, 'Ngoại giao 3.175Tỷ căn 3PN 80m2 hướng ĐN tòa Sakura CK sâu 20% quà tặng 400tr vào ở ngay lốt đỗ ôtô', 'Duy nhất căn ngoại giao 3.175 tỷ căn 3PN 80m² hướng Đông Nam tòa Sakura CK sâu 20% quà tặng 400tr vào ở ngay, có lốt đỗ ôtô. LH: 0968 659 285 xem căn thực tế.\r\n(*) Chính sách ưu đãi khủng nhất Hè 2023 này thực sự tạo ra cơn sốt giao dịch chưa từng có tại The Sakura & chỉ dành cho khách hàng nhanh nhất:\r\n1. Gói quà mùa hè sôi động lên tới 400 triệu.\r\n2. Tổng chiết khấu thanh toán sớm lên tới 20%.\r\n3. Dễ dàng sở hữu với số vốn tự có chỉ cần 30% ký HĐMB.\r\n+ Hỗ trợ vay ngân hàng đến 70% lên tới 35 năm, miễn gốc lãi 0% 12 tháng.\r\n4. CK tới 0,8% BL ngân hàng.\r\n5. CK thanh toán tiến độ đến 7%.\r\nTư vấn chi tiết chính sách LH: 0968 659 285.\r\n\r\n(*) Lý do lựa chọn phân khu The Sakura:\r\n1. Là phân khúc căn hộ cao cấp Vinhomes Smart City có tiêu chuẩn quản lý, dịch vụ & thiết kế, nội thất bàn giao đáp ứng được đại đa số nhu cầu quý khách hàng.\r\n2. Nội khu phong cách Nhật Bản lần đầu tiên xuất hiện ở Vinhomes Smart City.\r\n3. Quản lý vận hành chuyên nghiệp đến từ cđt Vinhomes.\r\n4. Sử dụng miễn phí gần như toàn bộ các tiện ích như: Bể bơi 4 mùa, vườn nướng BBQ, công viên, vườn nhật, sân chơi thể thao.\r\n\r\n- Tiêu chuẩn bàn giao: Tối thiểu (bao gồm: Thiết bị vệ sinh đầy đủ, trần thạch cao, full sàn gỗ, điều hòa Multi hai chiều, hệ thống điện đầy đủ, khóa cửa thông minh bằng vân tay).\r\n- Thời gian bàn giao: Đã bàn giao tháng 12/2022.\r\n- Thời hạn sở hữu: Sở hữu lâu dài.\r\n\r\n- Điểm nhấn tiện ích có một không hai tại The Sakura mang đến những sự lựa chọn tốt nhất cho cuộc sống của cư dân như: Bể bơi 4 mùa nội khu đầu tiên, vườn Nhật nội khu đầu tiên và duy nhất tại Vinhomes Smart City.\r\nGiá cực tốt cho anh chị nào muốn sở hữu căn hộ 3PN tại SA3.', 'The Sakura - Vinhomes Smart City, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội', 3200000000, 'Bán', '2023-06-11 09:54:45', '2023-07-07 03:26:36', 2024, 80, 'căn', 10),
(4, 3, 3, 'Căn hộ giá thực cập nhật thường xuyên LH Mr Lực, dv từ A - Á. 1PN 17tr, 2PN 20tr, 3PN 27t, 4PN 42tr', 'Chuyên cho thuê căn hộ Vinhomes Central Park, văn phòng bên trong dự án, quen thân nhiều chủ nhà, giá cạnh tranh, giảm sâu cho khách cọc nhanh, dọn vào ở sớm, thanh toán theo quý/6 tháng/1 năm 1 lần. Lh 0903 049 288.\r\n\r\nThuê năm:\r\n\r\nStudio 36m² giá 14tr/th.\r\n\r\n1PN 56m² giá 16tr đến 18tr/th.\r\n\r\n2PN 70m² - 90m² giá 19tr đến 24tr/th.\r\n\r\n3PN 95m² - 140m² giá 26tr đến 33tr/th.\r\n\r\n4PN 140m² - 187m² giá 40tr đến 80tr/th.\r\n\r\nPenthouses, duplex 90tr đến 120tr/tháng.\r\n\r\nThe Landmark 81: 1PN 55m² 25tr, 2PN 78m² 32tr, 3PN 55tr, 4PN 90tr/tháng.\r\n\r\nThuê theo ngày:\r\n\r\n1PN 1tr - 1tr2, 2PN 1tr2 - 1tr4, 3PN 1tr6 - 2tr, 4PN 3tr5/đêm.\r\n\r\nThe Landmark 81: 1PN 1tr4, 2PN 2tr2, 3PN 3tr2, 4PN 5tr/đêm.\r\n\r\nThuê tháng: Tùy nhu cầu quý khách. Vui lòng gọi!\r\n\r\nLh Mr Lực 0903 049 288 hỗ trợ dọn nhà, dọn phòng, đăng kí tạm trú, xuất hóa đơn thuế và các dịch vụ tận nhà khi quý khách có nhu cầu.', 'Vinhomes Central Park, Đường Điện Biên Phủ, Phường 22, Bình Thạnh, Hồ Chí Minh', 20000000, 'Thuê', '2023-06-13 00:31:31', '2023-07-07 02:58:57', 2023, 84, 'tháng', 56),
(5, 3, 3, 'CHO THUÊ CĂN HỘ MỚI NHẤT TẠI VINHOMES GOLDEN RIVER T06/2023', 'Quản lý 99,99% Giỏ hàng cho thuê tại Vinhomes Central Park. Căn hộ được cập nhật liên tục hằng ngày để đáp ứng yêu cầu tìm thuê nhà cho Quý anh chị.\r\nVinhomes Golden River Bason là một trong những khu dân cư đang sống nhất tại TP HCM, đặc biệt đối với những ai sinh sống và làm việc tại Quận 1.\r\nNhiều tiện ích đang dần lấp đầy khu thương mại shophouse, đảm bảo sự phục vụ nhu cầu cá nhân cho cư dân.\r\nĐể việc tìm thuê nhà của Quý anh chị được dễ dàng, vngleasing cập nhật danh sách các căn hộ cho thuê giá tốt nhất dưới đây:\r\n\r\n* Căn hộ 1 phòng ngủ:\r\n- DT 49m² NTCB tòa A1 giá 16 triệu, căn hộ hướng Đông Bắc mát mẻ.\r\n- DT 48m² full NT toà A3 view Bitexco giá 18 triệu.\r\n- DT 53m² full NT tòa Lux6 giá 18 triệu, phòng khách lớn rộng rãi.\r\n\r\n* Căn hộ 2 phòng ngủ.\r\n- DT 77m² NTCB tòa Lux6 giá 22 triệu bao luôn phí quản lý cho khách thuê.\r\n- DT 77m² full NT tòa Lux6 giá 20 triệu.\r\n- DT 68m² giá 23 triệu, nhà được trang bị một số đồ cơ bản.\r\n- DT 73m² full NT tòa A4 giá 27 triệu, nhà view trực diện L81 không bị chắn view.\r\n- DT 79m² full NT cao cấp tòa A2 giá 35 triệu, view Bitexco sông SG.\r\n\r\n* Căn hộ 3 phòng ngủ.\r\n- DT 118m² NTCB tòa A3 giá 30 triệu.\r\n- DT 105m² full NT tòa A2 giá 35 triệu.\r\n- DT 118m² full NT tòa A2 giá 40 triệu.\r\n- DT 126m² full NT tòa Lux 6 view Bitexco giá 47 triệu.\r\n- DT 121m² full NT tòa A2 view Bitexco, sông SG giá thuê 57 triệu.\r\n\r\n* Căn hộ 4 phòng ngủ.\r\n- DT 157m² full NT tòa A1 giá 65 triệu.\r\n- DT 160m² full NT tòa A2 view Bitexco giá 69 triệu.\r\n\r\nTất cả hình ảnh căn hộ anh/chị có thể xem tại: https://bit.ly/vinhomes-golden-river-ba-son\r\n\r\nGiá có thể thay đổi theo từng thời điểm, anh/chị cần tư vấn thêm có thể liên hệ: 0933 384 539zalo/viber/whatsapp).', 'Vinhomes Golden River Ba Son, Phố Tôn Đức Thắng, Quận 1, Hồ Chí Minh', 22000000, 'Thuê', '2023-06-13 00:37:39', '2023-07-01 06:24:15', 2023, 77, 'tháng', 11),
(6, 3, 3, 'Căn hộ chung cư tại Masteri Thảo Điền', 'Căn hộ Masteri Thảo Điền từ 1,2,3,4PN giá tốt nhất thị trường, giỏ hàng cập nhật liên tục. LH: 0914 974 379 Em Thoa (Zalo, Viber) em gửi thông tin đầy đủ, xem nhà 24/7.\r\n\r\n* Thông tin chi tiết khách tham khảo, inb em gửi căn kèm thông tin từng căn qua zalo ạ:\r\n\r\n* Căn 1 phòng ngủ: Diện tích từ 50m - 57m².\r\n- Đầy đủ nội thất thiết kế đẹp: 14 - 16 triệu/tháng.\r\n\r\n* Căn 2 phòng ngủ: Diện tích từ 64m - 78m².\r\n- Nội thất từ cơ bản - Đầy đủ nội thất thiết kế đẹp: 15 - 24 triệu/tháng.\r\n\r\n* Căn 3 phòng ngủ: Diện tích từ 90m - 100m².\r\n- Nội thất từ Cơ bản - Đầy đủ nội thất thiết kế đẹp: 25 - 34 triệu/tháng.\r\n\r\n* Căn Duplex, Penhouse phòng ngủ: Diện tích từ 160m - 260m².\r\n- Nội thất từ Cơ bản - Đầy đủ nội thất thiết kế đẹp: 40 - 60 triệu/tháng.\r\n\r\nCác căn hộ được trang bị nội thất cao cấp đầy đủ (Tivi, sopha, tủ lạnh, máy giặt, máy lạnh, lò nướng, lò vi sóng, giường nêm, tủ đồ), thiết kế đẹp phù hợp mọi nhu cầu của khách hàng.\r\n\r\nView ban công landmark, view thành phố, view sông, hồ bơi,... Đón gió mát.\r\nBan công bốn cánh, nhà diện tích lớn sinh hoạt thoải mái.\r\nVị trí:\r\nMặt tiền giáp Xa Lộ Hà Nội vị trí thuận lợi cách đến quận 1 chỉ 10 phút di chuyển, 20 phút đến sân bay Tân Sơn Nhất, bước vài bước chân đến nhà ga tuyến Metro và trung tâm thương mại Vincom Megamall Quận 2.\r\n\r\nTiện ích nội khu cao cấp: Hồ bơi tầng 3 kết hợp khu BBQ, Phòng gym, sân tennis, sân bóng rổ, công viên trung tâm.. (miễn phí).\r\n\r\n* Dịch vụ của chúng tôi:\r\n- Văn phòng ở ngày nội khu Masteri Thảo điền.\r\n- Hỗ trợ chăm sóc khách hàng trong suốt quá trình tìm và sở hữu căn hộ,...\r\n- Tư vấn nhiệt tình và hoàn toàn miễn phí, hiểu rõ nhu cầu của từng khách hàng.\r\n- Dịch vụ chuyên nghiệp, hỗ trợ giấy tờ pháp lý nhanh gọn.\r\n\r\nLiên hệ em Thoa: 0914 974 379. Hỗ trợ 24/7.\r\n\r\n- Chúc anh/chị sớm tìm được căn hộ như ý.', 'Masteri Thảo Điền, Đường Xa Lộ Hà Nội, Phường Thảo Điền, Quận 2, Hồ Chí Minh', 16000000, 'Thuê', '2023-06-13 02:30:05', '2023-07-07 03:26:51', 2023, 70, 'tháng', 15),
(7, 3, 3, 'Vinhomes Golden River, độc quyền cho thuê căn 3PN diện tích 118m2, view trực diện sông, 42tr/tháng', 'Căn hộ cao cấp Vinhomes Golden River 118m², 3PN, view sông giá chỉ 42 triệu/tháng!\r\n\r\nTọa lạc tại trung tâm Quận 1, Vinhomes Golden River mang đến không gian sống hoàn hảo cho các gia đình và chuyên gia nước ngoài.\r\n\r\nCăn hộ 3 phòng ngủ rộng 118m², view sông tuyệt đẹp tạo nên không gian sống thoáng đãng và gần gũi với thiên nhiên.\r\n\r\nTiện ích đẳng cấp 5 sao, an ninh 24/24, hồ bơi, phòng gym, khu vui chơi trẻ em và nhiều tiện ích khác mang đến trải nghiệm sống đẳng cấp cho bạn và gia đình.\r\n\r\nChỉ với 42 triệu mỗi tháng, bạn có thể sớm sở hữu căn hộ chất lượng tại trung tâm thành phố với nội thất thiết kế Châu Âu.\r\n\r\nXem ngay những hình ảnh và video mới nhất về căn hộ của bạn để có cái nhìn tổng quan rõ nét về không gian sống và các tiện ích của bạn.\r\n\r\nLiên hệ ngay: 0932 157 063Anh Tú) hoặc Zalo - Whatsapp hôm nay để biết thêm thông tin chi tiết và sắp xếp xem căn hộ.', 'Vinhomes Golden River Ba Son, Phố Tôn Đức Thắng, Quận 1, Hồ Chí Minh', 42000000, 'Thuê', '2023-06-13 02:43:51', '2023-07-07 08:05:25', 2023, 118, 'tháng', 19),
(8, 1, 6, 'Glory Heights Vinhomes, View đẹp chính sách siêu khủng Ck từ 10% HTLS 7 năm', '<p>&nbsp;Giỏ h&agrave;ng độc quyền, View đẹp ưu đ&atilde;i chiết khấu cao cuối c&ugrave;ng - booking ngay hotline pkd&nbsp;<span class=\"hidden-mobile hidden-phone m-cover js__btn-tracking m-uncover tooltip\" data-click=\"true\">0902 445 272</span></p>\r\n<p>&nbsp;</p>\r\n<p>!<br>* Glory Heights l&agrave; ph&acirc;n khu được v&iacute; như l&agrave; bản sao của The Landmark 81 tại Vinhomes Grand Park.<br>Gồm 5 t&ograve;a th&aacute;p c&oacute; độ cao từ 24 - 39 tầng, 2 tầng hầm với tổng số 2000 căn hộ cao cấp đạt chuẩn cao cấp hạng A.<br>* Vị tr&iacute; đắc địa của Glory Heights nằm ngay đối diện c&ocirc;ng vi&ecirc;n rộng 36ha v&agrave; s&aacute;t b&ecirc;n trung t&acirc;m thương mại Vincom lớn nhất miền Nam (khai trương v&agrave;o T9/2023 n&agrave;y).<br>Chủ đầu tư Vinhomes đ&atilde; thiết kế v&agrave; b&agrave;n giao căn hộ Glory Heights với nội thất cao cấp, thiết bị vệ sinh Duravit, đầy đủ tiện nghi theo ti&ecirc;u chuẩn 5 sao với những tiện &iacute;ch nổi bật, chưa từng c&oacute; trong nội khu căn hộ VHGP:<br>- Vị tr&iacute; trung t&acirc;m KĐT + đ&egrave;n Led chạy dọc t&ograve;a nh&agrave; (nổi bật to&agrave;n 272ha).<br>- Ban c&ocirc;ng k&iacute;nh sang trọng.<br>- Quảng trường Golden Eagle.<br>- Ph&ograve;ng x&ocirc;ng hơi Jacuzzi.<br>- Ph&ograve;ng Karaoke gia đ&igrave;nh.<br>- Sảnh lễ t&acirc;n cao cấp.<br>- Hồ bơi v&ocirc; cực Malibu.<br>- Hệ thống trường Quốc tế Anh Quốc.<br>- Đại lộ mua sắm Rodeo.<br>- C&ocirc;ng vi&ecirc;n khủng long.<br><br>* LH Hotline&nbsp;<span class=\"hidden-mobile hidden-phone m-cover js__btn-tracking m-uncover\">0902 445 272</span>&nbsp;(Mr Mạnh - PKD) để được tư vấn trực tiếp vị tr&iacute; đẹp v&agrave; c&aacute;c ch&iacute;nh s&aacute;ch cực kỳ khủng nhất từ trước đến nay tại Vinhomes Grand Park.<br>* Giỏ h&agrave;ng độc quyền, View đẹp ưu đ&atilde;i chiết khấu cao cuối c&ugrave;ng - booking ngay hotline pkd&nbsp;<span class=\"hidden-mobile hidden-phone m-cover js__btn-tracking m-uncover\" data-click=\"true\">0902 445 272</span>!</p>', 'Dự án Glory Heights - Vinhomes Grand Park, Đường Nguyễn Xiển, Phường Long Bình, Quận 9, Hồ Chí Minh', 3600000000, 'Bán', '2023-07-07 04:27:47', '2023-07-07 08:00:13', 2024, 59, 'căn', 4),
(9, 1, 3, 'CẬP NHẬT QUỸ CĂN GIÁ TỐT NHẤT ROYAL CITY T7/2023 - XEM NHÀ 24/7 - 100% CÓ SỔ ĐỎ VÀ SLOT ÔTÔ', '<p>Minh Giang chuy&ecirc;n mua b&aacute;n, cho thu&ecirc; chung cư Royal City, 72A Nguyễn Tr&atilde;i, Thanh Xu&acirc;n, H&agrave; Nội.<br>Để được tư vấn nhanh ch&iacute;nh x&aacute;c nhất qu&yacute; kh&aacute;ch h&agrave;ng gọi ngay Mr Giang:&nbsp;<span class=\"hidden-mobile hidden-phone m-cover js__btn-tracking m-uncover\" data-click=\"true\">0967 454 638</span><br>- Gi&aacute; cam kết rẻ nhất thị trường.<br>- Tư vấn nhiệt t&igrave;nh ch&iacute;nh x&aacute;c nhất.<br>- Văn ph&ograve;ng ngay tại Royal n&ecirc;n xem nh&agrave; bất kể khi n&agrave;o 24/7.<br>- K&yacute; hợp đồng trực tiếp với chủ nh&agrave;.<br>- Kh&aacute;ch mua được xem trực tiếp căn hộ, l&agrave;m việc ch&iacute;nh chủ.<br>- Hỗ trợ tư vấn về ph&aacute;p l&yacute; v&agrave; thủ tục sang t&ecirc;n sổ đỏ trong suốt thời gian mua b&aacute;n.<br><br>- Cập nhật quỹ căn mới nhất th&aacute;ng 6/2023.<br><br>1 - To&agrave; R4 v&agrave; to&agrave; R5.<br><br>Căn 93m ban c&ocirc;ng ĐB gi&aacute; 4,8 tỷ bao t&ecirc;n. Ban c&ocirc;ng TB gi&aacute; 4,85 tỷ bao t&ecirc;n.<br>Căn số 11 v&agrave; căn số 16, t&ograve;a R4 cửa hướng T&acirc;y, ban c&ocirc;ng hướng Đ&ocirc;ng. Diện t&iacute;ch 103m, gi&aacute; 4,850 tỷ.<br>Căn 102.1m gi&aacute; 5 tỷ bao t&ecirc;n (sửa th&agrave;nh 3 ph&ograve;ng ngủ).<br>Căn 112.4m ban c&ocirc;ng TB gi&aacute; 5,2 tỷ bao t&ecirc;n.<br>Căn 104.9m ban c&ocirc;ng ĐB gi&aacute; 4.9 tỷ bao t&ecirc;n.<br>Căn 104.9m ban c&ocirc;ng ĐN gi&aacute; 5,1 tỷ.<br>Căn 06 112.4m ban c&ocirc;ng ĐN gi&aacute; 5,2 tỷ bao t&ecirc;n.<br>Căn 131.4m gi&aacute; 7,1 tỷ bao t&ecirc;n (căn g&oacute;c 3 ph&ograve;ng ngủ tho&aacute;ng).<br>Căn 132m gi&aacute; 6,2 tỷ bao t&ecirc;n (căn 3 ph&ograve;ng ngủ).<br>Căn 137.6m gi&aacute; 7,2 tỷ bao t&ecirc;n (3 ph&ograve;ng ngủ).<br>Căn g&oacute;c 133m ban c&ocirc;ng ĐN - ĐB, sổ đỏ, đủ nội thất gi&aacute; 7,4 tỷ bao t&ecirc;n.<br><br>Tư vấn 24/7 gọi ngay Minh Giang:&nbsp;<span class=\"hidden-mobile hidden-phone m-cover js__btn-tracking m-uncover\">0967 454 638</span><br><br>2 - To&agrave; R6 mặt đường Nguyễn Tr&atilde;i.<br><br>Căn 55m gi&aacute; 3,4 tỷ (1PN).<br>Căn 69 - 72 - 82m gi&aacute; 4 - 4,5 tỷ bao t&ecirc;n (2PN).<br>Căn 94 - 103 - 112m. Gi&aacute; 5,5 tỷ - 6,1 tỷ (3PN).<br>Căn g&oacute;c 115m gi&aacute; 6,5 - 7,2 tỷ.<br>Căn 143,5 - 154,5m. Gi&aacute; 7,9 - 9 tỷ (4PN).<br><br>Tư vấn 24/7 gọi ngay Minh Giang :&nbsp;<span class=\"hidden-mobile hidden-phone m-cover js__btn-tracking m-uncover\">0967 454 638</span><br><br>3 - To&agrave; R3 trung t&acirc;m quảng trường.<br><br>Căn 109m gi&aacute; 5,7 tỷ - 6,2 tỷ bao t&ecirc;n.<br>Căn 121m - 123m. Gi&aacute; 6,9 tỷ - 7,8 tỷ bao t&ecirc;n (căn 3 ph&ograve;ng ngủ).<br>Căn 137m Gi&aacute; 9 tỷ bao t&ecirc;n ( căn 3 ph&ograve;ng ngủ )<br>Căn 131.4m, view quảng trường, gi&aacute; 9 tỷ bao t&ecirc;n (căn 3 ph&ograve;ng ngủ).<br>Căn 157m - 175m - 195m, view quảng trường, gi&aacute; 9,8 tỷ - 15 tỷ bao t&ecirc;n (căn 3 ph&ograve;ng ngủ).<br>Căn 221m căn g&oacute;c vip, view quảng trường. Gi&aacute; 16 tỷ - 22 tỷ (4 ph&ograve;ng ngủ).<br><br>Tư vấn 24/7 gọi ngay Minh Giang:&nbsp;<span class=\"hidden-mobile hidden-phone m-cover js__btn-tracking m-uncover\">0967 454 638</span><br><br>4 - To&agrave; R1 &amp; to&agrave; R2.<br><br>Căn số 12 - DT 88,3m ban c&ocirc;ng TB, gi&aacute; b&aacute;n 4,7 tỷ.<br>Căn số 27 - DT 89,6m ban c&ocirc;ng ĐB gi&aacute; 4,8 tỷ ban c&ocirc;ng view khu&ocirc;n vi&ecirc;n.<br>Căn số 12B - DT 104.8m ban c&ocirc;ng TB gi&aacute; 4,9 tỷ view th&agrave;nh phố.<br>Căn số 24 - DT 96,3m ban c&ocirc;ng ĐB gi&aacute; 4,9 tỷ cả ba ph&ograve;ng tho&aacute;ng s&aacute;ng, view bể bơi.<br>Căn số 05 - DT 109m ban c&ocirc;ng ĐN gi&aacute; 4,9 tỷ View khu&ocirc;n vi&ecirc;n.<br>Căn số 4 v&agrave; 6 - DT 109m ban c&ocirc;ng TB gi&aacute; 5,1 tỷ view th&agrave;nh phố.<br>Căn số 9 DT 110m ban c&ocirc;ng ĐN gi&aacute; b&aacute;n 5,2 tỷ.<br>Căn 18 v&agrave; 20 - DT 124,6m ban c&ocirc;ng ch&iacute;nh Nam gi&aacute; 5,6 tỷ view khu&ocirc;n vi&ecirc;n.<br>Căn số 08 - DT 114,5m ban c&ocirc;ng TB gi&aacute; 5,1 tỷ căn 2 PN si&ecirc;u đẹp, 3 ph&ograve;ng tho&aacute;ng s&aacute;ng.<br>Căn 12A - DT 145,2m ban c&ocirc;ng ĐN gi&aacute; 5,9 tỷ View bể bơi.<br>Căn hộ duplex 3 ph&ograve;ng ngủ 190m gi&aacute; si&ecirc;u rẻ 9,4 tỷ nội thất nh&agrave; đẹp long lanh.<br>Căn số 1 - DT 181.4m ban c&ocirc;ng ĐN ĐB gi&aacute; 9,6 tỷ căn g&oacute;c, ba ph&ograve;ng ngủ tho&aacute;ng s&aacute;ng.<br><br>Mua nh&agrave; gi&aacute; tốt - li&ecirc;n hệ ngay MR Giang:&nbsp;<span class=\"hidden-mobile hidden-phone m-cover js__btn-tracking m-uncover\">0967 454 638</span>.<br>Phục vụ 24/7 cả ng&agrave;y lễ tết v&agrave; cuối tuần.<br><br>Tr&acirc;n trọng!</p>', 'Royal City, 72A, Đường Nguyễn Trãi, Phường Thượng Đình, Thanh Xuân, Hà Nội', 6500000000, 'Bán', '2023-07-07 07:26:14', '2023-07-07 10:49:37', 2022, 145, 'căn', 22);

-- --------------------------------------------------------

--
-- Table structure for table `property_details`
--

CREATE TABLE `property_details` (
  `detail_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `bedroom_id` int(11) DEFAULT NULL,
  `bathroom_id` int(11) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `property_details`
--

INSERT INTO `property_details` (`detail_id`, `property_id`, `bedroom_id`, `bathroom_id`, `area_id`) VALUES
(1, 1, 3, 3, 3),
(2, 2, 1, 1, 1),
(3, 3, 3, 2, 2),
(4, 4, 1, 1, 2),
(5, 5, 2, 2, 2),
(6, 6, 2, 2, 2),
(7, 7, 3, 3, 3),
(8, 8, 2, 2, 2),
(9, 9, 3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

CREATE TABLE `property_images` (
  `image_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `image_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `property_images`
--

INSERT INTO `property_images` (`image_id`, `property_id`, `image_url`) VALUES
(1, 1, 'IMG-64849e7e5f0259.28894626.jpeg'),
(2, 1, 'IMG-64849e7e5f40b3.37465739.jpeg'),
(3, 1, 'IMG-64849e7e5f6af3.55125177.jpeg'),
(4, 1, 'IMG-64849e7e5f9145.10198143.jpeg'),
(5, 2, 'IMG-648596bba24f01.53984468.jpg'),
(6, 2, 'IMG-648596bba2baf8.17903306.jpg'),
(7, 2, 'IMG-648596bba30453.56544731.jpg'),
(8, 2, 'IMG-648596bba379a8.57213482.jpg'),
(9, 3, 'IMG-648599e5c3e008.99618917.jpg'),
(10, 3, 'IMG-648599e5c42bb5.65693444.jpg'),
(11, 3, 'IMG-648599e5c459f0.34725435.jpg'),
(12, 3, 'IMG-648599e5c48953.65361959.jpg'),
(13, 4, 'IMG-6487b8e34c7630.30221402.jpeg'),
(14, 4, 'IMG-6487b8e34cfa87.68342856.jpeg'),
(15, 4, 'IMG-6487b8e34d5776.76921842.jpeg'),
(16, 4, 'IMG-6487b8e34dc0a4.47050104.jpeg'),
(17, 5, 'IMG-6487ba5317fe22.47429250.jpg'),
(18, 5, 'IMG-6487ba531858c4.66090555.jpg'),
(19, 5, 'IMG-6487ba5318a0f6.79909737.jpg'),
(20, 5, 'IMG-6487ba5318ee47.06763851.jpg'),
(21, 6, 'IMG-6487d4ad7db137.02141854.jpg'),
(22, 6, 'IMG-6487d4ad7e1830.29973842.jpg'),
(23, 6, 'IMG-6487d4ad7e5dc7.19156813.jpg'),
(24, 6, 'IMG-6487d4ad7eab14.00913426.jpg'),
(25, 7, 'IMG-6487d7e7ef6aa1.66172473.jpg'),
(26, 7, 'IMG-6487d7e7efdde7.84012912.jpg'),
(27, 7, 'IMG-6487d7e7f029d9.19732576.jpg'),
(28, 7, 'IMG-6487d7e7f086e7.62634412.jpg'),
(29, 8, 'IMG-64a79443466a58.70804717.jpg'),
(30, 8, 'IMG-64a79443471a45.16772354.jpg'),
(31, 8, 'IMG-64a79443478009.41775291.jpg'),
(32, 8, 'IMG-64a7944347e6a6.73008945.jpg'),
(33, 9, 'IMG-64a7be163737c6.67924361.jpg'),
(34, 9, 'IMG-64a7be16377399.88187494.jpg'),
(35, 9, 'IMG-64a7be1637f772.94984548.jpg'),
(36, 9, 'IMG-64a7be163830b2.40095200.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `property_types`
--

CREATE TABLE `property_types` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `property_types`
--

INSERT INTO `property_types` (`type_id`, `type_name`) VALUES
(1, 'Nhà gia đình'),
(2, 'Nhà mặt phố'),
(3, 'Căn hộ chung cư'),
(4, 'Tòa nhà văn phòng'),
(5, 'Shophouse'),
(6, 'Biệt thự'),
(7, 'Vinhomes'),
(8, 'Đất, đất nền'),
(9, 'Kho, nhà xưởng'),
(10, 'Bất động sản khác');

-- --------------------------------------------------------

--
-- Table structure for table `property_utilities`
--

CREATE TABLE `property_utilities` (
  `property_id` int(11) NOT NULL,
  `utility_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `property_utilities`
--

INSERT INTO `property_utilities` (`property_id`, `utility_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 15),
(2, 1),
(2, 2),
(2, 6),
(2, 8),
(2, 9),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(3, 9),
(3, 11),
(3, 15),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(4, 6),
(4, 8),
(4, 15),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(5, 5),
(5, 6),
(5, 8),
(5, 12),
(5, 15),
(6, 2),
(6, 3),
(6, 4),
(6, 5),
(6, 6),
(6, 8),
(6, 15),
(7, 1),
(7, 2),
(7, 3),
(7, 4),
(7, 5),
(7, 6),
(7, 8),
(7, 12),
(7, 15),
(8, 1),
(8, 2),
(8, 3),
(8, 4),
(8, 5),
(8, 6),
(8, 8),
(8, 12),
(9, 1),
(9, 2),
(9, 3),
(9, 4),
(9, 5),
(9, 6),
(9, 7),
(9, 8),
(9, 9),
(9, 11),
(9, 15);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `review_text` text DEFAULT NULL,
  `review_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tags_id` int(11) NOT NULL,
  `tags_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tags_id`, `tags_name`) VALUES
(1, 'Tin tức'),
(2, 'Blog'),
(3, 'Tư vấn'),
(4, 'Chính sách'),
(5, 'Kinh nghiệm'),
(6, 'Phong cách sống'),
(7, 'Thiết kế nội thất'),
(8, 'Cải tạo nhà cửa'),
(9, 'Xây dựng nhà'),
(10, 'Đầu tư'),
(11, 'Pháp lý'),
(12, 'Hướng dẫn'),
(13, 'Phân tích thị trường');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `account_type_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fullname` varchar(100) DEFAULT NULL,
  `user_address` varchar(200) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `linkedin` varchar(200) DEFAULT NULL,
  `avatar_url` varchar(200) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `phone_number`, `account_type_id`, `created_at`, `updated_at`, `fullname`, `user_address`, `state`, `about`, `facebook`, `linkedin`, `avatar_url`, `status`) VALUES
(1, 'sangpham', 'e10adc3949ba59abbe56e057f20f883e', 'phamduysang.work210@gmail.com', '0898019210', 1, '2023-06-10 15:51:55', '2023-07-05 04:33:54', 'Phạm Duy Sang', 'TP. Hồ Chí Minh', 'Việt Nam', 'Sang Pham admin', 'https://www.facebook.com/profile.php?id=100069645099219', 'https://www.linkedin.com/in/syva/', 'IMG-649ea92343e407.48590629.jpg', NULL),
(2, 'linh', '171235144de39a8c8839af4c1aa24a35', 'testemail@gmail.com', '', 6, '2023-06-13 00:24:14', '2023-07-05 10:15:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Banned'),
(3, 'linhngo', 'e10adc3949ba59abbe56e057f20f883e', 'Linhngo@gmail.com', '', 2, '2023-06-13 00:25:34', '2023-07-06 11:07:58', 'Ngô Hoài Linh', 'TP. Hồ Chí Minh', 'Việt Nam', 'Quản lý Linh', 'https://facebook.com/LinhNgo', 'https://linkedin.com/LinhNgo', 'IMG-649c4bb6de7943.56125777.jpg', NULL),
(4, 'thiennhi', 'e10adc3949ba59abbe56e057f20f883e', 'testemail@gmail.com', '', 6, '2023-06-29 14:11:08', '2023-07-06 09:53:18', '', '', '', '', '', '', 'IMG-649d9140366349.35022212.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `utilities`
--

CREATE TABLE `utilities` (
  `utility_id` int(11) NOT NULL,
  `utility_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `utilities`
--

INSERT INTO `utilities` (`utility_id`, `utility_name`) VALUES
(1, 'Ban công'),
(2, 'Điều hòa'),
(3, 'Máy giặt'),
(4, 'Tivi'),
(5, 'Tủ lạnh'),
(6, 'Internet(Wi-fi)'),
(7, 'Cho phép vật nuôi'),
(8, 'Nội thất đầy đủ'),
(9, 'Ga-ra'),
(10, 'Sân vườn'),
(11, 'Hồ Bơi'),
(12, 'Ven sông'),
(13, 'Ven Biển'),
(14, 'Mặt tiền'),
(15, 'Trung tâm thành phố');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_types`
--
ALTER TABLE `account_types`
  ADD PRIMARY KEY (`account_type_id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `fk_appointment_property` (`property_id`),
  ADD KEY `fk_appointment_user` (`user_id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `bathrooms`
--
ALTER TABLE `bathrooms`
  ADD PRIMARY KEY (`bathroom_id`);

--
-- Indexes for table `bedrooms`
--
ALTER TABLE `bedrooms`
  ADD PRIMARY KEY (`bedroom_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `fk_cart_user` (`user_id`),
  ADD KEY `fk_cart_property` (`property_id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`contract_id`),
  ADD KEY `fk_contract_property` (`property_id`),
  ADD KEY `fk_contract_user` (`user_id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`favorite_id`),
  ADD KEY `fk_favorite_user` (`user_id`),
  ADD KEY `fk_favorite_property` (`property_id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `fk_feedback_property` (`property_id`),
  ADD KEY `fk_feedback_user` (`user_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `fk_location_property` (`property_id`);

--
-- Indexes for table `news_blog`
--
ALTER TABLE `news_blog`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `fk_news_author` (`author_id`);

--
-- Indexes for table `news_tags`
--
ALTER TABLE `news_tags`
  ADD PRIMARY KEY (`news_id`,`tags_id`),
  ADD KEY `tags_id` (`tags_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`property_id`),
  ADD KEY `fk_property_user` (`user_id`),
  ADD KEY `fk_property_type` (`type_id`);

--
-- Indexes for table `property_details`
--
ALTER TABLE `property_details`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `fk_property_detail_property` (`property_id`),
  ADD KEY `fk_property_detail_bedroom` (`bedroom_id`),
  ADD KEY `fk_property_detail_bathroom` (`bathroom_id`),
  ADD KEY `fk_property_detail_area` (`area_id`);

--
-- Indexes for table `property_images`
--
ALTER TABLE `property_images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `fk_property_image` (`property_id`);

--
-- Indexes for table `property_types`
--
ALTER TABLE `property_types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `property_utilities`
--
ALTER TABLE `property_utilities`
  ADD PRIMARY KEY (`property_id`,`utility_id`),
  ADD KEY `utility_id` (`utility_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `fk_review_property` (`property_id`),
  ADD KEY `fk_review_user` (`user_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tags_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `account_type_id` (`account_type_id`);

--
-- Indexes for table `utilities`
--
ALTER TABLE `utilities`
  ADD PRIMARY KEY (`utility_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_types`
--
ALTER TABLE `account_types`
  MODIFY `account_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bathrooms`
--
ALTER TABLE `bathrooms`
  MODIFY `bathroom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bedrooms`
--
ALTER TABLE `bedrooms`
  MODIFY `bedroom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `contract_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `favorite_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news_blog`
--
ALTER TABLE `news_blog`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `property_details`
--
ALTER TABLE `property_details`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `tags_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `utilities`
--
ALTER TABLE `utilities`
  MODIFY `utility_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `fk_appointment_property` FOREIGN KEY (`property_id`) REFERENCES `properties` (`property_id`),
  ADD CONSTRAINT `fk_appointment_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `fk_cart_property` FOREIGN KEY (`property_id`) REFERENCES `properties` (`property_id`),
  ADD CONSTRAINT `fk_cart_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `contracts`
--
ALTER TABLE `contracts`
  ADD CONSTRAINT `fk_contract_property` FOREIGN KEY (`property_id`) REFERENCES `properties` (`property_id`),
  ADD CONSTRAINT `fk_contract_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `fk_favorite_property` FOREIGN KEY (`property_id`) REFERENCES `properties` (`property_id`),
  ADD CONSTRAINT `fk_favorite_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `fk_feedback_property` FOREIGN KEY (`property_id`) REFERENCES `properties` (`property_id`),
  ADD CONSTRAINT `fk_feedback_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `fk_location_property` FOREIGN KEY (`property_id`) REFERENCES `properties` (`property_id`);

--
-- Constraints for table `news_blog`
--
ALTER TABLE `news_blog`
  ADD CONSTRAINT `fk_news_author` FOREIGN KEY (`author_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `news_tags`
--
ALTER TABLE `news_tags`
  ADD CONSTRAINT `news_tags_ibfk_1` FOREIGN KEY (`news_id`) REFERENCES `news_blog` (`news_id`),
  ADD CONSTRAINT `news_tags_ibfk_2` FOREIGN KEY (`tags_id`) REFERENCES `tags` (`tags_id`);

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `fk_property_type` FOREIGN KEY (`type_id`) REFERENCES `property_types` (`type_id`),
  ADD CONSTRAINT `fk_property_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `property_details`
--
ALTER TABLE `property_details`
  ADD CONSTRAINT `fk_property_detail_area` FOREIGN KEY (`area_id`) REFERENCES `areas` (`area_id`),
  ADD CONSTRAINT `fk_property_detail_bathroom` FOREIGN KEY (`bathroom_id`) REFERENCES `bathrooms` (`bathroom_id`),
  ADD CONSTRAINT `fk_property_detail_bedroom` FOREIGN KEY (`bedroom_id`) REFERENCES `bedrooms` (`bedroom_id`),
  ADD CONSTRAINT `fk_property_detail_property` FOREIGN KEY (`property_id`) REFERENCES `properties` (`property_id`);

--
-- Constraints for table `property_images`
--
ALTER TABLE `property_images`
  ADD CONSTRAINT `fk_property_image` FOREIGN KEY (`property_id`) REFERENCES `properties` (`property_id`);

--
-- Constraints for table `property_utilities`
--
ALTER TABLE `property_utilities`
  ADD CONSTRAINT `property_utilities_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`property_id`),
  ADD CONSTRAINT `property_utilities_ibfk_2` FOREIGN KEY (`utility_id`) REFERENCES `utilities` (`utility_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_review_property` FOREIGN KEY (`property_id`) REFERENCES `properties` (`property_id`),
  ADD CONSTRAINT `fk_review_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`account_type_id`) REFERENCES `account_types` (`account_type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
