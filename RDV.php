
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
    <script src="https://kit.fontawesome.com/c6c9e611bb.js" crossorigin="anonymous"></script>
    <script src="Index.js"></script>
    <script>    
        function reserver() {
                
                //location.href = "Paiement.php";
                //location.href = "reserver.php";
                let date = event.target.getAttribute('data-arg1');
                let heure = event.target.getAttribute('data-arg2');
                var now = new Date();
                var time = now.getTime();
                var expireTime = time + 1000*36000;
                now.setTime(expireTime);
                document.cookie = "Heure=" + heure + "; expires="+now.toUTCString();
                document.cookie = "Date=" + date + "; expires="+now.toUTCString();
                document.cookie = "RDV=" + '1' + "; expires="+now.toUTCString();
                alert("Rendez-vous le " + date + " à " + heure + " selectionné!");
        }
        function payer() {
                
                location.href = "Paiement.php";
                //location.href = "reserver.php";
                // let date = event.target.getAttribute('data-arg1');
                // let heure = event.target.getAttribute('data-arg2');
                // document.cookie = "Heure=" + heure + "; SameSite=None; Secure";
                // document.cookie = "Date=" + date + "; SameSite=None; Secure";
                // alert("Rendez-vous le " + date + " à " + heure + " selectionné!");    
                       
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
    <section id="Milieu">
        <table id="tableRDV">
            <thead>
                <tr>
                    <th colspan="8">Disponibilitées  </th> 
                </tr>
            </thead>
            <tbody>
                <?php
                    $datatest =  $_COOKIE["test1"];
                    $id = substr($datatest,13);
                    $data = substr($datatest,1,12);
                    $memberStatement = $mysqlConnection->prepare("SELECT * FROM EDT_Medecin WHERE ID_Medecin = $id ;");
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
                                echo('<td ><button class="cellButtonN">' .  date_format($date, ' H:i') . '</button></td>');
                            }
                            else
                            {
                                if($date<$dateR)
                                {
                                    if($jourN=='7')
                                    {
                                        echo('<td ><button class="cellButtonN">' .  date_format($date, ' H:i') . '</button></td>');
                                    }
                                    else
                                    {
                                        if($data[($jourN-1)*2] == '1')
                                            {
                                                echo('<td ><button class="cellButton" onClick="reserver()" data-arg1=').$dateT->format('Y-m-d ').(' data-arg2=').$date->format(' H:i:s').(' >' .  date_format($date, ' H:i') . '</button></td>');
                                            }
                                            else
                                            {
                                                echo('<td ><button class="cellButtonN">' .  date_format($date, ' H:i') . '</button></td>');
                                            }
                                    }

                                }
                                else
                                {

                                    if($jourN=='7')
                                    {
                                        echo('<td ><button class="cellButtonN">' .  date_format($date, ' H:i') . '</button></td>');
                                    }
                                    else
                                    {
                                        if($data[($jourN-1)*2+1] == '1')
                                            {
                                                echo('<td ><button class="cellButton" onClick="reserver()" data-arg1=').$dateT->format('Y-m-d ').(' data-arg2=').$date->format(' H:i:s').(' >' .  date_format($date, ' H:i') . '</button></td>');
                                            }
                                            else
                                            {
                                                echo('<td ><button class="cellButtonN">' .  date_format($date, ' H:i') . '</button></td>');
                                            }
                                    }
                                }
                            }
                            $dateT->modify('+1 day');
                        }
                        echo('</tr>');
                    }
                ?>

            </tbody>
        </table>
        <br>
    <div id="boutonPayer">
        <?php include 'paiement.php' ?>
    </div>
    </section>
    <?php include 'footer.php' ?>

</body>

</html>