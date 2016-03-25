<?php

class m160325_210207_insert_actor extends CDbMigration
{
    public function __construct()
    {
        //Yii::app()->db->createCommand('SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;')->execute();
        //Yii::app()->db->createCommand('SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;')->execute();
        //Yii::app()->db->createCommand('SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE="TRADITIONAL";')->execute();
    }
    public function __destruct()
    {
        //Yii::app()->db->createCommand('SET SQL_MODE=@OLD_SQL_MODE;')->execute();
        //Yii::app()->db->createCommand('SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;')->execute();
        //Yii::app()->db->createCommand('SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;')->execute();
    }
   
	public function up()
	{
        $data = $this->getData();
        
        $transaction = $this->getDbConnection()->beginTransaction();
        try 
        {
           for ($i=0; $i<count($data); $i++) {
              $row = $data[$i];
              
              $id = $row[0];
              $title = $row[1];
              $last_name = $row[2];
              $last_update = $row[3];
              
              $this->insert('actor', array(
                  'actor_id' => $id,
                  'title' => $title,
                  'last_name' => $last_name,
                  'last_update' => $last_update
              ));
              
           };
           
           $transaction->commit();
        }
        catch (Exception $e) 
        {
            echo "Exception: " . $e->getMessage() . "\n";
            $transaction->rollback();
            return false;       
        };
	
	}

    private function getData() 
    {
      $data = array(
         array(1,'PENELOPE','GUINESS','2006-02-15 04:34:33'),
         array(2,'NICK','WAHLBERG','2006-02-15 04:34:33'),
         array(3,'ED','CHASE','2006-02-15 04:34:33'),
         array(4,'JENNIFER','DAVIS','2006-02-15 04:34:33'),
         array(5,'JOHNNY','LOLLOBRIGIDA','2006-02-15 04:34:33'),
         array(6,'BETTE','NICHOLSON','2006-02-15 04:34:33'),
         array(7,'GRACE','MOSTEL','2006-02-15 04:34:33'),
         array(8,'MATTHEW','JOHANSSON','2006-02-15 04:34:33'),
         array(9,'JOE','SWANK','2006-02-15 04:34:33'),
         array(10,'CHRISTIAN','GABLE','2006-02-15 04:34:33'),
         array(11,'ZERO','CAGE','2006-02-15 04:34:33'),
         array(12,'KARL','BERRY','2006-02-15 04:34:33'),
         array(13,'UMA','WOOD','2006-02-15 04:34:33'),
         array(14,'VIVIEN','BERGEN','2006-02-15 04:34:33'),
         array(15,'CUBA','OLIVIER','2006-02-15 04:34:33'),
         array(16,'FRED','COSTNER','2006-02-15 04:34:33'),
         array(17,'HELEN','VOIGHT','2006-02-15 04:34:33'),
         array(18,'DAN','TORN','2006-02-15 04:34:33'),
         array(19,'BOB','FAWCETT','2006-02-15 04:34:33'),
         array(20,'LUCILLE','TRACY','2006-02-15 04:34:33'),
         array(21,'KIRSTEN','PALTROW','2006-02-15 04:34:33'),
         array(22,'ELVIS','MARX','2006-02-15 04:34:33'),
         array(23,'SANDRA','KILMER','2006-02-15 04:34:33'),
         array(24,'CAMERON','STREEP','2006-02-15 04:34:33'),
         array(25,'KEVIN','BLOOM','2006-02-15 04:34:33'),
         array(26,'RIP','CRAWFORD','2006-02-15 04:34:33'),
         array(27,'JULIA','MCQUEEN','2006-02-15 04:34:33'),
         array(28,'WOODY','HOFFMAN','2006-02-15 04:34:33'),
         array(29,'ALEC','WAYNE','2006-02-15 04:34:33'),
         array(30,'SANDRA','PECK','2006-02-15 04:34:33'),
         array(31,'SISSY','SOBIESKI','2006-02-15 04:34:33'),
         array(32,'TIM','HACKMAN','2006-02-15 04:34:33'),
         array(33,'MILLA','PECK','2006-02-15 04:34:33'),
         array(34,'AUDREY','OLIVIER','2006-02-15 04:34:33'),
         array(35,'JUDY','DEAN','2006-02-15 04:34:33'),
         array(36,'BURT','DUKAKIS','2006-02-15 04:34:33'),
         array(37,'VAL','BOLGER','2006-02-15 04:34:33'),
         array(38,'TOM','MCKELLEN','2006-02-15 04:34:33'),
         array(39,'GOLDIE','BRODY','2006-02-15 04:34:33'),
         array(40,'JOHNNY','CAGE','2006-02-15 04:34:33'),
         array(41,'JODIE','DEGENERES','2006-02-15 04:34:33'),
         array(42,'TOM','MIRANDA','2006-02-15 04:34:33'),
         array(43,'KIRK','JOVOVICH','2006-02-15 04:34:33'),
         array(44,'NICK','STALLONE','2006-02-15 04:34:33'),
         array(45,'REESE','KILMER','2006-02-15 04:34:33'),
         array(46,'PARKER','GOLDBERG','2006-02-15 04:34:33'),
         array(47,'JULIA','BARRYMORE','2006-02-15 04:34:33'),
         array(48,'FRANCES','DAY-LEWIS','2006-02-15 04:34:33'),
         array(49,'ANNE','CRONYN','2006-02-15 04:34:33'),
         array(50,'NATALIE','HOPKINS','2006-02-15 04:34:33'),
         array(51,'GARY','PHOENIX','2006-02-15 04:34:33'),
         array(52,'CARMEN','HUNT','2006-02-15 04:34:33'),
         array(53,'MENA','TEMPLE','2006-02-15 04:34:33'),
         array(54,'PENELOPE','PINKETT','2006-02-15 04:34:33'),
         array(55,'FAY','KILMER','2006-02-15 04:34:33'),
         array(56,'DAN','HARRIS','2006-02-15 04:34:33'),
         array(57,'JUDE','CRUISE','2006-02-15 04:34:33'),
         array(58,'CHRISTIAN','AKROYD','2006-02-15 04:34:33'),
         array(59,'DUSTIN','TAUTOU','2006-02-15 04:34:33'),
         array(60,'HENRY','BERRY','2006-02-15 04:34:33'),
         array(61,'CHRISTIAN','NEESON','2006-02-15 04:34:33'),
         array(62,'JAYNE','NEESON','2006-02-15 04:34:33'),
         array(63,'CAMERON','WRAY','2006-02-15 04:34:33'),
         array(64,'RAY','JOHANSSON','2006-02-15 04:34:33'),
         array(65,'ANGELA','HUDSON','2006-02-15 04:34:33'),
         array(66,'MARY','TANDY','2006-02-15 04:34:33'),
         array(67,'JESSICA','BAILEY','2006-02-15 04:34:33'),
         array(68,'RIP','WINSLET','2006-02-15 04:34:33'),
         array(69,'KENNETH','PALTROW','2006-02-15 04:34:33'),
         array(70,'MICHELLE','MCCONAUGHEY','2006-02-15 04:34:33'),
         array(71,'ADAM','GRANT','2006-02-15 04:34:33'),
         array(72,'SEAN','WILLIAMS','2006-02-15 04:34:33'),
         array(73,'GARY','PENN','2006-02-15 04:34:33'),
         array(74,'MILLA','KEITEL','2006-02-15 04:34:33'),
         array(75,'BURT','POSEY','2006-02-15 04:34:33'),
         array(76,'ANGELINA','ASTAIRE','2006-02-15 04:34:33'),
         array(77,'CARY','MCCONAUGHEY','2006-02-15 04:34:33'),
         array(78,'GROUCHO','SINATRA','2006-02-15 04:34:33'),
         array(79,'MAE','HOFFMAN','2006-02-15 04:34:33'),
         array(80,'RALPH','CRUZ','2006-02-15 04:34:33'),
         array(81,'SCARLETT','DAMON','2006-02-15 04:34:33'),
         array(82,'WOODY','JOLIE','2006-02-15 04:34:33'),
         array(83,'BEN','WILLIS','2006-02-15 04:34:33'),
         array(84,'JAMES','PITT','2006-02-15 04:34:33'),
         array(85,'MINNIE','ZELLWEGER','2006-02-15 04:34:33'),
         array(86,'GREG','CHAPLIN','2006-02-15 04:34:33'),
         array(87,'SPENCER','PECK','2006-02-15 04:34:33'),
         array(88,'KENNETH','PESCI','2006-02-15 04:34:33'),
         array(89,'CHARLIZE','DENCH','2006-02-15 04:34:33'),
         array(90,'SEAN','GUINESS','2006-02-15 04:34:33'),
         array(91,'CHRISTOPHER','BERRY','2006-02-15 04:34:33'),
         array(92,'KIRSTEN','AKROYD','2006-02-15 04:34:33'),
         array(93,'ELLEN','PRESLEY','2006-02-15 04:34:33'),
         array(94,'KENNETH','TORN','2006-02-15 04:34:33'),
         array(95,'DARYL','WAHLBERG','2006-02-15 04:34:33'),
         array(96,'GENE','WILLIS','2006-02-15 04:34:33'),
         array(97,'MEG','HAWKE','2006-02-15 04:34:33'),
         array(98,'CHRIS','BRIDGES','2006-02-15 04:34:33'),
         array(99,'JIM','MOSTEL','2006-02-15 04:34:33'),
         array(100,'SPENCER','DEPP','2006-02-15 04:34:33'),
         array(101,'SUSAN','DAVIS','2006-02-15 04:34:33'),
         array(102,'WALTER','TORN','2006-02-15 04:34:33'),
         array(103,'MATTHEW','LEIGH','2006-02-15 04:34:33'),
         array(104,'PENELOPE','CRONYN','2006-02-15 04:34:33'),
         array(105,'SIDNEY','CROWE','2006-02-15 04:34:33'),
         array(106,'GROUCHO','DUNST','2006-02-15 04:34:33'),
         array(107,'GINA','DEGENERES','2006-02-15 04:34:33'),
         array(108,'WARREN','NOLTE','2006-02-15 04:34:33'),
         array(109,'SYLVESTER','DERN','2006-02-15 04:34:33'),
         array(110,'SUSAN','DAVIS','2006-02-15 04:34:33'),
         array(111,'CAMERON','ZELLWEGER','2006-02-15 04:34:33'),
         array(112,'RUSSELL','BACALL','2006-02-15 04:34:33'),
         array(113,'MORGAN','HOPKINS','2006-02-15 04:34:33'),
         array(114,'MORGAN','MCDORMAND','2006-02-15 04:34:33'),
         array(115,'HARRISON','BALE','2006-02-15 04:34:33'),
         array(116,'DAN','STREEP','2006-02-15 04:34:33'),
         array(117,'RENEE','TRACY','2006-02-15 04:34:33'),
         array(118,'CUBA','ALLEN','2006-02-15 04:34:33'),
         array(119,'WARREN','JACKMAN','2006-02-15 04:34:33'),
         array(120,'PENELOPE','MONROE','2006-02-15 04:34:33'),
         array(121,'LIZA','BERGMAN','2006-02-15 04:34:33'),
         array(122,'SALMA','NOLTE','2006-02-15 04:34:33'),
         array(123,'JULIANNE','DENCH','2006-02-15 04:34:33'),
         array(124,'SCARLETT','BENING','2006-02-15 04:34:33'),
         array(125,'ALBERT','NOLTE','2006-02-15 04:34:33'),
         array(126,'FRANCES','TOMEI','2006-02-15 04:34:33'),
         array(127,'KEVIN','GARLAND','2006-02-15 04:34:33'),
         array(128,'CATE','MCQUEEN','2006-02-15 04:34:33'),
         array(129,'DARYL','CRAWFORD','2006-02-15 04:34:33'),
         array(130,'GRETA','KEITEL','2006-02-15 04:34:33'),
         array(131,'JANE','JACKMAN','2006-02-15 04:34:33'),
         array(132,'ADAM','HOPPER','2006-02-15 04:34:33'),
         array(133,'RICHARD','PENN','2006-02-15 04:34:33'),
         array(134,'GENE','HOPKINS','2006-02-15 04:34:33'),
         array(135,'RITA','REYNOLDS','2006-02-15 04:34:33'),
         array(136,'ED','MANSFIELD','2006-02-15 04:34:33'),
         array(137,'MORGAN','WILLIAMS','2006-02-15 04:34:33'),
         array(138,'LUCILLE','DEE','2006-02-15 04:34:33'),
         array(139,'EWAN','GOODING','2006-02-15 04:34:33'),
         array(140,'WHOOPI','HURT','2006-02-15 04:34:33'),
         array(141,'CATE','HARRIS','2006-02-15 04:34:33'),
         array(142,'JADA','RYDER','2006-02-15 04:34:33'),
         array(143,'RIVER','DEAN','2006-02-15 04:34:33'),
         array(144,'ANGELA','WITHERSPOON','2006-02-15 04:34:33'),
         array(145,'KIM','ALLEN','2006-02-15 04:34:33'),
         array(146,'ALBERT','JOHANSSON','2006-02-15 04:34:33'),
         array(147,'FAY','WINSLET','2006-02-15 04:34:33'),
         array(148,'EMILY','DEE','2006-02-15 04:34:33'),
         array(149,'RUSSELL','TEMPLE','2006-02-15 04:34:33'),
         array(150,'JAYNE','NOLTE','2006-02-15 04:34:33'),
         array(151,'GEOFFREY','HESTON','2006-02-15 04:34:33'),
         array(152,'BEN','HARRIS','2006-02-15 04:34:33'),
         array(153,'MINNIE','KILMER','2006-02-15 04:34:33'),
         array(154,'MERYL','GIBSON','2006-02-15 04:34:33'),
         array(155,'IAN','TANDY','2006-02-15 04:34:33'),
         array(156,'FAY','WOOD','2006-02-15 04:34:33'),
         array(157,'GRETA','MALDEN','2006-02-15 04:34:33'),
         array(158,'VIVIEN','BASINGER','2006-02-15 04:34:33'),
         array(159,'LAURA','BRODY','2006-02-15 04:34:33'),
         array(160,'CHRIS','DEPP','2006-02-15 04:34:33'),
         array(161,'HARVEY','HOPE','2006-02-15 04:34:33'),
         array(162,'OPRAH','KILMER','2006-02-15 04:34:33'),
         array(163,'CHRISTOPHER','WEST','2006-02-15 04:34:33'),
         array(164,'HUMPHREY','WILLIS','2006-02-15 04:34:33'),
         array(165,'AL','GARLAND','2006-02-15 04:34:33'),
         array(166,'NICK','DEGENERES','2006-02-15 04:34:33'),
         array(167,'LAURENCE','BULLOCK','2006-02-15 04:34:33'),
         array(168,'WILL','WILSON','2006-02-15 04:34:33'),
         array(169,'KENNETH','HOFFMAN','2006-02-15 04:34:33'),
         array(170,'MENA','HOPPER','2006-02-15 04:34:33'),
         array(171,'OLYMPIA','PFEIFFER','2006-02-15 04:34:33'),
         array(172,'GROUCHO','WILLIAMS','2006-02-15 04:34:33'),
         array(173,'ALAN','DREYFUSS','2006-02-15 04:34:33'),
         array(174,'MICHAEL','BENING','2006-02-15 04:34:33'),
         array(175,'WILLIAM','HACKMAN','2006-02-15 04:34:33'),
         array(176,'JON','CHASE','2006-02-15 04:34:33'),
         array(177,'GENE','MCKELLEN','2006-02-15 04:34:33'),
         array(178,'LISA','MONROE','2006-02-15 04:34:33'),
         array(179,'ED','GUINESS','2006-02-15 04:34:33'),
         array(180,'JEFF','SILVERSTONE','2006-02-15 04:34:33'),
         array(181,'MATTHEW','CARREY','2006-02-15 04:34:33'),
         array(182,'DEBBIE','AKROYD','2006-02-15 04:34:33'),
         array(183,'RUSSELL','CLOSE','2006-02-15 04:34:33'),
         array(184,'HUMPHREY','GARLAND','2006-02-15 04:34:33'),
         array(185,'MICHAEL','BOLGER','2006-02-15 04:34:33'),
         array(186,'JULIA','ZELLWEGER','2006-02-15 04:34:33'),
         array(187,'RENEE','BALL','2006-02-15 04:34:33'),
         array(188,'ROCK','DUKAKIS','2006-02-15 04:34:33'),
         array(189,'CUBA','BIRCH','2006-02-15 04:34:33'),
         array(190,'AUDREY','BAILEY','2006-02-15 04:34:33'),
         array(191,'GREGORY','GOODING','2006-02-15 04:34:33'),
         array(192,'JOHN','SUVARI','2006-02-15 04:34:33'),
         array(193,'BURT','TEMPLE','2006-02-15 04:34:33'),
         array(194,'MERYL','ALLEN','2006-02-15 04:34:33'),
         array(195,'JAYNE','SILVERSTONE','2006-02-15 04:34:33'),
         array(196,'BELA','WALKEN','2006-02-15 04:34:33'),
         array(197,'REESE','WEST','2006-02-15 04:34:33'),
         array(198,'MARY','KEITEL','2006-02-15 04:34:33'),
         array(199,'JULIA','FAWCETT','2006-02-15 04:34:33'),
         array(200,'THORA','TEMPLE','2006-02-15 04:34:33')
      );
      
      return $data;
       
    } 
	
	public function down()
	{
		$this->truncateTable('actor');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}