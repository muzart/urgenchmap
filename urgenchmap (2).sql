-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 06 2016 г., 12:33
-- Версия сервера: 5.6.24
-- Версия PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `urgenchmap`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon`) VALUES
(1, 'Davlat idoralari', '/images/administration.png'),
(2, 'Tashkilotlar', '/images/villa.png'),
(3, 'Oliy o''quv yurtlari', '/images/university.png'),
(4, 'Kollejlar/Litseylar', '/images/highschool.png'),
(5, 'Maktablar', '/images/school.png'),
(6, 'Bog''chalar', '/images/nursery.png'),
(7, 'Internet-kafe', '/images/computers.png'),
(8, 'Restoran/Kafe/choyxonalar', '/images/restaurant.png'),
(9, 'Sport majmualari', '/images/soccer.png'),
(10, 'Mehmonxonalar', '/images/hotel_4stars.png'),
(11, 'Banklar', '/images/bank.png'),
(12, 'Istirohat bog''lari', '/images/beach.png'),
(13, 'Shifoxonalar', '/images/ambulance.png'),
(14, 'To''yxonalar', '/images/toyxona.png'),
(15, 'Gipermarket/Supermarket', '/images/supermarket.png'),
(16, 'Teatrlar/Kinoteatrlar', '/images/theater.png'),
(17, 'Texnika do''konlari', '/images/computers.png'),
(18, 'Aeroport', '/images/airport.png'),
(19, 'Vokzal', '/images/train.png'),
(20, 'Zavod/Fabrika', '');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `places`
--

CREATE TABLE IF NOT EXISTS `places` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `address` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `places`
--

INSERT INTO `places` (`id`, `name`, `description`, `longitude`, `latitude`, `address`, `category_id`) VALUES
(1, 'TATU Urganch filiali', 'Toshkent Axborot Texnologiyalari Universiteti Urganch filiali 2005-yilda tashkil etilgan.\r\n<h3>Filialda mavjud yo''nalishlar:</h3>\r\n<ul>\r\n <li>Kompyuter injiniring</li>\r\n <li>AKT sohasida Kasb ta''limi</li>\r\n <li>Servis</li>\r\n <li>Telekommunikatsiya</li>\r\n</ul>', 60.63168078660965, 41.57057082665242, 'Al-Xorazmiy ko''chasi, 110-uy', 3),
(3, 'Gimnastika markazi', 'Gimnastika markazi', 60.63161778450012, 41.57168054440917, '', 9),
(4, 'Tibbiyot KHK', 'Tibbiyot Kasb Hunar Kolleji', 60.63298034667969, 41.56766128540039, '', 4),
(5, 'Olimpiya zahiralari KHK', 'Olimpiya zahiralari Kasb Hunar Kolleji', 60.63171297311783, 41.57320552432015, '', 4),
(7, 'FHDYO (&#1047;&#1040;&#1043;&#1057;)', 'FHDYO (&#1047;&#1040;&#1043;&#1057;)', 60.623416900634766, 41.55949308516043, '', 1),
(8, 'Aloqa bank', 'Aloqa bank', 60.63133746385574, 41.5688129640279, '', 11),
(9, 'Xalq Banki', 'Xalq Banki', 60.621410608291626, 41.557853337794036, '', 11),
(10, 'Yoshlik ko''li', 'Yoshlik ko''li', 60.614211559295654, 41.55042277390272, '', 12),
(11, 'Urganch davlat universiteti', 'Urganch davlat universiteti', 60.60534417629242, 41.55557327721016, '', 3),
(12, 'UZTELECOM', 'UZTELECOM', 60.63227355480194, 41.55222931048816, '', 1),
(13, 'Urganch TransGaz', 'Urganch TransGaz', 60.62999904155731, 41.552191173015224, '', 2),
(14, 'Xorazm viloyat hokimligi', 'Xorazm viloyat hokimligi', 60.63014656305313, 41.54960580133607, '', 1),
(15, 'Urganch shahar Soliq inspektsiyasi', 'Urganch shahar Soliq inspektsiyasi', 60.632144808769226, 41.5528515502892, '', 1),
(16, 'Olimpiya stadioni', 'Olimpiya stadioni', 60.605446100234985, 41.56624230482839, '', 9),
(17, 'Urganch shahar tug''ruqxonasi', 'Urganch shahar tug''ruqxonasi', 60.636162757873535, 41.567392190790585, '', 13),
(18, 'Amir Temur istirohat bog''i', 'Amir Temur istirohat bog''i', 60.61739265918732, 41.55949107815115, '', 12),
(19, 'Avesto istirohat bog''i', 'Avesto istirohat bog''i', 60.62624126672745, 41.54713073297695, '', 12),
(20, 'Jaloliddin Manguberdi majmuasi', 'Jaloliddin Manguberdi majmuasi', 60.632654428482056, 41.54448894964072, '', 12),
(21, 'Oftalmologiya markazi', 'Viloyat Oftalmologiya markazi', 60.63358247280121, 41.557945662496465, '', 13),
(22, 'Viloyat kasalxonasi', 'Viloyat kasalxonasi', 60.63389092683792, 41.55955329541015, '', 13),
(23, 'TTA Urganch filiali', 'Toshkent Tibbiyot Akademiyasi Urganch filiali', 60.628910064697266, 41.54796178839385, '', 3),
(24, 'Urganch shahar hokimligi', 'Urganch shahar hokimligi', 60.62597304582596, 41.562182421607524, '', 1),
(25, '"Khorezm Palace" mehmonxonasi', '"Khorezm Palace" mehmonxonasi', 60.63434958457947, 41.55117751088284, '', 10),
(26, 'Agro Bank', 'Agro Bank', 60.630444288253784, 41.54801397992342, '', 11),
(27, '1-son Akademik Litsey', 'TATU Urganch filiali qoshidagi 1-son Akademik Litsey', 60.626710653305054, 41.55209281837594, '', 4),
(28, '2-son Akademik Litsey', 'UrDU qoshidagi 2-son Akademik Litsey', 60.604957938194275, 41.56038619810915, '', 4),
(29, 'Statistika boshqarmasi', 'Statistika boshqarmasi', 60.63022434711456, 41.567540691150434, '', 1),
(30, 'Kuksu House', 'Kuksu House - studentlar uchun kafe', 60.63002586364746, 41.57022768599322, '', 8),
(31, '13-son maktab', 'Al-Xorazmiy nomli 13-son umumiy o''rta ta''lim maktabi', 60.63603401184082, 41.56541951173632, '', 5),
(32, '26-son maktab', '26-sonli umumiy o''rta ta''lim  maktabi', 60.66693305969238, 41.55352998556921, '', 5),
(33, '5-son bog''cha', '5-son maktabgacha ta''lim muassasasi', 60.66845655441284, 41.55328510738405, '', 6),
(34, '"Baxt qushi" to''yxonasi', '"Baxt qushi" to''yxonasi', 60.66774845123291, 41.55322489129479, '', 14),
(35, '"Sanjarbek" to''yxonasi', '"Sanjarbek" to''yxonasi', 60.64255714416504, 41.57175274163845, '', 14),
(36, 'Lucky Bowling', '"Lucky Bowling" bouling markazi, restoran', 60.65073788166046, 41.55650056507435, '', 8),
(37, '3-son Akademik Litsey', 'UrDU qoshidagi 3-son Akademik Litsey', 60.64376413822174, 41.56368559150071, '', 4),
(38, '"To''maris Nur" gipermarketi', '"To''maris Nur" gipermarketi', 60.625401735305786, 41.55232164322418, '', 15),
(39, 'DInamo', '"DInamo" sport majmuasi', 60.62122821807861, 41.55045489054943, '', 9),
(40, 'Ogahiy', '"Ogahiy" teatri', 60.63263297080994, 41.55085634728745, '', 16),
(41, 'Gastronom', '"Gastronom" supermarketi', 60.6316351890564, 41.55701839536526, '', 15),
(42, 'Bek', '"Bek" restorani', 60.63184440135956, 41.55710269292694, '', 8),
(43, 'Fayz', '"Fayz" mehmonxonasi', 60.63159227371216, 41.562300830117486, '', 10),
(44, 'FVB', 'Favqulotda vaziyatlar boshqarmasi', 60.62762260437012, 41.5543970877501, '', 1),
(45, 'Navro''z', '"Navro''z" mehmonxonasi', 60.62733829021454, 41.554792498540394, '', 10),
(46, 'Qurilish KHK', 'Qurilish Kasb Hunar Kolleji', 60.62756359577179, 41.55605900108391, '', 4),
(47, '"Tadbirkorlik va servis" KHK', '"Tadbirkorlik va servis" Kasb Hunar Kolleji', 60.628861784935, 41.55806207171584, '', 4),
(48, 'IIB', 'Urganch shahar Ichki Ishlar Boshqarmasi', 60.626673102378845, 41.55868425536777, '', 1),
(49, 'Samsung', '"Samsung" maishiy-texnika do''koni', 60.63079297542572, 41.557030437880826, '', 17),
(50, 'Samsung', '"Samsung" telefon do''koni', 60.63080370426178, 41.55757234875777, '', 17),
(51, 'Xotira maydoni', 'Xotira maydoni', 60.62480628490448, 41.56089596940512, '', 12),
(52, 'Urganch xalqaro aeroporti', 'Aeroport O`zbekistonning shimolida Xiva muzey shahridan 25km uzoqlikda joylashgan, butun dunyodan sayyohlar guruhini qabul qiladi va kecha-kunduz ishlaydi.\r\n<br>\r\nAeroportdan MDH mamlakatlaridan Moskva, Sankt Peterburg, Horijiy mamlakatlardan Italiya, Fransiya, Germaniya va Avstriyaga halqaro reyslar amalgam oshirilmoqda. “S7 Sibir” va “Rossiya” OAO aviakompaniyalari bilan uzoq muddatli shartnomalar tuzilgan.', 60.633437633514404, 41.58495099517545, '', 18),
(53, 'Urganch Vokzali', 'Urganch Vokzali', 60.632160902023315, 41.53680387810127, '', 19),
(54, 'Bolalar shifoxonasi', 'Bolalar shifoxonasi', 60.62807321548462, 41.56604563816417, '', 13),
(56, 'Turizm KHK', 'Turizm Kasb hunar kolleji', 60.61630502343178, 41.54446887488606, '', 4),
(57, 'Sunami', '"Sunami" internet-kafe', 60.626855827867985, 41.55559635921238, '', 7),
(58, 'Shovot plyaji', 'Shovot plyaji', 60.63671126961708, 41.54630769655286, '', 12);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `role`) VALUES
(1, 'tulqin', '123456', 'administrator'),
(3, 'eagle', '13225852', 'administrator');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`), ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `places`
--
ALTER TABLE `places`
ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
