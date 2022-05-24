<?php
include 'const.php';
function getAccount()
{
    if($_POST["type"] && $_POST["ID"])
    {
        global $mysqlConnection;
        $memberStatement = $mysqlConnection->prepare("SELECT * FROM ". $_POST["type"] ." WHERE ID='". $_POST["ID"] ."';");
        $memberStatement->execute();
        $result = $memberStatement->fetchAll();
        return $result;
    }
    else
    {
        return false;
    }
}

function loginM()
{
    if(isset($_POST["Prenom"]) && isset($_POST["Nom"]) && isset($_POST["Mail"]))
    {
        global $mysqlConnection;
        $memberStatement = $mysqlConnection->prepare("SELECT * FROM Medecin WHERE Prenom='". $_POST["Prenom"] ."' AND Nom='". $_POST["Nom"] ."';");
        if($memberStatement->execute())
        {
            $result = $memberStatement->fetchAll();
            return $result;
        }
        else
        {
            return false;
        }
    }
}

function loginU()
{

    if(isset($_POST["Mail"]) && isset($_POST["pwd"]) )
    {
        global $mysqlConnection;
        $memberStatement = $mysqlConnection->prepare("SELECT ID,Mail FROM utilisateur WHERE Mail='". $_POST["Mail"] ."' AND pwd='". hash('sha256', $_POST['pwd']) ."';");
        $memberStatement->execute();
        $result = $memberStatement->fetch();
        if($result != False)
        {
            echo("oui");
            return $result;
        }
        else
        {
            echo("non");
            return false;
        }
    }
}

function fieldChange()
{
    $temp = "UPDATE ". $_POST["type"]." SET ";
    foreach($_POST as $key => $value)
    {
        if($key != "query")
        {
            $temp += " " .$key . "='" . $value . "',";
        }
    }
    $temp = substr_replace($temp ,"",-1);
    $temp += " WHERE ID='" . $_POST["ID"] ."'";
    global $mysqlConnection;
    $memberStatement = $mysqlConnection->prepare($temp);
    return $memberStatement->execute();
}
function InsertUIntoBDD()
{
    if(!isset($_POST["Nom"]) || !isset($_POST["Prenom"]) || !isset($_POST["Telephone"]) || !isset($_POST["Mail"]) || (!isset($_POST["Adresse_ligne1"]) && !isset($_POST["Adresse_ligne2"])) || !isset($_POST["Ville"]) || !isset($_POST["Code_postal"]) || !isset($_POST["Pays"])|| !isset($_POST["Carte_vital"]))
    {
        return false;
    }
    else
    {
        global $mysqlConnection;
        $sql = "";
        if(isset($POST["Adresse_ligne2"]))
        {
            $sql = "INSERT INTO utilisateur (Nom, Prenom, Telephone,Mail,Adresse_ligne1,Adresse_ligne2,Ville,Code_postal,Pays,Carte_vital, pwd) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
            $stmt= $mysqlConnection->prepare($sql);
            return $stmt->execute([$_POST["Nom"], $_POST["Prenom"], $_POST["Telephone"],$_POST["Mail"],$_POST["Adresse_ligne1"],$_POST["Adresse_Ligne2"],$_POST["Ville"],$_POST["Code_postal"],$_POST["Pays"],$_POST["Carte_vital"],hash('sha256', $_POST['pwd'])]);
        }
        else
        {
            $sql = "INSERT INTO utilisateur (Nom, Prenom, Telephone,Mail,Adresse_ligne1,Ville,Code_postal,Pays,Carte_vital, pwd) VALUES (?,?,?,?,?,?,?,?,?,?)";
            $stmt= $mysqlConnection->prepare($sql);
            return $stmt->execute([$_POST["Nom"], $_POST["Prenom"], $_POST["Telephone"],$_POST["Mail"],$_POST["Adresse_ligne1"],$_POST["Ville"],$_POST["Code_postal"],$_POST["Pays"],$_POST["Carte_vital"],hash('sha256', $_POST['pwd'])]);
        }
    }
}

function InsertMIntoBDD()
{
    if(!isset($_POST["Nom"]) || !isset($_POST["Prenom"]) || !isset($_POST["Localisation"]) || !isset($_POST["Telephone"]) || !isset($_POST["Mail"]) || !isset($_POST["Digicode"]))
    {
        return false;
    }
    else
    {
        global $mysqlConnection;
        $sql = "INSERT INTO Medecin (Nom, Prenom,Localisation, Telephone,Mail,Digicode) VALUES (?,?,?,?,?,?)";
        $stmt= $mysqlConnection->prepare($sql);
        return $stmt->execute([$_POST["Nom"], $_POST["Prenom"], $_POST["Localisation"], $_POST["Telephone"],$_POST["Mail"], $_POST["Digicode"]]);
    }
}

if(isset($_POST["query"]))
{
    switch($_POST["query"])
    {
        case 0: getAccount(); break; //recuperer un compte
        case 1: InsertUIntoBDD(); break; //insererUser dans la BDD
        case 2: InsertMIntoBDD(); break; //inserMedecin dans la BDD
        case 3: loginM(); break; //login pour les medecins
        case 4: loginU(); break; //login pour les useurs
    }
    //header('Location: Account.php');
    //die();
}
else
{
    die;
}
?>