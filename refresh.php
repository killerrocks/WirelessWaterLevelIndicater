<html>
<head>
	<!-- refresh every 5 seconds -->
	<meta http-equiv='refresh' content='3'>
</head>
<body>
    <?php
       $test = exec('sudo python ultrasonic.py');

	$filename = "log.txt";
	$fp = fopen($filename, "r");

	$content = fread($fp, filesize($filename));
	$lines = explode("\n", $content);
	fclose($fp);
       $s=$lines[1]-$test;

	if($s<$lines[0])
	{
	echo "<font color='white' size='5'>";
	echo "Current level : ";

	echo "<font color='red' size='5'>";
	echo "<blink>".$s."</font>";
	}


	if($s>$lines[1]-5)
	{
	echo "<font color='white' size='5'>";
	echo "Current level : </font>";

	echo "<font color='blue' size='5'>";
	echo "<blink>".$s."</font>";
	}

	if($s>$lines[0] && $s<$lines[1]-5)
	{
	echo "<font color='white' size='5'>";
	echo "Current level : ".$s."</font>";
	}


       
	echo "<br><br><font color='white' size='5'> Remaining Tank Capacity  : ".$test."</font>";

	
	if($s>$lines[1]-5)
	{
		echo "<font color='white' size='5' >";
		echo "<br><br>Tank is full!! Motor OFF";
		echo "</font>";
		exec('sudo python off.py');
	}
	elseif($s<$lines[0])
	{
		echo "<font color='white' size='5' >";
		echo "<br><br>Tank is empty!! Motor ON";
		echo "</font>";
		exec('sudo python on.py');
	}


    ?>
</body>
</html>