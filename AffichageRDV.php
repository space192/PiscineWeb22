<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Omnes Santé : Trouver des médecins généralistes</title>
    <meta name="description" content="Prenez facilement rendez-vous avec vos professionnels de santé et communiquez avec eux en direct.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="AffichageRDV.css">
    <link rel="stylesheet" href="Index.css">
    <link rel="stylesheet" href="Account.css">
    <?php include_once 'const.php' ?>
    <script src="Index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <link rel="icon" href="images/Decor/LogoOmnesSante2.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        function effacer() {

            let date = event.target.getAttribute('data-arg1');
            document.cookie = "DateEff=" + date+ "; SameSite=None; Secure";
            let client = event.target.getAttribute('data-arg2');
            document.cookie = "ClientEff=" + client + "; SameSite=None; Secure";
            location.href = "EffacerRDV.php";
        }

        
    </script>
</head>

<body>
    <div id="Wrapper">

        <header id="Header">
            <?php include 'navBar.php' ?>
            <div id="Darkmode"><button onclick="switchTheme()" title="Changer de thème de couleur">◐</button></div>
        </header>
        <?php 
            try {
                $mysqlConnection = new PDO(
                    'mysql:host=fournierfamily.ovh;port=15621;dbname=OmnesSante;charset=utf8',
                    'jps',
                    'poojava'
                );
            } catch (Exception $e) {
                die('Erreur :' . $e->getMessage());
            }
            $memberStatement = $mysqlConnection->prepare("SELECT * FROM EDT_Medecin ;");
            $memberStatement->execute();
            $result = $memberStatement->fetchAll();
            
            $idU = -1;

            if (isset($_SESSION["LOGGED"]) || isset($_COOKIE["LOGGED_USER"])) 
            {
                include 'queryAccount.php' ;
                $resultU = getAccount() ;
                $idU = $resultU["ID"];
            }

            echo $idU;

            echo ('<div id="deroulant">');
            foreach($result as $RDV)
            {
                if($RDV["ID_Client"] == $idU )
                {
                    $id = $RDV["ID_Medecin"];
                    $memberStatement = $mysqlConnection->prepare("SELECT * FROM Medecin WHERE id= $id ;");
                    $memberStatement->execute();
                    $data = $memberStatement->fetchAll();
                    echo ('<div id="cardRDV">');
                    echo ('<div id="detailsRDV">');

                    echo ('<div id="textDetails">');
                    echo('<div id="titreD">');
                    echo('Medecin :');
                    echo ('</div>');
                    echo('<div id="descriptionD">');
                    echo($data[0]["Nom"] . $data[0]["Prenom"]);
                    echo ('</div>');
                    echo ('</div>');

                    echo ('<div id="textDetails">');
                    echo('<div id="titreD">');
                    echo('Date :');
                    echo ('</div>');
                    echo('<div id="descriptionD">');
                    echo($RDV["Date"]);
                    echo ('</div>');
                    echo ('</div>');


                    echo ('</div>');

                    echo ('<button id="annuler" onClick="effacer()" data-arg1="');
                    echo($RDV["Date"]);
                    echo('" data-arg2="');
                    echo($RDV["ID_Client"]);
                    echo('">');
                    echo ('</button>');
                    echo ('</div>');    


                      
                }
                
            }
            echo ('</deroulant>');
            


        
        
        
        ?>
    </div>
</body>

</html>