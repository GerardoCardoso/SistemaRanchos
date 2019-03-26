-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-12-2018 a las 12:58:23
-- Versión del servidor: 10.1.36-MariaDB-cll-lve
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tauruscom_ranchos`
--
create database pos;
use pos;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aretes`
--

CREATE TABLE `aretes` (
  `id` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `precio` double NOT NULL,
  `compra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aretes`
--

INSERT INTO `aretes` (`id`, `cantidad`, `precio`, `compra`) VALUES
(1, 15, 45.9, 1),
(2, 12, 45.9, 2),
(3, 11, 43.9, 3),
(4, 16, 45.89, 4),
(5, 30, 75, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bancos`
--

CREATE TABLE `bancos` (
  `id` int(11) NOT NULL,
  `nombre` text,
  `abreviacion` varchar(50) DEFAULT NULL,
  `saldo` double DEFAULT NULL,
  `cuenta` text,
  `fecha_alta` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Catalogo de Bancos';

--
-- Volcado de datos para la tabla `bancos`
--

INSERT INTO `bancos` (`id`, `nombre`, `abreviacion`, `saldo`, `cuenta`, `fecha_alta`) VALUES
(1, 'Banco nacional de México S.A. de C.v.', 'BANAMEX', -125876.38, '151213', '2018-07-04 23:23:36'),
(3, 'Banco del norte', 'BANREGIO', 20090, '2147483647', '2018-08-14 04:59:21'),
(4, 'SANTANDER', 'SAN', 14000000, '1516252325326', '2018-09-12 19:40:47'),
(5, 'BANewtsae', 'dfgsgdg', 3490.9, NULL, '2018-09-21 00:51:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogos_bancos`
--

CREATE TABLE `catalogos_bancos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(45) NOT NULL,
  `nombre_corto` text NOT NULL,
  `razon_social` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Catálogo de Bancos Origen';

--
-- Volcado de datos para la tabla `catalogos_bancos`
--

INSERT INTO `catalogos_bancos` (`id`, `codigo`, `nombre_corto`, `razon_social`) VALUES
(1, '002', 'BANAMEX', 'Grupo Financiero Banamex, S.A. de C.V.'),
(2, '006', 'BANCOMEXT', 'Banco Nacional de Comercio Exterior, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo'),
(3, '009', 'BANOBRAS', 'Banco Nacional de Obras y Servicios Públicos, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo'),
(4, '012', 'BBVA BANCOMER', 'BBVA Bancomer, S.A., Institución de Banca Múltiple, Grupo Financiero BBVA Bancomer'),
(5, '014', 'SANTANDER', 'Banco Santander (México), S.A., Institución de Banca Múltiple, Grupo Financiero Santander'),
(6, '019', 'BANJERCITO', 'Banco Nacional del Ejército, Fuerza Aérea y Armada, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo'),
(7, '021', 'HSBC', 'HSBC México, S.A., institución De Banca Múltiple, Grupo Financiero HSBC'),
(8, '030', 'BAJIO', 'Banco del Bajío, S.A., Institución de Banca Múltiple'),
(9, '032', 'IXE', 'IXE Banco, S.A., Institución de Banca Múltiple, IXE Grupo Financiero'),
(10, '036', 'INBURSA', 'Banco Inbursa, S.A., Institución de Banca Múltiple, Grupo Financiero Inbursa'),
(11, '037', 'INTERACCIONES', 'Banco Interacciones, S.A., Institución de Banca Múltiple'),
(12, '042', 'MIFEL', 'Banca Mifel, S.A., Institución de Banca Múltiple, Grupo Financiero Mifel'),
(13, '044', 'SCOTIABANK', 'Scotiabank Inverlat, S.A'),
(14, '058', 'BANREGIO', 'Banco Regional de Monterrey, S.A., Institución de Banca Múltiple, Banregio Grupo Financiero'),
(15, '059', 'INVEX', 'Banco Invex, S.A., Institución de Banca Múltiple, Invex Grupo Financiero'),
(16, '060', 'BANSAI', 'Bansi, S.A., Institución de Banca Múltiple'),
(17, '062', 'AFIRME', 'Banca Afirme, S.A., Institución de Banca Múltiple'),
(18, '072', 'BANORTE', 'Banco Mercantil del Norte, S.A., Institución de Banca Múltiple, Grupo Financiero Banorte'),
(19, '102', 'THE ROYAL BANK', 'The Royal Bank of Scotland México, S.A., Institución de Banca Múltiple'),
(20, '103', 'AMERICAN EXPRESS', 'American Express Bank (México), S.A., Institución de Banca Múltiple'),
(21, '106', 'BAMSA', 'Bank of America México, S.A., Institución de Banca Múltiple, Grupo Financiero Bank of America'),
(22, '108', 'TOKYO', 'Bank of Tokyo-Mitsubishi UFJ (México), S.A.'),
(23, '110', 'JP MORGAN', 'Banco J.P. Morgan, S.A., Institución de Banca Múltiple, J.P. Morgan Grupo Financiero\r'),
(24, '112', 'BMONEX', 'Banco Monex, S.A., Institución de Banca Múltiple'),
(25, '113', 'VE POR MAS', 'Banco Ve Por Mas, S.A. Institución de Banca Múltiple'),
(26, '116', 'ING', 'ING Bank (México), S.A., Institución de Banca Múltiple, ING Grupo Financiero'),
(27, '124', 'DEUTSCHE', 'Deutsche Bank México, S.A., Institución de Banca Múltiple'),
(28, '126', 'CREDIT SUISSE', 'Banco Credit Suisse (México), S.A. Institución de Banca Múltiple, Grupo Financiero Credit Suisse (México)\r'),
(29, '127', 'AZTECA', 'Banco Azteca, S.A. Institución de Banca Múltiple.'),
(30, '128', 'AUTOFIN', 'Banco Autofin México, S.A. Institución de Banca Múltiple'),
(31, '129', 'BARCLAYS', 'Barclays Bank México, S.A., Institución de Banca Múltiple, Grupo Financiero Barclays México\r'),
(32, '130', 'COMPARTAMOS', 'Banco Compartamos, S.A., Institución de Banca Múltiple\r'),
(33, '131', 'BANCO FAMSA', 'Banco Ahorro Famsa, S.A., Institución de Banca Múltiple'),
(34, '132', 'BMULTIVA', 'Banco Multiva, S.A., Institución de Banca Múltiple, Multivalores Grupo Financiero'),
(35, '133', 'ACTINVER', 'Banco Actinver, S.A. Institución de Banca Múltiple, Grupo Financiero Actinver'),
(36, '134', 'WALT-MART', 'Banco Wal-Mart de México Adelante, S.A., Institución de Banca Múltiple'),
(37, '135', 'NAFIN', 'Nacional Financiera, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo\r'),
(38, '136', 'INTERBANCO', 'Inter Banco, S.A. Institución de Banca Múltiple'),
(39, '137', 'BANCOPPEL', 'BanCoppel, S.A., Institución de Banca Múltiple'),
(40, '138', 'ABC CAPITAL', 'ABC Capital, S.A., Institución de Banca Múltiple'),
(41, '139', 'UBS BANK', 'UBS Bank México, S.A., Institución de Banca Múltiple, UBS Grupo Financiero'),
(42, '140', 'CONSUBANCO', 'Consubanco, S.A. Institución de Banca Múltiple'),
(43, '141', 'VOLKSWAGEN', 'Volkswagen Bank, S.A., Institución de Banca Múltiple'),
(44, '143', 'CIBANCO', 'CIBanco, S.A.'),
(45, '145', 'BBASE', 'Banco Base, S.A., Institución de Banca Múltiple'),
(46, '166', 'BANSEFI', 'Banco del Ahorro Nacional y Servicios Financieros, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo\r'),
(47, '168', 'HIPOTECARIA FEDERAL', 'Sociedad Hipotecaria Federal, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo'),
(48, '600', 'MONEXCB', 'Monex Casa de Bolsa, S.A. de C.V. Monex Grupo Financiero'),
(49, '601', 'GBM', 'GBM Grupo Bursátil Mexicano, S.A. de C.V. Casa de Bolsa'),
(50, '602', 'MASARI', 'Masari Casa de Bolsa, S.A.'),
(51, '605', 'VALUE', 'Value, S.A. de C.V. Casa de Bolsa'),
(52, '606', 'ESTRUCTURADORES', 'Estructuradores del Mercado de Valores Casa de Bolsa, S.A. de C.V.'),
(53, '607', 'TIBER', 'Casa de Cambio Tiber, S.A. de C.V.'),
(54, '608', 'VECTOR', 'Vector Casa de Bolsa, S.A. de C.V.'),
(55, '610', 'B&B', 'B y B, Casa de Cambio, S.A. de C.V.'),
(56, '614', 'ACCIVAL', 'Acciones y Valores Banamex, S.A. de C.V., Casa de Bolsa'),
(57, '615', 'MERRIL LYNCH', 'Merrill Lynch México, S.A. de C.V. Casa de Bolsa'),
(58, '616', 'FINAMEX', 'Casa de Bolsa Finamex, S.A. de C.V'),
(59, '617', 'VALMEX', 'Valores Mexicanos Casa de Bolsa, S.A. de C.V.'),
(60, '618', 'UNICA', 'Unica Casa de Cambio, S.A. de C.V.'),
(61, '619', 'MAPFRE', 'MAPFRE Tepeyac, S.A.\r'),
(62, '620', 'PROFUTURO', 'Profuturo G.N.P., S.A. de C.V., Afore\r'),
(63, '621', 'CB ACTINVER', 'Actinver Casa de Bolsa, S.A. de C.V.'),
(64, '622', 'OACTIN', 'OPERADORA ACTINVER, S.A. DE C.V'),
(65, '623', 'SKANDIA', 'Skandia Vida, S.A. de C.V.'),
(66, '626', 'CBDEUTSCHE', 'Deutsche Securities, S.A. de C.V. CASA DE BOLSA'),
(67, '627', 'ZURICH', 'Zurich Compañía de Seguros, S.A'),
(68, '628', 'ZURICHVI', 'Zurich Vida, Compañía de Seguros, S.A.'),
(69, '629', 'SU CASITA', 'Hipotecaria Su Casita, S.A. de C.V. SOFOM ENR'),
(70, '630', 'CB INTERCAM', 'Intercam Casa de Bolsa, S.A. de C.V.'),
(71, '631', 'CI BOLSA', 'CI Casa de Bolsa, S.A. de C.V.'),
(72, '632', 'BULLTICK CB', 'Bulltick Casa de Bolsa, S.A., de C.V'),
(73, '633', 'STERLING', 'Sterling Casa de Cambio, S.A. de C.V.'),
(74, '634', 'FINCOMUN', 'Fincomún, Servicios Financieros Comunitarios, S.A. de C.V.'),
(75, '636', 'HDI SEGUROS', 'HDI Seguros, S.A. de C.V.'),
(76, '637', 'ORDER', 'Order Express Casa de Cambio, S.A. de C.V'),
(77, '638', 'AKALA', 'Akala, S.A. de C.V., Sociedad Financiera Popular'),
(78, '640', 'CB JPMORGAN', 'J.P. Morgan Casa de Bolsa, S.A. de C.V. J.P. Morgan Grupo Financiero'),
(79, '642', 'REFORMA', 'Operadora de Recursos Reforma, S.A. de C.V., S.F.P.'),
(80, '646', 'STP', 'Sistema de Transferencias y Pagos STP, S.A. de C.V.SOFOM ENR'),
(81, '647', 'TELECOMM', 'Telecomunicaciones de México\r'),
(82, '648', 'EVERCORE', 'Evercore Casa de Bolsa, S.A. de C.V'),
(83, '649', 'SKANDIA', 'Skandia Operadora de Fondos, S.A. de C.V'),
(84, '651', 'SEGMTY', 'Seguros Monterrey New York Life, S.A de C.V'),
(85, '652', 'ASEA', 'Solución Asea, S.A. de C.V., Sociedad Financiera Popular'),
(86, '653', 'KUSPIT', 'Kuspit Casa de Bolsa, S.A. de C.V'),
(87, '655', 'SOFIEXPRESS', 'J.P. SOFIEXPRESS, S.A. de C.V., S.F.P.'),
(88, '656', 'UNAGRA', 'UNAGRA, S.A. de C.V., S.F.P.'),
(89, '659', 'OPCIONES EMPRESARIALES DEL NORESTE', 'OPCIONES EMPRESARIALES DEL NORESTE, S.A. DE C.V., S.F.P.'),
(90, '901', 'CLS', 'Cls Bank International\r'),
(91, '902', 'INDEVAL', 'SD. Indeval, S.A. de C.V.\r'),
(92, '970', 'LIBERTAD', 'Libertad Servicios Financieros, S.A. De C.V.'),
(93, '999', 'N/A', 'N/A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `fecha`) VALUES
(1, 'Res', '2018-06-04 16:39:57'),
(2, 'Otros', '2018-08-25 19:25:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chofer`
--

CREATE TABLE `chofer` (
  `id` int(11) NOT NULL,
  `nombre` text,
  `email` text,
  `telefono` text,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Catalogo de Chofer';

--
-- Volcado de datos para la tabla `chofer`
--

INSERT INTO `chofer` (`id`, `nombre`, `email`, `telefono`, `fecha`) VALUES
(1, 'Julen I. Chereches Chaouki', 'cuchaouki20@yopmail.com', '(044)(343) 933-4595', '2018-07-26 21:48:58'),
(2, 'Aureliano Alfonso Cepedano Dotras', 'jadotras0@yopmail.com', '(044)(030) 700-5829', '2018-07-26 21:49:40'),
(3, 'Victoriano Alum Jiménez', 'ixvictoriano23@yopmail.com', '(044)(353) 822-7399', '2018-07-26 21:50:20'),
(4, 'Heraldo Limpias Cipitria', 'gccipitria2@yopmail.com', '(044)(939) 711-6947', '2018-07-26 21:51:12'),
(5, 'Cayetano Tronco Alajarin', 'ajcayetano9@yopmail.com', '(044)(959) 977-1553', '2018-07-26 20:25:20'),
(6, 'Tristan Muñozo Pesquer', 'grtristan17@yopmail.com', '(044)(636) 066-7803', '2018-07-26 21:51:55'),
(7, 'Juan Fernando Garcia Hernandez', 'juanfergar@yopmail.com', '(044)(153) 312-5342', '2018-07-26 22:05:18'),
(8, 'Solano Alonzo Cerros Portuondo', 'jpportuondo15@yopmail.com', '(044)(444) 124-5632', '2018-07-26 22:06:04'),
(9, 'Genaro Gaitán Colunga', 'GaitanColunga@jourrapide.com', '(044)(916) 729-3521', '2018-07-26 22:08:04'),
(10, 'Rogerio Rubio Tórrez', 'RogerioRubioTorrez@rhyta.com', '(044)(345) 343-4242', '2018-09-11 14:47:48'),
(11, 'Luis Lopez', 'luis@hotmail.com', '(044)(232) 125-5433', '2018-08-24 16:54:16'),
(12, 'Ruperto Altamirano Flores', 'leorullan@gmail.com', '(044)(229) 159-6345', '2018-09-12 18:53:34'),
(13, 'LOpaeflaj', NULL, '(044)(342) 423-4231', '2018-09-19 18:12:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `documento` int(11) NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci,
  `celular` text COLLATE utf8_spanish_ci,
  `compras` int(11) NOT NULL,
  `ultima_compra` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rfc` text COLLATE utf8_spanish_ci,
  `banco` text COLLATE utf8_spanish_ci NOT NULL,
  `num_cuenta` double NOT NULL,
  `cta_clabe` double NOT NULL,
  `total_comprado` double NOT NULL,
  `total_adeudo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `documento`, `email`, `telefono`, `celular`, `compras`, `ultima_compra`, `fecha`, `rfc`, `banco`, `num_cuenta`, `cta_clabe`, `total_comprado`, `total_adeudo`) VALUES
(3, 'Andy', 0, 'Anda@teleworm.us', '(300) 341-2345', '(044)(132) 421-3513', 3, '0000-00-00 00:00:00', '2018-09-20 17:27:36', 'BAEA950403KA5', 'ljwlda', 5494, 12345, 348699.998, 348699.998),
(4, 'Federico Parache Pena', 1, 'bpfederico15@yopmail.com', '(132) 456-1325', '(044)(737) 866-2299', 4, '0000-00-00 00:00:00', '2018-09-12 19:15:56', 'PAPF731112455', 'Bancomer', 344864261810927, 1353425, 519229.035, 519229.035),
(5, 'Pedro Hernandez Hernandez', 2, 'genaro@gmail.com', '(213) 312-3123', '(044)(123) 123-1231', 7, '0000-00-00 00:00:00', '2018-09-09 16:13:21', 'HEHP610908UI9', 'BANREGIO', 4321342, 413232, 1884768.23785, 1884768.23785),
(6, 'Rafael Benítez Peres', 3, 'RafaelBenitezPeres@jourrapide.com', '(225) 414-1241', '(044)(214) 642-5342', 0, '0000-00-00 00:00:00', '2018-07-26 22:12:37', 'BAPR900707QD2', 'Banamex', 4.689059618238063e15, 14414213, 0, 0),
(7, 'Carlos', 4, 'carlos@hotmail.com', '(229) 873-2121', '(044)(211) 245-5443', 0, '0000-00-00 00:00:00', '2018-08-29 22:38:03', 'HEHP610908UI9', 'BANCOMER', 12314256, 18766, 0, 0),
(8, 'Enrique', 5, 'pedro@hotmail.com', NULL, NULL, 1, '0000-00-00 00:00:00', '2018-09-12 14:22:44', 'GOGL3608098XA', 'BANCOMER', 347257222329326, 347257222329326, 168741.2, 168741.2),
(9, 'Pedro ', 6, 'genaro@gmail.com', NULL, NULL, 0, '0000-00-00 00:00:00', '2018-09-07 23:49:29', 'HEHP610908UI9', 'BANCOMER', 4321342, 413232, 0, 0),
(10, 'Gerardo', 7, 'gfer@hotmail.com', NULL, NULL, 2, '0000-00-00 00:00:00', '2018-09-12 18:57:02', '091208', 'Banamex', 1092, 11, 438706.64, 438706.64),
(11, 'DOS MATAS', 8, 'leorullan@gmail.com', NULL, NULL, 1, '0000-00-00 00:00:00', '2018-09-12 19:21:32', '56DE5EFTEDFF', 'SANTANDER', 56218545, 123855545659865, 440578.86, 440578.86),
(12, 'Alba Pedrejon Alzas', 9, 'genaro@gmail.com', NULL, NULL, 0, '0000-00-00 00:00:00', '2018-09-20 17:39:24', NULL, 'BANCOMER', 4321342, 413232, 0, 0),
(13, 'Lucia', 10, 'luis@hotmail.com', NULL, NULL, 0, '0000-00-00 00:00:00', '2018-09-20 17:39:37', NULL, 'BANCOMER', 4321342, 347257222329326, 0, 0),
(14, 'Santian', 11, 'santi@hotmail.com', NULL, NULL, 0, '0000-00-00 00:00:00', '2018-09-20 17:49:45', NULL, 'Bancomer', 12457899000, 123, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `codigo` int(11) DEFAULT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `id_administrador` int(11) DEFAULT NULL,
  `impuesto` double DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `metodo_deposito` text,
  `ultima_edic` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_factura` varchar(45) DEFAULT NULL,
  `factura` varchar(45) DEFAULT NULL,
  `id_chofer` int(11) DEFAULT NULL,
  `descuento` double DEFAULT NULL,
  `flete` double DEFAULT NULL,
  `resta` double DEFAULT NULL,
  `deposito` double DEFAULT '0',
  `destino` varchar(100) DEFAULT NULL,
  `observaciones` text,
  `fecha` date DEFAULT NULL,
  `total_facturado` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Catalogo de Compras';

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `codigo`, `id_proveedor`, `id_administrador`, `impuesto`, `subtotal`, `total`, `metodo_deposito`, `ultima_edic`, `fecha_factura`, `factura`, `id_chofer`, `descuento`, `flete`, `resta`, `deposito`, `destino`, `observaciones`, `fecha`, `total_facturado`) VALUES
(1, 1, 5, 1, 0, 132135.5, 131447, '', '2018-09-11 05:00:30', '2018-08-30', 'FACI89', 4, 0, 0, 131447, 0, 'Las Tinajas', 'otra|', '2018-09-09', 89912.87),
(2, 2, 4, 1, 0, 104192.09, 103641.29, '', '2018-09-09 16:13:21', '', '', 3, 0, 0, 103641.29, 0, 'benemerito', '', '2018-09-09', 0),
(3, 3, 10, 1, 0, 189045, 188562.1, '', '2018-09-11 15:11:49', '', '', 9, 0, 0, 188562.1, 0, 'Xalapa', '', '2018-09-11', 0),
(4, 4, 8, 1, 0, 193865, 193130.76, '', '2018-09-12 14:22:44', '', 'FACI89', 8, 0, 0, 193130.76, 0, 'Las Tinajas', '', '2018-09-12', 0),
(5, 5, 2, 1, 0, 159020.57, 159020.57, '', '2018-09-12 19:15:56', '', '', 2, 0, 0, 159020.57, 0, 'Las Tinajas', '', '2018-09-12', 0),
(6, 6, 11, 64, 0, 432870, 430620, '', '2018-09-12 19:31:46', '2018-09-12', 'FAC22', 12, 0, 0, 430620, 0, 'BENEMERITO', '-', '2018-09-12', 500000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conceptos`
--

CREATE TABLE `conceptos` (
  `id` int(11) NOT NULL,
  `clave` int(11) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Catálogo de Conceptos';

--
-- Volcado de datos para la tabla `conceptos`
--

INSERT INTO `conceptos` (`id`, `clave`, `descripcion`) VALUES
(1, 1, 'DEPOSITOS PAGO CLIENTE'),
(2, 2, 'TRANSFERENCIA'),
(3, 3, 'DEPOSITO AUTOMATICO'),
(4, 4, 'PRESTAMO'),
(5, 6, 'DEVOLUCION DE DINERO'),
(6, 7, 'GANANCIA FONDO DE INVERSION'),
(7, 8, 'TRANSFERENCIA ENTRE CHEQUERA'),
(8, 9, 'DEPOSITOS SIN IDENTIFICAR'),
(9, 10, 'AJUSTE DE SALDO'),
(10, 11, 'CREDITO SANTANDER'),
(11, 12, 'AB INTERESES'),
(12, 13, 'COMISION SPEI'),
(13, 14, 'COMISION BANCARIA ELECTRONICA'),
(14, 15, 'PAGO INTERES MORATORIO DE CREDITO'),
(15, 5, 'PAGO A PROVEEDORES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresos`
--

CREATE TABLE `egresos` (
  `id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `importe` double NOT NULL,
  `descripcion` text NOT NULL,
  `banco_origen` int(11) NOT NULL,
  `no_autorizacion` text NOT NULL,
  `proveedor` int(11) NOT NULL,
  `concepto` text NOT NULL,
  `tipo_pago` int(11) NOT NULL,
  `banco_destino` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Catálogo de egresos';

--
-- Volcado de datos para la tabla `egresos`
--

INSERT INTO `egresos` (`id`, `fecha`, `importe`, `descripcion`, `banco_origen`, `no_autorizacion`, `proveedor`, `concepto`, `tipo_pago`, `banco_destino`) VALUES
(1, '2018-07-04 23:13:33', 400000.9, 'Cargo de Pedro', 0, '213', 2, '11', 1, 56),
(2, '2018-07-04 23:16:38', 400000.9, 'Cargo de Pedro', 0, '1332', 2, '9', 1, 55),
(3, '2018-07-04 23:22:28', 200000, 'Cargo de Pedro', 0, '1332', 2, '9', 2, 3),
(4, '2018-07-04 23:23:20', 200000.19, 'Cargo de Pedro', 1, '213', 2, '13', 2, 18),
(5, '2018-07-04 23:23:36', 200000.19, 'Cargo de Pedro', 1, '213', 2, '11', 2, 18),
(6, '2018-07-04 23:24:01', 3, 'Cargo de Pedro', 3, '1332', 4, '9', 1, 3),
(7, '2018-07-04 23:24:34', 3223487.9, 'Cargo de Pedro', 3, '213', 2, '9', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `importe` double NOT NULL,
  `descripcion` text NOT NULL,
  `banco_destino` int(11) NOT NULL,
  `no_autorizacion` text NOT NULL,
  `cliente` int(11) NOT NULL,
  `concepto` int(11) NOT NULL,
  `tipo_pago` int(11) NOT NULL,
  `banco_origen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Catalogo de Ingresos';

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`id`, `fecha`, `importe`, `descripcion`, `banco_destino`, `no_autorizacion`, `cliente`, `concepto`, `tipo_pago`, `banco_origen`) VALUES
(1, '2018-07-04 21:34:31', 43124, 'fefa', 1, '12', 4, 9, 1, 3),
(2, '2018-07-04 21:45:38', 90000, 'Deposito de Jorge', 1, '687123', 4, 12, 2, 2),
(3, '2018-07-04 21:46:26', 1000, 'Deposito de Jorge', 1, '12', 3, 11, 1, 18),
(4, '2018-07-04 21:51:54', 1900000, 'Deposito de Pedor', 3, '123', 5, 9, 1, 18),
(5, '2018-07-04 21:54:07', 20000, 'Deposito de Jorge', 1, '123', 4, 9, 1, 18),
(6, '2018-07-04 21:54:08', 20000, 'Deposito de Jorge', 1, '123', 4, 9, 1, 18),
(7, '2018-07-04 21:54:43', 200000, 'fefa', 3, '123', 3, 9, 1, 18),
(8, '2018-07-04 21:56:39', 1000000, 'Deposito de Jorge', 3, '123', 3, 10, 2, 18),
(9, '2018-07-04 21:58:18', 90000, 'fefa', 1, '123', 5, 11, 1, 18),
(10, '2018-07-04 21:59:09', 43124, 'Deposito de Jorge', 1, '12', 3, 11, 1, 18),
(11, '2018-07-04 21:59:55', 0, '', 1, '', 0, 0, 0, 0),
(12, '2018-07-06 21:46:57', 20090, 'Depo pdli', 3, '1231', 4, 11, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listapcom`
--

CREATE TABLE `listapcom` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Lista de Precios Compra';

--
-- Volcado de datos para la tabla `listapcom`
--

INSERT INTO `listapcom` (`id`, `nombre`, `descripcion`, `categoria`, `fecha`) VALUES
(14, 'LISTA RES 11/06/18', 'Precios al 11 de junio del 2018', 1, '2018-06-19 16:35:17'),
(16, 'LISTA RES 19/06/18', 'Lista para la compra 8 rancho las margaritas', 1, '2018-06-19 16:43:35'),
(17, 'LISTA 24AGOSTO18 PEDRO GOMEZ', 'ESPECIAL', 1, '2018-08-24 17:06:27'),
(18, 'Gerardo Cardoso', 'Lista de prueba', 1, '2018-09-09 20:11:49'),
(19, 'PRECIOS DE EFRAIN COMPRA 12 SEP', '-', 1, '2018-09-12 19:08:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listapventa`
--

CREATE TABLE `listapventa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Catalogo de listas de precios de venta';

--
-- Volcado de datos para la tabla `listapventa`
--

INSERT INTO `listapventa` (`id`, `nombre`, `descripcion`, `categoria`, `fecha`) VALUES
(1, 'RES VENTA 11/jun', 'Lista venta', 1, '2018-06-11 21:26:45'),
(2, 'RES VENTA 23/JUL', 'Lista de prueba', 1, '2018-07-23 15:41:19'),
(3, 'DOS MATAS', 'PRECIOS DEL 10 AGOSTO AL 24 DE AGOSTO', 1, '2018-08-24 17:09:26'),
(4, 'Gerardo Cardoso', 'Lista de precios de prueba', 1, '2018-09-09 20:08:58'),
(5, 'PRECIOS DOS MATAS DEL 12 SEP', '-', 1, '2018-09-12 19:12:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `merma`
--

CREATE TABLE `merma` (
  `id` int(11) NOT NULL,
  `merma` double NOT NULL,
  `venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Registro de porcentajes de mermas por operación';

--
-- Volcado de datos para la tabla `merma`
--

INSERT INTO `merma` (`id`, `merma`, `venta`) VALUES
(1, 1.12, 1),
(2, 1.09, 2),
(3, 1.9, 3),
(4, 1.08, 4),
(5, 1.03, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pesos`
--

CREATE TABLE `pesos` (
  `idpesos` int(11) NOT NULL,
  `peso` double DEFAULT NULL,
  `listaprecc` int(11) DEFAULT NULL,
  `alta` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `compra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pesos`
--

INSERT INTO `pesos` (`idpesos`, `peso`, `listaprecc`, `alta`, `compra`) VALUES
(1, 100, 14, '2018-09-09 15:28:35', 1),
(2, 129, 14, '2018-09-09 15:28:35', 1),
(3, 190, 14, '2018-09-09 15:28:35', 1),
(4, 200, 14, '2018-09-09 15:28:35', 1),
(5, 300, 14, '2018-09-09 15:28:35', 1),
(6, 321, 14, '2018-09-09 15:28:35', 1),
(7, 189, 14, '2018-09-09 15:28:35', 1),
(8, 178, 14, '2018-09-09 15:28:35', 1),
(9, 167, 14, '2018-09-09 15:28:35', 1),
(10, 231, 14, '2018-09-09 15:28:35', 1),
(11, 211, 14, '2018-09-09 15:28:35', 1),
(12, 200, 14, '2018-09-09 15:28:35', 1),
(13, 199, 14, '2018-09-09 15:28:35', 1),
(14, 180, 14, '2018-09-09 15:28:35', 1),
(15, 200, 14, '2018-09-09 15:28:35', 1),
(16, 100, 16, '2018-09-09 16:13:21', 2),
(17, 190, 16, '2018-09-09 16:13:21', 2),
(18, 189, 16, '2018-09-09 16:13:21', 2),
(19, 178, 16, '2018-09-09 16:13:21', 2),
(20, 215, 16, '2018-09-09 16:13:21', 2),
(21, 129, 16, '2018-09-09 16:13:21', 2),
(22, 129, 16, '2018-09-09 16:13:21', 2),
(23, 200, 16, '2018-09-09 16:13:21', 2),
(24, 276, 16, '2018-09-09 16:13:21', 2),
(25, 255, 16, '2018-09-09 16:13:21', 2),
(26, 300, 16, '2018-09-09 16:13:21', 2),
(27, 211, 16, '2018-09-09 16:13:21', 2),
(28, 100, 18, '2018-09-11 15:11:49', 3),
(29, 123, 18, '2018-09-11 15:11:49', 3),
(30, 154, 18, '2018-09-11 15:11:49', 3),
(31, 200, 18, '2018-09-11 15:11:49', 3),
(32, 290, 18, '2018-09-11 15:11:49', 3),
(33, 400, 18, '2018-09-11 15:11:49', 3),
(34, 214, 18, '2018-09-11 15:11:49', 3),
(35, 120, 18, '2018-09-11 15:11:49', 3),
(36, 200, 18, '2018-09-11 15:11:49', 3),
(37, 410, 18, '2018-09-11 15:11:49', 3),
(38, 428, 18, '2018-09-11 15:11:49', 3),
(39, 100, 18, '2018-09-12 14:22:44', 4),
(40, 200, 18, '2018-09-12 14:22:44', 4),
(41, 300, 18, '2018-09-12 14:22:44', 4),
(42, 123, 18, '2018-09-12 14:22:44', 4),
(43, 124, 18, '2018-09-12 14:22:44', 4),
(44, 167, 18, '2018-09-12 14:22:44', 4),
(45, 189, 18, '2018-09-12 14:22:44', 4),
(46, 190, 18, '2018-09-12 14:22:44', 4),
(47, 189, 18, '2018-09-12 14:22:44', 4),
(48, 211, 18, '2018-09-12 14:22:44', 4),
(49, 300, 18, '2018-09-12 14:22:44', 4),
(50, 390, 18, '2018-09-12 14:22:44', 4),
(51, 213, 18, '2018-09-12 14:22:44', 4),
(52, 121, 18, '2018-09-12 14:22:44', 4),
(53, 123, 18, '2018-09-12 14:22:44', 4),
(54, 100, 18, '2018-09-12 14:22:44', 4),
(55, 230, 16, '2018-09-12 19:15:56', 5),
(56, 290, 16, '2018-09-12 19:15:56', 5),
(57, 290, 16, '2018-09-12 19:15:56', 5),
(58, 240, 16, '2018-09-12 19:15:56', 5),
(59, 260, 16, '2018-09-12 19:15:56', 5),
(60, 280, 16, '2018-09-12 19:15:56', 5),
(61, 300, 16, '2018-09-12 19:15:56', 5),
(62, 350, 16, '2018-09-12 19:15:56', 5),
(63, 340, 16, '2018-09-12 19:15:56', 5),
(64, 390, 16, '2018-09-12 19:15:56', 5),
(65, 391, 16, '2018-09-12 19:15:56', 5),
(66, 450, 16, '2018-09-12 19:15:56', 5),
(67, 480, 16, '2018-09-12 19:15:56', 5),
(68, 320, 16, '2018-09-12 19:15:56', 5),
(69, 230, 19, '2018-09-12 19:21:32', 6),
(70, 250, 19, '2018-09-12 19:21:32', 6),
(71, 244, 19, '2018-09-12 19:21:32', 6),
(72, 265, 19, '2018-09-12 19:21:32', 6),
(73, 288, 19, '2018-09-12 19:21:32', 6),
(74, 320, 19, '2018-09-12 19:21:32', 6),
(75, 345, 19, '2018-09-12 19:21:32', 6),
(76, 450, 19, '2018-09-12 19:21:32', 6),
(77, 420, 19, '2018-09-12 19:21:32', 6),
(78, 410, 19, '2018-09-12 19:21:32', 6),
(79, 450, 19, '2018-09-12 19:21:32', 6),
(80, 321, 19, '2018-09-12 19:21:32', 6),
(81, 336, 19, '2018-09-12 19:21:32', 6),
(82, 340, 19, '2018-09-12 19:21:32', 6),
(83, 380, 19, '2018-09-12 19:21:32', 6),
(84, 223, 19, '2018-09-12 19:21:32', 6),
(85, 229, 19, '2018-09-12 19:21:32', 6),
(86, 290, 19, '2018-09-12 19:21:32', 6),
(87, 241, 19, '2018-09-12 19:21:32', 6),
(88, 278, 19, '2018-09-12 19:21:32', 6),
(89, 263, 19, '2018-09-12 19:21:32', 6),
(90, 258, 19, '2018-09-12 19:21:32', 6),
(91, 269, 19, '2018-09-12 19:21:32', 6),
(92, 379, 19, '2018-09-12 19:21:32', 6),
(93, 380, 19, '2018-09-12 19:21:32', 6),
(94, 340, 19, '2018-09-12 19:21:32', 6),
(95, 350, 19, '2018-09-12 19:21:32', 6),
(96, 360, 19, '2018-09-12 19:21:32', 6),
(97, 318, 19, '2018-09-12 19:21:32', 6),
(98, 320, 19, '2018-09-12 19:21:32', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pesosventa`
--

CREATE TABLE `pesosventa` (
  `idpesosventa` int(11) NOT NULL,
  `peso` double NOT NULL,
  `listaprecv` int(11) NOT NULL,
  `alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Catalogo de pesos de venta';

--
-- Volcado de datos para la tabla `pesosventa`
--

INSERT INTO `pesosventa` (`idpesosventa`, `peso`, `listaprecv`, `alta`, `venta`) VALUES
(1, 112, 1, '2018-09-09 15:28:35', 1),
(2, 144.48, 1, '2018-09-09 15:28:35', 1),
(3, 212.8, 1, '2018-09-09 15:28:35', 1),
(4, 224, 1, '2018-09-09 15:28:35', 1),
(5, 336, 1, '2018-09-09 15:28:35', 1),
(6, 359.52, 1, '2018-09-09 15:28:35', 1),
(7, 211.68, 1, '2018-09-09 15:28:35', 1),
(8, 199.36, 1, '2018-09-09 15:28:35', 1),
(9, 187.04, 1, '2018-09-09 15:28:35', 1),
(10, 258.72, 1, '2018-09-09 15:28:35', 1),
(11, 236.32, 1, '2018-09-09 15:28:35', 1),
(12, 224, 1, '2018-09-09 15:28:35', 1),
(13, 222.88, 1, '2018-09-09 15:28:35', 1),
(14, 201.6, 1, '2018-09-09 15:28:35', 1),
(15, 224, 1, '2018-09-09 15:28:35', 1),
(16, 109, 1, '2018-09-09 16:13:21', 2),
(17, 207.1, 1, '2018-09-09 16:13:21', 2),
(18, 206.01, 1, '2018-09-09 16:13:21', 2),
(19, 194.02, 1, '2018-09-09 16:13:21', 2),
(20, 234.35, 1, '2018-09-09 16:13:21', 2),
(21, 140.61, 1, '2018-09-09 16:13:21', 2),
(22, 140.61, 1, '2018-09-09 16:13:21', 2),
(23, 218, 1, '2018-09-09 16:13:21', 2),
(24, 300.84, 1, '2018-09-09 16:13:21', 2),
(25, 277.95, 1, '2018-09-09 16:13:21', 2),
(26, 327, 1, '2018-09-09 16:13:21', 2),
(27, 229.99, 1, '2018-09-09 16:13:21', 2),
(28, 190, 4, '2018-09-11 15:11:49', 3),
(29, 233.7, 4, '2018-09-11 15:11:49', 3),
(30, 292.6, 4, '2018-09-11 15:11:49', 3),
(31, 380, 4, '2018-09-11 15:11:49', 3),
(32, 551, 4, '2018-09-11 15:11:49', 3),
(33, 760, 4, '2018-09-11 15:11:49', 3),
(34, 406.6, 4, '2018-09-11 15:11:49', 3),
(35, 228, 4, '2018-09-11 15:11:49', 3),
(36, 380, 4, '2018-09-11 15:11:49', 3),
(37, 779, 4, '2018-09-11 15:11:49', 3),
(38, 820.8, 4, '2018-09-11 15:11:49', 3),
(39, 108, 3, '2018-09-12 14:22:44', 4),
(40, 216, 3, '2018-09-12 14:22:44', 4),
(41, 324, 3, '2018-09-12 14:22:44', 4),
(42, 132.84, 3, '2018-09-12 14:22:44', 4),
(43, 133.92, 3, '2018-09-12 14:22:44', 4),
(44, 180.36, 3, '2018-09-12 14:22:44', 4),
(45, 204.12, 3, '2018-09-12 14:22:44', 4),
(46, 205.2, 3, '2018-09-12 14:22:44', 4),
(47, 204.12, 3, '2018-09-12 14:22:44', 4),
(48, 227.88, 3, '2018-09-12 14:22:44', 4),
(49, 324, 3, '2018-09-12 14:22:44', 4),
(50, 421.2, 3, '2018-09-12 14:22:44', 4),
(51, 230.04, 3, '2018-09-12 14:22:44', 4),
(52, 130.68, 3, '2018-09-12 14:22:44', 4),
(53, 132.84, 3, '2018-09-12 14:22:44', 4),
(54, 108, 3, '2018-09-12 14:22:44', 4),
(55, 0, 3, '2018-09-12 19:15:56', 5),
(56, 0, 3, '2018-09-12 19:15:56', 5),
(57, 0, 3, '2018-09-12 19:15:56', 5),
(58, 0, 3, '2018-09-12 19:15:56', 5),
(59, 0, 3, '2018-09-12 19:15:56', 5),
(60, 0, 3, '2018-09-12 19:15:56', 5),
(61, 0, 3, '2018-09-12 19:15:56', 5),
(62, 0, 3, '2018-09-12 19:15:56', 5),
(63, 0, 3, '2018-09-12 19:15:56', 5),
(64, 0, 3, '2018-09-12 19:15:56', 5),
(65, 0, 3, '2018-09-12 19:15:56', 5),
(66, 0, 3, '2018-09-12 19:15:56', 5),
(67, 0, 3, '2018-09-12 19:15:56', 5),
(68, 0, 3, '2018-09-12 19:15:56', 5),
(69, 236.9, 5, '2018-09-12 19:21:32', 6),
(70, 257.5, 5, '2018-09-12 19:21:32', 6),
(71, 251.32, 5, '2018-09-12 19:21:32', 6),
(72, 272.95, 5, '2018-09-12 19:21:32', 6),
(73, 296.64, 5, '2018-09-12 19:21:32', 6),
(74, 329.6, 5, '2018-09-12 19:21:32', 6),
(75, 355.35, 5, '2018-09-12 19:21:32', 6),
(76, 463.5, 5, '2018-09-12 19:21:32', 6),
(77, 432.6, 5, '2018-09-12 19:21:32', 6),
(78, 422.3, 5, '2018-09-12 19:21:32', 6),
(79, 463.5, 5, '2018-09-12 19:21:32', 6),
(80, 330.63, 5, '2018-09-12 19:21:32', 6),
(81, 346.08, 5, '2018-09-12 19:21:32', 6),
(82, 350.2, 5, '2018-09-12 19:21:32', 6),
(83, 391.4, 5, '2018-09-12 19:21:32', 6),
(84, 229.69, 5, '2018-09-12 19:21:32', 6),
(85, 235.87, 5, '2018-09-12 19:21:32', 6),
(86, 298.7, 5, '2018-09-12 19:21:32', 6),
(87, 248.23, 5, '2018-09-12 19:21:32', 6),
(88, 286.34, 5, '2018-09-12 19:21:32', 6),
(89, 270.89, 5, '2018-09-12 19:21:32', 6),
(90, 265.74, 5, '2018-09-12 19:21:32', 6),
(91, 277.07, 5, '2018-09-12 19:21:32', 6),
(92, 390.37, 5, '2018-09-12 19:21:32', 6),
(93, 391.4, 5, '2018-09-12 19:21:32', 6),
(94, 350.2, 5, '2018-09-12 19:21:32', 6),
(95, 360.5, 5, '2018-09-12 19:21:32', 6),
(96, 370.8, 5, '2018-09-12 19:21:32', 6),
(97, 327.54, 5, '2018-09-12 19:21:32', 6),
(98, 329.6, 5, '2018-09-12 19:21:32', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precioscompra`
--

CREATE TABLE `precioscompra` (
  `id` int(11) NOT NULL,
  `kilos` varchar(25) DEFAULT NULL,
  `pecio` varchar(25) DEFAULT NULL,
  `listapcom` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Catalogo de Precios';

--
-- Volcado de datos para la tabla `precioscompra`
--

INSERT INTO `precioscompra` (`id`, `kilos`, `pecio`, `listapcom`) VALUES
(19, '100', '45.50', 14),
(20, '231', '44.50', 14),
(21, '291', '43.50', 14),
(22, '341', '42.50', 14),
(23, '391', '35.50', 14),
(24, '431', '34.50', 14),
(29, '100', '46.70', 16),
(30, '250', '44.10', 16),
(31, '300', '43.29', 16),
(32, '321', '43.00', 16),
(33, '400', '42.87', 16),
(34, '100', '45', 17),
(35, '150', '46', 17),
(36, '230', '47', 17),
(37, '290', '48', 17),
(38, '400', '49', 17),
(39, '100', '50', 18),
(40, '150', '55', 18),
(41, '200', '60', 18),
(42, '250', '65', 18),
(43, '300', '70', 18),
(44, '350', '75', 18),
(45, '400', '80', 18),
(46, '450', '85', 18),
(47, '230', '47', 19),
(48, '340', '46', 19),
(49, '390', '45', 19),
(50, '410', '44', 19),
(51, '500', '43', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preciosventa`
--

CREATE TABLE `preciosventa` (
  `id` int(11) NOT NULL,
  `kilos` double DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `listapventa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Catalogo de Precios venta';

--
-- Volcado de datos para la tabla `preciosventa`
--

INSERT INTO `preciosventa` (`id`, `kilos`, `precio`, `listapventa`) VALUES
(5, 100, 55.5, 1),
(6, 231, 54.5, 1),
(7, 291, 53.5, 1),
(8, 341, 52.5, 1),
(9, 391, 45.5, 1),
(10, 431, 44.5, 1),
(11, 100, 56.69, 2),
(12, 200, 55.87, 2),
(13, 300, 54.78, 2),
(14, 450, 53.45, 2),
(15, 200, 50, 3),
(16, 300, 51, 3),
(17, 360, 52, 3),
(18, 455, 53, 3),
(19, 100, 50, 4),
(20, 150, 52, 4),
(21, 200, 53, 4),
(22, 250, 55, 4),
(23, 300, 60, 4),
(24, 350, 65, 4),
(25, 400, 70, 4),
(26, 1000, 75, 4),
(27, 260, 49, 5),
(28, 300, 48, 5),
(29, 340, 47, 5),
(30, 390, 46, 5),
(31, 500, 38, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `precio_compra` float NOT NULL,
  `precio_venta` float NOT NULL,
  `ventas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `id_categoria`, `codigo`, `descripcion`, `imagen`, `stock`, `precio_compra`, `precio_venta`, `ventas`, `fecha`) VALUES
(3, 2, '201', 'Carne de Borrego', 'vistas/img/productos/201/926.jpg', 900, 12, 17, 22, '2018-05-28 21:00:34'),
(5, 1, '', 'Carne de Res', 'vistas/img/productos//337.jpg', 500, 123, 172, 0, '2018-06-04 22:38:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `nombre_empresa` text,
  `documento` int(11) NOT NULL,
  `email` text,
  `telefono` text,
  `celular` text,
  `compra` int(11) UNSIGNED DEFAULT '0',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rfc` text NOT NULL,
  `banco` text NOT NULL,
  `cuenta_bancaria` text NOT NULL,
  `total_comprado` double UNSIGNED DEFAULT '0',
  `total_adeudo` double UNSIGNED DEFAULT '0',
  `cta_clave` text NOT NULL,
  `ultima_compra` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Catalogo de Proveedores';

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `nombre`, `nombre_empresa`, `documento`, `email`, `telefono`, `celular`, `compra`, `fecha`, `rfc`, `banco`, `cuenta_bancaria`, `total_comprado`, `total_adeudo`, `cta_clave`, `ultima_compra`) VALUES
(2, 'Inocencio Q Guadamuro Solorio', 'Rancho San Pedro', 1, 'fvsolorio21@yopmail.com', '(229) 512-1324', '(044)(421) 564-5756', 6, '2018-09-12 19:15:56', 'GUSI800419F55', 'BANREGIO', '377228156435481', 817701.88, 817701.88, '1234141', '0000-00-00 00:00:00'),
(3, 'Matias Milciades Borrellas Bowers', 'Rancho San Mateo', 13, 'djbowers9@yopmail.com', '(112) 323-2414', '(044)(115) 365-7765', 8, '2018-09-07 19:40:23', 'BOBM8004196J2', 'Bancomer', '5937741068508072', 1227224.5, 1227224.5, '123321', '0000-00-00 00:00:00'),
(4, 'Noe Lebaniegos Sanchez', 'Rancho Hidalgo', 14, 'atsanchez19@yopmail.com', '(231) 456-3446', '(044)(999) 567-5344', 3, '2018-09-09 16:13:21', 'LESN800419715', 'Banregio', '340527319237013', 252639.23, 252639.23, '0981', '0000-00-00 00:00:00'),
(5, 'Enrique Fernandez', 'Rancho San Luis', 15, 'enrique@hotmail.com', '(222) 989-7980', '(044)(128) 081-2308', 2, '2018-09-09 15:28:35', 'HEHP610908UI9', 'Banregio', '379800794944492', 229103.5, 229103.5, '34213142', '0000-00-00 00:00:00'),
(6, 'Ernesto Gomez', 'RESTA S.A. DE C.V.', 16, 'genaro@gmail.com', '(124) 124-1535', '(044)(412) 412-3315', 0, '2018-08-24 17:00:34', 'HEHP610908UI9', 'BANCOMER', '3121352', 0, 0, '34213142', '0000-00-00 00:00:00'),
(7, 'Gerardo Cardoso', NULL, 17, 'cardoso@hotmail.com', NULL, NULL, 0, '2018-08-29 21:45:11', 'HEHP610908UI9', 'BANCOMER', '3121352', 0, 0, '34213142', '0000-00-00 00:00:00'),
(8, 'Enrique Fe', NULL, 18, 'pedro@hotmail.com', NULL, NULL, 1, '2018-09-12 14:22:44', 'HEHP610908UI9', 'BANCOMER', '3121352', 193130.76, 193130.76, '34213142', '0000-00-00 00:00:00'),
(9, 'Luis Gonzales', NULL, 19, 'genaro@gmail.com', NULL, NULL, 0, '2018-09-07 23:35:09', 'HEHP610908UI9', 'BANCOMER', '3121352', 0, 0, '34213142', '0000-00-00 00:00:00'),
(10, 'sa', NULL, 20, 'ixvictoriano23@yopmail.com', NULL, NULL, 1, '2018-09-11 15:11:49', 'BOBM8004196J2', 'Banorte', '1456', 188562.1, 188562.1, '12', '0000-00-00 00:00:00'),
(11, 'EFRAIN RODRIGUEZ', NULL, 21, 'leorullan@gmail.com', NULL, NULL, 1, '2018-09-12 19:21:32', '56DE5EFT', 'SANTANDER', '89895659', 430620, 430620, '562696252626', '0000-00-00 00:00:00'),
(12, 'fghdsh', NULL, 22, NULL, NULL, NULL, 0, '2018-09-20 17:44:51', 'dsfgsdg', 'sdfg', '3121352', 0, 0, '34213142', '0000-00-00 00:00:00'),
(13, 'Santiago ', NULL, 23, NULL, NULL, NULL, 0, '2018-09-20 17:50:40', 'Cars13685', 'Bancomer', '1345899098', 0, 0, '1368', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pago`
--

CREATE TABLE `tipo_pago` (
  `id` int(11) NOT NULL,
  `clave` text NOT NULL,
  `descripcion` text NOT NULL,
  `abreviacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Catálogo de tipos de pago';

--
-- Volcado de datos para la tabla `tipo_pago`
--

INSERT INTO `tipo_pago` (`id`, `clave`, `descripcion`, `abreviacion`) VALUES
(1, 'CH', 'CHEQUE NOMINATIVO', 'CHEQUE'),
(2, 'EF', 'EFECTIVO', 'EFECTIVO'),
(3, 'TE', 'TRANSFERENCIA ELECTRONICA DE FONDOS', 'TRANSFER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'GERARDO CARDOSO', 'admin', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', 'vistas/img/usuarios/admin/615.jpg', 1, '2018-10-10 22:55:30', '2018-10-11 03:55:30'),
(62, 'Sofia Hernandez', 'sofia', '$2a$07$asxx54ahjppf45sd87a5aubw4tAyVku.2JHwsEEklS3/z5ijSxSYi', 'Especial', '', 1, '2018-10-03 09:25:50', '2018-10-03 14:25:50'),
(63, 'Pedro', 'pedro', '$2a$07$asxx54ahjppf45sd87a5auRajNP0zeqOkB9Qda.dSiTb2/n.wAC/2', 'Administrador', 'vistas/img/usuarios/pedro/838.jpg', 1, '2018-08-24 11:51:50', '2018-08-24 16:51:50'),
(64, 'Leonardo Rullan', 'LeonardoRullan', '$2a$07$asxx54ahjppf45sd87a5auafspk25BbEH9yXJQgP1/fGonHDjeveq', 'Administrador', '', 1, '2018-09-12 15:01:04', '2018-09-12 20:01:04'),
(65, 'Jesús García', 'jegarcia', '$2a$07$asxx54ahjppf45sd87a5auPenLFI3Qf2zYThzut5bZ8n3QJaA1vwK', 'Administrador', '', 1, '2018-10-03 09:29:35', '2018-10-03 14:29:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_administrador` int(11) NOT NULL,
  `subtotal` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `ultima_edic` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `factura` varchar(45) DEFAULT NULL,
  `fecha_factura` varchar(45) DEFAULT NULL,
  `resta` double DEFAULT NULL,
  `deposito` double DEFAULT NULL,
  `destino` text,
  `merma` double DEFAULT NULL,
  `compra` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `observaciones` text,
  `total_facturado` double DEFAULT NULL,
  `pesoreal` double DEFAULT NULL,
  `mermareal` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `codigo`, `id_cliente`, `id_administrador`, `subtotal`, `total`, `ultima_edic`, `factura`, `fecha_factura`, `resta`, `deposito`, `destino`, `merma`, `compra`, `fecha`, `observaciones`, `total_facturado`, `pesoreal`, `mermareal`) VALUES
(1, 1, 4, 1, 178412.08, 179100.58, '2018-09-11 04:49:48', 'KIOLI', '2018-09-07', 179100.58, 0, 'Las Vigas', 1.12, 1, '2018-09-09', 'bngkqhewilfj', 12313123.9, 2900, 13.55),
(2, 2, 5, 1, 139140.68, 139140.68, '2018-09-11 04:50:37', '', '', 139691.48, 0, 'Piedras Azul', 1.09, 2, '2018-09-09', '', NULL, 2478, 4.16),
(3, 3, 10, 1, 355024.5, 355024.5, '2018-09-11 15:11:49', '', '', 355507.4, 0, 'Tinajas', 1.9, 3, '2018-09-11', '', NULL, NULL, NULL),
(4, 4, 8, 1, 168006.96, 168006.96, '2018-09-12 14:22:44', '', '', 168741.2, 0, 'Piedras Azul', 1.08, 4, '2018-09-12', '', NULL, NULL, NULL),
(5, 5, 4, 1, 0, 0, '2018-09-12 19:15:56', '', '', 0, 0, 'Las Vigas', 0, 5, '2018-09-12', '', NULL, NULL, NULL),
(6, 6, 11, 64, 438328.86, 438328.86, '2018-09-12 19:32:38', 'FAC22', '2018-09-12', 440578.86, 0, 'TIERRA BLANCA', 1.03, 6, '2018-09-12', '-', 100000, 7550, 23.22);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aretes`
--
ALTER TABLE `aretes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bancos`
--
ALTER TABLE `bancos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogos_bancos`
--
ALTER TABLE `catalogos_bancos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `chofer`
--
ALTER TABLE `chofer`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `conceptos`
--
ALTER TABLE `conceptos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `egresos`
--
ALTER TABLE `egresos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `listapcom`
--
ALTER TABLE `listapcom`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `listapventa`
--
ALTER TABLE `listapventa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `merma`
--
ALTER TABLE `merma`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pesos`
--
ALTER TABLE `pesos`
  ADD PRIMARY KEY (`idpesos`);

--
-- Indices de la tabla `pesosventa`
--
ALTER TABLE `pesosventa`
  ADD PRIMARY KEY (`idpesosventa`);

--
-- Indices de la tabla `precioscompra`
--
ALTER TABLE `precioscompra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `preciosventa`
--
ALTER TABLE `preciosventa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aretes`
--
ALTER TABLE `aretes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `bancos`
--
ALTER TABLE `bancos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `catalogos_bancos`
--
ALTER TABLE `catalogos_bancos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `chofer`
--
ALTER TABLE `chofer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `conceptos`
--
ALTER TABLE `conceptos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `egresos`
--
ALTER TABLE `egresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `listapcom`
--
ALTER TABLE `listapcom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `listapventa`
--
ALTER TABLE `listapventa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `merma`
--
ALTER TABLE `merma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pesos`
--
ALTER TABLE `pesos`
  MODIFY `idpesos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT de la tabla `pesosventa`
--
ALTER TABLE `pesosventa`
  MODIFY `idpesosventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT de la tabla `precioscompra`
--
ALTER TABLE `precioscompra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `preciosventa`
--
ALTER TABLE `preciosventa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
