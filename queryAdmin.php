<?php
include_once 'const.php';
function getUsers()
{
    global $mysqlConnection;
    $memberStatement = $mysqlConnection->prepare("SELECT ID,Prenom,Nom,Mail FROM utilisateur WHERE ADMIN IS NULL;");
    $memberStatement->execute();
    return $memberStatement->fetchAll();
}
function getMed()
{
    global $mysqlConnection;
    $memberStatement = $mysqlConnection->prepare("SELECT ID,Prenom,Nom FROM Medecin;");
    $memberStatement->execute();
    return $memberStatement->fetchAll();
}

function supprM()
{
    global $mysqlConnection;
    $stmt= $mysqlConnection->prepare("DELETE FROM Medecin WHERE ID=?;");
    $stmt->execute([$_POST["ID"]]);
}

function AddA()
{
    global $mysqlConnection;
    $stmt= $mysqlConnection->prepare("UPDATE utilisateur SET ADMIN = '1' WHERE ID=?;");
    $stmt->execute([$_POST["ID"]]);
}

if(isset($_POST["query"]) && isset($_POST["ID"]))
{
    switch($_POST["query"])
    {
        case 1: supprM(); break; //supprimer un medecin
        case 2: AddA(); break; //Ajouter un Admin
    }
    header('Location: Account.php');
    die;
}
?>