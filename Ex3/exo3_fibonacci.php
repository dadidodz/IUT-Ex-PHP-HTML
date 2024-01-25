<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Fibonacci</title>
</head>
<body>
<h1>Writing of the Fibonacci sequence with the while loop<br /></h1>


<?php
	$first = 0;
	$second = 1;
	$number = $first + $second;
	while ($number < 6765) {
        echo "$number <br />";
        $number = $first + $second;
        $first = $second;
        $second = $number;
    }
?>
	<br />
<h1>Writing of the Fibonacci sequence with the do while loop<br /></h1>
<?php
	$first = 0;
	$second = 1;
	$number = $first + $second;
	do{
		echo "$number<br />";
		$number = $first + $second;
		$first = $second;
		$second = $number;
	} while ($number < 6765);
	?>

</body>
</html>