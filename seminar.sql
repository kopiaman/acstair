-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 16, 2016 at 09:53 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seminar`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `coid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) DEFAULT NULL,
  `creg` varchar(17) DEFAULT NULL,
  `caddress` varchar(500) DEFAULT NULL,
  `ccity` varchar(50) DEFAULT NULL,
  `cstate` varchar(50) DEFAULT NULL,
  `ccountry` varchar(50) DEFAULT NULL,
  `ctel` varchar(50) DEFAULT NULL,
  `cfax` varchar(50) DEFAULT NULL,
  `cemail` varchar(50) DEFAULT NULL,
  `reviewEmail` varchar(50) DEFAULT NULL,
  `about` mediumtext,
  PRIMARY KEY (`coid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`coid`, `cname`, `creg`, `caddress`, `ccity`, `cstate`, `ccountry`, `ctel`, `cfax`, `cemail`, `reviewEmail`, `about`) VALUES
(1, 'ACSTAIR ', '', 'A-5-10, Empire Tower, SS16/1', '47500, Subang Jaya', 'Selangor', 'Malaysia', '+603-503 31754', '+603 503 31755', 'info@acstair.com', 'review@acstair.com', 'Welcome to the official website of Acedemia Consortium of Science, Technology, Arts, Innovation and Research (ACSTAIR). ACSTAIR will serve as a platform for international exchange of ideas, collaborations and cooperation among academics, educators and educational psychologists and other practitioners. English is the official language of the conference, but those who would like to write in Malay are also welcome.');

-- --------------------------------------------------------

--
-- Table structure for table `confees`
--

CREATE TABLE IF NOT EXISTS `confees` (
  `cfid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(7) DEFAULT NULL,
  `item` varchar(50) DEFAULT NULL,
  `priceNormal` decimal(5,2) DEFAULT NULL,
  `datelineNormal` date DEFAULT NULL,
  `priceEarly` decimal(5,2) DEFAULT NULL,
  `datelineEarly` date DEFAULT NULL,
  `local` varchar(50) DEFAULT NULL,
  `currency` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cfid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `confees`
--

INSERT INTO `confees` (`cfid`, `cid`, `item`, `priceNormal`, `datelineNormal`, `priceEarly`, `datelineEarly`, `local`, `currency`) VALUES
(1, 1, 'International Presenter-Student', '300.00', '2015-10-10', '300.00', '2015-09-15', 'No', 'USD'),
(2, 1, 'International  Presenter-     Non Student', '430.00', '2015-10-10', '330.00', '2015-09-15', 'No', 'USD'),
(3, 1, 'International  Listener', '250.00', '2015-10-10', '250.00', '2015-09-15', 'No', 'USD'),
(4, 1, 'Local Presenter-Student', '500.00', '2015-10-10', '500.00', '2015-09-15', 'Yes', 'MYR'),
(5, 1, 'Local Presenter-       Non Student', '700.00', '2015-10-10', '600.00', '2015-09-15', 'Yes', 'MYR'),
(6, 1, 'Local Listener', '250.00', '2015-10-10', '250.00', '2015-09-15', 'Yes', 'MYR');

-- --------------------------------------------------------

--
-- Table structure for table `conference`
--

CREATE TABLE IF NOT EXISTS `conference` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(250) DEFAULT NULL,
  `cnameShort` varchar(45) DEFAULT NULL,
  `cnameCode` varchar(15) DEFAULT NULL,
  `sDate` varchar(50) DEFAULT NULL,
  `eDate` varchar(50) DEFAULT NULL,
  `cTime` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `slogan` mediumtext,
  `about` mediumtext,
  `importantDate` text,
  `subTheme` mediumtext,
  `venueInfo` mediumtext,
  `venueAttract` text,
  `venueMap` mediumtext,
  `venuePhoto` mediumtext,
  `accomodation` mediumtext,
  `visa` text,
  `cstatus` varchar(50) DEFAULT NULL,
  `gallery` varchar(400) DEFAULT NULL,
  `proceeding` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `conference`
--

INSERT INTO `conference` (`cid`, `cname`, `cnameShort`, `cnameCode`, `sDate`, `eDate`, `cTime`, `location`, `address`, `city`, `country`, `slogan`, `about`, `importantDate`, `subTheme`, `venueInfo`, `venueAttract`, `venueMap`, `venuePhoto`, `accomodation`, `visa`, `cstatus`, `gallery`, `proceeding`) VALUES
(1, 'ICLTE I 2015- International Conference on Language, Teaching and Education', '1st ICLTE  2015, KL', 'ICLTEI2015', '2015-10-24', '2015-10-25', '9 am to 5 pm', 'Holiday Villa Hotel & Suites', '9, Jalan SS 12/1, 47500 ', 'Subang Jaya', 'Malaysia', 'Teaching for Excellence', '<p>International Conference on Language, Teaching and Education ICLTE&nbsp;2015 &nbsp;will serve as a platform for international exchange of ideas, collaborations and cooperation among academicians, educators and educational psychologists and other practitioners. English is the official language of the conference, but for those who would like to write in Malay language are welcome.</p><h3>About Publication</h3><p>All papers submitted for the conference will be indexed by Google Scholar, DOAJ, Crossref, and ProQuest and published in our proceeding.</p><p>All papers must follows the writing format provided by secretariat in order to be published in in International Journal of Languages, Literature and Linguistics as one volume.</p><div><br></div><p><br></p>\r\n\r\n<div><br></div>', '<h2><ul><li>Last date of abstract submission   	: 29 August 2015</li></ul><ul><li>Last date of early birds fees payment	: Extended to 15 September 2015</li></ul><ul><li>Last date of normal fees payment	: 10 October 2015</li></ul><ul><li>Last date of full paper submission	: 10 October 2015</li></ul><ul><li>Conference day				: 24-25 October 2015</li></ul></h2>', '<div>\r\n<h3><span lang="EN-US" roman?,?serif??="" new="" times="">We invite Abstracts and Full Paper submissions.&nbsp;</span></h3><h3><span lang="EN-US" roman?,?serif??="" new="" times="">The followings are suggested topics arranged in sub themes.We, however, accept all papers and do not limit to these topics and sub themes:</span></h3>\r\n<h2><span lang="EN-US" roman?,?serif??="" new="" times="">Language Teaching</span></h2></div>\r\n<div>\r\n<ul>\r\n<li>Teaching of Malay language</li>\r\n<li>Teaching of Indonesian language</li>\r\n<li>Teaching of literature</li>\r\n<li>Teaching of folklore</li>\r\n<li>Teaching of poetry</li>\r\n<li>Teaching of prose&nbsp;</li><li>Teaching profession</li><li>Teaching of drama</li>\r\n<li>The teaching of grammar</li>\r\n<li>The teaching of writing skills&nbsp;</li>\r\n<li>The teaching of listening skills</li>\r\n<li>Teaching of dialects</li>\r\n<li>The teaching of reading skills&nbsp;</li>\r\n<li>Language for special purposes</li>\r\n<li>Teaching of other languages&nbsp;</li>\r\n<li>The teaching of semantics</li>\r\n<li>The teaching of syntax</li>\r\n<li>The teaching of morphology</li>\r\n<li>Idioms in the teaching of language</li><li>Teaching language for special needs.</li><li>Students as facilitators in language teaching</li><li>Theory versus experience in language teaching</li><li>Popular culture in language teaching and learning</li>\r\n<li>Other disciplines of knowledge in language teaching</li>\r\n<li>Teaching of language in higher learning institutions</li><li>Standards based performance in language evaluation</li>\r\n<li>Teacher-students collaborations in language teaching and learning</li></ul><div><br></div></div>\r\n<h2>Teaching Strategies</h2><div><ul><li>Contextual teaching</li><li>Quantum teaching</li><li>Literature in language teaching</li>\r\n<li>Teaching of second language</li>\r\n<li>Teaching of foreign language</li><li>Language as a medium of solidarity</li><li>Putting theory into classroom practice</li><li>Methodology of language learning</li><li>Teaching language as second language</li>\r\n<li>Indigenous language teaching strategies</li>\r\n<li>Constructivism in teaching of language</li><li>Cognitive strategies in language teaching</li>\r\n<li>Teaching of language for economic purposes</li><li>Students participation in language teaching</li><li>Project based learning in language teaching</li>\r\n<li>Upholding language through classroom teaching<span class="Apple-tab-span" style="WHITE-SPACE: pre">	</span></li>\r\n<li>The use of drama or theater in language teaching</li>\r\n<li>The inculcation of culture through language teaching</li></ul><div><br></div></div>\r\n<h2>Technologies and Language Teaching</h2><div><ul>\r\n<li>Mobile learning</li>\r\n<li>Language and ICT</li><li>Computer assisted language learning</li><li>Computer based learning</li>\r\n<li>Using videos for language teaching</li>\r\n<li>New technologies in language teaching</li>\r\n<li>Teaching for the future using technologies</li>\r\n<li>Internet and language learning</li></ul><div><br></div><div><h2>Education</h2><div><ul><li>ESL</li><li>Adult Education</li><li>Anthropology and Education</li><li>Arts Education</li><li>Blended Education</li><li>Contemporary issues in education</li><li>Curriculum Studies</li><li>Distance Education</li><li>Early Childhood Education</li><li>Education and Religion</li><li>Educational Psychology</li><li>Environmental Education</li><li>Gender and Education</li><li>Health Education</li><li>Higher Education</li><li>Language Education and Literacy</li><li>Lifelong Learning</li><li>Mentoring and Coaching</li><li>Multicultural Issues in Education</li><li>Philosophy of Education</li><li>Primary Education</li><li>Quality in Education</li><li>Values and Education</li><li>Vocational Education and Training</li><li>Other areas of Education</li></ul><div><br></div></div></div></div>\r\n<h2>Evaluation</h2>\r\n<div>\r\n<div>\r\n<ul>\r\n<li>Action research in language teaching</li>\r\n<li>Evaluation in language teaching</li>\r\n<li>Alternative evaluation in language achievement<span class="Apple-tab-span" style="WHITE-SPACE: pre">	</span></li>\r\n<li>Language planning in language teaching</li>\r\n<li>Designing contextual curriculum for language teaching</li></ul></div></div>\r\n<div><br></div>\r\n<div><br></div>', '<h3>Location</h3> <p></p><ul><li>25km from Kuala Lumpur</li><li>1 hour''s drive from Kuala Lumpur International (KLIA) Airport</li><li>20 minutes drive from Sultan Abdul Aziz Shah Airport, Subang</li><li>Strategically connected to the cities of Kuala Lumpur, Shah Alam, Petaling Jaya, &nbsp;Bandar Sunway and Klang via a network of highways, i.e. Federal Highway, the &nbsp;New Klang Valley Expressway, the New Pantai Expressway, the North-South &nbsp;Expressway Central Link and Damansara-Puchong Expressway</li><li>15 minutes from Sunway Lagoon Theme Park and Sunway Pyramid Shopping &nbsp;Center</li><li>10 minutes from Subang Parade and The Summit shopping centers</li></ul><div><br></div>', '<ul><li>Sunway Lagoon water theme park (free scheduled hotel shuttle)</li><li>Shopping at Subang Parade and Sunway Pyramid</li><li>Tour of Putrajaya, administrative centre of Malaysia</li><li>Blue Mosque at Shah Alam</li><li>Golfing</li><li>Agricultural Park</li><li>Shah Alam Melawati Hill</li><li>Carey Island</li><li>Shah Alam Gallery</li><li>Fireflies Tour</li></ul>', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0643711724197!2d101.60027412211403!3d3.07748743155351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c6ca146720b%3A0x479fbcc31eebce46!2sHoliday+Villa+Subang!5e0!3m2!1sms!2smy!4v1423846434646" width="100%" height="600" frameborder="0" style="border:0"></iframe>', '[{"name":"files/holiday subang 2_3czls64h.JPG","usrName":"holiday subang 2.JPG","size":217888,"type":"image/jpeg","searchStr":"holiday subang 2.JPG,!:sStrEnd"}]', '', '<h2>Gaining Entry into Malaysia</h2>\r\n<p>Should you have queries on requirement for a SHORT-TERM VISA to enter Malaysia for the purpose of attending this conference, please&nbsp;<a href="http://www.imi.gov.my/index.php/en/main-services/visa" target="_blank">click here</a>.&nbsp;You MUST contact &nbsp;the nearest Malaysian Embassy in YOUR HOME COUNTRY to receive guidance on the application process and necessary documents.&nbsp;<a href="http://www.imi.gov.my/index.php/en/main-services/visa" target="_blank">Click here</a>&nbsp;for more information.&nbsp;As part of the VISA application process, you will be required to submit a Letter of Invitation from the ACTAIR.&nbsp;</p>\r\n<p></p>\r\n<h2>Letters of Invitation</h2><p>In order to qualify for a Letter of Invitation, you must meet both of the following criteria:</p><p></p><ol><li>Be a registered audience member or the author of an accepted abstract and/or paper</li><li>Have PAID the conference registration fee in full</li></ol><p></p>\r\n\r\n<h2>Please Note:</h2>\r\n<ol><li>Under NO circumstances shall ACSTAIR provide a Letter of Invitation or Visa application paperwork to any party except for those who have met the above criteria.</li>\r\n<li>All questions/concerns regarding the status of your VISA should be directed to the Malaysian Embassy in YOUR HOME COUNTRY.</li>\r\n<li>ACSTAIR is not authorized to assist with the VISA process beyond providing a Letter of Invitation.</li>\r\n<li>ACSTAIR will not provide letters of guarantee. Should your application be denied, we cannot influence the decision of the Malaysian Embassy, nor will engage in discussion or correspondence with the Malaysian Embassy on behalf of the applicant.</li></ol>\r\n<p></p>\r\n<div><br></div>', 'Confirmed', 'https://www.flickr.com/photos/acstair', '../proceeding/ICLTE_2015');

-- --------------------------------------------------------

--
-- Table structure for table `congallery`
--

CREATE TABLE IF NOT EXISTS `congallery` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL,
  `photo` mediumtext,
  `description` varchar(100) DEFAULT NULL,
  `cat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `congallery`
--

INSERT INTO `congallery` (`pid`, `cid`, `photo`, `description`, `cat`) VALUES
(1, 1, '[{"name":"files/day1kidasb03_bdl5l3dm.jpg","usrName":"day1kidasb03.jpg","size":52049,"type":"image/jpeg","thumbnail":"files/thday1kidasb03_2bqrw8ii.jpg","thumbnail_type":"image/jpeg","thumbnail_size":7849,"searchStr":"day1kidasb03.jpg,!:sStrEnd"}]', '', 'acc'),
(2, 1, '[{"name":"files/exam_z645f4hd.jpg","usrName":"exam.jpg","size":32891,"type":"image/jpeg","thumbnail":"files/thexam_9or0wc2b.jpg","thumbnail_type":"image/jpeg","thumbnail_size":6059,"searchStr":"exam.jpg,!:sStrEnd"}]', '', 'acc');

-- --------------------------------------------------------

--
-- Table structure for table `conpartner`
--

CREATE TABLE IF NOT EXISTS `conpartner` (
  `partid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL,
  `photo` mediumtext,
  `names` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`partid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `conpartner`
--

INSERT INTO `conpartner` (`partid`, `cid`, `photo`, `names`) VALUES
(8, NULL, '[{"name":"files\\/logopustaka_swbzbjwr.jpg","usrName":"logopustaka.jpg","size":5866,"type":"image\\/jpeg","thumbnail":"files\\/thlogopustaka_k65t1i2u.jpg","thumbnail_type":"image\\/jpeg","thumbnail_size":3231,"searchStr":"logopustaka.jpg,!:sStrEnd"}]', ''),
(10, NULL, '[{"name":"files\\/logoinsan_kvinmouh.jpg","usrName":"logoinsan.jpg","size":4320,"type":"image\\/jpeg","thumbnail":"files\\/thlogoinsan_gvg1cftb.jpg","thumbnail_type":"image\\/jpeg","thumbnail_size":2599,"searchStr":"logoinsan.jpg,!:sStrEnd"}]', ''),
(11, NULL, '[{"name":"files\\/logoKreatiwi_ha4mr34j.jpg","usrName":"logoKreatiwi.jpg","size":4675,"type":"image\\/jpeg","thumbnail":"files\\/thlogoKreatiwi_u60q9pkn.jpg","thumbnail_type":"image\\/jpeg","thumbnail_size":2547,"searchStr":"logoKreatiwi.jpg,!:sStrEnd"}]', '');

-- --------------------------------------------------------

--
-- Table structure for table `conslider`
--

CREATE TABLE IF NOT EXISTS `conslider` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL,
  `photo` mediumtext,
  `description` varchar(250) DEFAULT NULL,
  `headline` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `conslider`
--

INSERT INTO `conslider` (`sid`, `cid`, `photo`, `description`, `headline`) VALUES
(4, 1, '[{"name":"files\\/29558385_m_0c6kkmb9.jpg","usrName":"29558385_m.jpg","size":61620,"type":"image\\/jpeg","thumbnail":"files\\/th29558385_m_trml386u.jpg","thumbnail_type":"image\\/jpeg","thumbnail_size":3672,"searchStr":"29558385_m.jpg,!:sStrEnd"}]', 'Holiday Villa,\r\nSubang Jaya, Selangor, Malaysia\r\n24-25 October 2015', 'International Conference on Language, Teaching and Education'),
(5, 1, '[{"name":"files\\/18709525_ml_c8y8dymn.jpg","usrName":"18709525_ml.jpg","size":72418,"type":"image\\/jpeg","thumbnail":"files\\/th18709525_ml_vg9mxlt5.jpg","thumbnail_type":"image\\/jpeg","thumbnail_size":4178,"searchStr":"18709525_ml.jpg,!:sStrEnd"}]', '', 'Theme: \r\nTeaching for Excellence'),
(7, 1, '[{"name":"files\\/klccwithpyramid_q1r6jyg5.jpg","usrName":"klccwithpyramid.jpg","size":111399,"type":"image\\/jpeg","thumbnail":"files\\/thklccwithpyramid_djjvkqje.jpg","thumbnail_type":"image\\/jpeg","thumbnail_size":4153,"searchStr":"klccwithpyramid.jpg,!:sStrEnd"}]', '', 'GOOD NEWS!\r\nThe early bird''s fee is now extended to 15 September 2015. ');

-- --------------------------------------------------------

--
-- Table structure for table `followup`
--

CREATE TABLE IF NOT EXISTS `followup` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL,
  `r_join` mediumtext,
  `r_abs` mediumtext,
  `r_pay_abs` mediumtext,
  `r_pay_fp` mediumtext,
  `r_fp` mediumtext,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `followup`
--

INSERT INTO `followup` (`fid`, `cid`, `r_join`, `r_abs`, `r_pay_abs`, `r_pay_fp`, `r_fp`) VALUES
(1, 1, '<div>Dear Colleague,</div><div>Thank you for your interest in ICLTE.</div><div><br></div><div>We note that you have registered on our website, but yet to confirm your participation either as a presenter or a listener.</div><div><br></div><div>Please may we reiterate that our conference will be held from 24-25 October 2015. Our aim is to provide an excellent platform for professional interaction in exchanging ideas as well as creating new working networks among professionals around the world. Our hope is to facilitate the globalization of ideas, no matter how remote the idea originates and deliver recognitions where it is due.</div><div><br></div><div>&nbsp;LATEST NEWS: To assist our participants to complete their sponsorship requirements, we have since extended the early bird fees dateline until 15 September 2015. Please do not miss this opportunity!</div><div><br></div><div>&nbsp;For details, please visit our official 1st ICLTE website&nbsp;<a href="http://www.acstair.com/webcon/?conf=ICLTEI2015" target="_blank"><span style="font-size: 12pt; font-family: ''Times New Roman'', serif; color: blue;">here</span></a></div>', '<p class="MsoNormal" style="margin-bottom: 0.0001pt;">Dear participant,</p><p class="MsoNormal" style="margin-bottom: 0.0001pt;">First and foremost we are thrilled to have received your interest in our 1st ICLTE. It is an excellent platform for professional interaction in exchanging ideas as well as creating new working networks among professionals around the world.&nbsp;</p><p class="MsoNormal" style="margin-bottom: 0.0001pt;"><br></p><p class="MsoNormal" style="margin-bottom: 0.0001pt;">&nbsp; Unfortunately, we have yet to receive your abstract.&nbsp;</p><p class="MsoNormal" style="margin-bottom: 0.0001pt;">&nbsp;Even though our abstract submission deadline has already over, we hate to lose the prospect of quality paper in our conference. Hence, we would like to offer you the following extensions:-&nbsp;</p><p class="MsoNormal" style="margin-bottom: 0.0001pt;"><br></p><p class="MsoNormal" style="margin-bottom: 0.0001pt;">&nbsp; &nbsp; 1- New deadline for selected participant until 15 September 2015.</p><p class="MsoNormal" style="margin-bottom: 0.0001pt;">&nbsp; &nbsp;2 -The early bird fees dateline until 15 September 2015.</p><p class="MsoNormal" style="margin-bottom: 0.0001pt;"><br></p><p class="MsoNormal" style="margin-bottom: 0.0001pt;">&nbsp;Our hope is to facilitate the globalization of ideas, no matter how remote the idea originates and deliver recognitions where it is due.</p><p class="MsoNormal" style="margin-bottom: 0.0001pt;"><br></p><p class="MsoNormal" style="margin-bottom: 0.0001pt;">Should you have further queries on the above conference, please do not hesitate to write to us for further clarifications.For more details, please visit our official 1st ICLTE website&nbsp;<a href="http://www.acstair.com/webcon/?conf=ICLTEI2015" target="_blank"><span style="font-size: 12pt; font-family: ''Times New Roman'', serif; color: blue;">here</span></a></p>', '<div>Dear Sir/Madam,</div><div><br></div><div>As you are well aware that our conference will be held on 24-25 October 2015 and the date is drawing near. &nbsp;We note that you have since submitted a stunning abstract that would benefits many at the conference.</div><div><br></div><div><br></div><div>We, however, are concern that we have yet to receive payment for the participation. All participating presenters must make full payment before we can proceed to issue a formal letter of invitation. The invitation letter is a requirement to obtain the necessary entry visa to Malaysia. We therefore would like to urge you to expedite the said payment.</div><div><br></div><div><br></div><div>Should you have further queries on the above conference, please do not hesitate to write to us for further clarifications. We hate to lose a presentation of such a good paper.</div><div><br></div><div><br></div><div>Your immediate attention is greatly appreciated.</div><div><br></div><div><br></div><div>For more details, please visit our official 1st ICLTE website&nbsp;<span style="font-size: 12pt; font-family: ''Times New Roman'', serif; color: blue;"><a href="http://www.acstair.com/webcon/?conf=ICLTEI2015" target="_blank">here</a>.</span></div>', '<p class="MsoNormal">Dear Colleague,</p><p class="MsoNormal"><br></p><p class="MsoNormal">We thank you for submitting a well written paper worthy of presentation at our conference.</p><p class="MsoNormal"><br></p><p class="MsoNormal">We, however, are still waiting for you to make the full payment of the participating fees in order for us to proceed with a formal review of your paper.</p><p class="MsoNormal"><br></p><p class="MsoNormal">Upon receipt of your full payment we will immediately issue the formal invitation letter to the conference, the necessary document that will expedite your obtaining the visa to enter Malaysia, and formally review your paper.</p><p class="MsoNormal"><br></p><p class="MsoNormal">We look forward to have your paper presented and initiate a new paradigm in language research and teaching.Your urgent attention is greatly appreciated.</p><p class="MsoNormal"><br></p><p class="MsoNormal">For more details, please visit our official 1st ICLTE website&nbsp;<a href="http://www.acstair.com/webcon/?conf=ICLTEI2015" target="_blank" style="font-family: ''Times New Roman'', serif; font-size: 16px;">here</a><span style="color: rgb(0, 0, 255); font-family: ''Times New Roman'', serif; font-size: 16px;">.</span></p>', '<p class="MsoNormal" style="margin-bottom: 0.0001pt;">Dear presenter,</p><p class="MsoNormal" style="margin-bottom: 0.0001pt;"><br></p><p class="MsoNormal" style="margin-bottom: 0.0001pt;">We are ecstatic that you have almost completed the steps toward joining our conference on 23-24 October 2015.</p><p class="MsoNormal" style="margin-bottom: 0.0001pt;"><br></p><p class="MsoNormal" style="margin-bottom: 0.0001pt;">&nbsp;The final step is for you to send us your full paper as soon as possible. This will allow us the time to fully review the said paper and make arrangements for its listings.</p><p class="MsoNormal" style="margin-bottom: 0.0001pt;"><br></p><p class="MsoNormal" style="margin-bottom: 0.0001pt;">&nbsp;We look forward to review your paper. Your urgent attention is greatly appreciated.</p><p class="MsoNormal" style="margin-bottom: 0.0001pt;"><br></p><p class="MsoNormal" style="margin-bottom: 0.0001pt;">&nbsp;Should you have further queries on the above conference, please do not hesitate to write to us for further clarifications.&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE IF NOT EXISTS `paper` (
  `paperID` int(11) NOT NULL AUTO_INCREMENT,
  `paperRef` varchar(25) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `cid` int(5) DEFAULT NULL,
  `multiAuthor` varchar(3) DEFAULT NULL,
  `funded` varchar(50) DEFAULT NULL,
  `date_submit` varchar(10) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `abstract` mediumtext,
  `paperStatus` varchar(50) DEFAULT NULL,
  `fullPaper` mediumtext,
  `paymentStatus` varchar(50) DEFAULT NULL,
  `slotDate` int(11) DEFAULT NULL,
  `slotTime` varchar(50) DEFAULT NULL,
  `slotRoom` varchar(50) DEFAULT NULL,
  `slotTurn` int(11) DEFAULT NULL,
  `invite` varchar(3) DEFAULT NULL,
  `note` varchar(50) DEFAULT NULL,
  `ppt` mediumtext,
  PRIMARY KEY (`paperID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`paperID`, `paperRef`, `userID`, `cid`, `multiAuthor`, `funded`, `date_submit`, `title`, `abstract`, `paperStatus`, `fullPaper`, `paymentStatus`, `slotDate`, `slotTime`, `slotRoom`, `slotTurn`, `invite`, `note`, `ppt`) VALUES
(29, '1501-0041-0029', 41, 1, 'No', 'No', '2015-02-24', 'The Relationship between Compensation Strategies and English Language Proficiency', 'AB1501-0041-0029.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, '1501-0051-0030', 51, 1, 'Yes', 'Yes', '2015-03-01', 'abc', 'AB1501-0051-0030.docx', 'AB-OK', NULL, 'Paid', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, '1501-0052-0031', 52, 1, '', '', '2015-03-02', 'The Use of Cartoon Strip in Language Acquisition: A Case Study', 'AB1501-0052-0031.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, '1501-0055-0032', 55, 1, 'No', 'No', '2015-03-11', 'The role of Facebook in language learning', 'AB1501-0055-0032.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, '1501-0057-0033', 57, 1, 'Yes', 'Yes', '2015-03-12', 'An Investigation and Evaluation of Student-Focused e-learning in Mathematics at UniKL MIAT', 'AB1501-0057-0033.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, '1501-0060-0034', 60, 1, 'Yes', 'No', '2015-03-17', 'The Effectiveness of Learning English through Drama: A Survey on Studentsâ€™ Perceptions', 'AB1501-0060-0034.doc', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, '1501-0063-0035', 63, 1, 'No', 'Yes', '2015-03-18', 'Schools Administration  Relevant to the Multiculturalism in the Three Southernmost Provinces :   A Case Study of Public  Secondary Schools.', 'AB1501-0063-0035.docx', 'FP-REVIEW', '15010035.docx', 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, '1501-0065-0036', 65, 1, '', '', '2015-03-29', 'Contemporary literacy concepts and practices of university students in English Language Education', 'AB1501-0065-0036.doc', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, '1501-0066-0037', 66, 1, 'Yes', 'No', '2015-03-30', 'COMPARISON OF USAGE OF LEXICAL BUNDLES IN ARGUMENTATIVE ESL WRITING ACROSS DISCIPLINES', 'AB1501-0066-0037.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, '1501-0068-0038', 68, 1, 'No', 'Yes', '2015-03-31', 'EFL Reading between Post-basic Schools and University Classrooms', 'AB1501-0068-0038.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, '1501-0069-0039', 69, 1, 'No', 'Yes', '2015-04-01', 'An Investigation of Workplace Communication Tasks and  English Performances', 'AB1501-0069-0039.doc', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, 'Yes', NULL, NULL),
(40, '1501-0070-0040', 70, 1, 'Yes', 'Yes', '2015-04-01', 'A Realistic Approach to the Impact of Superfluous Usage of Cellular Packages on the Education of Pakistani Youth', 'AB1501-0070-0040.doc', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, '1501-0073-0041', 73, 1, 'Yes', 'No', '2015-04-05', 'Comparing  The Use Metadiscourse in Argumentative Essays among Diploma in Engineering and Diploma in Business ESL Writers', 'AB1501-0073-0041.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, '1501-0072-0042', 72, 1, 'No', 'Yes', '2015-04-05', 'The Effect of Using Blended Learning on Learning Some English Grammar', 'AB1501-0072-0042.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, '1501-0072-0043', 72, 1, 'No', 'Yes', '2015-04-05', 'An Evaluation of EFL Textbooks Used for Teaching in Saudi Intermediate Schools', 'AB1501-0072-0043.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, '1501-0076-0045', 76, 1, 'No', 'Yes', '2015-04-09', 'The Implementation of Language Policy in Eastern Indonesia', 'AB1501-0076-0045.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, '1501-0078-0046', 78, 1, 'Yes', 'Yes', '2015-04-10', 'Malaysian Technical Lecturersâ€™ Feedback on English as a Medium of Instruction (EMI)', 'AB1501-0078-0046.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, '1501-0077-0047', 77, 1, 'No', 'No', '2015-04-10', 'The social language strategies used by Saudi students studying in an ESL context', 'AB1501-0077-0047.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, '1501-0071-0048', 71, 1, 'Yes', 'No', '2015-04-10', 'The Challenges ESL Writing Teachers Experience in Providing Written Corrective Feedback at the Upper Secondary Level', 'AB1501-0071-0048.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, '1501-0079-0049', 79, 1, 'Yes', 'Yes', '2015-04-11', 'Studentsâ€™ Perception on the To Uphold Malay Language to Strengthen English Language Policy (Memartabatkan Bahasa Malaysia Memperkukuh Bahasa Inggeris)', 'AB1501-0079-0049.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, '1501-0080-0051', 80, 1, 'No', 'No', '2015-04-13', 'THE ROLES OF LINGUISTIC KNOWLEDGE AND LEXICAL RETRIEVAL IN WRITING ESSAYS: A COMPARATIVE ANALYSIS OF THE FIRST AND SECOND LANGUAGE WRITING OF MALAYSIAN ESL LEARNERS', 'AB1501-0080-0051.doc', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, '1501-0082-0052', 82, 1, 'Yes', 'No', '2015-04-19', 'A Survey on Learning Style Indicator between Genders and Game-based Learning in UiTM Seremban', 'AB1501-0082-0052.doc', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, '1501-0088-0053', 88, 1, 'Yes', 'Yes', '2015-05-12', 'The Influence of Content on Online ESL Quizzes', 'AB1501-0088-0053.doc', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, '1501-0087-0054', 87, 1, 'Yes', 'No', '2015-05-12', 'Exploring Adult Undergraduatesâ€™ Learning Strategies and their Perceived Reading Comprehension Difficulties', 'AB1501-0087-0054.docx', 'FP-REVIEW', '15010054.docx', 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, '1501-0091-0055', 91, 1, 'Yes', 'No', '2015-05-12', 'Exploring Varieties of Code-Switching during Class Discussions among ESL Learners', 'AB1501-0091-0055.doc', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, '1501-0000-0056', 93, 1, 'Yes', 'No', '2015-05-25', 'Beyond threshold level: The performance of high-performing ESL readers against stressed texts', 'AB1501-0000-0056.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, '1501-0094-0057', 94, 1, 'No', 'Yes', '2015-05-26', 'Teaching Postcolonial Literature on Aboriginality and  Gender Issues   Represented   In  Australian- Aborigine Contemporary Literature', 'AB1501-0094-0057.docx', 'FP-REVIEW', '15010057.docx', 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, '1501-0088-0058', 88, 1, 'No', 'Yes', '2015-06-01', 'Verbal Corrective Feedback: Students Preference', 'AB1501-0088-0058.docx', 'FP-REVIEW', '15010058.doc', 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, '1501-0097-0059', 97, 1, 'No', 'Yes', '2015-06-11', 'What wrong with my teaching? It''s me or them?', 'AB1501-0097-0059.docx', 'AB-OK', NULL, 'Paid', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, '1501-0101-0060', 101, 1, 'Yes', 'Yes', '2015-06-17', 'MODEL PEMBANGUNAN KURIKULUM BAHASA ARAB UNTUK PELANCONGAN', 'AB1501-0101-0060.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, '1501-0091-0061', 91, 1, 'Yes', 'No', '2015-06-22', 'Using Movies as an Authentic And Constructive Material For Oral Commentary in Esl Classroomâ€', 'AB1501-0091-0061.docx', 'FP-REVIEW', '15010061.docx', 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, '1501-0102-0062', 102, 1, 'Yes', 'No', '2015-06-24', 'An Analysis of Turn Taking in ESL Classrooms', 'AB1501-0102-0062.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, '1501-0099-0063', 99, 1, '', '', '2015-06-27', 'IMPACT OF SOCIETAL RE-ORIENTATION PROGRAMME (A DAIDAITA SAHU) IN MINIMIZING ADOLESCENT ANTISOCIAL BEHAVIOUR AMONG SENIOR SECONDARY SCHOOL STUDENTS OF MUNICIPAL EDUCATION ZONE, KANO-NIGERIA', 'AB1501-0099-0063.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, 'Yes', NULL, NULL),
(64, '1501-0099-0064', 99, 1, '', 'Yes', '2015-07-05', 'EFFECT OF SOCIAL MEDIA ON ACADEMIC PERFORMANCE OF SENIOR SECONDARY SCHOOL STUDENTS OF UNGOGO LGA, KANO STATE', 'AB1501-0099-0064.doc', 'FP-REVIEW', '15010064.docx', 'Pending', NULL, NULL, NULL, NULL, 'Yes', NULL, NULL),
(65, '1501-0107-0065', 107, 1, 'No', 'Yes', '2015-07-14', 'Teaching Vocabulary to Kindergarten Students  through Storytelling', 'AB1501-0107-0065.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, '1501-0108-0066', 108, 1, 'Yes', 'No', '2015-07-23', 'Pembangunan dan Pengesahan Instrumen Pengukuran Pengetahuan Teknologi Pedagogi Kandungan (PTPK) Guru Pelatih Institut Pendidikan Guru Malaysia: Sorotan Literatur', 'AB1501-0108-0066.docx', 'FP-REVIEW', '15010066.doc', 'Paid', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, '1501-0109-0067', 109, 1, 'No', 'No', '2015-07-25', 'The Comparison Of The Strategies Used By Turkish And International University Students In Preparatory Classes In Turkey To Cope With Affective Filter In Speaking English Vs. Their Speaking Proficiency', 'AB1501-0109-0067.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, '1501-0091-0068', 91, 1, 'Yes', 'Yes', '2015-08-02', 'Using Movies as an authentic and constructive material for oral commentary in ESL Classroom', 'AB1501-0091-0068.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, '', NULL, NULL),
(69, '1501-0113-0069', 113, 1, 'Yes', 'No', '2015-08-03', 'IMAGINASI KE REALITI: PENGHAYATAN LUKISAN KANAK-KANAK PERINGKAT PRA DAN SKEMATIK', 'AB1501-0113-0069.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, '1501-0114-0070', 114, 1, 'No', 'No', '2015-08-05', 'THE LANGUAGE LEARNING STRATEGIES OF ENGLISH MAJOR STUDENTS', 'AB1501-0114-0070.doc', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, '1501-0115-0071', 115, 1, 'Yes', 'Yes', '2015-08-07', 'METALIC AS AN APPLICATIVE MEDIA AGRICULTURAL EDUCATION PROGRAM FOR CREATE AN INDEPENDENT AGRICULTURAL SCHOOL MODEL IN BANI SALIP PABUARAN ELEMENTARY SCHOOL BOGOR, INDONESIA', 'AB1501-0115-0071.doc', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, '1501-0116-0072', 116, 1, 'No', 'No', '2015-08-07', 'Kx Triggering ESL/EFL Learners to Speak', 'AB1501-0116-0072.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, '', NULL, NULL),
(73, '1501-0117-0073', 117, 1, 'No', '', '2015-08-08', 'ON THE COMMUNICATIVE DYNAMISM OF INDONESIAN EXPRESSIONS OF EPISTEMIC MODALITY', 'AB1501-0117-0073.docx', 'AB-OK', '', 'Pending', NULL, NULL, NULL, NULL, '', NULL, '[{"name":"files/7-SUNARTO 24 OCT ICLTE 2015 PRESENTATION_pvr7vtmc.pptx","usrName":"7-SUNARTO 24 OCT ICLTE 2015 PRESENTATION.pptx","size":400869,"type":"application/vnd.openxmlformats-officedocument.presentationml.presentation","searchStr":"7-SUNARTO 24 OCT ICLTE 2015 PRESENTATION.pptx,!:sStrEnd"}]'),
(74, '1501-0118-0074', 118, 1, 'No', 'No', '2015-08-08', 'Language Anxiety vs. ELT Environment in Uttar Pradesh, India', 'AB1501-0118-0074.doc', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, '', NULL, NULL),
(75, '1501-0085-0075', 85, 1, 'No', 'No', '2015-08-10', 'Exploring the Influence of Reading Level of Students among ESL Learners across Streams and Proficiency Levels', 'AB1501-0085-0075.doc', 'AB-OK', NULL, 'Paid', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, '1501-0119-0076', 119, 1, 'Yes', 'Yes', '2015-08-12', 'Persepsi Pelajar terhadap Kaedah Pengajaran Kemahiran Bahasa Arab  di Universiti Teknologi MARA (UiTM)', 'AB1501-0119-0076.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, '1501-0106-0077', 106, 1, 'No', 'Yes', '2015-08-17', 'TOWARDS INTERNATIONAL ACCEPTABILITY AND INTELLIGIBILITY OF NIGERIAN ENGLISH', 'AB1501-0106-0077.doc', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, '1501-0121-0078', 121, 1, 'Yes', 'Yes', '2015-08-25', 'What Makes Teacher Inclusive? A Different Dimension in  Teacher Teaching', 'AB1501-0121-0078.doc', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, '1501-0122-0079', 122, 1, 'No', 'No', '2015-08-26', 'Kemahiran Konsep Cetakan Kanak-kanak Taska Di Malaysia.', 'AB1501-0122-0079.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, '1501-0001-0080', 1, 1, '', 'No', '2015-08-29', 'KINDERGARTEN EVOLUTION', 'AB1501-0001-0080.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, '1501-0124-0081', 124, 1, 'Yes', 'No', '2015-08-29', 'CRITICAL RESPONSES TO TEXTS:  READING ATTITUDE OF UNIVERSITY STUDENTS IN INDONESIAN LEARNING CONTEXT', 'AB1501-0124-0081.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, '1501-0127-0082', 127, 1, 'Yes', 'No', '2015-08-29', 'FROM BIOGRAPHY TO SHORT STORY :   Transformation Strategy Rides in Creative Writing Process', 'AB1501-0127-0082.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, '1501-0000-0083', 0, 1, 'Yes', 'No', '2015-08-29', 'SPELLING LEARNING MODEL FOR INDONESIAN ACADEMIC PAPERS WRITING BASED ON BLENDED LEARNING', 'AB1501-0000-0083.docx', 'New', NULL, 'New', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, '1501-0128-0084', 128, 1, 'Yes', 'No', '2015-08-29', 'REFLECTIOAN OF CULTURAL VALUES  IN MYTHOLOGY RAJA AMPAT AS INSTRUCTIONAL MATERIALS CHARACTERIZED LOCAL KNOWLEDGE PAPUA', 'AB1501-0128-0084.docx', 'AB-OK', NULL, 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `participate`
--

CREATE TABLE IF NOT EXISTS `participate` (
  `parID` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `cfid` int(200) DEFAULT NULL,
  `confirm` varchar(50) DEFAULT NULL,
  `paperCount` int(11) DEFAULT NULL,
  `listenerRef` varchar(20) DEFAULT NULL,
  `note` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`parID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `participate`
--

INSERT INTO `participate` (`parID`, `cid`, `userID`, `cfid`, `confirm`, `paperCount`, `listenerRef`, `note`) VALUES
(5, 1, 6, 4, 'No', NULL, NULL, ''),
(7, 1, 27, 5, 'Yes', 2, NULL, NULL),
(8, 1, 31, 2, 'No', NULL, NULL, NULL),
(10, 1, 32, 3, 'No', NULL, NULL, NULL),
(11, 1, 33, 3, 'Yes', NULL, '1401B0033', NULL),
(12, 1, 34, 4, 'Yes', 1, '1501B0034', NULL),
(13, 1, 35, 1, 'No', NULL, '1501B0035', NULL),
(23, 1, 41, 1, 'No', NULL, '1501-L0041', NULL),
(24, 1, 42, 3, 'No', NULL, '1501-L0042', NULL),
(25, 1, 43, 3, 'No', NULL, '1501-L0043', NULL),
(26, 1, 44, 2, 'No', NULL, '1501-L0044', NULL),
(27, 1, 45, 6, 'No', NULL, '1501-L0045', NULL),
(30, 1, 53, 3, 'No', NULL, '1501-L0053', NULL),
(31, 1, 39, 5, 'No', NULL, '1501-L0039', NULL),
(32, 1, 55, 1, 'No', NULL, '1501-L0055', NULL),
(33, 1, 57, 5, 'No', NULL, '1501-L0057', NULL),
(34, 1, 58, 5, 'No', NULL, '1501-L0058', NULL),
(35, 1, 60, 5, 'No', NULL, '1501-L0060', NULL),
(36, 1, 63, 2, 'No', NULL, '1501-L0063', NULL),
(37, 1, 65, 2, 'No', NULL, '1501-L0065', NULL),
(38, 1, 66, 5, 'No', NULL, '1501-L0066', NULL),
(39, 1, 67, 3, 'No', NULL, '1501-L0067', NULL),
(40, 1, 68, 2, 'No', NULL, '1501-L0068', NULL),
(41, 1, 69, 2, 'No', NULL, '1501-L0069', NULL),
(42, 1, 70, 2, 'No', NULL, '1501-L0070', NULL),
(43, 1, 71, 4, 'No', NULL, '1501-L0071', NULL),
(44, 1, 73, 5, 'No', NULL, '1501-L0073', NULL),
(45, 1, 72, 2, 'No', NULL, '1501-L0072', NULL),
(46, 1, 75, 6, 'No', NULL, '1501-L0075', NULL),
(47, 1, 76, 2, 'No', NULL, '1501-L0076', NULL),
(48, 1, 77, 1, 'No', NULL, '1501-L0077', NULL),
(49, 1, 78, 5, 'No', NULL, '1501-L0078', NULL),
(50, 1, 79, 4, 'No', NULL, '1501-L0079', NULL),
(51, 1, 80, 5, 'No', NULL, '1501-L0080', NULL),
(52, 1, 82, 5, 'No', NULL, '1501-L0082', NULL),
(53, 1, 83, 1, 'No', NULL, '1501-L0083', NULL),
(54, 1, 84, 2, 'No', NULL, '1501-L0084', NULL),
(55, 1, 85, 5, 'Yes', 1, '1501-L0085', NULL),
(56, 1, 87, 5, 'No', NULL, '1501-L0087', NULL),
(57, 1, 88, 5, 'No', NULL, '1501-L0088', NULL),
(58, 1, 91, 5, 'No', NULL, '1501-L0091', NULL),
(59, 1, 94, 2, 'No', NULL, '1501-L0094', NULL),
(60, 1, 93, 5, 'No', NULL, '1501-L0093', NULL),
(61, 1, 95, 4, 'No', NULL, '1501-L0095', NULL),
(62, 1, 97, 2, 'Yes', 1, '1501-L0097', NULL),
(63, 1, 98, 2, 'No', NULL, '1501-L0098', NULL),
(64, 1, 101, 5, 'No', NULL, '1501-L0101', NULL),
(65, 1, 102, 5, 'No', NULL, '1501-L0102', NULL),
(66, 1, 99, 1, 'No', NULL, '1501-L0099', NULL),
(67, 1, 106, 2, 'No', NULL, '1501-L0106', NULL),
(68, 1, 107, 1, 'No', NULL, '1501-L0107', NULL),
(69, 1, 108, 4, 'Yes', 1, '1501-L0108', NULL),
(70, 1, 109, 1, 'No', NULL, '1501-L0109', NULL),
(71, 1, 110, 4, 'No', NULL, '1501-L0110', NULL),
(72, 1, 113, 4, 'No', NULL, '1501-L0113', NULL),
(73, 1, 114, 2, 'No', NULL, '1501-L0114', NULL),
(74, 1, 115, 1, 'No', NULL, '1501-L0115', NULL),
(75, 1, 116, 2, 'No', NULL, '1501-L0116', NULL),
(76, 1, 117, 2, 'No', NULL, '1501-L0117', NULL),
(77, 1, 118, 2, 'No', NULL, '1501-L0118', NULL),
(78, 1, 119, 5, 'No', NULL, '1501-L0119', NULL),
(79, 1, 121, 2, 'No', NULL, '1501-L0121', NULL),
(80, 1, 122, 5, 'No', NULL, '1501-L0122', NULL),
(81, 1, 124, 1, 'No', NULL, '1501-L0124', NULL),
(82, 1, 1, 5, 'No', NULL, '1501-L0001', NULL),
(83, 1, 126, 1, 'No', NULL, '1501-L0126', NULL),
(84, 1, 127, 1, 'No', NULL, '1501-L0127', NULL),
(85, 1, 128, 1, 'No', NULL, '1501-L0128', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `tx` varchar(35) DEFAULT NULL,
  `currency` varchar(5) DEFAULT NULL,
  `amount` decimal(7,2) DEFAULT NULL,
  `payStatus` varchar(25) DEFAULT NULL,
  `itemID` varchar(25) DEFAULT NULL,
  `payDate` datetime DEFAULT NULL,
  `mode` varchar(50) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `receiptNo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `tx`, `currency`, `amount`, `payStatus`, `itemID`, `payDate`, `mode`, `userID`, `cid`, `receiptNo`) VALUES
(35, '5FA60116099077327', 'MYR', '500.00', 'Completed', '1501-0108-0066', '2015-08-27 12:51:22', 'Online', 108, 1, NULL),
(34, '43A87530G4288525K', 'MYR', '600.00', 'Completed', '1501-0085-0075', '2015-08-27 09:47:23', 'Online', 85, 1, NULL),
(32, '', 'MYR', '20.00', 'Completed', '5V', '2015-05-12 16:37:21', 'Offline', 90, 1, '68768'),
(33, '5BE60157MM489743N', 'USD', '330.00', 'Completed', '1501-0097-0059', '2015-08-25 10:05:46', 'Online', 97, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE IF NOT EXISTS `quote` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `person` varchar(50) DEFAULT NULL,
  `quote` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`qid`, `person`, `quote`) VALUES
(1, 'Albert Einstein', 'Education is what remains after one has forgotten '),
(5, 'Robin Morgan', 'Knowledge is power. Information is power. The secreting or hoarding of knowledge or information may be an act of tyranny camouflaged as humility.\r\n'),
(6, 'Omar Khayyam', 'When I want to understand what is happening today or try to decide what will happen tomorrow, I look back\r\n'),
(7, 'Roy H. Williams', 'A smart man makes a mistake, learns from it, and never makes that mistake again. But a wise man finds a smart man and learns from him how to avoid the mistake altogether.\r\n'),
(8, 'James Madison', 'Knowledge will forever govern ignorance; and a people who mean to be their own governors must arm themselves with the power which knowledge gives.\r\n'),
(9, 'Charles Bukowski', 'Genius might be the ability to say a profound thing in a simple way.\r\n'),
(10, 'Henry Ford', 'Thinking is the hardest work there is, which is probably the reason why so few engage in it.\r\n'),
(11, 'F. Scott Fitzgerald', 'The test of a first-rate intelligence is the ability to hold two opposed ideas in mind at the same time and still retain the ability to function.\r\n'),
(12, 'Helen Gurley Brown', 'My success was not based so much on any great intelligence but on great common sense.\r\n'),
(13, 'Bryant H. McGill', 'An intelligent person is never afraid or ashamed to find errors in his understanding of things.\r\n'),
(14, 'Ed Parker', 'The intelligent man is one who has successfully fulfilled many accomplishments, and is yet willing to learn more.\r\n'),
(15, 'Michael Nesmith', 'Some ways of using our thinking are really inspiring. There are people who use their thinking to race cars. People use their thinking to build rockets to the moon. It''s all just a use of your thinking.\r\n'),
(16, 'Thomas A. Edison', 'Being busy does not always mean real work. The object of all work is production or accomplishment and to either of these ends there must be forethought, system, planning, intelligence, and honest purpose, as well as perspiration. Seeming to do is not doing.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `securecode`
--

CREATE TABLE IF NOT EXISTS `securecode` (
  `seid` int(255) NOT NULL AUTO_INCREMENT,
  `code` varchar(5) NOT NULL,
  PRIMARY KEY (`seid`),
  UNIQUE KEY `seid` (`seid`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `securecode`
--

INSERT INTO `securecode` (`seid`, `code`) VALUES
(62, '00OZX'),
(63, '09ZXC'),
(65, '1BKJH'),
(59, '31sAA'),
(69, '67hNA'),
(51, '76908'),
(64, '798AS'),
(50, '87190'),
(71, '99OpY'),
(67, 'aASD1'),
(52, 'ADSA1'),
(49, 'ajksd'),
(66, 'ALKJS'),
(53, 'ASDAD'),
(61, 'ASDN7'),
(58, 'CAasa'),
(56, 'CVB23'),
(68, 'JUH91'),
(73, 'nM921'),
(70, 's8AN2'),
(55, 'SDFSF'),
(72, 'u123M'),
(57, 'VEWQ2'),
(60, 'WHA67'),
(54, 'XCV21');

-- --------------------------------------------------------

--
-- Table structure for table `set_cat`
--

CREATE TABLE IF NOT EXISTS `set_cat` (
  `catID` int(11) NOT NULL AUTO_INCREMENT,
  `nameCat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`catID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `set_cat`
--

INSERT INTO `set_cat` (`catID`, `nameCat`) VALUES
(1, 'Conference Plan Status'),
(2, 'Currency'),
(3, 'Student Level'),
(4, 'Gallery Category'),
(5, 'Call For Paper'),
(6, 'Presentation Format'),
(7, 'Abstract Submission Detail'),
(8, 'Paper Status'),
(9, 'Payment Status'),
(10, 'Full Paper Submission'),
(11, 'Slot Time'),
(12, 'Followup Status');

-- --------------------------------------------------------

--
-- Table structure for table `set_fee`
--

CREATE TABLE IF NOT EXISTS `set_fee` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(50) DEFAULT NULL,
  `priceNormal` decimal(8,2) DEFAULT NULL,
  `priceEarly` decimal(8,2) DEFAULT NULL,
  `local` varchar(50) DEFAULT NULL,
  `currency` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `set_fee`
--

INSERT INTO `set_fee` (`fid`, `item`, `priceNormal`, `priceEarly`, `local`, `currency`) VALUES
(1, 'Presenter-Student', '300.00', '300.00', 'No', 'USD'),
(2, 'Presenter-Non Student', '370.00', '350.00', 'No', 'USD'),
(3, 'Listener', '300.00', '300.00', 'No', 'USD'),
(5, 'Presenter-Student', '500.00', '500.00', 'Yes', 'MYR'),
(6, 'Presenter-Non Student', '650.00', '600.00', 'Yes', 'MYR'),
(7, 'Listener', '500.00', '500.00', 'Yes', 'MYR');

-- --------------------------------------------------------

--
-- Table structure for table `set_field`
--

CREATE TABLE IF NOT EXISTS `set_field` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `catID` int(11) DEFAULT NULL,
  `fname` text,
  `fvalue` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `set_field`
--

INSERT INTO `set_field` (`fid`, `catID`, `fname`, `fvalue`) VALUES
(1, 1, 'Planning', ''),
(2, 1, 'Confirmed', ''),
(3, 1, 'Completed', ''),
(4, 2, 'MYR', ''),
(5, 2, 'USD', ''),
(8, 3, '<P>Student</P>', ''),
(9, 3, '<P>Non-Student</P>', ''),
(15, 4, 'Venue', 'ven'),
(16, 4, 'Accomodation ', 'acc'),
(17, 4, 'Food & Restaurant', 'food'),
(18, 4, 'Tourist Spot', 'tour'),
(19, 4, 'Shopping', 'shop'),
(20, 5, '<p>We welcome paper submissions. Prospective authors are invited to submit abstract or full papers electronically through the conference management system. All submissions to the conference will be reviewed by at least two independent peers for technical merit and content.</p><p>Abstracts are to be submitted in accordance with the following format:-&nbsp;</p><p></p><ol><li>Title (not more than 15 words) and name of presenters</li><li>Abstract (maximum 300 words).</li><li>Abstracts may be in English or Bahasa Melayu.&nbsp;</li><li>Please use our online submission system to submit your abstract&nbsp;</li></ol><div><br></div><div><h1>Types of Presentation</h1></div><div><h3>Oral presentation: 20 minutes &nbsp; &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp;&nbsp;Poster&nbsp; : 20 minutes</h3></div><div></div><div><br></div>', ''),
(21, 6, '<p></p><h3>Individual Papers</h3><p>Each presentation will be allocated a 20-minute time slot; 15 minutes for presentation followed by a 5 minute discussion. Papers are typically scheduled in a session of three presenters, which, where possible, will share a common theme.</p><h3>Posters</h3><p>Time will be scheduled during the conference for authors of posters to discuss their work with attendees. Presentation will be carried out in the normal presentation room for 20 minutes. &nbsp;At least one author of each accepted poster is required to register for the conference.</p><p></p>', ''),
(22, 7, '<p>All abstracts for full paper presentations may be submitted via the conference management system. &nbsp;Please&nbsp;<a href="acstair_abstract_style_guide.doc" target="_blank">click here</a>&nbsp;for conference submission guide.</p><p></p><ul><li>Abstracts for individual papers, posters should be 200-300 words in length (excluding references) and include 3-5 key words. &nbsp;</li><li>All abstracts should include a title, and a clear analysis of topic, theoretical orientations, and discourse analytical approach employed. Individuals may submit up to two abstracts should one of those is co-authored.</li><li>You will receive an acknowledgement upon receipt of your submission. Should you do not receive this, please contact the conference administrator at: info@acstair.com</li></ul><p></p><p></p>', ''),
(23, 8, 'New', 'New'),
(25, 8, 'Abstract Accepted. Please submit ..', 'AB-OK'),
(26, 8, 'Abstract Rejected. Please send the new one', 'AB-NG'),
(28, 8, 'Full Paper ACCEPTED.&nbsp;', 'FP-OK'),
(29, 8, 'Full Paper REJECTED. Please sent new revision to our email', 'FP-NG'),
(30, 9, 'New- Till abstract Accepted', 'New'),
(31, 9, 'Pending- Waiting Payment', 'Pending'),
(32, 9, 'Paid- Thank You', 'Paid'),
(34, 10, '<p>Full paper must not exceed 15 pages. Please&nbsp;<a href="http://acstair.com/webcon/acstair_style_guide.doc" target="_blank">click here</a>&nbsp;for full paper submission guide.</p><p><br></p>', ''),
(35, 11, '8.30-9.30', ''),
(36, 11, '9.30-10.30', ''),
(37, 11, '10.30-11.30', ''),
(38, 11, '11.30-12.30', ''),
(39, 11, '1.30-2.30', ''),
(40, 11, '2.30-3.30', ''),
(41, 11, '3.30-4.30', ''),
(42, 11, '4.30-5.30', ''),
(43, 8, 'Your paper will be review. &nbsp;Please proceed to payment', 'FP-REVIEW'),
(44, 12, 'Ask to Participate', 'R-JOIN'),
(45, 12, 'Ask Abstract', 'R-ABS'),
(46, 12, 'Ask Payment (w Abstract)', 'R-PAY-ABS'),
(47, 12, 'Ask Payment (w FP)', 'R-PAY-FP'),
(48, 12, 'Req Full Paper', 'R-FP');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `fullName` varchar(50) DEFAULT NULL,
  `gender` varchar(22) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `postal` varchar(8) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `institution` varchar(100) DEFAULT NULL,
  `faculty` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `research` varchar(50) DEFAULT NULL,
  `student` varchar(5) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `note` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=131 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `email`, `password`, `fullName`, `gender`, `address`, `postal`, `city`, `state`, `country`, `tel`, `fax`, `institution`, `faculty`, `department`, `research`, `student`, `role`, `note`) VALUES
(1, 'kopiaman@yahoo.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Salman', 'Male', '29 Jalan Kajang Impian 2/11', '43650', 'Bandar Baru Bangi', 'Selangor', 'Malaysia', '', '', 'UTeM', 'Design', 'Mech', '', 'No', 'admin', NULL),
(39, 'cnyrich@gmail.com', '6f8c2ab63611669b2c4217ac44f5ca18', 'Dr. Cynthia Yolanda Doss', 'Female', '27 jalan 14/54 Petaling jaya', '46100', 'Petaling jaya', 'Selangor', 'Malaysia', '0123955279', '', 'Universiti Teknologi MARA', 'Academy of Language Studies', 'language and Linguistics', 'critical thinking and cognitive mapping', 'No', NULL, NULL),
(40, 'shaikhi33@hotmail.com', 'e6f09566b7527dc1276b69df5e1d9955', 'MOHAMMED ALSHAIKHI', 'Male', '68 De beaviour road', 'RG1 5NP', 'READING', 'BERKSHIRE', 'UK', '07474123134', '', 'UNIVERSITY OF READING', 'Education', 'Education', 'ICT in education', 'Yes', '', 'R-JOIN'),
(41, 'ali.behzadnia@yahoo.com', 'a374c90cd07c80b019666856e724a909', 'ali behzad', 'Male', 'Sorush Street', '93147447', 'Neyshabur', 'Khorasan Razavi', 'Iran', '+9360867989', '', 'Azad University of Neyshabur', 'Humanities', 'ELT', 'Language education', 'Yes', NULL, NULL),
(42, 'deptibhuban@yahoo.com', '83db35490a23ce701a6d1a2a922e6091', 'Debasis Chowdhury Rana', 'Male', '19B/4D Ring Road, Shamoly,Dhaka', '1207', 'Dhaka', 'Bangladesh', 'Bangladesh', '8802912433', '', 'Deepti Bhuban', 'Education', 'NGO', 'Education', 'No', NULL, NULL),
(43, 'lilliansampath@gmail.com', 'b3ac79477ec5304bcaa4486def749444', 'Lillian', 'Female', '17,Banjara Nagar, Trimulgherry,', '500015', 'Secunderabad', 'Telengana', 'India', '+91 9848909388', '', 'Model Mission High School', 'Headmistress', 'Administration', '', 'No', NULL, NULL),
(44, 'syayid@gmail.com', 'e24f6fdc6e5fd13a0c5df51891d91c31', 'Syayid Sandi Sukandi', 'Male', 'Jln. Flores Gg I No. 14 Ulak Karang', '25133', 'Padang', 'Sumatera Barat', 'Indonesia', '+6281275978887', '', 'College of Teacher Training and Education of West Sumatra', 'Education', 'English Education', 'Teaching of Writing (Rhetoric and Composition)', 'No', '', NULL),
(45, 'lovelysachu@yahoo.com', '9000bdf5b617c3135bf0e42992159f08', 'Sarasvati A/P Rajindra', 'Female', '63 Jalan Ramin 1 / KS 7,Bandar Botanic', '41200', 'KLANG', 'SELANGOR', 'MALAYSIA', '012 4164665', '', 'TERRA COLLEGE ', 'EDUCATION', 'LANGUAGE AND LITERACY', 'LANGUAGE AND LITERACY', 'No', '', NULL),
(46, 'acquasi@aol.com', '0a821a81fea120ab7c6cbef7df9c8273', 'Alexander Asumadu', 'Male', 'P.O. Box mc 1020', '0000', 'Takoradi', 'W/R', 'Ghana', '233206737373', '', 'University of Proffesional Studies', 'Adminstration', 'Diploma in Management', '', 'No', NULL, 'R-JOIN'),
(53, 'spavsto@hotmail.com', '0e1a1aeb97c16c9c5818e4e24178abb0', 'La Sana Groome', 'Female', '14 black rock new road', '00000', 'black rock', 'tobago', 'trinidad and tobago', '8684778931', '', 'Tobago Hospitality and Tourism Institute', 'English and COmmunication', 'English and Communication', '', 'No', NULL, NULL),
(54, 'nurain1986@yahoo.com', '634627d4d75ef24f0960ad16dcaa0b47', 'NURAIN REDZALI', '', 'no 1777 lorong 38', '08000', 'sungai petani', 'Kedah', 'Malaysia', '+601122471377', '', 'UNIVERSITI SAINS MALAYSIA', 'Centre of Instructional technology and Multimedia', '', 'Blended Learning', 'Yes', NULL, 'R-JOIN'),
(55, 'anu.nandini.priya@gmail.com', 'dd9df61ac03f7ab078a0012a7d225526', 'Anupriya', 'Female', 'Room. no. 14, Sabarmati hostel, jnu, new Delhi', '110067', 'New Delhi', 'New Delhi', 'India', '9968907880', '', 'Jawaharlal Nehru University, New Delhi', 'Humanities', 'Linguistics', 'Social Networking Sites', 'Yes', NULL, NULL),
(56, 'ramziah_88@yahoo.com', '5dc6935a868b8e07e5ba885b737cc564', 'Nur Ramziahrazanah Jumat', 'Female', 'UMS, Jalan UMS', '88400', 'Kota Kinabalu', 'Sabah', 'Malaysia', '0138569301', '', 'Universiti Malaysia Sabah', 'Preparatory Centre for Science and Technology', '', 'Immunobiology', 'No', NULL, 'R-JOIN'),
(57, 'shafinaz@unikl.edu.my', '076f358baff391f8153b76743bbfa5df', 'Shafinaz Elinda Saadon', 'Female', 'Lot 2891, Jenderam Hulu', '43800', 'Dengkil', 'Selangor', 'Malaysia', '0387688485', '', 'UniKL', 'MIAT', 'Technical Foundation', 'Mathematics e-learning', 'No', NULL, NULL),
(58, 'azlinda@unikl.edu.my', '037712092b20eace4b8a692821acf5c1', 'AZLINDA ABU BAKAR', 'Female', 'LOT 2891 JENDERAM HULU', '43800', 'DENGKIL', 'SELANGOR', 'MALAYSIA', '+60192887011', '', 'UNIKL', 'MIAT', 'MECHANICAL', 'EDUCATION', 'No', NULL, NULL),
(59, 'abby.shepherds@gmail.com', 'f6888820a6cfb7ad877015ade6ffac7b', 'Yakshinee Jayabalan', 'Female', 'no 7 jalan usj 13/2', '47600', 'SUBANG JAYA', 'selangor', 'Malaysia', '0123125221', '', 'SEGi College Kuala Lumpur', 'Business', '', '', 'No', NULL, 'R-JOIN'),
(60, 'dalila@usim.edu.my', 'f086abd5d5af89044ad1de57897eff40', 'Nur Dalila Mohamad Nazri', 'Female', 'Nilai', '71800', 'Nilai', 'Negeri Sembilan', 'Malaysia', '0173695421', '', 'USIM', 'Faculty of Major Language Studies', 'English Language Unit', 'TESL, Education', 'No', NULL, NULL),
(61, 'liza@unissa.edu.bn', 'a637a3b6037d3ea6fc6077eeb125433e', 'LIZA MARIAH HJ AZAHARI', 'Female', 'SIMPANG 347, JALAN PASAR BAHARU', 'BE1310', 'GADONG', 'BSB', 'Brunei', '6737252670', '', 'Sultan Sharif Ali Islamic University', 'CENTRE FOR PROMOTION OF KNOWLEDGE AND LANGUAGES', '', 'TEACHING ENGLISH AS A SECOND LANGUAGE', 'No', NULL, 'R-JOIN'),
(62, 'wswa3411@gmail.com', 'c9ed71c2c2071a2d557e3a9540a11dce', 'WAN SHAHIDA BINTI WAN ABDULLAH', 'Female', 'LOT 2835 JALAN MAKMUR, ALOR LINTANG', '22200', 'BESUT', 'TERENGGANU', 'Malaysia', '0199533411', '', 'UUM', 'EDUCATION', 'MATHEMATICS', 'MATHEMATICS EDUCATION', 'Yes', NULL, 'R-JOIN'),
(63, 'chaly062@yahoo.com', '9b7c444d4c7b142ae0810f14760c0f49', 'sinchai suwanmanee', 'Male', '140 Kanjanavanit Road', '90000', 'Moung Songkhla', 'Songkhla', 'Thailand', '660890380331', '', 'Education Administration', 'Educatin', 'Thaksin University', 'Education Administration (multicultural)', 'No', NULL, NULL),
(64, 'nayeem18135@yahoo.com', '5c5a1dd46307e78cc0165b5eedd6f2bc', 'Md. Abu Nayeem Chowdhury', 'Male', '133, R. K. Mission Road', '1203', 'Dhaka', 'Dhaka', 'Bangladesh', '+8801911118120', '', 'BRAC University', 'BRAC Business School', 'Humen Resources Management &amp; Marketing', '', 'Yes', NULL, 'R-JOIN'),
(65, 'hchiu@ouhk.edu.hk', 'fc546841aecd24d09ca5fd4385cf026f', 'Hazel Chiu', '', '30 Good Shepherd Street, Ho Man Tin, Kowloon', '852', 'Hong Kong', 'Hong Kong', 'Hong Kong', '27685819', '', 'The Open University of Hong Kong', 'Schhol of Education and Languages', '', 'English Language Education', 'No', NULL, NULL),
(66, 'nurulhijah@johor.uitm.edu.my', '3db7dbee19cc0e1a765448ada8665c08', 'Nurul Hijah bte Jasman', 'Female', 'No 226 Lorong Cempaka Batu 36, Jalan Johor, Pontian, Johor', '82000', 'Pontian', 'Johor', 'Malaysia', '0197839828', 'None', 'Universiti Teknologi MARA', '', 'Academy of Language Studies', 'Education', 'No', NULL, NULL),
(67, 'linkabroadbd@gmail.com', '3ebf4d09b585f9de4b9f56a5efb4e6be', 'mohammad nasir uddin', 'Male', 'green Taj center ,3rd floor,suit-f3,road no-8/a(old 15/a),dhanmondi', '1209', 'Dhaka', 'Dhaka', 'Bangladesh', '+8801614000999', '', 'Global  Link', '', '', '', 'No', NULL, NULL),
(68, 'fawzia@squ.edu.om', '2763c0508cfe425555ee0150aa708e17', 'Fawzia Al Seyabi', 'Female', 'SQU AL Khoudh', '123', 'Muscat', 'Muscat', 'Oman', '0096899241037', '', 'Sultan Qaboos University', 'Education', 'Curriculum and Instruction', 'ELT', 'No', NULL, NULL),
(69, 'siriporn.y@fte.kmutnb.ac.th', '611426864325c6860d6b6a99f0610ea4', 'Siriporn Yangsuay', 'Female', '1518 Pracharat 1 Road,Wongsawang', '10800', 'Bangsue', 'Bangkok', 'Thailand', '0-2587-4352', '', 'King Mongkut University of Technology North Bangkok', 'Faculty of Technical Education', '', '', 'No', NULL, NULL),
(70, 'lutsaqib@gmail.com', '01e30c4472738a42a8fcfdd51a8afe67', 'Lutfullah saqib', 'Male', 'UNIVERSITY OF SWAT', '44000', 'Swat', 'KPK', 'Pakistan', '03335631763', '', 'university of Swat', 'law and Shariah', 'Law and Shariah', 'law', 'No', '', NULL),
(71, 'norasyikinm77@yahoo.com', '4940e55510f884869f26bb1997ecbb20', 'Norasyikin mahmud', 'Female', 'PT 1985 Phase 5A, Taman Kurnia Jaya, Pengkalan Chepa,', '16100', 'Kota Bharu', 'Kelantan', 'Malaysia', '0199888190', '', 'Universiti kebangsaan Malaysia', 'Education', 'TESL', 'Esl Writing teaching', 'Yes', NULL, NULL),
(72, 'ahmedatif333@hotmail.com', '3d9188577cc9bfe9291ac66b5cc872b7', 'Ahmad Atif Alshehri', 'Male', 'P.O. Box 69', '61937', 'Almajarda', 'Aseer', 'Saudi Arabia', '00966509774053', '', 'Najran University', 'Education', 'curriculum and instruction', 'English language Teaching', 'No', NULL, NULL),
(73, 'patanim@gmail.com', '369c1d77e9067e24fc4fb57d32e5b049', 'NOOR HANIM RAHMAT', 'Female', 'NO 8 JALAN BAYAN 8 TAMAN SCIENTEX', '81700 PA', 'JOHOR BAHRU', 'Other (Non US)', 'Malaysia', '+60162155797', '', 'University Technology Mara', 'Language Academy', 'English', 'Teaching of Writing, Teaching of Reading, Listenin', '', NULL, NULL),
(74, 'smaniram27@yahoo.com', '536fc3c9877b0de2d523309bc504ca65', 'Mani Ram Sharma', 'Male', 'kathmandu', '', 'kathmandu', '', 'Nepal', '+9779841051974', '', 'Tribhuvan Univ, Nepal', 'Education', 'English', 'language teaching', 'Yes', NULL, 'R-JOIN'),
(75, 'khaulahriddzwan@gmail.com', '4ba79f704a44701494b057183ebea00a', 'Khaulah Riddzwan', 'Female', 'no 12, Jalan helang 7, Taman scientex', '81700', 'Pasir Gudang', 'Johor', 'Malaysia', '0136048789', '', 'Universiti Teknologi Mara', 'Akademi Pengajian Bahasa', 'Bahasa Asia', 'Teaching Foreign Language, Teaching Arabic', 'No', NULL, NULL),
(76, 'marhum_tadulako_uni@yahoo.co.id', '1aa561722d4ac9f122e6c949e836203e', 'Mochtar Marhum, PhD.', 'Male', 'Faculty of Education (FKIP) Universitas Tadulako', '94118', 'Palu', 'Provinsi Sulawesi Tengah', 'Indonesia', '+6281355388322', '', 'Tadulako University Indonesia', 'Education', 'Languages and Arts Education', 'Sociolinguistics and Education', 'No', NULL, NULL),
(77, 's3443243@student.rmit.edu.au', '5a91333103ff0aa4b2aab6b28f8d33bb', 'Ahmed Alharbi', 'Male', '1/10 O''dowd S, Reservoir', '3073', '', 'VIC', 'Australia ', '+61416152476', '', 'RMIT University', '', '', '', 'No', '', NULL),
(78, 'mariati@unikl.edu.my', '58596470ac1819d9a4ca33cf3d9d16f2', 'Mariati Mohd. Salleh', 'Female', 'Bandar Vendor Taboh Naning, Alor Gajah', '75350', 'Alor Gajah', 'Melaka', 'Malaysia', '065512028/2000', '065512003', 'Universiti Kuala Lumpur MICET', 'Chemical and Bioengineering Technology', 'General Studies, Section of Student Development', 'Language, Sociolinguistics, Social media', 'No', NULL, NULL),
(79, 'amirul_shafik24@yahoo.com', '1df692b0eaf4da0f2b523f572c8746bf', 'A TESL student', 'Male', 'Faculty of Education', '43600', 'Bangi', 'Selangor', 'Malaysia', '0194630210', '', 'The National University of Malaysia', 'Faculty of Education', 'Department of TESL', 'Second Language Teaching and Learning', 'Yes', NULL, NULL),
(80, 'sharifaeda@yahoo.com', 'd4e499bb72c75d47d46c2896b6fc8930', 'DR. SHARIFA EDA BTE WAN PUTEH ALKAFF', 'Female', '26 JALAN SETIAWANGSA 3A, TAMAN SETIAWANGSA', '54200', 'KUALA LUMPUR', 'WILAYAH PERSEKUTUAN', 'Malaysia', '0196593158', '', 'SMK TAMAN SETIAWANGSA', '-', 'ENGLISH', 'LINGUISTIC KNOWLEDGE and  LEXICAL RETRIEVAL', 'No', NULL, NULL),
(81, 'liliperpisa@gmail.com', '1c497f6092a19e7dc3b557f2231bf687', 'Lili Perpisa', 'Female', 'Perum Villa Bukit Gading Permai Tahap 3, Blok M2', '25159', 'Padang', 'Sumbar', 'Indonesia', '085363335317', '-', 'STKIP PGRI SUMATERA BARAT, PADANG, INDONESIA', 'ENGLISH EDUCATION', 'ENGLISH', 'TEACHING ENGLISH', 'No', NULL, 'R-JOIN'),
(82, 'nurhanani@ns.uitm.edu.my', 'f60f26630bc5ff656075959d2d11de5e', 'Nurhanani Aflizan Mohamad Rusli', 'Female', 'Persiaran Seremban Tiga / 1, Seremban 3', '70300', 'Seremban', 'Negeri Sembilan', 'Malaysia', '06-634200o', '', 'UiTM Seremban Campus , Negeri Sembilan', 'Faculty of Business Management', 'Economic', 'Economic , Education', 'No', NULL, NULL),
(83, 'catfish3789@yahoo.com', 'd09b562bcc95a5a7408a224f4b90e51c', 'CATALINO NOCEJA MENDOZA', 'Male', 'Hilltop', '4200', 'Batangas', 'Philippines', 'Philippines', '09209830967', '', 'UNIVERSITY OF BATANGAS', '', 'Center for Publications, Research, Linakages and L', 'Education, Business and Management, Environment, S', 'Yes', NULL, NULL),
(84, 'muhammadtunde2011@gmail.com', '57c27c439ee2eceff1f63fe4fa3208f7', 'YAQUB MUHAMMAD OLATUNDE', 'Male', 'PMB 0001 LAGOS STATE UNIVERSITY', '234', 'LAGOS', 'LAGOS', 'NIGERIA', '2348033444731', '', 'LAGOS STATE UNIVERSITY', 'ART5', 'FOREIGN LANGUAGES', 'ARABIC LANGUAGE AND LINGUISTICS', 'No', NULL, NULL),
(85, 'nadzrahsaadan@gmail.com', 'e94f03582d1e4951e82a3a364228a59b', 'nadzrah', '', 'no 1b, lorong tawakal', '83300', 'batu pahat', 'johor', 'Malaysia', '0182320511', '', 'uitm', 'education', 'apb', 'esl', '', NULL, NULL),
(86, 'agdeppajoan@gmail.com', '4b95e29c316a5005b69e9d00be205ef6', 'Joan Agdeppa', 'Female', 'Unit 221A, Tower 1, Moragn Residences, Mckinley Hill', '1634', 'Taguig', 'Philippines', 'Philippines', '09166934454', '', 'National University', 'Faculty', 'Department of English', 'Language Teaching', 'No', NULL, 'R-JOIN'),
(87, 'shari348@johor.uitm.edu.my', '67b08d00f7e66657a3411ef20e0e9828', 'Sharifah Amani Binti Syed Abdul Rahman', 'Female', 'Jalan Purnama, Bandar Seri Alam', '81750', 'Bandar Seri Alam', 'Masai', 'Malaysia', '019-7305566', '', 'UiTM Johor Branch, Pasir Gudang Campus.', 'Academy of Language Studies', '', '', 'No', NULL, NULL),
(88, 'maisa691@johor.uitm.edu.my', '313acbbd1d5c7487487b74f3bb7a700d', 'maisarah noorezam', 'Female', 'UiTM Johor, Kampus Pasir Gudang', '81750', 'Masai', 'Johor', 'Malaysia', '0124847323', '', 'UiTM', 'Academy of Language Studies', '', 'Online learning', 'No', NULL, NULL),
(90, 'kopiah2@gmail.com', NULL, 'Salman Ahmad Tajudin', 'Male', '29 jalan kajang impian 2/11', '43650', 'Bandar Baru Bangi', '', 'Malaysia', '', '', 'UTEM', '', '', '', 'No', '', 'R-JOIN'),
(91, 'Tiniey_143@yahoo.com.my', 'b908e94e477b3ea986af06b52cfc893e', 'NORHARTINI BINTI ARIPIN', 'Female', 'UiTM Cawangan Johor, Kampus Pasir Gudang, Jalan Purnama, Bandar Seri Alam', '81750', 'Masai', 'Johor', 'Malaysia', '012-6599016', '', 'UITM PASIR GUDANG', 'Academy of language Studies', '', 'Language apprehension (speaking&amp;communication)', 'No', NULL, NULL),
(92, 'lnettikumara@gmail.com', '6a670fed44634a9e6967bc5cec37840b', 'Nettikumara Appuhamilage Lakshmi Apsara Nettikumar', 'Female', '5B, Weniwelgodella Minuwangoda SriLanka', '1155', 'Minuwangoda', 'Western province', 'Sri Lanka', '+94718130160', '', 'University of Colombo', 'Faculty of Education', 'Depatrment of Humanities', 'Bilingual Education', 'Yes', NULL, 'R-JOIN'),
(93, 'mohdfadhili@perlis.uitm.edu.my', '2faaae1e22710ee273649b90e3994c7d', 'Dr Mohamad Fadhili Yahaya', 'Male', 'Kampus Arau', '02600', 'ARAU', 'Perlis', 'Malaysia', '0124555164', '', 'Universiti Teknologi MARA Perlis', 'Academy of Language Studies', '', 'TESOL', 'No', NULL, NULL),
(94, 'anggraini2000@yahoo.com', 'a824f78370aae77c1209802996408008', 'Indrani Dewi Anggraini', 'Female', 'Jl. Gardu Srengseng - Jagakarsa', '12640', 'Depok', 'Jawa Barat', 'Indonesia', '+62817816052', '+6278884310', 'SEAMEO Qitep in Language', '', '', '', 'No', NULL, NULL),
(95, 'estonella@yahoo.com', 'ed44f16cb654a299fa3e5ca215b11161', 'Mimi Estonella Mastan', 'Female', '123', '70300', 'Seremban 2', 'N. Sembilan', 'Malaysia', '0123918651', '', 'UKM, Bangi, Malaysia', 'Education', '', 'writing', 'Yes', NULL, NULL),
(96, 'nsliana283@gmail.com', 'e99edb78fd37bfc25d5e8799760a3d6a', 'Nor Suhardiliana Sahar', 'Female', 'Universiti Malaysia Pahang, Lebuhraya Tun Razak, Gambang', '26300', 'Kuantan', 'Pahang', 'Malaysia', '0179604696', '095493112', 'Universiti Malaysia Pahang', 'Centre for Modern Languages and Human Sciences', 'Modern Languages', 'English Language', 'No', NULL, 'R-JOIN'),
(97, 'wongmh@ied.edu.hk', '40b123ceedce6012b86e1772a5256ea2', 'Ruth Ming Har Wong', 'Female', '10 Lo Ping Road', 'NT', 'Tai Po', 'NT', 'Hong Kong', '29488341', '29487272', 'The Hong Kong Institute of Education', 'FLASS', 'English Language Education', 'English Language Teaching and Learning', 'No', NULL, NULL),
(98, 'oloyinimam@gmail.com', 'e3b43d6e34cd96600e648207cfd58703', 'Aliyu Abdulkadir Al-asali', 'Male', '1144, Gujba Road, Damaturu', 'P.M.B.', 'Damaturu', 'yobe', 'Nigeria', '+2348030507705', '', 'Yobe State University, Damaturu- Nigeria', 'Arts and Humanities', 'Arabic', 'arabic crictism', 'No', NULL, NULL),
(99, 'rogoidris@gmail.com', '8ea698d406cf45eea03d47cb03fa871a', 'Idris Salisu Rogo', 'Male', 'School of Continuing Education, Bayero University, Kano, Nigeria', 'PMB 3011', 'Kano', 'Kano', 'Nigeria', '+2348033570856', '3011', 'Bayero University, Kano', 'Education', 'Education', 'Educational Psychology', 'Yes', NULL, NULL),
(100, 'in_2104@yahoo.com', '47d1326449f63883c8f22913b74440d2', 'Azrina', 'Female', 'No 37,jalan 4/8A', '44650', 'Kajang', 'Selangor', 'Malaysia', '0192182848', '', 'Universiti kebangsaan malaysia', 'Education', '', 'Tesl', 'Yes', NULL, 'R-JOIN'),
(101, 'najib@usim.edu.my', '5c757a89dd37a72a4353a5c310a12965', 'Mohammad Najib Jaffar', 'Male', 'Bandar Baru Nilai', '71800', 'Nilai', 'Negeri Sembilan', 'Malaysia', '067986759', '067986755', 'Universiti Sains Islam Malaysia', 'Faculty of Major Languages Studies', '', 'Arabic for Specific Purposes, Applied Linguistics', 'No', NULL, NULL),
(102, 'nuriella_bella@yahoo.com', '860c030e233d876f9b2e4dfdff91bb34', 'Nursuhaila bte Ibrahim', 'Female', 'A-10-1-6 VISTA SERI ALAM, PERSIARAN SERI ALAM, BANDAR SERI ALAM, 81750, MASAI, JOHOR', '81750', 'MASAI', 'Johor', 'Malaysia', '0133003941', '', 'Universiti Teknologi MARA', 'Academy of Language Studies', 'English', 'ESL', 'No', NULL, NULL),
(103, 'williams@aiu.ac.jp', '2c2ff03097d2b09fc91306b8411c013d', 'Clay Williams', 'Male', 'Yuwa', '010-1211', 'Akita city', 'Akita', 'Japan', '+81-80-3195-1842', '', 'Akita International University', 'Graduate School of Global Communication and Langua', 'English Language Teaching Practices', 'Psycholinguistics; Reading Processing; Pedagogical', 'No', NULL, 'R-JOIN'),
(104, 'kiyawaharuna@gmail.com', '2ea27879d188a6912db5c845bdd07922', 'Haruna Alkasim kiyawa', 'Male', 'Block 11 q room 003, maybank residential hall', '06010', 'Sintok', 'Kedah', 'Malaysia', '601116581135', '', 'University Utara Malaysia', 'school of education and modern languages', 'Linguistics', 'Applied linguistics', 'Yes', NULL, 'R-JOIN'),
(105, 'rohaymd@yahoo.com', '036fa54163561f09a6fee185b475565f', 'Rohaida Maunting-Derogongan', 'Female', '033 Steelmaker Village Tubod Baraas', '9200', 'Iligan City', 'Lanao del Norte', 'Philippines', '09071971623', '', 'Mindanao State University', 'Assostant Professor Ii', 'English', 'Language ang Education', 'No', NULL, 'R-JOIN'),
(106, 'akpangody4@yahoo.com', '954021944eb81989bb85156d6b8679e4', 'Dr. Godwin Akpan', 'Male', 'College of Education, Afaha Nsit, Akwa Ibom State, Nigeria', '1019', 'Etinan', 'Akwa Ibom State', 'Nigeria', '23408036936944', '', 'College of Education, Afaha Nsit, Akwa Ibom State, Nigeria', 'Languages', 'Language', 'Teaching English as a Second Language', 'No', NULL, NULL),
(107, 'lokamuonline@gmail.com', '9f79bcc6bced7db080bc09720a178265', 'Ghitha Loka Yuniar', 'Female', 'Sarimanah street no. 13/15 Bandung', '40151', 'Bandung', 'West Java', 'Indonesia', '+62 878 2525 6 444', '', 'Indonesia University of Education', '', 'Early Childhood Education Department', 'Early Childhood Education; Teaching English as For', 'Yes', NULL, NULL),
(108, 'skgerald08@yahoo.com', '44967aae69307945e3bb754044071c64', 'SANDY KARIKI @ GERALD', 'Male', 'TB12371, Lrg 10/2,', '91000', 'Tawau', 'Sabah', 'Malaysia', '0168298215', '', 'Universiti Malaysia Sabah', 'Fakulti Psikologi dan Pendidikan', 'Pendidikan', 'Evaluation in Education (Testing and Measurement)', 'Yes', NULL, NULL),
(109, 'temel.merve@hotmail.com', '3b38a4b1ef9c235e5927bc10109b130d', 'Merve Temel', 'Female', 'Istiklal Mh. YaylÄ± 2 Sk. No:16', '43040', 'Kutahya', 'Merkez', 'Turkey', '905366604886', '', 'Cukurova University', 'The Institute of Social Sciences', 'English Language Teaching', 'Affective Factors in English Language Learning and', 'Yes', NULL, NULL),
(110, 'hadi8584ibrahim@gmail.com', 'fe895d4a078cc627ced6fcafa7310289', 'mr hadi ibrahim', 'Male', 'fakulti pendidikan, uni kebangsaan malaysia', '43600', 'bangi', 'selangor', 'Malaysia', '013 4664838', '', 'universiti kebangsaan malaysia', 'fakulti pendidikan', 'jab pendidikan dan kesejahteraan komuniti', 'pendidikan', 'Yes', NULL, NULL),
(111, 'w.turner@ecu.edu.au', '0d9e637e6ecd3321d511acb96e907ffe', 'Will Turner', 'Male', 'Joondalup Drive', '6025', 'Joondalup', 'WA', 'Australia', '0061863042664', '', 'Edith Cowan University', 'Education &amp; Arts', 'Education', 'Multimodal teaching and learning', 'No', NULL, 'R-JOIN'),
(112, 'dr_abomathani@yahoo.com', '7aa36edb0450a66958e97bb73a194ba1', 'Ahmed Hantoul', 'Male', 'Jazan University', '5911', 'Jazan', 'Jazan', 'Saudi Arabia', '0500983994', '', 'Jazan University', 'Education', 'psychology', '', 'No', NULL, 'R-JOIN'),
(113, 'syedfazz@yahoo.com.my', '7339f5e93a4c32a34037c003e717a88b', 'Fazidah Mohd Gani', 'Female', 'Pusat Pengajian Pascasiswazah', '88400', 'Kota Kinabalu', 'Sabah', 'Malaysia', '0198817108', '', 'Universiti Malaysia Sabah', 'Fakulti Psykologi dan Pendidikan', 'Pendidikan', 'Perkembangan Seni Kanak-Kanak  Peringkat Pra dan S', 'Yes', NULL, NULL),
(114, 'bautista.ep@pnu.edu.ph', '1196bdebeddf70bcf7909e5c57c9f8bc', 'Elma P. Bautista', 'Female', 'Tallungan', '3303', 'Reina Mercedes', 'Isabela', 'Philippines', 'NA', 'NA', 'Philippine Normal University-North Luzon campus', 'Faculty of Teacher Development', 'Arts and languages', 'Language', 'No', NULL, NULL),
(115, 'adebrianmustafa@gmail.com', '90e8dd3b20f4d8a850674f81ef33d416', 'Ade Brian Mustafa', 'Male', 'Babakan Lio, Dramaga, Bogor', '16680', 'Bogor', 'Indonesia', 'Indonesia', '+62 878 7400 3329', '', 'Bogor Agricultural University', 'Agriculture', 'Soil Science and Land Resources', 'Soil Biotechnology studies', 'Yes', NULL, NULL),
(116, 'anipurjayanti@gmail.com', '1296e10224fa0ea6e621ce8b9d099445', 'Ani Purjayanti', 'Male', 'Vila Bogor Indah blok DD 1 No.3', '16157', 'Bogor', 'West Java', 'Indonesia', '082225260683', '', 'Bogor Agricultural University (IPB)', 'Economics and Management', 'Management', 'Language Teaching, material development', 'No', NULL, NULL),
(117, 'emanuelsunarto@gmail.com', '994b1431db5b85b47635c49268fdf465', 'EMANUEL SUNARTO', 'Male', 'MRICAN, CATUR TUNGGAL DEPOK SLEMAN', '55281', 'YOGYAKARTA', 'DI YOGYAKARTA', 'INDONESIA', '62081 227 116 905', '', 'SANATA DHARMA UNIVERSITY', 'TEACHER TRAINING AND EDUCATION', 'ENGLISH LANGUAGE EDUCATION STUDY PROGRAM', 'DISCOURSE ANALYSIS, MODALITY', 'No', NULL, NULL),
(118, 'asha.choubey@gmail.com', '40e16129eafb6694a6ff7b89792b0322', 'Asha Choubey', 'Female', '57-E, Model Town', '243122', 'Bareilly', 'UTTAR PRADESH', 'India', '9412067014', '', 'MJP Rohilkhand University, bareilly. U.P. India.', 'Faculty of Engineering &amp; Technology', 'Humanities', 'ELT', 'No', NULL, NULL),
(119, 'khaulah7337@johor.uitm.edu.my', '50427b4c093bb76ef2d8ca9eaa7c4223', 'Khaulah Riddzwan', 'Female', 'no 12, Jalan helang 7, Taman scientex', '81700', 'Pasir Gudang', 'Johor', 'Malaysia', '0136048789', '', 'Universiti Teknologi Mara', 'Akademi Pengajian Bahasa', '', '', '', NULL, NULL),
(120, 'n.syaidatul24@gmail.com', '34600f7f6065d3dbc1eb33ee6525f7d5', 'Nurulsyaidatul akma binti ali', 'Female', 'w/p manir', '21200', 'k.terengganu', 'terengganu', 'Malaysia', '60129865751', '', 'sk beladau kolam', '', '', '', 'No', NULL, 'R-JOIN'),
(121, 'nishatnazmi@hotmail.com', 'acb2f7e6142e7c74c8a8aa689cd5eb90', 'Sheikh Nishat Nazmi', 'Female', 'H# CWN(B) 14, R# 35, Gulshan-2,', 'Dhaka-12', 'Dhaka', 'Dhaka', 'Bangladesh', '+8801711082222', '', 'Plan International Bangladesh', 'Inclusive Education Coordinator', 'Quality Primary Education Programme', 'Programme', 'No', NULL, NULL),
(122, 'zainiah@fppm.upsi.edu.my', '86de187e56acc856cfdc01c75880f8b4', 'Zainiah Mohamed Isa', 'Female', 'Fakulti Pendidikan dan Pembangunan Manusia', '35900', 'Tanjong Malim', 'Perak', 'Malaysia', '0133331291', '', 'Universiti Pendidikan Sultan Idris', 'Fakulti Pendidikan dan Pembangunan Manusia', 'Pendidikan Awal Kanak-kanak', 'Literacy', 'No', NULL, NULL),
(123, 'farahyunos70@gmail.com', '8aa7b5b9eb7770ca71dc6b59b3136964', 'Farah Abd Yunos', 'Female', 'A01 C06 Armanee Terrace Condo Jalan PJU8/1', '47820', 'Damansara Perdana', 'Selangor', 'Malaysia', '60122705321', '', 'OUM', 'Postgraduate', 'Language', 'TESOL', 'Yes', NULL, 'R-JOIN'),
(124, 'sultan.unm@gmail.com', 'da58a8495a146872626a9cb1c790b9e3', 'Sultan', 'Male', 'Jombang I No. 125', '65115', 'Malang', 'East Java', 'Indonesia', '08124271409', '', 'Universitas Negeri Malang', 'Postgraduate', 'Indonesian Language Education', 'Teaching Reading', 'Yes', NULL, NULL),
(125, 'haris.sw2@gmail.com', 'adc2477bfaae62c5135b550a96b018d0', 'haris sriwindono', 'Male', 'jl afandi 28', '52000', 'yogyakarta', 'diy', 'Indonesia', '62818466656', '', 'sanata dharma university', 'science and tech', 'informatics', 'technology acceptance', 'No', NULL, 'R-JOIN'),
(126, 'didin.widyartono@gmail.com', '7b142ec58cfc1c55bfe2c270c546ff85', 'Didin Widyartono', 'Male', 'Perum Sapta Royal Park No. 16 Bandulan 8', '65146', 'Malang', 'Jawa Timur', 'Indonesia', '+6281233692121', '', 'Universitas Negeri Malang', 'Program Pascasarjana', 'Pendidikan Bahasa Indonesia', 'Pembelajaran Bahasa Indonesia', 'Yes', NULL, NULL),
(127, 'sittirachmimasie@yahoo.com', '25c8638032368855b13e7d8f48a50f2f', 'Sitti Rachmi Masie', 'Female', 'Jl. Klampok Kasri Kel.. Gading Kasri', '65115', 'Malang', 'East Java', 'Indonesia', '085240202300', '', 'Universitas Negeri Malang', 'Post Graduate', 'Indonesian English Education', 'Teaching Literature', 'Yes', NULL, NULL),
(128, 'insum.manokwari@gmail.com', '0578f227153b0aca9cefb50269af5629', 'Insum Malawat', 'Female', 'Pondok Belimbing Indah Blok E4/4 Blimbing', '65125', 'Malang', 'East Java', 'Indonesia', '085258870605', '', 'Universitas Negeri Malang, Indonesia', 'Postgraduate Program', 'Indonesian Language Education', 'Literature Study', 'Yes', NULL, NULL),
(129, 'faridahnahmad@gmail.com', 'c378985d629e99a4e86213db0cd5e70d', 'faridah nisar ahmad', 'Female', 'A-6-5 endah puri condo,', '57000', 'kuala lumpur', 'Kuala Lumpur', 'Malaysia', '0122302600', '', 'smk taman desa', '', '', '', 'No', NULL, 'R-JOIN'),
(130, 'salambuneri@gmail.com', '9681d3c4aec12de58b7094a6ed13274f', 'Abdus Salam', 'Male', 'H No. 141, St. No 22, F.10/2', '44000', 'Islamabad', 'Pakistan', 'Pakistan', '+92 333 5678009', '', 'Association For Academic Quality (AFAQ)', '', 'Training Division', 'Teacher Education', 'No', NULL, 'R-JOIN');

-- --------------------------------------------------------

--
-- Table structure for table `webslider`
--

CREATE TABLE IF NOT EXISTS `webslider` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `photo` mediumtext,
  `description` varchar(250) DEFAULT NULL,
  `headline` varchar(100) DEFAULT NULL,
  `sstatus` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `webslider`
--

INSERT INTO `webslider` (`sid`, `photo`, `description`, `headline`, `sstatus`) VALUES
(4, '[{"name":"files\\/standard_8eq7lk2y.png","usrName":"standard.png","size":112714,"type":"image\\/png","thumbnail":"files\\/thstandard_nrrykuqs.png","thumbnail_type":"image\\/png","thumbnail_size":7077,"searchStr":"standard.png,!:sStrEnd"}]', 'Acedemia Consortium of Science, Technology, Arts, Innovation and Research&nbsp;', 'Welcome to <br/> ACSTAIR ', 'On'),
(6, '[{"name":"files\\/29558385_m_dw3868xt.jpg","usrName":"29558385_m.jpg","size":61620,"type":"image\\/jpeg","thumbnail":"files\\/th29558385_m_3znnl9jl.jpg","thumbnail_type":"image\\/jpeg","thumbnail_size":3672,"searchStr":"29558385_m.jpg,!:sStrEnd"}]', '24-25 Oct 2015, Subang Jaya, Malaysia', 'ICLTE I 2015- International Conference on Language, Teaching and Education', 'On');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
