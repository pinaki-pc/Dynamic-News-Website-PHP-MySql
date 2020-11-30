-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 09:18 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master_tbl`
--

CREATE TABLE `admin_master_tbl` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_master_tbl`
--

INSERT INTO `admin_master_tbl` (`id`, `name`, `surname`, `username`, `password`, `email`) VALUES
(1, 'Pianki', 'Chakraborty', 'pinaki006', 'pinaki006', 'pinaki@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `des` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `des`) VALUES
(1, 'Politics', 'pinaki update1'),
(2, 'Kolkata', 'update success.....'),
(3, 'Health', 'rgtertyer trtuty uiuiloilo ytjty rthjtrj tyujty.'),
(4, 'Technology', 'rgerg rgtr rtrhyutht tyujtu ui8o io98o io.rgerg rgtr rtrhyutht tyujtu ui8o io98o io.rgerg rgtr rtrhyutht tyujtu ui8o io98o io.rgerg rgtr rtrhyutht tyujtu ui8o io98o io.rgerg rgtr rtrhyutht tyujtu ui8o io98o io.rgerg rgtr rtrhyutht tyujtu ui8o io98o io.rgerg rgtr rtrhyutht tyujtu ui8o io98o io.rgerg rgtr rtrhyutht tyujtu ui8o io98o io.rgerg rgtr rtrhyutht tyujtu ui8o io98o io.rgerg rgtr rtrhyutht tyujtu ui8o io98o io.rgerg rgtr rtrhyutht tyujtu ui8o io98o io.rgerg rgtr rtrhyutht tyujtu ui8o io98o'),
(9, 'Business', 'Among the top Sensex gainers are Sun Pharma, Bharti Airtel, Infosys, TCS and RIL. Top laggards include IndusInd Bank, Axis Bank, Tata Steel, ICICI Bank and TechM. Of 30 Sensex shares, 25 were in the red.'),
(10, 'Sports', 'According to reports, Vikas was being brought to Kanpur from Ujjain and had to be produced at the court by 10 am. The vehicle carrying Dubey met with an accident and overturned. The police said that the gangster tried to take advantage of the situation and tried to escape with arms.'),
(11, 'Education', 'After questions were raised over the topics cut from the school syllabus by the CBSE, the Union Minister for Human Resource Development, Ramesh Pokhriyal has appealed to ‘leave politics out of education’.');

-- --------------------------------------------------------

--
-- Table structure for table `news_tbl`
--

CREATE TABLE `news_tbl` (
  `id` int(100) NOT NULL,
  `title` varchar(900) NOT NULL,
  `des` varchar(6000) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(100) NOT NULL,
  `thumbnail` varchar(300) NOT NULL,
  `admin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_tbl`
--

INSERT INTO `news_tbl` (`id`, `title`, `des`, `date`, `category`, `thumbnail`, `admin`) VALUES
(1, 'Sensex, Nifty Volatile On Weak Global Cues; Sun Pharma, Bharti Airtel, Infosys Top Gainers', 'Among the top Sensex gainers are Sun Pharma, Bharti Airtel, Infosys, TCS and RIL. Top laggards include IndusInd Bank, Axis Bank, Tata Steel, ICICI Bank and TechM. Of 30 Sensex shares, 25 were in the red.\r\nAmong the top Sensex gainers are Sun Pharma, Bharti Airtel, Infosys, TCS and RIL. Top laggards include IndusInd Bank, Axis Bank, Tata Steel, ICICI Bank and TechM. Of 30 Sensex shares, 25 were in the red.\r\nAmong the top Sensex gainers are Sun Pharma, Bharti Airtel, Infosys, TCS and RIL. Top laggards include IndusInd Bank, Axis Bank, Tata Steel, ICICI Bank and TechM. Of 30 Sensex shares, 25 wer\r\nAmong the top Sensex gainers are Sun Pharma, Bharti Airtel, Infosys, TCS and RIL. Top laggards include IndusInd Bank, Axis Bank, Tata Steel, ICICI Bank and TechM. Of 30 Sensex shares, 25 were in the red.\r\nAmong the top Sensex gainers are Sun Pharma, Bharti Airtel, Infosys, TCS and RIL. Top laggards include IndusInd Bank, Axis Bank, Tata Steel, ICICI Bank and TechM. Of 30 Sensex shares, 25 were in the red.\r\nAmong the top Sensex gainers are Sun Pharma, Bharti Airtel, Infosys, TCS and RIL. Top laggards include IndusInd Bank, Axis Bank, Tata Steel, ICICI Bank and TechM. Of 30 Sensex shares, 25 were in the red.\r\nAmong the top Sensex gainers are Sun Pharma, Bharti Airtel, Infosys, TCS and RIL. Top laggards include IndusInd Bank, Axis Bank, Tata Steel, ICICI Bank and TechM. Of 30 Sensex shares, 25 were in the red.\r\nAmong the top Sensex gainers are Sun Pharma, Bharti Airtel, Infosys, TCS and RIL. Top laggards include IndusInd Bank, Axis Bank, Tata Steel, ICICI Bank and TechM. Of 30 Sensex shares, 25 were in the red.\r\npinaki', '2020-07-10', 'Business', 'What-is-Nifty-and-Sensex-Stock-Market-Basics-For-Beginners-cover-1024x682.jpg', 'Pianki Chakraborty'),
(2, 'How strict custom rules on Indian ports will affect Chinas business', 'The government of India has ordered strict monitoring and physical customs check of the Chinese goods entering the Indian border through the seaport. From now on, each and every consignment will have to be checked and verified physically which has led to a huge backlog at Indian ports. These strict custom rules are sure to delay the delivery of Chinese products in the market and hence, will impact the business of the Chinese suppliers.', '2020-07-11', 'Business', 'India_China_flag_AFP_Photo.jpg', 'Pianki Chakraborty'),
(3, 'MP Board MPBSE To Announce Date For Class 10 Board Results Today; Check Important Details', 'MP Board 10th Result Date: The Madhya Pradesh Board of Secondary Education is going to announce the date of the result declaration for class 10th. Reports say, that the mark sheet will be given to students once the school reopens. The director of Madhya Pradesh Board of Secondary Education, Hemant Sharma said that no student will be failed this year.\r\nThe results were initially expected to be out in the first week of July, however, it will be announced today in the evening when MPBSE will announce the class 10th results. The board has asked students to keep a close eye on the website for any further updates.\r\n\r\nThis year around 11.5 lakh students appeared in the class 10th exam, which was halted due to the lockdown. The rising COVID-19 cases meant that the remaining exams which were to be conducted got cancelled, students will be marked on the exams they gave. According to The Indian Express Chief Minister Shivraj Singh Chouhan said, for the cancelled subjects, the students will get the remark pass on their mark sheets.\r\n\r\nClass 12th results are expected to be out by the third week of July. The pending exams were conducted for the class 12th students, which ended on June 16th.', '2020-07-11', 'Education', 'jpg (1).jpg', 'Pianki Chakraborty'),
(5, 'Covid-19 Cases In India Near 8 Lakh Grim Milestone With Record Spike Of Over 26K Fresh Cases In Last 24 Hours', 'According to the data, 4,95,513 out of total 7,93,802 patients have recovered while 2,76,685 remain active in the country. With the nation showing a health sign of recovery, the gap between the number of recovered cases and active cases has increased by two lakh.\r\n\r\nAmid the virus spreading like wild fire across the nation, the rate of recovery among the Covid-19 patients continues to increase and has touched 62.42 per cent. India remains the third worst-affected country from the pandemic after the United States and Brazil.\r\n\r\nMaharashtra continued to bag the unwanted pole position of the worst affected state with cases surging to 2,30,599 and 9,667 casualties so far, of which 417 occurred in the last 24 hours. Tamil Nadu retained the second spot with a total of 1,26,581 cases, including 1,765 deaths.\r\n\r\nThe national capital region continued to reel under the Covid19 attack with fresh 2,187 coronavirus cases and 45 deaths reported in the last 24 hours, taking the total tally to 1,07,051 cases and 3,258 deaths.', '2020-07-11', 'Health', 'jpg.jpg', 'Pianki Chakraborty'),
(6, 'Vikas Dubey Killed: The full story of encounter and the politics around it | With Sumit Awasthi', 'Notorious gangster Vikas Dubey was gunned down in an encounter with Uttar Pradesh police after he tried to escape police custody on the outskirts of Kanpur. The gangster was in a car in which he was being transported from Ujjain to Kanpur which met an accident. Dubey tried to take advantage of the situation, snatched a pistol from the injured cop and tried to run away. However, he was gunned down. Meanwhile, politics over the encounter of Vikas Dubey has also taken centerstage. Take a look at this analysis by Sumit Awasthi.', '2020-07-11', 'Politics', 'PC-AADHAAR-B.jpg', 'Pianki Chakraborty'),
(7, 'Kolkata: Man Murders Wife Before Killing Her Mother, Shoots Self Amit Agarwal, the man who shot himself, was fighting a legal battle for divorce from his wife Shilpi, who was residing in Bengaluru.', 'Kolkata, June 23: In a shocking incident a 42-year-old man on Monday allegedly shot himself after killing his mother-in-law at her flat in Kolkata and that too after flying down from Bengaluru where he had killed his wife.  In his suicide note, Amit Agarwal had accepted killing his wife Shilpi in Bengaluru before flying down to the city on Monday evening, a police officer said, according to the PTI report.', '2020-06-23', 'Kolkata', 'download.jpg', 'Pianki Chakraborty'),
(10, 'Govt Fires 70 Questions At TikTok, Other Banned Chinese Apps; Permanent Ban If Fail To Reply By July 22', 'New Delhi: In the recent development, the Union Ministry of Electronics and Information Technology has issued a fresh notice to the 59 banned Chinese apps. In the notice, the ministry has send a list of over 70 odd questions for the banned apps to answer. \r\nAs per the reports, the authorities have given these apps three weeks time to respond to all the 70 questions. In the order, Ministry said that if these apps fails to respond to the asked questions by July 22, then the ban imposed on them would become permanent in India.\r\n\r\nAccording to various media reports, the responses to these various questions will be studied by a high-level panel that will have members from the intelligence bureau, cyber security wing, department of telecommunication, internal security and IT Ministry.\r\n\r\nThis has certainly added to the mount of problems for famed apps such as TikTok and Helo which have mass users from India.\r\n\r\nAlmost 59 Chinese apps, including Tik Tok and UC Browser were banned by the government saying that they are \"prejudicial to sovereignty and integrity of India, defence of India, the security of the state and public order”.', '2020-07-10', 'Technology', '112246-tiktok.jpg', 'Pianki Chakraborty'),
(11, 'Have Provided More Information To ICC ACU Chairman On 2011 World Cup Final, Says Ex-Sri Lanka Sports Minister', 'Colombo: Former Sri Lanka Sports Minister Mahindananda Aluthgamage said he has provided ICCs Anti-Corruption Unit (ACU) chairman Alex Marshall with more evidence on his claim that the 2011 World Cup final, played between India and Sri Lanka was fixed.\r\nGeneral Manager of the ICC Anti-Corruption Unit, Alex Marshall sent me an e-mail. I have provided more information to him in this regard and I will continue to do so,\" Aluthgamage told reporters according to Sri Lankan news outlet News First.\r\nThe International Cricket Council will investigate this. Please do not politicize this. The ones who are connected to fixing the 2011 Cricket World Cup are now spending huge amounts of money to cover this. I request the Ministry of Sports and the Sri Lanka Cricket Council to support the ICC investigation.\"', '2020-07-11', 'Sports', '909934-afp-2.jpg', 'Pianki Chakraborty'),
(12, 'Leave Politics Out Of Education Says Ramesh Pokhriyal After Questions Raised Over CBSE Syllabus Cut', 'New Delhi: After questions were raised over the topics cut from the school syllabus by the CBSE, the Union Minister for Human Resource Development, Ramesh Pokhriyal has appealed to ‘leave politics out of education’. In a series of tweets, Pokhriyal has said that ‘there has been a lot of uninformed commentary on the exclusion of some topics from CBSE syllabus’ He said that the comments are resorting to sensationalism and trying to portray a false narrative even though many topics have been cut from across different subjects.', '2020-07-24', 'Education', 'Ramesh_pokhriyal.jpg', 'Pianki Chakraborty'),
(14, 'Coronavirus Vaccine Not Possible Before 2021, Govt Officials Tell Parliamentary Panel', 'The earliest possible time by when a vaccine against Covid-19 would be ready in India could be the first quarter of 2021, officials told the Rajya Sabha standing committee earlier in the day.New Delhi: As the global race by scientists and researchers to contain the novel Coronavirus outbreak continues, government officials on Friday told the Parliamentary panel on science and technology that it will not be possible to make the Covid-19 vaccine till at least next year.', '2020-07-11', 'Health', '07THVACCINE1.jpg', 'Pianki Chakraborty');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe_tbl`
--

CREATE TABLE `subscribe_tbl` (
  `id` int(100) NOT NULL,
  `email` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe_tbl`
--

INSERT INTO `subscribe_tbl` (`id`, `email`) VALUES
(1, 'chakraborty.swapna.dh@gmail.com'),
(2, 'chakraborty.swapna@gmail.com'),
(3, 'dasd@gmail.com'),
(4, 'sadas@gmail.com'),
(5, 'chakraborty.pinaki.dh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo_tbl`
--

CREATE TABLE `userinfo_tbl` (
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `userid` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo_tbl`
--

INSERT INTO `userinfo_tbl` (`fname`, `lname`, `userid`, `password`) VALUES
('pinaki', 'chakraborty', 'chkaraborty.pinaki@gmail.com', '1234'),
('dds', 'dddd', 'aassdd', '123'),
('Kalyan', 'Chakraborty', 'kalyan@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_master_tbl`
--
ALTER TABLE `admin_master_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_tbl`
--
ALTER TABLE `news_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe_tbl`
--
ALTER TABLE `subscribe_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_master_tbl`
--
ALTER TABLE `admin_master_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news_tbl`
--
ALTER TABLE `news_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subscribe_tbl`
--
ALTER TABLE `subscribe_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
