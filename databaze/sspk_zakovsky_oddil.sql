-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pon 17. úno 2020, 20:54
-- Verze serveru: 5.7.17
-- Verze PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `sspkju1581004630`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `clanky`
--

CREATE TABLE `clanky` (
  `ID` int(11) NOT NULL,
  `Nadpis` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `Text` longtext COLLATE utf8_czech_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `clanky`
--

INSERT INTO `clanky` (`ID`, `Nadpis`, `Text`) VALUES
(3, 'O nás', 'Střelba je sport vhodný nejen pro profesionální sportovce, militantně zaměřené osoby, ale je vhodná i pro běžné muže, ženy a mládež, amatérské sportovce i nadšence, kteří chtějí umět se zbraní bezpečně zacházet. Naučí se nejen bezpečně zacházet se zbraněmi a střílet ale také soustředění, trpělivosti a zdravé soutěživosti. Náplní oddílu je osvojení si správných střeleckých návyků a pravidel bezpečné manipulace se zbraní, ostrá střelba ze vzduchových zbraní a příprava na sportovní střelbu z malorážné pušky a pistole. Střelba je doplněná o pořadovou přípravu spojenou s pobytem na střelnici, základy obrany, osvojení si způsobů přežití, pohybu a orientace v přírodě i ve městě, zdravotní přípravu zaměřenou na resuscitaci. Vytvořili jsme výborné podmínky pro výcvik dětí a mládeže ve střelbě ze vzduchových zbraní v prostorách DDM Stříbro. Máme k dispozici moderní simulátor střelecký z ručních zbraní, optickou střelnici rival určenou pro základní výuku ovládání zbraní a střeleckých poloh. Vzduchovkovou krytou střelnici, vybavenou zbraněmi typu Gamo a Slávie 634, které jsou vhodné pro nácvik základních střeleckých dovedností.'),
(4, 'Příprava ', 'probíhá na zařízeních DDM klasickou přípravou, diskusí (zkušenosti, poznatky, zážitky), praktická cvičení na střelnici SSPK, hry a soutěže, organizované DDM, SSPK a REPUBLIKOVÉ, návštěvy policejních muzeí, spoluprací se členy SSPK Stříbro formou praktické činnosti na střelnici. Vytvořili jsme výborné podmínky pro výcvik dětí a mládeže ve střelbě ze vzduchových zbraní v prostorách DDM Stříbro.\r\nMáme k dispozici moderní simulátor střelecký z ručních zbraní, optickou střelnici rival určenou pro základní výuku  ovládání zbraní a střeleckých poloh.\r\n Vzduchovkovou krytou střelnici, vybavenou zbraněmi typu Gamo a Slávie 634, které jsou vhodné pro nácvik základních střeleckých dovedností. Na střelnici SSPK probíhá výuka střelby z malorážkových pušek ráže .22LR. Tréninky probíhají jednou až dvakrát do měsíce pod dozorem zkušených instruktorů.\r\n'),
(8, 'Střelnice na DDM', 'Dům dětí a mládeže Stříbro, příspěvková organizace\r\nMasarykovo náměstí 17\r\nStříbro\r\nPSČ 349 01'),
(7, 'Střelnice SSPK', 'Střelnice SSPK\r\nGPS: 49° 44′ 14.7482758″ N 12° 59′ 54.7347164″'),
(9, 'Jak se k nám přidat?', 'Nový člen může do Juniorského oddílu vstoupit po prokázání znalostí o držení zbraně, střelbě, teorii zákona o zbraních. Tyto základy se žáci učí na střeleckém kroužku DDM Stříbro. Z tohoto kroužku lze postoupit k nám. Kroužek je rozdělen do tří kategorií. 3. Kategorie: začátečníci. Začátečníci dochází na DDM střelnici ve čtvrtek a učí se naprosté základy manipulace se zbraní a střelby. 2. Kategorie: pokročilý. Pokročilý se může žák stát po úspěšném dokončení prozkoušení po prvním roce chození do začátečníků. Tato směna chodí na střelnici DDM v úterý. 1. Kategorie: Profesionálové. Skupina docházející v pondělí složené z těch nejzkušenějších střelců kroužku DDM. Do této skupiny se lze dostat skrze prověrky v pokročilé kategorii. Teprve z pondělní skupiny se lze dostat do oddílu SSPK, protože zde žák nabude nejvíce znalostí z oblasti ostrých zbraní a střelecké teorie.'),
(10, 'Střelecký tábor 2019', '<p>Tábor probíhá na střelnici SSPK-Stříbro umístěné v údolí řeky Úhlavky v pěkné lesnaté krajině nedaleko města Stříbra. Prostor je umístěn na louce obklopené vzrostlými stromy a meandrem řeky. Střelcům je k dispozici vybavení střelnice, chata, velká prostorná louka, ohniště s posezením. Ostatní vybavení stany, spacáky a další výstroj si dovážíme zapůjčené od DDM a členů SSPK. Mobilní kuchyni máme umístěnou pod jedním střeleckým přístřeškem, jídelnu pod stanem. Ubytování táborových účastníků je pod stany krytými přístřeškem. Účastníky tábora čekala: Sportovní a taktická střelba z malorážné pušky, zdravotní příprava, vyzkouší si, zda dokáží zachránit život kamarádovi, spojovací příprava, topografie, přežití v přírodě. Airsoftovou hrou stráví účastníci tábora převážnou část svého času. Program jednotlivých dní je sestaven z postupně složitějších her. V těchto hrách budou jednotlivé týmy plnit stále obtížnější úkoly. Na začátku tábora každý účastník projde školením týkajícím se údržby zbraní a bezpečnosti. Při školení se účastníci naučí bezpečně používat zbraně a činnosti na střelnici. Správnému chování při vlastních hrách a manipulaci se zbraní. Večer pak posezení a společné hraní na kytaru u táborového ohně. Závěr tábora je ukončen vyhodnocení činnosti jednotlivců předání odměn. Za úspěšný průběh tábora patří poděkovámí SSPK-Stříbro za umožnění využití areálu střelnice a jeho přípravu pro táboření. Vedoucím a instruktorům táborového soustředění za přípravu střeleb, her a starost o hladové žaludky táborníků. Firmě Vodárny a Kanalizace Karlovy Vary za zabezpečení pitné vody. (panu Štýbarovi Pobočka Stříbro) Rodičům: panu Mundilovi za zapůjčení polní kuchyně, která nám usnadnila přípravu stravy. Panu Berounovi za přípravu dalších zařízení tábora a ostatním za celkovou podporu.</p>'),
(17, 'Fomei cup- Jičín', 'Dne 23. 9. 2017 proběhl na střelnici Jičín – Zebín Celostátní přebor ČMMJ v K4M ve střelbě ze vzduchové pušky a malorážky, spojený se 4. kolem celostátního turnaje Fomei Cup 2017, jehož cílem je propagovat střelectví u mládeže a tím podpořit zájem nejen o střelbu, ale také o myslivost. Této soutěže se zúčastnilo 11 mladých střelců ze Střeleckého kroužku DDM Stříbro, který je součástí SSPK Stříbro. V souboji se zkušenou konkurencí v několika disciplínách dosáhli stříbrští střelci dobrých výsledků. V kategorii do deseti let děti střílely na deset m vzduchovkou s puškohledem, v ležící poloze s oporou, deseti ranami na redukované terče liška, srnec, kamzík a kňour. V hodnocení žákyň obsadila Bára Alblová (395 bodů) 7. místo, mezi žáky byl nejúspěšnější Filip Karvaš (400 bodů) – 8. místo, Jindřich Sitta (398 bodů) získal 11. místo a Jakub Šafránek (366 bodů) 21. místo. V kategorii jedenáct až patnáct let se střílelo malorážkou s puškohledem na vzdálenost padesáti metrů, deseti ranami na terče liška, kamzík a srnec vsedě s oporou loktů, na terč kňour vstoje s oporou pevné tyče. V celkovém pořadí žákyň získala Michaela Krátká (358 bodů) 7. místo, i žáci byli úspěšní – Daniel Hlaváček obsadil (329 bodů) 13. místo, Pavel Kastl (319 bodů) 15. místo, David Bača (247 bodů) 20. místo a Vojtěch Michal (182 bodů) 21. místo. Junioři a juniorky ve věku šestnáct až dvacet let stříleli na vzdálenost padesáti metrů malorážkou s puškohledem, deseti ranami na terč liška v poloze vleže s oporou loktů, na terč srnec vstoje s oporou pevné tyče, na terč kamzík vstoje s oporou volné tyče a na terč kňour vstoje bez opory. Marek Mundil (338 bodů) si vystřílel 6. místo, Vojtěch Leitgeb (330 bodů) 7. místo.\r\nPoděkování si zaslouží nejen soutěžící, ale také jejich rodiče, kteří podpořili sebevědomí mladých střelců, pomohli zabezpečit dopravu na místo soutěže a pomáhali střelcům podle pokynů rozhodčích na střelištích, čímž přispěli k hladkému průběhu celé soutěže.\r\nZa vedoucí střeleckého kroužku: Ing. J. Šimice, Mgr. K. Kastlová');

-- --------------------------------------------------------

--
-- Struktura tabulky `obrazky`
--

CREATE TABLE `obrazky` (
  `ID` int(11) NOT NULL,
  `URL_obr` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `Clanek` int(11) NOT NULL,
  `Popis` text COLLATE utf8_czech_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `obrazky`
--

INSERT INTO `obrazky` (`ID`, `URL_obr`, `Clanek`, `Popis`) VALUES
(3, 'obr_strl/Tabor_nastup.JPG', 3, 'Foto z nástupu tábora'),
(4, 'obr_strl/Fomei_Cup_Alblova.JPG', 17, 'Soutěž Fomei Cup Jičín'),
(5, 'obr_strl/Fomei_cup_dopadiste.JPG', 9, 'Střelba z SVD na 100 metrů'),
(6, 'obr_strl/Fomei_cup_streliste.JPG', 17, 'Soutěž Fomei Cup malorážkové střeliště'),
(7, 'obr_strl/Fomei_cup_Streliste_2.JPG', 17, 'Soutěž Fomei Cup vzduchovky'),
(8, 'obr_strl/Odstrelovac.JPG', 4, 'Zkouška střelby z velké ráže'),
(9, 'obr_strl/Obed.jpg', 10, 'Výdej obědu'),
(10, 'obr_strl/strelecka.JPG', 10, 'Bezpečná manipulace s airsoftovou zbraní'),
(11, 'obr_strl/Tabor_priprava.jpg', 10, 'Příprava dřeva na oheň'),
(16, 'obr_strl/Zdravoveda.JPG', 10, 'Výuka první pomoci');

-- --------------------------------------------------------

--
-- Struktura tabulky `polozky_kalendare`
--

CREATE TABLE `polozky_kalendare` (
  `ID` int(11) NOT NULL,
  `Prispevek` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `Datum` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `uzivatele`
--

CREATE TABLE `uzivatele` (
  `Email` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `Jmeno` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `Prijmeni` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `Heslo` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `Tel_cislo` varchar(9) COLLATE utf8_czech_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `uzivatele`
--

INSERT INTO `uzivatele` (`Email`, `Jmeno`, `Prijmeni`, `Heslo`, `Tel_cislo`) VALUES
('maximhruska@seznam.cz', 'Maxim', 'Hruška', 'dfeaf10390e560aea745ccba53e044ed', '702172160'),
('Admin', 'Admin', 'Admin', 'dfeaf10390e560aea745ccba53e044ed', '');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `clanky`
--
ALTER TABLE `clanky`
  ADD PRIMARY KEY (`ID`);

--
-- Klíče pro tabulku `obrazky`
--
ALTER TABLE `obrazky`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Clanek` (`Clanek`);

--
-- Klíče pro tabulku `polozky_kalendare`
--
ALTER TABLE `polozky_kalendare`
  ADD PRIMARY KEY (`ID`);

--
-- Klíče pro tabulku `uzivatele`
--
ALTER TABLE `uzivatele`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `clanky`
--
ALTER TABLE `clanky`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pro tabulku `obrazky`
--
ALTER TABLE `obrazky`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pro tabulku `polozky_kalendare`
--
ALTER TABLE `polozky_kalendare`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
