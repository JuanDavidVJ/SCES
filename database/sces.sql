-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-09-2021 a las 17:40:10
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sces`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_actacomite`
--

CREATE TABLE `sc_actacomite` (
  `SC_ActaComite_PK_ID` int(11) NOT NULL,
  `SC_ActaComite_Numero` int(11) NOT NULL,
  `SC_ActaComite_Nombre` varchar(100) NOT NULL,
  `SC_ActaComite_Ciudad` varchar(30) NOT NULL,
  `SC_ActaComite_Fecha` date NOT NULL,
  `SC_ActaComite_HoraInicio` time NOT NULL,
  `SC_ActaComite_HoraFin` time NOT NULL,
  `SC_ActaComite_Lugar` varchar(50) NOT NULL,
  `SC_ActaComite_Objetivos` varchar(200) NOT NULL,
  `SC_ActaComite_Asistentes` varchar(500) NOT NULL,
  `SC_Comite_FK` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sc_actacomite`
--

INSERT INTO `sc_actacomite` (`SC_ActaComite_PK_ID`, `SC_ActaComite_Numero`, `SC_ActaComite_Nombre`, `SC_ActaComite_Ciudad`, `SC_ActaComite_Fecha`, `SC_ActaComite_HoraInicio`, `SC_ActaComite_HoraFin`, `SC_ActaComite_Lugar`, `SC_ActaComite_Objetivos`, `SC_ActaComite_Asistentes`, `SC_Comite_FK`, `updated_at`, `created_at`) VALUES
(3, 123456, 'Comité de Evaluación', 'Manizales', '2021-08-30', '07:30:00', '12:00:00', 'Meet', 'Recepcionar y/o practicar pruebas relacionadas con los hechos informados que presuntamente constituyen falta sancionable, y en los cuales aparece como presunto implicado el aprendiz relacionado.', 'Muchos', 1, '2021-08-31 02:42:40', '2021-08-31 01:58:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_actoadministrativosanciones`
--

CREATE TABLE `sc_actoadministrativosanciones` (
  `SC_ActoAdministrativoSanciones_PK_Id` int(11) NOT NULL,
  `SC_ActoAdministrativoSanciones_DescripcionHechos` varchar(100) DEFAULT NULL,
  `SC_ActoAdministrativoSanciones_PresentaDescargos` varchar(100) DEFAULT NULL,
  `SC_ActoAdministrativoSanciones_Pruebas` varchar(100) DEFAULT NULL,
  `SC_ActoAdministrativoSanciones_GradoResponsabilidadAutor` varchar(50) DEFAULT NULL,
  `SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion` int(11) DEFAULT NULL,
  `SC_ActoAdministrativoSanciones_Fecha` date DEFAULT NULL,
  `SC_Comite_FK_ID` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_antecedentes`
--

CREATE TABLE `sc_antecedentes` (
  `SC_Antecedentes_PK_ID` int(11) NOT NULL,
  `SC_Antecedentes_Descripcion` varchar(100) DEFAULT NULL,
  `SC_Antecedentes_HabilidadesDestrezas` varchar(100) DEFAULT NULL,
  `SC_Antecedentes_Observaciones` varchar(100) DEFAULT NULL,
  `SC_Antecedentes_Fecha` date DEFAULT NULL,
  `SC_Antecedentes_Foto` varchar(100) DEFAULT NULL,
  `SC_Aprendiz_FK_ID` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_aprendiz`
--

CREATE TABLE `sc_aprendiz` (
  `SC_Aprendiz_PK_ID` int(11) NOT NULL,
  `SC_Aprendiz_Documento` varchar(20) DEFAULT NULL,
  `SC_Aprendiz_Nombres` varchar(50) DEFAULT NULL,
  `SC_Aprendiz_Apellidos` varchar(50) DEFAULT NULL,
  `SC_Aprendiz_Correo` varchar(50) DEFAULT NULL,
  `SC_Aprendiz_NumeroContacto` bigint(20) DEFAULT NULL,
  `SC_Ficha_PK_ID` int(11) DEFAULT NULL,
  `SC_Aprendiz_ContratoAprendizaje` varchar(45) DEFAULT NULL,
  `SC_Aprendiz_Empresa` varchar(45) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sc_aprendiz`
--

INSERT INTO `sc_aprendiz` (`SC_Aprendiz_PK_ID`, `SC_Aprendiz_Documento`, `SC_Aprendiz_Nombres`, `SC_Aprendiz_Apellidos`, `SC_Aprendiz_Correo`, `SC_Aprendiz_NumeroContacto`, `SC_Ficha_PK_ID`, `SC_Aprendiz_ContratoAprendizaje`, `SC_Aprendiz_Empresa`, `updated_at`, `created_at`) VALUES
(12, '1053869649', 'Jaime Andres', 'Cardona Diaz', 'jacd99@hotmail.com', 3053721414, 2068678, 'No', 'No', '2021-08-27 05:02:41', '2021-08-27 05:02:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_citacion`
--

CREATE TABLE `sc_citacion` (
  `SC_CitacionPK_Id` int(11) NOT NULL,
  `SC_Citacion_FechaCitacion` date DEFAULT NULL,
  `SC_Citacion_Hora` time DEFAULT NULL,
  `SC_Citacion_Lugar` varchar(50) DEFAULT NULL,
  `SC_Citacion_Ciudad` varchar(50) DEFAULT NULL,
  `SC_Citacion_Centro` varchar(50) DEFAULT NULL,
  `SC_Solicitud_FK` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_comite`
--

CREATE TABLE `sc_comite` (
  `SC_Comite_PK_ID` int(11) NOT NULL,
  `SC_Comite_DescripcionHechos` varchar(200) DEFAULT NULL,
  `SC_Comite_Testigos` varchar(100) DEFAULT NULL,
  `SC_Comite_Observacion` varchar(100) DEFAULT NULL,
  `SC_Evidencias` varchar(200) DEFAULT NULL,
  `SC_Usuarios_FK_ID` int(11) NOT NULL,
  `SC_Falta_FK_ID` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sc_comite`
--

INSERT INTO `sc_comite` (`SC_Comite_PK_ID`, `SC_Comite_DescripcionHechos`, `SC_Comite_Testigos`, `SC_Comite_Observacion`, `SC_Evidencias`, `SC_Usuarios_FK_ID`, `SC_Falta_FK_ID`, `updated_at`, `created_at`) VALUES
(1, 'Hechos', 'Testigos', 'Observaciones', 'Evidencias', 1, 3, '2021-08-30 20:45:58', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_condicionamientomatricula`
--

CREATE TABLE `sc_condicionamientomatricula` (
  `SC_CondicionamientoMatricula_PK_ID` int(11) NOT NULL,
  `SC_CondicionamientoMatricula_Descripcion` varchar(100) DEFAULT NULL,
  `SC_CondicionamientoMatricula_Fecha` date DEFAULT NULL,
  `SC_CondicionamientoMatricula_FechaMaxima` date DEFAULT NULL,
  `SC_CondicionamientoMatricula_EvidenciasNoPresentadas` varchar(100) DEFAULT NULL,
  `SC_Acto_Administrativo_FK_ID` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_estimulos`
--

CREATE TABLE `sc_estimulos` (
  `SC_Estimulos_PK_ID` int(11) NOT NULL,
  `SC_Estimulos_Reconocimiento` varchar(100) DEFAULT NULL,
  `SC_Estimulos_DescripcionEstimulo` varchar(100) DEFAULT NULL,
  `SC_Estimulos_Fecha` date DEFAULT NULL,
  `SC_Aprendiz_FK_ID` int(11) NOT NULL,
  `SC_TipoEstimulos_FK_ID` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_evidencias`
--

CREATE TABLE `sc_evidencias` (
  `SC_Evidencias_PK_ID` int(11) NOT NULL,
  `SC_Evidencias_Descripcion` varchar(100) DEFAULT NULL,
  `SC_Evidencias_Detalle` varchar(100) DEFAULT NULL,
  `SC_Evidencias_Archivo` varchar(100) DEFAULT NULL,
  `SC_PlanMejoramiento_FK_ID` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_falta`
--

CREATE TABLE `sc_falta` (
  `SC_Falta_PK_ID` int(11) NOT NULL,
  `SC_Falta_ApoyoNoSuperado` varchar(100) DEFAULT NULL,
  `SC_Falta_EstrategiaNoSuperada` varchar(100) DEFAULT NULL,
  `SC_Falta_ActividadesRealizadasAprendiz` varchar(100) DEFAULT NULL,
  `SC_Falta_UrlDocumentosAnteriores` varchar(200) DEFAULT NULL,
  `SC_Falta_ActuacionAprendiz` varchar(100) DEFAULT NULL,
  `SC_TipoFalta_FK_ID` int(11) NOT NULL,
  `SC_Reglamento_FK_ID` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sc_falta`
--

INSERT INTO `sc_falta` (`SC_Falta_PK_ID`, `SC_Falta_ApoyoNoSuperado`, `SC_Falta_EstrategiaNoSuperada`, `SC_Falta_ActividadesRealizadasAprendiz`, `SC_Falta_UrlDocumentosAnteriores`, `SC_Falta_ActuacionAprendiz`, `SC_TipoFalta_FK_ID`, `SC_Reglamento_FK_ID`, `updated_at`, `created_at`) VALUES
(1, 'evidencia 1', 'no cumplió con los requisitos establecidos', 'no presento el prototipo', NULL, NULL, 4, 4, '2021-08-17 19:36:24', NULL),
(3, 'Alguno edit', 'Alguna', 'Estas', 'No se', 'aCTUACION', 5, 24, '2021-08-17 19:37:56', '2021-08-17 19:37:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_ficha`
--

CREATE TABLE `sc_ficha` (
  `SC_Ficha_PK_ID` int(11) NOT NULL,
  `SC_Ficha_FechaInicio` date DEFAULT NULL,
  `SC_Ficha_FechaFin` date DEFAULT NULL,
  `SC_Ficha_NombreProgramaFormacion` varchar(100) DEFAULT NULL,
  `SC_Ficha_NumeroFicha` bigint(20) NOT NULL,
  `SC_Ficha_Gestor` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sc_ficha`
--

INSERT INTO `sc_ficha` (`SC_Ficha_PK_ID`, `SC_Ficha_FechaInicio`, `SC_Ficha_FechaFin`, `SC_Ficha_NombreProgramaFormacion`, `SC_Ficha_NumeroFicha`, `SC_Ficha_Gestor`, `updated_at`, `created_at`) VALUES
(2068678, '2020-04-13', '2022-04-11', 'Análisis y Diseño de Sistemas de Información', 2068676, 2, '2021-08-27 04:48:53', '2021-08-27 04:47:27'),
(2068679, '2019-04-15', '2020-04-13', 'Tecnico en Mantenimiento de Equipos de Computo', 1810558, 2, '2021-08-31 00:51:44', '2021-08-31 00:51:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_impugnacion`
--

CREATE TABLE `sc_impugnacion` (
  `SC_Impugnacion_PK_ID` int(11) NOT NULL,
  `SC_Impugnacion_DescripcionApelacion` varchar(100) DEFAULT NULL,
  `SC_Comite_FK_ID` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_llamado_atencion`
--

CREATE TABLE `sc_llamado_atencion` (
  `SC_Llamado_Atencion_PK_ID` int(11) NOT NULL,
  `SC_Llamado_Atencion_Descripcion` varchar(100) DEFAULT NULL,
  `SC_Llamado_Atencion_Fecha` date DEFAULT NULL,
  `SC_Llamado_Atencion_EvidenciasNoPresentadas` varchar(100) DEFAULT NULL,
  `SC_ActoAdministrativoSanciones_FK_ID` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_novedades`
--

CREATE TABLE `sc_novedades` (
  `SC_Novedades_PK_ID` int(11) NOT NULL,
  `SC_Novedades_Fecha` date DEFAULT NULL,
  `SC_Aprendiz_FK_ID` int(11) NOT NULL,
  `SC_TipoNovedades_FK_ID` int(11) NOT NULL,
  `SC_Novedades_Motivo` varchar(500) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_planmejoramiento`
--

CREATE TABLE `sc_planmejoramiento` (
  `SC_PlanMejoramiento_PK_ID` int(11) NOT NULL,
  `SC_PlanMejoramiento_Descripcion` varchar(100) DEFAULT NULL,
  `SC_PlanMejoramiento_Fecha` date DEFAULT NULL,
  `SC_PlanMejoramiento_FechaMaxima` date DEFAULT NULL,
  `SC_ActoAdministrativo_FK_ID` int(11) NOT NULL,
  `SC_PlanMejoramiento` varchar(45) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_reglamento`
--

CREATE TABLE `sc_reglamento` (
  `SC_Reglamento_PK_ID` int(11) NOT NULL,
  `SC_Reglamento_Articulo` bigint(20) DEFAULT NULL,
  `SC_Reglamento_Numeral` varchar(45) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sc_reglamento`
--

INSERT INTO `sc_reglamento` (`SC_Reglamento_PK_ID`, `SC_Reglamento_Articulo`, `SC_Reglamento_Numeral`, `updated_at`, `created_at`) VALUES
(1, 8, '1', '2021-08-12 13:58:35', NULL),
(2, 8, '2', '2021-08-12 18:58:35', NULL),
(3, 8, '3', '2021-08-12 18:58:35', NULL),
(4, 8, '4', '2021-08-12 18:58:35', NULL),
(5, 8, '5', '2021-08-12 18:58:35', NULL),
(6, 8, '6', '2021-08-12 18:58:35', NULL),
(7, 8, '7', '2021-08-12 18:58:35', NULL),
(8, 8, '8', '2021-08-12 18:58:35', NULL),
(9, 8, '9', '2021-08-12 18:58:35', NULL),
(10, 8, '10', '2021-08-12 18:58:35', NULL),
(11, 8, '11', '2021-08-12 18:58:35', NULL),
(12, 8, '12', '2021-08-12 18:58:35', NULL),
(13, 8, '13', '2021-08-12 18:58:35', NULL),
(14, 8, '14', '2021-08-12 18:58:35', NULL),
(15, 8, '15', '2021-08-12 18:58:35', NULL),
(16, 8, '16', '2021-08-12 18:58:35', NULL),
(17, 8, '17', '2021-08-12 18:58:35', NULL),
(18, 8, '18', '2021-08-12 18:58:35', NULL),
(19, 8, '19', '2021-08-12 18:58:35', NULL),
(20, 8, '20', '2021-08-12 18:58:35', NULL),
(21, 8, '21', '2021-08-12 18:58:35', NULL),
(22, 8, '22', '2021-08-12 18:58:35', NULL),
(23, 8, '23', '2021-08-12 18:58:35', NULL),
(24, 8, '24', '2021-08-12 18:58:35', NULL),
(25, 8, '25', '2021-08-12 18:58:35', NULL),
(26, 8, '26', '2021-08-12 18:58:35', NULL),
(27, 8, '27', '2021-08-12 18:58:35', NULL),
(28, 8, '28', '2021-08-12 18:58:35', NULL),
(29, 8, '29', '2021-08-12 18:58:35', NULL),
(30, 8, '30', '2021-08-12 18:58:35', NULL),
(31, 8, '31', '2021-08-12 18:58:35', NULL),
(32, 8, '32', '2021-08-12 18:58:35', NULL),
(33, 8, '33', '2021-08-12 18:58:35', NULL),
(34, 9, '1', '2021-08-12 18:58:35', NULL),
(35, 9, '2', '2021-08-12 18:58:35', NULL),
(36, 9, '3', '2021-08-12 18:58:35', NULL),
(37, 9, '4', '2021-08-12 18:58:35', NULL),
(38, 9, '5', '2021-08-12 18:58:35', NULL),
(39, 9, '6', '2021-08-12 18:58:35', NULL),
(40, 9, '7', '2021-08-12 18:58:35', NULL),
(41, 9, '8', '2021-08-12 18:58:35', NULL),
(42, 9, '9', '2021-08-12 18:58:35', NULL),
(43, 9, '10', '2021-08-12 18:58:35', NULL),
(44, 9, '11', '2021-08-12 18:58:35', NULL),
(45, 9, '12', '2021-08-12 18:58:35', NULL),
(46, 9, '13', '2021-08-12 18:58:35', NULL),
(47, 9, '14', '2021-08-12 18:58:35', NULL),
(48, 9, '15', '2021-08-12 18:58:35', NULL),
(49, 9, '16', '2021-08-12 18:58:35', NULL),
(50, 9, '17', '2021-08-12 18:58:35', NULL),
(51, 9, '18', '2021-08-12 18:58:35', NULL),
(52, 9, '19', '2021-08-12 18:58:35', NULL),
(53, 9, '20', '2021-08-12 18:58:35', NULL),
(54, 9, '21', '2021-08-12 18:58:35', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_solicitar_comite`
--

CREATE TABLE `sc_solicitar_comite` (
  `SC_SolicitarComite_ID` int(11) NOT NULL,
  `SC_SolicitarComite_Fecha` date NOT NULL,
  `SC_SolicitarComite_Descripcion` varchar(200) NOT NULL,
  `SC_SolicitarComite_Testigos` varchar(300) NOT NULL,
  `SC_SolicitarComite_Observaciones` varchar(200) NOT NULL,
  `SC_SolicitarComite_Anexo` varchar(100) NOT NULL,
  `SC_Falta_FK` int(11) NOT NULL,
  `SC_Usuario_FK` int(11) NOT NULL,
  `SC_Aprendiz_FK` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sc_solicitar_comite`
--

INSERT INTO `sc_solicitar_comite` (`SC_SolicitarComite_ID`, `SC_SolicitarComite_Fecha`, `SC_SolicitarComite_Descripcion`, `SC_SolicitarComite_Testigos`, `SC_SolicitarComite_Observaciones`, `SC_SolicitarComite_Anexo`, `SC_Falta_FK`, `SC_Usuario_FK`, `SC_Aprendiz_FK`, `updated_at`, `created_at`) VALUES
(10, '2021-08-26', 'Aqui va la descripcion', 'Lista de testigos', 'Observaciones', '1630022578constancia_TituladaPresencial (1).pdf', 1, 1, 12, '2021-08-27 05:02:58', '2021-08-27 05:02:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_tipoestimulos`
--

CREATE TABLE `sc_tipoestimulos` (
  `SC_TipoEstimulos_PK_ID` int(11) NOT NULL,
  `SC_TipoEstimulos_Descripcion` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sc_tipoestimulos`
--

INSERT INTO `sc_tipoestimulos` (`SC_TipoEstimulos_PK_ID`, `SC_TipoEstimulos_Descripcion`) VALUES
(1, 'Ser reconocido a través de mención de honor o distinción por su desempeño sobresaliente en el proceso formativo, en los ámbitos descritos en este artículo, con copia a su hoja de vida.'),
(2, 'Ser elegido como vocero o representante de los aprendices, en reconocimiento de su compromiso formativo y humano, liderazgo y cumplimiento de los principios, valores y procederes éticos institucionales.'),
(3, 'Ser postulado para representar al SENA en diferentes tipos de eventos, concursos y competencias institucionales o externas. '),
(4, 'Ser postulado para realizar pasantía o intercambio nacional o internacional.'),
(5, 'Ser postulado como monitor de un tema específico en el cual demuestre competencia destacada, en el programa de formación, en la especialidad y actividades de formación que requiera su aporte; con la observancia del cumplimiento de los requisitos establecidos. '),
(6, 'Ser postulado como beneficiario de apoyos socio-económicos de acuerdo con la formación que reciba, con la observancia del cumplimiento de los requisitos establecidos.'),
(7, 'Formar parte del semillero de nuevos instructores del SENA cuando termine su proceso formativo y haya demostrado la más alta excelencia técnica y humana durante el mismo, y cumpla con el perfil y requisitos necesarios.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_tipofalta`
--

CREATE TABLE `sc_tipofalta` (
  `SC_TipoFalta_PK_ID` int(11) NOT NULL,
  `SC_TipoFalta_Descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sc_tipofalta`
--

INSERT INTO `sc_tipofalta` (`SC_TipoFalta_PK_ID`, `SC_TipoFalta_Descripcion`) VALUES
(4, 'Académica'),
(5, 'Disciplinaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_tiponovedades`
--

CREATE TABLE `sc_tiponovedades` (
  `SC_TipoNovedades_PK_ID` int(11) NOT NULL,
  `SC_TipoNovedades_Descripcion` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sc_tiponovedades`
--

INSERT INTO `sc_tiponovedades` (`SC_TipoNovedades_PK_ID`, `SC_TipoNovedades_Descripcion`, `updated_at`, `created_at`) VALUES
(1, 'Traslado', '2021-08-12 14:30:58', NULL),
(2, 'Aplazamiento', '2021-08-12 14:30:58', NULL),
(3, 'Reingreso', '2021-08-12 14:31:30', NULL),
(4, 'Retiro Voluntario', '2021-08-12 14:31:30', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_tipousuario`
--

CREATE TABLE `sc_tipousuario` (
  `SC_TipoUsuario_PK_ID` int(11) NOT NULL,
  `SC_TipoUsuario_Descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sc_tipousuario`
--

INSERT INTO `sc_tipousuario` (`SC_TipoUsuario_PK_ID`, `SC_TipoUsuario_Descripcion`) VALUES
(1, 'Subdirector'),
(2, 'Instructor'),
(3, 'Gestor comite');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_usuario`
--

CREATE TABLE `sc_usuario` (
  `SC_Usuarios_ID` int(11) NOT NULL,
  `SC_Usuarios_Documento` varchar(20) DEFAULT NULL,
  `SC_Usuarios_Nombre` varchar(100) DEFAULT NULL,
  `SC_Usuarios_Username` varchar(50) DEFAULT NULL,
  `SC_Usuarios_Password` varchar(50) DEFAULT NULL,
  `SC_TipoUsuario_FK_ID` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sc_usuario`
--

INSERT INTO `sc_usuario` (`SC_Usuarios_ID`, `SC_Usuarios_Documento`, `SC_Usuarios_Nombre`, `SC_Usuarios_Username`, `SC_Usuarios_Password`, `SC_TipoUsuario_FK_ID`, `updated_at`, `created_at`) VALUES
(1, '123456', 'juan ramiro', 'juanRamiro1', '123456', 1, '2021-08-12 14:00:16', NULL),
(2, '10077112', 'marta cruz', 'cMarta', '123456', 2, '2021-08-12 14:00:16', NULL),
(3, '38756912', 'Claudia patricia lopez', 'CpLopez', '123456', 3, '2021-08-12 14:00:16', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sc_actacomite`
--
ALTER TABLE `sc_actacomite`
  ADD PRIMARY KEY (`SC_ActaComite_PK_ID`),
  ADD KEY `FK_Comite` (`SC_Comite_FK`);

--
-- Indices de la tabla `sc_actoadministrativosanciones`
--
ALTER TABLE `sc_actoadministrativosanciones`
  ADD PRIMARY KEY (`SC_ActoAdministrativoSanciones_PK_Id`),
  ADD KEY `fk_sc_acto_administrativo_sc_Comite1_idx` (`SC_Comite_FK_ID`);

--
-- Indices de la tabla `sc_antecedentes`
--
ALTER TABLE `sc_antecedentes`
  ADD PRIMARY KEY (`SC_Antecedentes_PK_ID`),
  ADD KEY `fk_sc_Novedades_sc_aprendiz1_idx` (`SC_Aprendiz_FK_ID`);

--
-- Indices de la tabla `sc_aprendiz`
--
ALTER TABLE `sc_aprendiz`
  ADD PRIMARY KEY (`SC_Aprendiz_PK_ID`),
  ADD UNIQUE KEY `APR_Documento_UNIQUE` (`SC_Aprendiz_Documento`),
  ADD KEY `fk_sc_aprendiz_sc_ficha1_idx` (`SC_Ficha_PK_ID`);

--
-- Indices de la tabla `sc_citacion`
--
ALTER TABLE `sc_citacion`
  ADD PRIMARY KEY (`SC_CitacionPK_Id`),
  ADD KEY `FK_Solicitud` (`SC_Solicitud_FK`);

--
-- Indices de la tabla `sc_comite`
--
ALTER TABLE `sc_comite`
  ADD PRIMARY KEY (`SC_Comite_PK_ID`),
  ADD KEY `fk_sc_citacion_sc_Usuarios1_idx` (`SC_Usuarios_FK_ID`),
  ADD KEY `fk_sc_citacion_sc_falta_academica1_idx` (`SC_Falta_FK_ID`);

--
-- Indices de la tabla `sc_condicionamientomatricula`
--
ALTER TABLE `sc_condicionamientomatricula`
  ADD PRIMARY KEY (`SC_CondicionamientoMatricula_PK_ID`),
  ADD KEY `fk_sc_plan_mejoramiento_sc_acto_administrativo1_idx` (`SC_Acto_Administrativo_FK_ID`);

--
-- Indices de la tabla `sc_estimulos`
--
ALTER TABLE `sc_estimulos`
  ADD PRIMARY KEY (`SC_Estimulos_PK_ID`),
  ADD KEY `fk_sc_estimulos_sc_aprendiz1_idx` (`SC_Aprendiz_FK_ID`),
  ADD KEY `fk_sc_estimulos_sc_Tipo_estimulos1_idx` (`SC_TipoEstimulos_FK_ID`);

--
-- Indices de la tabla `sc_evidencias`
--
ALTER TABLE `sc_evidencias`
  ADD PRIMARY KEY (`SC_Evidencias_PK_ID`),
  ADD KEY `sc_plan_mejoramiento_PLA_PK_Id_idx` (`SC_PlanMejoramiento_FK_ID`);

--
-- Indices de la tabla `sc_falta`
--
ALTER TABLE `sc_falta`
  ADD PRIMARY KEY (`SC_Falta_PK_ID`),
  ADD KEY `fk_sc_falta_academica_sc_Tipo_Falta1_idx` (`SC_TipoFalta_FK_ID`),
  ADD KEY `fk_sc_falta_academica_sc_Reglamento1_idx` (`SC_Reglamento_FK_ID`);

--
-- Indices de la tabla `sc_ficha`
--
ALTER TABLE `sc_ficha`
  ADD PRIMARY KEY (`SC_Ficha_PK_ID`),
  ADD KEY `FK_Gestor` (`SC_Ficha_Gestor`);

--
-- Indices de la tabla `sc_impugnacion`
--
ALTER TABLE `sc_impugnacion`
  ADD PRIMARY KEY (`SC_Impugnacion_PK_ID`),
  ADD KEY `fk_sc_Apelacion_sc_Comite1_idx` (`SC_Comite_FK_ID`);

--
-- Indices de la tabla `sc_llamado_atencion`
--
ALTER TABLE `sc_llamado_atencion`
  ADD PRIMARY KEY (`SC_Llamado_Atencion_PK_ID`),
  ADD KEY `fk_sc_plan_mejoramiento_sc_acto_administrativo1_idx` (`SC_ActoAdministrativoSanciones_FK_ID`);

--
-- Indices de la tabla `sc_novedades`
--
ALTER TABLE `sc_novedades`
  ADD PRIMARY KEY (`SC_Novedades_PK_ID`),
  ADD KEY `fk_sc_Novedades_sc_aprendiz1_idx` (`SC_Aprendiz_FK_ID`),
  ADD KEY `fk_sc_Novedades_sc_Tipo_novedades1_idx` (`SC_TipoNovedades_FK_ID`);

--
-- Indices de la tabla `sc_planmejoramiento`
--
ALTER TABLE `sc_planmejoramiento`
  ADD PRIMARY KEY (`SC_PlanMejoramiento_PK_ID`),
  ADD KEY `fk_sc_plan_mejoramiento_sc_acto_administrativo1_idx` (`SC_ActoAdministrativo_FK_ID`);

--
-- Indices de la tabla `sc_reglamento`
--
ALTER TABLE `sc_reglamento`
  ADD PRIMARY KEY (`SC_Reglamento_PK_ID`);

--
-- Indices de la tabla `sc_solicitar_comite`
--
ALTER TABLE `sc_solicitar_comite`
  ADD PRIMARY KEY (`SC_SolicitarComite_ID`),
  ADD KEY `FK_Usuarios` (`SC_Usuario_FK`),
  ADD KEY `FK_Aprendiz` (`SC_Falta_FK`),
  ADD KEY `FK_Aprendiz_2` (`SC_Aprendiz_FK`);

--
-- Indices de la tabla `sc_tipoestimulos`
--
ALTER TABLE `sc_tipoestimulos`
  ADD PRIMARY KEY (`SC_TipoEstimulos_PK_ID`);

--
-- Indices de la tabla `sc_tipofalta`
--
ALTER TABLE `sc_tipofalta`
  ADD PRIMARY KEY (`SC_TipoFalta_PK_ID`);

--
-- Indices de la tabla `sc_tiponovedades`
--
ALTER TABLE `sc_tiponovedades`
  ADD PRIMARY KEY (`SC_TipoNovedades_PK_ID`);

--
-- Indices de la tabla `sc_tipousuario`
--
ALTER TABLE `sc_tipousuario`
  ADD PRIMARY KEY (`SC_TipoUsuario_PK_ID`);

--
-- Indices de la tabla `sc_usuario`
--
ALTER TABLE `sc_usuario`
  ADD PRIMARY KEY (`SC_Usuarios_ID`),
  ADD KEY `fk_sc_Usuarios_sc_Tipo_Usuario1_idx` (`SC_TipoUsuario_FK_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sc_actacomite`
--
ALTER TABLE `sc_actacomite`
  MODIFY `SC_ActaComite_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sc_actoadministrativosanciones`
--
ALTER TABLE `sc_actoadministrativosanciones`
  MODIFY `SC_ActoAdministrativoSanciones_PK_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sc_antecedentes`
--
ALTER TABLE `sc_antecedentes`
  MODIFY `SC_Antecedentes_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `sc_aprendiz`
--
ALTER TABLE `sc_aprendiz`
  MODIFY `SC_Aprendiz_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `sc_citacion`
--
ALTER TABLE `sc_citacion`
  MODIFY `SC_CitacionPK_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sc_comite`
--
ALTER TABLE `sc_comite`
  MODIFY `SC_Comite_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sc_condicionamientomatricula`
--
ALTER TABLE `sc_condicionamientomatricula`
  MODIFY `SC_CondicionamientoMatricula_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sc_estimulos`
--
ALTER TABLE `sc_estimulos`
  MODIFY `SC_Estimulos_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sc_evidencias`
--
ALTER TABLE `sc_evidencias`
  MODIFY `SC_Evidencias_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sc_falta`
--
ALTER TABLE `sc_falta`
  MODIFY `SC_Falta_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sc_ficha`
--
ALTER TABLE `sc_ficha`
  MODIFY `SC_Ficha_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2068680;

--
-- AUTO_INCREMENT de la tabla `sc_impugnacion`
--
ALTER TABLE `sc_impugnacion`
  MODIFY `SC_Impugnacion_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sc_llamado_atencion`
--
ALTER TABLE `sc_llamado_atencion`
  MODIFY `SC_Llamado_Atencion_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sc_novedades`
--
ALTER TABLE `sc_novedades`
  MODIFY `SC_Novedades_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sc_planmejoramiento`
--
ALTER TABLE `sc_planmejoramiento`
  MODIFY `SC_PlanMejoramiento_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sc_reglamento`
--
ALTER TABLE `sc_reglamento`
  MODIFY `SC_Reglamento_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `sc_solicitar_comite`
--
ALTER TABLE `sc_solicitar_comite`
  MODIFY `SC_SolicitarComite_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `sc_tipoestimulos`
--
ALTER TABLE `sc_tipoestimulos`
  MODIFY `SC_TipoEstimulos_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sc_tipofalta`
--
ALTER TABLE `sc_tipofalta`
  MODIFY `SC_TipoFalta_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sc_tiponovedades`
--
ALTER TABLE `sc_tiponovedades`
  MODIFY `SC_TipoNovedades_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sc_tipousuario`
--
ALTER TABLE `sc_tipousuario`
  MODIFY `SC_TipoUsuario_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `sc_usuario`
--
ALTER TABLE `sc_usuario`
  MODIFY `SC_Usuarios_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `sc_actacomite`
--
ALTER TABLE `sc_actacomite`
  ADD CONSTRAINT `FK_Comite` FOREIGN KEY (`SC_Comite_FK`) REFERENCES `sc_comite` (`SC_Comite_PK_ID`);

--
-- Filtros para la tabla `sc_actoadministrativosanciones`
--
ALTER TABLE `sc_actoadministrativosanciones`
  ADD CONSTRAINT `fk_sc_acto_administrativo_sc_Comite1` FOREIGN KEY (`SC_Comite_FK_ID`) REFERENCES `sc_comite` (`SC_Comite_PK_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sc_antecedentes`
--
ALTER TABLE `sc_antecedentes`
  ADD CONSTRAINT `fk_sc_Novedades_sc_aprendiz10` FOREIGN KEY (`SC_Aprendiz_FK_ID`) REFERENCES `sc_aprendiz` (`SC_Aprendiz_PK_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sc_aprendiz`
--
ALTER TABLE `sc_aprendiz`
  ADD CONSTRAINT `fk_sc_aprendiz_sc_ficha1` FOREIGN KEY (`SC_Ficha_PK_ID`) REFERENCES `sc_ficha` (`SC_Ficha_PK_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sc_citacion`
--
ALTER TABLE `sc_citacion`
  ADD CONSTRAINT `FK_Solicitud` FOREIGN KEY (`SC_Solicitud_FK`) REFERENCES `sc_solicitar_comite` (`SC_SolicitarComite_ID`);

--
-- Filtros para la tabla `sc_comite`
--
ALTER TABLE `sc_comite`
  ADD CONSTRAINT `fk_sc_citacion_sc_Usuarios1` FOREIGN KEY (`SC_Usuarios_FK_ID`) REFERENCES `sc_usuario` (`SC_Usuarios_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sc_citacion_sc_falta_academica1` FOREIGN KEY (`SC_Falta_FK_ID`) REFERENCES `sc_falta` (`SC_Falta_PK_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sc_condicionamientomatricula`
--
ALTER TABLE `sc_condicionamientomatricula`
  ADD CONSTRAINT `fk_sc_plan_mejoramiento_sc_acto_administrativo10` FOREIGN KEY (`SC_Acto_Administrativo_FK_ID`) REFERENCES `sc_actoadministrativosanciones` (`SC_ActoAdministrativoSanciones_PK_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sc_estimulos`
--
ALTER TABLE `sc_estimulos`
  ADD CONSTRAINT `fk_sc_estimulos_sc_Tipo_estimulos1` FOREIGN KEY (`SC_TipoEstimulos_FK_ID`) REFERENCES `sc_tipoestimulos` (`SC_TipoEstimulos_PK_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sc_estimulos_sc_aprendiz1` FOREIGN KEY (`SC_Aprendiz_FK_ID`) REFERENCES `sc_aprendiz` (`SC_Aprendiz_PK_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sc_evidencias`
--
ALTER TABLE `sc_evidencias`
  ADD CONSTRAINT `sc_plan_mejoramiento_PLA_PK_Id` FOREIGN KEY (`SC_PlanMejoramiento_FK_ID`) REFERENCES `sc_planmejoramiento` (`SC_PlanMejoramiento_PK_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sc_falta`
--
ALTER TABLE `sc_falta`
  ADD CONSTRAINT `fk_sc_falta_academica_sc_Reglamento1` FOREIGN KEY (`SC_Reglamento_FK_ID`) REFERENCES `sc_reglamento` (`SC_Reglamento_PK_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sc_falta_academica_sc_Tipo_Falta1` FOREIGN KEY (`SC_TipoFalta_FK_ID`) REFERENCES `sc_tipofalta` (`SC_TipoFalta_PK_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sc_ficha`
--
ALTER TABLE `sc_ficha`
  ADD CONSTRAINT `FK_Gestor` FOREIGN KEY (`SC_Ficha_Gestor`) REFERENCES `sc_usuario` (`SC_Usuarios_ID`);

--
-- Filtros para la tabla `sc_impugnacion`
--
ALTER TABLE `sc_impugnacion`
  ADD CONSTRAINT `fk_sc_Apelacion_sc_Comite1` FOREIGN KEY (`SC_Comite_FK_ID`) REFERENCES `sc_comite` (`SC_Comite_PK_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sc_llamado_atencion`
--
ALTER TABLE `sc_llamado_atencion`
  ADD CONSTRAINT `fk_sc_plan_mejoramiento_sc_acto_administrativo11` FOREIGN KEY (`SC_ActoAdministrativoSanciones_FK_ID`) REFERENCES `sc_actoadministrativosanciones` (`SC_ActoAdministrativoSanciones_PK_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sc_novedades`
--
ALTER TABLE `sc_novedades`
  ADD CONSTRAINT `fk_sc_Novedades_sc_Tipo_novedades1` FOREIGN KEY (`SC_TipoNovedades_FK_ID`) REFERENCES `sc_tiponovedades` (`SC_TipoNovedades_PK_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sc_Novedades_sc_aprendiz1` FOREIGN KEY (`SC_Aprendiz_FK_ID`) REFERENCES `sc_aprendiz` (`SC_Aprendiz_PK_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sc_planmejoramiento`
--
ALTER TABLE `sc_planmejoramiento`
  ADD CONSTRAINT `fk_sc_plan_mejoramiento_sc_acto_administrativo1` FOREIGN KEY (`SC_ActoAdministrativo_FK_ID`) REFERENCES `sc_actoadministrativosanciones` (`SC_ActoAdministrativoSanciones_PK_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sc_solicitar_comite`
--
ALTER TABLE `sc_solicitar_comite`
  ADD CONSTRAINT `FK_Aprendiz_2` FOREIGN KEY (`SC_Aprendiz_FK`) REFERENCES `sc_aprendiz` (`SC_Aprendiz_PK_ID`),
  ADD CONSTRAINT `FK_Faltas` FOREIGN KEY (`SC_Falta_FK`) REFERENCES `sc_falta` (`SC_Falta_PK_ID`),
  ADD CONSTRAINT `FK_Usuarios` FOREIGN KEY (`SC_Usuario_FK`) REFERENCES `sc_usuario` (`SC_Usuarios_ID`);

--
-- Filtros para la tabla `sc_usuario`
--
ALTER TABLE `sc_usuario`
  ADD CONSTRAINT `fk_sc_Usuarios_sc_Tipo_Usuario1` FOREIGN KEY (`SC_TipoUsuario_FK_ID`) REFERENCES `sc_tipousuario` (`SC_TipoUsuario_PK_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
