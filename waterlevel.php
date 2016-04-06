<!DOCTYPE html> 
<html> 
<head> 
	<title>Welcome to Live water level indication system</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
</head> 
<body > 
<form name="index" action="walerlevelindication.php" method="POST" >
<div data-role="page" data-theme="b" data-transition="pop">

	<div data-role="header" data-theme="b">
		<h1>Welcome to Live water level indication system</h1>
	</div><!-- /header -->

	<div data-role="content" >	
 		<p>Water Tank Level</p>
	
		   <label for="slider-0">Minimum Level:</label>
		   <input type="range" name="minslider" id="slider-0" value="25" min="0" max="100"/>

		   <label for="slider-0">Maximum Level:</label>
		   <input type="range" name="maxslider" id="slider-1" value="25" min="0" max="100"  />
			
       	    <input type="submit" value="set"></input>		 
   			
  	
	</div><!-- /content -->
<img src="blue_wave_of_water-wide.jpg" alt="Smiley face" width="1350" height="310">

</div><!-- /page -->
</form>	
<input type="submit" value="set"></input>	
</body>
</html>