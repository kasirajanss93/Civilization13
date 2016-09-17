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
  $uname=$_POST['uname'];
  $pass=$_POST['pass'];
   if($uname=="events" && $pass=="events")
   header("Location:eventshome.php");
   if($uname=="hospi" && $pass=="hospi")
   header("Location:registration.php");
   if($uname=="admin" && $pass=="civilcore")
   header("Location:admin.php");
mysql_close($con);
?>
