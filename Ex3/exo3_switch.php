<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Switch case</title>
</head>
<body>
<?php
	$jour = 4;
	switch ($jour)
	{
		case 1 :
			echo "Nous sommes lundi";
		break;
		case 2 :
			echo "Nous sommes mardi";
		break;
		case 3 :
			echo "Nous sommes mercredi";
		break;
		case 4 :
			echo "Nous sommes jeudi";
		break;
		default :
			echo "Nous sommes ni lundi, ni mardi, ni mercredi, ni jeudi";
	}
?>
</body>
</html>