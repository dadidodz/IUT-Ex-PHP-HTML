<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>String</title>
</head>
<body>

    <?php
        $age = 21;
    ?>
<h1>Use of string concatenation<br /></h1>
    <?php
        echo 'I am ' . $age . ' years old.<br />';
    ?>
<h1>Use of echo only <br /></h1>
    <?php
        echo "I am $age years old. <br /> <br />";
    ?>
<h1>String comparison <br /></h1>
    <?php
        $string1 = "Bonjour";
        $string2 = "Bonjour";
    ?>
<h2>Comparison with == <br /></h2>
    <?php
        if ($string1 == $string2){
            echo "Identical chains<br />";
        }
    ?>
<h2>Comparison with strcmp <br /></h2>
    <?php
        if (strcmp($string1,$string2) == 0){
            echo 'Identical chains<br/>';
        }
        if (strcmp("bonjour", $string2) > 0){
            echo "bonjour is greater than " . $string2 ." agreeing to strcmp <br />";
        }
        if (strcmp($string1, "Bonjoure") < 0){
            echo $string1 . " is less than Bonjoure agreeing to strcmp <br />";
        }
    ?>
</body>
</html>
