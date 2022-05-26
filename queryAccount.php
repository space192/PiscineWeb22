<?php
include_once 'const.php';
function getAccount()
{
    if(isset($_COOKIE["LOGGED_USER"]))
    {
        $temp = $_COOKIE["LOGGED_USER"];
    }
    else if(isset($_SESSION["LOGGED"]))
    {
        $temp = $_SESSION["LOGGED"];
    }
    if(isset($temp))
    {
        global $mysqlConnection;
        $memberStatement = $mysqlConnection->prepare("SELECT * FROM utilisateur WHERE LOWER(Mail)='". strtolower($temp) ."';");
        $memberStatement->execute();
        $result = $memberStatement->fetch();
        return $result;
    }
    else
    {
        return false;
    }
}

function getAccountM()
{
    global $mysqlConnection;
    $memberStatement = $mysqlConnection->prepare("SELECT * FROM Medecin WHERE ID='". $_SESSION["ID"]."';");
    $memberStatement->execute();
    $result = $memberStatement->fetch();
    return $result;
}

function loginM()
{
    if(isset($_POST["Prenom"]) && isset($_POST["Nom"]) && isset($_POST["Mail"]))
    {
        global $mysqlConnection;
        $memberStatement = $mysqlConnection->prepare("SELECT * FROM Medecin WHERE LOWER(Prenom)='". strtolower($_POST["Prenom"]) ."' AND LOWER(Nom)='". strtolower($_POST["Nom"]) ."' AND LOWER(Mail)='" . strtolower($_POST["Mail"]) . "';");
        $memberStatement->execute();
        $result = $memberStatement->fetch();
        if($result != False)
        {
            $_SESSION["Medecin"] = "1";
            $_SESSION["LOGGED"] = $_POST["Mail"];
            $_SESSION["Prenom"] = $result["Prenom"];
            $_SESSION["ID"] = $result["ID"];
            return $result;
        }
        else
        {
            echo("non");
            return false;
        }
    }
}
function loginA()
{
    if(isset($_POST["Prenom"]) && isset($_POST["Nom"]) && isset($_POST["Mail"]))
    {
        global $mysqlConnection;
        $memberStatement = $mysqlConnection->prepare("SELECT * FROM utilisateur WHERE LOWER(Prenom)='". strtolower($_POST["Prenom"]) ."' AND LOWER(Nom)='". strtolower($_POST["Nom"]) ."' AND LOWER(Mail)='" . strtolower($_POST["Mail"]) . "' AND ADMIN='1';");
        $memberStatement->execute();
        $result = $memberStatement->fetch();
        if($result != False)
        {
            setcookie(
                'ADMIN',
                '1',
                [
                    'expires' => time() + 365*24*3600,
                    'secure' => true,
                    'httponly' => true,
                ]
            );
            setcookie(
                'LOGGED_USER',
                $_POST["Mail"],
                [
                    'expires' => time() + 365*24*3600,
                    'secure' => true,
                    'httponly' => true,
                ]
            );
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
        $memberStatement = $mysqlConnection->prepare("SELECT ID,Mail,Prenom FROM utilisateur WHERE LOWER(Mail)='". strtolower($_POST["Mail"]) ."' AND pwd='". hash('sha256', $_POST['pwd']) ."';");
        $memberStatement->execute();
        $result = $memberStatement->fetch();
        if($result != False)
        {
            if(isset($_POST["souvenir"]))
            {
                setcookie(
                    'LOGGED_USER',
                    $_POST["Mail"],
                    [
                        'expires' => time() + 365*24*3600,
                        'secure' => true,
                        'httponly' => true,
                    ]
                );
                setcookie(
                    'Prenom',
                    $result["Prenom"],
                    [
                        'expires' => time() + 365*24*3600,
                        'secure' => true,
                        'httponly' => true,
                    ]
                );
                setcookie(
                    'ID',
                    $result["ID"],
                    [
                        'expires' => time() + 365*24*3600,
                        'secure' => true,
                        'httponly' => true,
                    ]
                );
            }
            else
            {
                $_SESSION["LOGGED"] = $_POST["Mail"];
                $_SESSION["Prenom"] = $result["Prenom"];
                $_SESSION["ID"] = $result["ID"];
            }
            return $result;
        }
        else
        {
            return false;
        }
    }
}

function fieldChange()
{
    global $mysqlConnection;
    $temp = "UPDATE utilisateur SET ";
    foreach($_POST as $key => $value)
    {
        if($key != "query")
        {
            if($key == "pwd")
            {
                $temp = $temp . " " .$key . "='" . hash("sha256", $value) . "',";
            }
            else if($key == "Mail")
            {
                $memberStatement = $mysqlConnection->prepare("SELECT Mail FROM utilisateur WHERE LOWER(Mail)='". strtolower($_POST["Mail"]) . "';");
                $memberStatement->execute();
                $result = $memberStatement->fetch();
                if($result != False)
                {
                    return false;
                }
                else
                {
                    $temp = $temp . " " .$key . "='" . $value . "',";
                    if(isset($_COOKIE["LOGGED_USER"]))
                    {
                        $temp2 = $_COOKIE["LOGGED_USER"];
                        setcookie(
                            'LOGGED_USER',
                            $value,
                            [
                                'expires' => time() + 365*24*3600,
                                'secure' => true,
                                'httponly' => true,
                            ]
                        );
                    }
                    else if(isset($_SESSION["LOGGED"]))
                    {
                        $temp2 = $_SESSION["LOGGED"];
                        include_once 'const.php';
                        $_SESSION["LOGGED"] = $value;
                    }
                }   
            }
            else
            {
                $temp = $temp . " " .$key . "='" . $value . "',";
            }
        }
    }
    $temp = substr_replace($temp ,"",-1);
    if(isset($temp2))
    {
        $temp = $temp . " WHERE Mail='" . $temp2 ."'";
    }
    else
    {
        if(isset($_SESSION["LOGGED"]))
        {
            $temp = $temp . " WHERE Mail='" . $_SESSION["LOGGED"] ."'";
        }
        else if(isset($_COOKIE["LOGGED_USER"]))
        {
            $temp = $temp . " WHERE Mail='" . $_COOKIE["LOGGED_USER"] ."'";
        }
    }
    
    $memberStatement = $mysqlConnection->prepare($temp);
    return $memberStatement->execute();
}
function InsertUIntoBDD()
{
    if(!isset($_POST["Nom"]) || !isset($_POST["Prenom"]) || !isset($_POST["Telephone"]) || !isset($_POST["Mail"]) || (!isset($_POST["Adresse_ligne1"]) && !isset($_POST["Adresse_ligne2"])) || !isset($_POST["Ville"]) || !isset($_POST["Code_postal"]) || !isset($_POST["Pays"])|| !isset($_POST["Carte_vital"]))
    {
        die;
    }
    else
    {
        global $mysqlConnection;
        $sql = "";
        if(isset($_POST["Adresse_ligne2"]) && isset($_POST["Adresse_ligne1"]))
        {
            $sql = "INSERT INTO utilisateur (Nom, Prenom, Telephone,Mail,Adresse_ligne1,Adresse_ligne2,Ville,Code_postal,Pays,Carte_vital, pwd) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
            $stmt= $mysqlConnection->prepare($sql);
            return $stmt->execute([$_POST["Nom"], $_POST["Prenom"], $_POST["Telephone"],$_POST["Mail"],$_POST["Adresse_ligne1"],$_POST["Adresse_ligne2"],$_POST["Ville"],$_POST["Code_postal"],$_POST["Pays"],$_POST["Carte_vital"],hash('sha256', $_POST['pwd'])]);
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
        case 1: InsertUIntoBDD(); break; //insererUser dans la BDD
        case 2: InsertMIntoBDD(); break; //inserMedecin dans la BDD
        case 3: loginM(); break; //login pour les medecins
        case 4: loginU(); break; //login pour les useurs
        case 5: if(!fieldChange()){header('Location: Account.php?error=1');die();}; break;
        case 6: loginA(); break;
    }
    header('Location: Account.php');
    die();
}
?>