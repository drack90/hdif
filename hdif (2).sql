-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 04 2019 г., 19:41
-- Версия сервера: 5.6.41
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hdif`
--

-- --------------------------------------------------------

--
-- Структура таблицы `default_fpl`
--

CREATE TABLE `default_fpl` (
  `id` int(11) NOT NULL,
  `author` text NOT NULL,
  `fplName` varchar(64) NOT NULL,
  `field1` varchar(64) NOT NULL,
  `field7` varchar(64) NOT NULL,
  `field13` varchar(255) NOT NULL,
  `timeDeparture` varchar(12) NOT NULL,
  `field15` text NOT NULL,
  `field16` varchar(16) NOT NULL,
  `field18` text NOT NULL,
  `timeArrival` varchar(16) NOT NULL,
  `alternative1` varchar(8) NOT NULL,
  `alternative2` varchar(8) NOT NULL,
  `commentaries` text NOT NULL,
  `direction` varchar(10) NOT NULL,
  `notFPL` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `default_fpl`
--

INSERT INTO `default_fpl` (`id`, `author`, `fplName`, `field1`, `field7`, `field13`, `timeDeparture`, `field15`, `field16`, `field18`, `timeArrival`, `alternative1`, `alternative2`, `commentaries`, `direction`, `notFPL`) VALUES
(130, 'admin', '12312', '(FPL-NFT9717-VN\r\n', 'AS55/L NH/N\r\n', 'ZZZZ', '0540', 'K0190M0095 6840N05812E ULDW 6844N05746E 6835N05711E\r<br>6827N05642E 6805N05511E 6751N05410E ZZZZ 6739N05307E\r<br>ULAM 6741N05417E 6743N05529E 6745N05623E ZZZZ 6715N05641E\r<br>ZZZZ 6747N05849E 6736N05912E 6723N05820E 6700N05737E\r<br>6621N05722E ZZZZ 6602N05734E ZZZZ 6600N05725E UUYS\r<br>6621N05730E 6700N05747E 6800N05815E 6824N05803E\r<br>6836N05801E 6840N05804E\r', 'ULDW', 'DEP/OBPTREBSA 6836N05801E PAP/6740N05308E0005,6717N05632E0005,\r<br>ULEG0005,UUHF0005,UUHP0005 DOF/190806 REG/RA07236 EET/ULDW0005\r<br>ULAM0120 ULEG0230 UUYW0250 UUYI0330 ULEG0400 UUYS0420 ULEG0510\r<br>ULDW0645 OPR/AO UTAIR WU RMK/POSADKA SOGLASOWANA EKIPAV DOPUQEN\r<br>K POSADKAM S PODBOROM SE/34 POLET W PROSTRANSTWE C/G ОБЛЕТ М/Р\r<br>РН УЛДВ РН УЛАМ УГОЛЬНАЯ ПИЖМА РН УУЫВ РН УУЫИ РН УЛЕГ ГОЛОВНЫЕ\r<br>УСА1 УУЫС ТЕЛ ВУ 3452 285551)\r', '1400', 'UUYS', 'ULAM\r\n', '21312', 'Тюмень', 0),
(131, 'admin', '213123123123', '(FPL-NFT9717-VN\r\n', 'AS55/L NH/N\r\n', 'ZZZZ', '0540', 'K0190M0095 6840N05812E ULDW 6844N05746E 6835N05711E\r<br>6827N05642E 6805N05511E 6751N05410E ZZZZ 6739N05307E\r<br>ULAM 6741N05417E 6743N05529E 6745N05623E ZZZZ 6715N05641E\r<br>ZZZZ 6747N05849E 6736N05912E 6723N05820E 6700N05737E\r<br>6621N05722E ZZZZ 6602N05734E ZZZZ 6600N05725E UUYS\r<br>6621N05730E 6700N05747E 6800N05815E 6824N05803E\r<br>6836N05801E 6840N05804E\r', 'ULDW', 'DEP/OBPTREBSA 6836N05801E PAP/6740N05308E0005,6717N05632E0005,\r<br>ULEG0005,UUHF0005,UUHP0005 DOF/190806 REG/RA07236 EET/ULDW0005\r<br>ULAM0120 ULEG0230 UUYW0250 UUYI0330 ULEG0400 UUYS0420 ULEG0510\r<br>ULDW0645 OPR/AO UTAIR WU RMK/POSADKA SOGLASOWANA EKIPAV DOPUQEN\r<br>K POSADKAM S PODBOROM SE/34 POLET W PROSTRANSTWE C/G ОБЛЕТ М/Р\r<br>РН УЛДВ РН УЛАМ УГОЛЬНАЯ ПИЖМА РН УУЫВ РН УУЫИ РН УЛЕГ ГОЛОВНЫЕ\r<br>УСА1 УУЫС ТЕЛ ВУ 3452 285551)\r', '1400', 'UUYS', 'ULAM\r\n', '123123123', 'Тюмень', 0),
(132, 'admin', 'asdsadasd', '(FPL-NFT9717-VN\r\n', 'AS55/L NH/N\r\n', 'ZZZZ', '0540', 'K0190M0095 6840N05812E ULDW 6844N05746E 6835N05711E\r<br>6827N05642E 6805N05511E 6751N05410E ZZZZ 6739N05307E\r<br>ULAM 6741N05417E 6743N05529E 6745N05623E ZZZZ 6715N05641E\r<br>ZZZZ 6747N05849E 6736N05912E 6723N05820E 6700N05737E\r<br>6621N05722E ZZZZ 6602N05734E ZZZZ 6600N05725E UUYS\r<br>6621N05730E 6700N05747E 6800N05815E 6824N05803E\r<br>6836N05801E 6840N05804E\r', 'ULDW', 'DEP/OBPTREBSA 6836N05801E PAP/6740N05308E0005,6717N05632E0005,\r<br>ULEG0005,UUHF0005,UUHP0005 DOF/190806 REG/RA07236 EET/ULDW0005\r<br>ULAM0120 ULEG0230 UUYW0250 UUYI0330 ULEG0400 UUYS0420 ULEG0510\r<br>ULDW0645 OPR/AO UTAIR WU RMK/POSADKA SOGLASOWANA EKIPAV DOPUQEN\r<br>K POSADKAM S PODBOROM SE/34 POLET W PROSTRANSTWE C/G ОБЛЕТ М/Р\r<br>РН УЛДВ РН УЛАМ УГОЛЬНАЯ ПИЖМА РН УУЫВ РН УУЫИ РН УЛЕГ ГОЛОВНЫЕ\r<br>УСА1 УУЫС ТЕЛ ВУ 3452 285551)\r', '1400', 'UUYS', 'ULAM\r\n', 'asdas', 'Тюмень', 0),
(133, 'admin', 'asdsadasd', '(FPL-NFT9717-VN\r\n', 'AS55/L NH/N\r\n', 'ZZZZ', '0540', 'K0190M0095 6840N05812E ULDW 6844N05746E 6835N05711E\r<br>6827N05642E 6805N05511E 6751N05410E ZZZZ 6739N05307E\r<br>ULAM 6741N05417E 6743N05529E 6745N05623E ZZZZ 6715N05641E\r<br>ZZZZ 6747N05849E 6736N05912E 6723N05820E 6700N05737E\r<br>6621N05722E ZZZZ 6602N05734E ZZZZ 6600N05725E UUYS\r<br>6621N05730E 6700N05747E 6800N05815E 6824N05803E\r<br>6836N05801E 6840N05804E\r', 'ULDW', 'DEP/OBPTREBSA 6836N05801E PAP/6740N05308E0005,6717N05632E0005,\r<br>ULEG0005,UUHF0005,UUHP0005 DOF/190806 REG/RA07236 EET/ULDW0005\r<br>ULAM0120 ULEG0230 UUYW0250 UUYI0330 ULEG0400 UUYS0420 ULEG0510\r<br>ULDW0645 OPR/AO UTAIR WU RMK/POSADKA SOGLASOWANA EKIPAV DOPUQEN\r<br>K POSADKAM S PODBOROM SE/34 POLET W PROSTRANSTWE C/G ОБЛЕТ М/Р\r<br>РН УЛДВ РН УЛАМ УГОЛЬНАЯ ПИЖМА РН УУЫВ РН УУЫИ РН УЛЕГ ГОЛОВНЫЕ\r<br>УСА1 УУЫС ТЕЛ ВУ 3452 285551)\r', '1400', 'UUYS', 'ULAM\r\n', 'asdas', 'Тюмень', 0),
(134, 'admin', 'sdasdasd', '(FPL-NFT9717-VN\r\n', 'AS55/L NH/N\r\n', 'ZZZZ', '0540', 'K0190M0095 6840N05812E ULDW 6844N05746E 6835N05711E\r<br>6827N05642E 6805N05511E 6751N05410E ZZZZ 6739N05307E\r<br>ULAM 6741N05417E 6743N05529E 6745N05623E ZZZZ 6715N05641E\r<br>ZZZZ 6747N05849E 6736N05912E 6723N05820E 6700N05737E\r<br>6621N05722E ZZZZ 6602N05734E ZZZZ 6600N05725E UUYS\r<br>6621N05730E 6700N05747E 6800N05815E 6824N05803E\r<br>6836N05801E 6840N05804E\r', 'ULDW', 'DEP/OBPTREBSA 6836N05801E PAP/6740N05308E0005,6717N05632E0005,\r<br>ULEG0005,UUHF0005,UUHP0005 DOF/190806 REG/RA07236 EET/ULDW0005\r<br>ULAM0120 ULEG0230 UUYW0250 UUYI0330 ULEG0400 UUYS0420 ULEG0510\r<br>ULDW0645 OPR/AO UTAIR WU RMK/POSADKA SOGLASOWANA EKIPAV DOPUQEN\r<br>K POSADKAM S PODBOROM SE/34 POLET W PROSTRANSTWE C/G ОБЛЕТ М/Р\r<br>РН УЛДВ РН УЛАМ УГОЛЬНАЯ ПИЖМА РН УУЫВ РН УУЫИ РН УЛЕГ ГОЛОВНЫЕ\r<br>УСА1 УУЫС ТЕЛ ВУ 3452 285551)\r', '1400', 'UUYS', 'ULAM\r\n', 'asdasd', 'Тюмень', 0),
(135, 'admin', 'asda', '(FPL-NFT9717-VN\r\n', 'AS55/L NH/N\r\n', 'ZZZZ', '0540', 'K0190M0095 6840N05812E ULDW 6844N05746E 6835N05711E\r<br>6827N05642E 6805N05511E 6751N05410E ZZZZ 6739N05307E\r<br>ULAM 6741N05417E 6743N05529E 6745N05623E ZZZZ 6715N05641E\r<br>ZZZZ 6747N05849E 6736N05912E 6723N05820E 6700N05737E\r<br>6621N05722E ZZZZ 6602N05734E ZZZZ 6600N05725E UUYS\r<br>6621N05730E 6700N05747E 6800N05815E 6824N05803E\r<br>6836N05801E 6840N05804E\r', 'ULDW', 'DEP/OBPTREBSA 6836N05801E PAP/6740N05308E0005,6717N05632E0005,\r<br>ULEG0005,UUHF0005,UUHP0005 DOF/190806 REG/RA07236 EET/ULDW0005\r<br>ULAM0120 ULEG0230 UUYW0250 UUYI0330 ULEG0400 UUYS0420 ULEG0510\r<br>ULDW0645 OPR/AO UTAIR WU RMK/POSADKA SOGLASOWANA EKIPAV DOPUQEN\r<br>K POSADKAM S PODBOROM SE/34 POLET W PROSTRANSTWE C/G ОБЛЕТ М/Р\r<br>РН УЛДВ РН УЛАМ УГОЛЬНАЯ ПИЖМА РН УУЫВ РН УУЫИ РН УЛЕГ ГОЛОВНЫЕ\r<br>УСА1 УУЫС ТЕЛ ВУ 3452 285551)\r', '1400', 'UUYS', 'ULAM\r\n', 'asdas', 'Тюмень', 0),
(136, 'admin', 'asdaasdasd', '', '', '', '', ' автора: приветствую вас, друзья. В этой статье мы поговорим о символе пробела в PHP. Мы узнаем, какими способами можно описать пробел в шаблоне регулярного выражения, а в качестве практики составим регулярное выражение, которое будет искать лишние пробелы и удалять их. Начнем?\r\n\r\n\r\nИтак, как же указать пробел в шаблоне регулярного выражения? Все просто. В регулярном выражении пробел обозначает сам себя. То есть мы можем нажать ту самую продолговат', '', '', '', '', '', 'asdas', 'Тюмень', 1),
(137, 'admin', 'Не стандартный ФПЛ', '', '', '', '', 'кккк\r\n \r\n\r\nавтора: приветствую вас, друзья. В этой статье мы поговорим о символе пробела в PHP. Мы узнаем, какими способами можно описать пробел в шаблоне регулярного выражения, а в качестве практики составим регулярное выражение, которое будет искать лишние пробелы и удалять их. Начнем?\r\n\r\n\r\nИтак, как же указать пробел в шаблоне регулярного выражения? Все просто. В регулярном выражении пробел обозначает сам себя. То есть мы можем нажать ту самую продолговат', '', '', '', '', '', 'не стандартный ФПЛ', 'Тюмень', 1),
(138, 'admin', 'sadasd', '', '', '', '', ' автора: приветствую вас, друзья. В этой статье мы поговорим о символе пробела в PHP. Мы узнаем, какими способами можно описать пробел в шаблоне регулярного выражения, а в качестве практики составим регулярное выражение, которое будет искать лишние пробелы и удалять их. Начнем?\r\n\r\n\r\nИтак, как же указать пробел в шаблоне регулярного выражения? Все просто. В регулярном выражении пробел обозначает сам себя. То есть мы можем нажать ту самую продолговат', '', '', '', '', '', 'asdas', 'Тюмень', 1),
(139, 'admin', 'testparse', '', '', '', '', 'Таким образом образуется ситуация, что на экранах некоторых устройств, например, на нетбуках, меню может располагаться в две строки. Возможно, вы даже не видите в этом проблемы. В любом случае, Bootstrap предлагает несколько решений этой проблемы:\r<br>\r<br>Изначально рассчитывать ширину содержимого меню так, чтобы оно полностью поместилось вплоть до ширины 768 пикселей. А начиная с этой ширины оно скроется за кнопкой-гамбургером, так что беспокоиться о его дальнейшем расположении не нужно.\r<br>\r<br>Скрыть определенные элементы или пункты меню на разме', '', '', '', '', '', 'asd', 'Тюмень', 1),
(140, 'admin', 'asdasd', '(FPL-NFT9717-VN\r\n', 'AS55/L NH/N\r\n', 'ZZZZ', '0540', 'K0190M0095 6840N05812E ULDW 6844N05746E 6835N05711E\r<br>6827N05642E 6805N05511E 6751N05410E ZZZZ 6739N05307E\r<br>ULAM 6741N05417E 6743N05529E 6745N05623E ZZZZ 6715N05641E\r<br>ZZZZ 6747N05849E 6736N05912E 6723N05820E 6700N05737E\r<br>6621N05722E ZZZZ 6602N05734E ZZZZ 6600N05725E UUYS\r<br>6621N05730E 6700N05747E 6800N05815E 6824N05803E\r<br>6836N05801E 6840N05804E\r', 'ULDW', 'DEP/OBPTREBSA 6836N05801E PAP/6740N05308E0005,6717N05632E0005,\r<br>ULEG0005,UUHF0005,UUHP0005 DOF/190806 REG/RA07236 EET/ULDW0005\r<br>ULAM0120 ULEG0230 UUYW0250 UUYI0330 ULEG0400 UUYS0420 ULEG0510\r<br>ULDW0645 OPR/AO UTAIR WU RMK/POSADKA SOGLASOWANA EKIPAV DOPUQEN\r<br>K POSADKAM S PODBOROM SE/34 POLET W PROSTRANSTWE C/G ОБЛЕТ М/Р\r<br>РН УЛДВ РН УЛАМ УГОЛЬНАЯ ПИЖМА РН УУЫВ РН УУЫИ РН УЛЕГ ГОЛОВНЫЕ\r<br>УСА1 УУЫС ТЕЛ ВУ 3452 285551)\r', '1400', 'UUYS', 'ULAM\r\n', 'asd', 'Тюмень', 0),
(141, 'admin', 'asdasd', '(FPL-NFT9717-VN\r\n', 'AS55/L NH/N\r\n', 'ZZZZ', '0540', 'K0190M0095 6840N05812E ULDW 6844N05746E 6835N05711E\r<br>6827N05642E 6805N05511E 6751N05410E ZZZZ 6739N05307E\r<br>ULAM 6741N05417E 6743N05529E 6745N05623E ZZZZ 6715N05641E\r<br>ZZZZ 6747N05849E 6736N05912E 6723N05820E 6700N05737E\r<br>6621N05722E ZZZZ 6602N05734E ZZZZ 6600N05725E UUYS\r<br>6621N05730E 6700N05747E 6800N05815E 6824N05803E\r<br>6836N05801E 6840N05804E\r', 'ULDW', 'ULDW1400 UUYS ULAM\r', '1400', 'UUYS', 'ULAM\r\n', 'asd', 'Тюмень', 0),
(142, 'admin', 'asdasd', '(FPL-NFT9717-VN\r\n', 'AS55/L NH/N\r\n', 'ZZZZ', '0540', 'K0190M0095 6840N05812E ULDW 6844N05746E 6835N05711E\r<br>6827N05642E 6805N05511E 6751N05410E ZZZZ 6739N05307E\r<br>ULAM 6741N05417E 6743N05529E 6745N05623E ZZZZ 6715N05641E\r<br>ZZZZ 6747N05849E 6736N05912E 6723N05820E 6700N05737E\r<br>6621N05722E ZZZZ 6602N05734E ZZZZ 6600N05725E UUYS\r<br>6621N05730E 6700N05747E 6800N05815E 6824N05803E\r<br>6836N05801E 6840N05804E\r', 'ULDW', 'ULDW1400 UUYS ULAM\r', '1400', 'UUYS', 'ULAM\r\n', 'asd', 'Тюмень', 0),
(143, 'admin', 'asdasd', '(FPL-NFT9717-VN\r\n', 'AS55/L NH/N\r\n', 'ZZZZ', '0540', 'K0190M0095 6840N05812E ULDW 6844N05746E 6835N05711E\r<br>6827N05642E 6805N05511E 6751N05410E ZZZZ 6739N05307E\r<br>ULAM 6741N05417E 6743N05529E 6745N05623E ZZZZ 6715N05641E\r<br>ZZZZ 6747N05849E 6736N05912E 6723N05820E 6700N05737E\r<br>6621N05722E ZZZZ 6602N05734E ZZZZ 6600N05725E UUYS\r<br>6621N05730E 6700N05747E 6800N05815E 6824N05803E\r<br>6836N05801E 6840N05804E\r', 'ULDW', 'ULDW1400 UUYS ULAM\r', '1400', 'UUYS', 'ULAM\r\n', 'asd', 'Тюмень', 0),
(144, 'admin', 'ssa', '(FPL-NFT9717-VN\r\n', 'AS55/L NH/N\r\n', 'ZZZZ', '0540', 'K0190M0095 6840N05812E ULDW 6844N05746E 6835N05711E\r<br>6827N05642E 6805N05511E 6751N05410E ZZZZ 6739N05307E\r<br>ULAM 6741N05417E 6743N05529E 6745N05623E ZZZZ 6715N05641E\r<br>ZZZZ 6747N05849E 6736N05912E 6723N05820E 6700N05737E\r<br>6621N05722E ZZZZ 6602N05734E ZZZZ 6600N05725E UUYS\r<br>6621N05730E 6700N05747E 6800N05815E 6824N05803E\r<br>6836N05801E 6840N05804E\r', 'ULDW', 'DEP/OBPTREBSA 6836N05801E PAP/6740N05308E0005,6717N05632E0005,\r<br>ULEG0005,UUHF0005,UUHP0005 DOF/190806 REG/RA07236 EET/ULDW0005\r<br>ULAM0120 ULEG0230 UUYW0250 UUYI0330 ULEG0400 UUYS0420 ULEG0510\r<br>ULDW0645 OPR/AO UTAIR WU RMK/POSADKA SOGLASOWANA EKIPAV DOPUQEN\r<br>K POSADKAM S PODBOROM SE/34 POLET W PROSTRANSTWE C/G ОБЛЕТ М/Р\r<br>РН УЛДВ РН УЛАМ УГОЛЬНАЯ ПИЖМА РН УУЫВ РН УУЫИ РН УЛЕГ ГОЛОВНЫЕ\r<br>УСА1 УУЫС ТЕЛ ВУ 3452 285551)\r', '1400', 'UUYS', 'ULAM\r\n', 'asd', 'Тюмень', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `geopoint`
--

CREATE TABLE `geopoint` (
  `id` int(11) NOT NULL,
  `geopoint` text NOT NULL,
  `name` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `geopoint`
--

INSERT INTO `geopoint` (`id`, `geopoint`, `name`, `comment`) VALUES
(123, '6125N11232E', '10П', 'Иркутск'),
(124, '6231N11402E', '155/2', 'Иркутск'),
(125, '6230N11402E', '155/7', 'Иркутск'),
(126, '6259N11437E', '157/1', 'Иркутск'),
(127, '5946N11053E', '179/62Р', 'Иркутск'),
(128, '6035N11817E', '187/7', 'Иркутск'),
(129, '6031N11812E', '187/8', 'Иркутск'),
(130, '6039N11825E', '187/10', 'Иркутск'),
(131, '5947N11045E', '207/05Р', 'Иркутск'),
(132, '5740N10808E', '231/2', 'Иркутск'),
(133, '6235N11500E', '241/1', 'Иркутск'),
(134, '6251N11418E', '243/1', 'Иркутск'),
(135, '6235N11501E', '244/1', 'Иркутск'),
(136, '6243N11457E', '245/1', 'Иркутск'),
(137, '6257N11359E', '255/1', 'Иркутск'),
(138, '6229N11425E', '259/1', 'Иркутск'),
(139, '6205N11426E', '259/2', 'Иркутск'),
(140, '6230N11433E', '261/2', 'Иркутск'),
(141, '6232N11427E', '264/1', 'Иркутск'),
(142, '5837N10906E', '278/2', 'Иркутск'),
(143, '5854N11020E', '282/1', 'Иркутск'),
(144, '5943N11042E', '304/10', 'Иркутск'),
(145, '5938N11048E', '304/31', 'Иркутск'),
(146, '5939N11048E', '304/34', 'Иркутск'),
(147, '5939N11048E', '304/34', 'Иркутск'),
(148, '5939N11048E', '304/35', 'Иркутск'),
(149, '6032N1124E', '321/85', 'Иркутск'),
(150, '6038N11117E', '321/86', 'Иркутск'),
(151, '5959N11121E', '321/89', 'Иркутск'),
(152, '6006N11127E', '321/89', 'Иркутск'),
(153, '6005N11127E', '321/90', 'Иркутск'),
(154, '6004N1145E', '321/90', 'Иркутск'),
(155, '6015N11148E', '321/91', 'Иркутск'),
(156, '6012N11147E', '321/92', 'Иркутск'),
(157, '6020N11229E', '353/1', 'Иркутск'),
(158, '6003N11249E', '357/1', 'Иркутск'),
(159, '6053N11059E', '365/3', 'Иркутск'),
(160, '6036N11308E', '423/1', 'Иркутск'),
(161, '5936N11025E', '490/13', 'Иркутск'),
(162, '6010N11055E', '530/17', 'Иркутск'),
(163, '5835N11120E', '542/14', 'Иркутск'),
(164, '6126N11222E', '592/2', 'Иркутск'),
(165, '6253N11403E', '680/1', 'Иркутск'),
(166, '5938N10805E', '71 даниловская ', 'Иркутск'),
(167, '5941N10815E', '77Даниловская', 'Иркутск'),
(168, '6133N11239E', '7П', 'Иркутск'),
(169, '5900N11030E', 'ВСТО2', 'Иркутск'),
(170, '5959N11220E', 'ВСТО3', 'Иркутск'),
(171, '6041N11822E', 'ВСТО4', 'Иркутск'),
(172, '6040N11316E', 'ВСТО5', 'Иркутск'),
(173, '6121N11248E', 'Карьер 2', 'Иркутск'),
(174, '6054N11209E', 'куст12', 'Иркутск'),
(175, '6052N11209E', 'куст17', 'Иркутск'),
(176, '6052N11209E', 'КУСТ17', 'Иркутск'),
(177, '6051N11204E', 'куст24', 'Иркутск'),
(178, '6045N11454E', 'ЛЭУ Ленск', 'Иркутск'),
(179, '6025N12039E', 'Лэу Олекминск', 'Иркутск'),
(180, '5708N10520E', 'НПС6', 'Иркутск'),
(181, '5849N10946E', 'НПС9', 'Иркутск'),
(182, '5936N11050E', 'НПС10', 'Иркутск'),
(183, '6014N11246E', 'НПС11', 'Иркутск'),
(184, '6053N11514E', 'НПС12', 'Иркутск'),
(185, '6042N11802E', 'НПС13', 'Иркутск'),
(186, '5754N12531E', 'НПС18', 'Иркутск'),
(187, '5630N10252E', 'нпс4', 'Иркутск'),
(188, '5732N10702E', 'нпс7', 'Иркутск'),
(189, '5652N12453E', 'Нюренгри Г.Т.', 'Иркутск'),
(190, '5950N11054E', 'П48', 'Иркутск'),
(191, '5950N11054E', 'п48', 'Иркутск'),
(192, '5937N11246E', 'Пеледуй', 'Иркутск'),
(193, '6157N11306E', 'СКВ100', 'Иркутск'),
(194, '6237N11356E', 'СКВ156/1П', 'Иркутск'),
(195, '6128N11238E', 'СКВ23', 'Иркутск'),
(196, '6151N11608E', 'СКВ643', 'Иркутск'),
(197, '6147N11617E', 'СКВ643а', 'Иркутск'),
(198, '6232N11406E', 'СКВ746', 'Иркутск'),
(199, '6230N11404E', 'СКВ747', 'Иркутск'),
(200, '6231N11359E', 'СКВ87', 'Иркутск'),
(201, '5930N10818E', 'сп17', 'Иркутск'),
(202, '5649N10516E', 'янталь', 'Иркутск'),
(203, '5952N11018E', '3963/9', 'Иркутск'),
(204, '5942N11043E', '304/12', 'Иркутск'),
(205, '6101N11032E', '530/12', 'Иркутск'),
(206, '6007N/11007E', '530/15', 'Иркутск'),
(207, '5945N11031E', '207/4', 'Иркутск'),
(208, '6007N/11007E', '530/22', 'Иркутск'),
(209, '5651N10546E', 'ПЛ№3', 'Иркутск'),
(210, '5743N10802E', 'г.т. Киренск', 'Иркутск'),
(211, '5610N10727E', 'Магистральный', 'Иркутск'),
(212, '5524N10614E', 'Ковыктинское ГКМ', 'Иркутск'),
(213, '6046c11241d', '421/8', 'Иркутск'),
(214, '6150N11644E', '641/9', 'Иркутск'),
(215, '5909N10832E', '2ВерхнеИчерская', 'Иркутск'),
(216, '6021N11146E', 'ВЗИС73', 'Иркутск'),
(217, '6039N11825E', '187/11', 'Иркутск'),
(218, '6040N11826E', '187/10', 'Иркутск'),
(219, '6039N11809E', '187/12', 'Иркутск'),
(220, '5952N11102E', 'ГП (Площадка с а/п ТЛК)', 'Иркутск'),
(221, '6218N11602E', 'крестьях', 'Иркутск'),
(222, '6235N11355E', 'гравийный ', 'Иркутск'),
(223, '5654N12455E', 'гт рн НЕРЮНГРИ', 'Иркутск'),
(224, '5959N11258E', 'о.ХМАРА', 'Иркутск'),
(225, '5742N12352E', 'База Айянах', 'Иркутск'),
(226, '6756N07520E', 'куст207', 'МКМ'),
(227, '6605N07623E', 'бурэнерго', 'МКМ'),
(228, '6748N07234E', 'ВЖК рн НПТ', 'МКМ'),
(229, '7113N07209E', 'Сабетта', 'МКМ'),
(230, '5813N06826E', 'ТНХК', 'МКМ'),
(231, '5700N06535E', 'ЛЕБЯЖЬЕ', 'МКМ'),
(232, '5613N06758E', 'Первомайское', 'МКМ'),
(233, '5709N06545E', 'Антипино(Ембаево)', 'МКМ'),
(234, '5709N06528E', 'Плеханово 2', 'Иркутск'),
(235, '7052N08451E', 'Р6411', 'Игарка'),
(236, '7439N01148E', 'МЫС Сибирский', 'Игарка'),
(237, '4331N03959E', 'Ski-park', 'Сочи'),
(238, '4337N03944E', 'Навагинка', 'Сочи'),
(239, '4324N03956E', 'Олимпийский парк', 'Сочи'),
(240, '4342N03949E', 'пос. Ажек', 'Сочи'),
(241, '4340N04013E', 'Санки', 'Сочи'),
(242, '4347N03937E', 'Солох Аул', 'Сочи'),
(243, '4347N03939E', 'Харциз 1', 'Сочи'),
(244, '4338N04025E', 'Хребет Грушевый', 'Сочи'),
(245, '4433N03804E', 'ст Геленджик', 'Сочи'),
(246, '4438N03755E', 'сан. Прометей', 'Сочи'),
(247, '4442N03751E', 'ПК Шесхарис', 'Сочи'),
(248, '4444N03753E', 'ПП Грушовая', 'Сочи'),
(249, '4445N03745E', 'посКирилловка БПО', 'Сочи'),
(250, '4442N03736E', 'ПП Абрау', 'Сочи'),
(251, '4324N03956E', 'Порт Имеретинский', 'Сочи'),
(252, '4331N03959E', 'Галицино', 'Сочи'),
(253, '4326N03955E', 'Баден-баден', 'Сочи'),
(254, '4504N03706E', 'благовещенское', 'Сочи'),
(255, '4517N03547E', 'ленино', 'Сочи'),
(256, '4500N03500E', 'кировское', 'Сочи'),
(257, '4503N03435E', 'белогорск', 'Сочи'),
(258, '4440N03424E', 'алушта', 'Сочи'),
(259, '4429N03408E', 'ялта', 'Сочи'),
(260, '6753N6031E', 'нядейю', 'Усинск'),
(261, '6800N05948E', 'пнс нядейю', 'Усинск'),
(262, '6823N05902E', 'ОБП Лабаган', 'Усинск'),
(263, '6740N05308E', 'Угольная (рн УЛАМ)', 'Усинск'),
(264, '6842N05743E', 'Требса', 'Усинск'),
(265, '6817N05823E', 'Титово', 'Усинск'),
(266, '6059N06855E', 'Мостоотряд', 'Ханты-Мансийск'),
(267, '6128N06814E', 'Кедровый ', 'Ханты-Мансийск'),
(268, '5948N06848E', 'Болчары', 'Ханты-Мансийск'),
(269, '6019N06855E', 'Алтай', 'Ханты-Мансийск'),
(270, '6024N06903E', 'Кама', 'Ханты-Мансийск'),
(271, '6036N06804E', 'Согом', 'Ханты-Мансийск'),
(272, '6117N07020E', 'Селиярово', 'Ханты-Мансийск'),
(273, '6137N06749E', 'Урманный', 'Ханты-Мансийск'),
(274, '6005N07129E', 'Салым', 'Ханты-Мансийск'),
(275, '6003N06954E', 'горноправдинск', 'Ханты-Мансийск'),
(276, '6059N06908E', 'АБЗ ', 'Ханты-Мансийск'),
(277, '6217N06922E', 'Североитьяхинское', 'Ханты-Мансийск'),
(278, '6308N07519E', 'карьер', 'Ноябрьск'),
(279, '6343N07559E', 'ЛЭС Ханымей', 'Ноябрьск'),
(280, '6431N07637E', 'НПС Пурпе', 'Ноябрьск'),
(281, '6421N07724E', '8км', 'Ноябрьск'),
(282, '6420N07715E', '15км', 'Ноябрьск'),
(283, '6420N07708E', '21км', 'Ноябрьск'),
(284, '6400N7631E', 'КС-03', 'Ноябрьск'),
(285, '6326N07806E', 'Халясовей рн', 'Ноябрьск'),
(286, '6510N08037E', 'Кынское', 'Ноябрьск'),
(287, '6524N08049E', 'Ново-Часельское', 'Ноябрьск'),
(288, '6421N07724E', 'тарасовка(8км)', 'Ноябрьск'),
(289, '6420N07715E', 'муравленко(15км)', 'Ноябрьск'),
(290, '6420N07708E', 'муравленко(21км)', 'Ноябрьск'),
(291, '6258N07701E', 'вынгапур', 'Ноябрьск'),
(292, '6315N08006E', 'холмистый', 'Ноябрьск'),
(293, '6326N08059E', 'чатылькинское', 'Ноябрьск'),
(294, '6304N07658E', '191 км', 'Ноябрьск'),
(295, '6223N07728E', '80км', 'Ноябрьск'),
(296, '6313N07547E', 'ясный', 'Ноябрьск'),
(297, '6311N07516E', 'ноябрьск', 'Ноябрьск'),
(298, '6325N08031E', '681ЧАТЫЛЬКИНСКАЯ ', 'Ноябрьск'),
(299, '6330N08048E', '741ЧАТЫЛЬКИНСКАЯ', 'Ноябрьск'),
(300, '6326N08051E', '740ЧАТЫЛЬКИНСКАЯ', 'Ноябрьск'),
(301, '6319N07931E', 'РАВНИННОЕ', 'Ноябрьск'),
(302, '6313N07740E', 'Ярайнерское мр', 'Ноябрьск'),
(303, '6554N07811E', 'каратчаево', 'Ноябрьск'),
(304, '6456N07736E', 'кирпичная', 'Ноябрьск'),
(305, '6516N07745E', 'пур ', 'Ноябрьск'),
(306, '6511N07533E ', 'кс1', 'Ноябрьск'),
(307, '6801N07800E', 'Вжк Находка', 'Новый-Уренгой'),
(308, '6605N07623E', 'бурэнерго', 'Новый-Уренгой'),
(309, '6747N08005E', 'пякяхинское м/р', 'Новый-Уренгой'),
(310, '6744N08112E', 'Хальмерпаюта-Пякяха ПК', 'Новый-Уренгой'),
(311, '6733N07814E', 'СКВ7Р', 'Новый-Уренгой'),
(312, '6731N07822E', 'СКВ15Р', 'Новый-Уренгой'),
(313, '7113N07209E', 'САБЕТТА', 'Новый-Уренгой'),
(314, '6748N07222E', 'НОВОПОРТОВОЕ М/Р', 'Новый-Уренгой'),
(315, '6519N07303E', 'КС0', 'Новый-Уренгой'),
(316, '6447N07056E', 'ЛОНГ ЮГАН', 'Новый-Уренгой'),
(317, '6412N06901E', 'СОРУМ', 'Новый-Уренгой'),
(318, '6417N07104E', 'КС ПРИОЗЕРНАЯ', 'Новый-Уренгой'),
(319, '5348N07503E', 'КПП СОД 215', 'Тара'),
(320, '5512N08319E', 'СОКУР НПС', 'Тара'),
(321, '5618N09008E', '275км МН', 'Тара'),
(322, '5616N09034E', 'Ачинск (УНКС)', 'Тара'),
(323, '5607N08915E', ' Каштан НПС', 'Тара'),
(324, '5611N08747E', 'Мариинская НПС', 'Тара'),
(325, '5608N08603E', 'Анжеро-Судженская ЛПДС', 'Тара'),
(326, '5511N08252E', 'ППМН О-И р.Обь', 'Тара'),
(327, '5510N08308E', 'Мочище (УННМ)', 'Тара'),
(328, '6039N07728E', 'Колтогорский причал 9км', 'Тара'),
(329, '6044N07732E ', '2км', 'Тара'),
(330, '6015N07756E', 'к9 Дненберговское м/р', 'Тара'),
(331, '5935N07903E', 'Раскино', 'Тара'),
(332, '5940N07845E', 'Чкаловское мр', 'Тара'),
(333, '5819N05622E', 'ПОЛАЗНА', 'Пермь'),
(334, '5837N 05639E', 'К.Лог', 'Пермь'),
(335, '5925N05750E', 'Яйва', 'Пермь'),
(336, '6015N08759E ', 'Р-н Талицы', 'Пермь'),
(337, '6015N05759E', 'Геж', 'Пермь'),
(338, '5943N05716E', 'Дурино', 'Пермь'),
(339, '5922N059616E', 'Б.Пашня', 'Пермь'),
(340, '5937N05639E', 'Романово', 'Пермь'),
(341, '5837N 05639E', 'Н.Красное', 'Пермь'),
(342, '5844N05645E', 'Р-н Пермское', 'Пермь'),
(343, '5622N05519E', 'Б.Гондырь', 'Пермь'),
(344, '5632N05610E', 'г.Чернушка', 'Пермь'),
(345, '5651N05635E', 'с.Уинское', 'Пермь'),
(346, '5744N05617E', 'Звездный', 'Пермь'),
(347, '5819N05622E', 'Мохово (Демидково)', 'Пермь'),
(348, '5823N05646E', 'Березники', 'Пермь'),
(349, '5813N05617E', 'Скобелевка', 'Пермь'),
(350, '5617N07027E', 'Абатское', 'Ишим'),
(351, '5643N06941E', 'Вознесенка', 'Ишим'),
(352, '5712N06910E', 'Новопетрово', 'Ишим'),
(353, '5753N06909E', 'Вагай НПС', 'Ишим'),
(354, '5558N07136E', 'Чумановка', 'Ишим'),
(355, '5535N07238E', 'Оброскино', 'Ишим'),
(356, '5505N07313E', 'ПСП (ЦНПС) Омск', 'Ишим'),
(357, '6300с07318в', '6213', 'Сургут'),
(358, '6313с07359в', '6244', 'Сургут'),
(359, '6222с07047в', '7045', 'Сургут'),
(360, '5655с07827в', '2316_(УНТТ)', 'Сургут'),
(361, '5707с07821в', '2317 (УНТТ)', 'Сургут'),
(362, '6111с07016в', 'Вороний', 'Сургут'),
(363, '6100с07324в', 'Восточно-Сургутское К302', 'Сургут'),
(364, '5636с06921в', 'Демьянское ', 'Сургут'),
(365, '5837с07414в', 'Западно-Эпасское м/р', 'Сургут'),
(366, '5941с06906в', 'Зимнее м/р', 'Сургут'),
(367, '6058с07227в', 'Каркатеевы', 'Сургут'),
(368, '6029с07442в', 'Киняминское', 'Сургут'),
(369, '6024с07246в', 'Майское', 'Сургут'),
(370, '6046с07245в', 'Мамонтово', 'Сургут'),
(371, '6113с07017в', 'Монастырский', 'Сургут'),
(372, '5512с08319в', 'НПС Сокур', 'Сургут'),
(373, '6130с07003в', 'Приобское м/р', 'Сургут'),
(374, '5856с07247в', 'Протазановское м/р', 'Сургут'),
(375, '5853с07248в ', 'Р31 Протазановская', 'Сургут'),
(376, '5846с07235в', 'С.Тамаргинская ', 'Сургут'),
(377, '6009с07129в', 'Салым', 'Сургут'),
(378, '6100с07145в', 'Сатарино', 'Сургут'),
(379, '5945с07143в', 'Соровское м/р', 'Сургут'),
(380, '6037с07214в', 'Тепловское', 'Сургут'),
(381, '5830с07334в', 'Урненское м/р', 'Сургут'),
(382, '6115с07507в', 'Урьевские', 'Сургут'),
(383, '5843с07359в', 'Усть-Тегусское м/р', 'Сургут'),
(384, '6114с07011в', 'Чебытово', 'Сургут'),
(385, '6225с07935в', 'Бахиловская', 'Сургут'),
(386, '6130с07918в', 'Хохряковский', 'Сургут'),
(387, '5940с06954в', 'Ю.Нюрымское', 'Сургут'),
(388, '6058с07331в', 'Фаинское', 'Сургут'),
(389, '5620с07821в', 'северное (УННТ)', 'Сургут'),
(390, '6257с07111в', '7172', 'Сургут'),
(391, '6115с07019в', 'К201', 'Сургут'),
(392, '6113С07017В', 'К281 ПРИОБСКОЕ', 'Сургут'),
(393, '6127С07029В', 'К233 ПРИОБСКОЕ', 'Сургут'),
(394, '6106С07011В', 'ЦПС', 'Сургут'),
(395, '6155с07258в', 'Сев.Юрьевское', 'Сургут'),
(396, '6116с07238в', 'Солкинское', 'Сургут'),
(397, '6125с07214в', 'Комарьинское', 'Сургут'),
(398, '5958с05955в', 'Бобровский', 'Сургут'),
(399, '6256с07136в', '1Г', 'Сургут'),
(400, '6152с06931в', '5Г', 'Сургут'),
(401, '6146с7303в', '2175 тончинский', 'Сургут'),
(402, '6212с06725в', '743р', 'Сургут'),
(403, '6130с07003в', 'куст39', 'Сургут'),
(404, '6127С07029В', 'куст233', 'Сургут'),
(405, '6010с07247в', 'ю.пунси', 'Сургут'),
(406, '6000с07229в', 'ю.степановы', 'Сургут'),
(407, '6042С07255В', 'ЮЖ/БАЛЫКСКОЕ ЛПУ', 'Сургут'),
(408, '6144с07414в', 'р1249', 'Сургут'),
(409, '6204с07320в', 'р167', 'Сургут'),
(410, '6233с07307в', 'р98', 'Сургут'),
(411, '6150с07201в', 'р25', 'Сургут'),
(412, '6127с07243в', 'р3', 'Сургут'),
(413, '6129с07249в', 'Быстринское', 'Сургут'),
(414, '6119с07246в', 'Солкинское/1', 'Сургут'),
(415, '6113с07159в', 'Тундринское', 'Сургут'),
(416, '6129с07208в', 'Комарьинское/1', 'Сургут'),
(417, '6050с07708в', 'НПС Александровское', 'Сургут'),
(418, '6101с07925в', 'Белорусский', 'Сургут'),
(419, '6210с07122в', '81км', 'Сургут'),
(420, '6227с07142в', 'Н. Сортым', 'Сургут'),
(421, '5636с06940в', 'к2', 'Сургут'),
(422, '5942с06959в', 'юж/нюрымское', 'Сургут'),
(423, '7051с08530в', '6410', 'Сургут'),
(424, '7052с08452в', '6411', 'Сургут'),
(425, 'test', 'test', 'test'),
(426, '1', '1', '1'),
(427, '1', '1', '1'),
(428, '1', '1', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `tittle` text NOT NULL,
  `text` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `information`
--

INSERT INTO `information` (`id`, `tittle`, `text`, `comment`) VALUES
(2, 'CHG', '<p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; font-size: 15px; color: rgb(51, 51, 51); line-height: 18px; font-family: Arial, Helvetica, sans-serif;\"><b style=\"font-weight: bold;\">CHG</b>&nbsp;- сообщение, касающееся изменения представленного&nbsp;плана полета;</p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; font-size: 15px; color: rgb(51, 51, 51); line-height: 18px; font-family: Arial, Helvetica, sans-serif;\"><b style=\"font-weight: bold;\">CHG&nbsp;</b>передается в том случае, когда необходимо внести какое-либо изменение в основные данные представленного плана полета, содержащиеся в переданных ранее сообщениях FPL и PLN.</p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; font-size: 15px; color: rgb(51, 51, 51); line-height: 18px; font-family: Arial, Helvetica, sans-serif;\">Примеры&nbsp;<b style=\"font-weight: bold;\">CHG</b>:</p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; font-size: 15px; color: rgb(51, 51, 51); line-height: 18px; font-family: Arial, Helvetica, sans-serif;\">Изменение маршрута и EET/</p><blockquote style=\"padding: 10px 20px; margin-bottom: 17px; font-size: 15px; border-left: 5px solid rgb(248, 100, 102); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: 18px; font-family: Arial, Helvetica, sans-serif;\"><h4 style=\"font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 18px;\"><font color=\"#333333\"><span style=\"font-family: Tahoma;\"><span style=\"font-family: Helvetica;\">&nbsp;(CHG-NFT9999-USHB0430-USHB</span><br></span></font><font color=\"#333333\"><span style=\"font-family: Helvetica;\">-DOF/190711 REG/99999 -</span><b style=\"font-weight: bold;\"><span style=\"font-family: Helvetica;\">15/</span></b><span style=\"font-family: Helvetica;\">K0190M0090&nbsp;</span></font><b style=\"font-weight: bold;\"><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\"><span style=\"font-family: Helvetica;\">6358N06425E&nbsp;</span></font></b><font color=\"#333333\"><span style=\"font-family: Tahoma;\"><span style=\"font-family: Helvetica;\">6157N06047E</span><br></span></font><font color=\"#333333\"><span style=\"font-family: Tahoma;\"><span style=\"font-family: Helvetica;\">6623N06221E 6411N05959E 6412N05956E 6411N05959E 6356N06425E</span><br></span></font><b style=\"font-weight: bold; color: rgb(51, 51, 51);\"><span style=\"font-family: Helvetica;\">-18/</span></b><font color=\"#333333\"><span style=\"font-family: Helvetica;\">EET/USHB0005&nbsp;</span></font><b style=\"font-weight: bold;\"><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\"><span style=\"font-family: Helvetica;\">USSS0130</span></font><span style=\"font-family: Helvetica;\">&nbsp;</span></b><font color=\"#333333\"><span style=\"font-family: Tahoma;\"><span style=\"font-family: Helvetica;\">USHB0200 UUYH0320 USHB0350</span><br></span></font><b style=\"font-weight: bold; color: rgb(51, 51, 51);\"><span style=\"font-family: Helvetica;\">RMK/</span></b><font color=\"#333333\"><span style=\"font-family: Helvetica;\">ИЗМЕНЕНИЕ МАРШРУТА ЗОН РПИ ТЕЛ ВУ 3452 285551)</span></font></h4></blockquote><h5 style=\"font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 14px;\">В данном примере CHG происходит изменение маршрута с добавлением новой координаты и изменением EET (отмечено желтым подчеркиванием).</h5><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);\"><br></p><h5 style=\"font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 14px;\">Пример изменения времени вылета и замена воздушного судна (можно изменять только если время вылета&nbsp;<b style=\"font-weight: bold;\">позже&nbsp;</b>изначального.</h5><blockquote style=\"padding: 10px 20px; margin-bottom: 20px; font-size: 17.5px; border-left: 5px solid rgb(248, 100, 102); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><h4 style=\"font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 18px;\"><span style=\"font-family: Helvetica;\">(CHG-NFT9999-USHS0540-USHB<br></span><span style=\"font-family: Helvetica;\">-DOF/190625 -</span><b style=\"font-weight: bold;\"><span style=\"font-family: Helvetica;\">13/USHS1100 -18/REG/11111&nbsp;</span></b><span style=\"font-family: Helvetica;\">RMK/ПЕРЕНОС<br></span><span style=\"font-family: Helvetica;\">ВРЕМЕНИ ВЫЛЕТА ЗАМЕНА ВС)</span></h4></blockquote><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);\"><br></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);\"><br style=\"font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"></p><ul>\r\n</ul>\r\n<p></p>', 'Примеры работы с CHG'),
(3, 'igarka', '<h1 style=\"text-align: center; \"><b><span style=\"font-family: Helvetica;\">Игарка.</span></b></h1><h5 style=\"text-align: left;\"><br></h5><h6 style=\"text-align: left;\"><span style=\"font-family: Helvetica;\">За Игаркой закреплены постоянные рейсы, поиск производить по </span><span style=\"font-weight: bold; font-family: Helvetica;\">\"РН ВАНКОР РН ИГАРКИ\"</span><span style=\"font-family: Helvetica;\">.</span></h6><h6 style=\"text-align: left;\"><span style=\"font-family: Helvetica;\"><br>При выходе из Игарки - закреплены точки выхода:&nbsp;</span></h6><table class=\"table table-bordered\"><tbody><tr><td><span style=\"font-family: Helvetica;\">Выход на Сузун</span></td><td><span style=\"font-family: Helvetica;\">6744N08544E</span></td></tr><tr><td><span style=\"font-family: Helvetica;\">Выход на Тагул</span></td><td><span style=\"font-family: Helvetica;\">6723N08527E</span></td></tr><tr><td><span style=\"font-family: Helvetica;\">Выход на Ванкор</span></td><td><span style=\"font-family: Helvetica;\">6735N08530E</span></td></tr></tbody></table><h4 style=\"text-align: left;\"><br></h4><h6 style=\"text-align: left;\"><span style=\"font-family: Helvetica;\">Есть точка \"Прилуки\", находится в зоне \"С\", соответственно должна стоять всегда в PAP/</span></h6><table class=\"table table-bordered\"><tbody><tr><td><span style=\"font-family: Helvetica;\">Прилуки</span></td><td><span style=\"font-family: Helvetica;\">6729N08618E</span></td></tr></tbody></table><p style=\"text-align: left;\"></p><h4><span style=\"color: rgb(0, 0, 0);\"><br></span></h4><h4><span style=\"color: rgb(0, 0, 0); font-family: Helvetica;\">При выполнении работ на Тарко-Сале или Красноселькуп: </span><span style=\"font-weight: bold; color: rgb(255, 0, 0); font-family: Helvetica;\">Требуется давать БОЛЬШЕ истекшего времени.</span></h4><div><span style=\"font-weight: bold; color: rgb(255, 0, 0); font-family: Helvetica;\"><br></span></div><p style=\"text-align: left;\"><span style=\"font-family: Helvetica; font-size: 1rem;\">Точки для полетов в Игарке:</span><br></p><table class=\"table table-bordered\"><tbody><tr><td><span style=\"font-family: Helvetica;\">Сузун</span></td><td><span style=\"font-family: Helvetica;\">6826N08341E</span></td></tr><tr><td><span style=\"font-family: Helvetica;\">Сузун32</span></td><td><span style=\"font-family: Helvetica;\">6809N08315E</span></td></tr><tr><td><span style=\"font-family: Helvetica;\">Ванкор</span></td><td><span style=\"font-family: Helvetica;\">6748N08338E UOOG</span></td></tr><tr><td><span style=\"font-family: Helvetica;\">Ванкор Грузовая</span></td><td><span style=\"font-family: Helvetica;\">6748N08333E</span></td></tr><tr><td><span style=\"font-family: Helvetica;\">Тагул</span></td><td><span style=\"font-family: Helvetica;\">6716N08312E</span></td></tr><tr><td><span style=\"font-family: Helvetica;\">Тагул53</span></td><td><span style=\"font-family: Helvetica;\">6719N08314E</span></td></tr><tr><td><span style=\"font-family: Helvetica;\">Тагул29</span></td><td><span style=\"font-family: Helvetica;\">6723N08308E</span></td></tr><tr><td><span style=\"font-family: Helvetica;\">Тагул51</span></td><td><span style=\"font-family: Helvetica;\">6722N08306E</span></td></tr><tr><td><span style=\"font-family: Helvetica;\">НПС-1</span></td><td><span style=\"font-family: Helvetica;\">6621N08236E (зона USDS)</span></td></tr><tr><td><span style=\"font-family: Helvetica;\">НПС-2</span></td><td><span style=\"font-family: Helvetica;\">6524N08044E (зона USDS)</span></td></tr></tbody></table><h5 style=\"text-align: left;\"><b><br></b></h5>', 'Играка (UOII)'),
(4, 'lyantor', '<h5 style=\"font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 14px;\"><span style=\"font-family: Tahoma;\">ть в планах в Сургутских или Тобольских планах планы, в которых вылет происходит из Салыма, и маршрут проходит по типовым месторождениям, которые находятся в соседних зонах.</span></h5><h5 style=\"font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 14px;\"><span style=\"font-family: Tahoma;\"><br></span><span style=\"font-family: Tahoma;\">Для того что бы облегчить процесс подачи планов, было решено упростить сам план:<br></span><span style=\"font-family: Tahoma;\">Следует обратить внимание в плане на EET/USRR0005 USHH0030 USHQ0230 USMM0300 USRR0230&nbsp;&nbsp;</span></h5><h5 style=\"font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 14px;\"><span style=\"font-family: Tahoma;\"><br></span><span style=\"font-family: Tahoma;\">Из данного EETвидно что машина, производит облет 4 различных зон и возвращается в Сургутскую. Т.к. большинство посещаемых месторождений находится в зоне G и не требует указания в PAP/ данный план подходит для большинства маршрутов которые могут проходить из Лянтора, Салыма, Сургута или Тобольска</span>:&nbsp;</h5><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);\"><br></p><blockquote style=\"padding: 10px 20px; margin-bottom: 20px; font-size: 17.5px; border-left: 5px solid rgb(248, 100, 102); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><h5 style=\"font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 14px;\"><div><span style=\"font-family: &quot;Times New Roman&quot;;\">(FPL-NFT9999-VN</span></div><span style=\"color: rgb(0, 0, 0);\"><span style=\"font-family: &quot;Times New Roman&quot;;\">-MI8/M-S/N</span></span><span style=\"color: rgb(0, 0, 0);\"><span style=\"font-family: &quot;Times New Roman&quot;;\">-USRL0000</span></span><span style=\"color: rgb(0, 0, 0);\"><span style=\"font-family: &quot;Times New Roman&quot;;\">-K0190M0090 6150N07053E 6318N06900E 6346N07104E 6327N07221E</span></span><span style=\"color: rgb(0, 0, 0);\"><span style=\"font-family: &quot;Times New Roman&quot;;\">-USRL1200</span></span><span style=\"color: rgb(0, 0, 0);\"><span style=\"font-family: &quot;Times New Roman&quot;;\">-</span><b style=\"font-weight: bold; font-family: inherit;\"><span style=\"font-family: &quot;Times New Roman&quot;;\">STS/23&nbsp;</span></b><span style=\"font-family: &quot;Times New Roman&quot;;\">DOF/190101 REG/11111 EET/USRR0005 USHH0030 USHQ0230</span></span><span style=\"color: rgb(0, 0, 0);\"><span style=\"font-family: &quot;Times New Roman&quot;;\">USMM0300 USR0230 RMK/POSADKA SOGLASOWANA EKIPAV DOPUQEN K</span></span><span style=\"color: rgb(0, 0, 0);\"><span style=\"font-family: &quot;Times New Roman&quot;;\">POSADKAM S PODBOROM SE/34 POLET W PROSTRANSTWE G ОБЛЕТ&nbsp;</span></span><span style=\"color: rgb(0, 0, 0);\"><span style=\"font-family: &quot;Times New Roman&quot;;\">СКВАЖИН Р989 К743 5Г ТЕЛ ВУ 3452 285552 МЕНЕДЖЕР 83462778560)</span></span></h5></blockquote><h5 style=\"font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 14px;\">Так же есть рейс на Р743 И является типовым с захватом всех требуемых зон (можно найти при помощи функции поиска FPL на сайте)&nbsp;</h5><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);\"><br></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);\">Как выглядит облет на карте:&nbsp;</p><img src=\"../../img/USRL.JPG\" style=\"width: 50%\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);\"><br></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);\"><br></p><h5 style=\"font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 14px;\">Маршрут из Салыма захватывает другие зоны через которые обычно происходит работа:<img src=\"../../img/salym_temp.JPG\" style=\"width: 50%\"></h5><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);\"><br></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);\"></p><h5 style=\"font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 14px;\">Очень важно обращать внимание на то, какой маршрут у транспорта, пойдет он \"Вниз\" или \"Вверх\".</h5><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);\"><br style=\"font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"></p><ul>\r\n               </ul>\r\n<p></p>', 'Лянтор (УСРЛ) и Салым');

-- --------------------------------------------------------

--
-- Структура таблицы `journal`
--

CREATE TABLE `journal` (
  `id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `priority` int(3) NOT NULL DEFAULT '1',
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `journal`
--

INSERT INTO `journal` (`id`, `text`, `date`, `priority`, `author`) VALUES
(1, 'На момент написания сообщения, было решено отправлять в Усинске - все данные по факту поданному в заявке.', '2019-09-18 16:21:00', 1, ''),
(2, 'Рейсы 9990,9977,9710 от 13.09.2019 Не брать! Поданы с ошибкой!', '2019-09-09 04:15:20', 2, ''),
(3, 'Очередная запретная зона в Усинске, перекрыта снизу от Харьяги, высота 90 метром, но все равно просят ставить план в обход зоны.\r\n\r\nв противном случае, план будут отменяться', '2019-09-03 04:12:15', 3, ''),
(39, 'укец', '2019-09-22 18:13:02', 1, 'admin'),
(40, '24534', '2019-09-22 18:13:29', 1, 'admin'),
(41, 'ыфвф', '2019-09-22 18:13:59', 1, 'admin'),
(42, 'wertwe', '2019-09-22 18:14:50', 1, 'admin'),
(43, '3462345', '2019-09-22 18:15:00', 1, 'admin'),
(44, 'Запись в 18.16\r\n', '2019-09-22 18:16:05', 3, 'admin'),
(45, '213', '2019-09-22 18:26:40', 1, 'admin'),
(46, 'Очень важная запись', '2019-09-23 21:07:35', 3, 'admin'),
(47, 'dfgsdfg', '2019-09-24 16:33:24', 1, 'admin'),
(48, 'sdfgsdfg', '2019-09-24 16:33:29', 1, 'admin'),
(49, 'dsfgsdfgsdfg', '2019-09-24 16:33:34', 1, 'admin'),
(50, 'sdfgsdfgsdfg', '2019-09-24 16:33:39', 1, 'admin'),
(51, 'sdfgsdfgsdfgsdfg', '2019-09-24 16:33:45', 1, 'admin'),
(52, 'sdfgdsfgsdfg', '2019-09-24 16:33:49', 1, 'admin'),
(53, 'eytw45b6w', '2019-09-24 16:34:01', 1, 'admin'),
(54, 'dfgsdg', '2019-09-24 16:34:20', 2, 'admin'),
(55, 'wrey3y w54y wer ywe', '2019-09-24 16:34:26', 3, 'admin'),
(56, 'На момент написания сообщения, было решено отправлять в Усинске - все данные по факту поданному в заявке.', '2019-09-18 16:21:00', 1, ''),
(57, 'Рейсы 9990,9977,9710 от 13.09.2019 Не брать! Поданы с ошибкой!', '2019-09-09 04:15:20', 2, ''),
(58, 'Очередная запретная зона в Усинске, перекрыта снизу от Харьяги, высота 90 метром, но все равно просят ставить план в обход зоны.\r\n\r\nв противном случае, план будут отменяться', '2019-09-03 04:12:15', 3, ''),
(59, 'тест\r\n', '2019-09-22 18:12:17', 1, 'admin'),
(60, 'укец', '2019-09-22 18:13:02', 1, 'admin'),
(61, '24534', '2019-09-22 18:13:29', 1, 'admin'),
(62, 'ыфвф', '2019-09-22 18:13:59', 1, 'admin'),
(63, 'wertwe', '2019-09-22 18:14:50', 1, 'admin'),
(64, '3462345', '2019-09-22 18:15:00', 1, 'admin'),
(65, 'Запись в 18.16\r\n', '2019-09-22 18:16:05', 3, 'admin'),
(66, '213', '2019-09-22 18:26:40', 1, 'admin'),
(67, 'Очень важная запись', '2019-09-23 21:07:35', 3, 'admin'),
(68, 'dfgsdfg', '2019-09-24 16:33:24', 1, 'admin'),
(69, 'sdfgsdfg', '2019-09-24 16:33:29', 1, 'admin'),
(70, 'dsfgsdfgsdfg', '2019-09-24 16:33:34', 1, 'admin'),
(71, 'sdfgsdfgsdfg', '2019-09-24 16:33:39', 1, 'admin'),
(72, 'sdfgsdfgsdfgsdfg', '2019-09-24 16:33:45', 1, 'admin'),
(73, 'sdfgdsfgsdfg', '2019-09-24 16:33:49', 1, 'admin'),
(74, 'eytw45b6w', '2019-09-24 16:34:01', 1, 'admin'),
(75, 'dfgsdg', '2019-09-24 16:34:20', 2, 'admin'),
(76, 'wrey3y w54y wer ywe', '2019-09-24 16:34:26', 3, 'admin'),
(77, 'wrey3y w54y wer ywe', '2019-09-24 16:34:26', 3, 'admin'),
(78, 'На момент написания сообщения, было решено отправлять в Усинске - все данные по факту поданному в заявке.', '2019-09-18 16:21:00', 1, ''),
(79, 'Рейсы 9990,9977,9710 от 13.09.2019 Не брать! Поданы с ошибкой!', '2019-09-09 04:15:20', 2, ''),
(80, 'Очередная запретная зона в Усинске, перекрыта снизу от Харьяги, высота 90 метром, но все равно просят ставить план в обход зоны.\r\n\r\nв противном случае, план будут отменяться', '2019-09-03 04:12:15', 3, ''),
(81, 'тест\r\n', '2019-09-22 18:12:17', 1, 'admin'),
(82, 'укец', '2019-09-22 18:13:02', 1, 'admin'),
(83, '24534', '2019-09-22 18:13:29', 1, 'admin'),
(84, 'ыфвф', '2019-09-22 18:13:59', 1, 'admin'),
(85, 'wertwe', '2019-09-22 18:14:50', 1, 'admin'),
(86, '3462345', '2019-09-22 18:15:00', 1, 'admin'),
(87, 'Запись в 18.16\r\n', '2019-09-22 18:16:05', 3, 'admin'),
(88, '213', '2019-09-22 18:26:40', 1, 'admin'),
(89, 'Очень важная запись', '2019-09-23 21:07:35', 3, 'admin'),
(90, 'dfgsdfg', '2019-09-24 16:33:24', 1, 'admin'),
(91, 'sdfgsdfg', '2019-09-24 16:33:29', 1, 'admin'),
(92, 'dsfgsdfgsdfg', '2019-09-24 16:33:34', 1, 'admin'),
(93, 'sdfgsdfgsdfg', '2019-09-24 16:33:39', 1, 'admin'),
(94, 'sdfgsdfgsdfgsdfg', '2019-09-24 16:33:45', 1, 'admin'),
(95, 'sdfgdsfgsdfg', '2019-09-24 16:33:49', 1, 'admin'),
(96, 'eytw45b6w', '2019-09-24 16:34:01', 1, 'admin'),
(97, 'dfgsdg', '2019-09-24 16:34:20', 2, 'admin'),
(98, 'wrey3y w54y wer ywe', '2019-09-24 16:34:26', 3, 'admin'),
(99, 'На момент написания сообщения, было решено отправлять в Усинске - все данные по факту поданному в заявке.', '2019-09-18 16:21:00', 1, ''),
(100, 'Рейсы 9990,9977,9710 от 13.09.2019 Не брать! Поданы с ошибкой!', '2019-09-09 04:15:20', 2, ''),
(101, 'Очередная запретная зона в Усинске, перекрыта снизу от Харьяги, высота 90 метром, но все равно просят ставить план в обход зоны.\r\n\r\nв противном случае, план будут отменяться', '2019-09-03 04:12:15', 3, ''),
(102, 'тест\r\n', '2019-09-22 18:12:17', 1, 'admin'),
(103, 'На момент написания сообщения, было решено отправлять в Усинске - все данные по факту поданному в заявке.', '2019-09-18 16:21:00', 1, ''),
(104, 'Рейсы 9990,9977,9710 от 13.09.2019 Не брать! Поданы с ошибкой!', '2019-09-09 04:15:20', 2, ''),
(105, 'Очередная запретная зона в Усинске, перекрыта снизу от Харьяги, высота 90 метром, но все равно просят ставить план в обход зоны.\r\n\r\nв противном случае, план будут отменяться', '2019-09-03 04:12:15', 3, ''),
(106, 'тест\r\n', '2019-09-22 18:12:17', 1, 'admin'),
(107, 'укец', '2019-09-22 18:13:02', 1, 'admin'),
(108, '24534', '2019-09-22 18:13:29', 1, 'admin'),
(109, 'ыфвф', '2019-09-22 18:13:59', 1, 'admin'),
(110, 'wertwe', '2019-09-22 18:14:50', 1, 'admin'),
(111, '3462345', '2019-09-22 18:15:00', 1, 'admin'),
(112, 'Запись в 18.16\r\n', '2019-09-22 18:16:05', 3, 'admin'),
(113, '213', '2019-09-22 18:26:40', 1, 'admin'),
(115, 'dfgsdfg', '2019-09-24 16:33:24', 1, 'admin'),
(116, 'sdfgsdfg', '2019-09-24 16:33:29', 1, 'admin'),
(117, 'dsfgsdfgsdfg', '2019-09-24 16:33:34', 1, 'admin'),
(118, 'sdfgsdfgsdfg', '2019-09-24 16:33:39', 1, 'admin'),
(119, 'sdfgsdfgsdfgsdfg', '2019-09-24 16:33:45', 1, 'admin'),
(122, 'dfgsdg', '2019-09-24 16:34:20', 2, 'admin'),
(123, 'wrey3y w54y wer ywe', '2019-09-24 16:34:26', 3, 'admin'),
(124, 'На момент написания сообщения, было решено отправлять в Усинске - все данные по факту поданному в заявке.', '2019-09-18 16:21:00', 1, ''),
(125, 'Рейсы 9990,9977,9710 от 13.09.2019 Не брать! Поданы с ошибкой!', '2019-09-09 04:15:20', 2, ''),
(128, 'На момент написания сообщения, было решено отправлять в Усинске - все данные по факту поданному в заявке.', '2019-09-18 16:21:00', 1, ''),
(129, 'Рейсы 9990,9977,9710 от 13.09.2019 Не брать! Поданы с ошибкой!', '2019-09-09 04:15:20', 2, ''),
(130, 'Очередная запретная зона в Усинске, перекрыта снизу от Харьяги, высота 90 метром, но все равно просят ставить план в обход зоны.\r\n\r\nв противном случае, план будут отменяться', '2019-09-03 04:12:15', 3, ''),
(137, 'Запись в 18.16\r\n', '2019-09-22 18:16:05', 3, 'admin'),
(150, 'Рейсы 9990,9977,9710 от 13.09.2019 Не брать! Поданы с ошибкой!', '2019-09-09 04:15:20', 2, ''),
(151, 'Очередная запретная зона в Усинске, перекрыта снизу от Харьяги, высота 90 метром, но все равно просят ставить план в обход зоны.\r\n\r\nв противном случае, план будут отменяться', '2019-09-03 04:12:15', 3, '');

-- --------------------------------------------------------

--
-- Структура таблицы `main`
--

CREATE TABLE `main` (
  `1` text NOT NULL,
  `2` text NOT NULL,
  `3` text NOT NULL,
  `4` text NOT NULL,
  `5` text,
  `6` text NOT NULL,
  `ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `journal_views` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `telephone`, `journal_views`, `admin`) VALUES
(1, 'admin', '$2y$10$ju6jspRTUFVR.LjOnpLeIu8gKqpihamg8Fm7H3ATlj25HPFpsUuR2', '3452 285551', '', 1),
(2, 'test', '$2y$10$qYqolTQF2kGrind6Um7hYOzruBJsP5PFVORcdKpQ03JabqNb/7vSi', '123456', '', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `default_fpl`
--
ALTER TABLE `default_fpl`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `geopoint`
--
ALTER TABLE `geopoint`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id`,`date`);

--
-- Индексы таблицы `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `default_fpl`
--
ALTER TABLE `default_fpl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT для таблицы `geopoint`
--
ALTER TABLE `geopoint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=429;

--
-- AUTO_INCREMENT для таблицы `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `journal`
--
ALTER TABLE `journal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT для таблицы `main`
--
ALTER TABLE `main`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
