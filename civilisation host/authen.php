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
 // $sql="select * from login where name=$_POST[uname] and password=$_POST[pass]";
  $sql="select * from login where name='$uname' and password='$pass'";
  $res=mysql_query($sql,$con);
  while($row=mysql_fetch_array($res))
  {
   if($uname=="events" && $pass==$row['password'])
   header("Location:eventshome.php");
   if($uname=="hospi" && $pass==$row['password'])
   header("Location:registration.php");
   if($uname=="admin" && $pass==$row['password'])
   header("Location:admin.php");
   }
mysql_close($con);
?>
