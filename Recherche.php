<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>OMNES Santé : Mon compte</title>
    <meta name="description" content="Mon compte Omnes Santé">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <link rel="stylesheet" href="Index.css">
    <link rel="stylesheet" href="Recherche.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="icon" href="images/Decor/LogoOmnesSante2.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/c6c9e611bb.js" crossorigin="anonymous"></script>
    <?php include_once 'const.php' ?>
    <script src="index.js"></script>
    <script src="Medecins.js"></script>
</head>

<body>
    <div id="Wrapper">
        <header id="Header">
            <?php include 'navBar.php' ?>
            <?php include 'NavBarStatique.php' ?>
            <div id="Darkmode"><button onclick="switchTheme()" title="Changer de thème de couleur">◐</button></div>
        </header>
        <section id="Milieu">
            <div class="Boites">
                <h1>Résultat de la recherche</h1>
                <p>