-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 02, 2024 at 07:52 AM
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
-- Database: `billie`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_panel1`
--

CREATE TABLE `aboutus_panel1` (
  `id` int(11) NOT NULL,
  `th` longtext NOT NULL,
  `en` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus_panel1`
--

INSERT INTO `aboutus_panel1` (`id`, `th`, `en`) VALUES
(1, '<p>ไทย...asfasfaf<br>asfasf</p><p>afasf</p><p>asf</p><p>asf</p><p>a</p><p>sf</p><p>afs</p><p>f</p><p><br></p>', '<p>Eng...asfasffgjfgjfgjgh---&gt;<br>ฟหดฟหดฟห</p>');

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_panel2`
--

CREATE TABLE `aboutus_panel2` (
  `id` int(11) NOT NULL,
  `th` longtext NOT NULL,
  `en` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus_panel2`
--

INSERT INTO `aboutus_panel2` (`id`, `th`, `en`) VALUES
(2, '<p>ไทย....<br>p2 ----&gt;</p>', '<p>Eng.....<br>p2 &lt;-----</p>');

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_panel3`
--

CREATE TABLE `aboutus_panel3` (
  `id` int(11) NOT NULL,
  `th` longtext NOT NULL,
  `en` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus_panel3`
--

INSERT INTO `aboutus_panel3` (`id`, `th`, `en`) VALUES
(1, '<p>ฟหดฟหดฟหดฟหด ฟหดฟหดฟหดฟหดฟหดฟ </p><p>ฟหดฟหดฟหด</p><p>ฟหดฟห</p><p>ฟหดฟห</p><p>ฟห</p><p>ดฟ</p><p><br></p><p>ฟหดฟดฟหดฟหดฟหด</p><p>ฟหดฟห</p>', '<p>asfasfasfasfasf</p><p>asfasf</p><p>a</p><p>sfffasfasf</p>');

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_structure_1`
--

CREATE TABLE `aboutus_structure_1` (
  `id` int(11) NOT NULL,
  `name_th` text NOT NULL,
  `name_en` text NOT NULL,
  `cpn_th` text NOT NULL,
  `cpn_en` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus_structure_1`
--

INSERT INTO `aboutus_structure_1` (`id`, `name_th`, `name_en`, `cpn_th`, `cpn_en`, `img`) VALUES
(8, '0-asfasf. asfafs asfasfasfasf asfasfasf ฟหดฟดฟด', '0-', '0-asfasf. asfafs asfasfasfasf asfasfasf', '0-', 'Zn1kSAXZJJCGMQo0LG2POwAAAAU.png'),
(9, '01', '-', '-', '-', 'Zn1k6LqV0K7dKjvFcm5ljAAAAAI.png'),
(10, 'asfasf', 'sasf', 'asf', 'asf', 'Zn1n-LqV0K7dKjvFcm5lkAAAAAI.png'),
(11, 'sfasf', 'asfasf', 'asfasf', 'asfasg', 'ZoGIlCsi5Utri3jKe7FPbQAAAAA.png'),
(12, 'asfasf', 'sfas', 'asfa', 'as', 'ZoGIp_AQ-UIdzkFNyMl9qQAAAAc.png'),
(13, 'xxxxx->ssasf///', 'asfxc....', 'xxxxx->...', 'asf..', 'ZoGK46Oj8mD65DUOcw9p3QAAAAQ.png');

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_structure_2`
--

CREATE TABLE `aboutus_structure_2` (
  `id` int(11) NOT NULL,
  `name_th` text NOT NULL,
  `name_en` text NOT NULL,
  `cpn_th` text NOT NULL,
  `cpn_en` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus_structure_2`
--

INSERT INTO `aboutus_structure_2` (`id`, `name_th`, `name_en`, `cpn_th`, `cpn_en`, `img`) VALUES
(6, 'หหฟหดฟหดฟดห', 'ป', 'ดด', 'ดด', 'ZoLIVR0aH5oxyNAb5HPGlQAAAAY.png');

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_structure_3`
--

CREATE TABLE `aboutus_structure_3` (
  `id` int(11) NOT NULL,
  `name_th` text NOT NULL,
  `name_en` text NOT NULL,
  `cpn_th` text NOT NULL,
  `cpn_en` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus_structure_3`
--

INSERT INTO `aboutus_structure_3` (`id`, `name_th`, `name_en`, `cpn_th`, `cpn_en`, `img`) VALUES
(6, 'ฟหดฟหดหเ', 'asfaf', 'เัะนันรำพำๆไพกหดฟหเ', 'asf', 'ZoLId-UyjnXlLNcwbZyX8wAAAAM.png');

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_structure_4`
--

CREATE TABLE `aboutus_structure_4` (
  `id` int(11) NOT NULL,
  `name_th` text NOT NULL,
  `name_en` text NOT NULL,
  `cpn_th` text NOT NULL,
  `cpn_en` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus_structure_4`
--

INSERT INTO `aboutus_structure_4` (`id`, `name_th`, `name_en`, `cpn_th`, `cpn_en`, `img`) VALUES
(3, 'ฟหดฟหดฟหด----', 'asfasfa', 'ฟหดฟหดฟหด', 'asfasfa', 'ZoFNxC7gox5ZGGJpi8KSswAAAAM.png'),
(4, 'asfasfasfasfasfasasgasfa--', 'asfasfasf', 'asfasfasfasfasfasasgasfa', 'asfasfasf', 'ZoLENOBl7AYMGqGNOS0lgAAAAAU.png'),
(5, '----x3333312ฟหดฟหดฟหดฟหดฟดห', 'ฟหดฟหด', 'ฟหด', 'asfsdhdf', 'ZoLGUSsi5Utri3jKe7FPfQAAAAA.png');

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_structure_5`
--

CREATE TABLE `aboutus_structure_5` (
  `id` int(11) NOT NULL,
  `name_th` text NOT NULL,
  `name_en` text NOT NULL,
  `cpn_th` text NOT NULL,
  `cpn_en` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus_structure_5`
--

INSERT INTO `aboutus_structure_5` (`id`, `name_th`, `name_en`, `cpn_th`, `cpn_en`, `img`) VALUES
(3, 'ฟหเกหเาา่่', 'asgsgsg', 'หฟเหเ', 'ghuisdg', 'ZoFOUPAQ-UIdzkFNyMl9XgAAAAc.png'),
(4, 'sssss', 'sss', 'ss', 'sssss', 'ZoLFyfPluLTw9Fhmyw-gPAAAAAk.png');

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_structure_6`
--

CREATE TABLE `aboutus_structure_6` (
  `id` int(11) NOT NULL,
  `name_th` text NOT NULL,
  `name_en` text NOT NULL,
  `cpn_th` text NOT NULL,
  `cpn_en` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus_structure_6`
--

INSERT INTO `aboutus_structure_6` (`id`, `name_th`, `name_en`, `cpn_th`, `cpn_en`, `img`) VALUES
(4, 'หกเด่ด่่00------', 'asf', 'หกเด่ด่่', 'asf', 'ZoFPF-ZIXxYJtfydAMmj2AAAAAI.png'),
(5, 'asfasf', 'asfasf', 'asfasf', 'asfasf', 'ZoLG9MRdvexCdI0prTjmmgAAAAE.png');

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_structure_7`
--

CREATE TABLE `aboutus_structure_7` (
  `id` int(11) NOT NULL,
  `name_th` text NOT NULL,
  `name_en` text NOT NULL,
  `cpn_th` text NOT NULL,
  `cpn_en` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus_structure_7`
--

INSERT INTO `aboutus_structure_7` (`id`, `name_th`, `name_en`, `cpn_th`, `cpn_en`, `img`) VALUES
(8, 'ฟหดฟหเเเ', 'asfasf', 'ฟหดฟหเฟหเฟเ', 'asfasf', ''),
(9, 'asfccc______', '__', 'ดไฟด', 'ฟหด', '');

-- --------------------------------------------------------

--
-- Table structure for table `activity_picture`
--

CREATE TABLE `activity_picture` (
  `id` int(11) NOT NULL,
  `_img` text NOT NULL,
  `_topic_th` text NOT NULL,
  `_topic_eng` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity_picture`
--

INSERT INTO `activity_picture` (`id`, `_img`, `_topic_th`, `_topic_eng`) VALUES
(7, 'Zn_Fa3G1TQkq4ES3MngjUAAAAAE.png', 'asfasf', 'asf'),
(8, 'Zn_FfYwp6WLD8BNBSwvQrAAAAAY.png', 'sasf', 'asf');

-- --------------------------------------------------------

--
-- Table structure for table `activity_picture_each_id`
--

CREATE TABLE `activity_picture_each_id` (
  `id` int(11) NOT NULL,
  `id_main` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity_picture_each_id`
--

INSERT INTO `activity_picture_each_id` (`id`, `id_main`, `img`) VALUES
(27, 7, 'Zn_FcXG1TQkq4ES3MngjVAAAAAE-activity-0.png'),
(28, 7, 'Zn_FcXG1TQkq4ES3MngjVAAAAAE-activity-1.png'),
(29, 7, 'Zn_FcXG1TQkq4ES3MngjVAAAAAE-activity-2.png'),
(30, 7, 'Zn_FcXG1TQkq4ES3MngjVAAAAAE-activity-3.png'),
(31, 7, 'Zn_FcXG1TQkq4ES3MngjVAAAAAE-activity-4.png'),
(32, 7, 'Zn_FcXG1TQkq4ES3MngjVAAAAAE-activity-5.png'),
(33, 7, 'Zn_FcXG1TQkq4ES3MngjVAAAAAE-activity-6.png'),
(34, 7, 'Zn_FcXG1TQkq4ES3MngjVAAAAAE-activity-7.png'),
(35, 8, 'Zn_FhK2m4Ma12ZTq4ReAtAAAAAM-activity-0.png'),
(36, 8, 'Zn_FhK2m4Ma12ZTq4ReAtAAAAAM-activity-1.png'),
(37, 8, 'Zn_FhK2m4Ma12ZTq4ReAtAAAAAM-activity-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `benefits_good_product`
--

CREATE TABLE `benefits_good_product` (
  `id` int(11) NOT NULL,
  `_cover` text NOT NULL,
  `_name` text NOT NULL,
  `_img` text NOT NULL,
  `_img_logo` text NOT NULL,
  `_desc_1` longtext NOT NULL,
  `_desc_2` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `benefits_good_product`
--

INSERT INTO `benefits_good_product` (`id`, `_cover`, `_name`, `_img`, `_img_logo`, `_desc_1`, `_desc_2`) VALUES
(32, 'Zn1p1nG1TQkq4ES3MngiwgAAAAE.png', 'ร้านผ้า -', 'Zn-rAXG1TQkq4ES3MngjBAAAAAE.png', 'ZoFTA6Oj8mD65DUOcw9ptgAAAAQ.png', '<p>ฟหดฟหดฟหดฟหด<br>ฟหดฟหดฟหด</p><p>ฟหดฟหดฟด</p>', '<p>asfsfasfฟหดฟหด</p><p>ฟหด</p><p>ฟ</p><p>หดฟ</p>');

-- --------------------------------------------------------

--
-- Table structure for table `benefits_good_product_slide`
--

CREATE TABLE `benefits_good_product_slide` (
  `id` int(11) NOT NULL,
  `id_main` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `benefits_good_product_slide`
--

INSERT INTO `benefits_good_product_slide` (`id`, `id_main`, `img`) VALUES
(95, '32', 'ZoLYe-XKD0YmzMRKtbND1gAAAAg-slide-id-32.png'),
(96, '32', 'ZoLYgOXKD0YmzMRKtbND2QAAAAg-slide-id-32.png');

-- --------------------------------------------------------

--
-- Table structure for table `benefit_panel_1`
--

CREATE TABLE `benefit_panel_1` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `th` longtext NOT NULL,
  `en` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `benefit_panel_1`
--

INSERT INTO `benefit_panel_1` (`id`, `img`, `th`, `en`) VALUES
(3, 'Zn-oqG-wlE2f_iEo2qf5NAAAAAk.png', '<p><font color=\"#666666\">asfasfasf<br>asf</font></p><p><font color=\"#666666\"><br></font></p><p><font color=\"#666666\">asf</font></p><p><font color=\"#666666\">as</font></p><p><font color=\"#666666\">as</font></p><p><font color=\"#666666\">fa</font></p><p><font color=\"#666666\">sf</font></p><p><font color=\"#666666\">asf</font></p><p><font color=\"#666666\">asf</font></p><p><font color=\"#666666\"><br></font></p><p><font color=\"#666666\">ฟหดฟดฟ</font></p><p><font color=\"#666666\">ฟหด</font></p><p><font color=\"#666666\">ฟ</font></p><p><font color=\"#666666\">ด</font></p><p><font color=\"#666666\">ฟ</font></p><p><font color=\"#666666\"><br></font></p>', '<p>- eng</p><p>-sasf<br>asfasf</p><p>as</p><p><br></p><p>asf</p><p>sf</p><p><br></p><p>asf</p><p>a</p><p>sf</p><p>as</p><p>fa</p><p>s</p><p>f</p>');

-- --------------------------------------------------------

--
-- Table structure for table `benefit_panel_2`
--

CREATE TABLE `benefit_panel_2` (
  `id` int(11) NOT NULL,
  `name_1_th` text NOT NULL,
  `name_1_en` text NOT NULL,
  `desc_1_th` longtext NOT NULL,
  `desc_1_en` longtext NOT NULL,
  `name_2_th` text NOT NULL,
  `name_2_en` text NOT NULL,
  `desc_2_th` longtext NOT NULL,
  `desc_2_en` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `benefit_panel_2`
--

INSERT INTO `benefit_panel_2` (`id`, `name_1_th`, `name_1_en`, `desc_1_th`, `desc_1_en`, `name_2_th`, `name_2_en`, `desc_2_th`, `desc_2_en`) VALUES
(4, 'บุคคลธรรมดา - ', 'Individual', '• เจ้าของธุรกิจคนเดียว\r\n• ห้างหุ้นส่วนสามัญ (ไม่จดทะเบียนเป็นนิติบุคคล)\r\n• มีสถานประกอบการ\r\n• จดทะเบียนพาณิชย์\r\n• วิสาหกิจชุมชน\r\nppp', '• Single business owner\r\n• General partnership (not registered as a juristic person) \r\n• has a business establishment \r\n• registered commercial • community enterprise', 'นิติบุคคล -sf', 'Legal entity', '2.3\r\nasfasfasf\r\nasfasf', '- 2.4.1......\r\n- 2.4.2......');

-- --------------------------------------------------------

--
-- Table structure for table `benefit_panel_3`
--

CREATE TABLE `benefit_panel_3` (
  `id` int(11) NOT NULL,
  `name_th_1` longtext NOT NULL,
  `desc_th_1` longtext NOT NULL,
  `name_th_2` longtext NOT NULL,
  `desc_th_2` longtext NOT NULL,
  `name_th_3` longtext NOT NULL,
  `desc_th_3` longtext NOT NULL,
  `name_th_4` longtext NOT NULL,
  `desc_th_4` longtext NOT NULL,
  `name_th_5` longtext NOT NULL,
  `desc_th_5` longtext NOT NULL,
  `name_th_6` longtext NOT NULL,
  `desc_th_6` longtext NOT NULL,
  `name_en_1` longtext NOT NULL,
  `desc_en_1` longtext NOT NULL,
  `name_en_2` longtext NOT NULL,
  `desc_en_2` longtext NOT NULL,
  `name_en_3` longtext NOT NULL,
  `desc_en_3` longtext NOT NULL,
  `name_en_4` longtext NOT NULL,
  `desc_en_4` longtext NOT NULL,
  `name_en_5` longtext NOT NULL,
  `desc_en_5` longtext NOT NULL,
  `name_en_6` longtext NOT NULL,
  `desc_en_6` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `benefit_panel_3`
--

INSERT INTO `benefit_panel_3` (`id`, `name_th_1`, `desc_th_1`, `name_th_2`, `desc_th_2`, `name_th_3`, `desc_th_3`, `name_th_4`, `desc_th_4`, `name_th_5`, `desc_th_5`, `name_th_6`, `desc_th_6`, `name_en_1`, `desc_en_1`, `name_en_2`, `desc_en_2`, `name_en_3`, `desc_en_3`, `name_en_4`, `desc_en_4`, `name_en_5`, `desc_en_5`, `name_en_6`, `desc_en_6`) VALUES
(2, 'สนับสนุนการประกอบธุรกิจ -asfasfas', '• รับข้อมูลและคำปรึกษาทางธุรกิจ asfasf\r\n• ปกป้องผลประโยชน์ทางธุรกิจ -asfasf\r\n• ประชาสัมพันธ์ธุรกิจasfasf', 'การสร้างโอกาสทางธุรกิจ', '• ร่วมการประชุมและปาฐกถา\r\n• การพบปะนักธุรกิจหลากหลายทั่วประเทศ\r\n• รับข้อมูลทางการค้าและแนวโน้มธุรกิจasf', 'การพัฒนาศักยภาพ', '• การฝึกอบรม\r\n• เข้าถึงข้อมูล การวิจัย และเครื่องมือต่างๆ\r\n• การรับคำปรึกษาจากผู้เชี่ยวชาญasf', 'การเข้าถึงตลาด', '• การจับคู่ธุรกิจ\r\n• ร่วมงานแสดงสินค้ากับเครือข่ายของหอการค้า\r\n• รับคำปรึกษาเกี่ยวกับการส่งasfasfasf', 'บริการพิเศษสำหรับสมาชิก', '• เข้าร่วมกิจกรรมของหอการค้าจังหวัด และหอการค้าไทย\r\n• รับส่วนลดค่าธรรมเนียมต่างๆ\r\n• อำนวยความสะดวกในการประสานงานกับหน่วยงานภาครัฐ สถาบันการศึกษาและอื่นๆasfasfasf', 'สิทธิประโยชน์อื่นๆ', '• เข้าถึงเครือข่ายนักธุรกิจทั่วประเทศ\r\n• รับส่วนลดจากพันธมิตรของหอการค้า\r\n• บริการอื่นๆasfasfasfasfasf', 'a -', 's - ', 'd', 'f', 'g', 'h', 'j', 'k', 'l', ';', '\'', 'z..');

-- --------------------------------------------------------

--
-- Table structure for table `benefit_panel_4`
--

CREATE TABLE `benefit_panel_4` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `benefit_panel_4`
--

INSERT INTO `benefit_panel_4` (`id`, `img`) VALUES
(8, '20240627202836-img.png'),
(9, '20240627202840-img.png'),
(11, '20240627202851-img.png'),
(12, '20240701223658-img.png'),
(13, '20240701223702-img.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_address`
--

CREATE TABLE `contact_address` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL,
  `address_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_address`
--

INSERT INTO `contact_address` (`id`, `address`, `address_en`) VALUES
(2, 'ไทย', 'En');

-- --------------------------------------------------------

--
-- Table structure for table `contact_email`
--

CREATE TABLE `contact_email` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_email`
--

INSERT INTO `contact_email` (`id`, `email`) VALUES
(1, 'email@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_email_for_customer`
--

CREATE TABLE `contact_email_for_customer` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_email_for_customer`
--

INSERT INTO `contact_email_for_customer` (`id`, `email`) VALUES
(1, 'jirapat.billie@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_facebook`
--

CREATE TABLE `contact_facebook` (
  `id` int(11) NOT NULL,
  `facebook_name` text NOT NULL,
  `facebook_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_facebook`
--

INSERT INTO `contact_facebook` (`id`, `facebook_name`, `facebook_link`) VALUES
(1, 'f_named', 'F_link');

-- --------------------------------------------------------

--
-- Table structure for table `contact_line`
--

CREATE TABLE `contact_line` (
  `id` int(11) NOT NULL,
  `line_name` text NOT NULL,
  `line_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_line`
--

INSERT INTO `contact_line` (`id`, `line_name`, `line_link`) VALUES
(1, 'ID = line', 'line-link');

-- --------------------------------------------------------

--
-- Table structure for table `contact_map`
--

CREATE TABLE `contact_map` (
  `id` int(11) NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_map`
--

INSERT INTO `contact_map` (`id`, `map`) VALUES
(1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4592.730394418621!2d100.95539179720207!3d14.54139065341585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311de83580a62263%3A0x37f59c1693930ab8!2z4Liq4Lin4LiZ4Lij4Li04Lih4LmA4LiC4Liy!5e0!3m2!1sth!2sth!4v1716499692745!5m2!1sth!2sth\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messenger`
--

CREATE TABLE `contact_messenger` (
  `id` int(11) NOT NULL,
  `messenger_name` text NOT NULL,
  `messenger_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messenger`
--

INSERT INTO `contact_messenger` (`id`, `messenger_name`, `messenger_link`) VALUES
(1, 'm_name', 'm_linkdd');

-- --------------------------------------------------------

--
-- Table structure for table `contact_phone`
--

CREATE TABLE `contact_phone` (
  `id` int(11) NOT NULL,
  `phone_1` text NOT NULL,
  `phone_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_phone`
--

INSERT INTO `contact_phone` (`id`, `phone_1`, `phone_2`) VALUES
(1, '1. 09312329252', '2. 09312329252');

-- --------------------------------------------------------

--
-- Table structure for table `contact_qr`
--

CREATE TABLE `contact_qr` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_qr`
--

INSERT INTO `contact_qr` (`id`, `img`) VALUES
(6, '20240625210439-qr.png');

-- --------------------------------------------------------

--
-- Table structure for table `form_registration`
--

CREATE TABLE `form_registration` (
  `id` int(11) NOT NULL,
  `type` text NOT NULL DEFAULT '1' COMMENT '1 , 2',
  `title_name` text DEFAULT NULL,
  `full_name` text DEFAULT NULL,
  `birthday` text DEFAULT NULL,
  `id_card` text DEFAULT NULL,
  `id_card_file` text DEFAULT NULL COMMENT 'file',
  `number_house_file` text DEFAULT NULL COMMENT 'file',
  `name_establishment` text NOT NULL COMMENT 'required',
  `number_legal_entity` text DEFAULT NULL,
  `establishment_date` text DEFAULT NULL,
  `commercial_registration_file` text DEFAULT NULL COMMENT 'file',
  `office_phone` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `date_pay` text DEFAULT NULL,
  `time_pay` text DEFAULT NULL,
  `total_pay` text DEFAULT NULL,
  `proof_of_payment_file` text DEFAULT NULL COMMENT 'file',
  `logo` text DEFAULT NULL COMMENT 'file',
  `slide_banner` longtext DEFAULT NULL COMMENT 'file',
  `main_img` text DEFAULT NULL COMMENT 'file',
  `desc_1` longtext DEFAULT NULL,
  `desc_2` longtext DEFAULT NULL,
  `approve_status` text DEFAULT '0',
  `display_home` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_registration`
--

INSERT INTO `form_registration` (`id`, `type`, `title_name`, `full_name`, `birthday`, `id_card`, `id_card_file`, `number_house_file`, `name_establishment`, `number_legal_entity`, `establishment_date`, `commercial_registration_file`, `office_phone`, `phone`, `email`, `website`, `date_pay`, `time_pay`, `total_pay`, `proof_of_payment_file`, `logo`, `slide_banner`, `main_img`, `desc_1`, `desc_2`, `approve_status`, `display_home`) VALUES
(50, '1', '', '', '', '', NULL, NULL, 'sssss', 'NULL', 'NULL', 'ZoN8SOBl7AYMGqGNOS0mSQAAAAU-commercial_registration_file.', '', '', '', '', '', '', '', NULL, 'ZoN8SOBl7AYMGqGNOS0mSQAAAAU-logo.png', NULL, NULL, '', '', '1', 'show'),
(51, '1', 'Mr.', 'asf', '2024-07-05', '1234567890123', 'ZoOHOXox7pswMaeL-Vf1QwAAAAI-Screenshot 2567-06-11 at 11.22.23.png', 'ZoOHOXox7pswMaeL-Vf1QwAAAAI-Screenshot 2567-06-22 at 20.32.01.png', 's', NULL, NULL, NULL, 's', 's', 's', 's', '2024-07-04', '17:50', 'ss', 'ZoOHOXox7pswMaeL-Vf1QwAAAAI-Screenshot 2567-06-23 at 20.33.25.png', NULL, NULL, NULL, NULL, NULL, '0', NULL),
(52, '2', 'Miss', 'asf', '2024-07-31', 'asf', 'ZoON3KVuH1mVc0mvw2JCywAAAAg-Screenshot 2567-06-22 at 20.14.57.png', 'ZoON3KVuH1mVc0mvw2JCywAAAAg-Screenshot 2567-06-22 at 20.16.39.png', 'asf', 'asf', '2024-07-30', 'ZoON3KVuH1mVc0mvw2JCywAAAAg-Screenshot 2567-06-22 at 20.08.39.png', 'asf', 'saf', 'fhfj', 'fgj', '2024-08-01', '12:22', 'asf', 'ZoON3KVuH1mVc0mvw2JCywAAAAg-Screenshot 2567-06-22 at 20.34.08.png', NULL, NULL, NULL, NULL, NULL, '0', NULL),
(53, '1', 'Mrs.', 'sdgsd', '2024-07-23', '1234567890123', 'ZoOOAB0YNRtjuDnVkCFzmQAAAAQ-Screenshot 2567-06-22 at 20.14.57.png', 'ZoOOAB0YNRtjuDnVkCFzmQAAAAQ-Screenshot 2567-06-22 at 20.14.57.png', 'fgjfgj', NULL, NULL, NULL, 'fgj', 'fg', 'j', 'j', '2024-07-12', '12:21', 'sdg', 'ZoOOAB0YNRtjuDnVkCFzmQAAAAQ-Screenshot 2567-06-22 at 20.40.50.png', NULL, NULL, NULL, NULL, NULL, '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_aboutus_en`
--

CREATE TABLE `home_aboutus_en` (
  `id` int(11) NOT NULL,
  `detail` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_aboutus_en`
--

INSERT INTO `home_aboutus_en` (`id`, `detail`) VALUES
(1, 'English .....<br>asfasf');

-- --------------------------------------------------------

--
-- Table structure for table `home_aboutus_img`
--

CREATE TABLE `home_aboutus_img` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_aboutus_img`
--

INSERT INTO `home_aboutus_img` (`id`, `img`) VALUES
(1, '20240630174936-home_aboutus.png');

-- --------------------------------------------------------

--
-- Table structure for table `home_aboutus_th`
--

CREATE TABLE `home_aboutus_th` (
  `id` int(11) NOT NULL,
  `detail` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_aboutus_th`
--

INSERT INTO `home_aboutus_th` (`id`, `detail`) VALUES
(1, 'ฟหดฟหดฟหดฟหดด ฟหดฟหดฟหดฟดหฟหฟหดฟหดฟหดฟดหดฟหดฟหดฟหดฟหดฟดฟหดฟหดฟดฟหด<br>ฟดหฟดฟหดฟหดฟหดฟด<br><br>ฟหดฟหดฟหดฟหดฟหเฟฟหเ');

-- --------------------------------------------------------

--
-- Table structure for table `home_banner_en`
--

CREATE TABLE `home_banner_en` (
  `id` int(11) NOT NULL,
  `pc` text NOT NULL,
  `mobile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_banner_en`
--

INSERT INTO `home_banner_en` (`id`, `pc`, `mobile`) VALUES
(8, '20240702105644-pc.png', '20240702105644-mobile.png');

-- --------------------------------------------------------

--
-- Table structure for table `home_banner_th`
--

CREATE TABLE `home_banner_th` (
  `id` int(11) NOT NULL,
  `pc` text NOT NULL,
  `mobile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_banner_th`
--

INSERT INTO `home_banner_th` (`id`, `pc`, `mobile`) VALUES
(12, '20240630174908-pc.png', '20240630174908-mobile.png');

-- --------------------------------------------------------

--
-- Table structure for table `home_benefit_en`
--

CREATE TABLE `home_benefit_en` (
  `id` int(11) NOT NULL,
  `topic` text NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_benefit_en`
--

INSERT INTO `home_benefit_en` (`id`, `topic`, `desc`) VALUES
(8, 'Eng 1', '- English\r\n'),
(9, 'Eng 2', '- Eng 1\r\n- Eng 2\r\n- 3');

-- --------------------------------------------------------

--
-- Table structure for table `home_benefit_img`
--

CREATE TABLE `home_benefit_img` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_benefit_img`
--

INSERT INTO `home_benefit_img` (`id`, `img`) VALUES
(2, '20240625190328-home_benefits.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `home_benefit_th`
--

CREATE TABLE `home_benefit_th` (
  `id` int(11) NOT NULL,
  `topic` text NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_benefit_th`
--

INSERT INTO `home_benefit_th` (`id`, `topic`, `desc`) VALUES
(15, 'ทดสอบ ภาษาไทย 1', '- แก้ไข\r\n- แล้ว'),
(16, ' ทดสอบ ภาษาไทย 2', '- ภาษาไทย\r\n- ภาษาไทย\r\n- ภาษาไทย\r\n- ภาษาไทย');

-- --------------------------------------------------------

--
-- Table structure for table `home_bestitems`
--

CREATE TABLE `home_bestitems` (
  `id` int(11) NOT NULL,
  `img_1` text NOT NULL,
  `img_2` text NOT NULL,
  `img_3` text NOT NULL,
  `img_4` text NOT NULL,
  `img_5` text NOT NULL,
  `img_6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_bestitems`
--

INSERT INTO `home_bestitems` (`id`, `img_1`, `img_2`, `img_3`, `img_4`, `img_5`, `img_6`) VALUES
(5, '20240626103215-home_bestitems-1.png', '20240626103228-home_bestitems-2.png', '20240626103219-home_bestitems-3.png', '20240626103223-home_bestitems-4.png', '20240625200726-home_bestitems-5.png', '20240625200704-home_bestitems-6.png');

-- --------------------------------------------------------

--
-- Table structure for table `home_other_link`
--

CREATE TABLE `home_other_link` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_other_link`
--

INSERT INTO `home_other_link` (`id`, `link`, `img`) VALUES
(9, 'https://link.link.comm1', 'ZnusAA1ehs2_U26TOqpkYwAAAAI.png'),
(10, 'https://link.link.comm2', 'ZnusDMQaN5JgoAqUQ7gqHgAAAAc.png'),
(11, 'https://link.link.comm3', 'ZnusFQwhp51PJFIci85PMgAAAAk.png'),
(15, 'https://link.link.comm', 'ZnusLOkWknaBu05bzznyYwAAAAY.png'),
(16, 'https://link.link.comm', 'ZnusNrqG450UrYjSJGcfSwAAAAE.png'),
(17, 'https://link.link.comm', 'ZnusOkLAAsvkeMkyqzyclAAAAAA.png'),
(18, 'https://link.link.comm---->', 'Zn1jbv5jnmtDPukuWog4PAAAAAg.png');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `_img` longtext NOT NULL,
  `_nam_th` longtext NOT NULL,
  `_nam_en` longtext NOT NULL,
  `_desc_th` longtext NOT NULL,
  `_desc_en` longtext NOT NULL,
  `_desc_2_th` longtext NOT NULL,
  `_desc_2_en` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `_img`, `_nam_th`, `_nam_en`, `_desc_th`, `_desc_en`, `_desc_2_th`, `_desc_2_en`) VALUES
(14, 'Zn--dD_2HqMVUeHtQD1ChwAAAAc.png', 'ข่าว 1', 'asf', 'ฟเกกด้ดเ่ดเ่', 'asfasgdfjk gsd', '', ''),
(16, 'ZoE6dUyxYhm-xs8AwBIkngAAAAg.png', 'ใหม่asfasfasf -----', 'dfhfgjghklfj', 'ฟฟหด ------<', 'fgjfgjfgjfgjfgj\r\nfgjfgjfg\r\nj\r\nfgj\r\nf\r\ngjf\r\njg\r\nfj', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `news_pic`
--

CREATE TABLE `news_pic` (
  `id` int(11) NOT NULL,
  `id_main` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_pic`
--

INSERT INTO `news_pic` (`id`, `id_main`, `img`) VALUES
(48, '16', 'ZoFTHB0aH5oxyNAb5HPGXQAAAAY-img-2.png'),
(58, '16', 'ZoOQBPPluLTw9Fhmyw-hGwAAAAk-img-0.png'),
(59, '16', 'ZoOQBPPluLTw9Fhmyw-hGwAAAAk-img-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `role`) VALUES
(1, 'admin', '1234', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus_panel1`
--
ALTER TABLE `aboutus_panel1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutus_panel2`
--
ALTER TABLE `aboutus_panel2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutus_panel3`
--
ALTER TABLE `aboutus_panel3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutus_structure_1`
--
ALTER TABLE `aboutus_structure_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutus_structure_2`
--
ALTER TABLE `aboutus_structure_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutus_structure_3`
--
ALTER TABLE `aboutus_structure_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutus_structure_4`
--
ALTER TABLE `aboutus_structure_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutus_structure_5`
--
ALTER TABLE `aboutus_structure_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutus_structure_6`
--
ALTER TABLE `aboutus_structure_6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutus_structure_7`
--
ALTER TABLE `aboutus_structure_7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_picture`
--
ALTER TABLE `activity_picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_picture_each_id`
--
ALTER TABLE `activity_picture_each_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benefits_good_product`
--
ALTER TABLE `benefits_good_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benefits_good_product_slide`
--
ALTER TABLE `benefits_good_product_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benefit_panel_1`
--
ALTER TABLE `benefit_panel_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benefit_panel_2`
--
ALTER TABLE `benefit_panel_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benefit_panel_3`
--
ALTER TABLE `benefit_panel_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benefit_panel_4`
--
ALTER TABLE `benefit_panel_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_address`
--
ALTER TABLE `contact_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_email`
--
ALTER TABLE `contact_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_email_for_customer`
--
ALTER TABLE `contact_email_for_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_facebook`
--
ALTER TABLE `contact_facebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_line`
--
ALTER TABLE `contact_line`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_map`
--
ALTER TABLE `contact_map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messenger`
--
ALTER TABLE `contact_messenger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_phone`
--
ALTER TABLE `contact_phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_qr`
--
ALTER TABLE `contact_qr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_registration`
--
ALTER TABLE `form_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_aboutus_en`
--
ALTER TABLE `home_aboutus_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_aboutus_img`
--
ALTER TABLE `home_aboutus_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_aboutus_th`
--
ALTER TABLE `home_aboutus_th`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_banner_en`
--
ALTER TABLE `home_banner_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_banner_th`
--
ALTER TABLE `home_banner_th`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_benefit_en`
--
ALTER TABLE `home_benefit_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_benefit_img`
--
ALTER TABLE `home_benefit_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_benefit_th`
--
ALTER TABLE `home_benefit_th`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_bestitems`
--
ALTER TABLE `home_bestitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_other_link`
--
ALTER TABLE `home_other_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_pic`
--
ALTER TABLE `news_pic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus_panel1`
--
ALTER TABLE `aboutus_panel1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutus_panel2`
--
ALTER TABLE `aboutus_panel2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aboutus_panel3`
--
ALTER TABLE `aboutus_panel3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutus_structure_1`
--
ALTER TABLE `aboutus_structure_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `aboutus_structure_2`
--
ALTER TABLE `aboutus_structure_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `aboutus_structure_3`
--
ALTER TABLE `aboutus_structure_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `aboutus_structure_4`
--
ALTER TABLE `aboutus_structure_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `aboutus_structure_5`
--
ALTER TABLE `aboutus_structure_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aboutus_structure_6`
--
ALTER TABLE `aboutus_structure_6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `aboutus_structure_7`
--
ALTER TABLE `aboutus_structure_7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `activity_picture`
--
ALTER TABLE `activity_picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `activity_picture_each_id`
--
ALTER TABLE `activity_picture_each_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `benefits_good_product`
--
ALTER TABLE `benefits_good_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `benefits_good_product_slide`
--
ALTER TABLE `benefits_good_product_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `benefit_panel_1`
--
ALTER TABLE `benefit_panel_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `benefit_panel_2`
--
ALTER TABLE `benefit_panel_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `benefit_panel_3`
--
ALTER TABLE `benefit_panel_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `benefit_panel_4`
--
ALTER TABLE `benefit_panel_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_address`
--
ALTER TABLE `contact_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_email`
--
ALTER TABLE `contact_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_email_for_customer`
--
ALTER TABLE `contact_email_for_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_facebook`
--
ALTER TABLE `contact_facebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_line`
--
ALTER TABLE `contact_line`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_map`
--
ALTER TABLE `contact_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_messenger`
--
ALTER TABLE `contact_messenger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_phone`
--
ALTER TABLE `contact_phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_qr`
--
ALTER TABLE `contact_qr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `form_registration`
--
ALTER TABLE `form_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `home_aboutus_en`
--
ALTER TABLE `home_aboutus_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_aboutus_img`
--
ALTER TABLE `home_aboutus_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_aboutus_th`
--
ALTER TABLE `home_aboutus_th`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_banner_en`
--
ALTER TABLE `home_banner_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `home_banner_th`
--
ALTER TABLE `home_banner_th`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `home_benefit_en`
--
ALTER TABLE `home_benefit_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `home_benefit_img`
--
ALTER TABLE `home_benefit_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_benefit_th`
--
ALTER TABLE `home_benefit_th`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `home_bestitems`
--
ALTER TABLE `home_bestitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_other_link`
--
ALTER TABLE `home_other_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `news_pic`
--
ALTER TABLE `news_pic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
