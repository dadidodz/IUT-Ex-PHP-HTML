<html lang="en">
<head>
    <meta charset = "utf-8">
    <title>Contact search</title>
</head>
<body>
    <form method="post" action="exo11_recherche.php">

        <label for="keyword">Enter keywords  to find contacts : </label><br/>
        <input type="text" name="keyword" id="keyword" placeholder="Ex : John"/><br/>
        <input type="reset" value="Reset"/>
        <input type="submit" value="Submit"/>
    </form>

    <br />
    <table>
        <caption>Found contacts</caption>

        <thead>
            <tr>
                <th>LastName</th>
                <th>FirstName</th>
                <th>Address</th>
                <th>Postal code</th>
                <th>City</th>
                <th>Phone  number</th>
            </tr>
        </thead>
        <tbody>

<?php

    $login = 'etienne';
    $mdp = '201198';
    $server = 'localhost';
    $db = 'm3104';

    try {
        $dbh = new PDO("mysql:host=$server;dbname=$db", $login, $mdp);
    } catch (Exception $e) {
        die('Error : ' . $e->getMessage());
    }


    $keyword = $_POST['keyword'];

    $res = $dbh->query('SELECT * FROM contact');
    while($data = $res->fetch()){
        if ($data['nom'] == $keyword || $data['prenom'] == $keyword
            || $data['adresse'] == $keyword || $data['codePostal'] == $keyword
                || $data['ville'] == $keyword || $data['telephone'] == $keyword){
            echo "<tr>";
            echo "<td>" . $data['nom'] . "</td>";
            echo "<td>" . $data['prenom'] . "</td>";
            echo "<td>" . $data['adresse'] . "</td>";
            echo '<td>' . $data['codePostal'] . "</td>";
            echo "<td>" . $data['ville'] . "</td>";
            echo "<td>" . $data['telephone'] . "</td>";

            echo "<td><a href='exo12_modification.php?id=" . $data['contactID'] . "'>Modify</a></td>";
            echo "<td><a href='exo13_suppression.php?id=" . $data['contactID'] . "'>Delete</a></td>";
            echo "</tr>";
        }
    }
    $res->closeCursor();
?>
        </tbody>
    </table>
</body>
</html>