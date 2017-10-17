-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 02:24 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id_com` int(10) NOT NULL,
  `name_com` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Mota_com` text COLLATE utf8_unicode_ci,
  `image_com` text COLLATE utf8_unicode_ci,
  `lienhe` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ava_com` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fb_com` text COLLATE utf8_unicode_ci,
  `email_com` text COLLATE utf8_unicode_ci,
  `tw_com` text COLLATE utf8_unicode_ci,
  `pt_com` text COLLATE utf8_unicode_ci,
  `active` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id_com`, `name_com`, `Mota_com`, `image_com`, `lienhe`, `ava_com`, `fb_com`, `email_com`, `tw_com`, `pt_com`, `active`) VALUES
(2, 'Facebook', 'Facebook là một website truy cập miễn phí do công ty Facebook, Inc điều hành. Người dùng có thể tham gia các mạng lưới được tổ chức theo thành phố, nơi làm việc, trường học và khu vực để liên kết và giao tiếp với người khác.', 'facebook.jpg', 'facebook.com', 'facebook2.jpg', NULL, NULL, NULL, NULL, 0),
(3, 'Unilever', 'Unilever là một công ty đa quốc gia của Anh và Hà Lan chuyên sản xuất các mặt hàng tiêu dùng như mỹ phẩm, hóa chất giặt tẩy, kem đánh răng, dầu gội, thực phẩm... Đối thủ cạnh tranh chủ yếu của Unilever là hãng Procter & Gamble, Nestlé, Kraft Foods, Mars Incorporated, Reckitt Benckiser và Henkel.', 'unilever.jpg\r\n', 'unilever.com', 'unilever1.jpg', NULL, NULL, NULL, NULL, 1),
(4, 'Đông Á bank', 'Được thành lập và chính thức đi vào hoạt động ngày 01/07/1992 với số vốn điều lệ 20 tỉ đồng, 56 cán bộ công nhân viên và 3 phòng ban nghiệp vụ, qua 23 năm hoạt động, với tầm nhìn, mục tiêu, chiến lược hướng đến lĩnh vực bán lẻ, DongA Bank đã khẳng định vị trí hàng đầu về việc phát triển ứng dụng công nghệ không ngừng của mình trong hệ thống Ngân hàng thương mại cổ phần tại Việt Nam.', 'donga.jpg\r\n', 'dongabank.com.vn', 'donga1.jpg', NULL, NULL, NULL, NULL, 1),
(5, 'Công ty cổ phần Kinh Đô', 'Kinh Đô là một công ty cổ phần chuyên sản xuất và kinh doanh thức ăn nhẹ tại Việt Nam, với các mặt hàng chính gồm bánh, kẹo và kem. Hiện nay Kinh Đô là một trong những công ty tư nhân có lợi nhuận vào hàng cao nhất trong các công ty niêm yết trên thị trường chứng khoán tại Việt Nam [cần dẫn nguồn]. Các thành viên hội đồng quản trị công ty được các báo chí Việt Nam bình chọn là những cá nhân giàu nhất Việt Nam dựa trên tài sản chứng khoán', 'kinhdo.jpg', 'kinhdo.vn', 'kinhdo1.jpg', NULL, NULL, NULL, NULL, 1),
(6, 'Thư viện quốc gia', 'Thư viện Quốc gia Việt Nam (tên giao dịch quốc tế: National Library of Vietnam - NLV) là thư viện cấp quốc gia của Việt Nam, đứng đầu trong hệ thống thư viện công cộng và chịu sự chỉ đạo trực tiếp của Bộ Văn hóa, Thể thao và Du lịch Việt Nam.\r\nThư viện tọa lạc tại phố Tràng Thi và có một cổng lớn mở ra hướng đường Hai Bà Trưng, quận Hoàn Kiếm, thành phố Hà Nội', 'thuvien.jpg', 'nlv.gov.vn', 'thuvien.jpg', NULL, NULL, NULL, NULL, 1),
(7, 'Công ty cổ phần Rạng Đông', 'Tập đoàn Rạng Đông được thành lập từ đầu năm 1991, hoạt động trong các lĩnh vực: xây lắp các loại cơ sở hạ tầng; Các công trình BOT; Khai thác khoáng sản; Sản xuất vật liệu xây dựng; Đồ gỗ; Cơ khí; Trồng rừng; Trồng rừng cao su; Đầu tư các khu dân cư; Các khu du lịch phức hợp (resort, khách sạn, sân golf,…).\r\nHiện tại, Tập đoàn Rạng Đông là một trong những Tập đoàn tư nhân xây lắp hạ tầng lớn nhất Việt Nam, với trụ sở chính đặt tại TP. Phan Thiết.\r\nTập đoàn Rạng Đông với gần 20 năm kinh nghiệm, tự hào đã tạo ra những công trình, sản phẩm có chất lượng, đóng góp vào sự phát triển bền vững và phồn vinh của cộng đồng. Đặc biệt,\r\nTập đoàn Rạng Đông đã đánh dấu bước phát triển đột phá từ năm 2000, với sự ra đời của hơn 10 công ty thành viên.', 'rangdong.jpg', 'rangdonggroup.com.vn', 'rangdong1.jpg', NULL, NULL, NULL, NULL, 1),
(8, 'Tập đoàn FLC', 'Năm 2001, luật sư Trịnh Văn Quyết cùng hai cộng sự thành lập Công ty Cổ phần Vietnam Trade Corp, hoạt động trong lĩnh vực kinh doanh thương mại - dịch vụ.\r\n\r\nĐây là dấu mốc đầu tiên trong sự nghiệp của vị luật sư trẻ 26 tuổi, người mà sau này là sáng lập viên của FLC, đồng thời là một tên tuổi lớn trong làng luật và giới doanh nhân nước nhà.\r\n \r\nNăm 2001 cũng chứng kiến một sự kiện quan trọng mà sau này sẽ có ảnh hưởng lớn đến hoạt động của FLC. Sau khi đánh giá tiềm năng lâu dài trong lĩnh vực tư vấn đầu tư, ông Quyết cùng các cộng sự tiếp tục cho ra đời Công ty Cổ phần Tư vấn quản lý và Giám sát đầu tư (viết tắt là SMiC).', 'flc.jpg', 'flc.vn', 'flc1.jpg', NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_required`
--

CREATE TABLE `company_required` (
  `id_required` int(11) NOT NULL,
  `TenCongViec` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ViTri` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KyNang` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiaDiem` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_com` int(10) DEFAULT NULL,
  `MoTa` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Luong` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hinhanh` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company_required`
--

INSERT INTO `company_required` (`id_required`, `TenCongViec`, `ViTri`, `KyNang`, `DiaDiem`, `id_com`, `MoTa`, `Luong`, `Hinhanh`) VALUES
(2, 'Kĩ sư phần mềm', 'Nhân viên', 'Code', 'Hồ Chí Minh', 2, 'Hoạt bát, vui vẻ, hòa đồng, thân thiện', '2000USD', 'facebook.jpg'),
(3, 'Tư vấn viên', 'Trưởng phòng', 'Marketing', 'Hà Nội', 3, 'Nữ, ngoại hình đẹp, chiều cao trên 1m69, vui vẻ', '5000USD', 'unilever.jpg'),
(4, 'Kế toán', 'Kế toán trưởnng', 'Tài Chính', 'Hải Phòng', 4, 'Có bằng đại học tài chính kế toán, có khả năng tính toán tốt, yêu công việc', '2000USD', '14939880840dea8c14b93544bd951067cc218aad65.jpg'),
(5, 'Nhân viên bán hàng', 'Nhân viên', 'Bán hàng', 'Sài Gòn', 5, 'Thân thiện với khách hàng, vui vẻ, ngoại hình khá', '1000USD', 'kinhdo.jpg'),
(6, 'Văn thư', 'Thủ thư', 'Hành chính', 'Hà Nội', 6, 'Nhiệt tình với công việc, khả năng tính toán tốt', '2000USD', 'thuvien.jpg'),
(7, 'Kĩ sư điện', 'Kĩ sử trưởng', 'Điện', 'Hải Phòng', 7, 'Khả năng sử dụng tốt các công cụ điện, tỉ mĩ, kiên trì', '3000USD', 'rangdong.jpg'),
(23, 'Ngắm gái', 'trung tâm', 'Tinh mắt', 'Liên chiểu', 4, 'Ngắm gái', '1000$', '14939815580dea8c14b93544bd951067cc218aad65.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id_ten` int(10) NOT NULL,
  `hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` int(30) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hocvan` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kinhnghiem` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id_ten`, `hoten`, `sodienthoai`, `email`, `address`, `ngaysinh`, `hocvan`, `kinhnghiem`, `mota`) VALUES
(1, 'hieu', 1234567, 'nguyenhuuhieu123321@gmail.com', '123qwewq', '122345', 'chua co', 'chua co', 'chua co'),
(8, '', 1234566778, 'nguyenhuuhieu123321@gmail.com', '', NULL, NULL, NULL, NULL),
(9, '', 123, 'nguyenhuuhieu1233271@gmail.com', '', NULL, NULL, NULL, NULL),
(10, '', 1234567, 'nguyenphat@yahoo.com', '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(50) DEFAULT NULL,
  `position` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `email`, `phone`, `position`) VALUES
(5, 'admin', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 2),
(9, 'ahnd123', 'd41d8cd98f00b204e9800998ecf8427e', 'nguyenhuuhieu1233271@gmail.com', 123, 1),
(12, 'admin2', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 1),
(13, 'admin3', 'fcea920f7412b5da7be0cf42b8c93759', NULL, NULL, 1),
(15, 'admin8', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_com`);

--
-- Indexes for table `company_required`
--
ALTER TABLE `company_required`
  ADD PRIMARY KEY (`id_required`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id_ten`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id_com` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `company_required`
--
ALTER TABLE `company_required`
  MODIFY `id_required` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id_ten` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
