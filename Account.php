<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>OMNES Santé : Mon compte</title>
        <meta name="description" content="Mon compte Omnes Santé">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <link rel="stylesheet" href="Index.css">
        <link rel="stylesheet" href="Account.css">
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
                <div class="Boites">
                    <div class="SousBoites" style="max-width: 600px;">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-user-check"></i> Connection</a>
                                <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fas fa-user-plus"></i> Inscription</a>
                                <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-doctor" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fa-solid fa-user-doctor"></i> Medecin</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="ex-with-icons-content">
                            <?php if(!$_SESSION["LOGGED"]) :?>
                                <?php include 'loginU.php'?>
                                <?php include 'createAccountU.php' ?>
                                <?php include 'loginM.php' ?>
                            <?php else : ?>
                                
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script src="Index.js"></script>
        <script src="Account.js"></script>
    </body>
</html>