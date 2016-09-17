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
  $result = mysql_query("SELECT * FROM $_POST[event]");?>
  
  <table border="3" style="margin-left:350px">
						<tr>
						<th>cid</th>
						<th>name</th>
						<th>year</th>
						<th>college</th>
						
						</tr>
					<?php
						while($row = mysql_fetch_array($result))
						{		
								echo "<tr>";
								echo "<td>".$row['cid']; 
								echo "</td>";
								echo "<td>".$row['name']; 
								echo "</td>";
								echo "<td>".$row['year']; 
								echo "</td>";
								echo "<td>".$row['college']; 
								echo "</td>";
								echo "</tr>";
						}
						mysql_close($con);
						?>
<form method="post" action="workshopedit.php">
Enter cid<input type="textbox" name="cid">
<input type="submit" value="edit">
</body>
</html>