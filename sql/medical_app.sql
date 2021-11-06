-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2021 at 03:42 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `cita_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nombre_medico` varchar(150) NOT NULL,
  `dni_cliente` int(11) NOT NULL,
  `hora` time NOT NULL,
  `consulta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`cita_id`, `fecha`, `nombre_medico`, `dni_cliente`, `hora`, `consulta`) VALUES
(4, '2021-05-10', 'Juan Carlos', 45478282, '05:30:00', 'Me duele todo'),
(5, '2022-02-16', 'Pedro', 909090, '14:30:00', 'Me duele el pie'),
(6, '2021-12-31', 'Pedro', 76543, '09:45:00', 'Hola bro');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `numero_cliente` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `edad` int(3) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `antecedentes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`numero_cliente`, `nombre`, `apellido`, `mail`, `edad`, `telefono`, `pass`, `antecedentes`) VALUES
(1, 'agus', 'garcia', 'agus@pro.com', 55, '45665', 'agus2004', ''),
(2, 'garcia', 'castellano', '34', 0, '123', 'hola', '');

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE `empleados` (
  `dni_empleado` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `especialidad_id` int(11) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `edad` int(3) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `empleados`
--

INSERT INTO `empleados` (`dni_empleado`, `nombre`, `especialidad_id`, `apellido`, `edad`, `telefono`, `mail`, `pass`) VALUES
(454545, 'aguslindo', 555555, '8888', 44, '555', 'ffdfdff', '2004'),
(454545, 'aguslindo', 555555, '8888', 44, '555', 'ffdfdff', '2004');

-- --------------------------------------------------------

--
-- Table structure for table `especialidades`
--

CREATE TABLE `especialidades` (
  `especialidad_id` int(11) NOT NULL,
  `especialidad` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sedes`
--

CREATE TABLE `sedes` (
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `especialidad_id` int(11) NOT NULL,
  `sede_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`cita_id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`numero_cliente`);

--
-- Indexes for table `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`especialidad_id`);

--
-- Indexes for table `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`sede_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `cita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `numero_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `especialidad_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sedes`
--
ALTER TABLE `sedes`
  MODIFY `sede_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
