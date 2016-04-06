<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html> 
<head> 
	<title>Login</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>

</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<h1><marquee>Welcome to Live water level indication system</marquee></h1>
	</div><!-- /header -->

<div class="ui-bar ui-bar-c">
<?php
	if( 0 == filesize('log.txt') )
	{
	 echo "<h4>Water levels :<br>";	
	}
	else
	{
	 echo "<h4>min max :<br>";	
	}
?>
			<a href="andriodindex.php" >Edit</a>
			<a href="main.php" style="height:50px; width:80px" >Start</a>
</div>
	
</div><!-- /page -->

</body>
</html>