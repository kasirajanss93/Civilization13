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
				<h1><span>Civilisation '13</span>Registration</h1>
            </header>       
      <div  class="form">
<form method="post" action="register.php" id="contactform">
<b>Civilisation Id</b><br><br><input type="textbox" name="cid" placeholder="cid" id="name" required=""><br>
<b>Name</b><br><br><input type="textbox" name="name" placeholder="Name" required=""><br>
<b>Year</b><br><br>
<input type="radio" name="year" value="I">I<br>
<input type="radio" name="year" value="II">II<br>
<input type="radio" name="year" value="III">III<br>
<input type="radio" name="year" value="IV">IV<br>
<b>College</b><br>
<select name="college" class="select-style" style="width: 400px;">

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
  $sql="select * from college";
  $result = mysql_query($sql,$con);
while($row = mysql_fetch_array($result))
  {
		echo "<option value='".$row['name']."'>".$row['name']."</option>";
  }

mysql_close($con);
  ?>
</select><br><br>
<b>Contact</b><br><br>
<input type="textbox" name="contact" placeholder="Contact Number"><br>
<b>Events:</b>(<i>Paid</i> 
<select name="eventp">
<option value="no">No</option>
<option value="yes">Yes</option>
</select>
)
<br>
<input type="checkbox" name="events[]"  value="Builtrix"> Builtrix</br>
<input type="checkbox" name="events[]"  value="Suspension Bridge"> Suspension Bridge</br>
<input type="checkbox" name="events[]" value="Archibuildo"> Archibuildo</br>
<input type="checkbox" name="events[]" value="Connect 'em"> Connect 'em</br>
<input type="checkbox" name="events[]" value="Confloat"> Confloat</br>
<input type="checkbox" name="events[]" value="Primametry"> Primametry</br>
<input type="checkbox" name="events[]" value="Detour"> Detour</br>
<input type="checkbox" name="events[]" value="Urbanista"> Urbanista</br>
<input type="checkbox" name="events[]" value="Robo Mason"> Robo Mason</br>
<input type="checkbox" name="events[]" value="Contraption"> Contraption</br>
<input type="checkbox" name="events[]" value="Energy Explorers"> Energy Explorers</br>
<input type="checkbox" name="events[]" value="Paper Presentation"> Paper Presentation</br>
<input type="checkbox" name="events[]" value="Tech Quiz"> Tech Quiz</br>
<input type="checkbox" name="events[]" value="General Quiz"> General Quiz</br>
<input type="checkbox" name="events[]" value="Defacto"> Defacto</br>
<input type="checkbox" name="events[]" value="Reason It"> Reason It</br>
<input type="checkbox" name="events[]" value="Project Display"> Project Display</br>
<input type="checkbox" name="events[]" value="Walk In"> Walk In</br>
<input type="checkbox" name="events[]" value="Constructangram"> Constructangram</br>
<input type="checkbox" name="events[]" value="Think Smart"> Think Smart</br>
<b>Special Events:</b>(<i>Paid</i>
<select name="specialp">
<option value="no">No</option>
<option value="yes">Yes</option>
</select>
)
<br>
<input type="checkbox" name="events[]" value="Model Making"> Model Making</br>
<input type="checkbox" name="events[]" value="Poster Designing"> Poster Designing</br>
<b>Workshop:</b>(<i>Paid</i><select name="workshopp">
<option value="no">No</option>
<option value="yes">Yes</option>
</select>
)<br>
<input type="checkbox" name="workshops[]" value="Pre-stressed Concrete"> Pre-stressed Concrete<br><br>

<input class="buttom" name="submit" id="submit" tabindex="2" value="Register" type="submit"> 
</form>
