-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 05:04 PM
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
(1, 1, NULL, NULL, 'Vinhomes Central Park, Bình Thạnh, Hồ Chí Minh', 'Hồ Chí Minh', NULL, NULL),
(2, 2, NULL, NULL, 'Vinhomes Grand Park, Phường Long Thạnh Mỹ, Quận 9, Hồ Chí Minh', 'TP. Hồ Chí Minh', NULL, NULL),
(3, 3, NULL, NULL, 'The Sakura - Vinhomes Smart City, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội', 'Hà Nội', NULL, NULL);

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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
  `price` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'unknown',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `age` int(11) DEFAULT NULL,
  `real_area` decimal(10,0) NOT NULL,
  `unit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`property_id`, `user_id`, `type_id`, `property_name`, `description`, `address`, `price`, `status`, `created_at`, `updated_at`, `age`, `real_area`, `unit`) VALUES
(1, 1, 3, 'Penthouse Vinhomes Central Park', 'Siêu phẩm Penthouse 3PN Vinhomes Central Park nội thất cực đẹp, sang trọng đẳng cấp 5 sao cho thuê.\r\n\r\nGiá thuê: $5000\r\n\r\n- Diện tích trên 150m².\r\n\r\n- Căn hộ Penthouse : 3 phòng ngủ - 3 nhà tắm với 2 bồn tắm nằm\r\n\r\n- Full nội thất chủ mới làm 3,5 tỷ.\r\n\r\n- View công viên, trực diện sông siêu đẹp - thoáng - không tránh tòa.\r\nTầng đẹp, trục đẹp.\r\n\r\nKhông gian phù với gia đình hoặc khách hàng yêu thích căn hộ rộng rãi.\r\n\r\nNhà đang trống, khách chỉ cần xách vali vào ở ngay.\r\n\r\nLiên hệ xem nhà: 0901 848 585', 'Vinhomes Central Park, Bình Thạnh, Hồ Chí Minh', '115 triệu', 'Thuê', '2023-06-10 16:02:06', '2023-06-11 10:44:50', 2022, 150, 'Thỏa thuận'),
(2, 1, 7, 'Bán gấp nhiều CH Vinhomes Grand Park 1PN + 1.6 tỷ, 2 PN 1.9 tỷ, 2 PN + 2.38 tỷ, 3PN 2.75 tỷ', 'Giỏ hàng cần bán gấp Vinhomes Grand Park, rẻ nhất T5/2023 Studio 1.19 tỷ 1PN +1 1,7 tỷ, 2PN 1.89 tỷ, 2PN + 2.35 tỷ, 3PN, giá 2.75 tỷ. Nhiều căn Origami cắt lỗ tiền tỷ giá ngang Rainbow.\r\nGọi ngay 0834 712 768.\r\nKhu Rainbow: Nhiều căn đã có sổ hồng.\r\n\r\n* Căn Studio.\r\n- DT 33 m² Tòa S2.01 Giá bán 1.25 tỷ.\r\n- DT 30 m² Tòa S1.07 Giá bán 1.15 tỷ\r\n- DT 30m² Tòa S1.06 Giá bán 1.23 tỷ.\r\n- DT 33 m² Tòa S3.01 Giá bán 1.3 tỷ.\r\n* Căn 1 PN +1\r\n- DT 47 m² Tòa S3.05 Giá bán 1.7 tỷ\r\n- DT 47.1m² Tòa S3.02 Giá bán 1,7 tỷ.\r\n- DT 47 m² Tòa S1.01 Giá bán 1.6\r\n- DT 47 m² Tòa S3.01Giá bán 1.7 tỷ.\r\n* Căn 2 PN 1WC.\r\n- DT 59 m² Tòa S3.02 Giá bán 2.1 tỷ.\r\n- DT 59m² Tòa S1.05 Giá bán 1.9 tỷ.\r\n- DT 59.1m² Tòa S5.01 Giá bán 2.3tỷ.\r\n- DT 59 m² Tòa S2.01 Gía bán 2 tỷ full nội thất\r\n- DT 59.1m² Tòa S3.01 Gía bán 2.05 tỷ.\r\n* Căn 2PN 2WC.\r\n- DT 67 m² Tòa S1.02 Giá bán 2.3 tỷ.\r\n- DT 67 m² Tòa S3 Giá bán 2.35 tỷ (có sổ)\r\n* Căn 2PN + 2WC Căn Góc.\r\n- DT 69 m² Tòa S2.03 Giá bán 2.38 tỷ.\r\n- DT 69 m² Tòa S3.02 Giá bán 2.5 tỷ.\r\n- DT 69 m² Tòa S1.06 Giá bán 2.4 tỷ.\r\n- DT 69 m² Tòa S3.05 Giá bán 2.5 tỷ.\r\n- DT 69 m² Tòa S5.03 Giá bán 2.6 tỷ.\r\n* Căn 3PN 2WC Căn Góc.\r\n- DT 81 m² Tòa S1.05 Giá bán 2,8 tỷ.\r\n- DT 81 m² Tòa S5.01 Giá bán 2.95 tỷ.\r\n- DT 81 m² Tòa S1.02 Giá bán 2.75 tỷ.\r\n\r\nKhu Origami ngộp cần chuyển nhượng:\r\n* Căn Studio.\r\n- DT 30 m² - Tòa S902, S705, S803, S601 giá từ 1.3 tỷ.\r\n* Căn 1 PN+1\r\n- DT 47 m² - Tòa S902, S705, S801, S1006, S601 Giá 1.9 tỷ view hồ bơi, 2.4 tỷ view hồ cá koi.\r\n* Căn 2 PN 2WC.\r\n- DT 59 m² Full các tòa S6,7,8,9,10 giá từ 2.3 tỷ - 2.7 tỷ.\r\n- DT 67.8m² giá bán 2.7 tỷ - 3 tỷ.\r\n- DT 69.5m² Tòa S903, S702, S705, S1001, S606, S1005, S802 giá bán 2.8 tỷ - 3.2 tỷ.\r\n* Căn 3PN 2WC.\r\n- DT 81.5m² - Giá bán từ 3.150 tỷ.\r\n\r\n- Giá trên đã bao gồm các chi phí chuyển nhượng khách mua không phải trả thêm bất kỳ chi phí nào.\r\n- Tiện ích nội khu hoàn chỉnh đã đi vào hoạt động: Công viên biển hồ 36ha, khu BBQ trên biển, hồ bơi, công viên ánh sáng, siêu thị, bệnh viện, Trường học chỉ cách vài bước chân.\r\n\r\nHiện tại em đang giữ chìa khóa các căn trên quý anh/chị đi xem liên hệ em 24/7. Em Linh 0834 712 768.\r\n\r\n* Ngoài ra bên em cũng phân phối rổ hàng các khu đang bán giá gốc chủ đầu tư.\r\nBeverly Solari.\r\nBeverly.\r\nMasteri Centre Point.\r\nLumiere Boulevard.\r\n- Nhận nhà: Quý 4 2023.\r\n\r\n- Vị trí trung tâm, gần Vincom, công viên, view sông, bàn giao full nội thất cao cấp, tiện ích nội khu khép kín..\r\n\r\n- Đơn giá: Từ 45 - 70tr/m² tùy view tầng, tòa và phân khu.\r\n\r\n- Diện tích: Studio 30m², 1PN + 53m², 2PN 80m², 3PN 100.1m² (Beverly, Masteri Centre Point, Lumiere).\r\n\r\n- Thanh toán 15% ký HĐMB.\r\n\r\n- Ngân hàng cho vay 70 - 80%, Chủ đầu tư hỗ trợ 0% lãi suất đến 30 tháng, miễn phí trả nợ trước hạn, ân hạn nợ gốc đến 48 tháng.\r\n\r\n- Thanh toán theo tiến độ dàn trải đến khi nhận nhà không vay chiết khấu 7 - 13%.\r\n\r\n- Thanh toán nhanh Chiết khấu 12 - 15%.\r\n\r\n- Tặng gói nội thất lên đến 340 triệu.\r\n\r\n- Tặng 12 tháng phí quản lý.', 'Vinhomes Grand Park, Phường Long Thạnh Mỹ, Quận 9, Hồ Chí Minh', '1.2 tỷ', 'Bán', '2023-06-11 09:41:15', '2023-06-11 09:46:14', 2023, 30, 'căn'),
(3, 1, 3, 'Ngoại giao 3.175Tỷ căn 3PN 80m2 hướng ĐN tòa Sakura CK sâu 20% quà tặng 400tr vào ở ngay lốt đỗ ôtô', 'Duy nhất căn ngoại giao 3.175 tỷ căn 3PN 80m² hướng Đông Nam tòa Sakura CK sâu 20% quà tặng 400tr vào ở ngay, có lốt đỗ ôtô. LH: 0968 659 285 xem căn thực tế.\r\n(*) Chính sách ưu đãi khủng nhất Hè 2023 này thực sự tạo ra cơn sốt giao dịch chưa từng có tại The Sakura & chỉ dành cho khách hàng nhanh nhất:\r\n1. Gói quà mùa hè sôi động lên tới 400 triệu.\r\n2. Tổng chiết khấu thanh toán sớm lên tới 20%.\r\n3. Dễ dàng sở hữu với số vốn tự có chỉ cần 30% ký HĐMB.\r\n+ Hỗ trợ vay ngân hàng đến 70% lên tới 35 năm, miễn gốc lãi 0% 12 tháng.\r\n4. CK tới 0,8% BL ngân hàng.\r\n5. CK thanh toán tiến độ đến 7%.\r\nTư vấn chi tiết chính sách LH: 0968 659 285.\r\n\r\n(*) Lý do lựa chọn phân khu The Sakura:\r\n1. Là phân khúc căn hộ cao cấp Vinhomes Smart City có tiêu chuẩn quản lý, dịch vụ & thiết kế, nội thất bàn giao đáp ứng được đại đa số nhu cầu quý khách hàng.\r\n2. Nội khu phong cách Nhật Bản lần đầu tiên xuất hiện ở Vinhomes Smart City.\r\n3. Quản lý vận hành chuyên nghiệp đến từ cđt Vinhomes.\r\n4. Sử dụng miễn phí gần như toàn bộ các tiện ích như: Bể bơi 4 mùa, vườn nướng BBQ, công viên, vườn nhật, sân chơi thể thao.\r\n\r\n- Tiêu chuẩn bàn giao: Tối thiểu (bao gồm: Thiết bị vệ sinh đầy đủ, trần thạch cao, full sàn gỗ, điều hòa Multi hai chiều, hệ thống điện đầy đủ, khóa cửa thông minh bằng vân tay).\r\n- Thời gian bàn giao: Đã bàn giao tháng 12/2022.\r\n- Thời hạn sở hữu: Sở hữu lâu dài.\r\n\r\n- Điểm nhấn tiện ích có một không hai tại The Sakura mang đến những sự lựa chọn tốt nhất cho cuộc sống của cư dân như: Bể bơi 4 mùa nội khu đầu tiên, vườn Nhật nội khu đầu tiên và duy nhất tại Vinhomes Smart City.\r\nGiá cực tốt cho anh chị nào muốn sở hữu căn hộ 3PN tại SA3.', 'The Sakura - Vinhomes Smart City, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội', '3.2 tỷ', 'Bán', '2023-06-11 09:54:45', '2023-06-11 09:54:45', 2024, 80, 'căn');

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
(3, 3, 3, 2, 2);

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
(12, 3, 'IMG-648599e5c48953.65361959.jpg');

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
(3, 15);

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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `phone_number`, `account_type_id`, `created_at`, `updated_at`) VALUES
(1, 'sangpham', 'e10adc3949ba59abbe56e057f20f883e', 'testemail@gmail.com', '', NULL, '2023-06-10 15:51:55', '2023-06-10 15:51:55');

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
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_blog`
--
ALTER TABLE `news_blog`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property_details`
--
ALTER TABLE `property_details`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
