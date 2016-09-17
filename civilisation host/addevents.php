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
				<h1><span>Civilisation '13</span>Add Participant</h1>
            </header>       
      <div  class="form">
<form method="post" action="addeventsauthen.php">
<b>Event Name</b><br /><br />
<select name="event" class="select-style" style="width: 400px;">
<option value="builtrix">Builtrix</option>
<option value="suspension_bridge">Suspension Bridge</option>
<option value="archibuildo">Archibuildo</option>
<option value="connect_em">Connect 'em</option>
<option value="confloat">Confloat</option>
<option value="primametry">Primametry</option>
<option value="detour">Detour</option>
<option value="urbanista">Urbanista</option>
<option value="robo_mason">Robo Mason</option>
<option value="contraption">Contraption</option>
<option value="energy_explorers">Energy Explorers</option>
<option value="paper_presentation">Paper Presentation</option>
<option value="tech_quiz">Tech Quiz</option>
<option value="general_quiz">General Quiz</option>
<option value="defacto">Defacto</option>
<option value="reason_it">Reason It</option>
<option value="project_display">Project Display</option>
<option value="walk_in">Walk In</option>
<option value="constructangram">Constructangram</option>
<option value="think_smart">Think Smart</option>
<option value="model_making">Model Making</option>
<option value="poster_designing">Poster Designing</option>
<option value="workshop">Workshop</option>
</select><br /><br />
<b>Civilisation Id</b><br /><br /><input type="textbox" name="cid" required=""><br>
<!--
Name<input type="textbox" name="name"><br>
Year<br>
<input type="radio" name="year" value="I">I<br>
<input type="radio" name="year" value="II">II<br>
<input type="radio" name="year" value="III">III<br>
<input type="radio" name="year" value="IV">IV<br>
College
<select name="college">
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
  $sql="select * from college";
  $result = mysql_query($sql,$con);
while($row = mysql_fetch_array($result))
  {
		echo "<option value=".$row['name'].">".$row['name']."</option>";
  }

mysql_close($con);
  ?>
</select><br>-->
<br /><br />
<input class="buttom" name="submit" id="submit" tabindex="2" value="Register" type="submit">