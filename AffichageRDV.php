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
    <script src="Index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <link rel="icon" href="images/Decor/LogoOmnesSante2.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        function showContact(plage) {

            location.href = "RDV.php";
            document.cookie = "test1=" + plage + "; SameSite=None; Secure";

        }

        function showChat() {
            location.href = "chat.php";
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

            foreach($result as $RDV)
            echo ('<div id="cardRDV">');
                // $RDV["date"]


            echo ('</div>');


        
        
        
        ?>
    </div>
</body>

</html>