-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 04:59 PM
-- Server version: 8.0.28
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pig`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8 '),
(2, 'sabelo', 'sabelo12345');

-- --------------------------------------------------------

--
-- Table structure for table `blogdata`
--

CREATE TABLE `blogdata` (
  `blID` int NOT NULL,
  `blTitle` varchar(2555) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `blText` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `blLink` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogdata`
--

INSERT INTO `blogdata` (`blID`, `blTitle`, `blText`, `blLink`) VALUES
(1, 'Livestock Wealth ', 'Livestock Wealth Crowd farming is an agriculture crowdfunding platform that offers investors a variety of products to invest in  such as the Macadamia Nut Tree, Connected Gardens,  Free Range Ox and a Pregnant Cow. Crowd farming helps investors buy and own real profit-earning assets, helping farmers grow and maintain assets until they are ready for the market. For more info you can click on the following link', 'https://youtu.be/05k5aT40M8o '),
(2, 'Food For Mzansi ', 'Food For Mzansi is a platform that unashamedly celebrates our South African SME farmers success stories. The platform also shares information on agricultural career paths and a whole lot more. For weekly farming inspirational stories, lifestyle and  tips and tricks for your farm you can visit. ', 'https://www.foodformzansi.co.za/ '),
(3, 'Civil Eats ', 'Civil Eats is a daily news source for critical thought about the South African food system. We publish stories that shift the conversation around sustainable agriculture in an effort to build economically and socially just for communities.', 'https://www.feedspot.com/infiniterss.php?_src=feed_title&followfeedid=839510&q=site:http%3A%2F%2Ffeeds.feedburner.com%2FCivilEats'),
(4, 'AgriFarming', 'You won’t have to bother about promoting the items because it’s a typical firm, which means you’ll be able to sell them quickly. It is an environmentally friendly company. Instead of using workers, you may improve dairy output through technology. The most profit may be made by properly planning, managing, and caring for your animals. As a result, you will have an excellent source of revenue.', 'https://www.feedspot.com/infiniterss.php?_src=feed_title&followfeedid=4990091&q=site:https%3A%2F%2Fwww.agrifarming.in%2Ffeed'),
(5, 'FARMS. Com', 'Each day, our website, Farms.com, welcomes up to 7000 farmers and agri-business professionals helping them to find the latest agriculture information, farming news, commentaries, weather, auctions, markets, & new products information.', 'https://www.feedspot.com/infiniterss.php?_src=feed_title&followfeedid=4504816&q=site:https%3A%2F%2Fwww.farms.com%2FPortals%2F_default%2FRSS_Portal%2FFeatured_All.xml'),
(6, 'Real Agriculture ', 'Real Agriculture is focused on the issues that are impacting agriculture. Our site is focused on getting you the opinions on the issues so that you not only get the news but the insight into what the news means to your business. Whether you are a farmer, employed in industry, or government we have content that is applicable to you and your business.', 'https://www.feedspot.com/infiniterss.php?_src=feed_title&followfeedid=1249840&q=site:https%3A%2F%2Fwww.realagriculture.com%2Ffeed%2F'),
(7, 'AgDaily', 'DAILY develops smart, engaging, and innovative content for production farming and rural living and is AGDAILY develops smart, engaging, and innovative content for production farming and rural living.', 'https://www.feedspot.com/infiniterss.php?_src=feed_title&followfeedid=5362118&q=site:https%3A%2F%2Fwww.agdaily.com%2Ffeed%2F'),
(8, 'Successful Farming ', 'Successful Farming is for families who make farming and ranching their business. Find the latest ag news, including updates on farm policy, business, machinery, technology, crop news, livestock updates, and more.', 'https://www.feedspot.com/infiniterss.php?_src=feed_title&followfeedid=5362130&q=site:https%3A%2F%2Frss2.feedspot.com%2Fhttps%3A%2F%2Fwww.agriculture.com%2Fnews%3Fcontext%3D1750355833'),
(9, 'AgWeek', 'Agweek is your top source for ag news and information, farming trends, issues, weather, policies, market, crop details, and more.', 'https://www.feedspot.com/infiniterss.php?_src=feed_title&followfeedid=5362127&q=site:https%3A%2F%2Fwww.agweek.com%2Flatest%2Frss%2F');

-- --------------------------------------------------------

--
-- Table structure for table `breed`
--

CREATE TABLE `breed` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breed`
--

INSERT INTO `breed` (`id`, `name`) VALUES
(4, 'Abyssinian Shorthorned Zebu'),
(12, 'Abergele'),
(11, 'Aberdeen Angus'),
(14, 'Belgian Red Pied'),
(15, 'Brangus'),
(16, 'Chillingham cattle'),
(17, 'Drakensberger'),
(18, 'Gangatiri'),
(19, 'Irish Moiled'),
(20, 'Maronesa');

-- --------------------------------------------------------

--
-- Table structure for table `pigs`
--

CREATE TABLE `pigs` (
  `id` int NOT NULL,
  `pigno` varchar(255) NOT NULL,
  `breed_id` int NOT NULL,
  `Breed` mediumtext NOT NULL,
  `weight` varchar(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `gender` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `arrived` varchar(10) NOT NULL,
  `Price` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `remark` text NOT NULL,
  `health_status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pigs`
--

INSERT INTO `pigs` (`id`, `pigno`, `breed_id`, `Breed`, `weight`, `img`, `gender`, `arrived`, `Price`, `remark`, `health_status`) VALUES
(3, '9465', 9465, 'Vegetable', '5', 'uploadfolder/carrots.jpg', 'Not Applicable', '2022-03-10', 'R29.99', 'Carrots', 'Not Applicable'),
(4, '660', 660, '16', '400KG', 'uploadfolder/cattle pics.jpg', 'male', '2022-02-01', 'R11 000', 'There are different types of cows with different purposes; there are dairy cattle, beef cattle and work cattle called oxen/ bullocks. Depending on the breed, a mature bull weighs about 450-1,800kg and a cow 360-1,100kg. Males retained for beef production are usually castrated to make them more docile on the range.', 'active'),
(5, '858', 858, 'Not Applicable', '112KG', 'uploadfolder/pgs.jpg', 'female', '2021-10-07', 'R1300', 'Pigs are stout-bodied, short-legged, omnivores mammals, with thick skin usually sparsely coated with short bristles. Their hooves have two functional and two nonfunctional digits. Pigs are farmed primarily for the production of meat, called pork. Pig’s bones, hide, and bristles are also used in production. ', 'active'),
(6, '2793', 2793, 'Not Applicable', '78KG', 'uploadfolder/shps.jpg', 'female', '2021-11-04', 'R2800', 'Sheep are used mostly for their fare to make clothes and their meat. An adult female sheep is called ewe, an intact male a ram, a castrated male a weather and a young sheep a lamb.', 'active'),
(7, '2793', 2793, 'Not Applicable', '78KG', 'uploadfolder/shps.jpg', 'female', '2021-11-04', 'R2800', 'Sheep are used mostly for their fare to make clothes and their meat. An adult female sheep is called ewe, an intact male a ram, a castrated male a weather and a young sheep a lamb.', 'active'),
(8, '7214', 7214, 'Not Applicable', '70KG', 'uploadfolder/goat.jpg', 'male', '2021-02-09', 'R2000', 'The goat is lighter of build, has horns that arch backward, a short tail and straighter hair. Male goat is called bucks or billys, usually have a beard. Females are called does or nannys, and immature goats are called kids. ', 'active'),
(9, '5024', 5024, 'Not Applicable', '5KG', 'uploadfolder/chckn.jpg', 'female', '2021-06-09', 'R80', 'Chickens are undoubtedly the most ubiquitous and abundant species of domestic life stock.in intensive systems they tend to be raised either for eggs (layer) or meat (broiler) but in small scale system they tend to be dual purpose. With short life cycle and potentially high feed conversion ratio chicken production can be rapidly increased to meet rising demand for animal source foods. They are consequently the fastest growing life stock sub-sector.', 'active'),
(10, '2873', 2873, 'Not Applicable', '50KG', 'uploadfolder/ftlizer.png', 'Not Applicable', '2022-03-08', 'R1000', 'As a leading importer, blender and retailer of a complete range granular, liquid and specialty fertilizers, we provide the correct fertilizer according to your specific requirements and preference. The product applies nutrition needed.', 'Not Applicable'),
(11, '5114', 5114, 'Not Applicable', '25KG', 'uploadfolder/f2.png', 'Not Applicable', '2021-09-29', 'R1800', 'The foliar fertilizer is specially formulated and growth stage specific to boost your crops to reveal only their best at each growth. Each pf the tailored formulations complements the macro and micro-nutritional requirements of the plant at each seasonal and climate stage.', 'Not Applicable'),
(12, '9097', 9097, 'Not Applicable', '7KG', 'uploadfolder/pts.jpg', 'Not Applicable', '2022-03-10', 'R39.99', 'Fresh Best Buy 7kg Potatoes ', 'Not Applicable'),
(13, '4809', 4809, 'Not Applicable', '6KG', 'uploadfolder/btnt.jpg', 'Not Applicable', '2022-03-16', 'R39.99', 'Butternut Large 6kg bag', 'Not Applicable'),
(14, '1402', 1402, 'Not Applicable', '10KG', 'uploadfolder/ons.jpg', 'Not Applicable', '2022-03-16', 'R69.99', 'Onions Large 10kg Bag first grade', 'Not Applicable'),
(15, '1402', 1402, 'Not Applicable', '10KG', 'uploadfolder/ons.jpg', 'Not Applicable', '2022-03-16', 'R69.99', 'Onions Large 10kg Bag first grade', 'Not Applicable'),
(16, '4682', 4682, 'Not Applicable', '500G', 'uploadfolder/bnns.jpg', 'Not Applicable', '2022-03-24', 'R15.99', 'Loose Bananas Per Kg ', 'Not Applicable'),
(17, '4248', 4248, 'Not Applicable', '1KG', 'uploadfolder/plms.jpg', 'Not Applicable', '2022-03-31', 'R16.99', 'Fresh Class 1 Plums Bag 1kg', 'Not Applicable'),
(18, '7713', 7713, 'Not Applicable', '5KG', 'uploadfolder/Appls.jpg', 'Not Applicable', '2022-04-28', 'R39.95', 'Nectarines Tray (+/- 10-15 per tray)', 'Not Applicable');

-- --------------------------------------------------------

--
-- Table structure for table `quarantine`
--

CREATE TABLE `quarantine` (
  `id` int NOT NULL,
  `pig_no` varchar(50) NOT NULL,
  `date_q` varchar(10) NOT NULL,
  `reason` text NOT NULL,
  `breed` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quarantine`
--

INSERT INTO `quarantine` (`id`, `pig_no`, `date_q`, `reason`, `breed`) VALUES
(2, 'pig-fms-938', '2022-03-10', 'Could not reproduce', 'Abyssinian Shorthorned Zebu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogdata`
--
ALTER TABLE `blogdata`
  ADD PRIMARY KEY (`blID`);

--
-- Indexes for table `breed`
--
ALTER TABLE `breed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pigs`
--
ALTER TABLE `pigs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quarantine`
--
ALTER TABLE `quarantine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogdata`
--
ALTER TABLE `blogdata`
  MODIFY `blID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `breed`
--
ALTER TABLE `breed`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pigs`
--
ALTER TABLE `pigs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `quarantine`
--
ALTER TABLE `quarantine`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
