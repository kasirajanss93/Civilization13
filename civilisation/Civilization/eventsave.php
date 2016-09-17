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
 if(mysql_query("UPDATE $_POST[event] SET name='$_POST[name]', year='$_POST[year]', college='$_POST[college]', contact='$_POST[contact]', paid='$_POST[paid]', prelims='$_POST[prelims]', round2='$_POST[round2]', finals='$_POST[finals]', winner='$_POST[winner]', runner='$_POST[runner]'  WHERE cid='$_POST[cid]'"))
 {
 echo "Sucessfully saved";
 }
  mysql_close($con);
  ?>
  <br />
  <br />
  <form action="events.php" method="post">
<input class="buttom" name="submit" id="submit" tabindex="2" value="Back to Edit Events" type="submit">
</form><br><br>
  </div>
  </div>
  </body>
  </html>
