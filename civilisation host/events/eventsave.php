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
 if(mysql_query("UPDATE builtrix SET name='$_POST[name]', year='$_POST[year]', college='$_POST[college]', prelims='$_POST[prelims]', round2='$_POST[round2]', finals='$_POST[finals]', winner='$_POST[winner]', runner='$_POST[runner]'  WHERE cid='$_POST[cid]'"))
 {
 echo "Sucessfully saved";
 }
  mysql_close($con);
  ?>
