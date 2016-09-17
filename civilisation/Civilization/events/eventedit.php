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
  $result = mysql_query("SELECT * FROM builtrix where cid='$_POST[cid]'");?>
<form method="post" action="savebuiltrix.php">
					<?php
						while($row = mysql_fetch_array($result))
						{		
								echo "<input type='textbox' value='$row[cid]' name='cid'><br>";
								echo "<input type='textbox' value='$row[name]' name='name'><br>";
								echo "<input type='textbox' value='$row[year]' name='year'><br>";
								echo "<input type='textbox' value='$row[college]' name='college'><br>";
								echo "<input type='textbox' value='$row[prelims]' name='prelims'><br>";
								echo "<input type='textbox' value='$row[round2]' name='round2'><br>";
								echo "<input type='textbox' value='$row[finals]' name='finals'><br>";
								echo "<input type='textbox' value='$row[winner]' name='winner'><br>";
								echo "<input type='textbox' value='$row[runner]' name='runner'><br>";
						}
						mysql_close($con);
						?>
						<input type="submit" value="save">
						</form>