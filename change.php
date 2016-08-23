
<!DOCTYPE html>

<html lang="en"> 

<head>
<meta charset="utf-8" /> 
<meta name="description" content="Assignment 3" />
<meta name="keywords" content="PHP, MySql" /> 
<title>Change</title> 
<link href= "styles/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
	/* change.php
	   Collection of user-defined logical processes
	   Author: Mohammad Khan
	   Date: 25 October 2014
	*/

	include_once ("menu.php");
?>


<form method="post" action="update.php" >

 <p><label for="update">If you wish to update your EOI please click on update:</label>
</p>
	 <input type="submit" value="Update" id="update" name="update" />
</form>

<p></p>
<p></p>

<form method="post" action="remove.php">	
	<p><label for="remove">If you wish to remove your EOI please click on Remove:</label>
</p>
	<input id="remove" type="submit" value="Remove" name="remove" />
</form>



</body>

</html>