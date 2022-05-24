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
    $value1 = substr($_COOKIE["test1"],12);
    $value2 = 2;
    $value3=date($_COOKIE["Date"] . ' ' . $_COOKIE["Heure"]);
    $value4 = 1;
    $value5 = "Pas d'infos";
    
    
    $sql = "INSERT INTO EDT_Medecin (ID_Medecin, ID_Client,Date, Paiement,Autre_info_client) VALUES (?,?,?,?,?)";
    $stmt= $mysqlConnection->prepare($sql);
     return $stmt->execute([$value1,$value2, $value3, $value4,$value5]);
    

?>