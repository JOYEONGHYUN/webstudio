-- MySQL dump 10.13  Distrib 5.6.35, for Win64 (x86_64)
--
-- Host: localhost    Database: webstudio
-- ------------------------------------------------------
-- Server version	5.6.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES UTF8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `board_free`
--

DROP TABLE IF EXISTS `board_free`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `board_free` (
  `b_no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `b_title` varchar(100) NOT NULL,
  `b_content` text NOT NULL,
  `b_date` datetime NOT NULL,
  `b_hit` int(10) unsigned NOT NULL DEFAULT '0',
  `b_id` varchar(20) NOT NULL,
  `b_password` varchar(100) NOT NULL,
  PRIMARY KEY (`b_no`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `board_free`
--

LOCK TABLES `board_free` WRITE;
/*!40000 ALTER TABLE `board_free` DISABLE KEYS */;
INSERT INTO `board_free` VALUES (46,'[旅行]おはようございます','おはようございます 私は中村淳也と申します。\r\n生涯初めて日本に出て国外旅行地に韓国を選択しました。\r\n何を見れば面白いかな見ていたが、このサイトに\r\n訪問するようになりました。 大半が韓国のアイドル、明洞(ミョンドン)、弘大の情報しか\r\nなかったので、少し失望したが、このサイトで、韓国の地域だけの特徴が盛り込まれた観光地を知ってるようになって多くの助けになりました。','2017-12-21 22:50:51',1,'masterkills@naver.co',''),(47,'[Travel] Hello U guys !','Hello, my name is Jason Mraz. I came to Japan for the first time in my life and chose Korea as my destination of overseas travel. I thought it would be interesting to see something, but I could visit this site. I was a little disappointed because most of the information was about Korean idol groups, Myeongdong, and Hongdae, but it helped me find a tourist spot with unique Korean features.','2017-12-21 22:57:30',1,'oeam1212@nate.com',''),(48,'[国外旅行]こんにちは!!','こんにちは私は工藤仁美と申します。 生涯初めて日本に出て国外旅行地に韓国を選択しました。 何を見れば面白いかな見たが、このサイトに訪問するようになりました。 殆どの韓国のアイドル、明洞(ミョンドン)、弘大の情報しかなかったので、少し失望したが、このサイトで、韓国の地域だけの特徴が盛り込まれた観光地を知ってるようになって多くの助けになりました。\r\nそして私は韓国で一度ワーキングホリデーをしたことがあります。\r\nところで韓国に生きてみて思ったのは、実際韓国で韓国人たちが体験することと観光客が体験するところが異なるということです。 そんなことをこのサイトではよく作っておいて多くの役になりました。','2017-12-21 23:01:53',0,'avilrus@gmail.com','');
/*!40000 ALTER TABLE `board_free` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `koreavel`
--

DROP TABLE IF EXISTS `koreavel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `koreavel` (
  `mail` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `koreavel`
--

LOCK TABLES `koreavel` WRITE;
/*!40000 ALTER TABLE `koreavel` DISABLE KEYS */;
INSERT INTO `koreavel` VALUES ('oeam1212@nate.com','asdfg12345','조영현'),('masterkills@naver.com','asdfg12345','nakamura Junya'),('avilrus@gmail.com','asdfg12345','kudo hitomi');
/*!40000 ALTER TABLE `koreavel` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-23 14:34:24
