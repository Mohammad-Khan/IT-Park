
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" /> 
 <meta name="description" content="Internet Technologies" /> 
 <meta name="keywords" content="Assignment - 1" /> 
 <meta name="author" content="Mohammad N Khan" /> 
 <link href= "styles/style.css" rel="stylesheet" type="text/css" />
 <title>Remove</title>
</head>

<body>

<?php

	
	/* remove.php
	   Collection of user-defined logical processes
	   Author: Mohammad Khan
	   Date: 25 October 2014
	*/
	include_once ("menu.php");
?>

<form id="eform" method="post" action="remove.php">

	<p><label for="eoinum">Please Enter Your EOI Number:</label>
		<input type="text" name="eoinum" id="eoinum" size="20" required="required" />
	</p>
	
	<p><label for="lastname">Your Last Name:</label>
		<input type="text" name="lastname" id="lastname" pattern="[a-zA-Z]+" maxlength="25" placeholder = "Only Alphabets, Maximum 25 characters" required="required" />
	</p>
	
	<p><input class= "button" type="submit" value="Remove" />
	<input class= "button" type="reset" value="Reset" />
    </p>
	
</form>

<?php


	if (isset($_POST["eoinum"])){
	require_once ("settings.php"); //connection info 
	
	
	$conn = @mysqli_connect($host, $user, $pwd,	 $sql_db);
	 
	 if (!$conn) {
	 echo "<p class=\"feedback\">Connection with database can not be established, check username and password</p>";
	 } else{
	 
	$lastname = $_POST ["lastname"];
	$eoinum = $_POST["eoinum"];
	
	 
	$sql_table = "eoi";
	 

	$query = "delete from $sql_table where eoi_number = '$eoinum' && lastname = '$lastname'";
	$result = mysqli_query($conn, $query); 
	 
	 if ($result) {
	 echo "<p class=\"feedback\">Your EOI number and Lastname has no match or does not exist in table</p>";
	 mysqli_close($conn);	
	 } else {
	 
	 echo "<p class=\"feedback\">Your expression of interest has been removed!</p>";
	 }
	 mysqli_close($conn);	
				}
	} else {
	header ("location : remove.php");
	}

?>

</body>

</html>