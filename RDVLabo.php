
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Omnes Santé : Choisissez un rendez-vous</title>
    <meta name="description" content="Prenez facilement rendez-vous avec vos professionnels de santé et communiquez avec eux en direct.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="Index.css">
    <?php include_once 'const.php' ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <link rel="icon" href="images/Decor/LogoOmnesSante2.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Index.js"></script>
    <script>    
        function reserver(ids,idl) {
                
                //location.href = "reserverS.php";
                let date = event.target.getAttribute('data-arg1');
                let heure = event.target.getAttribute('data-arg2');
                document.cookie = "Heure=" + heure + "; SameSite=None; Secure";
                document.cookie = "Date=" + date + "; SameSite=None; Secure";
                document.cookie = "IDL=" + idl + "; SameSite=None; Secure";
                document.cookie = "IDS=" + ids + "; SameSite=None; Secure";
                document.cookie = "RDV=" + '2' + "; SameSite=None; Secure";
                alert("Rendez-vous le " + date + " à " + heure + " sélectionné!" );    
            
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
    <table id="tableRDV">
        <thead>
            <tr>
                <th colspan="8">Disponibilitées  </th> 
            </tr>
        </thead>
        <tbody>
            <?php
                
                
                $idS = $_GET["IDS"];
                $idL = $_GET["IDL"];


                $memberStatement = $mysqlConnection->prepare("SELECT * FROM EDT_Labo WHERE (ID_Labo ='" .$idL ."') AND (ID_Service = '".$idS."') ;");
                $memberStatement->execute();
                $result = $memberStatement->fetchAll();
                $listeRDV = []; ;
                foreach ($result as $elem) 
                {
                    array_push($listeRDV,$elem["Date"]);
                }
                
                echo('<tr>');
                for ($i = 1; $i <= 8; $i++) {
                    echo('<td style="width:12.5%;" >' . date("l", mktime(0, 0, 0, date("m")  , date("d")+$i-1, date("Y"))) . '</td>');
                }
                echo('</tr>');
                $date = date_create(date('Y-m-d H:i:s'));
                date_time_set($date, 9, 00);
                $dateR = date_create(date('Y-m-d H:i:s'));
                date_time_set($dateR, 13, 30);
                for ($j = 1; $j <= 17; $j++) {
                    date_time_set($date, 9, 00 + $j*30);
                    echo('<tr>');
                    $dateT = date_create(date('Y-m-d H:i:s'));
                    for ($i = 1; $i <= 8; $i++) {
                        
                        $jourN = date("N", mktime(0, 0, 0, date("m")  , date("d")+$i-1, date("Y"))) ;
                        // echo ($dateT->format('Y-m-d ') .' '. $date->format(' H:i:s'));  
                        if(in_array($dateT->format('Y-m-d') .' '. $date->format('H:i:s'),$listeRDV))
                        {
                            echo('<td ><button id="cellButtonN">' .  date_format($date, ' H:i') . '</button></td>');
                        }
                        else
                        {
                            echo('<td ><button id="cellButton" onClick="reserver('. $idS . ','.  $idL  .')" data-arg1=').$dateT->format('Y-m-d ').(' data-arg2=').$date->format(' H:i:s').(' >' .  date_format($date, ' H:i') . '</button></td>');
                                            
                        }
                        $dateT->modify('+1 day');
                    }
                    echo('</tr>');
                }
            ?>
            
        </tbody>
    </table>
    <div id="boutonPayer">
        <?php include_once 'paiement.php' ?>
    </div>
    
    


</body>

</html>