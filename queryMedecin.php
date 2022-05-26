<?php 
include_once 'const.php';
function getUsers()
{
    global $mysqlConnection;
    $memberStatement = $mysqlConnection->prepare("SELECT ID,Prenom,Nom,Mail FROM utilisateur;");
    $memberStatement->execute();
    return $memberStatement->fetchAll();
}
?>