<!DOCTYPE html> 
<html lang="en">

<head>
 <meta charset="utf-8" /> 
 <meta name="description" content="Tera Tech" /> 
 <meta name="keywords" content="About Mohammad Khan" /> 
 <meta name="author" content="Mohammad N Khan" /> 
 <link href= "styles/style.css" rel="stylesheet" type="text/css" />
 <title>Job Enquiry - Tera Tech</title>
 <script src="job.js"></script>
 <script type='text/javascript' src='job.js'></script>

</head>

<body>


<?php

	/* enquire.php
   Collection of user-defined logical processes
   Author: Mohammad Khan
   Date: 25 October 2014
	*/
	include_once ("menu.php");
?>


<section id="enquiry">

<form id="eform" action="connect.php" method="post">
 
	<p><label for="jobname">Enter Job Title:</label>
		<input type="text" name="jobtitle" id="jobname" size="20" required="required" readonly="readonly" />
	</p>

	<p><label for="jobreference">Enter Job Reference Number:</label>
		<input type="text" name="jobreference" id="jobreference" size="20" required="required" readonly="readonly" />
	</p>
	

	<p><label for="firstname">Your First Name:</label>
		<input type="text" name="firstname" id="firstname" pattern="[a-zA-Z]+" maxlength="15" placeholder = "Only Alphabets, Maximum 15 characters" required="required" />
	</p>
	
	<p><label for="lastname">Your Last Name:</label>
		<input type="text" name="lastname" id="lastname" pattern="[a-zA-Z]+" maxlength="25" placeholder = "Only Alphabets, Maximum 25 characters" required="required" />
	</p>
	
	<p>
	<label>Your Birthday: 
	<input type="text" id="birthday" name="Birth Day" placeholder="dd/mm/yyyy" pattern="\d{1,2}/\d{1,2}/\d{4}" required="required" /></label>
	</p>
 
<fieldset> 
<legend>Your Gender:</legend>
<input type="radio" name="Gender" id="mgender" value="M" required="required" />
<label for="mgender">Male</label>
<input type="radio" name="Gender" id="fgender" value="F" required="required" />
<label for="fgender">Female</label>
 </fieldset>




<p><label for="streetadd">Street Address:</label>
	<input type="text" name="streetaddress" id="streetadd" placeholder = "Maximum 50 characters" maxlength="50" required="required" />
</p>

<p><label for="suburb">Suburb/Town:</label>
	<input type="text" name="suburbtown" id="suburb" placeholder = "Maximum 25 characters" maxlength="25" required="required" />
</p>

<p><label for="state">Select State:</label>

<select id="state" name="state">
 
  <option value="VIC" selected="selected">VIC</option>
  <option value="NSW">NSW</option>
  <option value="WA">WA</option>
  <option value="QLD">QLD</option>
  <option value="NT">NT</option>
  <option value="SA">SA</option>
  <option value="TAS">TAS</option>
  <option value="ACT">ACT</option>
</select>

</p>

<p><label for="postcode">Post Code:</label>
	<input type="text" name="postcode" id="postcode" placeholder = "Exactly 4 Digits" maxlength="4" pattern="\d{4}" required="required" />
</p>


 
 <p><label for="e-mail">E-mail Address:</label>
	<input type="email" name="email" id="e-mail" required="required" />
</p>

 <p><label for="phone">Phone Number:</label>
	<input type="tel" name="phonenumber" id="phone" pattern="\d{10}" size="10" required="required" />
</p>

<p>Your Skills:
<br/>
<label><input class="skills" type="checkbox" name="Skills[]" value="VB.NET" />
Visual Basic .NET</label>

<label><input class="skills" type="checkbox" name="Skills[]" value="HTML &#38; CSS" />
HTML &#38; CSS</label>

<label><input class="skills" type="checkbox" name="Skills[]" value="C#" />
C-Sharp</label>

<label><input class="skills" type="checkbox" name="Skills[]" value="Java Script (j-Query)" />
Java Script (j-Query)</label>

<label><input class="skills" type="checkbox" name="Skills[]" value="WANs" />
WANs</label>

<label><input class="skills" type="checkbox" name="Skills[]" value="Juniper" />
Juniper</label>

<label><input class="skills" type="checkbox" name="Skills[]" value="PowerShell or Bash" />
PowerShell or Bash</label>

<label><input class="skills" type="checkbox" name="Skills[]" value="Other Skills" />
Other Skills</label>

</p>



 <p><label for="otherskills">Other Skills, Please Specify:</label>
</p>
<textarea id="otherskills" name="otherskills">
</textarea>

<p> <label for="uploadme">Upload Your CV:
	<input type="file" id="uploadme" name="CV" /></label>
 </p>
 
 

<p><input class= "button" type="submit" value="Submit" />
	<input class= "button" type="reset" value="Reset" />
 </p>
 

	
</form>



<aside>
<h2>Advertisements:</h2>
	<img id="alogo" src="images/aside.jpg" alt="Swinburne University Logo"/>
</aside>


</section>



</body>
</html>