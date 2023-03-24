-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 13, 2021 at 03:20 PM
-- Server version: 8.0.26
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vt`
--

--
-- Dumping data for table `estado`
--

INSERT INTO `estado` (`id`, `estado`, `descripcion`) VALUES
(1, 'ACTIVO', 'ESTADO PARA FUNCIONES Y USUARIOS EN USO DEL SISTEMA'),
(2, 'INACTIVO', 'ESTADO PARA FUNCIONES O USUARIOS QUE YA NO SEAN NECESARIOS PARA EL SISTEMA'),
(3, 'OCULTO', 'RESERVADO PARA EL SISTEMA'),
(4, 'PENDIENTE', 'ESTADO PARA TRANSACCIONES SIN FINALIZAR'),
(5, 'APROBADO', 'ESTADO PARA APROBAR UNA ACTIVIDAD UN PROCESO UNA MATERIA ENTRE OTROS'),
(6, 'CANCELADO', 'ESTADO PARA CANCELAR TRANSACCIONES ASIGNATURAS ACTIVIDADES ENTRE OTRAS'),
(7, 'REPROBADO', 'ESTADO PARA ASIGNATURAS PROCESOS'),
(8, 'CERRADO', 'ESTE ESTADO ES UTILIZADO PARA CERRA MATERIAS O PROGRAMAS DESPUÉS DE HABERSE APERTURADO'),
(9, 'ACEPTADO', NULL),
(10, 'LEIDO', 'PARA NOTIFICACIÓN'),
(11, 'EN ESPERA', 'ESTADO INICIAL PARA UN PROCESO POSTERIOR');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
