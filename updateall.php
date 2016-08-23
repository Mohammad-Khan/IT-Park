
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" /> 
 <meta name="description" content="Internet Technologies" /> 
 <meta name="keywords" content="Assignment - 1" /> 
 <meta name="author" content="Mohammad N Khan" /> 
 <link href= "styles/style.css" rel="stylesheet" type="text/css" />
 <title>Re-Enter The Data</title>
</head>

<body>

<?php

	
	/* updateall.php
	   Collection of user-defined logical processes
	   Author: Mohammad Khan
	   Date: 25 October 2014
	*/
	include_once ("menu.php");

	require_once ("settings.php"); //connection info 
	
	
	$conn = @mysqli_connect($host, $user, $pwd,	 $sql_db);
	 
	 if (!$conn) {
	 echo "<p class=\"feedback\">Connection with database can not be established, check username and password</p>";
	 } else{
	 
	$street = $_POST["streetaddress"];
	$suburb = $_POST["suburbtown"];
	$state = $_POST["state"];
	$postcode = $_POST["postcode"];
	$add = $street.", ".$suburb. ", ".$state.", ".$postcode;
	
	$jobrefnum = $_POST ["jobreference"];
	$firstname = $_POST ["firstname"];
	$lastname = $_POST ["lastname"];
	$email = $_POST ["email"];
	$phone = $_POST ["phonenumber"];
	$otherskills = $_POST ["otherskills"];
	$skillset = $_POST ["Skills"];
	$eoinum = $_POST["eoinum"];
	
	if (isset ($skillset)){
			
			$skills = implode (", ", $skillset);
	
	}
	
	 
	$sql_table = "eoi";
	 

	$query = "update $sql_table set jobrefnum = '$jobrefnum', firstname = '$firstname', lastname = '$lastname', address = '$add', email = '$email', phone = '$phone', skills = '$skills', otherskills = '$otherskills' where eoi_number = '$eoinum' && lastname = '$lastname'";
	 
	$result = mysqli_query($conn, $query); 
	 
	 if (!$result) {
	 echo "<p class=\"feedback\">Your EOI number or Lastname has no match</p>";
	 mysqli_close($conn);	
	 exit();
	 } else {
	 
	 echo "<p class=\"feedback\">Your expression of interest has been updated, Thank you!</p>";
	 }
	 mysqli_close($conn);	
				} 	

?>

</body>

</html>