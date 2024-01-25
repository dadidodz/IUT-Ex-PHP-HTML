<?php
    $visit_counter = 0;
    $name = "";
// les 4 derniers permettent d'activer le mode httpOnly => code inaccessible en javascript
    setcookie('name',$name,time() + 24*3600, null, null, false, true);
    setcookie('counter',$visit_counter,time() + 24*3600, null, null, false, true);
?>


<html lang="en">
<head>
    <meta charset = "utf-8">
    <title>Cookies</title>
</head>
<body>
    <?php
        if ($_COOKIE['counter'] == 0){
            echo "Hello " . $_COOKIE['name'] ."<br />";
            ?>
    <form method="post" action="exo8_cookies.php">
        Votre nom : <br />
        <input type="text" name="name_user"/><br />
        <input type="submit" value="Valider"/>
        <input type="reset" value="Vider"/>
    </form>
    <?php
            $name = $_POST['name_user'];
            $visit_counter = 1;
        }
        else{
            $visit_counter++;
            echo "Hello " . $_COOKIE['name'] ."<br />";
            echo "Don't track me, you've connected to my site" . $_COOKIE['visit_counter'] . " times.";
        }
    ?>
</body>
</html>