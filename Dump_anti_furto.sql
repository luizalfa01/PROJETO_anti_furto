CREATE DATABASE  IF NOT EXISTS `anti_furto` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `anti_furto`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: anti_furto
-- ------------------------------------------------------
-- Server version	5.6.14

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
  `nome_admin` varchar(40) NOT NULL,
  `foto` varchar(40) DEFAULT NULL,
  `username` varchar(40) NOT NULL,
  `senha` varchar(40) DEFAULT NULL,
  `telefone` int(11) NOT NULL,
  `email_admin` varchar(40) NOT NULL,
  `estado` char(20) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `CPF` int(11) NOT NULL,
  `end_admin` varchar(80) NOT NULL,
  `sexo` char(2) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('Administrador',NULL,'admin','admin',0,'adm_antifurto@gmail.com','','',0,'','');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `descricao` varchar(60) NOT NULL,
  `grau_importancia` char(1) DEFAULT NULL,
  `nome` varchar(20) NOT NULL,
  PRIMARY KEY (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES ('Produtos anti-furto para bicicletas','1','Bicicleta'),('Produtos anti-furto para carros','2','Carro'),('Produtos anti-furto para casas','2','Casa'),('Produtos anti-furto para motos','2','Moto');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `nome_cliente` varchar(40) NOT NULL,
  `foto` varchar(40) DEFAULT NULL,
  `username` varchar(40) NOT NULL,
  `senha` varchar(40) DEFAULT NULL,
  `telefone` int(11) NOT NULL,
  `email_cliente` varchar(40) NOT NULL,
  `estado` char(20) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `CPF` int(11) NOT NULL,
  `end_cliente` varchar(80) NOT NULL,
  `sexo` char(2) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES ('Jacinto Pinto de Amado','1035a50e23dd4532a2614fe6a933a5a0.jpg','jacintopinto','jacintopinto',1238815489,'jacintopinto@hotmail.com','SÃ£o Paulo','Praia Grande',2147483647,'Rua: Pedrao Raphael','M');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entrega`
--

DROP TABLE IF EXISTS `entrega`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entrega` (
  `data_entrega` date NOT NULL,
  `cod_pedido` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `endereco` varchar(80) NOT NULL,
  PRIMARY KEY (`cod_pedido`,`username`),
  KEY `username` (`username`),
  CONSTRAINT `fk_cod_pedido` FOREIGN KEY (`cod_pedido`) REFERENCES `pedido` (`cod_pedido`),
  CONSTRAINT `entrega_ibfk_1` FOREIGN KEY (`username`) REFERENCES `cliente` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entrega`
--

LOCK TABLES `entrega` WRITE;
/*!40000 ALTER TABLE `entrega` DISABLE KEYS */;
/*!40000 ALTER TABLE `entrega` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fornecedor` (
  `cod_fornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `telefone` int(11) NOT NULL,
  `end_fornecedor` varchar(80) NOT NULL,
  `email` varchar(40) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` char(20) NOT NULL,
  `pais` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_fornecedor`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fornecedor`
--

LOCK TABLES `fornecedor` WRITE;
/*!40000 ALTER TABLE `fornecedor` DISABLE KEYS */;
INSERT INTO `fornecedor` VALUES (1,'Empresa JP Antifurto',2147483647,'Rua: Abaraki 55','empresajp@gmail.com','Yuki','Ibaraki','Japan'),(2,'Empresa Raid Antifurto',2139516749,'Rua: Riachuelo, 55','empresaraid@gmail.com','Rio de Janeiro','Rio de Janeiro','Brasil'),(3,'Empresa Briton Antifurto',2147483647,'Av. Prudente de Morais, 1015','empresabriton@gmail.com','Maringa','ParanÃ¡','Brasil'),(6,'Empresa Roiaul Antifurto',2147483647,'Av. Mara','empresaroiaul@hotmail.com','Caracas','Vargas','Venezuela');
/*!40000 ALTER TABLE `fornecedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historico_update`
--

DROP TABLE IF EXISTS `historico_update`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historico_update` (
  `cod_update` int(11) NOT NULL AUTO_INCREMENT,
  `cod_produto` int(11) DEFAULT NULL,
  `acao` varchar(20) DEFAULT NULL,
  `user` varchar(20) DEFAULT NULL,
  `valor_old` decimal(10,2) DEFAULT NULL,
  `valor_new` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`cod_update`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historico_update`
--

LOCK TABLES `historico_update` WRITE;
/*!40000 ALTER TABLE `historico_update` DISABLE KEYS */;
INSERT INTO `historico_update` VALUES (1,46,'update','root@localhost',26.50,26.50),(2,67,'update','root@localhost',79.90,79.90),(3,66,'update','root@localhost',76.30,76.30),(4,4,'update','root@localhost',27.90,27.90);
/*!40000 ALTER TABLE `historico_update` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagamento`
--

DROP TABLE IF EXISTS `pagamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagamento` (
  `data_pagamento` date NOT NULL,
  `data_vencimento` date NOT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `cod_pedido` int(11) NOT NULL,
  PRIMARY KEY (`cod_pedido`),
  CONSTRAINT `pagamento_ibfk_1` FOREIGN KEY (`cod_pedido`) REFERENCES `pedido` (`cod_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagamento`
--

LOCK TABLES `pagamento` WRITE;
/*!40000 ALTER TABLE `pagamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido` (
  `cod_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `data_pedido` date NOT NULL,
  `cod_produto` int(11) DEFAULT NULL,
  `username` varchar(40) NOT NULL,
  PRIMARY KEY (`cod_pedido`),
  KEY `username` (`username`),
  CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`username`) REFERENCES `cliente` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produto` (
  `descricao` varchar(60) NOT NULL,
  `cod_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(20) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `foto` varchar(40) NOT NULL,
  `estoque` int(11) NOT NULL,
  `cod_fornecedor` int(11) DEFAULT NULL,
  `categoria` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cod_produto`),
  KEY `cod_fornecedor` (`cod_fornecedor`),
  KEY `categoria` (`categoria`),
  CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`cod_fornecedor`) REFERENCES `fornecedor` (`cod_fornecedor`),
  CONSTRAINT `produto_ibfk_2` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`nome`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES ('Cadeado com senha ',1,'Cad.Senha 3.0',19.90,'689b7c5b4f5ef66721299e53dd922b44.jpg',50,2,'bicicleta'),('Cadeado com botÃ£o de destravamento',3,'Cad.BotÃ£o',22.99,'8e14e5edb3bfe7285df95db987f7e50d.jpg',50,3,'bicicleta'),('Cadeado com corrente em capada ',4,'Cad.Encapado 0.9',27.90,'1f15eeb524fa186d0169d5efdde81390.jpg',50,1,'bicicleta'),('Cadeado resistente com chave estrangeira',6,'Cad.Resistente',24.99,'c021521860614278520be2eeda518e01.jpg',50,2,'bicicleta'),('Cadeado de aÃ§o e com alarme',10,'Cad.AÃ§o',59.90,'badc05bbc4d1ba0727ccf61a4b1f04b9.JPG',50,6,'bicicleta'),('Cadeado ajustado no quadro para prender roda e freio',15,'Cad.Roda',49.99,'cdab2f980cbb1ec4033ca3123dadb4b7.jpg',50,1,'bicicleta'),('Cadeado de aÃ§o com alarme e senha',16,'Cad.AÃ§o',77.90,'d53b6f17def459dfd2bc9428f282b353.JPG',50,6,'bicicleta'),('Cadeado de senha e com luz para abri-lo no escuro',18,'Cad.Luz',35.99,'6b5af1ec98c6a3625d03f5770e99135e.JPG',50,3,'bicicleta'),('Cadeado de senha para corrente',19,'Cad.Senha',9.99,'44d259f42bc9eb1d49d66de60563eecf.jpg',50,2,'bicicleta'),('Cadeado ultra flexivel ',20,'Cad.Flexivel',23.50,'47ef5fc87b38299092da6145ab02b66d.jpg',50,2,'bicicleta'),('Alarme para cadeados',22,'Alarme',22.50,'80330725b7c2a29bad3939931cbc1e32.jpg',50,3,'bicicleta'),('Cadeado encapado e com senha',23,'Cad.encapado',12.90,'271a1381fce5442ffdf00e40c0dc0e1f.jpg',50,2,'bicicleta'),('Cadeado de ferro ',26,'Cad.Ferro',25.50,'b7d93f0f3838ff208c3b663738daadb8.jpg',50,6,'bicicleta'),('Cadeado de aÃ§o com alarme e 5 chaves reservas',27,'Cad.AÃ§o',74.99,'a5d83626ef87c2af9b5185386aba25c0.jpg',50,6,'bicicleta'),('Cadeado com cÃ¢mera digital',28,'Cad.CÃ¢mera',68.80,'c11dbb7698c34604388212e7d66881df.jpg',50,6,'bicicleta'),('Cadeado que pode ser dobrado em atÃ© 5 vezes',29,'Cad.Dobravel',29.90,'6241bc3a24331f81996133440fb638ce.jpg',50,2,'bicicleta'),('Cadeado de senha inserido no cubo',30,'Cad.Cubo',82.50,'fa3b3adc165f2849b95170a05e65d164.jpg',50,6,'bicicleta'),('Cadeado de senha inserido no cubo e com protetor',31,'Cad.Roda',86.90,'96442fc386a251b2b13eebe104cc5014.jpg',50,1,'bicicleta'),('Pedal que desrosqueia e vira um cadeado ',32,'Cad.Pedal',101.00,'47b66fd60e3adce1fc5dcfc4c839fad3.jpg',50,6,'bicicleta'),('Cadeado com senha',33,'Cad.Senha 0.4',39.90,'3d1a509413adf2de032a67b4f1f2ac68.jpg',50,2,'casa'),('CÃ¢mera Noturna com 16 pixels',34,'CÃ¢mera N16',69.90,'a7e91454823eba52bb7f7d7bb7f58d3c.jpg',50,1,'casa'),('CÃ¢mera de teto noturna com 10 pixels ',35,'CÃ¢mera N10',59.90,'a84e0337b1b0a9014c1815ff2a00fa2b.jpg',50,1,'casa'),('Fechadura automÃ¡tica ',36,'Fechaduro AutomÃ¡tic',55.50,'3158bdae0fbe2b151e51199478b81ef2.jpg',50,3,'casa'),('Cerca ElÃ©trica Auto voltagem ',37,'Cerca ElÃ©trica',9.90,'96b6c408f7f5c4d3adb4121d02d444ab.jpg',50,3,'casa'),('Pequeno fone detector de calor ',38,'Little Fone Detector',79.99,'e599e38dede9502e628f7cdf61933d5a.jpg',50,6,'casa'),('Arame Farpado opcional para por alta voltagem ',39,'Arame Farpado ',13.90,'c406a8524a463b27cb73f4004ce9ec06.jpg',50,2,'casa'),('CÃ¢mera Discreta e anti reflexo ',40,'CÃ¢mera Discreta ',99.90,'b4a137a968f0889cf715ff68aaba4ed7.jpg',50,6,'casa'),('Detector de movimento',41,'Detector',29.90,'34e5e706a7ee3f9e233989831e93d45b.jpg',50,1,'casa'),('Alarme disparador a caso de roubo',42,'Alarme ',105.50,'37c00dcda3367c94871c3c1bccd53735.jpg',50,3,'casa'),('Cadeado de Freio de MÃ£o',43,'Cad.FM ',35.50,'e11368e1858f3fbc1ee7411c2b939819.jpg',50,2,'carro'),('Cadeado de pedal ',44,'Cad.Pedal',29.50,'3847902ffa14c18281c5b2522704b8c6.jpg',50,3,'carro'),('Cadeado de volante',46,'Cad.Volante',26.50,'26a0843455148ccfc1087cf581bd6e25.jpg',50,6,'carro'),('cadeado de acelerador e e volante',47,'Cad.Acelerador',40.50,'2f4ed83f13ee44d100f40898d1ab67b3.jpg',50,1,'carro'),('Cadeado de roda 3 x 1',48,'Cad.Roda',129.99,'182957e03a8e1e4cbfd67b52c343a9e2.jpg',50,6,'carro'),('Cadeado de roda 2 x 1 e protetor de calota',49,'Cad.roda',115.50,'5a7978ca5e811e4641e174ae380c9717.jpg',50,1,'carro'),('Cadeado de roda 2 x 1  ',50,'Cad.roda',109.50,'7d4c7d9da805b4530a85d3b932e34e00.jpg',50,2,'carro'),('Cadeado para parafuso ',51,'Cad.Parafuso',38.50,'167e5df0b5eb3b2f5e6810f479807e22.jpg',50,3,'carro'),('Cadeado de freio ou embreagem e acelerador',52,'Cad.Acelerador',29.90,'aff93fb7ea30df6975367d084e0c3fa8.jpg',50,6,'moto'),('Cadeado de freio a disco',53,'Cad.Freio',39.50,'1cf404b3a57b0f5ffb09a7873aa16661.jpg',50,1,'moto'),('Cadeado de chassi',54,'Cad.Chassi',69.90,'74bae12fa702226192422d681be52675.jpg',50,6,'moto'),('Cadeado de freio a disco com alarme',55,'Cad.Freio',55.50,'1dee731519a177b196f6da0bf7ea7f1f.jpg',50,6,'moto'),('Cadeado de guidÃ£o',57,'Cad.GuidÃ£o',44.99,'109fd00fa7e6bee7200d7914fff9bf57.jpg',50,2,'moto'),('Cadeado de acelerador bloqueando a aceleraÃ§Ã£o',58,'Cad.Acelerador',63.50,'eaf4b5b278ac8ad40f2bc4772655bdac.jpg',50,1,'moto'),('Cadeado de corrente',60,'Cad.Correnete',19.90,'6220b020c34fb8f5a6f944533a2cd07c.jpg',50,2,'moto'),('Cadeado do tanque de gasolina',62,'Cad.Gasolina',88.50,'d9a485d616c8d36ca037a01095a8b9bd.jpg',50,3,'moto'),('Cadeado de cubo ',63,'Cad.Roda',21.50,'f200541ef70d908f4fe6b6d2c64d4d1e.jpg',50,2,'bicicleta'),('Cadeado de senha para trancar mais de uma bicicleta',64,'Cad.MultiBikes',35.50,'2ad8bef1a7759f21625330a3d0a32cec.jpg',50,1,'bicicleta'),('Cadeado de freio a disco',65,'Cad.Freio',29.90,'4d00ed2b7c9dadb224b1d902aa16702e.jpg',50,3,'bicicleta'),('Banco que tambÃ©m vira um cadeado ',66,'Cad.Banco',76.30,'ef0e230d37a03f614a0648f6f0c39907.jpg',50,6,'bicicleta'),('Banco que tambÃ©m serve para trancar a bicicleta',67,'Cad.Banco',79.90,'0fe1827b2f0566b300f3de9c777f0095.jpg',50,1,'bicicleta'),('Capacete que tambÃ©m serve como cadeado ',68,'Cad.Capacete',23.75,'1a5f871ac045cc937e491b4ca599f98a.jpg',50,3,'bicicleta'),('Cadeado simples',69,'Cad.Simples',11.90,'42ddcc0ca10d5f426e7a5374dd13abe1.JPG',50,3,'bicicleta'),('Cadeado chamativo para o ladrÃ£o rouba-lo e nÃ£o a bicicleta',71,'Cad.Chamativo',92.90,'649d89c41aeff2b0f1e45a5f1bc36ab4.jpg',50,3,'bicicleta'),('Cadeado chamativo para o ladrÃ£o rouba-lo e nÃ£o a bicicleta',72,'Cad.Chamativo',89.90,'d2bff638388f82401cd1963f29b0a810.jpg',50,2,'bicicleta'),('Cadeado comum',73,'Cad.Comum',10.99,'776739d4a4b08447d23f1c4bf07024fb.jpg',50,6,'bicicleta');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER update_historico_produtos AFTER UPDATE on produto FOR EACH ROW 
BEGIN
	INSERT INTO historico_update (cod_produto, acao, user, valor_old, valor_new)
							VALUES (OLD.cod_produto, "update", user(), OLD.preco, NEW.preco);
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER update_historico_produtos_delete AFTER DELETE on produto FOR EACH ROW 
BEGIN
	INSERT INTO historico_update (cod_produto, acao, user)
							VALUES (OLD.cod_produto, "delete", user());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Temporary table structure for view `tabela_cliente`
--

DROP TABLE IF EXISTS `tabela_cliente`;
/*!50001 DROP VIEW IF EXISTS `tabela_cliente`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `tabela_cliente` (
  `foto` tinyint NOT NULL,
  `username` tinyint NOT NULL,
  `nome_cliente` tinyint NOT NULL,
  `sexo` tinyint NOT NULL,
  `email_cliente` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `tabela_pedido`
--

DROP TABLE IF EXISTS `tabela_pedido`;
/*!50001 DROP VIEW IF EXISTS `tabela_pedido`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `tabela_pedido` (
  `cod_pedido` tinyint NOT NULL,
  `data_pedido` tinyint NOT NULL,
  `username` tinyint NOT NULL,
  `nome_cliente` tinyint NOT NULL,
  `cod_produto` tinyint NOT NULL,
  `nome_produto` tinyint NOT NULL,
  `nome` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Dumping events for database 'anti_furto'
--

--
-- Dumping routines for database 'anti_furto'
--

--
-- Final view structure for view `tabela_cliente`
--

/*!50001 DROP TABLE IF EXISTS `tabela_cliente`*/;
/*!50001 DROP VIEW IF EXISTS `tabela_cliente`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `tabela_cliente` AS select `cliente`.`foto` AS `foto`,`cliente`.`username` AS `username`,`cliente`.`nome_cliente` AS `nome_cliente`,`cliente`.`sexo` AS `sexo`,`cliente`.`email_cliente` AS `email_cliente` from `cliente` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `tabela_pedido`
--

/*!50001 DROP TABLE IF EXISTS `tabela_pedido`*/;
/*!50001 DROP VIEW IF EXISTS `tabela_pedido`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `tabela_pedido` AS select `pe`.`cod_pedido` AS `cod_pedido`,`pe`.`data_pedido` AS `data_pedido`,`c`.`username` AS `username`,`c`.`nome_cliente` AS `nome_cliente`,`pr`.`cod_produto` AS `cod_produto`,`pr`.`nome_produto` AS `nome_produto`,`f`.`nome` AS `nome` from (`pedido` `pe` join (`cliente` `c` join (`produto` `pr` join `fornecedor` `f`)) on((`pe`.`username` = (`c`.`username` and (`pe`.`cod_produto` = `pr`.`cod_produto`))))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-11-18 18:37:10

#PREVILEGIOS DOS USERs

#MASTER
GRANT all
on anti_furto
to webmaster@localhost;

#CLIENTE
GRANT UPDATE, SELECT, INSERT
on cliente
to cliente@localhost;

GRANT UPDATE, SELECT, INSERT
on produto
to cliente@localhost;

GRANT UPDATE, SELECT, INSERT
on historico_update
to cliente@localhost;

GRANT UPDATE, SELECT, INSERT
on entrega
to cliente@localhost;

GRANT SELECT
on fornecedor
to cliente@localhost;

GRANT SELECT, INSERT, UPDATE
on pagamento
to cliente@localhost;

GRANT SELECT
on categoria
to cliente@localhost;

GRANT SELECT, INSERT, UPDATE
on pedido
to cliente@localhost;

#VISITANTE
GRANT SELECT 
on produto
to visitante@localhost;

GRANT SELECT 
on fornecedor
to visitante@localhost;

GRANT SELECT 
on categoria
to visitante@localhost;

GRANT INSERT, select
on cliente
to visitante@localhost;

GRANT select
on admin
to visitante@localhost;
