<html lang="en">
<head>
	<meta charset = "utf-8">
	<title>Leap year</title>
</head>
<body>
<?php
	function isLeap($year){
		if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0))
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	$years = array(1900, 1902, 2000, 2004);

	for ($i=0; $i < count($years); $i++)
	{
		if (isLeap($years[$i]))
		{
			echo $years[$i] . " is a leap year<br />";
		}
		else{
			echo $years[$i] . " isn't a leap year<br />";
		}
	}
?>
</body>
</html>