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
                        <br>Salle :<br><br>
                        SC-101<br><br><br>
                        Téléphone<br><br>
                        +33 01 22 33 44 55<br><br><br>
                        Email :<br><br>
                        labo.biologie@omnessante.fr<br><br>
                    </div>
                    <div id="Services">
                        <div class="container">
                            <div class="row align-items-start">
                                <div class="col">
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="height:35px; width:300px; margin-left:auto; margin-right:auto; background-color:#013d42;">
                                    Nos services
                                </button>
                                <div class="collapse" id="collapseExample" style="text-align:center; margin-left: auto; margin-right: auto;">
                                    <!--Dépistage COVID-19-->
                                    <div class="card card-body" style="background-color:#266b6b; text-align:center; margin-left: auto; margin-right: auto;">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#covidM"style="background-color:transparent;">
                                            Dépistage COVID-19
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
                                                            ...
                                                        </div>
                                                        <div id="regleservice">
                                                            <h5>Règles</h5>
                                                            ...
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Biologie préventive-->
                                    <div class="card card-body" style="background-color:#266b6b;">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#preventiveM"style="background-color:transparent;">
                                            Biologie préventive
                                        </button>
                                        <div class="modal fade" id="preventiveM" tabindex="-1" aria-labelledby="preventive" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" style="font-size:170%; font-weight:800; color: #013d42;">Biologie préventive</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="infoservice">
                                                            <h5>Informations générales</h5>
                                                            ...
                                                        </div>
                                                        <div id="regleservice">
                                                            <h5>Règles</h5>
                                                            ...
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Biologie de la femme enceinte-->
                                    <div class="card card-body" style="background-color:#266b6b;">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#femmeM"style="background-color:transparent;">
                                            Biologie de la femme enceinte
                                        </button>
                                        <div class="modal fade" id="femmeM" tabindex="-1" aria-labelledby="femme" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" style="font-size:170%; font-weight:800; color: #013d42;">Biologie de la femme enceinte</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="infoservice">
                                                            <h5>Informations générales</h5>
                                                            ...
                                                        </div>
                                                        <div id="regleservice">
                                                            <h5>Règles</h5>
                                                            ...
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Biologie de routine-->
                                    <div class="card card-body" style="background-color:#266b6b;">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#routineM"style="background-color:transparent;">
                                            Biologie de routine
                                        </button>
                                        <div class="modal fade" id="routineM" tabindex="-1" aria-labelledby="routine" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" style="font-size:170%; font-weight:800; color: #013d42;">Biologie de routine</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="infoservice">
                                                            <h5>Informations générales</h5>
                                                            ...
                                                        </div>
                                                        <div id="regleservice">
                                                            <h5>Règles</h5>
                                                            ...
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Cancérologie-->
                                    <div class="card card-body" style="background-color:#266b6b;">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cancerM"style="background-color:transparent;">
                                            Cancérologie
                                        </button>
                                        <div class="modal fade" id="cancerM" tabindex="-1" aria-labelledby="cancer" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" style="font-size:170%; font-weight:800; color: #013d42;">Cancérologie</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="infoservice">
                                                            <h5>Informations générales</h5>
                                                            ...
                                                        </div>
                                                        <div id="regleservice">
                                                            <h5>Règles</h5>
                                                            ...
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Gynécologie-->
                                    <div class="card card-body" style="background-color:#266b6b;">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#gynecoM"style="background-color:transparent;">
                                            Gynécologie
                                        </button>
                                        <div class="modal fade" id="gynecoM" tabindex="-1" aria-labelledby="gyneco" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" style="font-size:170%; font-weight:800; color: #013d42;">Gynécologie</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="infoservice">
                                                            <h5>Informations générales</h5>
                                                            ...
                                                        </div>
                                                        <div id="regleservice">
                                                            <h5>Règles</h5>
                                                            ...
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include 'footer.php' ?>
        <script src="index.js"></script>
    </body>
</html>