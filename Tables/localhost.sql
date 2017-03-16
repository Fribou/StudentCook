-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 15 Mars 2017 à 14:00
-- Version du serveur :  5.5.52-MariaDB
-- Version de PHP :  5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `p1501578`
--

-- --------------------------------------------------------

--
-- Structure de la table `Actor`
--

CREATE TABLE IF NOT EXISTS `Actor` (
  `ActorID` int(11) NOT NULL,
  `Nom` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Actor`
--

INSERT INTO `Actor` (`ActorID`, `Nom`) VALUES
(12, 'Abdul Salaam El Razzac'),
(13, 'Abe Vigoda'),
(19, 'Adam Baldwin'),
(30, 'Adam Scott'),
(38, 'Adelle Lutz'),
(45, 'Adrienne Corri'),
(47, 'Afemo Omilami'),
(74, 'Al Martino'),
(75, 'Al Matthews'),
(77, 'Al Pacino'),
(106, 'Alan Polonsky'),
(121, 'Albert Hall'),
(134, 'Alec Guinness'),
(146, 'Alex Coleman'),
(156, 'Alex Norton'),
(157, 'Alex Rocco'),
(180, 'Alexis Arquette'),
(184, 'Alfonso Freeman'),
(185, 'Alfre Woodard'),
(189, 'Alfred Molina'),
(197, 'Alice Krige'),
(210, 'Alison Waddell'),
(220, 'Allan Kolman'),
(244, 'Alonzo Brown'),
(246, 'Alun Armstrong'),
(257, 'Amanda Plummer'),
(258, 'Amanda Walker'),
(261, 'Amber Waddell'),
(290, 'Andre B. Blake'),
(355, 'Angus MacInnes'),
(406, 'Anne Fletcher'),
(424, 'Annette Helde'),
(427, 'Annie Golden'),
(440, 'Anthony ''Chip'' Brienza'),
(445, 'Anthony Chinn'),
(446, 'Anthony Clark'),
(447, 'Anthony Crivello'),
(448, 'Anthony Daniels'),
(456, 'Anthony Guidera'),
(457, 'Anthony Heald'),
(458, 'Anthony Higgins'),
(459, 'Anthony Hopkins'),
(478, 'Anthony Sharp'),
(503, 'Ariana Richards'),
(515, 'Arnold Schwarzenegger'),
(545, 'Arthur Senzy'),
(555, 'Aubrey Morris'),
(565, 'Austin O''Brien'),
(576, 'B.D. Wong'),
(590, 'Barbara Coles'),
(612, 'Barry Dennen'),
(618, 'Barry McGovern'),
(643, 'Bee Duffell'),
(653, 'Ben Bode'),
(663, 'Ben Marley'),
(671, 'Benicio Del Toro'),
(687, 'Bernard  Fox (I)'),
(692, 'Bernard Hill'),
(694, 'Bernard Horsfall'),
(703, 'Bert  Williams (II)'),
(712, 'Betsy Brantley'),
(745, 'Bill  Raymond (I)'),
(750, 'Bill Bolender'),
(764, 'Bill Dalzell III'),
(769, 'Bill Graham'),
(794, 'Bill Paxton'),
(795, 'Bill Pullman'),
(797, 'Bill Reimbold'),
(800, 'Bill Smitrovich'),
(823, 'Billy Crystal'),
(826, 'Billy Dee Williams'),
(827, 'Billy Devlin'),
(838, 'Billy Zane'),
(844, 'Blain Fairman'),
(859, 'Bob  Collins (III)'),
(863, 'Bob  Peck (I)'),
(864, 'Bob Adrian'),
(877, 'Bob Gunton'),
(878, 'Bob Harks'),
(893, 'Bob Penny'),
(912, 'Bokeem Woodbine'),
(927, 'Brad Dourif'),
(931, 'Brad Pitt'),
(959, 'Brenda Hillhouse'),
(964, 'Brendan  Kelly (I)'),
(967, 'Brendan Gleeson'),
(970, 'Brent Hinkley'),
(972, 'Brent Spiner'),
(975, 'Brett Cullen'),
(976, 'Brett Rice'),
(977, 'Brian  Cox (III)'),
(984, 'Brian Brophy'),
(989, 'Brian Delate'),
(1000, 'Brian Libby'),
(1001, 'Brian Markinson'),
(1022, 'Brigitte Kahn'),
(1025, 'Brion James'),
(1033, 'Bronagh Gallagher'),
(1038, 'Brooke Smith'),
(1045, 'Bruce  Wright (I)'),
(1050, 'Bruce Boa'),
(1051, 'Bruce Bohne'),
(1060, 'Bruce Kirkpatrick'),
(1071, 'Bruce Willis'),
(1084, 'Buck Kartalian'),
(1098, 'Burnell Tucker'),
(1099, 'Burr Steers'),
(1110, 'Buzz Kilman'),
(1113, 'Byron Minns'),
(1120, 'C.J. Bau'),
(1136, 'Cameron Thor'),
(1139, 'Camilla Overbye Roos'),
(1155, 'Carl Bressler'),
(1159, 'Carl Duering'),
(1181, 'Carlos Lacamara'),
(1199, 'Carol Cleveland'),
(1202, 'Carol Kane'),
(1222, 'Carrie Fisher'),
(1224, 'Cary Elwes'),
(1231, 'Casey Siemaszko'),
(1236, 'Castulo Guerra'),
(1280, 'Charles A. Tamburro'),
(1323, 'Charles Napier'),
(1331, 'Charles Techman'),
(1345, 'Charlotte Chatton'),
(1357, 'Chazz Palminteri'),
(1394, 'Chris Ellis'),
(1400, 'Chris Isaak'),
(1406, 'Chris Penn'),
(1410, 'Chris Sarandon'),
(1413, 'Christian Clemenson'),
(1421, 'Christine Devine'),
(1423, 'Christine Estabrook'),
(1453, 'Christopher Guest'),
(1457, 'Christopher John Fields'),
(1462, 'Christopher Lloyd'),
(1464, 'Christopher Malcolm'),
(1467, 'Christopher Meloni'),
(1474, 'Christopher Plummer'),
(1479, 'Christopher Walken'),
(1486, 'Chuck Aber'),
(1505, 'Clair Forlani'),
(1515, 'Clancy Brown'),
(1531, 'Claude Rains'),
(1556, 'Clint Howard'),
(1559, 'Clive Merrison'),
(1560, 'Clive Revill'),
(1569, 'Colette Hiller'),
(1574, 'Colin Firth'),
(1580, 'Colleen Camp'),
(1586, 'Connie Booth'),
(1621, 'Courtney Gains'),
(1625, 'Craig  Kelly (II)'),
(1634, 'Crispin Glover'),
(1639, 'Cully Fredricksen'),
(1640, 'Curt Bois'),
(1682, 'Damien Leake'),
(1692, 'Dan Butler'),
(1695, 'Dan Hedaya'),
(1697, 'Dan Lauria'),
(1704, 'Dan Stanton'),
(1748, 'Daniel Zacapa'),
(1749, 'Daniel von Bargen'),
(1763, 'Danny Darst'),
(1764, 'Danny DeVito'),
(1776, 'Danny Nucci'),
(1782, 'Dant McCarthy'),
(1806, 'Daryl Hannah'),
(1822, 'David  Andrews (I)'),
(1824, 'David  Brisbin (I)'),
(1837, 'David  Morse (I)'),
(1838, 'David  Pressman (I)'),
(1841, 'David  Warner (I)'),
(1851, 'David Bowe'),
(1875, 'David Early'),
(1880, 'David Gant'),
(1889, 'David Harold Brown'),
(1932, 'David Proval'),
(1933, 'David Prowse'),
(1941, 'David S. Lomax'),
(1950, 'David Steen'),
(1976, 'DeVaughn Nixon'),
(1977, 'Dean Cundey'),
(1981, 'Dean Norris'),
(2034, 'Delos V. Smith Jr.'),
(2040, 'Denholm Elliott'),
(2044, 'Denis Lawson'),
(2052, 'Denney Pierce'),
(2071, 'Dennis Hopper'),
(2089, 'Derek Kim'),
(2090, 'Derek Webster'),
(2111, 'Diane Baker'),
(2116, 'Diane Keaton'),
(2121, 'Diane Rodriguez'),
(2132, 'Dick Cavett'),
(2146, 'Dick Stilwell'),
(2185, 'Dominique Jennings'),
(2189, 'Don  Henderson (II)'),
(2196, 'Don Blakely'),
(2197, 'Don Brockett'),
(2203, 'Don Fellows'),
(2204, 'Don Fischer'),
(2212, 'Don Lake'),
(2217, 'Don McManus'),
(2229, 'Don Stanton'),
(2230, 'Don Stark'),
(2233, 'Donal Gibson'),
(2241, 'Donald Fullilove'),
(2254, 'Donald Zinn'),
(2304, 'Douglas Rain'),
(2323, 'Duffy Gaver'),
(2340, 'Dwight Hicks'),
(2341, 'Dwight Marfield'),
(2358, 'Earl Boen'),
(2377, 'Ed Harris'),
(2411, 'Eddie Tagoe'),
(2432, 'Edward Bunker'),
(2433, 'Edward Furlong'),
(2441, 'Edward James Olmos'),
(2475, 'Eleanor Clift'),
(2536, 'Elsa Raven'),
(2538, 'Elston Ridgle'),
(2547, 'Emily Ann Lloyd'),
(2555, 'Endre Hules'),
(2557, 'Ennalls Berl'),
(2563, 'Eric Braeden'),
(2567, 'Eric Clark'),
(2570, 'Eric Idle'),
(2581, 'Eric Stoltz'),
(2588, 'Erik Holland'),
(2645, 'Ewan McGregor'),
(2646, 'Ewan Stewart'),
(2647, 'Ewen Bremner'),
(2679, 'Finlay Welsh'),
(2705, 'Frances  Fisher (I)'),
(2710, 'Frances McDormand'),
(2718, 'Franco Citti'),
(2726, 'Frank  Marshall (I)'),
(2727, 'Frank  Miller (I)'),
(2740, 'Frank Cavestani'),
(2751, 'Frank Gorshin'),
(2759, 'Frank Medrano'),
(2761, 'Frank Novak'),
(2764, 'Frank Oz'),
(2769, 'Frank Seals Jr.'),
(2778, 'Frank Whaley'),
(2780, 'Frankie Faison'),
(2816, 'Frederic Forrest'),
(2817, 'Frederic W. Barnes'),
(2820, 'Frederick Strother'),
(2842, 'G.D. Spradlin'),
(2845, 'Gabriel Byrne'),
(2848, 'Gabriel Jarret'),
(2864, 'Garrick Hagon'),
(2899, 'Gary Houston'),
(2903, 'Gary Lee Davis'),
(2911, 'Gary Riley'),
(2913, 'Gary Sinise'),
(2917, 'Gates McFadden'),
(2930, 'Gene Borkan'),
(2954, 'Geoffrey Blake'),
(2969, 'George  Harris (II)'),
(2970, 'George  Kelly (II)'),
(2974, 'George ''Buck'' Flower'),
(2979, 'George C. Scott'),
(2985, 'George Christy'),
(2990, 'George DiCenzo'),
(3046, 'Gerald R. Molen'),
(3052, 'Gerard G. Williams'),
(3054, 'Gerard McSorley'),
(3067, 'Giancarlo Esposito'),
(3069, 'Gianni Russo'),
(3100, 'Glenn Beck'),
(3118, 'Gloria Stuart'),
(3121, 'Godfrey Quigley'),
(3123, 'Googy Gress'),
(3125, 'Gordon Greene'),
(3144, 'Graham Chapman'),
(3156, 'Granville ''Danny'' Young'),
(3161, 'Greg Collins'),
(3192, 'Gregory Sporleder'),
(3216, 'Gwenda Deacon'),
(3218, 'Gwyneth Paltrow'),
(3227, 'Hal Galili'),
(3270, 'Harris Savides'),
(3272, 'Harrison Ford'),
(3284, 'Harry Connick Jr.'),
(3285, 'Harry Dean Stanton'),
(3294, 'Harry Northup'),
(3297, 'Harry Waters Jr.'),
(3301, 'Harve Presnell'),
(3304, 'Harvey Fierstein'),
(3308, 'Harvey Keitel'),
(3317, 'Hawthorne James'),
(3333, 'Heidi Schanz'),
(3340, 'Helen Horton'),
(3426, 'Howard Platt'),
(3443, 'Hugh Ross'),
(3448, 'Humphrey Bogart'),
(3455, 'Ian Bannen'),
(3462, 'Ian Holm'),
(3463, 'Ian Liston'),
(3489, 'Ingo Neuhaus'),
(3490, 'Ingrid Bergman'),
(3506, 'Irma St. Paule'),
(3519, 'Ishaq Bux'),
(3526, 'Ivy Bethune'),
(3528, 'Jrgen Prochnow'),
(3547, 'J.J. Cohen'),
(3561, 'Jack  Ford (III)'),
(3563, 'Jack  McKenzie (I)'),
(3564, 'Jack  Moore (IV)'),
(3580, 'Jack Conley'),
(3581, 'Jack Creley'),
(3603, 'Jack Nicholson'),
(3609, 'Jack Purvis'),
(3611, 'Jack Shearer'),
(3613, 'Jack Thibeau'),
(3668, 'James  Keane (I)'),
(3676, 'James B. Howard'),
(3682, 'James Caan'),
(3687, 'James Caviezel'),
(3691, 'James Cosmo'),
(3695, 'James Cromwell'),
(3698, 'James Deeth'),
(3703, 'James Duval'),
(3704, 'James Earl Jones'),
(3722, 'James Hong'),
(3727, 'James Kisicki'),
(3731, 'James Lancaster'),
(3754, 'James Rebhorn'),
(3757, 'James Ritz'),
(3767, 'James Tolkan'),
(3772, 'James Whitmore'),
(3777, 'Jamie Abbott'),
(3791, 'Jana Marie Hupp'),
(3804, 'Jane Jenkins'),
(3832, 'Jason Barry'),
(3836, 'Jason Hervey'),
(3841, 'Jason Marin'),
(3854, 'Jay Acovone'),
(3896, 'Jean Speegle Howard'),
(3915, 'Jeannie Linero'),
(3932, 'Jeff Goldblum'),
(3941, 'Jeff O''Haco'),
(3952, 'Jeffrey DeMunn'),
(3968, 'Jenette Goldstein'),
(4006, 'Jeremy Sinden'),
(4020, 'Jerry Dunphy'),
(4027, 'Jerry Harte'),
(4038, 'Jerry Ziesmer'),
(4097, 'Jim Meskimen'),
(4101, 'Jim Palmer'),
(4102, 'Jim Piddock'),
(4103, 'Jim Roche'),
(4117, 'Jimmy Keogh'),
(4143, 'Joanna Cassidy'),
(4164, 'Jodie Foster'),
(4168, 'Joe Alaskey'),
(4184, 'Joe Fowler'),
(4201, 'Joe Morton'),
(4213, 'Joe Savino'),
(4216, 'Joe Spano'),
(4221, 'Joe Turkel'),
(4239, 'Joey Perillo'),
(4265, 'John  Hollis (I)'),
(4278, 'John  McLaughlin (I)'),
(4281, 'John  Morton (I)'),
(4297, 'John  Young (I)'),
(4320, 'John Bennett Perry'),
(4331, 'John C. McGinley'),
(4335, 'John Capodice'),
(4337, 'John Carroll Lynch'),
(4340, 'John Cassini'),
(4341, 'John Cazale'),
(4345, 'John Cleese'),
(4346, 'John Clive'),
(4370, 'John Dullaghan'),
(4373, 'John Enos'),
(4407, 'John Horton'),
(4411, 'John Hurt'),
(4418, 'John Kavanagh'),
(4422, 'John Laughlin'),
(4424, 'John Lees'),
(4435, 'John M. Mathews'),
(4441, 'John Marley'),
(4461, 'John Murtagh'),
(4462, 'John Nathan'),
(4482, 'John Qualen'),
(4483, 'John R. Woodward'),
(4486, 'John Ratzenberger'),
(4487, 'John Rhys-Davies'),
(4497, 'John Savident'),
(4508, 'John Short'),
(4510, 'John Spencer'),
(4516, 'John Storey'),
(4520, 'John Travolta'),
(4526, 'John Voldstad'),
(4527, 'John Walcutt'),
(4562, 'Jon Matthews'),
(4567, 'Jon Seda'),
(4578, 'Jonathan Frakes'),
(4580, 'Jonathan Hyde'),
(4593, 'Jonny Lee Miller'),
(4594, 'Jophery C. Brown'),
(4612, 'Josef Pilato'),
(4630, 'Joseph Mazzello'),
(4631, 'Joseph McKenna'),
(4633, 'Joseph Patrick Kelly'),
(4636, 'Joseph Ragno'),
(4662, 'Josip Elic'),
(4672, 'Juan A. Riojas'),
(4677, 'Judd Hirsch'),
(4680, 'Jude Ciccolella'),
(4708, 'Julia Sweeney'),
(4714, 'Julian Glover'),
(4720, 'Julian Wadham'),
(4725, 'Julie Araskog'),
(4733, 'Julie Donatt'),
(4734, 'Julie H. Morgan'),
(4748, 'Juliette Binoche'),
(4782, 'Karen Allen'),
(4789, 'Karen Maruyama'),
(4803, 'Karl Warren'),
(4808, 'Kasi Lemmons'),
(4819, 'Kate Winslet'),
(4831, 'Kathleen Quinlan'),
(4840, 'Kathryn Mullen'),
(4845, 'Kathy Bates'),
(4846, 'Kathy Griffin'),
(4857, 'Keenan Wynn'),
(4859, 'Keir Dullea'),
(4860, 'Keith  Allen (I)'),
(4904, 'Ken Daly'),
(4906, 'Ken Gibbel'),
(4913, 'Ken Kells'),
(4919, 'Ken Magee'),
(4936, 'Kenneth Colley'),
(4948, 'Kenneth Utt'),
(4950, 'Kenny  Baker (I)'),
(4965, 'Kerry Rossall'),
(4968, 'Kevin  Allen (I)'),
(4973, 'Kevin  Thompson (III)'),
(4975, 'Kevin Bacon'),
(4980, 'Kevin Cooney'),
(4993, 'Kevin Mangan'),
(5000, 'Kevin Pollak'),
(5003, 'Kevin Sifuentes'),
(5004, 'Kevin Spacey'),
(5005, 'Kevin Thigpen'),
(5040, 'Kimberly Beck'),
(5046, 'Kiran Shah'),
(5048, 'Kirk Baltz'),
(5052, 'Kirk Ward'),
(5067, 'Kristin Scott Thomas'),
(5102, 'Lamont Arnold'),
(5109, 'Lance Henriksen'),
(5126, 'Larry Brandenburg'),
(5154, 'Laura Dern'),
(5161, 'Laura Lovelace'),
(5169, 'Lauren Roselli'),
(5173, 'Laurence Fishburne'),
(5181, 'Lawrence Bender'),
(5185, 'Lawrence T. Wrentz'),
(5186, 'Lawrence Tierney'),
(5190, 'LeVar Burton'),
(5191, 'Lea Thompson'),
(5200, 'Lee Golden'),
(5203, 'Lee McCain'),
(5208, 'Lee Ross'),
(5220, 'Leib Lensky'),
(5227, 'Leland Orser'),
(5233, 'Lennie Loftin'),
(5235, 'Lenny Montana'),
(5259, 'Leonard Rossiter'),
(5266, 'Leonardo DiCaprio'),
(5267, 'Leonid Kinskey'),
(5284, 'Leslie Schofield'),
(5285, 'Levani'),
(5296, 'Lexie Bigham'),
(5299, 'Liam Carney'),
(5305, 'Liisa Repo-Martell'),
(5323, 'Linda Hamilton'),
(5328, 'Linda Kaye'),
(5329, 'Linda Kerns'),
(5348, 'Lisa Freeman'),
(5350, 'Lisa Gay Hamilton'),
(5351, 'Lisa Jakub'),
(5361, 'Lisa Talerico'),
(5375, 'Lloyd L. Tolbert'),
(5395, 'Loren Dean'),
(5441, 'Louis Lombardi'),
(5445, 'Louisa  Marie (I)'),
(5446, 'Louisa Moritz'),
(5447, 'Louise Fletcher'),
(5488, 'Lyman Ward'),
(5501, 'M. Emmet Walsh'),
(5511, 'Madeleine Lebeau'),
(5512, 'Madeleine Stowe'),
(5514, 'Madge Ryan'),
(5525, 'Mae Whitman'),
(5535, 'Maia Brewton'),
(5537, 'Majel Barrett'),
(5540, 'Mal Whyte'),
(5544, 'Malcolm McDowell'),
(5547, 'Malcolm Storry'),
(5548, 'Malcolm Tierney'),
(5551, 'Mandy Patinkin'),
(5570, 'Marc Coppola'),
(5575, 'Marc McClure'),
(5610, 'Margaret Colin'),
(5618, 'Margaret Tyzack'),
(5624, 'Margery Mason'),
(5639, 'Maria de Medeiros'),
(5658, 'Marina Sirtis'),
(5684, 'Mark  Thompson (II)'),
(5691, 'Mark Boone Jr.'),
(5695, 'Mark Christopher Lawrence'),
(5703, 'Mark Hamill'),
(5717, 'Mark Matheisen'),
(5723, 'Mark Rolston'),
(5731, 'Mark Wheeler'),
(5734, 'Marla Sucharetza'),
(5739, 'Marlon Brando'),
(5746, 'Marshall R. Teague'),
(5758, 'Martin Ferrero'),
(5762, 'Martin Jarvis'),
(5766, 'Martin Murphy'),
(5769, 'Martin Serene'),
(5770, 'Martin Sheen'),
(5804, 'Mary Kate Schellhardt'),
(5811, 'Mary McDonnell'),
(5823, 'Marya Small'),
(5847, 'Matt Ross'),
(5864, 'Matthew Scurfield'),
(5892, 'Max Elliott Slade'),
(5894, 'Max Grodnchik'),
(5905, 'Meadow Williams'),
(5921, 'Mel Gibson'),
(5923, 'Mel Smith'),
(5960, 'Michael  Bates (I)'),
(5997, 'Michael Berryman'),
(5998, 'Michael Biehn'),
(6005, 'Michael Burgess'),
(6006, 'Michael Byrne'),
(6023, 'Michael Culver'),
(6031, 'Michael Dorn'),
(6037, 'Michael Ensign'),
(6054, 'Michael Gover'),
(6065, 'Michael J. Fox'),
(6068, 'Michael Jace'),
(6084, 'Michael Madsen'),
(6087, 'Michael Massee'),
(6100, 'Michael Palin'),
(6108, 'Michael Reid MacKay'),
(6123, 'Michael Sheard'),
(6127, 'Michael Sottile'),
(6140, 'Michael Winther'),
(6179, 'Miguel  Sandoval (I)'),
(6201, 'Mike Jolly'),
(6208, 'Mike Muscat'),
(6216, 'Miko Hughes'),
(6254, 'Mirron E. Willis'),
(6287, 'Morgan Freeman'),
(6289, 'Morgan Paull'),
(6291, 'Morgana King'),
(6297, 'Morton Kondracke'),
(6310, 'Mykelti Williamson'),
(6349, 'Nathan George'),
(6357, 'Neal McDonough'),
(6360, 'Ned Bellamy'),
(6364, 'Ned Vaughn'),
(6371, 'Neil Giuntoli'),
(6373, 'Neil Innes'),
(6376, 'Neil Summers'),
(6381, 'Nelson Mashita'),
(6390, 'Niall O''Brien'),
(6394, 'Nicholas Cascone'),
(6437, 'Nicolas Cage'),
(6453, 'Nikki Cox'),
(6467, 'Noel Evangelisti'),
(6482, 'Norman Alden'),
(6488, 'Norman Chancer'),
(6501, 'Norwich Duff'),
(6508, 'Obba Babatund'),
(6520, 'Oliver Maguire'),
(6593, 'Pat McNamara'),
(6598, 'Pat Roach'),
(6627, 'Patrick  Magee (I)'),
(6645, 'Patrick McGoohan'),
(6654, 'Patrick Stewart'),
(6665, 'Patti Yasutake'),
(6668, 'Patty Raya'),
(6670, 'Paul  Freeman (I)'),
(6674, 'Paul  Maxwell (I)'),
(6690, 'Paul Bartel'),
(6702, 'Paul Calderon'),
(6721, 'Paul Henreid'),
(6736, 'Paul Lazar'),
(6737, 'Paul LeClair'),
(6741, 'Paul Mantee'),
(6745, 'Paul McCrane'),
(6754, 'Paul Raczkowski'),
(6755, 'Paul Reiser'),
(6809, 'Pete Postlethwaite'),
(6816, 'Peter  Greene (I)'),
(6821, 'Peter  Mayhew (II)'),
(6834, 'Peter Brocco'),
(6837, 'Peter Bull'),
(6845, 'Peter Cook'),
(6848, 'Peter Crombie'),
(6850, 'Peter Cushing'),
(6851, 'Peter Dobson'),
(6861, 'Peter Falk'),
(6873, 'Peter Kent'),
(6879, 'Peter Lorre'),
(6891, 'Peter Mullan'),
(6902, 'Peter Schrum'),
(6904, 'Peter Sellers'),
(6906, 'Peter Stormare'),
(6924, 'Phil Kelly'),
(6938, 'Philip  Roth (II)'),
(6939, 'Philip  Stone (I)'),
(7006, 'Quentin Tarantino'),
(7010, 'R. Lee Ermey'),
(7022, 'Rachel Schadt'),
(7043, 'Ralph Fiennes'),
(7051, 'Ralph Peduto'),
(7060, 'Rance Howard'),
(7076, 'Randy Oglesby'),
(7079, 'Randy Quaid'),
(7081, 'Raphael Sbarge'),
(7095, 'Ray Hassett'),
(7100, 'Ray McKinnon'),
(7112, 'Raymond Coulthard'),
(7117, 'Raymond O''Connor'),
(7122, 'Read Morgan'),
(7130, 'Rebecca Jane Klingler'),
(7141, 'Reg E. Cathey'),
(7180, 'Ricco Ross'),
(7183, 'Rich Turner'),
(7203, 'Richard Attenborough'),
(7219, 'Richard Bright'),
(7251, 'Richard Graham'),
(7265, 'Richard Kiley'),
(7268, 'Richard L. Duran'),
(7270, 'Richard Le Parmentier'),
(7271, 'Richard Leaf'),
(7283, 'Richard Oldfield'),
(7285, 'Richard Portnow'),
(7291, 'Richard Roundtree'),
(7294, 'Richard Schiff'),
(7297, 'Richard Speight Jr.'),
(7336, 'Rick Warner'),
(7380, 'Robert  Beatty (I)'),
(7382, 'Robert  Carlyle (I)'),
(7394, 'Robert  Patrick (I)'),
(7432, 'Robert Duvall'),
(7444, 'Robert Haley'),
(7453, 'Robert J. Stephenson'),
(7462, 'Robert Krantz'),
(7472, 'Robert Loggia'),
(7492, 'Robert Picardo'),
(7502, 'Robert Ruth'),
(7522, 'Robert Winley'),
(7547, 'Robin Wright'),
(7556, 'Rocky Taylor'),
(7577, 'Roger Corman'),
(7592, 'Rohn Thomas'),
(7600, 'Ron  Rondell (II)'),
(7603, 'Ron  Young (I)'),
(7612, 'Ron Donachie'),
(7624, 'Ron Pitts'),
(7633, 'Ron Vawter'),
(7640, 'Ronald Lacey'),
(7653, 'Rosalind Ayres'),
(7657, 'Rosanna Arquette'),
(7676, 'Ross Bagley'),
(7697, 'Rozwill Young'),
(7705, 'Rudy Bond'),
(7717, 'Rupert Vansittart'),
(7735, 'Rutger Hauer'),
(7746, 'Ryan Holihan'),
(7753, 'S. Epatha Merkerson'),
(7756, 'Sachi Parker'),
(7765, 'Sally Field'),
(7767, 'Sally Kinghorne'),
(7770, 'Sally Wingert'),
(7775, 'Sam  Anderson (I)'),
(7777, 'Sam Bottoms'),
(7788, 'Sam Neill'),
(7800, 'Sam Whipple'),
(7810, 'Samuel L. Jackson'),
(7856, 'Sayed Badreya'),
(7857, 'Scatman Crothers'),
(7874, 'Scott Glenn'),
(7892, 'Sean  Sullivan (I)'),
(7896, 'Sean Connery'),
(7903, 'Sean McGinley'),
(7913, 'Sean Young'),
(7930, 'Shane Rimmer'),
(7933, 'Shannon Wilcox'),
(7937, 'Sharon Anderson'),
(7959, 'Shay Duffin'),
(7966, 'Sheila Raynor'),
(7968, 'Shelagh Fraser'),
(7975, 'Shelley Long'),
(7994, 'Shirley Henderson'),
(8011, 'Sigourney Weaver'),
(8015, 'Simon  Jones (I)'),
(8026, 'Simonetta Stefanelli'),
(8028, 'Siobhan Fallon'),
(8036, 'Slim Pickens'),
(8103, 'Stephen Baldwin'),
(8105, 'Stephen Bridgewater'),
(8131, 'Stephen Wesley Bridgewater'),
(8133, 'Sterling Hayden'),
(8139, 'Steve  Park (I)'),
(8148, 'Steve Buscemi'),
(8154, 'Steve Giannelli'),
(8173, 'Steve Rankin'),
(8175, 'Steve Reevis'),
(8186, 'Steven  Wright (I)'),
(8188, 'Steven Berkoff'),
(8229, 'Stuart Rudin'),
(8273, 'Susan Vidler'),
(8288, 'Suzy Amis'),
(8295, 'Sydney Greenstreet'),
(8296, 'Sydney Lassick'),
(8319, 'Talia Shire'),
(8322, 'Tam White'),
(8348, 'Ted Grossman'),
(8351, 'Ted Levine'),
(8353, 'Ted Markland'),
(8366, 'Tere Livrano'),
(8382, 'Terrence Evans'),
(8388, 'Terry Forrestal'),
(8390, 'Terry Gilliam'),
(8391, 'Terry Jones'),
(8397, 'Terry Richards'),
(8414, 'Thom Barry'),
(8418, 'Thomas  Crawford (I)'),
(8426, 'Thomas F. Duffy'),
(8427, 'Thomas F. Wilson'),
(8435, 'Thomas J. Hageboeck'),
(8472, 'Tim Kelleher'),
(8481, 'Tim Robbins'),
(8483, 'Tim Roth'),
(8530, 'Todd Hallowell'),
(8532, 'Todd Louiso'),
(8538, 'Tom  Mason (I)'),
(8548, 'Tom  Wood (II)'),
(8562, 'Tom Hanks'),
(8597, 'Tom Skerritt'),
(8601, 'Tom Towles'),
(8612, 'Tommy Flanagan'),
(8616, 'Tommy Lafitte'),
(8621, 'Tommy Thomas'),
(8656, 'Tony Giorgio'),
(8680, 'Tony Simotes'),
(8683, 'Tony Todd'),
(8684, 'Tony Vogel'),
(8691, 'Tracey Walter'),
(8697, 'Tracy Reed'),
(8698, 'Tracy Reiner'),
(8720, 'Tudor Sherrard'),
(8725, 'Tutte Lemkow'),
(8735, 'Uma Thurman'),
(8757, 'Van Ling'),
(8761, 'Vanessa J. Wells'),
(8767, 'Venessia Valentino'),
(8777, 'Veronica Cartwright'),
(8781, 'Vic Tablian'),
(8792, 'Victor Garber'),
(8832, 'Vincent Schiavelli'),
(8838, 'Ving Rhames'),
(8850, 'Vito D''Ambrosio'),
(8851, 'Vito Scotti'),
(8857, 'Vivica A. Fox'),
(8875, 'Wallace Shawn'),
(8899, 'Walter von Huene'),
(8908, 'Warren Clarke'),
(8911, 'Warren Keith'),
(8920, 'Wayne A. Evenson'),
(8924, 'Wayne Duvall'),
(8928, 'Wayne Knight'),
(8935, 'Wendie Jo Sperber'),
(8946, 'Wendy L. Walsh'),
(8961, 'Whitby Hertford'),
(8971, 'Will Hare'),
(8978, 'Will Sampson'),
(8979, 'Will Smith'),
(8983, 'Willem Dafoe'),
(9005, 'William Duell'),
(9009, 'William Forsythe'),
(9014, 'William H. Macy'),
(9017, 'William Hootkins'),
(9018, 'William Hope'),
(9029, 'William Masson'),
(9040, 'William Redfield'),
(9043, 'William Sadler'),
(9044, 'William Sanderson'),
(9060, 'Willie Garson'),
(9062, 'Willoughby Gray'),
(9069, 'Wolf Kahler'),
(9081, 'Xander Berkeley'),
(9087, 'Yaphet Kotto');

-- --------------------------------------------------------

--
-- Structure de la table `Categorie`
--

CREATE TABLE IF NOT EXISTS `Categorie` (
  `catId` int(11) NOT NULL,
  `nomCat` varchar(250) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `Categorie`
--

INSERT INTO `Categorie` (`catId`, `nomCat`) VALUES
(1, 'Animaux'),
(2, 'Bouffe'),
(3, 'Monuments');

-- --------------------------------------------------------

--
-- Structure de la table `Disponibilite`
--

CREATE TABLE IF NOT EXISTS `Disponibilite` (
  `idJour` int(11) NOT NULL,
  `idHebergement` int(11) NOT NULL,
  `jour` int(11) NOT NULL,
  `nbPlace` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Disponibilite`
--

INSERT INTO `Disponibilite` (`idJour`, `idHebergement`, `jour`, `nbPlace`) VALUES
(1, 1, 17, 30),
(2, 1, 18, 27),
(3, 1, 19, 26),
(4, 1, 20, 18),
(5, 1, 21, 39),
(6, 1, 22, 49),
(7, 1, 23, 24),
(8, 1, 24, 22),
(9, 1, 25, 53),
(10, 1, 26, 33),
(11, 1, 27, 0),
(12, 1, 28, 10),
(13, 2, 17, 20),
(14, 2, 18, 20),
(15, 2, 19, 20),
(16, 2, 20, 0),
(17, 2, 21, 0),
(18, 2, 22, 0),
(19, 2, 23, 0),
(20, 2, 24, 0),
(21, 2, 25, 0),
(22, 2, 26, 0),
(23, 2, 27, 0),
(24, 2, 28, 0),
(25, 3, 17, 20),
(26, 3, 18, 25),
(27, 3, 19, 25),
(28, 3, 20, 0),
(29, 3, 21, 29),
(30, 3, 22, 0),
(31, 3, 23, 0),
(32, 3, 24, 0),
(33, 3, 25, 0),
(34, 3, 26, 0),
(35, 3, 27, 0),
(36, 3, 28, 0),
(37, 4, 17, 0),
(38, 4, 18, 20),
(39, 4, 19, 30),
(40, 4, 20, 20),
(41, 4, 21, 0),
(42, 4, 22, 0),
(43, 4, 23, 0),
(44, 4, 24, 0),
(45, 4, 25, 0),
(46, 4, 26, 0),
(47, 4, 27, 0),
(48, 4, 28, 0);

-- --------------------------------------------------------

--
-- Structure de la table `Hebergement`
--

CREATE TABLE IF NOT EXISTS `Hebergement` (
  `typeHebergement` varchar(60) NOT NULL,
  `adresseHebergement` varchar(120) NOT NULL,
  `codePostalHebergement` varchar(60) NOT NULL,
  `nomHebergement` varchar(60) NOT NULL,
  `idHebergement` int(11) NOT NULL,
  `idUtilisateurs` int(11) NOT NULL,
  `Services` varchar(120) NOT NULL,
  `image` varchar(120) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Hebergement`
--

INSERT INTO `Hebergement` (`typeHebergement`, `adresseHebergement`, `codePostalHebergement`, `nomHebergement`, `idHebergement`, `idUtilisateurs`, `Services`, `image`) VALUES
('Villa', '1, rue de la technologie', '69100', 'Cézanne', 1, 1, ' Bar, Restaurant, ', 'image1.png'),
('Villa', '12 résidence de la mer', '42340', 'La dorade', 2, 1, ' Petit-déjeuner, Coiffeur, ', 'image2.png'),
('Hôtel', '24 rue du sel fin', '23945', 'La playa', 3, 1, ' Bar, Restaurant, Coiffeur, ', 'image4.png'),
('Hôtel', '12 rue de la technologie', '11111', 'Tiago', 4, 1, ' Bar, Restaurant, ', 'image6.png');

-- --------------------------------------------------------

--
-- Structure de la table `Ingredient`
--

CREATE TABLE IF NOT EXISTS `Ingredient` (
  `IDINGREDIENT` int(3) NOT NULL,
  `NOMINGREDIENT` varchar(20) NOT NULL,
  `APPORTCAL` int(3) NOT NULL,
  `PRIX` int(2) NOT NULL,
  `typeIngredient` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Ingredient`
--

INSERT INTO `Ingredient` (`IDINGREDIENT`, `NOMINGREDIENT`, `APPORTCAL`, `PRIX`, `typeIngredient`) VALUES
(1, 'PATE', 100, 1, 'Feculent'),
(2, 'STEAK HACHE', 204, 3, 'VPO'),
(3, 'SAUCE TOMATE', 29, 1, 'LegFru'),
(4, 'EMMENTAL', 380, 2, 'ProLai'),
(5, 'THON', 118, 4, 'VPO'),
(6, 'OEUF', 155, 3, 'VPO'),
(7, 'LAIT', 42, 2, 'VPO'),
(8, 'CHAPELURE', 395, 2, 'Feculent'),
(9, 'FARINE', 364, 1, 'Feculent'),
(10, 'JAMBON', 135, 5, 'VPO'),
(11, 'FETA', 264, 3, 'ProLai'),
(12, 'TOMATE', 18, 1, 'LegFru'),
(13, 'CREVETTE', 94, 4, 'VPO'),
(14, 'AVOCAT', 220, 4, 'LegFru'),
(15, 'YAOURT', 59, 1, 'ProLai'),
(16, 'OIGNON', 40, 2, 'LegFru'),
(17, 'PIMENT', 40, 2, 'Condiment'),
(18, 'POMME DE TERRE', 77, 2, 'LegFru'),
(19, 'CHEVRE', 364, 2, 'ProLai'),
(20, 'POIVRE', 251, 2, 'Condiment'),
(21, 'SEL', 0, 2, 'Condiment');

-- --------------------------------------------------------

--
-- Structure de la table `Recette`
--

CREATE TABLE IF NOT EXISTS `Recette` (
  `IDRECETTE` int(3) NOT NULL,
  `NOMRECETTE` varchar(30) DEFAULT NULL,
  `INGREDIENT1` varchar(20) DEFAULT NULL,
  `INGREDIENT2` varchar(20) DEFAULT NULL,
  `INGREDIENT3` varchar(20) DEFAULT NULL,
  `INGREDIENT4` varchar(20) DEFAULT NULL,
  `INGREDIENT5` varchar(20) DEFAULT NULL,
  `DEFINITION` text NOT NULL,
  `DUREE` int(3) NOT NULL,
  `ORIGINE` varchar(15) NOT NULL,
  `VALIDER` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Recette`
--

INSERT INTO `Recette` (`IDRECETTE`, `NOMRECETTE`, `INGREDIENT1`, `INGREDIENT2`, `INGREDIENT3`, `INGREDIENT4`, `INGREDIENT5`, `DEFINITION`, `DUREE`, `ORIGINE`, `VALIDER`) VALUES
(1, 'PATE BOLOGNAISE', 'PATE', 'STEAK HACHE', 'SAUCE TOMATE', 'EMMENTAL', NULL, 'La recette repose sur une sauce tomate a la viande servie sur un lit de spaghettis avec une couche demmental rap', 20, 'ITALIE', NULL),
(2, 'CAKE AU THON', 'THON', 'OEUF', 'LAIT', 'CHAPELURE', NULL, '1 boite de thon\r\n3 oeufs\r\n240 ml de lait\r\n80 g de chapelure\r\n\r\nEmietter le thon dans un saladier. Ajouter les 3 oeufs, la chapelure et m?langer.\r\nAjouter le lait et m?langer. Saler et poivrer selon votre go?t. On peut aussi ajouter des herbes si on le désire.\r\nPlacer le tout dans un moule à cake non beurré et \r\ncuire au four à 175°C pendant 45 min\r\n', 50, 'EUROPE', NULL),
(3, 'QUICHE SANS FOND', 'OEUF', 'LAIT', 'FARINE', 'EMMENTAL', 'JAMBON', 'Mélanger tous les ingrédients.\r\nVerser dans un moule à cake.\r\nCuire 40 mn au four, à thermostat 6 ou 7 (200°C).\r\n', 45, 'FRANCE', NULL),
(4, 'CREVETTE A LA FETA', 'TOMATES', 'FETA', 'CREVETTES', NULL, NULL, '240 g de tomates pelées \r\n1 tranche de feta\r\n100 g de crevettes cuites décortiquées\r\nherbes de Provence\r\n\r\nCoupez la feta en petits carrés, mélanger le tout dans un plat et mettez au four durant 20 minutes environ à environ 200°C.\r\nEt voilà, cest déjà prêt! Servir avec du riz ou des pâtes.\r\n', 25, 'GRECE', NULL),
(5, 'GUACAMOLE AU YAOURT', 'AVOCAT', 'YAOURT', 'OIGNON', 'PIMENT', NULL, '1 avocat\r\n1 yaourt\r\n1 oignon\r\n1 piment rouge\r\n\r\nEplucher un avocat bien mur, le découper en petits morceaux et lécraser dans un bol. \r\nAjouter le yaourt nature et bien mélanger.\r\nCouper la tomate en tout petits dés et mélanger avec lavocat.\r\nCouper finement un oignon et mélanger.\r\nSelon votre goût, vous pouvez rajouter des tout petits morceaux de piments rouges (attention pas trop quand-même !!!).\r\nAssaisonner selon votre goût de poivre et sel.\r\nA servir avec des chips mexicaines.', 10, 'MEXIQUE', NULL),
(6, 'TORTILLA', 'POMME DE TERRE', 'OEUF', 'OIGNON', NULL, NULL, '1 kg de pommes de terre\r\n8 œufs\r\nun gros oignon\r\n\r\nEplucher et découper les pommes de terre en rondelle de 1/2 cm dépaisseur environ.\r\nEplucher loignon et le couper en petits morceaux.\r\nMettre tous ces ingrédients dans la poêle. Celle-ci doit être remplie jusquà mi-hauteur.\r\nCouvrir dhuile dolive (il faut que toutes les pommes de terre baignent dans lhuile). Couvrir la poêle dun couvert (important : il faut que les pommes de terre cuisent à la fois dans lhuile et à la vapeur).\r\nUne fois les pommes de terre bien cuites (il faut que la pointe dun couteau puisse sy enfoncer sans peine), vider lhuile dolive dans un récipient. \r\nVerser les pommes de terre et oignon dans un saladier. Ajouter les œufs battus, salés et poivrés. Il faut quil y ait suffisamment dœufs pour que la tortilla soit bien liée. \r\nMélanger doucement (ne pas faire de la purée de pommes de terre !) \r\nRemettre dans la poêle 2 - 3 mm dhuile dolive et y verser le mélange. Faire cuire à feu doux un côté de la tortilla.\r\nUne fois le fond bien doré, retourner la tortilla sur une assiette. Cette opération est délicate car les œufs sur le dessus ne sont pas cuits et lhuile dans le fond est très chaude.\r\nRemettre un peu dhuile dans la poêle si nécessaire et y faire glisser la tortilla, afin de faire dorer lautre côté.\r\nUne fois les deux côtés dorés, glisser la tortilla dans une assiette.\r\n\r\n', 20, 'MEXIQUE', NULL),
(7, 'TOMATES AU CHEVRE FRAIS', 'TOMATES', 'CHEVRE', 'POIVRE', NULL, NULL, '4 grosses tomates à chair ferme\r\n2 petits chèvres frais\r\nPoivre\r\n\r\nEvider les tomates et conserver le chapeau. les remplir de chèvre, fermer avec le chapeau de la tomate.\r\nMettre à four moyen une vingtaine de minutes.\r\nServir avec une salade.\r\n\r\n', 25, 'FRANCE', NULL),
(8, 'OEUFS SOUFFLES AU GRUYERE', 'OEUF', 'GRUYERE', 'SEL', 'POIVRE', NULL, '1 œuf \r\n15 g de gruyère\r\nsel, poivre\r\n\r\nSéparer le blanc et le jaune de lœuf. \r\nMettre le blanc dans un bol, ajouter une pincée de sel, et le monter en neige. \r\nUne fois monté, creuser un puits dans le blanc, et glisser le jaune dedans. \r\nRâper le gruyère, et en saupoudrer le tout. Ajouter un peu de poivre moulu. \r\nFaire chauffer au four à 180°C (thermostat 6), jusquà ce que lœuf ait quasiment gonflé jusquau bord du bol.\r\n', 15, 'FRANCE', NULL),
(9, 'OEUF EN BRIOCHE', 'BRIOCHE', 'OEUF', 'LARDON', 'OIGNON', NULL, '1 brioche à tête évidée\r\n1 œuf\r\ngarniture au choix\r\n\r\nPréchauffer le four à 210°C (th 7).\r\nEvider la brioche, réserver la tête. \r\nMettre un peu de garniture au fond : oignons et lardons par exemple. \r\nCasser lœuf  dans la brioche, saler et poivrer.\r\nRemettre le chapeau.\r\nMettre au four 15 minutes environ, jusqua? ce que loeuf soit cuit.', 19, 'FRANCE', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `RecettePropose`
--

CREATE TABLE IF NOT EXISTS `RecettePropose` (
  `IDRECETTE` int(11) NOT NULL,
  `NOMRECETTE` varchar(120) NOT NULL,
  `INGREDIENT1` varchar(120) NOT NULL,
  `INGREDIENT2` varchar(120) NOT NULL,
  `INGREDIENT3` varchar(120) NOT NULL,
  `INGREDIENT4` varchar(120) NOT NULL,
  `INGREDIENT5` varchar(120) NOT NULL,
  `DEFINITION` blob NOT NULL,
  `DUREE` int(11) NOT NULL,
  `ORIGINE` varchar(60) NOT NULL,
  `PHOTO` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `RecettePropose`
--

INSERT INTO `RecettePropose` (`IDRECETTE`, `NOMRECETTE`, `INGREDIENT1`, `INGREDIENT2`, `INGREDIENT3`, `INGREDIENT4`, `INGREDIENT5`, `DEFINITION`, `DUREE`, `ORIGINE`, `PHOTO`) VALUES
(1, 'La soupe de mamie', 'lolol', 'lolol', 'lolol', 'lolol', 'lolol', 0x6c6f6c6c6f6c6f6c, 5, 'lololo', '');

-- --------------------------------------------------------

--
-- Structure de la table `Reservation`
--

CREATE TABLE IF NOT EXISTS `Reservation` (
  `idReservation` int(11) NOT NULL,
  `idVIP` int(11) DEFAULT NULL,
  `idHebergement` int(11) NOT NULL,
  `dateDebutReservation` int(11) NOT NULL,
  `dateFinReservation` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Reservation`
--

INSERT INTO `Reservation` (`idReservation`, `idVIP`, `idHebergement`, `dateDebutReservation`, `dateFinReservation`) VALUES
(10, 8, 1, 18, 21),
(11, 9, 1, 19, 27),
(12, 10, 1, 18, 21);

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `USERID` int(11) NOT NULL DEFAULT '0',
  `LOGIN` varchar(20) NOT NULL,
  `PASS` varchar(20) NOT NULL,
  `NOM` varchar(20) NOT NULL,
  `MAIL` varchar(120) NOT NULL,
  `STATUT` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `User`
--

INSERT INTO `User` (`USERID`, `LOGIN`, `PASS`, `NOM`, `MAIL`, `STATUT`) VALUES
(2, 'Bob', '1234', 'Bob', 'bob@hotmail.com', 'Membre'),
(1, 'Titeuf', '1234', 'Dicquemare', 'tdicquemare@gmail.com', 'Admin'),
(3, 'Patrick', '4567', 'Patrick', 'patrick@gmail.ocm', 'Membre');

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateur`
--

CREATE TABLE IF NOT EXISTS `Utilisateur` (
  `idUtilisateurs` int(11) NOT NULL,
  `typeUtilisateur` varchar(32) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(32) NOT NULL,
  `Pseudo` varchar(32) NOT NULL,
  `Pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Utilisateur`
--

INSERT INTO `Utilisateur` (`idUtilisateurs`, `typeUtilisateur`, `nom`, `prenom`, `Pseudo`, `Pass`) VALUES
(1, 'gerant', 'Eponge', 'Patrick', 'Bob', '1234'),
(2, 'membre', 'Etoile', 'Laurent', 'Patrick', '4321');

-- --------------------------------------------------------

--
-- Structure de la table `VIP`
--

CREATE TABLE IF NOT EXISTS `VIP` (
  `idVIP` int(11) NOT NULL,
  `nomVIP` varchar(32) NOT NULL,
  `typeVIP` varchar(32) NOT NULL,
  `numJury` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `VIP`
--

INSERT INTO `VIP` (`idVIP`, `nomVIP`, `typeVIP`, `numJury`) VALUES
(1, 'Paul', 'Jury', 1),
(2, 'Larisse', 'Jury', 2),
(3, 'Clara', 'Jury', 3),
(4, 'Romain', 'Jury', 4),
(5, 'Deslandres', 'Jury', 5),
(6, 'Morgane', 'Jury', 2),
(7, 'Balboa', 'Acteur', NULL),
(8, 'Bernard', 'Acteur', NULL),
(9, 'Bastien', 'Acteur', NULL),
(10, 'Tiagoo', 'Acteur', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `USERID` int(11) DEFAULT NULL,
  `LOGIN` varchar(20) NOT NULL,
  `PASS` varchar(20) NOT NULL,
  `NOM` varchar(20) NOT NULL,
  `MAIL` varchar(20) NOT NULL,
  `STATUT` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Actor`
--
ALTER TABLE `Actor`
  ADD PRIMARY KEY (`ActorID`);

--
-- Index pour la table `Categorie`
--
ALTER TABLE `Categorie`
  ADD PRIMARY KEY (`catId`);

--
-- Index pour la table `Hebergement`
--
ALTER TABLE `Hebergement`
  ADD PRIMARY KEY (`idHebergement`);

--
-- Index pour la table `Ingredient`
--
ALTER TABLE `Ingredient`
  ADD PRIMARY KEY (`IDINGREDIENT`);

--
-- Index pour la table `Recette`
--
ALTER TABLE `Recette`
  ADD PRIMARY KEY (`IDRECETTE`);

--
-- Index pour la table `RecettePropose`
--
ALTER TABLE `RecettePropose`
  ADD PRIMARY KEY (`IDRECETTE`);

--
-- Index pour la table `Reservation`
--
ALTER TABLE `Reservation`
  ADD PRIMARY KEY (`idReservation`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`USERID`);

--
-- Index pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD PRIMARY KEY (`idUtilisateurs`);

--
-- Index pour la table `VIP`
--
ALTER TABLE `VIP`
  ADD PRIMARY KEY (`idVIP`),
  ADD UNIQUE KEY `idVIP` (`idVIP`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Hebergement`
--
ALTER TABLE `Hebergement`
  MODIFY `idHebergement` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `Reservation`
--
ALTER TABLE `Reservation`
  MODIFY `idReservation` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `VIP`
--
ALTER TABLE `VIP`
  MODIFY `idVIP` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
