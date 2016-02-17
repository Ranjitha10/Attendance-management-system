-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2015 at 11:33 AM
-- Server version: 5.5.38
-- PHP Version: 5.3.10-1ubuntu3.21

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `usn` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(40) NOT NULL,
  `sub_id` varchar(40) NOT NULL,
  `semester` int(11) NOT NULL,
  `semester_type` int(11) NOT NULL,
  `acad_year` varchar(10) NOT NULL,
  `class_date` date NOT NULL,
  `class_num` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`usn`,`semester`,`semester_type`,`sub_id`,`acad_year`,`class_date`,`class_num`,`status`),
  KEY `sub_id` (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`usn`, `name`, `sub_id`, `semester`, `semester_type`, `acad_year`, `class_date`, `class_num`, `status`) VALUES
('1RV12IS001', 'Adesh Kishan', '12HSC73', 7, 1, '2015', '2015-11-06', 1, 0),
('1RV12IS001', 'Adesh Kishan', '12HSC73', 7, 1, '2015', '2015-11-13', 1, 1),
('1RV12IS001', 'Adesh Kishan', '12HSC73', 7, 1, '2015', '2015-11-20', 1, 0),
('1RV12IS001', 'Adesh Kishan', '12HSC73', 7, 1, '2015', '2015-11-27', 1, 1),
('1RV12IS001', 'Adesh Kishan', '12IS71', 7, 1, '2015', '2015-11-09', 1, 1),
('1RV12IS001', 'Adesh Kishan', '12IS71', 7, 1, '2015', '2015-11-09', 2, 1),
('1RV12IS001', 'Adesh Kishan', '12IS71', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS001', 'Adesh Kishan', '12IS72', 7, 1, '2015', '2015-11-09', 1, 1),
('1RV12IS001', 'Adesh Kishan', '12IS72', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS001', 'Adesh Kishan', '12IS72', 7, 1, '2015', '2015-11-23', 1, 1),
('1RV12IS001', 'Adesh Kishan', '12IS74', 7, 1, '2015', '2015-11-05', 1, 1),
('1RV12IS001', 'Adesh Kishan', '12IS74', 7, 1, '2015', '2015-11-12', 1, 0),
('1RV12IS001', 'Adesh Kishan', '12IS74', 7, 1, '2015', '2015-11-19', 1, 0),
('1RV12IS002', 'Akhil Yadav', '12HSC73', 7, 1, '2015', '2015-11-06', 1, 1),
('1RV12IS002', 'Akhil Yadav', '12HSC73', 7, 1, '2015', '2015-11-13', 1, 1),
('1RV12IS002', 'Akhil Yadav', '12HSC73', 7, 1, '2015', '2015-11-20', 1, 1),
('1RV12IS002', 'Akhil Yadav', '12HSC73', 7, 1, '2015', '2015-11-27', 1, 1),
('1RV12IS002', 'Akhil Yadav', '12IS71', 7, 1, '2015', '2015-11-09', 1, 1),
('1RV12IS002', 'Akhil Yadav', '12IS71', 7, 1, '2015', '2015-11-09', 2, 1),
('1RV12IS002', 'Akhil Yadav', '12IS71', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS002', 'Akhil Yadav', '12IS72', 7, 1, '2015', '2015-11-09', 1, 1),
('1RV12IS002', 'Akhil Yadav', '12IS72', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS002', 'Akhil Yadav', '12IS72', 7, 1, '2015', '2015-11-23', 1, 1),
('1RV12IS002', 'Akhil Yadav', '12IS74', 7, 1, '2015', '2015-11-05', 1, 1),
('1RV12IS002', 'Akhil Yadav', '12IS74', 7, 1, '2015', '2015-11-12', 1, 1),
('1RV12IS002', 'Akhil Yadav', '12IS74', 7, 1, '2015', '2015-11-19', 1, 1),
('1RV12IS003', 'Amarpreet Singh', '12HSC73', 7, 1, '2015', '2015-11-06', 1, 1),
('1RV12IS003', 'Amarpreet Singh', '12HSC73', 7, 1, '2015', '2015-11-13', 1, 1),
('1RV12IS003', 'Amarpreet Singh', '12HSC73', 7, 1, '2015', '2015-11-20', 1, 1),
('1RV12IS003', 'Amarpreet Singh', '12HSC73', 7, 1, '2015', '2015-11-27', 1, 1),
('1RV12IS003', 'Amarpreet Singh', '12IS71', 7, 1, '2015', '2015-11-09', 1, 1),
('1RV12IS003', 'Amarpreet Singh', '12IS71', 7, 1, '2015', '2015-11-09', 2, 1),
('1RV12IS003', 'Amarpreet Singh', '12IS71', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS003', 'Amarpreet Singh', '12IS72', 7, 1, '2015', '2015-11-09', 1, 1),
('1RV12IS003', 'Amarpreet Singh', '12IS72', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS003', 'Amarpreet Singh', '12IS72', 7, 1, '2015', '2015-11-23', 1, 1),
('1RV12IS003', 'Amarpreet Singh', '12IS74', 7, 1, '2015', '2015-11-05', 1, 1),
('1RV12IS003', 'Amarpreet Singh', '12IS74', 7, 1, '2015', '2015-11-12', 1, 1),
('1RV12IS003', 'Amarpreet Singh', '12IS74', 7, 1, '2015', '2015-11-19', 1, 1),
('1RV12IS004', 'Anirudh V C', '12HSC73', 7, 1, '2015', '2015-11-06', 1, 1),
('1RV12IS004', 'Anirudh V C', '12HSC73', 7, 1, '2015', '2015-11-13', 1, 1),
('1RV12IS004', 'Anirudh V C', '12HSC73', 7, 1, '2015', '2015-11-20', 1, 1),
('1RV12IS004', 'Anirudh V C', '12HSC73', 7, 1, '2015', '2015-11-27', 1, 1),
('1RV12IS004', 'Anirudh V C', '12IS71', 7, 1, '2015', '2015-11-09', 1, 1),
('1RV12IS004', 'Anirudh V C', '12IS71', 7, 1, '2015', '2015-11-09', 2, 1),
('1RV12IS004', 'Anirudh V C', '12IS71', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS004', 'Anirudh V C', '12IS72', 7, 1, '2015', '2015-11-09', 1, 1),
('1RV12IS004', 'Anirudh V C', '12IS72', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS004', 'Anirudh V C', '12IS72', 7, 1, '2015', '2015-11-23', 1, 1),
('1RV12IS004', 'Anirudh V C', '12IS74', 7, 1, '2015', '2015-11-05', 1, 1),
('1RV12IS004', 'Anirudh V C', '12IS74', 7, 1, '2015', '2015-11-12', 1, 0),
('1RV12IS004', 'Anirudh V C', '12IS74', 7, 1, '2015', '2015-11-19', 1, 1),
('1RV12IS005', 'Anisha B S', '12HSC73', 7, 1, '2015', '2015-11-06', 1, 1),
('1RV12IS005', 'Anisha B S', '12HSC73', 7, 1, '2015', '2015-11-13', 1, 1),
('1RV12IS005', 'Anisha B S', '12HSC73', 7, 1, '2015', '2015-11-20', 1, 1),
('1RV12IS005', 'Anisha B S', '12HSC73', 7, 1, '2015', '2015-11-27', 1, 1),
('1RV12IS005', 'Anisha B S', '12IS71', 7, 1, '2015', '2015-11-09', 2, 1),
('1RV12IS005', 'Anisha B S', '12IS71', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS005', 'Anisha B S', '12IS72', 7, 1, '2015', '2015-11-09', 1, 1),
('1RV12IS005', 'Anisha B S', '12IS72', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS005', 'Anisha B S', '12IS72', 7, 1, '2015', '2015-11-23', 1, 0),
('1RV12IS005', 'Anisha B S', '12IS74', 7, 1, '2015', '2015-11-05', 1, 1),
('1RV12IS005', 'Anisha B S', '12IS74', 7, 1, '2015', '2015-11-12', 1, 0),
('1RV12IS005', 'Anisha B S', '12IS74', 7, 1, '2015', '2015-11-19', 1, 1),
('1RV12IS007', 'Anusha M', '12HSC73', 7, 1, '2015', '2015-11-06', 1, 1),
('1RV12IS007', 'Anusha M', '12HSC73', 7, 1, '2015', '2015-11-13', 1, 1),
('1RV12IS007', 'Anusha M', '12HSC73', 7, 1, '2015', '2015-11-20', 1, 1),
('1RV12IS007', 'Anusha M', '12HSC73', 7, 1, '2015', '2015-11-27', 1, 1),
('1RV12IS007', 'Anusha M', '12IS71', 7, 1, '2015', '2015-11-09', 2, 1),
('1RV12IS007', 'Anusha M', '12IS71', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS007', 'Anusha M', '12IS72', 7, 1, '2015', '2015-11-09', 1, 0),
('1RV12IS007', 'Anusha M', '12IS72', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS007', 'Anusha M', '12IS72', 7, 1, '2015', '2015-11-23', 1, 1),
('1RV12IS007', 'Anusha M', '12IS74', 7, 1, '2015', '2015-11-05', 1, 1),
('1RV12IS007', 'Anusha M', '12IS74', 7, 1, '2015', '2015-11-12', 1, 1),
('1RV12IS007', 'Anusha M', '12IS74', 7, 1, '2015', '2015-11-19', 1, 1),
('1RV12IS008', 'Aparna Joshi', '12HSC73', 7, 1, '2015', '2015-11-06', 1, 1),
('1RV12IS008', 'Aparna Joshi', '12HSC73', 7, 1, '2015', '2015-11-13', 1, 1),
('1RV12IS008', 'Aparna Joshi', '12HSC73', 7, 1, '2015', '2015-11-20', 1, 1),
('1RV12IS008', 'Aparna Joshi', '12HSC73', 7, 1, '2015', '2015-11-27', 1, 1),
('1RV12IS008', 'Aparna Joshi', '12IS71', 7, 1, '2015', '2015-11-09', 2, 1),
('1RV12IS008', 'Aparna Joshi', '12IS71', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS008', 'Aparna Joshi', '12IS72', 7, 1, '2015', '2015-11-09', 1, 1),
('1RV12IS008', 'Aparna Joshi', '12IS72', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS008', 'Aparna Joshi', '12IS72', 7, 1, '2015', '2015-11-23', 1, 1),
('1RV12IS008', 'Aparna Joshi', '12IS74', 7, 1, '2015', '2015-11-05', 1, 1),
('1RV12IS008', 'Aparna Joshi', '12IS74', 7, 1, '2015', '2015-11-12', 1, 1),
('1RV12IS008', 'Aparna Joshi', '12IS74', 7, 1, '2015', '2015-11-19', 1, 1),
('1RV12IS009', 'Apoorva N', '12HSC73', 7, 1, '2015', '2015-11-06', 1, 1),
('1RV12IS009', 'Apoorva N', '12HSC73', 7, 1, '2015', '2015-11-13', 1, 1),
('1RV12IS009', 'Apoorva N', '12HSC73', 7, 1, '2015', '2015-11-20', 1, 1),
('1RV12IS009', 'Apoorva N', '12HSC73', 7, 1, '2015', '2015-11-27', 1, 1),
('1RV12IS009', 'Apoorva N', '12IS71', 7, 1, '2015', '2015-11-09', 2, 1),
('1RV12IS009', 'Apoorva N', '12IS71', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS009', 'Apoorva N', '12IS72', 7, 1, '2015', '2015-11-09', 1, 1),
('1RV12IS009', 'Apoorva N', '12IS72', 7, 1, '2015', '2015-11-16', 1, 0),
('1RV12IS009', 'Apoorva N', '12IS72', 7, 1, '2015', '2015-11-23', 1, 0),
('1RV12IS009', 'Apoorva N', '12IS74', 7, 1, '2015', '2015-11-05', 1, 1),
('1RV12IS009', 'Apoorva N', '12IS74', 7, 1, '2015', '2015-11-12', 1, 1),
('1RV12IS009', 'Apoorva N', '12IS74', 7, 1, '2015', '2015-11-19', 1, 1),
('1RV12IS010', 'Apurva Anand', '12HSC73', 7, 1, '2015', '2015-11-06', 1, 1),
('1RV12IS010', 'Apurva Anand', '12HSC73', 7, 1, '2015', '2015-11-13', 1, 1),
('1RV12IS010', 'Apurva Anand', '12HSC73', 7, 1, '2015', '2015-11-20', 1, 1),
('1RV12IS010', 'Apurva Anand', '12HSC73', 7, 1, '2015', '2015-11-27', 1, 1),
('1RV12IS010', 'Apurva Anand', '12IS71', 7, 1, '2015', '2015-11-09', 2, 1),
('1RV12IS010', 'Apurva Anand', '12IS71', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS010', 'Apurva Anand', '12IS72', 7, 1, '2015', '2015-11-09', 1, 1),
('1RV12IS010', 'Apurva Anand', '12IS72', 7, 1, '2015', '2015-11-16', 1, 0),
('1RV12IS010', 'Apurva Anand', '12IS72', 7, 1, '2015', '2015-11-23', 1, 1),
('1RV12IS010', 'Apurva Anand', '12IS74', 7, 1, '2015', '2015-11-05', 1, 1),
('1RV12IS010', 'Apurva Anand', '12IS74', 7, 1, '2015', '2015-11-12', 1, 1),
('1RV12IS010', 'Apurva Anand', '12IS74', 7, 1, '2015', '2015-11-19', 1, 1),
('1RV12IS011', 'Archana M R', '12HSC73', 7, 1, '2015', '2015-11-06', 1, 1),
('1RV12IS011', 'Archana M R', '12HSC73', 7, 1, '2015', '2015-11-13', 1, 1),
('1RV12IS011', 'Archana M R', '12HSC73', 7, 1, '2015', '2015-11-20', 1, 1),
('1RV12IS011', 'Archana M R', '12HSC73', 7, 1, '2015', '2015-11-27', 1, 1),
('1RV12IS011', 'Archana M R', '12IS71', 7, 1, '2015', '2015-11-09', 2, 1),
('1RV12IS011', 'Archana M R', '12IS71', 7, 1, '2015', '2015-11-16', 1, 0),
('1RV12IS011', 'Archana M R', '12IS72', 7, 1, '2015', '2015-11-09', 1, 1),
('1RV12IS011', 'Archana M R', '12IS72', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS011', 'Archana M R', '12IS72', 7, 1, '2015', '2015-11-23', 1, 1),
('1RV12IS011', 'Archana M R', '12IS74', 7, 1, '2015', '2015-11-05', 1, 1),
('1RV12IS011', 'Archana M R', '12IS74', 7, 1, '2015', '2015-11-12', 1, 1),
('1RV12IS011', 'Archana M R', '12IS74', 7, 1, '2015', '2015-11-19', 1, 1),
('1RV12IS012', 'Arnab Roy', '12HSC73', 7, 1, '2015', '2015-11-06', 1, 1),
('1RV12IS012', 'Arnab Roy', '12HSC73', 7, 1, '2015', '2015-11-13', 1, 1),
('1RV12IS012', 'Arnab Roy', '12HSC73', 7, 1, '2015', '2015-11-20', 1, 1),
('1RV12IS012', 'Arnab Roy', '12HSC73', 7, 1, '2015', '2015-11-27', 1, 1),
('1RV12IS012', 'Arnab Roy', '12IS71', 7, 1, '2015', '2015-11-09', 2, 0),
('1RV12IS012', 'Arnab Roy', '12IS71', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS012', 'Arnab Roy', '12IS72', 7, 1, '2015', '2015-11-09', 1, 0),
('1RV12IS012', 'Arnab Roy', '12IS72', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS012', 'Arnab Roy', '12IS72', 7, 1, '2015', '2015-11-23', 1, 0),
('1RV12IS012', 'Arnab Roy', '12IS74', 7, 1, '2015', '2015-11-05', 1, 1),
('1RV12IS012', 'Arnab Roy', '12IS74', 7, 1, '2015', '2015-11-12', 1, 1),
('1RV12IS012', 'Arnab Roy', '12IS74', 7, 1, '2015', '2015-11-19', 1, 0),
('1RV12IS013', 'Atulit Shankar', '12HSC73', 7, 1, '2015', '2015-11-06', 1, 1),
('1RV12IS013', 'Atulit Shankar', '12HSC73', 7, 1, '2015', '2015-11-13', 1, 0),
('1RV12IS013', 'Atulit Shankar', '12HSC73', 7, 1, '2015', '2015-11-20', 1, 0),
('1RV12IS013', 'Atulit Shankar', '12HSC73', 7, 1, '2015', '2015-11-27', 1, 1),
('1RV12IS013', 'Atulit Shankar', '12IS71', 7, 1, '2015', '2015-11-09', 1, 0),
('1RV12IS013', 'Atulit Shankar', '12IS71', 7, 1, '2015', '2015-11-09', 2, 1),
('1RV12IS013', 'Atulit Shankar', '12IS71', 7, 1, '2015', '2015-11-16', 1, 0),
('1RV12IS013', 'Atulit Shankar', '12IS72', 7, 1, '2015', '2015-11-09', 1, 1),
('1RV12IS013', 'Atulit Shankar', '12IS72', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS013', 'Atulit Shankar', '12IS72', 7, 1, '2015', '2015-11-23', 1, 1),
('1RV12IS013', 'Atulit Shankar', '12IS74', 7, 1, '2015', '2015-11-05', 1, 1),
('1RV12IS013', 'Atulit Shankar', '12IS74', 7, 1, '2015', '2015-11-12', 1, 1),
('1RV12IS013', 'Atulit Shankar', '12IS74', 7, 1, '2015', '2015-11-19', 1, 1),
('1RV12IS015', 'D Shikar', '12HSC73', 7, 1, '2015', '2015-11-06', 1, 0),
('1RV12IS015', 'D Shikar', '12HSC73', 7, 1, '2015', '2015-11-13', 1, 1),
('1RV12IS015', 'D Shikar', '12HSC73', 7, 1, '2015', '2015-11-20', 1, 1),
('1RV12IS015', 'D Shikar', '12HSC73', 7, 1, '2015', '2015-11-27', 1, 1),
('1RV12IS015', 'D Shikar', '12IS71', 7, 1, '2015', '2015-11-09', 2, 1),
('1RV12IS015', 'D Shikar', '12IS71', 7, 1, '2015', '2015-11-16', 1, 0),
('1RV12IS015', 'D Shikar', '12IS72', 7, 1, '2015', '2015-11-09', 1, 1),
('1RV12IS015', 'D Shikar', '12IS72', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS015', 'D Shikar', '12IS72', 7, 1, '2015', '2015-11-23', 1, 1),
('1RV12IS015', 'D Shikar', '12IS74', 7, 1, '2015', '2015-11-05', 1, 1),
('1RV12IS015', 'D Shikar', '12IS74', 7, 1, '2015', '2015-11-12', 1, 1),
('1RV12IS015', 'D Shikar', '12IS74', 7, 1, '2015', '2015-11-19', 1, 1),
('1RV12IS016', 'Dhwani Gupta', '12HSC73', 7, 1, '2015', '2015-11-06', 1, 1),
('1RV12IS016', 'Dhwani Gupta', '12HSC73', 7, 1, '2015', '2015-11-13', 1, 1),
('1RV12IS016', 'Dhwani Gupta', '12HSC73', 7, 1, '2015', '2015-11-20', 1, 1),
('1RV12IS016', 'Dhwani Gupta', '12HSC73', 7, 1, '2015', '2015-11-27', 1, 1),
('1RV12IS016', 'Dhwani Gupta', '12IS71', 7, 1, '2015', '2015-11-09', 2, 1),
('1RV12IS016', 'Dhwani Gupta', '12IS71', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS016', 'Dhwani Gupta', '12IS72', 7, 1, '2015', '2015-11-09', 1, 1),
('1RV12IS016', 'Dhwani Gupta', '12IS72', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS016', 'Dhwani Gupta', '12IS72', 7, 1, '2015', '2015-11-23', 1, 1),
('1RV12IS016', 'Dhwani Gupta', '12IS74', 7, 1, '2015', '2015-11-05', 1, 0),
('1RV12IS016', 'Dhwani Gupta', '12IS74', 7, 1, '2015', '2015-11-12', 1, 1),
('1RV12IS016', 'Dhwani Gupta', '12IS74', 7, 1, '2015', '2015-11-19', 1, 1),
('1RV12IS019', 'Harshiya K', '12HSC73', 7, 1, '2015', '2015-11-06', 1, 1),
('1RV12IS019', 'Harshiya K', '12HSC73', 7, 1, '2015', '2015-11-13', 1, 1),
('1RV12IS019', 'Harshiya K', '12HSC73', 7, 1, '2015', '2015-11-20', 1, 1),
('1RV12IS019', 'Harshiya K', '12HSC73', 7, 1, '2015', '2015-11-27', 1, 1),
('1RV12IS019', 'Harshiya K', '12IS71', 7, 1, '2015', '2015-11-09', 1, 1),
('1RV12IS019', 'Harshiya K', '12IS71', 7, 1, '2015', '2015-11-09', 2, 0),
('1RV12IS019', 'Harshiya K', '12IS71', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS019', 'Harshiya K', '12IS72', 7, 1, '2015', '2015-11-09', 1, 1),
('1RV12IS019', 'Harshiya K', '12IS72', 7, 1, '2015', '2015-11-16', 1, 1),
('1RV12IS019', 'Harshiya K', '12IS72', 7, 1, '2015', '2015-11-23', 1, 1),
('1RV12IS019', 'Harshiya K', '12IS74', 7, 1, '2015', '2015-11-05', 1, 1),
('1RV12IS019', 'Harshiya K', '12IS74', 7, 1, '2015', '2015-11-12', 1, 1),
('1RV12IS019', 'Harshiya K', '12IS74', 7, 1, '2015', '2015-11-19', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE IF NOT EXISTS `date` (
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`start`, `end`) VALUES
('2015-12-02', '2016-01-01'),
('2015-12-02', '2016-01-01'),
('2015-12-02', '2016-01-01'),
('2015-12-02', '2016-01-01'),
('2015-12-02', '2016-01-01'),
('2015-12-02', '2016-01-01'),
('2015-12-02', '2016-01-01'),
('2015-12-02', '2016-01-01'),
('2015-08-03', '2015-12-22'),
('2015-08-03', '2015-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `dep_id` varchar(5) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `name`, `email`) VALUES
('CSE', 'Computer Science and Engineering', ''),
('ECE', 'Electronics Communications and Engineeri', ''),
('EEE', 'Electrical Engineering', ''),
('ISE', 'Information Science and Engineering', 'example@example.com'),
('ME', 'Mechanical Enginerring', ''),
('TE', 'Telecommunication Engineering', '');

-- --------------------------------------------------------

--
-- Table structure for table `dept_login`
--

CREATE TABLE IF NOT EXISTS `dept_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_login`
--

INSERT INTO `dept_login` (`username`, `password`) VALUES
('CSE', 'qwerty'),
('ECE', 'qwerty'),
('EEE', 'qwerty'),
('IEM', 'qwerty'),
('ISE', 'qwerty'),
('ME', 'qwerty'),
('TE', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` varchar(5) NOT NULL,
  `name` varchar(40) NOT NULL,
  `department` varchar(10) NOT NULL,
  `year_of_joining` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `designation` text NOT NULL,
  `Type` varchar(10) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `name`, `department`, `year_of_joining`, `email`, `phone`, `address`, `designation`, `Type`) VALUES
('ABS', 'Anisha B S', 'ISE', 2006, 'akul911@gmail.com', '9845098450', 'Basavanagudi', '', ''),
('BKS', 'B K Srinivas', 'ISE', 2006, 'akul911@gmail.com', '9845098450', 'Basavanagudi', '', ''),
('BMS', 'B M Sagar', 'ISE', 2006, 'akul911@gmail.com', '9845098450', 'Basavanagudi', '', ''),
('CBT', 'Chithra B T', 'IEM', 2009, 'example@example.com', '9898989898', 'Bangalore', 'Assistant Professor', 'UG'),
('DP', 'D Priya', 'ISE', 2000, 'example@example.com', '9898989898', 'test', 'assistant professor', ''),
('GNS', 'G N Srinivasan', 'ISE', 2005, 'example@example.com', '9999999999', 'test', 'Professor', ''),
('GSM', 'G S Mamatha', 'ISE', 2008, 'example@example.com', '9898989898', 'test', 'associate professor', ''),
('JM', 'Dr. Jitendranath Mungara', 'ISE', 2012, 'example@example.com', '9898989898', 'Bnagalore', 'Professor', 'UG'),
('KSN', 'Kavitha S N', 'ISE', 2009, 'example@example.com', '9898989898', 'test', 'assistant professor', ''),
('NKC', 'N K Cauvery', 'ISE', 2006, 'akul911@gmail.com', '9845098450', 'Basavanagudi', '', ''),
('PT', 'Padmshree T', 'ISE', 2007, 'example@example.com', '9898989898', 'test', 'assistant professor', ''),
('RR', 'Rashmi R', 'ISE', 2009, 'dfsg@gmail.com', '9898989898', 'dfsef', 'dfdef', 'UG'),
('SGR', 'S G Raghavendra', 'ISE', 2006, 'akul911@gmail.com', '9845098450', 'Basavanagudi', '', ''),
('SN', 'Dr. Shantharam Nayak', 'ISE', 2001, 'example@example.com', '9898989898', 'Bangalore', 'Professor', 'UG');

-- --------------------------------------------------------

--
-- Table structure for table `staff_login`
--

CREATE TABLE IF NOT EXISTS `staff_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_login`
--

INSERT INTO `staff_login` (`username`, `password`) VALUES
('ABS', 'qwerty'),
('AS', 'qwerty'),
('BKS', 'qwerty'),
('BMS', 'qwerty'),
('CBT', 'qwerty'),
('DP', 'qwerty'),
('GNS', 'qwerty'),
('GSM', 'qwerty'),
('JM', 'qwerty'),
('KSN', 'qwerty'),
('NKC', 'qwerty'),
('PT', 'qwerty'),
('RR', 'qwerty'),
('SGR', 'qwerty'),
('SN', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `staff_sub`
--

CREATE TABLE IF NOT EXISTS `staff_sub` (
  `sub_id` varchar(15) NOT NULL,
  `staff_id` varchar(60) NOT NULL,
  `acad_year` varchar(10) NOT NULL,
  `semester` int(11) NOT NULL,
  `semester_type` int(11) NOT NULL,
  PRIMARY KEY (`sub_id`,`staff_id`,`acad_year`,`semester`,`semester_type`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_sub`
--

INSERT INTO `staff_sub` (`sub_id`, `staff_id`, `acad_year`, `semester`, `semester_type`) VALUES
('12HSC73', 'CBT', '2015', 7, 1),
('12IS74', 'JM', '2015', 7, 1),
('12IS71', 'RR', '2015', 7, 1),
('12IS7E6', 'SGR', '2015', 7, 1),
('12IS72', 'SN', '2015', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `usn` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `department` varchar(40) NOT NULL,
  `acad_year` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `father_name` varchar(40) NOT NULL,
  `father_email` varchar(40) NOT NULL,
  `father_phone` varchar(40) NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `name`, `department`, `acad_year`, `email`, `phone`, `address`, `father_name`, `father_email`, `father_phone`) VALUES
('1RV12IS001', 'Adesh Kishan', 'ISE', 2015, 'example@example.com', '9898989898', 'test', 'my father', 'example@example.com', '9898989898'),
('1RV12IS002', 'Akhil Yadav', 'ISE', 2014, 'example@example.com', '9898989898', 'test', 'my father', 'example@example.com', '9898989898'),
('1RV12IS003', 'Amarpreet Singh', 'ISE', 2013, 'example@example.com', '9898989898', 'TEST', 'MY father', 'example@example.com', '9898989898'),
('1RV12IS004', 'Anirudh V C', 'ISE', 2014, 'example@example.com', '9898989898', 'test', 'my father', 'example@example.com', '9898989898'),
('1RV12IS005', 'Anisha B S', 'ISE', 2015, 'example@example.com', '9898989898', 'Bangalore', 'Test', 'example@example.com', '7878787878'),
('1RV12IS007', 'Anusha M', 'ISE', 2015, 'example@example.com', '9898989898', 'Bangalore', 'Test', 'example@example.com', '7878787878'),
('1RV12IS008', 'Aparna Joshi', 'ISE', 2015, 'example@example.com', '9898989898', 'Bangalore', 'Test', 'example@example.com', '7878787878'),
('1RV12IS009', 'Apoorva N', 'ISE', 2015, 'example@example.com', '9898989898', 'Bangalore', 'Test', 'example@example.com', '7878787878'),
('1RV12IS010', 'Apurva Anand', 'ISE', 2015, 'example@example.com', '9898989898', 'Bangalore', 'Test', 'example@example.com', '7878787878'),
('1RV12IS011', 'Archana M R', 'ISE', 2015, 'example@example.com', '9898989898', 'Bangalore', 'Test', 'example@example.com', '9898989898'),
('1RV12IS012', 'Arnab Roy', 'ISE', 2015, 'example@example.com', '9898989898', 'Bangalore', 'Test', 'example@example.com', '9898989898'),
('1RV12IS013', 'Atulit Shankar', 'ISE', 2014, 'chillatulit@gmail.com', '8892898160', 'Bangalore', 'My father', 'father@example.com', '9845698456'),
('1RV12IS015', 'D Shikar', 'ISE', 2015, 'example@example.com', '9898989898', 'Bangalore', 'Test', 'example@example.com', '9898989898'),
('1RV12IS016', 'Dhwani Gupta', 'ISE', 2015, 'example@example.com', '9898989898', 'Bangalore', 'Test', 'example@example.com', '9898989898'),
('1RV12IS019', 'Harshiya K', 'ISE', 2014, 'example@example.com', '9898989898', 'test', 'my father', 'example@example.com', '9898989898');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE IF NOT EXISTS `student_login` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`Username`, `Password`) VALUES
('1RV12IS001', 'qwerty'),
('1RV12IS002', 'qwerty'),
('1RV12IS003', 'qwerty'),
('1RV12IS004', 'qwerty'),
('1RV12IS007', 'qwerty'),
('1RV12IS008', 'qwerty'),
('1RV12IS009', 'qwerty'),
('1RV12IS010', 'qwerty'),
('1RV12IS011', 'qwerty'),
('1RV12IS012', 'qwerty'),
('1RV12IS013', 'qwerty'),
('1RV12IS015', 'qwerty'),
('1RV12IS016', 'qwerty'),
('1RV12IS019', 'qwerty'),
('1RV12IS005', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `student_subject`
--

CREATE TABLE IF NOT EXISTS `student_subject` (
  `usn` varchar(10) NOT NULL,
  `sub_id` varchar(10) NOT NULL,
  `acad_year` year(4) NOT NULL,
  `semester` int(11) NOT NULL,
  `semester_type` varchar(100) NOT NULL,
  PRIMARY KEY (`usn`,`sub_id`,`acad_year`,`semester`),
  KEY `sub_id` (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_subject`
--

INSERT INTO `student_subject` (`usn`, `sub_id`, `acad_year`, `semester`, `semester_type`) VALUES
('1RV12IS001', '12HSC73', 2015, 7, '1'),
('1RV12IS001', '12IS71', 2015, 7, '1'),
('1RV12IS001', '12IS72', 2015, 7, '1'),
('1RV12IS001', '12IS74', 2015, 7, '1'),
('1RV12IS002', '12HSC73', 2015, 7, '1'),
('1RV12IS002', '12IS71', 2015, 7, '1'),
('1RV12IS002', '12IS72', 2015, 7, '1'),
('1RV12IS002', '12IS74', 2015, 7, '1'),
('1RV12IS003', '12HSC73', 2015, 7, '1'),
('1RV12IS003', '12IS71', 2015, 7, '1'),
('1RV12IS003', '12IS72', 2015, 7, '1'),
('1RV12IS003', '12IS74', 2015, 7, '1'),
('1RV12IS004', '12HSC73', 2015, 7, '1'),
('1RV12IS004', '12IS71', 2015, 7, '1'),
('1RV12IS004', '12IS72', 2015, 7, '1'),
('1RV12IS004', '12IS74', 2015, 7, '1'),
('1RV12IS005', '12HSC73', 2015, 7, '1'),
('1RV12IS005', '12IS71', 2015, 7, '1'),
('1RV12IS005', '12IS72', 2015, 7, '1'),
('1RV12IS005', '12IS74', 2015, 7, '1'),
('1RV12IS007', '12HSC73', 2015, 7, '1'),
('1RV12IS007', '12IS71', 2015, 7, '1'),
('1RV12IS007', '12IS72', 2015, 7, '1'),
('1RV12IS007', '12IS74', 2015, 7, '1'),
('1RV12IS008', '12HSC73', 2015, 7, '1'),
('1RV12IS008', '12IS71', 2015, 7, '1'),
('1RV12IS008', '12IS72', 2015, 7, '1'),
('1RV12IS008', '12IS74', 2015, 7, '1'),
('1RV12IS009', '12HSC73', 2015, 7, '1'),
('1RV12IS009', '12IS71', 2015, 7, '1'),
('1RV12IS009', '12IS72', 2015, 7, '1'),
('1RV12IS009', '12IS74', 2015, 7, '1'),
('1RV12IS010', '12HSC73', 2015, 7, '1'),
('1RV12IS010', '12IS71', 2015, 7, '1'),
('1RV12IS010', '12IS72', 2015, 7, '1'),
('1RV12IS010', '12IS74', 2015, 7, '1'),
('1RV12IS011', '12HSC73', 2015, 7, '1'),
('1RV12IS011', '12IS71', 2015, 7, '1'),
('1RV12IS011', '12IS72', 2015, 7, '1'),
('1RV12IS011', '12IS74', 2015, 7, '1'),
('1RV12IS012', '12HSC73', 2015, 7, '1'),
('1RV12IS012', '12IS71', 2015, 7, '1'),
('1RV12IS012', '12IS72', 2015, 7, '1'),
('1RV12IS012', '12IS74', 2015, 7, '1'),
('1RV12IS013', '12HSC73', 2015, 7, '1'),
('1RV12IS013', '12IS71', 2015, 7, '1'),
('1RV12IS013', '12IS72', 2015, 7, '1'),
('1RV12IS013', '12IS74', 2015, 7, '1'),
('1RV12IS015', '12HSC73', 2015, 7, '1'),
('1RV12IS015', '12IS71', 2015, 7, '1'),
('1RV12IS015', '12IS72', 2015, 7, '1'),
('1RV12IS015', '12IS74', 2015, 7, '1'),
('1RV12IS016', '12HSC73', 2015, 7, '1'),
('1RV12IS016', '12IS71', 2015, 7, '1'),
('1RV12IS016', '12IS72', 2015, 7, '1'),
('1RV12IS016', '12IS74', 2015, 7, '1'),
('1RV12IS019', '12HSC73', 2015, 7, '1'),
('1RV12IS019', '12IS71', 2015, 7, '1'),
('1RV12IS019', '12IS72', 2015, 7, '1'),
('1RV12IS019', '12IS74', 2015, 7, '1');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `sub_id` varchar(15) NOT NULL,
  `name` varchar(60) NOT NULL,
  `acronym` varchar(5) NOT NULL,
  `department` varchar(10) NOT NULL,
  `credits` int(11) NOT NULL,
  `max_marks` int(11) NOT NULL,
  PRIMARY KEY (`sub_id`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `name`, `acronym`, `department`, `credits`, `max_marks`) VALUES
('12HSC73', 'Legal Studies & Professional Ethics for Engineers', 'LSPE', 'IEM', 2, 100),
('12IS71', 'Web Programming', 'WP', 'ISE', 5, 150),
('12IS72', 'Software Testing', 'ST', 'ISE', 5, 150),
('12IS74', 'Human Computer Interaction ', 'HCI', 'ISE', 3, 100),
('12IS7E6', 'Fuzzy Logic And Genetic Algorithm', 'FLGA', 'ISE', 3, 100);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `acad_year` varchar(10) NOT NULL,
  `semester` int(11) NOT NULL,
  `semester_type` int(11) NOT NULL,
  `sub_id` varchar(15) NOT NULL,
  `day` varchar(15) NOT NULL DEFAULT '',
  `start_time` varchar(10) NOT NULL,
  `end_time` varchar(10) NOT NULL,
  PRIMARY KEY (`acad_year`,`semester`,`semester_type`,`sub_id`,`day`,`start_time`,`end_time`),
  KEY `sub_id` (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`acad_year`, `semester`, `semester_type`, `sub_id`, `day`, `start_time`, `end_time`) VALUES
('2015', 7, 1, '12HSC73', 'friday', '9', '10'),
('2015', 7, 1, '12HSC73', 'monday', '2.15', '3.15'),
('2015', 7, 1, '12IS71', 'friday', '11.30', '12.30'),
('2015', 7, 1, '12IS71', 'monday', '3.15', '4.15'),
('2015', 7, 1, '12IS71', 'tueday', '10', '11'),
('2015', 7, 1, '12IS71', 'wedday', '11.30', '12.30'),
('2015', 7, 1, '12IS72', 'friday', '10', '11'),
('2015', 7, 1, '12IS72', 'monday', '12.30', '1.30'),
('2015', 7, 1, '12IS72', 'thuday', '1', '2'),
('2015', 7, 1, '12IS72', 'tueday', '9', '10'),
('2015', 7, 1, '12IS74', 'monday', '11.30', '12.30'),
('2015', 7, 1, '12IS74', 'thuday', '2.45', '3.45'),
('2015', 7, 1, '12IS74', 'wedday', '10', '11');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`sub_id`);

--
-- Constraints for table `staff_sub`
--
ALTER TABLE `staff_sub`
  ADD CONSTRAINT `staff_sub_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`sub_id`),
  ADD CONSTRAINT `staff_sub_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `student_subject`
--
ALTER TABLE `student_subject`
  ADD CONSTRAINT `student_subject_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`),
  ADD CONSTRAINT `student_subject_ibfk_2` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`sub_id`);

--
-- Constraints for table `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `timetable_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`sub_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
