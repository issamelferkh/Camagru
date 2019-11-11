-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 13 mars 2019 à 12:17
-- Version du serveur :  10.1.34-MariaDB
-- Version de PHP :  5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sgr`
--

-- --------------------------------------------------------

--
-- Structure de la table `aal`
--

CREATE TABLE `aal` (
  `id` int(11) NOT NULL,
  `commune` mediumtext NOT NULL,
  `aal` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `aal`
--

INSERT INTO `aal` (`id`, `commune`, `aal`) VALUES
(3, 'khouribga', 'aakh1'),
(4, 'khouribga', 'aakh2'),
(5, 'khouribga', 'aakh3'),
(6, 'khouribga', 'aakh4'),
(7, 'khouribga', 'aakh5'),
(8, 'khouribga', 'aakh6'),
(9, 'khouribga', 'aakh7'),
(10, 'oued_zem', 'aaod1'),
(11, 'oued_zem', 'aaod2'),
(12, 'oued_zem', 'aaod3'),
(13, 'oued_zem', 'aaod4'),
(14, 'el_fokra', 'el_fokra'),
(24, 'bejaad', 'aabj1'),
(25, 'bejaad', 'aabj2'),
(26, 'boujniba', 'boujniba'),
(27, 'hattane', 'hattane'),
(28, 'ouled_abdoune', 'ouled_abdoune'),
(29, 'ouled_azzouz', 'ouled_azzouz'),
(31, 'lagfaf', 'lagfaf'),
(32, 'boulanouar', 'boulanouar'),
(35, 'bni_bataou', 'bni_bataou'),
(36, 'chougrane', 'chougrane'),
(37, 'm_fassis', 'el_fokra'),
(38, 'ouled_ftata', 'bnikhirane'),
(39, 'ouled_boughadi', 'bnikhirane'),
(40, 'ait_ammar', 'bnikhirane'),
(41, 'lagnadiz', 'bnikhirane'),
(42, 'bni_zrantel', 'bni_bataou'),
(43, 'boukhraiss', 'bni_bataou'),
(44, 'ouled_gouaouch', 'bni_bataou'),
(45, 'bir_mezoui', 'boulanouar'),
(46, 'rouached', 'chougrane'),
(47, 'tachraft', 'chougrane'),
(48, 'ait_kaicher', 'chougrane'),
(49, 'ouled_fennane', 'smaala'),
(50, 'maadna', 'smaala'),
(51, 'kesbat_troch', 'smaala'),
(52, 'ouled_aissa', 'smaala'),
(53, 'braksa', 'smaala'),
(54, 'bni_ykhlef', 'lagfaf'),
(55, 'bni_smir', 'bni_smir');

-- --------------------------------------------------------

--
-- Structure de la table `instance_old`
--

CREATE TABLE `instance_old` (
  `id` int(11) NOT NULL,
  `titre` mediumtext,
  `urgence` mediumtext,
  `description` mediumtext,
  `informaticien` mediumtext,
  `demandeur` mediumtext,
  `division` mediumtext,
  `service` mediumtext,
  `statut` mediumtext,
  `date_start` mediumtext,
  `date_end` mediumtext
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `instance_old`
--

INSERT INTO `instance_old` (`id`, `titre`, `urgence`, `description`, `informaticien`, `demandeur`, `division`, `service`, `statut`, `date_start`, `date_end`) VALUES
(20, 'prob sur mon pc', 'Tres basse', 'prob sur mon pc', 'nhitaf', 'aakh1', '', '', 'En_attente', '0000-00-00', '07/04/2018'),
(21, 'aaa', 'Moyenne', 'aaaa', '', 'aakh1', '', '', 'Resole', '26/03/2018', '0000-00-00'),
(22, 'llll', 'Moyenne', 'llll', 'melmasbahi', 'aakh1', '', '', 'En_cours', '27/03/2018', '13/04/2018'),
(23, 'llll', 'Tres haute', 'llll', '', 'aakh1', '', '', 'Resole', '27/03/2018', ''),
(24, 'prob sur mon pchghghghg', 'Moyenne', 'prob sur mon pchghghghg', 'melmasbahi', 'aakh1', '', '', 'En_cours', '27/03/2018', '13/04/2018'),
(25, 'prob de teele etele tele tele', 'Tres haute', 'prob de teele etele tele teleprob de teele etele tele telepr', '', 'aakh1', '', '', 'Nouveau', '27/03/2018', ''),
(26, 'prob2', 'Moyenne', 'prob2', '', 'aakh1', '', '', 'Resole', '27/03/2018', ''),
(27, 'hgh hghg hghg hgh ', 'Moyenne', 'hgh hgh ghg hgh ghg hg hgh gh ghg ', '', 'aakh1', '', '', 'Nouveau', '28/03/2018', ''),
(28, 'hgh hghg hghg hgh ', 'Moyenne', 'hgh hgh ghg hgh ghg hg hgh gh ghg ', '', 'aakh1', '', '', 'Nouveau', '28/03/2018', ''),
(29, 'value', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'prob de l\'imprim', 'Moyenne', 'ssss', '', 'aakh1', '', '', 'Nouveau', '05/04/2018', ''),
(31, 'prob de l\'imprim', 'Moyenne', 'ssss', '', 'aakh1', '', '', 'Nouveau', '05/04/2018', ''),
(32, 'prob de l\'imprim\'ddd\'dd\'dd', 'Moyenne', 'je vous informe que j\'ai un prob un prod sur mon pc \'ddd \' ddd\' or 1=1', '', 'aakh1', '', '', 'Nouveau', '05/04/2018', ''),
(33, 'prob de l\'imprim\'ddd\'dd\'dd', 'Moyenne', 'je vous informe que j\'ai un prob un prod sur mon pc \'ddd \' ddd\' or 1=1', '', 'aakh1', '', '', 'Nouveau', '05/04/2018', ''),
(34, 'prob de l\'imprim', 'Moyenne', 'je vous informe que j\'ai un prob un prod sur mon pc ', '', 'aakh1', '', '', 'Nouveau', '06/04/2018', ''),
(35, 'prob de l\'imprim', 'Moyenne', 'je vous informe que j\'ai un prob un prod sur mon pc ', '', 'aakh1', '', '', 'Nouveau', '06/04/2018', ''),
(36, 'aakh2', 'Moyenne', 'aakh2', '', 'aakh2', '', '', 'Nouveau', '06/04/2018', ''),
(37, 'yyy', 'Tres haute', 'yyy\'yyy', 'mnafli', 'admin', '', '', 'En_cours', '13/04/2018', '13/04/2018'),
(38, '1er test', 'Haute', '1re test de aakh3 diescription', 'ielferkh', 'aakh3', '', '', 'En_cours', '13/04/2018', '13/04/2018'),
(39, 'fff', 'Basse', 'hghghghldkfldmfl', 'nhitaf', 'aakh4', '', '', 'En_attente', '13/04/2018', '13/04/2018'),
(40, 'test aakh5', 'Moyenne', 'test aakh5test aakh5test aakh5', 'nhitaf', 'aakh5', '', '', 'En_cours', '18/04/2018', '18/04/2018'),
(41, 'dsdsds', 'Moyenne', 'cccc', 'ielferkh', 'admin', '', '', 'Resole', '24/04/2018', '24/04/2018');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id` int(11) NOT NULL,
  `intitule` mediumtext,
  `cout` mediumtext,
  `credit` mediumtext,
  `maitrise` mediumtext,
  `etat_physique` mediumtext,
  `etat_financier` mediumtext,
  `partenaire` mediumtext,
  `date` mediumtext,
  `delai` mediumtext,
  `observation` mediumtext,
  `commune` mediumtext,
  `aal` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `intitule`, `cout`, `credit`, `maitrise`, `etat_physique`, `etat_financier`, `partenaire`, `date`, `delai`, `observation`, `commune`, `aal`) VALUES
(4, 'el_fokra intiuile 2', '', '', '', '66', '', '', '', '', '', 'el_fokra', 'el_fokra'),
(5, 'hghhghhghghhghgjgkhglghgkbkjhjh;l;ljhhghhghhghgjgkhglgh', '</div', '', '', '', 'Etat', 'Partenaires,', 'Date', 'DÃ©lai', 'Observations', 'ouled_abdoune', 'ouled_abdoune'),
(6, 'aaaaaaaa', '', '', '', '78', '', '', '', '', '', 'ouled_abdoune', 'ouled_abdoune'),
(7, 'ttttt', '', '', '', '56', '', '', '', '', '', 'm_fassis', 'el_fokra'),
(9, 'test', '', '', '', '', '', '', '', '', '', 'khouribga', 'aakh7'),
(10, 'hghkgkjkg', '', '', '', '56', '', '', '', '', '', 'bejaad', 'aabj1'),
(12, 'aaaaa', 'jhjh', '', '', 'aaa', '', '', '', '', 'RAS', 'bir_mezoui', 'boulanouar'),
(13, 'test2', 'Couuus', 'Credits', 'Maitrise', 'Etat', 'Etat', 'Partenaires', 'Date', 'Delai', 'Observations', 'khouribga', 'aakh5'),
(18, 'test', 'tesdt', 'dfd', 'sdfssf', 'sdfffffff', 'jh', 'jlh', '2018-02-14', 'lkjklh', 'kljlk', 'khouribga', 'aakh1'),
(17, 'ghhjg', '20', '554', 'fgg', '20', '20', 'ocp', '2017-10-10', '6', 'RAS', 'khouribga', 'aakh1'),
(19, 'jhjhj', '255', '225664', 'ggg', '5', '5', 'hghjgh', '2018-02-25', '9', 'RAS', 'khouribga', 'aakh1'),
(20, 'dfdhg', '', '', '', '', '', '', '', '', '', '', 'aakh1');

-- --------------------------------------------------------

--
-- Structure de la table `requete`
--

CREATE TABLE `requete` (
  `id` int(11) NOT NULL,
  `date_start` text,
  `num_requete` text,
  `type` text NOT NULL,
  `authority` text NOT NULL,
  `date_send_authority` text NOT NULL,
  `send` text,
  `receive` text NOT NULL,
  `subject` text NOT NULL,
  `division` text NOT NULL,
  `date_send_division` text NOT NULL,
  `division_request` text NOT NULL,
  `local_request` text NOT NULL,
  `provincial_request` text NOT NULL,
  `mowaten_request` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `requete`
--

INSERT INTO `requete` (`id`, `date_start`, `num_requete`, `type`, `authority`, `date_send_authority`, `send`, `receive`, `subject`, `division`, `date_send_division`, `division_request`, `local_request`, `provincial_request`, `mowaten_request`) VALUES
(73, '2019-01-14', '01/19', 'إلكتروني', 'دائرة وادي زم', '', '\"فاطيمة الخليفي دوار كناو السماعلة دائرة وادي زم\"', '\"العربي الكرويطي  عون سلطة  محمد ولد العربي ولد قريش نائب أراضي الجموع\"', 'حول رفض المشتكى بهما تسجيل المشتكية ضمن لائحة المستفيدين من اراضي الجموع حيث طلبوا منها مبلغ 5000,00 درهم مقابل تسجيلها		', 'DAE', '', '', '', '', ''),
(74, '2019-01-14', '02/19', 'إلكتروني', 'دائرة وادي زم', '', '\"محمد لخليفي  حي ياسمينة  سيدي علي بن عدي\"', '\"العربي الكرويطي  عون سلطة  محمد ولد العربي ولد قريش نائب أراضي الجموع\"', 'بعد قام نائب اراضي الجموع بتسجيل المشتكى وأخته فوجئا بعون السلطة المشتكى به بحدف اسمائهم.		', 'DAI', '', '', '', '', ''),
(75, '2019-01-14', '03/19', 'إلكتروني', 'دائرة ابي الجعد', '', '\"علو العربي ومن معه من ساكنة جماعة بوخريص  دائرة أبي الجعد \"', '', 'في شأن الوضعية التي تعرفها الثانوية الاعدادية الشهيد محمد كدامة والمنعوتة في الشكاية بالمزرية خاصة داخليتها والنقل المدرسي، حيث تم تكليف مقتصد جديد قام بطرد الطباخات وعوضهم برجل بزوجته وطفل الآباء المشتكون أصبحوا يخشون على بناتهم التلميذات التلميذات من التحرش الجنسي		', 'DAE', '2019-01-17', '', '', '', ''),
(76, '2019-03-09', '04/19', 'إلكتروني', 'باشوية خريبكة', '', 'خربوش عباس سمرية 17 فتح الخير تمارة', '', 'في شأن رفع الضرر الناتج عن بناء عشوائي قد يكون قام به احد جيرانه بحي النهضة شارع علال الفاسي بلوك q رقم 28 خريبكة 		', 'DUE', '', '', '', '', ''),
(79, '2019-01-14', '05/19', 'إلكتروني', 'باشوية وادي زم', '', '\"الحاج بصراوي  المصلى القديمة الزنقة 07 رقم 01 وادي زم \"', '\"المجلس الجماعي  وادي زم\" ', 'حول الامر الفوري بإيقاف البناء والذي توصل به من رئيس المجلس الجماعي لوادي زم بعد أن تم الترخيص له بالبناء		', 'DUE', '2019-01-17', '', '', '', ''),
(80, '2019-01-14', '06/19', 'إلكتروني', '', '', '\"سكان دوار اولاد علال شخص معنوي  06622010201 خريبكة\"', 'المجلس الإقليمي', 'المعنيون يملكون عقارا محاذيا للحي الصناعي قضيتهم معروضة على القضاء الاداري، الارض منزوعة ملكيتها لم يؤدوا لهم الثمن الذي حكمت به المحكمة ولم يتخلى المجلس الاقليمي على ارضهم		', 'DCL', '2019-01-17', 'جواب الى الوزارة تحت عدد 765 بتاريخ 01/02/2019	\r\n', '', '', ''),
(81, '2019-01-17', '07/19', 'إلكتروني', '', '', '\"عبد الله شمسي تجزئة سيدي العربي 12100 عين عودة  المغرب\"', '', 'حول الترامي بالبناء فوق ملك مشترك بدون قسمة او موافقة من الورثة بدوار اولاد رحو، اولاد بوغادي، دائرة وادي زم		', 'DUE', '2019-02-04', '', '', '', ''),
(82, '2019-02-04', '08/19', 'إلكتروني', '', '', '\"فاطمة بلخير حي للا مريم  بلوك 118 رقم 02  الدار البيضاء \"', '\"ستار محمد  دوار الغفافرة خريبكة  \"', 'في شأن إدعاء الترامي على ملك الغير وإقدام المشتكى به على هدم المحل الكائن بالارض موضوع النزاع 		', 'DUE', '2019-02-04', '', '', '', ''),
(83, '2019-02-04', '09/19', 'إلكتروني', '', '', '\"أحمد أجديرة محام لدى هيئة المحامين بالرباط\"', '', 'في شأن رفع الضرر ناتج عن إغلاق مقلع المحامي ينوب عن السيد أحمد بندكالي المسير لشركة ميتال ماربر الكائن مقرها الاجتماعي طريق صاكا، كلم 2,80 جرسيف ، عمالة جرسيف		', 'DE', '2019-02-04', '', '', '', ''),
(84, '2019-02-06', '10/19', 'إلكتروني', '', '', '\"الحبيب القطبي  04، تجزئة الخير  أبي الجعد 0655364037\"', 'الحبيب السعيدي قائد الملحقة الادارية الاولى ', 'في شأن إقدام جارة المشتكى به على إلحاق الاضرار به  جراء بنائه جدارا أمام منزله لصيقا بجدار منزلي ويتعمد أواني وأزبال تحت نافذته، توجه الى السيد قائد الملحقة الادارية الاولى الذي قد يكون ضده امام المواطنين والموظفين بعبارة \"سير اعطيني ...هادشي راه فراسي\" رافضا التدخل لرفع الضرر عنه		', 'DAI', '2019-02-10', '', '', '', ''),
(85, '2019-02-11', '11/19', 'إلكتروني', '', '', '\"لهويري أحمد ومن معه من سكان دوار اولاد محموسى جماعة بني سمير دائرة وادي زم\"', '', 'في شان ادعاء الترامي علىى أراضي سلالية كان المشتكون يستنغلونها أبا عن جد لازيد من 100 سنة فوجئوا بأن أصبح عليها ما يزيد على 40 منزلا سكنيا ، تقطنها حوالي 250 نسمة علاوة على توفر المنازل على سكتي الماء والكهرباء وأنهم لما كانت ىأراضيهم السلالية تابعة لجماعة بني سمير كانوا يتمتعون بجميع الحقوق المخولة لهم ، عكس أحوالهم بعد إقحامهم (حسب نص شكايتهم ) في المجال الحضري لمدينة وادي زم ، وأصبح نواب أراضي جموعهم يمنعون في طردهم منها,		', 'DAR', '2019-02-18', '', '', '', ''),
(86, '2019-02-11', '12/19', 'إلكتروني', '', '', 'نعيمة خلفوف 22، بلوك ', '', 'حول عدم استفادتها من برنامج اعادة إيواء سكان دور الصفيح ، علما ان بحوزتها شها دة هدم مسكنها الصفيحي منذ 18/08/2006 		', 'DUE', '2019-02-18', '', '', '', ''),
(90, '2019-02-27', '17/19', 'إلكتروني', '', '', 'عبد الغني الزياني سكنى حي الاداري لعين علي مومن سطات', 'gh', 'يطلب المساعدة قصد استخلاص املاك هي عبارة عن اراضي تعود اجدة العربي بن ادريس للحرث تسمى بالحجرة الكحلاء لونها احرش مساحتها 3 هكتارات تقريبا وبحوزته نسخة من الرسم الذي اشترى به جده تلك الارض التي يطالب باستردادها ومساعدته في بلوغ حقوقه 		', 'DAR', '2019-12-01', '', '', '', ''),
(87, '2019-02-18', '13/19', 'إلكتروني', '', '', 'أحمد بريشي تمارة الصخيرات - تمارة نقيب جماعة اولاد سيدي موسى البريشي رقم 1186 تجزئة أولاد زعير عين عودة تمارة ', '', 'حول إقصائهم من الاستفادة من حقوق سلالية لقد توجهوا الى السلطة المحلية بطلب تسجيلهم، إلا أنها رفضت بدعوى أنهم ليسوا ن ذوي الحقوق ، حسب شكايتهم بأنهم يسكنون بذلك الدوار أبا عن جد ويطلبون أن يشملهم حق الاستفادة,		', 'DAR', '2019-03-13', 'جواب الى الوزارة تحت عدد 7886 بتاريخ 14/11/2018	\r\n', '', '', ''),
(88, '2019-02-25', '14/19', 'إلكتروني', '', '', '\"لمحمدي محمد ومن معه جماعة بني زرنتل دائرة أبي الجعد\"', 'مقتصد المؤسسة رئيس جماعة بني زرنتل وبعض المنتخبين', 'بعض آباء واولياء تلاميذ اعدادية احمد امين جماعة بني زرنتل (دائرة أبي الجعد) يستنكرون الاوضاع المزرية التي تعرفها الاعدادية بسبب تصرفات قد تكون غير قانونية تقدم عليها مقتصدها بتنسيق مع الرئيس وبعض المنتخبين تصرفات تمس المواد الغذائية الطبخ ـ طبيعة الوجبات ـ وحراس المؤسسة ... الخ		', 'DAI', '0001-01-01', '', '', '', ''),
(89, '2019-02-27', '15/19', 'إلكتروني', '', '', '\"الشرافي بنداود (مهاجر بايطاليا) 12، زنقة 17 حي المقاومة خريبكة\"', '', 'بشأن عدم الاستفادة من عملية الايواء والسكن بالرغم من هدم البراكة واستخلاص الدفعات وذلك منذ 1999		', 'DUE', '0001-01-01', '', '', '', ''),
(91, '2019-02-28', '16/19', 'إلكتروني', '', '', 'دريس حراش رئيس جماعة الفقراء دائرة خريبكة', 'gh', 'يلتمس المشتكى من رئيس الحكومة اطلاعه على المآل المخصص تطلبه المتعلق بدعم الجماعة لانجاز مشاريع ذات صبغة استعجالية موضع كتاب رئيس الحكومة عدد 4224/4 بتاريخ 31/10/2017		', 'DCL', '2019-10-01', '', '', '', ''),
(92, '2019-02-28', '18/19', 'إلكتروني', '', '', '\"موظف جماعة وادي زم وادي زم\"', 'gh', 'بشأن تجاوزات قد تكون طالت مجموعة من الترقيات		', 'DCL', '2019-01-02', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `suivi`
--

CREATE TABLE `suivi` (
  `id` int(11) NOT NULL,
  `id_t` int(11) NOT NULL,
  `login` mediumtext NOT NULL,
  `msg` mediumtext NOT NULL,
  `date` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `suivi`
--

INSERT INTO `suivi` (`id`, `id_t`, `login`, `msg`, `date`) VALUES
(21, 20, 'aakh1', 'aaa', '06/04/2018;01:31:15am'),
(22, 20, 'aakh1', 'zzz', '06/04/2018 01:31:37am'),
(23, 20, 'aakh1', 'xxx', '06/04/2018   01:32:07am'),
(24, 34, 'aakh1', 'rrrr', '06/04/2018 11:51:12am'),
(25, 23, 'aakh1', 'wa sate ', '06/04/2018 11:57:48am'),
(26, 23, 'aakh1', 'tekyagskdfs', '06/04/2018 11:58:20am'),
(27, 36, 'admin', 'aaaaa', '06/04/2018 08:39:13pm'),
(28, 36, 'aakh2', 'ssss', '06/04/2018 08:41:00pm'),
(29, 37, 'admin', 'oioi', '13/04/2018 04:56:34pm'),
(30, 38, 'admin', 'merci de verifier l\'alimentation', '13/04/2018 04:58:41pm'),
(31, 38, 'aakh3', 'c\'est deja fait mais tjr le prob existe', '13/04/2018 04:59:20pm'),
(32, 38, 'admin', 'voir avec Mr Issam', '13/04/2018 04:59:59pm'),
(33, 40, 'admin', 'merci de ', '18/04/2018 01:45:36pm'),
(34, 40, 'aakh5', 'c ddeakgt', '18/04/2018 01:46:00pm');

-- --------------------------------------------------------

--
-- Structure de la table `table_name`
--

CREATE TABLE `table_name` (
  `id` int(11) NOT NULL,
  `intitule` mediumtext,
  `cout` mediumtext,
  `credit` mediumtext,
  `maitrise` mediumtext,
  `etat_physique` mediumtext,
  `etat_financier` mediumtext,
  `partenaire` mediumtext,
  `date` mediumtext,
  `delai` mediumtext,
  `observation` mediumtext,
  `commune` mediumtext
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `table_name`
--

INSERT INTO `table_name` (`id`, `intitule`, `cout`, `credit`, `maitrise`, `etat_physique`, `etat_financier`, `partenaire`, `date`, `delai`, `observation`, `commune`) VALUES
(1, 'hghghg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `type` text NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `division` text NOT NULL,
  `service` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `type`, `nom`, `prenom`, `division`, `service`) VALUES
(39, 'das', '1234', 'division', '', '', 'DAS', ''),
(38, 'admin', 'admin', 'admin', '', '', 'admin', ''),
(40, 'dar', '1234', 'division', '', '', 'DAR', ''),
(41, 'drhmg', '1234', 'division', '', '', 'drhmg', ''),
(42, 'dae', '1234', 'division', '', '', 'dae', ''),
(43, 'dai', '1234', 'division', '', '', 'dai', ''),
(44, 'dcl', '1234', 'division', '', '', 'dcl', ''),
(45, 'dbm', '1234', 'division', '', '', 'dbm', ''),
(46, 'audit', '1234', 'division', '', '', 'audit', ''),
(47, 'de', '1234', 'division', '', '', 'de', ''),
(48, 'due', '1234', 'division', '', '', 'due', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `aal`
--
ALTER TABLE `aal`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `instance_old`
--
ALTER TABLE `instance_old`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `requete`
--
ALTER TABLE `requete`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `suivi`
--
ALTER TABLE `suivi`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_name`
--
ALTER TABLE `table_name`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `aal`
--
ALTER TABLE `aal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT pour la table `instance_old`
--
ALTER TABLE `instance_old`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `requete`
--
ALTER TABLE `requete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT pour la table `suivi`
--
ALTER TABLE `suivi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `table_name`
--
ALTER TABLE `table_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
