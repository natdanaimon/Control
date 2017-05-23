-- phpMyAdmin SQL Dump
-- version 4.7.0-beta1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2017 at 06:09 PM
-- Server version: 5.5.52-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_control`
--

-- --------------------------------------------------------

--
-- Table structure for table `analyze`
--

CREATE TABLE `analyze` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `league` varchar(250) NOT NULL,
  `team_1` varchar(250) NOT NULL,
  `team_msg_1` varchar(250) NOT NULL,
  `team_2` varchar(250) NOT NULL,
  `team_msg_2` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `score` varchar(250) NOT NULL,
  `detail` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `analyze`
--

INSERT INTO `analyze` (`id`, `date`, `time`, `league`, `team_1`, `team_msg_1`, `team_2`, `team_msg_2`, `price`, `score`, `detail`) VALUES
(8, '2016-01-10', '21:23:00', '10', '5', '', '6', '', '5/5', '0-5', 'ทดสอบข้อความว่าสามารถยาวได้กี่ข้อความ'),
(9, '2016-01-10', '21:24:00', '11', '10', '', '8', '', '1', 'N/A*', ''),
(10, '2016-01-10', '21:24:00', '10', '6', '', '7', '', '1', 'N/A', ''),
(11, '2016-01-10', '23:16:00', '10', '5', '', '7', '', '1', 'N/A', ''),
(12, '2016-01-10', '23:17:00', '10', '5', '', '6', '', '1', '์์N/A', ''),
(13, '2016-01-10', '23:17:00', '10', '6', '', '7', '', '1', '์์N/A', ''),
(14, '2016-01-10', '23:17:00', '10', '7', '', '5', '', '1', '์์N/A', '');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `acc_name` varchar(50) NOT NULL,
  `acc_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `bank_name`, `acc_name`, `acc_no`) VALUES
(9, 'kbank', 'นาย สมชาย แสงคำ', '9999-9999-9999'),
(12, 'kbank', 'นาย เกรียติก้อง สิงค์หาคำ', '8888-8888-8888'),
(13, 'bbl', 'นาย อาคม สีรบุตร', '7777-7777-777'),
(14, 'scb', 'นาย อาทิตย์ อาจณรงค์', '6666-6666-6666');

-- --------------------------------------------------------

--
-- Table structure for table `bank2user`
--

CREATE TABLE `bank2user` (
  `id` int(11) NOT NULL,
  `i_id` int(11) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `s_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank2user`
--

INSERT INTO `bank2user` (`id`, `i_id`, `bank_name`, `s_user`) VALUES
(13, 10, '', 'user001'),
(14, 9, '', 'user001'),
(15, 11, '', 'user001'),
(16, 9, '', 'user002'),
(17, 9, '', 'ufa001'),
(18, 14, '', 'ufa001'),
(19, 9, '', 'ufa002'),
(20, 13, '', 'ufa002'),
(21, 14, '', 'ufa002');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `i_id` int(11) NOT NULL,
  `s_user` varchar(250) NOT NULL,
  `s_bill_no` varchar(20) NOT NULL,
  `d_start` datetime NOT NULL,
  `d_end` datetime NOT NULL,
  `f_accu` double NOT NULL,
  `f_accu_pay` double NOT NULL,
  `s_status` varchar(3) NOT NULL,
  `s_clear` varchar(1) NOT NULL,
  `s_subuser` varchar(50) NOT NULL,
  `d_create` datetime NOT NULL,
  `d_change` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`i_id`, `s_user`, `s_bill_no`, `d_start`, `d_end`, `f_accu`, `f_accu_pay`, `s_status`, `s_clear`, `s_subuser`, `d_create`, `d_change`) VALUES
(38, 'ufa001', '20170312140123', '2017-03-12 00:00:00', '2017-03-14 00:00:00', 70000, 0, 'Y', 'N', '', '2017-03-12 07:01:36', '2017-03-19 10:04:15'),
(39, 'ufa002', '20170312140328', '2017-03-12 00:00:00', '2017-03-17 00:00:00', 0, 0, 'N', 'N', '', '2017-03-12 07:03:33', '2017-03-12 07:03:33'),
(40, 'ufa002', '20170524003528', '2017-05-10 00:00:00', '2017-05-26 00:00:00', 5550550, 0, 'Y', 'N', '', '2017-05-23 17:35:33', '2017-05-23 17:36:29'),
(41, 'ufa002', '20170524003536', '2017-05-24 00:00:00', '2017-05-24 00:00:00', 500, 0, 'Y', 'N', '', '2017-05-23 17:35:43', '2017-05-23 17:36:30'),
(42, 'ufa002', '20170524003912', '2017-05-23 00:00:00', '2017-05-23 00:00:00', 0, 0, 'N', 'N', '', '2017-05-23 17:39:18', '2017-05-23 17:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `i_id` int(11) NOT NULL,
  `s_bill_no` varchar(250) NOT NULL,
  `i_reference` int(250) NOT NULL,
  `s_dname` varchar(100) NOT NULL,
  `f_debit` double NOT NULL,
  `f_credit` double NOT NULL,
  `f_debit_pay` double NOT NULL,
  `f_credit_pay` double NOT NULL,
  `user_sub` varchar(50) NOT NULL,
  `sort` int(11) NOT NULL,
  `s_status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`i_id`, `s_bill_no`, `i_reference`, `s_dname`, `f_debit`, `f_credit`, `f_debit_pay`, `f_credit_pay`, `user_sub`, `sort`, `s_status`) VALUES
(167, '20170312140123', 31, 'sdk299', 50000, 0, 0, 0, '', 0, 'N'),
(168, '20170312140123', 31, 'opd559', 0, 30000, 0, 0, '', 0, 'N'),
(169, '20170312140123', 32, 'sdk299', 25000, 0, 0, 0, '', 0, 'N'),
(170, '20170312140123', 37, 'opd559', 0, 30000, 0, 0, '', 0, 'N'),
(171, '20170312140123', 38, 'sdk299', 60000, 0, 0, 0, '', 0, 'N'),
(172, '20170312140328', 39, 'gc109', 20000, 0, 0, 0, '', 0, 'N'),
(173, '20170312140328', 39, 'yte889', 30000, 0, 0, 0, '', 0, 'N'),
(174, '20170312140328', 39, 'werty199', 0, 10000, 0, 0, '', 0, 'N'),
(175, '20170312140328', 41, 'gc109', 0, 5000, 0, 0, '', 0, 'N'),
(176, '20170524003528', 31, 'fasdfsd', 5555550, 0, 0, 0, '', 0, 'N'),
(177, '20170524003536', 31, 'aaa', 1000, 0, 0, 0, '', 0, 'N'),
(178, '20170524003912', 31, '1', 10, 0, 0, 0, '', 0, 'N'),
(179, '20170524003912', 32, '2', 100, 0, 0, 0, '', 0, 'N'),
(180, '20170524003912', 33, '3', 1000, 0, 0, 0, '', 0, 'N'),
(181, '20170524003912', 34, '4', 10000, 0, 0, 0, '', 0, 'N'),
(182, '20170524003912', 35, '5', 100000, 0, 0, 0, '', 0, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `exchange`
--

CREATE TABLE `exchange` (
  `id` int(11) NOT NULL,
  `silver` varchar(10) DEFAULT NULL,
  `gold` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exchange`
--

INSERT INTO `exchange` (`id`, `silver`, `gold`) VALUES
(1, '1000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `team1` varchar(100) DEFAULT NULL,
  `team2` varchar(100) DEFAULT NULL,
  `img1` varchar(100) DEFAULT NULL,
  `img2` varchar(100) DEFAULT NULL,
  `d_post` date DEFAULT NULL,
  `score1` int(11) DEFAULT NULL,
  `score2` int(11) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `win` varchar(45) DEFAULT NULL,
  `bargain` varchar(100) DEFAULT NULL,
  `bargain_team` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `var` varchar(45) DEFAULT NULL,
  `thai` varchar(100) DEFAULT NULL,
  `eng` varchar(100) DEFAULT NULL,
  `page` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `var`, `thai`, `eng`, `page`) VALUES
(1, 'full_screen', 'เปิดเต็มหน้าจอ', 'Full Screen', 'menu_header'),
(2, 'lock_screen', 'ล็อคหน้าจอ', 'Lock Screen', 'menu_header'),
(3, 'logout', 'ออกจากระบบ', 'Logout', 'menu_header'),
(4, 'home', 'หน้าหลัก', 'Home', 'menu_left'),
(5, 'setting', 'ตั้งค่า', 'Setting', 'menu_left'),
(6, 'user', 'ข้อมูลผู้ใช้งาน', 'User', 'menu_left'),
(7, 'level', 'เลเวล', 'Level', 'menu_left'),
(8, 'add_user', 'เพิ่มผู้ใช้งาน', 'Add User', 'user'),
(9, 'tb_u_profile', 'โปรไฟล์', 'Profile', 'user'),
(10, 'tb_u_user', 'ชื่อผู้ใช้งาน', 'User Name', 'user'),
(11, 'tb_u_pass', 'รหัสผ่าน', 'Password', 'user'),
(12, 'tb_u_fname', 'ชื่อ', 'Frist Name', 'user'),
(13, 'tb_u_lname', 'นามสกุล', 'Last Name', 'user'),
(14, 'm_action', 'การกระทำ', 'Action', 'user'),
(15, 'action_detail', 'รายละเอียด', 'Detail', 'all'),
(16, 'action_edit', 'แก้ไข', 'Edit', 'all'),
(17, 'action_delete', 'ลบ', 'Delete', 'all'),
(18, 'edit_user', 'แก้ไขข้อมูลผู้ใช้งาน', 'Edit User', 'user'),
(19, 'action_save', 'บันทึก', 'Save', 'all'),
(20, 'action_close', 'ปิด', 'Close', 'all'),
(21, 'alert_add', 'บันทึกข้อมูล เรียบร้อยแล้ว !!!', 'Add data Success. !!!', 'all'),
(22, 'alert_edit', 'แก้ไขข้อมูล เรียบร้อยแล้ว !!!', 'Edit data Success', 'all'),
(23, 'alert_error', 'เกิดข้อผิดพลาดในการใช้งาน !!!', 'Error data Fail !!!', 'all'),
(24, 'alert_delete', 'ลบข้อมูล เรียบร้อยแล้ว !!!', 'Delete data Success !!!', 'all'),
(25, 'add_level', 'เพิ่มเลเวลเกม', 'Add Level Game', 'level'),
(26, 'tb_l_picture', 'รูปไอคอน', 'Icon', 'level'),
(27, 'tb_l_start', 'คะแนนเริ่มต้น', 'Score Start', 'level'),
(28, 'tb_l_end', 'คะแนนสิ้นสุด', 'Score End', 'level'),
(29, 'tb_l_point', 'ตำแหน่ง', 'Level Name', 'level'),
(30, 'tb_l_number', 'จำนวณไอคอน', 'Icon No.', 'level'),
(31, 'edit_level', 'แก้ไขข้อมูลเลเวล', 'Edit Level', 'level'),
(32, 'Exchange', 'แลกเปลี่ยนเงิน', 'Exchange', 'menu_left'),
(33, 'game', 'เกม', 'Game', 'menu_left'),
(36, 'msgExchange', 'อัตราการแลกเปลี่ยน', 'Exchange rate', 'Exchange'),
(34, 'post_game', 'สร้างเกมทายผลบอล', 'Create Game', 'menu_left'),
(35, 'history_game', 'ประวัติเกมทายผลบอล', 'History Game', 'menu_left'),
(37, 'new', 'ข่าว', 'News', 'menu_left'),
(38, 'post_new', 'ประกาศข่าว', 'News Anchor', 'menu_left'),
(39, 'add_new', 'เพิ่มข่าวประกาศ', 'Add News Anchor', 'news'),
(40, 'no', 'ลำดับ', 'No.', 'tb_news'),
(41, 'topic', 'หัวข้อข่าว', 'Topic News', 'tb_news'),
(42, 'detail', 'รายละเอียด', 'Detail', 'tb_news'),
(43, 'date', 'วันที่โพส', 'Post Date', 'tb_news'),
(44, 'time', 'เวลาที่โพส', 'Post Time', 'tb_news'),
(45, 'btn_clear', 'ยกเลิก', 'Clear', 'news'),
(46, 'edit_news', 'แก้ไขข่าวประกาศ', 'Edit News Anchor', 'news'),
(47, 'League', 'ฟุตบอลลีก', 'Football League', 'league.php'),
(48, 'football', 'ฟุตบอล', 'Footbal', 'league.php'),
(49, 'add_league', 'เพิ่มฟตุบอลลีก', 'Add Football League', 'league.php'),
(50, 'team', 'ทีม', 'Team', 'team.php'),
(51, 'add_team', 'เพิ่มทีม', 'Add Team', 'team.php'),
(52, 'team_name', 'ชื่อทีม', 'Team Name', 'team.php'),
(56, 'date_analyze', 'วันที่วิเคราะห์ผลบอล', 'Date', 'analyze.php'),
(54, 'analyze', 'วิเคราะห์ผลบอล', 'Football Analyze', 'analyze.php'),
(55, 'analyze_add', 'เพิ่มวิเคราะห์ผลบอล', 'Add Football Analyze', 'analyze.php'),
(57, 'time_analyze', 'เวลาแข่งขัน', 'Time', 'analyze.php'),
(58, 'home_team', 'ทีมเหย้า', 'Home Team', 'analyze.php'),
(59, 'away_team', 'ทีมเยือน', 'Away Team', 'analyze.php'),
(60, 'price', 'ราคาต่อรอง', 'Price', 'analyze.php'),
(61, 'score', 'ผลบอล', 'Score', 'analyze.php'),
(62, 'attitude', 'ทรรศนะ', 'Attitude', 'analyze.php'),
(63, 'last_home', 'ข้อความต่อท้ายทีเหย้า', 'Last Message Home Team', 'analyze.php'),
(64, 'last_away', 'ข้อความต่อท้ายทีมเยือน', 'Last Message Away Team', 'analyze.php'),
(65, 'select_league', 'เลือกลีกฟุตบอล ...', 'Select League ...', 'analyze.php'),
(66, 'select_team', 'เลือกทีมฟุตบอล ...', 'Select Team ...', 'analyze.php'),
(67, 'edit_analyze', 'แก้ไขข้อมูลการวิเคราะห์ผลบอล', 'Edit Football Analyze', 'modal_analyze.php'),
(68, 'setting_room', 'ห้องพัก', 'Room', 'setting_room.php'),
(69, 'room_type', 'ประเภทห้องพัก', 'Room Type', 'setting_room.php'),
(70, 'room_price', 'ราคาห้องพัก', 'Room Price', 'setting_room.php'),
(71, 'add_room_type', 'เพิ่มประเภทห้องพัก', 'Add Room Type', 'setting_room.php'),
(72, 'discount', 'ส่วนลด', 'Discount', 'setting_room.php'),
(73, '_AddWeb', 'เพิ่มเว็บไซต์สำหรับผู้ใช้งาน', 'Add Website to User', 'user'),
(74, 'tb_u_phone', 'เบอร์โทรศัพท์', 'Phone Number', 'user.php'),
(75, '_web', 'ข้อมูลเว็บไซต์', 'Website', 'left.menu.php'),
(76, '_webgame', 'ทางเข้าเว็บไซต์', 'URL Website', 'left_menu.php'),
(78, '_newpopup', 'ข่าวประกาศ', 'Popup News', NULL),
(79, '_billcreate', 'สร้างการวางบิล', 'Service Create Billing', 'left_menu.php'),
(80, '_billsearch', 'ค้นหาบิลเรียกเก็บเงิน', 'Service Search Billing', 'left_menu.php'),
(81, '_bill', 'บิลเรียกเก็บเงิน', 'Service Billing', NULL),
(82, '_contact', 'ติดต่อเจ้าหน้าที่', 'Contact', 'left_menu'),
(83, '_contactADM', 'ข้อมูลการติดต่อจากผู้ใช้งาน', 'Contact info from users', 'left_menu.php'),
(84, '_sport', 'เดิมพันกีฬาออนไลน์', 'Sport betting online', NULL),
(85, '_casino', 'คาสิโนออนไลน์', 'Casino online', NULL),
(86, '_webadd', 'เพิ่มข้อมูลเว็บไซต์', 'Add Website', NULL),
(87, '_webno', 'รหัสเว็บไซต์', 'Web No.', NULL),
(88, '_webname', 'ชื่อเว็บไซต์', 'Website Name', NULL),
(89, '_status', 'สถานะ', 'Status', NULL),
(90, '_datecreate', 'วันที่สร้าง', 'Date Create', NULL),
(91, '_datechange', 'วันที่แก้ไข', 'Date Change', NULL),
(92, '_webedit', 'แก้ไขข้อมูลเว็บไซต์', 'Edit Website', NULL),
(93, '_search_user', 'ค้นหาข้อมูลผู้ใช้งาน', 'Search for User', NULL),
(94, '_type', 'ประเภท', 'Type', NULL),
(95, '_add_weburl', 'เพิ่มลิ้ง', 'Add Links', NULL),
(96, '_typeurl', 'ประเภทลิ้งเว็บไซต์', 'URL Type', NULL),
(97, '_edit_weburl', 'แก้ไขทางเข้าเว็บไซต์', 'Edit URL Website', NULL),
(98, '_image', 'รูปภาพ', 'Image', NULL),
(99, '_btn_content', 'เพิ่มเนื้อหาเว็บไซต์', 'Add Content', NULL),
(100, '_page_agent', 'หน้าสำหรับตัวแทน', 'Page for Agent', NULL),
(101, '_page_member', 'หน้าสำหรับสมาชิก', 'Page for Member', NULL),
(102, '_linkurl', 'ลิ้งค์', 'Link', NULL),
(103, '_link_by_agent', 'ลิ้งค์สำหรับตัวแทน', 'Link for Agent', NULL),
(104, '_link_by_member', 'ลิ้งค์สำหรับผู้ใช้งาน', 'Link for Member', NULL),
(105, '_form_user', 'ชื่อผู้ใช้งาน', 'Username', NULL),
(106, '_form_d_start', 'วันที่เรื่มต้น', 'Date Start', NULL),
(107, '_form_d_end', 'วันที่สิ้นสุด', 'Date End', NULL),
(108, '_form_tmp_balance_credit', 'ยอดเงินที่แจ้งในบิล ( - )', 'Balance on Billing ( - )', NULL),
(109, '_form_tmp_balance_debit', 'ยอดเงินที่แจ้งในบิล ( + )', 'Balance on Billing ( + )', NULL),
(110, '_form_balance_credit', 'ยอดเงินที่จ่ายจริง ( - )', 'Balance Pay ( - )', NULL),
(111, '_form_balance_debit', 'ยอดเงินที่จ่ายจริง ( + )', 'Balance Pay ( + )', NULL),
(112, '_step', 'ขั้นตอนที่', 'Step', NULL),
(113, '_form_account_pro', 'รายละเอียดเกี่ยวกับบัญชี', 'Provide your account details', NULL),
(114, '_form_account_set', 'บัญชี', 'Account Setup', NULL),
(115, '_form_bill_set', 'บิล', 'Billing Setup', NULL),
(116, '_form_bill_pro', 'รายละเอียดเกี่ยวกับบิล', 'Information on Bill', NULL),
(117, '_confirm', 'ยืนยัน', 'Confirm', NULL),
(118, '_back', 'ย้อนกลับ', 'Back', NULL),
(119, '_continue', 'ทำต่อ', 'Continue', NULL),
(120, '_confirm_info', 'ยืนยันข้อมูลการสร้างบิล', 'Confirm Info Billing', NULL),
(121, '_result_pro', 'สรุป', 'Result Billing', NULL),
(122, '_result', 'สรุปยอดเงินทั้งหมด', 'Result', NULL),
(123, '_bath', 'บาท', 'ฺBath', NULL),
(124, '_billno', 'เลขที่บิล', 'Bill No.', NULL),
(125, '_edit_bill_head', 'แก้ไขการวางบิล', 'Service Edit Billing', NULL),
(126, '_confirm_edit_bill', 'ยืนยันการแก้ไขบิล', 'Confirm Edit Billing', NULL),
(127, '_payment', 'ชำระเงิน', 'Payment', NULL),
(128, '_msg_accu', 'บิลนี้มียอดค้างชำระ', 'Overdue', NULL),
(129, '_pay_accu', 'ชำระเงินส่วนที่ค้าง', 'Pay Overdue', NULL),
(130, '_address', 'ที่อยู่', 'Address', NULL),
(131, '_view', 'ดูรายละเอียด', 'View', NULL),
(132, '_latest', 'ข้อมูลล่าสุด 10 อันดับ', 'Latest Billing Top 10', NULL),
(133, '_detailbill', 'รายละเอียดช่วงวันที่ของบิล', 'Detail Billing Date', NULL),
(134, '_overdue', 'ค้างชำระ', 'Overdue', NULL),
(135, '_detail_sum', 'สรุปรวม', 'Total Summary', NULL),
(136, '_detail_debit', 'จำนวนเงินที่ได้รับ', 'Debit Amount', NULL),
(137, '_detail_credit', 'จำนวนเงินที่จ่าย', 'Credit Amount', NULL),
(138, '_detail_total', 'จำนวนเงินสุทธิ', 'Total', NULL),
(139, '_detail_overdue', 'จำนวนเงินค้างชำระ', 'Overdue', NULL),
(140, '_searchALL', 'ต้นหาทั้งหมด', 'Search ALL', NULL),
(141, '_tb_result', 'ตารางสรุปผลรวม', 'Table Result', NULL),
(142, '_trends', 'แนวโน้ม', 'Trends', NULL),
(143, '_msg_wait', 'อยู่ระหว่างการดำเนินการ', 'Waiting', NULL),
(144, '_msg_success', 'ชำระเงินเรียบร้อยแล้ว', 'Completed', NULL),
(145, '_th_wait', 'ตารางแสดงบิลที่อยู่ในระหว่างดำเนินการ', 'Table Bill Waiting', NULL),
(146, '_th_overdue', 'ตารางแสดงบิลที่ยังค้างชำระ', 'Table Bill Overdue', NULL),
(147, '_th_top5', 'ตารางแสดงรายการบิลล่าสุด 5 อันดับ', 'Table Bill Top 5', NULL),
(154, '_searchall', 'ค้นหาทั้งหมด', 'View ALL', NULL),
(148, '_result_total', 'ผลรวมทั้งหมด', 'Result Total', NULL),
(149, '_cash_balance', 'ยอดปัจจุบัน', 'Cash Balance', NULL),
(150, '_outstanding', 'ยอดค้างชำระทั้งหมด', 'OUTSTANDING', NULL),
(151, '_total', 'รวมเงินทั้งหมด', 'TOTAL', NULL),
(152, '_bill_no', 'เลขที่บิล', 'Bill No.', NULL),
(153, '_daterange', 'ช่วงวันที่', 'Date Range', NULL),
(155, '_searchall', 'ต้นหาทั้งหมด', 'View ALL', NULL),
(156, '_winlose', 'ชนะ/แพ้', 'Win/Lose', NULL),
(157, '_tbbill', 'ตารางบิล', 'Table Bill', NULL),
(158, '_msg_overdue', 'ยอดค้างชำระ', 'Overdue', NULL),
(159, '_tb_game_all', 'ตารางสรุปผลเว็บไซต์ทั้งหมด', 'Table Result All Website', NULL),
(160, '_changepic', 'เปลี่ยนรูปภาพ', 'Change Picture', NULL),
(161, '_agents', 'เอเจนท์', 'Agent', NULL),
(162, '_members', 'สมาชิก', 'Member', NULL),
(163, '_details', 'รายละเอียด', 'Detail', NULL),
(164, '_contract', 'ติดต่อเจ้าหน้าที่', 'Contact Us', NULL),
(165, '_usertest', 'ข้อมูลสำหรับทดสอบ', 'User Test', NULL),
(166, '_links_agent', 'ลิ้งค์เอเจนท์', 'Links Agent', NULL),
(167, '_links_member', 'ลิ้งค์สมาชิก', 'Links Member', NULL),
(168, '_phone', 'เบอร์โทรศัพท์', 'PHONE', NULL),
(169, '_mail', 'อีเมล', 'E-Mail', NULL),
(170, '_line', 'ไลน์', 'LINE', NULL),
(171, '_subjectmail', 'หัวข้อ', 'Subject', NULL),
(172, '_msgdetail', 'ข้อความ', 'Message', NULL),
(173, '_action_send', 'ส่งอีเมล', 'Send', NULL),
(174, '_action_cancel', 'ยกเลิก', 'Cancel ', NULL),
(175, '_alert_mail_success', 'ส่งอีมเล์สำเสร็จ', 'Send E-Mail Success !!!', NULL),
(176, '_alert_mail_fail', 'ส่งอีมเล์ไม่สำเร็จ', 'Send E-Mail Failed !!!', NULL),
(177, '_editProfile', 'ข้อมูลส่วนตัว', 'Profile', NULL),
(178, '_acteditprofile', 'แก้ไขข้อมูลส่วนตัว', 'Edit Profile', NULL),
(179, '_bank', 'บัญชีธนาคาร', 'Bank Account', NULL),
(180, '_bankname', 'ชื่อธนาคาร', 'Bank Name', NULL),
(181, '_bank_acc', 'ชื่อบัญชีธนาคาร', 'Bank Account Name', NULL),
(182, '_bank_number', 'เลขที่บัญชี', 'Bank Number', NULL),
(183, 'act_addbank', 'เพิ่มบัญชีธนาคาร', 'Add Bank', NULL),
(184, '_changepass', 'แก้ไขรหัสผ่าน', 'Change Password', NULL),
(185, '_cp_msg1', 'Confirm Password ไม่ถูก', 'The password confirmation is incorrect.', NULL),
(186, '_cp_msg2', 'กรุณาใส่ข้อมูลให้ครบถ้วน', 'Please enter the required information', NULL),
(187, '_cp_msg3', 'Password ปัจจุบันไม่ถูกต้อง', 'The current password is incorrect.', NULL),
(188, '_bank2user', 'เพิ่มบัญชีสำหรับผู้ใช้งาน', 'Add Bank to User', NULL),
(189, 'clearall', 'ล้างยอดเงินผู้ใช้ทั้งหมด', 'Clear Money All User', NULL),
(190, 'clear', 'ล้างยอดเงิน', 'Clear Money', NULL),
(191, 'txtClearALL', 'ยืนยันการเคลียข้อมูลยอดเงินทั้งหมด ณ ปัจจุบัน ของผู้ใช้ทุกรายการ', 'Confirm Clear All Money (All User)', NULL),
(192, 'txtClear', 'ยืนยันการเคลียข้อมูลยอดเงินทั้งหมด ณ ปัจจุบัน ของผู้ใช้งานรายนี้', 'Confirm Clear All Money (By User)', NULL),
(193, 'clearShow', 'บิลถูกล้างแล้ว', 'Clear Billing', NULL),
(194, 'sub_user', 'ผู้ใช้รายย่อย', 'Sub User', NULL),
(195, 'add_usersub', 'เพิ่มผู้ใช้รายย่อย', 'Add Sub User', ' '),
(196, 'th_sub_no', 'ลำดับ', 'No.', ' '),
(197, 'th_user_sub', 'ชื่อ', 'Name', ' '),
(198, 'th_user_sub', 'ชื่อ', 'Name', ' '),
(199, '_add', 'เพิ่ม', 'Add', NULL),
(200, '_result_pro_total', 'สรุปโดยแยกตามผู้ใช้', 'Result Billing By User', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `league`
--

CREATE TABLE `league` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `status` varchar(25) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `league`
--

INSERT INTO `league` (`id`, `name`, `status`, `img`) VALUES
(10, 'Premier League', '', 'Premier-League-Logo.png'),
(11, 'Serie A', '', 'serie-a.png'),
(12, 'La Liga', '', 'La-Liga-Logo.png'),
(13, 'Ligue 1', '', 'Ligue_1_Logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `score_start` int(11) DEFAULT NULL,
  `score_end` int(11) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `img` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `score_start`, `score_end`, `type`, `number`, `img`) VALUES
(1, 0, 41, 'หมูสนาม', 1, '0.png'),
(2, 42, 61, 'พลทหาร', 1, '42.png'),
(3, 62, 81, 'นักรบผู้กล้า', 1, '62.png'),
(4, 82, 101, 'แม่ทัพผู้กล้า', 1, '82.png'),
(5, 102, 170, 'พระราชา', 1, '102.png');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `subject` varchar(2000) DEFAULT NULL,
  `detail` longtext,
  `date` varchar(30) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `subject`, `detail`, `date`, `status`) VALUES
(42, '', '', '2015-11-07 18:34:03', NULL),
(43, 'a', '', '2015-11-07 18:34:21', NULL),
(44, 'a', '<p>a</p>\r\n', '2015-11-07 18:34:26', NULL),
(45, 'ทดสอบ 01', '<p>ทดสอบ 01</p>\r\n', '2015-11-07 18:34:59', NULL),
(46, '', '', '2015-11-07 18:35:11', NULL),
(40, 'fasdfdasdfdsa', '<p><img alt=\"\" src=\"http://pad2.whstatic.com/images/thumb/d/dd/HTML-Code-for-Space.png/170px-HTML-Code-for-Space.png\" style=\"width: 77px; height: 100px; float: left;\" />ทดสอบข้อความ&nbsp;<span style=\"line-height: 20.8px;\">ทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความทดสอบข้อความ</span></p>\r\n', '2015-10-12 13:03:28', NULL),
(39, 'dsadadsad', '<p><img alt=\"\" src=\"https://lh3.googleusercontent.com/9dFSX6Zdsap_D85PBTSOIAfBQ8beOn76ANpPCn04rSMsVpBRkLHuAfYtWzWIQWLq8NbyoDc39i_iRz90lzb9D96xZYw1LeFV_sSy7VhnPPOxW90bENqS8SFE2ZrRdIH9eUe2VQM\" style=\"height: 300px; width: 500px;\" /></p>\r\n\r\n<p dir=\"ltr\" style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(238, 238, 238); font-family: Tahoma, Genevam, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(50, 50, 50);\"><span style=\"box-sizing: border-box; font-size: small;\">เฟลิกซ์ มากัธ ตำนานโค้สโมสรบาเยิร์น มิวนิค ได้แสดงความมั่นใจเป็นอย่างมากว่า เจอร์เก้น คล็อปป์ ตำนานหัวเรือใหญ่สโมสรโบรุสเซีย ดอร์ทมุนด์มีความสามารถ และศักยภาพที่เหนือชั้นที่จะเข้ามารับหน้าที่กุมบังเหียนให้กับทางสโมสรบาเยิร์น มิวนิค รายใหม่</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(238, 238, 238); font-family: Tahoma, Genevam, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(50, 50, 50);\"><span style=\"box-sizing: border-box; font-size: small;\">&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(238, 238, 238); font-family: Tahoma, Genevam, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(50, 50, 50);\"><span style=\"box-sizing: border-box; font-size: small;\">เฟลิกซ์ มากัธ อดีตกุนซือสโมสรบาเยิร์น มิวนิค ศึกบุนเดส ลีกา เมืองเบียร์ เชื่อว่า เจอร์เก้น คล็อปป์ อดีตนายใหญ่สโมสรโบรุสเซีย ดอร์ทมุนด์ คู่แข่งร่วมลีก เหมาะสมที่จะมารับหน้าที่กุมบังเหียนให้กับทางทีมเสือใต้รายใหม่แทน เป๊ป กวาร์ดิโอล่า หลังกุนซือรายนี้ยังไม่ได้ต่อสัญญาฉบับใหม่กับทางทีมเสือใต้ทำให้หลายคนเชื่อว่าทางบอสใหญ่ของเสือใต้กำลังมองหาผู้จัดการทีมรายใหม่อยู่เช่นกัน และมากัธ ก็เชื่อว่า คล็อปป์ มีความเหมาะสมมากที่สุด เนื่องจากว่า คล็อปป์ มีความสามารถ</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(238, 238, 238); font-family: Tahoma, Genevam, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(50, 50, 50);\"><br style=\"box-sizing: border-box;\" />\r\n<span id=\"docs-internal-guid-c5c4b448-558c-6239-47dd-71706e71e573\" style=\"box-sizing: border-box; font-size: small;\">และศักยภาพที่สูงเป็นอย่างมากจึงสามารถช่วยดูแลนักแข้งได้เป็นอย่างดีแน่นอน อีกทั้ง อาจจะช่วยทำให้ทีมเสือใต้กลับมาแข็งแกร่งได้อีกครั้งเช่นกัน อย่างไรก็ตาม เฟลิกซ์ มากัธ เชื่อมั่นอย่างเต็มที่ว่าในฤดูกาลนี้ทางสโมสรบาเยิร์น มิวนิค ต้องการผู้จัดการทีมที่มีความสามารถ และศักยภาพที่ยอดเยี่ยมจริงๆเพื่อมากุมบังเหียนให้กับทางทีมเสือใต้ต่อไป</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(238, 238, 238); font-family: Tahoma, Genevam, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(50, 50, 50);\"><span style=\"box-sizing: border-box; font-size: small;\"><span id=\"docs-internal-guid-a02604dd-558c-882d-58d9-81f8fec10144\" style=\"box-sizing: border-box;\">สนับสนุนข่าวโดย&nbsp;<a href=\"https://www.sbobet88888.com/sbobet.php\" style=\"box-sizing: border-box; color: rgb(51, 122, 183); text-decoration: none; background: transparent;\">SBOBET</a>&nbsp;เว็บแทงบอลออนไลน์อันดับ 1 ของโลก ที่จะคอยอัพเดตทางเข้า<a href=\"https://www.sbobet88888.com/\" style=\"box-sizing: border-box; color: rgb(51, 122, 183); text-decoration: none; background: transparent;\">แทงบอลออนไลน์</a>ใหม่ๆ เพื่อหลีกเลี่ยงปัญหาเรื่อง แทงบอลไม่ได้ , เข้าSbobetไม่ได้ , Login Sbobet ไม่ได้ หรือ หาทางเข้าSbobetไม่เจอ</span></span></p>\r\n', '2015-10-11 22:53:29', NULL),
(47, 'aaaaa', '<p>aaaa</p>\r\n', ' DATE_SUB(now(), INTERVAL 1 HO', NULL),
(48, 'aaa', '<p>aaaa</p>\r\n', '2015-11-07 19:59:07', NULL),
(49, 'aaa', '<p>aaaa</p>\r\n', '2015-11-07 19:59:16', NULL),
(50, 'aaa', '<p>aaaa</p>\r\n', '2015-11-07 19:59:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `new_popup`
--

CREATE TABLE `new_popup` (
  `id` int(11) NOT NULL,
  `s_Image` varchar(300) NOT NULL,
  `s_subject` varchar(300) NOT NULL,
  `s_status` varchar(3) NOT NULL,
  `d_create` datetime NOT NULL,
  `d_change` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `new_popup`
--

INSERT INTO `new_popup` (`id`, `s_Image`, `s_subject`, `s_status`, `d_create`, `d_change`) VALUES
(16, '20160418_182958.jpg', 'Promotion ฝากเงินครั้งแรก', 'Y', '2016-04-18 18:29:58', '2016-04-18 18:29:58');

-- --------------------------------------------------------

--
-- Table structure for table `set_room`
--

CREATE TABLE `set_room` (
  `id` int(11) NOT NULL,
  `room` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `discount` double NOT NULL,
  `d_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `set_room`
--

INSERT INTO `set_room` (`id`, `room`, `price`, `discount`, `d_create`) VALUES
(1, 'ประเภท A', 3000, 0, '2016-03-07 03:00:00'),
(2, 'ประเภท B', 3500, 0, '2016-03-07 03:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_user`
--

CREATE TABLE `sub_user` (
  `id` int(11) NOT NULL,
  `user_main` varchar(50) NOT NULL,
  `user_sub` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_user`
--

INSERT INTO `sub_user` (`id`, `user_main`, `user_sub`) VALUES
(8, 'qqqq', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `league` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `img`, `league`) VALUES
(5, 'แมนยู', 'manu.png', 10),
(6, 'เชลซี', 'chelsea.png', 10),
(7, 'อาร์เซนอล', 'arsenal.png', 10),
(8, 'โรมา', 'roma.png', 11),
(10, 'เอซี มิลาน', 'milan.png', 11),
(12, 'มิลาน', 'intermilan.png', 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(45) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `zipcode` int(5) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `nickname` varchar(100) DEFAULT NULL,
  `msg` varchar(200) DEFAULT NULL,
  `gold` int(11) DEFAULT NULL,
  `silver` int(11) DEFAULT NULL,
  `win` int(11) DEFAULT NULL,
  `lose` int(11) DEFAULT NULL,
  `line` varchar(500) NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `type` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `fname`, `lname`, `address`, `zipcode`, `phone`, `email`, `picture`, `status`, `nickname`, `msg`, `gold`, `silver`, `win`, `lose`, `line`, `facebook`, `type`) VALUES
(1, 'admin', 'aaaa', 'Master', 'Control', '99/99 ม.3 แขวงสีลม เขตบางรัก กรุงเทพมหานคร 10500', 0, '088-888-8888', 'master@control.com', '1.png', '0', 'ผู้คุมกฎแห่งเกม', 'ถ้าใครสนใจติดตามผมเชิญติดต่อมาได้โดยตรงเลยครับ 088-888-8888 หรือจะสนทนาผ่านทาง Email : a@a.com แล้วเราจะรวยไปด้วยกัน', 88888, 1, 151, 9999, '', '', 'Y'),
(33, 'ufa002', 'password', 'ufa', '002', '', 0, '', '', 'ufa002.jpg', '1', 'เด็กมือใหม่', 'ยังไม่ได้ระบุประกาศแนะนำตัว', 0, 0, 0, 0, '', '', 'Y'),
(32, 'ufa001', 'password', 'ufa', '001', '', 0, '', '', 'ufa001.jpg', '1', 'เด็กมือใหม่', 'ยังไม่ได้ระบุประกาศแนะนำตัว', 0, 0, 0, 0, '', '', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `web`
--

CREATE TABLE `web` (
  `i_id` int(11) NOT NULL,
  `s_name` varchar(250) NOT NULL,
  `s_status` varchar(3) NOT NULL,
  `d_create` datetime NOT NULL,
  `d_change` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web`
--

INSERT INTO `web` (`i_id`, `s_name`, `s_status`, `d_create`, `d_change`) VALUES
(31, 'SBOBET', 'N', '2016-04-18 18:21:47', '2016-04-18 18:21:47'),
(32, 'TBSBET', 'N', '2016-04-18 18:22:09', '2016-04-18 18:22:09'),
(33, 'VEGUS168', 'N', '2016-04-18 18:22:31', '2016-04-18 18:22:31'),
(34, 'BALL STEP2', 'N', '2016-04-18 18:22:47', '2016-04-18 18:22:47'),
(35, 'M8BET', 'N', '2016-04-18 18:23:06', '2016-04-18 18:23:06'),
(36, 'WINNINGFT', 'N', '2016-04-18 18:23:15', '2016-04-18 18:23:15'),
(37, 'MAXBET', 'N', '2016-04-18 18:23:23', '2016-04-18 18:23:23'),
(38, 'OPEN17', 'N', '2016-04-18 18:23:31', '2016-04-18 18:23:31'),
(39, 'GCLUB', 'Y', '2016-04-18 18:24:27', '2016-04-18 18:24:27'),
(40, 'HOLIDAY PLACE', 'Y', '2016-04-18 18:24:51', '2016-04-18 18:24:51'),
(41, 'LOTTO6666', 'Y', '2016-04-18 18:26:12', '2016-04-18 18:26:12');

-- --------------------------------------------------------

--
-- Table structure for table `web2user`
--

CREATE TABLE `web2user` (
  `id` int(11) NOT NULL,
  `i_id` int(11) NOT NULL,
  `s_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web2user`
--

INSERT INTO `web2user` (`id`, `i_id`, `s_user`) VALUES
(145, 31, 'ufa001'),
(152, 31, 'ufa002'),
(122, 31, 'user001'),
(96, 31, 'user002'),
(146, 32, 'ufa001'),
(153, 32, 'ufa002'),
(97, 32, 'user002'),
(154, 33, 'ufa002'),
(123, 33, 'user001'),
(98, 33, 'user002'),
(106, 33, 'user003'),
(155, 34, 'ufa002'),
(124, 34, 'user001'),
(99, 34, 'user002'),
(156, 35, 'ufa002'),
(125, 35, 'user001'),
(100, 35, 'user002'),
(157, 36, 'ufa002'),
(126, 36, 'user001'),
(101, 36, 'user002'),
(107, 36, 'user003'),
(147, 37, 'ufa001'),
(158, 37, 'ufa002'),
(127, 37, 'user001'),
(102, 37, 'user002'),
(108, 37, 'user003'),
(148, 38, 'ufa001'),
(159, 38, 'ufa002'),
(128, 38, 'user001'),
(103, 38, 'user002'),
(135, 39, 'qqqq'),
(149, 39, 'ufa002'),
(119, 39, 'user001'),
(94, 39, 'user002'),
(104, 39, 'user003'),
(140, 39, 'user004'),
(129, 39, 'user009'),
(136, 40, 'qqqq'),
(150, 40, 'ufa002'),
(120, 40, 'user001'),
(95, 40, 'user002'),
(130, 40, 'user009'),
(137, 41, 'qqqq'),
(151, 41, 'ufa002'),
(121, 41, 'user001'),
(105, 41, 'user003'),
(131, 41, 'user009');

-- --------------------------------------------------------

--
-- Table structure for table `webcontent`
--

CREATE TABLE `webcontent` (
  `i_id` int(11) NOT NULL,
  `s_detail_agent` varchar(9999) NOT NULL,
  `s_detail_member` varchar(9999) NOT NULL,
  `d_create` datetime NOT NULL,
  `d_change` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webcontent`
--

INSERT INTO `webcontent` (`i_id`, `s_detail_agent`, `s_detail_member`, `d_create`, `d_change`) VALUES
(29, '<h2 style=\"margin: 0.83em 0px; padding: 0px; line-height: 1.5em; font-weight: 700; font-family: Arial, Helvetica, sans-serif; background-color: rgb(238, 238, 238);\">โปรโมชั่น SBOBET ล่าสุด</h2>\r\n\r\n<p style=\"margin: 1em 0px; padding: 0px; line-height: 2.5em; font-family: Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(238, 238, 238);\"><img alt=\"โปรโมชั่น SBOBET\" class=\"aligncenter size-medium wp-image-480\" height=\"157\" sizes=\"(max-width: 512px) 100vw, 512px\" src=\"https://www.click2sbobet.com/wp-content/uploads/click2sbobet-promotion-11-512x157.jpg\" srcset=\"https://www.click2sbobet.com/wp-content/uploads/click2sbobet-promotion-11-512x157.jpg 512w, https://www.click2sbobet.com/wp-content/uploads/click2sbobet-promotion-11-200x61.jpg 200w, https://www.click2sbobet.com/wp-content/uploads/click2sbobet-promotion-11-600x184.jpg 600w, https://www.click2sbobet.com/wp-content/uploads/click2sbobet-promotion-11-800x245.jpg 800w, https://www.click2sbobet.com/wp-content/uploads/click2sbobet-promotion-11.jpg 976w\" style=\"margin: 0px auto; padding: 0px; border: 0px none; max-width: 100%; height: auto; vertical-align: middle; display: block;\" width=\"512\" /></p>\r\n\r\n<p style=\"margin: 1em 0px; padding: 0px; line-height: 2.5em; font-family: Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><span style=\"margin: 0px; padding: 0px; font-weight: 700;\">1. โปรโมชั่น SBOBET NEW CLICK 15%</span></span></p>\r\n\r\n<p style=\"margin: 1em 0px; padding: 0px; line-height: 2.5em; font-family: Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(238, 238, 238);\">สมัครสมาชิกกับ CLICK2SBOBET รับเพิ่มทันที 15% จากยอดฝาก</p>\r\n\r\n<p style=\"margin: 1em 0px; padding: 0px; line-height: 2.5em; font-family: Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(238, 238, 238);\">&ndash; ต้องไม่ซ้ำกับข้อมูลเดิมของทาง CLICK2SBOBET เช่น ชื่อ เบอร์โทรศัพท์ เลขที่บัญชี รวมถึง เลขไอพี</p>\r\n\r\n<p style=\"margin: 1em 0px; padding: 0px; line-height: 2.5em; font-family: Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(238, 238, 238);\">&ndash; โบนัสจะได้รับต่อเมื่อท่านแจ้ง ชื่อ นาสกุล เบอร์โทรศัพท์ และเลขบัญชี</p>\r\n\r\n<p style=\"margin: 1em 0px; padding: 0px; line-height: 2.5em; font-family: Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(238, 238, 238);\">&ndash; โปรโมชั่นนี้สามารถถอนได้หลังจากมี Turnover 3&nbsp;เท่า</p>\r\n\r\n<p style=\"margin: 1em 0px; padding: 0px; line-height: 2.5em; font-family: Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(238, 238, 238);\">&ndash; โบนัสจ่ายสูงสุดที่ 1500&nbsp;บาท/ 1 ยุสเซ่อร์</p>\r\n\r\n<p style=\"margin: 1em 0px; padding: 0px; line-height: 2.5em; font-family: Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(238, 238, 238);\">&ndash; เงื่อนไขสามารถเปลี่ยนแปลงโดยไม่ต้องแจ้งล่วงหน้า</p>\r\n', '<p style=\"line-height: 20.8px;\"><img alt=\"\" src=\"http://www.bbcgoodfood.com/sites/default/files/stork-lead-rainbow.jpg\" style=\"width: 150px; height: 105px;\" /></p>\r\n\r\n<p style=\"line-height: 20.8px;\">ทดสอบข้อความที่ใช้แสดง Member</p>\r\n', '2016-04-13 00:00:00', '2016-04-16 16:47:04'),
(30, '<p style=\"line-height: 20.8px;\"><img alt=\"\" src=\"http://www.bbcgoodfood.com/sites/default/files/stork-lead-rainbow.jpg\" style=\"width: 150px; height: 105px;\" /></p>\r\n\r\n<p style=\"line-height: 20.8px;\">ทดสอบข้อความที่ใช้แสดง Agent</p>\r\n', '<p style=\"line-height: 20.8px;\"><img alt=\"\" src=\"http://www.bbcgoodfood.com/sites/default/files/stork-lead-rainbow.jpg\" style=\"width: 150px; height: 105px;\" /></p>\r\n\r\n<p style=\"line-height: 20.8px;\">ทดสอบข้อความที่ใช้แสดง Member</p>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, '<p><b>.</b></p>\r\n', '31.jpg', '2016-04-18 18:52:59', '2017-03-11 17:27:55'),
(32, '<p>.</p>\r\n', '32.jpg', '2017-03-11 17:27:35', '2017-03-11 17:27:35'),
(33, '<p>.</p>\r\n', '33.jpg', '2017-03-11 17:27:11', '2017-03-11 17:27:11'),
(34, '<p>.</p>\r\n', '34.jpg', '2017-03-11 17:26:50', '2017-03-11 17:26:50'),
(35, '<p>.</p>\r\n', '35.jpg', '2017-03-11 17:26:36', '2017-03-11 17:26:36'),
(37, '<p>.</p>\r\n', '37.jpg', '2017-03-11 17:25:24', '2017-03-11 17:25:24'),
(38, '<p>.</p>\r\n', '38.jpg', '2017-03-11 17:25:08', '2017-03-11 17:25:08'),
(39, '<div class=\"image-featured\" style=\"margin: 0px; padding: 0px; font-family: Arial, Helvetica, sans-serif; line-height: 18px;\">.</div>\r\n', '39.jpg', '2016-04-18 18:49:48', '2017-03-11 17:24:35'),
(40, '<div class=\"thaitheme_read\" style=\"margin: 0px; padding: 0px 6.35938px 12.7188px; float: left; width: 623.766px; font-size: 14.3px; line-height: 1.5em; color: rgb(204, 204, 204); font-family: Arial, Helvetica, sans-serif;\">\r\n<p style=\"margin: 1em 0px; padding: 0px; line-height: 1.7em;\">&nbsp;</p>\r\n\r\n<p style=\"margin: 1em 0px; padding: 0px; line-height: 1.7em;\">.</p>\r\n</div>\r\n', '40.jpg', '2016-04-18 18:51:41', '2017-03-11 17:23:23'),
(41, '<p>.</p>\r\n', '41.jpg', '2017-03-11 17:14:16', '2017-03-11 17:14:16'),
(43, '', '43.jpg', '2016-06-05 09:15:20', '2016-07-05 13:15:39');

-- --------------------------------------------------------

--
-- Table structure for table `weburl`
--

CREATE TABLE `weburl` (
  `id` int(11) NOT NULL,
  `i_id` int(11) NOT NULL,
  `s_url` varchar(8888) NOT NULL,
  `s_url2` varchar(9999) NOT NULL,
  `user_a` varchar(999) NOT NULL,
  `user_m` varchar(999) NOT NULL,
  `pass_a` varchar(100) NOT NULL,
  `pass_m` varchar(100) NOT NULL,
  `s_url_type` varchar(3) NOT NULL,
  `d_create` datetime NOT NULL,
  `d_change` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `weburl`
--

INSERT INTO `weburl` (`id`, `i_id`, `s_url`, `s_url2`, `user_a`, `user_m`, `pass_a`, `pass_m`, `s_url_type`, `d_create`, `d_change`) VALUES
(31, 31, '<p>www.google.com2</p>\r\n\r\n<p><span style=\"line-height: 20.8px;\">www.google.com</span></p>\r\n\r\n<p><span style=\"line-height: 20.8px;\">www.google.com</span></p>\r\n\r\n<p><span style=\"line-height: 20.8px;\">www.google.com</span></p>\r\n\r\n<p><span style=\"line-height: 20.8px;\">www.google.com</span></p>\r\n', '<p>www.facebook.com2</p>\r\n\r\n<p><span style=\"line-height: 20.8px;\">www.facebook.com</span></p>\r\n\r\n<p><span style=\"line-height: 20.8px;\">www.facebook.com</span></p>\r\n\r\n<p><span style=\"line-height: 20.8px;\">www.facebook.com</span></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'userA', 'userM', 'passA', 'passM', 'A', '2016-04-28 21:46:18', '2016-04-29 09:59:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analyze`
--
ALTER TABLE `analyze`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank2user`
--
ALTER TABLE `bank2user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`i_id`),
  ADD KEY `bill_index` (`s_bill_no`,`s_user`,`s_status`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`i_id`),
  ADD KEY `billdetail_index` (`s_bill_no`,`s_status`);

--
-- Indexes for table `exchange`
--
ALTER TABLE `exchange`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `league`
--
ALTER TABLE `league`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_popup`
--
ALTER TABLE `new_popup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `set_room`
--
ALTER TABLE `set_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_user`
--
ALTER TABLE `sub_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `web2user`
--
ALTER TABLE `web2user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `web2user_index` (`i_id`,`s_user`);

--
-- Indexes for table `webcontent`
--
ALTER TABLE `webcontent`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `weburl`
--
ALTER TABLE `weburl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `url_index` (`i_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analyze`
--
ALTER TABLE `analyze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `bank2user`
--
ALTER TABLE `bank2user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;
--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
--
-- AUTO_INCREMENT for table `league`
--
ALTER TABLE `league`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `new_popup`
--
ALTER TABLE `new_popup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `set_room`
--
ALTER TABLE `set_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sub_user`
--
ALTER TABLE `sub_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `web`
--
ALTER TABLE `web`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `web2user`
--
ALTER TABLE `web2user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
--
-- AUTO_INCREMENT for table `weburl`
--
ALTER TABLE `weburl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
