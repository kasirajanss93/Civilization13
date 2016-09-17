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
				<h1><span>Civilisation '13</span>Edit Participant</h1>
            </header>       
      <div  class="form">
	  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
	
<b>CID</b><br><br><input type="textbox" name="cid" placeholder="cid" id="name" required=""><br></b>
<?php

		$con = mysql_connect("civilisation13.db.10386456.hostedresource.com","civilisation13","Civildb20!#");
		$con1 = mysql_connect("civilisationdms.db.10386456.hostedresource.com","civilisationdms","Civil13!");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


   if (mysql_query("CREATE DATABASE civilisation13",$con))
  {
	//echo "Database created";
  }
  
  mysql_select_db("civilisation13",$con);
   $cid=$_POST['cid'];
  //echo "<b><center>".$cid."</center></b><br>";
    if(isset($_POST['submit'])) 
{ 
  $result = mysql_query("SELECT * FROM user where cid='$_POST[cid]'",$con);

  while($row = mysql_fetch_array($result))
  {
		$name=$row['user'];
		$cid=$row['cid'];
		$phno=$row['phno'];
		$year=$row['year'];
		$p1="yes";
		$p2="no";
		$p3="no";
		
		 mysql_select_db("civilisationdms",$con1);
		 if(mysql_query("insert into reg values('$cid','$name','$year','null','$phno','no','no','no','no','no','no','no','no','no','no','no','no','no','no','no','no','no','no','no','no','no','no','no','$p1','$p2','$p3')",$con1))
		{ 
			echo $cid."Registered Successfully";
		}
		else
		{
		echo "Registeration Failed";
		}
  }
	}				mysql_close($con1);
					mysql_close($con);
						?>
<input class="buttom" name="submit" id="submit" tabindex="2" value="Save" type="submit"> 
</form>
</div>
</div>
</body>
</html>