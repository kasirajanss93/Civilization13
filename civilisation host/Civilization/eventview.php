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
      <div  class="form"  style="width:700px;">
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

   
?>

  <table border="3" >
						<tr>
						<th><b>cid</b></th>
						<th><b>name</b></th>
						<th><b>year</b></th>
						<th><b>college</b></th>
						<th><b>contact</b></th>
						<th><b>Paid</b></th>
						<th><b>Prelims</b></th>
						<th><b>Round 2</b></th>
						<th><b>Finals</b></th>
						<th><b>Winner</b></th>
						<th><b>Runner</b></th>
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
								echo "<td>".$row['contact']; 
								echo "</td>";
								echo "<td>".$row['paid']; 
								echo "</td>";
								echo "<td>".$row['prelims']; 
								echo "</td>";
								echo "<td>".$row['round2']; 
								echo "</td>";
								echo "<td>".$row['finals']; 
								echo "</td>";
								echo "<td>".$row['winner']; 
								echo "</td>";
								echo "<td>".$row['runner']; 
								echo "</td>";
								echo "</tr>";
						}
						mysql_close($con);
						?>
<form method="post" action="eventedit.php">

<?php  echo "<input type='texbox' name='event' value='$_POST[event]' style='visibility:hidden;' >";?>
<input type="textbox" name="cid" placeholder="Enter cid" required="">&nbsp;&nbsp;
<input class="buttom" name="submit" id="submit" tabindex="2" value="Edit" type="submit"> 
</form>
<!--<?php  echo "<input type='texbox' name='event' value='$_POST[event]' style='visibility:hidden;' >";?>-->
</body>
</html>