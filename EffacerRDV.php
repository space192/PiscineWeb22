<?php
    include_once 'const.php';
   

    $value1 = $_COOKIE["DateEff"];
    $value2 = $_COOKIE["ClientEff"];
    $value3 = $_COOKIE["RDV"];

    

    if($value3 == 1)
    {
        $stmt= $mysqlConnection->prepare("DELETE FROM EDT_Medecin WHERE ID_Client=? AND Date=?;");
        $stmt->execute([$value2, $value1]);
        header('Location: AffichageRDV.php');
        die();
    }
    if($value3 == 2)
    {
        $stmt= $mysqlConnection->prepare("DELETE FROM EDT_Labo WHERE ID_Client=? AND Date=?;");
        $stmt->execute([$value2, $value1]);
        header('Location: AffichageRDV.php');
        die();
    }

    
    
    

?>