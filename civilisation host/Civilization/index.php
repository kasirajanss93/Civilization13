<?php
$con = mysql_connect("civilisationdms.db.10386456.hostedresource.com","civilisationdms","Civil13!");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
   if (mysql_query("CREATE DATABASE civilisationdms",$con))
  {
	//echo "Database created";
  }
  mysql_select_db("civilisationdms",$con);
  $sql="create table college(name varchar(200)primary key,participants int(11),points int(20))";
mysql_query($sql,$con);


   $sql="create table reg(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),builtrix varchar(5),suspension_bridge varchar(5),archibuildo varchar(5),connect_em varchar(5),confloat varchar(5),primametry varchar(5),detour varchar(5),urbanista varchar(5),robo_mason varchar(5),contraption varchar(5),energy_explorers varchar(5),paper_presentation varchar(5),tech_quiz varchar(5),general_quiz varchar(5),defacto varchar(5),reason_it varchar(5),project_display varchar(5),walk_in varchar(5),constructangram varchar(5),think_smart varchar(5),model_making varchar(5),poster_designing varchar(5),workshop varchar(5),events_paid varchar(5),special_paid varchar(5),workshop_paid varchar(5))";
 mysql_query($sql,$con); 


   $sql="create table builtrix(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
 $sql="create table suspension_bridge(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
  $sql="create table archibuildo(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
  $sql="create table connect_em(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
  $sql="create table confloat(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
  $sql="create table primametry(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
  $sql="create table detour(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
  $sql="create table urbanista(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
  $sql="create table robo_mason(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
  $sql="create table contraption(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
  $sql="create table energy_explorers(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
  $sql="create table paper_presentation(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
  $sql="create table tech_quiz(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
  $sql="create table general_quiz(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
  $sql="create table defacto(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
  $sql="create table reason_it(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
  $sql="create table project_display(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
  $sql="create table walk_in(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con);
	
$sql="create table constructangram(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
 $sql="create table think_smart(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
 $sql="create table model_making(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
  $sql="create table poster_designing(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5),prelims varchar(10),round2 varchar(10),finals varchar(10),winner varchar(10),runner varchar(10))";
 mysql_query($sql,$con); 
 
  $sql="create table workshop(cid varchar(20)primary key,name varchar(60),year varchar(10),college varchar(200),contact varchar(20),paid varchar(5))";
 mysql_query($sql,$con);

$sql="create table login(name varchar(50)primary key,password varchar(50))";
 mysql_query($sql,$con); 

$sql="insert into login values('hospi','hospi')";
 mysql_query($sql,$con); 

$sql="insert into login values('admin','admin')";
 mysql_query($sql,$con);  

$sql="insert into login values('events','events')";
 mysql_query($sql,$con); 

$sql="insert into login values('workshop','workshop')";
 mysql_query($sql,$con);  
 
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
</div>
</body>
</html>