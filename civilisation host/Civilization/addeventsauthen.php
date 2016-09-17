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
	mysql_query("update reg set '$_POST[event]'='yes' where cid='$_POST[cid]'",$con);
	$res=mysql_query("select * from reg where cid='$_POST[cid]'",$con);
if($row = mysql_fetch_array($res))
  {
  $cid=$_POST['cid'];
		$name=$row['name'];
		$year=$row['year'];
		$college=$row['college'];
		$contact=$row['contact'];
		$sql="insert into $_POST[event] values('$cid','$name','$year','$college','$contact','yes','yes','no','no','no','no')";
  	if(mysql_query($sql,$con))
  	{
		echo "Registered Successfully<br>";
  	}
	else
		echo "Registration Unsuccessful<br>";
  }
  else
  	echo "Cid Not Registered<br>";
  
  /*$sql="insert into $_POST[ename] values('$_POST[cid]','$name','$year','$college','$contact','$paid','yes','no','no','no','no')";
  if(mysql_query($sql,$con))
  {
	echo "Registered Successfully";
  }*/

mysql_close($con);
  ?>
  <br /><br />
  <form action="addevents.php" method="post">
<input class="buttom" name="submit" id="submit" tabindex="2" value="Back to Add Events" type="submit">
</form><br><br>
