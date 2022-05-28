<?php
if(isset($_POST["Prenom"]) && isset($_POST["Nom"]) && isset($_POST["Localisation"]) && isset($_POST["Telephone"]) && $_POST["naissance"] && isset($_POST["Mail"]) && isset($_POST["Digicode"]) && isset($_FILES["pp"]) && $_FILES["pp"]["error"] == 0 && isset($_POST["spe"]))
{
    $ext = pathinfo($_FILES["pp"]["name"])["extension"];
    if(in_array($ext,["png","jpg","jpeg"]))
    {
        $tempFile = $_SERVER['DOCUMENT_ROOT'] . "PiscineWeb22/images/" . ($_POST["spe"] == 0 ? "Generalistes" : "Specialistes") . "/" .strtolower($_POST["Prenom"]) . " " . strtolower($_POST["Nom"]) . "." . $ext;
        move_uploaded_file($_FILES["pp"]["tmp_name"],$tempFile);
        include_once 'const.php';
        global $mysqlConnection;
        $stmt= $mysqlConnection->prepare("INSERT INTO Medecin (Prenom,Nom,Localisation,Telephone,Mail,Digicode,pp,spe) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->execute([$_POST["Prenom"],$_POST["Nom"],$_POST["Localisation"],$_POST["Telephone"],$_POST["Mail"] . "@fournierfamily.ovh",$_POST["Digicode"],$tempFile,$_POST["spe"]]);
        $memberStatement = $mysqlConnection->prepare("SELECT LAST_INSERT_ID();");
        $memberStatement->execute();
        $ID = $memberStatement->fetch()[0];
        $cv = new SimpleXMLElement('<cv/>');
        $ec = $cv->addChild("etatCivil");
        $ec->addChild('nom',$_POST["Nom"]);
        $ec->addChild('prenom',$_POST["Prenom"]);
        $ec->addChild('age',explode("-",$_POST["naissance"])[0]);
        $diplomes = $cv->addChild('diplomes');
        for($i = 1; $i <= $_POST["nbrDiplome"];$i++)
        {
            $diplome = $diplomes->addChild("diplome");
            $diplome->addChild("libelle",$_POST["libelle" . $i]);
            $diplome->addChild("annee",$_POST["annee" . $i]);
            $diplome->addChild("institution",$_POST["instit" . $i]);
        }
        $experiences = $cv->addChild("experiences");
        for($i = 1 ; $i <= $_POST["nbrExp"];$i++)
        {
            $experience = $experiences->addChild("experience");
            $experience->addChild("debut",$_POST["debut" . $i]);
            $experience->addChild("fin",$_POST["fin" . $i]);
            $experience->addChild("entreprise",$_POST["entreprise" . $i]);
            $experience->addChild("poste",$_POST["poste" . $i]);
        }
        $cv->asXML($_SERVER['DOCUMENT_ROOT'] . "/Code/PiscineWeb22/XML/" . $ID .".xml");
    }
    header('Location: Account.php');
    die;
}
?>