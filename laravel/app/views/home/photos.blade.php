<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>Learning Laravel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body vlink="#A4A4A4">
	
	<div id="menu">
		<li> {{ link_to("cons", "BACK") }}</li><br>
	</div>
		
	<div id="imgcontainer">
		<?php if(isset($_GET["value"]))
		{
			(string)$value=$_GET["value"];			
			
			?>
				<img src= <?php echo $value ?> height="200"> <br> 
			<?php
		}
		?>				
	</div>
	<div id="content">
	
	<?php
	$con = mysqli_connect("localhost","root","682130","teamhc");
		
	if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else {
		//echo "database connected";
	}
	echo "<br>";

	$result = mysqli_query($con,"SELECT * FROM img");
	
	//if (!$result) {
    //printf("Error: %s\n", mysqli_error($con));
    //exit();}
	
	$result = mysqli_query($con,"SELECT * FROM img");
	
	?><table id="phototable"><tr><?php
	while($row = mysqli_fetch_array($result)) 
	{
		
		$url= $row["URL"];
		$name= $row["Name"];
		$id= $row["ID"];
		
		if($id % 6 == 1 && $id != 1)
		{
			echo "</tr><tr>";
		}
		
		?>					
  			
  			<td>
  				 
  			<script type="text/javascript"> 

			function openpopup(popurl)
			{
				var winpops=window.open(popurl,"","width=1200,height=800,toolbar,location,directories,status=no,scrollbars,menubar,resizable")
			}
			</script>
			
			<a href="javascript:openpopup('photo?value= <?php echo $url ?>')"><img src="<?php echo $url; ?>" ></a><br>
			
  			 </td>
  			
  		<?php
	}
  	?>	
  	</tr>
  	</table>		
  	</div>
</body>
</html>