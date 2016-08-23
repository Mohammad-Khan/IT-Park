<!DOCTYPE html>

<html lang="en"> 

<head>
<meta charset="utf-8" /> 
<meta name="description" content="Assignment 3" />
<meta name="keywords" content="PHP, MySql" /> 
<title>Retrieving records to HTML</title> 
 <link href= "styles/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<?php 
	
	/* eoi_display.php
	   Collection of user-defined logical processes
	   Author: Mohammad Khan
	   Date: 25 October 2014
	*/

	
	 include_once ("menu.php");
	 require_once ("settings.php"); //connection info 
	 
	 $conn = @mysqli_connect($host, 
	 $user,
	 $pwd,
	 $sql_db
	 );
	// Checks if connection is successful 
	 if (!$conn) { 
	 // Displays an error message
	 echo "<p>Database connection failure</p>"; // not in production script 
	 } else { 
	 // Upon successful connection 
	 
	 $sql_table="eoi"; 
	 
	 
	 if (isset($_POST["list"])) {
	 // Set up the SQL command to add the data into the table 
	 $query = "select * FROM eoi"; 
	 }
	 
	 if (isset($_POST["network"])) {
	 // Set up the SQL command to add the data into the table 
	 $job = "NE-395";
	 $query = "select * FROM eoi where jobrefnum = '$job'"; 
	 }
	 
	  if (isset($_POST["web"])) {
	 // Set up the SQL command to add the data into the table 
	 $job = "Web899";
	 $query = "select * FROM eoi where jobrefnum = '$job'"; 
	 }
	 
	 if (isset($_POST["lbyname"])) {
	 // Set up the SQL command to add the data into the table 
	 $fname = $_POST["firstname"];
	 $lname = $_POST["lastname"];
	 
	 $query = "select * FROM eoi where firstname = '$fname' && lastname = '$lname'"; 
	 }
	 
	 if (isset($_POST["delete"])) {
	 // Set up the SQL command to add the data into the table 
	 $job = $_POST["jobrefnum"];
	 
	 $query = "delete FROM eoi where jobrefnum = '$job'"; 
	 $result = mysqli_query($conn, $query); 
	 echo "<p class=\"feedback\">All ",$job, " has been removed </p>";
	 exit();
	 
	 }
	 
	 // execute the query and store result into the result pointer 
	 $result = mysqli_query($conn, $query); 
	 
	 // checks if the execution was successful 
	 if(!$result) { 
	 echo "<p>Something is wrong with ", $query, "</p>";
	 } else {
	 // Display the retrieved records 
	 echo "<table border=\"1\">"; 
	 echo "<tr>" 
	 ."<th scope=\"col\">EOI Number</th>" 
	 ."<th scope=\"col\">Job Reference</th>" 
	 ."<th scope=\"col\">First Name</th>" 
	 ."<th scope=\"col\">Last Name</th>"
	 ."<th scope=\"col\">Address</th>"
	 ."<th scope=\"col\">E-mail</th>"
	 ."<th scope=\"col\">Phone Number</th>"
	 ."<th scope=\"col\">Skills</th>"
	 ."<th scope=\"col\">Other Skills</th>"
	 ."</tr>";
	 // retrieve current record pointed by the result pointer 
	 
	 while ($row = mysqli_fetch_assoc($result)){ 
	 echo "<tr>"; 
	 echo "<td>",$row["eoi_number"],"</td>"; 
	 echo "<td>",$row["jobrefnum"],"</td>"; 
	 echo "<td>",$row["firstname"],"</td>"; 
	 echo "<td>",$row["lastname"],"</td>";
	 echo "<td>",$row["address"],"</td>";
	 echo "<td>",$row["email"],"</td>";
	 echo "<td>",$row["phone"],"</td>";
	 echo "<td>",$row["skills"],"</td>";
	 echo "<td>",$row["otherskills"],"</td>";
	 echo "</tr>"; 
	 }
	 echo "</table>";
	 // Frees up the memory, after using the result pointer 
	 mysqli_free_result($result); 
	 } // if successful query operation 
	 
	 // close the database connection 
	 mysqli_close($conn); 
	 } // if successful database connection
	?>
</body>
</html>