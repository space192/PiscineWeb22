<?php
    include_once 'const.php';
   

    $value1 = $_COOKIE["DateEff"];
    $value2 = $_COOKIE["ClientEff"];

    echo $value1;
    echo $value2;


    
    $stmt= $mysqlConnection->prepare("DELETE FROM EDT_Medecin WHERE ID_Client=? AND Date=?;");
    $stmt->execute([$value2, $value1]);
    header('Location: AffichageRDV.php');
    die();
    

?>