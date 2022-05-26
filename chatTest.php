<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>OMNES Santé : Les RDV de vos professionnels de santé</title>
        <meta name="description" content="Prenez facilement rendez-vous avec vos professionnels de santé et communiquez avec eux en direct.">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="Homepage.css">
        <link rel="icon" href="images/Decor/LogoOmnesSante2.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Arima Madurai">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/c6c9e611bb.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="Toutenhaut">
            <div id="GrosLogo"><div><a href="index.php"><img src="images/Decor/LogoOmnesSante2.png" alt="Omnes Santé" width="100px" height="100px"> OMNES Santé</a></div></div>>
            <div id="Darkmode"><button onclick="switchTheme();" title="Changer de thème de couleur">◐</button></div>
        <?php include 'Caroussel.php'?>
        </div>
        <div id="Wrapper">
            <?php include 'navBar.php'?>
            <section id="Milieu">
                <div class="Boites">
                    <?php include 'chat.php' ?>
                </div>
            </section>
        </div>
        <?php include 'footer.php' ?>
        <script src="Index.js"></script>
        <script src="Homepage.js"></script>
    </body>
</html>