<?php
include_once 'const.php';
if(isset($_POST["search"]))
{
    global $mysqlConnection;
    $temp = explode(" ", $_POST["search"]);
    if(sizeof($temp) > 1)
    {
        $sql ="SELECT DISTINCT * FROM Medecin JOIN Plage_horraire ON Medecin.ID = Plage_horraire.ID_Medecin WHERE LOWER(Prenom) LIKE '%".$temp[0]."%' OR LOWER(Nom) LIKE '%". $temp[1] ."%' OR LOWER(Prenom) LIKE '%" . $temp[1] . "%' OR LOWER(Nom) LIKE '%" . $temp[0] . "%';";
    }
    else
    {
        $sql ="SELECT DISTINCT * FROM Medecin JOIN Plage_horraire ON Medecin.ID = Plage_horraire.ID_Medecin WHERE LOWER(Prenom) LIKE '%".$temp[0]."%' OR LOWER(Nom) LIKE '%". $temp[0] ."%' OR LOWER(Prenom) LIKE '%" . $temp[0] . "%' OR LOWER(Nom) LIKE '%" . $temp[0] . "%';";
    }
    $memberStatement = $mysqlConnection->prepare($sql);
    $memberStatement->execute();
    $result = $memberStatement->fetchAll();
    foreach($result as $res)
    {
        echo($res["pp"] . " " .$res["Prenom"] . " " . $res["Nom"]);
    }
}
else
{
    die;
}
?>