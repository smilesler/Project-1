-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2018 at 08:34 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `cat_id` int(11) NOT NULL,
  `cat_status` varchar(20) NOT NULL,
  `cat_name` varchar(20) NOT NULL,
  `cat_sex` varchar(20) NOT NULL,
  `cat_birthdate` date NOT NULL,
  `cat_breed` varchar(50) NOT NULL,
  `cat_img` int(11) NOT NULL,
  `cat_habit` varchar(50) NOT NULL,
  `cat_display` tinyint(1) DEFAULT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`cat_id`, `cat_status`, `cat_name`, `cat_sex`, `cat_birthdate`, `cat_breed`, `cat_img`, `cat_habit`, `cat_display`, `member_id`) VALUES
(30, '0', '1231111', 'ชาย', '0000-00-00', '1', 0, '134', 0, 27),
(31, '0', '111', '111', '0000-00-00', '111', 0, '111', 0, 27),
(32, '0', '123111', 'ชาย', '0000-00-00', '1', 0, '134', 0, 27),
(33, '0', '33333333', 'ชาย', '0000-00-00', '19', 0, '134', 0, 27),
(34, '0', '123', 'ชาย', '0000-00-00', '1', 0, '134', 0, 27),
(35, '0', '123', 'ชาย', '0000-00-00', '1', 0, '134', 0, 27),
(36, '0', '123', 'ชาย', '0000-00-00', '1', 0, '134', 0, 27),
(37, '0', '123', 'ชาย', '0000-00-00', '17', 0, '134', 0, 27),
(38, '0', 'baa', 'ชาย', '0000-00-00', '1', 0, '11', 1, 27),
(39, '0', '1', 'ชาย', '0000-00-00', '1', 0, '1', 0, 27),
(40, '0', '1', 'ชาย', '0000-00-00', '1', 0, '111', 0, 27),
(41, '1', '1', 'หญิง', '0000-00-00', '1', 0, '11', 0, 27),
(42, 'จับคู่อยู่', 's', 'ชาย', '0000-00-00', '1', 0, 's', 0, 27),
(43, '1', 'ๅw', 'ชาย', '0000-00-00', '1', 0, '1', 1, 27),
(44, 'จับคู่อยู่', '1', 'ชาย', '0000-00-00', '1', 0, '11', 0, 27),
(45, 'จับคู่อยู่', '1', 'ชาย', '0000-00-00', '1', 0, '11', 1, 27),
(46, 'ไม่ว่าง', 'h', 'ชาย', '0000-00-00', '1', 0, '22', 0, 27);

-- --------------------------------------------------------

--
-- Table structure for table `cat_breed`
--

CREATE TABLE `cat_breed` (
  `catbreed_id` int(11) NOT NULL,
  `breed_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `cat_breed`
--

INSERT INTO `cat_breed` (`catbreed_id`, `breed_name`) VALUES
(1, 'อะบิสซิเนียน (Abyssinian)'),
(2, 'บาหลี (Balinese)'),
(3, 'เบงกอล (Bengal)'),
(4, 'เบอร์แมน (Birman)'),
(5, 'บริติชขนสั้น (British Shorthair)'),
(6, 'เบอร์มีส (Burmese)'),
(7, 'เบอร์มิลลา (Burmilla)'),
(8, 'ชินชิลล่า (Chinchilla)'),
(9, 'คอร์นิชเรกซ์ (Cornish Rex)'),
(10, 'เดวอนเรกซ์ (Devon Rex)'),
(11, 'ม็อกกี้ (Moggie)'),
(12, 'เอ็กโซติกขนสั้น (Exotic Shorthair)'),
(13, 'หางกุดญี่ปุ่น (Japanese Bobtail)'),
(14, 'โคราช (Korat)'),
(15, 'เมนคูน (Maine Coon)'),
(16, 'แมงซ์ (Manx)'),
(17, 'นอร์วีเจียนฟอเรสต์ (Norwegian Forest Cat)'),
(18, 'อ็อกซิแคต (Ocicat)'),
(19, 'โอเรียนทัลขนสั้น (Oriental Shorthair)'),
(20, 'เปอร์เซีย (Persian)'),
(21, 'แร็กดอลล์ (Ragdoll)'),
(22, ' รัสเซียนบลู(Russian Blue)'),
(23, 'สก็อตติชโฟลด์ (Scottish Fold)'),
(24, 'สยาม (Siamese)'),
(25, 'ไซบีเรียนฟอเรสต์ (Siberian Forest Cat)'),
(26, 'สิงหปุระ (Singapura)'),
(27, 'สโนว์ชู (Snowshoe)'),
(28, 'สฟิงซ์ (Sphinx)'),
(29, 'ทิฟฟานี (Tiffanie)'),
(30, 'ท็องกินิส (Tonkinese)'),
(31, 'เตอร์กิชแวน (Turkish Van)');

-- --------------------------------------------------------

--
-- Table structure for table `matching`
--

CREATE TABLE `matching` (
  `matching_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `wait_matching_id` int(11) NOT NULL,
  `img_review` varchar(20) NOT NULL,
  `vote` int(11) NOT NULL,
  `comment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `member_userid` varchar(50) NOT NULL,
  `member_displayname` varchar(50) NOT NULL,
  `member_pictureurl` text NOT NULL,
  `member_phone` varchar(10) NOT NULL,
  `member_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_userid`, `member_displayname`, `member_pictureurl`, `member_phone`, `member_status`) VALUES
(27, 'Ua5e6fb20533ea44c6318e54fc43b3808', 'bank sayfar bunyang', 'https://profile.line-scdn.net/0m01b262847251adaadbb7bcca9c4577b3a787fc1c1530', '0613705379', '\"I like the way you work it \r\nNo diggity \r\nI wanna bag it up \"');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(5) NOT NULL,
  `name_th` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name_th`, `name_en`) VALUES
(1, 'กรุงเทพมหานคร', 'Bangkok'),
(2, 'สมุทรปราการ', 'Samut Prakan'),
(3, 'นนทบุรี', 'Nonthaburi'),
(4, 'ปทุมธานี', 'Pathum Thani'),
(5, 'พระนครศรีอยุธยา', 'Phra Nakhon Si Ayutthaya'),
(6, 'อ่างทอง', 'Ang Thong'),
(7, 'ลพบุรี', 'Loburi'),
(8, 'สิงห์บุรี', 'Sing Buri'),
(9, 'ชัยนาท', 'Chai Nat'),
(10, 'สระบุรี', 'Saraburi'),
(11, 'ชลบุรี', 'Chon Buri'),
(12, 'ระยอง', 'Rayong'),
(13, 'จันทบุรี', 'Chanthaburi'),
(14, 'ตราด', 'Trat'),
(15, 'ฉะเชิงเทรา', 'Chachoengsao'),
(16, 'ปราจีนบุรี', 'Prachin Buri'),
(17, 'นครนายก', 'Nakhon Nayok'),
(18, 'สระแก้ว', 'Sa Kaeo'),
(19, 'นครราชสีมา', 'Nakhon Ratchasima'),
(20, 'บุรีรัมย์', 'Buri Ram'),
(21, 'สุรินทร์', 'Surin'),
(22, 'ศรีสะเกษ', 'Si Sa Ket'),
(23, 'อุบลราชธานี', 'Ubon Ratchathani'),
(24, 'ยโสธร', 'Yasothon'),
(25, 'ชัยภูมิ', 'Chaiyaphum'),
(26, 'อำนาจเจริญ', 'Amnat Charoen'),
(27, 'หนองบัวลำภู', 'Nong Bua Lam Phu'),
(28, 'ขอนแก่น', 'Khon Kaen'),
(29, 'อุดรธานี', 'Udon Thani'),
(30, 'เลย', 'Loei'),
(31, 'หนองคาย', 'Nong Khai'),
(32, 'มหาสารคาม', 'Maha Sarakham'),
(33, 'ร้อยเอ็ด', 'Roi Et'),
(34, 'กาฬสินธุ์', 'Kalasin'),
(35, 'สกลนคร', 'Sakon Nakhon'),
(36, 'นครพนม', 'Nakhon Phanom'),
(37, 'มุกดาหาร', 'Mukdahan'),
(38, 'เชียงใหม่', 'Chiang Mai'),
(39, 'ลำพูน', 'Lamphun'),
(40, 'ลำปาง', 'Lampang'),
(41, 'อุตรดิตถ์', 'Uttaradit'),
(42, 'แพร่', 'Phrae'),
(43, 'น่าน', 'Nan'),
(44, 'พะเยา', 'Phayao'),
(45, 'เชียงราย', 'Chiang Rai'),
(46, 'แม่ฮ่องสอน', 'Mae Hong Son'),
(47, 'นครสวรรค์', 'Nakhon Sawan'),
(48, 'อุทัยธานี', 'Uthai Thani'),
(49, 'กำแพงเพชร', 'Kamphaeng Phet'),
(50, 'ตาก', 'Tak'),
(51, 'สุโขทัย', 'Sukhothai'),
(52, 'พิษณุโลก', 'Phitsanulok'),
(53, 'พิจิตร', 'Phichit'),
(54, 'เพชรบูรณ์', 'Phetchabun'),
(55, 'ราชบุรี', 'Ratchaburi'),
(56, 'กาญจนบุรี', 'Kanchanaburi'),
(57, 'สุพรรณบุรี', 'Suphan Buri'),
(58, 'นครปฐม', 'Nakhon Pathom'),
(59, 'สมุทรสาคร', 'Samut Sakhon'),
(60, 'สมุทรสงคราม', 'Samut Songkhram'),
(61, 'เพชรบุรี', 'Phetchaburi'),
(62, 'ประจวบคีรีขันธ์', 'Prachuap Khiri Khan'),
(63, 'นครศรีธรรมราช', 'Nakhon Si Thammarat'),
(64, 'กระบี่', 'Krabi'),
(65, 'พังงา', 'Phangnga'),
(66, 'ภูเก็ต', 'Phuket'),
(67, 'สุราษฎร์ธานี', 'Surat Thani'),
(68, 'ระนอง', 'Ranong'),
(69, 'ชุมพร', 'Chumphon'),
(70, 'สงขลา', 'Songkhla'),
(71, 'สตูล', 'Satun'),
(72, 'ตรัง', 'Trang'),
(73, 'พัทลุง', 'Phatthalung'),
(74, 'ปัตตานี', 'Pattani'),
(75, 'ยะลา', 'Yala'),
(76, 'นราธิวาส', 'Narathiwat'),
(77, 'บึงกาฬ', 'buogkan');

-- --------------------------------------------------------

--
-- Table structure for table `wait_matching`
--

CREATE TABLE `wait_matching` (
  `wait_matching_id` int(11) NOT NULL,
  `matching_datehistory` date NOT NULL,
  `member_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `cat_breed`
--
ALTER TABLE `cat_breed`
  ADD PRIMARY KEY (`catbreed_id`);

--
-- Indexes for table `matching`
--
ALTER TABLE `matching`
  ADD PRIMARY KEY (`matching_id`),
  ADD KEY `wait_matching_id` (`wait_matching_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `wait_matching`
--
ALTER TABLE `wait_matching`
  ADD PRIMARY KEY (`wait_matching_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `cat_breed`
--
ALTER TABLE `cat_breed`
  MODIFY `catbreed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `wait_matching`
--
ALTER TABLE `wait_matching`
  MODIFY `wait_matching_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
