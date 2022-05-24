<?php
include_once 'const.php';
if(isset($_POST["search"]))
{
    global $mysqlConnection;
    $temp = explode(" ", $_POST["search"]);
    $memberStatement = $mysqlConnection->prepare("SELECT DISTINCT * FROM Medecin JOIN Plage_horraire ON Medecin.ID = Plage_horraire.ID_Medecin WHERE LOWER(Prenom) LIKE '%".$temp[0]."%' OR LOWER(Nom) LIKE '%". $temp[1] ."%' OR LOWER(Prenom) LIKE '%" . $temp[1] . "%' OR LOWER(Nom) LIKE '%" . $temp[0] . "%';");
    $memberStatement->execute();
    $result = $memberStatement->fetchAll();
    foreach($result as $res)
    {
        echo($res["pp"] . " " .$res["Prenom"] . " " . $res["Nom"] . " " . $res[""]);
    }
}
else
{
    die;
}
?>