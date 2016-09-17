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
				<h1><span>Civilisation '13</span>Process Details</h1>
            </header>       
      <div  class="form">
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
  $cid=$_POST['cid'];
  $name=$_POST['name'];
  $year=$_POST['year'];
  $contact=$_POST['contact'];
  $college=$_POST['college'];
  $p1=$_POST['eventp'];
  $p2=$_POST['specialp'];
  $p3=$_POST['workshopp'];
  
  if(mysql_query("insert into reg values('$cid','$name','$year','$college','$contact','no','no','no','no','no','no','no','no','no','no','no','no','no','no','no','no','no','no','no','no','no','no','no','$p1','$p2','$p3')"))
  { 
    
	//echo $college;
										mysql_query("update college set participants=participants+1 where name='$college'");
										if($p3=="yes")
										{
										$sql="insert into workshop values('$cid','$name','$year','$college','$contact','yes')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for Workshop<br>";
										else
										echo "registration Failed for Workshop<br>";
										}
										
										echo "Registered Successfully";
	
  
}
else
{
echo "Registration Failed";
}
		/*
						if(empty($_POST['events'])) 
						{
							echo("No events Selected <a href='register.php'> Click Here </a>");
						} 
						else
						{
							$event=$_POST['events'];
							$N = count($event);
							for($i=0; $i < $N; $i++)
							{
								if(isset($event[$i]))
								{
								if($event[$i]=="Builtrix")
								{
										
										$sql="insert into builtrix values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										{
										echo "registered Successfully for Builtrix<br>";
										//mysql_query("update reg set builtrix='yes' where cid='$cid'");
										}
										else
										echo "registration Failed for Builtrix<br>";
										
										
										mysql_query("update reg set builtrix='yes' where cid='$cid'");
								}
								
								 if($event[$i]=="Suspension Bridge")
								{
										
							$sql="insert into suspension_bridge values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for Suspension Bridge<br>";
										else
										echo "registration Failed for Suspension Bridge<br>";
										mysql_query("update reg set suspension_bridge='yes' where cid='$cid'");
								}
								
								if($event[$i]=="Archibuildo")
								{
										
										$sql="insert into archibuildo values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for Archibuildo<br>";
										else
										echo "registration Failed for Archibuildo<br>";
										mysql_query("update reg set archibuildo='yes' where cid='$cid'");
								}
								
								if($event[$i]=="Connect 'em")
								{
										
										$sql="insert into connect_em values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for Connect em<br>";
										else
										echo "registration Failed for Connect em<br>";
										mysql_query("update reg set connect_em='yes' where cid='$cid'");
								}
								
								if($event[$i]=="Confloat")
								{
										
										$sql="insert into confloat values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for Confloat<br>";
										else
										echo "registration Failed for Confloat<br>";
										mysql_query("update reg set confloat='yes' where cid='$cid'");
								}
								
								if($event[$i]=="Primametry")
								{
										
										$sql="insert into primametry values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for Primametry<br>";
										else
										echo "registration Failed for Primametry<br>";
										mysql_query("update reg set primametry='yes' where cid='$cid'");
								}
								
								if($event[$i]=="Detour")
								{
										
										$sql="insert into detour values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for Detour<br>";
										else
										echo "registration Failed for Detour<br>";
										mysql_query("update reg set detour='yes' where cid='$cid'");
								}
								
								if($event[$i]=="Urbanista")
								{
										
										$sql="insert into urbanista values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for Urbanista<br>";
										else
										echo "registration Failed for Urbanista<br>";
										mysql_query("update reg set urbanista='yes' where cid='$cid'");
								}
								
								if($event[$i]=="Robo Mason")
								{
										
										$sql="insert into robo_mason values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for Robo Mason<br>";
										else
										echo "registration Failed for Robo Mason<br>";
										mysql_query("update reg set robo_mason='yes' where cid='$cid'");
								}
								
								if($event[$i]=="Contraption")
								{
										
										$sql="insert into contraption values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for Contraption<br>";
										else
										echo "registration Failed for Contraption<br>";
										mysql_query("update reg set contraption='yes' where cid='$cid'");
								}
								
								if($event[$i]=="Energy Explorers")
								{
										
										$sql="insert into energy_explorers values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for Energy Explorers<br>";
										else
										echo "registration Failed for Energy Explorers<br>";
										mysql_query("update reg set energy_explorers='yes' where cid='$cid'");
								}
								
								if($event[$i]=="Paper Presentation")
								{
										
										$sql="insert into paper_presentation values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for Paper Presentation<br>";
										else
										echo "registration Failed for Paper Presentation<br>";
										mysql_query("update reg set paper_presentation='yes' where cid='$cid'");
								}
								
								if($event[$i]=="Tech Quiz")
								{
										
										$sql="insert into tech_quiz values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for Tech Quiz<br>";
										else
										echo "registration Failed for  Tech Quiz<br>";
										mysql_query("update reg set tech_quiz='yes' where cid='$cid'");
								}
								
								if($event[$i]=="General Quiz")
								{
										
										$sql="insert into general_quiz values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for General Quiz<br>";
										else
										echo "registration Failed for General Quiz<br>";
										mysql_query("update reg set general_quiz='yes' where cid='$cid'");
								}
								
								if($event[$i]=="Defacto")
								{
										
										$sql="insert into defacto values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for Defacto<br>";
										else
										echo "registration Failed for Defacto<br>";
										mysql_query("update reg set defacto='yes' where cid='$cid'");
								}
								
								if($event[$i]=="Reason It")
								{
										
										$sql="insert into reason_it values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for Reason It<br>";
										else
										echo "registration Failed for Reason It<br>";
										mysql_query("update reg set reason_it='yes' where cid='$cid'");
								}
								
								if($event[$i]=="Project Display")
								{
										
										$sql="insert into project_display values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for Project Display<br>";
										else
										echo "registration Failed for Project Display<br>";
										mysql_query("update reg set project_display='yes' where cid='$cid'");
								}
								
								if($event[$i]=="Walk In")
								{
										
										$sql="insert into walk_in values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for Walk In<br>";
										else
										echo "registration Failed for Walk In<br>";
										mysql_query("update reg set walk_in='yes' where cid='$cid'");
								}
								
								if($event[$i]=="Constructangram")
								{
										
										$sql="insert into constructangram values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for Constructangram<br>";
										else
										echo "registration Failed for Constructangram<br>";
										mysql_query("update reg set constructangram='yes' where cid='$cid'");
								}
								
								if($event[$i]=="Think Smart")
								{
										
										$sql="insert into think_smart values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for Think Smart<br>";
										else
										echo "registration Failed for Think Smart<br>";
										mysql_query("update reg set think_smart='yes' where cid='$cid'");
								}
								
								if($event[$i]=="Model Making")
								{
										
										$sql="insert into model_making values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for Model Making<br>";
										else
										echo "registration Failed for Model Making<br>";
										mysql_query("update reg set model_making='yes' where cid='$cid'");
										
								}
								
								if($event[$i]=="Poster Designing")
								{
										
										$sql="insert into poster_designing values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
										if(mysql_query($sql,$con))
										echo "registered Successfully for Poster Designing<br>";
										else
										echo "registration Failed for Poster Designing<br>";
										mysql_query("update reg set poster_designing='yes' where cid='$cid'");
										
								}
								
							}
								
								
								
								
							}
						}*/
						
						
mysql_close($con);
?>
<br /><br />
  <form action="registration.php" method="post">
<input class="buttom" name="submit" id="submit" tabindex="2" value="Back to Registration" type="submit">
</form>
</div>
</div>
</body>
</html>