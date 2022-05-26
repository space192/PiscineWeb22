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
    <?php include_once 'const.php' ?>
    <script src="Index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <link rel="icon" href="images/Decor/LogoOmnesSante2.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        function effacer() {

            if(confirm("Voullez vous annulez ce rendez-vous?"))
            {
                let date = event.target.getAttribute('data-arg1');
                document.cookie = "DateEff=" + date+ "; SameSite=None; Secure";
                let client = event.target.getAttribute('data-arg2');
                document.cookie = "ClientEff=" + client + "; SameSite=None; Secure";
                location.href = "EffacerRDV.php";
            }
            
        }

        
    </script>
</head>

<body>
    <div id="Wrapper">

        <header id="Header">
            <?php include 'navBar.php' ?>
            <?php include 'NavBarStatique.php' ?>
            <div id="Darkmode"><button onclick="switchTheme()" title="Changer de thème de couleur">◐</button></div>
        </header>
        <?php 
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


            echo ('<div id="contenant">');
            
            echo ('<div id="deroulant">');
            echo ('<div id="titreSpe"> Mes rendez-vous avec des practiciens:');
            echo('</div>');
            foreach($result as $RDV)
            {
                if($RDV["ID_Client"] == $idU )
                {
                    $id = $RDV["ID_Medecin"];
                    $memberStatement = $mysqlConnection->prepare("SELECT * FROM Medecin WHERE id= $id ;");
                    $memberStatement->execute();
                    $data = $memberStatement->fetchAll();
                    echo ('<div id="cardRDV">');

                   // echo ('<div id="detailsRDV">');
                    echo ('<div id="detailsProfil">');
                    echo('<div id="titre">');
                    echo('Votre practicien : <br>');
                    echo($data[0]["Nom"] . $data[0]["Prenom"]);
                    echo ('</div>');
                    echo ('<div id="photoProfil">');
                    echo ('<img src="' . $data[0]["pp"] . '" id="image">');
                    echo ('</div> ');
                    echo ('</div> ');
                   // echo ('</div>');


                    echo ('<div id="detailsRDV">');
                    echo ('<div id="textDetails">');
                    echo('<div id="titreD">');
                    echo('Date :');
                    echo ('</div>');
                    echo('<div id="descriptionD">');
                    echo(substr($RDV["Date"],0,10));
                    echo ('</div>');
                    echo ('</div>');

                    echo ('<div id="textDetails">');
                    echo('<div id="titreD">');
                    echo('Heure :');
                    echo ('</div>');
                    echo('<div id="descriptionD">');
                    echo(substr($RDV["Date"],10));
                    echo ('</div>');
                    echo ('</div>');

                    echo ('</div>');


                    echo ('<button id="annuler" onClick="effacer()" title="Annuler votre rendez-vous" data-arg1="');
                    echo($RDV["Date"]);
                    echo('" data-arg2="');
                    echo($RDV["ID_Client"]);
                    echo('">');
                    echo ('</button>');
                    echo ('</div>');    

                }
                
            }
            echo ('<div id="titreSpe"> Mes rendez-vous en laboratoire:');
            echo('</div>');

            $memberStatement = $mysqlConnection->prepare("SELECT * FROM EDT_Labo ;");
            $memberStatement->execute();
            $result = $memberStatement->fetchAll();


                    

            foreach($result as $RDV)
            {
                if($RDV["ID_Client"] == $idU )
                {
                    $id = $RDV["ID_Labo"];
                    $memberStatement = $mysqlConnection->prepare("SELECT * FROM Labo WHERE ID_Labo= $id ;");
                    $memberStatement->execute();
                    $data = $memberStatement->fetchAll();

                    $idS = $RDV["ID_Service"];
                    $memberStatement = $mysqlConnection->prepare("SELECT * FROM Service WHERE ID_Service= $idS ;");
                    $memberStatement->execute();
                    $service = $memberStatement->fetchAll();

                    echo ('<div id="cardRDV">');

                   // echo ('<div id="detailsRDV">');
                    echo ('<div id="detailsProfil">');
                    echo('<div id="titre">');
                    echo($data[0]["Nom"]);
                    echo ('</div>');
                    
                    echo ('</div> ');
                   // echo ('</div>');


                    echo ('<div id="detailsRDV">');
                    echo ('<div id="textDetails">');
                    echo('<div id="titreD">');
                    echo('Date :');
                    echo ('</div>');
                    echo('<div id="descriptionD">');
                    echo(substr($RDV["Date"],0,10));
                    echo ('</div>');
                    echo ('</div>');

                    echo ('<div id="textDetails">');
                    echo('<div id="titreD">');
                    echo('Heure :');
                    echo ('</div>');
                    echo('<div id="descriptionD">');
                    echo(substr($RDV["Date"],10));
                    echo ('</div>');
                    echo ('</div>');

                    echo ('<div id="textDetails">');
                    echo('<div id="titreD">');
                    echo('Localisation :');
                    echo ('</div>');
                    echo('<div id="descriptionD">');
                    echo($data[0]["Localisation"]);
                    echo ('</div>');
                    echo ('</div>');

                    echo ('<div id="textDetails">');
                    echo('<div id="titreD">');
                    echo('Service :');
                    echo ('</div>');
                    echo('<div id="descriptionD">');
                    echo($service[0]["Nom"]);
                    echo ('</div>');
                    echo ('</div>');

                    echo ('</div>');


                    echo ('<button id="annuler" onClick="effacer()" title="Annuler votre rendez-vous" data-arg1="');
                    echo($RDV["Date"]);
                    echo('" data-arg2="');
                    echo($RDV["ID_Client"]);
                    echo('">');
                    echo ('</button>');
                    echo ('</div>');    

                }
                
            }

            echo ('</deroulant>');

            echo('</div>');
            


        
        
        
        ?>
    </div>
</body>

</html>