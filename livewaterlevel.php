<html>
<head>
	<font color="red" face="Monotype Corsiva" size=5><center><marquee bgcolor="yellow">Welcome to Live water level indication system</marquee></font>
<script>
function Writedata()
{
<?php
$fp = fopen('data.txt', 'w');
$data="58";
fwrite($fp, $data. PHP_EOL);
fwrite($fp, "29");
fclose($fp);
?>
}
</script>
</head>

<body>
   	<br><br><br><br>	
	
	Water Tank Level:
	
	<br><br>
	
	Minimum:<input type="range" name="minlevel" min="2" max="15" onChange="showValue(this.value)">
		<span id="range" style="margin-left:10px">0
		<script type="text/javascript">
			function showValue(newValue)
				{
					document.getElementById("range").innerHTML=newValue;
				}
		</script></span></input>
	
	<br><br>

	Maximum:<input type="range" name="minlevel" min="50" max="500" onChange="showValue1(this.value)">
		<span id="range1"  style="margin-left:10px">0</span>
		<script type="text/javascript">
			function showValue1(newValue)
				{
					document.getElementById("range1").innerHTML=newValue;
				}
		</script>
	
	<br><br>
	
	<input type="button" name="edit" value="edit" >
	<input type="button" name="set" value="set" onclick="Writedata()">

   	<br><br><br><br>	
	
	<div id="level" align="center">
		<font color="blue">Current level of water in cm:</font><br><br>
    		<iframe id='dynamic-content' src='refresh.php' width="200" height="100" frameborder=0 scrolling=no />
	</div>
</body>
</html>