-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 ม.ค. 2020 เมื่อ 05:15 PM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kgrouprestaurant`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `bookingres`
--

CREATE TABLE `bookingres` (
  `BookingID` int(10) NOT NULL,
  `GuestID` int(10) NOT NULL,
  `TableID` int(15) NOT NULL,
  `ResName` varchar(100) NOT NULL,
  `DataIn` date NOT NULL,
  `TimeIn` time NOT NULL,
  `TimeRange` varchar(100) NOT NULL,
  `ListPrice` decimal(10,3) NOT NULL,
  `DateRecode` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `RecordBy` varchar(255) NOT NULL,
  `MenuName1` varchar(255) NOT NULL,
  `MenuName2` varchar(255) NOT NULL,
  `MenuName3` varchar(255) NOT NULL,
  `MenuName4` varchar(255) NOT NULL,
  `MenuName5` varchar(255) NOT NULL,
  `MenuName6` varchar(255) NOT NULL,
  `MenuName7` varchar(255) NOT NULL,
  `MenuName8` varchar(255) NOT NULL,
  `MenuName9` varchar(255) NOT NULL,
  `MenuName10` varchar(255) NOT NULL,
  `MenuOther` varchar(1000) NOT NULL,
  `BKStatus` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `bookingres`
--

INSERT INTO `bookingres` (`BookingID`, `GuestID`, `TableID`, `ResName`, `DataIn`, `TimeIn`, `TimeRange`, `ListPrice`, `DateRecode`, `RecordBy`, `MenuName1`, `MenuName2`, `MenuName3`, `MenuName4`, `MenuName5`, `MenuName6`, `MenuName7`, `MenuName8`, `MenuName9`, `MenuName10`, `MenuOther`, `BKStatus`) VALUES
(98, 63, 369, 'KeereeMantra', '2020-01-24', '11:30:00', '10:00 - 12:00 น.', '0.000', '2020-01-24 15:57:05', 'samsorn innak', '', '', '', '', '', '', '', '', '', '', '', '3'),
(99, 63, 368, 'KeereeMantra', '2020-01-24', '11:30:00', '10:00 - 12:00 น.', '0.000', '2020-01-24 15:57:05', 'samsorn innak', '', '', '', '', '', '', '', '', '', '', '', '3'),
(100, 63, 367, 'KeereeMantra', '2020-01-24', '11:30:00', '10:00 - 12:00 น.', '0.000', '2020-01-24 15:57:05', 'samsorn innak', '', '', '', '', '', '', '', '', '', '', '', '3'),
(101, 64, 61, 'KeereeTara', '2020-01-24', '10:30:00', '10:00 - 12:00 น.', '0.000', '2020-01-24 16:05:46', 'Admin01 Admin01', '', '', '', '', '', '', '', '', '', '', '', '7'),
(102, 64, 60, 'KeereeTara', '2020-01-24', '10:30:00', '10:00 - 12:00 น.', '0.000', '2020-01-24 16:05:46', 'Admin01 Admin01', '', '', '', '', '', '', '', '', '', '', '', '7'),
(103, 65, 68, 'KeereeTara', '2020-01-24', '11:45:00', '10:00 - 12:00 น.', '0.000', '2020-01-24 16:06:50', 'Admin01 Admin01', '', '', '', '', '', '', '', '', '', '', '', '4'),
(104, 65, 69, 'KeereeTara', '2020-01-24', '11:45:00', '10:00 - 12:00 น.', '0.000', '2020-01-24 16:06:50', 'Admin01 Admin01', '', '', '', '', '', '', '', '', '', '', '', '4'),
(105, 65, 77, 'KeereeTara', '2020-01-24', '11:45:00', '10:00 - 12:00 น.', '0.000', '2020-01-24 16:06:50', 'Admin01 Admin01', '', '', '', '', '', '', '', '', '', '', '', '4');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `guest`
--

CREATE TABLE `guest` (
  `GuestID` int(10) NOT NULL,
  `GuestCompany` varchar(200) NOT NULL,
  `GuestName` varchar(150) NOT NULL,
  `GuestEmail` varchar(50) NOT NULL,
  `GuestTel` varchar(12) NOT NULL,
  `GuestTelBackup` varchar(12) NOT NULL,
  `GuestLine` varchar(30) NOT NULL,
  `DataIn` date NOT NULL,
  `TimeIn` time NOT NULL,
  `TimeRange` varchar(100) NOT NULL,
  `GuestNum` varchar(200) NOT NULL,
  `TotalPrice` decimal(10,3) NOT NULL,
  `Pledge` decimal(10,3) NOT NULL,
  `GuestType` varchar(100) NOT NULL,
  `GuestStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `guest`
--

INSERT INTO `guest` (`GuestID`, `GuestCompany`, `GuestName`, `GuestEmail`, `GuestTel`, `GuestTelBackup`, `GuestLine`, `DataIn`, `TimeIn`, `TimeRange`, `GuestNum`, `TotalPrice`, `Pledge`, `GuestType`, `GuestStatus`) VALUES
(61, 'aaaa', 'aaa', 'aaa', 'aa', 'aa', 'aa', '2020-01-24', '00:00:00', '10:00 - 12:00 น.', '12345678', '0.000', '0.000', '', '1'),
(63, 'aaaaaaaa', 'aaaaaaaa', '', '11111111', '', '111', '2020-01-24', '11:30:00', '10:00 - 12:00 น.', '12', '0.000', '0.000', '', '1'),
(64, 'ddddddd', 'ddddddd', 'ddd', 'fwssfs', 'adfaff', 'aa', '2020-01-24', '10:30:00', '10:00 - 12:00 น.', '12', '0.000', '0.000', '2', '1'),
(65, 'fsgdgdg', 'dadad', 'adadd', 'addadad', 'addadaddaa', 'adadad', '2020-01-24', '11:45:00', '10:00 - 12:00 น.', '11', '0.000', '0.000', '2', '1');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `listmenu`
--

CREATE TABLE `listmenu` (
  `MunuID` int(10) NOT NULL,
  `MenuName` varchar(500) NOT NULL,
  `SetType` varchar(2) NOT NULL,
  `ListTopic` int(10) NOT NULL,
  `ListPrice` decimal(10,3) NOT NULL,
  `ResName` varchar(255) NOT NULL,
  `SetHid` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `listmenu`
--

INSERT INTO `listmenu` (`MunuID`, `MenuName`, `SetType`, `ListTopic`, `ListPrice`, `ResName`, `SetHid`) VALUES
(5, 'ปลาทับทิมสามรส', '', 1, '200.000', 'KeereeTara', ''),
(6, 'ปลาแรดราดพริก', '', 1, '200.000', 'KeereeTara', ''),
(7, 'ปลาทับทิมทอดกระเทียม ยำมะม่วง', '', 1, '200.000', 'KeereeTara', ''),
(9, 'น้ำพริกธารา', '', 2, '200.000', 'KeereeTara', ''),
(10, 'หลนอินทรีย์', '', 2, '200.000', 'KeereeTara', ''),
(11, 'น้ำพริกลงเรือ ไข่เค็ม ผักสด', '', 2, '200.000', 'KeereeTara', ''),
(12, 'ยำลุกชิ้นปลากราย', '', 3, '200.000', 'KeereeTara', ''),
(13, 'ยำก้านคะน้ากุ้งสด', '', 3, '200.000', 'KeereeTara', ''),
(14, 'ยำรวมมิตรเห็ดหูหนูขาว', '', 3, '200.000', 'KeereeTara', ''),
(15, 'ลาบไก่', '', 3, '200.000', 'KeereeTara', ''),
(16, 'ต้มยำปลากด ใหญ่', '', 4, '200.000', 'KeereeTara', ''),
(17, 'ต้มโคล้งกระดูกหมูอ่อน ใหญ่', '', 4, '200.000', 'KeereeTara', ''),
(18, 'แกงส้มผักรวมกุ้ง ใหญ่', '', 4, '200.000', 'KeereeTara', ''),
(19, 'แกงจืดเต้าหู้หมูสับสาหร่าย ใหญ่', '', 4, '200.000', 'KeereeTara', ''),
(20, 'บล็อคโคลี่ผัดหมู ', '', 5, '200.000', 'KeereeTara', ''),
(21, 'ยอดมะระผัดหมูสับ ', '', 5, '200.000', 'KeereeTara', ''),
(22, 'เต้าหู้ผัดหมูสับ ', '', 5, '200.000', 'KeereeTara', ''),
(23, 'ผัดเผ็ดหมูป่า', '', 5, '200.000', 'KeereeTara', ''),
(24, 'ไก่รวนเค็ม ', '', 6, '200.000', 'KeereeTara', ''),
(25, 'ซี่โครงหมูทอดกระเทียม ', '', 6, '200.000', 'KeereeTara', ''),
(26, 'ลาบหมูทอด ', '', 6, '200.000', 'KeereeTara', ''),
(27, 'ปีกไก่ทอดเกลือ', '', 6, '200.000', 'KeereeTara', ''),
(28, 'ปลาทับทิมสามรส', '', 1, '250.000', 'KeereeTara', ''),
(29, 'ปลาแรดทอดกระเทียม ยำมะม่วง\r\n', '', 1, '250.000', 'KeereeTara', ''),
(30, 'ขาหมูทอด', '', 1, '250.000', 'KeereeTara', ''),
(31, 'น้ำพริกธารา', '', 2, '250.000', 'KeereeTara', ''),
(32, 'น้ำพริกกะปิแมงดา ปลาทูทอด', '', 2, '250.000', 'KeereeTara', ''),
(33, 'หลนปูเค็ม', '', 2, '250.000', 'KeereeTara', ''),
(34, 'หลนอินทรีย์', '', 2, '250.000', 'KeereeTara', ''),
(35, 'ยำไส้กรอกหมูรมควัน', '', 3, '250.000', 'KeereeTara', ''),
(36, 'ยำปลาสลิด', '', 3, '250.000', 'KeereeTara', ''),
(37, 'ยำขาหมูทอด', '', 3, '250.000', 'KeereeTara', ''),
(38, 'ลาบไก่', '', 3, '250.000', 'KeereeTara', ''),
(39, 'ทอดมันปลากราย', '', 4, '250.000', 'KeereeTara', ''),
(40, 'ไก่รวนเค็ม', '', 4, '250.000', 'KeereeTara', ''),
(41, 'ซี่โครงสามรส', '', 4, '250.000', 'KeereeTara', ''),
(42, 'ลาบหมูทอด', '', 4, '250.000', 'KeereeTara', ''),
(43, 'ต้มโคล้งกระดูกอ่อน ใหญ่', '', 5, '250.000', 'KeereeTara', ''),
(44, 'ต้มยำกุ้ง ใหญ่', '', 5, '250.000', 'KeereeTara', ''),
(45, 'แกงส้มชะอมกุ้ง ใหญ่', '', 5, '250.000', 'KeereeTara', ''),
(46, 'แกงจืดเต้าหู้หมูสับสาหร่าย ใหญ่', '', 5, '250.000', 'KeereeTara', ''),
(47, 'ผัดผักรวมมิตรกุ้ง', '', 6, '250.000', 'KeereeTara', ''),
(48, 'ยอดมะระผัดหมูสับ', '', 6, '250.000', 'KeereeTara', ''),
(49, 'เต้มหู้ผัดหมูสับ', '', 6, '250.000', 'KeereeTara', ''),
(50, 'กากหมูผัดพริกขิง ไข่เค็ม', '', 6, '250.000', 'KeereeTara', ''),
(51, 'ปลาช่อนคีรี', '', 1, '300.000', 'KeereeTara', ''),
(52, 'ปลาทับทิมสามรส', '', 1, '300.000', 'KeereeTara', ''),
(53, 'ปลากดเหลืองทอดน้ำปลา ยำมะม่วง', '', 1, '300.000', 'KeereeTara', ''),
(54, 'ขาหมูทอด', '', 1, '300.000', 'KeereeTara', ''),
(55, 'น้ำพริกธารา', '', 2, '300.000', 'KeereeTara', ''),
(56, 'น้ำพริกกะปิแมงดา ปลาทูทอด', '', 2, '300.000', 'KeereeTara', ''),
(57, 'น้ำพริกลงเรือ ไข่เค็มผักสด', '', 2, '300.000', 'KeereeTara', ''),
(58, 'หลนอินทรีย์', '', 2, '300.000', 'KeereeTara', ''),
(59, 'ยำเห็ดหูหนูขาวกุ้งสด', '', 3, '300.000', 'KeereeTara', ''),
(60, 'ยำขาหมูทอด', '', 3, '300.000', 'KeereeTara', ''),
(61, 'ยำถั่วพู', '', 3, '300.000', 'KeereeTara', ''),
(62, 'ลาบหมู ผักสด', '', 3, '300.000', 'KeereeTara', ''),
(63, 'ต้มโคล้งกระดูกอ่อน ใหญ่', '', 4, '300.000', 'KeereeTara', ''),
(64, 'ต้มยำกุ้ง ใหญ่', '', 4, '300.000', 'KeereeTara', ''),
(65, 'แกงส้มชะอมกุ้ง ใหญ่', '', 4, '300.000', 'KeereeTara', ''),
(66, 'แกงจืดเต้าหู้หมูสับสาหร่าย ใหญ่', '', 4, '300.000', 'KeereeTara', ''),
(67, 'ยอดมะระผัดหมูสับ', '', 5, '300.000', 'KeereeTara', ''),
(68, 'บล็อคโคลี่ผัดกุ้ง', '', 5, '300.000', 'KeereeTara', ''),
(69, 'ผัดผักรวมมิตรกุ้ง', '', 5, '300.000', 'KeereeTara', ''),
(70, 'เต้าหู้ผัดหมูสับ', '', 5, '300.000', 'KeereeTara', ''),
(71, 'ทอดมันปลากราย', '', 6, '300.000', 'KeereeTara', ''),
(72, 'ซี่โครงสามรส', '', 6, '300.000', 'KeereeTara', ''),
(73, 'ไก่รวนเค็ม', '', 6, '300.000', 'KeereeTara', ''),
(74, 'ลาบหมูทอด', '', 6, '300.000', 'KeereeTara', ''),
(75, 'ผัดเผ็ดน่องไก่', '', 7, '300.000', 'KeereeTara', ''),
(76, 'ผัดฉ่าซี่โครงหมู', '', 7, '300.000', 'KeereeTara', ''),
(77, 'ผัดเผ็ดหมูป่า', '', 7, '300.000', 'KeereeTara', ''),
(78, 'ปลาดุกผัดพริกขิง', '', 7, '300.000', 'KeereeTara', ''),
(79, 'ปลาช่อนคีรี', '', 1, '350.000', 'KeereeTara', ''),
(80, 'ปลากดเหลืองทอดน้ำปลา ยำมะม่วง', '', 1, '350.000', 'KeereeTara', ''),
(81, 'ปลากระพงทอดน้ำปลา ยำมะม่วง', '', 1, '350.000', 'KeereeTara', ''),
(82, 'ขาหมูทอด', '', 1, '350.000', 'KeereeTara', ''),
(83, 'น้ำพริกธารา', '', 2, '350.000', 'KeereeTara', ''),
(84, 'น้ำพริกลงเรือ ไข่เค็ม ผักสด', '', 2, '350.000', 'KeereeTara', ''),
(85, 'หลนอินทรีย์', '', 2, '350.000', 'KeereeTara', ''),
(86, 'หลนปูเค็ม', '', 2, '350.000', 'KeereeTara', ''),
(87, 'ยำรวมมิตรทะเล', '', 3, '350.000', 'KeereeTara', ''),
(88, 'ยำถั่วพู', '', 3, '350.000', 'KeereeTara', ''),
(89, 'ยำสามกรอบ', '', 3, '350.000', 'KeereeTara', ''),
(90, 'ลาบหมู ผักสด', '', 3, '350.000', 'KeereeTara', ''),
(91, 'ต้มยำปลาคัง ใหญ่', '', 4, '350.000', 'KeereeTara', ''),
(92, 'ต้มยำกุ้ง ใหญ่', '', 4, '350.000', 'KeereeTara', ''),
(93, 'แกงส้มชะอมกุ้ง ใหญ่', '', 4, '350.000', 'KeereeTara', ''),
(94, 'แกงจืดเต้าหู้หมูสับสาหร่าย ใหญ่', '', 4, '350.000', 'KeereeTara', ''),
(95, 'ถั่วลันเตาผัดกุ้ง', '', 5, '350.000', 'KeereeTara', ''),
(96, 'บล็อคโคลี่ผัดกุ้ง', '', 5, '350.000', 'KeereeTara', ''),
(97, 'ผัดผักรวมมิตรกุ้ง', '', 5, '350.000', 'KeereeTara', ''),
(98, 'เต้าหู้ผัดหมูสับ', '', 5, '350.000', 'KeereeTara', ''),
(99, 'ทอดมันปลากราย', '', 6, '350.000', 'KeereeTara', ''),
(100, 'ซี่โครงหมูทอดกระเทียม', '', 6, '350.000', 'KeereeTara', ''),
(101, 'ลาบหมูทอด', '', 6, '350.000', 'KeereeTara', ''),
(102, 'ปีกไก่ทอดเกลือ', '', 6, '350.000', 'KeereeTara', ''),
(103, 'ผัดเผ็ดหมูป่า', '', 7, '350.000', 'KeereeTara', ''),
(104, 'ผัดฉ่าซี่โครงหมู', '', 7, '350.000', 'KeereeTara', ''),
(105, 'ไก่ผัดพริกเผา', '', 7, '350.000', 'KeereeTara', ''),
(106, 'ปลาดุกผัดพริกขิง', '', 7, '350.000', 'KeereeTara', ''),
(107, 'ปลาทับทิม 3 รส', '', 1, '1600.000', 'KeereeMantra', ''),
(108, 'ปลาแรดทอดกระเทียม', '', 1, '1600.000', 'KeereeMantra', ''),
(109, 'ขาหมูทอด (หั่น)', '', 1, '1600.000', 'KeereeMantra', ''),
(110, 'น้ำพริกธารา ผักลวก', '', 2, '1600.000', 'KeereeMantra', ''),
(111, 'น้ำพริกปลาดุกฟู ไข่เค็ม', '', 2, '1600.000', 'KeereeMantra', ''),
(112, 'หลนทะเล ผักสด', '', 2, '1600.000', 'KeereeMantra', ''),
(113, 'บล็อกโคลี่ผัดน้ำมันหอย', '', 3, '1600.000', 'KeereeMantra', ''),
(114, 'ยอดมะระน้ำมันหอยหมูสับ', '', 3, '1600.000', 'KeereeMantra', ''),
(115, 'เต้าหู้ผัดหมูสับ', '', 3, '1600.000', 'KeereeMantra', ''),
(116, 'คะน้าหมูกรอบ', '', 3, '1600.000', 'KeereeMantra', ''),
(117, 'ต้มโคล้งกระดูกอ่อน', '', 4, '1600.000', 'KeereeMantra', ''),
(118, 'ต้มยำปลากด', '', 4, '1600.000', 'KeereeMantra', ''),
(119, 'แกงส้มชะอมกุ้ง', '', 4, '1600.000', 'KeereeMantra', ''),
(120, 'แกงจืดเต้าหู้หมูสับสาหร่าย (ใหญ่)', '', 4, '1600.000', 'KeereeMantra', ''),
(121, 'สี่โครงหมูทอดกระเทียม', '', 5, '1600.000', 'KeereeMantra', ''),
(122, 'ไก่รวนเค็ม', '', 5, '1600.000', 'KeereeMantra', ''),
(123, 'ลาบหมูทอด', '', 5, '1600.000', 'KeereeMantra', ''),
(124, 'ซี๋โครงหมูสามรส', '', 5, '1600.000', 'KeereeMantra', ''),
(125, 'ยำลูกชิ้นปลากราย', '', 6, '1600.000', 'KeereeMantra', ''),
(126, 'ยำก้านคะน้ากุ้งสด', '', 6, '1600.000', 'KeereeMantra', ''),
(127, 'ยำรวมมิตรเห็ดหูหนู', '', 6, '1600.000', 'KeereeMantra', ''),
(128, 'ลาบไก่ ผักสด', '', 6, '1600.000', 'KeereeMantra', ''),
(129, 'แกงคั่วกระดูกอ่อน', '', 7, '1600.000', 'KeereeMantra', ''),
(130, 'กากหมูผัดพริกขิงไข่เค็ม', '', 7, '1600.000', 'KeereeMantra', ''),
(131, 'แกงเขียวหวานไก่', '', 7, '1600.000', 'KeereeMantra', ''),
(132, 'ปลาทับทิม  3 รส', '', 1, '2000.000', 'KeereeMantra', ''),
(133, 'ปลาแรดทอดกระเทียม น้ำยำมะม่วง', '', 1, '2000.000', 'KeereeMantra', ''),
(134, 'ขาหมูทอด (หั่น)', '', 1, '2000.000', 'KeereeMantra', ''),
(135, 'น้ำพริกธารา ผักลวก', '', 2, '2000.000', 'KeereeMantra', ''),
(136, 'น้ำพริกปลาดุกฟู ไข่เค็ม', '', 2, '2000.000', 'KeereeMantra', ''),
(137, 'หลนปลาอินทรีย์ ผักสด', '', 2, '2000.000', 'KeereeMantra', ''),
(138, 'ผัดผักรวมมิตรกุ้งสด', '', 3, '2000.000', 'KeereeMantra', ''),
(139, 'ยอดมะระน้ำมันหอยหมูสับ', '', 3, '2000.000', 'KeereeMantra', ''),
(140, 'เต้าหู้ผัดหมูสับ', '', 3, '2000.000', 'KeereeMantra', ''),
(141, 'บล็อกโคลี่ผัดกุ้ง', '', 3, '2000.000', 'KeereeMantra', ''),
(142, 'ต้มโคล้งกระดูกอ่อน', '', 4, '2000.000', 'KeereeMantra', ''),
(143, 'ต้มยำปลาคัง', '', 4, '2000.000', 'KeereeMantra', ''),
(144, 'แกงส้มชะอมไขกุ้งสด (ใหญ่)', '', 4, '2000.000', 'KeereeMantra', ''),
(145, 'แกงจืดเต้าหู้หมูสับสาหร่าย (ใหญ่)', '', 4, '2000.000', 'KeereeMantra', ''),
(146, 'ทอดมันปลากราย', '', 5, '2000.000', 'KeereeMantra', ''),
(147, 'ซี่โครงหมูสามรส', '', 5, '2000.000', 'KeereeMantra', ''),
(148, 'ปีกไก่ทอดเกลือ', '', 5, '2000.000', 'KeereeMantra', ''),
(149, 'ซี๋โครงหมูทอดกระเทียม', '', 5, '2000.000', 'KeereeMantra', ''),
(150, 'ยำไส้กรอกหมูรมควัน', '', 6, '2000.000', 'KeereeMantra', ''),
(151, 'ยำรวมมิตรเห็ดหูหนู', '', 6, '2000.000', 'KeereeMantra', ''),
(152, 'ยำลูกชิ้นปลากราย', '', 6, '2000.000', 'KeereeMantra', ''),
(153, 'ลาบไก่ ผักสด', '', 6, '2000.000', 'KeereeMantra', ''),
(154, 'ผัดฉ่าซี่โครงหมู', '', 7, '2000.000', 'KeereeMantra', ''),
(155, 'แกงเขียวหวานไก่', '', 7, '2000.000', 'KeereeMantra', ''),
(156, 'แกงคั่วกระดูกอ่อน', '', 7, '2000.000', 'KeereeMantra', ''),
(157, 'ปลากดเหลืองทอดน้ำปลา ยำมะม่วง', '', 1, '2400.000', 'KeereeMantra', ''),
(158, 'ขาหมูทอด', '', 1, '2400.000', 'KeereeMantra', ''),
(159, 'ปลาช่อนคีรี', '', 1, '2400.000', 'KeereeMantra', ''),
(160, 'ปลากระพงทอดเจี๋ยนน้ำมะขาม', '', 1, '2400.000', 'KeereeMantra', ''),
(161, 'น้ำพริกธารา ผักลวก', '', 2, '2400.000', 'KeereeMantra', ''),
(162, 'น้ำพริกปลาดุกฟู ไข่เค็ม', '', 2, '2400.000', 'KeereeMantra', ''),
(163, 'หลนปลาอินทรีย์ ผักสด', '', 2, '2400.000', 'KeereeMantra', ''),
(164, 'ผัดยอดมะระกุ้งสด', '', 3, '2400.000', 'KeereeMantra', ''),
(165, 'บล็อกโคลี่ผัดกุ้งสด', '', 3, '2400.000', 'KeereeMantra', ''),
(166, 'เต้าหู้ผัดหมูสับ', '', 3, '2400.000', 'KeereeMantra', ''),
(167, 'ผัดผักรวมมิตรกุ้งสด', '', 3, '2400.000', 'KeereeMantra', ''),
(168, 'ต้มยำปลาคัง', '', 4, '2400.000', 'KeereeMantra', ''),
(169, 'ต้มยำกุ้ง', '', 4, '2400.000', 'KeereeMantra', ''),
(170, 'แกงส้มชะอมไข่ กุ้งสด (ใหญ่)', '', 4, '2400.000', 'KeereeMantra', ''),
(171, 'แกงจืดเต้าหู้หมูสับสาหร่าย (ใหญ่)', '', 4, '2400.000', 'KeereeMantra', ''),
(172, 'ซี๋โครงหมูสามรส', '', 5, '2400.000', 'KeereeMantra', ''),
(173, 'ทอดมันปลากราย', '', 5, '2400.000', 'KeereeMantra', ''),
(174, 'ลาบหมูทอด', '', 5, '2400.000', 'KeereeMantra', ''),
(175, 'ซี๋โครงหมูทอดกระเทียม', '', 5, '2400.000', 'KeereeMantra', ''),
(176, 'ยำรวมมิตรเห็ดหูหนูขาว', '', 6, '2400.000', 'KeereeMantra', ''),
(177, 'ยำก้านคะน้ากุ้งสด', '', 6, '2400.000', 'KeereeMantra', ''),
(178, 'ยำถั่วพู', '', 6, '2400.000', 'KeereeMantra', ''),
(179, 'ลาบไก่ ผักสด', '', 6, '2400.000', 'KeereeMantra', ''),
(180, 'แกงเขียวหวานลูกชิ้นปลากราย', '', 7, '2400.000', 'KeereeMantra', ''),
(181, 'แกงคั่วกระดูกอ่อน', '', 7, '2400.000', 'KeereeMantra', ''),
(182, 'แกงเหลืองปลากดหน่อไม้ดอง (ใหญ่)', '', 7, '2400.000', 'KeereeMantra', ''),
(183, 'ปลาช่อนคีรี', '', 1, '2800.000', 'KeereeMantra', ''),
(184, 'ปลากดเหลืองทอดน้ำปลา ยำมะม่วง', '', 1, '2800.000', 'KeereeMantra', ''),
(185, 'ขาหมูทอด (หั่น)', '', 1, '2800.000', 'KeereeMantra', ''),
(186, 'ปลากระพงทอดราดซอสกระเพรากรอบ', '', 1, '2800.000', 'KeereeMantra', ''),
(187, 'น้ำพริกธารา ผักลวก', '', 2, '2800.000', 'KeereeMantra', ''),
(188, 'น้ำพริกปลาดุกฟู ไข่เค็ม', '', 2, '2800.000', 'KeereeMantra', ''),
(189, 'หลนทะเล ผักสด', '', 2, '2800.000', 'KeereeMantra', ''),
(190, 'ผัดผักรวมมิตรกุ้ง', '', 3, '2800.000', 'KeereeMantra', ''),
(191, 'ถั่วลันเตาสดผัดกุ้ง', '', 3, '2800.000', 'KeereeMantra', ''),
(192, 'เต้าหู้ผัดหมูสับ', '', 3, '2800.000', 'KeereeMantra', ''),
(193, 'บล็อกโคลี่ผัดกุ้ง', '', 3, '2800.000', 'KeereeMantra', ''),
(194, 'ต้มยำกุ้ง', '', 4, '2800.000', 'KeereeMantra', ''),
(195, 'ต้มยำปลาคัง', '', 4, '2800.000', 'KeereeMantra', ''),
(196, 'แกงส้มชะอมไข่กุ้งสด (ใหญ่)', '', 4, '2800.000', 'KeereeMantra', ''),
(197, 'แกงจืดเต้าหู้หมูสับสาหร่าย (ใหญ่)', '', 4, '2800.000', 'KeereeMantra', ''),
(198, 'ทอดมันปลากราย', '', 5, '2800.000', 'KeereeMantra', ''),
(199, 'ซี่โครงหมูทอดกระเทียม', '', 5, '2800.000', 'KeereeMantra', ''),
(200, 'ปีกไก่ทอดเกลือ', '', 5, '2800.000', 'KeereeMantra', ''),
(201, 'ลาบหมูทอด', '', 5, '2800.000', 'KeereeMantra', ''),
(202, 'ยำขาหมูทอด', '', 6, '2800.000', 'KeereeMantra', ''),
(203, 'ยำถั่วพู', '', 6, '2800.000', 'KeereeMantra', ''),
(204, 'ยำสามกรอบ', '', 6, '2800.000', 'KeereeMantra', ''),
(205, 'ลาบหมู', '', 6, '2800.000', 'KeereeMantra', ''),
(206, 'แกงคั่วหอยขม', '', 7, '2800.000', 'KeereeMantra', ''),
(207, 'แกงเขียวหวานลูกชิ้นปลากราย', '', 7, '2800.000', 'KeereeMantra', ''),
(208, 'แพนงหมู', '', 7, '2800.000', 'KeereeMantra', ''),
(209, 'ปลากระพงคลุกฝุ่น', 'A', 1, '300.000', 'Loft', '1'),
(210, 'ฉู่ฉี่ไก่กรอบ', 'A', 2, '300.000', 'Loft', '1'),
(211, 'กวางตุ้งฮ่องกงผัดกุ้ง', 'A', 3, '300.000', 'Loft', '1'),
(212, 'ยำเมี่ยงหมูแดดเดียว', 'A', 4, '300.000', 'Loft', '1'),
(213, 'ต้มยำปลาคัง', 'A', 5, '300.000', 'Loft', '1'),
(214, 'น้ำพริกกุ้งหวาน + ผักสด', 'A', 6, '300.000', 'Loft', '1'),
(215, 'ปอเปี๊ยะรวม', 'A', 7, '300.000', 'Loft', '1'),
(216, 'ข้าวสวย', 'A', 8, '300.000', 'Loft', '1'),
(217, 'ผลไม้รวม', 'A', 9, '300.000', 'Loft', '1'),
(218, 'ปลาช่อนคีรี', 'B', 1, '300.000', 'Loft', '2'),
(219, 'น้ำพริกแมงดาปลาทู + ผักต้ม', 'B', 2, '300.000', 'Loft', '2'),
(220, 'บล็อคโคลี่ผัดปลาเค็ม', 'B', 3, '300.000', 'Loft', '2'),
(221, 'ไก่ทอดใบมะกรูดกรอบ', 'B', 4, '300.000', 'Loft', '2'),
(222, 'ต้มยำลูกชิ้นปลากราย', 'B', 5, '300.000', 'Loft', '2'),
(223, 'ยำสาหร่ายแก้ว', 'B', 6, '300.000', 'Loft', '2'),
(224, 'ปอเปี๊ยะรวม', 'B', 7, '300.000', 'Loft', '2'),
(225, 'ข้าวสวย', 'B', 8, '300.000', 'Loft', '2'),
(226, 'ข้าวเหนียวมะม่วงน้ำกระทิ', 'B', 9, '300.000', 'Loft', '2'),
(227, 'ปอเปี๊ยะรวม', 'A', 1, '400.000', 'Loft', '3'),
(228, 'ขาหมูทอดกับมันฝรั่ง', 'A', 2, '400.000', 'Loft', '3'),
(229, 'ปลาหมึกทอดกรอบผัดไข่เค็ม', 'A', 3, '400.000', 'Loft', '3'),
(230, 'กุ้งผัดผงกะหรี่', 'A', 4, '400.000', 'Loft', '3'),
(231, 'หน่อไม้ผัดกุ้งเห็ดหอม', 'A', 5, '400.000', 'Loft', '3'),
(232, 'ไก่กรอบเขียวหวานผัดแห้งโรตี', 'A', 6, '400.000', 'Loft', '3'),
(233, 'ยำรวมมิตรทะเลกรอบ', 'A', 7, '400.000', 'Loft', '3'),
(234, 'ต้มยำกุ้งขาวโซดามะพร้าวอ่อน', 'A', 8, '400.000', 'Loft', '3'),
(235, 'ข้าวสวย', 'A', 9, '400.000', 'Loft', '3'),
(236, 'ข้าวเหนียวมะม่วง น้ำกะทิ', 'A', 10, '400.000', 'Loft', '3'),
(237, 'ปอเปี๊ยะรวม', 'B', 1, '400.000', 'Loft', '4'),
(238, 'ปลากดทอดน้ำปลา กับน้ำยำมะม่วง', 'B', 2, '400.000', 'Loft', '4'),
(239, 'เป็ดผัดพริกไทยดำ', 'B', 3, '400.000', 'Loft', '4'),
(240, 'แกงส้มชะอมกุ้งสด', 'B', 4, '400.000', 'Loft', '4'),
(241, 'ฉู่ฉี่ไก่กรอบ', 'B', 5, '400.000', 'Loft', '4'),
(242, 'กุ้งเสียบไม้ย่าง', 'B', 6, '400.000', 'Loft', '4'),
(243, 'ยำผักบุ้งกรอบ', 'B', 7, '400.000', 'Loft', '4'),
(244, 'ยอดมะพร้าวผัดกุ้งน้ำมันหอย', 'B', 8, '400.000', 'Loft', '4'),
(245, 'ข้าวสวย', 'B', 9, '400.000', 'Loft', '4'),
(246, 'กลว้ยไข่เชื่อม', 'B', 10, '400.000', 'Loft', '4'),
(247, 'ปอเปี๊ยะรวม', 'C', 1, '400.000', 'Loft', '5'),
(248, 'ปลากกดทอดน้ำปลา กับน้ำยำมะม่วง', 'C', 2, '400.000', 'Loft', '5'),
(249, 'อกเป็ดย่างซอสพริกเผา', 'C', 3, '400.000', 'Loft', '5'),
(250, 'หลนทะเล + ผักสด', 'C', 4, '400.000', 'Loft', '5'),
(251, 'แกงหมูพริกขี้หนูโรตี', 'C', 5, '400.000', 'Loft', '5'),
(252, 'ยำสาหร่ายแก้ว', 'C', 6, '400.000', 'Loft', '5'),
(253, 'บล็อคโคลี่ผัดปลาเค็ม', 'C', 7, '400.000', 'Loft', '5'),
(254, 'พะแนงหมูกรอบ', 'C', 8, '400.000', 'Loft', '5'),
(255, 'ข้าวสวย', 'C', 9, '400.000', 'Loft', '5'),
(256, 'ผลไม้รวม', 'C', 10, '400.000', 'Loft', '5'),
(257, 'ปอเปี๊ยะรวม', 'D', 1, '400.000', 'Loft', '6'),
(258, 'เป็ดผัดพริกไทยดำ', 'D', 2, '400.000', 'Loft', '6'),
(259, 'พะแนงหมูกรอบ', 'D', 3, '400.000', 'Loft', '6'),
(260, 'ปลากดทอดน้ำปลา กับน้ำยำมะม่วง', 'D', 4, '400.000', 'Loft', '6'),
(261, 'บล็อคโคลี่ผัดปลาเค็ม', 'D', 5, '400.000', 'Loft', '6'),
(262, 'ยำหัวปรีกรอบ', 'D', 6, '400.000', 'Loft', '6'),
(263, 'ต้มยำลูกชิ้นปลากราย', 'D', 7, '400.000', 'Loft', '6'),
(264, 'น้ำพริกกุ้งหวาน + ผักสด', 'D', 8, '400.000', 'Loft', '6'),
(265, 'ข้าวสวย', 'D', 9, '400.000', 'Loft', '6'),
(266, 'ผลไม้รวม', 'D', 10, '400.000', 'Loft', '6');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tablemantraplan`
--

CREATE TABLE `tablemantraplan` (
  `TableID` int(15) NOT NULL,
  `TableNumber` varchar(10) NOT NULL,
  `ResName` varchar(100) NOT NULL,
  `TableZone` varchar(10) NOT NULL,
  `TableGroup` varchar(10) NOT NULL,
  `Orders` int(5) NOT NULL,
  `TableIcon` varchar(255) NOT NULL,
  `TableIconMR` varchar(255) NOT NULL,
  `TableIconReserved` varchar(255) NOT NULL,
  `TableIconFood` varchar(255) NOT NULL,
  `TableIconBlue` varchar(255) NOT NULL,
  `TableIconMagenta` varchar(255) NOT NULL,
  `TableIconYellow` varchar(255) NOT NULL,
  `TableBlueVIP` varchar(255) NOT NULL,
  `TableMagentaVIP` varchar(255) NOT NULL,
  `TableYellowVIP` varchar(255) NOT NULL,
  `TableRedVIP` varchar(255) NOT NULL,
  `TableStatus` varchar(5) NOT NULL,
  `UserRecord` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `tablemantraplan`
--

INSERT INTO `tablemantraplan` (`TableID`, `TableNumber`, `ResName`, `TableZone`, `TableGroup`, `Orders`, `TableIcon`, `TableIconMR`, `TableIconReserved`, `TableIconFood`, `TableIconBlue`, `TableIconMagenta`, `TableIconYellow`, `TableBlueVIP`, `TableMagentaVIP`, `TableYellowVIP`, `TableRedVIP`, `TableStatus`, `UserRecord`) VALUES
(1, '1', 'KeereeTara', '1', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(2, '2', 'KeereeTara', '1', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(3, '3', 'KeereeTara', '1', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(4, '4', 'KeereeTara', '1', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(5, '5', 'KeereeTara', '1', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(6, '6', 'KeereeTara', '1', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(7, '7', 'KeereeTara', '1', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(8, '8', 'KeereeTara', '1', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(9, '9', 'KeereeTara', '1', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10, '10', 'KeereeTara', '1', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(11, '11', 'KeereeTara', '1', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(12, '12', 'KeereeTara', '1', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(14, '14', 'KeereeTara', '1', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(15, '15', 'KeereeTara', '1', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(16, '16', 'KeereeTara', '1', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(17, '17', 'KeereeTara', '2', 'A', 8, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(18, '18', 'KeereeTara', '2', 'A', 7, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(19, '19', 'KeereeTara', '2', 'A', 6, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(20, '20', 'KeereeTara', '2', 'A', 1, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(21, '21', 'KeereeTara', '2', 'A', 2, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(22, '22', 'KeereeTara', '2', 'A', 3, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(23, '23', 'KeereeTara', '2', 'A', 4, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(24, '24', 'KeereeTara', '2', 'A', 5, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(25, '25', 'KeereeTara', '2', 'B', 5, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(26, '26', 'KeereeTara', '2', 'B', 4, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(27, '27', 'KeereeTara', '2', 'B', 3, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(28, '28', 'KeereeTara', '2', 'B', 2, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(29, '29', 'KeereeTara', '2', 'B', 1, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(30, '30', 'KeereeTara', '3', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(31, '31', 'KeereeTara', '3', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(32, '32', 'KeereeTara', '3', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(33, '33', 'KeereeTara', '3', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(34, '34', 'KeereeTara', '3', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(35, '35', 'KeereeTara', '3', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(36, '36', 'KeereeTara', '3', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(37, '37', 'KeereeTara', '3', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(38, '38', 'KeereeTara', '3', 'B', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(39, '39', 'KeereeTara', '3', 'B', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(40, '40', 'KeereeTara', '3', 'B', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(41, '41', 'KeereeTara', '4', 'A', 10, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(42, '42', 'KeereeTara', '4', 'A', 9, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(43, '43', 'KeereeTara', '4', 'A', 8, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(45, '45', 'KeereeTara', '4', 'A', 7, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(46, '46', 'KeereeTara', '4', 'A', 6, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(47, '47', 'KeereeTara', '4', 'A', 5, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(48, '48', 'KeereeTara', '4', 'A', 4, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(49, '49', 'KeereeTara', '4', 'A', 3, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(50, '50', 'KeereeTara', '4', 'A', 2, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(51, '51', 'KeereeTara', '4', 'A', 1, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(52, '52', 'KeereeTara', '4', 'A', 11, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(53, '53', 'KeereeTara', '4', 'A', 12, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(60, '60', 'KeereeTara', '5', 'A', 3, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(61, '61', 'KeereeTara', '5', 'A', 4, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(62, '62', 'KeereeTara', '5', 'A', 5, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(63, '63', 'KeereeTara', '5', 'A', 10, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(64, '64', 'KeereeTara', '5', 'A', 14, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(65, '65', 'KeereeTara', '5', 'A', 13, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(66, '66', 'KeereeTara', '5', 'A', 9, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(67, '67', 'KeereeTara', '5', 'A', 8, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(68, '68', 'KeereeTara', '5', 'A', 2, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(69, '69', 'KeereeTara', '5', 'A', 1, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(70, '70', 'KeereeTara', '5', 'B', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(71, '71', 'KeereeTara', '5', 'B', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(72, '72', 'KeereeTara', '5', 'B', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(73, '73', 'KeereeTara', '5', 'B', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(74, '74', 'KeereeTara', '5', 'A', 11, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(75, '75', 'KeereeTara', '5', 'A', 12, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(76, '76', 'KeereeTara', '5', 'A', 7, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(77, '77', 'KeereeTara', '5', 'A', 6, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(101, '101', 'KeereeMantra', '1', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(102, '102', 'KeereeMantra', '1', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(103, '103', 'KeereeMantra', '1', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(104, '104', 'KeereeMantra', '1', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'Reserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(105, '105', 'KeereeMantra', '1', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(106, '106', 'KeereeMantra', '1', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(107, '107', 'KeereeMantra', '1', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(108, '108', 'KeereeMantra', '1', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(109, '109', 'KeereeMantra', '1', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(110, '110', 'KeereeMantra', '1', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(111, '111', 'KeereeMantra', '1', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(112, '112', 'KeereeMantra', '1', 'B', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(114, '114', 'KeereeMantra', '1', 'B', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(115, '115', 'KeereeMantra', '1', 'B', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(116, '116', 'KeereeMantra', '1', 'B', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(117, '117', 'KeereeMantra', '1', 'B', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(118, '118', 'KeereeMantra', '1', 'B', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(119, '119', 'KeereeMantra', '1', 'B', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(151, '151', 'KeereeMantra', '1', '2', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(152, '152', 'KeereeMantra', '1', '2', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(153, '153', 'KeereeMantra', '1', '2', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(154, '154', 'KeereeMantra', '1', '2', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(155, '155', 'KeereeMantra', '1', '2', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(156, '156', 'KeereeMantra', '1', '2', 0, 'DubbleSquareAvailable.png', 'DubbleSquareCheck.png', 'DubbleSquareReserved.png', 'DubbleSquareFood.png', 'DubbleSquareBlueFood.png', 'DubbleSquareMagentaFood.png', 'DubbleSquareYellowFood.png', 'DubbleSquareBlueVIP.png', 'DubbleSquareMagentaVIP.png', 'DubbleSquareYellowVIP.png', 'DubbleSquareVIP.png', '1', ''),
(157, '157', 'KeereeMantra', '1', '2', 0, 'DubbleSquareAvailable.png', 'DubbleSquareCheck.png', 'DubbleSquareReserved.png', 'DubbleSquareFood.png', 'DubbleSquareBlueFood.png', 'DubbleSquareMagentaFood.png', 'DubbleSquareYellowFood.png', 'DubbleSquareBlueVIP.png', 'DubbleSquareMagentaVIP.png', 'DubbleSquareYellowVIP.png', 'DubbleSquareVIP.png', '1', ''),
(158, '158', 'KeereeMantra', '1', '2', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(159, '159', 'KeereeMantra', '1', '2', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(160, '160', 'KeereeMantra', '1', '2', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(161, '161', 'KeereeMantra', '1', '2', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(162, '162', 'KeereeMantra', '1', '2', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(163, '163', 'KeereeMantra', '1', '2', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(164, '164', 'KeereeMantra', '1', '2', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(201, '201', 'KeereeMantra', '2', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(202, '202', 'KeereeMantra', '2', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(203, '203', 'KeereeMantra', '2', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(204, '204', 'KeereeMantra', '2', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(205, '205', 'KeereeMantra', '2', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(206, '206', 'KeereeMantra', '2', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(207, '207', 'KeereeMantra', '2', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(208, '208', 'KeereeMantra', '2', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(209, '209', 'KeereeMantra', '2', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(210, '210', 'KeereeMantra', '2', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(211, '211', 'KeereeMantra', '2', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(212, '212', 'KeereeMantra', '2', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(251, '251', 'KeereeMantra', '2', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(252, '252', 'KeereeMantra', '2', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(253, '253', 'KeereeMantra', '2', 'A', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(254, '254', 'KeereeMantra', '2', 'B', 0, 'CircleAvailable.png', 'CircleCheck.png', 'CircleReserved.png', 'CircleReservedFood.png', 'CircleBlueFood.png', 'CircleMagentaFood.png', 'CircleYellowFood.png', 'CircleBlueVIP.png', 'CircleMagentaVIP.png', 'CircleYellowVIP.png', 'CircleVIP.png', '1', ''),
(255, '255', 'KeereeMantra', '2', 'B', 0, 'CircleAvailable.png', 'CircleCheck.png', 'CircleReserved.png', 'CircleReservedFood.png', 'CircleBlueFood.png', 'CircleMagentaFood.png', 'CircleYellowFood.png', 'CircleBlueVIP.png', 'CircleMagentaVIP.png', 'CircleYellowVIP.png', 'CircleVIP.png', '1', ''),
(256, '256', 'KeereeMantra', '2', 'B', 0, 'CircleAvailable.png', 'CircleCheck.png', 'CircleReserved.png', 'CircleReservedFood.png', 'CircleBlueFood.png', 'CircleMagentaFood.png', 'CircleYellowFood.png', 'CircleBlueVIP.png', 'CircleMagentaVIP.png', 'CircleYellowVIP.png', 'CircleVIP.png', '1', ''),
(257, '257', 'KeereeMantra', '2', 'B', 0, 'CircleAvailable.png', 'CircleCheck.png', 'CircleReserved.png', 'CircleReservedFood.png', 'CircleBlueFood.png', 'CircleMagentaFood.png', 'CircleYellowFood.png', 'CircleBlueVIP.png', 'CircleMagentaVIP.png', 'CircleYellowVIP.png', 'CircleVIP.png', '1', ''),
(258, '258', 'KeereeMantra', '2', 'B', 0, 'CircleAvailable.png', 'CircleCheck.png', 'CircleReserved.png', 'CircleReservedFood.png', 'CircleBlueFood.png', 'CircleMagentaFood.png', 'CircleYellowFood.png', 'CircleBlueVIP.png', 'CircleMagentaVIP.png', 'CircleYellowVIP.png', 'CircleVIP.png', '1', ''),
(261, '261', 'KeereeMantra', '2', 'C', 0, 'CircleAvailable.png', 'CircleCheck.png', 'CircleReserved.png', 'CircleReservedFood.png', 'CircleBlueFood.png', 'CircleMagentaFood.png', 'CircleYellowFood.png', 'CircleBlueVIP.png', 'CircleMagentaVIP.png', 'CircleYellowVIP.png', 'CircleVIP.png', '1', ''),
(262, '262', 'KeereeMantra', '2', 'C', 0, 'CircleAvailable.png', 'CircleCheck.png', 'CircleReserved.png', 'CircleReservedFood.png', 'CircleBlueFood.png', 'CircleMagentaFood.png', 'CircleYellowFood.png', 'CircleBlueVIP.png', 'CircleMagentaVIP.png', 'CircleYellowVIP.png', 'CircleVIP.png', '1', ''),
(263, '263', 'KeereeMantra', '2', 'C', 0, 'CircleAvailable.png', 'CircleCheck.png', 'CircleReserved.png', 'CircleReservedFood.png', 'CircleBlueFood.png', 'CircleMagentaFood.png', 'CircleYellowFood.png', 'CircleBlueVIP.png', 'CircleMagentaVIP.png', 'CircleYellowVIP.png', 'CircleVIP.png', '1', ''),
(264, '264', 'KeereeMantra', '2', 'C', 0, 'CircleAvailable.png', 'CircleCheck.png', 'CircleReserved.png', 'CircleReservedFood.png', 'CircleBlueFood.png', 'CircleMagentaFood.png', 'CircleYellowFood.png', 'CircleBlueVIP.png', 'CircleMagentaVIP.png', 'CircleYellowVIP.png', 'CircleVIP.png', '1', ''),
(301, '301', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(302, '302', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(303, '303', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(304, '304', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(305, '305', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(306, '306', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(307, '307', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(308, '308', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(309, '309', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(310, '310', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(311, '311', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(312, '312', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(313, '313', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(314, '314', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(315, '315', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(316, '316', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(317, '317', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(318, '318', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(319, '319', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(320, '320', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(321, '321', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(322, '322', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(323, '323', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(324, '324', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(325, '325', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(326, '326', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(327, '327', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(328, '328', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(329, '329', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(330, '330', 'KeereeMantra', '3', 'A', 0, 'Available.png', 'octagonCheck.png', 'Reserved.png', 'octagonFood.png', 'octagonBlueFood.png', 'octagonMagentaFood.png', 'octagonYellowFood.png', 'octagonBlueVIP.png', 'octagonMagentaVIP.png', 'octagonYellowVIP.png', 'ReservedVIP.png', '1', ''),
(331, '331', 'KeereeMantra', '3', 'B', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(332, '332', 'KeereeMantra', '3', 'B', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(333, '333', 'KeereeMantra', '3', 'B', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(334, '334', 'KeereeMantra', '3', 'B', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(335, '335', 'KeereeMantra', '3', 'B', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(336, '336', 'KeereeMantra', '3', 'B', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(361, '361', 'KeereeMantra', '3', 'C', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(362, '362', 'KeereeMantra', '3', 'C', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(363, '363', 'KeereeMantra', '3', 'C', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(364, '364', 'KeereeMantra', '3', 'C', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(365, '365', 'KeereeMantra', '3', 'C', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(366, '366', 'KeereeMantra', '3', 'C', 0, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(367, '367', 'KeereeMantra', '3', 'D', 0, 'CircleAvailable.png', 'CircleCheck.png', 'CircleReserved.png', 'CircleReservedFood.png', 'CircleBlueFood.png', 'CircleMagentaFood.png', 'CircleYellowFood.png', 'CircleBlueVIP.png', 'CircleMagentaVIP.png', 'CircleYellowVIP.png', 'CircleVIP.png', '1', ''),
(368, '368', 'KeereeMantra', '3', 'D', 0, 'CircleAvailable.png', 'CircleCheck.png', 'CircleReserved.png', 'CircleReservedFood.png', 'CircleBlueFood.png', 'CircleMagentaFood.png', 'CircleYellowFood.png', 'CircleBlueVIP.png', 'CircleMagentaVIP.png', 'CircleYellowVIP.png', 'CircleVIP.png', '1', ''),
(369, '369', 'KeereeMantra', '3', 'D', 0, 'CircleAvailable.png', 'CircleCheck.png', 'CircleReserved.png', 'CircleReservedFood.png', 'CircleBlueFood.png', 'CircleMagentaFood.png', 'CircleYellowFood.png', 'CircleBlueVIP.png', 'CircleMagentaVIP.png', 'CircleYellowVIP.png', 'CircleVIP.png', '1', ''),
(10001, '10001', 'Loft', '1', 'A', 8, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10002, '10002', 'Loft', '1', 'A', 7, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10003, '10003', 'Loft', '1', 'A', 6, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', '');
INSERT INTO `tablemantraplan` (`TableID`, `TableNumber`, `ResName`, `TableZone`, `TableGroup`, `Orders`, `TableIcon`, `TableIconMR`, `TableIconReserved`, `TableIconFood`, `TableIconBlue`, `TableIconMagenta`, `TableIconYellow`, `TableBlueVIP`, `TableMagentaVIP`, `TableYellowVIP`, `TableRedVIP`, `TableStatus`, `UserRecord`) VALUES
(10004, '10004', 'Loft', '1', 'A', 5, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10005, '10005', 'Loft', '1', 'A', 4, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10006, '10006', 'Loft', '1', 'A', 3, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10007, '10007', 'Loft', '1', 'A', 2, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10008, '10008', 'Loft', '1', 'A', 1, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10009, '10009', 'Loft', '2', 'A', 1, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10010, '10010', 'Loft', '2', 'A', 3, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10011, '10011', 'Loft', '2', 'A', 2, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10012, '10012', 'Loft', '2', 'A', 4, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10014, '10014', 'Loft', '2', 'B', 1, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10015, '10015', 'Loft', '2', 'B', 2, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10016, '10016', 'Loft', '2', 'B', 4, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10017, '10017', 'Loft', '2', 'B', 5, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10018, '10018', 'Loft', '2', 'B', 3, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10019, '10019', 'Loft', '1', 'A', 9, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10020, '10020', 'Loft', '1', 'A', 10, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10021, '10021', 'Loft', '2', 'C', 2, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10022, '10022', 'Loft', '2', 'C', 3, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10023, '10023', 'Loft', '2', 'C', 4, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10024, '10024', 'Loft', '2', 'C', 5, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10025, '10025', 'Loft', '2', 'C', 6, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10026, '10026', 'Loft', '2', 'D', 1, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10027, '10027', 'Loft', '2', 'D', 2, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10028, '10028', 'Loft', '2', 'D', 3, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10029, '10029', 'Loft', '4', 'A', 1, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10030, '10030', 'Loft', '4', 'A', 2, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10031, '10031', 'Loft', '4', 'A', 2, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10032, '10032', 'Loft', '4', 'A', 4, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10033, '10033', 'Loft', '3', 'A', 3, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10034, '10034', 'Loft', '3', 'A', 4, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10035, '10035', 'Loft', '3', 'A', 1, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10036, '10036', 'Loft', '3', 'A', 2, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10037, '10037', 'Loft', '3', 'B', 1, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10038, '10038', 'Loft', '3', 'B', 2, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10039, '10039', 'Loft', '3', 'B', 3, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10040, '10040', 'Loft', '3', 'B', 4, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10041, '10041', 'Loft', '5', 'A', 1, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10042, '10042', 'Loft', '5', 'A', 2, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10043, '10043', 'Loft', '4', 'A', 5, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10044, '10044', 'Loft', '5', 'A', 3, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10050, '10050', 'Loft', '6', 'C', 3, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10051, '10051', 'Loft', '6', 'C', 4, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10052, '10052', 'Loft', '6', 'C', 1, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10053, '10053', 'Loft', '6', 'C', 2, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10054, '10054', 'Loft', '6', 'B', 5, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10055, '10055', 'Loft', '6', 'B', 3, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10056, '10056', 'Loft', '6', 'B', 1, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10057, '10057', 'Loft', '6', 'A', 1, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10058, '10058', 'Loft', '6', 'A', 2, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10059, '10059', 'Loft', '6', 'A', 3, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10060, '10060', 'Loft', '6', 'B', 2, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10061, '10061', 'Loft', '6', 'B', 4, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10062, '10062', 'Loft', '6', 'B', 6, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(10063, '10063', 'Loft', '6', 'B', 7, 'SquareAvailable.png', 'SquareCheck.png', 'SquareReserved.png', 'SquareFood.png', 'SquareBlueFood.png', 'SquareMagentaFood.png', 'SquareYellowFood.png', 'SquareBlueVIP.png', 'SquareMagentaVIP.png', 'SquareYellowVIP.png', 'SquareVIP.png', '1', ''),
(100201, '100201', 'Loft', '7', 'A', 1, 'RoomAvailable.png', 'RoomAvailableCheck.png', 'RoomReserved.png', 'RoomReservedFood.png', 'RoomBlueFood.png', 'RoomMagentaFood.png', 'RoomYellowFood.png', 'RoomBlueVIP.png', 'RoomMagentaVIP.png', 'RoomYellowVIP.png', 'RoomReservedVIP.png', '1', ''),
(100202, '100202', 'Loft', '7', 'A', 2, 'RoomAvailable.png', 'RoomAvailableCheck.png', 'RoomReserved.png', 'RoomReservedFood.png', 'RoomBlueFood.png', 'RoomMagentaFood.png', 'RoomYellowFood.png', 'RoomBlueVIP.png', 'RoomMagentaVIP.png', 'RoomYellowVIP.png', 'RoomReservedVIP.png', '1', ''),
(100203, '100203', 'Loft', '7', 'A', 3, 'RoomAvailable.png', 'RoomAvailableCheck.png', 'RoomReserved.png', 'RoomReservedFood.png', 'RoomBlueFood.png', 'RoomMagentaFood.png', 'RoomYellowFood.png', 'RoomBlueVIP.png', 'RoomMagentaVIP.png', 'RoomYellowVIP.png', 'RoomReservedVIP.png', '1', ''),
(100301, '100301', 'Loft', '7', 'B', 4, 'RoomAvailable.png', 'RoomAvailableCheck.png', 'RoomReserved.png', 'RoomReservedFood.png', 'RoomBlueFood.png', 'RoomMagentaFood.png', 'RoomYellowFood.png', 'RoomBlueVIP.png', 'RoomMagentaVIP.png', 'RoomYellowVIP.png', 'RoomReservedVIP.png', '1', '');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `user`
--

CREATE TABLE `user` (
  `ID` int(5) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Tel` varchar(10) NOT NULL,
  `Userlevel` varchar(10) NOT NULL,
  `UserResName` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- dump ตาราง `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `Firstname`, `Lastname`, `Tel`, `Userlevel`, `UserResName`) VALUES
(445, 'RabbitTie', '$2y$10$o.0EgDttQ353c4eWrUBVLeNkeKKP6qRUY2tf0xUDn201CDNrTqAIa', 'samsorn', 'innak', '0000000000', 'Admin', 'All'),
(501, 'Tester', '$2y$10$DAzyEa/ZRwJmQ.BJTBQtJeQWXZab31FD7B5wm8dont.z/8dHNrCwy', 'Tester', 'Tester', '00000000', 'Editor', 'KeereeMantra'),
(510, 'Admin01', '$2y$04$mxvtVUMMyRK66HUINmD7cuUElfBawJ76YqPaaPjTp878COT/YmRxm', 'Admin01', 'Admin01', 'Admin01', 'Admin', 'KeereeTara'),
(511, 'Admin02', '$2y$04$tibYHKyqdFoCs26dkmpyMux8znQiDvp3OzMAgf1Tty4no1BRp7REK', 'Admin02', 'Admin02', 'Admin02', 'Editor', 'KeereeTara'),
(512, 'Admin03', '$2y$04$l9IDtbSoAiGthypKAO4OGuOsD8d6OrV9WsDurDgOO89nig7tbJYc6', 'Admin03', 'Admin03', 'Admin03', 'Viewer', 'Loft');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingres`
--
ALTER TABLE `bookingres`
  ADD PRIMARY KEY (`BookingID`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`GuestID`);

--
-- Indexes for table `listmenu`
--
ALTER TABLE `listmenu`
  ADD PRIMARY KEY (`MunuID`);

--
-- Indexes for table `tablemantraplan`
--
ALTER TABLE `tablemantraplan`
  ADD PRIMARY KEY (`TableID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingres`
--
ALTER TABLE `bookingres`
  MODIFY `BookingID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `GuestID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `listmenu`
--
ALTER TABLE `listmenu`
  MODIFY `MunuID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;

--
-- AUTO_INCREMENT for table `tablemantraplan`
--
ALTER TABLE `tablemantraplan`
  MODIFY `TableID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100302;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=513;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
