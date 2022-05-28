<?php
include_once 'const.php';
if(isset($_COOKIE["LOGGED_USER"]))
{
    $to = $_COOKIE["LOGGED_USER"];
}
else if(isset($_SESSION["LOGGED"]))
{
    $to = $_SESSION["LOGGED"];
}
$subject = "RDV confirmé le " . $_POST["date"] . " à " . $_POST["heure"];
$message = "Votre rendez-vous est confirmé. En cas d'imprévu, pensez à le déplacer ou l'annuler le plus tôt possible.\nCordialement,\nL’équipe OMNES Santé";
mail($to,$subject,$message);
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
        echo("oui");
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
        echo("non");
        header('Location: index.php');
        die();
    }
//header('Location: reserver.php');
//die;
?>