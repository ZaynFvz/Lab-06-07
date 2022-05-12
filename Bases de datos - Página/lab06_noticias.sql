-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: lab06
-- ------------------------------------------------------
-- Server version	5.7.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `noticias` (
  `idcontenido` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(90) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `contenido` longtext,
  `imagen` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idcontenido`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` VALUES (1,'29 Marzo, 2022 | Deportes','Peru al repechaje','Perú empata un partido con Paraguay y tuvieron que irse a los penales donde se decidió como ganador a Perú por 4 penales a 3 y avanzando a la semifinal de la Copa América, pero a un costo alto ya que el número 18...','CSS/peru.jpg'),(2,'5 Junio, 2022 | Política','Presidente','Tras oficialmente haber ganado las elecciones presidenciales 2021, Pedro Castillo comenzara su gobierno el 15 de julio de este año...','CSS/castillo.jpg'),(3,'3 Marzo, 2022 | Videojuegos','Battle Pass 2022','La compañia Valve anuncia lanzamiento oficial del Pase de Batalla de su popular juego DOTA 2 con excelentes sorpresas y nuevos aspectos de dos héroes, además...','CSS/compendio.jpg'),(4,'4 Marzo, 2022 | Mundial','Terrible atentado','El día de ayer el castillo de la reina Isabel II del Reino Unido sufrió un atentado terrible que lamentablemente tuvo como consecuencia la muerte de 15 turistas...','CSS/reyna.jpg'),(5,'5 Marzo, 2022 | Covid-19','¡ Alerta Mundial !','La OMS afirmó que el mundo atraviesa un periodo muy peligroso de la pandemia del coronavirus devido a la nueva variante delta registrada hace apenas unos meses...','CSS/oms.jpg'),(6,'19 Marzo, 2022 | Perú','Se enciende el turismo','Machu Picchu una de las 7 maravillas del mundo dijo en una entrevista que ya esta resiviendo nuevamente turistas peruanos con ciertas restricciones al abordar el tren...','CSS/machupicchu.jpg');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-12  1:10:57
