-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2023 at 05:10 AM
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
-- Database: `latihan_jquery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(250) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(250) NOT NULL,
  `PostalCode` varchar(30) NOT NULL,
  `Country` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerID`, `CustomerName`, `Address`, `City`, `PostalCode`, `Country`) VALUES
(1, 'Maria Anders', 'Obere Str. 57', 'Berlin', '12209', 'Germany'),
(2, 'Ana Trujillo', 'Avda. de la Construction 2222', 'Mexico D.F.', '5021', 'Mexico'),
(3, 'Antonio Moreno', 'Mataderos 2312', 'Mexico D.F.', '5023', 'Mexico'),
(4, 'Thomas Hardy', '120 Hanover Sq.', 'London', 'WA1 1DP', 'United Kingdom'),
(5, 'Paula Parente', 'Rua do Mercado, 12', 'Resende', '08737-363', 'Brazil'),
(6, 'Wolski Zbyszek', 'ul. Filtrowa 68', 'Walla', '01-012', 'Poland'),
(7, 'Matti Karttunen', 'Keskuskatu 45', 'Helsinki', '21240', 'Finland'),
(8, 'Karl Jablonski', '305 - 14th Ave. S. Suite 3B', 'Seattle', '98128', 'United States'),
(9, 'Paula Parente', 'Rua do Mercado, 12', 'Resende', '08737-363', 'Brazil'),
(10, 'John Koskitalo', 'Torikatu 38', 'Oulu', '90110', 'Finland'),
(39, 'Ann Devon', '35 King George', 'London', 'WX3 6FW', 'United Kingdom'),
(38, 'Janine Labrune', '67, rue des Cinquante Otages', 'Nantes', '44000', 'Finland'),
(37, 'Kathryn Segal', 'Augsburger Strabe 40', 'Lüdenscheid Gevelndorf', '58513', 'Germany'),
(36, 'Elizabeth Brown', 'Berkeley Gardens 12 Brewery', 'London', 'WX1 6LT', 'United Kingdom'),
(30, 'Trina Davidson', '1049 Lockhart Drive', 'Barrie', 'ON L4M 3B1', 'Canada'),
(31, 'Jeff Putnam', 'Industrieweg 56', 'Bouvignies', '7803', 'Belgium'),
(32, 'Joyce Rosenberry', 'Norra Esplanaden 56', 'HELSINKI', '380', 'Finland'),
(33, 'Ronald Bowne', '2343 Shadowmar Drive', 'New Orleans', '70112', 'United States'),
(34, 'Justin Adams', '45, rue de Lille', 'ARMENTIÈRES', '59280', 'France'),
(35, 'Pedro Afonso', 'Av. dos Lusíadas, 23', 'São Paulo', '05432-043', 'Brazil'),
(100, 'Kathryn Segal', 'Augsburger Strabe 40', 'Lüdenscheid Gevelndorf', '58513', 'Germany'),
(101, 'Tonia Sayre', '84 Haslemere Road', 'ECHT', 'AB32 2DY', 'United Kingdom'),
(102, 'Loretta Harris', 'Avenida Boavista 71', 'SANTO AMARO', '4920-111', 'Portugal'),
(103, 'Sean Wong', 'Rua Vito Bovino, 240', 'São Paulo-SP', '04677-002', 'Brazil'),
(104, 'Frederick Sears', 'ul. Marysiuska 64', 'Warszawa', '04-617', 'Poland'),
(105, 'Tammy Cantrell', 'Lukiokatu 34', 'HÄMEENLINNA', '13250', 'Finland'),
(106, 'Megan Kennedy', '1210 Post Farm Road', 'Norcross', '30071', 'United States'),
(107, 'Maria Whittaker', 'Spresstrasse 62', 'Bielefeld Milse', '33729', 'Germany'),
(108, 'Dorothy Parker', '32 Lairg Road', 'NEWCHURCH', 'HR5 5DR', 'United Kingdom'),
(109, 'Roger Rudolph', 'Avenida Julio Saul Dias 78', 'PENAFIEL', '4560-470', 'Portugal'),
(110, 'Karen Metivier', 'Rua Guimaraes Passos, 556', 'São Luís-MA', '65025-450', 'Brazil'),
(111, 'Charles Hoover', 'Al. Tysiaclecia 98', 'Warszawa', '03-851', 'Poland'),
(112, 'Becky Moss', 'Laivurinkatu 6', 'MIKKELI', '50120', 'Finland'),
(113, 'Frank Kidd', '2491 Carson Street', 'Cincinnati', 'KY 45202', 'United States'),
(114, 'Donna Wilson', 'Hallesches Ufer 69', 'Dettingen', '73265', 'Germany'),
(115, 'Lillian Roberson', '36 Iolaire Road', 'NEW BARN', 'DA3 3FT', 'United Kingdom');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_records`
--

CREATE TABLE `tbl_records` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_records`
--

INSERT INTO `tbl_records` (`id`, `name`, `skills`, `address`, `designation`, `age`) VALUES
(1, 'satya', 'html', 'buniseuri', 'adsdas', 5),
(2, 'satria', 'html', 'cikoneng', 'asd', 10),
(3, 'satrio', 'css', 'ciamis', 'asdsad', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `tbl_records`
--
ALTER TABLE `tbl_records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `tbl_records`
--
ALTER TABLE `tbl_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
