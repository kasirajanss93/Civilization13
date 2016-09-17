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
				<h1><span>Civilisation '13</span>Points Table</h1>
            </header>       
      <div  class="form"  style="width:750px;">
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
$result = mysql_query("SELECT * FROM college order by points desc");
?>
<div>
<table border="3" >
						<tr>
						<th style="padding-right:70px;"><b>College Name<b></th>
						<th style="padding-right:50px;"><b>Points<b></th>
						
						</tr>
<?php
while($row=mysql_fetch_array($result))
{
								echo "<tr>";
								echo "<td style='padding-right:70px;'>".$row['name']; 
								echo "</td>";
								echo "<td>".$row['points']; 
								echo "</td>";
}
mysql_close($con);
?>
</table>
</div>
</div>
</div>

</body>
</html>