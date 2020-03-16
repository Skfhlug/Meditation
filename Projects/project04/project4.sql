-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: project4
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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `adminID` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `firstName` varchar(25) DEFAULT NULL,
  `lastName` varchar(25) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `state` varchar(25) DEFAULT NULL,
  `zip` int(5) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `registerDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Suparin','c2abcb05a5f3a77cd458526aebbc683254ab14e3','Suparin','Fhlug','123 Main St Madison','',53703,'suparin@gmail.com',2147483647,'2019-04-25 18:15:36'),(2,'Panisa','5ac90d311c8aa6a73719696d7f4f960da1b69556','Panisa','Kunagorn','333 Star rd Madison','',53700,'panisa@gmail.com',2147483647,'2019-04-25 18:23:36');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog` (
  `blogId` int(7) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) DEFAULT NULL,
  `totalTime` int(3) DEFAULT NULL,
  `adjustFeeling` varchar(1) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `benefitDescription` varchar(1000) DEFAULT NULL,
  `postDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `commentStatus` varchar(1000) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `masterID` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`blogId`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (1,'Night Meditation',20,'y','It is nice and I feel peace inside my mind','Study better','0000-00-00 00:00:00',NULL,NULL,NULL),(3,'Night Meditation',20,'y','sdfsdfsdfdsffasdf','asdfsdfdsfdfsr','0000-00-00 00:00:00','sssdfghhhhhhhhhhhhhhhhhhhhhhhhhhsssssssssssssssssghhhhhhhhhhh','Panisa','3'),(5,'Morning Meditation',50,'y',NULL,'Sleep much easier','2019-05-04 23:06:22',NULL,'Lily',NULL),(11,'Meditation on the be',10,'n',NULL,'ergegjoi\'ergmelrkgv','2019-05-05 00:28:52','ssssssssssssssssssssssssssssssssss','Lily','3'),(12,'See the bright when ',35,'y',NULL,'decreases depression','2019-05-06 00:09:00',NULL,'Panisa',NULL),(13,'See the light',45,'y',NULL,'decreases depression','2019-05-06 00:09:33','That is nice','Panisa','3'),(14,'See the bright when ',40,'y','During my sit I saw a bright white/yellow circle shape flash of light in between my eyebrows (closed eye meditation). The light came rushing at me and filled my vision then vanished. While very interesting, it actually freaked me out a bit.','decreases depression','2019-05-06 00:11:59',NULL,'Panisa',NULL),(15,'Weird experience',15,'n',NULL,'Meditation practices help regulate mood and anxiety disorders','2019-05-06 00:15:05','Another reason to stop concentrative meditation was my rising detachment towards everything outside. Be it my family, job, wealth, life.','Minnie','3'),(16,'Meditate Alone',30,'y','I have experienced a similar meditation twice where I am going deepâ€¦seeing stars/universesâ€¦ colorsâ€¦then silenceâ€¦and stillness (void?) and then I am aware of a medallion that looks like it is made of stone with low and high relief with a face on it.','Meditation reduces stress and anxiety in general','2019-05-06 00:16:00',NULL,'Lily',NULL),(17,'Deep meditate',40,'y','When I feel I\'m getting deep I can see bright purple colors swirling about. I\'ve tried for a long time to find out if there is a meaning to this.','Meditation improves information processing and decision-making','2019-05-06 00:18:40',NULL,'Lily',NULL),(18,'Title',10,'n',NULL,'meditators had thicker prefrontal cortex and right anterior insula','2019-05-06 00:19:33',NULL,'Lily',NULL),(20,'Title',35,'y','anterior insula, and also to the effect that meditation might offset the loss of cognitive ability with old age.\r\n\r\nSources: Time Magazine, NCBI, Link Springer\r\n\r\nMeditation improves information processing and decision-making\r\nEileen Luders, an assistant professor at the UCLA Laboratory of Neuro Imaging, and colleagues, have found that long-term meditators have larger amounts of gyrification (â€œfoldingâ€ of the cortex, which may all','Swirling lights, etc.\r\nDuring my sit I saw a bright white/yellow circle shape flash of light in between my eyebrows (closed eye meditation). The light came rushing at me and filled my vision then vanished. While very interesting, it actually freaked me out a bit.\r\nIâ€™ve had noises so loud in one ear they made me jump, lights, weird visual things, feelings of floating or expanding or shrinking â€“ just every now and then.\r\nWhile i meditate in complete darkn','2019-05-06 00:24:36','Benefit of Meditaiton: Swirling lights, etc. During my sit I saw a bright white/yellow circle shape flash of light in between my eyebrows (closed eye meditation). The light came rushing at me and filled my vision then vanished. While very interesting, it actually freaked me out a bit. Iâ€™ve had noises so loud in one ear they made me jump, lights, weird visual things, feelings of floating or expanding or shrinking â€“ just every now and then. While i meditate in complete darkn','Lily','3'),(21,'Title',50,'y','long time to find out if there is a meaning to this.\r\nI have had a recurrent experience during meditation. These involve being completely absorbed by an intense yellow vibrating light, qualitatively ecstatic or electric.\r\ni meditate in the dark. when i open my eyes and i look at my hands i can see like smoke coming out at the tip of my fingers.it look like when you get out of a really hot bath and you got steam on your skin','Long-term meditation enhances the ability to generate gamma waves in the brain\r\nIn a study with Tibetan Buddhist monks, conducted by neuroscientist Richard Davidson of the University of Wisconsin, it was found that novice meditators â€œshowed a slight increase in gamma activity, but most monks showed extremely large increases of a sort that has never been reported before in the neuroscience literatureâ€.\r\nSource: The Wall Street Journal','2019-05-06 00:27:20','Benefit of Meditaiton: Long-term meditation enhances the ability to generate gamma waves in the brain In a study with Tibetan Buddhist monks, conducted by neuroscientist Richard Davidson of the University of Wisconsin, it was found that novice meditators â€œshowed a slight increase in gamma activity, but most monks showed extremely large increases of a sort that has never been reported before in the neuroscience literatureâ€. Source: The Wall Street Journal','Lily','3'),(22,'Title',50,'y','Meditation acutely improves psychomotor vigilance, and may decrease sleep need\r\nOn a research conducted by the University of Kentucky, participants were tested on four different conditions: Control (C), Nap (N), Meditation (M) and Sleep Deprivation plus Meditation. Non-meditators, novice meditators and experienced meditators were part of the experiment. The results suggest that:','Meditation acutely improves psychomotor vigilance, and may decrease sleep need\r\nOn a research conducted by the University of Kentucky, participants were tested on four different conditions: Control (C), Nap (N), Meditation (M) and Sleep Deprivation plus Meditation. Non-meditators, novice meditators and experienced meditators were part of the experiment. The results suggest that:','2019-05-06 00:28:53','et6r6uu57u8i6io','Minnie','3'),(24,'Ally Meditate',40,'y','Meditation helps reduce symptoms of panic disorder\r\nIn a research published in the American Journal of Psychiatry, 22 patients diagnosed with anxiety disorder or panic disorder were submitted to 3 months meditation and relaxation training. As a result, for 20 of those patients the effects of panic and anxiety had reduced substantially, and the changes were maintained at follow-up.','Open Monitoring Meditationâ€ involves non-reactively monitoring the content of experience from moment-to-moment, primarily as a means to recognize the nature of emotional and cognitive patterns.\r\nThere are other studies as well, for which I simply present the link below, to avoid repetition.','2019-05-06 01:34:33',NULL,'Alex',NULL),(25,'sdffrgrg',10,'y','A study from the University of Wisconsin-Madison indicates that the practice of â€œOpen Monitoring Meditationâ€ (such as Vipassana), reduces the grey-matter density in areas of the brain related with anxiety and stress. Meditators were more able to â€œattend moment-to-moment to the stream of stimuli to which they are exposed and less likely to â€˜get stuckâ€™ on any one stimulus. â€','A study from the University of Wisconsin-Madison indicates that the practice of â€œOpen Monitoring Meditationâ€ (such as Vipassana), reduces the grey-matter density in areas of the brain related with anxiety and stress. Meditators were more able to â€œattend moment-to-moment to the stream of stimuli to which they are exposed and less likely to â€˜get stuckâ€™ on any one stimulus. â€','2019-05-06 01:35:16',NULL,'Alex',NULL),(27,'Title',60,'y','Being a part of this human race I was not different and was utterly discontented with my life couple of years ago, I couldnâ€™t find any reasons for this unfailing agitation in me as I had everything that any mediocre person would wish to have.. family, job, money however still a sense of discontentment, irritation was always flowing within me. My reaction towards my own people followed by repent used to make me think that why there is so much of suffering in everybodyâ€™s life. Why canâ€™t we remain happy in every situation? Why do we need a favorable situation to be happy? Is my happiness dependent on acquiring things? What is the purpose of this life..to suffer always? My other best colleagues like anger, jealousy, ambition, expectations used to be with me always. I had completely lost all hopes towards my life.','contemplating on these thoughts for many days, one day a ray of light reflected in my darkness, that there has to be some way out, this life canâ€™t be so miserable. Something I must be missing. Is there any way to reach to a state of permanent bliss? If god has given us this life then there has to be some way out. My subject of contemplation was gradually changing from crying over my problems to find a solution. A new door was opening for me however still I dint know what to do and where to go.','2019-05-06 02:57:07',NULL,'Panisa',NULL),(28,'Title',10,'y','Those days my uncle used to go to attend satang as he has been a follower of a reputed guru for many years. He encouraged me to take initiation from his guru and explore this dimension. I was given few methods of concentration to meditate upon daily. I started meditating every day for 2 hours without fail apart from doing my other worldly activities. My urge to find my real self was so immense that all day even while at work I used to listen to online discourses & read spiritual books. In those 2 years I have read hundreds of books & articles on spiritual content to progress on this path. I had no other thing left in my life except to know who Am I? Nothing was important for me and I realized that I was gradually getting detached from outside world and going deeper into the inner realm.\r\n\r\nWithin some time I had started experiencing the higher dimension; my third eye has started showing me something that is beyond my physical eyes to see. I was overwhelmed & blessed out by such experiences. There were many times I experienced a state where I was completely lost into darkness or emptiness and I had no feelings left for my body, there was just awareness left, I was becoming bodiless gradually, Out of body experiences showed me that there is nothing like death, it is just a fiction, just a change of cloth, magnificent lights and much more.','It is impossible for me to describe such experience as they are beyond intellect to understand. These experiences cannot be described in words, it can only be experienced.','2019-05-06 02:59:11','Benefit of Meditaiton: It is impossible for me to describe such experience as they are beyond intellect to understand. These experiences cannot be described in words, it can only be experienced.','Panisa','3'),(29,'Title',10,'y','Those days my uncle used to go to attend satang as he has been a follower of a reputed guru for many years. He encouraged me to take initiation from his guru and explore this dimension. I was given few methods of concentration to meditate upon daily. I started meditating every day for 2 hours without fail apart from doing my other worldly activities. My urge to find my real self was so immense that all day even while at work I used to listen to online discourses & read spiritual books. In those 2 years I have read hundreds of books & articles on spiritual content to progress on this path. I had no other thing left in my life except to know who Am I? Nothing was important for me and I realized that I was gradually getting detached from outside world and going deeper into the inner realm.\r\n\r\nWithin some time I had started experiencing the higher dimension; my third eye has started showing me something that is beyond my physical eyes to see. I was overwhelmed & blessed out by such experiences. There were many times I experienced a state where I was completely lost into darkness or emptiness and I had no feelings left for my body, there was just awareness left, I was becoming bodiless gradually, Out of body experiences showed me that there is nothing like death, it is just a fiction, just a change of cloth, magnificent lights and much more.','It is impossible for me to describe such experience as they are beyond intellect to understand. These experiences cannot be described in words, it can only be experienced.','2019-05-06 03:00:31',NULL,'Panisa',NULL),(30,'Title',10,'y','Those days my uncle used to go to attend satang as he has been a follower of a reputed guru for many years. He encouraged me to take initiation from his guru and explore this dimension. I was given few methods of concentration to meditate upon daily. I started meditating every day for 2 hours without fail apart from doing my other worldly activities. My urge to find my real self was so immense that all day even while at work I used to listen to online discourses & read spiritual books. In those 2 years I have read hundreds of books & articles on spiritual content to progress on this path. I had no other thing left in my life except to know who Am I? Nothing was important for me and I realized that I was gradually getting detached from outside world and going deeper into the inner realm.\r\n\r\nWithin some time I had started experiencing the higher dimension; my third eye has started showing me something that is beyond my physical eyes to see. I was overwhelmed & blessed out by such experiences. There were many times I experienced a state where I was completely lost into darkness or emptiness and I had no feelings left for my body, there was just awareness left, I was becoming bodiless gradually, Out of body experiences showed me that there is nothing like death, it is just a fiction, just a change of cloth, magnificent lights and much more.','It is impossible for me to describe such experience as they are beyond intellect to understand. These experiences cannot be described in words, it can only be experienced.','2019-05-06 03:01:20',NULL,'Panisa',NULL),(31,'Night meditation',15,'y','The meditation lasted about half an hour. I had opened my eyes. Yes, I was not an expert yet, and neither am I still. But, that half an hour was enough to let me know, that I belonged to something bigger than me, and that my life course, was all about unveiling that very essence that I had distanced myself from.\r\n\r\nSuddenly, the trees and the atmosphere around me had taken an all new color. My heart was emanating with warmth and softness. Nothing could convince me now, that I wasnâ€™t a part of a grand design of creation, and that everything around me, the plants, the trees, the people around me, werenâ€™t part of the very same grand scheme of things, and that we were all not children of the very same father.','Feel fresh imidiatly after meditate','2019-05-07 15:02:23',NULL,'Ben',NULL),(32,'Night meditation',40,'n','It was like drowning (and there is a reason for it).\r\n\r\nMy martial art sensei had us lie down amd breath in by count of 10 and breath out counting 10 (less for smaller people. I count up to 8 only).\r\n\r\nThe lack of oxygen seems to trigger a trauma I had at age of 18 which was drowning by the sea. So what I experience was that fear. I felt that I had fallen out of my body, into the ground and was struggling to resurface.\r\n\r\nBut this time, I was in control (of the breathe) and I was able to float between the realm of the dead and living until the end of the meditation session 15 minutes later. It was trully a remarkable feeling.','Sleep better and easier','2019-05-07 17:56:27','At the very beginning of your meditation practice, have a gentle dialogue with your mind. Sit down quietly and ask yourself, â€œWhat do I want?â€ You will learn many things when you enter into this kind of self-dialogue. You will come in contact with your inner states. You will learn about the subtle aspects of your mind, your own conscienceâ€”and you will see that you are training yourself in the process.','Jon','3');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `master`
--

DROP TABLE IF EXISTS `master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `master` (
  `masterID` varchar(5) NOT NULL DEFAULT '',
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `firstName` varchar(25) DEFAULT NULL,
  `lastName` varchar(25) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `state` varchar(25) DEFAULT NULL,
  `zip` int(5) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `registerDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`masterID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `master`
--

LOCK TABLES `master` WRITE;
/*!40000 ALTER TABLE `master` DISABLE KEYS */;
INSERT INTO `master` VALUES ('0','Master','78f3842f0201c993fec13905f2ff9ec3fdd39056','Master','Smart','111 Smart Rd Madison','Ohio',54302,'smart@madison.com',2147483647,'2019-05-01 18:42:15'),('1','Opal','qwer','Opal','Oak',NULL,NULL,NULL,NULL,NULL,'2019-05-01 18:41:05');
/*!40000 ALTER TABLE `master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `userID` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `firstName` varchar(25) DEFAULT NULL,
  `lastName` varchar(25) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `zip` int(50) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `registerdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userPrivilege` int(1) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Carol','1234563123132','Carol','Fhlug','2536 Somewhere','Washinton',85584,2147483647,'carol@gmail.com','0000-00-00 00:00:00',NULL),(2,'Panisa','5ac90d311c8aa6a73719696d7f4f960da1b69556','Panisa','Kunagorn','222 Main rd','Wisconsin',59636,2147483647,'panisa@gmail.com','2019-04-25 19:10:37',1),(3,'Linda','4b971c383f88f081f787088db1cfe07f95a7c292','Linda','Something','456 Somewhere','New York',2147483647,2147483647,'Linda@gmail.com','2019-04-25 19:12:21',2),(4,'Patty','62779531b4dd0a7d4dce07507d877e641db2b41c','Patty','Winkel','586 White Rd Greenbay','Wisconsin',78599,2147483647,'patty@gmail.com','2019-04-25 19:15:38',3),(5,'Minnie','22d66954ca280d9599497b28512fb7999f3fdd13','Minnie','Lovemickey','111 Disney Rd.','Florida',89852,2147483647,'minnie@disney.com','2019-05-02 18:16:05',1),(6,'Lily','89a254a753cf0fe40eadd6b6c9f76a99d41b01c2','Lily','White','345 Main St','D.C.',34298,2147483647,'lily@gmail.com','2019-05-04 23:04:43',1),(7,'Alex','64542dbabb81dfd446e0cf4f319567c72ee57c7b','Alexander','Fhlug','1634 Bultman rd apt 201','Wisconsin',53704,2147483647,'suparin.fhlug@gmail.com','2019-05-06 01:28:51',1),(8,'Adam','f941e1206abd4a2d8889da67be10151f429d95dc','Adam','Stark','123 Main Rd Madison','Wisconsin',53704,2147483647,'Adam@gmail.com','2019-05-07 14:49:14',1),(9,'Ben','41126fc03289a05d86219d28b38e5e365ff0359f','Ben','Rock','234 Rocky rd Green Bay','Wisconsin',57855,2147483647,'ben@gmail.com','2019-05-07 14:52:37',1),(10,'Nancy','8279b531d0249aeb58b09477421a34d4bc835e0f','Nancy','Timber','234 Rocky rd Green Bay','Wi',58562,2147483647,'nancy@somemail.com','2019-05-07 15:59:48',3),(11,'James','ef547badb8b0801d06a93155cc052341c749d1c0','James','Bonds','123 Endland rd','Dakota',45855,2147483647,'jame@gmail.com','2019-05-07 16:00:51',3),(12,'Olaf','23e8d05245b552ba7c719b1f217e04875172ad83','Olaf','Frozen','345 Disney St Panama','California',45854,2147483647,'Olaf@gmail.com','2019-05-07 16:02:28',2),(13,'Jon','eb618462d8ab174344edea26bbab6f70cf8c628b','Jon','Snow','123 Waterfall rd Madison','Wisconsin',53703,2147483647,'jon@somemail.com','2019-05-07 17:55:05',1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-07 19:19:09
