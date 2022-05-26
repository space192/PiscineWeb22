<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>OMNES Santé : Laboratoire de biologie médicale</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Index.css">
        <link rel="stylesheet" href="Laboratoire.css">
        <link rel="icon" href="images/Decor/LogoOmnesSante2.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/c6c9e611bb.js" crossorigin="anonymous"></script>
        <?php include 'queryLab.php'?>
        <?php include_once 'const.php'?>
        <?php $result = getinfoLabG();?>
        <script>
            function reserverS(id, idl)
            {
                location.href = "RDVLabo.php?IDS=" + id +"&IDL=" + idl ;
            }
        </script>
    </head>
    <body>
        <div id="Wrapper">
            <header id="Header">
                <?php include 'navBar.php'?>
                <?php include 'NavBarStatique.php' ?>
                <div id="Darkmode"><button onclick="switchTheme()" title="Changer de thème de couleur">◐</button></div>
            </header>
            <section id="Milieu">
                <div class="Boites" id="boite">
                    <div id="infos">
                    <?php $IDL = $_GET["IDL"]; 

                    include_once 'const.php';

                    global $mysqlConnection;
                    $memberStatement = $mysqlConnection->prepare("SELECT * FROM Labo WHERE ID_Labo = $IDL ;");
                    $memberStatement->execute();
                    $resultL = $memberStatement->fetchAll();
                    
                    echo('<br>Salle :<br><br>');
                    echo($resultL[0]["Localisation"]);
                    echo('<br><br><br>');
                    echo('Téléphone<br><br>');
                    echo($resultL[0]["Telephone"]);
                    echo('<br><br><br>');
                    echo('Email :<br><br>');
                    echo($resultL[0]["Mail"]);
                    echo('<br><br><br>');
                    
                    ?>
                        <!-- <br>Salle :<br><br>
                        SC-101<br><br><br>
                        Téléphone<br><br>
                        +33 01 22 33 44 55<br><br><br>
                        Email :<br><br>
                        labo.biologie@omnessante.fr<br><br> -->
                    </div>
                    <div id="Services">
                        <div class="container">
                            <div class="row align-items-start">
                                <div class="col">
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="height:35px; width:300px; margin-left:auto; margin-right:auto; background-color:#013d42;">
                                    Nos services
                                </button>
                                <div class="collapse" id="collapseExample" style="text-align:center; margin-left: auto; margin-right: auto;">
                                    <?php foreach($result as $res):?>
                                        <div class="card card-body" style="background-color:#266b6b; text-align:justify; margin-left: auto; margin-right: auto;">
                                            <button type="button"    class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#covidM"style="background-color:transparent;">
                                                <?php echo($res["Nom"]);?>
                                                <?php $idS = $res["ID_Service"];?>
                                            </button>
                                            <div class="modal fade" id="covidM" tabindex="-1" aria-labelledby="covid" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" style="font-size:170%; font-weight:800; color: #013d42;">Dépistage COVID-19</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div id="infoservice">
                                                                <h5>Informations générales</h5>
                                                                <?php echo(str_replace("\n", "<br>", $res["Info"]));?>
                                                            </div>
                                                            <div id="regleservice">
                                                                <h5>Règles</h5>
                                                                <?php echo(str_replace("\n", "<br>", $res["Regles"]));?>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" onclick=reserverS(<?php echo($res["ID_Service"]);?>,<?php echo($resultL[0]["ID_Labo"]);?>) class="btn btn-secondary" data-bs-dismiss="modal">Réserver</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach;?>
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="Boites" id="boite" style="margin-top : 10px;">
                    <button class="btn btn-primary" onclick="location.href='laboratoire.php?IDL=1'" style="height:35px; width:300px; margin-left:auto; margin-right:auto; background-color:#013d42;">
                        Labo1
                    </button>
                    <button class="btn btn-primary" onclick="location.href='laboratoire.php?IDL=2'" style="height:35px; width:300px; margin-left:auto; margin-right:auto; background-color:#013d42;">
                        Labo2
                    </button>
                </div>

            </section>
        </div>
        <?php include 'footer.php' ?>
        <script src="index.js"></script>
    </body>
</html>