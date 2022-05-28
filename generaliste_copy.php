<?php
include_once 'const.php';
global $mysqlConnection;
$memberStatement = $mysqlConnection->prepare("SELECT * FROM Medecin JOIN Plage_horraire ON Medecin.ID = Plage_horraire.ID_Medecin WHERE spe = '0';");
$memberStatement->execute();
$result = $memberStatement->fetchAll();

echo ('<div id="contenant">');
echo ('<div id="deroulant">');
include 'card.php';
foreach ($result as $elem) {
    card($elem);
}
echo ('</div>');
echo ('</div>');
