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
			<h1>WELCOME</h1>
			
			<p>
				TO THE WEBSITE OF TEAM HC. <BR>
					HERE YOU CAN FIND INFORMATION ABOUT US, CONTACT US <BR>
						AND OFFCOURSE LOOK AT SOME PRICTURES.<BR>
							<BR>HAVE FUN! 
			</p>
		</div>
		
	<footer>
		Raymond Rohder	
	</footer>
	
</body>
</html>