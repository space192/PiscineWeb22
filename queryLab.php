<?php
include_once 'const.php';
function getinfoLab($ID)
{
    if(isset($ID))
    {
        global $mysqlConnection;
        $memberStatement = $mysqlConnection->prepare("SELECT * FROM Labo WHERE ID_Labo='". $ID ."';");
        $memberStatement->execute();
        $result = $memberStatement->fetchAll();
        return $result;
    }
    else
    {
        return null;
    }
}
function getEDTLab($ID)
{
    if(isset($ID))
    {
        global $mysqlConnection;
        $memberStatement = $mysqlConnection->prepare("SELECT * FROM EDT_Labo WHERE ID_Labo='". $ID ."';");
        $memberStatement->execute();
        $result = $memberStatement->fetchAll();
        return $result;
    }
    else
    {
        return null;
    }
}
if(!isset($_POST["ID_Labo"]) || !isset($_POST["ID_Client"]) || !isset($_POST["ID_Service"]) || !isset($_POST["Date"]))
{
    die;
}
else
{
    $sql = "INSERT INTO utilisateur (ID_Labo,ID_Client,ID_Service,Date) VALUES (?,?,?,?)";
            $stmt= $mysqlConnection->prepare($sql);
            return $stmt->execute([$_POST["ID_Labo"], $_POST["ID_Client"], $_POST["ID_Service"],$_POST["Date"]]);
}
?>