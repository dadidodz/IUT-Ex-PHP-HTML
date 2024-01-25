<html lang="en">
<head>
    <meta charset = "utf-8">
    <title>Contact modification</title>
</head>
<body>
<h2>Contact modification</h2><br/>


<?php

    $login = 'etienne';
    $mdp = '201198';
    $server = 'localhost';
    $db = 'm3104';

    try {
        $dbh = new PDO("mysql:host=$server;dbname=$db", $login, $mdp );
    }
    catch (Exception $e)
    {
        die('Error : ' . $e->getMessage());
    }

    $res = $dbh->query('SELECT * FROM contact');
    while($data = $res->fetch()){
        if ($data['contactID'] == $_GET['id']){
           ?>
            <form method="post" action="exo12_modification.php">
                <input type="hidden" name="id" value="<?php echo $_GET['id'];?>"
                <label for="name">Your last name</label>            <input type="text" name="nvname" id="name" value="<?php echo $data['nom'];?>"/><br />
                <label for="firstname">Your first name</label>      <input type="text" name="nvfirstname" id="firstname" value="<?php echo $data['prenom'];?>"/><br />
                <label for="address">Your address</label>           <input type="text" name="nvaddress" id="address" value="<?php echo $data['adresse'];?>"/><br />
                <label for="postalCode">Your postal code</label>    <input type="text" name="nvpostalCode" id="postalCode" value="<?php echo $data['codePostal'];?>"/><br />
                <label for="city">Your city</label>                 <input type="text" name="nvcity" id="city" value="<?php echo $data['ville'];?>"/><br />
                <label for="phoneNUmber">Your phone number</label>  <input type="text" name="nvphoneNumber" id="phoneNUmber" value="<?php echo $data['telephone'];?>"/><br />
                <input type="reset" value="Reset"/>
                <input type="submit" value="Submit"/>
            </form>
    <?php

        }
    }
    $res->closeCursor();

    if(!empty($_POST['nvname']) && !empty($_POST['nvfirstname'])
        && !empty($_POST['nvaddress']) && !empty($_POST['nvpostalCode'])
        && !empty($_POST['nvcity']) && !empty($_POST['nvphoneNumber'])) {


            $req = $dbh->prepare('UPDATE contact 
                                            SET nom = :nvnom, prenom = :nvprenom, adresse = :nvadresse, codePostal = :nvcodepostal, ville = :nvville, telephone = :nvtelephone 
                                            WHERE contactID = :id'
                                );
            print_r($_POST);
            $req->execute(array('nvnom' => $_POST['nvname'],
                                'nvprenom' => $_POST['nvfirstname'],
                                'nvadresse' => $_POST['nvaddress'],
                                'nvcodepostal' => $_POST['nvpostalCode'],
                                'nvville' => $_POST['nvcity'],
                                'nvtelephone' => $_POST['nvphoneNumber'],
                                'id' => $_POST['id']
                                ));

            echo "Le contact a bien été modifié";
    }
?>

</body>
</html>