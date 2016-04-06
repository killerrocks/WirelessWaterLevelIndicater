<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html> 
<head> 
	<title>My Page</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
	<script>
 function writeData()
        {
<?php
$fp = fopen('log.txt', 'w');
$data=$_POST["minslider"];
fwrite($fp, $data. PHP_EOL);
fwrite($fp, $_POST["maxslider"]);
fclose($fp);
?>
  
	}

	}

	</script>
</head> 
<body onload="wrtieData()" > 

<div data-role="page" data-theme="b" >


	<div data-role="header" data-theme="b">
		<h1>Welcome to Live water level indication system</h1>
	</div><!-- /header -->

	<div class="ui-bar ui-bar-c" data-theme="b">
		<h4>Water levels :&nbsp;&nbsp;
			Minimum :<?php echo $_POST["minslider"];?> &nbsp;&nbsp;&nbsp;
			Maximum :<?php echo $_POST["maxslider"];?></h4>

		 <a href="waterlevel.php" class="ui-btn-right" data-transition="flow" >Edit</a>
	</div>
	<div data-role="header" data-theme="b"> 
		<div data-role="content" id="level" align="left">	
	
    			<iframe id='dynamic-content' src='refresh.php' width="450" height="145" frameborder=0 scrolling=no></iframe>
 
		</div><!-- /content -->
	</div> 
<br>	
<img src="blue_wave_of_water-wide.jpg" alt="Smiley face" width="1400" height="350">
	
</div><!-- /page -->

</body>
</html>