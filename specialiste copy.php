<?php
include_once 'const.php';
global $mysqlConnection;
$memberStatement = $mysqlConnection->prepare("SELECT * FROM Medecin JOIN Specialite ON Medecin.spe = Specialite.ID_spe JOIN Plage_horraire ON Medecin.ID = Plage_horraire.ID_Medecin WHERE Medecin.spe != '0';");
$memberStatement->execute();
$result = $memberStatement->fetchAll();
$memberStatement = $mysqlConnection->prepare("SELECT * FROM Specialite ;");
$memberStatement->execute();
$spe = $memberStatement->fetchAll();
echo('<div id="contenantSpe">');
$temp = false;
include 'card.php';
foreach($spe as $specialite)
{
    foreach($result as $res)
    {
        if($res["spe"] == $specialite["ID_spe"])
        {
            $temp = true;
        }
    }
    if($temp == true)
    {
        echo ('<div id="deroulantSpe">');
        echo ('<div class="titreSpe">');
        echo($specialite["Nom_spe"]);
        echo ('</div>');
        foreach ($result as $elem) {

            if($elem["spe"] == $specialite["ID_spe"])
            {
                card($elem);
            }
            
        }
        echo ('</div>');
    }
    $temp = false;
}
echo ('</div>'); 
