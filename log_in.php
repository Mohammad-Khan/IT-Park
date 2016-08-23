
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" /> 
 <meta name="description" content="Internet Technologies" /> 
 <meta name="keywords" content="Assignment - 1" /> 
 <meta name="author" content="Mohammad N Khan" /> 
 <link href= "styles/style.css" rel="stylesheet" type="text/css" />
 <title>Log In</title>
</head>

<body>

<?php

	/* log_in.php
	   Collection of user-defined logical processes
	   Author: Mohammad Khan
	   Date: 25 October 2014
	*/


	include_once ("menu.php");
?>

<form id="eform" method="post" action="log_in.php">

	<p><label for="username">User Name:</label>
		<input type="text" name="username" id="username" size="20" required="required" />
	</p>
	
	<p><label for="password">Passsword:</label>
		<input type="password" name="password" id="password"  required="required" />
	</p>
	
	<p><input class= "button" type="submit" value="Log In" name="login"/>
	<input class= "button" type="reset" value="Reset" />
    </p>
	
</form>


<?php	
	
	if (isset($_POST["login"])) {
	
	
	$username = $_POST["username"];
	$pass = $_POST["password"];
	
	
	if ($username == "mohammad" AND $pass == "khanmohammad") {
	
	?>
	
	<form method="post" action="manage.php">

	<p><label class="feedback" for="manage">You are logged in. Press </label>
		<input id="manage" class= "button" type="submit" value="Manage" name="manage"/>	
    </p>
	
</form>
	
	<?php
	
	}

	else  {
		echo "<p class=\"feedback\">User name or Password is incorrect</p>";
	}
	
	}
	
?>

</body>

</html>