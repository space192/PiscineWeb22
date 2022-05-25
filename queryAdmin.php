<?php
include_once 'const.php';
function getUsers()
{
    global $mysqlConnection;
    $memberStatement = $mysqlConnection->prepare("SELECT * FROM utilisateur;");
    $memberStatement->execute();
    return $memberStatement->fetchAll();
}
?>