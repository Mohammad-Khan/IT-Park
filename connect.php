
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" /> 
 <meta name="description" content="Internet Technologies" /> 
 <meta name="keywords" content="Assignment - 1" /> 
 <meta name="author" content="Mohammad N Khan" /> 
 <link href= "styles/style.css" rel="stylesheet" type="text/css" />
 <title>Process</title>
</head>

<body>

<?php

	/* connect.php
	   Collection of user-defined logical processes
	   Author: Mohammad Khan
	   Date: 25 October 2014
	*/

	include_once ("menu.php");
	

if (isset ($_POST["firstname"])) {

	require_once ("settings.php"); //connection info 
	
	
	$conn = @mysqli_connect($host, $user, $pwd,	 $sql_db);
	 
	 if (!$conn) {
	 echo "<p>Connection with database can not be established, check username and password</p>";
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
	$rand= rand(1,1000000000);
	$skillset = $_POST ["Skills"];
	
		
	if (isset ($skillset)){
			
			$skills = implode (", ", $skillset);
	
	}
	
	
	if ($add == "") {
	$error = "You have to provide address";
	}
	
	if ($jobrefnum == "") {
	$error =  $error. ", " ."Provide job reference number";
	}
	
	if ($firstname == "") {
	$error =  $error. ", " ."Provide job your first name";
	}
	
	if ($lastname == "") {
	$error =  $error. ", " ."Provide job your last name";
	}
	
	if ($email == "") {
	$error =  $error. ", " ."Provide email";
	}
	
	if ($phone == "") {
	$error =  $error. ", " ."Provide Phone number";
	}
	
	if ($skills == "") {
	$error =  $error. ", " ."Select at least one skill";
	}
	
	 
	$sql_table = "eoi";
	 
	 
	$query = "insert into $sql_table (eoi_number, jobrefnum, firstname, lastname, address, email, phone, skills, otherskills) 
				values ('$rand', '$jobrefnum', '$firstname', '$lastname', '$add', '$email', '$phone','$skills', '$otherskills' )";
	 
	 $result = mysqli_query($conn, $query); 
	 
	
	 
	 if (!$result){
	 
	 
	$query = "CREATE TABLE eoi (eoi_number int not null primary key, jobrefnum varchar(15) not null, firstname varchar(15) not null, lastname varchar(15) not null, address varchar(50) not null, email varchar(20) not null, phone varchar(15) not null, skills varchar(100), otherskills varchar(60))";
				
			$result= mysqli_query($conn, $query); 
				
	$query = "insert into $sql_table (eoi_number, jobrefnum, firstname, lastname, address, email, phone, skills, otherskills) 
				values ('$rand', '$jobrefnum', '$firstname', '$lastname', '$add', '$email', '$phone','$skills', '$otherskills' )";
				
				$result= mysqli_query($conn, $query);
				echo "<p class=\"feedback\">Your expression of interest has been registered, Thank you! <br/> Your EOI Number is:", $rand, "</p>";
				
				} else{
				echo "<p class=\"feedback\">Your expression of interest has been registered, Thank you! <br/> Your EOI Number is:", $rand, "</p>";
					
					mysqli_close($conn);
				}
				
			
	 
	 }
	 
	 
	 
	 }
	 else {	 
	 header ("location: enquire.php");
	 }

?>

</body>

</html>
