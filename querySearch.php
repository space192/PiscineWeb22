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
    $resultM = $memberStatement->fetchAll();
    $sql = "SELECT Nom,Info FROM Service WHERE LOWER(Nom) LIKE '%" . $temp[0] . "%';";
    $memberStatement = $mysqlConnection->prepare($sql);
    $memberStatement->execute();
    $resultS = $memberStatement->fetchAll();
}
else
{
    die;
}


///tu peux faire le front ici pour l'affichage des recherches on aura les variables du dessus pour afficher les résultats
?>