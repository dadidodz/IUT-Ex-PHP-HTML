<html lang="en">
<head>
    <meta charset = "utf-8">
    <title>Contact addition</title>
</head>
<body>

    <?php

        $login = 'etienne';
        $mdp = '201198';
        $server = 'localhost';
        $db = 'm3104';

        // Connexion au serveur MySQL
        try {
            $dbh = new PDO("mysql:host=$server;dbname=$db", $login, $mdp );
        }
        catch (Exception $e)
        {
            die('Error : ' . $e->getMessage());
        }

        if(!empty($_POST['name']) && !empty($_POST['firstname'])
            && !empty($_POST['address']) && !empty($_POST['postalCode'])
            && !empty($_POST['city']) && !empty($_POST['phoneNumber'])){

            $name = $_POST['name'];
            $firstname = $_POST['firstname'];
            $address = $_POST['address'];
            $postalCode = $_POST['postalCode'];
            $city = $_POST['city'];
            $phoneNumber = $_POST['phoneNumber'];

            $duplicate = false;

            $res = $dbh->query('SELECT * FROM contact');
            while($data = $res->fetch()){
                if ($data['nom'] == $name && $data['prenom'] == $firstname){
                    $duplicate = true;
                }
            }
            $res->closeCursor();

            if (!$duplicate) {
                $req = $dbh->prepare('INSERT INTO contact(nom,prenom,adresse,
                    codePostal, ville, telephone) VALUES(:nom,:prenom,:adresse,:codePostal,:ville,:telephone)');

                $req->execute(array('nom' => $name,
                    'prenom' => $firstname,
                    'adresse' => $address,
                    'codePostal' => $postalCode,
                    'ville' => $city,
                    'telephone' => $phoneNumber));

                echo "Contact ajouté avec succès";
            }
            else {
                echo "Le contact à ajouter existe déjà";
            }
        } else {
            // Il manquait des données, le formulaire est à retaper
            header("Location: ./exo10_saisie.html");
        }
    ?>

</body>
</html>


