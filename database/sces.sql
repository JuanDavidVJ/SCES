-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2021 a las 18:34:51
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

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
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_actacomite`
--

CREATE TABLE `sc_actacomite` (
  `SC_ActaComite_PK_ID` int(11) NOT NULL,
  `SC_ActaComite_Nombre` varchar(100) NOT NULL,
  `SC_ActaComite_Ciudad` varchar(30) NOT NULL,
  `SC_ActaComite_Fecha` date NOT NULL,
  `SC_ActaComite_HoraInicio` time NOT NULL,
  `SC_ActaComite_HoraFin` time NOT NULL,
  `SC_ActaComite_Asistentes` varchar(500) NOT NULL,
  `SC_ActaComite_DeclaracionesAprendiz` varchar(300) NOT NULL,
  `SC_ActaComite_DeclaracionesOtros` varchar(300) NOT NULL,
  `SC_ActaComite_Decision` varchar(200) NOT NULL,
  `SC_ActaComite_DeclaracionesResponsable` varchar(300) NOT NULL,
  `SC_Citacion_FK` int(11) NOT NULL,
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
(12, '1053869649', 'Jaime Andres', 'Cardona Diaz', 'jacd99@hotmail.com', 3053721414, 2068678, 'No', 'No', '2021-08-27 05:02:41', '2021-08-27 05:02:41'),
(13, '12345678', 'gisela', 'criollo suarez', 'giselacriollo16@gmail.com', 3158845440, 2068678, 'practica y patrocinio', 'Torres guarin', '2021-09-14 02:30:28', '2021-09-07 17:47:41'),
(14, '098765', 'Vanesa tatiana', 'morales', 'vtmorales@misena.edu.co', 315987645, 2068678, NULL, NULL, '2021-09-10 02:20:55', '2021-09-10 02:20:55');

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
  `SC_Citacion_NumeroActa` int(11) NOT NULL,
  `SC_Solicitud_FK` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_estimulos`
--

CREATE TABLE `sc_estimulos` (
  `SC_Estimulos_PK_ID` int(11) NOT NULL,
  `SC_Estimulos_Reporta` varchar(100) DEFAULT NULL,
  `SC_Estimulos_Razon` varchar(100) DEFAULT NULL,
  `SC_Estimulos_Detalles` varchar(300) NOT NULL,
  `SC_Estimulos_Fecha` date DEFAULT NULL,
  `SC_Aprendiz_FK_ID` int(11) NOT NULL,
  `SC_Ficha_FK_ID` int(11) NOT NULL,
  `SC_TipoEstimulos_FK_ID` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sc_estimulos`
--

INSERT INTO `sc_estimulos` (`SC_Estimulos_PK_ID`, `SC_Estimulos_Reporta`, `SC_Estimulos_Razon`, `SC_Estimulos_Detalles`, `SC_Estimulos_Fecha`, `SC_Aprendiz_FK_ID`, `SC_Ficha_FK_ID`, `SC_TipoEstimulos_FK_ID`, `updated_at`, `created_at`) VALUES
(6, 'pepito perez', 'alguna', 'detalle', '2021-09-07', 13, 2068678, 6, '2021-09-09 20:39:46', '2021-09-09 20:39:46');

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
(2068678, '2020-04-13', '2022-04-11', 'Análisis y Diseño de Sistemas de Información', 2068676, 2, '2021-08-27 04:48:53', '2021-08-27 04:47:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_gravedad`
--

CREATE TABLE `sc_gravedad` (
  `SC_Gravedad_ID` int(11) NOT NULL,
  `SC_Gravedad_Nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sc_gravedad`
--

INSERT INTO `sc_gravedad` (`SC_Gravedad_ID`, `SC_Gravedad_Nombre`) VALUES
(1, 'Leve'),
(2, 'Grave'),
(3, 'Gravísima ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_notificaciones`
--

CREATE TABLE `sc_notificaciones` (
  `SC_Notificacion_ID` int(11) NOT NULL,
  `SC_Notificacion_TipoPlan` int(11) DEFAULT 3,
  `SC_Notificacion_Sugerencia` varchar(200) NOT NULL,
  `SC_Notificacion_Instructor` int(11) UNSIGNED DEFAULT 3,
  `SC_Notificacion_FechaInicial` date NOT NULL,
  `SC_Notificacion_FechaLimite` date DEFAULT NULL,
  `SC_ActaComite_FK` int(11) NOT NULL,
  `SC_TipoNotificacion_FK` int(11) NOT NULL,
  `SC_Notificacion_Forma` varchar(200) DEFAULT NULL,
  `SC_Notificacion_Funcionario` varchar(200) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_recursos_reposicion`
--

CREATE TABLE `sc_recursos_reposicion` (
  `SC_Recursos_ID` int(11) NOT NULL,
  `SC_Recursos_FechaGenerado` date NOT NULL,
  `SC_Recursos_FechaLimite` date NOT NULL,
  `SC_Recursos_Radicado` int(11) NOT NULL,
  `SC_Recursos_Evidencias` varchar(100) NOT NULL,
  `SC_Recursos_Decision` varchar(300) DEFAULT NULL,
  `SC_ActaComite_FK` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_reglamento`
--

CREATE TABLE `sc_reglamento` (
  `SC_Reglamento_PK_ID` int(11) NOT NULL,
  `SC_Reglamento_Articulo` bigint(20) DEFAULT NULL,
  `SC_Reglamento_Numeral` varchar(45) DEFAULT NULL,
  `SC_Reglamento_Descripcion` varchar(500) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sc_reglamento`
--

INSERT INTO `sc_reglamento` (`SC_Reglamento_PK_ID`, `SC_Reglamento_Articulo`, `SC_Reglamento_Numeral`, `SC_Reglamento_Descripcion`, `updated_at`, `created_at`) VALUES
(1, 8, '1', 'Suscribir al momento de asentar la matrícula el acta de compromiso como Aprendiz SENA', '2021-08-12 13:58:35', NULL),
(2, 8, '2', 'Conocer y cumplir con el código de integralidad, el reglamento del aprendiz, los manuales...', '2021-08-12 18:58:35', NULL),
(3, 8, '3', 'Actuar siempre teniendo como base los principios, valores y procederes institucionales...', '2021-08-12 18:58:35', NULL),
(4, 8, '4', 'Registrar en el sistema de gestión académico administrativo y/o otros aplicativos de la entidad, los...', '2021-08-12 18:58:35', NULL),
(5, 8, '5', 'Actualizar de oficio o a solicitud de parte, la información reportada en los aplicativos del SENA en...', '2021-08-12 18:58:35', NULL),
(6, 8, '6', 'Cumplir con todas las actividades formativas propias de su proceso de aprendizaje según...', '2021-08-12 18:58:35', NULL),
(7, 8, '7', 'Acceder regularmente a los ambientes virtuales previstos para la formación y mantener una...', '2021-08-12 18:58:35', NULL),
(8, 8, '8', 'Ser reconocido con una condición de discapacidad y que el Centro de formación realice los ajustes...', '2021-08-12 18:58:35', NULL),
(9, 8, '9', 'Participar en las actividades complementarias o de profundización, relacionadas con el programa...', '2021-08-12 18:58:35', NULL),
(10, 8, '10', 'Dedicar al proceso de aprendizaje las horas semanales señaladas para cada programa, que...', '2021-08-12 18:58:35', NULL),
(11, 8, '11', 'Justificar debidamente inasistencias y/o incumplimientos a las actividades de la formación...', '2021-08-12 18:58:35', NULL),
(12, 8, '12', 'Participar activamente en procesos de retroalimentación de la calidad de la formación y presentar...', '2021-08-12 18:58:35', NULL),
(13, 8, '13', 'Cumplir con la reglamentación y directrices que se emitan para su participación en actividades...', '2021-08-12 18:58:35', NULL),
(14, 8, '14', 'Informar y hacer la solicitud, por escrito, al Coordinador Académico y registrar en el sistema de', '2021-08-12 18:58:35', NULL),
(15, 8, '15', 'Hacer uso apropiado de los ambientes de formación (infraestructura, equipos, herramientas...', '2021-08-12 18:58:35', NULL),
(16, 8, '16', 'Participar en las reuniones que programe el Centro de Formación para seguimiento a las...', '2021-08-12 18:58:35', NULL),
(17, 8, '17', 'Respetar los derechos de autor en los materiales, trabajos, proyectos y demás documentos...', '2021-08-12 18:58:35', NULL),
(18, 8, '18', 'Realizar personalmente las evaluaciones, investigaciones, actividades y prácticas de formación...', '2021-08-12 18:58:35', NULL),
(19, 8, '19', 'Respetar los bienes y recursos culturales, naturales, físicos, digitales, de uso público y/o privado...', '2021-08-12 18:58:35', NULL),
(20, 8, '20', 'Usar apropiadamente y promover el uso de los elementos de protección personal que...', '2021-08-12 18:58:35', NULL),
(21, 8, '21', 'Cumplir con la reglamentación y directrices que se emitan por el SENA para la realización de la...', '2021-08-12 18:58:35', NULL),
(22, 8, '22', 'Portar permanentemente y en lugar visible el documento que lo identifica como Aprendiz SENA...', '2021-08-12 18:58:35', NULL),
(23, 8, '23', 'Portar el uniforme de manera decorosa dentro del Centro de Formación, en los ambientes donde...', '2021-08-12 18:58:35', NULL),
(24, 8, '24', 'Ingresar a las plataformas virtuales institucionales, debidamente identificadas con el respectivo...', '2021-08-12 18:58:35', NULL),
(25, 8, '25', 'Hacer uso apropiado de los espacios y medios de comunicación institucionales y respetar a los...', '2021-08-12 18:58:35', NULL),
(26, 8, '26', 'Participar en los foros de discusión y demás espacios de socialización de los ambientes virtuales...', '2021-08-12 18:58:35', NULL),
(27, 8, '27', 'Informar al instructor, coordinador, directivo o personal de apoyo, cualquier irregularidad que...', '2021-08-12 18:58:35', NULL),
(28, 8, '28', 'Obrar conforme al principio del respeto de los derechos de los demás evitando realizar y/o apoyar...', '2021-08-12 18:58:35', NULL),
(29, 8, '29', 'Asumir con compromiso las responsabilidades recibidas y más aún si son de representación de su...', '2021-08-12 18:58:35', NULL),
(30, 8, '30', 'Hacer entrega oportuna de toda la documentación requerida para poder ingresar, formarse...', '2021-08-12 18:58:35', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_solicitar_comite`
--

CREATE TABLE `sc_solicitar_comite` (
  `SC_SolicitarComite_ID` int(11) NOT NULL,
  `SC_SolicitarComite_Responsable` varchar(100) NOT NULL,
  `SC_SolicitarComite_Fecha` date NOT NULL,
  `SC_SolicitarComite_Descripcion` varchar(200) NOT NULL,
  `SC_SolicitarComite_Testigos` varchar(300) NOT NULL,
  `SC_SolicitarComite_Observaciones` varchar(200) NOT NULL,
  `SC_SolicitarComite_Anexo` varchar(100) NOT NULL,
  `SC_Falta_FK` int(11) NOT NULL,
  `SC_Usuario_FK` int(11) UNSIGNED NOT NULL,
  `SC_Aprendiz_FK` int(11) NOT NULL,
  `SC_Gravedad_FK` int(11) NOT NULL,
  `SC_Reglamento_FK` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Ser reconocido a través de mención de honor o distinción por su desempeño sobresaliente en el proceso formativo...'),
(2, 'Ser elegido como vocero o representante de los aprendices, en reconocimiento de su compromiso formativo y humano...'),
(3, 'Ser postulado para representar al SENA en diferentes tipos de eventos, concursos y competencias institucionales o externas. '),
(4, 'Ser postulado para realizar pasantía o intercambio nacional o internacional.'),
(5, 'Ser postulado como monitor de un tema específico en el cual demuestre competencia destacada, en el programa de formación... '),
(6, 'Ser postulado como beneficiario de apoyos socio-económicos de acuerdo con la formación que reciba, con la observancia...'),
(7, 'Formar parte del semillero de nuevos instructores del SENA cuando termine su proceso formativo y haya demostrado la más alta...');

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
(5, 'Disciplinaria'),
(6, 'Académica-Disciplinaria ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_tiponotificacion`
--

CREATE TABLE `sc_tiponotificacion` (
  `SC_TipoNotificacion_ID` int(11) NOT NULL,
  `SC_TipoNotificacion_Descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sc_tiponotificacion`
--

INSERT INTO `sc_tiponotificacion` (`SC_TipoNotificacion_ID`, `SC_TipoNotificacion_Descripcion`) VALUES
(1, 'Llamado de atención'),
(2, 'Condicionamiento de Matricula'),
(3, 'Cancelación de Matricula');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sc_tipoplan`
--

CREATE TABLE `sc_tipoplan` (
  `SC_TipoPlan_ID` int(11) NOT NULL,
  `SC_TipoPlan_Descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sc_tipoplan`
--

INSERT INTO `sc_tipoplan` (`SC_TipoPlan_ID`, `SC_TipoPlan_Descripcion`) VALUES
(1, 'Académico '),
(2, 'Disciplinario'),
(3, 'N/A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipoUsuario` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `documento`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `tipoUsuario`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'daessar', '1054568205', 'Daniel Esteban Sanchez Arias', 'desanchez502@misena.edu.co', NULL, '$2y$10$pAExYSKVWILCiMg.tW6iU.plBvqQhirHVclssXNz3apmmaf2kPQbu', NULL, NULL, 3, NULL, '2021-09-11 09:22:11', '2021-09-11 09:22:11'),
(2, 'Gigi', '1007711255', 'Gisela criollo Suárez', 'giselacriollo16@gmail.com', NULL, '$2y$10$g0Jtk8znEr.qaUunOyYpdOyQMhSrz6FON9Bpu8m3KGyYITDGGxQae', NULL, NULL, 3, NULL, '2021-09-14 02:30:01', '2021-09-14 02:30:01'),
(3, 'No aplica', '0000', 'No aplica', 'No aplica', NULL, '1234', NULL, NULL, 4, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `sc_actacomite`
--
ALTER TABLE `sc_actacomite`
  ADD PRIMARY KEY (`SC_ActaComite_PK_ID`),
  ADD KEY `FK_Citacion2` (`SC_Citacion_FK`);

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
-- Indices de la tabla `sc_estimulos`
--
ALTER TABLE `sc_estimulos`
  ADD PRIMARY KEY (`SC_Estimulos_PK_ID`),
  ADD KEY `fk_sc_estimulos_sc_aprendiz1_idx` (`SC_Aprendiz_FK_ID`),
  ADD KEY `fk_sc_estimulos_sc_Tipo_estimulos1_idx` (`SC_TipoEstimulos_FK_ID`),
  ADD KEY `FK_Ficha` (`SC_Ficha_FK_ID`);

--
-- Indices de la tabla `sc_ficha`
--
ALTER TABLE `sc_ficha`
  ADD PRIMARY KEY (`SC_Ficha_PK_ID`),
  ADD KEY `FK_Gestor` (`SC_Ficha_Gestor`);

--
-- Indices de la tabla `sc_gravedad`
--
ALTER TABLE `sc_gravedad`
  ADD PRIMARY KEY (`SC_Gravedad_ID`);

--
-- Indices de la tabla `sc_notificaciones`
--
ALTER TABLE `sc_notificaciones`
  ADD PRIMARY KEY (`SC_Notificacion_ID`),
  ADD KEY `FK_Acta` (`SC_ActaComite_FK`),
  ADD KEY `FK_TipoNotificacion` (`SC_TipoNotificacion_FK`),
  ADD KEY `FK_TipoPlan` (`SC_Notificacion_TipoPlan`),
  ADD KEY `FK_Instructor` (`SC_Notificacion_Instructor`);

--
-- Indices de la tabla `sc_recursos_reposicion`
--
ALTER TABLE `sc_recursos_reposicion`
  ADD PRIMARY KEY (`SC_Recursos_ID`),
  ADD KEY `FK_Acta2` (`SC_ActaComite_FK`);

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
  ADD KEY `FK_Aprendiz_2` (`SC_Aprendiz_FK`),
  ADD KEY `FK_Falta` (`SC_Falta_FK`),
  ADD KEY `FK_Gravedad` (`SC_Gravedad_FK`),
  ADD KEY `FK_Reglamento` (`SC_Reglamento_FK`),
  ADD KEY `FK_Usuario` (`SC_Usuario_FK`);

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
-- Indices de la tabla `sc_tiponotificacion`
--
ALTER TABLE `sc_tiponotificacion`
  ADD PRIMARY KEY (`SC_TipoNotificacion_ID`);

--
-- Indices de la tabla `sc_tipoplan`
--
ALTER TABLE `sc_tipoplan`
  ADD PRIMARY KEY (`SC_TipoPlan_ID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sc_actacomite`
--
ALTER TABLE `sc_actacomite`
  MODIFY `SC_ActaComite_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sc_aprendiz`
--
ALTER TABLE `sc_aprendiz`
  MODIFY `SC_Aprendiz_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `sc_citacion`
--
ALTER TABLE `sc_citacion`
  MODIFY `SC_CitacionPK_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sc_estimulos`
--
ALTER TABLE `sc_estimulos`
  MODIFY `SC_Estimulos_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `sc_ficha`
--
ALTER TABLE `sc_ficha`
  MODIFY `SC_Ficha_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2068683;

--
-- AUTO_INCREMENT de la tabla `sc_gravedad`
--
ALTER TABLE `sc_gravedad`
  MODIFY `SC_Gravedad_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sc_notificaciones`
--
ALTER TABLE `sc_notificaciones`
  MODIFY `SC_Notificacion_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sc_recursos_reposicion`
--
ALTER TABLE `sc_recursos_reposicion`
  MODIFY `SC_Recursos_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sc_reglamento`
--
ALTER TABLE `sc_reglamento`
  MODIFY `SC_Reglamento_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `sc_solicitar_comite`
--
ALTER TABLE `sc_solicitar_comite`
  MODIFY `SC_SolicitarComite_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `sc_tipoestimulos`
--
ALTER TABLE `sc_tipoestimulos`
  MODIFY `SC_TipoEstimulos_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sc_tipofalta`
--
ALTER TABLE `sc_tipofalta`
  MODIFY `SC_TipoFalta_PK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `sc_tiponotificacion`
--
ALTER TABLE `sc_tiponotificacion`
  MODIFY `SC_TipoNotificacion_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sc_tipoplan`
--
ALTER TABLE `sc_tipoplan`
  MODIFY `SC_TipoPlan_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `sc_actacomite`
--
ALTER TABLE `sc_actacomite`
  ADD CONSTRAINT `FK_Citacion2` FOREIGN KEY (`SC_Citacion_FK`) REFERENCES `sc_citacion` (`SC_CitacionPK_Id`);

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
-- Filtros para la tabla `sc_estimulos`
--
ALTER TABLE `sc_estimulos`
  ADD CONSTRAINT `FK_Ficha` FOREIGN KEY (`SC_Ficha_FK_ID`) REFERENCES `sc_ficha` (`SC_Ficha_PK_ID`),
  ADD CONSTRAINT `fk_sc_estimulos_sc_Tipo_estimulos1` FOREIGN KEY (`SC_TipoEstimulos_FK_ID`) REFERENCES `sc_tipoestimulos` (`SC_TipoEstimulos_PK_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sc_estimulos_sc_aprendiz1` FOREIGN KEY (`SC_Aprendiz_FK_ID`) REFERENCES `sc_aprendiz` (`SC_Aprendiz_PK_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sc_notificaciones`
--
ALTER TABLE `sc_notificaciones`
  ADD CONSTRAINT `FK_Acta` FOREIGN KEY (`SC_ActaComite_FK`) REFERENCES `sc_actacomite` (`SC_ActaComite_PK_ID`),
  ADD CONSTRAINT `FK_Instructor` FOREIGN KEY (`SC_Notificacion_Instructor`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_TipoNotificacion` FOREIGN KEY (`SC_TipoNotificacion_FK`) REFERENCES `sc_tiponotificacion` (`SC_TipoNotificacion_ID`),
  ADD CONSTRAINT `FK_TipoPlan` FOREIGN KEY (`SC_Notificacion_TipoPlan`) REFERENCES `sc_tipoplan` (`SC_TipoPlan_ID`);

--
-- Filtros para la tabla `sc_recursos_reposicion`
--
ALTER TABLE `sc_recursos_reposicion`
  ADD CONSTRAINT `FK_Acta2` FOREIGN KEY (`SC_ActaComite_FK`) REFERENCES `sc_actacomite` (`SC_ActaComite_PK_ID`);

--
-- Filtros para la tabla `sc_solicitar_comite`
--
ALTER TABLE `sc_solicitar_comite`
  ADD CONSTRAINT `FK_Aprendiz_2` FOREIGN KEY (`SC_Aprendiz_FK`) REFERENCES `sc_aprendiz` (`SC_Aprendiz_PK_ID`),
  ADD CONSTRAINT `FK_Falta` FOREIGN KEY (`SC_Falta_FK`) REFERENCES `sc_tipofalta` (`SC_TipoFalta_PK_ID`),
  ADD CONSTRAINT `FK_Gravedad` FOREIGN KEY (`SC_Gravedad_FK`) REFERENCES `sc_gravedad` (`SC_Gravedad_ID`),
  ADD CONSTRAINT `FK_Reglamento` FOREIGN KEY (`SC_Reglamento_FK`) REFERENCES `sc_reglamento` (`SC_Reglamento_PK_ID`),
  ADD CONSTRAINT `FK_Usuario` FOREIGN KEY (`SC_Usuario_FK`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
