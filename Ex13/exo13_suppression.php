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

$req = $dbh->prepare('DELETE FROM contact 
                                    WHERE contactID = :id');

$req->execute(array(
    'id' => $_GET['id']
));

header('Location: ./exo11_recherche.php');
exit();
