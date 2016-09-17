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
   $username=$_POST['event'];
  echo "<b><center>".$username."</center></b><br>";
  $result = mysql_query("SELECT * FROM $_POST[event] where cid='$_POST[cid]'");
   ?>
<form method="post" action="eventsave.php">
					<?php
					  echo "<input style='visibility:hidden;' type='texbox' name='event' value='$_POST[event]' style='visibility:hidden;'><br>";
						while($row = mysql_fetch_array($result))
						if($result)
						{		
								echo "<b>Cid<br><br><input type='textbox' value='$row[cid]' name='cid'><br>";
								echo "Name<br><br><input type='textbox' value='$row[name]' name='name'><br>";?>
								Year
								<select name="year" style="width: 50px;">
								<option value="I" <?php if ($row['year']=="I") echo 'selected="selected"';?>>I</option><br>
								<option value="II" <?php if ($row['year']=="II") echo 'selected="selected"';?>>II</option><br>
								<option value="III" <?php if ($row['year']=="III") echo 'selected="selected"';?>>III</option><br>
								<option value="IV" <?php if ($row['year']=="IV") echo 'selected="selected"';?>>IV</option><br>
								</select><br /><br />
								
								
								<!--College<br /><br />
								<select name="college" class="select-style" style="width: 400px;">
								
								  <?php
								  $res = mysql_query("select * from college",$con);
								while($roww = mysql_fetch_array($res))
								  {
								  		if($roww['name']==$row['college'])
										echo "<option value=".$roww['name']." selected='selected'>".$roww['name']."</option>";
										else
										echo "<option value=".$roww['name'].">".$roww['name']."</option>";
								  }
								  ?>
								</select><br><br />-->
								
								
								<?php echo "Contact<br><br><input type='textbox' value='$row[contact]' name='contact'><br>";?>
								Paid&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<select name="paid">
								<option value="yes" <?php if ($row['paid']=="yes") echo 'selected="selected"';?>>Yes</option><br>
								<option value="no" <?php if ($row['paid']=="no") echo 'selected="selected"';?>>No</option><br>
								</select>
								<br /><br />
								
								Prelims&nbsp;
								<select name="prelims">
								<option value="yes" <?php if ($row['prelims']=="yes") echo 'selected="selected"';?>>Yes</option><br>
								<option value="no" <?php if ($row['prelims']=="no") echo 'selected="selected"';?>>No</option><br>
								</select>
								<br /><br />
								
								Round2:
								<select name="round2">
								<option value="yes" <?php if ($row['round2']=="yes") echo 'selected="selected"';?>>Yes</option><br>
								<option value="no" <?php if ($row['round2']=="no") echo 'selected="selected"';?>>No</option><br>
								</select>
								<br /><br />
								
								Finals:&nbsp;&nbsp;&nbsp;&nbsp;
								<select name="finals">
								<option value="yes" <?php if ($row['finals']=="yes") echo 'selected="selected"';?>>Yes</option><br>
								<option value="no" <?php if ($row['finals']=="no") echo 'selected="selected"';?>>No</option><br>
								</select>
								<br /><br />
								
								Winner:&nbsp;
								<select name="winner">
								<option value="yes" <?php if ($row['winner']=="yes") echo 'selected="selected"';?>>Yes</option><br>
								<option value="no" <?php if ($row['winner']=="no") echo 'selected="selected"';?>>No</option><br>
								</select>
								<br /><br />
								
								Runner:&nbsp;
								<select name="runner">
								<option value="yes" <?php if ($row['runner']=="yes") echo 'selected="selected"';?>>Yes</option><br>
								<option value="no" <?php if ($row['runner']=="no") echo 'selected="selected"';?>>No</option><br>
								</select>
								<br /><br /><br />
								<?php
						}
						mysql_close($con);
						?></b>
<input class="buttom" name="submit" id="submit" tabindex="2" value="Save" type="submit"> 
</form>
</div>
</div>
</body>
</html>