<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>OMNES Santé : Les RDV de vos professionnels de santé</title>
        <meta name="description" content="Prenez facilement rendez-vous avec vos professionnels de santé et communiquez avec eux en direct.">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <link rel="stylesheet" href="Homepage.css">
        <link rel="icon" href="images/Decor/LogoOmnesSante2.ico">
    </head>
    <body>
        <div id="Toutenhaut">
            <div id="Darkmode"><button onclick="switchTheme()" title="Changer de thème de couleur">◐</button></div>
        <?php include 'Caroussel.php'?>
        </div>
        <div id="Wrapper">
            <?php include 'navBar.php'?>
            <section id="Milieu">
                <div class="Boites">
                    <h1>Informations de Santé publique</h1>
                    <div class="SousBoites">
                        <a class="twitter-timeline" data-lang="fr" data-width="700" data-height="800" data-dnt="true" data-theme="dark" href="https://twitter.com/Sante_Gouv?ref_src=twsrc%5Etfw">Tweets by Sante_Gouv</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                    <h1>Evolution Covid-19</h1>
                    <div class="SousBoites">
                        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                        <div class="elfsight-app-686ec0cf-49ae-4588-9233-c93b27af2f75"></div>
                    </div>
                    <h1>Evènement de la semaine</h1>
                    <p>Mettre une info bidon.</p>
                    <h1>Les spécialistes de santé Omnes Santé</h1>
                    <p>Carrousel supplémentaire ou simplement des fiches profil.</p>
                </div>
            </section>
        </div>
        <?php include 'footer.php' ?>
        <script src="Homepage.js"></script>
    </body>
</html>