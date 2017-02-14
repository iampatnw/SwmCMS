-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2017 at 04:24 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_complain`
--

CREATE TABLE `tb_complain` (
  `id` int(50) NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_complain`
--

INSERT INTO `tb_complain` (`id`, `title`, `message`, `email`, `name`, `phone`, `status`) VALUES
(1, 'ร้องเรียน', '11', 'iampatnw@outlook.com', 'Pat', '0627195015', 0),
(2, 'ร้องเรียน', 'aa', 'iampatnw@outlook.com', 'aaaa', '0627195015', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_download`
--

CREATE TABLE `tb_download` (
  `id` int(50) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `document` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_download`
--

INSERT INTO `tb_download` (`id`, `name`, `date`, `type`, `document`) VALUES
(1, 'PTMR NETWORK', '12/02/2017', '1', '1486907161.pdf'),
(2, 'Patchara', '12/02/2017', '0', '1486907266.pdf'),
(3, 'PTMR NETWORK', '12/02/2017', '1', '1486907278.docx'),
(4, 'PTMR NETWORK', '12/02/2017', '0', '1486909330.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `tb_event`
--

CREATE TABLE `tb_event` (
  `id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `activities` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `time_start` time NOT NULL,
  `end` date NOT NULL,
  `time_end` time NOT NULL,
  `color` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `eventwho` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ทดสอบปฏิทิน';

--
-- Dumping data for table `tb_event`
--

INSERT INTO `tb_event` (`id`, `title`, `activities`, `start`, `time_start`, `end`, `time_end`, `color`, `location`, `eventwho`) VALUES
(1, 'กิจกรรม1.1', '<p><span style=\"color:#ff0000\">ทดสอบระบบปฏิทินกิจกรรม SWM CMS</span> --&nbsp;<span style=\"color:#0000ff\">ทดสอบระบบปฏิทินกิจกรรม SWM CMS</span></p>\\r\\n\\r\\n<p><span style=\"background-color:#00ff00\">ทดสอบระบบปฏิทินกิจกรรม&nbsp;SWM CMS</span> --&nbsp;<span style=\"background-color:#ffff00\">ทดสอบระบบปฏิทินกิจกรรม SWM CMS</span></p>\\r\\n\\r\\n<h2><span style=\"background-color:#00ffff\">ทดสอบระบบปฏิทินกิจกรรม SWM CMS</span></h2>\\r\\n\\r\\n<h2><span style=\"background-color:#40e0d0\">ทดสอบระบบปฏิทินกิจกรรม SWM CMS</span></h2>\\r\\n', '2017-01-16', '07:00:00', '2017-01-17', '17:00:00', 'C5FF12', 'เเล้วเเต่', 'PTMR NWs.'),
(2, 'กิจกรรม1.2', '<p><span style=\"color:#ff0000\">ทดสอบระบบปฏิทินกิจกรรม SWM CMS</span> --&nbsp;<span style=\"color:#0000ff\">ทดสอบระบบปฏิทินกิจกรรม SWM CMS</span></p>\\r\\n\\r\\n<p><span style=\"background-color:#00ff00\">ทดสอบระบบปฏิทินกิจกรรม&nbsp;SWM CMS</span> --&nbsp;<span style=\"background-color:#ffff00\">ทดสอบระบบปฏิทินกิจกรรม SWM CMS</span></p>\\r\\n\\r\\n<h2><span style=\"background-color:#00ffff\">ทดสอบระบบปฏิทินกิจกรรม SWM CMS</span></h2>\\r\\n\\r\\n<h2><span style=\"background-color:#40e0d0\">ทดสอบระบบปฏิทินกิจกรรม SWM CMS</span></h2>\\r\\n', '2017-01-16', '07:00:00', '2017-01-17', '17:00:00', '1CFF89', 'เเล้วเเต่', 'PTMR NWs.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_extlink`
--

CREATE TABLE `tb_extlink` (
  `id` int(10) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `ulr_web` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_guestbook`
--

CREATE TABLE `tb_guestbook` (
  `id` int(10) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `date` text COLLATE utf8_unicode_ci NOT NULL,
  `time` text COLLATE utf8_unicode_ci NOT NULL,
  `ipaddress` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_guestbook`
--

INSERT INTO `tb_guestbook` (`id`, `name`, `message`, `email`, `date`, `time`, `ipaddress`, `status`) VALUES
(1, 'Patchara Mirit', 'ทดสอบระบบสมุดเยี่ยม SWM CMS ', 'contact@patchara.in.th', '2017-01-15', '12:47:11pm', '127.0.0.1', 0),
(2, 'jirapan yankhan', 'ทดสอบระบบสมุดเยี่ยม SWM CMS', 'contact@jirapan.in.th', '2017-01-15', '12:47:26pm', '127.0.0.1', 1),
(3, 'PTMR NWs.', 'ทดสอบระบบสมุดเยี่ยม SWM CMS', 'iapatnw@outlook.com', '2017-01-15', '02:43:51pm', '127.0.0.1', 1),
(4, '', '', '', '2017-02-13', '09:22:52am', '::1', 0),
(5, '', '', '', '2017-02-13', '09:22:52am', '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_history`
--

CREATE TABLE `tb_history` (
  `id` int(11) NOT NULL,
  `toppic` text COLLATE utf8_unicode_ci NOT NULL,
  `history` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_history`
--

INSERT INTO `tb_history` (`id`, `toppic`, `history`) VALUES
(1, 'ประวัติโรงเรียน', '<h6 style=\"margin-left:-36pt; margin-right:-48.05pt\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:large\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ที่ตั้ง เลขที่ 105 หมู่ที่ 9 ตำบลบางเก่า อำเภอชะอำ จังหวัดเพชรบุรี 76120</span></span></h6>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">โรงเรียนโตนดหลวงวิทยาได้เปิดสอนเป็นการภายในเมื่อวันที่ 2 มิถุนายน พ.ศ. 2518 โดยท่านพระครูภาวนาวัชโรภาส เจ้าอาวาสวัดโตนดหลวง เป็นผู้ก่อตั้ง โดยมีการประชุมกรรมการ มีเรือตรี ดิเรก ธารภพ นายอำเภอชะอำเป็นประธาน นายจเร มาลาวงศ์ ศึกษาธิการอำเภอชะอำ เป็นรองประธานคนที่ 1 นายสุพจน์ โต๊ะเฮง หัวหน้าการประถมศึกษาอำเภอชะอำ เป็นรองประธานคนที่ 2 ได้เสนอมติที่ประชุมต่อสภาตำบลบางเก่า ในการขอจัดตั้งโรงเรียนมัธยมศึกษาประจำตำบล กับนายบัว นาเมือง (สมาชิกสภาจังหวัดเพชรบุรี) นายชวาล เสมาพิทักษ์ นายโกศล จุ้ยมี นายซ้อน กลั่นยิ่ง และนายสมศักดิ์ กลั่นยิ่ง เป็นผู้ประสานงานกับ นายปิยะ อังกินันท์ (สมาชิกสภาผู้แทนราษฎรจังหวัดเพชรบุรี) เพื่อเข้าพบนายนิพนธ์ ศศิธร รัฐมนตรีว่าการกระทรวงศึกษาธิการ รัฐมนตรีเห็นชอบเพราะตรงกับนโยบายของรัฐบาล แต่มีเงื่อนไขว่าต้องมีที่ดินไม่น้อยกว่า 35 ไร่ และจัดสร้างอาคารเรียนชั่วคราวตามแบบของกรมสามัญศึกษา จำนวน 6 ห้อง พระครูภาวนาวัชโรภาสและคณะกรรมการเป็นผู้ดำเนินการ ได้ที่ดินประมาณ 37 ไร่ อาคารเรียนชั่วคราว เป็นเงิน 108,000 บาท ไม่รวมค่าที่ดินและปรับพื้นที่</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">โรงเรียนได้รับอนุมัติให้เปิดเป็นทางการ เมื่อวันที่ 4 มิถุนายน 2518 มีนักเรียน 26 คน ชาย 20 คน หญิง 6 คน โดยนายอำเภอชะอำได้แต่งตั้ง นายสุนทร ชูช่อแก้ว ทำหน้าที่ครูใหญ่และให้ครูโรงเรียนวัดโตนดหลวง สังกัดองค์การบริหารส่วนจังหวัดร่วมทำการสอน ณ ห้องสมุดโรงเรียนวัดโตนดหลวง</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">วันที่ 1 กรกฎาคม พ.ศ. 2518 นางสาวพิมพ์นภา บ่องทรัพย์ วุฒิการศึกษา กศ.บ. มาช่วยสอน เพื่อรอการบรรจุ ( บรรจุ 18 กันยายน 2518 ) </span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ต่อมา นายสัมฤทธิ์ อินทรไพโรจน์ ได้รับการแต่งตั้งให้มาดำรงตำแหน่งครูใหญ่แทน นายสุนทร ชูช่อแก้ว เมื่อวันที่ 28 พฤศจิกายน 2518</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">วันที่ 1 พฤษภาคม พ.ศ. 2519 พระครูภาวนา วัชโรภาส ได้เริ่มปรับปรุงที่ดินและสร้างอาคารชั่วคราว โดยนายสุเทพ พูลเกิด หัวหน้ารถแทรกเตอร์ทางหลวงท้องถิ่น รวมค่าใช้จ่ายทั้งสิ้น 19,000 บาท และได้ย้ายมาเรียนในอาคารชั่วคราว ณ สถานที่แห่งใหม่ ในวันที่ 30 สิงหาคม พ.ศ. 2519 มีนักเรียน ม.1 และ ม.2 รวม 71 คน</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีงบประมาณ 2520 ได้รับงบประมาณ เป็นค่าก่อสร้างบ้านพักครู 2 หลัง บ้านพัก ภารโรง 1 หลัง และส้วม 1 หลัง</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีงบประมาณ 2523 นายสัมฤทธิ์ อินทรไพโรจน์ ครูใหญ่ได้ขอลาออกจากราชการ เนื่องจากสุขภาพไม่ดี กรมสามัญศึกษาได้แต่งตั้ง นายสุบิน โพธิ์จันทร์ มาปฏิบัติหน้าที่ครูใหญ่ เมื่อวันที่ 29 ธันวาคม พ.ศ. 2523</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ปีงบประมาน 2525 ได้รับงบประมาณ ดังนี้</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ถังน้ำฝน ศ. 33 ราคา 70,000 บาท</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ปรับปรุงใต้อาคารเรียน ราคา 85,000 บาท</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ขยายเขตไฟฟ้า ราคา 105,000 บาท</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีการศึกษา 2527 ว่าที่ ร.ต. ยุทธ นุชสวัสดิ์ ได้มารับหน้าที่อาจารย์ใหญ่แทน นายสุบิน โพธิ์จันทร์ เมื่อวันที่ 14 มิถุนายน พ.ศ. 2527 มีการเปลี่ยนแปลงที่สำคัญ ดังนี้</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ได้รับงบประมาณก่อสร้างบ้านพักครู 1 หลัง ราคา 220,000 บาท</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">เปลี่ยนชื่อจากโรงเรียนโตนดหลวง เป็นโรงเรียนโตนดหลวงวิทยา ตามประกาศของกระทรวงศึกษาธิการ ลงวันที่ 14 พฤศจิกายน 2527</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">เข้าโครงการโรงเรียนมัธยมศึกษาขนาดเล็ก รุ่นที่ 3</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ปีงบประมาณ 2529 ได้รับงบประมาณก่อสร้างอาคารโรงฝึกงาน 1 หลังราคา 780,000 บาท</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ปีงบประมาณ 2530 ได้รับงบประมาณสร้างบ้านพักครู 1 หลัง ราคา 210,000 บาท</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ปีงบประมาณ 2531 ได้รับงบประมาณก่อสร้างส้วม 1 หลัง ราคา 90,000 บาท</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ปีงบประมาณ 2532 กรมสามัญศึกษาได้อนุมัติโครงการจัดตั้งศูนย์พัฒนานักเรียนและบุคลากรกรมสามัญศึกษา ณ ที่ดินของพระครูภาวนาวัชโรภาส มอบให้ประมาณ 80 ไร่ ได้รับงบประมาณทำรั้วและปรับปรุงพื้นที่ 528,000 บาท ได้รับงบประมาณสร้างอาคารเอนกประสงค์ จำนวน 1 หลัง และได้รับงบประมาณก่อสร้าง 9,394,800 บาท</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ปีงบประมาณ 2535 ได้รับงบประมาณลาดยางถนนภายในศูนย์และปรับปรุงสนาม ณ ศูนย์พัฒนานักเรียนและบุคลากรกรมสามัญศึกษา เป็นเงิน 3,000,000 บาท</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ปีงบประมาณ 2537 ได้รับงบประมาณเป็นค่าก่อสร้างอาคาร 216 ล. ปรับปรุง 29 ราคา 7,120,000 บาท</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีการศึกษา 2537 นายสุธน เรืองเดช ได้มาดำรงตำแหน่งหน้าที่อาจารย์ใหญ่ แทนว่าที่ ร.ต. ยุทธ นุชสวัสดิ์ เมื่อวันที่ 2 มิถุนายน พ.ศ. 2537</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ปีการศึกษา 2539 นายอำนวย พลชัย ได้มาดำรงตำแหน่งหน้าที่อาจารย์ใหญ่ แทนนายสุธน เรืองเดช เมื่อวันที่ 17 พฤศจิกายน พ.ศ. 2539</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีการศึกษา 2543 นายสนธิชัย ผ่องฤกษ์ ได้มาดำรงตำแหน่งหน้าที่อาจารย์ใหญ่ แทน นายอำนวย พลชัย เมื่อวันที่ 14 กรกฎาคม พ.ศ. 2543</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีการศึกษา 2545 โรงเรียนได้ผ่านเกณฑ์การประเมินการขอปรับปรุงกำหนดตำแหน่งผู้บริหารสถานศึกษา มีนายสนธิชัย ผ่องฤกษ์ ดำรงตำแหน่งเป็น ผู้อำนวยการโรงเรียน โตนดหลวงวิทยาและ นายกุศล น่วมมะโน ดำรงตำแหน่งเป็นรองผู้อำนวยการโรงเรียนโตนดหลวงวิทยา</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีการศึกษา 2547 โรงเรียนเข้ารับการประเมินภายนอกจาก สมศ.</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีการศึกษา 2548 คณะครูในโรงเรียนผ่านการประเมินวิทยฐานะ ชำนาญการ ทั้งสิ้น 16 คน</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีการศึกษา 2549 นางวัลลภา น่วมมะโน ครูผู้สอนคณิตศาสตร์ ผ่านการประเมินเลื่อนเป็นวิทยฐานะชำนาญการพิเศษ 1 คน</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีการศึกษา 2549 โรงเรียนเข้ารับการประเมินภายนอกจาก สมศ. </span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีการศึกษา 2550 นายสมชาย ครึกครื้น ได้มาดำรงตำแหน่งผู้อำนวยการโรงเรียน แทน นายสนธิชัย ผ่องฤกษ์ ที่เกษียณอายุราชการ โดยเดินทางมารับตำแหน่งเมื่อวันที่ 12 พฤศจิกายน 2550</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีการศึกษา 2551 นางสาวชุติมน ม่วงมงคล ครูผู้สอนคณิตศาสตร์ และนางอรัญญา มหาแก้ว ครูผู้สอนภาษาไทย ผ่านการประเมินเลื่อนเป็นวิทยฐานะชำนาญการพิเศษ 2 คน</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีการศึกษา 2552 นายโกวิท กรีทวี ได้ย้ายมาดำรงตำแหน่งเป็นผู้อำนวยการโรงเรียนโตนดหลวงวิทยา แทนนายสมชาย ครึกครื้น โดยเดินทางมารับตำแหน่งเมื่อวันที่ 14 กรกฎาคม 2552 </span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีการศึกษา 2552 นายเสน่ห์ บุญชู ครูผู้สอนงานช่าง ผ่านการประเมินเลื่อนเป็นวิทยฐานะชำนาญการพิเศษ </span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีการศึกษา 2553 นางสาวจุฑามาส พุ่มสวัสดิ์ ครูผู้สอนคอมพิวเตอร์ และนางประไพ ทองบ่อ ครูผู้สอนสังคมศึกษา ผ่านการประเมินเลื่อนเป็นวิทยฐานะชำนาญการพิเศษ 2 คน</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีการศึกษา 2554 นายสุรชัย ภูขามคม ครูผู้สอนกลุ่มสาระการเรียนรู้การงานอาชีพและ เทคโนโลยี และนางสุรีย์ ขันตีเรือง ครูผู้สอนกลุ่มสาระการเรียนรู้สุขศึกษาและพลศึกษา ผ่าน การประเมินเลื่อนเป็นวิทยฐานะชำนาญการพิเศษ 2 คน</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีการศึกษา 2554 โรงเรียนเข้ารับการประเมินภายนอกจาก สมศ. (รอบที่ 3)</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีการศึกษา 2555 โรงเรียนเข้ารับการประเมินสถานศึกษาพอเพียง และโครงการธรรมจารี</span></p>\\n\\n<p style=\"margin-left:31.5pt; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีการศึกษา 2556 โรงเรียนได้รับการคัดเลือกเป็นโรงเรียนนำร่องทักษะงานทักษะชีวิต </span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีการศึกษา 2556 นายกุศล น่วมมะโน ได้ย้ายมาดำรงตำแหน่งเป็นผู้อำนวยการโรงเรียนโตนดหลวงวิทยา แทนนายโกวิท กรีทวี โดยเดินทางมารับตำแหน่งเมื่อวันที่ 12 ธันวาคม 2556</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีการศึกษา 2556 นางปุณยา จารุแพทย์ ครูผู้สอนกลุ่มสาระการเรียนรู้ภาษาต่างประเทศ ผ่านการประเมินเลื่อนเป็นวิทยฐานะชำนาญการพิเศษ </span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ในปีการศึกษา 2556 โรงเรียนผ่านการประเมินสถานศึกษาพอเพียง</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ปีงบประมาณ 2556 ได้รับงบประมาณ เป็นค่าก่อสร้างห้องน้ำชาย 1 หลัง ราคา 442,000 บาท</span></p>\\n\\n<p style=\"margin-left:0cm; margin-right:-2.3pt\"><span style=\"font-family:Comic Sans MS,cursive\">ปัจจุบันโรงเรียนโตนดหลวงวิทยา จัดการศึกษาทั้งระดับมัธยมศึกษาตอนต้น และมัธยมศึกษาตอนปลาย เป็นโรงเรียนแบบสหศึกษา มีอาคารเรียน </span></p>\\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_info`
--

CREATE TABLE `tb_info` (
  `id` int(10) NOT NULL,
  `school_th` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `school_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `school_cate` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `school_area` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(500) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL,
  `schooltype` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `bday` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `founder_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `llicensee_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `tumbol` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `amphur` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `fax` text COLLATE utf8_unicode_ci NOT NULL,
  `manager` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `phone_dir` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_info`
--

INSERT INTO `tb_info` (`id`, `school_th`, `school_en`, `school_cate`, `school_area`, `course`, `schooltype`, `bday`, `founder_name`, `llicensee_name`, `address`, `tumbol`, `amphur`, `province`, `zipcode`, `phone`, `fax`, `manager`, `phone_dir`, `email`) VALUES
(1, 'SWM CMS', 'SWM CMS', '2', '10', 'มัธยมศึกษาปีที่ 1-6', '1', '2 มิ.ย. 2518', '', '', '43', 'บางเก่า', 'ชะอำ', 'เพชรบุรี', '7610', '062-7195015', '032503212', '---------------------', '062-7195015', 'contace@patchara.in.th');

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `id` int(10) NOT NULL,
  `toppic` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `news` text COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`id`, `toppic`, `news`, `picture`, `file`, `date`) VALUES
(1, 'แจ้ง....1.1', '<p>แจ้ง....1.1แจ้ง....1.1แจ้ง....1.1แจ้ง....1.1แจ้ง....1.1แจ้ง....1.1แจ้ง....1.1แจ้ง....1.1</p>\\r\\n\\r\\n<p>แจ้ง....1.1แจ้ง....1.1แจ้ง....1.1แจ้ง....1.1แจ้ง....1.1แจ้ง....1.1แจ้ง....1.1แจ้ง....1.1แจ้ง....1.1</p>\\r\\n\\r\\n<p>แจ้ง....1.1แจ้ง....1.1แจ้ง....1.1แจ้ง....1.1แจ้ง....1.1แจ้ง....1.1แจ้ง....1.1แจ้ง....1.1</p>\\r\\n\\r\\n<p>&nbsp;</p>\\r\\n', '', '', '16 ม.ค. 60'),
(2, 'แจ้ง....1.2', '<p>แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2</p>\\r\\n\\r\\n<p>แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2</p>\\r\\n\\r\\n<p>แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2</p>\\r\\n', '', '', '16 ม.ค. 60'),
(3, 'แจ้ง....1.3', '<p>แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2</p>\\r\\n\\r\\n<p>แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2</p>\\r\\n\\r\\n<p>แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2</p>\\r\\n\\r\\n<p>แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2แจ้ง....1.2</p>\\r\\n', '', '', '16 ม.ค. 60'),
(4, 'แจ้ง....1.4', '<p>แจ้ง....1.4แจ้ง....1.4แจ้ง....1.4แจ้ง....1.4แจ้ง....1.4แจ้ง....1.4แจ้ง....1.4แจ้ง....1.4แจ้ง....1.4</p>\\r\\n\\r\\n<p>แจ้ง....1.4แจ้ง....1.4แจ้ง....1.4แจ้ง....1.4แจ้ง....1.4แจ้ง....1.4แจ้ง....1.4แจ้ง....1.4</p>\\r\\n\\r\\n<p>แจ้ง....1.4แจ้ง....1.4แจ้ง....1.4แจ้ง....1.4แจ้ง....1.4แจ้ง....1.4แจ้ง....1.4แจ้ง....1.4แจ้ง....1.4</p>\\r\\n', '', '', '16 ม.ค. 60');

-- --------------------------------------------------------

--
-- Table structure for table `tb_webinfo`
--

CREATE TABLE `tb_webinfo` (
  `id` int(10) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `bgcolor` text COLLATE utf8_unicode_ci NOT NULL,
  `imgbg` text COLLATE utf8_unicode_ci NOT NULL,
  `textruns` text COLLATE utf8_unicode_ci NOT NULL,
  `footer` text COLLATE utf8_unicode_ci NOT NULL,
  `fbfanpage` text COLLATE utf8_unicode_ci NOT NULL,
  `menubarcolor` text COLLATE utf8_unicode_ci NOT NULL,
  `menucolor` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_webinfo`
--

INSERT INTO `tb_webinfo` (`id`, `title`, `description`, `keywords`, `bgcolor`, `imgbg`, `textruns`, `footer`, `fbfanpage`, `menubarcolor`, `menucolor`) VALUES
(1, 'SWM CMS ระบบเว็บไซต์โรงเรียนสำเร็จรูป', 'SWM CMS ระบบเว็บไซต์โรงเรียนสำเร็จรูป', 'SWM CMS ระบบเว็บไซต์โรงเรียนสำเร็จรูป               ', 'FF7712', 'bg.jpg', 'SWM CMS ระบบเว็บไซต์โรงเรียนสำเร็จรูป', '<h3 style=\"text-align:center\"><span style=\"color:#ff0000\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\">SWM CMS ระบบเว็บไซต์โรงเรียนสำเร็จรูป</span></span></span></h3>\r\n', 'https://www.facebook.com/SWM-CMS-392856094394605/', '', ''),
(2, '-', '-', '-', 'B5FFF3', '1486901376.jpg', '-', '-', '-', '190FFF', 'FF6700');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_complain`
--
ALTER TABLE `tb_complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_download`
--
ALTER TABLE `tb_download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_extlink`
--
ALTER TABLE `tb_extlink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_guestbook`
--
ALTER TABLE `tb_guestbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_history`
--
ALTER TABLE `tb_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_info`
--
ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_webinfo`
--
ALTER TABLE `tb_webinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_complain`
--
ALTER TABLE `tb_complain`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_download`
--
ALTER TABLE `tb_download`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_extlink`
--
ALTER TABLE `tb_extlink`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_guestbook`
--
ALTER TABLE `tb_guestbook`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_history`
--
ALTER TABLE `tb_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_info`
--
ALTER TABLE `tb_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_webinfo`
--
ALTER TABLE `tb_webinfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
