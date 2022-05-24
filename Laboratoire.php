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
                <div id="Darkmode"><button onclick="switchTheme()" title="Changer de thème de couleur">◐</button></div>
            </header>
            <section id="Milieu">
                <div class="Boites" id="boite">
                    <div id="infos">
                        <br>Lieu :<br><br>
                        10 Rue Sextius Michel, 75015 Paris<br>
                        Salle SC-101<br><br><br>
                        Téléphone<br><br>
                        +33 01 22 33 44 55<br><br><br>
                        Email :<br><br>
                        labo.biologie@omnessante.fr<br><br>
                    </div>
                    <div id="Services">
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Nos services
                        </button>
                        <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                                grabuge
                            </div><div class="card card-body">
                                fushica
                            </div><div class="card card-body">
                                dfbvdfvdfvsdcvjsdlk
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include 'footer.php' ?>
        <script src="index.js"></script>
        <script src="Account.js"></script>
    </body>
</html>