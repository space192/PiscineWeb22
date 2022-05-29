<?php include 'Recherche.php' ?>
<?php
include_once 'const.php';
if(isset($_POST["search"]) && $_POST["search"] != "")
{
    include 'card.php';
    global $mysqlConnection;
    $temp = explode(" ", $_POST["search"]);
    //recherche dans les medecins
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
    //recherche dans les services
    $sql = "SELECT Nom,Info,Regles FROM Service WHERE LOWER(Nom) LIKE '%" . $_POST["search"] . "%';";
    $memberStatement = $mysqlConnection->prepare($sql);
    $memberStatement->execute();
    $resultS = $memberStatement->fetchAll();
    $sql = "SELECT Medecin.*, Specialite.Nom_spe FROM Medecin JOIN Specialite ON Medecin.spe = Specialite.ID_spe WHERE LOWER(Specialite.Nom_spe) LIKE '%" . $_POST["search"] . "%';";
    $memberStatement = $mysqlConnection->prepare($sql);
    $memberStatement->execute();
    $resultService = $memberStatement->fetchAll();
    echo("<br>");
    echo("<h2>Services</h2>");
    foreach($resultS as $res)
    {
        echo('<div class="SousBoites" style="text-align:left!important">');
        echo("<h4>".$res["Nom"] . "</h4><br> " . str_replace("\n", "<br>", $res["Info"]) . "<br><br>". str_replace("\n", "<br>", $res["Regles"]) . "<br/><br/><br/><br/>");
        echo('</div><br>');
    }
    echo("<br>");
    echo("<h2>Médecins</h2>");
    echo('<div id="deroulant" style="background-color : var(--fond2);">');
    foreach($resultService as $res)
    {
        card($res);
    }
    foreach($resultM as $res)
    {
        card($res);
    }
    echo('</div><br>');
}
else
{
    die;
}
echo("</p></div> </section> </div>");
include 'footer.php';
echo(" </body> </html>");
?>