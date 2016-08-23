
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" /> 
 <meta name="description" content="Internet Technologies" /> 
 <meta name="keywords" content="Assignment - 1" /> 
 <meta name="author" content="Mohammad N Khan" /> 
 <link href= "styles/style.css" rel="stylesheet" type="text/css" />
 <title>Manage</title>
</head>

<body>

<?php

	/* manage.php
   Collection of user-defined logical processes
   Author: Mohammad Khan
   Date: 25 October 2014
	*/

	include_once ("menu.php");

	if(isset($_POST["manage"])){
	
	
	?>

<form action="eoi_display.php" method="post">

	<p> To List all Expression of interests press <input class= "button" type="submit" value="List All" name="list" /></p>
 	
</form>

<form action="eoi_display.php" method="post">

	<p> To List all EOIs for Network Engineer Position press <input class= "button" type="submit" value="Network Engineer" name="network" /></p>
 	
</form>

<form action="eoi_display.php" method="post">

	<p> To List all EOIs for Web Developer Position press <input class= "button" type="submit" value="Web Developer" name="web" /></p>
 	
</form>

<form action="eoi_display.php" method="post">
	<fieldset>
	<p> To List all EOIs by Name: </p>
	<p><label for="firstname">Please Enter First Name:</label>
		<input type="text" name="firstname" id="firstname" size="20" required="required" /> </p>
	<p><label for="lastname">Please Enter Last Name:</label>
		<input type="text" name="lastname" id="lastname" size="20" required="required" /> <br/>
	</p>
	
	<input class= "button" type="submit" value="List By Name" name="lbyname" />
 	</fieldset>
</form>

<form action="eoi_display.php" method="post">
	<fieldset>
	<p> To delete all from one vacancy type the Job Reference Number and press Delete: <br/>
	<label for="jobrefnum">Please Enter Job Reference Number</label></p>
		<p><input type="text" name="jobrefnum" id="jobrefnum" size="20" required="required" />
	
	
	<input class= "button" type="submit" value="Delete" name="delete" /></p>
 	</fieldset>
</form>
	<?php
	}
	else {
	header("location: log_in.php");
	
	} 
?>

</body>

</html>