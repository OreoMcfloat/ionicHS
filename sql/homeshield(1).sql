-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2017 at 10:11 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeshield`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `acc_id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`acc_id`, `username`, `password`, `fullname`, `address`, `contact`) VALUES
(201410505, 'oreomcfloat', '12345', 'John Philip Canlas', '3 Leyva St. Mabayuan Olongapo City', '09320158119');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'TeamHSAdmin', 'Aa1234567'),
(2, 'Police101', 'Aa1234567');

-- --------------------------------------------------------

--
-- Table structure for table `alert_historyincident`
--

CREATE TABLE `alert_historyincident` (
  `incident_id` int(11) NOT NULL,
  `alert` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `incident_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alert_historyincident`
--

INSERT INTO `alert_historyincident` (`incident_id`, `alert`, `description`, `incident_date`) VALUES
(1, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:02:17'),
(2, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:02:18'),
(3, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:02:19'),
(4, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:02:20'),
(5, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:02:22'),
(6, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:54:44'),
(7, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:54:45'),
(8, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:54:46'),
(9, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:54:47'),
(10, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:54:48'),
(11, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `alert_incident`
--

CREATE TABLE `alert_incident` (
  `incident_id` int(100) NOT NULL,
  `alert` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `incident_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alert_incident`
--

INSERT INTO `alert_incident` (`incident_id`, `alert`, `description`, `incident_date`) VALUES
(1, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:07:56'),
(2, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:07:57'),
(3, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:07:58'),
(4, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:08:01'),
(5, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:08:02'),
(6, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:08:03'),
(7, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:08:04'),
(8, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:08:05'),
(9, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:54:44'),
(10, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:54:45'),
(11, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:54:46'),
(12, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:54:47'),
(13, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:54:48'),
(14, 'Intruder Alert!', 'Someone Open The Door!', '2017-05-15 05:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `all_devicedata`
--

CREATE TABLE `all_devicedata` (
  `id` int(11) NOT NULL,
  `deviceStatus` varchar(200) NOT NULL,
  `alertStatus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_devicedata`
--

INSERT INTO `all_devicedata` (`id`, `deviceStatus`, `alertStatus`) VALUES
(1129, '"calibrating sensor ..............................DeviceDeactivated"', '"NONE"'),
(1130, '"DeviceDeactivated"', '"NONE"'),
(1131, '"DeviceDeactivated"', '"NONE"'),
(1132, '"DeviceDeactivated"', '"NO"'),
(1133, '"DeviceDeactivated"', '"NONE"'),
(1134, '"DeviceDeactivated"', '"NONE"'),
(1135, '"DeviceDeactivated"', '"NON"'),
(1136, '"DeviceDeactivated"', '"NON"'),
(1137, '"DeviceDeactivated"', '"NON"'),
(1138, '"DeviceDeactivated"', '"NON"'),
(1139, '"DeviceDeactivated"', '"NONE"'),
(1140, '"DeviceDeactivated"', '"NONE"'),
(1141, '"DeviceDeactivated"', '"NONE"'),
(1142, '"DeviceDeactivated"', '"NONE"'),
(1143, '"DeviceDeactivated"', '"NONE"'),
(1144, '"DeviceDeactivated"', '""'),
(1145, '"DeviceDeactivated"', '"NONE"'),
(1146, '"DeviceDeactivated"', '"NONE"'),
(1147, '"DeviceDeactivated"', '"NONE"'),
(1148, '"DeviceDeactivated"', '"NONE"'),
(1149, '"DeviceActivated"', '"NONE"'),
(1150, '"DeviceActivated"', '"NONE"'),
(1151, '"DeviceActivated"', '"NONE"'),
(1152, '"DeviceActivated"', '"NONE"'),
(1153, '"DeviceActivated"', '"NONE"'),
(1154, '"DeviceDeactivated"', '"NONE"'),
(1155, '"DeviceDeactivated"', '"NONE"'),
(1156, '"DeviceDeactivated"', '"NONE"'),
(1157, '"DeviceDeactivated"', '"N"'),
(1158, '"DeviceDeactivated"', '"N"'),
(1159, '"DeviceDeactivated"', '"N"'),
(1160, '"DeviceDeactivated"', '"NONE"'),
(1161, '"DeviceDeactivated"', '"NONE"'),
(1162, '"DeviceDeactivated"', '"NONE"'),
(1163, '"DeviceDeactivated"', '"NONE"'),
(1164, '"DeviceDeactivated"', '"NONE"'),
(1165, '"DeviceDeactivated"', '"NONE"'),
(1166, '"DeviceDeactivated"', '"NONE"'),
(1167, '"DeviceDeactivated"', '"NONE"'),
(1168, '"DeviceDeactivated"', '"NONE"'),
(1169, '"DeviceDeactivated"', '"NONE"'),
(1170, '"DeviceDeactivated"', '"NONE"'),
(1171, '"DeviceDeactivated"', '"NONE"'),
(1172, '"DeviceDeactivated"', '"NON"'),
(1173, '"DeviceDeactivated"', '"NONE"'),
(1174, '"DeviceDeactivated"', '"NONE"'),
(1175, '"DeviceActivated"', '"NONE"'),
(1176, '"DeviceActivated"', '"NONE"'),
(1177, '"DeviceActivated"', '"NON"'),
(1178, '"DeviceActivated"', '"NONE"'),
(1179, '"DeviceActivated"', '""'),
(1180, '"DeviceActivated"', '""'),
(1181, '"DeviceActivated"', '"NONE"'),
(1182, '"DeviceActivated"', '"NONE"'),
(1183, '"DeviceDeactivated"', '"NONE"'),
(1184, '"DeviceDeactivated"', '"NONE"'),
(1185, '"DeviceDeactivated"', '"NONE"'),
(1186, '"DeviceDeactivated"', '"NONE"'),
(1187, '"DeviceDeactivated"', '"NONE"'),
(1188, '"DeviceDeactivated"', '"NONE"'),
(1189, '"DeviceDeactivated"', '"NONE"'),
(1190, '"DeviceDeactivated"', '"NONE"'),
(1191, '"DeviceDeactivated"', '"NONE"'),
(1192, '"DeviceDeactivated"', '"NONE"'),
(1193, '"DeviceDeactivated"', '"NONE"'),
(1194, '"DeviceDeactivated"', '"NONE"'),
(1195, '"DeviceDeactivated"', '"NONE"'),
(1196, '"DeviceActivated"', '"NONE"'),
(1197, '"DeviceActivated"', '"NONE"'),
(1198, '"DeviceActivated"', '"NONE"'),
(1199, '"DeviceActivated"', '"YES"'),
(1200, '"DeviceDeactivated"', '"NONE"'),
(1201, '"DeviceDeactivated"', '"NONE"'),
(1202, '"DeviceDeactivated"', '""'),
(1203, '"DeviceDeactivated"', '""'),
(1204, '"DeviceDeactivated"', '"NO"'),
(1205, '"DeviceDeactivated"', '"NO"'),
(1206, '"DeviceDeactivated"', '"NON"'),
(1207, '"DeviceDeactivated"', '"NON"'),
(1208, '"DeviceDeactivated"', '"NONE"'),
(1209, '"DeviceDeactivated"', '"NONE"'),
(1210, '"DeviceDeactivated"', '"NONE"'),
(1211, '"DeviceDeactivated"', '"NONE"'),
(1212, '"DeviceDeactivated"', '"NONE"'),
(1213, '"DeviceDeactivated"', '"NONE"'),
(1214, '"DeviceDeactivated"', '"NONE"'),
(1215, '"DeviceDeactivated"', '"NONE"'),
(1216, '"DeviceDeactivated"', '"NONE"'),
(1217, '"DeviceDeactivated"', '"NONE"'),
(1218, '"DeviceDeactivated"', '"NONE"'),
(1219, '"DeviceDeactivated"', '"NONE"'),
(1220, '"DeviceDeactivated"', '"NO"'),
(1221, '"DeviceDeactivated"', '"NONE"'),
(1222, '"DeviceDeactivated"', '"N"'),
(1223, '"DeviceActivated"', '"NO"'),
(1224, '"DeviceActivated"', '"NONE"'),
(1225, '"DeviceActivated"', '"YE"'),
(1226, '"DeviceActivated"', '"NONE"'),
(1227, '"DeviceDeactivated"', '"NONE"'),
(1228, '"DeviceDeactivated"', '""'),
(1229, '"DeviceDeactivated"', '"NONE"'),
(1230, '"DeviceActivated"', '"NONE"'),
(1231, '"DeviceActivated"', '"NONE"'),
(1232, '"DeviceActivated"', '"Y"'),
(1233, '"DeviceActivated"', '"NONE"'),
(1234, '"DeviceDeactivated"', '"N"'),
(1235, '"DeviceDeactivated"', '"NON"'),
(1236, '"DeviceDeactivated"', '"NON"'),
(1237, '"DeviceDeactivated"', '"N"'),
(1238, '"DeviceDeactivated"', '"N"'),
(1239, '"DeviceDeactivated"', '"NONE"'),
(1240, '"DeviceDeactivated"', '"NONE"'),
(1241, '"DeviceDeactivated"', '"NONE"'),
(1242, '"DeviceActivated"', '"NON"'),
(1243, '"DeviceActivated"', '"YE"'),
(1244, '"DeviceActivated"', '"NO"'),
(1245, '"DeviceActivated"', '"NONE"'),
(1246, '"DeviceDeactivated"', '""'),
(1247, '"DeviceDeactivated"', '""'),
(1248, '"DeviceDeactivated"', '"NONE"'),
(1249, '"DeviceDeactivated"', '"NONE"'),
(1250, '"DeviceDeactivated"', '"NONE"'),
(1251, '"DeviceDeactivated"', '"NONE"'),
(1252, '"DeviceDeactivated"', '"NONE"'),
(1253, '"DeviceActivated"', '"NONE"'),
(1254, '"DeviceActivated"', '""'),
(1255, '"DeviceActivated"', '"NONE"'),
(1256, '"DeviceActivated"', '"NONE"'),
(1257, '"DeviceActivated"', '"NONE"'),
(1258, '"DeviceDeactivated"', '"NONE"'),
(1259, '"DeviceDeactivated"', '"NONE"'),
(1260, '"DeviceDeactivated"', '"NON"'),
(1261, '"DeviceDeactivated"', '"NON"'),
(1262, '"DeviceDeactivated"', '"N"'),
(1263, '"DeviceActivated"', '"0"'),
(1264, '"DeviceActivated"', '"0"'),
(1265, '"DeviceActivated"', '"0"'),
(1266, '"DeviceActivated"', '"0"'),
(1267, '"DeviceActivated"', '"0"'),
(1268, '"DeviceActivated"', '"0"'),
(1269, '"DeviceActivated"', '"0"'),
(1270, '"DeviceActivated"', '"0"'),
(1271, '"DeviceActivated"', '"0"'),
(1272, '"DeviceActivated"', '"0"'),
(1273, '"DeviceActivated"', '"0"'),
(1274, '"DeviceActivated"', '"0"'),
(1275, '"DeviceActivated"', '"0"'),
(1276, '"DeviceActivated"', '"0"'),
(1277, '"DeviceActivated"', '"0"'),
(1278, '"DeviceActivated"', '"0"'),
(1279, '"DeviceActivated"', '"0"'),
(1280, '"DeviceActivated"', '"0"'),
(1281, '"DeviceActivated"', '"0"'),
(1282, '"DeviceActivated"', '"0"'),
(1283, '"DeviceActivated"', '"0"'),
(1284, '"DeviceActivated"', '"0"'),
(1285, '"DeviceActivated"', '"0"'),
(1286, '"DeviceActivated"', '"0"'),
(1287, '"DeviceActivated"', '"0"'),
(1288, '"DeviceActivated"', '"0"'),
(1289, '"DeviceActivated"', '"0"'),
(1290, '"DeviceActivated"', '"0"'),
(1291, '"DeviceActivated"', '"0"'),
(1292, '"DeviceActivated"', '"0"'),
(1293, '"DeviceActivated"', '"0"'),
(1294, '"DeviceActivated"', '"0"'),
(1295, '"DeviceActivated"', '"0"'),
(1296, '"DeviceActivated"', '"0"'),
(1297, '"DeviceActivated"', '"0"'),
(1298, '"DeviceActivated"', '"0"'),
(1299, '"DeviceActivated"', '"0"'),
(1300, '"DeviceActivated"', '"0"'),
(1301, '"DeviceActivated"', '"0"'),
(1302, '"DeviceActivated"', '"0"'),
(1303, '"DeviceActivated"', '"0"'),
(1304, '"DeviceActivated"', '"0"'),
(1305, '"DeviceActivated"', '"0"'),
(1306, '"DeviceDeactivated"', '"0"'),
(1307, '"DeviceDeactivated"', '"0"'),
(1308, '"DeviceDeactivated"', '"0"'),
(1309, '"DeviceDeactivated"', '"0"'),
(1310, '"DeviceDeactivated"', '"0"'),
(1311, '"DeviceDeactivated"', '"0"'),
(1312, '"DeviceDeactivated"', '"0"'),
(1313, '"DeviceDeactivated"', '"0"'),
(1314, '"DeviceDeactivated"', '"0"'),
(1315, '"DeviceDeactivated"', '"0"'),
(1316, '"DeviceDeactivated"', '"0"'),
(1317, '"DeviceDeactivated"', '"0"'),
(1318, '"DeviceDeactivated"', '"0"'),
(1319, '"DeviceDeactivated"', '"0"'),
(1320, '"DeviceDeactivated"', '"0"'),
(1321, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1322, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1323, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1324, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1325, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1326, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1327, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1328, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1329, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1330, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1331, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1332, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1333, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1334, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1335, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1336, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1337, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1338, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1339, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1340, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1341, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1342, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1343, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1344, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1345, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1346, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1347, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1348, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1349, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1350, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1351, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1352, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1353, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1354, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1355, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1356, '"calibrating sensor ..............................DeviceActivated"', '"0"'),
(1357, '"DeviceActivated"', '"0"'),
(1358, '"DeviceActivated"', '"0"'),
(1359, '"DeviceDeactivated"', '"0"'),
(1360, '"DeviceDeactivated"', '"0"');

-- --------------------------------------------------------

--
-- Table structure for table `notification_incident`
--

CREATE TABLE `notification_incident` (
  `incident_id` int(11) NOT NULL,
  `owner_name` varchar(200) NOT NULL,
  `owner_address` varchar(200) NOT NULL,
  `owner_contactnumber` varchar(200) NOT NULL,
  `incident_date` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_incident`
--

INSERT INTO `notification_incident` (`incident_id`, `owner_name`, `owner_address`, `owner_contactnumber`, `incident_date`, `status`) VALUES
(34, 'Nakpil, Prema Dasi A.', '42-18th Street East Bajac Bajac Olongapo City', '09126001094', '2017-05-06 23:01:06', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `report_incident`
--

CREATE TABLE `report_incident` (
  `id` int(11) NOT NULL,
  `incident_id` int(11) NOT NULL,
  `owner_name` varchar(200) NOT NULL,
  `owner_address` varchar(200) NOT NULL,
  `owner_contactnumber` varchar(200) NOT NULL,
  `incident_date` varchar(50) NOT NULL,
  `incident_report` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_incident`
--

INSERT INTO `report_incident` (`id`, `incident_id`, `owner_name`, `owner_address`, `owner_contactnumber`, `incident_date`, `incident_report`) VALUES
(7, 34, 'Nakpil, Prema Dasi A.', '42-18th Street East Bajac Bajac Olongapo City', '09126001094', '2017-05-06 23:01:06', 'sample');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alert_historyincident`
--
ALTER TABLE `alert_historyincident`
  ADD PRIMARY KEY (`incident_id`);

--
-- Indexes for table `alert_incident`
--
ALTER TABLE `alert_incident`
  ADD PRIMARY KEY (`incident_id`);

--
-- Indexes for table `all_devicedata`
--
ALTER TABLE `all_devicedata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_incident`
--
ALTER TABLE `notification_incident`
  ADD PRIMARY KEY (`incident_id`);

--
-- Indexes for table `report_incident`
--
ALTER TABLE `report_incident`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `acc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201410506;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `alert_historyincident`
--
ALTER TABLE `alert_historyincident`
  MODIFY `incident_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `alert_incident`
--
ALTER TABLE `alert_incident`
  MODIFY `incident_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `all_devicedata`
--
ALTER TABLE `all_devicedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1361;
--
-- AUTO_INCREMENT for table `notification_incident`
--
ALTER TABLE `notification_incident`
  MODIFY `incident_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `report_incident`
--
ALTER TABLE `report_incident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
