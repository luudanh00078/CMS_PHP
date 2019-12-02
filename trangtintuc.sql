-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 02, 2019 at 03:44 AM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trangtintuc`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE IF NOT EXISTS `baiviet` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) COLLATE utf8_vietnamese_ci NOT NULL,
  `content` text COLLATE utf8_vietnamese_ci NOT NULL,
  `thumbnail` varchar(500) COLLATE utf8_vietnamese_ci NOT NULL,
  `danhmuc_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`id`, `name`, `content`, `thumbnail`, `danhmuc_id`, `status`) VALUES
(14, 'HLV Park Hang-seo: ', '<p>&quot;H&ocirc;m nay, U22 Việt Nam thắng xứng đ&aacute;ng v&agrave; đẳng cấp. Ch&uacute;ng t&ocirc;i đ&atilde; gặp kh&oacute; khăn trong hiệp 1 nhưng giữa giờ t&ocirc;i h&ocirc; cả đội kh&ocirc;ng được từ bỏ, kh&ocirc;ng được đầu h&agrave;ng. Họ đ&atilde; l&agrave;m được v&agrave; thắng ngược đối phương. T&ocirc;i phải cảm ơn c&aacute;c cầu thủ&quot;, HLV Park Hang-seo n&oacute;i.</p>\r\n\r\n<p>&Ocirc;ng chia sẻ tiếp: &quot;Th&agrave;nh c&ocirc;ng lu&ocirc;n rất quan trọng, ảnh hưởng đến tập luyện, c&aacute;c cầu thủ sẽ nghĩ t&iacute;ch cực hơn v&agrave; hồi phục tốt hơn. Ch&uacute;ng t&ocirc;i c&oacute; lợi thế đ&aacute; sớm hơn U22 Indonesia 1 ng&agrave;y ở lượt trước.</p>\r\n\r\n<p><img alt="" src="https://kenh14cdn.com/thumb_w/620/2019/12/1/787800985482630060268776350698661462147072n-1575210019703218710154.jpg" /></p>\r\n', 'park_hang_seo.jpg', 1, 1),
(15, 'HLV indonesia', '<p>Trận đấu giữa Indonesia với U22 Việt Nam kết th&uacute;c với tỷ số 2-1 nghi&ecirc;ng về thầy tr&ograve; huấn luyện vi&ecirc;n Park Hang-seo.</p>\r\n\r\n<p>&quot;Ch&uacute;ng t&ocirc;i chơi như đ&atilde; l&ecirc;n kế hoạch từ đầu trong hiệp 1 v&agrave; c&oacute; b&agrave;n thắng. Sang hiệp 2, ch&uacute;ng t&ocirc;i biết Việt Nam sẽ chơi tấn c&ocirc;ng dữ dội, n&ecirc;n Indonesia chủ động chơi phản c&ocirc;ng. Tuy nhi&ecirc;n, số t&igrave;nh huống đ&oacute; lại kh&ocirc;ng th&agrave;nh c&ocirc;ng. Họ tận dụng được sơ hở từ h&agrave;ng ph&ograve;ng ngự nhờ v&agrave;o chiến thuật hợp l&yacute;&quot;, HLV U22 Indonesia chia sẻ.</p>\r\n\r\n<p><img alt="" src="https://znews-photo.zadn.vn/w660/Uploaded/aopuoax/2019_12_01/1_zing.jpg" style="height:435px; width:660px" /></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'hlv_indonesia.jpg', 1, 1),
(16, 'Năm 2020 Samsung có gì vui?', '<p><br />\r\nHai chiếc điện thoại n&agrave;y dự l&agrave; sẽ tiếp tục xu hướng viền m&agrave;n h&igrave;nh si&ecirc;u mỏng của Note 10. Trước mắt ch&uacute;ng ta thấy S11 c&oacute; thiết kế rất gần với Note 10 rồi đ&oacute;, v&agrave; như mọi khi camera hay hiệu năng hay thiết kế sẽ tiếp tục xuất sắc. M&igrave;nh c&ograve;n nghe tin đồn l&agrave; d&ograve;ng Galaxy năm sau sẽ c&oacute; cải tiến mạnh mẽ về m&aacute;y ảnh.<br />\r\n<br />\r\nNote 11 ra mắt cuối năm, hi vọng từ đ&acirc;y tới đ&oacute; Samsung c&oacute; thể sẽ ph&aacute;t triển v&agrave; đưa v&agrave;o sản xuất kịp một c&ocirc;ng nghệ mới n&agrave;o đ&oacute; để loại bỏ lu&ocirc;n c&aacute;i lỗ kho&eacute;t tr&ecirc;n m&agrave;n h&igrave;nh.</p>\r\n\r\n<p><img alt="" src="https://photo2.tinhte.vn/data/attachment-files/2019/12/4841968_galaxy_s11.jpg" style="height:619px; width:1000px" /></p>\r\n', 'samsung.jpg', 2, 1),
(17, 'Nokia: Quan tâm tới khách hàng, họ sẽ quay trở lại', '<p>Chỉ v&agrave;i năm trước th&ocirc;i,&nbsp;<a href="https://tinhte.vn/nokia/" title="">Nokia</a>&nbsp;cũng giống như Blackberry, l&agrave; c&aacute;i t&ecirc;n nổi bật khi nhắc về chuyện một g&atilde; khổng lồ kh&ocirc;ng bắt kịp được xu thế&nbsp;<a href="https://tinhte.vn/tags/smartphone/" title="">smartphone</a>&nbsp;hơn chục năm về trước, dẫn đến sự suy t&agrave;n của thương hiệu. Ngay cả việc được Microsoft mua lại với gi&aacute; 7,8 tỷ USD hồi năm 2014 cũng kh&ocirc;ng cứu được thương hiệu từng chiếm 41% thị phần&nbsp;<a href="https://tinhte.vn/tags/dien-thoai/" title="">điện thoại</a>&nbsp;di động to&agrave;n cầu. Đến năm 2016, Microsoft chịu thua, b&aacute;n đi thương hiệu Nokia, khiến nhiều người nghĩ rằng Nokia từ đ&oacute; sẽ kh&ocirc;ng c&ograve;n tồn tại nữa.</p>\r\n\r\n<p><img alt="" src="https://photo2.tinhte.vn/data/attachment-files/2019/12/4842174_Tinhte_Nokia1.jpg" style="height:1000px; width:1500px" /></p>\r\n', 'X6-2020.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE IF NOT EXISTS `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_vietnamese_ci NOT NULL,
  `thumbnail` varchar(500) COLLATE utf8_vietnamese_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `status` enum('0','1') COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `thumbnail`, `parent_id`, `status`) VALUES
(1, 'Thể Thao', 'https://kenh14cdn.com/thumb_w/620/2019/12/1/ekpagdfwwaufrnd-1575141519186993326718.jpg', 0, '1'),
(2, 'Thế Giới Công Nghệ', 'https://photo2.tinhte.vn/data/attachment-files/2019/12/4842096_cover_internet_VN.jpg', 0, '1'),
(3, 'Showbiz', 'https://media.laodong.vn/Storage/NewsPortal/2019/5/24/735445/Ba-Tan-1558601607289.jpg', 0, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_danhmuc_baiviet` (`danhmuc_id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `fk_danhmuc_baiviet` FOREIGN KEY (`danhmuc_id`) REFERENCES `danhmuc` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
