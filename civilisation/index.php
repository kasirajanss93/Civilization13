<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  if (mysql_query("CREATE DATABASE civilisation",$con))
  {
	//echo "Database created";
  }
  mysql_select_db("civilisation",$con);
  $sql="create table college(name varchar(200)primary key,participants int(11),points int(20))";
mysql_query($sql,$con);

 $sql="create table events(username varchar(20)primary key,flag varchar(5),password varchar(20))";
 mysql_query($sql,$con);

   $sql="create table reg(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),builtrix varchar(5),suspension_bridge varchar(5),archibuildo varchar(5),connect_em varchar(5),confloat varchar(5),primametry varchar(5),detour varchar(5),urbanista varchar(5),robo_mason varchar(5),contraption varchar(5),energy_explorers varchar(5),paper_presentation varchar(5),tech_quiz varchar(5),general_quiz varchar(5),defacto varchar(5),reason_it varchar(5),project_display varchar(5),walk_in varchar(5),constructangram varchar(5),think_smart varchar(5),model_making varchar(5),poster_designing varchar(5),workshop varchar(5),events_paid varchar(5),special_paid varchar(5),workshop_paid varchar(5))";
 mysql_query($sql,$con); 


   $sql="create table builtrix(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
 $sql="insert into events values('builtrix','no','builtcore52')";
 mysql_query($sql,$con); 
 
 $sql="create table suspension_bridge(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
 $sql="insert into events values('suspension_bridge','no','suscore319')";
 mysql_query($sql,$con); 
 
  $sql="create table archibuildo(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
  $sql="insert into events values('archibuildo','no','archicore51')";
 mysql_query($sql,$con); 
 
  $sql="create table connect_em(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
  $sql="insert into events values('connect_em','no','connecticore83')";
 mysql_query($sql,$con); 
 
  $sql="create table confloat(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
   $sql="insert into events values('confloat','no','floatcore56')";
 mysql_query($sql,$con); 
 
  $sql="create table primametry(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
  $sql="insert into events values('primametry','no','primacore516')";
 mysql_query($sql,$con); 
 
  $sql="create table detour(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
   $sql="insert into events values('detour','no','decore24')";
 mysql_query($sql,$con); 
 
 
  $sql="create table urbanista(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
   $sql="insert into events values('urbanista','no','urbancore521')";
 mysql_query($sql,$con); 
 
 
  $sql="create table robo_mason(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con);

$sql="insert into events values('robo_mason','no','robocore418')";
 mysql_query($sql,$con);  
 
  $sql="create table contraption(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
 $sql="insert into events values('contraption','no','contracore63')";
 mysql_query($sql,$con); 
 
  $sql="create table energy_explorers(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
 $sql="insert into events values('energy_explorers','no','energycore65')";
 mysql_query($sql,$con); 
 
  $sql="create table paper_presentation(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
 $sql="insert into events values('paper_presentation','no','papercore516')";
 mysql_query($sql,$con); 
 
  $sql="create table tech_quiz(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
 $sql="insert into events values('tech_quiz','no','techcore420')";
 mysql_query($sql,$con); 
 
  $sql="create table general_quiz(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
 $sql="insert into events values('general_quiz','no','gencore37')";
 mysql_query($sql,$con); 
 
  $sql="create table defacto(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
 $sql="insert into events values('defacto','no','factcore46')";
 mysql_query($sql,$con); 
 
  $sql="create table reason_it(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
 $sql="insert into events values('reason_it','no','reasoncore618')";
 mysql_query($sql,$con); 
 
  $sql="create table project_display(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
 $sql="insert into events values('project_display','no','procore316')";
 mysql_query($sql,$con); 
 
  $sql="create table walk_in(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con);
 
 $sql="insert into events values('walk_in','no','walkcore423')";
 mysql_query($sql,$con); 
	
$sql="create table constructangram(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
 $sql="insert into events values('constructangram','no','concore33')";
 mysql_query($sql,$con); 
 
 $sql="create table think_smart(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
 $sql="insert into events values('think_smart','no','thinkcore520')";
 mysql_query($sql,$con); 
 
 $sql="create table model_making(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
 $sql="insert into events values('model_making','no','modelcore513')";
 mysql_query($sql,$con); 
 
  $sql="create table poster_designing(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
 $sql="insert into events values('poster_designing','no','postcore416')";
 mysql_query($sql,$con); 
 
  $sql="create table workshop(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5))";
 mysql_query($sql,$con);
 
 

$sql="create table login(name varchar(50)primary key,password varchar(50))";
 mysql_query($sql,$con); 

$sql="insert into login values('hospi','hospicore')";
 mysql_query($sql,$con); 

$sql="insert into login values('admin','corecivilian13')";
 mysql_query($sql,$con);  

$sql="insert into login values('events','eventscore')";
 mysql_query($sql,$con); 

$sql="insert into login values('workshop','workshopcore')";
 mysql_query($sql,$con);  
 
 mysql_query("insert into college values ('A.C.COLLEGE OF ENGINEERING AND TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('AALIM MUHAMMED SALEGH COLLEGE OF ENGINEERING','0','0')",$con);
mysql_query("insert into college values ('ADHIPARASAKTHI ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('ADHIYAMAAN COLLEGE OF ENGINEERING','0','0')",$con);
mysql_query("insert into college values ('AKSHEYAA COLLEGE OF ENGINEERING','0','0')",$con);
mysql_query("insert into college values ('ALAGAPPA CHETTIAR COLLEGE OF ENGINEERING AND TECHNOLOGY, KARAIKUDI','0','0')",$con);
mysql_query("insert into college values ('AMRITA SCHOOL OF ENGINEERING','0','0')",$con);
mysql_query("insert into college values ('AMRITA VISHWA VIDYAPEETAM','0','0')",$con);
mysql_query("insert into college values ('ANNA UNIVERSITY, DINDIGUL','0','0')",$con);
mysql_query("insert into college values ('ANNA UNIVERSITY, TINDIVANAM','0','0')",$con);
mysql_query("insert into college values ('ANNA UNIVERSITY, THIRUCHIRAPALLI','0','0')",$con);
mysql_query("insert into college values ('ANNA UNIVERSITY, UNIVERSITY COLLEGE OF ENGINEERING RAMANATHAPURAM','0','0')",$con);
mysql_query("insert into college values ('ANNAMALAI UNIVERSITY, CHIDAMBARAM','0','0')",$con);
mysql_query("insert into college values ('APOLLO PRIYADARSHANAM INSTITUTE OF TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('ARUNAI ENGINEERING COLLEGE, TIRUVANNAMALAI','0','0')",$con);
mysql_query("insert into college values ('ASAN MEMORIAL COLLEGE OF ENGINEERING AND TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('AVS ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('B.S.ABDUR RAHMAN UNIVERSITY, VANDALUR.','0','0')",$con);
mysql_query("insert into college values ('BANNARI AMMAN INISTITUTE OF TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('BHARATH UNIVERSITY,CHENNAI','0','0')",$con);
mysql_query("insert into college values ('BHARATHIDASAN INSTITUTE OF TECHNOLOGY, ANNA UNIVERSITY, THIRUCHIRAPALLI','0','0')",$con);
mysql_query("insert into college values ('BHARATHIYAR INSTITUTE OF ENGG. FOR WOMEN, DEVIYAKURICHI','0','0')",$con);
mysql_query("insert into college values ('CEG','0','0')",$con);
mysql_query("insert into college values ('CHANDY COLLEGE OF ENGINEERING','0','0')",$con);
mysql_query("insert into college values ('COIMBATORE INSTITUTE OF TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('CSI INSTITUTE OF TECHNOLOGY,THOVALAI','0','0')",$con);
mysql_query("insert into college values ('DHANALAKSHMI COLLEGE OF ENGINEERING','0','0')",$con);
mysql_query("insert into college values ('DHANALAKSHMI SRINIVASAN ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('DMI ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('DR. MAHALINGAM COLLEGE OF ENGINEERING & TECHNOLOGY, POLLACHI','0','0')",$con);
mysql_query("insert into college values ('DR.PALUS ENGINEERING COLLEGE , VILLUPURAM.','0','0')",$con);
mysql_query("insert into college values ('DR.SIVANTHI ADITANAR COLLAGE OF ENGINEERING','0','0')",$con);
mysql_query("insert into college values ('EASWARI ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('EBET GROUP OF INSTITUTIONS, KANGAYAM','0','0')",$con);
mysql_query("insert into college values ('ERODE SENGUNDAR ENGINEERING COLLEGE, THUDUPATHI','0','0')",$con);
mysql_query("insert into college values ('GANDHIGRAM RURAL INSTITUTE DEEMED UNIVERSITY','0','0')",$con);
mysql_query("insert into college values ('GOVERNMENT COLLEGE OF TECHNOLOGY, COIMBATORE','0','0')",$con);
mysql_query("insert into college values ('GKM COLLEGE OF ENGINEERING & TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('GOVERNMENT COLLEGE OF ENGINEERING, THIRUNELVELI','0','0')",$con);
mysql_query("insert into college values ('GOVERNMENT COLLEGE OF ENGINEERING, SALEM','0','0')",$con);
mysql_query("insert into college values ('GRT INSTITUTE OF ENGG. AND TECH.','0','0')",$con);
mysql_query("insert into college values ('HINDUSTAN INSTITUTE OF TECHNOLOGY AND SCIENCE','0','0')",$con);
mysql_query("insert into college values ('INFANT JESUS COLLEGE OF ENGINEERING AND TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('INSTITUTE OF ROAD AND TRANSPORT TECHNOLOGY, ERODE.','0','0')",$con);
mysql_query("insert into college values ('JANSONS INSTITUTE OF TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('JAYALAKSHMI INSTITUTE OF TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('JEPPIAAR ENGINEERING COLLEGE, CHENNAI','0','0')",$con);
mysql_query("insert into college values ('JERUSALEM COLLEGE OF ENGINEERING','0','0')",$con);
mysql_query("insert into college values ('JJ COLLEGE OF ENGINEERING AND TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('JOHN BOSCO ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('K S R COLLEGE OF ENGINEERING','0','0')",$con);
mysql_query("insert into college values ('K. RAMAKRISHNAN COLLEGE OF TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('K.K.C COLLEGE OF ENGINEERING & TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('K.L.N COLLEGE OF INFORMATION TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('KALASALINGAM UNIVERSITY','0','0')",$con);
mysql_query("insert into college values ('KAMARAJ COLLEGE OF ENGINEERING AND TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('KARPAGAM COLLEGE OF ENGINEERING','0','0')",$con);
mysql_query("insert into college values ('KNOWLEDGE INSTITUTE OF TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('KONGU ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('KPR INSTITUTE OF ENGINEERING AND TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('KUMARAGURU COLLEFE OF TECHNOLOGY, COIMBATORE','0','0')",$con);
mysql_query("insert into college values ('LATHA MATHAVAN ENGG COLLEGE','0','0')",$con);
mysql_query("insert into college values ('LORD AYYAPPA INSTITUTE OF ENGINEERING AND TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('LORD VENGATESHWARA ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('M.A.M COLLEGE OF ENGINEERING','0','0')",$con);
mysql_query("insert into college values ('M.I.E.T ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('M.N.M JAIN ENGG COLLEGE','0','0')",$con);
mysql_query("insert into college values ('M.P.NACHIMUTHU M.JAGANATHAN ENGG. COLLEGE','0','0')",$con);
mysql_query("insert into college values ('MADHAV INSTITUTE OF TCHNOLOGY AND SCIENCE','0','0')",$con);
mysql_query("insert into college values ('MADRAS INSTITUTE OF TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('MAGNA COLLEGE OF EGINEERING','0','0')",$con);
mysql_query("insert into college values ('MAHABARATHI ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('MAHENDRA ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('MAILAM ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('MEENAKSHI SUNDARARAJAN ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('MEPCO SCHLENK ENGG COLLEGE','0','0')",$con);
mysql_query("insert into college values ('MISRIMAL NAVAJEE MUNOTH JAIN ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('MOHAMED SATHAK A.J COLLEGE OF ENGINEERING','0','0')",$con);
mysql_query("insert into college values ('MOOKAMBIGAI COLLEGE OF ENGINEERING','0','0')",$con);
mysql_query("insert into college values ('MUTHAYAMMAL TECHNICAL CAMPUS','0','0')",$con);
mysql_query("insert into college values ('NIT, TRICHY','0','0')",$con);
mysql_query("insert into college values ('N.S.N COLLEGE OF ENGINEERING AND TECHNOLOGY, KARUR','0','0')",$con);
mysql_query("insert into college values ('NANDHA ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('NEHRU INSTITUTE OF TECHNOLOGY,COIMBATORE.','0','0')",$con);
mysql_query("insert into college values ('NORTHERN INDIA COLLEGE OF ENGINEERING.','0','0')",$con);
mysql_query("insert into college values ('P.G.P COLLEGE OF ENGINEERING AND TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('PAAVAI ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('PANDIAN SARASWATI YADAV ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('PANIMALAR ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('PGP COLLEGE OF ENGINEERING & TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('PONDICHERRY ENGINNERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('PRATHYUSHA INSTITUTE OF TECHNOLOGY AND MANAGEMENT','0','0')",$con);
mysql_query("insert into college values ('PSG COLLEGE OF TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('PSNA COLLEGE OF ENGINEERINGAND TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('PSR ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('R.K.ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('R.M.K ENGG. COLLEGE','0','0')",$con);
mysql_query("insert into college values ('RAJALAKSHMI ENGINEERING COLLEGE, THANDALAM','0','0')",$con);
mysql_query("insert into college values ('RATNAVEL SUBRAMANIAM COLLEGE OF ENGINEERING AND TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('S N S COLLEGE OF TECHNOLOGY, COIMBATORE','0','0')",$con);
mysql_query("insert into college values ('S.A ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('S.K.P.ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('S.K.R ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('S.N.S COLLEGE OF TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('S.R.M UNIVERSITY','0','0')",$con);
mysql_query("insert into college values ('SAKTHI ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('SASTRA UNIVERSITY','0','0')",$con);
mysql_query("insert into college values ('SASURIE COLLEGE OF ENGINEERING','0','0')",$con);
mysql_query("insert into college values ('SATHYABAMA UNIVERSITY, CHENNAI','0','0')",$con);
mysql_query("insert into college values ('SCAD ENGG COLLEGE','0','0')",$con);
mysql_query("insert into college values ('SENGUTHAR ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('SETHU INSITITUTE OF TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('SHARDA UNIVERSITY','0','0')",$con);
mysql_query("insert into college values ('SHREE MOTILAL KHANIYALAL FOMRA INSTITUTE OF TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('SIDDHARTH INSTITUTE OF ENGINEERING AND TECHNOLOGY, PUTTUT (ANDHRA PRADESH )','0','0')",$con);
mysql_query("insert into college values ('SMK FOMRA','0','0')",$con);
mysql_query("insert into college values ('SONA COLLEGE OF TECHNOLOGY, SALEM','0','0')",$con);
mysql_query("insert into college values ('SREE SASTHA INSTITUTE OF ENGINEERING &TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('SREENIVASA ENGINEERING COLLEGE, BOMMIDI','0','0')",$con);
mysql_query("insert into college values ('SRI KRISHNA COLLEGE OF TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('SRI SAIRAM ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('SRI VEL TECH HIGH TECH ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('SRI VENKATESHWARA COLLEGE OF ENGINEERING','0','0')",$con);
mysql_query("insert into college values ('SRI VIDYA COLLEGE OF ENGINEERING AND TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('SRM VALLIAMMAI ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('SRR ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('SSM INSTITUTE OF ENGINEERING AND TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('SSN COLLEGE OF ENGG','0','0')",$con);
mysql_query("insert into college values ('ST.JOSEPH'S ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('SURYA ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('SURYA GROUP OF INSTITUTION, VILLUPURAM','0','0')",$con);
mysql_query("insert into college values ('TAGORE INSTITUTE OF ENGINEERING AND TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('TAMILNADU COLLEGE OF ENGINEERING','0','0')",$con);
mysql_query("insert into college values ('THANTHAI PERIYAR GOVT. INST OF TECH','0','0')",$con);
mysql_query("insert into college values ('THE KAVERY ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('THIAGARAJAR COLLEGE OF ENGINEERING','0','0')",$con);
mysql_query("insert into college values ('TRP ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('UNIVERSITY COLLEGE OF ENGINEERING, PANRUTI CAMPUS','0','0')",$con);
mysql_query("insert into college values ('UNIVERSITY COLLEGE OF ENGINEERING, RAMANATHAPURAM','0','0')",$con);
mysql_query("insert into college values ('UNIVERSITY COLLEGE OF ENGINEERING, TINDIVANAM','0','0')",$con);
mysql_query("insert into college values ('UNIVERSITY COLLEGE OF ENGINEERING(BIT CAMPUS), THIRUCHIRAPALLI','0','0')",$con);
mysql_query("insert into college values ('UNIVERSITY COLLEGE OF ENGINEERING, DINDIGUL','0','0')",$con);
mysql_query("insert into college values ('UNIVERSITY COLLEGE OF ENGINEERING, NAGERCOIL','0','0')",$con);
mysql_query("insert into college values ('V.R.S. COLLEGE OF ENGG AND TECH., VILLUPURAM','0','0')",$con);
mysql_query("insert into college values ('VALLIAMMAI ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('VEL TECH HIGH TECH DR RR DR SR ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('VEL MULTI TECH DR.RANGARAJAN DR.SAKUNTHALA ENGINEERING COLLEGE','0','0')",$con);
mysql_query("insert into college values ('VELAMMAL ENGINEERING COLLEGE, CHENNAI','0','0')",$con);
mysql_query("insert into college values ('VICKRAM COLLEGE OF ENGINEERING AND TECHNOLOGY','0','0')",$con);
mysql_query("insert into college values ('VRS COLLEGE OF ENGG. & TECH., ARASUR, VILLUPURAM DT.','0','0')",$con);



 

 
mysql_close($con);
?>
<html>
<head>
<title>Civilisation '13</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
</head>
<body>
<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <a href="http://www.civilisation-ceg.com" target="_blank">Civilisation Home</a>
                <span class="right">
                    <a href="index.php">
                        <strong>Back to Login</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ freshdesignweb top bar -->
			<header>
				<h1><span>Civilisation '13</span> Login</h1>
            </header>       
      <div  class="form">
<form method="post" action="authen.php" id="contactform">

    			
    			<p class="contact"><label for="email">Username</label></p> 
    			<input id="email" name="uname" placeholder="username" required="" type="text"> 
				
    			 
                <p class="contact"><label for="password">Password</label></p> 
    			<input type="password" id="password" name="pass" placeholder="*******" required=""> <br>

<input class="buttom" name="submit" id="submit" tabindex="2" value="Login!" type="submit"> 
</form>
</div>
<div class="freshdesignweb-top" style="margin-top:270px ;padding:15px">
                <img src="images/Watermarkfinal.png" width="30px" height="30px"></img>
				<span class="right">
                    <a href="index.php">
                        <h2><strong>Design By KAXUS</strong></h2>
                    </a>
                <div class="clr" style=""></div>
</div>
</body>
</html>