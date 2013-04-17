-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2013 at 09:12 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE IF NOT EXISTS `markers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=154 ;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
(1, 'Frankie Johnnie & Luigo Too', '939 W El Camino Real, Mountain View, CA', 37.386337, -122.085823),
(2, 'Amici''s East Coast Pizzeria', '790 Castro St, Mountain View, CA', 37.387138, -122.083237),
(3, 'Kapp''s Pizza Bar & Grill', '191 Castro St, Mountain View, CA', 37.393887, -122.078918),
(4, 'Round Table Pizza: Mountain View', '570 N Shoreline Blvd, Mountain View, CA', 37.402653, -122.079353),
(5, 'Tony & Alba''s Pizza & Pasta', '619 Escuela Ave, Mountain View, CA', 37.394012, -122.095528),
(6, 'Oregano''s Wood-Fired Pizza', '4546 El Camino Real, Los Altos, CA', 37.401726, -122.114647),
(7, 'Round Table Pizza: Sunnyvale-Mary-Central Expy', '415 N Mary Ave, Sunnyvale, CA', 37.390038, -122.042030),
(8, 'Giordano''s', '730 N Rush St, Chicago, IL', 41.895729, -87.625412),
(9, 'Filippi''s Pizza Grotto', '1747 India St, San Diego, CA', 32.723831, -117.168327),
(10, 'Pizzeria Paradiso', '2029 P St NW, Washington, DC', 38.909649, -77.045898),
(11, 'Tutta Bella Neapolitan Pizzera', '4918 Rainier Ave S, Seattle, WA', 47.557705, -122.284988),
(12, 'Touche Pasta Pizza Pool', '1425 NW Glisan St, Portland, OR', 45.526466, -122.685577),
(13, 'Piecora''s New York Pizza', '1401 E Madison St, Seattle, WA', 47.614006, -122.313988),
(14, 'Pagliacci Pizza', '550 Queen Anne Ave N, Seattle, WA', 47.623943, -122.356720),
(15, 'Zeeks Pizza - Phinney Ridge', '6000 Phinney Ave N, Seattle, WA', 47.672668, -122.354095),
(16, 'Old Town Pizza', '226 NW Davis St, Portland, OR', 45.524555, -122.672684),
(17, 'Zeeks Pizza - Belltown', '419 Denny Way, Seattle, WA', 47.618313, -122.348000),
(18, 'Escape From New York Pizza', '622 NW 23rd Ave, Portland, OR', 45.527103, -122.698509),
(19, 'Big Fred''s Pizza Garden', '1101 S 119th St, Omaha, NE', 41.248661, -96.098763),
(20, 'Old Chicago', '1111 Harney St, Omaha, NE', 41.256519, -95.930679),
(21, 'Sgt Peffer''s Cafe Italian', '1501 N Saddle Creek Rd, Omaha, NE', 41.273083, -95.987816),
(22, 'Mama''s Pizza', '715 N Saddle Creek Rd, Omaha, NE', 41.265884, -95.980682),
(23, 'Zio''s New York Style Pizzeria', '1213 Howard St, Omaha, NE', 41.255451, -95.932022),
(24, 'Zio''s New York Style Pizzeria', '7834 W Dodge Rd, Omaha, NE', 41.263248, -96.056396),
(25, 'La Casa Pizzaria', '4432 Leavenworth St, Omaha, NE', 41.252399, -95.979576),
(26, 'Lou Malnati''s Pizzeria', '439 N Wells St, Chicago, IL', 41.890347, -87.633926),
(27, 'Piece Restaurant', '1927 W North Ave, Chicago, IL', 41.910492, -87.676125),
(28, 'Connie''s Pizza Inc', '2373 S Archer Ave, Chicago, IL', 41.849213, -87.641678),
(29, 'Exchequer Restaurant', '226 S Wabash Ave, Chicago, IL', 41.879189, -87.626076),
(30, 'Coco''s By The Falls', '5339 Murray Street, Niagara Falls, Ontario', 43.083553, -79.082703),
(31, 'Pompei', '1531 W Taylor St, Chicago, IL', 41.869301, -87.664780),
(32, 'Lynn''s Paradise Cafe', '984 Barret Ave, Louisville, KY', 38.236931, -85.728539),
(33, 'Otto Restaurant Enoteca Pizza', '1 5th Ave, New York, NY', 40.732162, -73.996323),
(34, 'Grimaldi''s', '19 Old Fulton St, Brooklyn, NY', 40.702515, -73.993736),
(35, 'Lombardi''s', '32 Spring St, New York, NY', 40.721676, -73.995598),
(36, 'John''s Pizzeria', '278 Bleecker St, New York, NY', 40.731705, -74.003273),
(37, 'John''s Pizzeria', '260 W 44th St, New York, NY', 40.758072, -73.987740),
(38, 'Burger Joint', '2175 Broadway, New York, NY', 40.782398, -73.981003),
(39, 'Frank Pepe Pizzeria Napoletana', '157 Wooster St, New Haven, CT', 41.302803, -72.917046),
(40, 'Adrianne''s Pizza Bar', '54 Stone St, New York, NY', 40.704479, -74.010139),
(41, 'Pizzeria Regina: Regina Pizza', '11 1/2 Thacher St, Boston, MA', 42.365337, -71.056831),
(42, 'Upper Crust', '20 Charles St, Boston, MA', 42.356606, -71.069679),
(43, 'Bertucci''s Brick Oven Rstrnt', '4 Brookline Pl, Brookline, MA', 42.331917, -71.115311),
(44, 'Aquitaine', '569 Tremont St, Boston, MA', 42.343636, -71.072266),
(45, 'Bertucci''s Brick Oven Rstrnt', '43 Stanhope St, Boston, MA', 42.348297, -71.073250),
(46, 'Upper Crust', '286 Harvard St, Brookline, MA', 42.342857, -71.122314),
(47, 'Bertucci''s Brick Oven Rstrnt', '799 Main St, Cambridge, MA', 42.363258, -71.097214),
(48, 'Bertucci''s Brick Oven Rstrnt', '22 Merchants Row, Boston, MA', 42.359146, -71.055473),
(49, 'Vinnie Van Go-Go''s', '317 W Bryan St, Savannah, GA', 32.081154, -81.094994),
(50, 'Domino''s Pizza: Myrtle Beach', '1706 S Kings Hwy # A, Myrtle Beach, SC', 33.674881, -78.905144),
(51, 'East of Chicago Pizza Company', '3901 North Kings Highway Suite 1, Myrtle Beach, SC', 33.716099, -78.855583),
(52, 'Villa Tronco Italian Rstrnt', '1213 Blanding St, Columbia, SC', 34.008049, -81.036316),
(53, 'Mellow Mushroom Pizza Bakers', '11 W Liberty St, Savannah, GA', 32.074673, -81.093697),
(54, 'Andolinis Pizza', '82 Wentworth St, Charleston, SC', 32.782330, -79.934235),
(55, 'Mellow Mushroom Pizza Bakers', '259 E Broad St, Athens, GA', 33.957802, -83.374657),
(56, 'Bucks Pizza of Edisto Beach Inc', '114 Jungle Rd, Edisto Island, SC', 32.503971, -80.297951),
(57, 'Anthony''s Coal Fired Pizza', '2203 S Federal Hwy, Fort Lauderdale, FL', 26.094671, -80.136688),
(58, 'Giordano''s', '12151 S Apopka Vineland Rd, Orlando, FL', 28.389366, -81.506226),
(59, 'Pizza Rustica', '863 Washington Ave, Miami Beach, FL', 25.779058, -80.133110),
(60, 'Mama Jennie''s Italian Restaurant', '11720 Ne 2nd Ave, North Miami, FL', 25.882782, -80.194290),
(61, 'Anthony''s Coal Fired Pizza', '17901 Biscayne Blvd, Aventura, FL', 25.941116, -80.148827),
(62, 'Anthony''s Coal Fired Pizza', '4527 Weston Rd, Weston, FL', 26.065395, -80.362442),
(63, 'Mario the Baker Pizza & Italian Restaurant', '13695 W Dixie Hwy, North Miami, FL', 25.929741, -80.156090),
(64, 'Big Cheese Pizza', '8080 SW 67th Ave, Miami, FL', 25.696026, -80.301109),
(65, 'Ingleside Village Pizza', '2396 Ingleside Ave, Macon, GA', 32.853760, -83.657410),
(66, 'Ciao Bella Pizza Da Guglielmo', '29 Highway 98 E, Destin, FL', 30.395555, -86.512093),
(67, 'Papa John''s Pizza', '810 Russell Pkwy, Warner Robins, GA', 32.593910, -83.637077),
(68, 'Papa John''s Pizza: East Central Montgomery', '2525 Madison Ave, Montgomery, AL', 32.381123, -86.273033),
(69, 'Cici''s Pizza', '6268 Atlanta Hwy, Montgomery, AL', 32.382206, -86.190674),
(70, 'Papa John''s Pizza', '1210 E Jackson St, Thomasville, GA', 30.849129, -83.963425),
(71, 'Papa John''s Pizza', '711 N Westover Blvd # G, Albany, GA', 31.613970, -84.223083),
(72, 'Mellow Mushroom Pizza Bakers', '6100 Veterans Pkwy, Columbus, GA', 32.532078, -84.955894),
(73, 'Star Pizza', '2111 Norfolk St, Houston, TX', 29.732452, -95.411057),
(74, 'Star Pizza II', '77 Harvard St, Houston, TX', 29.770752, -95.396042),
(75, 'Brothers Pizzeria', '1029 Highway 6 N # 100, Houston, TX', 29.768337, -95.643593),
(76, '11th Street Cafe Inc', '748 E 11th St, Houston, TX', 29.790794, -95.388924),
(77, 'California Pizza Kitchen', '1705 Post Oak Blvd # A, Houston, TX', 29.750172, -95.461197),
(78, 'Collina''s Italian Cafe', '3835 Richmond Ave, Houston, TX', 29.732620, -95.438965),
(79, 'Barry''s Pizza & Italian Diner', '6003 Richmond Ave, Houston, TX', 29.731430, -95.484383),
(80, 'Mario''s Seawall Italian Restaurant', '628 Seawall Blvd, Galveston, TX', 29.304543, -94.772598),
(81, 'Campisi''s Egyptian Restaurant', '5610 E Mockingbird Ln, Dallas, TX', 32.836510, -96.771782),
(82, 'Fat Joe''s Pizza Pasta & Bar', '4721 W Park Blvd # 101, Plano, TX', 33.027054, -96.788910),
(83, 'Saccone''s Pizza', '13812 N Highway 183, Austin, TX', 29.569508, -97.964661),
(84, 'Fireside Pies', '2820 N Henderson Ave, Dallas, TX', 32.819763, -96.784149),
(85, 'Romeo''s', '1500 Barton Springs Rd, Austin, TX', 30.261526, -97.760025),
(86, 'Sandella''s Cafe', '5910 N Macarthur Blvd, Irving, TX', 32.892002, -96.961189),
(87, 'Mangia Chicago Stuffed Pizza', '3500 Guadalupe St, Austin, TX', 30.301542, -97.739113),
(88, 'Frank & Angie''s', '508 West Ave, Austin, TX', 30.269394, -97.750893),
(89, 'Pizzeria Bianco', '623 E Adams St, Phoenix, AZ', 33.449375, -112.065521),
(90, 'Sammy''s Woodfired Pizza', '770 4th Ave, San Diego, CA', 32.713383, -117.161179),
(91, 'Casa Bianca Pizza Pie', '1650 Colorado Blvd, Los Angeles, CA', 34.139160, -118.204605),
(92, 'Parkway Grill', '510 S Arroyo Pkwy, Pasadena, CA', 34.137005, -118.147301),
(93, 'California Pizza Kitchen', '330 S Hope St, Los Angeles, CA', 34.053329, -118.252686),
(94, 'B J''s Pizza & Grill', '200 Main St # 101, Huntington Beach, CA', 33.658058, -118.001099),
(95, 'B J''s Restaurant & Brewhouse', '280 S Coast Hwy, Laguna Beach, CA', 33.542091, -117.783516),
(96, 'Beau Jo''s Pizza', '2710 S Colorado Blvd, Denver, CO', 39.667343, -104.940704),
(97, 'Pasquini''s Pizzeria', '1310 S Broadway, Denver, CO', 39.692825, -104.987465),
(98, 'Fargos Pizza Co', '2910 E Platte Ave, Colorado Springs, CO', 38.839848, -104.774422),
(99, 'Old Chicago', '1415 Market St, Denver, CO', 39.748177, -105.000504),
(100, 'Sink', '1165 13th St, Boulder, CO', 40.008209, -105.276237),
(101, 'Ligori''s Pizza & Pasta', '4421 Harrison Blvd, Ogden, UT', 41.182732, -111.949196),
(102, 'Old Chicago', '1102 Pearl St, Boulder, CO', 40.017590, -105.280991),
(103, 'Boston''s Restaurant & Sports', '620 E Disk Dr, Rapid City, SD', 44.106937, -103.205223),
(104, 'Chuck E Cheese''s Pizza', '100 24th St W # B, Billings, MT', 45.771355, -108.576286),
(105, 'Space Aliens Grill & Bar', '1304 E Century Ave, Bismarck, ND', 46.838081, -100.771736),
(106, '2nd Street Bistro', '123 North 2nd Street, Livingston, MT', 45.661015, -110.561424),
(107, 'Domino''s Pizza', '1524 S Broadway # 1, Minot, ND', 48.219658, -101.296036),
(108, 'American Classic Pizzeria', '1744 Grand Ave, Billings, MT', 45.784119, -108.560204),
(109, 'Godfather''s Pizza', '905 Main St, Billings, MT', 45.815079, -108.470757),
(110, 'Papa John''s Pizza', '605 Main St, Billings, MT', 45.810223, -108.472122),
(111, 'Aardvark Pizza & Sub', '304A Caribou St, Banff, AB', 51.176487, -115.570747),
(112, 'Jasper Pizza Place', '402 Connaught Dr, Jasper, AB', 52.879086, -118.079315),
(113, 'Odyssey Pizza & Steak House', '3-3814 Bow Trail SW, Calgary, AB', 51.045235, -114.141251),
(114, 'Basil''s Pizza', '2118 33 Avenue SW, Calgary, AB', 51.023979, -114.109901),
(115, 'Castle Pizza & Donair', '7724 Elbow Drive SW, Calgary, AB', 50.984497, -114.083153),
(116, 'Santa Lucia Italian Restaurant', '714 8 St, Canmore, AB', 51.089195, -115.358734),
(117, 'Tops Pizza & Steak House No 3', '7-5602 4 Street NW, Calgary, AB', 51.101204, -114.071457),
(118, 'Evvia Restaurant', '837 Main St, Canmore, AB', 51.089176, -115.361771),
(119, 'D&#39;Bronx', '3904 Bell St, Kansas City, MO', 39.057182, -94.606102),
(120, 'Cicero''s Restaurant & Entrtnmt', '6691 Delmar Blvd, St Louis, MO', 38.656307, -90.308441),
(121, 'Hideaway Pizza', '6616 N Western Ave, Oklahoma City, OK', 35.539116, -97.529762),
(122, 'Fortel''s Pizza Den', '7932 Mackenzie Rd, St Louis, MO', 38.566441, -90.320793),
(123, 'Hideaway Pizza', '7877 E 51st St, Tulsa, OK', 36.089897, -95.889244),
(124, 'Farotto''s Catering', '9525 Manchester Rd, Webster Groves, MO', 38.609325, -90.364433),
(125, 'California Pizza Kitchen', '1493 Saint Louis Galleria, St Louis, MO', 38.633614, -90.345947),
(126, 'D''Bronx', '2450 Grand Blvd # 124, Kansas City, MO', 39.082722, -94.581779),
(127, 'Giuseppe''s Depot Restaurant', '10 S Sierra Madre St, Colorado Springs, CO', 38.834549, -104.828300),
(128, 'Old Chicago', '1415 Market St, Denver, CO', 39.748177, -105.000504),
(129, 'Brick Oven Restaurant', '111 E 800 N, Provo, UT', 40.244492, -111.656319),
(130, 'Zachary''s Chicago Pizza', '5801 College Ave, Oakland, CA', 37.846180, -122.251953),
(131, 'Zachary''s Chicago Pizza', '1853 Solano Ave, Berkeley, CA', 37.891407, -122.278427),
(132, 'Cheese Board Pizza', '1512 Shattuck Ave, Berkeley, CA', 37.879974, -122.269272),
(133, 'Goat Hill Pizza', '300 Connecticut St, San Francisco, CA', 37.762432, -122.397614),
(134, 'Tommaso Ristorante Italiano', '1042 Kearny St, San Francisco, CA', 37.797386, -122.405373),
(135, 'Little Star Pizza LLC', '846 Divisadero St, San Francisco, CA', 37.777519, -122.438217),
(136, 'Pauline''s Pizza', '260 Valencia, San Francisco, CA', 37.768726, -122.422241),
(137, 'Villa Romana Pizzeria & Rstrnt', '731 Irving St, San Francisco, CA', 37.764072, -122.465584),
(138, 'Amici''s East Coast Pizzeria', '69 E 3rd Ave, San Mateo, CA', 37.563896, -122.324722),
(139, 'Amici''s East Coast Pizzeria', '226 Redwood Shores Pkwy, Redwood City, CA', 37.520515, -122.252258),
(140, 'North Beach Pizza', '240 E 3rd Ave, San Mateo, CA', 37.565327, -122.322639),
(141, 'Patxi''s Chicago Pizza', '441 Emerson St, Palo Alto, CA', 37.445148, -122.163551),
(142, 'Pizz''a Chicago', '4115 El Camino Real, Palo Alto, CA', 37.414104, -122.126221),
(143, 'California Pizza Kitchen', '531 Cowper St, Palo Alto, CA', 37.448074, -122.158813),
(144, 'Windy City Pizza', '35 Bovet Rd, San Mateo, CA', 37.551563, -122.314522),
(145, 'Applewood Pizza 2 Go', '1001 El Camino Real, Menlo Park, CA', 37.452965, -122.181725),
(146, 'Pizza Antica', '334 Santana Row # 1065, San Jose, CA', 37.321793, -121.947739),
(147, 'Pizz''a Chicago', '155 W San Fernando St, San Jose, CA', 37.333279, -121.891678),
(148, 'House of Pizza', '527 S Almaden Ave, San Jose, CA', 37.326351, -121.888168),
(149, 'Amici''s East Coast Pizzeria', '225 W Santa Clara St, San Jose, CA', 37.334702, -121.894043),
(150, 'Fiorillo''s Restaurant', '638 El Camino Real, Santa Clara, CA', 37.354603, -121.942574),
(151, 'Tony & Alba''s Pizza & Pasta', '3137 Stevens Creek Blvd, San Jose, CA', 37.323296, -121.951645),
(152, 'Giorgio''s', '1445 Foxworthy Ave, San Jose, CA', 37.274647, -121.892891),
(153, 'Round Table Pizza', '4302 Moorpark Ave, San Jose, CA', 37.315903, -121.977928);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
