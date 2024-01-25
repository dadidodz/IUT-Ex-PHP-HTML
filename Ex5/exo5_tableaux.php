<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Arrays</title>
</head>
<body>

<h2>Creation of the table age <br /></h2>
<?php
	$age = array("Jean" => "20", "Jacques" => "30", "Pierre" => "25");
	echo "Pierre a " . $age["Pierre"] . " ans.";
?>

<h2>Creation of the table identity <br /></h2>

<?php
	$identite=array(
		"personne 1" => array("nom" => "dutronc", "prenom"=>"michel", "age"=>"30"),
		"personne 2" => array("nom" => "duroc", "prenom"=>"émilie", "age"=>"23"),
		"personne 3" => array("nom" => "dupersil", "prenom"=>"évelyne", "age"=>"36")
    );

	foreach ($identite as $personne)
	{
		echo $personne["nom"] . "<br />";
	}
?>
</body>
</html>