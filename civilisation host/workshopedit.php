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
  $result = mysql_query("SELECT * FROM builtrix where cid='$_POST[cid]'");?>
<form method="post" action="eventsave.php">
					<?php
						while($row = mysql_fetch_array($result))
						{		
								echo "<input type='textbox' value='$row[cid]' name='cid'><br>";
								echo "<input type='textbox' value='$row[name]' name='name'><br>";
								echo "<input type='textbox' value='$row[year]' name='year'><br>";
								echo "<input type='textbox' value='$row[college]' name='college'><br>";
							
						}
						mysql_close($con);
						?>
						<input type="submit" value="save">
						</form>