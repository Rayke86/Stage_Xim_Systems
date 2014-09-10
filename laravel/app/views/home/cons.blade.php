<!doctype html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Learning Laravel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body vlink="#A4A4A4">
	
	<header>
		
	</header>
	
	<div id="menu">
		<li> {{ link_to("/", "HOME") }}</li><br>
		<li> {{ link_to("about", "ABOUT") }}</li><br>
		<li> {{ link_to("cons", "CONS") }}</li><br>
		<li> {{ link_to("contact", "CONTACT") }}</li><br>
	</div>
		
		<div id="content">
			<h1>PHOTO'S</h1>
			<?php

	$con = mysqli_connect("localhost","root","682130","teamhc");
		
	if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else {
		//echo "database connected";
	}
	echo "<br>";

	$result = mysqli_query($con,"SELECT * FROM Photos");
	
	//if (!$result) {
    //printf("Error: %s\n", mysqli_error($con));
    //exit();}
	
	while($row = mysqli_fetch_array($result)) 
	{
		$url= $row["URL"];
		$name= $row["Name"];
		
		?>
			<table id= "contable">
			<tr>
			<td>
		<?php
		if($name != Null)
		{
  				$nameSub = substr($name,0); 
				//$finalname = substr($nameSub,0,(strlen($nameSub)-4));
				echo strtoupper ($nameSub);
		}
  		?>
  			</td>
  			<td>
  				 
  			<script type="text/javascript"> 

			function openpopup(popurl)
			{
				var winpops=window.open(popurl,"","width=1200,height=800,toolbar,location,directories,status=no,scrollbars,menubar,resizable")
			}
			</script>
			
			<!--<a href="javascript:openpopup('photo?value= <?php echo $url ?>')"><img src="<?php echo $url; ?>" height="100" ></a><br>--></br>
			<a href="/photos?value=<?php echo $url ?>"><img src="<?php echo $url; ?>" height="100"></a><br>
			<br>
			<br>
 				
  			 <!--<a href="photo" onclick="window.open('photo?value= <?php echo $url ?>','photo',
				'width=1200,height=800,status=center ,scrollbars=no,toolbar=no,location=no'); return false"><img src="<?php echo $url; ?>" height="100" ></a>-->
  			</td>
  			</tr>
  			</table>
  			<?php
	}
	 
?>			
		</div>
		
	<footer>
		Raymond Rohder
	</footer>
	
</body>
</html>