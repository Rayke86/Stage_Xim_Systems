<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Learning Laravel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body link="white" vlink="#A4A4A4">
	
	<header></header>
	
	<div id="menu">
		<li> {{ link_to("/", "HOME") }}</li><br>
		<li> {{ link_to("about", "ABOUT") }}</li><br>
		<li> {{ link_to("cons", "CONS") }}</li><br>
		<li> {{ link_to("contact", "CONTACT") }}</li><br>
	</div>
		
		<div id="content">
			<h1>CONTACT</h1>
		<br>
		<br>
		<?php
			function spamcheck($field) 
			{
  				// Sanitize e-mail address
  				$field=filter_var($field, FILTER_SANITIZE_EMAIL);
  				// Validate e-mail address
  				if(filter_var($field, FILTER_VALIDATE_EMAIL)) 
  				{
    				return TRUE;
  				} else 
  				{
    				return FALSE;
  				}
			}
		?>

		<?php
			// display form if user has not clicked submit
			if (!isset($_POST["submit"])) 
			{
  		?>
  				<div id="form">
  					<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  						<p><label class="field" for="From">FROM:</label><input type="text" name="Name" class="textbox-300"/></p><br>
  						<p><label class="field" for="Subject">SUBJECT:</label><input type="text" name="Subject" class="textbox-300"/></p><br>
  						<p><label class="field" for="Message">MESSAGE:</label><textarea rows="4" cols="60" name="Message" >Enter text here...</textarea>
  						</p>
  						<!--<input type="submit" name="submit" value="Submit">-->
  					</form>
  				</div>
  		<?php
			} else 
			{  	// the user has submitted the form
  				// Check if the "from" input field is filled out
  				if (isset($_POST["from"])) 
  				{
    				// Check if "from" email address is valid
    				$mailcheck = spamcheck($_POST["from"]);
    				if ($mailcheck==FALSE) 
    				{
      					echo "Invalid input";
    				} else 
    				{
      					$from = $_POST["from"]; // sender
      					$subject = $_POST["subject"];
      					$message = $_POST["message"];
      					// message lines should not exceed 70 characters (PHP rule), so wrap it
      					$message = wordwrap($message, 70);
      					// send mail
      					mail("helghastcosplay@gmail.com",$subject,$message,"From: $from\n");
      					echo "Thank you for sending us feedback";
    				}
  				}
			}
		?>		
		
		</div>
		
		
	<footer>
		Raymond Rohder	
	</footer>
	
</body>
</html>