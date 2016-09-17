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
				<h1><span>Civilisation '13</span>Point Calculation</h1>
            </header>       
      <div  class="form">
<html>
<body>
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
  $result = mysql_query("SELECT * FROM $_POST[event]");
  
						while($row = mysql_fetch_array($result))
						{		
								$prelims=$row['prelims']; 
								$round2=$row['round2']; 
								$finals=$row['finals']; 
								$winner=$row['winner']; 
								$runner=$row['runner']; 
								$college=$row['college'];
								if($prelims=="yes")
								{
										$points=10;
										$result1 = mysql_query("SELECT * FROM college where name='$college'");
										
										while($row1 = mysql_fetch_array($result1))
										{
														
														$points1=$row1['points'];
														$points1=$points1+$points;
														echo $points1;
													mysql_query("update college set points='$points1' where name='$college'");
										}
										
								}
								if($round2=="yes")
								{
										$points=20;
										$result1 = mysql_query("SELECT * FROM college where name='$college'");
										
										while($row1 = mysql_fetch_array($result1))
										{
														
														$points1=$row1['points'];
														$points1=$points1+$points;
														echo $points1;
													mysql_query("update college set points='$points1'");
										}
										
								}
								
								if($finals=="yes")
								{
										$points=30;
										$result1 = mysql_query("SELECT * FROM college where name='$college'");
										
										while($row1 = mysql_fetch_array($result1))
										{
														
														$points1=$row1['points'];
														$points1=$points1+$points;
														echo $points1;
													mysql_query("update college set points='$points1'");
										}
										
								}
								
								if($winner=="yes")
								{
										$points=50;
										$result1 = mysql_query("SELECT * FROM college where name='$college'");
										
										while($row1 = mysql_fetch_array($result1))
										{
														
														$points1=$row1['points'];
														$points1=$points1+$points;
														echo $points1;
													mysql_query("update college set points='$points1'");
										}
										
								}
								
								if($runner=="yes")
								{
										$points=40;
										$result1 = mysql_query("SELECT * FROM college where name='$college'");
										
										while($row1 = mysql_fetch_array($result1))
										{
														
														$points1=$row1['points'];
														$points1=$points1+$points;
														echo $points1;
													mysql_query("update college set points='$points1'");
										}
										
								}
						}
						mysql_close($con);
						?><br><br><br>
						<form action="pointstable.php" method="post">
<input class="buttom" name="submit" id="submit" tabindex="2" value="Points Table" type="submit">
</form>
<br><br>
<form action="admin.php" method="post">
<input class="buttom" name="submit" id="submit" tabindex="2" value="Admin Home" type="submit">
</form>
</body>
</html>