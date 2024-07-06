-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 06, 2024 at 09:43 AM
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
-- Database: `thanikpr_saraburichamber`
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
(1, '<p><span style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\">หอการค้าจังหวัดสระบุรี เป็นศูนย์รวมผู้ประกอบการวิสาหกิจ นักธุรกิจ และผู้มีส่วนได้ส่วนเสียในการค้า พาณิชยกรรม อุตสาหกรรม และเกษตรกรรม ในจังหวัดสระบุรี เชื่อมโยงความร่วมมือเครือข่าย ทั้งภาครัฐ เอกชน และประชาชน ยกระดับขีดความสามารถในการแข่งขันของSME พัฒนาเพื่อการเติบไตอย่างยั่งยืน สร้างอนาคตที่เต็มไปด้วยโอกาส เพื่อส่งต่อให้คนรุ่นใหม่โดยมีประเด็นหลักที่มุ่งเน้น คือ</span><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\"><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\"><span style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\">• การเพิ่มขีดความสามารถทางเศรษฐกิจ หอการค้าจังหวัดสระบุรีทำงานเพื่อกระตุ้นการค้า ดึงดูดการลงทุนทั้งในและต่างประเทศ และรักษาสภาพแวดล้อมที่เจริญรุ่งเรืองสำหรับธุรกิจทุกขนาด</span><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\"><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\"><span style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\">• การส่งเสริมการท่องเที่ยว ด้วยความเข้าใจในพลังของการท่องเที่ยว หอการค้าจังหวัดสระบุรีจึงส่งเสริมสถานที่ท่องเที่ยวของสระบุรีอย่างจริงจัง โดยมีเป้าหมายเพื่อส่งเสริมเศรษฐกิจในท้องถิ่นและนำเสนอข้อเสนออันเป็นเอกลักษณ์ของจังหวัด</span><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\"><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\"><span style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\">• การพัฒนาทรัพยากรมนุษย์: หอการค้าจังหวัดสระบุรีส่งเสริมผู้ประกอบการและแรงงานในจังหวัดสระบุรีโดยจัดให้มีการฝึกอบรมและส่งเสริมความคิดริเริ่มในการแบ่งปันความรู้ ประชาสัมพันธ์งานอบรมสัมนาที่เป็นประโยชน์ต่อการพัฒนาศักยภาพของผู้ประกอบการ เพื่อให้มั่นใจว่าธุรกิจจะสามารถเข้าถึงทักษะและความสามารถในการปรับตัวกับโลกที่เปลี่ยนแปลง</span><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\"><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\"><span style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\">• นวัตกรรมทางเทคโนโลยี: หอการค้าจังหวัดสระบุรีเปิดรับความก้าวหน้า โดยสนับสนุนการนำเทคโนโลยีสมัยใหม่มาใช้ในอุตสาหกรรมต่างๆ เพื่อปรับปรุงประสิทธิภาพ เพิ่มประสิทธิภาพกระบวนการ และขับเคลื่อนความสามารถในการแข่งขันในตลาด</span><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\"><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\"><span style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\">• ธรรมาภิบาลและความยุติธรรม: หอการค้าจังหวัดสระบุรีสนับสนุนแนวทางการจัดการที่ดี ความโปร่งใส กรอบกฎหมายที่แข็งแกร่ง และระบบที่ยุติธรรม เพื่อสร้างสภาพแวดล้อมทางธุรกิจที่สร้างจากความไว้วางใจและความซื่อสัตย์</span><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\"><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\"><span style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\">• อิทธิพลต่อนโยบาย: หอการค้าจังหวัดสระบุรีทำหน้าที่เป็นกระบอกเสียงให้กับธุรกิจ โดยมีส่วนร่วมกับผู้กำหนดนโยบายเพื่อมีอิทธิพลต่อการพัฒนากลยุทธ์และแผนงานที่สอดคล้องกับความต้องการของภูมิทัศน์เศรษฐกิจของจังหวัดสระบุรี</span><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\"><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\"><span style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\"; text-indent: 0px;\">• ความรับผิดชอบต่อสังคมและสิ่งแวดล้อม: หอการค้าจังหวัดสระบุรีตระหนักถึงความเชื่อมโยงระหว่างความสำเร็จทางธุรกิจและความก้าวหน้าทางสังคม โดยสนับสนุนความคิดริเริ่มที่เกี่ยวข้องกับสวัสดิการสังคม การพัฒนาชุมชน และความยั่งยืนด้านสิ่งแวดล้อม</span><br></p>', '<div>The Saraburi Chamber of Commerce is a center for entrepreneurs, businessmen, and stakeholders in trade, commerce, industry and agriculture in Saraburi. Networking collaboration between the government, private sector and people is essential to enhancing the competitiveness of SMEs, promoting sustainable economic growth, and creating a future full of opportunities for the next generation.&nbsp;</div><div>Core areas of focus is</div><div><br></div><div>• Economic Empowerment: The Saraburi Chamber of Commerce works to stimulate trade, attract both domestic and foreign investment, and nurture a thriving environment for businesses of all sizes.</div><div><br></div><div>• Tourism Promotion: Understanding the power of tourism, the Saraburi Chamber of Commerce actively promotes Saraburi\'s attractions, aiming to boost the local economy and showcase the province\'s unique offerings.</div><div><br></div><div>• Human Capital Development: The Saraburi Chamber of Commerce promotes the entrepreneurs and laborers of Saraburi by providing training and knowledge-sharing initiatives. It also publicizes training seminars that are beneficial to the development of entrepreneurs\' potential, ensuring that businesses can access the skills and abilities they need to adapt to a changing world.</div><div><br></div><div>• Technological Innovation: Embracing progress, the Saraburi Chamber of Commerce encourages the adoption of modern technologies across industries to improve efficiency, optimize processes, and drive competitiveness in the market.</div><div><br></div><div>• Good Governance and Justice: The Saraburi Chamber of Commerce advocates for sound management practices, transparency, a robust legal framework, and a just system, creating a business environment built on trust and integrity.</div><div><br></div><div>• Policy Influence: The Saraburi Chamber of Commerce serves as a voice for the business community, engaging with policymakers to influence the development of strategies and plans that align with the needs of Saraburi\'s economic landscape.</div><div><br></div><div>• Social and Environmental Responsibility: The Saraburi Chamber of Commerce recognizes the interconnectedness of business success and social progress. It champions initiatives addressing social welfare, community development, and environmental sustainability.</div><div><br></div>');

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
(2, '<span style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\">หอการค้าจังหวัดสระบุรี จัดตั้งขึ้นเมื่อวันที่ 10 กันยายน พ.ศ.2527 ตามพระราชบัญญัติหอการค้า พุทธศักราช 2509 เพื่อให้เป็นสถาบันที่เป็นศูนย์รวมของผู้ประกอบวิสาหกิจทุกสาขาอาชีพ เพื่อส่งเสริมการค้า พาณิชยกรรม อุตสาหกรรม เกษตรกรรม โดยเมื่อวันที่ 27 กันยายน พ.ศ.2527 นายสนั่น หัตถโกศล เจ้าของโรงพิมพ์ปากเพรียวการช่างและเป็นเจ้าของและบรรณาธิการผู้พิมพ์และผู้โฆษณา หนังสือพิมพ์สระบุรีสาร “ประชาชน” ซึ่งท่านเป็นปูชนียบุคคลแห่งวงการหนังสือพิมพ์ท้องถิ่นของจังหวัดสระบุรี ในฐานะประธานก่อตั้งหอการค้าจังหวัดสระบุรี ได้เรียกสมาชิกมาร่วมประชุม และเลือกตั้งคณะกรรมการบริหารครั้งแรกรวม 19 คน มี นายสมชาย สุนทรวัฒน์ เป็นประธานหอการค้าจังหวัดสระบุรีสมัยแรกระหว่างปี พ.ศ.2527-2529 และอดีตท่านดำรงตำแหน่งรัฐมนตรีช่วยว่าการกระทรวงมหาดไทยอีกด้วย ปัจจุบันท่านถึงแก่กรรมแล้ว</span><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\"><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\"><span style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\">สมัยที่ 2–7 ระหว่างปีบริหาร พ.ศ.2530 – 2541 นายเล็ก กุลหงวน เป็นประธานหอการค้าจังหวัดสระบุรีคนที่ 2 ระยะเวลาบริหารรวม 6 สมัย มีคณะกรรมการบริหารรวม 27 คน ระหว่างวาระบริหารมีผลงานถือว่าเป็นผู้บุกเบิกสร้างรากฐานกิจการหอการค้าในจังหวัดสระบุรี ริเริ่มรวบรวมผู้ประกอบการวิสาหกิจ นักธุรกิจ มาเป็นสมาชิกจำนวนมากในระยะเวลา 12 ปี ทำให้หอการค้าจังหวัดสระบุรีมีพลังและสร้างความเป็นปึกแผ่น เป็นที่ยอมรับโดยทั่วไปอย่างแพร่หลาย ระหว่างนั้นหอการค้าจังหวัดสระบุรีตั้งอยู่เลขที่ 549 สำนักงานพาณิชย์จังหวัดสระบุรี ถนนพิชัยรณรงค์สงคราม ตำบลปากเพรียว อำเภอเมืองสระบุรี จังหวัดสระบุรี อดีตท่านเป็นประธานกิตติมศักดิ์หอการค้าจังหวัดสระบุรี ปัจจุบันท่านถึงแก่กรรมแล้ว</span><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\"><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\"><span style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\">สมัยที่ 8–9 ระหว่างปีบริหาร พ.ศ.2542 - 2545 นายวสันต์ เสถียรพันธ์ เป็นประธานหอการค้าจังหวัดสระบุรีคนที่ 3 ระยะเวลาบริหารรวม 2 สมัย มีคณะกรรมการบริหารรวม 54 คน ระหว่างวาระบริหารมีผลงานเป็นผู้ริ่เริ่มแผนการทำงานยุคใหม่ของหอการค้าจังหวัดสระบุรี โดยจัดตั้งคณะกรรมการฝ่ายต่าง ๆ เทียบเท่ากับหอการค้าไทย เพื่อให้กรรมการแต่ละฝ่ายเชื่อมโยงการทำงานและประสานงานกับหอการค้าไทยได้อย่างมีประสิทธิภาพ และเป็นผู้ริเริ่มหาสถานที่จัดตั้งสำนักงานหอการค้าจังหวัดสระบุรีเป็นของตนเอง โดยเป็นผู้ดำเนินการก่อสร้างอาคารและตกแต่งให้เป็นสำนักงานด้วยทุนส่วนตัวโดยใช้พื้นที่ของบริษัทวัชรธุรกิจเซ็นเตอร์ จำกัด สำนักงานหอการค้าจังหวัดสระบุรีแห่งแรกตั้งอยู่เลขที่ 38/5 ถนนโครงการชลประทาน ตำบลปากเพรียว อำเภอเมืองสระบุรี จังหวัดสระบุรี ท่านเป็นประธานหอการค้าจังหวัดสระบุรีคนแรก ที่ได้รับการแต่งตั้งให้เป็นกรรมการหอการค้าไทย เป็นประธานหอการค้าเขต 4 ดูแลงานหอการค้าจังหวัดสระบุรี ลพบุรี สิงห์บุรี ชัยนาท และเป็นประธานหอการค้าภาคกลางตอนบน 8 จังหวัด ดูแลและประสานงานหอการค้าจังหวัดปทุมธานี นนทบุรี พระนครศรีอยุธยา อ่างทอง สระบุรี ลพบุรี สิงห์บุรี ชัยนาท ปัจจุบันนายวสันต์ เสถียรพันธ์ เป็นประธานกิตติมศักดิ์หอการค้าจังหวัดสระบุรีคนที่ 1</span><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\"><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\"><span style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\">สมัยที่ 10–11 ระหว่างปีบริหาร พ.ศ.2546 – 2549 นายจรัล จึงยิ่งเรืองรุ่ง เป็นประธานหอการค้าจังหวัดสระบุรีคนที่ 4 ระยะเวลาบริหารรวม 2 สมัย มีคณะกรรมการบริหารรวม 66 คน ระหว่างวาระบริหารมีผลงานเป็นประธานหอการค้าจังหวัดสระบุรีคนแรกที่นำคณะกรรมการและสมาชิกมุ่งมั่นทำงานให้องค์กรมีประสิทธิภาพและให้สมาชิกได้รับประโยชน์สูงสุด จนได้เข้าประกวดผลงานและได้รับรางวัล “หอการค้ามาตรฐาน” ครั้งแรกของหอการค้าจังหวัดสระบุรีในปี พ.ศ.2548 ปัจจุบัน นายจรัล จึงยิ่งเรืองรุ่ง เป็นประธานกิตติมศักดิ์หอการค้าจังหวัดสระบุรีคนที่ 2 และเป็นอดีตสมาชิกวุฒิสภาจังหวัดสระบุรีอีกด้วย</span><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\"><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\"><span style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\">สมัยที่ 12-13 ระหว่างปีบริหาร พ.ศ.2550 – 2553 ว่าที่ร้อยตรี ดร.วรัญชัย วิริยะวงศ์ เป็นประธานหอการค้าจังหวัดสระบุรีคนที่ 5 ระยะเวลาบริหารรวม 2 สมัย มีคณะกรรมการบริหารรวม 73 คน ระหว่างวาระบริหารมีผลงานเป็นประธานหอการค้าจังหวัดสระบุรีคนแรกที่ได้รับการคัดเลือกเข้าศึกษาที่วิทยาลัยป้องกันราชอาณาจักร หลักสูตร ปรอ.รุ่นที่ 52/22 และดำเนินงานหอการค้าจังหวัดสระบุรีร่วมกับกรรมการและสมาชิก จนได้รับรางวัล “หอการค้ามาตรฐาน” 3 ปี ในปี พ.ศ.2550, 2551 และ 2553 ระหว่างบริหารงานได้รับความอนุเคราะห์จากอดีตประธานหอการค้าจังหวัดสระบุรี นายจรัล จึงยิ่งเรืองรุ่ง ให้จัดตั้งสำนักงานหอการค้าจังหวัดสระบุรี ณ เลขที่ 459 อาคารแกรนด์ ถนนมิตรภาพ ตำบลปากเพรียว อำเภอเมืองสระบุรี จังหวัดสระบุรี โดยเป็นสำนักงานให้เช่ารายเดือนอัตราถูกและจ่ายค่าใช้กระแสไฟฟ้าเท่านั้น ว่าที่ร้อยตรี ดร.วรัญชัย วิริยะวงศ์ เป็นอดีตประธานหอการค้าจังหวัดสระบุรีที่ได้รับการคัดเลือกเป็นกรรมการสภาหอการค้าแห่งประเทศไทย และปัจจุบันดำรงตำแหน่งกรรมการสภาหอการค้าแห่งประเทศไทย และประธานกิตติมศักดิ์หอการค้าจังหวัดสระบุรีคนที่ 3</span><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\"><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\"><span style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\">สมัยที่ 14-15 ระหว่างปีบริหารพ.ศ.2554 – 2557 นายเรวัต แสงนิล เป็นประธานหอการค้าจังหวัดสระบุรีคนที่ 6 ระยะเวลาบริหารรวม 2 สมัย มีกรรรมการบริหารรวม 64 คน ระหว่างวาระบริหารมีผลงานเป็นผู้นำกรรมการและสมาชิกหอการค้าจังหวัดสระบุรี คว้ารับรางวัล “หอการค้ามาตรฐาน” ปี พ.ศ.2554 รางวัล “หอการค้ายอดเยี่ยม” และรางวัล “รณรงค์เพิ่มยอดสมาชิก” ในปี พ.ศ.2555 รางวัล “หอการค้ายอดเยี่ยม” และรางวัล “รณรงค์เพิ่มยอดสมาชิก” ในปี พ.ศ.2556 รางวัล “หอการค้าดีเด่น” และรางวัล “รณรงค์เพิ่มยอดสมาชิก” ในปี พ.ศ.2557 ท่านเป็นผู้ขออนุญาตใช้พื้นที่ศูนย์แสดงสินค้าและจำหน่ายผลิตภัณฑ์ OTOP สระบุรี จากองค์การบริหารส่วนจังหวัดสระบุรี โดยนายเฉลิม วงษ์ไพร นายกองค์การบริหารส่วนจังหวัดสระบุรีได้ให้ความอนุเคราะห์จัดทำสำนักงานให้หอการค้าจังหวัดสระบุรี และสภาอุตสาหกรรมจังหวัดสระบุรี หน่วยงานละ 1 ห้อง โดยไม่มีค่าใช้จ่ายใด ๆ เพียงเก็บค่าใช้กระแสไฟฟ้ารายเดือนเท่านั้น หอการค้าจังหวัดสระบุรีได้ย้ายมาจัดตั้งสำนักงานแห่งใหม่เมื่อวันที่ 10 กันยายน 2555 ซึ่งตรงกับวันครบรอบการดำเนินงาน 28 ปี ปัจจุบันสำนักงานหอการค้าจังหวัดสระบุรี ตั้งอยู่ ณ เลขที่ 36 หมู่ 6 อาคารสวนริมเขาชั้น 2 ถนนมิตรภาพ ตำบลตลิ่งชัน อำเภอเมือง จังหวัดสระบุรี ปัจจุบันนายเรวัต แสงนิลเป็นประธานกิตติมศักดิ์หอการค้าจังหวัดสระบุรีคนที่ 4</span><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\"><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\"><span style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\">สมัยที่ 16 ระหว่างปีบริหาร พ.ศ.2558 – 2559 นายนพดล ธรรมวิวัฒน์ เป็นประธานหอการค้าจังหวัดสระบุรีคนที่ 7 ระยะเวลาบริหารรวม 1 สมัย มีกรรรมการบริหารรวม 67 คน ระหว่างวาระบริหารมีผลงานเป็นผู้ริเริ่มให้กรรมการและสมาชิกหอการค้าจังหวัดสระบุรีจัดทำโครงการ “สระบุรี...ครัวสุขภาพ” ที่ได้รับความสนใจทั้งภาครัฐและเอกชน และเป็นผู้ริเริ่มก่อตั้งบริษัทสระบุรีพัฒนาเมือง จำกัด เพื่อทำให้จังหวัดสระบุรีเป็นเมืองทันสมัยใส่ใจสิ่งแวดล้อม และเป็นผู้นำกรรมการและสมาชิกหอการค้าจังหวัดสระบุรี คว้ารางวัล “หอการค้าดีเด่น”และรางวัล “รณรงค์เพิ่มยอดสมาชิก” ประจำปี พ.ศ.2559 อีกด้วย ปัจจุบันนายนพดล ธรรมวิวัฒน์ ปัจจุบันดำรงตำแหน่งประธานกิตติมศักดิ์หอการค้าจังหวัดสระบุรีคนที่ 5 และกรรมการผู้จัดการ บริษัทสระบุรีพัฒนาเมือง จำกัด ในส่วนการประกอบอาชีพพัฒนาอสังหาริมทรัพย์ เป็นกรรมการผู้จัดการ บริษัทนอร์ธแลนด์ ดีเวลลอปเม้นต์ จำกัด</span><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\"><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\"><span style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\">สมัยที่ 17-18 ระหว่างปีบริหาร พ.ศ.2560 – 2563 นายจรูญ จึงยิ่งเรืองรุ่ง เป็นประธานหอการค้าจังหวัดสระบุรีคนที่ 8 ระยะเวลาบริหารรวม 2 สมัย มีกรรรมการบริหารรวม 63 คน ระหว่างวาระบริหารมีผลงานเป็นผู้นำกรรมการและสมาชิกหอการค้าจังหวัดสระบุรี คว้ารางวัล “หอการค้าดีเด่น” ประจำปี พ.ศ.2560 และประจำปีพ.ศ.2562 เป็นผู้สานต่อโครงการ “สระบุรี...ครัวสุขภาพ” ที่ได้รับความสนใจทั้งภาครัฐและเอกชน และเป็นผู้ริเริ่มก่อตั้ง “สหกรณ์บริการสินค้าเพื่อสุขภาพสระบุรี จำกัด” และอนุญาตให้ใช้สำนักงานหอการค้าจังหวัดสระบุรี เป็นสำนักงานสหกรณ์บริการสินค้าเพื่อสุขภาพสระบุรี จำกัด อีกด้วย นอกจากนี้ยังเป็นผู้สานต่อการขอให้ยกทางรถไฟรางคู่ในตัวเมืองสระบุรี นายจรูญ จึงยิ่งเรืองรุ่ง เป็นอดีตผู้พิพากษาสมทบศาลจังหวัดอ่างทอง อดีตกรรมการในคณะกรรมการการเลือกตั้งจังหวัดสระบุรี(กกต.) และอดีตสมาชิกสภาปฏิรูปแห่งชาติ(สปช.) ปัจจุบันดำรงตำแหน่งประธานกิตติมศักดิ์หอการค้าจังหวัดสระบุรีคนที่ 6 นายกสมาคมครูและผู้ปกครองวิทยาลัยสารพัดช่างสระบุรี และนายกสมาคมครูและผู้ปกครองวิทยาลัยอาชีวศึกษาสระบุรี ในส่วนการประกอบอาชีพปัจจุบัน พัฒนาอสังหาริมทรัพย์ ซื้อขายอสังหาริมทรัพย์ ขายวัสดุก่อสร้างและจำหน่ายรถยนต์ โดยเป็นประธานกลุ่มบริษัทในเครือจรูญรัตน์</span><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\"><br style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\"><span style=\"color: rgb(102, 102, 102); font-family: \"Noto Sans Thai\";\">ปัจจุบันสมัยที่ 19-20 ระหว่างปีบริหาร พ.ศ.2564 –2567 นางวรรณภา ชินชูศักดิ์ เป็นประธานหอการค้าจังหวัดสระบุรีคนที่ 9 ประธานหอการค้าหญิงคนแรกที่อายุน้อยที่สุด มีกรรรมการบริหารรวม 58 คน ร่วมมือกับภาครัฐในการฝ่าวิกฤตโควิด 19 ปี 2564 ด้วยการร่วมจัดตั้งศูนย์กระจายวัคซีนภาคประชาชนและพนักงานบริษัทภาคเอกชนร่วมกับสาธารณสุขจังหวัด จัดทำโครงการสระบุรีต้องรอด ร่วมกับสาธารณะสุขจังหวัดสระบุรีในการแจกกล่องยาสำหรับผู้ป่วยโควิด 19 ที่ต้องกักตัวอยู่ที่บ้าน จากนั้นทำโครงการสระบุรีต้องรอดในการร่วมรับบริจาคเงินและสิ่งของในการจัดทำถุงยังชีพเพื่อแจกจ่ายให้กับพี่น้องประชาชนที่ประสบอุทกภัยในปี 2565 การทำงานร่วมกันของคณะกรรมการร่วมภาคเอกชน 3 สถาบัน (กกร.) ในการจัดงานมหกรรม เจ้าพระยา- ป่าสัก ประจำปี 2565 ซึ่งเป็นงานมหกรรมงบประมาณกลุ่มจังหวัดภาคกลางตอนบน ผลักดันนโยบาย Saraburi Low Carbon และ Saraburi Food Valley เข้าในยุทธศาตร์จังหวัด 20 ปี ในปี 2566 ริเริ่มการจัดเทศกาลตุรุษจีนปากเพรียว ประจำปี 2567 ซึ่งเริ่มจัดเป็นปีแรกร่วมกับเทศบาลเมืองสระบุรี ร่วมจัดจำหน่ายเข็มกลัดตราประจำจังหวัด ในการฉลองจังหวัดสระบุรีครบรอบ 474 ปี เพื่อนำรายได้ส่วนหนึ่งบริจาคให้กับกาชาดจังหวัดสระบุรี โดยบริหารและสานงานต่อเนื่องจนถึงปัจจุบัน</span>', '<div>The Saraburi Chamber of Commerce was established on September 10, 1984 in accordance with the Chamber of Commerce Act, B.E. 2509 to be an institution, a center for all entrepreneurs to promote trade, commerce, industry and agriculture. On September 27, 1984, Mr. Sanan Hattakoson, owner of Pakpreawkarnchang printing house and owner and editor of the publisher and advertiser of the Saraburi newspaper \"People\", who was a matriarch of the local newspaper industry in Saraburi. As the founding president of the Saraburi Chamber of Commerce, he called members to join the meeting and elect the first executive committee, totaling 19 people, with Mr. Somchai Sunthornwat was the president of the Saraburi Chamber of Commerce for the first time between 1984 and 1986. He was also formerly Deputy Minister of the Interior. Currently, he has passed away.</div><div><br></div><div>Period 2nd–7th during the administrative years 1987 - 1998, Mr. Lek Kulnguan was the 2nd president of the Saraburi Chamber of Commerce. The administrative period totaled 6 terms. There were a total of 27 executive committee members. During his administration term, he was considered a pioneer in creating the foundation for the Chamber of Commerce in Saraburi. He initiated the gathering of entrepreneurs and businessmen to become members in large numbers over a period of 12 years, making the Saraburi Chamber of Commerce powerful and creating solidarity that was generally accepted. At that time, the Saraburi Chamber of Commerce was located at 549, Saraburi Commerce Office, Phichai Ronarong Songkhram Road, Pak Phriao, Mueang Saraburi, Saraburi. He was formerly the honorary president of the Saraburi Chamber of Commerce. Currently, he has passed away.</div><div><br></div><div>Period 8th–9th during the administrative years 1999 - 2002, Mr. Wasan Sathianphan was the third president of the Saraburi Chamber of Commerce. The total management period was 2 terms. There were a total of 54 executive committee members. During his administration term, he worked as an initiator of the new era work plan for the Saraburi Chamber of Commerce by establishing committees of various departments comparable to the Thai Chamber of Commerce, enabling committee members of each department to effectively connect and coordinate work with the Thai Chamber of Commerce. He took the initiative to find a place to locate the Saraburi Chamber of Commerce office by constructing the building and decorating an office with his own funds, using the space of Watchara Business Center Company Limited, that was located at 38/5 Irrigation Project Road, Pak Phriao, Mueang Saraburi, Saraburi. He was the first president of the Saraburi Chamber of Commerce to be appointed to the Board of the Thai Chamber of Commerce. He was the president of the Chamber of Commerce Region 4, overseeing the work of the chambers of commerce in Saraburi, Lopburi, Singburi, Chainat, and he was the president of the Upper Central Region Chamber of Commerce in 8 provinces, supervising and coordinating the Chamber of Commerce of Pathum Thani. Nonthaburi, Phra Nakhon Si Ayutthaya, Ang Thong, Saraburi, Lopburi, Singburi and Chainat. Currently, Mr. Wasan Satianphan holds the position of the first honorary president of the Saraburi Chamber of Commerce.</div><div><br></div><div>Period 10th–11th during the administration year 2003 - 2006, Mr. Charan Jungyingruangrung was the 4th president of the Saraburi Chamber of Commerce. The administration period totaled 2 terms. There were a total of 66 executive committee members. During his executive term, he worked as the first president of the Saraburi Chamber of Commerce, leading the committee and members to make the organization efficient and provide the members with maximum benefits, he entered the competition and received the \"Standard Chamber of Commerce\" award for the first time for Saraburi Chamber of Commerce in 2005. Currently, Mr. Charan Jungyingruangrung holds the position of the second Honorary President of the Saraburi Chamber of Commerce and a former member of the Saraburi Provincial Senate.</div><div><br></div><div><br></div><div>Period 12th-13th during the administrative years 2007–2010, Second Lieutenant Dr. Waranchai Wiriyawong was the 5th president of the Saraburi Chamber of Commerce. The administration period totaled 2 terms. There were a total of 73 executive committee members. During his administration term, he was the first president of the Saraburi Chamber of Commerce to be selected to study at the National Defense College, NDC course, class 52/22. He runs the Saraburi Chamber of Commerce together with the directors and members, receiving the \"Standard Chamber of Commerce\'\' award for 3 years in 2007, 2008 and 2010. During the administration, he received the courtesy from the former president of the Saraburi Chamber of Commerce, Mr. Charan Jungyingruangrung to locate the office of the Saraburi Chamber of Commerce at 459 Grand Building, Mittraphap Road, Pak Phriao, Mueang Saraburi, Saraburi, an office for monthly rent at a low rate and pays for electricity usage only. Second Lieutenant Dr. Waranchai Wiriyawong was a former president of the Saraburi Chamber of Commerce who was selected as a board member of the Thai Chamber of Commerce. Currently, he holds the position of Director of the Thai Chamber of Commerce and the 3rd Honorary President of the Saraburi Chamber of Commerce.</div><div><br></div><div>Period 14th-15th during the administration year 2011 - 2014, Mr. Rewat Saengnil was the 6th president of the Saraburi Chamber of Commerce, The administration period totaled 2 terms. There were a total of 64 executive committee members. During his executive term, he had outstanding results as a leader for directors and members of the Saraburi Chamber of Commerce, winning the \"Standard Chamber of Commerce\" award in 2011, the \"Excellent Chamber of Commerce\" award and the \"Campaign to increase membership\" award in 2012, the “Best Chamber of Commerce” award and the “Campaign to increase membership” award in 2013 and the “Outstanding Chamber of Commerce” award and the “Campaign to increase membership” award in 2014. He requested permission to use the area of the exhibition center and sell OTOP products in Saraburi from the Saraburi Provincial Administrative Organization. Mr. Chalerm Wongprai, President of the Saraburi Provincial Administrative Organization, has given his assistance in setting up offices for the Saraburi Chamber of Commerce and the Saraburi Industrial Council, there is no charge, just monthly electricity usage is collected. The Saraburi Chamber of Commerce moved to locate a new office on September 10, 2012, its 28th anniversary of operation. Currently, the Saraburi Chamber of Commerce office is located at number 36, Village No. 6, Suan Rim Khao Building, 2nd Floor, Mittraphap Road, Taling Chan, Mueang Saraburi, Saraburi. Currently, Mr. Rewat Saengnil holds the position of the 4th Honorary President of the Saraburi Chamber of Commerce.</div><div><br></div><div>Period 16th during the administration years 2015 - 2016, Mr. Noppadon Thamvivat was the 7th president of the Saraburi Chamber of Commerce. The administration period totaled 1 term. There were a total of 67 executive directors. During his administration term, he was the initiator for directors and members of the Saraburi Chamber of Commerce to create the project “Saraburi Healthy Kitchen”, which received attention from both the public and private sectors. He was the founder of Saraburi City Development Company Limited to make Saraburi a modern city that cares for the environment. He was the leader of the directors and members of the Saraburi Chamber of Commerce, winning the \"Outstanding Chamber of Commerce\" award and the \"Campaign to increase membership\" award in 2016 as well. Currently, Mr. Noppadon Thamwiwat holds the position of the 5th Honorary President of the Saraburi Chamber of Commerce and Managing Director of Saraburi Pattana Mueang Company Limited. He also works in real estate development as Managing Director of Northland Development Company Limited.</div><div><br></div><div>Period 17th-18th during the administration year 2017 - 2020, Mr. Charoon Jungyingruangrung was the 8th president of the Saraburi Chamber of Commerce. The administration period totaled 2 terms. There were a total of 63 executive directors. During his executive term, he had the work of being a leader of directors and job of the Saraburi Chamber of Commerce, winning the \"Outstanding Chamber of Commerce\" award for the years 2017 and 2019. He was the continuation of the project \"Saraburi Healthy Kitchen\" and the founder of the Saraburi Health Products Cooperative Limited and allowed the office of the Saraburi Chamber of Commerce to be used as the office of the Saraburi Health Products Cooperative Limited. He was also the one who continued the request to raise the double-track railway in Saraburi. Mr. Charoon Jungyingruangrung was a former associate judge of the Ang Thong Provincial Court, a former member of the Saraburi Provincial Election Commission, and a former member of the National Reform Council. Currently, He holds the position of the 6th Honorary President of the Saraburi Chamber of Commerce, President of the Teachers and Parents Association of Saraburi Polytechnic College, and President of the Teachers and Parents Association of Saraburi Vocational College. He also works on developing real estate, buying and selling real estate, selling construction materials, selling cars, and he holds the position of the president of the Charoonrat Group of Companies.</div><div><br></div><div>Currently, in the 19th-20th period during the administrative year 2021 - 2024, Mrs. Wannapa Chinchusak is the 9th president of the Saraburi Chamber of Commerce, the first and youngest female president. There are a total of 58 executive directors. During her administration term, she collaborated with the government to overcome the COVID-19 crisis in 2021 to set up a vaccine distribution center for public and employees of private companies with the provincial health department. Initiating the \"Saraburi Must Survive\" project in collaboration with the provincial health department to distribute medicine boxes to COVID-19 patients who had to self-isolate at home, and raising funds and donations for relief bags to be distributed to people affected by the floods in 2022. Collaboration of the Joint Standing Committee on Commerce, Industry and Banking (JSCCIB) in organizing the \"Chao Phraya - Pa Sak Festival 2022\", a budget-based event for the upper central region provinces. Promoting the Saraburi Low Carbon and Saraburi Food Valley policies into the 20-year provincial strategy in 2023. Initiating the \"Pak Phreow Chinese New Year Festival 2024\", the first year in collaboration with the Saraburi Municipality. Co-organizing the sale of provincial pins to celebrate the 474th anniversary of Saraburi, with a portion of the proceeds donated to the Saraburi Red Cross. Managing and continuing work until the present also.</div><div><br></div>');

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
(1, 'หอการค้าจังหวัดเป็นสถาบันที่บุคคลหลาย ๆ คนจัดตั้งขึ้นเพื่อส่งเสริมการค้าอันมิใช่เป็นการหาผลกำไร หรือรายได้แบ่งปันกัน หอการค้าจังหวัดสามารถอำนวยประโยชน์แก่สมาชิก และประเทศชาติได้เพราะหอการค้ามีสมาชิกที่ประกอบวิสาหกิจทุกอาชีพ ทำให้สามารถรวบรวมข้อมูล ข้อเท็จจริง ปัญหา อุปสรรค และหาข้อยุติในอันที่จะก่อให้ เกิดประโยชน์ร่วมกัน โดยเฉพาะอย่างยิ่งสามารถอำนวยประโยชน์แก่สมาชิกทั้งทางตรงและทางอ้อมได้เป็นอย่างดี', 'The Provincial Chamber of Commerce is an institution established by several individuals to promote trade, not for profit or shared income. The Provincial Chamber of Commerce is beneficial to members and the nation because the Chamber has members who operate businesses of all entrepreneurs, making it possible to gather information, facts, problems, obstacles and find solutions that will create mutual benefit, especially being able to benefit members both in the way direct and indirect as well.\r\n');

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
(14, 'ก', 'A', 'ก', 'A', 'Zoj1ZKfy87tKXCAcDJniFQAAAAQ.png'),
(15, 'ข', 'B', 'ข', 'B', 'Zoj1XiNeOP_PV7afXkoPPQAAAAA.png');

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
(7, 'ก', 'A', 'กกก', 'AAA', '.jpg');

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
(7, 'ก', 'a', 'กกก', 'AAA', '.jpg');

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
(6, 'ก', 'A', 'กกก', 'AAA', '.jpg'),
(7, 'ข', 'B', 'ขขข', 'BBB', '.jpg');

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
(5, 'ก', 'A', 'กกก', 'AAA', '.jpg');

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
(6, 'ก', 'A', 'กกก', 'AAA', '.jpg'),
(7, 'ข', 'B', 'ขขข', 'BBB', '.jpg');

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
(10, 'ก', 'A', 'กกก', 'AAA', ''),
(11, 'ข', 'B', 'ขขข', 'BBB', '.jpg');

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
(9, 'ZojlAZK9s2dSow40ZCHrnAAAAAI.png', 'ก', 'A');

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
(42, 9, 'ZojlI34Vwa4-KSaW_9DJvAAAAAc-activity-0.png'),
(43, 9, 'ZojlKdXUPlEUCaST456aYwAAAAo-activity-0.png'),
(44, 9, 'ZojlKdXUPlEUCaST456aYwAAAAo-activity-1.png');

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
(45, 'Zoja6aweVsdDW0qqSpm3WwAAAAk.png', '1', '', 'ZojcvpK9s2dSow40ZCHrhAAAAAI.png', '', ''),
(46, 'Zoja7KweVsdDW0qqSpm3XgAAAAk.png', '2', '', '', '', '');

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
(97, '32', '-slide-id-32.jpg'),
(98, '32', '-slide-id-32.jpg'),
(99, '32', '-slide-id-32.jpg'),
(102, '45', 'ZojgByNeOP_PV7afXkoO_AAAAAA-slide-id-45.png'),
(103, '45', 'ZojgDCNeOP_PV7afXkoO_wAAAAA-slide-id-45.png');

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
(3, 'ZojwTKweVsdDW0qqSpm3gwAAAAk.png', '<span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">1. สนับสนุนการประกอบธุรกิจ</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">• ข้อมูลและคำปรึกษา: เข้าถึงข้อมูล ข้อมูลการตลาด แนวโน้มอุตสาหกรรม และข้อบังคับทางการค้า</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">• การปกป้องผลประโยชน์: สนับสนุนและช่วยเหลือในการแก้ไขข้อพิพาททางการค้าและอุปสรรคทางธุรกิจ</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">• การประชาสัมพันธ์ธุรกิจ: โปรโมทธุรกิจผ่านสื่อต่างๆ ของหอการค้าจังหวัดสระบุรี</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">2. การสร้างโอกาสทางธุรกิจ</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">• การประชุมและปาฐกถา: เข้าร่วมประชุมใหญ่ รับฟังปาฐกถาพิเศษจากผู้นำในอุตสาหกรรม</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">• การพบปะนักธุรกิจ: เชื่อมต่อกับนักธุรกิจชั้นนำ สร้างโอกาสทางธุรกิจและการลงทุน</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">• ข้อมูลทางการค้า: รับข่าวสาร ข้อมูล และเอกสารเกี่ยวกับการค้า</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">3. การพัฒนาศักยภาพ</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">• การฝึกอบรม: เข้าร่วมการฝึกอบรม พัฒนาทักษะ และความรู้</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">• ข้อมูล: เข้าถึงข้อมูล การวิจัย และเครื่องมือต่างๆ</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">• การให้คำปรึกษา: รับคำปรึกษาจากผู้เชี่ยวชาญ</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">4. การเข้าถึงตลาด</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">• การจับคู่ธุรกิจ: เชื่อมต่อกับคู่ค้าทางธุรกิจ</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">• งานแสดงสินค้า: เข้าร่วมงานแสดงสินค้าเพื่อนำเสนอสินค้าและบริการ</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">• การส่งออก: รับคำปรึกษาและความช่วยเหลือเกี่ยวกับการส่งออก</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">5. บริการพิเศษสำหรับสมาชิก</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">• กิจกรรม: เข้าร่วมสัมมนา ฝึกอบรม ดูงาน และกิจกรรมอื่นๆ ของหอการค้า</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">• ตัวแทน: ได้รับการคัดเลือกเป็นตัวแทนเข้าร่วมกิจกรรมทั้งในประเทศและต่างประเทศ</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">• ส่วนลด: รับส่วนลดค่าธรรมเนียมต่างๆ ของหอการค้า</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">6. สิทธิประโยชน์อื่นๆ</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">• เครือข่าย: เข้าถึงเครือข่ายนักธุรกิจ</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">• ส่วนลด: รับส่วนลดจากพันธมิตรของหอการค้า</span><br style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: \" noto=\"\" sans=\"\" thai\";\"=\"\">• บริการพิเศษ: บริการอื่นๆ เพิ่มเติม เช่น กฎหมาย การเงิน การประกัน</span>', '<div>1. Business Support</div><div>• Information and Consultation: Access business information, market data, industry trends, and regulatory updates.</div><div>• Protection of Business Interests: Support and assistance in resolving trade disputes and overcoming regulatory hurdles.</div><div>• Business Promotion: Promotion of businesses through various Chamber channels, including website, social media, and publications.</div><div><br></div><div>2. Business Opportunity Creation</div><div>• Meeting and Keynote Speeches: Attendance at Chamber\'s Annual General Meeting and listening to inspiring speeches from industry leaders.</div><div>• Networking: Connecting with a diverse network of business leaders and decision-makers at Chamber events.</div><div>• Access to Business Information: Receiving regular updates on the latest business news and trends.</div><div><br></div><div>3. Exclusive Member Benefits</div><div>• Participation in Activities: Access to a wide range of Chamber events, including seminars, training workshops, and business networking functions.</div><div>• Discounts: Enjoy discounted rates on Chamber services.</div><div><br></div><div>4. Capacity Building</div><div>• Training: Access to specialized training programs to enhance skills and expertise.</div><div>• Information and Resources: Access to data, research, and tools to support business growth.</div><div>• Expert Advice: Consultation with experienced professionals for personalized guidance.</div><div><br></div><div>5. Market Access</div><div>• Business Matching: Connecting with potential business partners and suppliers.</div><div>• Trade Fairs: Participation in trade exhibitions to showcase products and services.</div><div>• Export Consultation: Advice and assistance on export procedures and regulations.</div><div><br></div><div>6. Other Benefits</div><div>• Business Network: Access to a valuable network of business contacts.</div><div>• Discounts: Enjoy discounts offered by Chamber partners.</div><div>• Additional Services: Access to other services such as legal, financial, and insurance advice.</div>');

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
(4, 'บุคคลธรรมดา', 'Ordinary person', '• เจ้าของธุรกิจคนเดียว\r\n• ห้างหุ้นส่วนสามัญ (ไม่จดทะเบียนเป็นนิติบุคคล)\r\n• มีสถานประกอบการ\r\n• จดทะเบียนพาณิชย์\r\n• วิสาหกิจชุมชน', '• Sole proprietors\r\n• General partnerships (not registered as legal entities)\r\n• With a business establishment\r\n• With a commercial registration\r\n• Community enterprises', 'นิติบุคคล', 'Juristic person', '• มีสำนักงานใหญ่หรือสาขาอยู่ในจังหวัดสระบุรี\r\n• ไม่เป็นสมาชิกของหอการค้าจังหวัดอื่น หรือหอการค้าต่างประเทศใด ๆ', '• With a head office or branch located in Saraburi province\r\n• Not members of any other provincial chambers of commerce, trade associations, or foreign chambers of commerce');

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
(2, 'สนับสนุนการประกอบธุรกิจ', '• รับข้อมูลและคำปรึกษาทางธุรกิจ\r\n• ปกป้องผลประโยชน์ทางธุรกิจ\r\n• ประชาสัมพันธ์ธุรกิจ', 'การสร้างโอกาสทางธุรกิจ', '• ร่วมการประชุมและปาฐกถา\r\n• การพบปะนักธุรกิจหลากหลายทั่วประเทศ\r\n• รับข้อมูลทางการค้าและแนวโน้มธุรกิจ', 'การพัฒนาศักยภาพ', '• การฝึกอบรม\r\n• เข้าถึงข้อมูล การวิจัย และเครื่องมือต่างๆ\r\n• การรับคำปรึกษาจากผู้เชี่ยวชาญ', 'การเข้าถึงตลาด', '• การจับคู่ธุรกิจ\r\n• ร่วมงานแสดงสินค้ากับเครือข่ายของหอการค้า\r\n• รับคำปรึกษาเกี่ยวกับการส่งออก', 'บริการพิเศษสำหรับสมาชิก', '• เข้าร่วมกิจกรรมของหอการค้าจังหวัด และหอการค้าไทย\r\n• รับส่วนลดค่าธรรมเนียมต่างๆ\r\n• อำนวยความสะดวกในการประสานงานกับหน่วยงานภาครัฐ สถาบันการศึกษาและอื่นๆ', 'สิทธิประโยชน์อื่นๆ', '• เข้าถึงเครือข่ายนักธุรกิจทั่วประเทศ\r\n• รับส่วนลดจากพันธมิตรของหอการค้า\r\n• บริการอื่นๆ', 'Business Support', '• Access Business Information and Consultation\r\n• Protection of Business Interests\r\n• Business Promotion', 'Business Opportunity Creation', '• Meeting and Keynote Speeches\r\n• Networking with Businesses from All Over Thailand\r\n• Access to Business News and Trends', 'Capacity Building', '• Training\r\n• Information and Resources\r\n• Expert Advice', 'Market Access', '• Business Matching\r\n• Participating in Trade Fairs and Exhibitions with the Chamber\'s Network\r\n• Export Consultation', 'Exclusive Member Benefits', '• Participating in Activities Organized by the Provincial and Thai Chambers of Commerce\r\n• Enjoy Discounted Rates on Chamber Services\r\n• Facilitating Coordination with Government Agencies, Educational Institutions, and Others', 'Other Benefits', '• Gaining Access to a Nationwide Network of Businessmen \r\n• Enjoy Discounts Offered by Chamber Partners\r\n• Additional Services');

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
(14, '20240703214417-img.jpg'),
(15, '20240703214428-img.jpg');

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
(2, '36 หมู่6 อาคารสวนริมเขาชั้น2 ถนน มิตรภาพ ตำบล ตลิ่งชัน อำเภอเมือง จังหวัดสระบุรี', '36 Village No. 6, Suan Rim Khao Building, 2nd Floor, Mittraphap Road, Taling Chan Subdistrict, Mueang District, Saraburi Province');

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
(1, 'info@saraburichamber.or.th');

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
(1, 'info.afterwebdesign@gmail.com');

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
(1, 'หอการค้าจังหวัดสระบุรี', '#');

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
(1, 'ID = SARABURICHAMBER', '#');

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
(1, 'หอการค้าจังหวัดสระบุรี', '#');

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
(1, '036-123-456', '036-123-457');

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
(6, '20240703222108-qr.jpg');

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
(52, '2', 'Miss', 'ทดสอบ ทดสอบ', '2024-07-31', 'ทดสอบ', 'ZoON3KVuH1mVc0mvw2JCywAAAAg-Screenshot 2567-06-22 at 20.14.57.png', 'ZoON3KVuH1mVc0mvw2JCywAAAAg-Screenshot 2567-06-22 at 20.16.39.png', 'asf', 'asf', '2024-07-30', 'ZoON3KVuH1mVc0mvw2JCywAAAAg-Screenshot 2567-06-22 at 20.08.39.png', 'asf', 'saf', 'fhfj', 'fgj', '2024-08-01', '12:22', 'asf', 'ZoON3KVuH1mVc0mvw2JCywAAAAg-Screenshot 2567-06-22 at 20.34.08.png', 'ZojuWjgg8BqjIIGI9Mj1zwAAAAg-logo.png', 'Zojvkafy87tKXCAcDJniCQAAAAQ-slide-banner-0.png,Zojvkafy87tKXCAcDJniCQAAAAQ-slide-banner-1.png', 'ZojwkDgg8BqjIIGI9Mj10wAAAAg-main_img.png', '<p>ฟหด</p>', '<p>ทดสอบ</p>', '1', NULL);

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
(1, 'The Saraburi Chamber of Commerce is a powerful engine for economic and social progress of Saraburi; it\'s a dynamic hub where businessmen and entrepreneurs figures across diverse industries come together. The main mission is to promote and support the development of trade, investment, tourism, human resources, technology, governance, law, policy, plan and social and environment activities. Networking collaboration between the government, private sector and people is essential to enhancing the competitiveness of SMEs, promoting sustainable economic growth, creating a future full of opportunities for the next generation and achieving social well-being.');

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
(1, '20240702224503-home_aboutus.jpg');

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
(1, 'หอการค้าจังหวัดสระบุรี เป็นกลไกอันทรงพลังสำหรับความก้าวหน้าทางเศรษฐกิจและสังคมของจังหวัดสระบุรี โดยเป็นศูนย์รวมนักธุรกิจและผู้ประกอบการจากหลากหลายอุตสาหกรรมมารวมตัวกัน มีภารกิจหลักในการส่งเสริมและสนับสนุน พัฒนาการค้าการลงทุน การท่องเที่ยวทรัพยากรมนุษย์ เทคโนโลยี การบริหาร กฎหมาย ความยุติธรรม นโยบาย แผน กิจกรรมทางสังคมและสิ่งแวดล้อม โดยเชื่อมโยงความร่วมมือเครือข่าย ทั้งภาครัฐ เอกชน และประชาชน ยกระดับขีดความสามารถในการแข่งขันของSME พัฒนาเพื่อการเติบโตทางเศรษฐกิอย่างยั่งยืน สร้างอนาคตที่เต็มไปด้วยโอกาส เพื่อส่งต่อให้คนรุ่นใหม่ และความเป็นอยู่ที่ดีทางสังคม');

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
(9, '20240702224309-pc.jpg', '20240702224309-mobile.jpg'),
(10, '20240702224339-pc.jpg', '20240702224339-mobile.jpg');

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
(13, '20240702224255-pc.jpg', '20240702224255-mobile.jpg'),
(14, '20240702224321-pc.jpg', '20240702224321-mobile.jpg');

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
(13, 'Business Support', '• Access to Information, Consultation, and Business Advice\r\n• Protection of Business Interests and Resolution of Business Obstacles\r\n• Business Promotion in Various Chamber Media Channels'),
(14, 'Business Opportunity Creation', '• Participation in Annual General Meeting, Special Lectures and Gain Insights into the Economic Outlook.\r\n• Networking Opportunities with Leading Businessmen\r\n• Access to Business News and Information\r\n• Access to Trade Information and Documents\r\n• Business Promotion through UTCC Connect'),
(15, 'Exclusive Member Benefits', '• Participation in Chamber Activities\r\n• Selection as a Representative for Domestic and International Activities\r\n• Discounts on Various Fees');

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
(2, '20240702225040-home_benefits.jpg');

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
(20, 'สนับสนุนการประกอบธุรกิจ', '• เข้าถึงข้อมูล คำปรึกษา และข้อแนะนำทางการค้า\r\n• ได้รับการดูแลปกป้องผลประโยชน์ และแก้ไขปัญหาอุปสรรคทางธุรกิจ\r\n• ประชาสัมพันธ์ธุรกิจในสื่อต่างๆ ของหอการค้า'),
(21, 'การสร้างโอกาสทางธุรกิจ', '• เข้าร่วมประชุมใหญ่ รับฟังปาฐกถาพิเศษ และรับฟังแนวโน้มทางเศรษฐกิจ\r\n• มีโอกาสพบปะนักธุรกิจชั้นนำ สร้างโอกาสทางธุรกิจและการลงทุน\r\n• รับข่าวสารและข้อมูลทางการค้า\r\n• สืบค้นข้อมูลและเอกสารทางการค้า\r\n• การประชาสัมพันธ์ธุรกิจในช่องทาง UTCC Connect'),
(22, 'บริการพิเศษสำหรับสมาชิก', '• เข้าร่วมกิจกรรมต่างๆ ของหอการค้า เช่น สัมมนา ฝึกอบรม ดูงาน\r\n• ได้รับการคัดเลือกเป็นตัวแทนเข้าร่วมกิจกรรมทั้งในประเทศและต่างประเทศ\r\n• รับส่วนลดค่าธรรมเนียมต่างๆ');

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
(5, '20240702225244-home_bestitems-1.jpg', '20240702225255-home_bestitems-2.jpg', '20240702225305-home_bestitems-3.jpg', '20240702225315-home_bestitems-4.jpg', '20240702225322-home_bestitems-5.jpg', '20240702225331-home_bestitems-6.jpg');

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
(34, '1', 'ZojVdX4Vwa4-KSaW_9DJlwAAAAc.png'),
(35, '2', 'ZojVe_x7AX2TZYpZ_gP79AAAAAM.png');

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
(23, 'ZojnFiNeOP_PV7afXkoPFgAAAAA.png', 'assdgdfhdfh', 'asf', 'as', 'fg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `news_pic`
--

CREATE TABLE `news_pic` (
  `id` int(11) NOT NULL,
  `id_main` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `aboutus_structure_2`
--
ALTER TABLE `aboutus_structure_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `aboutus_structure_3`
--
ALTER TABLE `aboutus_structure_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `aboutus_structure_4`
--
ALTER TABLE `aboutus_structure_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `aboutus_structure_5`
--
ALTER TABLE `aboutus_structure_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `aboutus_structure_6`
--
ALTER TABLE `aboutus_structure_6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `aboutus_structure_7`
--
ALTER TABLE `aboutus_structure_7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `activity_picture`
--
ALTER TABLE `activity_picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `activity_picture_each_id`
--
ALTER TABLE `activity_picture_each_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `benefits_good_product`
--
ALTER TABLE `benefits_good_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `benefits_good_product_slide`
--
ALTER TABLE `benefits_good_product_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `home_banner_th`
--
ALTER TABLE `home_banner_th`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `home_benefit_en`
--
ALTER TABLE `home_benefit_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `home_benefit_img`
--
ALTER TABLE `home_benefit_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_benefit_th`
--
ALTER TABLE `home_benefit_th`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `home_bestitems`
--
ALTER TABLE `home_bestitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_other_link`
--
ALTER TABLE `home_other_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `news_pic`
--
ALTER TABLE `news_pic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
