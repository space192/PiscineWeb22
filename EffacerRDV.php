<?php
    try {
        $mysqlConnection = new PDO(
            'mysql:host=fournierfamily.ovh;port=15621;dbname=OmnesSante;charset=utf8',
            'jps',
            'poojava'
        );
    } catch (Exception $e) {
        die('Erreur :' . $e->getMessage());
    }
   

    $value1 = $_COOKIE["DateEff"];
    $value2 = $_COOKIE["ClientEff"];

    echo $value1;
    echo $value2;


    
    $stmt= $mysqlConnection->prepare("DELETE FROM EDT_Medecin WHERE ID_Client=? AND Date=?;");
    $stmt->execute([$value2, $value1]);
     
    

?>