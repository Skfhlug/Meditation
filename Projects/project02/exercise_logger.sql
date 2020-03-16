-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: skfhlug
-- ------------------------------------------------------
-- Server version	5.5.57-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `MadLibs`
--

DROP TABLE IF EXISTS `MadLibs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MadLibs` (
  `noun` varchar(20) DEFAULT NULL,
  `verb` varchar(20) DEFAULT NULL,
  `adverb` varchar(20) DEFAULT NULL,
  `adjective` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MadLibs`
--

LOCK TABLES `MadLibs` WRITE;
/*!40000 ALTER TABLE `MadLibs` DISABLE KEYS */;
INSERT INTO `MadLibs` VALUES ('a','b','c','d'),('u','w','x','y'),('sailor','sell','excellently','expert'),('air','eat','slowly','green'),('air','eat','slowly','green'),('car','show','faster','pretty'),('2','3','4','5'),('we','wef','we','we'),('we','wef','we','we'),('sdf','sdf','sdf','sdf'),('sailor','selllllllllllll','slowly','expert'),('Driver','drives','terribly','visibly'),('','','',''),('Home','eat','slowly','pretty'),('','','',''),('rabbit','jumps','poorly','horrible');
/*!40000 ALTER TABLE `MadLibs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exercise_log`
--

DROP TABLE IF EXISTS `exercise_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exercise_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `time_in_minute` int(11) DEFAULT NULL,
  `heartrate` int(11) DEFAULT NULL,
  `calories` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exercise_log`
--

LOCK TABLES `exercise_log` WRITE;
/*!40000 ALTER TABLE `exercise_log` DISABLE KEYS */;
INSERT INTO `exercise_log` VALUES (1,6,'2019-08-06','Yoga',50,90,100),(2,6,'2018-09-05','Run',20,152,400),(9,6,'2019-03-16','Bike',60,80,4800),(15,6,'2019-01-02','Bike',120,110,693.65391969407),(16,6,'2019-03-23','Swim',120,120,874.60038240918),(29,6,'2019-03-11','Yoga',60,125,482.53680688337),(31,6,'2019-03-28','Bike',50,125,402.11400573614),(32,6,'2019-03-09','Bike',50,125,402.11400573614),(33,6,'2019-03-16','Bike',50,125,402.11400573614),(34,22,'2019-04-05','Biking',50,160,665.99426386233),(35,22,'2019-03-23','Hiking',60,160,799.1931166348),(36,19,'2019-03-23','Hiking',20,254,462.77533460803),(37,19,'2019-03-23','Hiking',20,254,462.77533460803),(38,19,'2019-03-30','Biking',60,70,208.33365200765),(39,19,'2019-03-30','Biking',100,250,2271.1233269598),(40,19,'2019-03-30','Biking',100,250,2271.1233269598),(41,19,'2019-03-30','Biking',100,250,2271.1233269598),(42,19,'2019-03-30','Biking',100,250,2271.1233269598),(43,19,'2019-03-14','Yoga',50,140,547.70315487572),(44,19,'2019-03-12','Running',50,140,547.70315487572),(45,19,'2019-03-06','Yoga',50,140,547.70315487572),(46,19,'2019-03-15','Swim',20,150,240.45793499044),(47,19,'2019-03-14','Biking',60,120,528.98374760994),(48,19,'2019-03-15','Biking',60,125,561.04875717017),(49,19,'2019-03-15','Biking',50,150,601.1448374761),(50,19,'2019-03-15','Biking',50,170,708.02820267686),(51,19,'2019-03-12','Hiking',50,170,708.02820267686),(52,13,'2019-03-02','Hiking',30,140,3158.1840344168),(53,13,'2019-03-08','Hiking',50,170,741.38862332696),(54,13,'2019-03-07','Biking',20,140,2105.4560229446),(55,13,'2019-03-15','Hiking',60,140,6316.3680688337),(56,13,'2019-03-15','Yoga',30,140,3158.1840344168),(57,13,'2019-03-12','Yoga',160,30,14189.766730402),(58,13,'2019-03-06','Biking',20,140,159.80305927342),(59,13,'2019-03-07','Yoga',20,140,158.83891013384),(60,13,'2019-03-21','Yoga',50,160,547.88599426386),(61,13,'2019-03-22','Hiking',20,150,188.99665391969),(62,13,'2019-03-22','Yoga',50,140,442.89435946463),(63,13,'2019-03-22','Yoga',50,140,442.89435946463),(64,13,'2019-03-22','Yoga',50,140,442.89435946463),(65,13,'2019-03-22','Yoga',50,140,442.89435946463),(66,13,'2019-03-21','Biking',50,150,518.28871892925),(67,13,'2019-03-20','Swim',20,170,267.6309751434),(68,13,'2019-03-07','Hiking',50,120,292.10564053537),(69,13,'2019-03-06','Weightlifiting',20,150,207.3154875717),(70,13,'2019-03-06','Biking',20,150,284.90305927342);
/*!40000 ALTER TABLE `exercise_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exercise_user`
--

DROP TABLE IF EXISTS `exercise_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exercise_user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(40) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `picture` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exercise_user`
--

LOCK TABLES `exercise_user` WRITE;
/*!40000 ALTER TABLE `exercise_user` DISABLE KEYS */;
INSERT INTO `exercise_user` VALUES (1,'','','Anna','White','F','2019-08-06',102.50,NULL),(2,'','','Cindy','Smith','F','1982-05-25',135.50,NULL),(3,'Ben','aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d','Ben','Daniele','F','1969-05-09',125.36,NULL),(4,'Nita','nita','Nita','Daniele','F','1969-08-08',125.36,NULL),(5,'Lily','Hello',NULL,NULL,NULL,NULL,NULL,NULL),(6,'Alex','f7ff9e8b7bb2e09b70935a5d785e0cc5d9d0abf0','Alexander','Fhlug','M','2019-03-19',170.59,'alexpic.jpg'),(7,'Linda','4b971c383f88f081f787088db1cfe07f95a7c292',NULL,NULL,NULL,NULL,NULL,NULL),(8,'Pink','54076359fdc7f1f0e000b9ae15b96f8b09866acb',NULL,NULL,NULL,NULL,NULL,NULL),(9,'Olaf','23e8d05245b552ba7c719b1f217e04875172ad83',NULL,NULL,NULL,NULL,NULL,NULL),(10,'Eric','6d0e5951f2a9d928c1d17b25d57f0461296048e6',NULL,NULL,NULL,NULL,NULL,NULL),(11,'Iva','feb71d81e79b64cc1eceb08f2ca9c1c4bb71577d',NULL,NULL,NULL,NULL,NULL,NULL),(12,'Carol','6f90f101115140727c43cadee0b9e17881403a63',NULL,NULL,NULL,NULL,NULL,NULL),(13,'Gene','dc916791e718ec1b1086eca6737f2245b934084f','Gene','Fhlug','M','2000-03-07',180.00,NULL),(14,'Peony','c969263880e39e0a57365561ca447d425b2ad409',NULL,NULL,NULL,NULL,NULL,NULL),(15,'Yan','d755ed105727c3c26ac106247b4ee40274fb0181',NULL,NULL,NULL,NULL,NULL,NULL),(16,'Tyler','f7ff9e8b7bb2e09b70935a5d785e0cc5d9d0abf0',NULL,NULL,NULL,NULL,NULL,NULL),(17,'Randy','390c6e3db69673afde02dd705fd6d8caca2441b9',NULL,NULL,NULL,NULL,NULL,NULL),(18,'Randi','26c1a3b864bcee164b8bb16ef8ef0e8a4caa3788',NULL,NULL,NULL,NULL,NULL,NULL),(19,'Pim','2a7a08210318aa5b4de929f242e649409bacd01b','Panisa','Kunagorn','F','2001-03-28',110.00,NULL),(20,'Cindi','90654d90e7174cda9da08cdea5fc3063df40a24a',NULL,NULL,NULL,NULL,NULL,NULL),(21,'Patti','b22d1fd7e63ba2117b961f7a901eb205f248eb4e',NULL,NULL,NULL,NULL,NULL,NULL),(22,'Tony','c8fa8cb4f88f78485ce7e0453ac0d438026bc5bb','Tony','Danver','M','1989-03-05',150.00,'alexpic.jpg');
/*!40000 ALTER TABLE `exercise_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fullname`
--

DROP TABLE IF EXISTS `fullname`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fullname` (
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fullname`
--

LOCK TABLES `fullname` WRITE;
/*!40000 ALTER TABLE `fullname` DISABLE KEYS */;
INSERT INTO `fullname` VALUES ('Suparin','Fhlug'),('',''),('',''),('',''),('',''),('',''),('fgbggb','sgg'),('','');
/*!40000 ALTER TABLE `fullname` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mismatch_user`
--

DROP TABLE IF EXISTS `mismatch_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mismatch_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(40) NOT NULL,
  `join_date` datetime DEFAULT NULL,
  `first_name` varchar(32) DEFAULT NULL,
  `last_name` varchar(32) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `city` varchar(32) DEFAULT NULL,
  `state` varchar(2) DEFAULT NULL,
  `picture` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mismatch_user`
--

LOCK TABLES `mismatch_user` WRITE;
/*!40000 ALTER TABLE `mismatch_user` DISABLE KEYS */;
INSERT INTO `mismatch_user` VALUES (1,'','','2008-06-03 14:51:46','Sidney','Kelsow','F','1984-07-19','Tempe','AZ','sidneypic.jpg'),(2,'','','2008-06-03 14:52:09','Nevil','Johansson','M','1973-05-13','Reno','NV','nevilpic.jpg'),(3,'','','2008-06-03 14:53:05','Alex','Cooper','M','1974-09-13','Boise','ID','alexpic.jpg'),(4,'','','2008-06-03 14:58:40','Susannah','Daniels','F','1977-02-23','Pasadena','CA','susannahpic.jpg'),(5,'','','2008-06-03 15:00:37','Ethel','Heckel','F','1943-03-27','Wichita','KS','ethelpic.jpg'),(6,'','','2008-06-03 15:00:48','Oscar','Klugman','M','1968-06-04','Providence','RI','oscarpic.jpg'),(7,'','','2008-06-03 15:01:08','Belita','Chevy','F','1975-07-08','El Paso','TX','belitapic.jpg'),(8,'','','2008-06-03 15:01:19','Jason','Filmington','M','1969-09-24','Hollywood','CA','jasonpic.jpg'),(9,'','','2008-06-03 15:01:51','Dierdre','Pennington','F','1970-04-26','Cambridge','MA','dierdrepic.jpg'),(10,'','','2008-06-03 15:02:02','Paul','Hillsman','M','1964-12-18','Charleston','SC','paulpic.jpg'),(11,'','','2008-06-03 15:02:13','Johan','Nettles','M','1981-11-03','Athens','GA','johanpic.jpg'),(12,'jnettles','7936ee10da1d33b1','2019-03-05 15:57:27',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(13,'jimi','2aa36f17507f2c75df2e24aa63c7dabcaf86926e','2019-03-05 16:03:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,'anna','aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d','2019-03-07 14:29:02','Anna','Smith','F','2002-05-01','Madison','Wi','ethelpic.jpg'),(15,'Tina','f7ff9e8b7bb2e09b70935a5d785e0cc5d9d0abf0','2019-03-07 16:02:42',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(16,'Adam','f941e1206abd4a2d8889da67be10151f429d95dc','2019-03-07 18:37:44','Adam','Tony','M','2011-04-15','Madison','WI','alexpic.jpg'),(17,'Linda','4b971c383f88f081f787088db1cfe07f95a7c292','2019-03-07 18:56:55','Linda','Lucky','F','1899-11-24','Madison','WI','susannahpic.jpg'),(18,'Pinky','4dab5c90d5f74960afc1931810c453f2b029a145','2019-03-07 18:59:33','Pinky','Lucky','F','2000-08-14','Madison','WI','belitapic.jpg'),(19,'AA','801c34269f74ed383fc97de33604b8a905adb635','2019-03-07 19:01:15',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(20,'Lily','89a254a753cf0fe40eadd6b6c9f76a99d41b01c2','2019-03-07 19:05:25','Lily','Miller','F','1998-04-16','Madison','WI','dierdrepic.jpg'),(21,'kitty','95d79f53b52da1408cc79d83f445224a58355b13','2019-03-07 19:30:20','Hello','Kitty','F','1995-01-01','Hollywood','CA','hellokitty.jpg'),(22,'Alex','59e81b1daf26038fb629929dfa1cea463dcdcc0b','2019-03-20 23:30:33',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(23,'Olaf','23e8d05245b552ba7c719b1f217e04875172ad83','2019-03-25 18:54:49','Olaf','Olaf','M','2019-02-21','Madison','WI',NULL);
/*!40000 ALTER TABLE `mismatch_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `riskyjobs`
--

DROP TABLE IF EXISTS `riskyjobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `riskyjobs` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `description` mediumtext,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip` varchar(5) DEFAULT NULL,
  `company` varchar(30) DEFAULT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `riskyjobs`
--

LOCK TABLES `riskyjobs` WRITE;
/*!40000 ALTER TABLE `riskyjobs` DISABLE KEYS */;
INSERT INTO `riskyjobs` VALUES (1,'Custard Walker','We need people willing to test the theory that you can walk on custard.\r\n\r\nWe\'re going to fill a swimming pool with custard, and you\'ll walk on it. \r\n\r\nCustard and other kinds of starchy fluids are known as non-Newtonian fluids. They become solid under high pressure (your feet while you walk) while remaining in their liquid form otherwise.\r\n\r\nTowel provided, own bathing suit, a must.\r\n\r\nNote: if you stand on for too long on the custard\'s surface, you will slowly sink. We are not liable for any custard sinkages.','Albuquerque','NM','87101','Pie Technologies','2008-07-24 11:25:27'),(2,'Shark Trainer','Training sharks to do cute tricks for the audiences at our new water theme park.\r\n\r\nYou\'ll spend time alone in the water with our shiver of sharks. You\'ll train the sharks at night, dawn and dusk when there are no visitors to the theme park. You\'ll also play with the sharks by splashing and making erratic movements.','Orlando','FL','32801','SharkBait, Inc.','2008-04-28 11:25:27'),(3,'Voltage Checker','You\'ll be out in the field checking a.c. and d.c. voltages in the range of 3 to 250 or more volts. You\'ll be equipped with a hand-held light emitting diode to indicate all voltages. You\'ll also check the polarity of d.c. voltages.','Durham','NC','27701','Shock Systems, LLC','2008-06-28 11:25:27'),(4,'Antenna Installer','You\'ll be installing antennas and other metallic broadcast receiving equipment on the roofs of Miami\'s highest buildings. You\'ll be kitted out in our highest quality safety gear: polyester boiler suit and plastic sneakers.','Miami','FL','33109','Heightened Attenuation, Inc.','2008-09-04 11:25:27'),(5,'Elephant Proctologist','Needed: experienced proctologist willing to work with large animals. Elephants at our zoo (in San Francisco) have been noted as having abnormally reddened posteriors. We seek experienced and trained professionals willing to diagnose, treat, and follow up with our valuable elephants.\r\n\r\nBenefits include an annual pass to the zoo.','San Francisco','CA','94102','Bay Area Pacaderm Project','2008-07-29 11:25:27'),(6,'Airplane Engine Cleaner','Jet airplanes needing engines cleaned. In need of clean-minded individuals willing to handle rust and grime removal, as well as occasional disposal of high-flying bird carcasses. Must be alert and able to communicate effectively, as we sometimes have anxious pilots eager to take off.','Ft. Hood','TX','76544','Turbinators','2008-08-17 11:25:27'),(7,'Matador','Bustling dairy farm looking for part-time matador to entertain spirited bull with mild case of ADD. Semaphore experience highly desirable.','Rutland','VT','05701','Mad About Milk Dairies','2008-03-11 12:11:17'),(8,'Paparazzo','Top celebrity photography firm looking for seasoned paparazzo to stalk temperamental lip-syncing pop star with history of road rage. Benefits do not include health insurance. ','Beverly Hills','CA','90210','Diva Pursuit, LLC','2008-03-24 11:25:27'),(9,'Tightrope Walker','Fledgling big top looking for three-ring professional with 1-3 years of experience to perform tightrope acrobatics with pudgy elephant. Willingness to sweep excrement a big plus. Excellent benefits including medical and dental plans, 401 (k), stock ownership and discount purchase plan, prescription coverage, merchandise discount, short and long term disability insurance, life and business travel insurance, vision discount plan, auto and home insurance discounts, medical care and dependent care reimbursement, educational assistance, paid vacation and holidays, and adoption assistance. Flexible starting salaries based on skills and abilities, experience and geographic market. Promotion opportunities based on performance The only thing stopping you from the highest wire in the big tent is your desire and work ethic...and your balance! Other duties include planning & organizing wires, handling minor elephant administration, processing comment cards from children. Leading by example (don\'t fall!), showing initiative and a sense of urgency and being results-driven help acrobatic professionals become successful. If you want to be challenged and your talent needs mentoring and opportunity, Bingling Brothers can offer you a fast track to success!','Laredo','TX','78040','Bingling Brothers Circus','2008-11-14 11:43:59'),(10,'Crocodile Dentist','Do you love animals and hate plaque?  Well, then this might be the job for you!  Our crocodile farm is in need of a Dentist to shine up the smiles of our beloved pets for an upcoming photo shoot with Reptile Weekly magazine.  An ideal candidate will have dental expertise, a positive attitude, and health insurance.','Everglades City','FL','34139','Ravenous Reptiles','2008-07-14 11:25:27'),(11,'Mime','We need some fresh new faces. Full health insurance and shin pads provided. Must love kids.','New York','NY','10001','Mime-R-Us','2008-11-02 11:25:27'),(12,'Pet Food Tester','We pride ourselves on how good our pet food tastes. Now you can help make our products even better. We’re hiring pet food tasters, apply now!','St. Louis','MO','63101','Pet Harvest','2008-11-09 11:25:27'),(13,'Prize Fighter','Up and coming super fly gnat weight boxer needs an opponent to help build his winning record. Slow feet, sloppy hands, and a glass jaw are preferred. No experience required. This is not a full-time salaried position. We\'ll meet you in the alley behind the rink to share the purse. Let Ron King make you a championship fighter, or at least help you lost to one!','Branson','MO','65615','Ron King Promotions','2008-11-14 11:31:08'),(14,'Toreador','Lovely bovines waiting for your superior non-violent cape waving skills. Must pass basic bull fighting aptitude test.','Boise','ID','83701','Get The Horns, LLC','2008-11-14 21:49:31'),(15,'Electric Bull Repairer','Hank\'s Honky Tonk needs an experienced electric bull repairer. Free rides (after you fix it) and half off hot wings are some of the benefits.','Allamuchy','NJ','07820','Hank\'s Honky Tonk','2008-07-27 11:22:28'),(16,'Master Cat Juggler','Are you a practitioner of the lost art of cat juggling? Banned in forty contries, only the Jim Ruiz Circus has refined cat juggling for the sophisticated tastes of the modern audience. Ply your trade with premiere cat jugglers at our circus, the only place on earth to master synchronized cat juggling. It\'s true, juggling them is even harder than herding them. We are an equal opportunity employer, and look forward to adding you to our team. Please be prepared to undergo a thorough battery of tests to prove your deft handling of felines. Only the cream of the crop will be accepted into our Master Cat Juggler program.','Apache Junction','AZ','85220','Jim Ruiz Circus','2008-11-14 21:13:35'),(17,'Tightrope Tester','If the thought of dangling for hours on end from great heights is your idea of a good time, then this job just may be for you. Every one of our tightropes goes through a rigorous 43 point test, culminating in a real live human hanging for a prolonged period of time. That could be you! We do provide safety nets but you\'ll need to bring your own helmet and gloves. Here at our manufacturing facility in Big Top, Montana, we offer an incredible employment package with benefits ranging from Bring Your Pet to Work Week and Formal Fridays. We will need three references, including your verified maximum hang time and number of past falls. We\'re the circus behind the circus!','Big Top','MT','59923','Taut Enterprises, Inc.','2008-11-14 21:17:16'),(18,'Firefighter','The City of Dataville is hiring firefighters. No experience required - you will be trained. Non-smokers preferred. You must be physically fit and not afraid of heights (or heat). Although not required, familiarity with the working end of an axe is a plus.','Dataville','OH','45448','City of Dataville','2008-05-22 09:54:32'),(19,'Golf Ball Picker Upper','Want to combine your love of golf and stunt driving into one exciting career? We have an opening for a golf ball picker upper that just might be for you. Get behind the wheel of the Range Raker 2000, and drive our golf range picking up balls while dodging the best efforts of fellow golfers to hit you. It\'s all part of the service we offer, and your job will be to serve as a challenging target while picking up balls.','Arkadelphia','AL','35033','Tee-Off Golf','2008-08-12 04:54:12');
/*!40000 ALTER TABLE `riskyjobs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-27  4:27:13
