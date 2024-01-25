<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Hello with form</title>
</head>
<body>
<?php
	if (!empty($_POST['firstname']) && !empty($_POST['age']))
	{
		$firstname = $_POST['firstname'];
		$age = $_POST['age'];
		echo "Hello " . $firstname . ", you are " . $age . " years old.";
	}
?>
