<?php

    if ($_COOKIE["RDV"]==1)
    {
        include_once 'const.php';
        include 'queryAccount.php' ;
        $resultU = getAccount() ;
        $idU = $resultU["ID"];

        $value1 = substr($_COOKIE["test1"],13);
        $value2 = $idU;
        $value3=date($_COOKIE["Date"] . ' ' . $_COOKIE["Heure"]);
        $value4 = 1;
        $value5 = "Pas d'infos";
        
        
        $sql = "INSERT INTO EDT_Medecin (ID_Medecin, ID_Client,Date, Paiement,Autre_info_client) VALUES (?,?,?,?,?)";
        $stmt= $mysqlConnection->prepare($sql);
        $stmt->execute([$value1,$value2, $value3, $value4,$value5]);
        header('Location: index.php');
        die();
    }
    
    if ($_COOKIE["RDV"]==2)
    {
        include_once 'const.php';
        include 'queryAccount.php' ;
        $resultU = getAccount() ;
        $idU = $resultU["ID"];

        $value1 = $_COOKIE["IDL"];
        $value2 = $idU;
        $value3 = $_COOKIE["IDS"];
        $value4=date($_COOKIE["Date"] . ' ' . $_COOKIE["Heure"]);
        
        
        
        $sql = "INSERT INTO EDT_Labo (ID_Labo, ID_Client,ID_Service,Date) VALUES (?,?,?,?)";
        $stmt= $mysqlConnection->prepare($sql);
        $stmt->execute([$value1,$value2, $value3, $value4]);
        header('Location: index.php');
        die();
    }

    

?>