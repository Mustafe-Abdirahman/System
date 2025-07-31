-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2024 at 12:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alxikmadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mushaar`
--

CREATE TABLE `mushaar` (
  `Id` int(11) NOT NULL,
  `Magaca_Shaqaalaha` varchar(250) NOT NULL,
  `Mushaar` float(11,2) NOT NULL,
  `Horumarin` float(11,2) NOT NULL,
  `Xaasil` float(11,2) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mushaar`
--

INSERT INTO `mushaar` (`Id`, `Magaca_Shaqaalaha`, `Mushaar`, `Horumarin`, `Xaasil`, `Date`) VALUES
(1, '4', 45.00, 40.00, 5.00, '2024-07-17 08:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `Id` int(11) NOT NULL,
  `Invoice_No` varchar(250) NOT NULL,
  `Due_Date` date NOT NULL,
  `Faahfaahin` varchar(500) NOT NULL,
  `Xadi` float(11,2) NOT NULL,
  `Qiimaha` float(11,2) NOT NULL,
  `Wadar` float(11,2) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`Id`, `Invoice_No`, `Due_Date`, `Faahfaahin`, `Xadi`, `Qiimaha`, `Wadar`, `Date`) VALUES
(1, '34', '2024-07-16', 'Alaab', 12.00, 34.00, 408.00, '2024-07-16 17:37:01');

-- --------------------------------------------------------

--
-- Table structure for table `shaqaale`
--

CREATE TABLE `shaqaale` (
  `Id` int(11) NOT NULL,
  `Magaca_Shaqaalaha` varchar(250) NOT NULL,
  `Jinsiga` varchar(250) NOT NULL,
  `Da_da` int(11) NOT NULL,
  `Number` int(11) NOT NULL,
  `Mushaar` float(11,2) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shaqaale`
--

INSERT INTO `shaqaale` (`Id`, `Magaca_Shaqaalaha`, `Jinsiga`, `Da_da`, `Number`, `Mushaar`, `Date`) VALUES
(1, 'Fihiima Faarax ', 'dheddig', 24, 343434343, 450.00, '2024-07-17 08:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `wiishashka`
--

CREATE TABLE `wiishashka` (
  `Id` int(11) NOT NULL,
  `Magaca_Shirkada` varchar(250) NOT NULL,
  `Nooca_Shaqada` varchar(250) NOT NULL,
  `Nooca_Wiishka` varchar(250) NOT NULL,
  `Taariikhda` date NOT NULL,
  `Lacag` float(11,2) NOT NULL,
  `Risiidh_No` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wiishashka`
--

INSERT INTO `wiishashka` (`Id`, `Magaca_Shirkada`, `Nooca_Shaqada`, `Nooca_Wiishka`, `Taariikhda`, `Lacag`, `Risiidh_No`, `Date`) VALUES
(1, 'Telesom Electric ', 'Rogis', 'Wiish Dhexe', '2024-07-17', 900.00, 890, '2024-07-17 08:31:00');

-- --------------------------------------------------------

--
-- Table structure for table `xisaabta_gaarka`
--

CREATE TABLE `xisaabta_gaarka` (
  `Id` int(11) NOT NULL,
  `dhigaal` float(11,2) NOT NULL,
  `Oil` float(11,2) NOT NULL,
  `laydh` float(11,2) NOT NULL,
  `internet` float(11,2) NOT NULL,
  `dayactir` float(11,2) NOT NULL,
  `s_parts` float(11,2) NOT NULL,
  `kharash` float(11,2) NOT NULL,
  `total` float(11,2) NOT NULL,
  `m_shaqaalaha` float(11,2) NOT NULL,
  `Actual_Total` float(11,2) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `xisaabta_gaarka`
--

INSERT INTO `xisaabta_gaarka` (`Id`, `dhigaal`, `Oil`, `laydh`, `internet`, `dayactir`, `s_parts`, `kharash`, `total`, `m_shaqaalaha`, `Actual_Total`, `Date`) VALUES
(1, 137.36, 12.00, 12.00, 23.00, 23.00, 23.00, 23.00, 21.36, 0.00, 0.00, '2024-07-17 09:24:47'),
(2, 137.36, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 131.36, 1.00, 130.36, '2024-07-17 10:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `xisaabta_guud`
--

CREATE TABLE `xisaabta_guud` (
  `id` int(11) NOT NULL,
  `Dakhliga_guud` float(11,2) NOT NULL,
  `Shidaal` float(11,2) NOT NULL,
  `Shaxaad` float(11,2) NOT NULL,
  `Masaariif` float(11,2) NOT NULL,
  `Kharash_guud` float(11,2) NOT NULL,
  `Wadarta_dakhliga` float(11,2) NOT NULL,
  `Mushaar` float(11,2) NOT NULL,
  `Dhigaal` float(11,2) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `xisaabta_guud`
--

INSERT INTO `xisaabta_guud` (`id`, `Dakhliga_guud`, `Shidaal`, `Shaxaad`, `Masaariif`, `Kharash_guud`, `Wadarta_dakhliga`, `Mushaar`, `Dhigaal`, `Date`) VALUES
(1, 900.00, 23.00, 23.00, 23.00, 23.00, 808.00, 17.00, 137.36, '2024-07-17 09:24:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mushaar`
--
ALTER TABLE `mushaar`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `shaqaale`
--
ALTER TABLE `shaqaale`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `wiishashka`
--
ALTER TABLE `wiishashka`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `xisaabta_gaarka`
--
ALTER TABLE `xisaabta_gaarka`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `xisaabta_guud`
--
ALTER TABLE `xisaabta_guud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mushaar`
--
ALTER TABLE `mushaar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shaqaale`
--
ALTER TABLE `shaqaale`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wiishashka`
--
ALTER TABLE `wiishashka`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `xisaabta_gaarka`
--
ALTER TABLE `xisaabta_gaarka`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `xisaabta_guud`
--
ALTER TABLE `xisaabta_guud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
