-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2024 a las 02:09:41
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `h2o`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `correo_contacto` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`correo_contacto`, `pass`) VALUES
('joki110303@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id_reporte` int(11) NOT NULL,
  `correo_contacto` varchar(100) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `colonia` varchar(100) NOT NULL,
  `referencia` varchar(255) DEFAULT NULL,
  `tipo_problema` varchar(255) NOT NULL,
  `personas_afectadas` int(11) DEFAULT NULL,
  `principales_afectados` varchar(255) DEFAULT NULL,
  `duracion_problema` date DEFAULT NULL,
  `reportado_autoridad` tinyint(1) DEFAULT NULL,
  `foto_video` varchar(255) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `nombre_contacto` varchar(100) DEFAULT NULL,
  `fecha_reporte` timestamp NOT NULL DEFAULT current_timestamp(),
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`id_reporte`, `correo_contacto`, `municipio`, `colonia`, `referencia`, `tipo_problema`, `personas_afectadas`, `principales_afectados`, `duracion_problema`, `reportado_autoridad`, `foto_video`, `descripcion`, `nombre_contacto`, `fecha_reporte`, `link`) VALUES
(7, 'joctanfail69858@gmail.com', 'Puebla', 'Angelopolis', 'Estrella', 'Aguas residuales sin tratar', 77, 'Viviendas', '2024-12-06', 1, 'img', 'Aguas muy negras', 'Joctan', '2024-12-02 21:12:13', 'https://www.google.com/maps?q=19.054492036478837,-98.21537017822267'),
(8, 'juan.perez@example.com', 'Puebla', 'La Paz', 'Cerca del parque central', 'Contaminación del agua', 65, 'Viviendas', '2024-12-20', 1, 'ruta/fuga1.jpg', 'Fuga grave que afecta el suministro.', 'Juan PÃ©rez', '2024-12-02 22:57:53', 'https://www.google.com/maps?q=19.037292030878405,-98.19494247436525'),
(9, 'ana.lopez@example.com', 'San Andrés Cholula', 'Momoxpan', 'Junto a la iglesia', 'Tubería rota', 20, 'Escuelas', '2024-02-15', 0, NULL, 'Tubería principal rota causando inundación.', 'Ana López', '2024-12-02 22:57:53', ''),
(10, 'carlos.gomez@example.com', 'Tehuacán', 'Centro', 'Esquina de Juárez y 16', 'Falta de agua', 300, 'Viviendas', '2023-12-01', 1, 'ruta/falta1.mp4', 'Sin suministro de agua desde hace semanas.', 'Carlos Gómez', '2024-12-02 22:57:53', ''),
(11, 'maria.sanchez@example.com', 'Atlixco', 'Las Flores', 'Frente al mercado', 'Contaminación en el agua', 150, 'Hospitales', '2024-03-20', 1, NULL, 'El agua tiene mal olor y color extraño.', 'María Sánchez', '2024-12-02 22:57:53', ''),
(12, 'fernando.ruiz@example.com', 'Amozoc', 'El Carmen', 'Calle sin pavimentar', 'Inundaciones', 80, 'Viviendas', '2024-01-30', 0, 'ruta/inundacion1.jpg', 'Inundaciones recurrentes por lluvias.', 'Fernando Ruiz', '2024-12-02 22:57:53', ''),
(13, 'laura.mendez@example.com', 'Puebla', 'San Manuel', 'Cerca de la universidad', 'Falta de drenaje', 200, 'Escuelas', '2024-04-10', 0, 'ruta/drenaje1.mp4', 'No hay drenaje adecuado en la zona.', 'Laura Méndez', '2024-12-02 22:57:53', ''),
(14, 'ricardo.rojas@example.com', 'San Martín Texmelucan', 'San Damián', 'En la esquina del puente', 'Drenaje colapsado', 60, 'Comercios', '2024-05-05', 1, NULL, 'El drenaje está completamente obstruido.', 'Ricardo Rojas', '2024-12-02 22:57:53', ''),
(15, 'sofia.vargas@example.com', 'Teziutlán', 'Vista Hermosa', 'A un lado de la iglesia', 'Fuga de agua', 100, 'Viviendas', '2024-02-25', 0, 'ruta/fuga2.jpg', 'Fuga desde hace más de una semana.', 'Sofía Vargas', '2024-12-02 22:57:53', ''),
(16, 'jose.martinez@example.com', 'Cholula', 'Santa María', 'Frente al colegio', 'Desabasto de agua', 500, 'Escuelas', '2023-11-10', 1, 'ruta/desabasto1.mp4', 'Falta de agua en toda la colonia.', 'José Martínez', '2024-12-02 22:57:53', ''),
(17, 'carmen.flores@example.com', 'Izúcar de Matamoros', 'Los Álamos', 'A la entrada de la colonia', 'Inundaciones', 90, 'Viviendas', '2024-06-15', 0, NULL, 'Lluvias fuertes causan desbordamiento.', 'Carmen Flores', '2024-12-02 22:57:53', ''),
(18, 'raul.ramirez@example.com', 'Huejotzingo', 'La Asunción', 'Cerca del mercado central', 'Tubería rota', 30, 'Comercios', '2024-07-01', 1, 'ruta/tuberia2.jpg', 'Rotura de tubería por trabajos en la zona.', 'Raúl Ramírez', '2024-12-02 22:57:53', ''),
(19, 'adriana.garcia@example.com', 'Puebla', 'Xilotzingo', 'Atrás del parque', 'Falta de agua', 400, 'Viviendas', '2023-10-01', 1, NULL, 'Zona sin agua por más de un mes.', 'Adriana García', '2024-12-02 22:57:53', ''),
(20, 'oscar.navarro@example.com', 'Tehuacán', 'Santa Rosa', 'Calle principal', 'Contaminación en el agua', 120, 'Escuelas', '2024-08-20', 1, 'ruta/contaminacion1.mp4', 'Agua contaminada por residuos industriales.', 'Óscar Navarro', '2024-12-02 22:57:53', ''),
(21, 'julieta.arias@example.com', 'Atlixco', 'Las Ánimas', 'Por la fábrica abandonada', 'Fuga de agua', 40, 'Viviendas', '2024-09-10', 0, 'ruta/fuga3.jpg', 'Fuga de agua constante desde hace días.', 'Julieta Arias', '2024-12-02 22:57:53', ''),
(22, 'emilio.diaz@example.com', 'San Andrés Cholula', 'Zerezotla', 'Junto al campo de fútbol', 'Falta de drenaje', 250, 'Hospitales', '2023-12-20', 1, NULL, 'No hay drenaje, causando problemas de salud.', 'Emilio Díaz', '2024-12-02 22:57:53', ''),
(23, 'lucia.herrera@example.com', 'Puebla', 'Angelópolis', 'En el centro comercial', 'Tubería rota', 70, 'Comercios', '2024-05-01', 0, 'ruta/tuberia3.mp4', 'Tubería dañada afecta el comercio.', 'Lucía Herrera', '2024-12-02 22:57:53', ''),
(24, 'alfredo.molina@example.com', 'Teziutlán', 'San Pedro', 'Avenida principal', 'Inundaciones', 100, 'Viviendas', '2024-07-25', 1, NULL, 'Inundaciones severas por lluvias intensas.', 'Alfredo Molina', '2024-12-02 22:57:53', ''),
(25, 'valeria.rodriguez@example.com', 'Puebla', 'La Margarita', 'Cerca del mercado', 'Fuga de agua', 150, 'Escuelas', '2024-02-10', 1, 'ruta/fuga4.jpg', 'Fuga importante afecta la zona.', 'Valeria Rodríguez', '2024-12-02 22:57:53', ''),
(26, 'hector.vargas@example.com', 'Amozoc', 'La Joya', 'Calle cerrada', 'Falta de agua', 350, 'Hospitales', '2024-01-15', 1, NULL, 'Suministro irregular en el hospital.', 'Héctor Vargas', '2024-12-02 22:57:53', ''),
(27, 'karla.ortega@example.com', 'San Pedro Cholula', 'La Concepción', 'Por el zócalo', 'Contaminación en el agua', 200, 'Comercios', '2023-09-05', 0, 'ruta/contaminacion2.mp4', 'Agua no potable detectada en análisis.', 'Karla Ortega', '2024-12-02 22:57:53', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`correo_contacto`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id_reporte`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id_reporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
